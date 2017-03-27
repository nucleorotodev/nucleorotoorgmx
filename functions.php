<?php
function nucleoroto_styles (){
	wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css', '1.0.0');
	wp_enqueue_style('icon', get_template_directory_uri() . '/css/foundation-icons.css', '1.0.0');
	
	wp_enqueue_script('jquery');

	wp_enqueue_script('what-input', get_template_directory_uri() . '/bower_components/what-input/dist/what-input.js', array('jquery'), '6.3.0', true);

	wp_enqueue_script('foundationjs', get_template_directory_uri() . '/bower_components/foundation-sites/dist/js/foundation.js', array('jquery'), '6.3.0', true);

	wp_enqueue_script('appjs', get_template_directory_uri() . '/js/app.js', array('foundationjs'), '6.3.0', true);
}
add_action('wp_enqueue_scripts', 'nucleoroto_styles');

add_theme_support('post-thumbnails');

?>