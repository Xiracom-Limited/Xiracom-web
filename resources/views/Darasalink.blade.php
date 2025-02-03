<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darasalink</title>

    <!-- Bootstrap CSS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/darasalink.css">
</head>

<body>

    <style>
         /* Custom CSS for the hero section */
         .hero-section {
            position: relative;
            background-image: url('https://via.placeholder.com/1920x1080'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            height: 100vh; /* Full viewport height */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 20px;
        }
        /* Dark overlay */
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #FA8C8C1F; /* Black with 50% opacity */
        }
        /* Ensure text is above the overlay */
        .hero-section .container {
            position: relative;
            z-index: 1;
        }
        .hero-section h1 {
            font-size: 3.5rem; /* Large font size for the heading */
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.25rem; /* Slightly larger font size for the paragraph */
            margin-bottom: 30px;
        }
        .hero-section .btn {
            font-size: 1.1rem;
            padding: 10px 25px;
            margin: 0 10px;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem; /* Smaller font size for smaller screens */
            }
            .hero-section p {
                font-size: 1rem;
            }
            .hero-section .btn {
                width: 100%; /* Full-width buttons on small screens */
                margin: 10px 0;
            }
        }
    </style>
    <!-- Navbar starts here -->


    <!-- Heroes section starts here -->
    <!-- <div class="container-fluid heroes-section bg-success text-white py-5">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-left">
                    <h1>Revolutionizing Education With One Link At a Time</h1>
                    <p>Darasalink empowers you with real-time access to student progress and efficient operational tools.</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                    <a href="#" class="btn btn-secondary">Request Demo</a>
                </div>
                <div class="col-md-6 text-center">
                    
                    <img src="./images/Darasalink1.png" alt="Hero Image" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </div> -->

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1>Revolutionizing Education With One Link At a Time</h1>
            <p>Darasalink empowers you with real-time access to student progress and efficient operational tools.</p>
            <div>
                <a href="#" class="btn btn-primary">Get Started</a>
                <a href="#" class="btn btn-outline-light">Request Demo</a>
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
                        <p>We create intuitive, user-friendly designs to ensure smooth interaction and engagement on
                            digital platforms.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: Bulk SMS -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink3.png" alt="Bulk SMS" class="img-fluid mb-3">
                        <h5>Bulk SMS</h5>
                        <p>Simplify communication with your audience through reliable and cost-effective messaging
                            solutions.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: Graphic Designing -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink4.png" alt="Graphic Designing" class="img-fluid mb-3">
                        <h5>Graphic Designing</h5>
                        <p>We deliver visually compelling designs for branding, promotional materials, and other
                            creative needs.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: Web Development -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink5.png" alt="Web Development" class="img-fluid mb-3">
                        <h5>Web Development</h5>
                        <p>Our team builds responsive, functional websites that elevate your online presence and meet
                            your business goals.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: App Development -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink6.png" alt="App Development" class="img-fluid mb-3">
                        <h5>App Development</h5>
                        <p>We create innovative mobile applications that enhance operations, simplify processes, and
                            connect you with your users.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Service: Jobs & Internships -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Darasalink7.png" alt="Jobs & Internships" class="img-fluid mb-3">
                        <h5>Jobs & Internships</h5>
                        <p>We offer opportunities for skill development and professional growth, helping individuals and
                            businesses thrive together.</p>
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
                            <img src="./images/Darasalink8.png" alt="Expertise and Innovation" class="img-fluid"
                                style="max-height: 400px;">
                        </div>
                        <h4>Expertise and Innovation</h4>
                    </div>
                </div>
                <!-- Feature: Customer-Centric Approach -->
                <div class="col-md-6">
                    <div class="feature">
                        <div class="circle-frame">
                            <img src="./images/Darasalink9.png" alt="Customer-Centric Approach" class="img-fluid"
                                style="max-height: 400px;">
                        </div>
                        <h4>Customer-Centric Approach</h4>
                    </div>
                </div>
                <!-- Feature: Comprehensive Solutions -->
                <div class="col-md-6">
                    <div class="feature">
                        <div class="circle-frame">
                            <img src="./images/Darasalink10.png" alt="Comprehensive Solutions" class="img-fluid"
                                style="max-height: 400px;">
                        </div>
                        <h4>Comprehensive Solutions</h4>
                    </div>
                </div>
                <!-- Feature: Ongoing Support -->
                <div class="col-md-6">
                    <div class="feature">
                        <div class="circle-frame">
                            <img src="./images/Darasalink11.png" alt="Ongoing Support" class="img-fluid"
                                style="max-height: 400px;">
                        </div>
                        <h4>Ongoing Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>