@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bulk SMS Pricing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bulk-sms.css">
</head>

<body>

  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 0px;
      margin: 0px;
      
    }

    .pricing-section {
      padding: 40px;
    }

    .bulk-sms {
      /* padding: 20px; */
      margin: 0px;
    }

    .bulk-sms.container-fluid {
      background-color: #f8f9fa;
      padding: 0px;
      width: 100% !important;
      padding-bottom: 40px;
    }

    .header-section {
      background-color: #f8f9fa;
      padding: 40px;
      border-radius: 10px;
    }

    .price-card {
      border: 1px solid #ddd;
      border-radius: 30px;
      padding: 20px;
      text-align: center;
    }

    .cta-section {
      margin-top: 40px;

      /* Rectangle 1987 */

      background: #D9D9D9;
      background: red;
      border-radius: 18px;

    }



    .btn-primary,
    .btn-outline-primary {
      background-color: #399C23;
      border-color: #399C23;
      color: white;
      border-radius: 72px;
    }

    .btn-primary:hover,
    .btn-outline-primary:hover {
      background-color: #2e7a1a;
      border-color: #2e7a1a;
    }

    .header-section {
      background-color: #f8f9fa;
      padding: 40px 0;
    }

    .header-section h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;

      /* Share More, Sell More with Bulk SMS! */



      /* font-family: 'Poppins'; */
      font-style: normal;
      font-weight: 700;
      font-size: 64px;
      line-height: 109.1%;
      /* or 70px */
      display: flex;
      align-items: center;
      text-align: center;
      letter-spacing: -0.04em;

      color: #000000;


    }

    .header-section p {
      font-size: 1.25rem;
      margin-bottom: 30px;

      /* At affordable prices to suit your needs. Get Started with us today. */



      /* font-family: 'Poppins'; */
      font-style: normal;
      font-weight: 400;
      font-size: 36px;
      line-height: 109.1%;
      /* or 39px */
      display: flex;
      align-items: center;
      text-align: center;
      letter-spacing: -0.04em;

      color: #000000;


    }

    .header-section .btn {
      font-size: 1.1rem;
      padding: 10px 30px;
    }

    #our-prices {
      /* Our Prices */


      /* font-family: 'Poppins'; */
      font-style: normal;
      font-weight: 600;
      font-size: 48px;
      line-height: 109.1%;
      /* or 52px */
      /* display: flex; */
      align-items: center;
      text-align: center;
      letter-spacing: -0.04em;

      color: #000000;


    }

    .card {
      border-radius: 30px !important;
      /* margin: 40px; */
    }

    .card h3 {
      /* Rectangle 2003 */
      /* Airtel */

      /* font-family: 'Poppins'; */
      font-style: normal;
      font-weight: 550;
      font-size: 25px;
      line-height: 109.1%;
      /* or 35px */
      /* display: flex; */
      align-items: center;
      text-align: center;
      letter-spacing: -0.04em;

      color: #000000;

    }

    .card p {
      /* Ksh 8,500 */


      /* font-family: 'Poppins'; */
      font-style: normal;
      font-weight: 500;
      font-size: 20px;
      line-height: 109.1%;
      /* or 35px */
      /* display: flex; */
      align-items: center;
      text-align: center;
      letter-spacing: -0.04em;

      color: #000000;


    }

    .card li {
      /* Recognizable messages. Engagement: Increased interaction. Trust: Authentic and credible. Customizable: Match your brand. Affordable: Cost-effective reach. Compliant: Follows regulations. Insights: Track performance. */

      /* font-family: 'Poppins'; */
      font-style: normal;
      font-weight: 400;
      font-size: 18px;
      line-height: 113%;
      /* or 27px */
      display: flex;
      align-items: center;
      /* list-style: decimal !important; */
      /* letter-spacing: -0.04em; */

      /* color: #000000; */


    }



    /* Custom button style */
    .btn-custom {
      background-color: #399C23;
      border-color: #399C23;
      color: white;
      padding: 10px 30px;
      font-size: 1.25rem;
      border-radius: 72px;
    }

    .btn-custom:hover {
      background-color: #2e7a1a;
      border-color: #2e7a1a;
      color: white;
    }

    /* CTA Section Styling */
    .cta-section {
      /* padding: 60px 0; */
      /* height: 50px; */
      margin-left: 40px;
      margin-right: 40px;
      /* margin-bottom: 40px; */
      /* Rectangle 1987 */
      padding: 10px !important;
      background: #D9D9D9 !important;
      border-radius: 18px;

    }

    .cta-section h2 {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .cta-section p {
      font-size: 1.25rem;
      margin-bottom: 0;
      /* Remove margin-bottom to align vertically with the button */
    }

    .bottom{
      padding: 0px !important;
      background-color: red !important;
      width: 100%;
    }
  </style>
  <section class="bulk-sms container-fluid">
    <div class="header-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Column: Text Content -->
          <div class="col-md-6">
            <h1 class="display-4">Share More, Sell More with Bulk SMS!</h1>
            <p class="lead">At affordable prices to suit your needs. Get Started with us today.</p>
            <button class="btn btn-primary btn-lg">Get Started</button>
          </div>

          <!-- Right Column: Image -->
          <div class="col-md-6 text-center">
            <img src="images/undraw_text_files_au1q 1.png" alt="Bulk SMS Illustration" class="img-fluid" width="400">
          </div>
        </div>
      </div>
    </div>

    <div class="pricing-section py-5">
      <h2 id="our-prices" class="text-center mb-4">Our Prices</h2>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h3 class="card-title">Airtel</h3>
              <hr>
              <p class="card-text"><strong>Ksh 7,500</strong></p>
              <hr>
              <ul class="list-unstyled">
                <li>Recognizable messages</li>
                <li>Engagement: Increased interaction</li>
                <li>Trust: Authentic and credible</li>
                <li>Customizable: Match your brand</li>
                <li>Affordable: Cost-effective reach</li>
                <li>Compliant: Follows regulations</li>
                <li>Insights: Track performance</li>
              </ul>
              <button class="btn btn-outline-primary w-100">Choose Plan</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h3 class="card-title">Safaricom</h3>
              <hr>
              <p class="card-text"><strong>Ksh 8,500</strong></p>
              <hr>
              <ul class="list-unstyled">
                <li>Recognizable messages</li>
                <li>Engagement: Increased interaction</li>
                <li>Trust: Authentic and credible</li>
                <li>Customizable: Match your brand</li>
                <li>Affordable: Cost-effective reach</li>
                <li>Compliant: Follows regulations</li>
                <li>Insights: Track performance</li>
              </ul>
              <button class="btn btn-outline-primary w-100">Choose Plan</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h3 class="card-title">Telkom</h3>
              <hr>
              <p class="card-text"><strong>Ksh 5,500</strong></p>
              <hr>
              <ul class="list-unstyled">
                <li>Recognizable messages</li>
                <li>Engagement: Increased interaction</li>
                <li>Trust: Authentic and credible</li>
                <li>Customizable: Match your brand</li>
                <li>Affordable: Cost-effective reach</li>
                <li>Compliant: Follows regulations</li>
                <li>Insights: Track performance</li>
              </ul>
              <button class="btn btn-outline-primary w-100">Choose Plan</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h3 class="card-title">Telkom</h3>
              <hr>
              <p class="card-title">Ksh 0.8 / per SMS</p>
              <hr>
              <ul class="list-unstyled">
                <li>Recognizable messages</li>
                <li>Engagement: Increased interaction</li>
                <li>Trust: Authentic and credible</li>
                <li>Customizable: Match your brand</li>
                <li>Affordable: Cost-effective reach</li>
                <li>Compliant: Follows regulations</li>
                <li>Insights: Track performance</li>
              </ul>
              <button class="btn btn-outline-primary w-100">Choose Plan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="cta-section py-5 bg-white">
      <div id="container-bottom" class="container">
        <div class="row align-items-center">
          <!-- Left Column: Text Content -->
          <div class="col-md-8 text-left">
            <h2 class="mb-3">Ready To Build your Website? Let’s Get Started.</h2>
            <p class="mb-0">Here is a quick way to begin</p>
          </div>

          <!-- Right Column: Button -->
          <div class="col-md-4 ms-auto text-end">
            <button class="btn btn-custom btn-lg">Get Started</button>
          </div>
        </div>
      </div>
    </section>
    
    
  </section>
  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>