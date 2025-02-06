@include("nav-bar2")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiracom</title>  
    @vite(['resources/sass/app.scss','resources/js/app.js'])

    <link rel="stylesheet" href="style/welcome.css">

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        .banner {
            width: 100%;
            /*0,0,0,0.40*/
            height: 80vh;
            background-image: linear-gradient(to left, rgba(0, 100, 0, 0.2), rgba(0, 0, 30, 0.99));
            background-position: center;
            background-size: center;
        }

        /* .navbar{
    width: 90%;
    padding: 30px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 160px;
    margin-top: -10px;
    cursor: pointer;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 20px;
}
.navbar ul li a{
    text-decoration: none;
    text-transform: uppercase;
    color: white;
    font-weight: 600;
    padding: 15px;
} */
        li a:hover {
            background: white;
            transition: 0.6s;
        }

        /* .navbar a:hover{
    color: black;
} */
        .content {
            width: 100%;
            position: absolute;
            color: white;
            top: 45%;
            transform: translateY(-50%);
            text-align: center;
           margin-top:4%;
        }

        .content h1 {
            margin-top: 20px;
            font-size: 60px;
            font-weight: 800;
        }

        /* button {
            width: 200px;
            padding: 15px;
            margin: 20px 5px;
            text-align: center;
            border-radius: 25px;
            color: black;
            border: 2px;
            font-size: 20px;
            cursor: pointer;
            font-weight: 600;
        } */

        /* button:hover {
            background: rgb(0, 192, 226);
            transition: 0.5s;
        } */

        /* button:hover {
            color: white;
        } */

        .banner video {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;


            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scaleX(-1); /* Flip video */
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media(min-aspect-ratio: 16/9) {
            .banner video {
                width: 100%;
                height: auto;
            }
        }

        .flip {
            transform: scaleX(-1);
            /* Flip horizontally */
        }

        .content {
        text-align: left;  /* Align text to the left */
        max-width: 50%; 
        margin-left:3%; /* Prevents text from spreading too wide */
    }
@media screen and (max-width:600px) and (max-width:720px){
    .content {
        text-align: center;  /* Align text to the left */
        max-width: 100%;
        margin-left:0%; 
        height:30%;  /* Prevents text from spreading too wide */
    }

}
    .buttons {
        display: flex;
        gap: 10px;  /* Space between buttons */
    }

    #typing-text {
        display: inline;
        font-size: 3.5rem;
        font-weight: bold;
        white-space: nowrap;
        /* font-size: 70px;  Ensure font size remains 70px */
        font-weight: bold;
        line-height: 1.2; /* Adjust for spacing */
        white-space: pre-wrap;
    }

    .cursor {
        display: inline-block;
        font-size: 3.5rem;
        font-weight: bold;
        animation: blink 0.7s infinite;
    }

    @keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }

    .buttons {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        position: absolute;  /* Keep buttons fixed in position */
        top: 300px;  /* Adjust this value based on layout */
    }

    @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {  /* Medium screens */
            #typing-text, .cursor {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {  /* Small screens */
            #typing-text, .cursor {
                font-size: 2rem;
            }
            .buttons {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
    <!-- <header class="hero-section">
        <div class="content">
            <h1>Kenya's Trusted Partner in <br> Professional Tech Solutions</h1>
            <div class="buttons">
                <a href="#" class="btn btn-primary">Get Started</a>
                <a href="#" class="btn btn-secondary">Request Quote</a>
            </div>
        </div>
        <div class="image">
            <img src="images\Rectangle 1981.png" alt="Person with Laptop">
        </div>
    </header> -->
    <div class="banner">
        <video class="flip" autoplay loop muted plays-inline>
            <source src="images/hiro-video3.mp4" type="video/mp4">
        </video>

        <div class="content">
        <h1 id="typing-text"></h1>
        <span class="cursor">|</span> 
            <div class="buttons d-flex justify-content-center gap-3 mt-3">
                <a href="./register" class="btn btn-primary">Get Started</a>
                <a href="./Request-quote" class="btn btn-secondary">Request Quote</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const text = "Kenya's Trusted Partner in Professional Tech Solutions";
        const typingElement = document.getElementById("typing-text");
        const cursor = document.querySelector(".cursor");
        let index = 0;
        let typingSpeed = 50;
        let delayBeforeRestart = 4000; // 2 seconds before restart

        function typeEffect() {
            if (index < text.length) {
                if (text.charAt(index) === "\n") {
                    typingElement.innerHTML += "<br>";
                } else {
                    typingElement.innerHTML += text.charAt(index);
                }
                index++;
                setTimeout(typeEffect, typingSpeed);
            } else {
                setTimeout(resetTypingEffect, delayBeforeRestart);
            }
        }

        function resetTypingEffect() {
            typingElement.innerHTML = ""; // Clear text
            index = 0;
            setTimeout(typeEffect, typingSpeed);
        }

        typeEffect(); // Start the typing effect
    });

// document.addEventListener("DOMContentLoaded", function () {
//         const text = "Kenya's Trusted Partner in Professional Tech Solutions";
//         const typingElement = document.getElementById("typing-text");
//         let index = 0;

//         function typeEffect() {
//             if (index < text.length) {
//                 typingElement.innerHTML += text.charAt(index);
//                 index++;
//                 setTimeout(typeEffect, 50); // Adjust speed (lower = faster)
//             }
//         }

//         typeEffect(); // Start the typing effect
//     });
        // document.addEventListener("DOMContentLoaded", function () {
        //     const video = document.getElementById("heroVideo");
        //     video.playbackRate = 0.5; // Adjust this value for desired slow motion (0.5 means half-speed)
        // });
    </script>
    <!-- Tabs section  starts here-->

<div class="tabs">
  <button>UI/UX Design</button>
 
  <button>DarasaLink</button>
  
  <button>Exam Parlour</button>

  <button>Web Design</button>
</div>
   
    <section class="design-process">
        
        <div class="steps">
        <h3 class="step-content" style="color:blue;text-weight:bolder">
        What's Make Us Different?
         </h3>
            <div class="step">
            
                <div class="step-number">
                    <span>1</span>
                </div>

                <div class="step-content">

              
                   
                 
                    <h3> <img src="images/pie1.svg"  width="11%">Expertise and Innovation</h3>
                    <p>
               Our team of professionals brings years of experience across Software Engineering,
                         ensuring that we understand the challenges and opportunities you face.</p>
                    <a href="#" class="btn-link">See Examples</a>
                </div>
            </div>
            <div class="step">
                <div class="step-number">
                    <span>2</span>
                </div>
                <div class="step-content">
               
                    <h3> <img src="images/pie2.svg" width="11%">Customer-Centric Approach</h3>
                    <p>At Xiracom, you are at the heart of everything we do. We believe that the key to success lies in understanding your unique needs, goals, and challenges. </p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">
                    <span>3</span>
                </div>
                <div class="step-content">
               
                    <h3> <img src="images/pie3.svg" width="11%">Ongoing Support</h3>
                    <p>Our dedicated support team is always here to assist you, whether you need troubleshooting, updates, or guidance on how to maximize the value of our solutions.</p>
                </div>
            </div>
        </div>

        <div class="cards">
            
            <div class="cards-image1">
              
            </div>
           
               
            </div>
        </div>
    </section>
   
</section>

    <h5 class="Services-title">Our Services</h5>
    <div class="services-grid">
        <div class="service-card">
            <div class="icon">📡</div>
            <h3>Web Design</h3>
            <p>
                We create visually stunning and highly functional websites tailored to your brand's unique needs.
                Our custom web design solutions ensure a seamless user experience and a strong online presence.
            </p>
        </div>
        <div class="service-card">
            <div class="icon">🛠️</div>
            <h3>Website Maintenance</h3>
            <p>
                Our comprehensive website maintenance services ensure your site remains up-to-date, secure, and fully
                functional.
                Trust us to keep your website running smoothly and efficiently.
            </p>
        </div>
        <div class="service-card">
            <div class="icon">💻</div>
            <h3>Software Development</h3>
            <p>
                Transform your innovative ideas into reality with our bespoke software development services. We design
                and build custom software solutions to meet your specific business needs and drive growth.
            </p>
        </div>
        <div class="service-card">
            <div class="icon">📱</div>
            <h3>Mobile App Development</h3>
            <p>
                Engage your audience on-the-go with our cutting-edge mobile app development services. We create
                user-friendly,
                feature-rich mobile apps that enhance your brand's reach and customer interaction.
            </p>
        </div>
        <div class="service-card">
            <div class="icon">🔗</div>
            <h3>API Integration</h3>
            <p>
                Enhance your website’s functionality with our seamless API integration services. We connect your site
                with
                essential third-party services to streamline operations and improve user experience.
            </p>
        </div>
        <div class="service-card">
            <div class="icon">🛡️</div>
            <h3>Web Auditing</h3>
            <p>
                Enhance your website’s security and performance with our detailed web auditing services. We identify
                issues
                and provide actionable solutions to ensure your website is optimized and compliant.
            </p>
        </div>
    </div>
    </section>

    <div class="Testimonials">
        <h5 class="Clients">Our Clients</h5>
        <div class="profile-card-container">
            <div class="profile-card">
                <div class="profile-image">
                    <img src="images\Ellipse 4.png" alt="Jason Wandrag">
                </div>
                <h2 class="profile-name">Eyrie School</h2>
                <p class="profile-description">
                    Opening a Graphic Design Business can be a very good business opportunity if you have knowledge
                    about Graphic terms.
                    It can be a very secure path to earn good money and make you a very successful creative
                    entrepreneur.
                </p>
            </div>
            <div class="profile-card">
                <div class="profile-image">
                    <img src="images\Ellipse 5.png" alt="Jason Wandrag">
                </div>
                <h2 class="profile-name">EAVI Technical</h2>
                <p class="profile-description">
                    Opening a Graphic Design Business can be a very good business opportunity if you have Knowledge
                    about Graphic terms.
                    It can be a very secure path to earn good money and make you a very successful creative
                    entrepreneur.
                </p>
            </div>
            <div class="profile-card">
                <div class="profile-image">
                    <img src="public\images\Ellipse 6.png" alt="Jason Wandrag">
                </div>
                <h2 class="profile-name">Gaba Campus CUEA</h2>
                <p class="profile-description">
                    Opening a Graphic Design Business can be a very good business opportunity if you have Knowledge
                    about Graphic terms.
                    It can be a very secure path to earn good money and make you a very successful creative
                    entrepreneur.
                </p>
            </div>
            <div class="profile-card">
                <div class="profile-image">
                    <img src="images\Ellipse 6.png" alt="Jason Wandrag">
                </div>
                <h2 class="profile-name">Ascada School</h2>
                <p class="profile-description">
                    Opening a Graphic Design Business can be a very good business opportunity if you have knowledge
                    about Graphic terms.
                    It can be a very secure path to earn good money and make you a very successful creative
                    entrepreneur.
                </p>
            </div>
        </div>
    </div>


    <h5 class="idea">Have an idea about project?</h5>
    <div class="ideas">
        <button class="btn-request-quote">Request Quote</button>
        <button class="btn-hire-us">Hire us</button>
    </div>

    <!-- Footer starts here-->
 

    @include("footer")
</body>

</html>