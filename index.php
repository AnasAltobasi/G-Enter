<?php include "DataBaseConnection.php";?>
<?php
$namearabic=isset($_POST["namearabic"]) ? $_POST["namearabic"] : "";
$nameenglish=isset($_POST["nameenglish"]) ? $_POST["nameenglish"] : "";
$email=isset($_POST["email"]) ? $_POST["email"]: "";
$phone=isset($_POST["phone"])? $_POST["phone"]: "";
$phone2=isset($_POST["phone2"])? $_POST["phone2"]: "";
$university=isset($_POST["university"])? $_POST["university"]: "";
$major=isset($_POST["major"])? $_POST["major"]: "";
$skills=isset($_POST["skills"])? $_POST["skills"]: "";
$send=isset($_POST["submit"])? $_POST["submit"]: "";

$Error_array=array(
    // register errors
    'namearabic'=>'',
    'nameenglish'=>'',
    'email'=>'',
    'phone'=>'',
    'phone2'=>'',
    'university'=>'',
    'major'=>'',
    'skills'=>'');
    $error = null;
    $check = true;
    $Error_flag_namearabic=false;
    $Error_flag_nameenglish=false;
    $Error_flag_email=false;
    $Error_flag_phone=false;
    $Error_flag_phone2=false;
    $Error_flag_major=false;
    $Error_flag_skills=false;
    $Error_flag_university=false;
    //Check For Empty
    if(isset($_POST["submit"])){
    if(empty($namearabic) ||empty($nameenglish) || empty($email) || empty($phone) || empty($phone2) || empty($university) || empty($major) || empty($skills))
    {
        $error="Please Fill All Requires In Form";
        $check = false;
    }
    //name arabic Validation
     if(empty($namearabic)){
             $Error_array['namearabic']="Arabic Name Empty";
             $Error_flag_namearabic=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$namearabic)&&(!preg_match("/\p{Arabic}/u",$namearabic)))
            {
                $Error_array['namearabic']="Only letters";
                $Error_flag_namearabic=true;
            }
    //nameenglish Validation
     if(empty($nameenglish)){
             $Error_array['nameenglish']="English Name Empty";
             $Error_flag_nameenglish=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$nameenglish)&&(!preg_match("/\p{English}/u",$nameenglish)))
            {
                $Error_array['nameenglish']="Only letters";
                $Error_flag_nameenglish=true;
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
     //validation phone2
     if(empty($phone2)){
        $Error_array['phone2']="Phone Number Empty";
        $Error_flag_phone2=true;
        }
    elseif(!preg_match('/^[0-9]{10}$/',$phone2))
    {
        $Error_array['phone2']="Invalid Number";
        $Error_flag_phone2=true;
    }
    


    //validation university
        if(empty($university)){
        $Error_array['university']="Please Enter Your university";
        $Error_flag_university=true;
        }
        //validation major
        if(empty($major)){
            $Error_array['major']="Please Enter Your major";
            $Error_flag_major=true;
            }
            //validation skills
        if(empty($skills)){
            $Error_array['skills']="Please Enter Your skills";
            $Error_flag_skills=true;
            }
    //Insert To Table training In The DataBase
if($check&&$Error_flag_email==false&&$Error_flag_namearabic==false&&$Error_flag_nameenglish==false&&$Error_flag_university==false&&$Error_flag_major==false&&$Error_flag_skills==false&&$Error_flag_phone==false&&$Error_flag_phone2==false){
    if('$submit'){
    $query="INSERT INTO training(namearabic,nameenglish,university,major,skills,email,phone,phone2)VALUES('$namearabic','$nameenglish','$university','$major','$skills','$email','$phone','$phone2')";
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
                    <?php
                                if($check==false)
                                {
                                    echo "<div  class='alert alert-danger text-justify text-center col-xl-12'><center>$error</center></div>";
                                
                                }
                             

                                elseif($Error_flag_namearabic==true||$Error_flag_nameenglish==true||$Error_flag_phone==true||$Error_flag_phone2==true||$Error_flag_email==true||$Error_flag_university==true||$Error_flag_major==true||$Error_flag_skills==true){
                                    echo "<div class='alert alert-danger text-justify text-center col-xl-12'><center>Try Again You Have A Problem</center></div>";
                                }
                                elseif(isset($_POST["submit"]))
                                {
                                    echo "<div class='alert alert-success text-justify text-center col-xl-12'><center>Your Message Sent Successfully</center></div>";
                                }
                         ?>
                         
                    <div class="wrap-input1 validate-input">
                        <input id="nameenglish" class="input1" type="text" name="nameenglish" placeholder="Your Name (Three Parts) in English*">
                        <?php if($Error_flag_nameenglish==true){if($Error_array['nameenglish']!==null)echo "<div class='alert alert-danger'>".$Error_array['nameenglish']."</div>";}?>
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input">
                        <input id="namearabic" class="input1" type="text" name="namearabic"
                            placeholder="Your Name (Three Parts) in Arabic*">
                            <?php if($Error_flag_namearabic==true){if($Error_array['namearabic']!==null)echo "<div class='alert alert-danger'>".$Error_array['namearabic']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="university" class="input1" type="text" name="university" placeholder="University / College *">
                        <?php if($Error_flag_university==true){if($Error_array['university']!==null)echo "<div class='alert alert-danger'>".$Error_array['university']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="major" class="input1" type="text" name="major"
                            placeholder="Major(For example Mechanical,Engineering,...)*">
                            <?php if($Error_flag_major==true){if($Error_array['major']!==null)echo "<div class='alert alert-danger'>".$Error_array['major']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="skills" class="input1" type="text" name="skills"
                            placeholder="Mention Five Skills that you are really good in*">
                            <?php if($Error_flag_skills==true){if($Error_array['skills']!==null)echo "<div class='alert alert-danger'>".$Error_array['skills']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <span class="contact1-form-title header-form" style="padding-bottom: 20px; font-weight: bold;">
                        <bdi>Contact Informacion</bdi>
                    </span>
                    <div class="wrap-input1 validate-input">
                        <input id="email" class="input1" type="text" name="email" placeholder="e-mail Address *">
                        <?php if($Error_flag_email==true){if($Error_array['email']!==null)echo "<div class='alert alert-danger'>".$Error_array['email']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="phone" class="input1" type="text" name="phone" placeholder="Primary Phone number *">
                        <?php if($Error_flag_phone==true){if($Error_array['phone']!==null)echo "<div class='alert alert-danger'>".$Error_array['phone']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input  id="phone2" class="input1" type="text" name="phone2" placeholder="Secondary Phone Number">
                        <?php if($Error_flag_phone2==true){if($Error_array['phone2']!==null)echo "<div class='alert alert-danger'>".$Error_array['phone2']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn submit" type="submit" name="submit">
                            <span>
                                Send
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <?php

$name=isset($_POST["name"]) ? $_POST["name"] : "";
$address=isset($_POST["address"]) ? $_POST["address"] : "";
$email2=isset($_POST["email2"]) ? $_POST["email2"]: "";
$website=isset($_POST["website"])? $_POST["website"]: "";
$interns=isset($_POST["interns"])? $_POST["interns"]: "";
$information=isset($_POST["information"])? $_POST["information"]: "";
$major2=isset($_POST["major2"])? $_POST["major2"]: "";
$skills2=isset($_POST["skills2"])? $_POST["skills2"]: "";
$send2=isset($_POST["submit2"])? $_POST["submit2"]: "";

$Error_array=array(
    // register errors
    'name'=>'',
    'address'=>'',
    'website'=>'',
    'information'=>'',
    'email2'=>'',
    'interns'=>'',
    'major2'=>'',
    'skills2'=>'');
    $error = null;
    $check = true;
    $Error_flag_name=false;
    $Error_flag_address=false;
    $Error_flag_email2=false;
    $Error_flag_information=false;
    $Error_flag_interns=false;
    $Error_flag_major2=false;
    $Error_flag_skills2=false;
    $Error_flag_website=false;
    //Check For Empty
    if(isset($_POST["submit2"])){
    if(empty($name) ||empty($address) || empty($email2) || empty($website) || empty($interns) || empty($information) || empty($major2) || empty($skills2))
    {
        $error="Please Fill All Requires In Form";
        $check = false;
    }
    //name  Validation
     if(empty($name)){
             $Error_array['name']=" Name Empty";
             $Error_flag_name=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name)&&(!preg_match("/\p{English}/u",$name)))
            {
                $Error_array['name']="Only letters";
                $Error_flag_name=true;
            }
    //address Validation
     if(empty($address)){
             $Error_array['address']="address Empty";
             $Error_flag_address=true;
        }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$address)&&(!preg_match("/\p{English}/u",$address)))
            {
                $Error_array['address']="Only letters";
                $Error_flag_address=true;
            }
    //validation email
        if(empty($email2))
        {
            $Error_array['email2']="Email Empty";
            $Error_flag_email2=true;
            
        }
    elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email2))
            {
                $Error_array['email2']="Invalid Email";
                $Error_flag_email2=true;
            }
    //validation website
        if(empty($website)){
        $Error_array['website']="website  Empty";
        $Error_flag_website=true;
        }
    
     //validation information
     if(empty($information)){
        $Error_array['information']="information Empty";
        $Error_flag_information=true;
        }
    


    //validation interns
        if(empty($interns)){
        $Error_array['interns']="Please Enter Your interns";
        $Error_flag_interns=true;
        }
        //validation major2
        if(empty($major2)){
            $Error_array['major2']="Please Enter Your major";
            $Error_flag_major2=true;
            }
            //validation skills
        if(empty($skills2)){
            $Error_array['skills2']="Please Enter Your skills";
            $Error_flag_skills2=true;
            }
    //Insert To Table training In The DataBase

if($check&&$Error_flag_name==false&&$Error_flag_address==false&&$Error_flag_website==false&&$Error_flag_email2==false&&$Error_flag_major2==false&&$Error_flag_skills2==false&&$Error_flag_information==false&&$Error_flag_interns==false){
    if('$submit2'){
    $query="INSERT INTO internship(name,address,website,major,skills,interns,information,email)VALUES('$name','$address','$website','$major2','$skills2','$interns','$information','$email2')";
    $result=mysqli_query($conn,$query);
    }
  }
}

?>

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
                    <?php
                                if($check==false)
                                {
                                    echo "<div  class='alert alert-danger text-justify text-center col-xl-12'><center>$error</center></div>";
                                }
                                
                                elseif($Error_flag_email2==true&&$Error_flag_name==true&&$Error_flag_address==true&&$Error_flag_website==true&&$Error_flag_major2==true&&$Error_flag_skills2==true&&$Error_flag_interns==true&&$Error_flag_information==true){
                                    echo "<div class='alert alert-danger text-justify text-center col-xl-12'><center>Try Again You Have A Problem</center></div>";
                                }
                                elseif(isset($_POST["submit2"]))
                                {
                                    echo "<div class='alert alert-success text-justify text-center col-xl-12'><center>Your Message Sent Successfully</center></div>";
                                }
                         ?>

                    <div class="wrap-input1 validate-input">
                        <input id="name" class="input1" type="text" name="name" placeholder="Company Name*">
                        <?php if($Error_flag_name==true){if($Error_array['name']!==null)echo "<div class='alert alert-danger'>".$Error_array['name']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="address" class="input1" type="text" name="address" placeholder="Company Address *">
                        <?php if($Error_flag_address==true){if($Error_array['address']!==null)echo "<div class='alert alert-danger'>".$Error_array['address']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="website" class="input1" type="text" name="website" placeholder="Website">
                        <?php if($Error_flag_website==true){if($Error_array['website']!==null)echo "<div class='alert alert-danger'>".$Error_array['website']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="major2" class="input1" type="text" name="major2" placeholder="Work Major*">
                        <?php if($Error_flag_major2==true){if($Error_array['major2']!==null)echo "<div class='alert alert-danger'>".$Error_array['major2']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="email2" class="input1" type="text" name="email2"
                            placeholder="Email Address*">
                            <?php if($Error_flag_email2==true){if($Error_array['email2']!==null)echo "<div class='alert alert-danger'>".$Error_array['email2']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="skills2" class="input1" type="text" name="skills2" placeholder="Skills Required (in Interns or Employees)*">
                        <?php if($Error_flag_skills2==true){if($Error_array['skills2']!==null)echo "<div class='alert alert-danger'>".$Error_array['skills2']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input id="interns" class="input1" type="text" name="interns"
                            placeholder="Number of Interns / Employees Required*">
                            <?php if($Error_flag_interns==true){if($Error_array['interns']!==null)echo "<div class='alert alert-danger'>".$Error_array['interns']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <textarea id="information" placeholder="Any information you want to add" name="information" id="information" cols="40" rows="6"
                            style="border: 2px solid #45c2b4;padding:10px 30px ;width: 100%;background-color: #dedede;text-align: left;border-radius: 15px;"></textarea>
                            <?php if($Error_flag_information==true){if($Error_array['information']!==null)echo "<div class='alert alert-danger'>".$Error_array['information']."</div>";}?>

                        <span class="shadow-input1"></span>
                    </div>
                   
                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn submit" type="submit" name="submit2">
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