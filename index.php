<?php include "DataBaseConnection.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GENTR</title>
        <!-- G-Enter Logo -->
        <link rel="icon" href="img/G-EnterLogo.jpg">
        <!-- CSS Style -->
        <link rel="stylesheet" href="css/style.css">
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />

        <!-- CSS Files -->
        <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="./assets/demo/demo.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        

    </head>
    <body>
        <!-- NavBar Start -->
        <nav class="navbar  navbar-expand-lg bg-primary ">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/G-EnterLogo.jpg" alt="IMG" width="45px" style="border-radius: 45px;">
                    <span style="font-size:18px;">&nbspEntr</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="projectForm.php">G Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- NavBar End -->
        <!-- Header Start -->
       
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-color:#dedded ;">
                    <video class="d-block w-100" muted autoplay controls loop>
                        <source src="img/G.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/30.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/31.jpeg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="sr-only ">Next</span>
            </a>
        </div>
        
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class=" col-md-4 col-xl-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/G-EnterLogo.jpg" rel="nofollow" alt="Card image cap">
                        <div class="card-body" style="height: 280px;">
                            <p class="card-text  justify-text">G ENTR is a youth pioneering platform which started at COVID-10 period
                                to provide internship, employment and training
                                opportunities in cooperation with our partners (SME's) using gamification and artificial
                                technology smart andsustainable training
                                G ENTR's biggest goal is to empower youth and reduce the unemployment rates as a part of
                                our social responsibility and
                                community service.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-xl-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/G2.jpg" rel="nofollow" alt="Card image cap">
                        <div class="card-body" style="height: 280px">
                            <p class="card-text justify-text">There is a saying, no doubt, we all heard it when we graduated from
                                university or college; "We need experience that
                                needs work, which needs experience which needs work etc."
                                Our goal is to break this cycle through our response programs towards youth and
                                community, especially during the COVID19
                                pandemic.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-xl-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="img/G3.png" rel="nofollow" alt="Card image cap">
                        <div class="card-body" style="height: 280px">
                            <p class="card-t justify-text">One of G ENTR services is (G Projects). This service helps young people
                                in all research, projects, analysis, data collection, development, programming, building
                                prototypes and 3D printing for various
                                academic majors and orientations.
                                </span>
                            </p>
                            <div class="col-md-12 butt text-center mb-5 ">
                                <span> <a href="projectForm.php"> <button type="button" class="btn btn-success">G Prpject</button></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="card">
                        <video class="img-fluid" playsinline autoplay muted loop controls>
                            <source src="img/vedio2.mp4" type="video/mp4">
                        </video>
                        <div class="card-body cardVedio" style="height: unset !important;">
                            <p class="card-t justify-text">One of G ENTR services is (G Projects). This service helps young people
                                Apply Now!
                                Learn about the wonderful experience of Lilian and Ranin with us at G ENTR!
                                Be the next winner by the opportunity to participate in a sustainable training program
                                as part of our community response
                                during the Corona period!
                                </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Froms Start Here -->
        <div class="col-md-12    text-center  mb-5 ">
            <button id="student" type="button" class="btn btn-success ">Apply Student</button>
            &nbsp;
            <button id="company" type="button" class="btn btn-success" >Apply Company</button>
        </div>

        <div id="gostudent" class="contact1">
            <div class="container-contact1">
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="img/G-EnterLogo.jpg" alt="IMG">
                </div>


                <form class="contact1-form validate-form" action="" method="POST">
                    <div class="container">
                        <div class="header-form col-xs-1 text-center">
                            <bdi>Start your Internship Now!</bdi>
                        </div>
                    </div>
                    <span class="contact1-form-title">
                        Apply for an internship opportunity that ends in employment as one of the community leadership
                        activities carried out by
                        G ENTR team.We offer you the opportunity to get experience from reputable companies (our
                        partners). This training suits students
                        (undergraduates) from 18 to 26 years old. At the end of the internship period, the trainee
                        receives a certificate that
                        is suitable for being presented to the university (in some majors such as medical and
                        engineering) and gets a
                        recommendation to work on the professional LinkedIn platform from our partners. Most important
                        the intern gets a real
                        job opportunity upon the need and feedback of the companies. This internship is paid based on
                        the approval of the
                        companies we contract with.
                    </span>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="name" placeholder="Your Name (Three Parts) in English*">
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="enname"
                            placeholder="Your Name (Three Parts) in Arabic*">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="uni" placeholder="University / College *">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="major"
                            placeholder="Major(For example Mechanical,Engineering,...)*">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="skills"
                            placeholder="Mention Five Skills that you are really good in*">
                        <span class="shadow-input1"></span>
                    </div>
                    <span class="contact1-form-title header-form" style="padding-bottom: 20px; font-weight: bold;">
                        <bdi>Contact Informacion</bdi>
                    </span>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="email" placeholder="e-mail Address *">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="numberphone" placeholder="Primary Phone number *">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="numberphone2" placeholder="Secondary Phone Number">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn submit">
                            <span>
                                Send
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div id="gocompany" class="contact1">
            <div class="container-contact1">
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="img/13.png" alt="IMG">
                </div>
                <form class="contact1-form validate-form" action="" method="POST">
                    <div class="container">
                        <div class="header-form col-xs-1 text-center">
                            <bdi>Contribute to increasing opportunities by submitting a trainee recall request.</bdi>
                        </div>
                    </div>
                    <span class="contact1-form-title">
                        In order to provide opportunities and increase the percentage of training and jobs by giving them to youth. We always
                        strive to create more and more partnerships and contracts with organizations, institutions and companies. 
                        <br>Participate and offer opportunities now
                    </span>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="name" placeholder="Company Name*">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="address" placeholder="Company Address *">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="website" placeholder="Website">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="work" placeholder="Work Major*">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="email"
                            placeholder="Email Address*">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="skills" placeholder="Skills Required (in Interns or Employees)*">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="interns"
                            placeholder="Number of Interns / Employees Required*">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <textarea placeholder="Any information you want to add" name="data" id="data" cols="40" rows="6"
                            style="border: 2px solid #45c2b4;padding:10px 30px ;width: 100%;background-color: #dedede;text-align: left;border-radius: 15px;"></textarea>
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn submit">
                            <span>
                                Send
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Form End -->

        <!-- Header End -->
        <!-- Footer Start -->

        <footer class="footer-distributed">
            <div class="container">
                <div class="footer-left">
                    <span style="font-size: 40px;color: #fff;">G</span><span style="color: #fff;">Entr</span></a>
                    <br>
                    <br>
                    <img src="img/G-EnterLogo.jpg" alt="IMG" width="20%" style="border-radius: 70px;">
                    <br>
                    <br>
                    <br>
                    <p class="footer-company-name">G-ENTR &copy; 2020-2021</p>
                </div>

                
        <div class="footer-center">
            <p>
                <h3 style="color: #fff;margin-top: 0px;">Links</h3>
            <p class="footer-links">
               <a href="index.php">Home</a>
            
                <a href="about.php">About Us</a>
            
                <a href="contact.php">Contact Us</a>
            
                <a href="projectForm.php">G-Project</a>
            
            
            </p>
        </div> 
                <div class="footer-right">
                    <p class="footer-company-about" style="font-size: 16px;">
                        <span style="font-size: 20px;">About G ENTR</span>
                        An innovative social entrepreneurial platform that helps you get the required experience
                        starting from internship to
                        real employment.
                    </p>
                    <div class="footer-icons">
                        <a href="https://web.facebook.com/GAMESENTR"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/g.entr/"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <button id="btnS">
            <i class="fas fa-arrow-up"></i>
        </button>
        <!-- End Foote -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/tilt.jquery.min.js"></script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
        <script src="./assets/js/plugins/moment.min.js"></script>
        <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--  Google Maps Plugin    -->
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
            $(document).ready(function () {
                $("#student").on('click', function () {
                    document.getElementById('gostudent').scrollIntoView({ behavior: "smooth", block: "start" });
                });
                $("#company").on('click', function () {
                    document.getElementById('gocompany').scrollIntoView({ behavior: "smooth", block: "start" });
                });
            });
            const btn=document.querySelector('#btnS');
            btn.addEventListener("click",function(){
                window.scrollTo({
                    top:0,
                    left:0,
                    behavior:"smooth"
                });
            });
        </script>
    </body>
</html>