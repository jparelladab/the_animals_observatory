<?php
/*Template Name: Home*/
get_header(); ?>

<article>
<div class="ajax-result-container">

</div>

<main class="main-content">
	<div class="wrap">
		<div id="ball"></div>
	</div>
	<iframe src="<?php bloginfo('template_url'); ?>/assets/img/10-minutes-of-silence.mp3" allow="autoplay" id="audio" style="position: absolute; visibility: hidden;"></iframe>
	<?php
		if ( have_posts() ) :
		  while ( have_posts() ) : 
		    the_post(); ?>
		    <?php
		      	$pages = get_pages(array( 'sort_column' => 'menu_order' ));
		      	
		      	$i = 0;
				foreach($pages as $page): ?>
					<style>
						.pagina_<?php echo $i; ?>{
							box-sizing: border-box;
							position: relative;
							transform-style: inherit;
							width: 100vw;
						}

						/*.pagina_<?php echo $i; ?>, .pagina_<?php echo $i; ?>:before{
							background: 50% 50% / cover !important;
						}*/

						.grid-type::before{
							bottom: 0;
							content: "";
							left: 0;
							position: absolute;
							right: 0;
							top: 0;
							display: block;
							background-size: cover !important;
							transform-origin: center center !important;
							background-attachment: fixed;
							z-index: -1;
							min-height: 100vh;
						}
						
						.pagina_<?php echo $i; ?>::before{
							<?php if(get_the_post_thumbnail_url($page->ID, 'full')){ ?>
								background-image: url('<?php echo get_the_post_thumbnail_url($page->ID, 'full'); ?>') !important;
							<?php } ?>
							background-color: white;
						}

						@media(max-width: 1024px){
							.grid-type:before, .pagina_<?php echo $i; ?>::before{
								background-attachment: scroll;
								background-position: center center;
							}
						}
					</style>
				    <div class="pagina pagina_<?php 

				    echo $i;

				    $option_type = get_field('select_option', $page->ID);

				    if($option_type == 'grid'){
				      	echo ' grid-type';
				    } 



				    ?>" style="z-index: 0;">
				      <div class="gridder-div">
						<?php if($i == 1){ ?>
							<audio class="background-audio" src="<?php bloginfo('template_url'); ?>/assets/audio/TAO-SOUNDTRACK.mp3" loop></audio>
						<?php } ?>
				      	<?php

				      		$option_type = get_field('select_option', $page->ID);

				      		if($option_type == 'grid'){
				      			the_laygrid($page->ID);
				      		} else if ($option_type == 'video'){

				      			$hero = get_field('video_options', $page->ID);
				      			?>
							    <div class="video_div">
							    	<div class="button-collection">
							    		<img src="<?php echo $hero['icon_audio']; ?>" alt=""> <?php echo $hero['text_audio']; ?>
							    	</div>
							    	<video src="<?php echo $hero['video_url']; ?>" playsinline loop muted></video>
							    </div>
				      		<?php } else if ($option_type == 'slider'){
								
				      			$hero = get_field('slider_options', $page->ID);
				      			
				      			?>
							    <div class="slider_div">
							    	

							    		<?php
							    			
							    			if ($hero['collection_type'] == 'uno'){
							    		?>
							    		<div class="product-background-div total" style="background: url('<?php echo $hero['image']; ?>')">
							    			<div class="collection" data-collection="<?php echo $hero['coleccion']; ?>" data-url="http://showroom.theanimalsobservatory.com/catalogue-190811032/wp-admin/admin-ajax.php">
							    				<div class="button-collection"><?php echo $hero['coleccion_texto']; ?></div>
							    			</div>
							    		
							    		<?php
							    			} else if($hero['collection_type'] == 'vertical'){
							    		?>
							    		<div class="product-background-div collection-div-vertical" style="background: url('<?php echo $hero['image']; ?>')">
											
												<?php 
												$collection = $hero['colecciones'];
												?>

												<div class="collection" data-collection="<?php echo $collection['coleccion_1']; ?>" data-url="http://showroom.theanimalsobservatory.com/catalogue-190811032/wp-admin/admin-ajax.php">
													<div class="button-collection"><?php echo $collection['coleccion_texto_1']; ?></div>
														
												</div>
												<div class="collection" data-collection="<?php echo $collection['coleccion_2']; ?>" data-url="http://showroom.theanimalsobservatory.com/catalogue-190811032/wp-admin/admin-ajax.php">
													<div class="button-collection"><?php echo $collection['coleccion_texto_2']; ?></div>
												</div>
											

							    		
							    		<?php } else if($hero['collection_type'] == 'horizontal') {?>
							    			<div class="product-background-div collection-div-horizontal" style="background: url('<?php echo $hero['image']; ?>')">
											
												<?php 
												$collection = $hero['colecciones'];
												?>

												<div class="collecion" data-collection="<?php echo $collection['coleccion_1']; ?>" data-url="http://showroom.theanimalsobservatory.com/catalogue-190811032/wp-admin/admin-ajax.php">
													<div class="button-collection"><?php echo $collection['coleccion_texto_1']; ?></div>
												</div>
												<div class="collecion" data-collection="<?php echo $collection['coleccion_2']; ?>" data-url="http://showroom.theanimalsobservatory.com/catalogue-190811032/wp-admin/admin-ajax.php">
													<div class="button-collection"><?php echo $collection['coleccion_texto_2']; ?></div>
												</div>
											
							    		<?php } ?>
							    	</div>
							    	<div class="main-slideshow arrow-<?php echo $i; ?>">
							    		<div class="slideshow">
								        	<?php 
											$slider = $hero['slider_repeater'];

											foreach ($slider as $slide){
												?>
													<div class="slide" style="background: url('<?php echo $slide['image']['url']; ?>');">
														<?php if ($slide['text']): ?>
														<div class="text-slider"><?php echo $slide['text']; ?></div>
														<?php endif; ?>
													</div>
												<?php
												print_r($image['text']);
												

											}

											?>

								        </div>
								        <div class="arrows">
											<div class="left" data-arrow="arrow-<?php echo $i; ?>"></div>
											<div class="right" data-arrow="arrow-<?php echo $i; ?>"></div>
										</div>
							    	</div>
							    </div>
						<?php
							}	
					?>
			      </div>
			      	
			    </div>
			<?php
				$i++; 
			endforeach;
		  endwhile; 
		endif;
	?>
	
	
</main>
</article>

<?php get_footer(); ?>