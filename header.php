<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>  
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/05654a8fc0.js"></script>
    <link rel="stylesheet" href="assets/css/main.min.css">
    <?php wp_head(); ?>
</head>
<body >
<!-- main grid  -->
<div class="container">
<!-- open close button  -->
<div class="menu-wrap">
    <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
    </div>
</div>
</div>
<!-- Main Navigation  -->
<nav class="menu">
    <ul class="menu-nav">
         <li class="nav-item">
            <a href="<?php echo site_url(); ?>" class="nav-link"><img src="<?php echo get_theme_file_uri("assets/images/logo.gif");?>" alt="logo" width="60"></a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url(); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url("/sample-page"); ?>" class="nav-link">About</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url("/privacy-policy"); ?>" class="nav-link">Work</a>
        </li>
        <li class="nav-item">
            <a href="/contact.html" class="nav-link">Reach me</a>
        </li>
    </ul>
   
</nav>