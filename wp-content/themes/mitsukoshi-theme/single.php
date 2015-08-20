<?php get_header(); ?>

<div class="container-fluid about-main">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row post-content">	
			<div class="col-md-12">
				<h3 class="singlepost-title"><?php the_title(); ?></h3>
				<?php the_post_thumbnail(); ?>
				<p><?php the_content(); ?></p>
			</div>	
		</div>	
		<?php endwhile; endif; ?>	
	</div>
</div>

<!-- Footer -->
<? get_footer(); ?>
<!-- Footer End -->