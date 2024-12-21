<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultancy</title>
    <style>
  .consulting-section {
    border-radius: 3px;
    background-color: #fff;
    display: flex;
    padding: 50px 0 0;
    flex-direction: column;
    overflow: hidden;
  }
  .visually-hidden {
    clip: rect(0 0 0 0);
    clip-path: inset(50%);
    height: 1px;
    overflow: hidden;
    position: absolute;
    white-space: nowrap;
    width: 1px;
  }

  .nav-wrapper {
    display: flex;
    align-items: center;
    gap: 40px 132px;
    justify-content: start;
    margin: 0 140px 29px 101px;
  }

  .brand-logo {
    aspect-ratio: 4.24;
    object-fit: contain;
    object-position: center;
    width: 220px;
    align-self: stretch;
    margin: auto 0;
  }

  .navigation-container {
    align-self: stretch;
    display: flex;
    min-width: 240px;
    align-items: center;
    gap: 40px 50px;
    justify-content: start;
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
    background-image: linear-gradient(to right, #399c23, #200ee4);
  }

  .home-button {
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
    object-position: center;
    width: 20px;
    align-self: stretch;
    margin: auto 0;
  }

  .nav-link {
    color: rgba(255, 255, 255, 1);
    text-align: center;
    align-self: stretch;
    margin: auto 0;
    font: 400 16px Poppins, sans-serif;
  }

  .nav-link-flex {
    color: rgba(255, 255, 255, 1);
    text-align: center;
    align-self: stretch;
    flex-basis: auto;
    margin: auto 0;
    font: 400 16px Poppins, sans-serif;
  }

  .cta-container {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 133px;
    margin: auto 0;
    font: 500 16px Poppins, sans-serif;
  }

  .cta-wrapper {
    display: flex;
    align-items: start;
    justify-content: start;
  }

  .cta-button {
    border-radius: 40px;
    background-color: rgba(255, 255, 255, 0.8);
    width: 132px;
    padding: 14px 13px;
    
  }

  @media (max-width: 991px) {
    .navigation-container {
      max-width: 100%;
    }
    .nav-menu {
      max-width: 100%;
    }
  }

  .hero-section {
    display: flex;
    flex-direction: column;
    position: relative;
    min-height: 654px;
    margin-top: 29px;
    width: 100%;
    align-items: flex-end;
    font-family: Poppins, sans-serif;
    color: #000;
    line-height: 1;
    padding: 194px 80px 350px;
  }

  .hero-image {
    position: absolute;
    inset: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
  }

  .hero-content {
    position: relative;
    display: flex;
    margin-bottom: -70px;
    flex-direction: column;
  }

  .hero-title {
    width: 614px;
  height: 124px;
  margin: 0 10.3px 38.4px 0;
  font-family: Poppins;
  font-size: 48px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.09;
  letter-spacing: -1.92px;
  text-align: left;
  color: #000;
  }

  .hero-subtitle {
    font-size: 32px;
    font-weight: 400;
    letter-spacing: -1.28px;
    margin: 26px 31px 0 0;
  }

  .main-content {
    display: flex;
    width: 100%;
    flex-direction: column;
    overflow: hidden;
    align-items: flex-start;
    justify-content: center;
    padding: 58px 70px;
    border-image-source: linear-gradient(to bottom, #399c23, #200ee4);
  border-image-slice: 1;
  background-image: linear-gradient(to bottom, #fff, #1c2fd7);
  }

  .content-wrapper {
    width: 100%;
    max-width: 1167px;
  }

  .content-grid {
    gap: 20px;
    display: flex;
  }

  .image-column {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 44%;
    margin-left: 0;
  }

  .feature-image {
    aspect-ratio: 1.02;
    object-fit: contain;
    width: 100%;
    border-radius: 10px;
    flex-grow: 1;
  }

  .text-column {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 56%;
    margin-left: 20px;
  }

  .text-content {
    display: flex;
    width: 100%;
    flex-direction: column;
    align-self: stretch;
    align-items: center;
    font-family: Poppins, sans-serif;
    color: #000;
    font-weight: 700;
    text-align: center;
    margin: auto 0;
  }

  .section-title {
    font-size: 40px;
    line-height: 1;
    letter-spacing: -1.6px;
  }

  .section-description {
    font-size: 24px;
    font-weight: 400;
    line-height: 26px;
    letter-spacing: -0.96px;
    align-self: stretch;
    margin-top: 35px;
  }

  .cta-button-large {
    align-self: stretch;
    width: 235px;
    border-radius: 72px;
    background-color: #399c23;
    margin-top: 56px;
    min-height: 82px;
    max-width: 100%;
    font-size: 32px;
    color: #fff;
    line-height: 0.7;
    padding: 30px 28px;
    border: 2px linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), linear-gradient(to right, #399c23, #200ee4);
  }

  .footer-section {
    background-color: #102039;
    display: flex;
    margin-top: 67px;
    width: 100%;
    flex-direction: column;
    overflow: hidden;
    padding: 2px 0 10px;
  }

  .footer-content {
    transform: rotate(180deg);
    background-color: rgba(217, 217, 217, 0.01);
    display: flex;
    width: 100%;
    flex-direction: column;
    overflow: hidden;
    padding: 57px 0;
  }

  .social-links {
    display: flex;
    margin-left: 38px;
    width: 100%;
    max-width: 1186px;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .social-icons {
    display: flex;
    flex-direction: column;
  }

  .icon-spacer {
    display: flex;
    height: 90px;
  }

  .icon-container {
    display: flex;
    width: 25px;
    flex-direction: column;
    align-items: flex-start;
    margin: 27px 0 0 30px;
  }

  .social-icon {
    aspect-ratio: 1;
    object-fit: contain;
    width: 100%;
  }

  .social-icon-vertical {
    aspect-ratio: 0.28;
    object-fit: contain;
    width: 100%;
    margin-top: 37px;
  }

  .footer-logo {
    aspect-ratio: 1.37;
    object-fit: contain;
    width: 245px;
    align-self: flex-start;
    margin-top: 10px;
  }

  .footer-image {
    object-fit: contain;
    width: 100%;
    border-radius: 0;
    margin-top: 113px;
  }

  @media (max-width: 991px) {
    .header-container,
    .nav-container,
    .nav-menu,
    .hero-content,
    .main-content,
    .content-wrapper,
    .footer-content,
    .footer-image {
      max-width: 100%;
    }

    .hero-section {
      padding: 100px 20px;
    }

    .hero-title {
      font-size: 40px;
    }

    .hero-subtitle {
      margin-right: 10px;
    }

    .main-content {
      padding: 0 20px;
    }

    .content-grid {
      flex-direction: column;
      align-items: stretch;
      gap: 0;
    }

    .image-column,
    .text-column {
      width: 100%;
      margin: 40px 0 0;
    }

    .feature-image {
      margin-top: 40px;
    }

    .cta-button-large {
      margin-top: 40px;
      padding: 0 20px;
    }

    .footer-section {
      margin-top: 40px;
    }

    .icon-container {
      margin-left: 10px;
    }

    .social-icon {
      margin-right: 3px;
    }

    .footer-image {
      margin-top: 40px;
    }
  }
</style>
</head>
<body>
<div class="consulting-section">
<nav class="nav-wrapper" role="navigation" aria-label="Main navigation">
  <img
    loading="lazy"
    src="https://cdn.builder.io/api/v1/image/assets/TEMP/506632aacc67dbd87460b43d27734ac6d43dfa83eb09a0a36fbc266330b7e110?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040"
    class="brand-logo"
    alt="Company logo"
  />
  <div class="navigation-container">
    <div class="nav-menu">
      <a href="#" class="home-button" aria-current="page">
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/25cba9c8dc7069333479bc7cd66dba61647d051d5912d312ddee87295152c731?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040"
          class="home-icon"
          alt="Home icon"
        />
      </a>
      <a href="#about" class="nav-link">About us</a>
      <a href="#projects" class="nav-link">Projects</a>
      <a href="#services" class="nav-link-flex">Our Services</a>
      <a href="#sections" class="nav-link">Sections</a>
      <a href="#contact" class="nav-link-flex">Contact us</a>
    </div>
    <div class="cta-container">
      <div class="cta-wrapper">
        <button class="cta-button" type="button">Get Started</button>
      </div>
    </div>
  </div>
</nav>

  <div class="hero-section">
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/afacfd0c582da60d54f4a180f8310a6dde81ceef1bb68f230537e64505f21bc7?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Hero Background" class="hero-image" />
    <div class="hero-content">
      <h1 class="hero-title">Your Business, Our Experts</h1>
      <h2 class="hero-subtitle">Strategic Consultancy to Drive Success</h2>
    </div>
  </div>

  <div class="main-content">
    <div class="content-wrapper">
      <div class="content-grid">
        <div class="image-column">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/49676650f0c07a56d6e71746bf442712a1635e358c4106fcdac7754903c86441?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Consulting Services" class="feature-image" />
        </div>
        <div class="text-column">
          <div class="text-content">
            <h2 class="section-title">Consulting Services</h2>
            <p class="section-description">At Xiracom, we provide expert consultancy to help businesses solve challenges and drive growth. Our team delivers tailored solutions that enhance efficiency, streamline processes, and support your long-term success.</p>
            <button class="cta-button-large">Call Us</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer-section">
    <div class="footer-content">
      <div class="social-links">
        <div class="social-icons">
          <div class="icon-spacer"></div>
          <div class="icon-container">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/3cb1279823088a9bb7c9301a99526c10ec4630a5f8e59a04873e15b6c9a27dab?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Social Media Icon" class="social-icon" />
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c177f3af3a64a13a3528fde1fc00a3ef5ccf46328c2ebba433336ed1f0029f52?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Social Media Icon" class="social-icon" />
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1fc33800d98a8291a8cd8b4499b2a0c56102891ba76e13cb56c37286b8139ce7?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Social Media Icon" class="social-icon" />
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/94cceb66a22ae57432d1206e25a891d37566480957058a4a47fc0d446d2f72ec?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Social Media Icon" class="social-icon-vertical" />
          </div>
        </div>
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/caa9b745c6b00370f90ef86e93b1122163aec0ff33771c1eda0a47d5e2ac8ef8?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Footer Logo" class="footer-logo" />
      </div>
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/08d8f16e550429ef3ee3b365712151bf071b5d3caf7b48bcfdfb3d90af65fcf0?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="footer-image" />
    </div>
  </footer>
</div>
</body>
</html>