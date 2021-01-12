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
	 			
	 				
	 				
		 			<div class="image-product" data-class="<?php echo get_the_ID(); ?>">
		 				<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">	
		 			</div>
	 				
	 			
			<?php
      			endwhile;
      		echo '</div>';
      		?>
      		<?php
		 	while ( $query->have_posts() ) : $query->the_post(); 
		 	?>

      			<div class="content-product <?php echo get_the_ID(); ?>">
      				<div class="close-product"></div>
		 			<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
		 			<h3><?php the_title(); ?></h3>
		 			<?php the_field('content'); ?>
		 			<a href="<?php the_field('link'); ?>"><div class="button">B2B Link</div></a>
		 		</div>
		 	<?php
      			endwhile;
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

   			$('video').on('mousemove', function(e){
			    $('video').css('transform', 'translateY(-'+e.pageY+'px)');
			});

			$('.image-product').click(function(){
				var clase = $(this).data('class');
				$('.'+clase).fadeIn();
				$('.collection-images').fadeOut();
			});

			$('.close-product').click(function(){
				$('.content-product').fadeOut();
				$('.collection-images').fadeIn();
			});
   		});
   	</script>
   	<?php

	die();

}
