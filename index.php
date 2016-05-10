<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
		<link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet" content="text/html" />
		<meta name="viewport" content="width=device-width" />
		<!--Responsive nav css-->
		<link href="<?php bloginfo('template_directory');?>/navstyles.css" rel="stylesheet" />
		<!--respoinsive nav js-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/script.js"></script>
		<meta charset="UTF-8" />
		<?php wp_head();?>
	</head>
	<body <?php body_class(); ?>>

		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'cssmenu',) ); ?>
<section id="top">
	<?php if (have_posts() ) : while ( have_posts() ) :the_post(); ?>
	<h2><a href='<?php the_permalink(); ?>'><?php the_title();?> </a></h2>
	<?php the_content(''); ?>
<?php endwhile; endif; ?>

<footer>
  <p>2016 Not a real name</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
