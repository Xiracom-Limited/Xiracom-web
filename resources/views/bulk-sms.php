<!DOCTYPE html>
<html>
<head>
<style>
.bulk-sms-section {
  border-radius: 3px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  padding: 210px 0 614px;
}

.hero-container {
  align-self: end;
  margin-right: 36px;
  width: 100%;
  max-width: 1316px;
}

.hero-content {
  gap: 20px;
  display: flex;
}

.hero-text-column {
  display: flex;
  flex-direction: column;
  line-height: normal;
  width: 50%;
}

.hero-text-wrapper {
  display: flex;
  flex-direction: column;
  align-self: stretch;
  font-family: Poppins, sans-serif;
  text-align: center;
  margin: auto 0;
}

.hero-heading {
  color: #000;
  font-size: 64px;
  font-weight: 700;
  line-height: 70px;
  letter-spacing: -2.56px;
}

.hero-subtext-wrapper {
  display: flex;
  margin-top: 62px;
  width: 100%;
  flex-direction: column;
  padding: 0 8px;
}

.hero-subtext {
  color: #000;
  font-size: 36px;
  font-weight: 400;
  line-height: 39px;
  letter-spacing: -1.44px;
}

.cta-button {
  align-self: start;
  width: 175px;
  border-radius: 72px;
  background-color: #399C23;
  min-height: 65px;
  font-size: 20px;
  color: #fff;
  font-weight: 700;
  line-height: 1;
  margin: 37px 0 0 18px;
  padding: 26px 28px;
  border: 2px solid #102038;
  cursor: pointer;
}

.hero-image-column {
  display: flex;
  flex-direction: column;
  line-height: normal;
  width: 50%;
  margin-left: 20px;
}

.hero-image {
  aspect-ratio: 1.44;
  object-fit: contain;
  object-position: center;
  width: 100%;
  flex-grow: 1;
}

.section-title {
  color: #000;
  letter-spacing: -1.92px;
  text-align: center;
  align-self: center;
  margin-top: 106px;
  font: 600 48px/1 Poppins, sans-serif;
}

.pricing-section {
  display: flex;
  margin-top: 90px;
  width: 100%;
  flex-direction: column;
  padding: 0 75px;
}

.pricing-container {
  align-self: start;
}

.pricing-grid {
  gap: 20px;
  display: flex;
}

.pricing-card {
  display: flex;
  flex-direction: column;
  line-height: normal;
  width: 25%;
}

.card-content {
  border-radius: 30px;
  background-color: #fff;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  display: flex;
  width: 100%;
  flex-direction: column;
  color: #000;
  margin: 0 auto;
  padding: 30px 23px 55px 8px;
  font: 32px/1 Poppins, sans-serif;
}

.card-title {
  font-weight: 600;
  letter-spacing: -1.28px;
  text-align: center;
  align-self: center;
}

.divider {
  width: 241px;
  height: 1px;
  border: 1px solid #000;
  margin: 25px 0;
}

.price {
  font-weight: 500;
  letter-spacing: -1.28px;
  text-align: center;
  align-self: center;
  margin: 16px 0;
}

.features-list {
  font-size: 24px;
  font-weight: 400;
  line-height: 27px;
  letter-spacing: -0.96px;
  margin-top: 54px;
  width: 256px;
}

.plan-button {
  align-self: center;
  width: 220px;
  border-radius: 72px;
  background-color: #399C23;
  margin-top: 53px;
  min-height: 65px;
  font-size: 20px;
  color: #fff;
  font-weight: 700;
  text-align: center;
  line-height: 1;
  padding: 26px 28px;
  border: 2px solid #102038;
  cursor: pointer;
}

.cta-section {
  border-radius: 18px;
  background-color: #D9D9D9;
  align-self: end;
  display: flex;
  margin-top: 97px;
  width: 100%;
  max-width: 1284px;
  flex-direction: column;
  font-family: Poppins, sans-serif;
  padding: 34px 65px;
}

.cta-heading {
  color: #000;
  font-size: 32px;
  font-weight: 600;
  line-height: 0.7;
  align-self: start;
}

.cta-content {
  display: flex;
  margin-top: 4px;
  width: 100%;
  gap: 20px;
  text-align: center;
  flex-wrap: wrap;
  justify-content: space-between;
}

.cta-text {
  color: #000;
  font-size: 28px;
  font-weight: 400;
  line-height: 0.8;
  margin: auto 0;
}

@media (max-width: 991px) {
  .bulk-sms-section {
    padding: 100px 0;
  }

  .hero-container {
    max-width: 100%;
    margin-right: 10px;
  }

  .hero-content {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }

  .hero-text-column,
  .hero-image-column {
    width: 100%;
    margin-left: 0;
  }

  .hero-text-wrapper {
    margin-top: 40px;
  }

  .hero-heading {
    font-size: 40px;
    line-height: 48px;
  }

  .hero-subtext-wrapper {
    margin-top: 40px;
  }

  .cta-button {
    margin-left: 10px;
    padding: 0 20px;
  }

  .hero-image {
    margin-top: 40px;
  }

  .section-title {
    margin-top: 40px;
    font-size: 40px;
  }

  .pricing-section {
    margin-top: 40px;
    padding: 0 20px;
  }

  .pricing-grid {
    flex-direction: column;
    gap: 0;
  }

  .pricing-card {
    width: 100%;
    margin-top: 38px;
  }

  .card-content {
    padding-right: 20px;
  }

  .cta-section {
    margin-top: 40px;
    padding: 0 20px;
  }
}
</style>

<section class="bulk-sms-section">
  <div class="hero-container">
    <div class="hero-content">
      <div class="hero-text-column">
        <div class="hero-text-wrapper">
          <h1 class="hero-heading">Share More, Sell More with Bulk SMS!</h1>
          <div class="hero-subtext-wrapper">
            <p class="hero-subtext">
              At affordable prices to suit your needs.<br />
              Get Started with us today.
            </p>
            <button class="cta-button" tabindex="0">Get Started</button>
          </div>
        </div>
      </div>
      <div class="hero-image-column">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a6ad6855042959f9db57597dee02b99556ffc276873ac1620878fa5d7e902304?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="Bulk SMS service illustration" class="hero-image" />
      </div>
    </div>
  </div>

  <h2 class="section-title">Our Prices</h2>

  <section class="pricing-section">
    <div class="pricing-container">
      <div class="pricing-grid">
        <div class="pricing-card">
          <div class="card-content">
            <h3 class="card-title">Airtel</h3>
            <hr class="divider" />
            <p class="price">Ksh 7,500</p>
            <hr class="divider" />
            <ul class="features-list">
              <li>Recognizable messages</li>
              <li>Engagement: Increased interaction</li>
              <li>Trust: Authentic and credible</li>
              <li>Customizable: Match your brand</li>
              <li>Affordable: Cost-effective reach</li>
              <li>Compliant: Follows regulations</li>
              <li>Insights: Track performance</li>
            </ul>
            <button class="plan-button" tabindex="0">Choose Plan</button>
          </div>
        </div>

        <div class="pricing-card">
          <div class="card-content">
            <h3 class="card-title">Safaricom</h3>
            <hr class="divider" />
            <p class="price">Ksh 8,500</p>
            <hr class="divider" />
            <ul class="features-list">
              <li>Recognizable messages</li>
              <li>Engagement: Increased interaction</li>
              <li>Trust: Authentic and credible</li>
              <li>Customizable: Match your brand</li>
              <li>Affordable: Cost-effective reach</li>
              <li>Compliant: Follows regulations</li>
              <li>Insights: Track performance</li>
            </ul>
            <button class="plan-button" tabindex="0">Choose Plan</button>
          </div>
        </div>

        <div class="pricing-card">
          <div class="card-content">
            <h3 class="card-title">Telkom</h3>
            <hr class="divider" />
            <p class="price">Ksh 5,500</p>
            <hr class="divider" />
            <ul class="features-list">
              <li>Recognizable messages</li>
              <li>Engagement: Increased interaction</li>
              <li>Trust: Authentic and credible</li>
              <li>Customizable: Match your brand</li>
              <li>Affordable: Cost-effective reach</li>
              <li>Compliant: Follows regulations</li>
              <li>Insights: Track performance</li>
            </ul>
            <button class="plan-button" tabindex="0">Choose Plan</button>
          </div>
        </div>

        <div class="pricing-card">
          <div class="card-content">
            <h3 class="card-title">Pay As You Go</h3>
            <hr class="divider" />
            <p class="price">Ksh 0.8/ per SMS</p>
            <hr class="divider" />
            <ul class="features-list">
              <li>Recognizable messages</li>
              <li>Engagement: Increased interaction</li>
              <li>Trust: Authentic and credible</li>
              <li>Customizable: Match your brand</li>
              <li>Affordable: Cost-effective reach</li>
              <li>Compliant: Follows regulations</li>
              <li>Insights: Track performance</li>
            </ul>
            <button class="plan-button" tabindex="0">Choose Plan</button>
          </div>
        </div>
      </div>
    </div>

    <div class="cta-section">
      <h2 class="cta-heading">Ready To Build your Website? Let's Get Started.</h2>
      <div class="cta-content">
        <p class="cta-text">Here is a Quick way to begin</p>
        <button class="cta-button" tabindex="0">Get Started</button>
      </div>
    </div>
  </section>
</section>
</body>
</html>
