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
    </div>
</section>
<section class="work">
        <div class="container">
            <div class="work-title">
                <div class="two">01</div>
                <h2>Recent Work</h2>
            </div>
            <div class="work-wrapper">
<?php while(have_posts()){
    the_post(); ?>
                 <!-- item start  -->
                 <a href="<?php echo the_permalink(); ?>" class="item">
                 <div class="item-image" style="background: url('https://source.unsplash.com/user/erondu');">
                    </div>
    
                     <div class="content">
                        <div class="content-category">
                            <span>Mobile Development</span>
                        </div>
                        <div class="content-title">
                            <h2><?php echo the_title(); ?></h2>
                        </div>
                        <div class="meta-box">
                            <span class="name">
                               Posted by <?php the_author(); ?> on 3.5.20
                            </span>
                        </div>
                        <div class="content-description">
                            <p> <?php the_content(); ?></p>
                        </div>
                        <div class="content-btn">
                            <span class="arrow">
                            <svg class="arrow"><path class="arrow-self" d="M0 5.14815H32M32 5.14815L27.5644 1M32 5.14815L27.5644 9"/></svg>
                            </span>
                        </div>
                    </div>
                </a>
                <!-- item end  -->

<?php } ?>

</div><!-- work-wrapper end  -->
        </div><!-- container end  -->
</section>
<?php get_footer(); ?>