<?php get_header(); ?>
<section class="main-sub">
    <div class="container">
        <div class="main-content-sub">
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
                    </li>

                    <form class="search-form ">
                        <input class="search-input" type="search" name="search" placeholder="Search Site">
                        <button type="submit">Submit</button>
                    </form>
                </ul>
            </div>
        </div>

        <div class="breadcrumbs">
                <a href="<?php echo site_url('/blog'); ?>" class="breadcrumbs-item">Back to Blog Home</a>
                <span class="breadcrumbs-item"><?php echo the_title(); ?></span>
                </div>
    </div>
</section>
<div class="single-content">
        <div class="container">
        <?php 
        while(have_posts()){
            the_post(); ?>

            <h2><?php the_title(); ?></h2>
                         <div class="meta-box">
                            <span class="name">
                               Posted by <?php the_author(); ?> on <?php the_time('F, j . Y'); ?>
                            </span>
                        </div>
            <p><?php the_content(); ?></p>

        <?php } ?>
        </div>
    </div>
<?php get_footer(); ?>