<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sirajes Salakin Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-color: rgb(251, 250, 253);
      --primary: rgba(45, 77, 241, 0.69);
      --accent: #ff9f43;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bg-color);
      color: #222;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: var(--primary);
      padding: 15px 40px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .nav-left {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .nav-left .OS {
      width: 30px;
      height: 30px;
      background: white;
      border-radius: 5px;
    }

    .nav-left span {
      color: white;
      font-size: 18px;
      font-weight: 600;
    }

    .nav-right a {
      margin-left: 25px;
      text-decoration: none;
      color: white;
      font-weight: 500;
      position: relative;
    }

    .nav-right a::after {
      content: '';
      position: absolute;
      width: 0%;
      height: 2px;
      background: white;
      left: 0;
      bottom: -4px;
      transition: 0.3s;
    }

    .nav-right a:hover::after {
      width: 100%;
    }

    .main-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      align-items: center;
      padding: 60px 40px 20px;
      gap: 40px;
    }

    .left-section {
      flex: 1;
      max-width: 600px;
    }

    .left-section h1 {
      font-size: 2.5rem;
      color: #333;
    }

    .left-section p {
      font-size: 1.2rem;
      margin: 10px 0;
      color: #555;
    }

    .about-button button {
      background: linear-gradient(to right, #007bff, #00c6ff);
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      margin: 20px 0;
      transition: 0.3s;
    }

    .about-button button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
    }

    .arrow {
      font-size: 24px;
      animation: bounce 2s infinite;
      color: var(--primary);
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(10px); }
    }

    .social-links {
      position: fixed;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      justify-content: center;
      background: #fff;
      padding: 10px 20px;
      border-radius: 30px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
      z-index: 999;
    }

    .social-links button {
      background: white;
      border: 2px solid var(--primary);
      color: var(--primary);
      padding: 10px 15px;
      border-radius: 30px;
      font-size: 14px;
      cursor: pointer;
      transition: 0.3s;
    }

    .social-links button:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-2px);
    }

    .profile-image {
      width: 250px;
      height: 250px;
      border-radius: 50%;
      background-image: url('https://lh3.googleusercontent.com/a/ACg8ocJQK-s9aZMHpw5ng-K0ihVr7ZB5x87c71PWzhp2meSPu5rWHQ6G=s192-c-rg-br100');
      background-size: cover;
      background-position: center;
      border: 6px solid var(--accent);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      animation: fadeIn 1.5s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }

    @media (max-width: 768px) {
      .main-container {
        flex-direction: column;
        text-align: center;
        padding: 40px 20px;
      }

      .nav-right {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="nav-left">
      <div class="OS"></div>
      <span>Sirajes Salakin</span>
    </div>
    <div class="nav-right">
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/about') }}">About</a>
      <a href="{{ url('/skills') }}">Skills</a>
      <a href="{{ url('/education') }}">Education</a>
      <a href="{{ url('/work') }}">Work</a>
    </div>
  </nav>

  <!-- Main Section -->
  <div id="home" class="main-container">
    <div class="left-section">
      <h1>Hi There</h1>
      <p>I'm Sirajes Salakin</p>
      <p>I'm a passionate and dedicated web developer. I love creating clean, responsive websites using HTML, CSS, JavaScript, PHP, and more. Always learning. Always building.</p>

      <div class="about-button">
        <button onclick="window.location.href='{{ url('/about') }}'">About Me</button>
      </div>
      <div class="arrow">↓</div>
    </div>

    <div class="profile-image" id="about"></div>
  </div>

  <!-- Social Links -->
  <div class="social-links">
    <button onclick="goTo('https://facebook.com')">Facebook</button>
    <button onclick="goTo('https://instagram.com')">Instagram</button>
    <button onclick="goTo('https://github.com')">GitHub</button>
    <button onclick="goTo('https://telegram.org')">Telegram</button>
    <button onclick="goTo('https://wa.me/')">WhatsApp</button>
  </div>

  <script>
    function goTo(link) {
      window.open(link, "_blank");
    }
  </script>

</body>
</html>
