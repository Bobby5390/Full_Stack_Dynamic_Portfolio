<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Me - Sirajes Salakin</title>
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
    }

    /* Animated Background Particles */
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
      33% {
        transform: translateX(20px) translateY(-30px) scale(1.1);
        opacity: 0.5;
      }
      66% {
        transform: translateX(-20px) translateY(20px) scale(0.9);
        opacity: 0.4;
      }
    }

    /* Floating Elements */
    .floating-shapes {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
    }

    .floating-shape {
      position: absolute;
      background: linear-gradient(45deg, rgba(0, 188, 212, 0.1), rgba(0, 188, 212, 0.05));
      border-radius: 50%;
      animation: floatAround 20s linear infinite;
    }

    .floating-shape:nth-child(1) {
      width: 60px;
      height: 60px;
      top: 20%;
      left: 10%;
      animation-delay: 0s;
    }

    .floating-shape:nth-child(2) {
      width: 40px;
      height: 40px;
      top: 60%;
      right: 15%;
      animation-delay: 5s;
    }

    .floating-shape:nth-child(3) {
      width: 80px;
      height: 80px;
      bottom: 30%;
      left: 20%;
      animation-delay: 10s;
    }

    .floating-shape:nth-child(4) {
      width: 50px;
      height: 50px;
      top: 40%;
      right: 30%;
      animation-delay: 15s;
    }

    @keyframes floatAround {
      0% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.7;
      }
      25% {
        transform: translateY(-30px) rotate(90deg);
        opacity: 1;
      }
      50% {
        transform: translateY(30px) rotate(180deg);
        opacity: 0.5;
      }
      75% {
        transform: translateY(-20px) rotate(270deg);
        opacity: 0.8;
      }
      100% {
        transform: translateY(0px) rotate(360deg);
        opacity: 0.7;
      }
    }

    /* About Section */
    .about-section {
      padding: 100px 20px;
      background: linear-gradient(135deg, var(--bg-color) 0%, #1a1a1a 50%, var(--bg-color) 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    .about-container {
      max-width: 1200px;
      width: 100%;
      display: grid;
      grid-template-columns: 400px 1fr;
      gap: 60px;
      align-items: center;
      position: relative;
      z-index: 2;
    }

    .profile-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .profile-image-wrapper {
      position: relative;
      margin-bottom: 30px;
    }

    .profile-image {
      width: 300px;
      height: 400px;
      border-radius: 20px;
      overflow: hidden;
      position: relative;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }

    .profile-placeholder {
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #2a2a2a 0%, #1a1a1a 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 4rem;
      color: var(--accent);
      border: 2px solid var(--accent);
    }

    .profile-border {
      position: absolute;
      top: -10px;
      left: -10px;
      right: -10px;
      bottom: -10px;
      background: linear-gradient(45deg, var(--accent), transparent, var(--accent));
      border-radius: 25px;
      z-index: -1;
      animation: profileGlow 3s ease-in-out infinite alternate;
    }

    @keyframes profileGlow {
      0% {
        opacity: 0.5;
        transform: scale(1);
      }
      100% {
        opacity: 1;
        transform: scale(1.02);
      }
    }

    .action-buttons {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .hire-btn, .cv-btn {
      padding: 12px 25px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
      font-size: 0.95rem;
      transition: all 0.3s ease;
      border: 2px solid;
      text-align: center;
      min-width: 120px;
    }

    .hire-btn {
      background: var(--accent);
      color: #000;
      border-color: var(--accent);
    }

    .hire-btn:hover {
      background: transparent;
      color: var(--accent);
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0, 188, 212, 0.3);
    }

    .cv-btn {
      background: transparent;
      color: var(--text-light);
      border-color: var(--text-light);
    }

    .cv-btn:hover {
      background: var(--text-light);
      color: #000;
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2);
    }

    .content-section {
      padding-left: 20px;
    }

    .about-header {
      margin-bottom: 30px;
    }

    .about-header h1 {
      color: var(--text-light);
      font-size: 3.5rem;
      font-weight: 900;
      margin-bottom: 10px;
      line-height: 1.1;
    }

    .header-line {
      width: 80px;
      height: 4px;
      background: var(--accent);
      border-radius: 2px;
      margin-bottom: 20px;
    }

    .about-text {
      color: var(--text-dark);
      line-height: 1.8;
    }

    .about-text .intro {
      color: var(--text-light);
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 20px;
    }

    .about-text p {
      font-size: 1.1rem;
      margin-bottom: 20px;
      text-align: left;
    }

    .about-text strong {
      color: var(--accent);
      font-weight: 600;
    }

    @media (max-width: 968px) {
      .about-container {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
      }

      .content-section {
        padding-left: 0;
      }

      .profile-image {
        width: 250px;
        height: 320px;
      }

      .about-header h1 {
        font-size: 2.8rem;
      }

      .action-buttons {
        margin-bottom: 20px;
      }
    }

    @media (max-width: 768px) {
      .about-section {
        padding: 80px 20px;
      }

      .profile-image {
        width: 200px;
        height: 260px;
      }

      .about-header h1 {
        font-size: 2.2rem;
      }

      .about-text p, .about-text .intro {
        font-size: 1rem;
      }
    }

    .about-section::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: 
        conic-gradient(from 0deg at 50% 50%, transparent 0deg, rgba(0, 188, 212, 0.03) 60deg, transparent 120deg),
        conic-gradient(from 180deg at 50% 50%, transparent 0deg, rgba(0, 188, 212, 0.03) 60deg, transparent 120deg);
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

    .about-section::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--accent), transparent);
      animation: lineGlow 3s ease-in-out infinite alternate;
    }

    @keyframes lineGlow {
      0% {
        opacity: 0.3;
        height: 2px;
      }
      100% {
        opacity: 1;
        height: 4px;
        box-shadow: 0 0 20px rgba(0, 188, 212, 0.5);
      }
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

    .about-section h1 {
      color: var(--accent);
      font-size: 3.5rem;
      margin-bottom: 30px;
      font-weight: 900;
      text-shadow: 0 0 20px rgba(0, 188, 212, 0.3);
      animation: titleGlow 3s ease-in-out infinite alternate, titleFloat 4s ease-in-out infinite;
      position: relative;
      z-index: 2;
    }

    .about-section h1::before {
      content: attr(data-text);
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 188, 212, 0.1), transparent);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      animation: shimmer 2.5s ease-in-out infinite;
    }

    @keyframes titleFloat {
      0%, 100% {
        transform: translateY(0px) scale(1);
      }
      50% {
        transform: translateY(-10px) scale(1.02);
      }
    }

    @keyframes shimmer {
      0% {
        background-position: -200% center;
      }
      100% {
        background-position: 200% center;
      }
    }

    @keyframes titleGlow {
      0% {
        text-shadow: 0 0 20px rgba(0, 188, 212, 0.3);
      }
      100% {
        text-shadow: 0 0 30px rgba(0, 188, 212, 0.6), 0 0 40px rgba(0, 188, 212, 0.4);
      }
    }

    .about-content {
      max-width: 900px;
      margin: 0 auto;
      background: rgba(28, 28, 28, 0.8);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 20px;
      border: 1px solid rgba(0, 188, 212, 0.2);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      animation: slideIn 1s ease-out 0.3s both, contentFloat 6s ease-in-out infinite;
      position: relative;
      overflow: hidden;
      z-index: 2;
    }

    .about-content::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, 
        transparent,
        rgba(0, 188, 212, 0.1),
        transparent,
        rgba(0, 188, 212, 0.1),
        transparent
      );
      border-radius: 22px;
      z-index: -1;
      animation: borderGlow 4s linear infinite;
    }

    @keyframes contentFloat {
      0%, 100% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-5px);
      }
    }

    @keyframes borderGlow {
      0% {
        background-position: 0% 50%;
      }
      100% {
        background-position: 200% 50%;
      }
    }

    @keyframes slideIn {
      0% {
        opacity: 0;
        transform: scale(0.9) translateY(20px);
      }
      100% {
        opacity: 1;
        transform: scale(1) translateY(0);
      }
    }

    .about-content p {
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--text-dark);
      margin-bottom: 20px;
      text-align: left;
    }

    .about-content strong {
      color: var(--accent);
      font-weight: 600;
    }

    .cta-button {
      display: inline-block;
      margin-top: 40px;
      text-decoration: none;
      background: linear-gradient(45deg, var(--accent), #0097a7);
      color: #000;
      padding: 15px 35px;
      border-radius: 30px;
      font-weight: 700;
      font-size: 1.1rem;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0, 188, 212, 0.4);
      animation: buttonFloat 2s ease-in-out infinite, buttonPulse 3s ease-in-out infinite;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .cta-button::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: radial-gradient(circle, rgba(255, 255, 255, 0.3), transparent);
      transition: all 0.4s ease;
      border-radius: 50%;
      transform: translate(-50%, -50%);
      z-index: -1;
    }

    .cta-button:hover::before {
      width: 300px;
      height: 300px;
    }

    @keyframes buttonPulse {
      0%, 100% {
        box-shadow: 0 5px 15px rgba(0, 188, 212, 0.4);
      }
      50% {
        box-shadow: 0 5px 25px rgba(0, 188, 212, 0.6), 0 0 30px rgba(0, 188, 212, 0.3);
      }
    }

    .cta-button:hover {
      transform: translateY(-8px) scale(1.05) rotate(-1deg);
      box-shadow: 0 20px 40px rgba(0, 188, 212, 0.6);
      background: linear-gradient(45deg, #0097a7, var(--accent));
    }

    .skills-highlight {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }

    .skill-item {
      background: rgba(0, 188, 212, 0.1);
      padding: 20px;
      border-radius: 15px;
      border: 1px solid rgba(0, 188, 212, 0.3);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      animation: skillPulse 4s ease-in-out infinite;
    }

    .skill-item:nth-child(1) { animation-delay: 0s; }
    .skill-item:nth-child(2) { animation-delay: 0.5s; }
    .skill-item:nth-child(3) { animation-delay: 1s; }
    .skill-item:nth-child(4) { animation-delay: 1.5s; }

    @keyframes skillPulse {
      0%, 100% {
        box-shadow: 0 0 5px rgba(0, 188, 212, 0.3);
        transform: scale(1);
      }
      50% {
        box-shadow: 0 0 20px rgba(0, 188, 212, 0.4);
        transform: scale(1.02);
      }
    }

    .skill-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 188, 212, 0.2), transparent);
      transition: left 0.5s ease;
    }

    .skill-item:hover::before {
      left: 100%;
    }

    .skill-item:hover {
      transform: translateY(-5px) scale(1.05) rotate(1deg);
      background: rgba(0, 188, 212, 0.2);
      box-shadow: 0 15px 35px rgba(0, 188, 212, 0.4);
      border-color: var(--accent);
    }

    .skill-item h3 {
      color: var(--accent);
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .skill-item p {
      font-size: 0.9rem;
      color: var(--text-dark);
      margin: 0;
    }

    /* Footer */
    .footer {
      background: linear-gradient(135deg, #1a1a1a 0%, var(--bg-color) 50%, #1a1a1a 100%);
      padding: 60px 20px 40px;
      text-align: center;
      border-top: 1px solid rgba(0, 188, 212, 0.2);
      position: relative;
      overflow: hidden;
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

    .social-links {
      display: flex;
      justify-content: center;
      gap: 25px;
      margin-bottom: 30px;
      flex-wrap: wrap;
    }

    .social-link {
      display: inline-block;
      width: 60px;
      height: 60px;
      background: rgba(0, 188, 212, 0.1);
      border: 2px solid rgba(0, 188, 212, 0.3);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: var(--accent);
      font-size: 1.5rem;
      font-weight: bold;
      transition: all 0.3s ease;
      animation: socialFloat 3s ease-in-out infinite;
      position: relative;
      overflow: hidden;
    }

    .social-link:nth-child(2) {
      animation-delay: 0.5s;
    }

    .social-link:nth-child(3) {
      animation-delay: 1s;
    }

    .social-link:nth-child(4) {
      animation-delay: 1.5s;
    }

    @keyframes socialFloat {
      0%, 100% {
        transform: translateY(0px) rotate(0deg);
      }
      50% {
        transform: translateY(-10px) rotate(180deg);
      }
    }

    .social-link::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 188, 212, 0.4), transparent);
      transition: left 0.5s ease;
    }

    .social-link:hover::before {
      left: 100%;
    }

    .social-link:hover {
      transform: translateY(-8px) scale(1.1);
      background: rgba(0, 188, 212, 0.2);
      border-color: var(--accent);
      box-shadow: 0 10px 25px rgba(0, 188, 212, 0.4);
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
      nav {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-right {
        margin-top: 10px;
      }

      .about-section h1 {
        font-size: 2.2rem;
      }

      .about-section p {
        font-size: 1rem;
      }

      .footer h2 {
        font-size: 2rem;
      }

      .social-links {
        gap: 15px;
      }

      .social-link {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
      }

      .contact-info {
        padding: 20px;
      }
    }

    /* Personal Gallery Section */
    .personal-gallery {
      padding: 80px 20px;
      background: linear-gradient(135deg, #1a1a1a 0%, var(--bg-color) 50%, #1a1a1a 100%);
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .personal-gallery::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        radial-gradient(circle at 25% 25%, rgba(0, 188, 212, 0.03) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(0, 188, 212, 0.03) 0%, transparent 50%);
      animation: galleryBackground 12s ease-in-out infinite alternate;
      pointer-events: none;
    }

    @keyframes galleryBackground {
      0% {
        opacity: 0.3;
        transform: scale(1) rotate(0deg);
      }
      100% {
        opacity: 0.7;
        transform: scale(1.05) rotate(2deg);
      }
    }

    .personal-gallery h2 {
      color: var(--accent);
      font-size: 3rem;
      margin-bottom: 20px;
      font-weight: 900;
      text-shadow: 0 0 20px rgba(0, 188, 212, 0.3);
      animation: titleGlow 3s ease-in-out infinite alternate, galleryTitleWave 4s ease-in-out infinite;
      position: relative;
      z-index: 2;
    }

    @keyframes galleryTitleWave {
      0%, 100% {
        transform: translateX(0px) scale(1);
      }
      25% {
        transform: translateX(5px) scale(1.02);
      }
      75% {
        transform: translateX(-5px) scale(0.98);
      }
    }

    .personal-gallery > p {
      color: var(--text-dark);
      font-size: 1.1rem;
      margin-bottom: 50px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .gallery-categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .gallery-category {
      background: rgba(28, 28, 28, 0.8);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      border: 1px solid rgba(0, 188, 212, 0.2);
      padding: 30px;
      transition: all 0.3s ease;
      animation: categoryFloat 4s ease-in-out infinite, categoryGlow 6s ease-in-out infinite alternate;
      position: relative;
      overflow: hidden;
      z-index: 2;
    }

    .gallery-category:nth-child(1) { animation-delay: 0s; }
    .gallery-category:nth-child(2) { animation-delay: 1s; }
    .gallery-category:nth-child(3) { animation-delay: 2s; }
    .gallery-category:nth-child(4) { animation-delay: 3s; }

    @keyframes categoryGlow {
      0% {
        box-shadow: 0 0 10px rgba(0, 188, 212, 0.2);
      }
      100% {
        box-shadow: 0 0 25px rgba(0, 188, 212, 0.4);
      }
    }

    .gallery-category:hover {
      transform: translateY(-20px) scale(1.03) rotate(1deg);
      box-shadow: 0 30px 60px rgba(0, 188, 212, 0.4);
      border-color: var(--accent);
    }

    .gallery-category::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 188, 212, 0.1), transparent);
      transition: left 0.6s ease;
    }

    .gallery-category:hover::before {
      left: 100%;
    }

    .gallery-category::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: radial-gradient(circle, rgba(0, 188, 212, 0.1), transparent);
      transition: all 0.4s ease;
      border-radius: 50%;
      transform: translate(-50%, -50%);
      z-index: -1;
    }

    .gallery-category:hover::after {
      width: 200px;
      height: 200px;
    }

    .category-icon {
      font-size: 4rem;
      margin-bottom: 20px;
      animation: iconBounce 3s ease-in-out infinite, iconRotate 8s linear infinite;
      display: block;
      position: relative;
      z-index: 2;
    }

    @keyframes iconBounce {
      0%, 100% {
        transform: scale(1) translateY(0px);
      }
      50% {
        transform: scale(1.1) translateY(-10px);
      }
    }

    @keyframes iconRotate {
      0% {
        transform: rotate(0deg);
      }
      25% {
        transform: rotate(5deg);
      }
      50% {
        transform: rotate(0deg);
      }
      75% {
        transform: rotate(-5deg);
      }
      100% {
        transform: rotate(0deg);
      }
    }

    .category-title {
      color: var(--accent);
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 15px;
      text-shadow: 0 0 10px rgba(0, 188, 212, 0.3);
    }

    .category-description {
      color: var(--text-dark);
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 25px;
    }

    .photo-placeholder {
      width: 100%;
      height: 180px;
      background: linear-gradient(135deg, rgba(0, 188, 212, 0.1), rgba(0, 188, 212, 0.2));
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px dashed rgba(0, 188, 212, 0.3);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .photo-placeholder:hover {
      background: linear-gradient(135deg, rgba(0, 188, 212, 0.2), rgba(0, 188, 212, 0.3));
      border-color: var(--accent);
      transform: scale(1.02);
    }

    .photo-placeholder-text {
      color: var(--accent);
      font-weight: 600;
      font-size: 1.1rem;
      text-align: center;
      z-index: 2;
    }

    .photo-placeholder::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100px;
      height: 100px;
      background: radial-gradient(circle, rgba(0, 188, 212, 0.2), transparent);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      animation: photoGlow 2s ease-in-out infinite;
    }

    @keyframes photoGlow {
      0%, 100% {
        opacity: 0.5;
        transform: translate(-50%, -50%) scale(1);
      }
      50% {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1.2);
      }
    }

    .photo-count {
      position: absolute;
      top: 15px;
      right: 15px;
      background: rgba(0, 188, 212, 0.2);
      color: var(--accent);
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 600;
      border: 1px solid rgba(0, 188, 212, 0.3);
    }

    /* Center the Friends category content */
    .gallery-category:nth-child(4) {
      text-align: center;
    }

    .gallery-category:nth-child(4) .category-description {
      text-align: center;
    }

    @media (max-width: 768px) {
      .personal-gallery h2 {
        font-size: 2.2rem;
      }

      .gallery-categories {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .gallery-category {
        padding: 20px;
      }

      .category-icon {
        font-size: 3rem;
      }

      .category-title {
        font-size: 1.5rem;
      }

      .photo-placeholder {
        height: 150px;
      }
    }
  </style>
</head>
<body>

  <!-- Floating Background Shapes -->
  <div class="floating-shapes">
    <div class="floating-shape"></div>
    <div class="floating-shape"></div>
    <div class="floating-shape"></div>
    <div class="floating-shape"></div>
  </div>

  <!-- Header Component -->
  <x-header />

  <!-- About Section -->
  <section class="about-section">
    <div class="about-container">
      <div class="profile-section">
        <div class="profile-image-wrapper">
          <div class="profile-image">
            <!-- Profile image - your actual photo -->
            <img src="{{ asset('images/profile.jpg') }}" alt="Sirajes Salakin Profile Picture" 
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 18px;"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
            <!-- Fallback placeholder if image fails to load -->
            <div class="profile-placeholder" style="display: none;">
              <span>👤</span>
            </div>
          </div>
          <div class="profile-border"></div>
        </div>
        <div class="action-buttons">
          <a href="#contact" class="hire-btn">Hire Me</a>
          <a href="{{ asset('cv/sirajes-cv.pdf') }}" class="cv-btn" download>Download CV</a>
        </div>
      </div>
      
      <div class="content-section">
        <div class="about-header">
          <h1>About Me</h1>
          <div class="header-line"></div>
        </div>
        
        <div class="about-text">
          <p class="intro">Hi, I'm Sirajes Salakin.</p>
          
          <p>I'm a Computer Science student at Daffodil International University, currently in my 9th semester. I'm deeply passionate about technology and love turning ideas into functional, user-friendly applications.</p>
          
          <p>Over the past few semesters, I've worked on diverse projects—from web-based inventory systems using Bash scripting to mobile applications like <strong>JobFlick</strong> and <strong>One Solution</strong>, built with Flutter and Firebase.</p>
          
          <p>I'm also exploring AI and IoT through innovative projects like mental health chatbots and smart lockers. I enjoy working on real-world problems, learning new technologies, and building digital solutions that make life easier.</p>
          
          <p>Whether it's developing a responsive website, designing a mobile app, or integrating payment gateways—I'm always up for the challenge!</p>
        </div>
      </div>
    </div>
  </section>



  <!-- Personal Gallery Section -->
  <section class="personal-gallery">
    <h2>Life Through My Lens</h2>
    <p>A glimpse into my personal world - the moments, people, and places that inspire me</p>
    
    <div class="gallery-categories">
      <div class="gallery-category">
        <span class="category-icon">🤳</span>
        <h3 class="category-title">About Me</h3>
        <p class="category-description">
          Personal moments, achievements, and milestones that define my journey as a developer and student.
        </p>
        <div class="photo-placeholder">
          <div class="photo-placeholder-text">
            Upload Personal Photos<br>
            <small>Graduation, coding sessions, achievements</small>
          </div>
          <span class="photo-count">0 Photos</span>
        </div>
      </div>

      <div class="gallery-category">
        <span class="category-icon">👨‍👩‍👧‍👦</span>
        <h3 class="category-title">Family</h3>
        <p class="category-description">
          My biggest support system - family moments, celebrations, and the people who believe in my dreams.
        </p>
        <div class="photo-placeholder">
          <div class="photo-placeholder-text">
            Upload Family Photos<br>
            <small>Family gatherings, celebrations, memories</small>
          </div>
          <span class="photo-count">0 Photos</span>
        </div>
      </div>

      <div class="gallery-category">
        <span class="category-icon">🌿</span>
        <h3 class="category-title">Nature</h3>
        <p class="category-description">
          Finding peace and inspiration in nature - landscapes, sunsets, and beautiful moments from Bangladesh and beyond.
        </p>
        <div class="photo-placeholder">
          <div class="photo-placeholder-text">
            Upload Nature Photos<br>
            <small>Landscapes, sunsets, travel moments</small>
          </div>
          <span class="photo-count">0 Photos</span>
        </div>
      </div>

      <div class="gallery-category">
        <span class="category-icon">👥</span>
        <h3 class="category-title">Friends</h3>
        <p class="category-description">
          University life, friendships, and the amazing people I've met during my journey at DIU and in tech communities.
        </p>
        <div class="photo-placeholder">
          <div class="photo-placeholder-text">
            Upload Friends Photos<br>
            <small>University life, hangouts, events</small>
          </div>
          <span class="photo-count">0 Photos</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-content">
      
      <div class="contact-info">
        <h3>Get In Touch</h3>
        <p>📧 Email: <a href="mailto:sirajes@example.com">sirajessalakin@gmail.com</a></p>
        <p>📱 Phone: <a href="tel:+8801234567890">+880 123 456 7890</a></p>
        <p>📍 Location: Dhaka, Bangladesh</p>
        <p>🎓 University: Daffodil International University</p>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2025 Sirajes Salakin. Crafted with passion and innovation.</p>
        <p>Building tomorrow's digital experiences, today.</p>
      </div>
    </div>
  </footer>

</body>
</html>
