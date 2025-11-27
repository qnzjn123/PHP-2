<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>투표 - 마음친구</title>

    <!-- 파비콘 -->
    <link rel="icon" type="image/svg+xml" href="favicon.svg">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .menu-bar {
            width: 100%;
            background-color: #ffffff;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-icon {
            width: 35px;
            height: 35px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: #ff6b9d;
            letter-spacing: -0.5px;
        }

        .menu-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 30px;
        }

        .menu-center a,
        .menu-center button {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            font-weight: 500;
            background: none;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .menu-center a:hover,
        .menu-center button:hover {
            color: #ff6b9d;
        }

        .menu-center a.active {
            color: #667eea;
            font-weight: 700;
        }

        .online-users {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: linear-gradient(135deg, #fff5f7 0%, #ffe8f0 100%);
            border: 2px solid #ffe0e8;
            border-radius: 20px;
        }

        .online-indicator {
            width: 10px;
            height: 10px;
            background-color: #4caf50;
            border-radius: 50%;
            animation: pulse-green 2s ease-in-out infinite;
        }

        @keyframes pulse-green {
            0%, 100% {
                opacity: 1;
                transform: scale(1);
            }
            50% {
                opacity: 0.6;
                transform: scale(1.2);
            }
        }

        .online-count {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }

        .online-count-number {
            color: #ff6b9d;
            font-size: 16px;
            font-weight: 700;
        }

        .vote-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .vote-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .vote-header h1 {
            font-size: 42px;
            color: #667eea;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .vote-header p {
            font-size: 18px;
            color: #666;
        }

        .polls-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 30px;
        }

        .poll-item {
            padding: 35px;
            background: white;
            border-radius: 25px;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.15);
            transition: all 0.3s ease;
        }

        .poll-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(102, 126, 234, 0.25);
        }

        .poll-question {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            text-align: center;
            padding-bottom: 15px;
            border-bottom: 3px solid #667eea;
        }

        .poll-options {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .poll-option {
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .poll-option:hover {
            transform: translateX(8px);
        }

        .poll-option-bar {
            position: relative;
            background-color: #f5f7fa;
            border: 2px solid #e0e0e0;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .poll-option.voted .poll-option-bar {
            border-color: #667eea;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }

        .poll-option-fill {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            transition: width 0.6s ease;
            width: 0;
        }

        .poll-option-content {
            position: relative;
            padding: 18px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1;
        }

        .poll-option-text {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .poll-option.voted .poll-option-text {
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .poll-option-percent {
            font-size: 16px;
            font-weight: 700;
            color: #666;
        }

        .poll-option.voted .poll-option-percent {
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .poll-footer {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .poll-total-votes {
            font-size: 14px;
            color: #999;
        }

        .poll-status {
            font-size: 14px;
            font-weight: 700;
        }

        .poll-status.voted {
            color: #667eea;
        }

        .poll-status.pending {
            color: #ff9800;
        }

        /* 통계 섹션 */
        .stats-section {
            display: none;
            margin-top: 60px;
            padding: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 30px;
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
        }

        .stats-section.show {
            display: block;
            animation: slideUp 0.5s ease;
        }

        .stats-header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
        }

        .stats-header h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .stats-header p {
            font-size: 18px;
            opacity: 0.95;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.3);
        }

        .stat-icon {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .stat-value {
            font-size: 42px;
            font-weight: 700;
            color: white;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }

        .top-choices {
            background: rgba(255, 255, 255, 0.15);
            padding: 35px;
            border-radius: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .top-choices-title {
            font-size: 28px;
            font-weight: 700;
            color: white;
            margin-bottom: 25px;
            text-align: center;
        }

        .top-choice-item {
            background: white;
            padding: 20px 25px;
            border-radius: 15px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .top-choice-item:last-child {
            margin-bottom: 0;
        }

        .top-choice-rank {
            font-size: 24px;
            font-weight: 700;
            color: #667eea;
            margin-right: 15px;
        }

        .top-choice-content {
            flex: 1;
        }

        .top-choice-question {
            font-size: 14px;
            color: #999;
            margin-bottom: 5px;
        }

        .top-choice-answer {
            font-size: 18px;
            font-weight: 700;
            color: #333;
        }

        .top-choice-percent {
            font-size: 20px;
            font-weight: 700;
            color: #667eea;
        }

        .completion-badge {
            text-align: center;
            margin-top: 30px;
        }

        .badge {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(135deg, #ffd89b 0%, #19547b 100%);
            color: white;
            font-size: 20px;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        @media (max-width: 768px) {
            .polls-grid {
                grid-template-columns: 1fr;
            }

            .vote-header h1 {
                font-size: 32px;
            }

            .stats-section {
                padding: 30px 20px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="menu-bar">
        <a href="index.php" class="logo">
            <svg class="logo-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <defs>
                    <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#ff6b9d;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#ffa07a;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M50,85 C50,85 15,60 15,40 C15,30 20,20 30,20 C37,20 43,24 50,32 C57,24 63,20 70,20 C80,20 85,30 85,40 C85,60 50,85 50,85 Z"
                      fill="url(#logoGradient)"
                      stroke="#ff1493"
                      stroke-width="2"/>
                <circle cx="35" cy="35" r="3" fill="white" opacity="0.8"/>
                <circle cx="42" cy="30" r="2" fill="white" opacity="0.6"/>
            </svg>
            <span class="logo-text">마음친구</span>
        </a>
        <div class="menu-center">
            <a href="index.php">홈</a>
            <a href="vote.php" class="active">투표</a>
        </div>
        <div class="online-users">
            <span class="online-indicator"></span>
            <span class="online-count">
                <span class="online-count-number" id="onlineCount">0</span>명 접속중
            </span>
        </div>
    </div>

    <div class="vote-container">
        <div class="vote-header">
            <h1>📊 청소년 고민 투표</h1>
            <p>여러분의 소중한 의견을 들려주세요!</p>
        </div>

        <div class="polls-grid" id="pollsGrid">
            <!-- 투표 항목들이 여기에 동적으로 생성됩니다 -->
        </div>

        <!-- 통계 섹션 -->
        <div class="stats-section" id="statsSection">
            <div class="stats-header">
                <h2>🎉 투표 완료!</h2>
                <p>모든 투표에 참여해주셔서 감사합니다. 전체 통계를 확인해보세요!</p>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">📊</div>
                    <div class="stat-value" id="totalParticipants">0</div>
                    <div class="stat-label">총 참여 투표 수</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">✅</div>
                    <div class="stat-value" id="completionRate">100%</div>
                    <div class="stat-label">완료율</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">👥</div>
                    <div class="stat-value" id="totalVoters">0</div>
                    <div class="stat-label">전체 투표자</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">🏆</div>
                    <div class="stat-value">4/4</div>
                    <div class="stat-label">참여 항목</div>
                </div>
            </div>

            <div class="top-choices">
                <div class="top-choices-title">🌟 각 항목별 1위 선택</div>
                <div id="topChoicesList">
                    <!-- 1위 선택들이 여기에 표시됩니다 -->
                </div>
            </div>

            <div class="completion-badge">
                <div class="badge">🎖️ 투표 참여 완료 배지 획득!</div>
            </div>
        </div>
    </div>

    <script>
        // 투표 데이터
        const polls = [
            {
                id: 'poll1',
                question: '🤔 가장 힘든 고민은?',
                options: [
                    { id: 'p1o1', text: '친구 관계', votes: 0 },
                    { id: 'p1o2', text: '학업 스트레스', votes: 0 },
                    { id: 'p1o3', text: '진로 고민', votes: 0 },
                    { id: 'p1o4', text: '가족 문제', votes: 0 }
                ]
            },
            {
                id: 'poll2',
                question: '💬 가장 듣고 싶은 말은?',
                options: [
                    { id: 'p2o1', text: '잘하고 있어', votes: 0 },
                    { id: 'p2o2', text: '괜찮아, 힘내', votes: 0 },
                    { id: 'p2o3', text: '네 편이야', votes: 0 },
                    { id: 'p2o4', text: '충분히 잘했어', votes: 0 }
                ]
            },
            {
                id: 'poll3',
                question: '🎯 스트레스 해소 방법은?',
                options: [
                    { id: 'p3o1', text: '음악 듣기', votes: 0 },
                    { id: 'p3o2', text: '운동하기', votes: 0 },
                    { id: 'p3o3', text: '친구와 대화', votes: 0 },
                    { id: 'p3o4', text: '게임/영상 보기', votes: 0 }
                ]
            },
            {
                id: 'poll4',
                question: '❤️ 친구에게 가장 중요한 것은?',
                options: [
                    { id: 'p4o1', text: '공감과 경청', votes: 0 },
                    { id: 'p4o2', text: '신뢰와 믿음', votes: 0 },
                    { id: 'p4o3', text: '재미와 유머', votes: 0 },
                    { id: 'p4o4', text: '솔직함', votes: 0 }
                ]
            }
        ];

        // 실시간 접속자 관리
        const ONLINE_TIMEOUT = 5 * 60 * 1000;
        const HEARTBEAT_INTERVAL = 10 * 1000;

        function getUserId() {
            let userId = localStorage.getItem('userId');
            if (!userId) {
                userId = 'user_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
                localStorage.setItem('userId', userId);
            }
            return userId;
        }

        function updateOnlineStatus() {
            const userId = getUserId();
            const now = Date.now();
            let onlineUsers = JSON.parse(localStorage.getItem('onlineUsers') || '{}');
            onlineUsers[userId] = { lastSeen: now, anonymous: true };

            Object.keys(onlineUsers).forEach(uid => {
                if (now - onlineUsers[uid].lastSeen > ONLINE_TIMEOUT) {
                    delete onlineUsers[uid];
                }
            });

            localStorage.setItem('onlineUsers', JSON.stringify(onlineUsers));
            const onlineCount = Object.keys(onlineUsers).length;
            document.getElementById('onlineCount').textContent = onlineCount;
            return onlineCount;
        }

        function startHeartbeat() {
            updateOnlineStatus();
            setInterval(updateOnlineStatus, HEARTBEAT_INTERVAL);
        }

        window.addEventListener('storage', (e) => {
            if (e.key === 'onlineUsers') {
                updateOnlineStatus();
            }
        });

        // 투표 데이터 로드
        function loadPolls() {
            const savedPolls = localStorage.getItem('polls');
            if (savedPolls) {
                const savedData = JSON.parse(savedPolls);
                savedData.forEach(savedPoll => {
                    const poll = polls.find(p => p.id === savedPoll.id);
                    if (poll) {
                        poll.options = savedPoll.options;
                    }
                });
            }
            renderPolls();
        }

        // 투표 렌더링
        function renderPolls() {
            const pollsGrid = document.getElementById('pollsGrid');
            const userVotes = JSON.parse(localStorage.getItem('userVotes') || '{}');

            pollsGrid.innerHTML = polls.map(poll => {
                const totalVotes = poll.options.reduce((sum, opt) => sum + opt.votes, 0);
                const hasVoted = userVotes[poll.id];

                return `
                    <div class="poll-item">
                        <div class="poll-question">${poll.question}</div>
                        <div class="poll-options">
                            ${poll.options.map(option => {
                                const percentage = totalVotes > 0 ? Math.round((option.votes / totalVotes) * 100) : 0;
                                const isVoted = hasVoted === option.id;

                                return `
                                    <div class="poll-option ${isVoted ? 'voted' : ''}" onclick="vote('${poll.id}', '${option.id}')">
                                        <div class="poll-option-bar">
                                            <div class="poll-option-fill" style="width: ${percentage}%"></div>
                                            <div class="poll-option-content">
                                                <span class="poll-option-text">${option.text}</span>
                                                <span class="poll-option-percent">${percentage}%</span>
                                            </div>
                                        </div>
                                    </div>
                                `;
                            }).join('')}
                        </div>
                        <div class="poll-footer">
                            <div class="poll-total-votes">총 ${totalVotes}명 참여</div>
                            <div class="poll-status ${hasVoted ? 'voted' : 'pending'}">
                                ${hasVoted ? '✅ 투표 완료' : '투표해주세요!'}
                            </div>
                        </div>
                    </div>
                `;
            }).join('');

            // 통계 체크 및 표시
            checkAndShowStats();
        }

        // 통계 체크 및 표시
        function checkAndShowStats() {
            const userVotes = JSON.parse(localStorage.getItem('userVotes') || '{}');
            const votedCount = Object.keys(userVotes).length;

            // 모든 투표를 완료했는지 확인
            if (votedCount === polls.length) {
                showStats();
            } else {
                document.getElementById('statsSection').classList.remove('show');
            }
        }

        // 통계 표시
        function showStats() {
            const statsSection = document.getElementById('statsSection');
            statsSection.classList.add('show');

            // 총 투표 수 계산
            let totalVotes = 0;
            polls.forEach(poll => {
                totalVotes += poll.options.reduce((sum, opt) => sum + opt.votes, 0);
            });

            // 통계 업데이트
            document.getElementById('totalParticipants').textContent = polls.length;

            // 평균 투표자 수 계산
            const avgVoters = Math.round(totalVotes / polls.length);
            document.getElementById('totalVoters').textContent = avgVoters;

            // 각 항목별 1위 선택 표시
            const topChoicesList = document.getElementById('topChoicesList');
            const topChoices = polls.map((poll, index) => {
                // 가장 많은 득표를 한 옵션 찾기
                const topOption = poll.options.reduce((max, opt) =>
                    opt.votes > max.votes ? opt : max
                , poll.options[0]);

                const totalPollVotes = poll.options.reduce((sum, opt) => sum + opt.votes, 0);
                const percentage = totalPollVotes > 0 ? Math.round((topOption.votes / totalPollVotes) * 100) : 0;

                return `
                    <div class="top-choice-item">
                        <div class="top-choice-rank">${index + 1}위</div>
                        <div class="top-choice-content">
                            <div class="top-choice-question">${poll.question}</div>
                            <div class="top-choice-answer">${topOption.text}</div>
                        </div>
                        <div class="top-choice-percent">${percentage}%</div>
                    </div>
                `;
            });

            topChoicesList.innerHTML = topChoices.join('');

            // 통계 섹션으로 스크롤
            setTimeout(() => {
                statsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 300);
        }

        // 투표하기
        function vote(pollId, optionId) {
            const userVotes = JSON.parse(localStorage.getItem('userVotes') || '{}');

            if (userVotes[pollId]) {
                alert('이미 투표하셨습니다!');
                return;
            }

            const poll = polls.find(p => p.id === pollId);
            const option = poll.options.find(o => o.id === optionId);
            option.votes++;

            userVotes[pollId] = optionId;
            localStorage.setItem('userVotes', JSON.stringify(userVotes));
            localStorage.setItem('polls', JSON.stringify(polls));

            renderPolls();

            // 투표 완료 체크
            const votedCount = Object.keys(userVotes).length;
            if (votedCount === polls.length) {
                setTimeout(() => {
                    alert('🎉 모든 투표를 완료했습니다!\n아래에서 전체 통계를 확인해보세요!');
                }, 500);
            }
        }

        // 페이지 로드
        window.addEventListener('load', () => {
            loadPolls();
            startHeartbeat();
        });

        // storage 이벤트 리스너
        window.addEventListener('storage', (e) => {
            if (e.key === 'polls' || e.key === 'userVotes') {
                loadPolls();
            }
        });
    </script>
</body>
</html>
