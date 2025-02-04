@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xira Skiza Tunes</title>
 <style>
  /* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
  }
  
  /* Skiza Section */
  .skiza {
    background-color: rgba(253, 255, 252, 1);
    display: flex;
    padding-bottom: 100px;
    padding-top: 100px;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background: linear-gradient(90deg, #A0CD96 0%, #DAD7F7 26.81%, #B3D3AB 54.58%, #DAD7F7 99.86%);
  }
  
  .header h1 {
    font-size: 1.5rem;
    color: #399C23;
    margin-bottom: 10px;
  }
  
  .header h2 {
    font-size: 2rem;
    color: #200EE4;
  }
  
  .header p {
    font-size: 1rem;
    margin-bottom: 20px;
  }
  
  .subheading p {
    font-size: 1.1rem;
    margin: 20px 0;
    text-align: center;
  }
  
  /* Info Section */
  .info-section {
    display: flex;
    justify-content: space-around;
    margin: 40px 0 0 200px;
    text-align: left;
  }
  
  .info, .setup {
    width: 45%;
  }
  
  .info h3, .setup h3 {
    font-size: 1.2rem;
    color: #200EE4;
    margin-bottom: 10px;
  }
  
  .info p {
    margin-bottom: 10px;
  }
  
  .setup ul {
    list-style: none;
  }
  
  .setup ul li {
    margin-bottom: 5px;
    position: relative;
  }
  
  .setup ul li::before {
    content: "•";
    color: #399C23;
    font-weight: bold;
    margin-right: 10px;
  }
  
  /* Pricing Section */
  .pricing-section {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
  }
  
  .pricing-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 250px;
    text-align: left;
    gap: 50px;
    transition: transform 0.3s ease;
  }

  .pricing-card:hover {
  transform: translateY(-10px);
}
  
  .pricing-card h3 {
    font-size: 1.4rem;
    margin-bottom: 10px;
    color: #399C23;
  }
  
  .pricing-card p {
    font-size: 1rem;
    margin-bottom: 20px;
  }
  
  .pricing-card h4 {
    margin-bottom: 10px;
    font-size: 1.1rem;
    color: #200EE4;
  }
  
  .pricing-card ul {
    list-style: none;
    padding: 0;
  }
  
  .pricing-card ul li {
    margin-bottom: 5px;
    position: relative;
  }
  
  .pricing-card ul li::before {
    content: "•";
    color: #200EE4;
    font-weight: bold;
    margin-right: 10px;
  }
  
  /* Specific Card Colors */
  .bronze {
    border-top: 4px solid #399C23;
  }
  
  .silver {
    border-top: 4px solid #200EE4;
  }
  
  .gold {
    border-top: 4px solid #399C23;
  }
  
  /* CTA Section */
  .cta-section {
    margin-top: 40px;
    text-align: center;
  }
  
  .cta-section h3 {
    margin-bottom: 10px;
    color: #200EE4;
  }
  
  .cta-form {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
  }
  
  .cta-form input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 300px;
  }
  
  .cta-form button {
    padding: 10px 20px;
    background-color: #399C23;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .cta-form button:hover {
    background-color: #399C23;
  }

  .pricing-section {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 40px;
  flex-wrap: wrap; 
}
  
  @media (max-width: 768px) {
  .pricing-section {
    flex-direction: column; 
    align-items: center; 
  }

  .pricing-card {
    width: 90%;
    max-width: 300px; 
  }
}



.subheading {
  text-align: center;
  font-size: 1.2rem;
  margin: 20px 10px;
  padding: 10px;
}


.info-section {
  display: flex;
  justify-content: space-around;
  align-items: flex-start;
  gap: 20px;
  margin: 40px auto;
  text-align: left;
  max-width: 900px;
}


.info, .setup {
  width: 45%;
}


@media (max-width: 768px) {
  .info-section {
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-left: 20px; 
    margin-right: 20px;
  }

  .info, .setup {
    width: 90%; 
  }

  .setup ul {
    padding-left: 0;
    text-align: center;
  }
}

 </style>
</head>
<body>
  <section class="skiza">
    <!-- Hero Section -->
    <div class="header">
      <h1>CUSTOM TUNES FOR YOUR BUSINESS</h1>
      <h2>BOOST YOUR BIZ WITH XIRA SKIZA</h2>
      <p>Grow your business today with XiraSkiza, let your callers<br> know about your hustle.</p>
    </div>
    </section>
    <!-- Subheading -->
    <div class="subheading">
      <p><strong>15,000+ Businesses</strong> delighting their customers with custom Skiza Tunes</p>
    </div>

    <!-- Info Section -->
    <div class="info-section">
      <div class="info">
        <h3>No more waiting</h3>
        <p>
          Having a custom Skiza Tone has really helped us to scale our customer support. We are now able 
          to handle more and keep customers happy all the time.
        </p>
        <p>
          When customers call they get redirected to a customer care agent via an IVR interface.
        </p>
      </div>
      <div class="setup">
        <h3>The Set Up</h3>
        <ul>
          <li>IVR Set Up</li>
          <li>Custom Ringtone</li>
          <li>PABX Setup</li>
          <li>Custom Recording</li>
          <li>Tone Shuffling</li>
        </ul>
      </div>
    </div>

    <!-- Pricing Section -->
    <div class="row pricing-section">
      <div class="col-12 pricing-card bronze">
        <h3>Bronze</h3>
        <p><strong>KSH 1000</strong></p>
        <p>Quick easy setup for small businesses, greet your customers with a custom ringtone when they call.</p>
        <h4>Features</h4>
        <ul>
          <li>Custom business tone</li>
          <li>Upload on Skiza</li>
          <li>Pick 1 voice gender</li>
          <li>Professional recording</li>
        </ul>
      </div>
      <div class="col-12 pricing-card silver">
        <h3>Silver</h3>
        <p><strong>KSH 5000</strong></p>
        <p>Set up a custom ringtone on your mobile line and customer care centre, manage which tone is played to customers.</p>
        <h4>Features</h4>
        <ul>
          <li>Custom business tone</li>
          <li>Upload on Skiza</li>
          <li>Set up on your PABX</li>
          <li>Pick 1 voice gender</li>
          <li>Tone Shuffling</li>
          <li>Professional recording</li>
        </ul>
      </div>
      <div class="pricing-card gold">
        <h3>Gold</h3>
        <p><strong>KSH 10000</strong></p>
        <p>The Pro level customer service setup with interactive responses and up to 5 pre-recorded voices to pick from.</p>
        <h4>Features</h4>
        <ul>
          <li>Custom business tone</li>
          <li>Upload on Skiza</li>
          <li>Set up on your PABX</li>
          <li>Up to 5 voices</li>
          <li>Tone Shuffling</li>
          <li>Professional recording</li>
          <li>Interactive setup</li>
          <li>Free Music</li>
          <li>Get Skiza</li>
        </ul>
      </div>
    </div>

    <!-- Call-to-Action -->
    <div class="cta-section">
      <h3>Get your business set up today</h3>
      <div class="cta-form">
        <input type="text" placeholder="Email or number">
        <button>Get Started</button>
      </div>
    </div>
  
</body>
</html>
