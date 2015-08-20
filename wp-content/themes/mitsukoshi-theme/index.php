<?php get_header(); ?>
<div class="container-fluid visible-xs-block logo-small">
<div class="container">
	<img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2015/02/mitsukoshi-logo.svg" alt="Mitsukoshi Motors Logo" class="img-responsive"/>
</div>	
</div>
<!-- Homepage-Slider -->
<div class="container-fluid hidden-xs" id="home-slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
     <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  	<?php 
	$args = array(
			'post_type' => 'featured_image'
			);
	$query = new WP_Query( $args );
	$i = 0;
	?>	
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>    
  	<div class="item <?php if ($i == 1) echo 'active'; ?>">
      <img src="<?php the_field('featured_image'); ?>" alt="<?php the_field('image_description'); ?>">
    </div> 
  	<?php $i++; endwhile; endif; wp_reset_postdata(); ?> 
  </div>

  <!-- Controls -->
  <a class="left carousel-control fa-5x" href="#carousel-example-generic" role="button" data-slide="prev">
    <i class="fa fa-angle-left"></i>
  </a>
  <a class="right carousel-control fa-5x" href="#carousel-example-generic" role="button" data-slide="next">
    <i class="fa fa-angle-right"></i>
  </a>
  </div>
</div>
<!-- End of Homepage-Slider -->
<!-- Odometer -->
<div class="row odometer-container hidden-xs">
<!-- 	<div class="col-md-6">
		<img src="http://localhost/wordpress/wp-content/uploads/2015/02/mitsukoshi-logo.svg" alt="Mitsukoshi Motors Logo" class="img-responsive" style="display:none;">
	</div> -->
	<section class="cd-intro">
		<h1 class="cd-headline letters rotate-2">
			<span class="cd-words-wrapper">
				<b class="is-visible">Visit&nbsp;Any&nbsp;Of&nbsp;&nbsp;Our&nbsp;350+&nbsp;Dealer&nbsp;Networks&nbsp;Nationwide</b>
				<b>Trusted&nbsp;by&nbsp;over&nbsp;100000&nbsp;Happy&nbsp;Customers&nbsp;in&nbsp;2014</b>
				<!-- <b></b> -->
			</span>
		</h1>
	</section>
</div>
<!-- End of Odometer -->
<!-- Bike & Budget Finder -->
<div class="container-fluid home-finder">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="search-header">
						<h3>Find Your Motorcycle</h3>
					</div>	
				</div>
				<div class="col-md-4">
					<div class="search-selector selector-space-1">
					<!-- Brand Selector -->
					    <div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Choose Type
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#moped">Moped/Underbone</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#scooter">Scooter</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#trike">Business/Tricycle</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#sport">Sport/Backbone</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#maxi">Maxiscooter</a></li>
						  </ul>
						</div>
					</div>
					<!-- End Brand Selector -->	
				</div>
				<div class="col-md-4">
					<div class="search-selector selector-space">
					<!-- Brand Selector -->
					    <div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">Choose by Price
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#45k">PHP 30,000 - PHP 45,000</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#60k">PHP 45,000 - PHP 60,000</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#100k">PHP 60,000 - PHP 100,000</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#100plus">PHP 100,000 +</a></li>
						  </ul>
						</div>
					</div>
					<!-- End Brand Selector -->	
				</div>
				<div class="col-md-4">
					<div class="search-selector selector-space">
					<!-- Brand Selector -->
					    <div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown">Choose Displacement<span class="hidden-xs"> (cc)</span>
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#100cc">100cc - 110cc</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#150cc">110cc - 150cc</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" href="motorcycles/#150ccplus">150cc+</a></li>
						  </ul>
						</div>
					</div>
					<!-- End Brand Selector -->	
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End of Bike & Budget Finder -->
<div class="container-fluid" id="featured-bikes">
	<div class="container">
		<div class="row featured-header">
			<h3>Featured Motorcycles</h3>	
		</div>
		<!-- Tab Section Start -->
		<!-- SYM Tabs -->
		<div class="row sym-logo">
			<div class="col-md-6">
				<img src="img/sym-logo.svg" alt="SYM Engine of Life Logo" />
			</div>	
			<div class="col-md-6">
				<a href="motorcycles">View All</a>
			</div>
		</div>
			<section>
				<div class="tabs tabs-style-flip">
					<nav>
						<ul>
							<?php 
							$args = array(
							'post_type' => 'featured_motorbike_s',
							'posts_per_page' => 3
							);

							$query = new WP_Query( $args );
							//var_dump($query);
							?>	
							<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			  				<li><a href="#section-flip-<?php the_field('feature_order'); ?>"><span><?php the_field('motorbike_name'); ?></span></a></li>
			  				<?php endwhile; endif; wp_reset_postdata(); ?> 
						</ul>
					</nav>
					<div class="content-wrap">
					<!-- Start Loop Here -->
					<?php 
							$args = array(
							'post_type' => 'featured_motorbike_s',
							'posts_per_page' => 3
							);

							$query = new WP_Query( $args );
							?>	
					<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
						<section id="section-flip-<?php the_field('feature_order'); ?>">
						 <div class="row hide-me">
               	<!--?php echo the_field('feature_order') . '|';
											echo the_field('motorbike_name'). '|';
											echo the_field('36_month_instalment'). '|';
								?-->
							<div class="col-md-6 featured-bike-img">
								<img src="<?php the_field('motorbike_image'); ?>" class="img-responsive center-element" alt="SYM Bonus 110"/>
							</div>
						    <div class="col-md-6 featured-bike-intro">
						    	<h4>SYM <?php the_field('motorbike_name'); ?></h4>
						    	<div class="col-md-12">
						    		<h6>[Features:]</h6>
						    		<h5><span>[TYPE:]</span>&nbsp;&nbsp;<?php the_field('type'); ?></h5>
						    	</div>
						    	<div class="col-md-4 featured-mini-p">
						    		<img src="<?php the_field('detail_image_1'); ?>" alt="Sporty Look Headlight" class="img-responsive">
						    		<p><?php the_field('detail_caption_1'); ?></p>
						    	</div>
						    	<div class="col-md-4 featured-mini-p">
						    		<img src="<?php the_field('detail_image_2'); ?>" alt="Sporty spedometer" class="img-responsive">
						    		<p><?php the_field('detail_caption_2'); ?></p>
						    	</div>
						    	<div class="col-md-4 featured-mini-p">
						    		<img src="<?php the_field('detail_image_3'); ?>" alt="Sporty spedometer" class="img-responsive">
						    		<p><?php the_field('detail_caption_3'); ?></p>
						    	</div>
						    	<div class="col-md-6 cash-price detail-button">
						    		<p><span>[CASH PRICE:]</span><br>PHP <?php the_field('cash_price'); ?></p>
						    		<a href="#" data-target="#<?php the_field('feature_order'); ?>-specs-modal" data-toggle="modal">SEE DETAILS</a>
						    	</div>
						    	<div class="col-md-6 cash-price down-payment monthly-modal">
						    		<p><span>[DOWNPAYMENT:]</span><br>PHP <?php the_field('downpayment_price'); ?></p>
						    		<a href="#" data-toggle="modal" data-target="#<?php the_field('feature_order'); ?>-payment-modal">VIEW PAYMENT PLANS</a>
						    	</div>
						    	<div class="col-md-12 inquire-button">
						    		<a data-toggle="modal" href="#" data-target="#enquiryModal">INQUIRE NOW</a>
						    	</div>
							</div>
						 </div>	
						</section>
						
						<!-- SYM Bonus 110 Specs-Modal -->
						<div class="modal fade" id="<?php the_field('feature_order'); ?>-specs-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  	<div class="modal-dialog modal-lg">
						    	<div class="modal-content">
						    		<div class="modal-header">
							        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							        	<h2 class="modal-title" id="myModalLabel">SPECIFICATIONS</h2>
						    		</div>
						      		<div class="modal-body">

							      		<div class="row">
							        		<div class="col-md-7">
							        			<img src="<?php the_field('motorbike_image'); ?>" alt="SYM <?php the_field('motorbike_name'); ?> Motorbike" />

							        			<div class="col-md-4 view-feature">
						        					<img src="<?php the_field('detail_image_1'); ?>" alt="<?php the_field('detail_caption_1'); ?>">
						        					<p><?php the_field('detail_caption_1'); ?></p>
						        				</div>
						        				<div class="col-md-4 view-feature">
						        					<img src="<?php the_field('detail_image_2'); ?>" alt="<?php the_field('detail_caption_2'); ?>">
						        					<p><?php the_field('detail_caption_2'); ?></p>
						        				</div>
						        				<div class="col-md-4 view-feature">
						        					<img src="<?php the_field('detail_image_3'); ?>" alt="<?php the_field('detail_caption_3'); ?>">
						        					<p><?php the_field('detail_caption_3'); ?></p>
						        				</div>

							        		</div>

							        		<div class="col-md-5">
						    					<div class="col-md-12">
						    					<h4><span class="down-pay view-style">[Downpayment:]</span> <span class="price-color view-price">PHP <?php the_field('downpayment_price'); ?></span></h4>
												<h4><span class="down-pay view-style">[Price:]</span> <span class="price-color view-price">PHP <?php the_field('cash_price'); ?></span></h4>
						        				</div>
						        				<div class="col-md-12">
						        					<span class="down-pay view-style">[Features:]</span>
						        				</div>
						        				<br/>
						        				<div class="col-md-10 spec-info" style="font-size:14px;">
									        		<p>[Type:]<span class="black">&nbsp;<?php the_field('type'); ?></span></p>
									        		<p>[Displacement:]<span class="black">&nbsp;<?php the_field('displacement'); ?></span></p>
									        		<p>[Cooling System:]<span class="black">&nbsp;<?php the_field('cooling_system'); ?></span></p>
									        		<p>[Fuel System:]<span class="black">&nbsp;<?php the_field('fuel_system'); ?></span></p>
									        		<p>[Transmission:]<span class="black">&nbsp;<?php the_field('transmission'); ?></span></p>
									        		<p>[Front Suspension:]<span class="black">&nbsp;<?php the_field('front_suspension'); ?></span></p>
									        		<p>[Rear Suspension:]<span class="black">&nbsp;<?php the_field('rear_suspension'); ?></span></p>
									        		<p>[Front Brake:]<span class="black">&nbsp;<?php the_field('front_brake'); ?></span></p>
									        		<p>[Rear Brake:]<span class="black">&nbsp;<?php the_field('rear_brake'); ?></span></p>
									        		<p>[Front Tire:]<span class="black">&nbsp;<?php the_field('front_tire'); ?></span></p>
									        		<p>[Rear Tire:]<span class="black">&nbsp;<?php the_field('rear_tire'); ?></span></p>
									        		<p>[C x W x H:]<span class="black">&nbsp;<?php the_field('dimensions'); ?></span></p>
									        		<p>[Wheel Base:]<span class="black">&nbsp;<?php the_field('wheelbase'); ?></span></p>
									        		<p>[Dry Weight:]<span class="black">&nbsp;<?php the_field('dry_weight'); ?></span></p>
									        		<p>[Fuel Capacity:]<span class="black">&nbsp;<?php the_field('fuel_capacity'); ?></span></p>
									        	</div>
							        		</div>
						        		</div>
						        	</div>	
						    	</div>
						  	</div>
						</div>
						<!-- SYM Bonus 110 Specs-Modal End -->
						
						<!-- SYM Bonus 110 Payment-Moddal -->
						<div class="modal fade" id="<?php the_field('feature_order'); ?>-payment-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h4 class="modal-title payment-plan-options" id="myModalLabel">PAYMENT PLANS</h4>
						      </div>
						      <div class="modal-body payment-plan-body">
						        <div class="row">
						        	<div class="col-md-12 table-responsive">
						        		<!--h3 class="payment-title">Payment Plans</h3-->
						        		<h3 class="payment-title">INSTALLMENT:</h3>
						        		<h4 class="downpayment-title">[Downpayment]<br><br><span>Only Php <?php the_field('downpayment_price'); ?></span></h4>
						        		<table class="table table-bordered">
						        			<tr>
						        				<!--td>Time to Pay</td-->
						        				<td>Months to Pay:</td>
						        				<td>36</td>
						        				<td>30</td>
						        				<td>24</td>
						        				<td>18</td>
						        				<td>12</td>
						        				<td>6</td>
						        			</tr>
						        			<tr>
						        				<td>Monthly Payment (Php):</td>
						        				<td><?php the_field('36_month_instalment'); ?></td>
						        				<td><?php the_field('30_month_instalment'); ?></td>
						        				<td><?php the_field('24_month_instalment'); ?></td>
						        				<td><?php the_field('18_month_instalment'); ?></td>
						        				<td><?php the_field('12_month_instalment'); ?></td>
						        				<td><?php the_field('6_month_instalment'); ?></td>
						        			</tr>
						        		</table>

						        		<h3 class="payment-title">CASH:</h3>

						        	</div>        	
						        	<div class="col-md-12 cash-price-modal-container">
						        		<h3 class="cash-price-modal">Payment:<br><span>Php <?php the_field('cash_price'); ?></span></h3>
						        	</div>
						        </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default hidden-xs" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div><?php endwhile; endif; wp_reset_postdata(); ?> 
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
			<br>
			<br>
		<!-- Euro Motors Tabs -->	
		<hr>
		<br>
		<br>
		<div class="row euro-logo">
			<div class="col-md-6">
				<img src="img/euromotor-logo.svg" alt="Euro Motors Logo" class="img-responsive" />
			</div>
			<div class="col-md-6">
				<a href="motorcycles">View All</a>
			</div>
		</div>
			<section>
				<div class="tabs tabs-style-flip">
					<nav>
						<ul>
							<?php 
							$args = array(
							'post_type' => 'featured_motorbike_e',
							'posts_per_page' => 3
							);

							$query = new WP_Query( $args );
							?>	
							<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			  				<li><a href="#section-flip-<?php the_field('feature_order'); ?>"><span><?php the_field('motorbike_name'); ?></span></a></li>
			  				<?php endwhile; endif; wp_reset_postdata(); ?>
						</ul>
					</nav>
					<div class="content-wrap">
						<?php 
							$args = array(
							'post_type' => 'featured_motorbike_e',
							'posts_per_page' => 3
							);

							$query = new WP_Query( $args );
							?>	
					<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
						<section id="section-flip-<?php the_field('feature_order'); ?>">
						 <div class="row hide-me">
							<div class="col-md-6 featured-bike-img">
								<img src="<?php the_field('motorbike_image'); ?>" class="img-responsive center-element" alt="SYM Bonus 110"/>
							</div>
						    <div class="col-md-6 featured-bike-intro">
						    	<h4>Euromotors <?php the_field('motorbike_name'); ?></h4>
						    	<div class="col-md-12">
						    		<h6>[Features:]</h6>
						    		<h5><span>[TYPE:]</span>&nbsp;&nbsp;<?php the_field('type'); ?></h5>
						    	</div>
						    	<div class="col-md-4 featured-mini-p">
						    		<img src="<?php the_field('detail_image_1'); ?>" alt="Sporty Look Headlight" class="img-responsive">
						    		<p><?php the_field('detail_caption_1'); ?></p>
						    	</div>
						    	<div class="col-md-4 featured-mini-p">
						    		<img src="<?php the_field('detail_image_2'); ?>" alt="Sporty spedometer" class="img-responsive">
						    		<p><?php the_field('detail_caption_2'); ?></p>
						    	</div>
						    	<div class="col-md-4 featured-mini-p">
						    		<img src="<?php the_field('detail_image_3'); ?>" alt="Sporty spedometer" class="img-responsive">
						    		<p><?php the_field('detail_caption_3'); ?></p>
						    	</div>
						    	<div class="col-md-6 cash-price detail-button">
						    		<p><span>[CASH PRICE:]</span><br>PHP <?php the_field('cash_price'); ?></p>
						    		<a href="#" data-target="#<?php the_field('feature_order'); ?>-specs-modal" data-toggle="modal">SEE DETAILS</a>
						    	</div>
						    	<div class="col-md-6 cash-price down-payment monthly-modal">
						    		<p><span>[DOWNPAYMENT:]</span><br>PHP <?php the_field('downpayment_price'); ?></p>
						    		<a href="#" data-toggle="modal" data-target="#<?php the_field('feature_order'); ?>-payment-modal">VIEW PAYMENT PLANS</a>						    		
						    	</div>
						    	<div class="col-md-12 inquire-button">
						    		<a data-toggle="modal" href="#" data-target="#enquiryModal">INQUIRE NOW</a>
						    	</div>
							</div>
						 </div>	
						</section>

						<!-- SYM Bonus 110 Specs-Modal -->
						<div class="modal fade" id="<?php the_field('feature_order'); ?>-specs-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  	<div class="modal-dialog modal-lg">
						    	<div class="modal-content">
						    		<div class="modal-header">
							        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							        	<h2 class="modal-title" id="myModalLabel">SPECIFICATIONS</h2>
						    		</div>
						      		<div class="modal-body">

							      		<div class="row">
							        		<div class="col-md-7">
							        			<img src="<?php the_field('motorbike_image'); ?>" alt="SYM <?php the_field('motorbike_name'); ?> Motorbike" />

							        			<div class="col-md-4 view-feature">
						        					<img src="<?php the_field('detail_image_1'); ?>" alt="<?php the_field('detail_caption_1'); ?>">
						        					<p><?php the_field('detail_caption_1'); ?></p>
						        				</div>
						        				<div class="col-md-4 view-feature">
						        					<img src="<?php the_field('detail_image_2'); ?>" alt="<?php the_field('detail_caption_2'); ?>">
						        					<p><?php the_field('detail_caption_2'); ?></p>
						        				</div>
						        				<div class="col-md-4 view-feature">
						        					<img src="<?php the_field('detail_image_3'); ?>" alt="<?php the_field('detail_caption_3'); ?>">
						        					<p><?php the_field('detail_caption_3'); ?></p>
						        				</div>

							        		</div>

							        		<div class="col-md-5">
						    					<div class="col-md-12">
						    					<h4><span class="down-pay view-style">[Downpayment:]</span> <span class="price-color view-price">PHP <?php the_field('downpayment_price'); ?></span></h4>
												<h4><span class="down-pay view-style">[Price:]</span> <span class="price-color view-price">PHP <?php the_field('cash_price'); ?></span></h4>
						        				</div>
						        				<div class="col-md-12">
						        					<span class="down-pay view-style">[Features:]</span>
						        				</div>
						        				<br/>
						        				<div class="col-md-10 spec-info" style="font-size:14px;">
									        		<p>[Type:]<span class="black">&nbsp;<?php the_field('type'); ?></span></p>
									        		<p>[Displacement:]<span class="black">&nbsp;<?php the_field('displacement'); ?></span></p>
									        		<p>[Cooling System:]<span class="black">&nbsp;<?php the_field('cooling_system'); ?></span></p>
									        		<p>[Fuel System:]<span class="black">&nbsp;<?php the_field('fuel_system'); ?></span></p>
									        		<p>[Transmission:]<span class="black">&nbsp;<?php the_field('transmission'); ?></span></p>
									        		<p>[Front Suspension:]<span class="black">&nbsp;<?php the_field('front_suspension'); ?></span></p>
									        		<p>[Rear Suspension:]<span class="black">&nbsp;<?php the_field('rear_suspension'); ?></span></p>
									        		<p>[Front Brake:]<span class="black">&nbsp;<?php the_field('front_brake'); ?></span></p>
									        		<p>[Rear Brake:]<span class="black">&nbsp;<?php the_field('rear_brake'); ?></span></p>
									        		<p>[Front Tire:]<span class="black">&nbsp;<?php the_field('front_tire'); ?></span></p>
									        		<p>[Rear Tire:]<span class="black">&nbsp;<?php the_field('rear_tire'); ?></span></p>
									        		<p>[C x W x H:]<span class="black">&nbsp;<?php the_field('dimensions'); ?></span></p>
									        		<p>[Wheel Base:]<span class="black">&nbsp;<?php the_field('wheelbase'); ?></span></p>
									        		<p>[Dry Weight:]<span class="black">&nbsp;<?php the_field('dry_weight'); ?></span></p>
									        		<p>[Fuel Capacity:]<span class="black">&nbsp;<?php the_field('fuel_capacity'); ?></span></p>
									        	</div>
							        		</div>
						        		</div>
						        	</div>	
						    	</div>
						  	</div>
						</div>
						<!-- SYM Bonus 110 Specs-Modal End -->

						<!-- SYM Bonus 110 Payment-Moddal -->
						<div class="modal fade" id="<?php the_field('feature_order'); ?>-payment-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h4 class="modal-title payment-plan-options" id="myModalLabel">[Payment Options:]</h4>
						      </div>
						      <div class="modal-body payment-plan-body">
						        <div class="row">
						        	<div class="col-md-12">
						        		<h3 class="payment-title">[Payment Plan:]</h3>
						        		<h4 class="downpayment-title">[Downpayment:]<br><br><span>Only PHP <?php the_field('downpayment_price'); ?></span></h4>
						        		<table class="table table-bordered">
						        			<tr>
						        				<td>Time to Pay</td>
						        				<td>36 Months</td>
						        				<td>30 Months</td>
						        				<td>24 Months</td>
						        				<td>18 Months</td>
						        				<td>12 Months</td>
						        				<td>6<br> Months</td>
						        			</tr>
						        			<tr>
						        				<td>Monthly Payment:</td>
						        				<td>PHP <?php the_field('36_month_instalment'); ?></td>
						        				<td>PHP <?php the_field('30_month_instalment'); ?></td>
						        				<td>PHP <?php the_field('24_month_instalment'); ?></td>
						        				<td>PHP <?php the_field('18_month_instalment'); ?></td>
						        				<td>PHP <?php the_field('12_month_instalment'); ?></td>
						        				<td>PHP <?php the_field('6_month_instalment'); ?></td>
						        			</tr>
						        		</table>
						        	</div>
						        	<div class="col-md-12 cash-price-modal-container">
						        		<h3 class="cash-price-modal">[Cash Payment:]<br><br><span>PHP <?php the_field('cash_price'); ?></span></h3>
						        	</div>
						        </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>
						<?php endwhile; endif; wp_reset_postdata(); ?> 
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
		<!-- Tab Section End -->	
	</div>
</div>
<!-- New News & Video Container -->
<!-- <div class="container-fluid news-grid">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2><span>Promos</span> & Current <span>News</span></h2>
		</div>
	</div>
		<php 
		$args = array(
			'posts_per_page'      => 2,
		);
		$query = new WP_Query( $args );
		?>	
							    <php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
							    	<div class="row">
							    		<div class="col-md-2 news-list">
											<php the_post_thumbnail(); ?>
										</div>
										<div class="col-md-10">
											<a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
											<p><php the_excerpt(); ?></p>
											<p class="author"><php the_author(); ?><span class="category"></span></p>
										</div>
							    	</div>
							    	<br>
							    	<hr>
		<php endwhile; endif; wp_reset_query(); ?> 
		</div>
</div> -->
<!-- New News & Video Container End -->


<!-- Contact Section -->
<div class="container-fluid contact-modal-container">
<!-- Contact Modal -->
<!-- Button trigger modal -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h2>Tara Na! Inquire about a Motorcycle or Message Us</h2>
			</div>
			<div class="col-md-6">
				<ul>
					<li><i class="fa fa-check-square-o"></i>&nbsp;Motorcycles for All Purpose Use and Style</li>
					<li><i class="fa fa-check-square-o"></i>&nbsp;Easy Payable Plans</li>
					<li><i class="fa fa-check-square-o"></i>&nbsp;As low as PHP 2000 Downpayment</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for Brand New Units</li>
					<li><i class="fa fa-check-square-o"></i>&nbsp;Fuel Efficient</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul>
					<li><i class="fa fa-check-square-o"></i>&nbsp;As low as PHP 1000 Downpayment</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for Repossesed Units</li>
					<li><i class="fa fa-check-square-o"></i>&nbsp;Easy to replace parts</li>
					<li><i class="fa fa-check-square-o"></i>&nbsp;One Day Processing</li>
					<li><i class="fa fa-check-square-o"></i>&nbsp;Over 350 Dealer Networks Nationwide</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#enquiryModal">Inquire Now</button>
			</div>
		</div>
	</div>
</div>
<!-- End Contact Section -->
<!-- Modal Section -->
<!-- SYM Jet Power 125 Specs-Modal -->
<div class="modal fade" id="jetpower-125-specs-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">[Specifications:]</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-4 spec-info">
        		<p>[Type:]</p>
        		<p>[Displacement:]</p>
        		<p>[Cooling System:]</p>
        		<p>[Fuel System:]</p>
        		<p>[Ignition:]</p>
        		<p>[Transmission:]</p>
        		<p>[Front Suspension:]</p>
        		<p>[Rear Suspension:]</p>
        		<p>[Front Brake:]</p>
        		<p>[Rear Brake:]</p>
        		<p>[Front Tire:]</p>
        		<p>[Rear Tire:]</p>
        		<p>[C x W x H:]</p>
        		<p>[Wheel Base:]</p>
        		<p>[Dry Weight:]</p>
        		<p>[Fuel Capacity:]</p>
        	</div>
        	<div class="col-md-4 spec-value">
        		<p>4-stroke Single Cylinder</p>
        		<p>124.6 cc</p>
        		<p>Air</p>
        		<p>Carburetor</p>
        		<p>C.D.I.</p>
        		<p>CVT</p>
        		<p>Telescopic Fork</p>
        		<p>Unit Swing Arm</p>
        		<p>Disk 180mm</p>
        		<p>Drum 130mm</p>
        		<p>80/90 - 14</p>
        		<p>90/90 - 17</p>
        		<p>1848 x 690 x 1080</p>
        		<p>1290</p>
        		<p>105</p>
        		<p>4.5L</p>
        	</div>
        </div>
        <hr>
        <div class="row">
        	<div class="col-md-12 available-color">
        		<p>[Available Colors:]</p>
        	</div>
        	<div class="col-md-12">

        			<div class="col-md-2 color-1"><p>Blue</p></div>
        			<div class="col-md-2 color-black"><p>& Black</p></div>

        			<div class="col-md-2 color-2"><p>Yellow</p></div>
        			<div class="col-md-2 color-black"><p>& Black</p></div>


        			<div class="col-md-2 color-3"><p>Red</p></div>
        			<div class="col-md-2 color-black"><p>& Black</p></div>

        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
		(function() {

			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});

		})();
</script>
<!-- SYM Jet Power 125 Specs-Modal End -->
<?php get_footer(); ?>