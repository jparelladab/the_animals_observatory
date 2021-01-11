<?php get_header(); ?>

<div class="slider-show">
	<div class="animation">
		

	<?php $categories =  get_categories();

		 foreach($categories as $category) {   ?>

		 	<div class="collection-container m-4">
		 		<p class="text-center"><?php echo $category->name; ?></p>
				<img src="<?php the_field('image', 'category_'. $category->term_id .'') ?>">		 		
		 	</div>
		 
		<?php } ?>

	</div>


</div>


<?php get_footer(); ?>