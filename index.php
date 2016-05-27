<?php get_header(); //get header ?>
	<body <?php body_class(); ?>>
		<div id="mainpart">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'cssmenu',) ); //main menu ?>
<section id="top">
	<?php if (have_posts() ) : while ( have_posts() ) :the_post(); //if has posts?>
	<article class="post-excerpt">
	<h2><a href='<?php the_permalink(); //the permalink ?>'><?php the_title(); //the title?> </a></h2>
	<p>Date: <?php the_time('F j, Y');  //getting the time for the post ?>
	 <?php the_author(); //who wrote this ?>
	 in <?php the_category(', '); //Which category is this in ?></p>
	 <a href="<?php the_permalink(); //go to the single posting ?>">
	 	<?php the_post_thumbnail( 'thumbnail' ); //adding thumbnail ?> </a>
	<?php the_excerpt();  //getting blogs excerpt?>
	<p class="more"><a href="<?php the_permalink(); //link to single posting ?>">More</a></p>
</article>
<?php endwhile; endif; //end loop ?>
<p>index.php</p>
<?php get_sidebar(); //Getting the sidebar ?>

<?php get_footer(); //get footer ?>
