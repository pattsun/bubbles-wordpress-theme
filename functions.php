<?php
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
$page_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

add_theme_support('post-thumbnails');

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

register_nav_menu( 'top_menu', __( 'Top menu', 'bubbles' ) );
register_nav_menu( 'foot_menu', __( 'Foot menu', 'bubbles' ) );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
    'id' => 'sidebar-1',
		'before_widget' => '<div class="panel">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget_title">',
		'after_title' => '</h3>',
    ));
?>