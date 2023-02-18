<?php
// Blog template v. 1.008
// By Michal Futera
// https://linktr.ee/mjfutera


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Widgets area 1',
		'id'            => 'widgets_area_1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

    register_sidebar( array(
		'name'          => 'Widgets area 2',
		'id'            => 'widgets_area_2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

    register_sidebar( array(
		'name'          => 'Widgets area 3 - Hidden on mobile',
		'id'            => 'widgets_area_3',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

    register_sidebar( array(
		'name'          => 'Widgets area 4 - Hidden on mobile',
		'id'            => 'widgets_area_4',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function get_the_post(){
    global $post, $posts;
    $post_content = $post->post_content;
    $post_content = apply_filters('the_content', $post_content);
    $post_content = str_replace('</p>', '', $post_content);
    $paras = explode('<p>', $post_content);
    array_shift($paras);

    return $paras[0]; 
}



?>