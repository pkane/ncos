<!DOCTYPE html>
<html>
  <head>
    <title>NCOs4CEOs</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <!-- CSS Files comes here -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">    
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/icons.css" rel="stylesheet" media="screen">
    <link href="css/flexslider.css" rel="stylesheet" media="screen"> 
    <link href="css/responsive.css" rel="stylesheet" media="screen">  
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Montserrat:700|Merriweather:400italic' rel='stylesheet' type='text/css'>
      
    <!-- Modernizer and IE specyfic files -->  
    <script src="js/modernizr.custom.js"></script>
      
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <?php
        define('WP_USE_THEMES', false);
        require('blog/wp-blog-header.php');
    ?>    
      
  </head>
    
  <body>
      
    <!--####################################################################--> 
    <!-- NAV ###############################################################-->
    <!--####################################################################-->
      
    <nav class="nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div id="logo" class="mobile-logo"><a href="#home"><img src="images/logo.png" alt="logo"></a></div>                                        
                    <div id="navigation" class="visible-md visible-lg">
                        <ul id="sections">
                            <li id="logo"><a href="#home"><img src="images/logo.png" alt="logo"></a></li>
					        <li><a href="#mission">Mission</a></li>
					        <li><a href="#offerings">Offerings</a></li>
                            <li><a href="#videos">Videos</a></li>
                            <li><a href="#bios">Bios</a></li>                            
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div id="navigation_mobile" class="visible-sm visible-xs">
                        <button class="button_nav" id="showLeft"><span aria-hidden="true" class="button_nav_icon icon-list"></span></button>   
                    </div>
                </div>    
            </div>    
        </div>    
    </nav>  
    <!-- //NAV -->
      
    <!-- MOBILE NAV -->  
    <div class="cbp-spmenu visible-sm visible-xs" id="cbp-spmenu">
        <h3>Menu</h3>
        <ul id="sections_mobile">
            <li><a href="#mission">Mission</a></li>
            <li><a href="#offerings">Offerings</a></li>
            <li><a href="#videos">Videos</a></li> 
            <li><a href="#bios">Bios</a></li>                       
            <li><a href="#contact">Contact</a></li>            
        </ul>
    </div> 
      
    <!--####################################################################-->
    <!-- //MOBILE NAV ######################################################--> 
    <!--####################################################################-->  
      
      
      
    <!--####################################################################-->
    <!-- HOME ##############################################################--> 
    <!--####################################################################-->   
      
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="tlt">
                        <ul class="texts" >
                            <li >Leadership from <br />Battlefield to Boardroom.</li>
                        </ul>
                    </div>
                    <a id="item_1" class="landing-play-btn fancybox md-trigger" data-modal="work1"></a>
                </div>
            </div>
        </div>
    </section>  
     
    <!--####################################################################-->
    <!-- //HOME ############################################################--> 
    <!--####################################################################-->  
      


    <!--####################################################################-->
    <!-- MISSION #############################################################--> 
    <!--####################################################################-->
            
    <section id="mission" class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                <h2>Mission</h2>
            <!-- <p>NCOs4CEOs applies the proven leadership, decision-making, motivation, and high performance skills of senior Non-Commissioned Officers (NCOs) to make your company’s teams and leaders more effective.</p> -->
                <?php echo gcb(1);?>
                </div>    
            </div>
        </div>
    </section> 

    <div class="banner banner-1">
        <h4>Differentiated Coaching <br />Develops Exceptional Leaders </h4>
    </div>    

    <!--####################################################################-->
    <!-- //MISSION ###########################################################--> 
    <!--####################################################################-->       
      
      
    <!--####################################################################-->
    <!-- OFFERINGS ##########################################################--> 
    <!--####################################################################-->  
      
    <section id="offerings" class="main-section" data-speed="-5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                <h2>Offerings</h2>
            <!--                
                <p>Speaking with experience, humility and humor, our NCOs put a very human face on the lessons learned and earned through nearly five decades of combined exemplary military service. They translate these achievements into a practical framework to help commercial, government and non-profit organizations to:</p>                
                <ul>
                    <li>Cultivate and support emerging leaders.</li>
                    <li>Move challenged and stalled teams toward excellent performance.</li>
                    <li>Inspire and re-energize leaders of all levels.</li>
                </ul>
            -->
                    <?php echo gcb(2);?>
                </div>
            </div>      
        </div>
    </section> 

    <div class="banner banner-2">
        <h4>Custom Tailored Solutions <br />Address Your Specific Challenges</h4>
    </div>

    <section class="offerings-spotlight">
        <div class="container">
            <div class="row">        
                <div class="offerings-spotlight-item seminars col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
            <!--    <p>An interactive way to inspire and focus your teams through the battle-tested experiences of our NCOs. We customize our seminars and speaking engagements to address the relevant issues and opportunities your teams are facing, and provide practical advice on operational problem solving, team motivation and morale, and “top-down, bottom-up and middle-out” leadership.</p> -->
                    <?php echo gcb(3);?>
                </div>
                <div class="offerings-spotlight-item boot col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
            <!--    <p>An immersive two to five day workshop designed to accelerate your team unity and sharpen problem-solving skills. Using proven consulting approaches, we tailor each boot camp to apply our NCO’s know-how to help your teams tackle and overcome their toughest challenges.</p> -->
                    <?php echo gcb(4);?>
                </div>
                <div class="offerings-spotlight-item emerging col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
            <!--    <p>Through structured progress reviews, our NCOs and Commissioned Officer Advisors coach leaders at every level of your organization. Whether as a follow-on to a boot camp, or as a discrete support engagement, our team enables your team’s success by applying lessons learned and continued growth toward exceptional performance.</p> -->
                    <?php echo gcb(5);?>
                </div>
                <div class="offerings-spotlight-item operational col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
            <!--    <p>The NCOs that you engage may be a strong fit to supplement your team’s capacity and capability through ongoing consulting support, or by joining you as a new full-time employee. We facilitate these mid- and longer-term “internships” to support your team’s ongoing success, and the next stage of career growth for our veteran NCOs.</p> -->
                    <?php echo gcb(6);?>
                </div>
            </div>
        </div>
    </section>

      
    <!--####################################################################-->
    <!-- //OFFERINGS ########################################################--> 
    <!--####################################################################-->        
      
    <!--####################################################################-->
    <!-- VIDEOS #########################################################--> 
    <!--####################################################################-->    
      
    <section id="videos" class="main-section" data-speed="-5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                <h2>Watch Our NCOs Discuss Leadership</h2>   
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                    <div class="brdr-box">
                        <!--
                        <ul id="filter" class="tab-heading">
                            <li class="heading-item commercials active"><a href="" data-filter=".commercials">Commercials</a></li>
                            <li class="heading-item corporate"><a href="" data-filter=".corporate">Corporate</a></li>
                            <li class="heading-item government"><a href="" data-filter=".government">Government</a></li>
                            <li class="heading-item psa"><a href="" data-filter=".psa">PSAs</a></li>
                            <li class="heading-item testimonials"><a href="" data-filter=".testimonials">Testimonials</a></li>
                        </ul>            
                        -->         

                        <div id="portfolio-items">

                        <!--
                                        
                            <div class="one-third column design">
                            
                                <div class="project-item animate">

                                    <div class="project-image">
                                        <a class="item-one fancybox md-trigger" data-modal="work1">
                                        <img src="images/ncos4ceos-thumb.jpg" />
                                        </a>
                                    </div>
                                
                                </div>
                                
                            </div>

                        -->

                            <div class="one-third column design">
                            
                                <div class="project-item animate">
                                    
                                    <div class="project-image">
                                        <a id="item_5" class="fancybox md-trigger" data-modal="work5">
                                        <img src="images/setting-standards-thumb.jpg" />
                                        </a>
                                    </div><!-- end .project-image -->

                                    <div class="project-copy">
                                        <p><b>Setting Standards</b></p>
                                        <p>Command Sergeant Major (ret) Kevin Benson talks about how to set the standard when all eyes are on you. And as a former Drill Instructor and Ranger Instructor, he knows.</p>
                                    </div>                                    
                                                        
                                </div><!-- end .project-item -->
                                
                            </div><!-- end .one-third -->

                            <div class="one-third column design">
                            
                                <div class="project-item animate">
                                    
                                    <div class="project-image">
                                        <a id="item_6" class="fancybox md-trigger" data-modal="work6">
                                        <img src="images/leading-front-thumb.jpg" />
                                        </a>
                                    </div><!-- end .project-image -->

                                    <div class="project-copy">
                                        <p><b>Leading from the Front</b></p>
                                        <p>Command Sergeant Major (ret) Kevin Benson talks about how to lead from the front, how to move your organization forward, and how sometimes that means rolling up your sleeves and pushing from the back.</p>
                                    </div>                                    
                                                        
                                </div><!-- end .project-item -->
                                
                            </div><!-- end .one-third -->             

                            <div class="one-third column design">
                            
                                <div class="project-item animate">
                                    
                                    <div class="project-image">
                                        <a id="item_4" class="fancybox md-trigger" data-modal="work4">
                                        <img src="images/spotlight-ranger-thumb.jpg" />
                                        </a>
                                    </div><!-- end .project-image -->

                                    <div class="project-copy">
                                        <p><b>Spotlight Ranger</b></p>
                                        <p>Command Sergeant Major (ret) Tom Guglielmo shares his thoughts on generating a level of high performance in your organization on a daily basis and not just when the spotlight is focused on your team.</p>
                                    </div>                                    
                                
                                </div><!-- end .project-item -->
                                
                            </div>                                                                       
                            
                            <div class="one-third column design">
                            
                                <div class="project-item animate">
                                    
                                    <div class="project-image">
                                        <a id="item_2" class="fancybox md-trigger" data-modal="work2">
                                        <img src="images/midnight-run-thumb.jpg" />
                                        </a>
                                    </div><!-- end .project-image -->

                                    <div class="project-copy">
                                        <p><b>Midnight Run</b></p>
                                        <p>Command Sergeant Major (ret)Tom Guglielmo discusses how he demonstrated his commitment to his troops and how that commitment bolstered unit morale.</p>
                                    </div>
                                                        
                                </div><!-- end .project-item -->
                                
                            </div><!-- end .one-third -->

                            <div class="one-third column design">
                            
                                <div class="project-item animate">

                                    <div class="project-image">
                                        <a id="item_3" class="fancybox md-trigger" data-modal="work3">
                                        <img src="images/leading-sideways-thumb.jpg" />
                                        </a>
                                    </div><!-- end .project-image -->        

                                    <div class="project-copy">
                                        <p><b>Leading Sideways</b></p>
                                        <p>Command Sergeant Major (ret) Kevin Benson discusses the benefits of learning from and leading your organizational peers.</p>
                                    </div>

                                </div><!-- end .project-item -->
                                
                            </div><!-- end .one-third --> 

                            <div class="one-third column design">
                            
                                <div class="project-item animate">

                                    <div class="project-image">
                                        <a id="item_7" class="fancybox md-trigger" data-modal="work7">
                                        <img src="images/ambush-chaparhar-thumb.jpg" />
                                        </a>
                                    </div><!-- end .project-image -->        

                                    <div class="project-copy">
                                        <p><b>Ambush Chaparhar</b></p>
                                        <p>Command Sergeant Major (ret) Tom Guglielmo discusses crisis leadership and decision-making illustrated by his experience under fire in Chaparhar, Afghanistan.</p>
                                    </div>

                                </div><!-- end .project-item -->
                                
                            </div><!-- end .one-third -->                             
                                                                                                                                                                  
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <div class="banner banner-3">
        <h4>The critical layer where <br />vision meets execution.</h4>
    </div>        
    
    <!--####################################################################-->
    <!-- //Videos #######################################################--> 
    <!--####################################################################-->        

    <!--####################################################################-->
    <!-- PORTFOLIO - Modal boxes############################################--> 
    <!--####################################################################-->   
                
    <!-- Single video modal box###########################################-->    

    <div class="md-modal md-effect-1" id="work1"> 
        <div class="md-content video">
            <button id="pause_btn1" class="button_nav md-close" ><span aria-hidden="true" class="button_nav_icon icon-cross"></span></button>     
<!--            <h3>Single image</h3> -->
<iframe class="vimeo-player" id="video1" src="//player.vimeo.com/video/109281040?api=1&player_id=video1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><b>NCOs4CEOs</b><br /> NCOs4CEOs applies the proven leadership, decision-making, motivation, and high performance skills of senior Non-Commissioned Officers to make your company’s teams and leaders more effective.</p>                 
        </div>
    </div>    

    <!--####################################################################-->      

    <!-- Single video modal box###########################################-->    

    <div class="md-modal md-effect-1" id="work2"> 
        <div class="md-content video">
            <button id="pause_btn2" class="button_nav md-close" ><span aria-hidden="true" class="button_nav_icon icon-cross"></span></button>     
<!--            <h3>Single image</h3> -->
<iframe class="vimeo-player" id="video2" src="//player.vimeo.com/video/108937690?api=1&player_id=video2" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><b>"Midnight Run"</b><br /> Command Sergeant Major (ret)Tom Guglielmo discusses how he demonstrated his commitment to his troops and how that commitment bolstered unit morale.</p>                
        </div>
    </div>    

    <!--####################################################################-->

    <!-- Single video modal box###########################################-->    

    <div class="md-modal md-effect-1" id="work3"> 
        <div class="md-content video">
            <button id="pause_btn3" class="button_nav md-close" ><span aria-hidden="true" class="button_nav_icon icon-cross"></span></button>     
<!--            <h3>Single image</h3> -->
<iframe class="vimeo-player" id="video3" src="//player.vimeo.com/video/108936545?api=1&player_id=video3" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><b>"Leading Sideways"</b><br /> Command Sergeant Major (ret) Kevin Benson discusses the benefits of learning from and leading your organizational peers.</p>                  
        </div>
    </div>    

    <!--####################################################################-->             

    <!-- Single video modal box###########################################-->    

    <div class="md-modal md-effect-1" id="work4"> 
        <div class="md-content video">
            <button id="pause_btn4" class="button_nav md-close" ><span aria-hidden="true" class="button_nav_icon icon-cross"></span></button>     
<!--            <h3>Single image</h3> -->
<iframe class="vimeo-player" id="video4" src="//player.vimeo.com/video/108946036?api=1&player_id=video4" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><b>"Spotlight Ranger"</b><br /> Command Sergeant Major (ret) Tom Guglielmo shares his thoughts on generating a level of high performance in your organization on a daily basis and not just when the spotlight is focused on your team.</p>                 
        </div>
    </div>   

    <!--####################################################################-->     

    <!-- Single video modal box###########################################-->    

    <div class="md-modal md-effect-1" id="work5"> 
        <div class="md-content video">
            <button id="pause_btn5" class="button_nav md-close" ><span aria-hidden="true" class="button_nav_icon icon-cross"></span></button>     
<!--            <h3>Single image</h3> -->
<iframe class="vimeo-player" id="video5" src="//player.vimeo.com/video/109050387?api=1&player_id=video5" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><b>"Setting Standards"</b><br /> Command Sergeant Major (ret) Kevin Benson talks about how to set the standard when all eyes are on you. And as a former Drill Sergeant and Ranger Instructor, he knows.</p>                 
        </div>
    </div>   

    <!--####################################################################-->   

    <!-- Single video modal box###########################################-->    

    <div class="md-modal md-effect-1" id="work6"> 
        <div class="md-content video">
            <button id="pause_btn6" class="button_nav md-close" ><span aria-hidden="true" class="button_nav_icon icon-cross"></span></button>     
<!--            <h3>Single image</h3> -->
<iframe class="vimeo-player" id="video6" src="//player.vimeo.com/video/109043831?api=1&player_id=video6" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><b>"Leading from the Front"</b><br /> Command Sergeant Major (ret) Kevin Benson talks about how to lead from the front, how to move your organization forward, and how sometimes that means rolling up your sleeves and pushing from the back.</p>                 
        </div>
    </div>   

    <!--####################################################################-->    

    <!-- Single video modal box###########################################-->    

    <div class="md-modal md-effect-1" id="work7"> 
        <div class="md-content video">
            <button id="pause_btn7" class="button_nav md-close" ><span aria-hidden="true" class="button_nav_icon icon-cross"></span></button>     
<!--            <h3>Single image</h3> -->
<iframe class="vimeo-player" id="video7" src="//player.vimeo.com/video/109281684?api=1&player_id=video7" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><b>"Ambush Chaparhar"</b><br /> Command Sergeant Major (ret) Tom Guglielmo discusses crisis leadership and decision-making illustrated by his experience under fire in Chaparhar, Afghanistan.</p>                 
        </div>
    </div>   

    <!--####################################################################-->        

    <!-- Single contact modal box###########################################-->  

    <div class="md-modal md-effect-1" id="contact1"> 
        <div class="md-content video">
            <button class="button_nav md-close" ><span aria-hidden="true" class="button_nav_icon icon-cross"></span></button>                 
            <?php echo gcb(9);?>
        </div>
    </div>   

    <!--####################################################################-->              

    
    <div class="md-overlay"></div><!--Modal box overlay-->
          
    <!--####################################################################-->
    <!-- //Modal Boxes #####################################################--> 
    <!--####################################################################-->      
      
      
    <!--####################################################################-->
    <!-- BIOS ##############################################################--> 
    <!--####################################################################-->  
      
    <section id="bios" class="main-section" data-speed="-5" data-type="background">
        <div class="container">
            <h2>Our NCO Leaders</h2>               
            <section class="bio-content thomas active">            
                <div class="col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                    <h3>Thomas D. Guglielmo</h3>
                    <h5>1st Brigade, Command Sergeant Major (Retired), 101st Airborne Division</h5>
            <!--    <p>Thomas D. Guglielmo has served with distinction in every NCO leadership position in the US Army, most recently as 1st Brigade, Command Sergeant Major in the 101st Airborne Division. He was the Leadership Awardee for his Primary Leadership Development Class, the honor graduate for his Basic Non-Commissioned Officer Course class, the distinguished graduate for his Advanced Non-Commissioned Officer class, the honor graduate for his First Sergeants class, and the distinguished graduate in the capstone course at the U.S. Navy’s Senior Enlisted Academy. Through 24 years of service, Tom has lead soldiers and mentored leaders during command assignments in Afghanistan and Iraq, and operational deployments to Kosovo, Egypt and Haiti. His decorations include three Bronze Stars, The Legion of Merit, two Meritorious Service Medals, and multiple individual and unit awards and citations. Tom earned his BA in Organizational Management from Ashford University (summa cum laude). He serves as a coach and mentor in the US Army’s Leader Training Program, and on the Board of Governors for the 101st Airborne Division Association.</p> -->
                    <?php echo gcb(7);?>
                </div>
            </section>

            <section class="bio-content kevin">
                <div class="col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">                
                    <h3>Kevin R. Benson</h3>
                    <h5>Command Sergeant Major (Retired), US Army Training Center, Ft. Jackson, SC</h5>
            <!--    <p>Kevin R. Benson has served honorably in a wide range of NCO leadership assignments in his 28 year military career from Infantryman in the 10th Mountain Division to Drill Instructor, Ranger Instructor, and most recently as Command Sergeant Major (CSM), United States Army Training Center at Fort Jackson, SC. Prior to that, Kevin served with distinction as the CSM 1st Brigade, 101st Airborne Division. He graduated as the Leadership Award recipient in every NCO development course he attended as well as the First Sergeants Course at Fort Bliss, TX. Military Awards include the Distinguished Service Medal, the Legion of Merit, four Bronze Stars, five Meritorious Medals, Army Commendation Medal with Valor Device, nine Army Commendation Medals, seven Army Achievement Medals, and multiple other individual and unit citations including the Combat Infantryman’s Badge, Expert Infantryman's Badge, Drill Sergeant Badge, and the coveted Ranger Tab.</p> -->
                    <?php echo gcb(8);?>
                </div>
            </section>
        </div>
    </section>

    <!--####################################################################-->
    <!-- //BIOS ############################################################--> 
    <!--####################################################################-->   
      
    <!--####################################################################-->
    <!-- FOOTER ############################################################--> 
    <!--####################################################################-->        
      
    <section id="footer">
       <div class="container">
            <div class="row">
                <div class="split-col col-sm-6 col-md-6 col-lg-6">
                    <img src="images/logo.png" />                   
                </div>
                <div class="split-col col-sm-4 col-md-4 col-lg-4">
                    <p>Call 202.255.2633 <br />or <br />Click to <a class="fancybox md-trigger" data-modal="contact1">CONTACT Us</a></p>                    
                </div>                
            </div>   
       </div> 
           <section id="contact">
           </section>

    </section>  
      
    <!-- JavaScript plugins go here. -->
    <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>    
    <script src="js/vimeo-player.js"></script>      
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>  
    <script src="js/classie.js"></script>    
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.nav.js"></script> 
    <script src="js/jquery.form.js"></script>  
    <script src="js/waypoints.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.textillate.js"></script>
    <script src="js/AnimOnScroll.js"></script>
    <script src="js/cssParser.js"></script>
    <script src="js/modalEffects.js"></script>    
    <script src="js/jquery.flexslider-min.js"></script>  
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/main.js"></script>  
    <!-- <script src="js/retina.js"></script>  -->

  </body>
</html>