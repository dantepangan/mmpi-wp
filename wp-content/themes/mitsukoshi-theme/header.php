<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid" id="menu-container-fluid">
  	<div id="menu-container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		     </button>
	    </div>
	    <div class="collapse navbar-collapse" id="navbar-collapse-1">
		    <ul class="nav navbar-nav" id="top-nav">
		    	<li><a class="hidden-xs" href="<?php echo site_url(); ?>" id="mitsulogo"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2015/02/mitsukoshi-logo.svg" alt="Mitsukoshi Motors Logo"/></a></li> 
		        <li class="paddy"><a href="<?php echo site_url(); ?>">Home</a></li>
		        <li class="paddy"><a href="about">About</a></li>
				<li class="paddy"><a href="motorcycles">Motorcycles</a></li>
		        <li class="paddy"><a href="careers">Careers</a></li>
		        <li class="paddy"><a href="storefinder">Store Finder</a></li>
		        <li class="paddy"><a href="#" data-toggle="modal" data-target="#enquiryModal">Contact</a></li>
		    </ul>
	    </div><!-- /.navbar-collapse -->
	</div><!-- /. container -->    
  </div><!-- /.container-fluid -->
</nav>
<!-- Navigation End -->
