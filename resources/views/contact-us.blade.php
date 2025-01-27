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
      padding: 10vh 0 40vh;
      /* Use viewport height for better responsiveness */
    }

    .form-container {
      align-self: center;
      display: flex;
      width: 90%;
      /* Ensure it scales for smaller screens */
      max-width: 80%;
      /* Constrain the maximum width */
      flex-direction: column;
      margin: 3vh 0 0 1%;
      /* Relative margins for better layout control */
      font-size: 2rem;
      /* Adjust font size to scale with root */
    }

    .header-wrapper {
      align-self: flex-start;
      display: flex;
      align-items: flex-start;
      gap: 2%;
      /* Replace fixed gap with percentage */
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
      width: 10%;
      /* Scale with container size */
      margin-top: 5%;
      /* Percentage-based margin */
      max-width: 100%;
    }

    .subheader {
      align-self: center;
      margin-top: 2%;
      /* Adjust margin for better spacing */
    }



    .form-input {
      border-radius: 2rem;
      background-color: rgba(217, 217, 217, 0.55);
      align-self: flex-end;
      display: flex;
      width: 100%;
      max-width: 100%;
      height: 10vh;
      border: none;
      padding: 0 2%;
      font-size: 1rem;
      box-sizing: border-box;
    }

    .message-input {

      height: 20vh;
      border-radius: 2rem;
      background-color: rgba(217, 217, 217, 0.55);
      border: none;
      padding: 2%;
      font-size: 1rem;
      resize: none;
      box-sizing: border-box;
    }

    .form-label {
      color: #000;
      font-weight: 400;
      align-self: flex-start;
      margin: 3% 0 0 4%;
    }

    .submit-button {
      align-self: center;
      width: 20%;
      border-radius: 5rem;
      background-color: rgb(57, 156, 35);
      margin-top: 5%;
      min-height: 20px !important;
      max-width: 100%;
      color: #fff;
      text-align: center;
      padding: 1.5rem 1.5rem;
      font-size: 1rem;
      cursor: pointer;
      height: 4rem;
    }

    .visually-hidden {
      position: absolute;
      width: 0.1rem;
      height: 0.1rem;
      padding: 0;
      margin: -0.1rem;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0;
    }

    @media (max-width: 991px) {
      .contact-section {
        padding: 8vh 0;
      }

      .form-container {
        max-width: 100%;
      }

      .form-label {
        margin-left: 2%;
      }

      .submit-button {
        margin-top: 4%;
        padding: 0 5%;
      }


    }

    .form-input {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .message {
      width: ;
    }



    .hero-banner {
  position: relative;
  width: 100%;
  height: 80vh; /* Adjust as needed for your design */
  display: flex;
  align-items: center; /* Vertically center the text */
  justify-content: center; /* Horizontally center the text */
  overflow: hidden; /* Prevents content from overflowing */
}

.hero-image {
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensures the image covers the div while maintaining aspect ratio */
  filter: brightness(0.7); /* Darkens the image for better text visibility */
  z-index: 1; /* Ensures the image is behind the text */
}

.hero-text {
  color: white;
  position: absolute;
  z-index: 2; /* Ensures the text is above the image */
  font-family: 'Poppins', sans-serif;
  font-size: 2.5rem; /* Adjust font size as needed */
  font-weight: bold;
  text-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Adds a shadow for better readability */
  padding: 1rem; /* Adds padding around the text */
  line-height: 1.5;
}

@media (max-width: 768px) {
  .hero-text {
    font-size: 2rem; /* Responsive font size for smaller screens */
  }
}

@media (max-width: 480px) {
  .hero-text {
    font-size: 1.5rem; /* Further adjustment for very small devices */
  }
}

  </style>

</head>

<body>
  <section class="contact-section ">
    <div class="hero-banner position-relative">
      <img
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/fba3a0076de9f8d3b4038436db55f8ff7cd4bc847b6db4f3e1d0dfab63b5d06a?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6"
        alt="Hero Image" class="hero-image w-100 h-100 position-absolute" />
      <div class="hero-text text-center text-white">
        Contact Us
      </div>
    </div>



    </div>

    <form class="form-container">
      <div class="header-wrapper">
        <h1 class="header-text">We are here for you</h1>
        <img
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/ade16f64ae3295a3314d0f2a470c71ba098d182b7dc81c5fef9596a9002d7cd6?placeholderIfAbsent=true&apiKey=51edbe165a3b4d6fbc5f94469e7471c6"
          alt="" class="header-icon" />
      </div>

      <h2 class="subheader">How can we help?</h2>

      <!-- <label for="name" class="form-label">Name</label> -->
      <input type="text" id="name" placeholder="Name" aria-label="Name" class="form-input mb-10" required
        aria-label="Name" />

      <!-- <label for="email" class="form-label">Email</label> -->
      <input type="email" id="email" placeholder="Email" aria-label="Email" class="form-input " required
        aria-label="Email" />

      <!-- <label for="message" class="form-label">Message</label> -->
      <textarea id="message" placeholder="Message" aria-label="Message" class="form-input message-input " required
        aria-label="Message"></textarea>

      <button type="submit" class="submit-button">Submit</button>

    </form>
  </section>



</body>

</html>