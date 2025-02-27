@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xira Skiza Tunes - Safaricom Calls Kenya & Africa</title>
 <style>

  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
  }
  
  .skiza {
    background-color: rgba(253, 255, 252, 1);
    display: flex;
    padding-bottom: 100px;
    padding-top: 100px;
    flex-direction: column;
    align-items: left;
    text-align: left;
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
  @media screen and (max-width:768px) and (max-width:600px){
    .header h1 {
    font-size: 1.2rem;
    color: #399C23;
    margin-bottom: 10px;
  }
  
  .header h2 {
    font-size: 1.5rem;
    color: #200EE4;
  }
  
  .header p {
    font-size: 1rem;
    margin-bottom: 20px;
  }
  
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
    gap: 70px;
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

  .plan-button {
    padding: 10px 40px;
    background-color: #399C23;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 20%;
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

.fade-image img {
    
    /* Applying stronger fading effects */
    -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 60%, rgba(0,0,0,1) 70%, rgba(0,0,0,0) 100%),
                        linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 30%);
    mask-image: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 30%, rgba(0,0,0,1) 70%, rgba(0,0,0,0) 100%),
                linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 30%);
}
#container {
  zoom: 3;
  animation: scaleup 5s ease-out infinite;
}

.Phone { animation: ringing 5s ease-in-out infinite;
margin-left: 20%;
}

#p1 { transform-origin:bottom right; animation: reveal 5s ease-in-out infinite backwards; }
#p2 { transform-origin:bottom right; animation: reveal 5s ease-in-out .2s infinite backwards; }

@keyframes reveal {
  0% {opacity:0; transform: scale(1); }
  20% {opacity:0; transform: scale(1); }
  22% {opcaity:1; transform: scale(1.05); }
  26% {opacity:1; transform: scale(1); }
  40% {opacity:0; transform: scale(1); }
  100% {opacity:0; transform: scale(1); }
}

@keyframes scaleup {
  20% {transform: scale(1);}
  30% {transform: scale(1.1);}
  40% {transform: scale(1);}
  100% {transform: scale(1);}
}

@keyframes ringing {
  20% { transform: rotate(0deg); }
  21% { transform: rotate(10deg); }
  22% { transform: rotate(-10deg); }
  23% { transform: rotate(12deg); }
  24% { transform: rotate(-12deg); }
  25% { transform: rotate(12deg); }
  26% { transform: rotate(-12deg); }
  28% { transform: rotate(10deg); }
  30% { transform: rotate(-10deg); }
  32% { transform: rotate(5deg); }
  34% { transform: rotate(-5deg); }
  36% { transform: rotate(2deg); }
  38% { transform: rotate(0deg); }
}

 </style>
</head>
<body>
 

    <!-- Subheading -->
    <div class="container-fluid ml-0 skiza">
    <div class="row">
<div class="col-md-6">
<div class="fade-image">
    <img src="images/call.jpg" alt="Lady on a phone call" width="100%" height="100%">
</div>
</div>
<div class="col-md-6">
<div class="header" style="margin-top: 5%">
      <h1>CUSTOM TUNES FOR YOUR BUSINESS</h1>
      <h2>BOOST YOUR BIZ WITH XIRA SKIZA</h2>
      <p>Grow your business today with a branded skiza tunes to anyone who calls<br> Via your <font style="color:green;font-weight:500">Safaricom</font> phone Number.</p>
      <div id="container">
      <svg class="Phone" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.5 31.82C4.61 31.4989 4.7999 31.2111 5.05182 30.9837C5.30374 30.7563 5.60939 30.5967 5.94 30.52L17.94 27.78C18.2657 27.7061 18.6048 27.715 18.9262 27.8059C19.2476 27.8967 19.5411 28.0666 19.78 28.3C20.06 28.56 20.08 28.58 21.38 31.06C25.6936 29.0723 29.15 25.6017 31.12 21.28C28.58 20 28.56 20 28.3 19.7C28.0666 19.4611 27.8967 19.1676 27.8059 18.8462C27.715 18.5248 27.7061 18.1857 27.78 17.86L30.52 6C30.5967 5.66939 30.7563 5.36374 30.9837 5.11182C31.2111 4.8599 31.4989 4.67 31.82 4.56C32.2871 4.39318 32.7694 4.2726 33.26 4.2C33.7655 4.08279 34.2813 4.0158 34.8 4C37.24 4 39.58 4.96928 41.3054 6.69462C43.0307 8.41995 44 10.76 44 13.2C43.9894 21.3654 40.741 29.1934 34.9672 34.9672C29.1934 40.741 21.3654 43.9894 13.2 44C11.9918 44 10.7955 43.762 9.67931 43.2997C8.56312 42.8373 7.54892 42.1597 6.69462 41.3054C5.84032 40.4511 5.16265 39.4369 4.70031 38.3207C4.23797 37.2045 4 36.0082 4 34.8C3.99938 34.2909 4.03951 33.7827 4.12 33.28C4.20405 32.7832 4.3312 32.2947 4.5 31.82Z" fill="url(#paint0_linear_1453_55587)"/>
<path id="p1" d="M22 16C20.4087 16 18.8826 16.6321 17.7574 17.7574C16.6321 18.8826 16 20.4087 16 22C16 22.5304 15.7893 23.0391 15.4142 23.4142C15.0391 23.7893 14.5304 24 14 24C13.4696 24 12.9609 23.7893 12.5858 23.4142C12.2107 23.0391 12 22.5304 12 22C12 19.3478 13.0536 16.8043 14.9289 14.9289C16.8043 13.0536 19.3478 12 22 12C22.5304 12 23.0391 12.2107 23.4142 12.5858C23.7893 12.9609 24 13.4696 24 14C24 14.5304 23.7893 15.0391 23.4142 15.4142C23.0391 15.7893 22.5304 16 22 16V16Z" fill="url(#paint1_linear_1453_55587)"/>
<path id="p2" d="M12.1005 12.1005C14.726 9.475 18.287 8 22 8C22.5304 8 23.0391 7.78929 23.4142 7.41421C23.7893 7.03914 24 6.53043 24 6C24 5.46957 23.7893 4.96086 23.4142 4.58579C23.0391 4.21071 22.5304 4 22 4C17.2261 4 12.6477 5.89642 9.27208 9.27208C5.89643 12.6477 4 17.2261 4 22C4 22.5304 4.21071 23.0391 4.58578 23.4142C4.96086 23.7893 5.46957 24 6 24C6.53043 24 7.03914 23.7893 7.41422 23.4142C7.78929 23.0391 8 22.5304 8 22C8 18.287 9.475 14.726 12.1005 12.1005Z" fill="url(#paint2_linear_1453_55587)"/>
<defs>
<linearGradient id="paint0_linear_1453_55587" x1="11" y1="6.5" x2="34.5" y2="35" gradientUnits="userSpaceOnUse">
<stop stop-color="#363D43"/>
<stop offset="1" stop-color="#4A525B"/>
</linearGradient>
<linearGradient id="paint1_linear_1453_55587" x1="14.1" y1="12.75" x2="21.15" y2="21.3" gradientUnits="userSpaceOnUse">
<stop stop-color="#363D43"/>
<stop offset="1" stop-color="#4A525B"/>
</linearGradient>
<linearGradient id="paint2_linear_1453_55587" x1="7.5" y1="5.25" x2="19.25" y2="19.5" gradientUnits="userSpaceOnUse">
<stop stop-color="#363D43"/>
<stop offset="1" stop-color="#4A525B"/>
</linearGradient>
</defs>
</svg>
</div>
     </div>
</div>
    </div>
  </div>
    <div class="subheading">
      <p><strong>1500+ Businesses</strong> delighting their customers with custom Skiza Tunes</p>
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
    <div class="pricing-section">
    <div class="pricing-card bronze">
        <h3>Bronze</h3>
        <p><strong>KSH 1500</strong></p>
        <p>Quick easy setup for small businesses, greet your customers with a custom ringtone when they call.</p>
        <h4>Features</h4>
        <ul>
          <li>Custom business tone</li>
          <li>Upload on Skiza</li>
          <li>Pick 1 voice gender</li>
          <li>Professional recording</li>
        </ul>
        <button class="plan-button">Get Plan</button>
      </div>
      <div class="pricing-card silver">
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
        <button class="plan-button">Get Plan</button>
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
        <button class="plan-button">Get Plan</button>
      </div>
    </div>

    <!-- Call-to-Action -->
    <div class="cta-section mb-5">
      <h3>Get your Skiza Tune set up today</h3>
      <div class="cta-form">
        
        <button>Get Started</button>
      </div>
    </div>
</body>
</html>
@include("footer")