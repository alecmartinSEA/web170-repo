<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
		<link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet" content="text/html" />
		<meta name="viewport" content="width=device-width" />
		<!--Responsive nav css-->
		<link href="<?php bloginfo('template_directory');?>/navstyles.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
		<!--respoinsive nav js-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?> /jquery.flexslider.js"></script>
		
		<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>

	<meta charset="UTF-8" />
		<?php wp_head();?>

	</head>
	<?php get_header(); //get header ?>
	<body <?php body_class(); ?>>