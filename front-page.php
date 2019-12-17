<?php get_header(); ?>
<section class="main">
    <video class="main-video" autoplay muted loop>
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
            <a href="" class="btn"> View Details
            <i class="btn-ar fa fa-long-arrow-right"></i>
            </a>

        </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
    <div class="one">1</div>
    <div class="about-title">
        <h2>About</h2>
    </div>
    <div class="services">

        <!-- item-start -->
        <div class="services-item">
            <div class="services-icon">
                <?php include_once "assets/images/brush-icon.php" ?>
            </div>
            <div class="services-title">
                <h3>Graphic Design</h3>
            </div>
            <div class="services-body">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus aliquid a in itaque magni aliquam, libero eligendi maiores, quaerat corrupti nesciunt magnam repellat eos impedit reprehenderit laboriosam debitis labore sapiente?</p>
            </div>
        </div>
        <!-- item-end  -->
                <!-- item-start -->
                <div class="services-item">
            <div class="services-icon">
            <?php include_once "assets/images/mobile.php" ?>
            </div>
            <div class="services-title">
                <h3>Mobile Development</h3>
            </div>
            <div class="services-body">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus aliquid a in itaque magni aliquam, libero eligendi maiores, quaerat corrupti nesciunt magnam repellat eos impedit reprehenderit laboriosam debitis labore sapiente?</p>
            </div>
        </div>
        <!-- item-end  -->
                <!-- item-start -->
                <div class="services-item">
            <div class="services-icon">

            </div>
            <div class="services-title">
                <h3>Mobile Development</h3>
            </div>
            <div class="services-body">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus aliquid a in itaque magni aliquam, libero eligendi maiores, quaerat corrupti nesciunt magnam repellat eos impedit reprehenderit laboriosam debitis labore sapiente?</p>
            </div>
        </div>
        <!-- item-end  -->
                <!-- item-start -->
                <div class="services-item">
            <div class="services-icon">

            </div>
            <div class="services-title">
                <h3>Mobile Development</h3>
            </div>
            <div class="services-body">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus aliquid a in itaque magni aliquam, libero eligendi maiores, quaerat corrupti nesciunt magnam repellat eos impedit reprehenderit laboriosam debitis labore sapiente?</p>
            </div>
        </div>
        <!-- item-end  -->
    </div>
    </div>
</section>
<?php get_footer(); ?>

