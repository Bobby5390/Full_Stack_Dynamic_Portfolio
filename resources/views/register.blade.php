<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sirajes Salakin Portfolio</title>
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

        /* Animated Background Particles */
        .background-particles {
            position: absolute;
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
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) { top: 20%; left: 20%; animation-delay: 0s; }
        .particle:nth-child(2) { top: 60%; left: 80%; animation-delay: 2s; }
        .particle:nth-child(3) { top: 80%; left: 40%; animation-delay: 4s; }
        .particle:nth-child(4) { top: 30%; left: 70%; animation-delay: 1s; }
        .particle:nth-child(5) { top: 70%; left: 20%; animation-delay: 3s; }
        .particle:nth-child(6) { top: 10%; left: 60%; animation-delay: 5s; }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) scale(1);
                opacity: 0.6;
            }
            50% {
                transform: translateY(-20px) scale(1.2);
                opacity: 1;
            }
        }

        /* Login Container */
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 3rem;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
            animation: slideInUp 0.8s ease-out;
        }

        @keyframes slideInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, #fff, #a8edea, #fed6e3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: titleGlow 3s ease-in-out infinite;
        }

        @keyframes titleGlow {
            0%, 100% {
                filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
            }
            50% {
                filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.6));
            }
        }

        .login-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
            font-weight: 300;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1.2rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: white;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            box-sizing: border-box;
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .form-input:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.5);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .form-input:focus + .form-label {
            color: white;
            transform: translateY(-2px);
        }

        .login-button {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
        }

        .login-button:active {
            transform: translateY(-1px);
        }

        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }

        .forgot-password a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .forgot-password a:hover {
            color: white;
            text-decoration: underline;
        }

        .error-message {
            background: rgba(255, 0, 0, 0.1);
            border: 1px solid rgba(255, 0, 0, 0.3);
            border-radius: 8px;
            padding: 0.8rem;
            margin-bottom: 1rem;
            color: #ff6b6b;
            font-size: 0.9rem;
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        .success-message {
            background: rgba(34, 197, 94, 0.15);
            border: 1px solid rgba(34, 197, 94, 0.4);
            border-radius: 12px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            color: #22c55e;
            font-size: 0.95rem;
            font-weight: 500;
            animation: successSlide 0.6s ease-out, successPulse 2s ease-in-out infinite;
            box-shadow: 0 4px 12px rgba(34, 197, 94, 0.2);
            text-align: center;
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
                box-shadow: 0 4px 12px rgba(34, 197, 94, 0.2);
            }
            50% {
                box-shadow: 0 6px 20px rgba(34, 197, 94, 0.4);
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
    <!-- Background Particles -->
    <div class="background-particles">
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
            <h1 class="login-title">Create Account</h1>
            <p class="login-subtitle">Join and create your portfolio account</p>
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
                <div style="margin-top: 0.8rem;">
                    <a href="/login" style="color: #22c55e; text-decoration: underline; font-weight: 600;">
                        Go to Login Page →
                    </a>
                </div>
            </div>
        @endif

        <!-- Registration Form -->
        <form method="POST" action="/register">
            @csrf
            
            <!-- Name Field -->
            <div class="form-group">
                <label for="name" class="form-label">Full Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    class="form-input" 
                    placeholder="Enter your full name"
                    value="{{ session('success') ? '' : old('name') }}"
                    required
                    autocomplete="name"
                    autofocus
                >
            </div>

            <!-- Email Field -->
            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="form-input" 
                    placeholder="Enter your email address"
                    value="{{ session('success') ? '' : old('email') }}"
                    required
                    autocomplete="email"
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
                    placeholder="Enter your password (min 8 characters)"
                    required
                    autocomplete="new-password"
                >
            </div>

            <!-- Confirm Password Field -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input 
                    type="password" 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    class="form-input" 
                    placeholder="Confirm your password"
                    required
                    autocomplete="new-password"
                >
            </div>

            <!-- Register Button -->
            <button type="submit" class="login-button">
                Create Account
            </button>
        </form>

        <!-- Already have an account? -->
        <div class="forgot-password">
            <a href="/login">
                Already have an account? Sign in here
            </a>
        </div>
    </div>
</body>
</html>
