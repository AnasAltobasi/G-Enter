<?php include "DataBaseConnection.php";?>
<?php
$fname=isset($_POST["fullname"]) ? $_POST["fullname"] : "";
$email=isset($_POST["email"]) ? $_POST["email"]: "";
$phone=isset($_POST["numberphone"])? $_POST["numberphone"]: "";
$uni=isset($_POST["uni_name"])? $_POST["uni_name"]: "";
$major=isset($_POST["major"])? $_POST["major"]: "";
$type=isset($_POST["type"])? $_POST["type"]: "";
$data=isset($_POST["data"])? $_POST["data"]: "";
$send=isset($_POST["send"])? $_POST["send"]: "";
$Error_array=array(
    // register errors
    'fullname'=>'',
    'email'=>'',
    'numberphone'=>'',
    'data'=>'',
    'type'=>'',
    'uni'=>'',
    'major'=>'',);
    $error = null;
    $check = true;
    $Error_flag_fullname=false;
    $Error_flag_major=false;
    $Error_flag_email=false;
    $Error_flag_phone=false;
    $Error_flag_uni=false;
//Check For Empty
    if(isset($_POST["send"])){
    if(empty($fname) ||empty($uni) || empty($email) || empty($phone) || empty($type)||empty($major))
    {
        $error="Please Fill All Requires In Form";
        $check = false;
    }
    //FullName Validation
     if(empty($fname)){
             $Error_array['fullname']="Name Empty";
             $Error_flag_fullname=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$fname)&&(!preg_match("/\p{Arabic}/u",$fname)))
            {
                $Error_array['fullname']="Only letters";
                $Error_flag_fullname=true;
            }
            //validation email
    if(empty($email))
        {
            $Error_array['email']="Email Empty";
            $Error_flag_email=true;
            
        }
    elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email))
            {
                $Error_array['email']="Invalid Email";
                $Error_flag_email=true;
            }
            //validation phone
    if(empty($phone)){
        $Error_array['numberphone']="Phone Number Empty";
        $Error_flag_phone=true;
        }
    elseif(!preg_match('/^[0-9]{10}$/',$phone))
    {
        $Error_array['numberphone']="Invalid Number";
        $Error_flag_phone=true;
    }
      //validation University Name
    if(empty($uni)){
        $Error_array['uni']="University Name Empty";
        $Error_flag_uni=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]\_\-]*$/',$uni)&&(!preg_match("/\p{Arabic}/u",$uni)))
        {
            $Error_array['uni']="Only letters In Arabic Or English";
            $Error_flag_uni=true;
        }
         //validation University Major
    if(empty($major)){
        $Error_array['major']=" University Major Empty";
        $Error_flag_major=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$major)&&(!preg_match("/\p{Arabic}/u",$major)))
        {
            $Error_array['major']="Only letters In Arabic Or English";
             $Error_flag_major=true;
        }
 //send data to database
    if($check&&$Error_flag_email==false&&$Error_flag_fullname==false&&$Error_flag_phone==false&&$Error_flag_uni==false&&$Error_flag_major==false){
    if('$send'){
    $query="INSERT INTO project(fullname,email,numberphone,uni_name,major,type,information)VALUES('$fname','$email','$phone','$uni','$major','$type','$data')";
    $result=mysqli_query($conn,$query);
}
  }
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>G-ENTR</title>
        <!-- G-Enter Logo -->
        <link rel="icon" href="img/G-EnterLogo.jpg">
        <!-- CSS Style -->
        <link rel="stylesheet" href="css/style.css">
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <!-- CSS Files -->
        <link href="assets/css/material-kit.css" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="./assets/demo/demo.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
    </head>
    <style>
/* arrows */

select.classic {
  background-image:
    linear-gradient(45deg, transparent 50%, white 50%),
    linear-gradient(135deg,white 50%, transparent 50%),
    linear-gradient(to right,#45c2b4,#45c2b4);
  background-position:
    calc(100% - 19px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
}

select.classic:focus {
  background-image:
    linear-gradient(45deg, white 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, white 50%),
    linear-gradient(to right, #45c2b4, #45c2b4);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 19px) 1em,
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
  border-color:#45c2b4;
  outline: 0;
}
select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}
    </style>
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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item active">
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
        <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <video class="img-fluid" playsinline autoplay muted loop controls>
                    <source src="img/g vedio.mp4" type="video/mp4">
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
        <!-- Form Start -->
        <div class="contact1" style="background-color: #92E8DF">
            <div class="container-contact1" style="margin-top: 110px;">
                <div class="contact1-pic js-tilt" data-tilt>
                    <img src="img/G-Project.png" alt="IMG">
                </div>
                <form class="contact1-form validate-form" action="" method="POST">
                <div class="container">
                    <div class="header-form col-xs-1 text-center">
                        <bdi>Apply now and your assistance will be done</bdi>
                    </div>
                </div>
                    <span class="contact1-form-title">
                    As one of the pioneering activities undertaken by a team<br>
                    (G ENTR) We have launched a service for assistance in university projects for all disciplines. This service is available
                    to all students from public and private universities and for all disciplines. The most important thing is that the
                    quality of the projects is very high (content, designs, pictures) and free from any plagiarism and plagiarism.
                    If you want to ask for help with your project, programming, 3D printing, content writing, formatting, presentation, you
                    must fill out the form and
                    The team will contact you as soon as possible.
                    Note: the service is paid (at a competitive price)
                    </span>
                    <?php
                                if($check==false)
                                {
                                    echo "<div  class='alert alert-danger text-justify text-center col-xl-12' style='border-radius: 40px;'><center>$error</center></div>";
                                }
                                elseif($Error_flag_email==true||$Error_flag_fullname==true||$Error_flag_uni==true||$Error_flag_major==true||$Error_flag_phone==true){
                                    echo "<div class='alert alert-danger text-justify text-center col-xl-12' style='border-radius: 40px;'><center>Try Again You Have A Problem</center></div>";
                                }
                                elseif(isset($_POST["send"]))
                                {
                                    echo "<div class='alert alert-success text-justify text-center col-xl-12' style='border-radius: 40px;'><center>Your request has been submitted. You will be contacted soon</center></div>";
                                }
                         ?>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="fullname" placeholder="Full Name*">
                        <span class="shadow-input1"></span>
                        <?php if($Error_flag_fullname==true){if($Error_array['fullname']!==null)echo "<div class='alert alert-danger' style='border-radius: 40px;' >".$Error_array['fullname']."</div>";}?>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="email" name="email" placeholder="Email*">
                        <span class="shadow-input1"></span>
                        <?php if($Error_flag_email==true){if($Error_array['email']!==null)echo "<div class='alert alert-danger' style='border-radius: 40px;'>".$Error_array['email']."</div>";}?>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="numberphone" placeholder="Number Phone*">
                        <span class="shadow-input1"></span>
                         <?php if($Error_flag_phone==true){if($Error_array['numberphone']!==null)echo "<div class='alert alert-danger' style='border-radius: 40px;'>".$Error_array['numberphone']."</div>";}?>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="uni_name" placeholder="University Name*">
                        <span class="shadow-input1"></span>
                         <?php if($Error_flag_uni==true){if($Error_array['uni']!==null)echo "<div class='alert alert-danger' style='border-radius: 40px;'>".$Error_array['uni']."</div>";}?>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="major" placeholder="University Specialization*">
                        <span class="shadow-input1"></span>
                         <?php if($Error_flag_major==true){if($Error_array['major']!==null)echo "<div class='alert alert-danger' style='border-radius: 40px;'>".$Error_array['major']."</div>";}?>
                    </div>
                    <div class="header-form col-xs-1 text-center">
                    <label  style="color: #000;font-size: 18px;">The type of project you want to help with</label>
                    </div>
                     <select class="btn dropdown-toggle classic" name="type" data-toggle="dropdown" style="width: 100%;border-radius: 30px;font-size: 13px;z-index: 5000;">
                        <option>Choose Type:</option>
                        <option value="Draft article">Draft article</option>
                        <option value="Final graduation project">Final graduation project</option>
                        <option value="Mujamma design and development">Mujamma design and development</option>
                        <option value="Programming and activating a website / electronic application">Programming and activating a website</option>
                        <option value="Providing university training opportunities">Providing university training opportunities</option>
                        <option value="Create a presentation- PowerPoint">Create a presentation- PowerPoint</option>
                        <option value="Writing content or formatting content">Writing content or formatting content</option>
                        </select>
                   
                    <br>
                    <div class="wrap-input1 validate-input">
                        <textarea placeholder="Any information you want to add" name="data" id="data" cols="40" rows="6" 
                            style="border: 2px solid #45c2b4;padding:10px 30px ;width: 100%;background-color: #dedede;text-align: left;border-radius: 15px;"></textarea>
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn submit" name="send">
                            <span>
                               Send
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <!-- Form End -->

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
                    <span style="font-size: 20px;">About The Company</span>
                    An innovative entrepreneurial platform that helps you enter the business world by enabling and accelerating
                    your
                    personal project and providing all kinds of advice.
                </p>
                <div class="footer-icons">
                    <a href="https://web.facebook.com/GAMESENTR"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/g.entr/"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            </div>
        </footer>

        <!-- End Foote -->
        <button id="btnS">
            <i class="fas fa-arrow-up"></i>
        </button>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/tilt.jquery.min.js"></script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.0
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
           
                const btn = document.querySelector('#btnS');
                btn.addEventListener("click", function () {
                    window.scrollTo({
                        top: 0,
                        left: 0,
                        behavior: "smooth"
                    });
                });
        </script>
        
        </body>
        
</html>