
@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Integration</title>
    <link rel="stylesheet" href="style/api-intergrations.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>

    <header class="hero">
        <div class="container">
      
            <h1>REQUEST A <span class="highlight">QUOTE FROM US</span></h1>
            <p>Mpesa is one of the best ways people make transactions in Kenya. 
               You can now integrate Mpesa into your online business for faster transactions.</p>
        </div>
    </header>

    <section class="quote-form">
        <div class="container">
            <h2>Request a Quote</h2>
            <p>Request a quote now and take your online presence to the next level with our expert team.</p>

            <form>
                <div class="form-grid">
                    <input type="text" required placeholder="Full Name">
                    <input type="email" placeholder="Email Address">
                    <input type="tel" required placeholder="Mobile Number">
                    <input type="text" placeholder="Business Name">
                </div>

                <h3>Select Other Services, Solutions or Packages</h3>
                <div class="row">
                    <div class="col-md-6">
                    <input type="checkbox"> <label class="ml-1">Service Inquiry</label><br>
                    <input type="checkbox"><label class="ml-1"> Website Design</label><br>
                    <input type="checkbox">  <label class="ml-1">Website Maintenance</label><br>
                    <input type="checkbox"><label class="ml-1"> Software & Mobile App Development</label><br>
                    <input type="checkbox">   <label class="ml-1">Academic Script Writing</label><br>
                    <input type="checkbox"> <label class="ml-1"> Ecommerce Website</label><br>
                    <input type="checkbox"><label class="ml-1"> Payment Integration - M-PESA & Other Payments</label><br>
                    </div>
                    <div class="col-md-6">
                    <input type="checkbox"><label class="ml-1"> Domain, Hosting, SSL & Gsuite</label><br>
                    <input type="checkbox"><label class="ml-1"> Bulk SMS & Bulk WhatsApp</label><br>
                        <input type="checkbox"> <label class="ml-1">Digital Marketing Training</label><br>
                        <input type="checkbox">  <label class="ml-1"> SEO, Social Media, Paid Ads, Emails</label><br>
                        <input type="checkbox">  <label class="ml-1">Graphic Design, Logo, Printing & Branding</label><br>
                        <input type="checkbox"> <label class="ml-1"> Photography & Video Production</label><br>
                    </div>
                </div>
                <br>

                <input type="text" placeholder="How did you hear about us?" class="full-width">   <br><br>
                <textarea placeholder="Request Details" class="full-width"></textarea>
             

                <label class="consent">
                    <input type="checkbox"> I consent to have this website store my submitted information.
                </label>

                <button type="button" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </section>

</body>
</html>
@include("footer")