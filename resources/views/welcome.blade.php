@include("nav-bar")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiracom Limited - Nairobi Kenya</title>
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

        li a:hover {
            background: white;
            transition: 0.6s;
        }

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

        .banner video {
            position: absolute;
            z-index: -1;


            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scaleX(-1); /* Flip video */
            width: 100%;
            height: 100%;
            object-fit: cover;
       
        }
        .center-button{

            margin-left:35%;
            margin-top:-10% !important;

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
        text-align: center;  /* Align text to the left */
        max-width: 60%; 
        margin-left:20%; /* Prevents text from spreading too wide */
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
        .buttons-heroes-section2{

     position:inherit;
     margin-top:-10%;
     
     padding-bottom:3%;


        }
        .button-section{
            margin-left:27%;
       margin-right:5%;
        }
    </style>
    <div class="banner" style="height:680px">
        <video class="flip" autoplay loop muted plays-inline>
            <source src="images/xiravide.mp4" type="video/mp4">
        </video>

        <div class="content">
        <h1 id="typing-text"></h1>
        <span class="cursor">|</span> 
            <div class="buttons center-button" >
                <a href="./register" class="btn btn-primary">Get Started</a>
                <a href="./request-quote" class="btn btn-secondary">Request Quote</a>
                
        
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

    <div class="buttons-heroes-section2">
       <div class="button-section">
        <button class="heroes-buttion-section">
         Examparlour
        </button>
        <button class="heroes-buttion-section">
         DarasaLink
        </button>
        <button class="heroes-buttion-section">
         UI/UX Design
        </button>
        <button class="heroes-buttion-section">
         Web Design
        </button>
        <button class="heroes-buttion-section">
         Bulk SMS 
        </button>
    </div>
   </div>

    <section class="design-process">
        <div class="steps">
        <center>
        <h3 class="step-content" style="color:blue;text-weight:bolder">
        What Make's Us Different?
         </h3>
        </center>
            <div class="step">
            
                <div class="step-number">
                    <span>1</span>
                </div>

                <div class="step-content">

              
                   
                 
                    <h3> <img src="images/pie1.svg"  width="10%">Expertise and Innovation</h3>
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
               
                    <h3> <img src="images/pie2.svg" width="10%">Customer-Centric Approach</h3>
                    <p>At Xiracom, you are at the heart of everything we do. We believe that the key to success lies in understanding your unique needs, goals, and challenges. </p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">
                    <span>3</span>
                </div>
                <div class="step-content">
               
                    <h3> <img src="images/pie3.svg" width="10%">Ongoing Support</h3>
                    <p>Our dedicated support team is always here to assist you, whether you need troubleshooting, updates, or guidance on how to maximize the value of our solutions.</p>
                </div>
            </div>
        </div>

        <div class="cards">
            
            <div >
               
                <img src="images/young-black-man.jpg"class="border-image" width="100%" height="100%">
                
            </div>
            <div>
          
            <img src="images/colleagues-working.jpg"  class="border-image" width="100%" height="100%">
          
              </div>
            
            </div>
        </div>
    </section>
   
</section>

    <h5 class="Services-title">Our Services <img src="images/star.svg"></h5>
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
     
    <h5 class="Services-title mt-5">Our Clients <img src="images/star.svg"></h5>
    <div class="pic-ctn">
    <img src="images/eavi.png" alt="" class="pic">
    <img src="images/examparlour.png" alt="" class="pic">
    <img src="images/CUEA.jpeg" alt="" class="pic">
    <img src="images/ascada.png" alt="" class="pic">
    <img src="images/examparlour.png" alt="" class="pic">
  </div>


<section class="cta-section-bottom w-sm-100" id="last">
    <div>
      <h2 class="fs-sm-2">Have an idea about a project? Let’s Get Started.</h2>
      <p>Here is a quick way to begin</p>
    </div>
    <div>
    <button class="cta-bottom">Request quote</button>
    <button class="cta-bottom">Hire us</button>
    </div>
  </section>
 
    @include("footer")

</body>

</html>





