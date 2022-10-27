@extends('layouts.index')

@section('content')
    
    <!-- Header 
============================================= -->
    <header id="dtr-header-global" class="fixed-top trans-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between"> 
                
                <!-- header left starts -->
                <div class="dtr-header-left"> 
                    
                    <!-- logo --> 
                    <a class="logo-default dtr-scroll-link" href="#home">{{ config('app.name', 'Laravel') }}</a> 
                    
                    <!-- logo on scroll --> 
                    <a class="logo-alt dtr-scroll-link" href="#home">{{ config('app.name', 'Laravel') }}</a> 
                    <!-- logo on scroll ends --> 
                    
                </div>
                <!-- header left ends --> 
                
                <!-- menu starts-->
                <div class="dtr-header-right ml-auto">
                    <div class="main-navigation dtr-menu-dark">
                        <ul class="sf-menu dtr-scrollspy dtr-nav dark-nav-on-load dark-nav-on-scroll">
                            <li> <a class="nav-link" href="#home">Acceuil</a> </li>
                            <li> <a class="nav-link" href="#about">A propos</a> </li>
                            <li> <a class="nav-link" href="{{route('create-categorie')}}">Contact</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- menu ends --> 
                
                <!-- header button starts --> 
                <a href="{{route('dashboard')}}" class="dtr-btn dtr-btn-styled btn-blue  dtr-ml-30">Administration</a> 
                <!-- header button ends --> 
                
            </div>
        </div>
    </header>
    <!-- header ends
================================================== --> 
    
    <!-- == main content area starts == -->
    <div id="dtr-main-content"> 
        
        <!-- hero section starts
================================================== -->
        <section id="home" class="dtr-section dtr-hero-section-top-padding dtr-pb-100 parallax bg-light-blue" style="background-image: url(assets/images/hero-bg.png);">
            <div class="container"> 
                
                <!--== row starts ==-->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6"> 
                        
                        <!-- Heading -->
                        <h1>Promouvoir votre business<br>
                            <span class="color-blue">One-Look</span></h1>
                        
                        <!-- Text -->
                        <p> Nous vous aidons à Promouvoir votre business grace à la plate - forme <span class="color-blue">Onesha</span> . </p>
                        
                        <!-- button --> 
                        <a href="#" class="dtr-btn dtr-btn-styled btn-green dtr-mt-10">créer votre entreprise</a> <a class="dtr-btn btn-blue dtr-icon-btn dtr-video-popup dtr-mt-10" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"><i class="icon-play1"></i></a>
                        <p class="text-size-xs dtr-mt-10">créer votre compte et profiter de nos services</p>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 small-device-space"> 
                        
                        <!--=== img slider - 1col starts ===-->
                        <div class="dtr-slick-slider dtr-img-slider-1col"> 
                            <!-- img 1 -->
                            <div> <img src="assets/images/ai-img1.png" alt="image"> </div>
                            <!-- img 2 -->
                            <div> <img src="assets/images/ai-img2.png" alt="image"> </div>
                            <!-- img 3 -->
                            <div> <img src="assets/images/ai-img1.png" alt="image"> </div>
                        </div>
                        <!--=== img slider - 1col ends ===--> 
                        
                    </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
        <!-- hero section ends
================================================== --> 
        
        <!-- logo carousel section starts
================================================== -->
        <section class="dtr-section dtr-py-50">
            <div class="container"> 
                
                <!--== row starts ==-->
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1"> 
                        
                        <!--=== img slider - 3col starts ===-->
                        <div class="dtr-slick-slider dtr-img-slider-6col"> 
                            <!-- img 1 -->
                            <div>Artisanal</div>
                            <!-- img 2 -->
                            <div> Restaurants </div>
                            <!-- img 3 -->
                            <div> Habillement</div>
                            <!-- img 4 -->
                        </div>
                        <!--=== img slider - 3col ends ===--> 
                        
                    </div>
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
        <!-- logo carousel section ends
================================================== --> 
        
        <!-- features section starts
================================================== -->
        <section id="features" class="dtr-section dtr-pt-50 dtr-pb-70">
            <div class="container"> 
                
                <!-- heading starts -->
                <div class="dtr-styled-heading text-center">
                    <h2>Why everyone loves<br>
                        Onesha</h2>
                </div>
                <!-- heading ends --> 
                
                <!--== row starts ==-->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4 dtr-img-feature">
                        <h3><span class="color-blue">1.</span> Restaurants </h3>
                        <p class="font-style-italic">Faites connaitre votre restau.</p>
                        <img src="assets/images/icon-large1.png" alt="image">
                        <p>Avec Onesha vous avez la possibilité de faire connaitre vos plats au monde entier. </p>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4 dtr-img-feature">
                        <h3><span class="color-blue">2.</span> Habillement  </h3>
                        <p class="font-style-italic">votre boutique, aux yeux du monde</p>
                        <img src="assets/images/icon-large2.png" alt="image">
                        <p>Vous avez une boutique, etaler vos produits de qualité sur onesha et 
                        recevez de la clientèle plus que vous ne l aurez imaginé. </p>
                    </div>
                    <!-- column 2 ends --> 
                    
                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4 dtr-img-feature">
                        <h3><span class="color-blue">3.</span> Artisan </h3>
                        <p class="font-style-italic">Faites connaitre votre chef doeuvre.</p>
                        <img src="assets/images/icon-large3.png" alt="image">
                        <p>Vous fabriquez des chaises, tables, produits artisanaux, Onesha vous offre la capacité d'exposé vos produits et de beneficier d'une 
                        clientèle importante</p>
                    </div>
                    <!-- column 3 ends --> 
                    
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
        <!-- features section ends
================================================== --> 
        
        <!-- cta section starts
================================================== -->
        <section class="dtr-section dtr-py-100 bg-light-blue parallax" style="background-image: url(assets/images/cta-bg.png);">
            <div class="container"> 
                
                <!--== row starts ==-->
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <p>Elargissez vos sources de revenus</p>
                        <h4>Grace à Onesha, Elargissez vos sources de revenus, tout en canalisant vos affaires.</h4>
                    </div>
                    <div class="col-12 col-md-6 text-md-right"> <a href="#" class="dtr-btn dtr-btn-styled btn-red">créer une entreprise</a> <a href="#" class="dtr-btn-flat btn-flat-blue dtr-ml-5">En savoir plus</a> </div>
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
        <!-- cta section ends
================================================== --> 
        
        <!-- about section starts
================================================== -->
        <section id="about" class="dtr-section">
            <div class="container"> 
                
               
                
                <!--== row 2 starts ==-->
                <div class="row dtr-mt-100"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6">
                        <div class="dtr-pr-30">
                            <h2>Les clients sont partout</h2>
                            <p class="dtr-mb-30">Quelle chance d'etre né dans cette période du boom electronique?
                            Aujourd'hui vos clients se trouvent partout, et pour cela avoir un compte sur Onesha, vous garantit de
                            trouver n importe quel client, ce qui augmente sans aucun doute une demande des vos produits considérables.</p>
                            <span class="dtr-tag">Restaurants</span> <span class="dtr-tag">Terrasse</span> <span class="dtr-tag">Boutique</span> <span class="dtr-tag">Dolor Sit</span> <span class="dtr-tag">Magasin</span> <span class="dtr-tag">produits</span> <span class="dtr-tag">Habillement</span> <span class="dtr-tag">Dollar</span> <span class="dtr-tag"> Artisan</span> <span class="dtr-tag">chef d'oeuvre</span> </div>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 small-device-space"> <img src="assets/images/ai-img2.png" alt="image"> </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!--== row 2 ends ==--> 
                
            </div>
        </section>
        <!-- about section ends
================================================== --> 
        
        <!-- testimonial section starts
================================================== -->
        <section id="testimonial" class="dtr-section dtr-py-100"> 
            
            <!-- heading starts -->
            <div class="dtr-styled-heading text-center">
                <h2>Our clients love us</h2>
                <p>Ainotion has earned 4.9 stars in the aspernatur aut odit aut fugit, sed quia consequntur<br>
                    magni dolores eos qui ratione voluptatem sequi nesciunt</p>
            </div>
            <!-- heading ends --> 
            
            <!--===== testimonial slider starts =====-->
            <div class="dtr-slick-slider dtr-testimonial-slider dtr-my-50"> 
                
                <!--== slide 1 starts ==-->
                <div class="dtr-testimonial">
                    <div class="dtr-testimonial-content clearfix">
                        <p>“Lorem ipsum dolor sit amet consect adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua.” </p>
                        
                        <!-- client info -->
                        <div class="dtr-client-info clearfix">
                            <div class="dtr-testimonial-user"><span class="dtr-testimonial-icon"></span> <img src="assets/images/user-1.jpg" alt="image"> </div>
                            <div class="dtr-testimonial-user-info">
                                <h6 class="dtr-client-name">Chris Krammes</h6>
                                <span class="dtr-client-job">CEO, AIone</span> </div>
                        </div>
                        <!-- client info ends --> 
                    </div>
                </div>
                <!--== slide 1 ends ==--> 
                
                <!--== slide 2 starts ==-->
                <div class="dtr-testimonial">
                    <div class="dtr-testimonial-content clearfix">
                        <p>“Lorem ipsum dolor sit amet consect adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua.” </p>
                        
                        <!-- client info -->
                        <div class="dtr-client-info clearfix">
                            <div class="dtr-testimonial-user"><span class="dtr-testimonial-icon"></span> <img src="assets/images/user-2.jpg" alt="image"> </div>
                            <div class="dtr-testimonial-user-info">
                                <h6 class="dtr-client-name">Roslyn Tryniski</h6>
                                <span class="dtr-client-job">Entrepreneur, Denmark</span> </div>
                        </div>
                        <!-- client info ends --> 
                        
                    </div>
                </div>
                <!--== slide 2 ends ==--> 
                
                <!--== slide 3 starts ==-->
                <div class="dtr-testimonial">
                    <div class="dtr-testimonial-content clearfix">
                        <p>“Lorem ipsum dolor sit amet consect adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua.” </p>
                        
                        <!-- client info -->
                        <div class="dtr-client-info clearfix">
                            <div class="dtr-testimonial-user"><span class="dtr-testimonial-icon"></span> <img src="assets/images/user-3.jpg" alt="image"> </div>
                            <div class="dtr-testimonial-user-info">
                                <h6 class="dtr-client-name">Tyrese Harper</h6>
                                <span class="dtr-client-job">CTO, Bigacme</span> </div>
                        </div>
                        <!-- client info ends --> 
                    </div>
                </div>
                <!--== slide 3 ends ==--> 
                
                <!--== slide 4 starts ==-->
                <div class="dtr-testimonial">
                    <div class="dtr-testimonial-content clearfix">
                        <p>“Lorem ipsum dolor sit amet consect adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua.” </p>
                        
                        <!-- client info -->
                        <div class="dtr-client-info clearfix">
                            <div class="dtr-testimonial-user"><span class="dtr-testimonial-icon"></span> <img src="assets/images/user-6.jpg" alt="image"> </div>
                            <div class="dtr-testimonial-user-info">
                                <h6 class="dtr-client-name">Christina Brown</h6>
                                <span class="dtr-client-job">Project Lead</span> </div>
                        </div>
                        <!-- client info ends --> 
                    </div>
                </div>
                <!--== slide 4 ends ==--> 
                
                <!--== slide 5 starts ==-->
                <div class="dtr-testimonial">
                    <div class="dtr-testimonial-content clearfix">
                        <p>“Lorem ipsum dolor sit amet consect adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua.” </p>
                        
                        <!-- client info -->
                        <div class="dtr-client-info clearfix">
                            <div class="dtr-testimonial-user"> <span class="dtr-testimonial-icon"></span><img src="assets/images/user-7.jpg" alt="image"> </div>
                            <div class="dtr-testimonial-user-info">
                                <h6 class="dtr-client-name">Ryan Crawford</h6>
                                <span class="dtr-client-job">Data ANalyst</span> </div>
                        </div>
                        <!-- client info ends --> 
                    </div>
                </div>
                <!--== slide 5 ends ==--> 
                
            </div>
            <!--===== testimonial slider ends =====-->
            
            <p class="text-size-md text-center color-blue">4.5 out of 5 based on 2450 reviews</p>
            <div class="dtr-testimonial-stars dtr-stars-5 color-red text-center dtr-mt-30"></div>
        </section>
        <!-- testimonial section ends
================================================== --> 
        
        <!-- features section starts
================================================== -->
        <section id="features2" class="dtr-section dtr-pt-100 dtr-pb-70 bg-light-blue parallax" style="background-image: url(assets/images/features-bg.png);">
            <div class="container"> 
                
                <!-- heading starts -->
                <div class="dtr-styled-heading text-center">
                    <h2>We’re helping businesses<br>
                        do their best work</h2>
                </div>
                <!-- heading ends --> 
                
                <!--== row 1 starts ==-->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4 dtr-img-feature-style2">
                        <div class="dtr-feature-style2-head"><img src="assets/images/icon-small1.png" alt="image">
                            <h4 class="dtr-feature-style2-heading">Instantly Transparent</h4>
                        </div>
                        <p>Neque porro quisquam esqui dolom ipsut quia dolor sit amet namlien consectetur adipisci.</p>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4 dtr-img-feature-style2">
                        <div class="dtr-feature-style2-head"><img src="assets/images/icon-small2.png" alt="image">
                            <h4 class="dtr-feature-style2-heading">Shared Insights on data</h4>
                        </div>
                        <p>Neque porro quisquam esqui dolom ipsut quia dolor sit amet namlien consectetur adipisci.</p>
                    </div>
                    <!-- column 2 ends --> 
                    
                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4 dtr-img-feature-style2">
                        <div class="dtr-feature-style2-head"><img src="assets/images/icon-small3.png" alt="image">
                            <h4 class="dtr-feature-style2-heading">Radically Effieient & Focused</h4>
                        </div>
                        <p>Neque porro quisquam esqui dolom ipsut quia dolor sit amet namlien consectetur adipisci.</p>
                    </div>
                    <!-- column 3 ends --> 
                    
                </div>
                <!--== row 1 ends ==--> 
                
                <!--== row 2 starts ==-->
                <div class="row dtr-mt-40"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4 offset-md-2 dtr-img-feature-style2">
                        <div class="dtr-feature-style2-head"><img src="assets/images/icon-small4.png" alt="image">
                            <h4 class="dtr-feature-style2-heading">Automated Support</h4>
                        </div>
                        <p>Neque porro quisquam esqui dolom ipsut quia dolor sit amet namlien consectetur adipisci.</p>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4 dtr-img-feature-style2">
                        <div class="dtr-feature-style2-head"><img src="assets/images/icon-small5.png" alt="image">
                            <h4 class="dtr-feature-style2-heading">Streamlined Process</h4>
                        </div>
                        <p>Neque porro quisquam esqui dolom ipsut quia dolor sit amet namlien consectetur adipisci.</p>
                    </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!--== row 2 ends ==--> 
                
            </div>
        </section>
        <!-- features section ends
================================================== --> 
        
              
       
        
        <!-- process section starts
================================================== -->
        <section class="dtr-section dtr-py-100 bg-light-blue dtr-section-with-bg dtr-bg-size-auto dtr-bg-position-bottom" style="background-image: url(assets/images/illustration.png);">
            <div class="container">
                <h2 class="text-center dtr-mb-40">Get started in <span class="color-blue">3 easy steps</span></h2>
                
                <!--== row starts ==-->
                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="dtr-process d-flex flex-column flex-md-row justify-content-center">
                            <div class="dtr-process-item">
                                <div class="dtr-process-number"><span>1</span></div>
                                <div class="dtr-process-content">
                                    <h6>Lorem ipsum dolor<br>
                                        sit amet</h6>
                                </div>
                            </div>
                            <div class="dtr-process-item">
                                <div class="dtr-process-number"><span>2</span></div>
                                <div class="dtr-process-content">
                                    <h6>Eiusmo tempo inci<br>
                                        labore dolore</h6>
                                </div>
                            </div>
                            <div class="dtr-process-item">
                                <div class="dtr-process-number"><span>3</span></div>
                                <div class="dtr-process-content">
                                    <h6>Quis nostag exercice<br>
                                        tio susipit</h6>
                                </div>
                            </div>
                        </div>
                        <p class="text-center"> <a class="dtr-btn dtr-btn-styled btn-red dtr-video-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"><i class="icon-play-circle2 dtr-btn-left-icon"></i>See how it works</a></p>
                    </div>
                </div>
                <!--== row ends ==--> 
                
                <!-- empty div -->
                <div style="height: 450px;"></div>
            </div>
        </section>
        <!-- process section ends
================================================== --> 
        
        <!-- blog section starts
================================================== -->
        <section id="blog" class="dtr-section dtr-py-100">
            <div class="container"> 
                
                <!-- heading starts -->
                <div class="dtr-styled-heading text-center">
                    <h2>News & Articles</h2>
                </div>
                <!-- heading ends --> 
                
                <!--== row starts ==-->
                <div class="row dtr-mt-50"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4"> 
                        
                        <!-- blog item 1 starts -->
                        <div class="dtr-blog-item"> 
                            <!-- image -->
                            <div class="dtr-post-img"> <img src="assets/images/blogpost-img1.jpg" alt="image"> </div>
                            <div class="dtr-post-content"> <span class="dtr-category color-blue">Marketing</span>
                                <h5>Why we started Ainotion for small agencies</h5>
                                <!-- post meta -->
                                <div class="dtr-post-meta">
                                    <div class="dtr-meta-user"> <img src="assets/images/user-4.jpg" alt="image"> </div>
                                    <div class="dtr-meta-info"> <span>March 2020</span> <span>By Christian Brown</span> </div>
                                </div>
                                <!-- post meta ends --> 
                                
                            </div>
                        </div>
                        <!-- blog item 1 ends --> 
                        
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4"> 
                        
                        <!-- blog item 2 starts -->
                        <div class="dtr-blog-item"> 
                            <!-- image -->
                            <div class="dtr-post-img"> <img src="assets/images/blogpost-img2.jpg" alt="image"> </div>
                            <div class="dtr-post-content"> <span class="dtr-category color-blue">Analytics</span>
                                <h5>Essential tips to leveraging in AI system</h5>
                                <!-- post meta -->
                                <div class="dtr-post-meta">
                                    <div class="dtr-meta-user"> <img src="assets/images/user-5.jpg" alt="image"> </div>
                                    <div class="dtr-meta-info"> <span>August 2020</span> <span>By Dakota Carey</span> </div>
                                </div>
                                <!-- post meta ends --> 
                                
                            </div>
                        </div>
                        <!-- blog item 2 ends --> 
                        
                    </div>
                    <!-- column 2 ends --> 
                    
                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4"> 
                        
                        <!-- blog item 3 starts -->
                        <div class="dtr-blog-item"> 
                            <!-- image -->
                            <div class="dtr-post-img"> <img src="assets/images/blogpost-img3.jpg" alt="image"> </div>
                            <div class="dtr-post-content"> <span class="dtr-category color-blue">Platform</span>
                                <h5>Get the most out of support workflow</h5>
                                <!-- post meta -->
                                <div class="dtr-post-meta">
                                    <div class="dtr-meta-user"> <img src="assets/images/user-6.jpg" alt="image"> </div>
                                    <div class="dtr-meta-info"> <span>November 2020</span> <span>By Victoria Morgan</span> </div>
                                </div>
                                <!-- post meta ends --> 
                                
                            </div>
                        </div>
                        <!-- blog item 3 ends --> 
                        
                    </div>
                    <!-- column 3 ends --> 
                    
                </div>
                <!--== row starts ==--> 
                
            </div>
        </section>
        <!-- blog section ends
================================================== --> 
        
        <!-- contact section starts
================================================== -->
        <section id="contact" class="dtr-section bg-blue" style="background-image: url(assets/images/section-bg-img.jpg);"> 
            
            <!-- overlay to section -->
            <div class="dtr-overlay dtr-overlay-blue"></div>
            
            <!-- content of section (on overlay) starts -->
            <div class="dtr-py-100 dtr-overlay-content parallax" style="background-image: url(assets/images/form-bg.png);">
                <div class="container"> 
                    
                    <!-- heading starts -->
                    <div class="dtr-styled-heading text-center">
                        <h2 class="color-white">Make Your Competitive Advantage</h2>
                        <p class="color-white">There are many variations of passages of lorem ipsum<br>
                            available in some form</p>
                    </div>
                    <!-- heading ends --> 
                    
                    <!--== row starts ==-->
                    <div class="row">
                        <div class="col-12 col-lg-8 offset-lg-2"> 
                            
                            <!-- form starts -->
                            <div class="dtr-form dtr-p-50 dtr-border-5px dtr-rounded-xl bg-blue border-light-blue">
                                <form id="contactform" method="post" action="php/contact-form.php">
                                    <fieldset>
                                        <p>
                                            <input name="email"  class="required email" type="text" placeholder="Email">
                                        </p>
                                        <div class="dtr-form-row dtr-form-row-2col clearfix">
                                            <p class="dtr-form-column">
                                                <input name="name"  type="text" placeholder="Name">
                                            </p>
                                            <p class="dtr-form-column">
                                                <input name="company"  type="text" placeholder="Company Name">
                                            </p>
                                        </div>
                                        <div class="dtr-form-row dtr-form-row-2col">
                                            <p class="dtr-form-column">
                                                <input name="number" class="number" type="text" placeholder="Phone Number">
                                            </p>
                                            <p class="dtr-form-column">
                                                <select name="selectdropdown" class="dtr-select">
                                                    <option value="">No. of Employees</option>
                                                    <option value="1">5 - 10</option>
                                                    <option value="2">10 - 25</option>
                                                    <option value="3">more than 25</option>
                                                </select>
                                            </p>
                                        </div>
                                        <p class="antispam">Leave this empty: <br />
                                            <input name="url" />
                                        </p>
                                        <p>
                                            <textarea rows="6" name="message" id="message" class="required"  placeholder="Message"></textarea>
                                        </p>
                                        <p class="text-center">
                                            <button class="dtr-btn dtr-btn-styled btn-red dtr-mt-20" type="submit">Request a Demo</button>
                                        </p>
                                        <div id="result"></div>
                                    </fieldset>
                                </form>
                            </div>
                            <!-- form ends --> 
                            
                        </div>
                    </div>
                    <!--== row ends ==--> 
                    
                </div>
            </div>
            <!-- content of section ends --> 
            
        </section>
        <!-- contact section ends
================================================== --> 
  
  @endsection