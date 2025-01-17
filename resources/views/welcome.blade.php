<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiracom</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        
  .header-wrapper {
    align-self: center;
    display: flex;
    width: 100%;
    max-width: 1250px;
    align-items: center;
    gap: 80px 120px;
    margin: 15px 0 15px 100px;
  }
  
  .logo {
    aspect-ratio: 4.24;
    object-fit: contain;
    width: 220px;
    align-self: stretch;
  }
  
  .nav-container {
    display: flex;
    align-items: center; 
    justify-content: center; 
    min-width: 240px;
    gap: 40px 50px;
    flex-wrap: wrap;
    width: 905px;
    height: 100%; 
}

  
  .menu-wrapper {
    border-radius: 290px;
    align-self: stretch;
    display: flex;
    min-width: 240px;
    align-items: center;
    gap: 28px;
    overflow: hidden;
    width: 664px;
    padding: 6px;
   background: linear-gradient(90deg, #399C23 0%, #12087E 100%);
  }
  
  .home-link {
    border-radius: 40px;
    background-color: #fafafa;
    align-self: stretch;
    display: flex;
    align-items: center;
    gap: 6px;
    justify-content: center;
    padding: 8px 16px;


  }
  
  .home-icon {
    aspect-ratio: 1;
    object-fit: contain;
    width: 20px;
    align-self: stretch;
  }
  
  .nav-link {
    color: #fff;
    text-align: center;
    align-self: stretch;
    font: 400 16px Poppins, sans-serif;
    margin-top: 10px;
    text-decoration: none;
    gap: 70px;
    transition: color 0.3s ease;
  }

  .nav-link:hover {
    color: #00ff00;
}
  
  .auth-container {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 133px;
    font: 500 16px Poppins, sans-serif;
    margin: 0 0 0 20px;
  }
  
  .signup-wrapper {
    display: flex;
    align-items: start;
  }
  
  .get-started-btn {
    font-size: 1.1rem;
    border-radius: 40px;
    background-color: rgba(255, 255, 255, 0.8);
    width: 132px;
    padding: 14px 13px;
    cursor: pointer;
    background: linear-gradient(to right, #399c23, #200ee4);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; /* Gradient for the text or icon */
  }

        .hero {
            background: linear-gradient(90deg, #000048, #017A01);
            color: #fff;
            padding: 150px;
            text-align: left;
        }

        .hero h1 {
            margin: 0;
            font-size: 3rem;
        }

        .hero button {
            margin: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1rem;
        }

        .hero .btn-start {
            background-color: #017A01;
            color: #fff;
        }

        .hero .btn-quote {
            background-color: #fff;
            color: linear-gradient(to right, #399c23, #200ee4);
        }

        .tabs {
            display: flex;
            justify-content: center;
            gap: 250px;
            padding: 20px;
            background-color: #fff;
        }

        .tabs button {
            font-size: 1rem;
            background-color: transparent;
            border: 1px solid #399C23;
            color: #399C23;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            background-image: linear-gradient(to right, #399c23, #200ee4);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .process {
            text-align: center;
            padding: 30px 20px;
        }

        .process h2 {
            font-size: 2rem;
            background-image: linear-gradient(to right, #399c23, #200ee4);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .steps {
            display: flex;
            justify-content: left;
            gap: 50px;
            padding: 50px;
            flex-wrap: wrap;
        }

        .step {
            background-color: #fff;
            border: 2px solid #399C23;
            border-radius: 10px;
            padding: 20px;
            width: 600px;
            text-align: left;
            height: 600px;
            margin: 0 0 0 50px;
        }

        .step button {
            background-color: transparent;
            border: 1px solid #399C23;
            color: #200EE4;
            border-radius: 20px;
            padding: 10px 15px;
            cursor: pointer;
        }

        .step h3 {
            color: #200EE4;
            margin: 50px 0;
            font-size: 1.2rem;
        }

        .step p {
            font-size: 0.9rem;
            margin: 0 50px;
        }

        .case-study {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            margin: 0 10px 0 50px;
        }

        .case {
            background: linear-gradient(90deg, #200EE4, #017A01);
            color: #fff;
            border-radius: 10px;
            width: 400px;
            text-align: center;
            padding: 20px;
        }

        .case h4 {
            margin: 0;
            text-align: left;
        }

        .case p {
            margin: 0;
            text-align: left;
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin: 0 80px 0 80px;
        }

        .card {
            background: linear-gradient(90deg, #12087E, #399C23);
            color: #fff;
            border-radius: 10px;
            width: 350px;
            height: 200px;
            text-align: center;
            padding: 20px;
        }

        .card h4 {
            margin: 20px 0 10px 10px;
            text-align: left;
            font-size: 1.2rem;
        }

        .card p {
            margin: 0;
            text-align: left;
        }

        .Services {
            text-align: center;
            font-size: 2rem;
            background-image: linear-gradient(to right, #399c23, #200ee4);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-view-more {
            color: #fff;
            margin: 10px 0 10px 1240px;
            padding: 10px 20px;
            border: 2px solid #200EE4;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1rem;
            background: linear-gradient(to right, #399c23, #200ee4);
            justify-content: left;
            align-items: left;
        }

        .Testimonials {
            background: linear-gradient(90deg, #399C23, #12087E);
            color: #fff;
            padding: 100px;
            text-align: left;
        }

        .Clients {
            text-align: center;
            font-size: 2rem;
            color: #fff;
        }

        .client-card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            margin: 0 80px 0 80px;
        }

        .client-card {
            background: #4C4C9A;
            color: #fff;
            border-radius: 10px;
            width: 220px;
            height: 350px;
            text-align: center;
            padding: 20px;
        }

        .client-description {
            background: linear-gradient(to bottom, #399C23, #200EE4);
            color: #fff;
            border-radius: 20px;
            width: 220px;
            height: 250px;
            text-align: center;
            margin: 0 0 0 0;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
        }

        .client-description h4 {
            margin: 50px 0 10px 0;
            text-align: center;
            font-size: 1.2rem;
        }

        .client-description p {
            margin: 10px 10px;
            text-align: left;
            font-size: 0.9rem;
        }
        
        .client-card img {
            border-radius: 50%;
        }

        .idea {
            text-align: center;
            font-size: 2rem;
            background-image: linear-gradient(to right, #399c23, #200ee4);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ideas {
            display: flex;
            justify-content: center;
            gap: 50px;
            padding: 20px;
        }

        .ideas button {
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1rem;
            background: linear-gradient(to right, #399c23, #200ee4);
            justify-content: left;
            align-items: left;
        }

        
.footer {
    background-color: #0b213d; /* Dark blue background */
    color: #ffffff; /* White text */
    padding: 20px 40px;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.footer-section {
    flex: 1;
    min-width: 200px;
}

.flogo {
    max-width: 150px;
}

.social-links {
    list-style: none;
    padding: 0;
    margin: 10px 0;
}

.social-links li {
    margin: 5px 0;
}

.social-links a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-links a:hover {
    color: #00ff00; /* Green color on hover */
}

.footer-section h3 {
    color: #00ff00; /* Green headings */
    font-size: 1.2em;
    margin-bottom: 10px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-section ul li {
    margin: 5px 0;
}

.footer-section ul li a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    color: #00ff00;
}

.footer-bottom {
    margin-top: 20px;
    border-top: 1px solid #ffffff;
    padding-top: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    font-size: 0.9em;
}

.footer-bottom ul {
    list-style: none;
    display: flex;
    padding: 0;
    margin: 0;
    gap: 10px;
}

.footer-bottom ul li a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-bottom ul li a:hover {
    color: #00ff00;
}


        @media (max-width: 991px) {
    .hero {
      max-width: 100%;
    }
    .tabs {
      max-width: 100%;
    }
    .process {
      max-width: 100%;
    }
    .step {
      max-width: 100%;
    }
    .case { 
      max-width: 100%;
    }
    .card {
      max-width: 100%;
    }
  }
    </style>
</head>
<body>
    <!-- Navbar starts here-->
  <div class="header-wrapper">
    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a5016053130a5fc70271270a2305caafee1ce05308b14e2bf7842f252a184fec?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Company Logo" class="logo" />
    <nav class="nav-container">
      <div class="menu-wrapper">
        <a href="#" class="home-link">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d756e8c8126240957051134d6a08d14dc7246ef6a0fe66a1990f300025f683bd?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Home Icon" class="home-icon" />
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
    <div class="hero">
        <h1>Kenya's Trusted Partner in1<br> Professional Tech Solutions</h1>
        <button class="btn-start">Get Started</button>
        <button class="btn-quote">Request Quote</button>
    </div>

    <div class="tabs">
        <button>UI/UX Design</button>
        <button>DarasaLink</button>
        <button>Exam Parlour</button>
        <button>Web Design</button>
    </div>

    <div class="process">
      <h2>My process to design</h2>
        <div class="steps">
            <div class="step">
                <h3>Step 1: Product Design Research</h3>
                <p>This initial step involves a systematic and thorough exploration of the market landscape, user needs, and existing solutions.</p>
                <button>See Examples</button>
           <hr>
                <h3>Step 2: UI Design in Figma</h3>
                <p>This step involves designing and prototyping user interfaces to ensure the product is user-friendly and visually appealing.</p>
            <hr>
                <h3>Step 3: No-code Develop in Webflow</h3>
                <p>Develop a functional and visually stunning product using no-code tools like Webflow.</p>
            </div>
            <div class="case-study">
        <div class="case">
            <h4>Web Development</h4>
            <p>UX Case Study</p>
        </div>
        <div class="case">
            <h4>Software Development</h4>
            <p>UX Case Study</p>
        </div>
      </div>
     </div>
    </div>
    <h5 class="Services">Our Services</h5>
    <div class="card-container">
        <div class="card">
            <h4>Web Design</h4>
            <p>We create visually stunning and highly functional websites tailored to your brand’s unique needs.
               Our custom web design solutions ensure a seamless user experience and a strong online presence.
            </p>
        </div>
        <div class="card">
            <h4>Website Maintainance</h4>
            <p>Our comprehensive website maintenance services ensure your site remains up-to-date, secure, 
                and fully functional. Trust us to keep your website running smoothly and efficiently.
            </p>
        </div>
        <div class="card">
            <h4>Software Development</h4>
            <p>Transform your innovative ideas into reality with our bespoke software development services.
                 We design and build custom software solutions to meet your specific business needs and drive growth.
            </p>
        </div>
        <div class="card">
            <h4>Mobile App Development</h4>
            <p>Engage your audience on-the-go with our cutting-edge mobile app development services. We create user-friendly,
                 feature-rich mobile apps that enhance your brand’s reach and customer interaction.
            </p>
        </div><div class="card">
            <h4>API Intergration</h4>
            <p>Enhance your website’s functionality with our seamless API integration services.
                 We connect your site with essential third-party services to streamline operations and improve user experience.
                </p>
        </div>
        <div class="card">
            <h4>Web Auditing</h4>
            <p>Enhance your website’s functionality with our seamless API integration services. We connect your site with essential
                 third-party services to streamline operations and improve user experience.
                </p>
        </div>
      </div>
      <button class="btn-view-more">View more</button>
      <div class="Testimonials">
      <h5 class="Clients">Clients Testimonials</h5>
      <div class="client-card-container">
        <div class="client-card">
        <img src="https://via.placeholder.com/150x150" alt="Avatar">
            <div class="client-description">
            <h4>Jason Wandrag</h4>
            <p>
            Opening a Graphic Design Business can be a very good business opportunity if you have Knowledge about Graphic terms. It can be a very secure path to earn good money and make you a very successful creative entrepreneur.
            </p>
            </div>
        </div>
        <div class="client-card">
        <img src="https://via.placeholder.com/150x150" alt="Avatar">
        <div class="client-description">
             <h4>Maria Ava</h4>
            <p>
            Opening a Graphic Design Business can be a very good business opportunity if you have Knowledge about Graphic terms. It can be a very secure path to earn good money and make you a very successful creative entrepreneur.   
            </p>
            </div>
        </div>
        <div class="client-card">
        <img src="https://via.placeholder.com/150x150" alt="Avatar">
        <div class="client-description">
        <h4>Smith Jon</h4>
            <p>
            Opening a Graphic Design Business can be a very good business opportunity if you have Knowledge about Graphic terms. It can be a very secure path to earn good money and make you a very successful creative entrepreneur.   
            </p>
            </div>
        </div>
        <div class="client-card">
        <img src="https://via.placeholder.com/150x150" alt="Avatar">
        <div class="client-description">
        <h4>Mary Ndegwa</h4>
            <p>
            Opening a Graphic Design Business can be a very good business opportunity if you have Knowledge about Graphic terms. It can be a very secure path to earn good money and make you a very successful creative entrepreneur. 
            </p>
            </div>
        </div>
      </div>
    </div>
      <h5 class="idea">Have an idea about project?</h5>
    <div class="ideas">
      <button class="btn-request-quote">Request Quote</button>
      <button class="btn-hire-us">Hire us</button>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section logo-social">
                <img src="logo.png" alt="Xiracom Logo" class="flogo">
                <ul class="social-links">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Tiktok</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </div>
            <div class="footer-section services">
                <h3>Our services</h3>
                <ul>
                    <li>UI design</li>
                    <li>UX design</li>
                    <li>Bulk SMS</li>
                    <li>Graphic designing</li>
                    <li>Web development</li>
                    <li>App development</li>
                    <li>Jobs and internship</li>
                </ul>
            </div>
            <div class="footer-section explore">
                <h3>Explore</h3>
                <ul>
                    <li>Design</li>
                    <li>Prototyping</li>
                    <li>Development features</li>
                    <li>Design systems</li>
                    <li>Collaboration features</li>
                    <li>Design process</li>
                    <li>Cybersecurity</li>
                </ul>
            </div>
            <div class="footer-section address">
                <h3>Address</h3>
                <p>Eldoret, Kenya</p>
                <p>+254704907565</p>
                <p><a href="mailto:info@xiracom.co.ke">info@xiracom.co.ke</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright ©2025 Xiracom. All Rights Reserved</p>
            <ul>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Policy</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
