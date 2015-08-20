<?php 
require_once('../../../../wp-load.php');
header('HTTP/1.1 200 OK'); 
?>
<div class="container">
<?php 
			$args = array(
			'post_type' => array('sym_motorbikes','euro_motorbikes','keeway_motorbikes'),
			'orderby' => 'rand',
			'category_name' => 'displacement-100to110cc'
			);
			$query = new WP_Query( $args );
			$i = 0;
			?>	
	    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			<?php if($i == 0) {echo '<div class="row">';} ?>
				<div class="col-md-4 bike-list">
					<h3><?php if(in_category('16')) {echo 'SYM ';} elseif (in_category('17')) {echo 'EUROMOTORS ';
					} elseif(in_category('18')) {echo 'EUROKEEWAY ';} ?><?php the_field('motorbike_name'); ?></h3>
					<img src="<?php the_field('motorbike_image'); ?>" alt="<?php the_field('motorbike_name'); ?>">
					<h4><span class="down-pay">[Type:]</span> <span class="price-color"><?php the_field('motorbike_type'); ?></span></h4>
					<h4><span class="down-pay">[Displacement:]</span> <span class="price-color"><?php the_field('displacement'); ?></span></h4>
					<h4><span class="down-pay">[Downpayment:]</span> <span class="price-color">PHP <?php the_field('downpayment_price'); ?></span></h4>
					<h4><span class="down-pay">[Price:]</span> <span class="price-color">PHP <?php the_field('cash_price'); ?></span></h4>
					<br>
					<a href="#" data-toggle="modal" data-target="#<?php the_field('unique_id'); ?>">View</a>
				</div>
				<!-- Modal Start -->	
				<div class="modal fade not-me" id="<?php the_field('unique_id'); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content view-bike">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h4 class="modal-title" id="myModalLabel"><span class="down-pay">[Model:]</span>SYM <?php the_field('motorbike_name'); ?></h4>
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
</div>						