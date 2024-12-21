<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
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

.web-development-container {
  background: #fff;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  padding: 110px 0 702px;
}

.hero-section {
  display: flex;
  flex-direction: column;
  position: relative;
  min-height: 333px;
  width: 100%;
  color: #fff;
  text-align: center;
}

.hero-image {
  position: absolute;
  inset: 0;
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.hero-title {
  position: relative;
  background-color: rgba(0, 0, 0, 0.5);
  width: 100%;
  margin-bottom: -3px;
  padding: 149px 70px 123px;
  font: 700 36px Inter, sans-serif;
}

.content-section {
  align-self: end;
  z-index: 10;
  display: flex;
  width: 851px;
  max-width: 100%;
  flex-direction: column;
  align-items: start;
  font-family: Inter, sans-serif;
  font-weight: 700;
  text-align: center;
  margin: 28px 73px 0 0;
  background-color: rgba(16, 32, 56, 0.9);
  padding: 37px 333px 54px 333px;
}

.section-title {
  font-size: 40px;
}

.description-wrapper {
  align-self: stretch;
  display: flex;
  margin-top: 61px;
  gap: 23px;
  font-size: 24px;
  color: #fff;
  font-weight: 500;
  flex-wrap: wrap;
}

.icon {
  aspect-ratio: 1;
  object-fit: contain;
  width: 100px;
  align-self: start;
  margin-top: 12px;
}

.description-text {
  flex-grow: 1;
  width: 708px;
  flex-basis: auto;
}

.pricing-title {
  color: #000;
  font-size: 48px;
  margin: 177px 0 0 68px;
}

.packages-grid {
  width: 100%;
  padding: 83px 29px 27px;
}

.packages-row {
  gap: 20px;
  display: flex;
}

.package-column {
  display: flex;
  flex-direction: column;
  line-height: normal;
  width: 25%;
  margin: 7px 41px 0 30px;
  padding: 29px 37px 54px 21px;
}

.package-header {
  border-radius: 10px;
  background-color: #d9d9d9;
  flex-grow: 1;
  color: #000;
  text-align: center;
  width: 100%;
  padding: 24px 45px;
  font: 700 24px Inter, sans-serif;
  border: 1px solid #000;
  padding: 20px 37px 21px;
}

.package-card {
  border-radius: 10px;
  background-color: #eee;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  display: flex;
  width: 100%;
  flex-direction: column;
  margin: 7px auto 0;
  padding: 29px 57px 54px 25px;
  border: 1px solid #102038;
}

.package-price {
  color: #200ee4;
  text-align: center;
  align-self: center;
  font: 700 24px Inter, sans-serif;
}

.package-image {
  object-fit: contain;
  width: 199px;
  border-radius: 10px;
  align-self: end;
  margin-top: 18px;
}

.features-list {
  align-self: start;
  display: flex;
  margin-top: 40px;
}

.checkbox-column {
  align-self: start;
  display: flex;
  flex-direction: column;
}

.checkbox {
  border-radius: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 11px 8px;
}

.check-icon {
  align-self: stretch;
  display: flex;
  min-height: 24px;
  width: 24px;
  margin: auto 0;
}

.features-text {
  color: #000;
  text-align: center;
  width: 243px;
  font: 400 20px Inter, sans-serif;
}

.cta-button {
  align-self: center;
  width: 144px;
  border-radius: 72px;
  background-color: #399c23;
  margin-top: 119px;
  height: 35px;
  color: #fff;
  text-align: center;
  padding: 8px 26px;
  font: 700 16px/1.4 Poppins, sans-serif;
  border: 2px solid #102038;
  cursor: pointer;
}

.footer-section {
  display: flex;
  margin-top: 129px;
  width: 100%;
  flex-direction: column;
  align-items: center;
  padding: 0 70px;
}

.footer-content {
  z-index: 10;
  margin-top: -129px;
  width: 100%;
  max-width: 1052px;
}

.footer-row {
  gap: 20px;
  display: flex;
}

.footer-image {
  aspect-ratio: 1.06;
  object-fit: contain;
  width: 100%;
  flex-grow: 1;
}

.footer-text {
  display: flex;
  margin-top: 197px;
  flex-direction: column;
  font-family: Poppins, sans-serif;
  color: #fff;
  font-weight: 700;
  text-align: center;
}

.footer-heading {
  font-size: 24px;
  line-height: 29px;
  letter-spacing: -1.56px;
}

.footer-button {
  border-radius: 20px;
  background-color: #ff6347;
  align-self: center;
  width: 165px;
  font-size: 16px;
  letter-spacing: -1.04px;
  line-height: 1;
  margin: 11px 0 0 23px;
  padding: 10px 46px;
  cursor: pointer;
}

.get-started-button {
  border-radius: 20px;
  background-color: #ff6347;
  align-self: center;
  margin-top: 30px;
  width: 169px;
  color: #fff;
  text-align: center;
  letter-spacing: -1.04px;
  padding: 10px 44px;
  font: 700 16px/1 Poppins, sans-serif;
  cursor: pointer;
}

@media (max-width: 991px) {
  .web-development-container {
    padding: 100px 0;
  }
  
  .hero-section,
  .content-section,
  .packages-grid,
  .footer-section,
  .footer-content {
    max-width: 100%;
  }
  
  .hero-title {
    padding: 100px 20px 110px;
  }
  
  .content-section {
    margin-right: 10px;
  }
  
  .section-title {
    margin-left: 9px;
  }
  
  .description-wrapper {
    margin-top: 40px;
  }
  
  .pricing-title {
    font-size: 40px;
    margin: 40px 0 0 10px;
  }
  
  .packages-grid {
    padding: 0 20px;
  }
  
  .packages-row {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }
  
  .package-column {
    width: 100%;
  }
  
  .package-header,
  .package-card {
    margin-top: 40px;
    padding: 0 20px;
  }
  
  .cta-button {
    margin-top: 40px;
    padding: 0 20px;
  }
  
  .footer-section {
    margin-top: 40px;
    padding: 0 20px;
  }
  
  .footer-row {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }
  
  .footer-image {
    margin-top: 40px;
  }
  
  .footer-text {
    margin-top: 40px;
  }
  
  .footer-button,
  .get-started-button {
    padding: 0 20px;
  }
}
</style>
</head>
<body>
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
<section class="web-development-container">
  <div class="hero-section">
    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3e0f8f563c4c59bfb30ceb559a2c538e8fb26b3195ec9ce25b3c938455faae67?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="hero-image" />
    <h1 class="hero-title">Web Design & Development.</h1>
  </div>
  
  <div class="content-section">
    <h2 class="section-title">Website Design In Kenya</h2>
    <div class="description-wrapper">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3a396d145181b3b00dcdf03e14ca283ed36e6cc0239140466b63e3dd21bd917d?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="icon" />
      <p class="description-text">
        We offer affordable Web Design in Kenya. Online/web presence is the key thing in this technology era. Do you know that a well-designed website is your 24hrs sales person when you are asleep? Well, your brand cannot be visible if the right approach is not used. From Classy, modern, interactive, mobile friendly, secure, easy to manage and professional websites, our team is ready to begin your Online Presence Journey.
        <br /><br />
        We offer affordable Web Design in Kenya. Online/web presence is the key thing in this technology era. Do you know that a well-designed website is your 24hrs sales person when you are asleep? Well, your brand cannot be visible if the right approach is not used. From Classy, modern, interactive, mobile friendly, secure, easy to manage and professional websites, our team is ready to begin your Online Presence Journey.
      </p>
    </div>
    <h3 class="pricing-title">Our Pricing.</h3>
  </div>

  <div class="packages-grid">
    <div class="packages-row">
      <div class="package-column">
        <div class="package-header">Essentials Package</div>
      </div>
      <div class="package-column">
        <div class="package-header">Basic Web Starter</div>
      </div>
      <div class="package-column">
        <div class="package-header">Dynamic Builder</div>
      </div>
      <div class="package-column">
        <div class="package-header">Pro-Growth Suite</div>
      </div>
    </div>
  </div>

  <div class="packages-grid">
    <div class="packages-row">
      <div class="package-column">
        <div class="package-card">
          <span class="package-price">Ksh.25,000</span>
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4d6c04a5bf2b266b3356e646b7af215c977633db28d3e8335fb3f69e15ca4a3b?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="package-image" />
          <div class="features-list">
            <div class="checkbox-column">
              <div class="checkbox"><div class="check-icon"></div></div>
              <div class="checkbox"><div class="check-icon"></div></div>
              <div class="checkbox"><div class="check-icon"></div></div>
              <div class="checkbox"><div class="check-icon"></div></div>
              <div class="checkbox"><div class="check-icon"></div></div>
              <div class="checkbox"><div class="check-icon"></div></div>
              <div class="checkbox"><div class="check-icon"></div></div>
              <div class="checkbox"><div class="check-icon"></div></div>
              <div class="checkbox"><div class="check-icon"></div></div>
              <div class="checkbox"><div class="check-icon"></div></div>
            </div>
            <p class="features-text">
              CMS-Based Design<br />
              Single Page Design<br />
              Custom Logo<br />
              Optimize for Speed<br />
              Integrated Contact Form<br />
              Social Media<br />
              One Month Of Free Support<br />
              Delivery Within 3-4 Working Days<br />
              Free One Domain<br />
              Two Weeks Free Support
            </p>
          </div>
          <button class="cta-button">Get Started</button>
        </div>
      </div>

      <div class="package-column">
        <div class="package-card">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4d6c04a5bf2b266b3356e646b7af215c977633db28d3e8335fb3f69e15ca4a3b?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="package-image" />
          <div class="checkbox-column">
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
          </div>
          <button class="cta-button">Get Started</button>
        </div>
      </div>

      <div class="package-column">
        <div class="package-card">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3c78c868aa9afe8763c0aaacbaf2122cea1a56527e7c13a749c68fa0824cd22c?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="package-image" />
          <div class="checkbox-column">
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
          </div>
          <button class="cta-button">Get Started</button>
        </div>
      </div>

      <div class="package-column">
        <div class="package-card">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/45fd8b6d77e8421b45dac4d95e7cbd47b6c0bd4d291730a4e340ed7d2600ff61?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="package-image" />
          <div class="checkbox-column">
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
            <div class="checkbox"><div class="check-icon"></div></div>
          </div>
          <button class="cta-button">Get Started</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer-section">
    <div class="footer-content">
      <div class="footer-row">
        <div class="package-column">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3ded1fb286a1444f214f2940e9b153f9bfd553d8bc40fee67527f15ac40e646d?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="footer-image" />
        </div>
        <div class="package-column">
          <div class="footer-text">
            <h2 class="footer-heading">
              Your Online Presence Our Commitment.
              <br />
              <span>
                At Xiracom Limited, we empower businesses and individuals to succeed online by providing tailored solutions that enhance web presence and performance, whether for startups, SMEs, non-profits, or independent professionals.
              </span>
            </h2>
            <button class="footer-button">Our Prices</button>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <button class="get-started-button">Get Started</button>
</section>
</body>
</html>