<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  .header-wrapper {
    align-self: center;
    display: flex;
    margin-left: 12px;
    width: 100%;
    max-width: 1199px;
    align-items: center;
    gap: 80px 132px;
  }
  
  .logo {
    aspect-ratio: 4.24;
    object-fit: contain;
    width: 220px;
    align-self: stretch;
  }
  
  .nav-container {
    display: flex;
    align-items: center; 
    justify-content: center; 
    min-width: 240px;
    gap: 40px 50px;
    flex-wrap: wrap;
    width: 905px;
    height: 100%; 
}

  
  .menu-wrapper {
    border-radius: 290px;
    align-self: stretch;
    display: flex;
    min-width: 240px;
    align-items: center;
    gap: 28px;
    overflow: hidden;
    width: 664px;
    padding: 6px;
   background: linear-gradient(90deg, #399C23 0%, #12087E 100%);
  }
  
  .home-link {
    border-radius: 40px;
    background-color: #fafafa;
    align-self: stretch;
    display: flex;
    align-items: center;
    gap: 6px;
    justify-content: center;
    padding: 8px 16px;


  }
  
  .home-icon {
    aspect-ratio: 1;
    object-fit: contain;
    width: 20px;
    align-self: stretch;
  }
  
  .nav-link {
    color: #fff;
    text-align: center;
    align-self: stretch;
    font: 400 16px Poppins, sans-serif;
    margin-top: 10px;
    
  }
  
  .auth-container {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 133px;
    font: 500 16px Poppins, sans-serif;
  }
  
  .signup-wrapper {
    display: flex;
    align-items: start;
  }
  
  .get-started-btn {
    border-radius: 40px;
    background-color: rgba(255, 255, 255, 0.8);
    width: 132px;
    padding: 14px 13px;
    background: linear-gradient(180deg, #399C23 0%, #2068DC 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; /* Gradient for the text or icon */
  }
</style>
</head>
<body>
<!-- Navbar starts here-->
<div class="header-wrapper">
    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a5016053130a5fc70271270a2305caafee1ce05308b14e2bf7842f252a184fec?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Company Logo" class="logo" />
    <nav class="nav-container">
      <div class="menu-wrapper">
        <a href="#" class="home-link">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d756e8c8126240957051134d6a08d14dc7246ef6a0fe66a1990f300025f683bd?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Home Icon" class="home-icon" />
        </a>
        <a href="#" class="nav-link">About us</a>
        <a href="#" class="nav-link">Projects</a>
        <a href="#" class="nav-link">Our Services</a>
        <a href="#" class="nav-link">Sections</a>
        <a href="#" class="nav-link">Contact us</a>
      </div>
      <div class="auth-container">
        <div class="signup-wrapper">
          <button class="get-started-btn">Get Started</button>
        </div>
      </div>
    </nav>
</body>
</html>