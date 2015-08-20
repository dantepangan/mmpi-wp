<div class="show-container">
	<h4 class="blue">Masbate</h4>
	<?php 
		define('WP_USE_THEMES', false);
        require_once('../../../../wp-load.php');
		// Our include
		$args = array(
				'post_type' => 'mindanao_store',
				'category_name' => 'masbate'
				);
		$query = new WP_Query( $args );

	?>	
				<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<div class="shop-spot">
					<h5><?php the_field('location'); ?></h5>
					<p><?php the_field('dealer'); ?></p>
					<p><i class="fa fa-map-marker"></i>&nbsp;<?php the_field('address'); ?></p>
					<p><i class="fa fa-phone-square"></i>&nbsp; <?php the_field('contact_number'); ?></p>
					<!-- <a href="#">View on Google Maps</a> -->
				</div>	
	<?php endwhile; endif; wp_reset_postdata(); ?>

</div>	