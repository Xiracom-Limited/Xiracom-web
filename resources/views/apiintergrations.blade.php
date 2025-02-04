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
        <img src="images\api intergrations1.jpeg" alt="api intergrations" class="hero-image">
            <h1>Payment <span class="highlight">Integration</span></h1>
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
                    <input type="text" placeholder="Full Name">
                    <input type="email" placeholder="Email Address">
                    <input type="tel" placeholder="Mobile Number">
                    <input type="text" placeholder="Business Name">
                </div>

                <h3>Select Other Services, Solutions or Packages</h3>
                <div class="services">
                    <div class="service-group">
                        <label><input type="checkbox"> Service Inquiry</label>
                        <label><input type="checkbox"> Website Design</label>
                        <label><input type="checkbox"> Website Maintenance</label>
                        <label><input type="checkbox"> Software & Mobile App Development</label>
                        <label><input type="checkbox"> Academic Script Writing</label>
                        <label><input type="checkbox"> Ecommerce Website</label>
                        <label><input type="checkbox"> Payment Integration - M-PESA & Other Payments</label>
                    </div>
                    <div class="service-group">
                        <label><input type="checkbox"> Domain, Hosting, SSL & Gsuite</label>
                        <label><input type="checkbox"> Bulk SMS & Bulk WhatsApp</label>
                        <label><input type="checkbox"> Digital Marketing Training</label>
                        <label><input type="checkbox"> SEO, Social Media, Paid Ads, Emails</label>
                        <label><input type="checkbox"> Graphic Design, Logo, Printing & Branding</label>
                        <label><input type="checkbox"> Photography & Video Production</label>
                    </div>
                </div>

                <input type="text" placeholder="How did you hear about us?" class="full-width">
                <textarea placeholder="Request Details" class="full-width"></textarea>

                <label class="consent">
                    <input type="checkbox"> I consent to have this website store my submitted information.
                </label>

                <button type="submit" class="btn">Get Started</button>
            </form>
        </div>
    </section>

</body>
</html>
