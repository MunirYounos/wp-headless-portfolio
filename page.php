<?php get_header(); ?>

<?php while(have_posts()){
    the_post(); ?>

    <section class="banner">
            <div class="banner-image" style="background-image: url(<?php echo get_theme_file_uri("assets/images/herobw.jpg")?>);">
            
            </div>
    </section>

    <section class="content">
        <div class="container">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    </section>





<?php } ?>
<?php get_footer(); ?>