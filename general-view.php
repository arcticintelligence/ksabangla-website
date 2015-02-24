<?php
error_reporting(0);
?>

<?php
    $file_data = file_get_contents('formdata.txt', FILE_USE_INCLUDE_PATH);
    $file_data_array = explode("|=|", $file_data); //create array separate by new line
    //print_r($file_data_array); die;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Airbell:.</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Airbell</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
<!--                    <li class="page-scroll">
                        <a href="#portfolio">Rates</a>
                    </li>-->
<!--                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>-->
                    <li class="page-scroll">
                        <a href="http://62.75.202.95:8080/">Customer Login</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://62.75.202.95:8080/VSR">Reseller login</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row visible-xs ex-login-menu">
                <div class="col-xs-5 col-xs-offset-1"><a href="http://62.75.202.95:8080/" class="menu-button"><strong>Customer Login</strong></a></div>
                <div class="col-xs-5"><a href="http://62.75.202.95:8080/VSR" class="menu-button"><strong>Reseller login</strong></a></div>
            </div>
            <div class="row hidden-xs">
                <div class="col-lg-12">
                    <!--<img class="img-responsive" src="img/dialer_logo.png" alt="">-->
                    <div class="row">
                        <div class="col-md-3 col-md-offset-2">
                            <a href="#" data-toggle="dropdown">
                                <img class="img-responsive" src="img/pc2phn_ho.png" alt="">                                
                            </a>
                            
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $file_data_array[1] ?>"> Itel  [OC: 31719] </a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $file_data_array[2] ?>"> MoSIP [OC 1050 ] </a></li>
                            </ul>
                            
                        </div>
                        <div class="col-md-7  page-scroll">
                            <a href="#mobile-dialer"><img class="img-responsive" src="img/modlr_hom.png" alt=""></a>
                        </div>
                    </div>
                    <div class="intro-text">
                        <span class="name">Airbell Dialer</span>
                        <hr class="star-light">
                        <span class="skills">Stay connecte with friends and family around the world at cheap rates</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

     <!-- Mobile dialer Grid Section -->
    <section id="mobile-dialer">
        <div class="container">
            <div class="row hidden-xs">
                <div class="col-lg-12 text-center">
                    <h2>Mobile Dialer</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row hidden-xs">
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/symbian.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/amdroid2.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/iphone.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/blackberry.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-3 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/windows.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
                 
            <ul class="dialer-list visble-xs hidden-sm hidden-md hidden-lg">
                <li>
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="dialer-list-item">
                            <img width="90" height="90" src="img/portfolio/symbian_small.jpg" alt="" />
                            <span><strong>NOKIA DIALER</strong></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="dialer-list-item">
                            <img width="90" height="90" src="img/portfolio/amdroid2_small.jpg" alt="" />
                            <span><strong>ANDROID DIALER</strong></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="dialer-list-item">
                            <img width="90" height="90" src="img/portfolio/iphone_small.jpg" alt="" />
                            <span><strong>IPHONE DIALER</strong></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="dialer-list-item">
                            <img width="90" height="90" src="img/portfolio/blackberry_small.jpg" alt="" />
                            <span><strong>BLACKBERRY DIALER</strong></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="dialer-list-item">
                            <img width="90" height="90" src="img/portfolio/windows_small.jpg" alt="" />
                            <span><strong>WINDOWS DIALER</strong></span>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </section>
    
     <!-- Portfolio Grid Section -->
<!--    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Rates</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                
                
                <div class="col-sm-9 col-sm-offset-3 bs-example">
   
                    Default buttons with dropdown menu
                    <div class="btn-group">
                        <img src="img/india.png" class="img-responsive" alt="">
                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Minutes <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#"> 91 : 750min </a></li>
                            <li class="divider"></li>
                            <li><a href="#"> 0091 : 750min </a></li>
                        </ul>
                    </div>
                Primary buttons with dropdown menu
                <div class="btn-group">
                    <img src="img/pak.png" class="img-responsive" alt="">
                    <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Minutes <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#"> 92 : 400min </a></li>
                        <li class="divider"></li>
                        <li><a href="#"> 0092 : 300 min </a></li>
                    </ul>
                </div>
                Info buttons with dropdown menu
                <div class="btn-group">
                    <img src="img/bang.png" class="img-responsive" alt="">
                    <button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Minutes <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#"> 01 : 650 min </a></li>
                        <li class="divider"></li>
                        <li><a href="#"> 8801 : 600min </a></li>
                        <li class="divider"></li>
                        <li><a href="#"> 008801 : 600min </a></li>
                    </ul>
                </div>

                
            </div>
                
                
                
            </div>
        </div>
    </section>-->

    <!-- About Section -->
<!--    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit augue eget sapien porta, non porttitor augue porttitor. Sed at porttitor turpis. Fusce laoreet elementum sem eu sagittis. Donec vestibulum tortor urna, id malesuada arcu tempus id. Etiam sed auctor dolor. Nam malesuada ut lorem non ultricies. Ut accumsan, mi sit amet molestie interdum, erat arcu lacinia turpis, sit amet venenatis quam ante sit amet lectus. Pellentesque vulputate dui eu velit pulvinar, eu maximus velit tincidunt. Sed varius tincidunt elementum. Integer vitae cursus tellus, nec venenatis ipsum. Nullam ullamcorper mi a risus mattis, vitae varius neque eleifend. Fusce tincidunt turpis eros, vulputate iaculis purus pretium a. Vivamus quis porttitor diam. </p>
                </div>
                <div class="col-lg-4">
                    <p>Donec sit amet sodales purus, vel convallis quam. Quisque eu mattis mauris, in placerat arcu. Nullam sit amet placerat eros, in commodo nisi. Ut id ornare justo, vel lacinia nisi. Sed cursus molestie blandit. Morbi nibh orci, fringilla at magna vel, euismod maximus lectus. Nam a ex libero. Donec imperdiet porttitor dictum. Fusce vehicula nulla vel ligula euismod consequat. Praesent consectetur pharetra sagittis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>                
            </div>
        </div>
    </section>-->

    <!-- Contact Section -->
    <section  id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <span class="dialer-sub-item-title">Contact Us</span>
                    <!--<h2>Contact Us</h2>-->
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>

                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
<!--                        <h3>About KSABangla</h3>
                        <p>&nbsp;</p>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; airbell 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
<!--            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <span class="dialer-sub-item-title">Nokia Dialer</span>
                            <hr class="star-primary">
                            <div class="row visible-xs ex-login-menu">
                                <div class="col-xs-5 col-xs-offset-1"><a href="http://62.75.202.95:8080/" class="menu-button"><strong>Customer Login</strong></a></div>
                                <div class="col-xs-5"><a href="http://62.75.202.95:8080/VSR" class="menu-button"><strong>Reseller login</strong></a></div>
                            </div>
                            <!--<img src="img/portfolio/symbian.jpg" class="img-responsive img-centered" alt="">-->
                        
                            <ul class="list-inline1 item-details">
                                <li>
                                    <a href="<?php echo $file_data_array[3] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/world.png" alt="" />
                                            <span><strong>HelloByte [OC 30020 ]</strong></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $file_data_array[4] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/world.png" alt="" />
                                            <span><strong>Itel Dialer [OC 31719 ]</strong></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $file_data_array[5] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/world.png" alt="" />
                                            <span><strong>MoSIP [OC 1050]</strong></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $file_data_array[6] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/world.png" alt="" />
                                            <span><strong>Gplex [OC 1015]</strong></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
<!--            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <span class="dialer-sub-item-title">Android Dialer</span>
                            <hr class="star-primary">
                            <div class="row visible-xs ex-login-menu">
                                <div class="col-xs-5 col-xs-offset-1"><a href="http://62.75.202.95:8080/" class="menu-button"><strong>Customer Login</strong></a></div>
                                <div class="col-xs-5"><a href="http://62.75.202.95:8080/VSR" class="menu-button"><strong>Reseller login</strong></a></div>
                            </div>
                            <!--<img src="img/portfolio/android2.jpg" class="img-responsive img-centered" alt="">-->
                            
                            <span class="dialer-sub-item-title">Android [Google Play Store]</span>
                            <ul class="list-inline item-details">
                                <li>
                                    <a href="<?php echo $file_data_array[7] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/android.png" alt="" />
                                            <span><strong>HelloByte [OC 30020 ]</strong></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $file_data_array[8] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/android.png" alt="" />
                                            <span><strong>Itel Dialer [OC 31719 ]</strong></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $file_data_array[9] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/android.png" alt="" />
                                            <span><strong>MoSIP Platinum</strong></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $file_data_array[10] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/android.png" alt="" />
                                            <span><strong>Gplex [OC 1015]</strong></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <span class="dialer-sub-item-title">Android [Direct Download]</span>
                            <ul class="list-inline item-details">
                                <li>
                                    <a href="<?php echo $file_data_array[11] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/android.png" alt="" />
                                            <span><strong>HelloByte [OC 30020 ]</strong></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $file_data_array[12] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/android.png" alt="" />
                                            <span><strong>Itel Dialer [OC 31719 ]</strong></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $file_data_array[13] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/android.png" alt="" />
                                            <span><strong>MoSIP Platinum</strong></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $file_data_array[14] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/android.png" alt="" />
                                            <span><strong>Gplex [OC 1015]</strong></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
<!--            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <span class="dialer-sub-item-title">Iphone Dialer</span>
                            <hr class="star-primary">
                            <div class="row visible-xs ex-login-menu">
                                <div class="col-xs-5 col-xs-offset-1"><a href="http://62.75.202.95:8080/" class="menu-button"><strong>Customer Login</strong></a></div>
                                <div class="col-xs-5"><a href="http://62.75.202.95:8080/VSR" class="menu-button"><strong>Reseller login</strong></a></div>
                            </div>
                            <!--<img src="img/portfolio/iphone.jpg" class="img-responsive img-centered" alt="">-->
                            <ul class="list-inline item-details">
                                <li>
                                    <a href="<?php echo $file_data_array[15] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/iphone.png" alt="" />
                                            <span><strong>Itel Dialer [OC 31719 ]</strong></span>
                                        </div>
                                    </a>
                                </li>
                                
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
<!--            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <span class="dialer-sub-item-title">Blackberry Dialer</span>
                            <hr class="star-primary">
                            <div class="row visible-xs ex-login-menu">
                                <div class="col-xs-5 col-xs-offset-1"><a href="http://62.75.202.95:8080/" class="menu-button"><strong>Customer Login</strong></a></div>
                                <div class="col-xs-5"><a href="http://62.75.202.95:8080/VSR" class="menu-button"><strong>Reseller login</strong></a></div>
                            </div>
                            <!--<img src="img/portfolio/blackberry.jpg" class="img-responsive img-centered" alt="">-->
                            <ul class="list-inline item-details">
                                <li>
                                    <a href="<?php echo $file_data_array[16] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/black.png" alt="" />
                                            <span><strong>Itel Dialer [OC 31719 ]</strong></span>
                                        </div>
                                    </a>
                                </li>                                
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
<!--            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <span class="dialer-sub-item-title">Windows Dialer</span>
                            <hr class="star-primary">
                            <div class="row visible-xs ex-login-menu">
                                <div class="col-xs-5 col-xs-offset-1"><a href="http://62.75.202.95:8080/" class="menu-button"><strong>Customer Login</strong></a></div>
                                <div class="col-xs-5"><a href="http://62.75.202.95:8080/VSR" class="menu-button"><strong>Reseller login</strong></a></div>
                            </div>
                            <!--<img src="img/portfolio/windows.png" class="img-responsive img-centered" alt="">-->
                            <ul class="list-inline item-details">
                                <li>
                                    <a href="<?php echo $file_data_array[17] ?>">
                                        <div class="dialer-list-item dialer-sub-item">
                                            <img width="36" height="33" src="img/portfolio/windows_ico.png" alt="" />
                                            <span><strong>Itel Dialer [OC 31719 ]</strong></span>
                                        </div>
                                    </a>
                                </li>                                
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
