

<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
<body>
    <header>
        <div class="banner">
            <a href="<?php echo site_url(''); ?>" class="page--sample">Home</a>
            <span class="page--sample split">|</span>
            <a href="<?php echo site_url('/blog'); ?>" class="page--sample">Blog</a>
            <span class="page--sample split">|</span>
            <a href="<?php echo site_url('/about'); ?>" class="page--sample">About</a>
        </div>
        <div class="header">
            <div class="header__img">
                <img src="<?php echo get_stylesheet_directory_uri( );?>/img/orange.jpg" alt="" class="card__image">
            </div>
            <div class="header__content">
                <h1 class="header__title">Wordpress page</h1>
                <p class="header__desc">this page is build with wordpress </p>
                <p class="header__desc">using PHP/HTML/CSS</p>
            </div>
        </div>
    </header>
