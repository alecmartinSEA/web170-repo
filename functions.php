<?php

/*
Theme Name: Web 170 Theme
Author: Alec Martin
Description: This is my web 170 theme version 1.0
*/

//Register my Sidebar
register_sidebar(array(
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '<h2>'
	));

//Register my Menus
register_nav_menus(array(
'main-menu' => __('Main'),	
));



//Theme support for thumbnails 
add_theme_support('post-thumbnails' );

//page excerpts
add_post_type_support('page', 'excerpt');
?>

<?php //get the title tag meta descriptions
	function get_the_title_tag() {
		global $post; 

	if(is_front_page()) { // front page
		bloginfo('description'); //getting tag line 
	} elseif (is_page() || is_single() ) { //single or posting
		the_title($post->post_parent); //getting title
	} 

	else { //for the rest
		bloginfo('description' ); //page title or postings title
	}

	echo ' | '; //sepARATOR!
	bloginfo('name'); //name of website


	}