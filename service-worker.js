// 버전 관리 (파일 수정 시 버전 번호를 올리면 자동 업데이트됨)
const CACHE_VERSION = 'v1.0.1';
const CACHE_NAME = `maeum-chingu-${CACHE_VERSION}`;

// 캐시할 파일 목록
const urlsToCache = [
  '/',
  '/index.php',
  '/vote.php',
  '/favicon.svg',
  '/manifest.json',
  '/icon-192.png',
  '/icon-512.png'
];

// 설치 이벤트 - 새로운 Service Worker 설치
self.addEventListener('install', event => {
  console.log(`🔧 Service Worker ${CACHE_VERSION} 설치 중...`);

  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('✅ 캐시 열기 성공');
        return cache.addAll(urlsToCache);
      })
      .then(() => {
        console.log(`✅ Service Worker ${CACHE_VERSION} 설치 완료`);
        // 즉시 활성화
        return self.skipWaiting();
      })
  );
});

// 활성화 이벤트 - 오래된 캐시 삭제
self.addEventListener('activate', event => {
  console.log(`🚀 Service Worker ${CACHE_VERSION} 활성화 중...`);

  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheName !== CACHE_NAME) {
            console.log('🗑️ 오래된 캐시 삭제:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
    .then(() => {
      console.log(`✅ Service Worker ${CACHE_VERSION} 활성화 완료`);
      // 모든 클라이언트 즉시 제어
      return self.clients.claim();
    })
  );
});

// 페치 이벤트 - 네트워크 우선 전략 (항상 최신 데이터)
self.addEventListener('fetch', event => {
  event.respondWith(
    fetch(event.request)
      .then(response => {
        // 성공적인 응답은 캐시에 저장
        if (response && response.status === 200) {
          const responseToCache = response.clone();
          caches.open(CACHE_NAME).then(cache => {
            cache.put(event.request, responseToCache);
          });
        }
        return response;
      })
      .catch(() => {
        // 네트워크 실패 시 캐시에서 가져오기 (오프라인 지원)
        return caches.match(event.request)
          .then(response => {
            if (response) {
              console.log('📦 캐시에서 로드:', event.request.url);
              return response;
            }
            // 캐시에도 없으면 기본 오프라인 페이지 (선택사항)
            return new Response('오프라인 상태입니다.', {
              status: 503,
              statusText: 'Service Unavailable',
              headers: new Headers({
                'Content-Type': 'text/plain; charset=utf-8'
              })
            });
          });
      })
  );
});

// 메시지 이벤트 - 클라이언트와 통신
self.addEventListener('message', event => {
  if (event.data && event.data.type === 'SKIP_WAITING') {
    self.skipWaiting();
  }
});