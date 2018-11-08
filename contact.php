<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- PAGE TITLE -->
    <title>Contact</title>
    <!-- FavIcon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-16x16.png" sizes="16x16">

    <!-- META-DATA -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS:: FONTS -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS:: BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- CSS:: ANIMATION -->
    <link rel="stylesheet" href="assets/css/animate.css"> 
    <!-- CSS:: OWL -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css"> 
    <!-- CSS:: -->
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    <div class="y-inner_page y-contact"> 
        <div class="y-inner_header">
          <div class="header y-header_outer">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-2">
                        <a href="index.php" class="y-logo"><img src="assets/images/logo3.png" alt=""></a> 
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 wow fadeInDown text-center" data-wow-duration="1s"> 
                      <div class="y-top_info_part">
                        <ul class="y-login_but text-right ">
                          <li><a href="tel:+30 6944 971 411"> +30 6944 971 411</a></li>
                          <!--<li><a href="contact.html">Sign In</a></li>
                          <li><a href="contact.html">Sign Up</a></li> 
                          <li><a href="contact.html"><i class="material-icons">shopping_cart</i></a></li>-->
                        </ul>
                        <div class="y-social">
                            <a target="_blank" class="y-fb fa fa-facebook" href="https://www.facebook.com"></a>
                            <a target="_blank" class="y-insta fa fa-instagram" href="https://www.instagram.com"></a>
                            <a target="_blank" class="y-tw fa fa-twitter" href="https://www.twitter.com"></a>
                            
                            <!--<a class="y-linkd fa fa-linkedin" href="www.linkedin.com"></a>
                            <a class="y-gp fa fa-google-plus" href="www.mail.google.com"></a>
                            <a class="y-yt fa fa-youtube" href="www.youtube.com"></a>    -->                        
                            
                        </div>
                      </div>
                      <div class="y-menu_outer wow fadeInDown" data-wow-duration="2s">
                        <div class="rmm style">
                          <ul>
                            <li>
                              <a href="index.php">Home</a>
                            </li>
                            <li>
                              <a href="charter_listing.html">For Charter</a>
                              <!--<ul> 
                                <li><a href="charter_listing.html">Charter Listing</a></li>
                                <li><a href="charter_single.html">Single Charter</a></li>
                              </ul>-->
                            </li>
                            <!--<li>
                              <a href="sale_listing.html">For Sale</a>
                              <ul>
                                <li><a href="sale_listing.html">Sale Listing</a></li>
                                <li><a href="sale_single.html">Single Product</a></li>
                              </ul>
                            </li>-->
                            <li>
                              <a href="destination_listing.html">Destination</a>
                              <!--<ul>
                                <li><a href="destination_listing.html">Destination Listing</a></li>
                                <li><a href="destination_single.html">Single Destination</a></li>
                              </ul>-->
                            </li>
                            <!--<li>
                              <a href="post_listing.html">Blog</a>
                              <ul>
                                <li><a href="post_listing.html">Blog Listing</a></li>
                                <li><a href="post_single.html">Single Blog</a></li>
                              </ul>
                            </li>-->
                            <li>
                              <a href="contact.php">Contact</a>
                              <!--<ul>
                                <li><a href="contact_01.html">Contact I</a></li>
                                <li><a href="contact_02.html">Contact II</a></li>
                                <li><a href="contact_03.html">Contact III</a></li>
                              </ul> -->
                            </li> 
                            <li>
                              <a href="about.html">About</a>
                            </li>                              
                          </ul>
                        </div>
                      </div>  
                    </div>  
                </div>
            </div>
          </div> 
        </div>   
          <div class="y-inner_banner">
            <img src="assets/images/contact_01_bg.jpg" class="img-repsonsive" alt="">
          </div> 
        <section id="y-single_info">
          <div class="y-single_info">
            <div class="container">
                <div class="row y-single_info_inner y-section_content">
                    <div class="col-lg-12 clearfix">
                      <div class="y-breadcrum clearfix wow fadeInDown" data-wow-delay=".9s">
                         <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12"> 
                            <h1 class="y-heading">Contact Us</h1> 
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12"> 
                           <ul class="pull-right">
                             <li><a href="index.php">Home</a></li>
                             <li><span>Contact Us</span></li>
                           </ul> 
                         </div>
                      </div>
                    </div> 
                        <?php
                            if(isset($_POST['send'])){ 

                                //$msg = $_POST['messagetxt'];
                                //$subject = $_POST['subject'];
                                //$email=$_POSt['mail'];
                                    $headers  = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
                                    $headers .= "From: ". $from. "\r\n";
                                    $headers .= "Reply-To: ". $from. "\r\n";
                                    $headers .= "X-Mailer: PHP/" . phpversion();
                                    $headers .= "X-Priority: 1" . "\r\n"; 

                                $status= mail("a.moussa@mediaengagers.com", "heheh", "hahah", $headers);  
                                if($status){
                                    ?>
                                        <script>
                                            confirm("Your email has been sent")
                                        </script>         
                                        <?php                          
                                }else{
                                    ?>
                                        <script>
                                            confirm("Your email has been sent")
                                        </script>         
                                    <?php        
                                }                                
                            }
                            ?>
                    <div class="col-sm-12 clearfix">
                        <div class="y-contact clearfix">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                <div class="y-contact_form">
                                     <iframe src="https://static.parastorage.com/services/santa/1.4861.17/static/external/googleMap.html?language=en&lat=37.911841&long=23.724606600000016&address=Alimos, Greece&addressInfo=Cedarsails Yacht Charter&showZoom=false&showStreetView=false&showMapType=false"  width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>                                
                                <div class="y-contact_form">
                                    <form method ="POST" class="y-form">
                                        <input type="text" placeholder="Name" required>
                                        <input type="Email" name="mail" placeholder="Email" required>
                                        <input type="text" name="subject" placeholder="Subject" required>
                                        <textarea name="message" name="messagetxt" placeholder="Message" required></textarea>
                                        <button name="send" class="y-button">Submit</button>
                                    </form>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right y-contact_side">
                                <div>
                                    <h3><i class="material-icons">perm_phone_msg</i> GET IN TOUCH</h3>
                                    <address>Alimos, Greece</address>
                                    <address>
                                        <span>Any help:</span> <a target="_self" href="mailto:info@cedarsails.com">info@cedarsails.com</a><br>
                                        <span>Work with us:</span> <a target="_self" href="mailto:info@cedarsails.com">info@cedarsails.com</a><br>
                                    </address> 
                                    <address>
                                        <span title="Phone">Phone:</span> <a href="tel:+4401234567890">+30 6944 971 411</a>
                                        <!--<br>
                                        <span title="Mobile">Mobile:</span> <a href="tel:+4401234567890">+30 6944 971 411</a>
                                        <br>
                                        <span title="Fax">Fax:</span> <a href="tel:+4401234567890">+961-6-123456</a>-->
                                    </address>
                                </div><!--
                                <div> 
                                    <h3><i class="material-icons">alarm_on</i> WORKING HOURS</h3>
                                    <ul>
                                        <li><span>Monday:</span><span> 8am to 5pm</span></li>
                                        <li><span>Tuesday:</span><span> 8am to 5pm</span></li>
                                        <li><span>Wednesday:</span><span> 8am to 5pm</span></li>
                                        <li><span>Thursday:</span><span> 8am to 5pm</span></li>
                                        <li><span>Friday:</span><span> 8am to 5pm</span></li>
                                        <li><span>Weekend:</span><span> Closed</span></li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </section>  
        <footer id="y-footer">
            <div class="y-footer">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <h5><i class="material-icons">perm_phone_msg</i> <span>Contact Us</span></h5>
                            <p>Cedar Sails
                                <br>Alimos, Greece</p>
                            <p>
                                <a href="tel:+30 6944 971 411"> +30 6944 971 411</a>
                                <br>
                                <a href="mailto:info@cedarsails.com">info@cedarsails.com/a>
                            </p>
                        </div><!--
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <h5><i class="material-icons">alarm</i> <span>Working Time</span></h5>
                            <div class="y-working_time">
                                <ul>
                                    <li><strong>Workweek:</strong><span> 8am to 5pm</span></li>
                                    <li><strong>Saturday:</strong><span> 8am to 5pm</span></li>
                                    <li><strong>Sunday:</strong><span> 8am to 5pm</span></li>
                                    <li><strong>Holidays:</strong><span> 8am to 5pm</span></li>
                                </ul>
                            </div>
                        </div>-->
                        <!--
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <h5><i class="material-icons">mood</i> <span>Special Offers</span></h5>
                            <div class="y-special_offer">
                                <ul>
                                    <li>
                                        <a href="contact_01.html#">Special offer for you</a>
                                        <p>We are constantly working to offer you the best value for money we can.</p>
                                        <a href="contact_01.html#" class="y-read_more">Read More</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <h5><i class="material-icons">help</i> <span>Need Help?</span></h5>
                            <div class="y-need_help">
                                <ul>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Payment options</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="y-footer_strip">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <p class="text-left">
                                    Copyright 2018 Media Engagers, all rights reserved.
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 y-social_links">
                                <p>
                                    <a href="www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                    <a href="www.twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                    <a href="instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="y-back_to_top" id="y-back_to_top">
          <i class="fa fa-anchor"></i>
        </div>
        <div class="y-line"></div>  

    </div>
    <!-- JQUERY:: JQUERY.MIN.JS -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <!-- JQUERY:: WOW.JS -->
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <!-- JQUERY:: MENU.JS -->
    <script type="text/javascript" src="assets/js/responsivemultimenu.js"></script>
    <!-- JQUERY:: SKROLLER.JS -->
    <script type="text/javascript" src="assets/js/skrollr.min.js"></script> 
    <!-- JQUERY:: OWL.JS -->
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>  
    <!-- JQUERY:: MAP.JS-->
     <script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
    <script type="text/javascript" src="assets/js/map.js"></script>
    <!-- CUSTOM:: CUSTOM.JS -->
    <script type="text/javascript" src="assets/js/custom.min.js"></script>
</body>

</html>
