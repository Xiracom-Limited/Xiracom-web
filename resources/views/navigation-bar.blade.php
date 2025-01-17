<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/navigation-bar.css">
  @vite(['resources/sass/app.scss','resources/js/app.js'])
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  
<!--Navigation bar starts here-->
<nav class="container navbar navbar-expand-lg navbar-light bg-white" id="nav-bar">
  <a class="navbar-brand" href="#"><img src="images/logo.svg" width="60%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Who We Are?</a>
          <a class="dropdown-item" href="#">Our Team</a>
          <a class="dropdown-item" href="#">Jobs & Internships</a>
          <a class="dropdown-item" href="#">Our Projects</a>
          <a class="dropdown-item" href="#">Our Clients</a>
          <a class="dropdown-item" href="#">Blog</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Software Dev
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">UI/UX Design</a>
          <a class="dropdown-item" href="#">App Development</a>
          <a class="dropdown-item" href="#">Web Design & Dev</a>
          <a class="dropdown-item" href="#">APIs Intergrations</a>
          <a class="dropdown-item" href="#">ERP&CMS Systems</a>
          <a class="dropdown-item" href="#">Support</a>
          <a class="dropdown-item" href="#">Domain & Hosting</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bulk SMS</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Brands
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">DarasaLink</a>
          <a class="dropdown-item" href="#">Examparlour</a>
          <a class="dropdown-item" href="#">Onfod SMS</a>
          <a class="dropdown-item" href="#">Xiracom BTC</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Other Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Tech Consultancy</a>
          <a class="dropdown-item" href="#">Shop</a>
          <a class="dropdown-item" href="#">Skiza Tunes</a>
          <a class="dropdown-item" href="#">Cybersecurity</a>
          <a class="dropdown-item" href="#">Digital Marketing</a>
          <a class="dropdown-item" href="#">Trainings & Bootcamps</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">GET STARTED</a>
      </li>
    </ul>
  </div>
</nav>
<!--navigation bar ends here -->





</body>






</html>