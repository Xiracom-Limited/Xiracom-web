<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/navbar.css">
  <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
  </script>
</head>
<body>
  <div class="topnav" id="myTopnav">
    <a href="#home"><img src="images\logo2.png" alt="Company Logo" class="logo"></a>
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
      <a href="#get-started" class="btn-get-started">Get Started</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
</body>
</html>
