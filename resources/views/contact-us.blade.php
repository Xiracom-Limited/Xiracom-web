<!DOCTYPE html>
<html>
<head>
<style>
.contact-section {
  background: #fff;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  font-weight: 700;
  padding: 140px 0 659px;
}

.hero-banner {
  display: flex;
  flex-direction: column;
  text-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
  position: relative;
  min-height: 393px;
  width: 100%;
  color: #eee;
  text-align: center;
  padding: 146px 70px 117px;
  font: 68px Poppins, sans-serif;
}

.hero-image {
  position: absolute;
  inset: 0;
  height: 100%;
  width: 100%;
  object-fit: cover;
  object-position: center;
}

.form-container {
  align-self: center;
  display: flex;
  width: 100%;
  max-width: 1142px;
  flex-direction: column;
  margin: 28px 0 0 10px;
  font: 36px Inter, sans-serif;
}

.header-wrapper {
  align-self: start;
  display: flex;
  align-items: start;
  gap: 24px;
  flex-wrap: wrap;
}

.header-text {
  flex-grow: 1;
  flex-basis: auto;
}

.header-icon {
  aspect-ratio: 2.1;
  object-fit: contain;
  object-position: center;
  width: 124px;
  margin-top: 20px;
  max-width: 100%;
}

.subheader {
  align-self: center;
  margin-top: 6px;
}

.form-input {
  border-radius: 37px;
  background-color: rgba(217, 217, 217, 0.55);
  align-self: end;
  display: flex;
  width: 1094px;
  max-width: 100%;
  height: 76px;
  border: none;
  padding: 0 20px;
  font: inherit;
}

.message-input {
  height: 285px;
  margin-top: 14px;
  padding: 20px;
  resize: none;
}

.form-label {
  color: #000;
  font-weight: 400;
  align-self: start;
  margin: 27px 0 0 47px;
}

.submit-button {
  align-self: center;
  width: 286px;
  border-radius: 72px;
  background-color: rgb(57, 156, 35);
  margin-top: 61px;
  min-height: 89px;
  max-width: 100%;
  color: #fff;
  text-align: center;
  padding: 32px 28px;
  font: 32px/0.7 Poppins, sans-serif;
  border: 2px solid rgb(16, 32, 56);
  cursor: pointer;
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

@media (max-width: 991px) {
  .contact-section {
    padding: 100px 0;
  }

  .hero-banner {
    font-size: 40px;
    max-width: 100%;
    padding: 100px 20px 110px;
  }

  .form-container {
    max-width: 100%;
  }

  .form-label {
    margin-left: 10px;
  }

  .submit-button {
    margin-top: 40px;
    padding: 0 20px;
  }
}
</style>
</head>
<body>
<section class="contact-section">
  <div class="hero-banner">
    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fba3a0076de9f8d3b4038436db55f8ff7cd4bc847b6db4f3e1d0dfab63b5d06a?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="" class="hero-image" />
    Contact Us
  </div>

  <form class="form-container">
    <div class="header-wrapper">
      <h1 class="header-text">We are here for you</h1>
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ade16f64ae3295a3314d0f2a470c71ba098d182b7dc81c5fef9596a9002d7cd6?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6" alt="" class="header-icon" />
    </div>

    <h2 class="subheader">How can we help?</h2>

    <label for="name" class="form-label">Name</label>
    <input type="text" id="name" class="form-input" required aria-label="Name" />

    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" class="form-input" required aria-label="Email" />

    <label for="message" class="form-label">Message</label>
    <textarea id="message" class="form-input message-input" required aria-label="Message"></textarea>

    <button type="submit" class="submit-button">Submit</button>
  </form>
</section>
</body>
</html>
