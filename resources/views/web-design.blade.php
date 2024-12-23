<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
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
  object-position: center;
}

.hero-title {
  position: relative;
  width: 100%;
  padding: 149px 70px 123px;
  font: 700 36px Inter, sans-serif;
}

.content-section {
  align-self: end;
  z-index: 10;
  display: flex;
  width: 100%;
  max-width: 100%;
  flex-direction: column;
  align-items: start;
  font-family: Inter, sans-serif;
  font-weight: 700;
  text-align: center;
  background-color: #102038;
}
.section-title {
  font-size: 40px;
  font-family: Inter, sans-serif;
  font-weight: 700;
  text-align: center;
  background-image: linear-gradient(to right, #399c23, #200ee4);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
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
  object-position: center;
  width: 100px;
  align-self: start;
  margin-top: 12px;
  max-width: 100%;
}

.description-text {
  flex-basis: auto;
  width: 786px;
  height: 428px;
  margin: 115px 0 21px 10px;
  object-fit: contain;
}
.pricing-title {
  font-size: 40px;
  font-family: Inter, sans-serif;
  font-weight: 700;
  text-align: center;
  background-image: linear-gradient(to right, #399c23, #200ee4);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

.package-grid {
  width: 100%;
  padding: 83px 29px 27px;
}

.package-row {
  gap: 20px;
  display: flex;
}

.package-column {
  display: flex;
  flex-direction: column;
  line-height: normal;
  width: 25%;
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

.package-features {
  align-self: start;
  display: flex;
  margin-top: 40px;
}

.feature-list {
  align-self: start;
  display: flex;
  flex-direction: column;
}

.feature-item {
  border-radius: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 11px 8px;
}

.feature-check {
  align-self: stretch;
  display: flex;
  min-height: 24px;
  width: 24px;
  margin: auto 0;
}

.cta-button {
  align-self: center;
  width: 144px;
  border-radius: 72px;
  background-color: #399c23;
  margin-top: 119px;
  height: 35px;
  max-width: 100%;
  color: #fff;
  text-align: center;
  padding: 8px 26px;
  font: 700 16px/1.4 Poppins, sans-serif;
  border: 2px solid #102038;
}
.get-started-button {
  border-radius: 20px;
  background-color: #ff6347;
  align-self: center;
  margin-top: 30px;
  width: 169px;
  max-width: 100%;
  color: #fff;
  text-align: center;
  letter-spacing: -1.04px;
  padding: 10px 44px;
  font: 700 16px/1 Poppins, sans-serif;
}

@media (max-width: 991px) 
  .web-development-container {
    padding: 100px 0;
  }
  
  .hero-section {
    max-width: 100%;
  }
  
  .hero-title {
    max-width: 100%;
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
  
  .description-text {
    max-width: 100%;
  }
  
  .pricing-title {
    font-size: 40px;
    margin: 40px 0 0 10px;
  }
.web-design-description {
  flex-grow: 1;
  width: 708px;
  flex-basis: auto;
  font-family: system-ui, -apple-system, sans-serif;
  line-height: 1.5;
  color: #FFFFFF;
  padding: 20px;
}

@media (max-width: 991px) {
  .web-design-description {
    max-width: 100%;
    padding: 15px;
  }
}
img.Rectangle-3812 {
  width: 313px;
  height: 656px;
  flex-grow: 0;
  margin: 7px 41px 0 30px;
  padding: 29px 37px 54px 21px;
  object-fit: contain;
  border-radius: 10px;
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
  border: solid 1px #102038;
  background-color: #eee;
}

        .pricing-container {
            display: flex;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .pricing-card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            width: 250px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
        }

        .price {
            font-size: 1.5rem;
            color: #0000FF; /* Blue */
            font-weight: bold;
            margin-bottom: 10px;
        }

        .features {
            text-align: left;
            margin: 20px 0;
        }

        .features li {
            list-style: none;
            margin: 5px 0;
            display: flex;
            align-items: center;
        }

        .features li::before {
            content: "✔";
            color: #5a20c4; /* Purple */
            margin-right: 10px;
            font-weight: bold;
        }

        .get-started {
            display: inline-block;
            background-color: #28a745; /* Green */
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .get-started:hover {
            background-color: #218838;
        }
</style>
</head>
<body>
<div class="web-development-container">
  <section class="hero-section">
    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3e0f8f563c4c59bfb30ceb559a2c538e8fb26b3195ec9ce25b3c938455faae67?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Web Development Hero Image" class="hero-image" />
    <h1 class="hero-title">Web Design & Development.</h1>
  </section>
  <h2 class="section-title">Website Design In Kenya</h2>
  <section class="content-section">
    <div class="description-wrapper">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3a396d145181b3b00dcdf03e14ca283ed36e6cc0239140466b63e3dd21bd917d?placeholderIfAbsent=true&apiKey=25571cca6f844f248ab52a34de520040" alt="Web Design Icon" class="icon" />
      <div class="web-design-description">
  <br />
  We offer affordable Web Design in Kenya. Online/web presence is the key thing
  in this technology era. Do you know that a well-designed website is your 24hrs
  sales person when you are asleep? Well, your brand cannot be visible if the
  right approach is not used. From Classy, modern, interactive, mobile friendly,
  secure, easy to manage and professional websites, our team is ready to begin
  your Online Presence Journey.
  <br />
  We offer affordable Web Design in Kenya. Online/web presence is the key thing
  in this technology era. Do you know that a well-designed website is your 24hrs
  sales person when you are asleep? Well, your brand cannot be visible if the
  right approach is not used. From Classy, modern, interactive, mobile friendly,
  secure, easy to manage and professional websites, our team is ready to begin
  your Online Presence Journey.
</div>
    </div>
  </section>
  <h3 class="pricing-title">Our Pricing.</h3>
  <div class="pricing-container">
        <div class="pricing-card">
            <div class="price">Ksh.25,000</div>
            <ul class="features">
                <li>CMS-Based Design</li>
                <li>Single Page Design</li>
                <li>Custom Logo</li>
                <li>Optimize for Speed</li>
                <li>Integrated Contact Form</li>
                <li>Social Media</li>
                <li>One Month of Free Support</li>
                <li>Delivery Within 3-4 Working Days</li>
                <li>Free One Domain</li>
                <li>Two Weeks Free Support</li>
            </ul>
            <a href="#" class="get-started">Get Started</a>
        </div>

        <div class="pricing-card">
            <div class="price">Ksh.45,000</div>
            <ul class="features">
                <li>CMS-Based Design</li>
                <li>1-10 Pages Design</li>
                <li>Custom Logo</li>
                <li>Optimize for Speed</li>
                <li>Integrated Contact Form</li>
                <li>Social Media Acc.</li>
                <li>One Month of Free Support</li>
                <li>Delivery Within 3-7 Working Days</li>
                <li>Free One Year Domain</li>
            </ul>
            <a href="#" class="get-started">Get Started</a>
        </div>

        <div class="pricing-card">
            <div class="price">Ksh.75,000</div>
            <ul class="features">
                <li>CMS-Based Design</li>
                <li>7-20 Pages Design</li>
                <li>Custom Logo</li>
                <li>Optimize for Speed</li>
                <li>Integrated Contact Form</li>
                <li>Social Media Acc.</li>
                <li>One Month of Free Support</li>
                <li>Delivery Within 3-7 Working Days</li>
                <li>Free One Year Domain</li>
            </ul>
            <a href="#" class="get-started">Get Started</a>
        </div>

        <div class="pricing-card">
            <div class="price">Ksh.125,000</div>
            <ul class="features">
                <li>CMS-Based Design</li>
                <li>1-10 Pages Design</li>
                <li>Custom Logo</li>
                <li>Optimize for Speed</li>
                <li>Integrated Contact Form</li>
                <li>Social Media Acc.</li>
                <li>One Month of Free Support</li>
                <li>Delivery Within 3-7 Working Days</li>
                <li>Free One Year Domain</li>
            </ul>
            <a href="#" class="get-started">Get Started</a>
        </div>
    </div>
</div>  
</body>
</html>