<!DOCTYPE html>
<html>
<head>
<style>
     .visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
  }
  .hero-image {
    aspect-ratio: 3.66;
    object-fit: contain;
    object-position: center;
    width: 100%;
  }
  .contact-heading {
  color: rgba(238, 238, 238, 1);
  text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  text-align: center;
  max-width: 384px;
  font: 700 68px Poppins, sans-serif;
}
  .visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
  }

  .logo-image {
    aspect-ratio: 2.1;
    object-fit: contain;
    object-position: center;
    width: 100%;
    max-width: 124px;
  }
.hero-heading {
  max-width: 341px;
  font: 700 36px Inter, sans-serif;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.section-heading {
  max-width: 326px;
  font: 700 36px Inter, sans-serif;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.user-name {
  color: rgba(0, 0, 0, 1);
  max-width: 100px;
  font: 400 36px Inter, sans-serif;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.rounded-container {
  border-radius: 37px;
  background-color: rgba(217, 217, 217, 0.55);
  display: flex;
  min-height: 76px;
}
.email-text {
  color: rgba(0, 0, 0, 1);
  max-width: 91px;
  font: 400 36px Inter, sans-serif;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.rounded-container {
  border-radius: 37px;
  background-color: rgba(217, 217, 217, 0.55);
  display: flex;
  min-height: 76px;
}
.message-text {
  color: rgba(0, 0, 0, 1);
  max-width: 154px;
  font: 400 36px Inter, sans-serif;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.rounded-container {
  border-radius: 37px;
  background-color: rgba(217, 217, 217, 0.55);
  display: flex;
  min-height: 285px;
}
.rounded-container {
  border-radius: 72px;
  display: flex;
  max-width: 286px;
  flex-direction: column;
}

.green-button {
  border-radius: 72px;
  background-color: rgba(57, 156, 35, 1);
  display: flex;
  min-height: 89px;
  width: 100%;
  border: 2px solid rgba(16, 32, 56, 1);
}
.cta-button {
  color: rgba(255, 255, 255, 1);
  text-align: center;
  max-width: 117px;
  font: 700 32px/0.7 Poppins, sans-serif;
  cursor: pointer;
  border: none;
  background: none;
  padding: 0;
  margin: 0;
  outline: none;
  transition: opacity 0.2s ease;
}

.cta-button:hover,
.cta-button:focus {
  opacity: 0.9;
}

.cta-button:focus-visible {
  outline: 2px solid #fff;
  outline-offset: 2px;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
</style>
   <title>Page title</title>
</head>
<body>
<img
  loading="lazy"
  src="https://cdn.builder.io/api/v1/image/assets/TEMP/fba3a0076de9f8d3b4038436db55f8ff7cd4bc847b6db4f3e1d0dfab63b5d06a?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6"
  class="hero-image"
  alt="Hero section banner"
  tabindex="0"
/>
<div class="contact-heading">Contact Us</div>
</
<img
  loading="lazy"
  src="https://cdn.builder.io/api/v1/image/assets/TEMP/8bb4794bfd1951df75e48b6722c88f6eb5498e1b572e157086333ae5ae6d6df5?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6"
  alt="Company Logo"
  class="logo-image"
/>
<div class="hero-heading" role="heading" aria-level="1" tabindex="0">We are here for you</div>
<div class="section-heading" tabindex="0">How can we help?</div>
<div class="user-name" tabindex="0">Name</div>
<div class="rounded-container"></div>
<form class="email-form">
  <label for="emailInput" class="visually-hidden">Email</label>
  <input type="email" id="emailInput" class="email-text" placeholder="Email" aria-label="Email" required />
</form>
<div class="rounded-container"></div>
<div class="message-text">Message</div>
<div class="rounded-container"></div>
<div class="rounded-container">
  <div class="green-button" tabindex="0" role="button"></div>
</div>
<button class="cta-button" type="button">
  <span class="visually-hidden">Submit form</span>
  Submit
</button>
</body>
</html>
