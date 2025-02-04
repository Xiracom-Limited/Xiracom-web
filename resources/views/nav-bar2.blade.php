<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Bar</title>
  <link rel="stylesheet" href="style/nav-bar2.css">
  <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "nav-menu") {
    x.className += " responsive";
  } else {
    x.className = "nav-menu";
  }
}
  </script>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">
        <img src="images\xiracomlogo.png" alt="Company Logo" class="logo">
      </div>
      <button class="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="nav-menu" id="myTopnav">
       <a class="list" href="#home">Home</a>
       <div class="dropdown">
       <button class="dropbtn">About Us
       <i class="fa fa-caret-down"></i>
       </button>
       <div class="dropdown-content">
       <a href="#">Who we are </a>
       <a href="#">Our Team</a>
       <a href="#">Jobs & Internships</a>
       <a href="#">Our Projects</a>
       <a href="#">Our Clients</a>
       <a href="#">Blog</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Software Dev
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">UI/UX Design</a>
      <a href="#">App Development</a>
      <a href="#">Web Design & Dev</a>
      <a href="#">API Intergrations</a>
      <a href="#">ERP&CMS Systems</a>
      <a href="#">Support</a>
      <a href="#">Domain & Hosting</a>
    </div>
  </div>
  <a class="list" href="#bulksms">Bulk SMS</a>
  <div class="dropdown">
    <button class="dropbtn">Our Brands
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">DarasaLink</a>
      <a href="#">Examparlour</a>
      <a href="#">Onfod SMS</a>
      <a href="#">Xiracom BTC</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Other Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Tech Consultancy</a>
      <a href="#">Shop</a>
      <a href="#">Skiza Tunes</a>
      <a href="#">Cybersecurity</a>
      <a href="#">Digital Marketing</a>
      <a href="#">Trainings & Bootcamps</a>
    </div>
  </div>
  <a class="list" href="#contactus">Contact Us</a>
  <a class="list" href="#blog">Blog</a>
</div>
      <a href="#get-started" class="btn-get-started">Get Started</a>
    </nav>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </header>
</body>
</html>
