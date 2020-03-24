
<?php get_header(); ?>

<?php 
    while(have_posts()) {
        the_post();
    }
?>

<h2 class="single-post__title"> <?php the_title(); ?></h2>
<p class="single-post__auth">posted by <?php the_author(); ?></p>

<div class="single-post__visual">
    <img class="single-post__img" src="<?php echo get_the_post_thumbnail_url(get_the_ID( )); ?>" alt="">
</div>
<div class="single-post__content">
    <?php the_content();?>
</div>
<?php comment_form();
?>
<?php get_footer(); ?>
