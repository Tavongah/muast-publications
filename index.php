<!DOCTYPE html><html class="no-js" lang="zxx">
<?php
$response = 
//file_get_contents('http://localhost:9093/admissions/journals/list');
file_get_contents('http://129.232.187.245:9093/admissions/journals/list');
$array = json_decode($response, true);
 

?>    
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="cache-control" content="no-cache"> <!-- tells browser not to cache -->
<meta http-equiv="expires" content="0"> <!-- says that the cache expires 'now' -->
<meta http-equiv="pragma" content="no-cache"> <!-- says not to use cached stuff, if there is any -->
    <title>MUAST - Marondera University of Agricultural Sciences and Technology</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizer JS -->
    <script src="js/modernizr-3.11.7.min.js"></script>
    <style>
            svg {
            position: relative;
            width: 500px;
            left: 50%;
            transform: translateX(-50%);
            }
            p {
            color: peru;
            padding: 45px;
            }

            .thumb {
        
        height: auto;
        margin-top : 20px;
        margin-left : 20px;
        display: flex;
        justify-content: center;
      }
      .cover {
  object-fit: cover;
  width: 90%;
  height: 90%;
}

    </style>
</head>

<body>
 <?php include("header.php");?>

<!--div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider slider-height-1 bg-img" style="background-image:url(images/slider-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">MakeYour Own World</h1>
                            <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-single-img slider-animated-1">
                    <img class="animated" src="images/single-slide-1.png" alt>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height-1 bg-img" style="background-image:url(images/slider-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">MakeYour Own World</h1>
                            <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-single-img slider-animated-1">
                    <img class="animated" src="images/single-slide-1.png" alt>
                </div>
            </div>
        </div>
    </div>
</div-->

<div class="about-us pt-1 pb-130">
    <div class="container">

<?php
$dateVisited= date("Y-m-d h:i:s");
$visitorIp =$_SERVER['REMOTE_ADDR'];

foreach ($array as $item) {
   
    $title = $item['title']; 
    $year = $item['yearPublished'];  
    $summary = $item['summary'];
    $image=$item["image"]; 
    $journalId= $item['journalId']; 
    $journalDocument= $item['journalDocument']; 
      
?>
    

        <div class="row">
            <div class="col-lg-6 col-md-6" 
            style="
            display: flex;
justify-content: center;
align-items: center;"
            
                    >

                    <svg width="500" height="500">
                        <defs>
                            <filter id="filter" height="1.4" width="1.4">
                            <feTurbulence baseFrequency="0.12" numOctaves="2" type="fractalNoise" result="result1" />
                            <feDisplacementMap in2="result1" scale="99" result="result2" xChannelSelector="R" in="SourceGraphic" />
                            <feComposite in2="result2" in="SourceGraphic" operator="atop" result="fbSourceGraphic" />
                            </filter>
                        </defs>
                        <rect fill="#946038" filter="url(#filter)" width="500" height="500" x="0" y="0" />
                        <foreignObject width="500" height="500">

                        
                            <!--div class="thumb">

                            
                                    <!--p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        <br />
                                        <br />Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                                        eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                                        qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </p-->
                            <!--/div-->
                            <img  class="animated cover thumb" src="<?php echo $image?>" alt>
                        </foreignObject>
                        
                    </svg>


            <!--div class="about-img default-overlay">
                    <img src="images/banner-1.jpg" alt>
                    <a class="video-btn video-popup" href="https://www.youtube.com/watch?v=ywbuus9UVMU">
                        <!--img class="animated" src="images/video.png" alt-->
                         <!--img style="opacity: 0.5;" class="animated" src="<?php echo $image?>" alt>
                    <!--/a>
                </div-->
                
            </div>
            <div class="col-lg-6 col-md-6" style="
            display: flex;
justify-content: center;
align-items: center;">

            <div class="about-content section-title-green">
                    <div class="section-title  mb-30">
                        <div style="background: rgb(250,250,251);
background: linear-gradient(90deg, rgba(250,250,251,1) 0%, rgba(249,253,249,1) 34%, rgba(9,121,18,1) 50%, rgba(155,199,161,1) 58%, rgba(246,248,249,1) 72%, rgba(246,247,248,1) 100%);">
                        <h3 style="text-align:center"> <?php echo $title;?> </h3>
</div>
                        <h4 style="text-align:center"> (<?php echo $year;?>) </h4>
                        <div style="text-align:justify;font-size:12px "><?php echo $summary?></div>
                    </div>
                    <div class="about-btn mt-45"> 

                        <form action="view_journal.php" method="POST">
                            <input type="hidden" value="<?php  echo $journalId."#".$visitorIp."#".$dateVisited."#".$journalDocument."#".$title; ?>" name="hits" />                        
                            <button type="button" class="btn">
                            <span class="badge bg-secondary">100</span>  Views</button>
                          
                            <button type="submit" class="btn btn-primary btn-success pull-right" href="about-us.html">Open</button>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>

<?php
}
?>




    </div>
</div>
<!--div class="course-area bg-img pt-130 pb-10" style="background-image:url(images/bg-1.jpg);">
    <div class="container">
        <div class="section-title mb-75">
            <h2> <span>Our</span> Courses</h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="course-slider-active nav-style-1 owl-carousel">
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="images/course-1.jpg" alt></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Apparel Manufacturing</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="images/course-2.jpg" alt></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Grphic Design & Multimedia</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="images/course-3.jpg" alt></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Computer Engineering</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="images/course-4.jpg" alt></a>
                    <span>Post Graduation Course</span>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Fashion & Technology</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.html"><img class="animated" src="images/course-2.jpg" alt></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.html">Apparel Manufacturing</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->
<!--div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Our <span>Achievement</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">
                        <img src="images/achieve-1.png" alt>
                    </div>
                    <div class="count-content">
                        <h2 class="count">890</h2>
                        <span>STUDENTS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two">
                    <div class="count-img">
                        <img src="images/achieve-2.png" alt>
                    </div>
                    <div class="count-content">
                        <h2 class="count">670</h2>
                        <span>GRADUATE</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three">
                    <div class="count-img">
                        <img src="images/achieve-3.png" alt>
                    </div>
                    <div class="count-content">
                        <h2 class="count">160</h2>
                        <span>AWARD WINNING</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four">
                    <div class="count-img">
                        <img src="images/achieve-4.png" alt>
                    </div>
                    <div class="count-content">
                        <h2 class="count">200</h2>
                        <span>FACULTIES</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt src="images/testi-b1.jpg">
                    </div>
                   <div class="row g-0">
                       <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(images/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>AYESHA HOQUE</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt src="images/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt src="images/testi-b3.jpg">
                    </div>
                   <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(images/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis</p>
                                <div class="testi-info">
                                   <h5>Tayeb Rayed</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt src="images/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt src="images/testi-b2.jpg">
                    </div>
                   <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(images/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Robiul siddikee</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt src="images/testi-icon.png">
                                </div>
                           </div>
                        </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt src="images/testi-b2.jpg">
                    </div>
                    <div class="row g-0">
                       <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(images/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Modhu Dada</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt src="images/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="testimonial-image-slider">
                <div class="sin-testi-image">
                    <img src="images/testi-s2.jpg" alt>
                </div>
                <div class="sin-testi-image">
                    <img src="images/testi-s1.jpg" alt>
                </div>
                <div class="sin-testi-image">
                    <img src="images/testi-s3.jpg" alt>
                </div>
                <div class="sin-testi-image">
                    <img src="images/testi-s3.jpg" alt>
                </div>
            </div>
        </div>
        <div class="testimonial-text-img">
            <img alt src="images/testi-text.png">
        </div>
    </div>
</div-->
<!--div class="register-area bg-img pt-130 pb-130" style="background-image:url(images/bg-2.jpg);">
    <div class="container">
        <div class="section-title-2 mb-75 white-text">
            <h2>Register <span>Now</span></h2>
            <p>Winter Admission Is Going On. We are announcing  Special discount for winter batch 2019.</p>
        </div>
        <div class="register-wrap">
            <div id="register-3" class="mouse-bg">
                <div class="winter-banner">
                    <img src="images/regi-1.png" alt>
                    <div class="winter-content">
                        <span>WINTER </span>
                        <h3>2019</h3>
                        <span>ADMISSION </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-8">
                    <div class="register-form">
                        <h4>Get A free Registration</h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="First Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="Last Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="Phone" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="Email" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form-style">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="submit default-btn" type="submit">SUBMIT NOW</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="register-1" class="mouse-bg"></div>
    <div id="register-2" class="mouse-bg"></div>
</div-->
<!--div class="teacher-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Best <span>Teacher</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="custom-row">
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="images/teacher-1.jpg" alt>
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Robi Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="images/teacher-2.jpg" alt>
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Jui Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="images/teacher-3.jpg" alt>
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Fawd Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="images/teacher-4.jpg" alt>
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Fawd Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="images/teacher-5.jpg" alt>
                    </div>
                    <div class="teacher-content-visible">
                        <h4>Jui Khan</h4>
                        <h5>Lecturer</h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                            <p>Tempor incididunt magna aliqua.</p>
                            <div class="teacher-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->
<!--div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url(images/bg-3.jpg);">
    <div class="container">
        <div class="section-title mb-75">
            <h2><span>Our</span> Event</h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="event-active owl-carousel nav-style-1">
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="event-details.html"><img src="images/event-1.jpg" alt></a>
                    <div class="event-date-wrap">
                        <span class="event-date">1st</span>
                        <span>Dec</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="event-details.html">Aempor incididunt ut labore ejam.</a></h3>
                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Mascot Plaza ,Uttara</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>11:00 am</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="event-details.html"><img src="images/event-2.jpg" alt></a>
                    <div class="event-date-wrap">
                        <span class="event-date">10th</span>
                        <span>Dec</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="event-details.html">Global Conference on Business.</a></h3>
                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Shubastu ,Dadda</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>08:30 am</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="event-details.html"><img src="images/event-3.jpg" alt></a>
                    <div class="event-date-wrap">
                        <span class="event-date">1st</span>
                        <span>Dec</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="event-details.html">Academic Conference Maui.</a></h3>
                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Banasree ,Rampura</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>10:00 am</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="event-details.html"><img src="images/event-2.jpg" alt></a>
                    <div class="event-date-wrap">
                        <span class="event-date">1st</span>
                        <span>Dec</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="event-details.html">Social Sciences & Education.</a></h3>
                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>Shubastu ,Badda</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>10:30 am</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->
<!--div class="blog-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Our <span>Newsfeed</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="images/blog-1.jpg" alt></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Testing is a great thing.</a></h4>
                            <p>doloremque laudan tium, totam ersps uns iste natus</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Adrin Azra</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 15</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> Jun, 24th 2018</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="images/blog-2.jpg" alt></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">A variation of the ordinary.</a></h4>
                            <p>doloremque laudan tium, totam ersps uns iste natus</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Tayeb Jon</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 12</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> Feb, 18th 2017</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="images/blog-3.jpg" alt></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">In publishing and graphic.</a></h4>
                            <p>doloremque laudan tium, totam ersps uns iste natus</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> Rifat Al</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 20</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> Oct, 14th 2018</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog mb-30">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="images/blog-4.jpg" alt></a>
                    </div>
                    <div class="blog-content-wrap">
                        <span>Education</span>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">Learn English in ease.</a></h4>
                            <p>doloremque laudan tium, totam ersps uns iste natus</p>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>Md Tamim</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> 08</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> Jun, 21th 2017</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->
<footer class="footer-area">
    <!--div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url(images/bg-4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>ABOUT US</h4>
                        </div>
                        <div class="footer-about">
                            <p>Ugiat nulla pariatur. Edeserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natu</p>
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>Uttara, Dhaka, Bangladesh</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="#">education@email.com</a></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span> +98 558 547 589</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>QUICK LINK</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="course.html">Courses</a></li>
                                <li><a href="#">Admission</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>COURSES</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">Under Graduate Programmes </a></li>
                                <li><a href="#">Graduate Programmes </a></li>
                                <li><a href="#">Diploma Courses</a></li>
                                <li><a href="#">Others Programmes</a></li>
                                <li><a href="#">Short Courses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>GALLERY</h4>
                        </div>
                        <div class="footer-gallery">
                            <ul>
                                <li><a href="#"><img src="images/gallery-1.png" alt></a></li>
                                <li><a href="#"><img src="images/gallery-2.png" alt></a></li>
                                <li><a href="#"><img src="images/gallery-3.png" alt></a></li>
                                <li><a href="#"><img src="images/gallery-4.png" alt></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>News Latter</h4>
                        </div>
                        <div class="subscribe-style">
                            <p>Dugiat nulla pariatur. Edeserunt mollit anim id est laborum. Sed ut perspiciatis unde</p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required placeholder="Your E-mail Address" name="EMAIL" value>
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="SUBMIT">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->
  <?php include("footer.php");?>
</footer>













<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="js/jquery-v2.2.4.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body></html>