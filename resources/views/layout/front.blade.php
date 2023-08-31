<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags | animate.css | preloader | margin-padding | responsive 
| settings | layers | navigation | skin-green | themepunch js | -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8">
    <!-- Page Title -->
    <title>@yield('title')</title>
    <!-- Favicon and Touch Icons -->
    <link href="images/lgicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{asset('front_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front_assets/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front_assets/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front_assets/css/css-plugin-collections.css')}}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{asset('front_assets/css/menuzord-rounded-boxed.css')}}" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{asset('front_assets/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('front_assets/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('front_assets/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('front_assets/css/responsive.css')}}" rel="stylesheet" type="text/css">
    
    

    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <!-- CSS | Theme Color -->
    <link href="{{asset('front_assets/css/theme-skin-greens.css')}}" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="{{asset('front_assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('front_assets/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{asset('front_assets/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.themepunch.revolution.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Dela Gothic One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alexandria' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/css/uikit.min.css" />
    <style>
        .menuzord-menu>li>a {
            border-radius: 20px !important;
        }

        body {
            font-family: 'Raleway';
        }

        .nf {
            font-family: 'Teko';
            font-weight: 600 !important;
        }

        h4 {
            font-family: 'Teko';
            font-weight: bolder;
        }

        h3 {
            font-family: 'Teko';
            font-weight: bolder;
        }
        .teko{
            font-family:'Teko';
        }

        /* p{
    font-family: 'Trirong', serif;
    font-weight: 500;
    line-height: 1.42857143;
} */

        p {
            font-family: 'Raleway';
            font-weight: 600;
        }

        .btn-success {
            padding: 3px 10px 3px 10px;
            background-color: #120147;
            border: 2px solid #120147;
            border-radius: 20px;
            font-weight: 500;
            font-size: 15px;
        }

        .btn-success:hover {
            padding: 3px 10px 3px 10px;
            background-color: #ffcc00;
            border: 2px solid #ffcc00;
            border-radius: 20px;
            font-weight: 500;
            font-size: 15px;
        }

        .btn-outline-success {
            padding: 3px 10px 3px 10px;
            background-color: #ffcc00;
            color: #120147;
            border: 2px solid #120147;
            border-radius: 20px;
            font-weight: 500;
            font-size: 15px;
        }

        .btn-outline-success:hover {
            padding: 3px 10px 3px 10px;
            background-color: #120147;
            color: #fff;
            border: 2px solid #120147;
            border-radius: 20px;
            font-weight: 500;
            font-size: 15px;
            transition: all;
        }

        
        .text-white {
            color: white;
        }

        .text-blue {
            color: #120147 !important;
        }

        @media all and (min-width: 480px) {
            .deskContent {
                display: block;
            }

            .phoneContent {
                display: none;
            }
        }

        @media all and (max-width: 479px) {
            .deskContent {
                display: none;
            }

            .phoneContent {
                display: block;
            }
        }
    </style>


    <style>
        

        .section-header {
            margin-top: 20px;
            margin-bottom: 10px;
            position: relative;
            display: flex;
            /* sets a flex container */
            align-items: center;
            /* aligns vertically */
        }

        .section-header h2 {
            border: 2px solid #120147;
            background-color: #120147;
            color: #fff;
            padding: 0.1em 0.7em;
            display: inline-block;
            border-radius: 20px;
            /* margin: 0 1em; space between h2 and line if needed */
            margin: 0 em;
        }

        .section-header::before,
        .section-header::after {
            border-top: 1px solid #120147;
            display: block;
            height: 1px;
            content: " ";
            width: 100%;
            /* full-width ;)*/
            /* top: 0.9em; */
            margin-top: 0.9em;
        }

        .text-center {
            text-align: center !important;
        }
    </style>

    <style>
        .section-header2 {
            position: relative;
            display: flex;
            /* sets a flex container */
            align-items: center;
            /* aligns vertically */
        }

        .section-header2 h2 {
            border: 2px solid #120147;
            color: #120147;
            padding: 0.1em 0.7em;
            display: inline-block;
            border-radius: 20px;
            /* margin: 0 1em; space between h2 and line if needed */
            margin: 0 em;
        }

        .section-header2::after {
            border-top: 1px solid #120147;
            display: block;
            height: 1px;
            content: " ";
            width: 100%;
            
            margin-top: 0.9em;
        }

        .naki {
            height: 35px;
            border-radius: 20px;
        }
        .clr{
            color:#f0aa2a;
        }
        .bg-clr{
            background-color:#f0aa2a;
        }
    </style>

</head>

<body class="" style="overflow-x:hidden;">
    <div id="wrapper" class="clearfix">
        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-black-333 sm-text-center border-top-theme-color-5px p-0" style="background-color:#c23820 !important;">
                <div class="container" style="padding-top: 1px !important; padding-bottom: 1px !important;">
                    
                </div>

                </div>
            </div>
            <style>
            @media only screen and (max-width: 768px) {
                #logo {
                    margin-left: 0px;
                }
            }
            @media only screen and (min-width: 992px) {
                #logo {
                    
                }
            }
            </style>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white" style="background-color: white;">
                    <div class="container" style="padding-top: 1px !important; padding-bottom: 1px !important;">
                        <nav id="menuzord-right" class="menuzord default">
                            
                            <a href="/">
                                <img src="{{asset('front_assets/images/global.jpeg')}}" id="logo" style="margin-top:10px;margin-bottom:10px;height:80px;width:auto;" alt="vap" />
                            </a>
                            <ul class="menuzord-menu">

                                <li><a href="/"><b>HOME</b></a></li>
                                <li><a href="#"><b>ABOUT US</b></a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/about')}}">About Company</a></li>
                                        <li><a href="{{url('/')}}">Vision and Mission</a></li>
                                        <li><a href="{{url('/')}}">About Policy</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="#"><b>ACADEMICS</b></a>
                                    <ul class="dropdown">
                                        <li><a href="#">PROGRAMME</a>
                                            <ul class="dropdown">
                                                <li><a href="{{url('/mba')}}">MBA</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">ACADEMIC ADVISORY BOARD</a></li>
                                        <li><a href="{{asset('front_assets/pdf/Academic Calender.pdf')}}">ACADEMIC CALENDAR</a></li>
                                        <li><a href="{{url('/syllabus')}}">SYLLABUS</a></li>
                                        <li><a href="">STUDY MATERIAL</a></li>
                                        <li><a href="{{url('/faculty-member')}}">FACULTY MEMBERS</a></li>
                                        <li><a href="">EXAMINATIONS</a></li>
                                        <li><a href="">NOTICES</a></li>
                                        <li><a href="">DISTINGUISHED LECTURE SERIES</a></li>
                                        <li><a href="{{url('/value-added-course')}}">VALUE ADDED COURSES</a></li>
                                    </ul>
                                </li> -->
                                <li class="menu-head"><a href=""><b>SERVICES</b></a>
                                <ul class="dropdown">
                                        <li><a href="{{url('/')}}">Air Quality Monitoring</a></li>
                                        <li><a href="{{url('/')}}">Waste Water Testing</a></li>
                                        <li><a href="{{url('/')}}">Water Testing</a>
                                        <li><a href="{{url('/')}}">Stack Monitoring</a>
                                        <li><a href="{{url('/hostel')}}">Medical Loan</a>
                                        <li><a href="{{url('/hostel')}}">StartUp Loan</a>
                                        
                                    </ul>
                                </li>
                                <li class="menu-head"><a href="#"><b>TESTING</b></a>
                                </li>
                                 
                                <li class="menu-head"><a href=""><b>QUALITY</b></a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/')}}">Air Quality</a></li>
                                        <li><a href="{{url('/')}}">Water Quality</a></li>
                                    </ul>
                                </li>
                               
                                <li class="menu-head"><a href=""><b>LATEST NEWS</b></a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('/')}}">Investment</a></li>
                                        <li><a href="{{url('/')}}">Documents Required</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="menu-head"><a href="/contact"><b>CONTACT</b></a>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </header>
        @yield('content')

        <style>
        @media only screen and (max-width: 768px) {
            #enroll-btn{
                cursor: pointer;
        border: 1px solid #3498db;
        background-color: transparent;
        margin-top:30px;
        height: 50px;
        width: 150px;
        color: #3498db;
        font-size: 1.5em;
        box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);
            }
        }
        @media only screen and (min-width: 992px) {
            #enroll-btn{
                cursor: pointer;
        border: 1px solid #3498db;
        background-color: transparent;
        height: 50px;
        width: 200px;
        color: #3498db;
        font-size: 1.5em;
        box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);
            }
        }
        </style>
        

    

        <!-- -----------------End Testimonials------------------- -->
        <footer id="footer" class="footer pt-70" style="background-color: #444349;">
            <style>
                .list li a {
                    color: white;
                }

                .list-inline a {
                    color: white;
                }
            </style>
            <div class="container">
                <div class="row border-bottom-black">

                <div class="col-md-4">
                        <div class="widget dark">
                            <div style="text-align:center;"><img class="mt-2 mb-2 img-fluid" alt="vap" style="width:40%;" src="{{asset('front_assets/images/global.jpeg')}}" ></div>
                            <p style="font-size:17px;color:#ccc;">The staff was wonderful! We had a very fun time in the city. I can't say enough nice things about the staff.</p>
                            <ul class="social-icons icon-dark icon-theme-colored icon-circled icon-sm mt-15">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>

                    

                    <div class="col-md-4">
                        <div class="widget dark">
                            <h5 class="widget-title teko" style="color: white;font-size:38px;">CONTACT US</h5>
                            <div class="mt-20">
                               
                               <p><i class="fa fa-phone clr mr-20" style="font-size:28px;"></i><span class="" style="font-size:18px;color:#ccc;">+91-870-456-22</span></p>
                               <p><i class="fa fa-envelope clr mr-20" style="font-size:28px;"></i><span class="" style="font-size:18px;color:#ccc;">info@gsyn.org</span></p>
                               <p><i class="fa fa-map-marker clr mr-20" style="font-size:28px;"></i><span class="" style="font-size:17px;color:#ccc;">Plot No- 6B, Knowledge Park II, Greater Noida (UP)</span></p>
                            </div>
                        </div>
                    </div>

<style>
   #link{color:#f0aa2a;padding-left:20px;}
   
</style>
                    <div class="col-md-4">
                        <div class="widget dark">
                            <h5 class="widget-title teko" style="color: white;font-size:38px;">QUICK LINKS</h5>
                            <div class="row m-0" style="display:flex;flex-wrap:wrap;">
                               <div class="col-6" style="width:50%;">
                                  <p><i class="fa fa-circle mr-20 clr"></i><span style="font-size:17px;color:#ccc;">Home</span></p>
                               </div>
                               <div class="col-6" style="width:50%;">
                                  <p><i class="fa fa-circle mr-20 clr"></i><span style="font-size:17px;color:#ccc;">About us</span></p>
                               </div>
                               <div class="col-6" style="width:50%;">
                                  <p><i class="fa fa-circle mr-20 clr"></i><span style="font-size:17px;color:#ccc;">Products</span></p>
                               </div>
                               <div class="col-6" style="width:50%;">
                                  <p><i class="fa fa-circle mr-20 clr"></i><span style="font-size:17px;color:#ccc;">Blog</span></p>
                               </div>
                               <div class="col-6" style="width:50%;">
                                  <p><i class="fa fa-circle mr-20 clr"></i><span style="font-size:17px;color:#ccc;">Gallery</span></p>
                               </div>
                            </div>
                            <div class="text-center p-10" style="border:3px solid #ccc; width:70%;">
                                <span class="teko" style="color:#ccc;font-size:30px;">GET IN TOUCH</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="footer-bottom" style="background-color:#3b3a3d !important;">
                <div class="pt-15 pb-15">
                    <div style="text-align:center;">
                        <b class="font-9 m-0 sm-text-center" style="color:#ccc;font-weight:400;">Copyright &copy; 2023
                            and Designed By <a href="https://www.livetechservices.in/" style="color:#c23820;">LTS</a>. All
                            Rights Reserved</b>
                    </div>
                </div>
            </div>
        </footer>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->
    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="{{asset('front_assets/js/custom.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
    <!-- <script type="text/javascript" src="{{asset('front_assets/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/extensions/revolution.extension.video.min.js')}}"></script>
     -->
    <!-- UIkit JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit-icons.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({offset: 150,easing: 'ease', delay: 200,});
  </script>

</body>

</html>