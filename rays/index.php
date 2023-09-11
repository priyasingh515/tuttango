<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="/media/examples/link-element-example.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body>

    <header class="header_m">
        <ul>
            <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i>7247059331, 9926989777,0771-4060464</a></li>
            <li>
                <div class="left">
                    <ul>
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>

                </div>
            </li>
        </ul>

        <div class="right">
            <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>Near Axis Bank, Shankar Nagar Raipur (C.G.)</li>

            </ul>
        </div>

    </header>




    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo1.png" alt="" width="160px" height="70px"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Training</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Blog</a>
                    </li>



                </ul>

            </div>
        </div>
    </nav>
    <!-- carousl -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/demo5.jpg" class="d-block w-100" alt="TRAINING/INTERNSHIP" height="450px">
                <!-- <h3 class="pt-5"style="text-shadow:1px 1px 15px black;color:white;"id="slidetext">
                <center>
                    <b>TRAINING/INTERNSHIP</b>
                </center>
                </h3> -->
            </div>
            <div class="carousel-item">
                <img src="img/demo6.jpg" class="d-block w-100" alt="WEB DEVELOPMENT" height="450px">
            </div>
            <div class="carousel-item">
                <img src="img/demo11.jpg" class="d-block w-100" alt="APP DEVELOPMENT" height="450px">
            </div>
            <div class="carousel-item">
                <img src="img/demo2.jpg" class="d-block w-100" alt="SHOFTWARE DEVELOPMENT" height="450px">
            </div>
            <div class="carousel-item">
                <img src="img/soft.jpeg" class="d-block w-100" alt="DIGITAL MARKETING" height="450px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- new content -->

    <div class="midline">
        <marquee behavior="" direction="">
            <div style="display:flex;flex-direction:row; margin-top:15px;">
                <p style="color:yellow;margin-right:16px;">Registration Open for vocational Training </p>

                <a href="" style="margin-top:5px;">Register Now</a>
            </div>



        </marquee>
    </div>
    <section>
        <div class="services">
            <h1 style="text-align:center;">Our Services</h1>
            <div class="container text-center px-4">
                <div class="row gx-5">
                    <div class="col border border-secondary ml-1 " style="margin-right:6px;border-radius:5px">
                        <a href=""><img src="img/web.gif" alt="" height="100px" width="100px"></a>
                        <h2 style="color:#0069d9;">Web Development</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nobis error voluptatibus
                            in non, iste adipisci velit earum autem repellendus?</p>
                        <a href="" class="btnv">View More</a>
                    </div>
                    <div class="col border border-secondary p-3 ml-1"style="margin-right:6px;border-radius:5px">
                        <a href=""><img src="img/app.gif" alt="" height="100px" width="100px"></a>
                        <h2 style="color:#0069d9;"> Mobile App Development</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi voluptate atque, facere
                            quibusdam
                        </p>
                        <a href="" class="btnv">View More</a>
                    </div>
                    <div class="col border border-secondary ml-1"style="margin-right:6px;border-radius:5px">
                        <a href=""><img src="img/service-social.gif" alt="" height="100px" width="100px"></a>
                        <h2 style="color:#0069d9;"> Digital Marketing</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel soluta pariatur quia
                            dignissimos dolorem esse sapiente fuga, saepe odio? Odit?</p>
                        <a href="" class="btnv">View More</a>

                    </div>
                    <div class="col border border-secondary ml-1"style="margin-right:6px;border-radius:5px">
                        <a href=""><img src="img/service-training.gif" alt="" height="100px" width="100px"></a>
                        <h2 style="color:#0069d9;">Training</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quisquam accusamus
                            excepturi
                            deleniti voluptatem alias neque earum adipisci minima dolores.</p>
                        <a href="" class="btnv">View More</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <div class="hero">
        <div class="count">
            <div class="counter-col">
                <div class="counter-box">
                    <i class="fa-solid fa-handshake"></i>
                    <h2 class="counter">150</h2><span>+</span>
                    <h4>HAPPY CLIENT</h4>

                </div>

            </div>
            <div class="counter-col">
                <div class="counter-box">
                    <i class="fa-solid fa-arrow-up-right-dots"></i>
                    <h2 class="counter">3750</h2><span>+</span>
                    <h4>TRAINEE</h4>

                </div>
            </div>
            <div class="counter-col">
                <div class="counter-box">
                    <i class="fa-solid fa-share-nodes"></i>
                    <h2 class="counter">122</h2><span>+</span>
                    <h4> PROJECT DONE</h4>

                </div>
            </div>
            <div class="counter-col">
                <div class="counter-box">
                    <i class="fa-solid fa-headphones-simple"></i>
                    <h2 class="counter">200</h2><span>+</span>
                    <h4>WORKSHOP</h4>

                </div>
            </div>

        </div>
    </div>
    <!--  -->
    <section>
        <div class="container text-center mt-2">
            <div class="row">
                <div class="col">
                    <h3>Features</h3>
                    <div class="feat">
                        <a href="" class="btnv">Training</a>
                        <p>Development</p>
                    </div>
                    <ul style="list-style-type: square;">
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet </li>
                        <li>Lorem ipsum dolor sit amet </li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet </li>
                    </ul>
                </div>
                <div class="col">
                    <h3 style="margin-bottom:50px;">Our Skills</h3>
                    <div>
                        <h2 style="font-size:20px;margin-right:200px justify-content:space-between;">web development
                            <samp>97%</samp>
                        </h2>
                        <div class="skill"></div>

                    </div>
                    <div>
                        <h2 style="font-size:20px;margin-right:200px justify-content:space-between;">App development
                            <samp>95%</samp>
                        </h2>
                        <div class="skill"></div>

                    </div>
                    <div>
                        <h2 style="font-size:20px;margin-right:200px justify-content:space-between;">Training
                            <samp>98%</samp>
                        </h2>
                        <div class="skill"></div>

                    </div>
                    <div>
                        <h2 style="font-size:20px;margin-right:200px justify-content:space-between;">Digital marketing
                            <samp>90%</samp>
                        </h2>
                        <div class="skill"></div>

                    </div>
                </div>
                <div class="col">
                    <h3>Notification</h3>
                   <div class="notify">
                        <ul>
                        <marquee behavior="" direction="up"height="300px"width="90%">
                            <li><a href=""><img src="img/source.gif" alt="" height="30px" width="30px">Registration open
                                    for vocational traing</a></li>
                            <li> <a href=""><img src="img/source.gif" alt="" height="30px" width="30px">New Batches are
                                    start for web development</a></li>
                            <li><a href=""><img src="img/source.gif" alt="" height="30px" width="30px">new batches are
                                    started for java</a></li>
                            <li><a href=""><img src="img/source.gif" alt="" height="30px" width="30px">Registration open
                                    for vocational traing</a></li>
                            <li> <a href=""><img src="img/source.gif" alt="" height="30px" width="30px">New Batches are
                                    start for web development</a></li>
                            <li><a href=""><img src="img/source.gif" alt="" height="30px" width="30px">new batches are
                                    started for java</a></li>
                            </marquee>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client say & student say -->
    <div class="container text-center">
        <div class="row bg-dark">
            <div class="col text-white mt-5">
                <h1> Client Say</h1>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque unde quia eum,
                                laudantium aperiam eius, animi, cumque quibusdam quisquam
                                adipisci ipsum tenetur recusandae cupiditate itaque magnam odit qui fugiat?</p>
                            <h2>madhu</h2>
                        </div>
                        <div class="carousel-item">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium rerum repellat
                                dolorum doloribus nobis nesciunt illum, temporibus explicabo veniam
                                dolores unde inventore minima praesentium enim beatae voluptas dolore magnam delectus?
                            </p>
                            <h2>nidhi</h2>
                        </div>
                        <div class="carousel-item">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis molestiae
                                debitis omnis magnam eum accusamus provident ea
                                laudantium incidunt neque itaque, mollitia esse natus suscipit quo deleniti nesciunt
                                fugiat?</p>
                            <h2>shivani</h2>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col text-white mt-5">
                <h1>Student say</h1>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque unde quia eum,
                                laudantium aperiam eius, animi, cumque quibusdam quisquam
                                adipisci ipsum tenetur recusandae cupiditate itaque magnam odit qui fugiat?</p>
                            <h2>madhu</h2>
                        </div>
                        <div class="carousel-item">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium rerum repellat
                                dolorum doloribus nobis nesciunt illum, temporibus explicabo veniam
                                dolores unde inventore minima praesentium enim beatae voluptas dolore magnam delectus?
                            </p>
                            <h2>nidhi</h2>
                        </div>
                        <div class="carousel-item">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis molestiae
                                debitis omnis magnam eum accusamus provident ea
                                laudantium incidunt neque itaque, mollitia esse natus suscipit quo deleniti nesciunt
                                fugiat?</p>
                            <h2>shivani</h2>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- Our working Process -->
    <section class="working">
        <h2 style="text-align:center;margin-top:15px;">Our Working Progress</h2>
        <div class="work-process">
            <div class="our-work">

                <div class="work-circle">
                <img src="img/do.jpeg" alt=""height="100px"width="100px"class="center">
                </div>
                <div>
                    <a href="">Sketch</a>
                    <p>Lorem ipsum dolor sitt.</p>
                </div>

            </div>

            <div class="our-work">
                <div class="work-circle" id="blue">
                    <img src="img/do.jpeg" alt=""height="100px"width="100px"class="center">

                </div>
                <div>
                    <a href="">Creative Process</a>
                    <p>Lorem ipsum dolor sit </p>
                </div>


            </div>
            <div class="our-work">
                <div class="work-circle" id="yellow">
                <img src="img/do.jpeg" alt=""height="100px"width="100px"class="center">

                </div>
                <div>
                    <a href="">Development</a>
                    <p>Lorem ipsum dolor sit</p>
                </div>

            </div>
            <div class="our-work">
                <div class="work-circle" id="sky">
                <img src="img/do.jpeg" alt=""height="100px"width="100px"class="center">


                </div>
                <div>
                    <a href="">Final Product</a>
                    <p>Lorem ipsum dolor sit </p>
                </div>

            </div>

        </div>

    </section>
    <!-- internship -->
    <section>
        <h2 style="text-align:center;margin-top:15px;">INTERNSHIP</h2>
        <div class="intern-sec">

            <div class="intern">
                <img src="img/web1.gif" alt="" height="150px" width="150px">
                <p>Web Development</p>
            </div>
            <div class="intern">
                <img src="img/appdev.gif" alt="" height="150px" width="150px">
                <p>App Development</p>

            </div>
            <div class="intern">
                <img src="img/web3.gif" alt="" height="150px" width="150px">
                <p>software Development</p>
            </div>
            <div class="intern">
                <img src="img/mech.gif" alt="" height="150px" width="150px">
                <p>Mechanical CAD/CAE</p>
            </div>
            <div class="intern">
                <img src="img/interior.gif" alt="" height="150px" width="150px">
                <p>Interior Design</p>
            </div>
            <div class="intern">
                <img src="img/cad.gif" alt="" height="150px" width="150px">
                <p>Civil CAD/CAE</p>
            </div>
        </div>

    </section>
    <!-- client section -->
    <section>
        <div class="client-container">
            <h2 class="">Our Client</h2>
            <div class="slide-track">
                <div class="slide"><img src="img/psc.png" alt="" height="100" width="130"></div>
                <div class="slide"><img src="img/smitha_logo.png" alt="" height="100" width="130"></div>
                <div class="slide"><img src="img/pandit_logo.png" alt="" height="100" width="130"></div>
                <div class="slide"><img src="img/jsr.png" alt="" height="100" width="130"></div>
                <div class="slide"><img src="img/vmw logo.jpg" alt="" height="100" width="130"></div>
                <div class="slide"><img src="img/terasaath logo.png" alt="" height="100" width="130"></div>

                <div class="slide"><img src="img/kushagrata.jpeg" alt="" height="100" width="130"></div>


            </div>

        </div>

    </section>
<!--  -->
    <section>
        <div class="rating">
            <div class="l-rating">
                <p>For more please contact us</p>
                <a href="">Enquiry</a>
            </div>
            <div class="r-rating">
                <img src="img/google.png" alt="" height="100px">
                <a href="">Review</a>
            </div>

        </div>
    </section>
    <footer>
        <div class="foot">
            <div class="footdiv">
                <img src="img/logo1.png" alt="" width="160px" height="100px">
                <h3>get in touch</h3>
                <ul style="list-style:none;">
                    <li>Near Axis Bank, Shankar Nagar Raipur (C.G.)</li>
                    <li>Contact No.:</li>
                    <li>0992 698 9777, 0771 406 0464</li>
                    <li>Email id: info@raysitworld.com</li>

                </ul>


            </div>
            <div class="footdiv">
                <h3>Quick Link</h3>
                <ul style="list-style:none;">
                    <li><a href="">Website Development</a></li>
                    <li><a href="">Software Development</a></li>
                    <li><a href="">CAD Consulting Service</a></li>
                    <li><a href="">Interior Design</a></li>
                    <li><a href="">Mobile APP</a></li>
                    <li><a href="">Summer Internship</a></li>
                    <li><a href="">Digital marketing</a></li>
                    <li><a href="">Vocational Training</a></li>
                    <li><a href="">Privacy Policy</a></li>

                </ul>
            </div>
            <div class="footdiv">
                <h3> Opening Hour</h3>

                <ul style="list-style:none;">
                    <li>Monday 09:00 am - 20:00 pm</li>
                    <li>Tuesday 09:00 am - 20:00 pm</li>
                    <li>Wednesday 09:00 am - 20:00 pm</li>
                    <li>Thursday 09:00 am - 20:00 pm</li>
                    <li>Friday 09:00 am - 20:00 pm</li>
                    <li>Saturday 09:00 am - 20:00 pm</li>
                    <li>Sunday Closed</li>
                </ul>

            </div>
            <div class="footdiv">
                <h3>social connection</h3>

                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>

                <p>Find us on Google Play Store</p>
                <a href=""><img src="img/play.png" alt="" width="160px" height="50px"></a>


            </div>

        </div>
    </footer>
    <div class="copy">
        <p>RAYS IT & DESIGN WORLD PVT. LTD. - All rights reserved - 2016</p>
    </div>



   
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="jquery.counterup.min.js"></script>

    <script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
    </script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>

</body>

</html>