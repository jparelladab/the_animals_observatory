<?php get_header(); ?>

<div class="collection-slider mt-5">
<div class="collection-marquee">
	

	<?php $categories =  get_categories();

		 foreach($categories as $category) {   ?>

		 	<div class="collection">
		 		<p class="text-center"><?php echo $category->name; ?></p>
				<img src="<?php the_field('image', 'category_'. $category->term_id .'') ?>">		 		
		 	</div>
		 
		<?php } ?>
</div>
</div>


<?php get_footer(); ?>