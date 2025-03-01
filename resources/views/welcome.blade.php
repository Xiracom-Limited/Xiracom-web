@include("nav-bar")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiracom Limited - Nairobi Kenya</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])

    <link rel="stylesheet" href="style/welcome.css">
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
    <body>
    <div class="video-banner">
        <video autoplay loop muted playsinline>
            <source src="images/xiravide.mp4" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
        <div class="content">
            <br><br><br><br><br><br>
            
            <!-- Cards Container -->
            <div class="card1-container">
                <div class="card1">
                    <a href="#services">Our Services</a>
                </div>
                <div class="card1">
                    <a href="#portfolio">Portfolio</a>
                </div>
                <div class="card1">
                    <a href="#about">About Us</a>
                </div>
                <div class="card1">
                    <a href="#contact">Contact Us</a>
                </div>
              
            </div>

        </div>
    </div>
    </div>

        <div class="content">
        <h1 id="typing-text"></h1>
        <span class="cursor">|</span> 
            <div class="buttons center-button" >
            <div class="button-container">
    <a href="./register" class="btn btn-primary">Get Started</a>
    <a href="./request-quote" class="btn btn-secondary">Request Quote</a>
</div>

              <br>
            
                
        
          </div>
   
  
        </div>
    
     
    </div>
    
</section>

<!-- Service 5 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-center">
      <div class="col-12 col-lg-5">
        <div class="row">
          <div class="col-12 col-xl-11">
            <h3 class="fs-6 text-secondary mb-3 mb-xl-4 text-uppercase" style="color:blue !important;">What We Do?</h3>
            <h2 class="display-5 mb-3 mb-xl-4 " style="color:#399C23">Empowering Businesses with Cutting-Edge Tech Solutions.</h2>
            <p class="mb-3 mb-xl-4">Xiracom Limited empowers businesses with top-tier solutions in Software Engineering, Computer Hardware Installation & Engineering, Data Science & Cybersecurity. We also offer expert-led boot camps and training in collaboration with The Catholic University of Eastern Africa, Darasalink, and Examparlour. Our mission is to drive innovation, efficiency, and growth—because your success is our priority.</p>
            <a href="files/portfolio.pdf" class="btn bsb-btn-2xl btn-primary rounded-pill" download>Download Portfolio</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-7 overflow-hidden">
        <div class="row gy-4">
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-textarea-resize text-primary mb-4" viewBox="0 0 16 16">
                  <path d="M0 4.5A2.5 2.5 0 0 1 2.5 2h11A2.5 2.5 0 0 1 16 4.5v7a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 0 11.5v-7zM2.5 3A1.5 1.5 0 0 0 1 4.5v7A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 13.5 3h-11zm10.854 4.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708l3-3a.5.5 0 0 1 .708 0zm0 2.5a.5.5 0 0 1 0 .708l-.5.5a.5.5 0 0 1-.708-.708l.5-.5a.5.5 0 0 1 .708 0z" />
                </svg>
                <h4 class="mb-4">Software Engineering</h4>
                <p class="mb-4 text-secondary">We can help you to understand your target market and identify new opportunities for growth. We offer a variety of research services.</p>
                <a href="#!" class="fw-bold text-decoration-none link-success">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-tablet text-primary mb-4" viewBox="0 0 16 16">
                  <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>
                <h4 class="mb-4">Computer Engineering</h4>
                <p class="mb-4 text-secondary">We can help you to create a visually appealing and user-friendly website.<p>
                <a href="#!" class="fw-bold text-decoration-none link-success">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-repeat text-primary mb-4" viewBox="0 0 16 16">
                  <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                </svg>
                <h4 class="mb-4">Boot Camps & Training</h4>
                <p class="mb-4 text-secondary">We provide our clients with daily updates on their business performance. This includes data on website traffic and sales.</p>
                <a href="#!" class="fw-bold text-decoration-none link-success">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          
          <div class="col-12 col-sm-6">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-shield-check text-primary mb-4" viewBox="0 0 16 16">
                  <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                  <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                </svg>
                <h4 class="mb-4">Cybersecurity</h4>
                <p class="mb-4 text-secondary">We offer free support to all of our clients. This means that you can always get help when you need it, no matter what time it is.</p>
                <a href="#!" class="fw-bold text-decoration-none link-success">
                  Learn More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!--video carousel starts here-->
<!-- Carousel wrapper -->
<div id="carouselVideoExample" data-mdb-carousel-init class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button  type="button" data-mdb-button-init data-mdb-target="#carouselVideoExample" data-mdb-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button  type="button" data-mdb-button-init data-mdb-target="#carouselVideoExample" data-mdb-slide-to="1"
      aria-label="Slide 2"></button>
    <button  type="button" data-mdb-button-init data-mdb-target="#carouselVideoExample" data-mdb-slide-to="2"
      aria-label="Slide 3"></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <video class="img-fluid" autoplay loop muted>
        <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>
          Nulla vitae elit libero, a pharetra augue mollis interdum.
        </p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <video class="img-fluid" autoplay loop muted>
        <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <video class="img-fluid" autoplay loop muted>
        <source src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>
          Praesent commodo cursus magna, vel scelerisque nisl consectetur.
        </p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button data-mdb-button-init class="carousel-control-prev" type="button" data-mdb-target="#carouselVideoExample"
    data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button data-mdb-button-init class="carousel-control-next" type="button" data-mdb-target="#carouselVideoExample"
    data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->

 <!--video carousel ends here-->
<!--why choose us section starts here-->

<div class="container mt-5 mb-5">
    <div class="text-center mb-2-8 mb-lg-6">
        <h2 class="display-18 display-md-16 display-lg-14 font-weight-700">Why choose <strong class="text-primary font-weight-700">Us</strong></h2>
        <span>The trusted source for why choose us</span>
    </div>
    <div class="row align-items-center">
        <div class="col-sm-6 col-lg-4 mb-2-9 mb-sm-0">
            <div class="pr-md-3">
                <div class="text-center text-sm-right mb-2-9">
                    <div class="mb-4">
                        <img src="https://www.bootdey.com/image/80x80/FFB6C1/000000" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">Residential Cleaning</h4>
                    <p class="display-30 mb-0">Roin gravida nibh vel velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                </div>
                <div class="text-center text-sm-right">
                    <div class="mb-4">
                        <img src="https://www.bootdey.com/image/80x80/87CEFA/000000" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">Commercial Cleaning</h4>
                    <p class="display-30 mb-0">Gravida roin nibh vel velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
            <div class="why-choose-center-image">
                <img src="https://www.bootdey.com/image/350x350/FF7F50/000000" alt="..." class="rounded-circle">
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="pl-md-3">
                <div class="text-center text-sm-left mb-2-9">
                    <div class="mb-4">
                        <img src="https://www.bootdey.com/image/80x80/8A2BE2/000000" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">Washing services</h4>
                    <p class="display-30 mb-0">Nibh roin gravida vel velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                </div>

                <div class="text-center text-sm-left">
                    <div class="mb-4">
                        <img src="https://www.bootdey.com/image/80x80/20B2AA/000000" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">Carpet cleaning</h4>
                    <p class="display-30 mb-0">Vel proin gravida nibh velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--why chooser us section ends here-->


<!-- our process of service -->


<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Experience Excellence</h2>
        <p class="text-secondary mb-5 text-center lead fs-4">We stand out as the epitome of customer-centricity, offering the best benefits like free shipping and 24/7 support.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="container-fluid">
          <div class="row gy-3 gy-md-4">
            <div class="col-12 col-lg-4">
              <div class="card border-dark">
                <div class="card-body p-3 p-md-4 p-xxl-5 d-flex justify-content-center align-items-center">
                  <div class="me-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                      <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-1">Free Shipping</h4>
                    <p class="m-0 text-secondary">Eliminates shipping costs</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card border-dark">
                <div class="card-body p-3 p-md-4 p-xxl-5 d-flex justify-content-center align-items-center">
                  <div class="me-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-chat-left-heart-fill" viewBox="0 0 16 16">
                      <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-1">24/7 Support</h4>
                    <p class="m-0 text-secondary">Better shopping experience</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card border-dark">
                <div class="card-body p-3 p-md-4 p-xxl-5 d-flex justify-content-center align-items-center">
                  <div class="me-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-folder-symlink-fill" viewBox="0 0 16 16">
                      <path d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a2 2 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3M2.19 3q-.362.002-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-1">Free Returns</h4>
                    <p class="m-0 text-secondary">Customer's peace of mind</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- our process of service ends here -->
  <!--card starts here-->
  <h2 class="section-title">Our Brands</h2>

<div class="carousel-container">
    <div class="carousel-wrapper">
        <!-- Duplicate cards to create seamless looping effect -->
        <div class="client-card"><img src="clients/client1.png" alt="Client 1"></div>
        <div class="client-card"><img src="clients/client2.png" alt="Client 2"></div>
        <div class="client-card"><img src="clients/client3.png" alt="Client 3"></div>
        <div class="client-card"><img src="clients/client4.png" alt="Client 4"></div>
        <div class="client-card"><img src="clients/client5.png" alt="Client 5"></div>
        <div class="client-card"><img src="clients/client1.png" alt="Client 1"></div>
        <div class="client-card"><img src="clients/client2.png" alt="Client 2"></div>
        <div class="client-card"><img src="clients/client3.png" alt="Client 3"></div>
        <div class="client-card"><img src="clients/client4.png" alt="Client 4"></div>
        <div class="client-card"><img src="clients/client5.png" alt="Client 5"></div>
    </div>
</div>

  <!--cards ends here-->
  <!--our Brand starts here-->
  <div class="hero mt-5" style="text-align:center;">
        <h1>Trusted by over 26+ clients.</h1>
    </div>

<!-- Client 2 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <p class="fs-5 text-secondary mb-5 text-center">Our clients are our top priority, and we are committed to providing them with the highest level of service.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row gy-4">
      <div class="col-6 col-md-4 col-xl-3 text-center">
        <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
         <img src="images/ascada.png" width="70%" alt="Exam Parlour">
        </div>
      </div>
      <div class="col-6 col-md-4 col-xl-3 text-center">
        <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
        <img src="images/CUEA.png" width="55%" alt="Exam Parlour">
        </div>
      </div>
      <div class="col-6 col-md-4 col-xl-3 text-center">
        <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
        <img src="images/eavi.png" width="80%" alt="Exam Parlour">
        </div>
      </div>
      <div class="col-6 col-md-4 col-xl-3 text-center">
        <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
        <img src="images/examparlour.png" width="100%" alt="Exam Parlour">
        </div>
      </div>
      <div class="col-6 col-md-4 col-xl-3 text-center">
        <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
        <img src="images/darasalink.svg" width="70%" alt="Exam Parlour">
        </div>
      </div>
      <div class="col-6 col-md-4 col-xl-3 text-center">
        <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
        <img src="images/eyrie.png" width="80%" alt="Exam Parlour">
        </div>
      </div>
      <div class="col-6 col-md-4 col-xl-3 text-center">
        <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
        <img src="images/bulksms.svg" width="70%" alt="Exam Parlour">
        </div>
      </div>
      <div class="col-6 col-md-4 col-xl-3 text-center">
        <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
        <img src="images/acute.png" width="50%" alt="Exam Parlour">
        </div>
      </div>
 
    </div>
  </div>
</section>

  <!-- Our Brand ends here-->
   <!-- contact us starts here-->
    <!--Section: Contact v.2-->
<section class="mb-4 ml-5 mr-5">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                    </div>

                </div>
            </div>
            <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
            <a data-mdb-ripple-init class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Daima Towers,Eldoret, Kenya</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+254704907555</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>info@xiracom.co.ke</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
<!--button to scroll up starts here-->


    <!-- Back to Top Button -->
    <button class="back-to-top" onclick="scrollToTop()">↑ Top</button>

    <script>
        // Select button
        const backToTopButton = document.querySelector(".back-to-top");

        // Show button when user scrolls down
        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.add("show");
            } else {
                backToTopButton.classList.remove("show");
            }
        });

        // Smooth scroll to top function
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>
<!--button to scroll up ends here-->
<!--Section: Contact v.2-->
    <!--contact us ends here-->

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

    </script>

</body>

</html>
@include("footer")




