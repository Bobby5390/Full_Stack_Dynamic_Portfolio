<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
            position: relative;
            overflow-x: hidden;
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

        /* Dashboard Container */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 280px;
            background: linear-gradient(135deg, rgba(28, 28, 28, 0.95) 0%, rgba(26, 26, 26, 0.98) 50%, rgba(28, 28, 28, 0.95) 100%);
            backdrop-filter: blur(20px);
            border-right: 1px solid rgba(0, 255, 255, 0.3);
            padding: 2rem 0;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: all 0.3s ease;
            animation: slideInLeft 0.6s ease-out;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.7), 
                0 0 0 1px rgba(0, 255, 255, 0.1);
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .sidebar-header {
            padding: 0 2rem 2rem;
            border-bottom: 1px solid rgba(0, 255, 255, 0.2);
            margin-bottom: 2rem;
        }

        .logo {
            color: var(--text-light);
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, var(--cyan), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: titleGlow 3s ease-in-out infinite alternate;
        }
        }

        .logo i {
            font-size: 2rem;
            background: linear-gradient(45deg, #00ffff, #ff00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-menu {
            list-style: none;
            padding: 0;
        }

        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 2rem;
            color: rgba(240, 240, 240, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 255, 255, 0.1), rgba(0, 188, 212, 0.1));
            transition: width 0.3s ease;
            z-index: -1;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 100%;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--cyan);
            border-left-color: var(--cyan);
            transform: translateX(5px);
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
        }

        .nav-link i {
            font-size: 1.2rem;
            width: 20px;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 280px;
            padding: 2rem;
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Header */
        .dashboard-header {
            background: linear-gradient(135deg, rgba(28, 28, 28, 0.95) 0%, rgba(26, 26, 26, 0.98) 50%, rgba(28, 28, 28, 0.95) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 3rem;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.7), 
                0 0 0 1px rgba(0, 255, 255, 0.1);
            animation: cardFloat 3s ease-in-out infinite alternate;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @keyframes cardFloat {
            from {
                transform: translateY(0px);
            }
            to {
                transform: translateY(-5px);
            }
        }

        .welcome-text h1 {
            color: var(--text-light);
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, #fff, #00ffff, #ff00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textShimmer 3s ease-in-out infinite;
        }

        @keyframes textShimmer {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        .welcome-text p {
            color: rgba(240, 240, 240, 0.8);
            font-size: 1rem;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, var(--cyan), var(--accent));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--bg-color);
            font-weight: bold;
            font-size: 1.2rem;
            box-shadow: 
                0 0 20px rgba(0, 255, 255, 0.5), 
                inset 0 0 20px rgba(0, 255, 255, 0.1);
            animation: avatarPulse 2s ease-in-out infinite alternate;
        }

        @keyframes avatarPulse {
            from {
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.5), inset 0 0 20px rgba(0, 255, 255, 0.1);
            }
            to {
                box-shadow: 0 0 30px rgba(0, 255, 255, 0.8), inset 0 0 30px rgba(0, 255, 255, 0.2);
            }
        }
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
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

        .user-info h3 {
            color: var(--text-light);
            font-size: 1rem;
            font-weight: 600;
            margin: 0;
        }

        .user-info p {
            color: rgba(240, 240, 240, 0.7);
            font-size: 0.9rem;
            margin: 0.2rem 0 0;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: linear-gradient(135deg, rgba(28, 28, 28, 0.95) 0%, rgba(26, 26, 26, 0.98) 50%, rgba(28, 28, 28, 0.95) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            animation: scaleIn 0.6s ease-out;
            animation-fill-mode: both;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.7), 
                0 0 0 1px rgba(0, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--cyan), var(--accent), var(--cyan));
            animation: shimmer 2s linear infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .stat-card:nth-child(1) { animation-delay: 0.1s; }
        .stat-card:nth-child(2) { animation-delay: 0.2s; }
        .stat-card:nth-child(3) { animation-delay: 0.3s; }
        .stat-card:nth-child(4) { animation-delay: 0.4s; }

        @keyframes scaleIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .stat-card:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: var(--cyan);
            box-shadow: 
                0 35px 70px rgba(0, 0, 0, 0.8), 
                0 0 40px rgba(0, 255, 255, 0.3),
                0 0 0 1px rgba(0, 255, 255, 0.2);
        }

        .stat-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            background: linear-gradient(45deg, var(--cyan), var(--accent));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--bg-color);
            animation: iconRotate 4s linear infinite;
            box-shadow: 
                0 0 30px rgba(0, 255, 255, 0.5), 
                inset 0 0 30px rgba(0, 255, 255, 0.1);
        }

        @keyframes iconRotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-light);
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, var(--cyan), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: numberPulse 2s ease-in-out infinite alternate;
        }

        @keyframes numberPulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.05);
            }
        }
            background: linear-gradient(45deg, #00ffff, #ff00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
            font-weight: 500;
        }

        /* Action Cards */
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .action-card {
            background: linear-gradient(135deg, rgba(28, 28, 28, 0.95) 0%, rgba(26, 26, 26, 0.98) 50%, rgba(28, 28, 28, 0.95) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
            animation: slideInUp 0.8s ease-out;
            animation-fill-mode: both;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.7), 
                0 0 0 1px rgba(0, 255, 255, 0.1);
        }

        .action-card:nth-child(1) { animation-delay: 0.2s; }
        .action-card:nth-child(2) { animation-delay: 0.4s; }

        @keyframes slideInUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .action-card:hover {
            transform: translateY(-5px) scale(1.02);
            border-color: var(--cyan);
            box-shadow: 
                0 35px 70px rgba(0, 0, 0, 0.8), 
                0 0 40px rgba(0, 255, 255, 0.3);
        }

        .action-card h3 {
            color: var(--text-light);
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--cyan), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .action-card p {
            color: rgba(240, 240, 240, 0.8);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.8rem 1.5rem;
            background: linear-gradient(45deg, var(--cyan), var(--accent));
            color: var(--bg-color);
            text-decoration: none;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 4px 15px rgba(0, 255, 255, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 
                0 10px 25px rgba(0, 255, 255, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }

        .btn-secondary {
            background: rgba(28, 28, 28, 0.8);
            border: 1px solid rgba(0, 255, 255, 0.3);
            color: var(--text-light);
        }

        .btn-secondary:hover {
            background: rgba(0, 255, 255, 0.1);
            border-color: var(--cyan);
            color: var(--cyan);
        }
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
        }

        /* Logout Button */
        .logout-btn {
            position: fixed;
            top: 2rem;
            right: 2rem;
            z-index: 1000;
        }

        /* Animations */
        @keyframes titleGlow {
            from {
                text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
            }
            to {
                text-shadow: 0 0 20px rgba(0, 255, 255, 0.8), 0 0 30px rgba(0, 255, 255, 0.6);
            }
        }

        @keyframes backgroundShift {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        /* Floating Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: var(--cyan);
            border-radius: 50%;
            animation: float 8s infinite linear;
            opacity: 0.6;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 0.6;
            }
            90% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(-100px) translateX(100px);
                opacity: 0;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: 100%;
                z-index: 1000;
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                padding: 1rem;
            }

            .dashboard-header {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .actions-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Mobile Menu Toggle */
        .mobile-toggle {
            display: none;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 0.8rem;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .mobile-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Particles -->
    <div class="particles" id="particles"></div>

    <!-- Mobile Menu Toggle -->
    <button class="mobile-toggle" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>



    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="/" class="logo">
                    <i class="fas fa-rocket"></i>
                    Portfolio Pro
                </a>
            </div>
            
            <nav>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                            <i class="fas fa-home"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.profile') }}" class="nav-link">
                            <i class="fas fa-user"></i>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.analytics') }}" class="nav-link">
                            <i class="fas fa-chart-bar"></i>
                            Analytics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/skills" class="nav-link">
                            <i class="fas fa-code"></i>
                            Skills
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/education" class="nav-link">
                            <i class="fas fa-graduation-cap"></i>
                            Education
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/work" class="nav-link">
                            <i class="fas fa-briefcase"></i>
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="fas fa-globe"></i>
                            View Portfolio
                        </a>
                    </li>
                </ul>
                <!-- Logout Button at the bottom of sidebar -->
                <form method="POST" action="{{ route('logout') }}" style="position: absolute; bottom: 2rem; left: 0; width: 100%; padding: 0 2rem;">
                    @csrf
                    <button type="submit" class="btn btn-secondary" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="dashboard-header">
                <div class="welcome-text">
                    <h1>Welcome back, {{ $user->name }}! 👋</h1>
                    <p>Here's what's happening with your portfolio today.</p>
                </div>
                <div class="user-profile">
                    <div class="avatar">
                        {{ strtoupper(substr($user->name, 0, 2)) }}
                    </div>
                    <div class="user-info">
                        <h3>{{ $user->name }}</h3>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
            </header>

            <!-- Stats Grid -->
            <section class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">{{ $totalUsers }}</div>
                    <div class="stat-label">Total Users</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Portfolio Views</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="stat-number">12</div>
                    <div class="stat-label">Projects</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <div class="stat-number">{{ now()->format('d') }}</div>
                    <div class="stat-label">Days This Month</div>
                </div>
            </section>

            <!-- Action Cards -->
            <section class="actions-grid">
                <div class="action-card">
                    <h3>
                        <i class="fas fa-plus-circle"></i>
                        Quick Actions
                    </h3>
                    <p>Manage your portfolio content and settings with these quick action buttons.</p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="/skills" class="btn">
                            <i class="fas fa-code"></i>
                            Add Skills
                        </a>
                        <a href="/work" class="btn btn-secondary">
                            <i class="fas fa-briefcase"></i>
                            Add Project
                        </a>
                    </div>
                </div>
                
                <div class="action-card">
                    <h3>
                        <i class="fas fa-chart-line"></i>
                        Portfolio Performance
                    </h3>
                    <p>Track your portfolio's performance and see how visitors interact with your content.</p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="{{ route('admin.analytics') }}" class="btn">
                            <i class="fas fa-analytics"></i>
                            View Analytics
                        </a>
                        <a href="/" class="btn btn-secondary">
                            <i class="fas fa-external-link-alt"></i>
                            Preview Site
                        </a>
                    </div>
                </div>
            </section>

            <!-- Success Message -->
            @if(session('success'))
                <div style="background: rgba(34, 197, 94, 0.15); border: 1px solid rgba(34, 197, 94, 0.4); border-radius: 12px; padding: 1rem; margin-bottom: 2rem; color: #22c55e; text-align: center; animation: slideInUp 0.6s ease-out;">
                    <i class="fas fa-check-circle" style="margin-right: 0.5rem;"></i>
                    {{ session('success') }}
                </div>
            @endif
        </main>
    </div>

    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // Random starting position
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 8 + 's';
                particle.style.animationDuration = (Math.random() * 4 + 6) + 's';
                
                // Random size variation
                const size = Math.random() * 3 + 1;
                particle.style.width = size + 'px';
                particle.style.height = size + 'px';
                
                particlesContainer.appendChild(particle);
            }
        }

        // Initialize particles when page loads
        document.addEventListener('DOMContentLoaded', createParticles);

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.querySelector('.mobile-toggle');
            
            if (window.innerWidth <= 768 && !sidebar.contains(event.target) && !toggle.contains(event.target)) {
                sidebar.classList.remove('open');
            }
        });

        // Auto-hide success message
        setTimeout(function() {
            const successMsg = document.querySelector('[style*="rgba(34, 197, 94"]');
            if (successMsg) {
                successMsg.style.transition = 'all 0.5s ease';
                successMsg.style.opacity = '0';
                successMsg.style.transform = 'translateY(-20px)';
                setTimeout(() => successMsg.remove(), 500);
            }
        }, 5000);
    </script>
</body>
</html>
