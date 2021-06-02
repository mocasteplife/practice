<?php 
function add_stylesheet(){
  wp_enqueue_style('add_stylesheet', get_template_directory_uri()."/css/style.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

?>


<?php
add_action('init', function() {
  add_theme_support('post-thumbnails');
  //メニューサポート
  register_nav_menus([
    'global_nav' => 'Global Navigation',
  ]);
  register_post_type('item', [
    'label' => '商品',
    'public' => true,
    'menu_position' => 10,
    'menu_icon' => 'dashicons-store',
    'supports' => ['thumbnail', 'title', 'editor', 'page-attributes', 'custom-fields'],
    'has_archive' => true,
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
});

add_action('admin_menu', 'remove_menus');
function remove_menus(){
  remove_menu_page('edit-comments.php');
}

//for short code: home.php->single-post.php for blog posts
function Include_my_php($params = array()) {
	extract(shortcode_atts(array(
		'file' => 'default'
	), $params));
	ob_start();
	include(get_theme_root() . '/' . get_template() . "/single-post.php");
	return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');


