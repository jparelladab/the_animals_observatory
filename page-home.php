<?php get_header(); ?>


<audio src="<?php bloginfo('template_url'); ?>/assets/img/LOOP_HOME.wav" class="audio-home" loop></audio>
<div class="collection-slider collection-container  main-carousel">


  	<?php $categories =  get_categories();

  		 foreach($categories as $category) {   ?>

  		 	<div class="collection carousel-cell" data-collection="<?php echo $category->term_id; ?>" data-url="http://animalsobservatory.capitanproject.com/wp-admin/admin-ajax.php" draggable="true" clickable="true">
  		 		<p class="text-center"><?php echo $category->name; ?></p>
  				<img src="<?php the_field('image', 'category_'. $category->term_id .'') ?>">
  		 	</div>

  		<?php } ?>
</div>

<div class="ajax-result-container">
	
</div>



<?php get_footer(); ?>
