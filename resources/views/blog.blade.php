@include("nav-bar2")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Banner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .banner {
            min-height: 400px;
            /* Ensures a proper height */
            display: flex;
            align-items: stretch;
            background: linear-gradient(90deg, #399C23 0.17%, #283593 99.99%);
            overflow: hidden;
            padding: 20px;
            /* height: 600px; */
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* max-height: 400px; Prevents it from becoming too large */
        }

        .c-search-button {
            background-color: #399C23;
            color: white;
        }

        .banner-text {
            padding: 30px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .banner {
                flex-direction: column;
                min-height: auto;
            }

            .banner img {
                /* height: 250px; Prevents excessive stretching */
                width: 100%;
            }
        }

        .custom-bg {
            background-color: #ececec;
            ;
        }

        .blogs {
            border: 1px solid #ddd;
            /* Thin border */
            border-radius: 10px;
            /* Rounded corners */
            /* padding: 20px; */
            margin-top: 20px;
            padding-bottom:20px;
        }

        .card {
            /* work-list-mobile */

            background: linear-gradient(180deg, #FFFFFF 0%, #7A87FB 100%);

        }

        .c-btn-a {
            /* Group 2 */

            /*  */
            font-size: 15px;
            background: linear-gradient(180deg, #008000 0%, #0C102D 100%);
            border-radius: 16px;
            font-weight: bold;

        }
        .c-btn-b {
            /* Group 2 */

            /*  */
            font-size: 15px;
            background-color: #399C23 !important;
            /* background: linear-gradient(180deg, #008000 0%, #0C102D 100%); */
            border-radius: 16px;
            font-weight: bold;

        }
    </style>
</head>

<body>

    <div class="container-fluid">

    

    <section class="p-5">
        <div class="container-fluid bg-light p-5">
            <form class="form-inline d-flex">
                <input class="form-control mr-sm-2 me-2 custom-bg" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 c-search-button" type="submit">Search</button>
        </div>
        </form>

        <div class="container-fluid blogs">
            <h4> Blogs</h4>
            <div class="row row-cols-1 row-cols-md-3 g-5">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-pixabay-373543.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">The Future of AI</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">Primary link</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">Link</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-ivan-samkov-4989167.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">Tech in Healthcare</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">Tech</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">Read More</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">How technology is revolutionizing healthcare delivery and patient care.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-cottonbro-5052875.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">The Rise of Remote Work</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">Work</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">Read More</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">Discussing how technology has reshaped the structure of the work place.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-i-brahim-can-dayioglu-59599605-25003455.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">Sustainable Tech</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">Tech</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">Read More</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">Discussing how innovations in technology has contributed to environmental sustainability.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-divinetechygirl-1181671.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">Women in Tech</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">Tech</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">Read More</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">Celebrate the achievements of women in the technology sector and discuss challenges they face.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-obi-onyeador-1787470-13029652.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">Impact of 5G Technology</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">5G</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">Read More</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">Explore the potential changes 5G will bring to connectivity and everyday life.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="container-fluid blogs">
            <h4> Trending</h4>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-markusspiske-1089438.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">Cyber security Innovations</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">Cs</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">All</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">New AI-driven security tools and bio-metric authentication are improving data protection.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-z-z-2157359-6200343.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">5G Technology</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">5G</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">All</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">Faster speeds and lower latency are revolutionizing mobile connectivity and enabling smarter IoT devices.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-divinetechygirl-1181671.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">AI &Machine Learning</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">AI</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">All</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">AI is enhancing automation, decision-making, and user experiences across industries.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                
                <!-- Card 5 -->
               

                <!-- Card 6 -->
                
            </div>
        </div>



        <div class="container-fluid blogs">
            <h4> News</h4>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/cyber-security-3374252_1280.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">Cyber security Concerns Rise</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">Cs</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">Read More</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">A recent data breach has raised alarms about the vulnerabilities in popular software, leading to calls for stronger cybersecurity measures.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-merlin-14314636.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">AI Models Get Smarter</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">AI</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">Read More</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">AMajor tech companies are releasing even more advanced AI models, improving everything from healthcare diagnostics to customer service automation.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="images/pexels-fotios-photos-16368540.png" alt="Card image">
                        <h5 class="card-title p-2 fw-bolder">Google’s AI-Powered Search</h5>
                        <div class="d-flex gap-2 justify-content-start px-2">
                            <a href="#" class="btn btn-primary btn-sm active rounded-pill c-btn-a" role="button"
                                aria-pressed="true">AI</a>
                            <a href="#" class="btn btn-secondary btn-sm active rounded-pill c-btn-b" role="button"
                                aria-pressed="true">Read More</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text">Google is integrating AI deeper into its search engine, providing smarter results and better user interaction through natural language processing.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@include("footer")