<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs & internship</title>
    <style>
.jobs-section {
  border-radius: 3px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  align-items: center;
  padding: 55px 0 737px;
}

.header-wrapper {
  display: flex;
  width: 100%;
  max-width: 1199px;
  align-items: center;
  gap: 40px 132px;
  justify-content: flex-start;
}

.logo {
  aspect-ratio: 4.24;
  object-fit: contain;
  width: 220px;
  align-self: stretch;
  margin: auto 0;
}

.nav-container {
  align-self: stretch;
  display: flex;
  min-width: 240px;
  align-items: center;
  gap: 40px 50px;
  justify-content: flex-start;
  flex-wrap: wrap;
  width: 905px;
  margin: auto 0;
}

.nav-menu {
  border-radius: 290px;
  align-self: stretch;
  display: flex;
  min-width: 240px;
  align-items: center;
  gap: 28px;
  overflow: hidden;
  width: 664px;
  margin: auto 0;
  padding: 6px;
}

.home-link {
  border-radius: 40px;
  background-color: rgba(250, 250, 250, 1);
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
  margin: auto 0;
}

.nav-item {
  color: #fff;
  text-align: center;
  align-self: stretch;
  margin: auto 0;
  font: 400 16px Poppins, sans-serif;
}

.cta-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  text-align: center;
  width: 133px;
  margin: auto 0;
  font: 500 16px Poppins, sans-serif;
}

.cta-button {
  border-radius: 40px;
  background-color: rgba(255, 255, 255, 0.8);
  width: 132px;
  padding: 14px 13px;
}

.hero-section {
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  align-self: stretch;
  margin-top: 37px;
  width: 100%;
  padding: 0 65px;
}

.hero-content {
  gap: 20px;
  display: flex;
}

.hero-text {
  display: flex;
  flex-direction: column;
  align-self: stretch;
  font-family: Poppins, sans-serif;
  text-align: center;
  line-height: 1;
  margin: auto -92px auto 0;
}

.hero-title {
  color: #fff;
  font-size: 68px;
  font-weight: 700;
  letter-spacing: -2.72px;
}

.hero-subtitle {
  color: #d6d2d2;
  font-size: 32px;
  font-weight: 400;
  letter-spacing: -1.28px;
  align-self: center;
  margin-top: 27px;
}

.hero-image {
  aspect-ratio: 1.9;
  object-fit: contain;
  width: 100%;
  flex-grow: 1;
}

.main-content {
  display: flex;
  margin-top: 76px;
  width: 100%;
  max-width: 1236px;
  flex-direction: column;
}

.welcome-text {
  color: #000;
  letter-spacing: -0.96px;
  text-align: center;
  align-self: center;
  font: 400 24px/26px Poppins, sans-serif;
}

.process-section {
  background-color: #d9d9d9;
  display: flex;
  margin-top: 72px;
  width: 100%;
  flex-direction: column;
  padding: 39px 61px;
}

.process-steps {
  align-self: center;
  display: flex;
  margin-left: 10px;
  width: 100%;
  max-width: 1025px;
  align-items: flex-start;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: space-between;
}

.step-circle {
  background-color: #fff;
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 92px;
  height: 92px;
  border: 1px solid #000;
}

.step-icon {
  aspect-ratio: 1;
  object-fit: contain;
  width: 92px;
  border-radius: 50%;
}

.step-connector {
  width: 340px;
  max-width: 100%;
  height: 1px;
  margin: auto 0;
  border: 1px solid #000;
}

.step-labels {
  display: flex;
  margin-top: 17px;
  gap: 20px;
  color: #000;
  text-align: center;
  letter-spacing: -0.8px;
  flex-wrap: wrap;
  justify-content: space-between;
  font: 400 20px/1 Poppins, sans-serif;
}

.jobs-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 49px;
}

.job-card {
  border-radius: 15px;
  background-color: #efe9e9;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  color: #000;
  text-align: center;
  letter-spacing: -1.08px;
  padding: 14px 20px;
  font: 27px Poppins, sans-serif;
  border: 1px solid #000;
}

.job-header {
  display: flex;
  gap: 18px;
  font-weight: 500;
  line-height: 29px;
}

.job-icon {
  aspect-ratio: 0.83;
  object-fit: contain;
  width: 75px;
}

.job-title {
  width: 253px;
  margin: auto 0;
}

.job-count {
  font-weight: 300;
  line-height: 1;
  align-self: center;
  margin-top: 9px;
}

.explore-button {
  align-self: end;
  width: 175px;
  border-radius: 72px;
  background-color: #399c23;
  margin-top: 24px;
  min-height: 65px;
  font-size: 20px;
  color: #fff;
  font-weight: 700;
  line-height: 1;
  padding: 23px 28px;
  border: 2px solid #102038;
}

@media (max-width: 991px) {
  .jobs-section {
    padding-bottom: 100px;
  }
  
  .header-wrapper,
  .nav-container,
  .nav-menu,
  .hero-section,
  .main-content,
  .process-section,
  .process-steps,
  .jobs-grid {
    max-width: 100%;
  }
  
  .hero-section {
    padding: 0 20px;
  }
  
  .hero-content {
    flex-direction: column;
  }
  
  .hero-text {
    margin: 40px 0 0;
  }
  
  .hero-title {
    font-size: 40px;
  }
  
  .process-section {
    margin: 40px 0;
    padding: 20px;
  }
  
  .jobs-grid {
    grid-template-columns: 1fr;
  }
  
  .job-card {
    margin-top: 20px;
  }
  
  .explore-button {
    padding: 20px;
  }
}
</style>
</head>
<body>
<section class="jobs-section">
  <header class="header-wrapper">
    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/506632aacc67dbd87460b43d27734ac6d43dfa83eb09a0a36fbc266330b7e110?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Xiracom company logo" class="logo" />
    <nav class="nav-container">
      <div class="nav-menu">
        <a href="#" class="home-link">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/147f521bb0a02cc710cce07272de641c6d02d682e1115b8ddd8c0ed5ccdd4389?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="home-icon" />
        </a>
        <a href="#" class="nav-item">About us</a>
        <a href="#" class="nav-item">Projects</a>
        <a href="#" class="nav-item">Our Services</a>
        <a href="#" class="nav-item">Sections</a>
        <a href="#" class="nav-item">Contact us</a>
      </div>
      <div class="cta-wrapper">
        <button class="cta-button">Get Started</button>
      </div>
    </nav>
  </header>

  <section class="hero-section">
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
        <button class="explore-button">Explore More</button>
      </article>
    </div>
  </main>
</section>
</body>
</html>