
@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xincom Projects</title>
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
      position: relative;
      min-height: 626px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: flex-start; /* Align content to the left */
      padding: 0 80px; /* Add padding for spacing */
    }
    .hero-bg {
      position: absolute;
      inset: 0;
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
      color: #000;
      letter-spacing: -2px;
      text-align: center;
      margin: 123px 0 0 27px;
      font: 700 50px/1 'Poppins', sans-serif;
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

  </style>
</head>
<body>

<div class="projects-section">
  <div class="projects-container">
    <div class="hero-section">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e2ccae77694309af0910fbaae89a241625d53a16a20948910e2f32d819a8ced4?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="" class="hero-bg" />
      <div class="hero-content ms-lg-5">
    <h1 class="hero-title">Some Of Our Projects</h1>
    <p class="hero-description ms-lg-5">As a digital tech design company, we have a couple of projects that are currently working and others are yet to be launched</p>
  </div>    </div>

    <h2 class="section-title">Here Are Some Of Our Projects</h2>

    <div class="project-card">
      <div class="project-content">
        <div class="project-icon-wrapper">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ca431d6bd16bbf7cbaab55d0d98c70e49f442fc738cac05309d8192d89ee08ec?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="DarasaLink icon" class="project-icon" />
        </div>
        <h3 class="project-name">DarasaLink</h3>
        <div class="project-details">
          <p class="project-description">This initial step involves a systematic and thorough exploration of the market landscape, user needs, and existing solutions.</p>
          <a href="#" class="read-more-btn" tabindex="0">Read More</a>
        </div>
      </div>
    </div>

    <div class="project-card">
      <div class="project-content">
        <div class="project-icon-wrapper">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ca431d6bd16bbf7cbaab55d0d98c70e49f442fc738cac05309d8192d89ee08ec?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="Exam Parlour icon" class="project-icon" />
        </div>
        <h3 class="project-name">Exam parlour</h3>
        <div class="project-details">
          <p class="project-description">This initial step involves a systematic and thorough exploration of the market landscape, user needs, and existing solutions.</p>
          <a href="#" class="read-more-btn" tabindex="0">Read More</a>
        </div>
      </div>
    </div>

    <div class="project-card">
      <div class="project-content">
        <div class="project-icon-wrapper">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/44fde226d97d52b929598d0954c0042c99f29b440f36ee9fa30a2ed19a4cca14?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="Benavvi Solutions icon" class="project-icon" />
        </div>
        <h3 class="project-name">Benavvi solutions</h3>
        <div class="project-details">
          <p class="project-description">This initial step involves a systematic and thorough exploration of the market landscape, user needs, and existing solutions.</p>
          <a href="#" class="read-more-btn" tabindex="0">Read More</a>
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