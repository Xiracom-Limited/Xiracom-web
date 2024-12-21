<!DOCTYPE html>
<html>
<head>
<style>
.app-dev-section {
  border-radius: 3px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  padding: 126px 0 753px;
}

.hero-wrapper {
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: start;
  padding: 0 70px;
}

.hero-content {
  z-index: 10;
  width: 100%;
  max-width: 1014px;
  margin: -58px 0 -40px;
}

.hero-row {
  gap: 20px;
  display: flex;
}

.hero-image {
  aspect-ratio: 1.06;
  object-fit: contain;
  object-position: center;
  width: 100%;
  flex-grow: 1;
}

.hero-title {
  color: #fff;
  letter-spacing: -2.72px;
  text-align: center;
  margin-top: 103px;
  font: 700 68px/1 Poppins, sans-serif;
}

.features-section {
  display: flex;
  margin-top: 135px;
  width: 100%;
  flex-direction: column;
  padding: 0 78px;
}

.feature-card {
  border-radius: 15px;
  background-color: #efe9e9;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  display: flex;
  width: 100%;
  flex-direction: column;
  color: #000;
  text-align: center;
  letter-spacing: -1.08px;
  padding: 20px 23px 90px;
  font: 27px/29px Poppins, sans-serif;
  border: 1px solid #000;
}

.feature-header {
  display: flex;
  gap: 13px;
  font-weight: 500;
}

.feature-icon {
  aspect-ratio: 1.06;
  object-fit: contain;
  object-position: center;
  width: 90px;
}

.feature-title {
  width: 253px;
  margin: auto 0;
  font-weight: 500;
}

.feature-desc {
  font-weight: 300;
  margin: 22px 0 0 20px;
}

.cta-button {
  width: 175px;
  border-radius: 72px;
  background-color: #399c23;
  min-height: 65px;
  color: #fff;
  text-align: center;
  padding: 26px 28px;
  font: 700 20px/1 Poppins, sans-serif;
  border: 2px solid #102038;
}

.why-choose-section {
  background-color: #585555;
  display: flex;
  margin-top: 36px;
  width: 100%;
  flex-direction: column;
  overflow: hidden;
  border: 1px solid #000;
}

.why-choose-title {
  color: #000;
  text-align: center;
  align-self: start;
  margin: 55px 0 0 79px;
  font: 700 48px/1 Poppins, sans-serif;
}

.cta-section {
  border-radius: 18px;
  background-color: #d9d9d9;
  align-self: center;
  display: flex;
  margin-top: 113px;
  width: 100%;
  max-width: 1284px;
  flex-direction: column;
  font-family: Poppins, sans-serif;
  padding: 27px 22px 27px 55px;
}

.cta-title {
  color: #000;
  font-size: 32px;
  font-weight: 600;
  line-height: 0.7;
  align-self: start;
}

.cta-subtitle {
  color: #000;
  font-size: 28px;
  font-weight: 400;
  line-height: 0.8;
  align-self: start;
}

@media (max-width: 991px) {
  .app-dev-section {
    padding: 100px 0;
  }

  .hero-wrapper {
    max-width: 100%;
    padding: 0 20px;
  }

  .hero-content {
    max-width: 100%;
    margin-bottom: 10px;
  }

  .hero-row {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }

  .hero-image {
    max-width: 100%;
  }

  .hero-title {
    margin-top: 40px;
    font-size: 40px;
  }

  .features-section {
    max-width: 100%;
    margin-top: 40px;
    padding: 0 20px;
  }

  .feature-card {
    margin-top: 40px;
    padding: 20px;
  }

  .feature-desc {
    margin-left: 10px;
  }

  .cta-button {
    margin-top: 40px;
    padding: 0 20px;
  }

  .why-choose-section {
    max-width: 100%;
  }

  .why-choose-title {
    font-size: 40px;
    margin: 40px 0 0 10px;
  }

  .cta-section {
    max-width: 100%;
    margin-top: 40px;
    padding: 20px;
  }
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
</style>
</head>

<body>
<section class="app-dev-section">
  <div class="hero-wrapper">
    <div class="hero-content">
      <div class="hero-row">
        <div class="column">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/af5f3044ee885653f2995f6969500fdcb25f4d1c2f3e3b77110daadacd2dc7f6?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="App Development Services" class="hero-image" />
        </div>
        <div class="column">
          <h1 class="hero-title">App Development</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="features-section">
    <div class="feature-card">
      <div class="feature-header">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/407dfcaca6d7fc0e8b7db88449cddf1b476bc9b0f8669d4c6f101f2a334aef76?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="Mobile Apps Icon" class="feature-icon" />
        <h2 class="feature-title">Custom Mobile Apps</h2>
      </div>
      <p class="feature-desc">Our solutions are tailored for Android and iOS Platforms</p>
    </div>

    <div class="feature-card">
      <div class="feature-header">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/19ea7c9400ed1ea2e5ac42248063446d054978149a71524e898ec11d9eed1216?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="User Interface Icon" class="feature-icon" />
        <h2 class="feature-title">User Friendly Interfaces</h2>
      </div>
      <p class="feature-desc">Intuitive user designs ensuring seamless user experience</p>
    </div>

    <div class="feature-card">
      <div class="feature-header">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cb0922c922ac6ca6ec9d9ead44bd008ff52d3c3ccdfd54838f0fd744a88d7dae?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="Scalability Icon" class="feature-icon" />
        <h2 class="feature-title">Scalable Solutions</h2>
      </div>
      <p class="feature-desc">Apps designed to grow your business</p>
    </div>

    <button class="cta-button" type="button">Get Started</button>
  </section>

  <h2 class="why-choose-title">Why Choose us?</h2>

  <section class="why-choose-section">
    <div class="feature-card">
      <div class="feature-header">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e3ee01395ba709d109ec3e7a62bf0f170559348b69ab72327fd07fbf1d3166fb?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="Support Icon" class="feature-icon" />
        <h3 class="feature-title">Maintenance and support</h3>
      </div>
      <p class="feature-desc">Reliable Post-launch Updates and Support</p>
    </div>

    <div class="feature-card">
      <div class="feature-header">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c7f08eb193fee4201baecec6a2eb039aa4d9d603963e4a2726646a06db47e775?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="E-commerce Icon" class="feature-icon" />
        <h3 class="feature-title">E-commerce integrations</h3>
      </div>
      <p class="feature-desc">Payment gateways, product catalogs, and user-friendly shopping experiences</p>
    </div>

    <div class="feature-card">
      <div class="feature-header">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/76c400ba918679bdcd4002392e4c78fea064cda1ba9e9e3d1ec0cf8006c334d9?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="Security Icon" class="feature-icon" />
        <h3 class="feature-title">Secure Authentication</h3>
      </div>
      <p class="feature-desc">Advanced security features like biometrics, two-factor authentication, and encrypted communication</p>
    </div>
  </section>

  <section class="cta-section">
    <h2 class="cta-title">Ready To Build your App? Let's Get Started.</h2>
    <div>
      <p class="cta-subtitle">Here is a Quick way to begin</p>
      <button class="cta-button" type="button">Get Started</button>
    </div>
  </section>
</section>
