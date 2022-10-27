<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="author" content="tansh">
<meta name="description" content="HTML Teamplate">
<meta name="keywords" content="start up, business, one page">

<!-- FAVICON FILES -->
<link href="assets/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="assets/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120">
<link href="assets/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76">
<link href="assets/images/icons/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/iconfonts.css">
<link rel="stylesheet" href="assets/css/plugins.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/color.css">
</head>
<body>
<div id="dtr-wrapper" class="clearfix"> 
    
    <!-- preloader starts 
    <div class="dtr-preloader">
        <div class="dtr-preloader-inner">
            <div class="dtr-preloader-img"></div>
        </div>
    </div>
     preloader ends --> 
    
    <!-- Small Devices Header 
============================================= -->
    <div class="dtr-responsive-header fixed-top">
        <div class="container"> 
            
            <!-- small devices logo --> 
            <a href="index.html"><h1>{{ config('app.name', 'Laravel') }}</h1></a> 
            <!-- small devices logo ends --> 
            
            <!-- menu button -->
            <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
        </div>
        <div class="dtr-responsive-header-menu"></div>
    </div>
    <!-- Small Devices Header ends 
============================================= --> 




  @yield('content')
  
      
        <!-- footer section starts
================================================== -->
        <footer id="dtr-footer">
            <div class="container"> 
                
                <!--== row starts ==-->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-sm-6 col-lg-5 small-device-space"> <img src="assets/images/logo-light.png" alt="image" class="dtr-mb-30">
                        <p class="dtr-mb-30">Get AI-assisted services for<br>
                            smooth workflow.</p>
                        <p>© 2020 Ainotion by Tansh</p>
                        
                        <!-- social starts -->
                        <div class="dtr-social-square dtr-mt-20">
                            <ul class="dtr-social dtr-social-list text-left">
                                <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                <li><a href="#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                                <li><a href="#" class="dtr-google" target="_blank" title="google"></a></li>
                            </ul>
                        </div>
                        <!-- social ends --> 
                        
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-sm-6 col-lg-2 small-device-space">
                        <h5>Quick Links</h5>
                        <ul class="dtr-list">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Use Cases</a></li>
                            <li><a href="#">Integrations</a></li>
                            <li><a href="#">Ainotion API</a></li>
                        </ul>
                    </div>
                    <!-- column 2 ends --> 
                    
                    <!-- column 3 starts -->
                    <div class="col-12 col-sm-6 col-lg-2 small-device-space">
                        <h5>Company</h5>
                        <ul class="dtr-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">news & Articles</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <!-- column 3 ends --> 
                    
                    <!-- column 4 starts -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h5>Contact Us</h5>
                        <p>3245 East Creek Blvd, Suite 590, Bos Boomer, AU 20076</p>
                        <p><a href="#"><i class="icon-envelope dtr-mr-5 color-blue"></i> sayhello@example.com</a></p>
                        <p><i class="icon-phone-alt dtr-mr-5 color-blue"></i> 90 1234 56 78</p>
                    </div>
                    <!-- column 4 ends --> 
                    
                </div>
                <!--== row ends ==--> 
                
            </div>
        </footer>
        <!-- footer section ends
================================================== --> 
        
    </div>
    <!-- == main content area ends == --> 
    
</div>
<!-- #dtr-wrapper ends --> 

<!-- JS FILES --> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/plugins.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>