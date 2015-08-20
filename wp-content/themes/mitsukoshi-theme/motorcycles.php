<?php

/*

     Template Name: Motorcycle Page

*/

get_header(); 
?>
<div class="container-fluid selector-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="search-header">
						<h3>Motorcycles</h3>
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
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="sendMoped">Moped/Underbone</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="sendScooter">Scooter</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="sendBusiness">Business/Tricycle</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="sendSport">Sport/Backbone</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="sendMaxi">Maxiscooter</a></li>
						  </ul>
						</div>
					</div>
					<!-- End Brand Selector -->	
				</div>
				<div class="col-md-4">
					<div class="search-selector selector-space">
					<!-- Brand Selector -->
					    <div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Choose by Price
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="send45">PHP 30,000 - PHP 45,000</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="send60">PHP 45,000 - PHP 60,000</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="send100">PHP 60,000 - PHP 100,000</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="send100plus">PHP 100,000 +</a></li>
						  </ul>
						</div>
					</div>
					<!-- End Brand Selector -->	
				</div>
				<div class="col-md-4">
					<div class="search-selector selector-space">
					<!-- Brand Selector -->
					    <div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Choose Displacement<span class="hidden-xs"> (cc)</span>
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="send100cc">100cc - 110cc</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="send150cc">110cc - 150cc</a></li>
						    <li role="presentation" class="divider"></li>
						    <li role="presentation"><a role="menuitem" tabindex="-1" class="send150ccplus">150cc+</a></li>
						  </ul>
						</div>
					</div>
					<!-- End Brand Selector -->	
				</div>
			</div>
			<div class="col-md-12 view-all-bikes">
				<a href="../motorcycles">View All</a>
			</div>
		</div>
	</div>
</div>
<!-- Brand Tabs -->
<div class="container-fluid brand-container">
	<div class="container" id="brandtoggle">
		<section>
				<div class="tabs tabs-style-linetriangle">
					<nav>
						<ul class="motorcycle-logo">
							<li><a href="#section-linetriangle-1"><span><img src="../img/sym-logo.svg"></span></a></li>
							<li><a href="#section-linetriangle-2"><span><img src="../img/euromotor-logo.svg"></span></a></li>
							<li><a href="#section-linetriangle-3"><span><img src="../img/eurokeeway-logo.svg"></span></a></li>
						</ul>
					</nav>
					<div class="content-wrap">
						<section id="section-linetriangle-1">
						<!-- Query Start -->
						<?php 
							$args = array(
							'post_type' => 'sym_motorbikes',
							'orderby' => 'rand'
							);
							$query = new WP_Query( $args );
							$i = 0;
							?>	
					    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
							<?php if($i == 0) {echo '<div class="row">';} ?>
								<div class="col-md-4 bike-list motorcycle-viewer">
									<h3>SYM <?php the_field('motorbike_name'); ?></h3>
									<img src="<?php the_field('motorbike_image'); ?>" alt="<?php the_field('motorbike_name'); ?>">
									<h4><span class="down-pay">[Type:]</span> <span class="price-color"><?php the_field('motorbike_type'); ?></span></h4>
									<h4><span class="down-pay">[Displacement:]</span> <span class="price-color"><?php the_field('displacement'); ?></span></h4>
									<h4><span class="down-pay">[Downpayment:]</span> <span class="price-color">PHP <?php the_field('downpayment_price'); ?></span></h4>
									<h4><span class="down-pay">[Price:]</span> <span class="price-color">PHP <?php the_field('cash_price'); ?></span></h4>
									<br>
									<a data-toggle="modal" data-target="#<?php the_field('unique_id'); ?>" href="#">View</a>
								</div>
								<!-- Modal Start -->	
								<div class="modal fade not-me" id="<?php the_field('unique_id'); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-dialog modal-lg">
								    <div class="modal-content view-bike">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								        <h4 class="modal-title" id="myModalLabel"><span class="down-pay">[Model:]</span> SYM <?php the_field('motorbike_name'); ?></h4>
								      </div>
								      <div class="modal-body">

								        	<div class="row">
								        		<div class="col-md-6">
								        			<img src="<?php the_field('motorbike_image'); ?>" alt="SYM <?php the_field('motorbike_name'); ?> Motorbike" />
								        		</div>
								        		<div class="col-md-6">
								    					<div class="col-md-12">
								    					<h4><span class="down-pay view-style">[Downpayment:]</span> <span class="price-color view-price">PHP <?php the_field('downpayment_price'); ?></span></h4>
														<h4><span class="down-pay view-style">[Price:]</span> <span class="price-color view-price">PHP <?php the_field('cash_price'); ?></span></h4>
								        				</div>
								        				<div class="col-md-12"><span class="down-pay view-style">[Features:]</span></div>
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
								        				<div class="col-md-12">
								        				<br>
								        				<br>
								        				<a data-toggle="modal" data-target="#enquiryModal" class="view-link" style="float:right">Inquire Now</a>
								        				</div>
								        		</div>
								        	</div>
								        	<div class="row">
								        		<div class="col-md-12 down-pay view-style">[Specifications:]</div>
								        		<br>
								        		<div class="col-md-4 view-style">
									        		<p><span class="view-specs">[Type:]</span> <?php the_field('engine_type'); ?></p>
									        		<p><span class="view-specs">[Displacement:]</span> <?php the_field('displacement'); ?></p>
									        		<p><span class="view-specs">[Cooling System:]</span> <?php the_field('cooling_system'); ?></p>
									        		<p><span class="view-specs">[Fuel System:]</span> <?php the_field('fuel_system'); ?></p>
									        		<p><span class="view-specs">[Fuel Capacity:]</span> <?php the_field('fuel_capacity'); ?></p>
								        		</div>
								        		<div class="col-md-4 view-style">
								        			<p><span class="view-specs">[Transmission:]</span> <?php the_field('transmission'); ?></p>
									        		<p><span class="view-specs">[Front Suspension:]</span> <?php the_field('front_suspension'); ?></p>
									        		<p><span class="view-specs">[Rear Suspension:]</span> <?php the_field('rear_suspension'); ?></p>
									        		<p><span class="view-specs">[Front Brake:]</span> <?php the_field('front_brake'); ?></p>
									        		<p><span class="view-specs">[Rear Brake:]</span> <?php the_field('rear_brake'); ?></p>
								        		</div>
								        		<div class="col-md-4 view-style">
								        				<p><span class="view-specs">[Front Tire:]</span> <?php the_field('front_tire'); ?></p>
								        				<p><span class="view-specs">[Rear Tire:]</span> <?php the_field('rear_tire'); ?></p>
										        		<p><span class="view-specs">[C x W x H:]</span> <?php the_field('dimensions'); ?></p>
										        		<p><span class="view-specs">[Wheel Base:]</span> <?php the_field('wheelbase'); ?></p>
										        		<p><span class="view-specs">[Dry Weight:]</span> <?php the_field('dry_weight'); ?></p>
								        		</div>
								        	</div>
								        	<div class="row">
								        		<div class="col-md-12 down-pay view-style">[Payment Plan:]</div>
								        		<div class="col-md-12 table-responsive">
								        			<table class="table table-bordered pay-plan">
								        			<tr>
								        				<td>Time to Pay</td>
								        				<td>36 Months</td>
								        				<td>30 Months</td>
								        				<td>24 Months</td>
								        				<td>18 Months</td>
								        				<td>12 Months</td>
								        				<td>6 Months</td>
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
								        	</div>
								      </div>
								    </div>
								  </div>
								</div>
								<!-- Modal End -->
								<?php $i++; ?>
								<?php if($i % 3 == 0) {echo '<div class="row">';} ?>
								<?php if($i % 3 == 0) {echo '</div>';} ?>
						<?php endwhile; endif; wp_reset_query(); ?> 	
						<!-- Query End -->	
						</section>
						<!-- Start Euromotors Grid -->
						<section id="section-linetriangle-2">
						<!-- Query Start -->
												<!-- Query Start -->
						<?php 
							$args = array(
							'post_type' => 'euro_motorbikes',
							'orderby' => 'rand'
							);
							$query = new WP_Query( $args );
							$i = 0;
							?>	
					    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
							<?php if($i == 0) {echo '<div class="row">';} ?>
								<div class="col-md-4 bike-list">
									<h3>EUROMOTORS <?php the_field('motorbike_name'); ?></h3>
									<img src="<?php the_field('motorbike_image'); ?>" alt="<?php the_field('motorbike_name'); ?>">
									<h4><span class="down-pay">[Type:]</span> <span class="price-color"><?php the_field('motorbike_type'); ?></span></h4>
									<h4><span class="down-pay">[Displacement:]</span> <span class="price-color"><?php the_field('displacement'); ?></span></h4>
									<h4><span class="down-pay">[Downpayment:]</span> <span class="price-color">PHP <?php the_field('downpayment_price'); ?></span></h4>
									<h4><span class="down-pay">[Price:]</span> <span class="price-color">PHP <?php the_field('cash_price'); ?></span></h4>
									<br>
									<a data-toggle="modal" data-target="#<?php the_field('unique_id'); ?>">View</a>
								</div>
								<!-- Modal Start -->	
								<div class="modal fade not-me" id="<?php the_field('unique_id'); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-dialog modal-lg">
								    <div class="modal-content view-bike">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								        <h4 class="modal-title" id="myModalLabel"><span class="down-pay">[Model:]</span> EUROMOTORS <?php the_field('motorbike_name'); ?></h4>
								      </div>
								      <div class="modal-body">

								        	<div class="row">
								        		<div class="col-md-6">
								        			<img src="<?php the_field('motorbike_image'); ?>" alt="SYM <?php the_field('motorbike_name'); ?> Motorbike" />
								        		</div>
								        		<div class="col-md-6">
								    					<div class="col-md-12">
								    					<h4><span class="down-pay view-style">[Downpayment:]</span> <span class="price-color view-price">PHP <?php the_field('downpayment_price'); ?></span></h4>
														<h4><span class="down-pay view-style">[Price:]</span> <span class="price-color view-price">PHP <?php the_field('cash_price'); ?></span></h4>
								        				</div>
								        				<div class="col-md-12"><span class="down-pay view-style">[Features:]</span></div>
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
								        				<div class="col-md-12">
								        				<br>
								        				<br>
								        				<a data-toggle="modal" data-target="#enquiryModal" class="view-link" style="float:right">Inquire Now</a>
								        				</div>
								        		</div>
								        	</div>
								        	<div class="row">
								        		<div class="col-md-12 down-pay view-style">[Specifications:]</div>
								        		<br>
								        		<div class="col-md-4 view-style">
									        		<p><span class="view-specs">[Type:]</span> <?php the_field('engine_type'); ?></p>
									        		<p><span class="view-specs">[Displacement:]</span> <?php the_field('displacement'); ?></p>
									        		<p><span class="view-specs">[Cooling System:]</span> <?php the_field('cooling_system'); ?></p>
									        		<p><span class="view-specs">[Fuel System:]</span> <?php the_field('fuel_system'); ?></p>
									        		<p><span class="view-specs">[Fuel Capacity:]</span> <?php the_field('fuel_capacity'); ?></p>
								        		</div>
								        		<div class="col-md-4 view-style">
								        			<p><span class="view-specs">[Transmission:]</span> <?php the_field('transmission'); ?></p>
									        		<p><span class="view-specs">[Front Suspension:]</span> <?php the_field('front_suspension'); ?></p>
									        		<p><span class="view-specs">[Rear Suspension:]</span> <?php the_field('rear_suspension'); ?></p>
									        		<p><span class="view-specs">[Front Brake:]</span> <?php the_field('front_brake'); ?></p>
									        		<p><span class="view-specs">[Rear Brake:]</span> <?php the_field('rear_brake'); ?></p>
								        		</div>
								        		<div class="col-md-4 view-style">
								        				<p><span class="view-specs">[Front Tire:]</span> <?php the_field('front_tire'); ?></p>
								        				<p><span class="view-specs">[Rear Tire:]</span> <?php the_field('rear_tire'); ?></p>
										        		<p><span class="view-specs">[C x W x H:]</span> <?php the_field('dimensions'); ?></p>
										        		<p><span class="view-specs">[Wheel Base:]</span> <?php the_field('wheelbase'); ?></p>
										        		<p><span class="view-specs">[Dry Weight:]</span> <?php the_field('dry_weight'); ?></p>
								        		</div>
								        	</div>
								        	<div class="row">
								        		<div class="col-md-12 down-pay view-style">[Payment Plan:]</div>
								        		<div class="col-md-12">
								        			<table class="table table-bordered">
								        			<tr>
								        				<td>Time to Pay</td>
								        				<td>36 Months</td>
								        				<td>30 Months</td>
								        				<td>24 Months</td>
								        				<td>18 Months</td>
								        				<td>12 Months</td>
								        				<td>6 Months</td>
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
								        	</div>
								      </div>
								    </div>
								  </div>
								</div>
								<!-- Modal End -->
								<?php $i++; ?>
								<?php if($i % 3 == 0) {echo '<div class="row">';} ?>
								<?php if($i % 3 == 0) {echo '</div>';} ?>
						<?php endwhile; endif; wp_reset_query(); ?> 	
						<!-- Query End -->	
						</section>
						<!-- End Euromotors Grid -->	
						<!-- Start Eurokeeway Grid -->
						<section id="section-linetriangle-3">
						<?php 
							$args = array(
							'post_type' => 'keeway_motorbikes',
							'orderby' => 'rand'
							);
							$query = new WP_Query( $args );
							$i = 0;
							?>	
					    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
							<?php if($i == 0) {echo '<div class="row">';} ?>
								<div class="col-md-4 bike-list">
									<h3>EUROKEEWAY <?php the_field('motorbike_name'); ?></h3>
									<img src="<?php the_field('motorbike_image'); ?>" alt="<?php the_field('motorbike_name'); ?>">
									<h4><span class="down-pay">[Type:]</span> <span class="price-color"><?php the_field('motorbike_type'); ?></span></h4>
									<h4><span class="down-pay">[Displacement:]</span> <span class="price-color"><?php the_field('displacement'); ?></span></h4>
									<h4><span class="down-pay">[Downpayment:]</span> <span class="price-color">PHP <?php the_field('downpayment_price'); ?></span></h4>
									<h4><span class="down-pay">[Price:]</span> <span class="price-color">PHP <?php the_field('cash_price'); ?></span></h4>
									<br>
									<a data-toggle="modal" data-target="#<?php the_field('unique_id'); ?>">View</a>
								</div>
								<!-- Modal Start -->	
								<div class="modal fade not-me" id="<?php the_field('unique_id'); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-dialog modal-lg">
								    <div class="modal-content view-bike">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								        <h4 class="modal-title" id="myModalLabel"><span class="down-pay">[Model:]</span>EUROKEEWAY <?php the_field('motorbike_name'); ?></h4>
								      </div>
								      <div class="modal-body">

								        	<div class="row">
								        		<div class="col-md-6">
								        			<img src="<?php the_field('motorbike_image'); ?>" alt="SYM <?php the_field('motorbike_name'); ?> Motorbike" />
								        		</div>
								        		<div class="col-md-6">
								    					<div class="col-md-12">
								    					<h4><span class="down-pay view-style">[Downpayment:]</span> <span class="price-color view-price">PHP <?php the_field('downpayment_price'); ?></span></h4>
														<h4><span class="down-pay view-style">[Price:]</span> <span class="price-color view-price">PHP <?php the_field('cash_price'); ?></span></h4>
								        				</div>
								        				<div class="col-md-12"><span class="down-pay view-style">[Features:]</span></div>
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
								        				<div class="col-md-12">
								        				<br>
								        				<br>
								        				<a data-toggle="modal" data-target="#enquiryModal" class="view-link" style="float:right">Inquire Now</a>
								        				</div>
								        		</div>
								        	</div>
								        	<div class="row">
								        		<div class="col-md-12 down-pay view-style">[Specifications:]</div>
								        		<br>
								        		<div class="col-md-4 view-style">
									        		<p><span class="view-specs">[Type:]</span> <?php the_field('engine_type'); ?></p>
									        		<p><span class="view-specs">[Displacement:]</span> <?php the_field('displacement'); ?></p>
									        		<p><span class="view-specs">[Cooling System:]</span> <?php the_field('cooling_system'); ?></p>
									        		<p><span class="view-specs">[Fuel System:]</span> <?php the_field('fuel_system'); ?></p>
									        		<p><span class="view-specs">[Fuel Capacity:]</span> <?php the_field('fuel_capacity'); ?></p>
								        		</div>
								        		<div class="col-md-4 view-style">
								        			<p><span class="view-specs">[Transmission:]</span> <?php the_field('transmission'); ?></p>
									        		<p><span class="view-specs">[Front Suspension:]</span> <?php the_field('front_suspension'); ?></p>
									        		<p><span class="view-specs">[Rear Suspension:]</span> <?php the_field('rear_suspension'); ?></p>
									        		<p><span class="view-specs">[Front Brake:]</span> <?php the_field('front_brake'); ?></p>
									        		<p><span class="view-specs">[Rear Brake:]</span> <?php the_field('rear_brake'); ?></p>
								        		</div>
								        		<div class="col-md-4 view-style">
								        				<p><span class="view-specs">[Front Tire:]</span> <?php the_field('front_tire'); ?></p>
								        				<p><span class="view-specs">[Rear Tire:]</span> <?php the_field('rear_tire'); ?></p>
										        		<p><span class="view-specs">[C x W x H:]</span> <?php the_field('dimensions'); ?></p>
										        		<p><span class="view-specs">[Wheel Base:]</span> <?php the_field('wheelbase'); ?></p>
										        		<p><span class="view-specs">[Dry Weight:]</span> <?php the_field('dry_weight'); ?></p>
								        		</div>
								        	</div>
								        	<div class="row">
								        		<div class="col-md-12 down-pay view-style">[Payment Plan:]</div>
								        		<div class="col-md-12">
								        			<table class="table table-bordered">
								        			<tr>
								        				<td>Time to Pay</td>
								        				<td>36 Months</td>
								        				<td>30 Months</td>
								        				<td>24 Months</td>
								        				<td>18 Months</td>
								        				<td>12 Months</td>
								        				<td>6 Months</td>
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
								        	</div>
								      </div>
								    </div>
								  </div>
								</div>
								<!-- Modal End -->
								<?php $i++; ?>
								<?php if($i % 3 == 0) {echo '<div class="row">';} ?>
								<?php if($i % 3 == 0) {echo '</div>';} ?>
						<?php endwhile; endif; wp_reset_query(); ?> 		
						</section>
						<!-- End Eurokeeway Grid -->	
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>

	</div>
</div>	
</div>
<!-- End Brandtabs
 -->
<!-- Footer -->
<?php get_footer(); ?>
<!-- Footer End -->
<!-- Modal for Enquiry Form-->
<div class="modal fade not-me" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Send Us a Message</h4>
      </div>
      <div class="modal-body">
        <script type="text/javascript" src="https://www.formstack.com/forms/js.php?nojquery=1&nojqueryui=1&form=1867040&viewkey=booD7RGnJO&style_version=v3"></script><noscript><a href="https://www.formstack.com/forms/?1867040-booD7RGnJO" title="Online Form">Online Form - Mitsukoshi Form</a></noscript><script type='text/javascript'>if (typeof $ == 'undefined' && jQuery){ $ = jQuery}</script>
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
		window.onload = function(){
var hash = (window.location.hash).replace('#', '');
    if (hash == "moped") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/moped.php');
	    return false;
    }
    else if (hash == "scooter") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/scooter.php');
	    return false;
    }
    else if (hash == "trike") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/business.php');
	    return false;
    }
    else if (hash == "sport") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/sport.php');
	    return false;
    }
    else if (hash == "maxi") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/maxi.php');
	    return false;
    }
    else if (hash == "45k") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/45k.php');
	    return false;
    }
    else if (hash == "60k") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/60k.php');
	    return false;
    }
    else if (hash == "100k") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/100k.php');
	    return false;
    }
    else if (hash == "100plus") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/100plus.php');
	    return false;
    }
    else if (hash == "100cc") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/100cc.php');
	    return false;
    }
    else if (hash == "150cc") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/150cc.php');
	    return false;
    }
    else if (hash == "150ccplus") {
        $('.brand-container').empty();
	    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/150ccplus.php');
	    return false;
    }
}
</script>
</body>
</html>