<aside>
	  <?php if (is_page()): //if pages ?>
	  <h2 class="side-nav-title"><?php echo get_the_title($post->post_parent); //get title  ?></h2>
	  <ul class="sub-nav-ul"><?php if ($post ->post_parent) { //create the loop for when there are parent pages
	  	wp_list_pages(array('child_of' =>$post->post_parent, 'title_li' => __(''))); //list the sub pages
	  	} else { // if there is no parent!
	  		wp_list_pages(array('child_of' => $post-ID, 'title_li' => __(''))); //post the sub pages
	  	}
	  ?> </ul>
	  <?php endif; //end da loop ?>
	  <?php if(!(is_page())) : //probably if we are in blog ?>
	  <h2 class="side nav title">Blog</h2>
	  <ul class="sub-nav-ul"><?php wp_list_categories(array('title_li' => __(''))); //list categories ?></ul>
	  <?php endif; ?> 
	</aside>
