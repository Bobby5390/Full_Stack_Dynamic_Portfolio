<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Education - Sirajes Salakin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: rgba(45, 77, 241, 0.69);
      --bg-color: #f9fbff;
      --card-bg: #fff;
      --text-dark: #333;
      --text-light: #666;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-dark);
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

    .education-section {
      padding: 80px 20px;
      text-align: center;
    }

    .education-section h2 {
      font-size: 2.4rem;
      color: #2d4df1;
      margin-bottom: 50px;
    }

    .edu-boxes {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .edu-box {
      background-color: var(--card-bg);
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.08);
      padding: 20px;
      max-width: 320px;
      flex: 1 1 280px;
      text-align: center;
      transition: transform 0.3s ease;
      cursor: pointer;
      text-decoration: none;
      color: inherit;
    }

    .edu-box:hover {
      transform: translateY(-6px);
    }

    .edu-box img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .edu-box h3 {
      font-size: 1.2rem;
      color: var(--text-dark);
      margin-bottom: 8px;
    }

    .edu-box p {
      font-size: 14px;
      color: var(--text-light);
    }

    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-right {
        margin-top: 10px;
      }

      .education-section h2 {
        font-size: 2rem;
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
      <a href="{{ url('/#work') }}">Work</a>
    </div>
  </nav>

  <!-- Education Section -->
  <section class="education-section">
    <h2>My Education</h2>
    <div class="edu-boxes">
      <a href="https://daffodilvarsity.edu.bd/" target="_blank" class="edu-box">
        <img src="https://studentshub.daffodilvarsity.edu.bd/assets/img/about/1719679319.jpeg" alt="DIU">
        <h3>Daffodil International University</h3>
        <p>B.Sc in Computer Science & Engineering (2022 - Present)</p>
      </a>
      <a href="https://www.gpcpsc.edu.bd/" target="_blank" class="edu-box">
        <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4np95vCidc9in04DkXUIZQmvo7YS9_jaMzykvNmdCpt5XJSYKWPYUR_3o3QC1yi0SkNAZz9KSN1pH-_DPdJIlPK29d3nIrr64CPbUwMRoC-xB3b3taG43Wghdm5rL-EP5CfkkrnZ=s1360-w1360-h1020-rw" alt="HSC">
        <h3>HSC - Gazipur contonment collage</h3>
        <p>(2018 - 2020)</p>
      </a>
      <a href="https://www.gazipur.gov.bd/bn/site/education_institute/rKPb-%E0%A6%97%E0%A6%BE%E0%A6%9C%E0%A7%80%E0%A6%AA%E0%A7%81%E0%A6%B0-%E0%A6%95%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%A8%E0%A6%AE%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F-%E0%A6%AC%E0%A7%8B%E0%A6%B0%E0%A7%8D%E0%A6%A1-%E0%A6%89%E0%A6%9A%E0%A7%8D%E0%A6%9A-%E0%A6%AC%E0%A6%BF%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B2%E0%A7%9F" target="_blank" class="edu-box">
        <img src="https://file-dhaka.portal.gov.bd/files/www.gazipur.gov.bd/education_institute/eed4d626_2015_11e7_8f57_286ed488c766/Untitled-1%20copy_26.jpg" alt="SSC">
        <h3>SSC - Gazipur contonment High School</h3>
        <p>(2007 - 2017)</p>
      </a>
    </div>
  </section>

</body>
</html>
