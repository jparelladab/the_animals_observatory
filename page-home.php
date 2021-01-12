<?php get_header(); ?>

<div class="collection-slider">
  <div class="collection-container swiper-container container">
    <div class="collection-wrapper swiper-wrapper">

  	<?php $categories =  get_categories();

  		 foreach($categories as $category) {   ?>

  		 	<div class="collection swiper-slide">
  		 		<p class="text-center"><?php echo $category->name; ?></p>
  				<img src="<?php the_field('image', 'category_'. $category->term_id .'') ?>">
  		 	</div>

  		<?php } ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
