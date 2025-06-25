<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Skills - Sirajes Salakin</title>
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

    .skills-container {
      text-align: center;
      padding: 80px 20px;
    }

    .skills-container h2 {
      font-size: 2.2rem;
      color: #007bff;
      margin-bottom: 30px;
    }

    .skill-tags {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 12px;
    }

    .skill-tags span {
      background: #e9f1ff;
      padding: 10px 16px;
      border-radius: 25px;
      font-size: 14px;
      font-weight: 500;
      border: 1px solid #bcdcff;
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

  <!-- Skills Section -->
  <div class="skills-container">
    <h2>Skills</h2>
    <div class="skill-tags">
      <span>JavaScript</span>
      <span>Java</span>
      <span>PHP</span>
      <span>Python</span>
      <span>MySQL</span>
      <span>C++</span>
      <span>Android</span>
    </div>
  </div>

</body>
</html>
