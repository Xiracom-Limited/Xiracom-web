
@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Our Project In Progress - Xiracom Limited</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .projects-section {
      background: #fff;
      padding: 123px 0 0;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .projects-container {
      border-radius: 15px;
      background: #EDEDF5;
      width: 100%;
      padding: 0 0 79px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .hero-section {
     margin-top: 40px !important;
      width: 100%;

      align-items: center;
      justify-content: flex-start; /* Align content to the left */
      padding: 0 80px; /* Add padding for spacing */
    }
    .hero-bg {
   margin-top: -13%;
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .hero-title {
      position: relative;
      font: 700 68px/74px 'Poppins', sans-serif;
      letter-spacing: -2.72px;
      text-align: center;
      margin-left: 153px;
    }

    .hero-description {
      position: relative;
      font: 400 24px/26px 'Poppins', sans-serif;
      letter-spacing: -0.96px;
      margin: 9px 0 -61px;
    }
    
    .hero-content {
      width: 70%; /* Take 40% of the screen width on large screens */
      max-width: 600px; /* Optional: Limit maximum width */
      background: transparent; /* Transparent background */
      padding: 20px; 
      align-items: center;
      text-align: center;

    }
    .section-title {
      
      letter-spacing: -2px;
      text-align: center;
      margin: 123px 0 0 27px;
      font: 700 50px/1 'Poppins', sans-serif;
    }
    @media screen and (max-width: 768px) and (max-width: 600px){

      .section-title {
      font-size: 25px !important;
      letter-spacing: -2px;
      text-align: center;
      margin: 123px 0 0 27px;
      font: 700 50px/1 'Poppins', sans-serif;
    }
      
    }

    .divider {
      aspect-ratio: 43.48;
      object-fit: contain;
      width: 768px;
      margin-left: 33px;
    }

    .project-card {
      z-index: 10;
      display: flex;
      margin-top: 53px;
      width: 1360px;
      max-width: 100%;
      flex-direction: column;
      align-items: start;
      padding: 20px 80px 85px;
      border: 1px solid #000;
    }

    .project-content {
      display: flex;
      width: 830px;
      max-width: 100%;
      flex-direction: column;
      align-items: start;
    }

    .project-icon-wrapper {
      background: rgba(255, 255, 255, 0.25);
      display: flex;
      width: 93px;
      height: 93px;
      align-items: center;
      justify-content: center;
      padding: 19px;
    }

    .project-icon {
      aspect-ratio: 1;
      object-fit: contain;
      width: 56px;
    }

    .project-name {
      color: #12087E;
      margin-top: 24px;
      font: 400 22px 'Poppins', sans-serif;
    }

    .project-details {
      align-self: stretch;
      display: flex;
      margin-top: 23px;
      align-items: start;
      gap: 40px 71px;
      font: 400 19px/28px 'Poppins', sans-serif;
      color: #12087E;
      flex-wrap: wrap;
    }

    .project-description {
      flex-grow: 1;
      width: 545px;
      flex-basis: auto;
    }

    .read-more-btn {
      border-radius: 100px;
      font: 400 18px/2 'Poppins', sans-serif;
      text-align: center;
      padding: 11px 40px;
      color: green !important;
    }

    .footer-image {
      object-fit: contain;
      width: 100%;
      border-radius: 0;
      align-self: stretch;
      margin-top: 606px;
    }

    @media (max-width: 991px) {
      .projects-section {
        padding-top: 100px;
      }

      .projects-container {
        max-width: 100%;
      }

      .hero-section {
        max-width: 100%;
        padding: 0 20px 100px;
      }

      .hero-title {
        margin-left: 10px;
        font-size: 40px;
        line-height: 49px;
      }

      .hero-description {
        max-width: 100%;
        margin-bottom: 10px;
      }

      .section-title {
        max-width: 100%;
        margin-top: 40px;
        font-size: 40px;
      }

      .project-card {
        margin-top: 40px;
        padding: 0 20px;
      }

      .project-details {
        max-width: 100%;
      }

      .project-description {
        max-width: 100%;
      }

      .read-more-btn {
        padding: 0 20px;
      }

      .footer-image {
        max-width: 100%;
        margin-top: 40px;
      }
    }






    .projects-section {
  padding: 80px 0 0;
}

.projects-container {
  padding: 0 0 50px;
}

.hero-section {
  min-height: 500px;
  padding: 0 40px;
}

.hero-title {
  font: 700 60px/70px 'Poppins', sans-serif;
  margin-left: 80px;
}

.hero-description {
  font: 400 20px/24px 'Poppins', sans-serif;
}

.section-title {
  font: 700 40px/1 'Poppins', sans-serif;
  margin: 80px 0 0 20px;
}

.project-card {
  width: 90%;
  padding: 20px 40px;
}

.project-details {
  font: 400 16px/24px 'Poppins', sans-serif;
}

.footer-image {
  margin-top: 300px;
}

@media (max-width: 991px) {
  .hero-title {
    font-size: 40px;
  }

  .section-title {
    font-size: 35px;
    margin-top: 50px;
  }

  .project-card {
    padding: 20px;
  }

  .footer-image {
    margin-top: 50px;
  }
}
.circle {
            width: 100px;
            height: 60px;
            background-color: #12087E;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .circle span {
            color: white;
            font-size: 40px;
            font-weight: bold;
        }
  </style>
</head>
<body>

<div class="projects-section" >
  <div class="projects-container">
   

    <h2 class="section-title" style="color:green;">Our Latest Projects</h2>

    <div class="project-card">
      <div class="project-content">
        <div class="project-icon-wrapper">
        <div class="circle">
        <span>1</span>
    </div>
           </div>
        <h3 class="project-name">Xiracom Web Based Portfolio</h3>
        <div class="project-details">
          <p class="project-description">The Xiracom web-based portfolio is a Laravel application with basic HTML and CSS. It is designed to showcase the company's services and offerings, providing an online presence to highlight what Xiracom LTD does.</p>
          <a href="https://github.com/Bennavi-Softsolution/Xiracom-web.git" class="read-more-btn" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16">
  <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.03 1.03 0 0 0 0-1.457"/>
</svg> </a>
        </div>
      </div>
    </div>

    <div class="project-card">
      <div class="project-content">
        <div class="project-icon-wrapper">
        <div class="circle">
        <span>2</span>
    </div> </div>
        <h3 class="project-name">E- Commerce System</h3>
        <div class="project-details">
          <p class="project-description">Xiracom LTD is developing an e-commerce system called Sokoni, a Laravel-based platform. "Sokoni" is a Swahili word meaning "market." The platform enables users to buy and sell products both in Kenya and internationally. Let us know if you need more details! 🚀</p>
          <a href="https://github.com/Bennavi-Softsolution/e-comm.git" class="read-more-btn" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16">
  <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.03 1.03 0 0 0 0-1.457"/>
</svg> </a>
        </div>
      </div>
    </div>

    <div class="project-card">
      <div class="project-content">
        <div class="project-icon-wrapper">
        <div class="circle">
        <span>3</span>
    </div> </div>
        <h3 class="project-name">Admission Page Module Integration</h3>
        <div class="project-details">
          <p class="project-description">Xiracom LTD developed an Admission Page Module Integration for East Africa Vision Institute. The project enabled new students to apply for admission remotely. It was built using basic HTML, CSS, and JavaScript to provide a user-friendly and accessible application process.</p>
          <a href="https://github.com/Bennavi-Softsolution/Admission-Page-Module-Integration.git" class="read-more-btn" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16">
  <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.03 1.03 0 0 0 0-1.457"/>
</svg> </a>
        </div>
      </div>
    </div>

    <div class="project-card">
      <div class="project-content">
        <div class="project-icon-wrapper">
        <div class="circle">
        <span>4</span>
    </div> </div>
        <h3 class="project-name">East Africa Vision Institute LMS</h3>
        <div class="project-details">
          <p class="project-description">Xiracom LTD developed a Moodle Learning Management System (LMS) for East Africa Vision Institute. The system enables the institution to manage learning effectively and is currently in use.</p>
          <a href="https://www.elearning.eavi.ac.ke/" class="read-more-btn" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16">
  <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.03 1.03 0 0 0 0-1.457"/>
</svg> </a>
        </div>
      </div>
    </div>
    <div class="project-card">
      <div class="project-content">
        <div class="project-icon-wrapper">
        <div class="circle">
        <span>5</span>
    </div> </div>
        <h3 class="project-name">Ascada- DarasaLink School Management System</h3>
        <div class="project-details">
          <p class="project-description">Xiracom LTD developed and installed the DarasaLink School Management System at Ascada School. As part of the implementation, the team also conducted team building sessions for the staff. The system efficiently manages various school operations, including school fees and learning management.</p>
          <a href="https://ascadaschool.sc.ke/" class="read-more-btn" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16">
  <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.03 1.03 0 0 0 0-1.457"/>
</svg> </a>
        </div>
      </div>
    </div>
    <div class="project-card">
      <div class="project-content">
        <div class="project-icon-wrapper">
        <div class="circle">
        <span>6</span>
    </div> </div>
        <h3 class="project-name">Eyrie - DarasaLink School Management System</h3>
        <div class="project-details">
          <p class="project-description">Xiracom LTD developed and installed the DarasaLink School Management System at Eyrie School. As part of the implementation, the team also conducted team-building sessions for the staff. The system efficiently manages various school operations, including school fees and learning management.</p>
          <a href="https://eyrieacademy.co.ke/" class="read-more-btn" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16">
  <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.03 1.03 0 0 0 0-1.457"/>
</svg> </a>
        </div>
      </div>
    </div>


    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/08d8f16e550429ef3ee3b365712151bf071b5d3caf7b48bcfdfb3d90af65fcf0?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="" class="footer-image" />
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@include("footer")