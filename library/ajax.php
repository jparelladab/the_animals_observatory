<?php

/*

@package

	=======================
		AJAX FUNCTIONS
	=======================

*/


add_action( 'wp_ajax_nopriv_category_btn', 'category_btn' );
add_action( 'wp_ajax_category_btn', 'category_btn' );

function category_btn() {

	// load more posts
	$id = $_POST["id"];
	$category = get_category( $id );

	$query = new WP_Query(array(
		'posts_per_page' => -1,
		'cat' => $id
	));

	?>

	<div class="single-collection-content">
	<div class="close"></div>
	<video src="<?php the_field('video', 'category_'. $category->term_id .'') ?>" autoplay loop muted></video>			
	<?php

	if ( $query->have_posts() ) :

		echo '<div class="collection-content">'; ?>

		<div class="title-single">
			<h5>OUTFIT NO.</h5>
			<h3 class="category-name">
				<?php echo $category->name; ?>
			</h3>
		</div>
		<div class="collection-images">
		<?php

	 	while ( $query->have_posts() ) : $query->the_post(); 
	 	?>
	 			
	 				
	 				
		 			<div class="image-product">
		 				<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
		 			</div>
	 				
	 			
			<?php
      			endwhile;
      		echo '</div>';
      		?>

      	</div>	
      	</div>
      	<?php 
      endif;
      	wp_reset_postdata(); ?>

   	</div>
   	<script>
   		jQuery(document).ready(function ($) {
   			$('.close').click(function(){
   				$('.single-collection-content').fadeOut();
   				setTimeout(function() {$('.ajax-result-container').empty();}, 1000);
   			});
   		});
   	</script>
   	<?php

	die();

}
