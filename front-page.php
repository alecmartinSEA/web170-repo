
		<?php get_header(); //get header ?>
	<body <?php body_class(); ?>>
		<div id="mainpart">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'cssmenu',) ); //main menu ?>
<section id="top">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<!--Add img -->
				 <img src="alecmartin25.com/web170/wordpress-Spring-2016/wp-content/themes/Templates/images/ux.jpg" />
			</li>
			<li>
				<!--Add img -->
				<img src="alecmartin25.com/web170/wordpress-Spring-2016/wp-content/themes/Templates/images/ux.jpg">
			</li>
			<li>
				<!--Add img -->
				<img src="alecmartin25.com/web170/wordpress-Spring-2016/images/ux2.jpg"
			</li>
		</ul>
	</div>
</section>
<div class="gallery">
	<div class="widget">
	    <h2>About me:</h2>
	    <?php if (have_posts() ): while (have_posts() ) : the_post(); //loop one ?>
	    <?php the_content(''); //grabs the damn content ;) ?>
		<?php endwhile; endif; //ending the loop here ?>
	</div>

    <div class="widget">
	    <h2>Latest Postings: </h2>
	    <ul>
	    	<?php rewind_posts(); //stoping the first loop in it's tracks ?>
	    	<?php query_posts('show=4'); //specific directions for second loop ?>
	    	<?php while(have_posts()) : the_post(); //start loop number 2 ?>
	      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	      <?php endwhile; // end the second loop ?>
	    </ul>
	</div>
	<div class="widget">
	    <h2>Contact me:</h2>
	    <p>Phone: 867-5309</br>
	      Email: suhdude206@gmail.com</br>
	    </p>

	    <p>Farmrompoopen RD</br>
	      Jessieville. AR 71949</p>
	    </div>
	</div>

	
<p>frontpage.php</p>


<?php get_footer(); //get footer ?>
