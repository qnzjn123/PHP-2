<?php
// 청소년 고민 목록
$worries = [
    "친구와의 갈등 때문에 학교 가기가 두려워요",
    "부모님이 제 마음을 이해해주지 않는 것 같아요",
    "성적이 떨어져서 스트레스가 심해요",
    "외모 때문에 자신감이 없어요",
    "진로를 정하지 못해서 불안해요",
    "SNS에서 따돌림당하는 것 같아요",
    "시험 기간만 되면 불안하고 초조해요",
    "친구들과 비교되어서 우울해요",
    "부모님의 기대가 부담스러워요",
    "좋아하는 사람이 생겼는데 어떻게 해야 할지 모르겠어요",
    "학원 과제와 학교 숙제로 너무 힘들어요",
    "형제자매와 자주 싸워서 힘들어요",
    "왕따를 당할까봐 걱정돼요",
    "집중력이 떨어져서 공부가 안 돼요",
    "게임이나 스마트폰을 끊기가 어려워요",
    "미래가 불안하고 두려워요",
    "친구들 앞에서 발표하는 게 너무 무서워요",
    "내 꿈이 뭔지 모르겠어요",
    "선생님께 혼나는 게 무서워요",
    "다이어트를 해야 할 것 같은데 자신이 없어요"
];

// 날짜 기반으로 랜덤하게 5개 선택
$today = date('Y-m-d');
$seed = crc32($today);
mt_srand($seed);

$shuffled = $worries;
shuffle($shuffled);
$todayWorries = array_slice($shuffled, 0, 5);

// 힐링 콘텐츠 (짧은 위로)
$healingQuotes = [
    ["quote" => "괜찮아, 천천히 가도 돼. 네 속도가 제일 중요해.", "author" => ""],
    ["quote" => "힘들 땐 잠깐 쉬어가도 괜찮아. 쉬는 것도 노력이야.", "author" => ""],
    ["quote" => "네가 생각하는 것보다 넌 훨씬 잘하고 있어.", "author" => ""],
    ["quote" => "완벽하지 않아도 돼. 있는 그대로의 너도 충분히 소중해.", "author" => ""],
    ["quote" => "오늘 하루도 버텨낸 네가 대단해.", "author" => ""],
    ["quote" => "힘들 때는 혼자가 아니라는 걸 기억해.", "author" => ""],
    ["quote" => "네 감정은 소중하고, 네 이야기는 들을 가치가 있어.", "author" => ""],
    ["quote" => "지금 이 순간도 넌 최선을 다하고 있어.", "author" => ""],
    ["quote" => "실수해도 괜찮아. 그게 바로 성장하는 과정이야.", "author" => ""],
    ["quote" => "네가 느끼는 감정은 모두 당연한 거야.", "author" => ""],
    ["quote" => "힘들 땐 울어도 돼. 눈물도 치유의 한 방법이야.", "author" => ""],
    ["quote" => "작은 시작도 시작이야. 자신을 자랑스러워해.", "author" => ""],
    ["quote" => "네가 여기까지 온 것만으로도 충분히 용감해.", "author" => ""],
    ["quote" => "비교하지 마. 네 인생은 너만의 속도가 있어.", "author" => ""],
    ["quote" => "오늘의 실패는 내일의 성공을 위한 발걸음이야.", "author" => ""],
    ["quote" => "네 마음이 편한 게 가장 중요해.", "author" => ""],
    ["quote" => "포기하지 마. 내일은 오늘보다 나을 거야.", "author" => ""],
    ["quote" => "네가 느끼는 불안은 너만 겪는 게 아니야.", "author" => ""],
    ["quote" => "스스로를 사랑하는 연습을 해봐. 넌 충분히 사랑받을 자격이 있어.", "author" => ""],
    ["quote" => "지금 이 순간, 네가 숨 쉬고 있다는 것만으로도 의미 있어.", "author" => ""],
    ["quote" => "네 꿈은 이루어질 거야. 조금만 더 힘내.", "author" => ""],
    ["quote" => "힘들 때 도움을 청하는 건 약한 게 아니라 용기야.", "author" => ""],
    ["quote" => "네 존재 자체가 누군가에겐 큰 위로가 돼.", "author" => ""],
    ["quote" => "오늘 하루 잘 견뎌내서 고마워.", "author" => ""],
    ["quote" => "네가 느끼는 외로움은 일시적이야. 곧 지나갈 거야.", "author" => ""],
    ["quote" => "네 안의 빛을 믿어. 넌 충분히 빛나고 있어.", "author" => ""],
    ["quote" => "지금 이 순간을 견디는 네가 정말 멋져.", "author" => ""],
    ["quote" => "네 마음속 상처도 언젠가는 아물 거야.", "author" => ""],
    ["quote" => "혼자라고 느껴져도 널 응원하는 사람들이 있어.", "author" => ""],
    ["quote" => "네가 걷는 길에는 꽃이 피어날 거야.", "author" => ""],
];

// 날짜 기반으로 오늘의 위로 구문 선택 (매일 다르게)
$today = date('Y-m-d');
$quoteSeed = crc32($today);
mt_srand($quoteSeed);
$quoteIndex = mt_rand(0, count($healingQuotes) - 1);
$todayQuote = $healingQuotes[$quoteIndex];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마음친구</title>

    <!-- PWA 설정 -->
    <meta name="description" content="청소년을 위한 익명 고민 상담 플랫폼">
    <meta name="theme-color" content="#ff6b9d">
    <link rel="manifest" href="manifest.json">

    <!-- iOS 지원 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="마음친구">
    <link rel="apple-touch-icon" href="icon-192.png">

    <!-- 파비콘 -->
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="icon" type="image/png" sizes="192x192" href="icon-192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="icon-512.png">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            min-height: 100vh;
            background-color: #ffffff;
        }

        .main-content {
            padding: 40px;
            display: flex;
            justify-content: center;
            gap: 40px;
        }

        .banner-section {
            flex: 1;
            max-width: 800px;
        }

        .write-section {
            margin-top: 30px;
            text-align: center;
        }

        .write-worry-btn {
            width: 100%;
            padding: 40px;
            background: linear-gradient(135deg, #ff6b9d 0%, #ffa07a 100%);
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 32px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(255, 107, 157, 0.3);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .write-worry-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(255, 107, 157, 0.4);
        }

        .write-worry-btn:active {
            transform: translateY(-2px);
        }

        .anonymous-badge {
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.3);
            padding: 5px 15px;
            border-radius: 20px;
            margin-left: 10px;
        }

        /* PWA 설치 섹션 */
        .pwa-section {
            margin-top: 30px;
            padding: 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .pwa-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pwaGlow 3s ease-in-out infinite;
        }

        @keyframes pwaGlow {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(-20px, -20px); }
        }

        .pwa-content {
            position: relative;
            z-index: 1;
        }

        .pwa-icon {
            font-size: 60px;
            margin-bottom: 15px;
            display: inline-block;
            animation: pwaBounce 2s ease-in-out infinite;
        }

        @keyframes pwaBounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .pwa-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .pwa-description {
            font-size: 14px;
            margin-bottom: 20px;
            opacity: 0.9;
            line-height: 1.6;
        }

        .pwa-install-btn {
            background: white;
            color: #667eea;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            display: inline-block;
        }

        .pwa-install-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .pwa-install-btn:active {
            transform: translateY(-1px);
        }

        .pwa-status {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            font-size: 14px;
            margin-top: 15px;
        }

        .pwa-features {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .pwa-feature {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            opacity: 0.9;
        }

        /* 업데이트 알림 토스트 */
        .update-toast {
            display: none;
            position: fixed;
            bottom: 80px;
            right: 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            z-index: 9998;
            animation: slideInRight 0.5s ease;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .update-toast.show {
            display: block;
        }

        .update-toast-content {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .update-icon {
            font-size: 24px;
            animation: rotate 2s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .update-text {
            flex: 1;
        }

        .update-title {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .update-desc {
            font-size: 12px;
            opacity: 0.9;
        }

        .mood-section {
            margin-top: 30px;
            padding: 30px;
            background: linear-gradient(135deg, #fff5f7 0%, #ffffff 100%);
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(255, 107, 157, 0.1);
        }

        /* 모달 스타일 */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s ease;
        }

        .modal.show {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .modal-content {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.3s ease;
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
        }

        .close-btn {
            font-size: 30px;
            color: #999;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
            width: 30px;
            height: 30px;
            line-height: 30px;
        }

        .close-btn:hover {
            color: #ff6b9d;
        }

        .anonymous-info {
            background-color: #fff5f7;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #666;
            text-align: center;
        }

        .worry-textarea {
            width: 100%;
            min-height: 200px;
            padding: 20px;
            border: 2px solid #ffe0e8;
            border-radius: 15px;
            font-size: 16px;
            resize: vertical;
            font-family: inherit;
            margin-bottom: 20px;
        }

        .worry-textarea:focus {
            outline: none;
            border-color: #ff6b9d;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #ff6b9d, #ffa07a);
            border: none;
            border-radius: 15px;
            color: white;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 157, 0.3);
        }

        .submit-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        .char-count {
            text-align: right;
            font-size: 14px;
            color: #999;
            margin-bottom: 10px;
        }

        .password-input {
            width: 100%;
            padding: 15px;
            border: 2px solid #ffe0e8;
            border-radius: 15px;
            font-size: 16px;
            font-family: inherit;
            margin-bottom: 10px;
        }

        .password-input:focus {
            outline: none;
            border-color: #ff6b9d;
        }

        .password-info {
            font-size: 13px;
            color: #999;
            margin-bottom: 20px;
        }

        .warning-box {
            background-color: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            display: none;
        }

        .warning-box.show {
            display: block;
            animation: shake 0.5s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        .warning-icon {
            font-size: 20px;
            margin-right: 8px;
        }

        .warning-text {
            color: #856404;
            font-size: 14px;
            font-weight: 500;
        }

        .warning-list {
            margin-top: 10px;
            padding-left: 25px;
        }

        .warning-list li {
            color: #856404;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .category-section {
            margin-bottom: 20px;
        }

        .category-label {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            display: block;
        }

        .category-buttons {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .category-btn {
            padding: 12px 15px;
            background-color: white;
            border: 2px solid #ffe0e8;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            color: #666;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .category-btn:hover {
            border-color: #ff6b9d;
            color: #ff6b9d;
            transform: translateY(-2px);
        }

        .category-btn.selected {
            background: linear-gradient(135deg, #ff6b9d, #ffa07a);
            border-color: #ff6b9d;
            color: white;
        }

        .post-tag {
            display: inline-block;
            padding: 4px 12px;
            background-color: #fff5f7;
            border: 1px solid #ffe0e8;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 500;
            color: #ff6b9d;
            margin-right: 8px;
        }

        .tag-친구 {
            background-color: #e3f2fd;
            border-color: #90caf9;
            color: #1976d2;
        }

        .tag-연애 {
            background-color: #fce4ec;
            border-color: #f48fb1;
            color: #c2185b;
        }

        .tag-학업 {
            background-color: #f3e5f5;
            border-color: #ce93d8;
            color: #7b1fa2;
        }

        .tag-자존감 {
            background-color: #fff3e0;
            border-color: #ffb74d;
            color: #f57c00;
        }

        .tag-부모님 {
            background-color: #e8f5e9;
            border-color: #81c784;
            color: #388e3c;
        }

        .tag-진로 {
            background-color: #e0f2f1;
            border-color: #4db6ac;
            color: #00796b;
        }

        .delete-btn {
            background-color: #ff4444;
            border: none;
            padding: 5px 12px;
            border-radius: 20px;
            color: white;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-left: 10px;
        }

        .delete-btn:hover {
            background-color: #cc0000;
            transform: scale(1.05);
        }

        .mood-title {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .mood-buttons {
            display: flex;
            justify-content: space-around;
            gap: 15px;
        }

        .mood-btn {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 20px 10px;
            background-color: white;
            border: 2px solid #ffe0e8;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .mood-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(255, 107, 157, 0.2);
            border-color: #ff6b9d;
        }

        .mood-btn.selected {
            background: linear-gradient(135deg, #ff6b9d, #ffa07a);
            border-color: #ff6b9d;
        }

        .mood-btn.selected .mood-emoji {
            transform: scale(1.2);
        }

        .mood-btn.selected .mood-label {
            color: white;
            font-weight: 700;
        }

        .mood-emoji {
            font-size: 40px;
            transition: all 0.3s ease;
        }

        .mood-label {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            transition: all 0.3s ease;
        }

        .mood-message {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #ff6b9d;
            font-weight: 500;
            min-height: 20px;
        }

        .posts-section {
            margin-top: 30px;
            padding: 30px;
            background: linear-gradient(135deg, #fff5f7 0%, #ffffff 100%);
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(255, 107, 157, 0.1);
        }

        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tab-btn {
            flex: 1;
            padding: 12px 20px;
            background-color: white;
            border: 2px solid #ffe0e8;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            color: #666;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-btn:hover {
            border-color: #ff6b9d;
            color: #ff6b9d;
        }

        .tab-btn.active {
            background: linear-gradient(135deg, #ff6b9d, #ffa07a);
            border-color: #ff6b9d;
            color: white;
        }

        .posts-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .post-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: white;
            border: 1px solid #ffe0e8;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .post-item:hover {
            transform: translateX(5px);
            border-color: #ff6b9d;
            box-shadow: 0 4px 8px rgba(255, 107, 157, 0.15);
        }

        .post-title {
            font-size: 15px;
            color: #333;
            font-weight: 500;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            margin-top: 5px;
        }

        .post-item > div:first-child {
            flex: 1;
        }

        .post-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-left: 15px;
        }

        .post-date {
            font-size: 13px;
            color: #999;
        }

        .like-btn {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 5px 12px;
            background-color: #fff5f7;
            border: 1px solid #ffe0e8;
            border-radius: 20px;
            font-size: 14px;
            color: #666;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .like-btn:hover {
            background-color: #ffe0e8;
            border-color: #ff6b9d;
        }

        .like-btn.liked {
            background: linear-gradient(135deg, #ff6b9d, #ffa07a);
            border-color: #ff6b9d;
            color: white;
        }

        .like-icon {
            font-size: 16px;
        }

        .empty-posts {
            text-align: center;
            padding: 40px;
            color: #999;
            font-size: 15px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .banner-slider {
            position: relative;
            width: 100%;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(255, 107, 157, 0.2);
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px;
        }

        .slide.active {
            opacity: 1;
        }

        .slide1 {
            background: linear-gradient(135deg, #ff6b9d 0%, #ffa07a 100%);
        }

        .slide2 {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        }

        .slide3 {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        }

        .slide4 {
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
        }

        .slide-content h2 {
            font-size: 36px;
            color: white;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .slide-content p {
            font-size: 18px;
            color: white;
            line-height: 1.6;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            color: #ff6b9d;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .slider-arrow:hover {
            background-color: white;
            transform: translateY(-50%) scale(1.1);
        }

        .slider-arrow.prev {
            left: 20px;
        }

        .slider-arrow.next {
            right: 20px;
        }

        .slider-dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background-color: white;
            width: 30px;
            border-radius: 6px;
        }

        .worry-section {
            width: 400px;
            flex-shrink: 0;
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .section-subtitle {
            font-size: 14px;
            color: #999;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .live-indicator {
            display: inline-block;
            width: 8px;
            height: 8px;
            background-color: #ff4444;
            border-radius: 50%;
            animation: pulse 1.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }

        .worry-card {
            background: linear-gradient(135deg, #fff 0%, #fff5f7 100%);
            border: 1px solid #ffe0e8;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 4px 6px rgba(255, 107, 157, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .worry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(255, 107, 157, 0.2);
            border-color: #ff6b9d;
        }

        .worry-rank {
            display: inline-block;
            width: 30px;
            height: 30px;
            background: linear-gradient(135deg, #ff6b9d, #ffa07a);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-weight: 700;
            font-size: 14px;
            margin-right: 12px;
        }

        .worry-text {
            display: inline-block;
            vertical-align: top;
            width: calc(100% - 45px);
            color: #333;
            font-size: 15px;
            line-height: 30px;
        }

        .update-time {
            text-align: right;
            font-size: 12px;
            color: #999;
            margin-top: 20px;
        }

        .healing-section {
            margin-top: 30px;
            padding: 30px;
            background: linear-gradient(135deg, #fff9e6 0%, #fffaf0 100%);
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(255, 193, 107, 0.15);
            text-align: center;
        }

        .healing-title {
            font-size: 18px;
            font-weight: 700;
            color: #ff9800;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .healing-icon {
            font-size: 24px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .healing-quote {
            font-size: 17px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
            font-weight: 500;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 15px;
            border-left: 4px solid #ff9800;
        }

        .healing-author {
            font-size: 13px;
            color: #999;
            font-style: italic;
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

        /* 채팅 모달 */
        .chat-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            right: 20px;
            bottom: 20px;
            width: 400px;
            height: 600px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            animation: slideUpChat 0.3s ease;
            flex-direction: column;
        }

        .chat-modal.show {
            display: flex;
        }

        @keyframes slideUpChat {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .chat-header {
            padding: 20px;
            background: linear-gradient(135deg, #ff6b9d, #ffa07a);
            color: white;
            border-radius: 20px 20px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-header h3 {
            margin: 0;
            font-size: 18px;
        }

        .chat-close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            padding: 0;
            width: 30px;
            height: 30px;
        }

        .chat-close-btn:hover {
            opacity: 0.8;
        }

        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #fafafa;
        }

        .chat-message {
            margin-bottom: 15px;
            animation: fadeInMessage 0.3s ease;
        }

        @keyframes fadeInMessage {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .chat-message.my-message {
            text-align: right;
        }

        .message-sender {
            font-size: 12px;
            color: #999;
            margin-bottom: 5px;
        }

        .message-bubble {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 15px;
            max-width: 70%;
            word-wrap: break-word;
        }

        .chat-message.my-message .message-bubble {
            background: linear-gradient(135deg, #ff6b9d, #ffa07a);
            color: white;
        }

        .chat-message:not(.my-message) .message-bubble {
            background-color: white;
            color: #333;
            border: 1px solid #ffe0e8;
        }

        .message-time {
            font-size: 11px;
            color: #999;
            margin-top: 5px;
        }

        .chat-input-area {
            padding: 15px;
            background-color: white;
            border-top: 1px solid #ffe0e8;
            border-radius: 0 0 20px 20px;
        }

        .chat-input-wrapper {
            display: flex;
            gap: 10px;
        }

        .chat-input {
            flex: 1;
            padding: 12px 15px;
            border: 2px solid #ffe0e8;
            border-radius: 20px;
            font-size: 14px;
            font-family: inherit;
        }

        .chat-input:focus {
            outline: none;
            border-color: #ff6b9d;
        }

        .chat-send-btn {
            padding: 12px 20px;
            background: linear-gradient(135deg, #ff6b9d, #ffa07a);
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chat-send-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 157, 0.3);
        }

        .chat-send-btn:active {
            transform: translateY(0);
        }

        .empty-chat {
            text-align: center;
            color: #999;
            padding: 40px 20px;
            font-size: 14px;
        }

        /* 소개글 모달 */
        .intro-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s ease;
            overflow-y: auto;
        }

        .intro-modal.show {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .intro-content {
            background-color: white;
            padding: 0;
            border-radius: 30px;
            width: 90%;
            max-width: 800px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.3s ease;
            overflow: hidden;
        }

        .intro-header {
            background: linear-gradient(135deg, #ff6b9d 0%, #ffa07a 100%);
            color: white;
            padding: 40px;
            text-align: center;
            position: relative;
        }

        .intro-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.3);
            border: none;
            color: white;
            font-size: 28px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .intro-close:hover {
            background: rgba(255, 255, 255, 0.5);
            transform: rotate(90deg);
        }

        .intro-header h2 {
            margin: 0 0 15px 0;
            font-size: 36px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .intro-header p {
            margin: 0;
            font-size: 18px;
            opacity: 0.95;
        }

        .intro-body {
            padding: 40px;
        }

        .intro-section {
            margin-bottom: 40px;
        }

        .intro-section:last-child {
            margin-bottom: 0;
        }

        .intro-section-title {
            font-size: 24px;
            font-weight: 700;
            color: #ff6b9d;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .intro-section-icon {
            font-size: 28px;
        }

        .intro-text {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .feature-card {
            background: linear-gradient(135deg, #fff5f7 0%, #ffffff 100%);
            border: 2px solid #ffe0e8;
            border-radius: 15px;
            padding: 25px;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(255, 107, 157, 0.2);
            border-color: #ff6b9d;
        }

        .feature-icon {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .feature-title {
            font-size: 18px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .feature-desc {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        .highlight-box {
            background: linear-gradient(135deg, #ff6b9d 0%, #ffa07a 100%);
            color: white;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            margin-top: 30px;
        }

        .highlight-box h3 {
            margin: 0 0 15px 0;
            font-size: 24px;
        }

        .highlight-box p {
            margin: 0;
            font-size: 16px;
            line-height: 1.8;
            opacity: 0.95;
        }

        .values-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .value-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 20px;
            background-color: #fafafa;
            border-radius: 12px;
            border-left: 4px solid #ff6b9d;
        }

        .value-emoji {
            font-size: 24px;
            flex-shrink: 0;
        }

        .value-content h4 {
            margin: 0 0 8px 0;
            font-size: 16px;
            color: #333;
        }

        .value-content p {
            margin: 0;
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .feature-grid {
                grid-template-columns: 1fr;
            }
        }

        /* 투표 모달 */
        .vote-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s ease;
            overflow-y: auto;
        }

        .vote-modal.show {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .vote-content {
            background-color: white;
            padding: 0;
            border-radius: 30px;
            width: 90%;
            max-width: 700px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.3s ease;
            overflow: hidden;
        }

        .vote-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            text-align: center;
            position: relative;
        }

        .vote-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.3);
            border: none;
            color: white;
            font-size: 28px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .vote-close:hover {
            background: rgba(255, 255, 255, 0.5);
            transform: rotate(90deg);
        }

        .vote-header h2 {
            margin: 0 0 15px 0;
            font-size: 32px;
        }

        .vote-header p {
            margin: 0;
            font-size: 16px;
            opacity: 0.95;
        }

        .vote-body {
            padding: 40px;
        }

        .poll-item {
            margin-bottom: 40px;
            padding: 30px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .poll-question {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .poll-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .poll-option {
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .poll-option:hover {
            transform: translateX(5px);
        }

        .poll-option-bar {
            position: relative;
            background-color: white;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .poll-option.voted .poll-option-bar {
            border-color: #667eea;
        }

        .poll-option-fill {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            transition: width 0.5s ease;
            width: 0;
        }

        .poll-option-content {
            position: relative;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1;
        }

        .poll-option-text {
            font-size: 15px;
            font-weight: 500;
            color: #333;
        }

        .poll-option.voted .poll-option-text {
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .poll-option-percent {
            font-size: 14px;
            font-weight: 700;
            color: #666;
        }

        .poll-option.voted .poll-option-percent {
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .poll-total-votes {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
            color: #999;
        }

        .poll-status {
            text-align: center;
            margin-top: 10px;
            font-size: 13px;
            color: #667eea;
            font-weight: 600;
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
            <button onclick="toggleChat()">실시간 채팅</button>
            <button onclick="toggleIntro()">소개</button>
            <a href="vote.php">투표</a>
        </div>
        <div class="online-users">
            <span class="online-indicator"></span>
            <span class="online-count">
                <span class="online-count-number" id="onlineCount">0</span>명 접속중
            </span>
        </div>
    </div>

    <div class="main-content">
        <div class="banner-section">
            <div class="banner-slider">
                <div class="slide slide1 active">
                    <div class="slide-content">
                        <h2>마음친구와 함께해요</h2>
                        <p>혼자 고민하지 마세요<br>우리가 함께 있어요</p>
                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-content">
                        <h2>너의 마음을 들어줄게</h2>
                        <p>어떤 고민이든 괜찮아요<br>편하게 이야기해요</p>
                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-content">
                        <h2>우리 모두 소중해요</h2>
                        <p>당신의 감정은 중요해요<br>함께 이겨내요</p>
                    </div>
                </div>
                <div class="slide slide4">
                    <div class="slide-content">
                        <h2>따뜻한 위로를 전해요</h2>
                        <p>힘든 순간, 우리가 함께해요<br>언제든 말해주세요</p>
                    </div>
                </div>

                <button class="slider-arrow prev" onclick="changeSlide(-1)">&#10094;</button>
                <button class="slider-arrow next" onclick="changeSlide(1)">&#10095;</button>

                <div class="slider-dots">
                    <span class="dot active" onclick="currentSlide(0)"></span>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>

            <div class="write-section">
                <button class="write-worry-btn" onclick="openWriteModal()">
                    고민 적기 ✍️
                    <span class="anonymous-badge">익명</span>
                </button>
            </div>

            <!-- PWA 간편 설치 섹션 -->
            <div class="pwa-section" id="pwaSection">
                <div class="pwa-content">
                    <div class="pwa-icon">📱</div>
                    <h3 class="pwa-title">📲 앱으로 간편 설치</h3>
                    <p class="pwa-description">
                        버튼 클릭 한 번으로 설치!<br>
                        <strong style="color: #fff; font-size: 16px;">설치 후 → 바탕화면/앱 목록에서 "마음친구" 찾기</strong>
                    </p>
                    <button class="pwa-install-btn" id="pwaInstallBtn" onclick="installPWA()">
                        📱 1초 만에 설치하기
                    </button>
                    <div class="pwa-status" id="pwaStatus" style="margin-top: 12px; font-size: 13px;">
                        버튼 클릭 → 설치 팝업 → 설치 완료!
                    </div>
                </div>
            </div>

            <div class="mood-section">
                <h3 class="mood-title">오늘 기분 기록</h3>
                <div class="mood-buttons">
                    <div class="mood-btn" onclick="selectMood(this, '행복')">
                        <span class="mood-emoji">😊</span>
                        <span class="mood-label">행복</span>
                    </div>
                    <div class="mood-btn" onclick="selectMood(this, '그냥저냥')">
                        <span class="mood-emoji">😐</span>
                        <span class="mood-label">그냥저냥</span>
                    </div>
                    <div class="mood-btn" onclick="selectMood(this, '우울')">
                        <span class="mood-emoji">😞</span>
                        <span class="mood-label">우울</span>
                    </div>
                    <div class="mood-btn" onclick="selectMood(this, '화남')">
                        <span class="mood-emoji">😡</span>
                        <span class="mood-label">화남</span>
                    </div>
                    <div class="mood-btn" onclick="selectMood(this, '불안')">
                        <span class="mood-emoji">😣</span>
                        <span class="mood-label">불안</span>
                    </div>
                </div>
                <div class="mood-message" id="moodMessage"></div>
            </div>

            <div class="posts-section">
                <div class="tabs">
                    <button class="tab-btn active" onclick="switchTab('popular')">🔥 인기글</button>
                    <button class="tab-btn" onclick="switchTab('recent')">📝 최신글</button>
                </div>

                <div id="popularTab" class="tab-content active">
                    <div class="posts-list" id="popularPosts">
                        <div class="empty-posts">아직 작성된 글이 없습니다</div>
                    </div>
                </div>

                <div id="recentTab" class="tab-content">
                    <div class="posts-list" id="recentPosts">
                        <div class="empty-posts">아직 작성된 글이 없습니다</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="worry-section">
            <h2 class="section-title">오늘의 고민 TOP 5</h2>
            <p class="section-subtitle">
                <span class="live-indicator"></span>
                실시간 인기 고민
            </p>

            <?php foreach($todayWorries as $index => $worry): ?>
            <div class="worry-card">
                <span class="worry-rank"><?php echo $index + 1; ?></span>
                <span class="worry-text"><?php echo htmlspecialchars($worry); ?></span>
            </div>
            <?php endforeach; ?>

            <div class="update-time">
                <?php echo date('Y년 m월 d일 업데이트'); ?>
            </div>
        </div>

        <div class="healing-section">
            <h3 class="healing-title">
                <span class="healing-icon">🌸</span>
                오늘의 위로
            </h3>
            <div class="healing-quote">
                <?php echo htmlspecialchars($todayQuote['quote']); ?>
            </div>
            <?php if (!empty($todayQuote['author'])): ?>
                <div class="healing-author">- <?php echo htmlspecialchars($todayQuote['author']); ?></div>
            <?php endif; ?>
        </div>
    </div>

    <!-- 투표 모달 -->
    <div id="voteModal" class="vote-modal">
        <div class="vote-content">
            <div class="vote-header">
                <button class="vote-close" onclick="toggleVote()">&times;</button>
                <h2>📊 청소년 고민 투표</h2>
                <p>여러분의 의견을 들려주세요!</p>
            </div>
            <div class="vote-body" id="voteBody">
                <!-- 투표 항목들이 여기에 동적으로 생성됩니다 -->
            </div>
        </div>
    </div>

    <!-- 소개글 모달 -->
    <div id="introModal" class="intro-modal">
        <div class="intro-content">
            <div class="intro-header">
                <button class="intro-close" onclick="toggleIntro()">&times;</button>
                <h2>💖 마음친구와 함께해요</h2>
                <p>청소년 여러분의 마음을 이해하고 함께 걷겠습니다</p>
            </div>
            <div class="intro-body">
                <div class="intro-section">
                    <div class="intro-section-title">
                        <span class="intro-section-icon">🌟</span>
                        <span>마음친구는 무엇인가요?</span>
                    </div>
                    <p class="intro-text">
                        마음친구는 청소년 여러분이 일상에서 겪는 다양한 고민과 감정을 편하게 나누고,
                        서로 위로하며 공감할 수 있는 안전한 공간입니다.
                        혼자 고민하기 힘들 때, 누군가와 이야기하고 싶을 때,
                        언제든지 찾아올 수 있는 여러분의 따뜻한 친구가 되어드립니다.
                    </p>
                </div>

                <div class="intro-section">
                    <div class="intro-section-title">
                        <span class="intro-section-icon">✨</span>
                        <span>제공하는 서비스</span>
                    </div>
                    <div class="feature-grid">
                        <div class="feature-card">
                            <div class="feature-icon">✍️</div>
                            <div class="feature-title">익명 고민 상담</div>
                            <p class="feature-desc">
                                완전 익명으로 고민을 작성하고 공유할 수 있어요.
                                친구, 연애, 학업, 진로 등 어떤 고민이든 괜찮아요.
                            </p>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">💬</div>
                            <div class="feature-title">실시간 채팅</div>
                            <p class="feature-desc">
                                같은 고민을 가진 친구들과 실시간으로 대화하며
                                서로 위로하고 공감할 수 있어요.
                            </p>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">😊</div>
                            <div class="feature-title">감정 기록</div>
                            <p class="feature-desc">
                                매일 내 감정을 기록하고, 마음의 변화를
                                스스로 돌아볼 수 있어요.
                            </p>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">🔥</div>
                            <div class="feature-title">인기 고민 공유</div>
                            <p class="feature-desc">
                                많은 친구들이 공감한 고민을 보며
                                나만 그런 게 아니구나 위로받을 수 있어요.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="intro-section">
                    <div class="intro-section-title">
                        <span class="intro-section-icon">💎</span>
                        <span>우리의 약속</span>
                    </div>
                    <div class="values-list">
                        <div class="value-item">
                            <span class="value-emoji">🔒</span>
                            <div class="value-content">
                                <h4>완전한 익명성 보장</h4>
                                <p>개인정보는 전혀 수집하지 않아요. 여러분의 고민은 안전하게 보호됩니다.</p>
                            </div>
                        </div>
                        <div class="value-item">
                            <span class="value-emoji">🤝</span>
                            <div class="value-content">
                                <h4>상호 존중과 배려</h4>
                                <p>모든 고민과 감정은 소중해요. 서로를 존중하고 배려하는 문화를 만들어갑니다.</p>
                            </div>
                        </div>
                        <div class="value-item">
                            <span class="value-emoji">💕</span>
                            <div class="value-content">
                                <h4>따뜻한 공감과 위로</h4>
                                <p>비난이나 조롱 없이, 진심 어린 공감과 위로를 나누는 공간을 지향합니다.</p>
                            </div>
                        </div>
                        <div class="value-item">
                            <span class="value-emoji">🌈</span>
                            <div class="value-content">
                                <h4>건강한 성장 지원</h4>
                                <p>여러분의 건강한 성장과 긍정적인 변화를 응원합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="highlight-box">
                    <h3>🌸 혼자가 아니에요</h3>
                    <p>
                        힘들고 외로울 때, 누구에게도 말하지 못한 고민이 있을 때,<br>
                        마음친구가 여러분 곁에 있습니다.<br>
                        지금 이 순간 여러분의 마음을 이야기해주세요.<br>
                        우리가 함께 듣고, 함께 공감하며, 함께 이겨낼게요. 💪
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- 채팅 모달 -->
    <div id="chatModal" class="chat-modal">
        <div class="chat-header">
            <h3>💬 실시간 채팅</h3>
            <button class="chat-close-btn" onclick="toggleChat()">&times;</button>
        </div>
        <div class="chat-messages" id="chatMessages">
            <div class="empty-chat">아직 채팅 메시지가 없습니다.<br>첫 메시지를 보내보세요!</div>
        </div>
        <div class="chat-input-area">
            <div class="chat-input-wrapper">
                <input
                    type="text"
                    id="chatInput"
                    class="chat-input"
                    placeholder="메시지를 입력하세요..."
                    maxlength="200"
                    onkeypress="handleChatKeyPress(event)"
                />
                <button class="chat-send-btn" onclick="sendMessage()">전송</button>
            </div>
        </div>
    </div>

    <!-- 고민 작성 모달 -->
    <div id="writeModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">익명 고민 작성</h2>
                <button class="close-btn" onclick="closeWriteModal()">&times;</button>
            </div>
            <div class="anonymous-info">
                🔒 완전 익명으로 작성됩니다. 안심하고 이야기해주세요.
            </div>

            <div id="warningBox" class="warning-box">
                <div class="warning-text">
                    <span class="warning-icon">⚠️</span>
                    <strong>부적절한 내용이 감지되었습니다</strong>
                </div>
                <ul class="warning-list" id="warningList"></ul>
            </div>

            <div class="category-section">
                <label class="category-label">고민 카테고리를 선택해주세요</label>
                <div class="category-buttons">
                    <button type="button" class="category-btn" onclick="selectCategory(this, '친구')">
                        👥 친구 고민
                    </button>
                    <button type="button" class="category-btn" onclick="selectCategory(this, '연애')">
                        💕 연애 고민
                    </button>
                    <button type="button" class="category-btn" onclick="selectCategory(this, '학업')">
                        📚 학업 스트레스
                    </button>
                    <button type="button" class="category-btn" onclick="selectCategory(this, '자존감')">
                        💎 자존감 고민
                    </button>
                    <button type="button" class="category-btn" onclick="selectCategory(this, '부모님')">
                        👨‍👩‍👧 부모님 갈등
                    </button>
                    <button type="button" class="category-btn" onclick="selectCategory(this, '진로')">
                        🎯 진로 고민
                    </button>
                </div>
            </div>

            <textarea
                id="worryText"
                class="worry-textarea"
                placeholder="어떤 고민이든 편하게 적어주세요...&#10;여러분의 이야기를 들려주세요."
                maxlength="1000"
                oninput="updateCharCount()"
            ></textarea>
            <div class="char-count">
                <span id="charCount">0</span> / 1000
            </div>
            <input
                type="password"
                id="worryPassword"
                class="password-input"
                placeholder="삭제용 비밀번호 (4자리 이상)"
                minlength="4"
            />
            <div class="password-info">💡 나중에 글을 삭제할 때 필요합니다</div>
            <button class="submit-btn" onclick="submitWorry()">고민 등록하기</button>
        </div>
    </div>

    <script>
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        function showSlide(index) {
            if (index >= slides.length) {
                currentSlideIndex = 0;
            } else if (index < 0) {
                currentSlideIndex = slides.length - 1;
            } else {
                currentSlideIndex = index;
            }

            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[currentSlideIndex].classList.add('active');
            dots[currentSlideIndex].classList.add('active');
        }

        function changeSlide(direction) {
            showSlide(currentSlideIndex + direction);
        }

        function currentSlide(index) {
            showSlide(index);
        }

        // 자동 슬라이드
        setInterval(() => {
            changeSlide(1);
        }, 5000);

        // 감정 선택 기능
        function selectMood(element, mood) {
            // 모든 버튼에서 selected 클래스 제거
            document.querySelectorAll('.mood-btn').forEach(btn => {
                btn.classList.remove('selected');
            });

            // 선택한 버튼에 selected 클래스 추가
            element.classList.add('selected');

            // 메시지 표시
            const messages = {
                '행복': '오늘 기분이 좋으시네요! 😊',
                '그냥저냥': '평범한 하루도 괜찮아요 😐',
                '우울': '힘든 날도 있어요. 함께 이겨내요 😞',
                '화남': '화가 나는 건 당연해요. 천천히 진정해봐요 😡',
                '불안': '불안한 마음, 함께 나눠요 😣'
            };

            document.getElementById('moodMessage').textContent = messages[mood];

            // 로컬스토리지에 저장
            const today = new Date().toISOString().split('T')[0];
            localStorage.setItem('mood_' + today, mood);
        }

        // 실시간 접속자 관리
        const ONLINE_TIMEOUT = 5 * 60 * 1000; // 5분
        const HEARTBEAT_INTERVAL = 10 * 1000; // 10초

        function updateOnlineStatus() {
            const userId = getUserId();
            const now = Date.now();

            // 현재 접속자 목록 가져오기
            let onlineUsers = JSON.parse(localStorage.getItem('onlineUsers') || '{}');

            // 현재 사용자 정보 업데이트
            onlineUsers[userId] = {
                lastSeen: now,
                anonymous: true
            };

            // 5분 이상 비활성 사용자 제거
            Object.keys(onlineUsers).forEach(uid => {
                if (now - onlineUsers[uid].lastSeen > ONLINE_TIMEOUT) {
                    delete onlineUsers[uid];
                }
            });

            // 저장
            localStorage.setItem('onlineUsers', JSON.stringify(onlineUsers));

            // 접속자 수 표시
            const onlineCount = Object.keys(onlineUsers).length;
            document.getElementById('onlineCount').textContent = onlineCount;

            return onlineCount;
        }

        // 주기적으로 heartbeat 전송
        function startHeartbeat() {
            updateOnlineStatus();
            setInterval(updateOnlineStatus, HEARTBEAT_INTERVAL);
        }

        // storage 이벤트 리스너 (다른 탭에서 변경 감지)
        window.addEventListener('storage', (e) => {
            if (e.key === 'onlineUsers') {
                updateOnlineStatus();
            }
        });

        // 페이지 언로드 시 (선택적 - 바로 제거하지 않고 타임아웃으로 처리)
        window.addEventListener('beforeunload', () => {
            // 즉시 제거하지 않음 - 새로고침과 실제 종료를 구분하기 어려우므로
            // ONLINE_TIMEOUT으로 자동 정리됨
        });

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

        // 투표 모달
        function toggleVote() {
            const voteModal = document.getElementById('voteModal');
            if (voteModal.classList.contains('show')) {
                voteModal.classList.remove('show');
            } else {
                voteModal.classList.add('show');
                loadPolls();
            }
        }

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
            const voteBody = document.getElementById('voteBody');
            const userVotes = JSON.parse(localStorage.getItem('userVotes') || '{}');

            voteBody.innerHTML = polls.map(poll => {
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
                        <div class="poll-total-votes">총 ${totalVotes}명 참여</div>
                        ${hasVoted ? '<div class="poll-status">✅ 투표 완료</div>' : '<div class="poll-status">투표해주세요!</div>'}
                    </div>
                `;
            }).join('');
        }

        // 투표하기
        function vote(pollId, optionId) {
            const userVotes = JSON.parse(localStorage.getItem('userVotes') || '{}');

            // 이미 투표했는지 확인
            if (userVotes[pollId]) {
                alert('이미 투표하셨습니다!');
                return;
            }

            // 투표 처리
            const poll = polls.find(p => p.id === pollId);
            const option = poll.options.find(o => o.id === optionId);
            option.votes++;

            // 저장
            userVotes[pollId] = optionId;
            localStorage.setItem('userVotes', JSON.stringify(userVotes));
            localStorage.setItem('polls', JSON.stringify(polls));

            // 다시 렌더링
            renderPolls();
        }

        // 모달 외부 클릭 시 투표 닫기
        document.addEventListener('click', (e) => {
            const voteModal = document.getElementById('voteModal');
            if (e.target === voteModal) {
                toggleVote();
            }
        });

        // 소개글 모달
        function toggleIntro() {
            const introModal = document.getElementById('introModal');
            if (introModal.classList.contains('show')) {
                introModal.classList.remove('show');
            } else {
                introModal.classList.add('show');
            }
        }

        // 모달 외부 클릭 시 소개글 닫기
        document.addEventListener('click', (e) => {
            const introModal = document.getElementById('introModal');
            if (e.target === introModal) {
                toggleIntro();
            }
        });

        // 채팅 기능
        let chatUpdateInterval = null;

        function toggleChat() {
            const chatModal = document.getElementById('chatModal');
            if (chatModal.classList.contains('show')) {
                chatModal.classList.remove('show');
                if (chatUpdateInterval) {
                    clearInterval(chatUpdateInterval);
                    chatUpdateInterval = null;
                }
            } else {
                chatModal.classList.add('show');
                loadChatMessages();
                // 실시간 업데이트 시작
                chatUpdateInterval = setInterval(loadChatMessages, 2000);
                // 포커스
                setTimeout(() => {
                    document.getElementById('chatInput').focus();
                }, 100);
            }
        }

        function getAnonymousName() {
            let anonymousName = localStorage.getItem('anonymousName');
            if (!anonymousName) {
                // 랜덤 익명 이름 생성
                const randomNum = Math.floor(Math.random() * 9999) + 1;
                anonymousName = `익명${randomNum}`;
                localStorage.setItem('anonymousName', anonymousName);
            }
            return anonymousName;
        }

        function sendMessage() {
            const input = document.getElementById('chatInput');
            const message = input.value.trim();

            if (message === '') {
                return;
            }

            // 메시지 객체 생성
            const chatMessage = {
                id: Date.now(),
                sender: getAnonymousName(),
                senderId: getUserId(),
                text: message,
                timestamp: new Date().toISOString()
            };

            // 기존 메시지 가져오기
            const messages = JSON.parse(localStorage.getItem('chatMessages') || '[]');

            // 최대 100개 메시지만 유지
            if (messages.length >= 100) {
                messages.shift();
            }

            messages.push(chatMessage);
            localStorage.setItem('chatMessages', JSON.stringify(messages));

            // 입력창 초기화
            input.value = '';

            // 메시지 다시 로드
            loadChatMessages();
        }

        function loadChatMessages() {
            const messages = JSON.parse(localStorage.getItem('chatMessages') || '[]');
            const container = document.getElementById('chatMessages');
            const currentUserId = getUserId();

            if (messages.length === 0) {
                container.innerHTML = '<div class="empty-chat">아직 채팅 메시지가 없습니다.<br>첫 메시지를 보내보세요!</div>';
                return;
            }

            // 최근 50개만 표시
            const recentMessages = messages.slice(-50);

            container.innerHTML = recentMessages.map(msg => {
                const date = new Date(msg.timestamp);
                const timeStr = `${date.getHours().toString().padStart(2, '0')}:${date.getMinutes().toString().padStart(2, '0')}`;
                const isMyMessage = msg.senderId === currentUserId;

                return `
                    <div class="chat-message ${isMyMessage ? 'my-message' : ''}">
                        ${!isMyMessage ? `<div class="message-sender">${escapeHtml(msg.sender)}</div>` : ''}
                        <div class="message-bubble">${escapeHtml(msg.text)}</div>
                        <div class="message-time">${timeStr}</div>
                    </div>
                `;
            }).join('');

            // 스크롤을 맨 아래로
            container.scrollTop = container.scrollHeight;
        }

        function handleChatKeyPress(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        }

        // storage 이벤트로 다른 탭의 메시지 실시간 수신
        window.addEventListener('storage', (e) => {
            if (e.key === 'chatMessages') {
                const chatModal = document.getElementById('chatModal');
                if (chatModal.classList.contains('show')) {
                    loadChatMessages();
                }
            }
        });

        // 페이지 로드 시 오늘 기분 불러오기
        window.addEventListener('load', () => {
            const today = new Date().toISOString().split('T')[0];
            const savedMood = localStorage.getItem('mood_' + today);

            if (savedMood) {
                const moodButtons = document.querySelectorAll('.mood-btn');
                moodButtons.forEach(btn => {
                    if (btn.querySelector('.mood-label').textContent === savedMood) {
                        btn.classList.add('selected');
                        const messages = {
                            '행복': '오늘 기분이 좋으시네요! 😊',
                            '그냥저냥': '평범한 하루도 괜찮아요 😐',
                            '우울': '힘든 날도 있어요. 함께 이겨내요 😞',
                            '화남': '화가 나는 건 당연해요. 천천히 진정해봐요 😡',
                            '불안': '불안한 마음, 함께 나눠요 😣'
                        };
                        document.getElementById('moodMessage').textContent = messages[savedMood];
                    }
                });
            }

            // 게시글 로드
            loadPosts();

            // 실시간 접속자 시작
            startHeartbeat();
        });

        // 고민 작성 모달 열기
        function openWriteModal() {
            document.getElementById('writeModal').classList.add('show');
            document.getElementById('worryText').focus();
        }

        // 고민 작성 모달 닫기
        function closeWriteModal() {
            document.getElementById('writeModal').classList.remove('show');
            document.getElementById('worryText').value = '';
            document.getElementById('worryPassword').value = '';
            updateCharCount();

            // 카테고리 선택 초기화
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('selected');
            });
            selectedCategory = '';

            // 경고 박스 숨기기
            document.getElementById('warningBox').classList.remove('show');
        }

        // 글자 수 업데이트 및 실시간 체크
        function updateCharCount() {
            const text = document.getElementById('worryText').value;
            document.getElementById('charCount').textContent = text.length;

            // 실시간 욕설/비난 체크 (글자 수가 10자 이상일 때만)
            if (text.length >= 10) {
                const warnings = checkBadContent(text);
                showWarning(warnings);
            } else {
                document.getElementById('warningBox').classList.remove('show');
            }
        }

        // 욕설 및 비난 감지 봇
        const badWords = [
            // 욕설
            '씨발', '시발', '병신', '개새', '지랄', '꺼져', '죽어', '미친',
            '또라이', '새끼', '년', '놈', '븅신', '바보', '멍청', '쓰레기',
            // 비난/혐오
            '혐오', '차별', '따돌', '왕따', '무시', '멸시'
        ];

        const negativePatterns = [
            /너\s*(때문|탓)/,
            /다\s*죽/,
            /꺼\s*져/,
            /닥\s*쳐/,
            /엿\s*먹/
        ];

        function checkBadContent(text) {
            const warnings = [];
            const lowerText = text.toLowerCase();

            // 욕설 체크
            const foundBadWords = badWords.filter(word =>
                text.includes(word) || lowerText.includes(word)
            );

            if (foundBadWords.length > 0) {
                warnings.push('욕설이 포함되어 있습니다. 서로 존중하는 마음으로 이야기해주세요.');
            }

            // 비난 패턴 체크
            const hasNegativePattern = negativePatterns.some(pattern =>
                pattern.test(text)
            );

            if (hasNegativePattern) {
                warnings.push('비난하는 표현이 포함되어 있습니다. 따뜻한 말로 표현해주세요.');
            }

            // 과도한 대문자나 특수문자 반복
            if (/[!@#$%^&*]{5,}/.test(text) || /[ㄱ-ㅎㅏ-ㅣ]{5,}/.test(text)) {
                warnings.push('과도한 특수문자나 자음/모음 반복이 있습니다.');
            }

            return warnings;
        }

        function showWarning(warnings) {
            const warningBox = document.getElementById('warningBox');
            const warningList = document.getElementById('warningList');

            if (warnings.length > 0) {
                warningList.innerHTML = warnings.map(w => `<li>${w}</li>`).join('');
                warningBox.classList.add('show');
                return true;
            } else {
                warningBox.classList.remove('show');
                return false;
            }
        }

        // 카테고리 선택
        let selectedCategory = '';

        function selectCategory(element, category) {
            // 모든 카테고리 버튼에서 selected 클래스 제거
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('selected');
            });

            // 선택한 버튼에 selected 클래스 추가
            element.classList.add('selected');
            selectedCategory = category;
        }

        // 고민 제출
        function submitWorry() {
            const worryText = document.getElementById('worryText').value.trim();
            const password = document.getElementById('worryPassword').value;

            if (worryText === '') {
                alert('고민 내용을 입력해주세요.');
                return;
            }

            // 욕설 및 비난 체크
            const warnings = checkBadContent(worryText);
            if (showWarning(warnings)) {
                alert('⚠️ 부적절한 내용이 포함되어 있습니다.\n\n마음친구는 서로 존중하고 위로하는 공간입니다.\n따뜻한 말로 다시 작성해주세요.');
                return;
            }

            if (!selectedCategory) {
                alert('고민 카테고리를 선택해주세요.');
                return;
            }

            if (password.length < 4) {
                alert('비밀번호는 4자리 이상 입력해주세요.');
                return;
            }

            // 비밀번호 해시화 (간단한 해시)
            const hashedPassword = simpleHash(password);

            // 로컬스토리지에 저장
            const worries = JSON.parse(localStorage.getItem('worries') || '[]');
            const userId = getUserId();
            const newWorry = {
                id: Date.now(),
                text: worryText,
                category: selectedCategory,
                date: new Date().toISOString(),
                anonymous: true,
                likes: 0,
                likedBy: [],
                password: hashedPassword,
                authorId: userId
            };
            worries.unshift(newWorry);
            localStorage.setItem('worries', JSON.stringify(worries));

            alert('고민이 등록되었습니다! 💕\n따뜻한 마음으로 함께할게요.');
            closeWriteModal();
            loadPosts();

            // 최신글 탭으로 자동 전환
            switchTabDirect('recent');
        }

        // 간단한 해시 함수
        function simpleHash(str) {
            let hash = 0;
            for (let i = 0; i < str.length; i++) {
                const char = str.charCodeAt(i);
                hash = ((hash << 5) - hash) + char;
                hash = hash & hash;
            }
            return hash.toString();
        }

        // 탭 전환
        function switchTab(tab) {
            // 탭 버튼 활성화
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            event.target.classList.add('active');

            // 탭 컨텐츠 표시
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });

            if (tab === 'popular') {
                document.getElementById('popularTab').classList.add('active');
            } else {
                document.getElementById('recentTab').classList.add('active');
            }
        }

        // 직접 탭 전환 (이벤트 없이)
        function switchTabDirect(tab) {
            // 탭 버튼 활성화
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });

            const tabButtons = document.querySelectorAll('.tab-btn');
            if (tab === 'popular') {
                tabButtons[0].classList.add('active');
            } else {
                tabButtons[1].classList.add('active');
            }

            // 탭 컨텐츠 표시
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });

            if (tab === 'popular') {
                document.getElementById('popularTab').classList.add('active');
            } else {
                document.getElementById('recentTab').classList.add('active');
            }
        }

        // 게시글 불러오기
        function loadPosts() {
            const worries = JSON.parse(localStorage.getItem('worries') || '[]');

            // 최신글 (날짜순)
            const recentPosts = [...worries].sort((a, b) => new Date(b.date) - new Date(a.date));
            displayPosts(recentPosts, 'recentPosts');

            // 인기글 (좋아요가 1개 이상인 글만, 좋아요순)
            const popularPosts = [...worries]
                .filter(post => post.likes > 0)
                .sort((a, b) => b.likes - a.likes);
            displayPosts(popularPosts, 'popularPosts');
        }

        // 게시글 표시
        function displayPosts(posts, containerId) {
            const container = document.getElementById(containerId);

            if (posts.length === 0) {
                container.innerHTML = '<div class="empty-posts">아직 작성된 글이 없습니다</div>';
                return;
            }

            container.innerHTML = posts.map(post => {
                const date = new Date(post.date);
                const dateStr = `${date.getMonth() + 1}/${date.getDate()}`;
                const userId = getUserId();
                const isLiked = post.likedBy && post.likedBy.includes(userId);
                const isAuthor = post.authorId === userId;
                const category = post.category || '';
                const categoryEmoji = {
                    '친구': '👥',
                    '연애': '💕',
                    '학업': '📚',
                    '자존감': '💎',
                    '부모님': '👨‍👩‍👧',
                    '진로': '🎯'
                };

                return `
                    <div class="post-item" onclick="viewPost(${post.id})">
                        <div>
                            ${category ? `<span class="post-tag tag-${category}">${categoryEmoji[category]} ${category}</span>` : ''}
                            <div class="post-title">${escapeHtml(post.text)}</div>
                        </div>
                        <div class="post-meta">
                            <span class="post-date">${dateStr}</span>
                            <button class="like-btn ${isLiked ? 'liked' : ''}" onclick="toggleLike(event, ${post.id})">
                                <span class="like-icon">${isLiked ? '❤️' : '🤍'}</span>
                                <span>${post.likes || 0}</span>
                            </button>
                            ${isAuthor ? `<button class="delete-btn" onclick="deletePost(event, ${post.id})">삭제</button>` : ''}
                        </div>
                    </div>
                `;
            }).join('');
        }

        // 게시글 삭제
        function deletePost(event, postId) {
            event.stopPropagation();

            const worries = JSON.parse(localStorage.getItem('worries') || '[]');
            const post = worries.find(w => w.id === postId);

            if (!post) {
                alert('게시글을 찾을 수 없습니다.');
                return;
            }

            const userId = getUserId();
            if (post.authorId !== userId) {
                alert('본인이 작성한 글만 삭제할 수 있습니다.');
                return;
            }

            const password = prompt('삭제하려면 비밀번호를 입력하세요:');
            if (!password) return;

            const hashedPassword = simpleHash(password);

            if (hashedPassword !== post.password) {
                alert('비밀번호가 일치하지 않습니다.');
                return;
            }

            if (confirm('정말로 삭제하시겠습니까?')) {
                const updatedWorries = worries.filter(w => w.id !== postId);
                localStorage.setItem('worries', JSON.stringify(updatedWorries));
                alert('게시글이 삭제되었습니다.');
                loadPosts();
            }
        }

        // 좋아요 토글
        function toggleLike(event, postId) {
            event.stopPropagation();

            const worries = JSON.parse(localStorage.getItem('worries') || '[]');
            const post = worries.find(w => w.id === postId);

            if (!post) return;

            const userId = getUserId();
            if (!post.likedBy) post.likedBy = [];

            if (post.likedBy.includes(userId)) {
                // 좋아요 취소
                post.likedBy = post.likedBy.filter(id => id !== userId);
                post.likes = Math.max(0, (post.likes || 0) - 1);
            } else {
                // 좋아요 추가
                post.likedBy.push(userId);
                post.likes = (post.likes || 0) + 1;
            }

            localStorage.setItem('worries', JSON.stringify(worries));
            loadPosts();
        }

        // 게시글 보기
        function viewPost(postId) {
            const worries = JSON.parse(localStorage.getItem('worries') || '[]');
            const post = worries.find(w => w.id === postId);

            if (post) {
                const date = new Date(post.date);
                const dateStr = `${date.getFullYear()}년 ${date.getMonth() + 1}월 ${date.getDate()}일`;
                const categoryText = post.category ? `\n카테고리: ${post.category}` : '';
                alert(`익명의 고민${categoryText}\n\n${post.text}\n\n작성일: ${dateStr}\n좋아요: ${post.likes || 0}`);
            }
        }

        // 사용자 ID 가져오기 (없으면 생성)
        function getUserId() {
            let userId = localStorage.getItem('userId');
            if (!userId) {
                userId = 'user_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
                localStorage.setItem('userId', userId);
            }
            return userId;
        }

        // HTML 이스케이프
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        // 모달 외부 클릭 시 닫기
        window.onclick = function(event) {
            const modal = document.getElementById('writeModal');
            if (event.target === modal) {
                closeWriteModal();
            }
        }
    </script>

    <!-- 업데이트 알림 토스트 -->
    <div class="update-toast" id="updateToast">
        <div class="update-toast-content">
            <div class="update-icon">🔄</div>
            <div class="update-text">
                <div class="update-title">새 버전 발견!</div>
                <div class="update-desc">페이지를 새로고침하는 중...</div>
            </div>
        </div>
    </div>

    <!-- PWA Service Worker 등록 및 설치 알림 -->
    <script>
        // PWA 전역 변수
        let deferredPrompt;
        let swRegistration = null;

        // Service Worker 등록 및 자동 업데이트
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/service-worker.js')
                    .then(registration => {
                        console.log('✅ Service Worker 등록 성공:', registration);
                        swRegistration = registration;

                        // 업데이트 확인 (1분마다)
                        setInterval(() => {
                            registration.update();
                        }, 60000);

                        // 업데이트 감지
                        registration.addEventListener('updatefound', () => {
                            const newWorker = registration.installing;
                            console.log('🔄 새 버전 발견!');

                            newWorker.addEventListener('statechange', () => {
                                if (newWorker.state === 'installed' && navigator.serviceWorker.controller) {
                                    // 새 버전이 설치됨
                                    showUpdateToast();

                                    // 3초 후 자동 새로고침
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 3000);
                                }
                            });
                        });
                    })
                    .catch(error => {
                        console.log('❌ Service Worker 등록 실패:', error);
                    });

                // 컨트롤러 변경 감지 (Service Worker가 활성화됨)
                navigator.serviceWorker.addEventListener('controllerchange', () => {
                    console.log('🔄 Service Worker 업데이트됨');
                });
            });
        }

        // 업데이트 토스트 표시
        function showUpdateToast() {
            const toast = document.getElementById('updateToast');
            toast.classList.add('show');
            console.log('🎉 업데이트 알림 표시');
        }

        // PWA 설치 상태 확인 (간편 버전)
        function updatePWAStatus() {
            const pwaBtn = document.getElementById('pwaInstallBtn');
            const pwaStatus = document.getElementById('pwaStatus');

            if (!pwaBtn || !pwaStatus) return;

            // 이미 설치된 경우
            if (window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone) {
                pwaBtn.textContent = '✅ 설치됨';
                pwaBtn.disabled = true;
                pwaBtn.style.opacity = '0.6';
                pwaBtn.style.cursor = 'not-allowed';
                pwaBtn.style.background = 'linear-gradient(135deg, #4CAF50 0%, #45a049 100%)';
                pwaStatus.textContent = '시작 메뉴에서 "마음친구" 검색!';
                pwaStatus.style.background = 'rgba(76, 175, 80, 0.3)';
                return;
            }

            // iOS 사용자
            const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent);
            if (isIOS) {
                pwaBtn.textContent = '📱 iPhone 설치 방법';
                pwaStatus.textContent = 'Safari에서 공유버튼(↑) 클릭';
                return;
            }

            // 기본 상태
            pwaBtn.disabled = false;
            pwaStatus.textContent = '버튼 클릭 → 설치 팝업 → 설치 완료!';
        }

        // PWA 설치 함수 (간편 버전)
        async function installPWA() {
            const pwaBtn = document.getElementById('pwaInstallBtn');
            const pwaStatus = document.getElementById('pwaStatus');

            // 이미 설치된 경우
            if (window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone) {
                alert('✅ 이미 설치되어 있습니다!\n\n🔍 앱 찾는 방법:\n• Windows: 시작 메뉴에서 "마음친구" 검색\n• 바탕화면에 아이콘 확인\n• 앱 목록에서 찾기');
                return;
            }

            // iOS 사용자 간편 안내
            const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent);
            if (isIOS) {
                alert('📱 iPhone 설치 방법 (3단계)\n\n1️⃣ Safari 하단 공유버튼(↑) 클릭\n2️⃣ "홈 화면에 추가" 선택\n3️⃣ 완료! 홈 화면에서 실행');
                return;
            }

            // deferredPrompt가 없으면 대기
            if (!deferredPrompt) {
                pwaBtn.textContent = '⏳ 준비 중...';
                pwaStatus.textContent = '잠시만 기다려주세요...';

                // 3초만 대기
                let waitCount = 0;
                const waitInterval = setInterval(() => {
                    waitCount++;
                    if (deferredPrompt) {
                        clearInterval(waitInterval);
                        installPWA(); // 자동 재시도
                    } else if (waitCount >= 30) { // 3초
                        clearInterval(waitInterval);
                        pwaBtn.textContent = '📱 1초 만에 설치하기';
                        pwaBtn.disabled = false;

                        // 간단한 대체 안내
                        alert('💡 설치 방법\n\n1️⃣ 주소창 오른쪽 아이콘 클릭\n2️⃣ "설치" 버튼 클릭\n\n또는 Chrome 브라우저 사용 권장');
                        pwaStatus.textContent = '주소창에서 설치하거나 Chrome 사용';
                    }
                }, 100);
                return;
            }

            // 설치 진행
            try {
                pwaBtn.textContent = '📥 설치 중...';
                pwaBtn.disabled = true;
                pwaStatus.textContent = '팝업이 나타나면 "설치" 클릭!';

                await deferredPrompt.prompt();
                const { outcome } = await deferredPrompt.userChoice;

                if (outcome === 'accepted') {
                    // 설치 성공!
                    pwaBtn.textContent = '✅ 설치 완료!';
                    pwaBtn.style.background = 'linear-gradient(135deg, #4CAF50 0%, #45a049 100%)';
                    pwaStatus.textContent = '🎉 설치 성공!';
                    pwaStatus.style.background = 'rgba(76, 175, 80, 0.3)';

                    // 상세 안내
                    setTimeout(() => {
                        alert('🎉 설치 완료!\n\n📍 앱 찾는 방법:\n\n【 Windows 】\n• 시작 메뉴 → "마음친구" 검색\n• 바탕화면 확인\n• 작업표시줄에 고정 가능\n\n【 Android 】\n• 앱 서랍에서 "마음친구"\n• 홈 화면에 추가됨\n\n지금 바로 사용해보세요! 💕');
                    }, 500);

                    setTimeout(() => {
                        pwaBtn.style.opacity = '0.6';
                        pwaBtn.style.cursor = 'not-allowed';
                    }, 2000);
                } else {
                    // 설치 취소
                    pwaBtn.textContent = '📱 1초 만에 설치하기';
                    pwaBtn.disabled = false;
                    pwaStatus.textContent = '버튼 클릭 → 설치 팝업 → 설치 완료!';
                }

                deferredPrompt = null;
            } catch (error) {
                console.error('설치 오류:', error);
                pwaBtn.textContent = '📱 1초 만에 설치하기';
                pwaBtn.disabled = false;
                pwaStatus.textContent = '다시 시도해주세요';
                alert('⚠️ 오류 발생\n\n다시 시도하거나\nChrome 브라우저를 사용해주세요!');
            }
        }

        // beforeinstallprompt 이벤트 리스너 (간편 버전)
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            console.log('✅ PWA 설치 준비 완료!');

            const pwaBtn = document.getElementById('pwaInstallBtn');
            const pwaStatus = document.getElementById('pwaStatus');

            if (pwaBtn && pwaStatus) {
                pwaBtn.disabled = false;
                pwaBtn.style.opacity = '1';
                pwaBtn.style.cursor = 'pointer';
                pwaStatus.textContent = '👆 지금 클릭하면 바로 설치됩니다!';
                pwaStatus.style.background = 'rgba(76, 175, 80, 0.3)';
                pwaStatus.style.fontWeight = '700';

                // 눈에 띄는 애니메이션
                pwaBtn.style.animation = 'pulse 1.2s ease-in-out 5';
            }
        });

        // appinstalled 이벤트 리스너
        window.addEventListener('appinstalled', () => {
            console.log('🎉 PWA가 설치되었습니다');
            updatePWAStatus();
        });

        // 페이지 로드 시 PWA 상태 확인
        window.addEventListener('load', () => {
            updatePWAStatus();
        });
    </script>
</body>
</html>
