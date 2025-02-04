@include("nav-bar2")

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Development</title>
  <link rel="stylesheet" href="app-development.css">
</head>

<body>
  <style>
    /* Importing Bootstrap */
    @import url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


    body {
      font-family: 'Poppins', sans-serif;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: #000;
      background-color: white;
      background: linear-gradient(180deg, #FFFFFF 86%, #999999 100%);
      /* background-color: #f8f9fa; */
    }

    .app-development {
      text-align: center;
      /* padding: 40px; */
      /* background: linear-gradient(to right, #001f61, #0036a3); */
      color: white;
    }

    /* .header-section {
      margin-bottom: 50px;
      background: linear-gradient(to right, #001f61, #0036a3);
      width: 100%;
    } */

    .header-section .mockup-image {
      max-width: 300px;
      margin-bottom: 20px;
    }

    .header-section h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 20px;
      padding: 40px;

    }


    .feature-card h3 {
      font-size: 1.4rem;

      font-weight: 600;

      margin-bottom: 15px;

    }

    .feature-card p {
      font-size: 1rem;
      color: #555;

    }

    .feature-card {
      align-items: center;
      text-align: center;

      background-color: #f8f9fa;
      color: black;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      flex: 0 1 calc(33.333% - 20px);
      min-width: 250px;
      border: 1px solid gray;

    }

    .feature-card h3 {
      align-items: center;
      text-align: center;

      font-style: normal;
      font-weight: 530;
      font-size: 27px;
      line-height: 109.1%;
      font-size: 1.25rem;
      margin-bottom: 10px;
    }

    .cta {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 8px;
      margin-top: 20px;
      cursor: pointer;
    }

    .cta:hover {
      background-color: #218838;
    }

    .why-choose-us {
      padding: 40px;
      background: linear-gradient(to right, #001f61, #28a745);
      color: white;
      text-align: center;
    }

    .why-choose-us h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .why-choose-us .content {
      max-width: 900px;
      margin: auto;
    }

    .why-choose-us .description {
      margin-bottom: 30px;
    }

    .why-choose-us .benefits {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .benefit-card {
      background-color: white;
      color: black;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      flex: 0 1 calc(50% - 20px);
      min-width: 250px;
    }

    .benefit-card h3 {
      font-size: 1.25rem;
      margin-bottom: 10px;
    }

    .cta-section {
      padding: 40px;
      background-color: #f8f9fa;
      text-align: center;
    }

    .cta-section h2 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .cta-section p {
      font-size: 1rem;
      margin-bottom: 20px;
    }


    .app-development .header-section {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .mockup-image {
      max-width: 100%;
      width: 300px;

    }

    .text-content {
      width: 100%;
      text-align: left;
      padding: 0 15px;
    }

    @media (min-width: 768px) {
      .mockup-image {
        width: 40%;

      }

      .text-content {
        width: 50%;

        text-align: left;
      }
    }

    @media (max-width: 767px) {
      .text-content {
        width: 100%;

        text-align: center;

      }

      .mockup-image {
        width: 100%;

        max-width: 100%;

      }

      .header-section {
        flex-direction: column;
   
        text-align: center;
      }
    }

    #whychooseus {
      color: black !important;
      font-weight: 600;
      padding-left: 40px;
    }



   

    .why-choose-us .content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 2rem;
   
    }

    .why-choose-us .image img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
  
    }

    .why-choose-us .text {
      flex: 1;
    }

    .benefit-card h3 {
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }

    .benefit-card p {
      font-size: 1rem;
    }


    .benefits {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 1.5rem;
    
    }

    .benefit-card {
      background-color: #f4f4f4;
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .benefit-card h3 {
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }

    .benefit-card p {
      font-size: 1rem;
    }


    .cta-section {
      background-color: #D9D9D9;
      padding: 3rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-radius: 18px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      font-family: 'Poppins', sans-serif;
      /* height: 100px; */
    }

    .cta-section h2 {
      font-size: 1.2rem;
      font-weight: 600;
      margin: 0;
    }

    .cta-section p {
      font-size: 1rem;
      margin: 1rem 0;
    }

    .cta {
      padding: 1rem 2rem;
      background-color: #28a745;
      color: white;
      font-size: 1.2rem;
      font-weight: 600;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: background-color 0.3s ease;

    }



    .cta:hover {
      background-color: #218838;
      
    }

    #last {
      margin: 40px;
      padding: 20px;
    }


    @media (max-width: 767px) {
  .cta-section {
    flex-direction: column; /* Stack elements vertically */
    text-align: center; /* Center-align text */
  }

  .cta-section button {
    margin-left: 0; /* Remove left margin */
    margin-top: 20px; /* Add top margin for spacing */
  }
}


/* Container for the header section */
.header-section {
  position: relative; /* Needed for absolute positioning of text */
  width: 100%; /* Full width */
  height: 400px; /* Adjust height as needed */
  overflow: hidden; /* Ensures the image doesn't overflow */
}

/* Background image */
.header-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('images/app-dev-2.jpg'); /* Path to your image */
  background-size: cover; /* Ensures the image covers the entire area */
  background-position: center; /* Centers the image */
  z-index: -1; /* Places the image behind the text */
}

/* Text content */
.text-content {
  position: absolute; /* Positions text on top of the image */
  top: 50%; /* Centers vertically */
  left: 50%; /* Centers horizontally */
  transform: translate(-50%, -50%); /* Adjusts for exact centering */
  text-align: center; /* Centers text */
  color: white; /* Text color */
  z-index: 1; /* Ensures text is above the image */
}

/* Optional: Add a dark overlay for better text readability */
.header-section::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
  z-index: 0; /* Places the overlay between the image and text */
}
  </style>

  <section class="app-development">
  <div class="header-section">
  <div class="text-content">
    <h1>App Development</h1>
    <p id="burner-text">We create custom web applications, combining innovation, functionality, and expert
      development to bring your vision to life.</p>
  </div>
</div>
    <!-- <div class="header-section">
      <img src="images/app-dev-2.jpg" alt="App Development Mockup" class="mockup-image">
      <div class="text-content">
        <h1>App Development</h1>
        <p id="burner-text">We create custom web applications, combining innovation, functionality, and expert
          development to bring your vision to life.</p>
      </div>
    </div> -->

    <!-- <div class="features">
      <div class="feature-card">
        <div class="d-flex align-items-center justify-content-center">
          <div class="icon-container">
            <img src="images/iPhone SE.png" alt="Icon" class="icon-image" width="30px" height="30px">
          </div>
          <h3>Custom Mobile Apps</h3>
        </div>
        <p>Our solutions are tailored for Android and iOS platforms.</p>
      </div> -->

    <div class="features">
      <div class="feature-card">
        <div class="d-flex align-items-center justify-content-center">
          <div class="icon-container">
            <img src="images/iPhone SE.png" alt="Icon" class="icon-image" height="40px">
          </div>
          <h3>Custom Mobile Apps</h3>
        </div>
        <p>Our solutions are tailored for Android and iOS platforms.</p>
      </div>

      <div class="feature-card">
        <div class="d-flex align-items-center justify-content-center">
          <div class="icon-container">
            <img src="images/Checked User Male.png" alt="Icon" class="icon-image" height="40px">
          </div>
          <h3>User Friendly Interfaces</h3>
        </div>
        <p>Intuitive user designs ensuring seamless user experience.</p>
      </div>

      <div class="feature-card">
        <div class="d-flex align-items-center justify-content-center">
          <div class="icon-container">
            <img src="images/People.png" alt="Icon" class="icon-image" height="40px">
          </div>
          <h3>Scalable Solutions</h3>
        </div>
        <p>Apps designed to grow your business.</p>
      </div>

      <div class="feature-card">
        <div class="d-flex align-items-center justify-content-center">
          <div class="icon-container">
            <img src="images/Ringing Phone.png" alt="Icon" class="icon-image" height="40px">
          </div>
          <h3>Maintenance and Support</h3>
        </div>
        <p>Reliable post-launch updates and support.</p>
      </div>

      <div class="feature-card">
        <div class="d-flex align-items-center justify-content-center">
          <div class="icon-container">
            <img src="images/Bank Building.png" alt="Icon" class="icon-image" height="40px">
          </div>
          <h3>E-commerce Integrations</h3>
        </div>
        <p>Payment gateways, product catalogs, and user-friendly shopping experiences.</p>
      </div>

      <div class="feature-card">
        <div class="d-flex align-items-center justify-content-center">
          <div class="icon-container">
            <img src="images/Checked Identification Documents.png" alt="Icon" class="icon-image" height="40px">
          </div>
          <h3>Secure Authentication</h3>
        </div>
        <p>Advanced security features like biometrics, two-factor authentication, and encrypted communication.</p>
      </div>
    </div>

    </div>

    <div class="d-flex justify-content-end m-5">
      <button class="cta">Get Started</button>
    </div>
    <div class="d-flex justify-content-start pe-5">
      <h2 id="whychooseus">Why Choose Us?</h2>
    </div>
  </section>

  <section class="why-choose-us">
    <div class="content">
      <div class="image">
        <img src="images/mohammad-rahmani-nBXwqxjDa5c-unsplash 1.png" alt="Why Choose Us Image" width="300px">
      </div>
      <div class="text">
        <div class="description">
          <p>We are committed to delivering cutting-edge solutions that meet your needs and exceed your expectations.
            Here is why you should partner with us:</p>
        </div>
        <div class="benefits">
          <div class="benefit-card">
            <h3>Fast Delivery</h3>
            <p>On-time and cost-efficient solutions.</p>
          </div>
          <div class="benefit-card">
            <h3>Expert Team</h3>
            <p>Experienced developers for top-notch results.</p>
          </div>
          <div class="benefit-card">
            <h3>Secure Transactions</h3>
            <p>We prioritize data security and privacy.</p>
          </div>
          <div class="benefit-card">
            <h3>24/7 Support</h3>
            <p>Reliable assistance anytime you need it.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="cta-section w-sm-100" id="last">
    <div>
      <h2 class="fs-sm-2">Ready To Build Your App? Let’s Get Started.</h2>
      <p>Here is a quick way to begin</p>
    </div>

    <button class="cta fs-sm-2 ">Get Started</button>
  </section>
</body>

</html>