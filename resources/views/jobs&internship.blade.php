@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs & internship</title>
    <link rel="stylesheet" href="style/jobs-internships.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>

<body>
<section class="jobs-section">
  <section class="hero-section">\
    <div class="hero-content">
      <div class="hero-text">
        <h1 class="hero-title">Jobs and Internships</h1>
        <p class="hero-subtitle">Find jobs that match up to your skill set</p>
      </div>
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/06f1c6bdc53778cbc60e71269c44a113a8ebd78caa24c14e56f756aa6d204618?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Illustration of people working" class="hero-image" />
    </div>
  </section>

  <main class="main-content">
    <p class="welcome-text">
      Welcome to Xiracom's Jobs and internships space where innovation meets skill. At Xiracom we believe that working together is the first step to achieving more than we can possibly imagine.
    </p>

    <section class="process-section">
      <div class="process-steps">
        <div class="step-circle">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ef2c9783ee912505a67a374e92568d0b6badea58cbe3c86acf82ae91b46a1324?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Register account icon" class="step-icon" />
        </div>

        <div class="step-connector"></div>
        <div class="step-circle">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/770660ec75faec43c3339cc0a2026bc0d6850b4a30a52b0c03520a97a66dc2b2?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Upload resume icon" class="step-icon" />
        </div>

        <div class="step-connector"></div>
        <div class="step-circle">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/77944ddad3c4e223a2ee883e26e63bae74553850e28bfbc74f46dd9b601533e9?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Apply job icon" class="step-icon" />
        </div>
      </div>
      <div class="step-labels">
        <span>Register your account</span>
        <span>Upload your Resume</span>
        <span>Apply for Dream Job</span>
      </div>
    </section>

    <h2 class="section-title">Latest Jobs and opportunities</h2>

    <div class="jobs-grid">
      <article class="job-card">
        <div class="job-header">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3151a68d1738b8dc27415e6c9684fdb6e20545d515434d1f77ebed8bcd679622?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="job-icon" />
          <h3 class="job-title">Web design and development</h3>
        </div>
        <p class="job-count">10 Jobs available</p>
      </article>

      <article class="job-card">
        <div class="job-header">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3151a68d1738b8dc27415e6c9684fdb6e20545d515434d1f77ebed8bcd679622?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="job-icon" />
          <h3 class="job-title">Web design and development</h3>
        </div>
        <p class="job-count">10 Jobs available</p>
      </article>

      <article class="job-card">
        <div class="job-header">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3151a68d1738b8dc27415e6c9684fdb6e20545d515434d1f77ebed8bcd679622?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="job-icon" />
          <h3 class="job-title">Web design and development</h3>
        </div>
        <p class="job-count">10 Jobs available</p>
      </article>

      <article class="job-card">
        <div class="job-header">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3151a68d1738b8dc27415e6c9684fdb6e20545d515434d1f77ebed8bcd679622?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="job-icon" />
          <h3 class="job-title">Web design and development</h3>
        </div>
        <p class="job-count">10 Jobs available</p>
      </article>

      <article class="job-card">
        <div class="job-header">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3151a68d1738b8dc27415e6c9684fdb6e20545d515434d1f77ebed8bcd679622?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="job-icon" />
          <h3 class="job-title">Web design and development</h3>
        </div>
        <p class="job-count">10 Jobs available</p>
      </article>

      <article class="job-card">
        <div class="job-header">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3151a68d1738b8dc27415e6c9684fdb6e20545d515434d1f77ebed8bcd679622?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="job-icon" />
          <h3 class="job-title">Web design and development</h3>
        </div>
        <p class="job-count">10 Jobs available</p>
      </article>
      <button class="explore-button">Explore More</button>
    </div>
  </main>
</section>
</body>
</html>