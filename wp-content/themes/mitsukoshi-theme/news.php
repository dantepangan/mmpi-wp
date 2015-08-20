<?php

/*

     Template Name: News Page

*/

get_header(); ?>
<!-- Main Content -->
<div class="container-fluid news-grid">
	<div class="container" style="height:1000px;">
	<h2>Mitsukoshi Promos & News</h2>
	<?php 
	$args = array(
		'posts_per_page'      => 15,
	);
	$query = new WP_Query( $args );
	?>	
						    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
						    	<div class="row">
						    		<div class="col-md-2 news-list">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="col-md-10">
										<a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
										<p><?php the_excerpt(); ?></p>
										<p class="author"><?php the_author(); ?><span class="category"></span></p>
									</div>
						    	</div>
						    	<br>
						    	<hr>
	<?php endwhile; endif; wp_reset_query(); ?> 
	</div>					    	
</div>				    
<!-- Main Content End -->
<!-- Footer -->
<? get_footer(); ?>
<!-- Footer End -->