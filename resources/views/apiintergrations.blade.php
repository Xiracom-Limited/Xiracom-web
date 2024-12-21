<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Intergrations</title>
    <style>
.payment-section {
  border-radius: 3px;
  background-color: #fff;
  display: flex;
  padding: 32px 0 0;
  flex-direction: column;
  overflow: hidden;
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
    width: 100%;
  height: 299px;
  margin: 30px 0;
  padding: 18px 290px 0 84px;
  border: solid 1px #000;
  background-image: linear-gradient(to right, #399c23, #200ee4);
}

.hero-content {
  display: flex;
  gap: 20px;
}

.hero-title {
  color: #fff;
  letter-spacing: -2.72px;
  text-align: center;
  align-self: stretch;
  font: 700 68px/1 Poppins, sans-serif;
}

.hero-image {
  aspect-ratio: 0.78;
  object-fit: contain;
  width: 220px;
  max-width: 100%;
  flex-grow: 1;
}

.form-section {
  display: flex;
  margin-top: 30px;
  width: 100%;
  flex-direction: column;
  align-items: start;
  padding: 0 65px;
}

.form-container {
  margin-left: 15px;
  width: 100%;
  max-width: 1241px;
}

.form-content {
  display: flex;
  gap: 20px;
}

.form-text {
  display: flex;
  margin-top: 79px;
  flex-grow: 1;
  flex-direction: column;
  align-items: start;
  color: #000;
  letter-spacing: -0.8px;
  font: 400 20px/1 Poppins, sans-serif;
}

.form-heading {
  line-height: 22px;
}

.form-title {
  font-size: 32px;
  font-weight: 700;
  letter-spacing: -1.28px;
  margin-top: 83px;
}

.form-description {
  align-self: stretch;
  margin-top: 9px;
}

.form-image {
  aspect-ratio: 1.23;
  object-fit: contain;
  width: 100%;
}

.input-group {
  display: flex;
  margin-top: 22px;
  gap: 100px;
  flex-wrap: wrap;
  font: 400 20px Inter, sans-serif;
}

.input-wrapper {
  display: flex;
  flex-direction: column;
}

.input-label {
  color: #000;
  margin-left: 27px;
}

.text-input {
  border-radius: 37px;
  background-color: rgba(217, 217, 217, 0.55);
  margin-top: 13px;
  color: rgba(0, 0, 0, 0.25);
  padding: 17px 37px;
  border: 1px solid rgba(0, 0, 0, 0.25);
}

.checkbox-group {
  display: flex;
  width: 947px;
  max-width: 100%;
  flex-wrap: wrap;
  margin: 22px 0 0 54px;
}

.submit-btn {
  border-radius: 62px;
  color: #fff;
  text-align: center;
  padding: 14px 44px;
  font: 500 20px Inter, sans-serif;
}

.footer {
  background-color: #102039;
  display: flex;
  margin-top: 86px;
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

.footer-wrapper {
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
  width: 25px;
  flex-direction: column;
  align-items: start;
  margin: 27px 0 0 30px;
}

.social-icon {
  aspect-ratio: 1;
  object-fit: contain;
  width: 100%;
}

.footer-logo {
  aspect-ratio: 1.32;
  object-fit: contain;
  width: 245px;
  align-self: start;
  margin-top: 10px;
}

.footer-image {
  object-fit: contain;
  width: 100%;
  border-radius: 0;
  margin-top: 113px;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}

@media (max-width: 991px) {
  .header-wrapper {
    max-width: 100%;
  }
  
  .nav-container {
    max-width: 100%;
  }
  
  .nav-menu {
    max-width: 100%;
  }
  
  .hero-section {
    max-width: 100%;
    padding: 0 20px;
  }
  
  .hero-content {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }
  
  .hero-title {
    max-width: 100%;
    margin-top: 40px;
    font-size: 40px;
  }
  
  .hero-image {
    margin-top: 40px;
  }
  
  .form-section {
    max-width: 100%;
    padding: 0 20px;
  }
  
  .form-container {
    max-width: 100%;
  }
  
  .form-content {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }
  
  .form-text {
    max-width: 100%;
    margin-top: 40px;
  }
  
  .form-title {
    margin-top: 40px;
  }
  
  .form-image {
    margin-top: 40px;
  }
  
  .input-group {
    max-width: 100%;
  }
  
  .input-wrapper {
    max-width: 100%;
  }
  
  .input-label {
    margin-left: 10px;
  }
  
  .text-input {
    max-width: 100%;
    padding: 0 20px;
  }
  
  .submit-btn {
    margin-left: 7px;
    padding: 0 20px;
  }
  
  .footer {
    max-width: 100%;
    margin-top: 40px;
  }
  
  .footer-content {
    max-width: 100%;
  }
  
  .footer-wrapper {
    max-width: 100%;
  }
  
  .social-icons {
    margin-left: 10px;
  }
  
  .footer-image {
    max-width: 100%;
    margin-top: 40px;
  }
}
</style>
</head>
<body>
<section class="payment-section">
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
    <div class="hero-content">
      <h1 class="hero-title">Payment Integration</h1>
    </div>
  </div>

  <div class="form-section">
    <div class="form-container">
      <div class="form-content">
        <div class="form-text">
          <h2 class="form-heading">
            <span style="font-weight:700;font-size:32px;color:#399C23">Payment</span>
            <span style="font-weight:700;font-size:32px;color:#200EE4">Integrations</span>
          </h2>
          <p class="form-description">
            Mpesa is one of the best ways people make transactions in Kenya.
            With the latest research and statistics businesses have moved
            online. You can now integrate Mpesa into your online business for
            faster transactions with your customers.
          </p>
          <h3 class="form-title">Request a Quote</h3>
          <p class="form-description">
            Request a quote now and take your online presence to the next
            level with our expert team.
          </p>
        </div>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/315ed42c675d85ffb432f9612238b0265876a87cff1a9b05a49f06e55d3c5d5d?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Payment Solutions" class="form-image" />
      </div>
    </div>

    <form class="input-group">
      <div class="input-wrapper">
        <label for="fullName" class="input-label">Your Full Names</label>
        <input type="text" id="fullName" class="text-input" placeholder="Full Name" required />
      </div>
      <div class="input-wrapper">
        <label for="email" class="input-label">Your Email Address</label>
        <input type="email" id="email" class="text-input" placeholder="Email Address" required />
      </div>
      <div class="input-wrapper">
        <label for="phone" class="input-label">Your Phone Number</label>
        <input type="tel" id="phone" class="text-input" placeholder="Mobile Number" required />
      </div>
      <div class="input-wrapper">
        <label for="business" class="input-label">Your Company/Business Name</label>
        <input type="text" id="business" class="text-input" placeholder="Business Name" required />
      </div>

      <div class="checkbox-group">
        <input type="checkbox" id="consent" required />
        <label for="consent">
          I consent to have this website store my submitted information so they can respond to my inquiry
        </label>
      </div>

      <button type="submit" class="submit-btn">Get Started</button>
    </form>
  </div>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-wrapper">
        <div class="social-icons">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b63f089cd3bde2b7521a2ec084c5e531e9c844f12b1c64e6543792b8db8d0c13?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Social Media Icon" class="social-icon" />
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/241969ec3c271f6909394b76a171d5d390413ffca4160c5a00b2fabb7a4d0bb0?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Social Media Icon" class="social-icon" />
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/aa12fabb4a93e17e7f152a6eb73029680cf0209ecfabaa80491ec4f5e823e7ec?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Social Media Icon" class="social-icon" />
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/32fa041e24fba2f0a01a21e3ed968298e7ee6f7ab25aa614b2507605143aa0c2?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Social Media Icon" class="social-icon" />
        </div>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/250e773822efec3527788a9b634d439bcfa75990ef7e7560376000a00b79381f?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Footer Logo" class="footer-logo" />
      </div>
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/08d8f16e550429ef3ee3b365712151bf071b5d3caf7b48bcfdfb3d90af65fcf0?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="" class="footer-image" />
    </div>
  </footer>
</section>
</body>
</html>