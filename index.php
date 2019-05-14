

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Pudhari - Digital Shopping Mart</title>
    <script type="text/javascript" src="script.js"></script>


    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="pixel-main-menu" id="sticker" style="background-color:#172e58;" >
            <div class="classy-nav-container breakpoint-off" >
                <div class="container-fluid" >
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="pixelNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/x.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <?php if(isset($_POST['submit']))
{?>
    <html>
        <body>
            <div class="alert alert-primary" role="alert">
                Thanku For Reaching Us!!.Our Team will contact you soon!!!!
            </div>        
        </body>
    </html>
<?php
}?>


                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a>Clothing</a>
                                        <ul class="dropdown" id="clothing">
                                            <li><a onclick="smoothScroll(document.getElementById('second'))">Linen Shirts</a></li>
                                            <li><a onclick="smoothScroll(document.getElementById('second1'))">Linen Pants</a></li>
                                            <li><a onclick="smoothScroll(document.getElementById('third'))">Linen Kurtas</a></li>
                                        </ul>
                                    </li>
                                    <li><a>Accesories</a>
                                        <ul class="dropdown">
                                            <li><a onclick="smoothScroll(document.getElementById('second'))">Leather Bags</a></li>
                                            <li><a onclick="smoothScroll(document.getElementById('second1'))">Leather Belts</a></li>
                                            <li><a onclick="smoothScroll(document.getElementById('third'))">Leather Chappals</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Speciality.html">Speciality</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a onclick="smoothScroll(document.getElementById('contact'))">Contact</a></li>
                                </ul>

                                <!-- Top Social Info -->
                                <div class="top-social-info ml-5">
                                    <a href="https://www.facebook.com/Pudhari-Store-2028937400488832/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/pudharistore"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/PudhariStore"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/channel/UCha1_OyYCZUbyY8g4b1ahTQ"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text">
                              <!--  <h2 data-animation="fadeInUp" data-delay="300ms"><span>Digital Agency</span><br>of the year 2019</h2>
                                <h4 data-animation="fadeInUp" data-delay="500ms">Visual Identity by John Doe Client: <span>Lorem ipsum</span></h4>
                                <a href="#" class="btn pixel-btn mt-50" data-animation="fadeInUp" data-delay="700ms">View Project</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text">
                                <!--<h2 data-animation="fadeInUp" data-delay="300ms"><span>Creative Agency</span><br>of the year 2019</h2>
                                <h4 data-animation="fadeInUp" data-delay="500ms">Visual Identity by John Doe Client: <span>Lorem ipsum</span></h4>
                                <a href="#" class="btn pixel-btn mt-50" data-animation="fadeInUp" data-delay="700ms">View Project</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top-catagory-area d-flex flex-wrap">
        <!-- Single Catagory -->
        <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/bg-img/3.jpg);">
            <a href="#">Agency</a>
        </div>
        <!-- Single Catagory -->
        <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/bg-img/4.jpg);">
            <a href="#">What We Do?</a>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### Newsletter Area Start ###### -->
    <section class="nl-area section-padding-100-0" style="background-color: #172e58;">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-9">
                    <div class="nl-form mb-100">
                        <h4>Driving Clothing Distinction</h4>
            </div>
        </div>
    </section>
                    <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wMrMV8GtbGs" frameborder="0" allowfullscreen></iframe>
                    </div>
    
    <!-- ##### Newsletter Area End ###### -->

    <!-- ##### Portfolio Area Start ###### -->
    <div class="pixel-portfolio-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Best Selling</h2>
                        <img src="img/core-img/x.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Menu -->
        <div class="pixel-projects-menu wow fadeInUp" data-wow-delay="200ms">
            <div class="text-center portfolio-menu">
                <button class="btn active" data-filter="*" >All Collection</button>
                <button class="btn" data-filter=".visual" >Linen Shirts</button>
                <button class="btn" data-filter=".add" >Linen Pants</button>
                <button class="btn" data-filter=".web" >Linen Kurtas</button>
                <button class="btn" data-filter=".car" >Leather Bags</button>
                <button class="btn" data-filter=".van" >Leather Belts</button>
                <button class="btn" data-filter=".man" >Leather Chappals</button>
            </div>
        </div>

        <div class="pixel-portfolio">

            <!-- Single gallery Item -->
            <div class="single_gallery_item visual wow fadeInUp" data-wow-delay="0.2s">
                <img src="img/bg-img/5.jpg" alt="" id="second">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="img/bg-img/5.jpg"></a>
                        <h4>Linen Kurtas</h4>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="single_gallery_item add wow fadeInUp" data-wow-delay="0.4s">
                <img src="img/bg-img/6.jpg" alt="" id="second1">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="img/bg-img/5.jpg"></a>
                        <h4>Linen Kurtas</h4>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="single_gallery_item web wow fadeInUp" data-wow-delay="0.6s">
                <img src="img/bg-img/7.jpg" alt="" id="third">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="img/bg-img/5.jpg"></a>
                        <h4>Linen Kurtas</h4>
                    </div>
                </div>
            </div>

            <div class="single_gallery_item car wow fadeInUp" data-wow-delay="0.6s">
                <img src="img/bg-img/7.jpg" alt="" id="third">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="img/bg-img/5.jpg"></a>
                        <h4>Linen Kurtas</h4>
                    </div>
                </div>
            </div>

            <div class="single_gallery_item van  wow fadeInUp" data-wow-delay="0.6s">
                <img src="img/bg-img/6.jpg" alt="" id="third">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="img/bg-img/5.jpg"></a>
                        <h4>Linen Kurtas</h4>
                    </div>
                </div>
            </div>

            <div class="single_gallery_item man wow fadeInUp" data-wow-delay="0.6s">
                <img src="img/bg-img/5.jpg" alt="" id="third">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="img/bg-img/5.jpg"></a>
                        <h4>Linen Kurtas</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- ##### Contact Area Start #####-->
<div class="row">
    <div class="col-sm-6">
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row">    
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Get In Touch</h2>
                        <img src="img/core-img/x.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Contact Form -->
                    <div class="contact-form-area text-center">
                        <form  method="post">
                            <input type="text" name="name" class="form-control wow fadeInUp" data-wow-delay="100ms" placeholder="Name">
                            <input type="email" name="email" class="form-control wow fadeInUp" data-wow-delay="300ms" placeholder="E-mail">
                            <input type="text" name="subject" class="form-control wow fadeInUp" data-wow-delay="500ms" placeholder="Subject">
                            <textarea name="message" class="form-control wow fadeInUp" data-wow-delay="700ms" placeholder="Message"></textarea>
                            <button type="submit" name="submit" class="btn pixel-btn wow fadeInUp" data-wow-delay="900ms" id="demo" onclick="showAlert()" >Send Message</button>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="col-sm-6">
        <div>
            <div class="row" >
                  <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-1by1">
                      <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236.49607069838657!2d73.79594616804518!3d18.48650671786363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfd5fd6b8e6d%3A0x84f35a0ed6597dea!2sSaraswat+Bank+and+ATM!5e0!3m2!1sen!2sin!4v1554115580242!5m2!1sen!2sin" frameborder="0" style="border: 0; height:  50rem;" allowfullscreen></iframe>
                    </div>
                  </div>
            </div>
        </div>
</div>
</div>
    <!-- ##### Contact Area End #####-->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0" style="background-color: #172e58;">
        <div class="container-fluid">
            <div class="row justify-content-between">

               <!--  Single Footer Widget--> 
                <div class="col-12 col-sm-6 col-md-3" id="contact">
                    <div class="single-footer-widget mb-100">
                        <a class="footer-logo"><img src="img/bg-img/1.jpg" alt=""></a>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-9 col-lg-8 col-xl-7" >
                    <div class="row" id="contact">
                        <!-- Single Footer Widget -->
                        <div class="col-sm-4">
                            <div class="single-footer-widget mb-100">
                                <h5 class="widget-title">Address</h5>
                                <p>Shop no. 2, spark avenue building, opposite of McDonald, next to Saraswat bank, Warje, Pune, Maharashtra.
                                    Pune, Maharashtra</p>
                            </div>
                        </div>

                        <!-- Single Footer Widget -->
                        <div class="col-sm-4">
                            <div class="single-footer-widget mb-100">
                                <h5 class="widget-title">Support</h5>
                                <p><i class="fa fa-phone" style="margin-top: 30px;"></i><br> 020 2521 5050</p>
                            </div>
                        </div>

                        <!-- Single Footer Widget -->
                        <div class="col-sm-4">
                            <div class="single-footer-widget mb-100">
                                <h5 class="widget-title">Social</h5>
                                <div class="footer-social-info">
                                    <a href="https://www.facebook.com/Pudhari-Store-2028937400488832/" ><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/pudharistore"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/PudhariStore"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/channel/UCha1_OyYCZUbyY8g4b1ahTQ"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="copywrite-content">
                            <!-- Copywrite Text -->
                            <p class="copywrite-text" style="color: #172e58;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" style="color: #172e58;">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>

<p class="copywrite-text" ><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pudhari Fashion All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.github.com/akashsahay">Akash</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>



<?php 
$name="";
$email="";
$subject="";
$message="";




$con = mysqli_connect("localhost","root","","test");
// Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if(isset($_POST["submit"])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message']; 
    $sql = "INSERT INTO `studdb` (name, email, subject, message) VALUES('$name','$email','$subject','$message')"; 
    if (mysqli_query($con, $sql)=== true) {          
    echo "";            
    }else
    {              
    echo "";            
    }            
    $con->close();         
    }
?>


<!-- add the alert box below the button to show alert box below the button-->