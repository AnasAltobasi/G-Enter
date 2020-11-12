<?php include "DataBaseConnection.php";?>
<?php
$fname=isset($_POST["first-name"]) ? $_POST["first-name"] : "";
$lname=isset($_POST["last-name"]) ? $_POST["last-name"] : "";
$email=isset($_POST["email"]) ? $_POST["email"]: "";
$phone=isset($_POST["phone"])? $_POST["phone"]: "";
$message=isset($_POST["message"])? $_POST["message"]: "";
$send=isset($_POST["submit"])? $_POST["submit"]: "";

$Error_array=array(
    // register errors
    'fname'=>'',
    'lname'=>'',
    'email'=>'',
    'phone'=>'',
    'message'=>'');
    $error = null;
    $check = true;
    $Error_flag_fname=false;
    $Error_flag_lname=false;
    $Error_flag_email=false;
    $Error_flag_phone=false;
    $Error_flag_message=false;
    //Check For Empty
    if(isset($_POST["submit"])){
    if(empty($fname) ||empty($lname) || empty($email) || empty($phone) || empty($message))
    {
        $error="Please Fill All Requires In Form";
        $check = false;
    }
    //FirstName Validation
     if(empty($fname)){
             $Error_array['fname']="First Name Empty";
             $Error_flag_fname=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$fname)&&(!preg_match("/\p{Arabic}/u",$fname)))
            {
                $Error_array['fname']="Only letters";
                $Error_flag_fname=true;
            }
    //LastName Validation
     if(empty($lname)){
             $Error_array['lname']="Last Name Empty";
             $Error_flag_lname=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$lname)&&(!preg_match("/\p{Arabic}/u",$lname)))
            {
                $Error_array['lname']="Only letters";
                $Error_flag_lname=true;
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
        $Error_array['phone']="Phone Number Empty";
        $Error_flag_phone=true;
        }
    elseif(!preg_match('/^[0-9]{10}$/',$phone))
    {
        $Error_array['phone']="Invalid Number";
        $Error_flag_phone=true;
    }
    //validation phone
        if(empty($message)){
        $Error_array['message']="Please Enter Your Message";
        $Error_flag_message=true;
        }
    //Insert To Table Contact In The DataBase
if($check&&$Error_flag_email==false&&$Error_flag_fname==false&&$Error_flag_lname==false&&$Error_flag_phone==false&&$Error_flag_message==false){
    if('$submit'){
    $query="INSERT INTO contact(firstname,lastname,email,phonenumber,message)VALUES('$fname','$lname','$email','$phone','$message')";
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
        <title>Contact Us</title>
        <!-- G-Enter Logo -->
        <link rel="icon" href="img/G-EnterLogo.jpg">
        <!-- CSS Style -->
        <link rel="stylesheet" href="css/style.css">
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <!-- CSS Files -->
        <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="./assets/demo/demo.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
    </head>
    <style>
        #map {
      height: 400px;
  /* The height is 400 pixels */
      width: 100%;
  /* The width is the width of the web page */
}
    </style>
    <script>
      // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = { lat: -25.344, lng: 131.036 };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>
          <script src="https://goo.gl/maps/yi6j2mQYC7VRN1MF9" defer ></script>
    
   

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
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="projectForm.php">G Project</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="contact.php">Contact Us</a>
                        </li>
        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NavBar End -->
        <!-- Header Start -->
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form" action="" method="POST">
                    <span class="contact100-form-title">
                        Contact us 
                    </span>
                     <?php
                                if($check==false)
                                {
                                    echo "<div  class='alert alert-danger text-justify text-center col-xl-12'><center>$error</center></div>";
                                }
                                elseif($Error_flag_phone==true||$Error_flag_fname==true||$Error_flag_lname==true||$Error_flag_email==true||$Error_flag_message==true){
                                    echo "<div class='alert alert-danger text-justify text-center col-xl-12'><center>Try Again You Have A Problem</center></div>";
                                }
                                elseif(isset($_POST["submit"]))
                                {
                                    echo "<div class='alert alert-success text-justify text-center col-xl-12'><center>Your Message Sent Successfully</center></div>";
                                }
                         ?>
                    <label class="label-input100" for="first-name">Name*</label>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" >
                        <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
                        <?php if($Error_flag_fname==true){if($Error_array['fname']!==null)echo "<div class='alert alert-danger'>".$Error_array['fname']."</div>";}?>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input" >
                        <input class="input100" type="text" name="last-name" placeholder="last-name">
                        <?php if($Error_flag_lname==true){if($Error_array['lname']!==null)echo "<div class='alert alert-danger'>".$Error_array['lname']."</div>";}?>
                        <span class="focus-input100"></span>
                    </div>
        
                    <label class="label-input100" for="email">Email Address*</label>
                    <div class="wrap-input100 validate-input" >
                        <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                        <?php if($Error_flag_email==true){if($Error_array['email']!==null)echo "<div class='alert alert-danger'>".$Error_array['email']."</div>";}?>
                        <span class="focus-input100"></span>
                    </div>
        
                    <label class="label-input100" for="phone">Phone Number*</label>
                    <div class="wrap-input100">
                        <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. 070000000">
                        <?php if($Error_flag_phone==true){if($Error_array['phone']!==null)echo "<div class='alert alert-danger'>".$Error_array['phone']."</div>";}?>
                        <span class="focus-input100"></span>
                    </div>
        
                    <label class="label-input100" for="message">Message*</label>
                    <div class="wrap-input100 validate-input" >
                        <textarea id="message" class="input100" name="message" placeholder="Write  a message"></textarea>
                        <?php if($Error_flag_message==true){if($Error_array['message']!==null)echo "<div class='alert alert-danger'>".$Error_array['message']."</div>";}?>
                        <span class="focus-input100"></span>
                    </div>
         <?php
                                if($check==false)
                                {
                                    echo "<div  class='alert alert-danger text-justify text-center col-xl-12'><center>$error</center></div>";
                                }
                                elseif($Error_flag_phone==true||$Error_flag_fname==true||$Error_flag_lname==true||$Error_flag_email==true||$Error_flag_message==true){
                                    echo "<div class='alert alert-danger text-justify text-center col-xl-12'><center>Try Again You Have A Problem</center></div>";
                                }
                                elseif(isset($_POST["submit"]))
                                {
                                    echo "<div class='alert alert-success text-justify text-center col-xl-12'><center>Your Message Sent Successfully</center></div>";
                                }
                         ?>
                    <div class="container-contact1-form-btn col-md-12 text-center mt-4">
                        <button class="contact1-form-btn submit " type="submit" name="submit">
                            <span>
                                Send
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
                
        
                <div class="contact100-more flex-col-c-m" style="background-image: url('img/16.png');">
                    <div class="flex-w size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-map-marker"></span>
                        </div>
        
                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Address
                            </span>
        
                            <span class="txt2">
                                KHBP Amman, Jordan 962
                            </span>
                        </div>
                    </div>
        
                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
        
                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Open 
                            </span>
        
                            <span class="txt3">
                            9:00 AM - 5:00 PM
                            </span>
                        </div>
                    </div>
        
                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-envelope"></span>
                        </div>
        
                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                General Support
                            </span>
        
                            <span class="txt3">
                                contact@gentr.com
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
        <div class="container">
        <iframe id="map"
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846.1474423593984!2d35.834368170790654!3d31.97202413649471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDU4JzE5LjMiTiAzNcKwNTAnMDEuOCJF!5e0!3m2!1sar!2sjo!4v1603743858019!5m2!1sar!2sjo"
         width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
         tabindex="0"></iframe>
        </div>
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
        <!--   Core JS Files   -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/tilt.jquery.min.js"></script>
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