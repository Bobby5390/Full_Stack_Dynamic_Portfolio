<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sirajes Salakin Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2d4df1;
            --accent: #00bcd4;
            --cyan: #00ffff;
            --text-light: #f0f0f0;
            --text-dark: #cccccc;
            --bg-color: #0f0f0f;
            --card-bg: #1c1c1c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(0, 188, 212, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(0, 255, 255, 0.06) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(0, 188, 212, 0.08) 0%, transparent 50%);
            animation: backgroundShift 15s ease-in-out infinite;
            pointer-events: none;
            z-index: -1;
        }

        @keyframes backgroundShift {
            0%, 100% {
                transform: translateX(0) translateY(0) scale(1);
                opacity: 0.4;
            }
            50% {
                transform: translateX(10px) translateY(-20px) scale(1.05);
                opacity: 0.6;
            }
        }

        /* Floating Particles */
        .floating-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: radial-gradient(circle, var(--cyan), rgba(0, 255, 255, 0.3));
            border-radius: 50%;
            animation: particleFloat 8s linear infinite;
            opacity: 0.6;
            box-shadow: 0 0 10px var(--cyan);
        }

        .particle:nth-child(1) { left: 10%; animation-delay: 0s; animation-duration: 6s; }
        .particle:nth-child(2) { left: 20%; animation-delay: 2s; animation-duration: 8s; }
        .particle:nth-child(3) { left: 30%; animation-delay: 4s; animation-duration: 7s; }
        .particle:nth-child(4) { left: 60%; animation-delay: 1s; animation-duration: 9s; }
        .particle:nth-child(5) { left: 80%; animation-delay: 3s; animation-duration: 6s; }
        .particle:nth-child(6) { left: 90%; animation-delay: 5s; animation-duration: 8s; }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) scale(0);
                opacity: 0;
            }
            10% {
                opacity: 0.6;
                transform: scale(1);
            }
            90% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(-100vh) scale(0);
                opacity: 0;
            }
        }

        /* Login Container */
        .login-container {
            background: linear-gradient(135deg, rgba(28, 28, 28, 0.95) 0%, rgba(26, 26, 26, 0.98) 50%, rgba(28, 28, 28, 0.95) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 255, 0.3);
            border-radius: 20px;
            padding: 3rem;
            width: 100%;
            max-width: 450px;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.7), 
                0 0 0 1px rgba(0, 255, 255, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 2;
            animation: containerSlide 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            overflow: hidden;
        }

        @keyframes containerSlide {
            0% {
                transform: translateY(50px) scale(0.9);
                opacity: 0;
                filter: blur(10px);
            }
            100% {
                transform: translateY(0) scale(1);
                opacity: 1;
                filter: blur(0);
            }
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 300%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(0, 255, 255, 0.05) 25%, 
                rgba(0, 255, 255, 0.15) 50%, 
                rgba(0, 255, 255, 0.05) 75%, 
                transparent 100%);
            animation: containerSweep 6s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes containerSweep {
            0%, 100% {
                transform: translateX(-100%);
                opacity: 0;
            }
            50% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .login-title {
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, #ffffff 0%, var(--cyan) 25%, #ffffff 50%, var(--accent) 75%, #ffffff 100%);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: titleShimmer 4s ease-in-out infinite, titleGlow 3s ease-in-out infinite alternate;
            text-shadow: 0 0 30px rgba(0, 255, 255, 0.5);
        }

        @keyframes titleShimmer {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        @keyframes titleGlow {
            0% {
                filter: drop-shadow(0 0 10px rgba(0, 255, 255, 0.3));
            }
            100% {
                filter: drop-shadow(0 0 20px rgba(0, 255, 255, 0.6));
            }
        }

        .login-subtitle {
            color: var(--text-dark);
            font-size: 1rem;
            font-weight: 400;
            opacity: 0.9;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            color: var(--text-light);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
            opacity: 0.9;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1.2rem;
            background: linear-gradient(135deg, rgba(28, 28, 28, 0.8) 0%, rgba(26, 26, 26, 0.9) 100%);
            border: 1px solid rgba(0, 255, 255, 0.3);
            border-radius: 12px;
            color: var(--text-light);
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            box-sizing: border-box;
            position: relative;
        }

        .form-input::placeholder {
            color: var(--text-dark);
            opacity: 0.7;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--cyan);
            background: linear-gradient(135deg, rgba(28, 28, 28, 0.9) 0%, rgba(26, 26, 26, 0.95) 100%);
            box-shadow: 
                0 0 20px rgba(0, 255, 255, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .form-input:focus + .form-label {
            color: var(--cyan);
            transform: translateY(-2px);
        }

        .login-button {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, var(--accent) 0%, var(--cyan) 50%, var(--accent) 100%);
            background-size: 200% 200%;
            border: none;
            border-radius: 12px;
            color: var(--bg-color);
            font-size: 1.1rem;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            animation: buttonGlow 3s ease-in-out infinite alternate;
        }

        @keyframes buttonGlow {
            0% {
                box-shadow: 0 5px 15px rgba(0, 188, 212, 0.4);
                background-position: 0% 50%;
            }
            100% {
                box-shadow: 0 8px 25px rgba(0, 255, 255, 0.6);
                background-position: 100% 50%;
            }
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .login-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 255, 255, 0.5);
            background-position: 100% 50%;
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:active {
            transform: translateY(-1px);
        }

        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }

        .forgot-password a {
            color: var(--text-dark);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .forgot-password a:hover {
            color: var(--cyan);
            text-decoration: underline;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
        }

        .error-message {
            background: linear-gradient(135deg, rgba(255, 0, 0, 0.1) 0%, rgba(255, 50, 50, 0.15) 100%);
            border: 1px solid rgba(255, 0, 0, 0.4);
            border-radius: 12px;
            padding: 0.8rem;
            margin-bottom: 1rem;
            color: #ff6b6b;
            font-size: 0.9rem;
            font-weight: 500;
            animation: errorShake 0.5s ease-in-out;
            backdrop-filter: blur(10px);
        }

        @keyframes errorShake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        .success-message {
            background: linear-gradient(135deg, rgba(0, 255, 100, 0.1) 0%, rgba(0, 200, 80, 0.15) 100%);
            border: 1px solid rgba(0, 255, 100, 0.4);
            border-radius: 12px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            color: #00ff64;
            font-size: 0.95rem;
            font-weight: 600;
            animation: successSlide 0.6s ease-out, successPulse 2s ease-in-out infinite;
            box-shadow: 0 4px 12px rgba(0, 255, 100, 0.2);
            text-align: center;
            backdrop-filter: blur(10px);
        }

        @keyframes successSlide {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes successPulse {
            0%, 100% {
                box-shadow: 0 4px 12px rgba(0, 255, 100, 0.2);
            }
            50% {
                box-shadow: 0 6px 20px rgba(0, 255, 100, 0.4);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                margin: 1rem;
                padding: 2rem 1.5rem;
            }
            
            .login-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 1.5rem 1rem;
            }
            
            .login-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Particles -->
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-header">
            <h1 class="login-title">Welcome Back</h1>
            <p class="login-subtitle">Sign in to your portfolio dashboard</p>
        </div>

        <!-- Display Error Messages -->
        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <!-- Display Success Messages -->
        @if (session('success'))
            <div class="success-message">
                <div style="font-size: 1.2rem; margin-bottom: 0.5rem;">✅</div>
                {{ session('success') }}
                <div style="margin-top: 0.8rem; font-size: 0.85rem; opacity: 0.9;">
                    Redirecting to dashboard...
                </div>
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="/login">
            @csrf
            
            <!-- Email Field -->
            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="form-input" 
                    placeholder="Enter your email address"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    autofocus
                >
            </div>

            <!-- Password Field -->
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="form-input" 
                    placeholder="Enter your password"
                    required
                    autocomplete="current-password"
                >
            </div>

            <!-- Login Button -->
            <button type="submit" class="login-button">
                Access Dashboard
            </button>
        </form>

        <!-- Register Link -->
        <div class="forgot-password">
            <a href="/register">
                Don't have an account? Create one here
            </a>
        </div>
    </div>

    <script>
        // Auto-hide success message and redirect
        @if (session('success'))
        setTimeout(function() {
            window.location.href = '/admin/dashboard';
        }, 2000);
        @endif

        // Auto-hide success message animation
        setTimeout(function() {
            const successMsg = document.querySelector('.success-message');
            if (successMsg) {
                successMsg.style.transition = 'all 0.5s ease';
                successMsg.style.opacity = '0';
                successMsg.style.transform = 'translateY(-20px)';
                setTimeout(() => successMsg.remove(), 500);
            }
        }, 5000);

        // Enhanced form interactions
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>
