<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darasalink</title>
    
    <!-- Bootstrap CSS -->
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/darasalink.css">
</head>
<body>
    <!-- Navbar starts here -->
    <div class="header-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a5016053130a5fc70271270a2305caafee1ce05308b14e2bf7842f252a184fec?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Company Logo" class="logo">
        <nav class="nav-container">
            <div class="menu-wrapper">
                <a href="#" class="home-link">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d756e8c8126240957051134d6a08d14dc7246ef6a0fe66a1990f300025f683bd?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Home Icon" class="home-icon">
                </a>
                <a href="#" class="nav-link">About us</a>
                <a href="#" class="nav-link">Projects</a>
                <a href="#" class="nav-link">Our Services</a>
                <a href="#" class="nav-link">Sections</a>
                <a href="#" class="nav-link">Contact us</a>
            </div>
            <div class="auth-container">
                <div class="signup-wrapper">
                    <button class="get-started-btn">Get Started</button>
                </div>
            </div>
        </nav>
    </div>

    <!-- Heroes section starts here -->
    <div class="container-fluid heroes-section bg-success text-white py-5">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-left">
                    <h1>Revolutionizing Education With One Link At a Time</h1>
                    <p>Darasalink empowers you with real-time access to student progress and efficient operational tools.</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                    <a href="#" class="btn btn-secondary">Request Demo</a>
                </div>
                <div class="col-md-6 text-center">
                    <!-- Hero Image -->
                    <img src="./images/Darasalink1.png" alt="Hero Image" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Services section starts here -->
    <div class="container-fluid services-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Our Services</h2>
            <div class="row d-flex justify-content-center">
                <!-- Service: UI/UX Designing -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink2.png" alt="UI/UX" class="img-fluid mb-3">
                        <h5>UI/UX Designing</h5>
                        <p>We create intuitive, user-friendly designs to ensure smooth interaction and engagement on digital platforms.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: Bulk SMS -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink3.png" alt="Bulk SMS" class="img-fluid mb-3">
                        <h5>Bulk SMS</h5>
                        <p>Simplify communication with your audience through reliable and cost-effective messaging solutions.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: Graphic Designing -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink4.png" alt="Graphic Designing" class="img-fluid mb-3">
                        <h5>Graphic Designing</h5>
                        <p>We deliver visually compelling designs for branding, promotional materials, and other creative needs.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: Web Development -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink5.png" alt="Web Development" class="img-fluid mb-3">
                        <h5>Web Development</h5>
                        <p>Our team builds responsive, functional websites that elevate your online presence and meet your business goals.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: App Development -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink6.png" alt="App Development" class="img-fluid mb-3">
                        <h5>App Development</h5>
                        <p>We create innovative mobile applications that enhance operations, simplify processes, and connect you with your users.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: Jobs & Internships -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink7.png" alt="Jobs & Internships" class="img-fluid mb-3">
                        <h5>Jobs & Internships</h5>
                        <p>We offer opportunities for skill development and professional growth, helping individuals and businesses thrive together.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us section starts here -->
    <div class="container-fluid whychoose-section py-5">
        <div class="container text-center">
            <h2>Why Choose Us</h2>
            <div class="row">
                <!-- Feature: Expertise and Innovation -->
                <div class="col-md-6">
                    <div class="feature">
                        <div class="circle-frame">
                            <img src="./images/Darasalink8.png" alt="Expertise and Innovation" class="img-fluid" style="max-height: 400px;">
                        </div>
                        <h4>Expertise and Innovation</h4>
                    </div>
                </div>
                <!-- Feature: Customer-Centric Approach -->
                <div class="col-md-6">
                    <div class="feature">
                        <div class="circle-frame">
                            <img src="./images/Darasalink9.png" alt="Customer-Centric Approach" class="img-fluid" style="max-height: 400px;">
                        </div>
                        <h4>Customer-Centric Approach</h4>
                    </div>
                </div>
                <!-- Feature: Comprehensive Solutions -->
                <div class="col-md-6">
                    <div class="feature">
                        <div class="circle-frame">
                            <img src="./images/Darasalink10.png" alt="Comprehensive Solutions" class="img-fluid" style="max-height: 400px;">
                        </div>
                        <h4>Comprehensive Solutions</h4>
                    </div>
                </div>
                <!-- Feature: Ongoing Support -->
                <div class="col-md-6">
                    <div class="feature">
                        <div class="circle-frame">
                            <img src="./images/Darasalink11.png" alt="Ongoing Support" class="img-fluid" style="max-height: 400px;">
                        </div>
                        <h4>Ongoing Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
