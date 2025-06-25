<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Me - Sirajes Salakin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: rgba(45, 77, 241, 0.69);
      --bg-color: #f4f7ff;
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

    /* Navbar */
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: var(--primary);
      padding: 15px 40px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
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

    /* About Section */
    .about-section {
      text-align: center;
      padding: 80px 20px;
    }

    .about-section h1 {
      color: #007bff;
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .about-section p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: auto;
      line-height: 1.6;
    }

    .about-section a {
      display: inline-block;
      margin-top: 30px;
      text-decoration: none;
      background: #007bff;
      color: white;
      padding: 10px 20px;
      border-radius: 25px;
      transition: 0.3s;
    }

    .about-section a:hover {
      background: #0056cc;
    }

    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
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

  <!-- About Section -->
  <div class="about-section">
    <h1>About Me</h1>
    <p>
      Hi, I'm <strong>Sirajes Salakin</strong>.<br>
      Hi, I'm Sirajes Salakin, a Computer Science student at Daffodil International University, currently in my 9th semester. I’m deeply passionate about technology and love turning ideas into functional, user-friendly applications. Over the past few semesters, I’ve worked on diverse projects—from web-based inventory systems using Bash scripting to mobile applications like JobFlick and One Solution, built with Flutter and Firebase. I'm also exploring AI and IoT through innovative projects like mental health chatbots and smart lockers. I enjoy working on real-world problems, learning new technologies, and building digital solutions that make life easier. Whether it's developing a responsive website, designing a mobile app, or integrating payment gateways—I'm always up for the challenge!
    </p>

  </div>

</body>
</html>
