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
                    <li class="icons-item"><a href="#" class="icons-link"><i class="fab fa-linkedin"></i></a></li>
                    <li class="icons-item"><a href="#" class="icons-link"><i class="fab fa-github"></i></a></li>
                    <li class="icons-item"><a href="#" class="icons-link"><i class="fab fa-behance"></i></a></li>
                    <li class="icons-item"><a href="tel:60526066" class="icons-link"><i class="fas fa-phone-alt"></i> +45 60 52 60 66</a></li>
                </ul>
            </div>
            <div class="decoration-item"></div>
        <h1 class="main-title">
            <span class="main-title-name">Munir Younosi.</span>
            <span class="main-title-first">Ambatious.</span>
            <span class="main-title-second">Frontend Web Developer.</span>
            <span class="main-title-third">UI & UX Designer.</span>
        </h1>
        <span id="date" class="date">3</span>
        </div>
    </div>
</section>
<?php get_footer(); ?>

