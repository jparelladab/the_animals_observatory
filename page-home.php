<?php get_header(); ?>



<div class="collection-slider collection-container  main-carousel">


  	<?php $categories =  get_categories();

  		 foreach($categories as $category) {   ?>

  		 	<div class="collection carousel-cell" data-collection="<?php echo $category->term_id; ?>" data-url="http://localhost:8887/animalsobservatory/wp-admin/admin-ajax.php">
  		 		<p class="text-center"><?php echo $category->name; ?></p>
  				<img src="<?php the_field('image', 'category_'. $category->term_id .'') ?>">
  		 	</div>

  		<?php } ?>
</div>

<div class="ajax-result-container">
	
</div>



<?php get_footer(); ?>
