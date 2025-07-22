<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Education - Sirajes Salakin</title>
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
      min-height: 100vh;
      overflow-x: hidden;
      position: relative;
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
      animation: particleFloat 12s linear infinite;
      opacity: 0.7;
    }

    .particle:nth-child(odd) {
      width: 5px;
      height: 5px;
      background: radial-gradient(circle, var(--accent), rgba(0, 188, 212, 0.3));
      box-shadow: 0 0 15px var(--accent);
    }

    .particle:nth-child(even) {
      width: 3px;
      height: 3px;
      background: radial-gradient(circle, #ff6b6b, rgba(255, 107, 107, 0.3));
      box-shadow: 0 0 10px #ff6b6b;
      animation-duration: 15s;
    }

    .particle:nth-child(1) { left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { left: 25%; animation-delay: 3s; }
    .particle:nth-child(3) { left: 40%; animation-delay: 6s; }
    .particle:nth-child(4) { left: 55%; animation-delay: 9s; }
    .particle:nth-child(5) { left: 70%; animation-delay: 2s; }
    .particle:nth-child(6) { left: 85%; animation-delay: 5s; }

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

    @keyframes backgroundShift {
      0%, 100% {
        transform: translateX(0) translateY(0) scale(1);
        opacity: 0.4;
      }
      33% {
        transform: translateX(15px) translateY(-25px) scale(1.08);
        opacity: 0.6;
      }
      66% {
        transform: translateX(-10px) translateY(20px) scale(0.95);
        opacity: 0.7;
      }
    }

    .education-section {
      padding: 100px 20px 80px;
      text-align: center;
      max-width: 1200px;
      margin: 0 auto;
      background: linear-gradient(135deg, var(--bg-color) 0%, #1a1a1a 50%, var(--bg-color) 100%);
      min-height: 100vh;
      position: relative;
    }

    .education-section::before {
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

    .education-section h2 {
      font-size: 3.5rem;
      color: var(--accent);
      margin-bottom: 50px;
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

    @keyframes titlePulse {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.02);
      }
    }

    .edu-boxes {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 40px;
      margin-top: 60px;
      position: relative;
      z-index: 2;
    }

    .edu-box {
      background: rgba(28, 28, 28, 0.85);
      backdrop-filter: blur(15px);
      border-radius: 25px;
      border: 1px solid rgba(0, 188, 212, 0.3);
      box-shadow: 
        0 10px 30px rgba(0, 0, 0, 0.5),
        0 0 0 rgba(0, 188, 212, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      padding: 30px;
      text-align: center;
      transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      cursor: pointer;
      text-decoration: none;
      color: inherit;
      position: relative;
      overflow: hidden;
      animation: eduBoxFloat 6s ease-in-out infinite, eduBoxEntrance 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      transform-style: preserve-3d;
      perspective: 1000px;
    }

    @keyframes eduBoxEntrance {
      0% {
        opacity: 0;
        transform: translateY(60px) rotateX(45deg) scale(0.8);
      }
      100% {
        opacity: 1;
        transform: translateY(0) rotateX(0deg) scale(1);
      }
    }

    .edu-box:nth-child(1) { animation-delay: 0s, 0s; }
    .edu-box:nth-child(2) { animation-delay: 0.5s, 0.3s; }
    .edu-box:nth-child(3) { animation-delay: 1s, 0.6s; }

    @keyframes eduBoxFloat {
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

    .edu-box::before {
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

    .edu-box:hover::before {
      left: 100%;
      animation: shimmerEffect 0.8s ease-in-out;
    }

    @keyframes shimmerEffect {
      0% { transform: skewX(-15deg); }
      50% { transform: skewX(15deg); }
      100% { transform: skewX(0deg); }
    }

    .edu-box:hover {
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

    .edu-box img {
      width: 100%;
      height: 200px;
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

    .edu-box:hover img {
      transform: scale(1.08) rotate(2deg);
      border-color: var(--accent);
      box-shadow: 
        0 15px 35px rgba(0, 188, 212, 0.5),
        0 0 30px rgba(0, 188, 212, 0.3);
      filter: brightness(1.1) saturate(1.2);
      animation: imageFloat 2s ease-in-out infinite;
    }

    @keyframes imageFloat {
      0%, 100% { transform: scale(1.08) rotate(2deg) translateY(0); }
      50% { transform: scale(1.08) rotate(2deg) translateY(-3px); }
    }

    .edu-box h3 {
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

    @keyframes titlePulse {
      0% {
        text-shadow: 
          0 0 10px rgba(0, 188, 212, 0.3),
          0 0 20px rgba(0, 188, 212, 0.2);
        transform: scale(1);
      }
      100% {
        text-shadow: 
          0 0 20px rgba(0, 188, 212, 0.6),
          0 0 30px rgba(0, 188, 212, 0.4);
        transform: scale(1.02);
      }
    }

    .edu-box p {
      font-size: 1rem;
      color: var(--text-dark);
      line-height: 1.6;
      font-weight: 500;
    }

    @media (max-width: 768px) {
      .education-section {
        padding: 80px 20px 60px;
      }

      .education-section h2 {
        font-size: 2.5rem;
      }

      .edu-boxes {
        grid-template-columns: 1fr;
        gap: 25px;
        margin-top: 40px;
      }

      .edu-box {
        padding: 25px;
      }

      .edu-box img {
        height: 150px;
      }

      .edu-box h3 {
        font-size: 1.3rem;
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
      text-shadow: 
        0 0 20px rgba(0, 188, 212, 0.4),
        0 0 40px rgba(0, 188, 212, 0.3);
      animation: 
        footerTitleGlow 3s ease-in-out infinite alternate,
        footerTitleFloat 4s ease-in-out infinite,
        footerGradientShift 5s ease-in-out infinite;
      background: linear-gradient(45deg, var(--accent), #fff, var(--accent), #ff6b6b);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      background-size: 300% 300%;
    }

    @keyframes footerGradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    @keyframes footerTitleFloat {
      0%, 100% { transform: translateY(0) scale(1); }
      50% { transform: translateY(-8px) scale(1.02); }
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
      background: rgba(28, 28, 28, 0.7);
      backdrop-filter: blur(15px);
      padding: 30px;
      border-radius: 25px;
      border: 1px solid rgba(0, 188, 212, 0.3);
      margin-bottom: 30px;
      animation: 
        contactSlide 1.2s cubic-bezier(0.175, 0.885, 0.32, 1.275),
        contactFloat 6s ease-in-out infinite;
      position: relative;
      overflow: hidden;
      box-shadow: 
        0 10px 30px rgba(0, 0, 0, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    .contact-info::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 188, 212, 0.1), transparent);
      animation: contactShimmer 3s ease-in-out infinite;
    }

    @keyframes contactShimmer {
      0% { left: -100%; }
      50% { left: 100%; }
      100% { left: -100%; }
    }

    @keyframes contactFloat {
      0%, 100% { transform: translateY(0) scale(1); }
      50% { transform: translateY(-5px) scale(1.01); }
    }

    @keyframes contactSlide {
      0% {
        opacity: 0;
        transform: translateY(40px) scale(0.9) rotateX(15deg);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1) rotateX(0deg);
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
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      padding: 2px 8px;
      border-radius: 8px;
    }

    .contact-info a::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, transparent, rgba(0, 188, 212, 0.2), transparent);
      border-radius: 8px;
      opacity: 0;
      transition: all 0.3s ease;
      transform: scale(0.8);
    }

    .contact-info a:hover::before {
      opacity: 1;
      transform: scale(1);
    }

    .contact-info a:hover {
      color: var(--text-light);
      text-shadow: 0 0 15px rgba(0, 188, 212, 0.8);
      transform: translateY(-2px) scale(1.05);
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
  </div>

  <!-- Header Component -->
  <x-header />

  <!-- Education Section -->
  <section class="education-section">
    <h2>My Education</h2>
    <div class="edu-boxes">
      <a href="https://daffodilvarsity.edu.bd/" target="_blank" class="edu-box" rel="noopener">
        <img src="https://studentshub.daffodilvarsity.edu.bd/assets/img/about/1719679319.jpeg" alt="DIU">
        <h3>Daffodil International University</h3>
        <p>B.Sc in Computer Science & Engineering (2022 - Present)</p>
      </a>
      <a href="https://www.gpcpsc.edu.bd/" target="_blank" class="edu-box" rel="noopener">
        <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4np95vCidc9in04DkXUIZQmvo7YS9_jaMzykvNmdCpt5XJSYKWPYUR_3o3QC1yi0SkNAZz9KSN1pH-_DPdJIlPK29d3nIrr64CPbUwMRoC-xB3b3taG43Wghdm5rL-EP5CfkkrnZ=s1360-w1360-h1020-rw" alt="HSC">
        <h3>HSC - Gazipur Cantonment College</h3>
        <p>(2018 - 2020)</p>
      </a>
      <a href="https://www.gazipur.gov.bd/bn/site/education_institute/rKPb-%E0%A6%97%E0%A6%BE%E0%A6%9C%E0%A7%80%E0%A6%AA%E0%A7%81%E0%A6%B0-%E0%A6%95%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%A8%E0%A6%AE%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F-%E0%A6%AC%E0%A7%8B%E0%A6%B0%E0%A7%8D%E0%A6%A1-%E0%A6%89%E0%A6%9A%E0%A7%8D%E0%A6%9A-%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A7%9F" target="_blank" class="edu-box" rel="noopener">
        <img src="https://file-dhaka.portal.gov.bd/files/www.gazipur.gov.bd/education_institute/eed4d626_2015_11e7_8f57_286ed488c766/Untitled-1%20copy_26.jpg" alt="SSC">
        <h3>SSC - Gazipur Cantonment High School</h3>
        <p>(2007 - 2017)</p>
      </a>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-content">
      <h2>Let's Connect</h2>
      <p>Thank you for exploring my educational journey. Let's connect and build something amazing together!</p>
      
      <div class="contact-info">
        <h3>Get In Touch</h3>
        <p>📧 Email: <a href="mailto:sirajessalakin@gmail.com">sirajessalakin@gmail.com</a></p>
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
