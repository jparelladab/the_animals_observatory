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
	$slug = $_POST["slug"];

	$query = new WP_Query(array(
		'posts_per_page' => -1,
		'category_name' => $slug
	));

	if ( $query->have_posts() ) :

		echo '<div class="collection-slider">';

		echo '<ul class="single-collection-slider">';

	 	while ( $query->have_posts() ) : $query->the_post(); 
	 	?>
	 			<li class="slide-collection">
	 				
	 				<div class="grid">
						<div class="mdiv-main">
						  <div class="mdiv">
						    <div class="md"></div>
						  </div>
						</div>
	 					<img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
		 				<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
		 				<div class="code"><?php the_field('code'); ?></div>
		 				<a href="https://<?php the_field('link_url'); ?>" target="_blank"><div class="link-button">Go to B2B Link</div></a>
	 				</div>
	 				
	 			</li>
			<?php
      			endwhile;
      		echo '</ul>';
      		?>

      		<script>
      			jQuery(document).ready(function ($) {
      				

				    $('.single-collection-slider li img').click(function(){
				        $('.single-collection-slider').slick('slickNext');
				    });

				    $(document).mouseup(function(e) 
			        {
			            var container = $('.collection-slider');

			            // if the target of the click isn't the container nor a descendant of the container
			            if (!container.is(e.target) && container.has(e.target).length === 0) 
			            {
			                $('.ajax-result-container').css('left', '-100%')
			                $('.main-content').css('margin-left', '0');
			                $('body').css('overflow-y', 'auto');
			                container.remove();
			                
			            }
			        });

			        $('.mdiv-main').click(function(){
			        	$('.ajax-result-container').css('left', '-100%');
			        	$('body').css('overflow-y', 'auto');
			            container.remove();
			        });
      			});
      		</script>
      	</div>

      		<?php
      		else:

      			echo 0;

   			endif; 
   			 
   	wp_reset_postdata();

	die();

}


add_action( 'wp_ajax_nopriv_category_btn_slider', 'category_btn_slider' );
add_action( 'wp_ajax_category_btn_slider', 'category_btn_slider' );

function category_btn_slider() {

	// load more posts
	$id = $_POST["id"];

	$query = new WP_Query(array(
		'posts_per_page' => -1,
		'cat' => $id
	));

	if ( $query->have_posts() ) :

		echo '<div class="collection-slider">';

		echo '<ul class="single-collection-slider">';

	 	while ( $query->have_posts() ) : $query->the_post(); 
	 	?>
	 			<li class="slide-collection">
	 				
	 				<div class="grid">
	 					<div class="mdiv-main">
						  <div class="mdiv">
						    <div class="md"></div>
						  </div>
						</div>
	 					<img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
		 				<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
		 				<div class="code"><?php the_field('code'); ?></div>
		 				<a href="https://<?php the_field('link_url'); ?>" target="_blank"><div class="link-button">Go to B2B Link</div></a>
	 				</div>
	 				
	 			</li>
			<?php
      			endwhile;
      		echo '</ul>';
      		?>

      		<script>
      			jQuery(document).ready(function ($) {
      				

				    $('.single-collection-slider li img').click(function(){
				        $('.single-collection-slider').slick('slickNext');
				    });

				    $(document).mouseup(function(e) 
			        {
			            var container = $('.collection-slider');

			            // if the target of the click isn't the container nor a descendant of the container
			            if (!container.is(e.target) && container.has(e.target).length === 0) 
			            {
			                $('.ajax-result-container').css('left', '-100%')
			                $('.main-content').css('margin-left', '0');
			                $('body').css('overflow-y', 'auto');
			                container.remove();
			            }
			        });

			        $('.mdiv-main').click(function(){
			        	$('.ajax-result-container').css('left', '-100%');
			            $('body').css('overflow-y', 'auto');
			                container.remove();
			        });
      			});
      		</script>
      	</div>

      		<?php
      		else:

      			echo 0;

   			endif; 
   			 
   	wp_reset_postdata();

	die();

}
