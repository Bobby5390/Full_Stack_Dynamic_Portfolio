<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Skills - Sirajes Salakin</title>
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
        radial-gradient(circle at 20% 50%, rgba(0, 188, 212, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(0, 188, 212, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(0, 188, 212, 0.05) 0%, transparent 50%);
      animation: backgroundShift 15s ease-in-out infinite;
      pointer-events: none;
      z-index: -1;
    }

    @keyframes backgroundShift {
      0%, 100% {
        transform: translateX(0) translateY(0) scale(1);
        opacity: 0.3;
      }
      50% {
        transform: translateX(10px) translateY(-20px) scale(1.05);
        opacity: 0.5;
      }
    }

    /* Enhanced Floating Particles */
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
      animation: particleFloat 8s linear infinite;
      opacity: 0.7;
    }

    .particle:nth-child(odd) {
      width: 6px;
      height: 6px;
      background: radial-gradient(circle, var(--accent), rgba(0, 188, 212, 0.3));
      box-shadow: 0 0 10px var(--accent), 0 0 20px var(--accent);
    }

    .particle:nth-child(even) {
      width: 4px;
      height: 4px;
      background: radial-gradient(circle, #ff6b6b, rgba(255, 107, 107, 0.3));
      box-shadow: 0 0 8px #ff6b6b;
      animation-duration: 10s;
    }

    /* Magic Orbs */
    .magic-orb {
      position: absolute;
      width: 2px;
      height: 2px;
      background: linear-gradient(45deg, #fff, var(--accent));
      border-radius: 50%;
      animation: orbFloat 12s linear infinite;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.8);
    }

    .particle:nth-child(1) { left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { left: 20%; animation-delay: 2s; }
    .particle:nth-child(3) { left: 30%; animation-delay: 4s; }
    .particle:nth-child(4) { left: 40%; animation-delay: 6s; }
    .particle:nth-child(5) { left: 50%; animation-delay: 1s; }
    .particle:nth-child(6) { left: 60%; animation-delay: 3s; }
    .particle:nth-child(7) { left: 70%; animation-delay: 5s; }
    .particle:nth-child(8) { left: 80%; animation-delay: 7s; }

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
        transform: translateY(50vh) rotate(180deg) scale(1.2);
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

    @keyframes orbFloat {
      0% {
        transform: translateY(100vh) translateX(0) rotate(0deg);
        opacity: 0;
      }
      20% {
        opacity: 1;
      }
      80% {
        opacity: 1;
      }
      100% {
        transform: translateY(-100px) translateX(50px) rotate(360deg);
        opacity: 0;
      }
    }

    .skills-container {
      text-align: center;
      padding: 100px 20px 80px;
      max-width: 1200px;
      margin: 0 auto;
      background: linear-gradient(135deg, var(--bg-color) 0%, #1a1a1a 50%, var(--bg-color) 100%);
      min-height: 100vh;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .skills-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        conic-gradient(from 0deg at 50% 50%, transparent 0deg, rgba(0, 188, 212, 0.02) 60deg, transparent 120deg);
      animation: sectionRotate 30s linear infinite;
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

    .skills-container h2 {
      font-size: 3.5rem;
      color: var(--accent);
      margin-bottom: 40px;
      font-weight: 900;
      text-shadow: 
        0 0 20px rgba(0, 188, 212, 0.5),
        0 0 40px rgba(0, 188, 212, 0.3),
        0 0 60px rgba(0, 188, 212, 0.2);
      animation: 
        titleGlow 3s ease-in-out infinite alternate, 
        titleFloat 4s ease-in-out infinite,
        titlePulse 2s ease-in-out infinite;
      position: relative;
      z-index: 2;
      background: linear-gradient(45deg, var(--accent), #fff, var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      background-size: 200% 200%;
      animation-name: 
        titleGlow, 
        titleFloat, 
        titlePulse, 
        gradientShift;
      animation-duration: 3s, 4s, 2s, 3s;
      animation-iteration-count: infinite, infinite, infinite, infinite;
      animation-timing-function: ease-in-out;
      animation-direction: alternate, normal, normal, normal;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Portfolio Link Styles */
    .portfolio-link {
      margin-bottom: 50px;
      position: relative;
      z-index: 2;
    }

    .main-website-btn {
      display: inline-block;
      background: linear-gradient(135deg, rgba(0, 188, 212, 0.2) 0%, rgba(0, 188, 212, 0.1) 100%);
      border: 2px solid var(--accent);
      color: var(--accent);
      text-decoration: none;
      padding: 15px 30px;
      border-radius: 50px;
      font-size: 1.1rem;
      font-weight: 600;
      transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
      backdrop-filter: blur(15px);
      box-shadow: 
        0 8px 25px rgba(0, 188, 212, 0.2),
        0 0 0 rgba(0, 188, 212, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      animation: pulseGlow 3s ease-in-out infinite, buttonFloat 4s ease-in-out infinite;
      transform-style: preserve-3d;
    }

    @keyframes buttonFloat {
      0%, 100% { transform: translateY(0) rotateX(0deg); }
      50% { transform: translateY(-8px) rotateX(5deg); }
    }

    .main-website-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(
        90deg, 
        transparent, 
        rgba(0, 188, 212, 0.4), 
        rgba(255, 255, 255, 0.3), 
        rgba(0, 188, 212, 0.4), 
        transparent
      );
      transition: left 0.8s ease;
    }

    .main-website-btn:hover::before {
      left: 100%;
      animation: shimmer 0.8s ease-in-out;
    }

    @keyframes shimmer {
      0% { transform: skewX(-20deg); }
      100% { transform: skewX(20deg); }
    }

    .main-website-btn:hover {
      background: rgba(0, 188, 212, 0.3);
      transform: translateY(-5px) scale(1.08) rotateY(5deg);
      box-shadow: 
        0 20px 40px rgba(0, 188, 212, 0.5),
        0 0 30px rgba(0, 188, 212, 0.6),
        inset 0 1px 0 rgba(255, 255, 255, 0.3);
      text-shadow: 0 0 20px rgba(0, 188, 212, 1);
      border-color: #ffffff;
      color: #ffffff;
      animation: buttonGlow 0.5s ease-in-out;
    }

    @keyframes buttonGlow {
      0% { filter: brightness(1); }
      50% { filter: brightness(1.2) saturate(1.3); }
      100% { filter: brightness(1.1); }
    }

    @keyframes pulseGlow {
      0% { 
        box-shadow: 
          0 8px 25px rgba(0, 188, 212, 0.2),
          0 0 20px rgba(0, 188, 212, 0.1);
        filter: brightness(1);
      }
      50% { 
        box-shadow: 
          0 12px 35px rgba(0, 188, 212, 0.4), 
          0 0 30px rgba(0, 188, 212, 0.3),
          0 0 60px rgba(0, 188, 212, 0.2);
        filter: brightness(1.1);
      }
      100% { 
        box-shadow: 
          0 8px 25px rgba(0, 188, 212, 0.2),
          0 0 20px rgba(0, 188, 212, 0.1);
        filter: brightness(1);
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
          0 0 70px rgba(0, 188, 212, 0.4);
      }
    }

    @keyframes titleFloat {
      0%, 100% {
        transform: translateY(0px) scale(1) rotateX(0deg);
      }
      50% {
        transform: translateY(-15px) scale(1.03) rotateX(5deg);
      }
    }

    @keyframes titlePulse {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.02);
      }
    }

    .skill-tags {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 20px;
      max-width: 900px;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }

    .skill-tags span {
      background: rgba(28, 28, 28, 0.8);
      backdrop-filter: blur(15px);
      color: var(--text-light);
      padding: 15px 25px;
      border-radius: 25px;
      font-size: 1rem;
      font-weight: 600;
      border: 1px solid rgba(0, 188, 212, 0.3);
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 
        0 5px 15px rgba(0, 0, 0, 0.3),
        0 0 0 rgba(0, 188, 212, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      cursor: pointer;
      position: relative;
      overflow: hidden;
      animation: skillFloat 4s ease-in-out infinite;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      min-height: 60px;
      transform-style: preserve-3d;
      perspective: 1000px;
    }

    /* Cool skill entrance animation */
    .skill-tags span {
      animation: skillEntrance 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) both;
    }

    /* Skill Images */
    .skill-tags span img {
      width: 28px;
      height: 28px;
      object-fit: contain;
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      filter: brightness(0.8) drop-shadow(0 0 5px rgba(0, 188, 212, 0.3));
      animation: imageGlow 3s ease-in-out infinite alternate;
    }

    @keyframes imageGlow {
      0% {
        filter: brightness(0.8) drop-shadow(0 0 5px rgba(0, 188, 212, 0.3));
      }
      100% {
        filter: brightness(1) drop-shadow(0 0 10px rgba(0, 188, 212, 0.5));
      }
    }

    .skill-tags span:hover img {
      filter: brightness(1.3) drop-shadow(0 0 15px rgba(0, 188, 212, 0.8)) hue-rotate(15deg);
      transform: scale(1.2) rotate(360deg) translateZ(20px);
      animation: imageSpiral 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    @keyframes imageSpiral {
      0% { transform: scale(1) rotate(0deg); }
      50% { transform: scale(1.3) rotate(180deg) translateY(-5px); }
      100% { transform: scale(1.2) rotate(360deg); }
    }

    /* Specific skill hover colors */
    .skill-tags span[data-skill="javascript"]:hover { 
      border-color: #f7df1e; 
      box-shadow: 0 15px 30px rgba(247, 223, 30, 0.3);
    }
    .skill-tags span[data-skill="java"]:hover { 
      border-color: #ed8b00; 
      box-shadow: 0 15px 30px rgba(237, 139, 0, 0.3);
    }
    .skill-tags span[data-skill="php"]:hover { 
      border-color: #777bb4; 
      box-shadow: 0 15px 30px rgba(119, 123, 180, 0.3);
    }
    .skill-tags span[data-skill="python"]:hover { 
      border-color: #3776ab; 
      box-shadow: 0 15px 30px rgba(55, 118, 171, 0.3);
    }
    .skill-tags span[data-skill="mysql"]:hover { 
      border-color: #4479a1; 
      box-shadow: 0 15px 30px rgba(68, 121, 161, 0.3);
    }
    .skill-tags span[data-skill="cpp"]:hover { 
      border-color: #00599c; 
      box-shadow: 0 15px 30px rgba(0, 89, 156, 0.3);
    }
    .skill-tags span[data-skill="android"]:hover { 
      border-color: #3ddc84; 
      box-shadow: 0 15px 30px rgba(61, 220, 132, 0.3);
    }
    .skill-tags span[data-skill="html"]:hover { 
      border-color: #e34f26; 
      box-shadow: 0 15px 30px rgba(227, 79, 38, 0.3);
    }
    .skill-tags span[data-skill="css"]:hover { 
      border-color: #1572b6; 
      box-shadow: 0 15px 30px rgba(21, 114, 182, 0.3);
    }
    .skill-tags span[data-skill="flutter"]:hover { 
      border-color: #02569b; 
      box-shadow: 0 15px 30px rgba(2, 86, 155, 0.3);
    }
    .skill-tags span[data-skill="firebase"]:hover { 
      border-color: #ffca28; 
      box-shadow: 0 15px 30px rgba(255, 202, 40, 0.3);
    }
    .skill-tags span[data-skill="laravel"]:hover { 
      border-color: #ff2d20; 
      box-shadow: 0 15px 30px rgba(255, 45, 32, 0.3);
    }

    .skill-tags span:nth-child(1) { animation-delay: 0s; }
    .skill-tags span:nth-child(2) { animation-delay: 0.1s; }
    .skill-tags span:nth-child(3) { animation-delay: 0.2s; }
    .skill-tags span:nth-child(4) { animation-delay: 0.3s; }
    .skill-tags span:nth-child(5) { animation-delay: 0.4s; }
    .skill-tags span:nth-child(6) { animation-delay: 0.5s; }
    .skill-tags span:nth-child(7) { animation-delay: 0.6s; }
    .skill-tags span:nth-child(8) { animation-delay: 0.7s; }
    .skill-tags span:nth-child(9) { animation-delay: 0.8s; }
    .skill-tags span:nth-child(10) { animation-delay: 0.9s; }
    .skill-tags span:nth-child(11) { animation-delay: 1s; }
    .skill-tags span:nth-child(12) { animation-delay: 1.1s; }

    @keyframes skillEntrance {
      0% {
        opacity: 0;
        transform: translateY(50px) rotateX(90deg) scale(0.8);
      }
      100% {
        opacity: 1;
        transform: translateY(0) rotateX(0deg) scale(1);
      }
    }

    @keyframes skillFloat {
      0%, 100% {
        transform: translateY(0px) scale(1) rotateZ(0deg);
      }
      25% {
        transform: translateY(-8px) scale(1.02) rotateZ(1deg);
      }
      50% {
        transform: translateY(-5px) scale(1.03) rotateZ(0deg);
      }
      75% {
        transform: translateY(-10px) scale(1.01) rotateZ(-1deg);
      }
    }

    .skill-tags span::before {
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

    .skill-tags span:hover::before {
      left: 100%;
    }

    .skill-tags span::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: radial-gradient(
        circle, 
        rgba(0, 188, 212, 0.4) 0%, 
        rgba(0, 188, 212, 0.2) 50%, 
        transparent 100%
      );
      transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      z-index: -1;
    }

    .skill-tags span:hover::after {
      width: 300px;
      height: 300px;
      background: radial-gradient(
        circle, 
        rgba(0, 188, 212, 0.6) 0%, 
        rgba(0, 188, 212, 0.3) 50%, 
        transparent 100%
      );
    }

    .skill-tags span:hover {
      background: rgba(0, 188, 212, 0.2);
      color: var(--accent);
      transform: translateY(-12px) scale(1.08) rotateY(10deg) rotateX(5deg);
      box-shadow: 
        0 20px 40px rgba(0, 188, 212, 0.5),
        0 0 30px rgba(0, 188, 212, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.3);
      border-color: var(--accent);
      text-shadow: 0 0 15px rgba(0, 188, 212, 0.8);
      backdrop-filter: blur(20px);
    }

    @media (max-width: 768px) {
      .skills-container {
        padding: 80px 20px 60px;
      }

      .skills-container h2 {
        font-size: 2.5rem;
        margin-bottom: 30px;
      }

      .portfolio-link {
        margin-bottom: 40px;
      }

      .main-website-btn {
        font-size: 1rem;
        padding: 12px 25px;
      }

      .skill-tags {
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 15px;
      }

      .skill-tags span {
        font-size: 0.85rem;
        padding: 12px 15px;
        gap: 8px;
        min-height: 50px;
        flex-direction: column;
      }

      .skill-tags span img {
        width: 20px;
        height: 20px;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Footer Styles */
    .footer {
      background: linear-gradient(135deg, #1a1a1a 0%, var(--bg-color) 50%, #1a1a1a 100%);
      border-top: 1px solid rgba(0, 188, 212, 0.2);
      margin-top: 80px;
      position: relative;
      overflow: hidden;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        radial-gradient(circle at 30% 0%, rgba(0, 188, 212, 0.03) 0%, transparent 50%),
        radial-gradient(circle at 70% 100%, rgba(0, 188, 212, 0.03) 0%, transparent 50%);
      pointer-events: none;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 60px 20px 40px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
      position: relative;
      z-index: 2;
    }

    .footer-section {
      text-align: center;
      animation: footerFadeIn 1s ease-out;
    }

    .footer-section:nth-child(1) { animation-delay: 0.2s; }
    .footer-section:nth-child(2) { animation-delay: 0.4s; }
    .footer-section:nth-child(3) { animation-delay: 0.6s; }

    @keyframes footerFadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .footer-section h3 {
      color: var(--accent);
      font-size: 1.3rem;
      margin-bottom: 20px;
      font-weight: 600;
      text-shadow: 0 0 10px rgba(0, 188, 212, 0.3);
    }

    .contact-info p {
      color: var(--text-dark);
      margin-bottom: 10px;
      font-size: 0.95rem;
      transition: color 0.3s ease;
    }

    .contact-info p:hover {
      color: var(--text-light);
    }

    .social-links {
      display: flex;
      flex-direction: column;
      gap: 12px;
      align-items: center;
    }

    .social-link, .quick-links a {
      color: var(--text-dark);
      text-decoration: none;
      font-size: 0.95rem;
      padding: 8px 16px;
      border-radius: 20px;
      border: 1px solid transparent;
      transition: all 0.3s ease;
      background: rgba(28, 28, 28, 0.5);
      backdrop-filter: blur(5px);
      display: inline-block;
      position: relative;
      overflow: hidden;
    }

    .social-link::before, .quick-links a::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 188, 212, 0.1), transparent);
      transition: left 0.5s ease;
    }

    .social-link:hover::before, .quick-links a:hover::before {
      left: 100%;
    }

    .social-link:hover, .quick-links a:hover {
      color: var(--accent);
      border-color: var(--accent);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 188, 212, 0.3);
      text-shadow: 0 0 8px rgba(0, 188, 212, 0.5);
    }

    .quick-links {
      display: flex;
      flex-direction: column;
      gap: 12px;
      align-items: center;
    }

    .footer-bottom {
      border-top: 1px solid rgba(0, 188, 212, 0.1);
      padding: 30px 20px;
      text-align: center;
      position: relative;
      z-index: 2;
    }

    .footer-bottom p {
      color: var(--text-dark);
      font-size: 0.9rem;
      margin: 0;
    }

    @media (max-width: 768px) {
      .footer-content {
        grid-template-columns: 1fr;
        gap: 30px;
        padding: 40px 20px 30px;
      }
      
      .footer-section {
        text-align: center;
      }
      
      .social-links, .quick-links {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
      }
      
      .social-link, .quick-links a {
        font-size: 0.85rem;
        padding: 6px 12px;
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
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="magic-orb" style="left: 15%; animation-delay: 0.5s;"></div>
    <div class="magic-orb" style="left: 35%; animation-delay: 2.5s;"></div>
    <div class="magic-orb" style="left: 55%; animation-delay: 4.5s;"></div>
    <div class="magic-orb" style="left: 75%; animation-delay: 6.5s;"></div>
    <div class="magic-orb" style="left: 85%; animation-delay: 1.5s;"></div>
  </div>

  <!-- Header Component -->
  <x-header />

  <!-- Skills Section -->
  <div class="skills-container">
    <h2>My Skills</h2>
    
    <!-- Portfolio Link -->
    <div class="portfolio-link">
      <a href="https://sirajessalakin-portfolio.com" target="_blank" class="main-website-btn">
        🌐 Visit My Portfolio Website
      </a>
    </div>
    
    <!-- Skills with Images -->
    <div class="skill-tags">
      <span data-skill="javascript">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" />
        JavaScript
      </span>
      <span data-skill="java">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java" />
        Java
      </span>
      <span data-skill="php">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" />
        PHP
      </span>
      <span data-skill="python">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python" />
        Python
      </span>
      <span data-skill="mysql">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" />
        MySQL
      </span>
      <span data-skill="cpp">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg" alt="C++" />
        C++
      </span>
      <span data-skill="android">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/android/android-original.svg" alt="Android" />
        Android
      </span>
      <span data-skill="html">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" />
        HTML
      </span>
      <span data-skill="css">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS" />
        CSS
      </span>
      <span data-skill="flutter">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="Flutter" />
        Flutter
      </span>
      <span data-skill="firebase">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" alt="Firebase" />
        Firebase
      </span>
      <span data-skill="laravel">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="Laravel" />
        Laravel
      </span>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3>Contact</h3>
        <div class="contact-info">
          <p>📧 sirajessalakin@example.com</p>
          <p>📱 +880 123 456 789</p>
          <p>📍 Dhaka, Bangladesh</p>
        </div>
      </div>
      
      <div class="footer-section">
        <h3>Follow Me</h3>
        <div class="social-links">
          <a href="#" class="social-link">LinkedIn</a>
          <a href="#" class="social-link">GitHub</a>
          <a href="#" class="social-link">Twitter</a>
          <a href="#" class="social-link">Facebook</a>
        </div>
      </div>
      
      <div class="footer-section">
        <h3>Quick Links</h3>
        <div class="quick-links">
          <a href="{{ url('/') }}">Home</a>
          <a href="{{ url('/about') }}">About</a>
          <a href="{{ url('/work') }}">Projects</a>
          <a href="{{ url('/education') }}">Education</a>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <p>&copy; 2025 Sirajes Salakin. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
