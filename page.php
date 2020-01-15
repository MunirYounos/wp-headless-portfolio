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

        <?php

            $ParentId = wp_get_post_parent_id(get_the_ID());
            if($ParentId){ ?>
                <div class="breadcrumbs">
                <a href="<?php echo get_permalink($ParentId); ?>" class="breadcrumbs-item"> Back to <?php echo get_the_title($ParentId); ?></a>
                <span class="breadcrumbs-item"><?php echo the_title(); ?></span>
                </div>
           <?php }
        ?>

    </div>
</section>

<?php while(have_posts()){
    the_post(); ?>
    <section class="content">
        <div class="container">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    </section>
<?php } ?>

<?php 
$testArray = get_pages(array(
    'child_of' => get_the_ID()

));
if ($ParentId or $testArray) {?>
    <div class="child-pages">
    <div class="container">
        <div class="is-flex">
        <span><a href="<?php echo get_the_permalink($ParentId); ?>"><?php echo get_the_title($ParentId); ?></a></span>
        <ul class="child-list">
        <?php  
            if($ParentId){
                $findChildreOf = $ParentId;
            } else {
                $findChildreOf = get_the_ID();
            }
            wp_list_pages(array(
                'title_li' => NULL,
                'child_of' => $findChildreOf  
            ));
        ?>
        </ul>
        </div>
    </div>
</div>

<?php } ?>

<?php get_footer(); ?>