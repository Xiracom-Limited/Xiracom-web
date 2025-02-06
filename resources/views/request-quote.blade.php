
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
      
            <p class="mt-5">Need a trusted partner for your digital projects?
                At Xiracom Limited, we create tailored solutions—from websites and apps to branding and digital marketing.

Share your project details, and we’ll deliver a solution that fits your goals. Ready to start? Request a quote today!</p>
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
                    <input type="checkbox"> <label class="ml-1">Computer Consultancy</label><br>
                    <input type="checkbox"><label class="ml-1"> UI/UX Design</label><br>
                    <input type="checkbox">  <label class="ml-1">Mobile App Development</label><br>
                    <input type="checkbox"><label class="ml-2">API intergration</label><br>
                    <input type="checkbox">   <label class="ml-1">IT Support Services</label><br>
                    <input type="checkbox"> <label class="ml-1"> ERP & Ecommerce Systems</label><br>
                    <input type="checkbox"><label class="ml-1"> Payment Integration - M-PESA</label><br>
                    </div>
                    <div class="col-md-6">
                    <input type="checkbox"><label class="ml-1"> Domain & Hosting Services</label><br>
                    <input type="checkbox"><label class="ml-1"> Xiracom Bulk SMS</label><br>
                        <input type="checkbox"> <label class="ml-1">Digital Marketing Training</label><br>
                        <input type="checkbox">  <label class="ml-1"> SEO, Social Media, Paid Ads, Emails</label><br>
                        <input type="checkbox">  <label class="ml-1">Graphic Design, Logo, Printing & Branding</label><br>
                        <input type="checkbox"> <label class="ml-1"> School Management System & </label><br>
                    </div>
                </div>
                <br>

                <input type="text" placeholder="How did you hear about us?" class="full-width">   <br><br>
                <textarea placeholder="Request Details" class="full-width"></textarea>
             

                <label class="consent">
                    <input type="checkbox"> I consent to have this website store my submitted information.
                </label>

                <button type="SUBMIT" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </section>

</body>
</html>
@include("footer")