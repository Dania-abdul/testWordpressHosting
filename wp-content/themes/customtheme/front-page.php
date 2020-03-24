
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4

    );
    $blogposts = new WP_Query($args);
?>

<main>
    <div class="intro">
        <h2 class="intro__title">Wordpress custom page and Blog</h2>
        <p class="intro__text">This is a completely responsive website built from scratch using WordPress, HTML, CSS, JavaScpript, and PHP</p>
        <a href="<?php echo site_url('/about'); ?>" class="btn-custom">About</a>

    </div>
        
    <section>
        <div class="cards">
            <?php if( $blogposts-> have_posts() ): 
            while( $blogposts-> have_posts())
            : $blogposts-> the_post(); ?>
            
            <div href="#" class="card">
                <div class="card__inner">
                    <div class="card_visual">
                        <img class="card_img" src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="card img">
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="card__title"><?php the_title(); ?></h3>
                    </a>
                    <p class="card__cat"><?php the_category(); ?></p>
                    <p href="" class="card__btn"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a href="<?php the_permalink(); ?>">
                        <p class="btn-more">read more...</p>
                    </a>
                </div>
            </div>  
        <?php
            endwhile;
            endif;
        ?>  
        </div>

        <?php wp_reset_query(); ?>
    </section>

</main>

<?php get_footer(); ?>

