<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Work - Sirajes Salakin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <style>
    :root {
      --primary: #2d4df1;
      --accent: #00bcd4;
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
      overflow-x: hidden;
      position: relative;
      min-height: 100vh;
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
        radial-gradient(circle at 80% 20%, rgba(0, 188, 212, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(0, 188, 212, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 60% 30%, rgba(255, 107, 107, 0.05) 0%, transparent 40%);
      animation: backgroundShift 20s ease-in-out infinite;
      pointer-events: none;
      z-index: -1;
    }

    /* Floating Particles */
    .floating-particles {
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
      border-radius: 50%;
      animation: particleFloat 15s linear infinite;
      opacity: 0.7;
    }

    .particle:nth-child(odd) {
      width: 6px;
      height: 6px;
      background: radial-gradient(circle, var(--accent), rgba(0, 188, 212, 0.3));
      box-shadow: 0 0 15px var(--accent);
    }

    .particle:nth-child(even) {
      width: 4px;
      height: 4px;
      background: radial-gradient(circle, #ff6b6b, rgba(255, 107, 107, 0.3));
      box-shadow: 0 0 10px #ff6b6b;
      animation-duration: 18s;
    }

    .particle:nth-child(1) { left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { left: 25%; animation-delay: 4s; }
    .particle:nth-child(3) { left: 40%; animation-delay: 8s; }
    .particle:nth-child(4) { left: 55%; animation-delay: 12s; }
    .particle:nth-child(5) { left: 70%; animation-delay: 2s; }
    .particle:nth-child(6) { left: 85%; animation-delay: 6s; }
    .particle:nth-child(7) { left: 15%; animation-delay: 10s; }
    .particle:nth-child(8) { left: 75%; animation-delay: 14s; }

    @keyframes particleFloat {
      0% {
        transform: translateY(100vh) rotate(0deg) scale(0);
        opacity: 0;
      }
      10% {
        opacity: 0.8;
        transform: scale(1);
      }
      50% {
        transform: translateY(50vh) rotate(180deg) scale(1.3);
        opacity: 1;
      }
      90% {
        opacity: 0.8;
      }
      100% {
        transform: translateY(-100px) rotate(360deg) scale(0);
        opacity: 0;
      }
    }

    @keyframes backgroundShift {
      0%, 100% {
        transform: translateX(0) translateY(0) scale(1);
        opacity: 0.4;
      }
      33% {
        transform: translateX(20px) translateY(-30px) scale(1.1);
        opacity: 0.6;
      }
      66% {
        transform: translateX(-15px) translateY(25px) scale(0.9);
        opacity: 0.7;
      }
    }

    .work-container {
      padding: 100px 20px 80px;
      max-width: 1200px;
      margin: 0 auto;
      background: linear-gradient(135deg, var(--bg-color) 0%, #1a1a1a 50%, var(--bg-color) 100%);
      min-height: 100vh;
      position: relative;
    }

    .work-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        conic-gradient(from 0deg at 50% 50%, transparent 0deg, rgba(0, 188, 212, 0.02) 60deg, transparent 120deg);
      animation: sectionRotate 25s linear infinite;
      pointer-events: none;
    }

    @keyframes sectionRotate {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    .work-container h2 {
      font-size: 3.5rem;
      color: var(--accent);
      margin-bottom: 60px;
      font-weight: 900;
      text-shadow: 
        0 0 20px rgba(0, 188, 212, 0.5),
        0 0 40px rgba(0, 188, 212, 0.3),
        0 0 60px rgba(0, 188, 212, 0.2);
      animation: 
        titleGlow 3s ease-in-out infinite alternate, 
        titleFloat 4s ease-in-out infinite,
        titlePulse 2s ease-in-out infinite,
        gradientShift 4s ease-in-out infinite;
      text-align: center;
      position: relative;
      z-index: 2;
      background: linear-gradient(45deg, var(--accent), #fff, var(--accent), #ff6b6b);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      background-size: 300% 300%;
      transform-style: preserve-3d;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      25% { background-position: 100% 50%; }
      50% { background-position: 100% 100%; }
      75% { background-position: 0% 100%; }
      100% { background-position: 0% 50%; }
    }

    @keyframes titlePulse {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.02);
      }
    }

    @keyframes titleGlow {
      0% {
        text-shadow: 
          0 0 20px rgba(0, 188, 212, 0.3),
          0 0 40px rgba(0, 188, 212, 0.2);
      }
      100% {
        text-shadow: 
          0 0 30px rgba(0, 188, 212, 0.8), 
          0 0 50px rgba(0, 188, 212, 0.6),
          0 0 70px rgba(0, 188, 212, 0.4),
          0 0 90px rgba(255, 107, 107, 0.3);
      }
    }

    @keyframes titleFloat {
      0%, 100% {
        transform: translateY(0px) scale(1) rotateX(0deg);
      }
      50% {
        transform: translateY(-15px) scale(1.03) rotateX(3deg);
      }
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 40px;
      position: relative;
      z-index: 2;
    }

    @media (max-width: 768px) {
      .projects-grid {
        grid-template-columns: 1fr;
        gap: 30px;
      }
    }

    @media (max-width: 480px) {
      .projects-grid {
        gap: 20px;
      }
    }

    .project-card {
      background: rgba(28, 28, 28, 0.85);
      backdrop-filter: blur(15px);
      border-radius: 25px;
      border: 1px solid rgba(0, 188, 212, 0.3);
      box-shadow: 
        0 10px 30px rgba(0, 0, 0, 0.5),
        0 0 0 rgba(0, 188, 212, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      padding: 30px;
      transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
      animation: projectFloat 6s ease-in-out infinite, projectEntrance 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      transform-style: preserve-3d;
      perspective: 1000px;
    }

    @keyframes projectEntrance {
      0% {
        opacity: 0;
        transform: translateY(60px) rotateX(45deg) scale(0.8);
      }
      100% {
        opacity: 1;
        transform: translateY(0) rotateX(0deg) scale(1);
      }
    }

    .project-card:nth-child(1) { animation-delay: 0s, 0s; }
    .project-card:nth-child(2) { animation-delay: 0.5s, 0.3s; }
    .project-card:nth-child(3) { animation-delay: 1s, 0.6s; }
    .project-card:nth-child(4) { animation-delay: 1.5s, 0.9s; }

    @keyframes projectFloat {
      0%, 100% {
        transform: translateY(0px) rotateZ(0deg) scale(1);
      }
      33% {
        transform: translateY(-12px) rotateZ(1deg) scale(1.02);
      }
      66% {
        transform: translateY(-8px) rotateZ(-0.5deg) scale(1.01);
      }
    }

    .project-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(
        90deg, 
        transparent, 
        rgba(0, 188, 212, 0.3), 
        rgba(255, 255, 255, 0.2), 
        rgba(0, 188, 212, 0.3), 
        transparent
      );
      transition: left 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .project-card:hover::before {
      left: 100%;
      animation: shimmerEffect 0.8s ease-in-out;
    }

    @keyframes shimmerEffect {
      0% { transform: skewX(-15deg); }
      50% { transform: skewX(15deg); }
      100% { transform: skewX(0deg); }
    }

    .project-card:hover {
      transform: translateY(-20px) scale(1.05) rotateY(8deg) rotateX(5deg);
      box-shadow: 
        0 25px 50px rgba(0, 188, 212, 0.4),
        0 0 40px rgba(0, 188, 212, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.3);
      border-color: var(--accent);
      backdrop-filter: blur(20px);
      animation: hoverPulse 0.6s ease-in-out;
    }

    @keyframes hoverPulse {
      0% { filter: brightness(1); }
      50% { filter: brightness(1.1) saturate(1.2); }
      100% { filter: brightness(1.05); }
    }

    /* Project Images */
    .project-image {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 20px;
      margin-bottom: 20px;
      transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      border: 2px solid rgba(0, 188, 212, 0.3);
      position: relative;
      overflow: hidden;
      animation: imageGlow 4s ease-in-out infinite alternate;
    }

    @keyframes imageGlow {
      0% {
        box-shadow: 0 5px 15px rgba(0, 188, 212, 0.2);
      }
      100% {
        box-shadow: 0 8px 25px rgba(0, 188, 212, 0.4);
      }
    }

    .project-card:hover .project-image {
      transform: scale(1.05) rotate(1deg);
      border-color: var(--accent);
      box-shadow: 
        0 15px 35px rgba(0, 188, 212, 0.5),
        0 0 30px rgba(0, 188, 212, 0.3);
      filter: brightness(1.1) saturate(1.2);
      animation: imageFloat 2s ease-in-out infinite;
    }

    @keyframes imageFloat {
      0%, 100% { transform: scale(1.05) rotate(1deg) translateY(0); }
      50% { transform: scale(1.05) rotate(1deg) translateY(-3px); }
    }

    .project-icon {
      font-size: 2.5rem;
      margin-bottom: 15px;
      animation: iconPulse 3s ease-in-out infinite, iconFloat 4s ease-in-out infinite;
      display: block;
      text-shadow: 0 0 15px rgba(0, 188, 212, 0.5);
    }

    @keyframes iconFloat {
      0%, 100% { transform: translateY(0) rotate(0deg); }
      50% { transform: translateY(-5px) rotate(5deg); }
    }

    @keyframes iconPulse {
      0%, 100% {
        opacity: 0.8;
        transform: scale(1);
        text-shadow: 0 0 15px rgba(0, 188, 212, 0.5);
      }
      50% {
        opacity: 1;
        transform: scale(1.1);
        text-shadow: 0 0 25px rgba(0, 188, 212, 0.8);
      }
    }

    .project-card h3 {
      font-size: 1.5rem;
      color: var(--accent);
      margin-bottom: 15px;
      font-weight: 700;
      text-shadow: 
        0 0 10px rgba(0, 188, 212, 0.3),
        0 0 20px rgba(0, 188, 212, 0.2);
      animation: titlePulse 3s ease-in-out infinite alternate, textShimmer 4s ease-in-out infinite;
      background: linear-gradient(45deg, var(--accent), #fff, var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      background-size: 200% 200%;
    }

    @keyframes textShimmer {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .project-card h3:hover {
      animation-play-state: paused;
      background-position: 50% 50%;
    }

    .project-card p {
      color: var(--text-dark);
      line-height: 1.6;
      margin-bottom: 20px;
      font-size: 1rem;
    }

    .tech-stack {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 20px;
    }

    .tech-tag {
      background: rgba(0, 188, 212, 0.15);
      color: var(--accent);
      padding: 8px 16px;
      border-radius: 20px;
      font-size: 0.85rem;
      font-weight: 600;
      border: 1px solid rgba(0, 188, 212, 0.3);
      transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      backdrop-filter: blur(5px);
      position: relative;
      overflow: hidden;
    }

    .tech-tag::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 188, 212, 0.3), transparent);
      transition: left 0.5s ease;
    }

    .tech-tag:hover::before {
      left: 100%;
    }

    .tech-tag:hover {
      background: rgba(0, 188, 212, 0.25);
      transform: translateY(-2px) scale(1.05);
      box-shadow: 0 5px 15px rgba(0, 188, 212, 0.3);
      text-shadow: 0 0 8px rgba(0, 188, 212, 0.5);
    }

    .project-links {
      display: flex;
      gap: 15px;
    }

    .project-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 12px 24px;
      background: linear-gradient(45deg, var(--accent), #0097a7);
      color: #000;
      text-decoration: none;
      border-radius: 25px;
      font-weight: 600;
      font-size: 0.9rem;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
      border: 2px solid transparent;
      backdrop-filter: blur(5px);
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .project-link::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: radial-gradient(circle, rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.1));
      transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      border-radius: 50%;
      transform: translate(-50%, -50%);
    }

    .project-link:hover::before {
      width: 300px;
      height: 300px;
    }

    .project-link:hover {
      transform: translateY(-5px) scale(1.08);
      box-shadow: 
        0 15px 35px rgba(0, 188, 212, 0.5),
        0 5px 15px rgba(0, 0, 0, 0.3);
      border-color: rgba(255, 255, 255, 0.3);
      color: #fff;
      text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    /* Add icons to project links */
    .project-link:nth-child(1)::after {
      content: '🚀';
      font-size: 1rem;
    }

    .project-link:nth-child(2)::after {
      content: '⚡';
      font-size: 1rem;
      animation: iconSpin 2s linear infinite;
    }

    @keyframes iconSpin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    @media (max-width: 768px) {
      .work-container {
        padding: 80px 20px 60px;
      }

      .work-container h2 {
        font-size: 2.5rem;
        margin-bottom: 40px;
      }

      .project-card {
        padding: 25px;
      }

      .project-image {
        height: 180px;
      }

      .project-icon {
        font-size: 2rem;
        margin-bottom: 12px;
      }

      .project-card h3 {
        font-size: 1.3rem;
      }

      .project-links {
        flex-direction: column;
        gap: 12px;
      }

      .tech-stack {
        gap: 8px;
      }

      .tech-tag {
        font-size: 0.8rem;
        padding: 6px 12px;
      }
    }

    @media (max-width: 480px) {
      .work-container {
        padding: 60px 15px 40px;
      }

      .work-container h2 {
        font-size: 2rem;
        margin-bottom: 30px;
      }

      .project-card {
        padding: 20px;
        border-radius: 20px;
      }

      .project-image {
        height: 160px;
        border-radius: 15px;
      }

      .project-icon {
        font-size: 1.8rem;
      }

      .project-card h3 {
        font-size: 1.2rem;
      }

      .project-card p {
        font-size: 0.9rem;
        line-height: 1.5;
      }

      .tech-tag {
        font-size: 0.75rem;
        padding: 5px 10px;
      }

      .project-link {
        padding: 8px 16px;
        font-size: 0.85rem;
      }
    }

    /* Footer */
    .footer {
      background: linear-gradient(135deg, #1a1a1a 0%, var(--bg-color) 50%, #1a1a1a 100%);
      padding: 60px 20px 40px;
      text-align: center;
      border-top: 1px solid rgba(0, 188, 212, 0.2);
      position: relative;
      overflow: hidden;
      margin-top: 80px;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(0, 188, 212, 0.1) 0%, transparent 70%);
      animation: footerPulse 8s ease-in-out infinite;
      pointer-events: none;
    }

    @keyframes footerPulse {
      0%, 100% {
        opacity: 0.3;
        transform: scale(1);
      }
      50% {
        opacity: 0.6;
        transform: scale(1.1);
      }
    }

    .footer-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      margin: 0 auto;
    }

    .footer h2 {
      color: var(--accent);
      font-size: 2.5rem;
      margin-bottom: 20px;
      font-weight: 900;
      text-shadow: 0 0 20px rgba(0, 188, 212, 0.4);
      animation: footerTitleGlow 3s ease-in-out infinite alternate;
    }

    @keyframes footerTitleGlow {
      0% {
        text-shadow: 0 0 20px rgba(0, 188, 212, 0.4);
      }
      100% {
        text-shadow: 0 0 30px rgba(0, 188, 212, 0.7), 0 0 40px rgba(0, 188, 212, 0.5);
      }
    }

    .footer p {
      color: var(--text-dark);
      font-size: 1.1rem;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    .contact-info {
      background: rgba(28, 28, 28, 0.6);
      backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 20px;
      border: 1px solid rgba(0, 188, 212, 0.2);
      margin-bottom: 30px;
      animation: contactSlide 1s ease-out;
    }

    @keyframes contactSlide {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .contact-info h3 {
      color: var(--accent);
      font-size: 1.5rem;
      margin-bottom: 15px;
      font-weight: 700;
    }

    .contact-info p {
      margin: 10px 0;
      font-size: 1rem;
    }

    .contact-info a {
      color: var(--accent);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .contact-info a:hover {
      color: var(--text-light);
      text-shadow: 0 0 10px rgba(0, 188, 212, 0.6);
    }

    .footer-bottom {
      border-top: 1px solid rgba(0, 188, 212, 0.2);
      padding-top: 20px;
      color: var(--text-dark);
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .footer h2 {
        font-size: 2rem;
      }

      .contact-info {
        padding: 20px;
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
    <div class="particle"></div>
    <div class="particle"></div>
  </div>

  <!-- Header Component -->
  <x-header />

  <!-- Work Section -->
  <div class="work-container">
    <h2>My Projects</h2>
    
    <div class="projects-grid">
      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=250&fit=crop&crop=center" alt="JobFlick Mobile App" class="project-image">
        <span class="project-icon">📱</span>
        <h3>JobFlick Mobile App</h3>
        <p>A comprehensive job search and recruitment platform built with Flutter and Firebase. Features include job listings, application tracking, and real-time notifications.</p>
        <div class="tech-stack">
          <span class="tech-tag">Flutter</span>
          <span class="tech-tag">Firebase</span>
          <span class="tech-tag">Dart</span>
          <span class="tech-tag">REST API</span>
        </div>
        <div class="project-links">
          <a href="https://jobflick-app.netlify.app" target="_blank" rel="noopener noreferrer" class="project-link">View Project</a>
          <a href="https://github.com/Bobby5390/JobFlick-Mobile-App" target="_blank" rel="noopener noreferrer" class="project-link">GitHub</a>
        </div>
      </div>

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=400&h=250&fit=crop&crop=center" alt="One Solution App" class="project-image">
        <span class="project-icon">🛠️</span>
        <h3>One Solution App</h3>
        <p>A multi-service platform providing various solutions in one place. Built with Flutter for cross-platform compatibility with Firebase backend integration.</p>
        <div class="tech-stack">
          <span class="tech-tag">Flutter</span>
          <span class="tech-tag">Firebase</span>
          <span class="tech-tag">Cloud Functions</span>
          <span class="tech-tag">Authentication</span>
        </div>
        <div class="project-links">
          <a href="https://onesolution-app.vercel.app" target="_blank" rel="noopener noreferrer" class="project-link">View Project</a>
          <a href="https://github.com/Bobby5390/One-Solution-App" target="_blank" rel="noopener noreferrer" class="project-link">GitHub</a>
        </div>
      </div>

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop&crop=center" alt="Web Inventory System" class="project-image">
        <span class="project-icon">🌐</span>
        <h3>Web Inventory System</h3>
        <p>A sophisticated inventory management system built with modern web technologies. Features include stock tracking, reporting, and automated alerts.</p>
        <div class="tech-stack">
          <span class="tech-tag">Laravel</span>
          <span class="tech-tag">MySQL</span>
          <span class="tech-tag">JavaScript</span>
          <span class="tech-tag">Bootstrap</span>
        </div>
        <div class="project-links">
          <a href="https://inventory-system-demo.herokuapp.com" target="_blank" rel="noopener noreferrer" class="project-link">View Project</a>
          <a href="https://github.com/Bobby5390/Web-Inventory-System" target="_blank" rel="noopener noreferrer" class="project-link">GitHub</a>
        </div>
      </div>

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=400&h=250&fit=crop&crop=center" alt="AI Mental Health Chatbot" class="project-image">
        <span class="project-icon">🤖</span>
        <h3>AI Mental Health Chatbot</h3>
        <p>An intelligent chatbot designed to provide mental health support and guidance. Implements natural language processing for meaningful conversations.</p>
        <div class="tech-stack">
          <span class="tech-tag">Python</span>
          <span class="tech-tag">NLP</span>
          <span class="tech-tag">Machine Learning</span>
          <span class="tech-tag">Flask</span>
        </div>
        <div class="project-links">
          <a href="https://ai-mental-health-bot.streamlit.app" target="_blank" rel="noopener noreferrer" class="project-link">View Project</a>
          <a href="https://github.com/Bobby5390/AI-Mental-Health-Chatbot" target="_blank" rel="noopener noreferrer" class="project-link">GitHub</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-content">
      <h2>Let's Build Together</h2>
      <p>Inspired by my projects? Let's collaborate and create something extraordinary together!</p>
      
      <div class="contact-info">
        <h3>Get In Touch</h3>
        <p>📧 Email: <a href="mailto:sirajessalakin@gmail.com">sirajessalakin@gmail.com</a></p>
        <p>📱 Phone: <a href="tel:+8801234567890">+880 123 456 7890</a></p>
        <p>📍 Location: Dhaka, Bangladesh</p>
        <p>🎓 University: Daffodil International University</p>
        <p>💼 Available for: Freelance Projects & Full-time Opportunities</p>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2025 Sirajes Salakin. Crafted with passion and innovation.</p>
        <p>Building tomorrow's digital experiences, today.</p>
      </div>
    </div>
  </footer>

</body>
</html>
