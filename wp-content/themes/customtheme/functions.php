<?php 

wp_enqueue_style ('font-google', '//fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Playfair+Display:400,500,600,700&display=swap');

wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_script('main',get_theme_file_uri('/js/main.js'), NULL, microtime())

?>

<?php
function test_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('common-list','comment-form') 
    );
}
add_action('after_setup_theme', 'test_init');

//project post type

function custom_post_type(){
    register_post_type('project',
       array(
           'rewrite' => array('slug' => 'projects'),
           'labels' => array(
               'name' => 'Projects',
               'singular_name' => 'Project',
               'add_new_item' => 'Add New Project',
               'edit_item' => 'Edit Projects'
           ),
           'menu-icon' => 'dashicons-clipboard',
           'public' => true,
           'has_archive' => true,
           'supports' => array(
               'title', 'thumbnail', 'editor', 'excerpt', 'comments'
           )
       )
    );   
   }

   add_action('init','custom_post_type');
?>

