<?php get_header(); //get header ?>
	<body <?php body_class(); ?>>
		<div id="mainpart">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'cssmenu',) ); //main menu ?>
<section id="top">
	<?php if (have_posts() ) : while ( have_posts() ) :the_post(); //if has posts?>
	<h2><a href='<?php the_permalink(); //the permalink ?>'><?php the_title(); //the title?> </a></h2>
	<?php the_content('');  //add content?>
<?php endwhile; endif; //end loop ?>
<p>single.php</p>
<?php get_sidebar(); //Getting the sidebar ?>

<?php get_footer(); //get footer ?>
