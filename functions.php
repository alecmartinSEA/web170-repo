<?php

/*
Theme Name: Web 170 Theme
Author: Alec Martin
Description: This is my web 170 theme version 1.0
*/

//Register my Menus
register_nav_menus(array(
'main-menu' => __('Main'),	
));



//Theme support for thumbnails 
add_theme_support('post-thumbnails' );

//page excerpts
add_post_type_support('page', 'excerpt');
?>