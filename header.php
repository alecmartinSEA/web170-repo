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