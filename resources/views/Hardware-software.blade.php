@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware Software Maintenance</title>
    <link rel="stylesheet" href="style/hardware-software.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>

    <!-- Maintenance container -->
    <div class="maintenance-container">
        <!-- Hero section -->
        <div class="hero-section">
            <img src="images\hardware and software installation1.jpeg" alt="Hardware and software maintenance services hero image" class="hero-image" />
            <center>
            <h1 class="hero-title">Hardware and Software Maintenance</h1>
            </center>
        </div>

        <!-- Content section -->
        <div class="content-wrapper">
            <h1 class="section-title">Our Services</h1>
            <center>
            <p class="section-description">
                At Xiracom, we specialize in providing comprehensive hardware and software maintenance services to businesses of all sizes. Our team is committed to ensuring your IT infrastructure runs smoothly, securely, and efficiently.
            </p>
            </center>

            <!-- Services grid -->
            <div class="services-container">
                <div class="services-grid">
                    <!-- Hardware Maintenance Card -->
                    <div class="service-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/0da636ce9df697438dbfa6c78a0e3e38d9f010029341e39844423ee54bc23d2a?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Hardware maintenance icon" class="service-icon" />
                        <h2 class="service-title">Hardware Maintenance</h2>
                        <div class="service-features">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a75f9fec9bf49c2560d0e9cffee0bd51c1dbf5e7ce75b82f3d998cffb1f9614a?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="" class="feature-icon" />
                            <div class="feature-list">
                                <p>Diagnostics and Repair Services</p>
                                <p>Preventive Maintenance Schedules</p>
                                <p>Installation and Upgrades of IT Equipment</p>
                            </div>
                        </div>
                        <button class="cta-button" tabindex="0">Get Started</button>
                    </div>

                    <!-- Software Maintenance Card -->
                    <div class="service-card">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b481d809b39c967acfb0316674a7cb89f35605c7278745b2d8386e2b09650f40?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Software maintenance icon" class="service-icon" />
                        <h2 class="service-title">Software Maintenance</h2>
                        <div class="service-features">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a75f9fec9bf49c2560d0e9cffee0bd51c1dbf5e7ce75b82f3d998cffb1f9614a?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="" class="feature-icon" />
                            <div class="feature-list">
                                <p>Operating System Updates and Patch Management</p>
                                <p>Antivirus Installation & Malware Removal</p>
                                <p>License Management and Compliance</p>
                            </div>
                        </div>
                        <button class="cta-button" tabindex="0">Get Started</button>
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <h2 class="benefits-title">Why Choose Us?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/072ac28f35e03d3f79a82e1278f4c18e6af2eaaade2f063fbc4a360ceb1cd06f?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Certified professionals icon" class="benefit-icon" />
                    <h3 class="benefit-title">Certified Professionals</h3>
                </div>

                <div class="benefit-card">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8ccb89ab72fae73ec2790fe82310dbcce09b4c6334d3408c2cad271ccde7970a?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="24/7 support icon" class="benefit-icon" />
                    <h3 class="benefit-title">24/7 Support</h3>
                </div>

                <div class="benefit-card">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1e5591344c6479bc25e3113aa904e93ffdaa5b15612b8bb7bf5aaa1804a65718?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Tailored solutions icon" class="benefit-icon" />
                    <h3 class="benefit-title">Tailored Solutions</h3>
                </div>
            </div>
        </div>
    </div>

    @include("footer") 


</body>
</html>
