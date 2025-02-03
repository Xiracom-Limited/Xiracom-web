<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XiRacem - Cyber Security</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #343a40 !important;
        }

        header {
            background-color: #28a745;
            padding: 60px 0;
        }

        header h1 {
            font-size: 3rem;
        }

        header p {
            font-size: 1.5rem;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* background: linear-gradient(180deg, #FFFFFF 0%, #7A87FB 100%); */
            background: linear-gradient(180deg, #FFFFFF 30%, #28a745 100%);


        }
        .c-card {
            /* background: linear-gradient(180deg, #FFFFFF 0%, #28a745 100%); */
            background: linear-gradient(180deg, #FFFFFF 0%, #7A87FB 100%);
        }
        

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #28a745;
            border: none;
            border-radius: 18px;
        }

        .card .btn-primary{
           

box-sizing: border-box;

/* Auto layout */
display: flex;
flex-direction: row;
/* justify-content: center;
align-items: center; */
padding: 10px 28px;
float: right;

/* position: absolute;
width: 219.71px;
height: 45px;
left: 227px;
top: 2339px; */

background: linear-gradient(90deg, #399C23 0%, #14360C 100%);
border: 1.5px solid #102038;
border-radius: 72.0899px;

        }

        .btn-primary:hover {
            background-color: #218838;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        footer {
            background-color: #343a40;
        }

        footer h5 {
            font-size: 1.25rem;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .middle-card {
            margin-top: 50px;
            
        }

        /* .hero-section {
            background-image: url('images/network-3484139_1280.png');
            
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 400px;
            
            display: flex;
            align-items: center;

        } */

        .hero-title {
            font-size: 3.5rem;
            
            font-weight: 700;
            
            font-family: 'Montserrat', sans-serif;
            
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.5rem;
         
            font-family: 'Montserrat', sans-serif;
          
            font-weight: 400;
          
        }

        .c-bottom {
            width: 80%;
            /* text-align: center; */
            align-items: center !important;
            margin: auto;
            padding: 20px;
            height: 125px;
            background-color: #D3D3D3 ;
            border-radius: 18px;
            
        }
        .c-bottom h2{
            font-size: 1.8rem;
            font-weight: bold;
        }

        .c-btm-button {
            /* padding: 10px; */
            /* width: 100px; */
            /* height: 40px; */
            margin: auto;
            font-size: 16px;
            border: 1.5px solid #102038;
border-radius: 72.0899px;

        }

        .c-btm-section {
            align-items: center;
            background: linear-gradient(180deg, #FFFFFF 30%, #999999 100%);
            
        }

        .c-img{
            width: 100%;
        }

        @media (max-width: 767px) {
  .cta-section {
    flex-direction: column; /* Stack elements vertically */
    text-align: center; /* Center-align text */
  }

  .cta-section button {
    margin-left: 0; /* Remove left margin */
    margin-top: 20px; /* Add top margin for spacing */
  }

  .c-bottom{
    height: auto;
  }
}



/* Hero Section */
.hero-section {
  height: 400px; /* Adjust height as needed */
  display: flex;
  align-items: center; /* Vertically center content */
}

/* Background Image */
.hero-background {
  background-image: url('images/network-3484139_1280.png'); /* Replace with your image URL */
  background-size: cover; /* Ensures the image covers the entire area */
  background-position: center; /* Centers the image */
  z-index: 1; /* Places the image behind the overlay and text */
}

/* Dark Overlay */
.overlay {
  background: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
  z-index: 2; /* Places the overlay above the image but below the text */
}

/* Content */
.container {
  z-index: 3; /* Ensures the text is above the overlay and image */
}

/* Optional: Adjust text styles */
.hero-title {
  font-size: 3rem; /* Adjust font size as needed */
  font-weight: bold; /* Optional: Makes the text bold */
}

.hero-subtitle {
  font-size: 1.5rem; /* Adjust font size as needed */
}
    </style>

<section class="hero-section text-white position-relative overflow-hidden py-5">
  <!-- Background Image -->
  <div class="hero-background position-absolute w-100 h-100">

  </div>
  
  <!-- Dark Overlay -->
  <div class="overlay position-absolute w-100 h-100"></div>
  
  <!-- Content -->
  <div class="container position-relative">
    <div class="row">
      <div class="col-md-6">
        <h1 class="hero-title display-4 display-md-3">Cyber Security</h1>
<p class="hero-subtitle fs-4 fs-md-3">Fortifying Your Digital Defenses</p>
      </div>
    </div>
  </div>
</section>
    <section class="container my-5">
        <h2 class="text-center mb-4 fw-bolder">Our Security Packages</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                <img src="images/binary-3441010_1280.png" alt="" class="card-img-top c-img">

                    <div class="card-body mt-5">
                        <h5 class="card-title">Data Encryption</h5>
                        <p class="card-text">Encryption secures sensitive data by encoding it.</p>
                        <hr>
                        <a href="#" class="btn btn-primary">Learn more >> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card middle-card c-card">
                <img src="images/pexels-pixabay-60504.png" alt="" class="card-img-top ">

                    <div class="card-body mt-5">
                        <h5 class="card-title">End-Point Security</h5>
                        <p class="card-text">Protect device from malicious software.</p>
                        <hr>
                        <a href="#" class="btn btn-primary">Learn more >> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                <img src="images/growtika-ahgsuFHlIFo-unsplash.png" alt="" class="card-img-top ">

                    <div class="card-body mt-5">
                        <h5 class="card-title">Network Security</h5>
                        <p class="card-text">Controls receiving and outgoing traffic to protect networks.</p>
                        <hr>
                        <a href="#" class="btn btn-primary">Learn more >> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card c-card">
                <img src="images/growtika-ahgsuFHlIFo-unsplash.png" alt="" class="card-img-top ">

                    <div class="card-body mt-5">
                        <h5 class="card-title">Cloud Security</h5>
                        <p class="card-text">Cloud Encryption: Protects data stored in the cloud from breaches.</p>
                        <hr>
                        <a href="#" class="btn btn-primary">Learn more >> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card middle-card ">
                <img src="images/pexels-photo-577585.png" alt="" class="card-img-top ">

                    <div class="card-body mt-5">
                        <h5 class="card-title">Data Backup</h5>
                        <p class="card-text">Advanced Backups: Ensures regular backups of critical data.</p>
                        <hr>
                        <a href="#" class="btn btn-primary">Learn more >> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card c-card">
                <img src="images/cloud-3998880_1280.png" alt="" class="card-img-top ">

                    <div class="card-body mt-5">
                        <h5 class="card-title">Data Protection</h5>
                        <p class="card-text">Data Anonymization: Protects personal data by removing identifiable
                            information.</p>
                            <hr>
                        <a href="#" class="btn btn-primary">Learn more >> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 c-btm-section">

        <div class=" row container text-center c-bottom">
            <div class="row ">
                <h2 class="col-sm-10 fs-4 ">Get a Cyber Security Assessment today...</h2>
                <a href="#" class="btn btn-primary btn-lg col-sm-2 c-btm-button">Get Started</a>

            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>