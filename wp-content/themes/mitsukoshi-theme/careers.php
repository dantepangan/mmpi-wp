<?php

/*

     Template Name: Careers Page

*/

get_header(); ?>

<div class="container-fluid careers-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="search-header careers-header">
						<h3>Careers</h3>
					</div>	
			</div>
		</div>
	</div>
</div>
<div class="container-fluid mitsu-team hidden-xs">
	
</div>
<div class="container-fluid team-logos hidden-xs">
	<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-2">
					<img src='../img/sym-logo.svg' class="img-responsive" alt="SYM Motorcycles Logo">
				</div>	
				<div class="col-md-3">
					<img src='http://mitsukoshimotors.com/wp-content/uploads/2015/03/eurokeeway-logo1.svg' class="img-responsive" alt="Eurokeeway Logo">
				</div>
				<div class="col-md-3">
					<img src='../img/euromotor-logo.svg' class="img-responsive" alt="Euro Motors Logo">
				</div>
			</div>
	</div>
</div>	
<div class="container-fluid career-benefits">
	<div class="container">
			<div class="row">
				<hr>
				<div class="col-md-4 col-md-offset-4">
				<h3>Be Part of Our Team</h3>
				</div>
				<div class="col-md-4 view-positions">
				<a href="#available-careers" id="career-scroll">View Available Positions</a>
				</div>
			</div>
			<div class="row career-benefits-copy">
			<div class="col-md-12">
				<h4>Benefits of Working with Us</h4>
				<p>Mitsukoshi Motors Philippines Incorporated (MMPI) is the exclusive manufacturer and distributor of SYM, Euro Motors, and Euro Keeway in the country. We provide opportunities to individuals who want to excel in the fields of retail and manufacturing.</p>
				<ul>
					<li><strong>Nationwide Store Coverage</strong><br>The company boasts it wide network of stores nationwide where you can grow and develop your professional skills.<em>You can be assigned at the dealer network near you.</em></li>
					<li><strong>Incentives and Rewards Program</strong><br>MMPI as performance driven organization rewards manpower workforce with remarkable performance in their field.<em>Earn more! Enjoy the fruits of your labor.</em></li>
					<li><strong>Trainings and Seminars</strong><br>The company provides skill based and comprehensive trainings for manpower workforce to become equipped and successful in their own field of expertise.<em>Learn while you work!</em></li>
					<li><strong>Career Development</strong><br>More than being a regular manpower workforce, you can establish your long term career with us.<em>You can be the next frontline manager!</em></li>
					<li><strong>Government Mandated Benefits (SSS, Phil Health, Pag-Ibig)</strong><br>Basic government mandated benefits are provided to manpower workforce.<em>Benefit from your contributions.</em></li>
				</ul>
			</div>	
			</div>
	</div>
</div>
<div class="container-fluid career-testimonials">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>What Our Manpower Workforce Are Saying</h3>
			</div>
		</div>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <div class="row">
			      	<div class="col-md-3">
			      		<img src="../img/small-testimonial-1.jpg" class="img-responsive img-circle center-element" alt="user-testimonial" />
			      	</div>
			      	<div class="col-md-8">
			      	<p>SYM and Euro motorcycles are the best brands for me. Why? Because they both have the durability and style that I want in my 12 years of motorcycle riding experience</p>
			      	</div>
			      </div>
			    </div>
			    <div class="item">
			      <div class="row">
			      	<div class="col-md-3">
			      		<img src="../img/small-testimonial-2.jpg" class="img-responsive img-circle center-element" alt="user-testimonial" />
			      	</div>
			      	<div class="col-md-8">
			      		<p>My brother is using Bonus X and according to him, Bonus X is good and smooth to drive. I also have An early model of Jet Scooter which is easy to drive.</p>
			      	</div>
			      </div>
			    </div>
			    <div class="item">
			      <div class="row">
			      	<div class="col-md-3">
			      		<img src="../img/small-testimonial-3.jpg" class="img-responsive img-circle center-element" alt="user-testimonial" />
			      	</div>
			      	<div class="col-md-8">
			      		<p>The Sym Jet 125 is a twist and go motorcycle, easy to manuever on traffic, great acceleration and very reliable during long drive.</p>
			      	</div>
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <i class="fa fa-caret-left"></i>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <i class="fa fa-caret-right"></i>
			  </a>
		</div>
	</div>
</div>
<br>
<br>
<div class="container-fluid careers-listing">
	<div class="container">
		<div class="row">
			<hr>
			<div class="col-md-12">
				<h3 id="available-careers">Available Positions</h3>
			</div>
			<div class="col-md-12">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<!-- Query -->

				<?php 

					$args = array(
							'post_type' => 'career'
							);
					$query = new WP_Query( $args );

				?>	
				<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="<?php the_field('unique_heading'); ?>">
				      <h4 class="panel-title"><span class="career-position">Position&nbsp;&nbsp;</span><?php the_field('position'); ?><br>
				      	<a href="#" data-toggle="modal" data-target="#enquiryModal" class="career-apply">Apply</a><!-- Placeholder to trigger modal -->
				        <a data-toggle="collapse" data-parent="#accordion" href="#<?php the_field('unique_id'); ?>" aria-expanded="true" aria-controls="<?php the_field('unique_id'); ?>" class="career-detail">
				          View Details
				        </a>
				        <span class="career-location"><span class="career-position">Location&nbsp;&nbsp;</span><?php the_field('location'); ?></span>
				      </h4>
				    </div>
				    <div id="<?php the_field('unique_id'); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?php the_field('unique_heading'); ?>">
				      <div class="panel-body">
				      	<p><?php the_field('career_detail'); ?></p>
				       
				      </div>
				    </div>
				  </div>

				<?php endwhile; endif; wp_reset_postdata(); ?>

				  <!-- Query End -->
		
		</div>
	</div>
   </div>
</div>
</div>
<!-- Footer -->
<?php get_footer(); ?> 
<!-- Footer End -->
<!-- Modal for Enquiry Form-->
<div class="modal fade" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">This Test - Send Us a Message</h4>
      </div>
      <div class="modal-body">
        <!--script type="text/javascript" src="https://www.formstack.com/forms/js.php?nojquery=1&nojqueryui=1&form=1867040&viewkey=booD7RGnJO&style_version=v3"></script><noscript><a href="https://www.formstack.com/forms/?1867040-booD7RGnJO" title="Online Form">Online Form - Mitsukoshi Form</a></noscript><script type='text/javascript'>if (typeof $ == 'undefined' && jQuery){ $ = jQuery}</script-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>