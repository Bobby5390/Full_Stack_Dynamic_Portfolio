<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio - Sirajes Salakin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #1a1a1a;
      color: #f0f0f0;
      overflow-x: hidden;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgba(26, 26, 26, 0.95);
      padding: 1rem 2rem;
      backdrop-filter: blur(10px);
      z-index: 1000;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: #ffffff;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 2rem;
    }

    .nav-links li a {
      text-decoration: none;
      color: #ccc;
      font-weight: 400;
      font-size: 0.95rem;
      position: relative;
      padding: 8px 0;
      transition: color 0.3s ease;
    }

    .nav-links li a:hover {
      color: #ffffff;
    }

    .main-container {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding: 0 2rem;
      margin-top: -80px;
    }

    .portfolio-text {
      font-size: clamp(8rem, 15vw, 20rem);
      font-weight: 900;
      color: #e0e0e0;
      line-height: 0.8;
      letter-spacing: -0.02em;
      opacity: 0.9;
      margin-bottom: 2rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .greeting {
      font-size: 2.5rem;
      font-weight: 600;
      color: #ffffff;
      margin-bottom: 1rem;
    }

    .greeting-emoji {
      font-size: 2.5rem;
      margin-left: 0.5rem;
    }

    .intro-text {
      max-width: 600px;
      margin-bottom: 1rem;
    }

    .name {
      font-size: 1.1rem;
      font-weight: 600;
      color: #ffffff;
      margin-bottom: 0.5rem;
    }

    .description {
      font-size: 1rem;
      line-height: 1.6;
      color: #cccccc;
      margin-bottom: 3rem;
    }

    .social-links {
      display: flex;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .social-links a {
      display: inline-block;
      padding: 0.7rem 1.5rem;
      background-color: transparent;
      border: 2px solid #00bcd4;
      color: #00bcd4;
      text-decoration: none;
      border-radius: 25px;
      font-weight: 500;
      font-size: 0.9rem;
      transition: all 0.3s ease;
    }

    .social-links a:hover {
      background-color: #00bcd4;
      color: #1a1a1a;
      transform: translateY(-2px);
    }

    .footer {
      position: fixed;
      bottom: 2rem;
      left: 2rem;
      font-size: 0.8rem;
      color: #888;
    }

    @media (max-width: 768px) {
      .navbar {
        padding: 1rem;
      }
      
      .nav-links {
        gap: 1rem;
        flex-wrap: wrap;
      }

      .main-container {
        padding: 0 1rem;
        text-align: center;
        align-items: center;
      }

      .portfolio-text {
        font-size: clamp(4rem, 20vw, 8rem);
        text-align: center;
      }

      .greeting {
        font-size: 2rem;
      }

      .social-links {
        flex-wrap: wrap;
        justify-content: center;
      }

      .footer {
        position: static;
        text-align: center;
        margin-top: 2rem;
      }
    }

    @media (max-width: 480px) {
      .social-links a {
        padding: 0.6rem 1.2rem;
        font-size: 0.8rem;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header>
    <nav class="navbar">
      <div class="logo">Sirajes Salakin</div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#work">Work</a></li>
      </ul>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="main-container">
    <div class="portfolio-text">PORTFOLIO</div>
    
    <div class="content">
      <h1 class="greeting">Hi There <span class="greeting-emoji">👋</span></h1>
      
      <div class="intro-text">
        <div class="name">I'm Sirajes Salakin</div>
        <p class="description">
          I'm a passionate and dedicated web developer. I love creating clean, responsive 
          websites using HTML, CSS, JavaScript, PHP, and more. Always learning. Always 
          building.
        </p>
      </div>

      <div class="social-links">
        <a href="#" target="_blank">Facebook</a>
        <a href="#" target="_blank">Instagram</a>
        <a href="#" target="_blank">GitHub</a>
        <a href="#" target="_blank">Telegram</a>
        <a href="#" target="_blank">WhatsApp</a>
      </div>
    </div>
  </main>

  <footer class="footer">
    © 2025 Sirajes Salakin. All rights reserved.
  </footer>

  <!-- JS Interaction -->
  <script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });

    // Add some interactive effects
    document.addEventListener('DOMContentLoaded', function() {
      const portfolioText = document.querySelector('.portfolio-text');
      const socialLinks = document.querySelectorAll('.social-links a');
      
      // Add hover effect to portfolio text
      portfolioText.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.02)';
        this.style.transition = 'transform 0.3s ease';
      });
      
      portfolioText.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
      });
    });
  </script>

</body>
</html>
