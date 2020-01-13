<?php get_header(); ?>
<section class="main">
    <video class="main-video" autoplay playsinline="playsinline" muted loop>
        <source src="<?php echo get_theme_file_uri("assets/images/office.mp4"); ?>" type="video/mp4">
    </video>
    <div class="container">
        <div class="main-content-wrap">
            <div class="logo"><a href="http://multimunir.com/">
                <?php include_once "assets/images/logo.php" ?></a>
            </div>
            <div class="icons">
                <ul class="icons-ul">
                    <li class="icons-item l"><a href="#" class="icons-link"><i class="fab fa-linkedin"></i></a></li>
                    <li class="icons-item g"><a href="#" class="icons-link"><i class="fab fa-github"></i></a></li>
                    <li class="icons-item b"><a href="#" class="icons-link"><i class="fab fa-behance"></i></a></li>
                    <li class="icons-item"><a href="tel:60526066" class="icons-link"><i class="fas fa-phone-alt"></i> +45 60 52 60 66</a></li>
                    <li  id="search" class="icons-item"><span class="icons-link"><i  class="fa fa-search"></i></span>
                    <form class="search-form ">
                        <input class="search-input" type="search" name="search" placeholder="search site">
                        <button type="submit"><i class='fa-search fa fa-search'></i></button>
                    </form>
                    </li>
                </ul>
            </div>
            <div class="decoration-item"></div>
        <h1 class="main-title">
            <?php include_once "assets/images/animated-name.php" ?>
            <span class="main-title-first">Ambatious.</span>
            <span class="main-title-second">Frontend Web Developer.</span>
            <span class="main-title-third">UI & UX Designer.</span>
        </h1>
        <span id="date" class="date">3</span>
        <div class="btn-wrapper">
            <a href="#cv" class="btn"> View Details
            <i class="btn-ar fa fa-long-arrow-right"></i>
            </a>

        </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
    <span class="about-3d">about</span>
    <div class="about-title">
        <div class="one">1</div>
        <h2>About</h2>
    </div>

    <div class="services">

        <!-- item-start -->
     <a href="#" class="services-item">
            <div class="services-icon">
                <?php include_once "assets/images/brush-icon.php" ?>
            </div>
            <div class="services-title">
                <h3>Graphic Design</h3>
            </div>
            <div class="services-body cat1">
                <p>Hello, I am Munir, Creative Graphic Designer & Web Developer based in Aarhus Denmark.</p>
            </div>
            <span class="about-btn"><svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg></span>
        </a>
        <!-- item-end  -->

     <!-- item-start -->
        <a href="#" class="services-item">
            <div class="services-icon">
                 <?php include_once "assets/images/ux-icon.php" ?>
            </div>
            <div class="services-title">
                <h3>UI & UX Design</h3>
            </div>
            <div class="services-body cat3">
                <p>I do design UI interfaces for websites and mobile applications, in relation to UX design patterns.  I create beautiful and user friendly UIs and mockups.</p>
            </div>
            <span class="about-btn"><svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg></span>
            </a>
        <!-- item-end  -->
         <!-- item-start -->
         <a href="#" class="services-item">
        <class="services-link">
            <div class="services-icon">
            <?php include "assets/images/laptop.php" ?>
            </div>
            <div class="services-title">
                <h3>Web Development</h3>
            </div>
            <div class="services-body cat4">
            <p>I try to create a more beautiful and convenient product experience. I have skills in PHP, JavaScript, CSS, HTML, C# and ASP.Net technologies. I am a generalist in my Development fashion but I call myself a Frontend Developer.</p>
            </div>
            <span class="about-btn"><svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg></span>
            </a>
        <!-- item-end  -->
 <!-- item-start -->
     <a href="#"  class="services-item">
            <div class="services-icon">
            <?php include_once "assets/images/mobile.php" ?>
            </div>
            <div class="services-title">
                <h3>Mobile Development</h3>
            </div>
            <div class="services-body cat2">
                <p>I have some knowledge in SWIFT language for IOS platform. but generally when we call Mobile development, for me it means both native and web based development, including responsive design.</p>
            </div>
            <span class="about-btn"><svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg></span>
            </a>
        <!-- item-end  -->
    </div>
    </div>
</section>
<!-- work section start -->
<section class="work">
        <div class="container">
            <div class="work-3d">Recent</div>
            <div class="work-title">
                <div class="two">2</div>
                <h2>Recent Work</h2>
            </div>
            <div class="work-wrapper">
                <!-- item start  -->
                <a href="#" class="item first">
                    <div class="item-image first-image" style="background: url('https://source.unsplash.com/user/erondu');">

                    </div>
    
                     <div  class="content first-content">
                        <div class="content-category">
                            <span>Graphic Design</span>
                        </div>
                        <div class="content-title">
                            <h2>Geopartner Inspections</h2>
                        </div>
                        <div class="content-description">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo odio magni tenetur assumenda deleniti asperiores debitis illum, autem sed provident.</p>
                        </div>
                        <div class="content-btn">
                            <span class="arrow">
                            <svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg>
                            </span>
                        </div>
                </div>
            </a>
                <!-- item end  -->
                 <!-- item start  -->
                 <a href="#"class="item">
                 <div class="item-image" style="background: url('https://source.unsplash.com/user/erondu');">
                    </div>
    
                     <div class="content">
                        <div class="content-category">
                            <span>UI & UX</span>
                        </div>
                        <div class="content-title">
                            <h2>Geopartner Inspections</h2>
                        </div>
                        <div class="content-description">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo odio magni tenetur assumenda deleniti asperiores debitis illum, autem sed provident.</p>
                        </div>
                        <div class="content-btn">
                            <span class="arrow">
                            <svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg>
                            </span>
                        </div>
                    </div>
                    </a>
                <!-- item end  -->
                 <!-- item start  -->
                 <a href="#" class="item">
                 <div class="item-image" style="background: url('https://source.unsplash.com/user/erondu');">
                    </div>
    
                     <div class="content">
                        <div class="content-category">
                            <span>Web Development</span>
                        </div>
                        <div class="content-title">
                            <h2>Geopartner Inspections</h2>
                        </div>
                        <div class="content-description">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo odio magni tenetur assumenda deleniti asperiores debitis illum, autem sed provident.</p>
                        </div>
                        <div class="content-btn">
                            <span class="arrow">
                            <svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg>
                            </span>
                        </div>
                        </div>
                    </a>
                <!-- item end  -->
                 <!-- item start  -->
                 <a href="#" class="item">
                 <div class="item-image" style="background: url('https://source.unsplash.com/user/erondu');">
                    </div>
    
                     <div class="content">
                        <div class="content-category">
                            <span>News</span>
                        </div>
                        <div class="content-title">
                            <h2>Geopartner Inspections</h2>
                        </div>
                        <div class="content-description">
                            <p>Lorem Ne autem sed provident.</p>
                        </div>
                        <div class="content-btn">
                            <span class="arrow">
                            <svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg>
                            </span>
                        </div>
                        </div>
                    </a>
                <!-- item end  -->
                 <!-- item start  -->
                 <a href="#" class="item">
                 <div class="item-image" style="background: url('https://source.unsplash.com/user/erondu');">
                    </div>
    
                     <div class="content">
                        <div class="content-category">
                            <span>Mobile Development</span>
                        </div>
                        <div class="content-title">
                            <h2>Geopartner Inspections</h2>
                        </div>
                        <div class="content-description">
                            <p>Lorem Nemo odio magni tenetur assumenda deleniti asperiores debitis illum, autem sed provident.</p>
                        </div>
                        <div class="content-btn">
                            <span class="arrow">
                            <svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg>
                            </span>
                        </div>
                    </div>
                </a>
                <!-- item end  -->
            </div><!-- work-wrapper end  -->

        </div><!-- container end  -->
</section>
<section id="cv" class="cv">
    <div class="container">
    <div class="cv-3d">Profile</div>
            <div class="cv-title">
                <div class="cv-three">3</div>
                <h2>Profile</h2>
            </div>
            <span class="my-portrait">
                <img src="https://avatars0.githubusercontent.com/u/34443734?s=400&u=87eb9e997bdb88b255a90d6cb647094f211cb78c&v=4" alt="myimage" title="Munir Younosi">
            </span>
            <p class="cv-me">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates cupiditate delectus vel nesciunt quia ea eos numquam consequuntur itaque consectetur soluta odio eligendi est maxime odit omnis dolores, sint porro fugiat facilis nostrum quos modi ipsam ducimus? Adipisci laudantium iste perferendis, voluptatem dolore sunt harum aut eius quas, recusandae dignissimos!</p>
            
            <h2 class="cv-inner-title">Skills</h2>
        <div class="cv-skills">
            <!-- single-skill start  -->
            <div class="skill">
                    <span>Photoshop</span>
                      <div class="progress--circle progress--75">
                         <span class="progress__number">75%</span>
                     </div>
                </div>
            <!-- single-skill end  -->
                        <!-- single-skill start  -->
                        <div class="skill">
                    <span>Illustrator</span>
                    <div class="progress--circle progress--90">
                    <span class="progress__number">90%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                        <!-- single-skill start  -->
                        <div class="skill">
                    <span>Php</span>
                    <div class="progress--circle progress--70">
                    <span class="progress__number">70%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                        <!-- single-skill start  -->
                        <div class="skill">
                    <span>C#</span>
                    <div class="progress--circle progress--50">
                    <span class="progress__number">50%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                        <!-- single-skill start  -->
                        <div class="skill">
                    <span>JavaScript</span>
                    <div class="progress--circle progress--65">
                    <span class="progress__number">65%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                        <!-- single-skill start  -->
                        <div class="skill">
                    <span>HTML/CSS</span>
                    <div class="progress--circle progress--90">
                    <span class="progress__number">90%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                                    <!-- single-skill start  -->
                                    <div class="skill">
                    <span>Umbraco CMS</span>
                    <div class="progress--circle progress--45">
                    <span class="progress__number">45%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                                    <!-- single-skill start  -->
                                    <div class="skill">
                    <span>Wordpress CMS</span>
                    <div class="progress--circle progress--80">
                    <span class="progress__number">80%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                                    <!-- single-skill start  -->
                                    <div class="skill">
                    <span>Drupal CMS</span>
                    <div class="progress--circle progress--60">
                    <span class="progress__number">60%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                                    <!-- single-skill start  -->
                                    <div class="skill">
                    <span>SmartWeb</span>
                    <div class="progress--circle progress--60">
                    <span class="progress__number">60%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                                    <!-- single-skill start  -->
                                    <div class="skill">
                    <span>Magento 2</span>
                    <div class="progress--circle progress--40">
                    <span class="progress__number">40%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
                                    <!-- single-skill start  -->
                                    <div class="skill">
                    <span>Sass</span>
                    <div class="progress--circle progress--70">
                    <span class="progress__number">70%</span>
                    </div>
                </div>
            <!-- single-skill end  -->
        </div>
        <div class="ee">
            <div class="ex">
            <i class="e-icon fa fa-wrench"></i>
            <h2 class="cv-inner-title">Experience</h2>
            <h3 class="exp-title">Frontend Web Developer - Anodyne A/S</h3>
            <p>Working on Frontend Development for Anodyne A/S. Developing and Maintaining Smartweb and Magento Webshops</p>
            <span>August, 2019 - Current</span>
            <hr class="ee-hr">
            <h3 class="exp-title">Web Developer - Kraftvaerk A/S</h3>
            <p>Working on Frontend Development for Anodyne A/S. Developing and Maintaining Smartweb and Magento Webshops</p>
            <span>August 2018 - November 2018</span>
            <hr class="ee-hr">
            <h3 class="exp-title">Frontend Web Developer - AtriumWeb A/S</h3>
            <p>Working on Frontend Development for Anodyne A/S. Developing and Maintaining Smartweb and Magento Webshops</p>
            <span>February, 2017 - April, 2017</span>
            <hr class="ee-hr">
            <h3 class="exp-title">Multimedia Designer - PR Marketing A/S</h3>
            <p>Working on Frontend Development for Anodyne A/S. Developing and Maintaining Smartweb and Magento Webshops</p>
            <span>February 2016 - April 2016</span>

            </div>
            <div class="ed">
            <i class="e-icon fa fa-graduation-cap"></i>
            <h2 class="cv-inner-title">Education</h2>
            <h3 class="ed-title">Frontend Web Developer - Anodyne A/S</h3>
            <p>Working on Frontend Development for Anodyne A/S. Developing and Maintaining Smartweb and Magento Webshops</p>
            <span>August, 2019 - Current</span>
            <hr class="ee-hr">
            <h3 class="ed-title">Web Developer - Kraftvaerk A/S</h3>
            <p>Working on Frontend Development for Anodyne A/S. Developing and Maintaining Smartweb and Magento Webshops</p>
            <span>August 2018 - November 2018</span>
            <hr class="ee-hr">
            <h3 class="ed-title">Frontend Web Developer - AtriumWeb A/S</h3>
            <p>Working on Frontend Development for Anodyne A/S. Developing and Maintaining Smartweb and Magento Webshops</p>
            <span>February, 2017 - April, 2017</span>
            <hr class="ee-hr">
            <h3 class="ed-title">Multimedia Designer - PR Marketing A/S</h3>
            <p>Working on Frontend Development for Anodyne A/S. Developing and Maintaining Smartweb and Magento Webshops</p>
            <span>February 2016 - April 2016</span>
            </div>
        </div>
        <div class="cv-wrapper"><a href="#" class="download-cv">Download My CV</a></div>
    </div>
</section>
<?php get_footer(); ?>

