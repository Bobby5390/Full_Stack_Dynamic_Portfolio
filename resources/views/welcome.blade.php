<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color:rgb(85, 146, 179);
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      padding: 1rem 2rem;
      color: #fff;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 1rem;
    }

    .nav-links li a {
      text-decoration: none;
      color: rgb(211, 215, 216);
      font-weight: bold;
    }

    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 3rem 2rem;
      background-color: rgb(85, 146, 179);
    }

    .about h2 {
      font-size: 1.8rem;
      margin-bottom: 0.5rem;
    }

    .about p {
      font-size: 1.2rem;
      margin-bottom: 1rem;
    }

    .buttons {
      display: flex;
      gap: 1rem;
    }

    button {
      padding: 0.5rem 1rem;
      font-size: 1rem;
      cursor: pointer;
      border: 2px solid #333;
      background-color: transparent;
      transition: 0.3s;
    }

    button:hover {
      background-color: #333;
      color: white beige;
    }

    .profile-pic img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 3px dashed #333;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">Portfolio</div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">Skills</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Education</a></li>
        <li><a href="#">Work</a></li>
        <li><a href="#">Contact Me</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="about">
      <h2> Sirajes Salakin</h2>
      <p>About Me</p>
      <div class="buttons">
        <button>Hire Me</button>
        <button>Experience</button>
      </div>
    </div>
    <div class="profile-pic">
      <img src="" alt="Profile Picture" />
    </div>
  </section>

  <script>
  tags =document.querySelector(".nav-link").children;
  for(i=0;i<tags.length;i++){
    tags[i].addEventListener('click'),function(event){
        alert(event.target.innerText);
    }
  }

  </script>
</body>
</html>