<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirajes Salakin Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #0f0f0f;
            color: white;
        }

        .main-section {
            padding: 60px 50px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 70vh;
        }

        .main-section h1.big-title {
            font-size: 15rem;
            font-weight: 900;
            letter-spacing: -8px;
            margin: 0;
            color: #f0f0f0;
            position: relative;
            text-shadow: 
                0 0 20px rgba(0, 255, 255, 0.5),
                0 0 40px rgba(0, 255, 255, 0.3),
                0 0 60px rgba(0, 255, 255, 0.2);
            animation: 
                waterDrop 3s ease-in-out infinite,
                textGlow 2s ease-in-out infinite alternate,
                letterFloat 4s ease-in-out infinite,
                gradientShift 3s ease-in-out infinite;
            background: linear-gradient(45deg, #00ffff, #fff, #00ffff, #0099cc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 300% 300%;
            transform-style: preserve-3d;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .main-section h1.big-title:hover {
            animation-play-state: paused;
            transform: scale(1.05) rotateY(5deg) rotateX(2deg);
            filter: brightness(1.2);
        }

        /* Individual letter animations */
        .main-section h1.big-title span {
            display: inline-block;
            animation: letterBounce 2s ease-in-out infinite;
            transition: all 0.3s ease;
        }

        .main-section h1.big-title span:nth-child(1) { animation-delay: 0.1s; }
        .main-section h1.big-title span:nth-child(2) { animation-delay: 0.2s; }
        .main-section h1.big-title span:nth-child(3) { animation-delay: 0.3s; }
        .main-section h1.big-title span:nth-child(4) { animation-delay: 0.4s; }
        .main-section h1.big-title span:nth-child(5) { animation-delay: 0.5s; }
        .main-section h1.big-title span:nth-child(6) { animation-delay: 0.6s; }
        .main-section h1.big-title span:nth-child(7) { animation-delay: 0.7s; }
        .main-section h1.big-title span:nth-child(8) { animation-delay: 0.8s; }
        .main-section h1.big-title span:nth-child(9) { animation-delay: 0.9s; }

        @keyframes letterBounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) rotateZ(0deg) scale(1);
            }
            40% {
                transform: translateY(-20px) rotateZ(5deg) scale(1.1);
            }
            60% {
                transform: translateY(-10px) rotateZ(-2deg) scale(1.05);
            }
        }

        @keyframes gradientShift {
            0% { 
                background-position: 0% 50%; 
                background-size: 400% 400%;
                filter: brightness(1) saturate(1) hue-rotate(0deg);
            }
            25% { 
                background-position: 100% 25%; 
                background-size: 450% 450%;
                filter: brightness(1.1) saturate(1.2) hue-rotate(30deg);
            }
            50% { 
                background-position: 50% 100%; 
                background-size: 500% 500%;
                filter: brightness(1.2) saturate(1.4) hue-rotate(60deg);
            }
            75% { 
                background-position: 25% 75%; 
                background-size: 450% 450%;
                filter: brightness(1.1) saturate(1.2) hue-rotate(30deg);
            }
            100% { 
                background-position: 0% 50%; 
                background-size: 400% 400%;
                filter: brightness(1) saturate(1) hue-rotate(0deg);
            }
        }

        @keyframes textGlow {
            0% {
                text-shadow: 
                    0 0 25px rgba(255, 255, 255, 0.9),
                    0 0 45px rgba(0, 255, 255, 0.7),
                    0 0 65px rgba(0, 150, 255, 0.5),
                    0 8px 30px rgba(0, 0, 0, 0.4);
            }
            25% {
                text-shadow: 
                    0 0 30px rgba(255, 100, 255, 0.95),
                    0 0 55px rgba(255, 0, 150, 0.75),
                    0 0 85px rgba(255, 100, 0, 0.55),
                    0 12px 35px rgba(0, 0, 0, 0.45);
            }
            50% {
                text-shadow: 
                    0 0 35px rgba(100, 255, 255, 0.9),
                    0 0 60px rgba(0, 255, 200, 0.7),
                    0 0 90px rgba(100, 255, 100, 0.5),
                    0 10px 32px rgba(0, 0, 0, 0.42);
            }
            75% {
                text-shadow: 
                    0 0 28px rgba(255, 255, 100, 0.92),
                    0 0 50px rgba(255, 200, 0, 0.72),
                    0 0 75px rgba(255, 150, 50, 0.52),
                    0 9px 28px rgba(0, 0, 0, 0.38);
            }
            100% {
                text-shadow: 
                    0 0 25px rgba(255, 255, 255, 0.9),
                    0 0 45px rgba(0, 255, 255, 0.7),
                    0 0 65px rgba(0, 150, 255, 0.5),
                    0 8px 30px rgba(0, 0, 0, 0.4);
            }
        }

        @keyframes letterFloat {
            0%, 100% {
                transform: translateY(0px) scale(1) rotateX(0deg) rotateZ(0deg);
                text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            }
            25% {
                transform: translateY(-12px) scale(1.05) rotateX(5deg) rotateZ(2deg);
                text-shadow: 0 15px 25px rgba(0, 0, 0, 0.4);
            }
            50% {
                transform: translateY(-20px) scale(1.08) rotateX(8deg) rotateZ(0deg);
                text-shadow: 0 25px 35px rgba(0, 0, 0, 0.5);
            }
            75% {
                transform: translateY(-12px) scale(1.05) rotateX(5deg) rotateZ(-2deg);
                text-shadow: 0 15px 25px rgba(0, 0, 0, 0.4);
            }
        }

        @keyframes waterDrop {
            0%, 100% {
                transform: scale(1) translateY(0px) rotateZ(0deg);
                filter: drop-shadow(0 0 10px rgba(0, 255, 255, 0.3));
            }
            25% {
                transform: scale(1.03) translateY(-8px) rotateZ(1deg);
                filter: drop-shadow(0 15px 25px rgba(0, 255, 255, 0.5));
            }
            50% {
                transform: scale(1.06) translateY(-15px) rotateZ(0deg);
                filter: drop-shadow(0 25px 35px rgba(0, 255, 255, 0.7));
            }
            75% {
                transform: scale(1.03) translateY(-8px) rotateZ(-1deg);
                filter: drop-shadow(0 15px 25px rgba(0, 255, 255, 0.5));
            }
        }

        .main-section h1.big-title::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 50%;
            width: 20px;
            height: 20px;
            background: linear-gradient(45deg, #00ffff, #0099cc);
            border-radius: 50% 50% 50% 0;
            transform: translateX(-50%) rotate(-45deg);
            animation: droplet 3s ease-in-out infinite;
            opacity: 0.8;
        }

        @keyframes droplet {
            0%, 100% {
                opacity: 0;
                transform: translateX(-50%) translateY(0px) rotate(-45deg) scale(0.5);
            }
            25% {
                opacity: 0.6;
                transform: translateX(-50%) translateY(-10px) rotate(-45deg) scale(0.8);
            }
            50% {
                opacity: 1;
                transform: translateX(-50%) translateY(-20px) rotate(-45deg) scale(1);
            }
            75% {
                opacity: 0.6;
                transform: translateX(-50%) translateY(-10px) rotate(-45deg) scale(0.8);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .main-section h1.big-title {
                font-size: 8rem;
                letter-spacing: -4px;
            }
        }

        @media (max-width: 480px) {
            .main-section h1.big-title {
                font-size: 5rem;
                letter-spacing: -2px;
            }
        }

        .main-section h2 {
            font-size: 2rem;
            margin-top: 40px;
        }

        .main-section p {
            max-width: 600px;
            margin-top: 20px;
            font-size: 1rem;
            line-height: 1.6;
            color: #cfcfcf;
        }

        .social-links {
            margin-top: 40px;
        }

        .social-links a {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 8px 16px;
            border: 1px solid #00ffff;
            border-radius: 20px;
            text-decoration: none;
            color: #00ffff;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .social-links a:hover {
            background-color: #00ffff;
            color: #000;
        }

        footer {
            margin-top: 60px;
            text-align: center;
            padding: 40px 0;
            color: #777;
            font-size: 0.9rem;
            border-top: 1px solid #333;
            position: relative;
            background: linear-gradient(45deg, #0f0f0f, #1a1a1a);
            animation: footerGlow 4s ease-in-out infinite alternate;
        }

        @keyframes footerGlow {
            0% {
                box-shadow: 0 -5px 15px rgba(0, 255, 255, 0.1);
            }
            100% {
                box-shadow: 0 -10px 25px rgba(0, 255, 255, 0.3);
            }
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #00ffff, transparent);
            animation: borderFlow 3s linear infinite;
        }

        @keyframes borderFlow {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .footer-social-links {
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footer-social-links a {
            display: inline-block;
            margin: 0 5px;
            margin-bottom: 10px;
            padding: 8px 16px;
            border: 1px solid #00ffff;
            border-radius: 20px;
            text-decoration: none;
            color: #00ffff;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            animation: socialFloat 2s ease-in-out infinite;
            animation-delay: calc(var(--i) * 0.2s);
        }

        @keyframes socialFloat {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-5px);
            }
        }

        .footer-social-links a:nth-child(1) { --i: 0; }
        .footer-social-links a:nth-child(2) { --i: 1; }
        .footer-social-links a:nth-child(3) { --i: 2; }
        .footer-social-links a:nth-child(4) { --i: 3; }
        .footer-social-links a:nth-child(5) { --i: 4; }

        .footer-social-links a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 255, 0.4), transparent);
            transition: left 0.5s;
        }

        .footer-social-links a:hover::before {
            left: 100%;
        }

        .footer-social-links a:hover {
            background-color: #00ffff;
            color: #000;
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 255, 255, 0.4);
        }

        footer p {
            animation: fadeInUp 1s ease-out 0.5s both;
            position: relative;
        }

        footer p::after {
            content: '✨';
            position: absolute;
            right: -30px;
            top: 50%;
            transform: translateY(-50%);
            animation: sparkle 2s ease-in-out infinite;
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0;
                transform: translateY(-50%) scale(0.5);
            }
            50% {
                opacity: 1;
                transform: translateY(-50%) scale(1);
            }
        }
    </style>
</head>
<body>

    @include('components.header')

    <div class="main-section">
        <h1 class="big-title">PORTFOLIO</h1>
        <h2>Hi There 👋</h2>
        <p><strong>I'm Sirajes Salakin</strong><br>
        I'm a passionate and dedicated web developer. I love creating clean, responsive websites using HTML, CSS, JavaScript, PHP, and more. Always learning. Always building.</p>
    </div>

    <footer>
        <div class="footer-social-links">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">GitHub</a>
            <a href="#">Telegram</a>
            <a href="#">WhatsApp</a>
        </div>
        &copy; 2025 Sirajes Salakin. All rights reserved.
    </footer>

</body>
</html>
