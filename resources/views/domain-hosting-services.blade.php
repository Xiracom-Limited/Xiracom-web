@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain & Hosting Services in Kenya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>


    <style>
        card-margin {
    margin-bottom: 1.875rem;
}

.card {
    border: 0;
    box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ffffff;
    background-clip: border-box;
    border: 1px solid #e6e4e9;
    border-radius: 8px;
}

.card .card-header.no-border {
    border: 0;
}
.card .card-header {
    background: none;
    padding: 0 0.9375rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    min-height: 50px;
}
.card-header:first-child {
    border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
}

.widget-49 .widget-49-title-wrapper {
  display: flex;
  align-items: center;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-primary {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #edf1fc;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-day {
  color: #4e73e5;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-month {
  color: #4e73e5;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-secondary {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #fcfcfd;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-day {
  color: #dde1e9;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-month {
  color: #dde1e9;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-success {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #e8faf8;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-day {
  color: #17d1bd;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-month {
  color: #17d1bd;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-info {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #ebf7ff;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-day {
  color: #36afff;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-month {
  color: #36afff;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-warning {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: floralwhite;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-day {
  color: #FFC868;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-month {
  color: #FFC868;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-danger {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #feeeef;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-day {
  color: #F95062;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-month {
  color: #F95062;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-light {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #fefeff;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-day {
  color: #f7f9fa;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-month {
  color: #f7f9fa;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-dark {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #ebedee;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-day {
  color: #394856;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-month {
  color: #394856;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-base {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #f0fafb;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-day {
  color: #68CBD7;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-month {
  color: #68CBD7;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}

.widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
  display: flex;
  flex-direction: column;
  margin-left: 1rem;
}

.widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-pro-title {
  color: #3c4142;
  font-size: 14px;
}

.widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-meeting-time {
  color: #B1BAC5;
  font-size: 13px;
}

.widget-49 .widget-49-meeting-points {
  font-weight: 400;
  font-size: 13px;
  margin-top: .5rem;
}

.widget-49 .widget-49-meeting-points .widget-49-meeting-item {
  display: list-item;
  color: #727686;
}

.widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
  margin-left: .5rem;
}

.widget-49 .widget-49-meeting-action {
  text-align: right;
}

.widget-49 .widget-49-meeting-action a {
  text-transform: uppercase;
}
        @media screen and (max-width:600px) and (max-width:720px){
            .banner-image-section{

width:80%;
margin-left:15%;

        }
        .banner-text h1 {
            /* Discover Top-Notch Hosting and Domain Solutions */


            margin-top:20%;
            /* font-family: 'Poppins'; */
            font-style: normal;
            font-weight: 700;
            font-size: 30px !important;
            /* or 52px */
            display: flex;
            color:blue;
            align-items: center;
            text-align: center;
            letter-spacing: -0.04em;

         


        }
        .banner-text h1 {
            /* Discover Top-Notch Hosting and Domain Solutions */



            /* font-family: 'Poppins'; */
            font-style: normal;
            font-weight: 700;
            font-size: 30px !important;
            /* or 52px */
            display: flex;
            align-items: center;
            text-align: center;
    

            color: #000000;


        }
        .c-btn {
            background: #EDEDF5;
            box-sizing: border-box;

            /* Auto layout */
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 8px 12px !important;

            background: #399C23;
            border: 1.5px solid #102038;
            border-radius: 72.0899px;
            /* font-family: 'Poppins'; */
            font-style: normal;
            font-weight: 700;
            font-size: 10px !important;
            margin-left:35%;
            /* or 112% */
            display: flex;
            align-items: center;
            text-align: center;

            color: #FFFFFF;


        }
        .banner-paragraph-section{
            font-size:20px !important;
      

        }

        }
        .banner-image-section{

width:70%;


        }
        .banner-text h1 {
            /* Discover Top-Notch Hosting and Domain Solutions */



            /* font-family: 'Poppins'; */
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 109.1%;
            /* or 52px */
            display: flex;
            align-items: center;
            text-align: center;
            letter-spacing: -0.04em;

            color: #000000;


        }

        .banner-text p {
            /* We are the best in the business. Get started with us today */

            /* position: absolute;
width: 683px;
height: 68px;
left: 31px;
top: 397px; */

            /* font-family: 'Poppins'; */
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 109.1%;
            /* or 39px */
            display: flex;
            align-items: center;
            text-align: center;
            letter-spacing: -0.04em;

            color: #000000;


        }
        .banner-paragraph-section{
            font-size:30px;
      

        }
        .c-btn {
            background: #EDEDF5;
            box-sizing: border-box;

            /* Auto layout */
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px 16px;

            background: #399C23;
            border: 1.5px solid #102038;
            border-radius: 72.0899px;
            /* font-family: 'Poppins'; */
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 22px;
            margin-left:35%;
            /* or 112% */
            display: flex;
            align-items: center;
            text-align: center;

            color: #FFFFFF;


        }

        .c-card-cont {
            /* margin-left: 20px;
            margin-right: 20px; */
            width: 80%;
            align-items: center;
            justify-content: center !important;

        }


        .card {
            /* Rectangle 2003 */

            /* position: absolute;
width: 350px;
height: 413px;
left: 99px;
top: 852px; */
            width: 85%;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 30px;
            height: 313px;



            /* Rectangle 2006 */



            /* background: linear-gradient(180deg, #FFFFFF 12.5%, #7A87FB 100%); */




        }

        .c-card-b .card {
            background: linear-gradient(180deg, #FFFFFF 12.5%, #7A87FB 100%);
            border: none;
            width: 270px;

        }
        .c-card-b{
            
        }


        .c-bottom {
            width: 80%;
            /* text-align: center; */
            align-items: center !important;
            margin: auto;
            padding: 20px;
            height: 125px;
            /* background-color: #999999; */
            border-radius: 18px;

        }

        .c-bottom h2 {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .c-btm-button {
            /* padding: 10px; */
            /* width: 100px; */
            /* height: 40px; */
            margin: auto;
            font-size: 16px;
            background-color: #28a745;

            border: 1.5px solid #102038;
            border-radius: 72.0899px;

        }

        .c-btm-section {
            align-items: center;
            background: linear-gradient(180deg, #FFFFFF 12.5%, #D9D9D9 100%);


        }
    </style>
    <section class="bunner bg-light mt-5">
        <div class="container-fluid">

            <div class="row banner">
                <!-- Left Image -->


                <div class="col-md-6 d-flex align-items-center px-md-5">
                    <div class="banner-text">
                        <h1 class="fs-sm-5 ">Discover The Fastest Web Hosting in Africa</h1>
                        <p class="banner-paragraph-section">Get your business online with our Hosting & Domain Services
                        </p>

                       <a href="./login"><button class="c-btn">Get Started</button></a> 
                    </div>
                </div>
                <!-- Right Text -->
                <div class="col-md-6 p-0 d-flex align-items-center mt-5">
                    <img src="images/network-servers-isolated_98292-6502 1.png" class="banner-image-section"alt="Banner Image">
                </div>

            </div>
        </div>

        <div class="container-fluid mt-5  w-100 d-flex justify-content-center">
            <h3 class="fw-bolder">Register a New Domain With Us?</h3>
        </div>
        <!--cards start here-->
<div class="container">
<div class="row">
    <div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title" style="color:green;">BUY</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-primary">
                            <span class="widget-49-date-day">.co.ke</span>
                           
                        </div>
                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">XIRACOM LIMITED</span>
                            <span class="widget-49-meeting-time">Go Online with us</span>
                        </div>
                    </div>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>Ideal for businesses and organizations in Kenya.</span></li>
                        <li class="widget-49-meeting-item"><span>Fast Registration & Renewal</span></li>
                        <li class="widget-49-meeting-item"><span>DNS Management & Support </span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                    <a href="./register" class="btn btn-sm btn-flash-border-primary bg-primary" style="color:white;">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title" style="color:green;">BUY</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-warning">
                            <span class="widget-49-date-day" >.com</span>
                           
                        </div>
                        <div class="widget-49-meeting-info">
                        <span class="widget-49-pro-title">XIRACOM LIMITED</span>
                        <span class="widget-49-meeting-time">Go Online with us</span>
                        </div>
                    </div>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>Fast Registration & Renewal </span></li>
                        <li class="widget-49-meeting-item"><span>DNS Management & Support</span></li>
                        <li class="widget-49-meeting-item"><span>Secure & Reliable Hosting Options</span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                    <a href="./register" class="btn btn-sm btn-flash-border-primary bg-primary" style="color:white;">Get Started</a>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title" style="color:green;">BUY</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">.ac.ke</span>
                            
                        </div>
                        <div class="widget-49-meeting-info">
                        <span class="widget-49-pro-title">XIRACOM LIMITED</span>
                        <span class="widget-49-meeting-time">Go Online with us</span>
                        </div>
                    </div>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>Reserved for accredited educational institutions.</span></li>
                        <li class="widget-49-meeting-item"><span>DNS Management & Support </span></li>
                        <li class="widget-49-meeting-item"><span>Secure & Reliable Hosting Options </span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                    <a href="./register" class="btn btn-sm btn-flash-border-primary bg-primary" style="color:white;">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


        <div class="container-fluid mt-5  w-100 d-flex justify-content-center">
            <h3 class="fw-bolder">Web Hosting Plans</h3>
        </div>


        <div class="container-fluid mt-5 d-flex justify-content-center c-card-cont c-card-b">
            <div class="row row-cols-1 row-cols-md-3 g-2 ">
                <div class="col d-flex justify-content-center">
                    <div class="card mx-auto p-3">
                        <h5 class="card-title p-2 fw-bolder text-center">Regular</h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center">KES 288/Month</h6>
                        <div class="card-body">
                            <ul>
                                <li>30 GB storage</li>
                                <li>Free automated SSL</li>
                                <li>Unlimited bandwidth</li>
                                <li>unlimited Domain emails</li>
                                <li>cPanel control.</li>
                                <li> Free website builder.</li>
                                <li>Host 10 Websites</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card mx-auto p-3">
                        <!-- <h5 class="card-title p-2 fw-bolder">The Future of AI</h5> -->
                        <h5 class="card-title p-2 fw-bolder text-center">Starlight</h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center">KES 494/Month</h6>
                        <div class="card-body">
                            <ul>
                                <li>50GB SSD disk space</li>
                                <li>Host up to 30 domains</li>
                                <li>Unlimited bandwidth</li>
                                <li>unlimited Domain emails </li>
                                <li>Free domain (Ksh.899 value)</li>
                                <li>Host 30 Websites</li>
                            </ul>
                            
                        </div>

                        
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card mx-auto p-3">
                        <!-- <h5 class="card-title p-2 fw-bolder">The Future of AI</h5> -->
                        <h5 class="card-title p-2 fw-bolder text-center">Premium</h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center">KES 1220/Month</h6>
                        <div class="card-body">
                            <ul>
                                <li>400GB SSD Disk</li>
                                <li>Host up to 30 domains</li>
                                <li>Unlimited bandwidth</li>
                                <li>unlimited Domain emails </li>
                                <li>Free domain (Ksh.1200 value)</li>
                                <li>Host 30 Websites</li>
                            </ul>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 c-btm-section">

        <div class=" row container text-center c-bottom bg-light">
            <div class="row ">
                <h2 class="col-sm-10 fs-4 ">Get Started with Our Hosting Plan Today...</h2>
                <a href="./register" class="btn btn-primary btn-lg col-sm-2 c-btm-button">Get Started</a>

            </div>

        </div>
    </section>
</body>

</html>
@include("footer")