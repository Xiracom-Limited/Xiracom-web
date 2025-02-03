<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navigation Bar</title>
  <link rel="stylesheet" href="style/nav-bar2.css">
  @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">
        <!-- Replace with your logo -->
        <img src="images\xiracom logo.png" alt="Company Logo" class="logo">
      </div>
      <button class="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <ul class="nav-menu">
        <li><a href="#about">About us</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#services">Our Services</a></li>
        <li><a href="#sections">Sections</a></li>
        <li><a href="#contact">Contact us</a></li>
      </ul>
      <a href="#get-started" class="btn-get-started">Get Started</a>
    </nav>
  </header>

  <script src="script.js"></script>
</body>
</html>
