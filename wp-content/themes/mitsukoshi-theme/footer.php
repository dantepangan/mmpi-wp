<style>
	.option-inquiry {
		font-size: 1.4em;		
	}	

	.label-title {
		color:#fff;
		text-shadow: 0 2px 2px rgba(0, 0, 0, 2.0);	
	}

	.textarea-message {
		width: 35em;
		height:10em;	
	}

	.textarea-address {
		width: 35em;
		height:5em;	
	}

	.input-medium {
		width:15em;
		font-size:1.2em;
		margin-bottom:0.4em;
	}

	.input-large {
		width:20em;
		font-size:1.2em;
		margin-bottom:0.4em;
	}

	.label-address {
		font-size: 1em;
		color:#fff;
		font-family: "Lato";
		font-weight: normal;
	}

</style>
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
	  		<div class="modal-header">      	
	        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	       		<h4 class="modal-title" id="myModalLabel" sytle="font-family:Lato;">Thank you for the Inquiry!</h4>
	      	</div>
	      	<div class="modal-body" style="background-color:#FE8C00">
	  			<form>
	  				<span class="label-title" id="success-message"></span>
	  			</form>	
	  		</div>
		    <div class="modal-footer">
		    	<button type="button" style="width:8.7em;" class="btn btn-default hidden-xs" data-dismiss="modal">Close</button>
		    </div>
  		</div>
	</div>	
</div>

<!-- Modal for Enquiry Form-->
<div class="modal fade" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      	
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" sytle="font-family:Lato;">Send Us a Message</h4>
      </div>
      <div class="modal-body">
        <!--script type="text/javascript" src="https://www.formstack.com/forms/js.php?nojquery=1&nojqueryui=1&form=1867040&viewkey=booD7RGnJO&style_version=v3"></script><noscript><a href="https://www.formstack.com/forms/?1867040-booD7RGnJO" title="Online Form">Online Form - Mitsukoshi Form</a></noscript><script type='text/javascript'>if (typeof $ == 'undefined' && jQuery){ $ = jQuery}</script-->
        <form type="post" action="" id="newCustomerForm">
        	<h3 class="label-title" style="font-size:3em;">Inquire Now</h3>
        	<label class="label-title">Head Office:</label>
        	<label class="label-address">&nbsp;&nbsp;222 E. Rodriguez Sr. Ave. Quezon City - 1112 Manila</label>
        	<br/>
        	<label class="label-title">Contact Number:</label>
        	<label class="label-address">&nbsp;&nbsp;722-3333</label>
        	<hr>
        	<label class="label-title">Inquiry Type:</label>        	
        	<select name="category" id="inquire_category">
        		<option value="motorbike">Motorbike</option>
        		<option value="career">Career</option>
        		<option value="corporate">Corporate</option>
        		<option value="others">Others</option>
        	</select>
        	<br/><br/>
        	<label class="label-title">First Name:*</label>
        	<br/>
        	<input name="first_name" id="inquire_first_name" class="input-medium" placeholder="First Name" />&nbsp;<span id="first_name_error" style="color:#EC1B30;display:none">First Name is required.</span>
        	<br/>
        	<label class="label-title">Last Name:*</label>
        	<br/>
        	<input name="last_name" id="inquire_last_name" class="input-medium" placeholder="Last Name" />&nbsp;<span id="last_name_error" style="color:#EC1B30;display:none">Last Name is required.</span>
        	<br/>
        	<label class="label-title">Email:*</label>
        	<br/>
        	<input name="email" id="inquire_email" class="input-large" placeholder="We won't share or spam" />&nbsp;<span id="email_error" style="color:#EC1B30;display:none">Email is required.</span>
        	<br/>
        	<label class="label-title">Contact Number:*</label>
        	<br/>
        	<input name="contact_number" id="inquire_contact_number" class="input-medium" placeholder="Contact Number" />&nbsp;<span id="contact_number_error" style="color:#EC1B30;display:none">Contact Number is required.</span>
        	<br/>
        	<label class="label-title">Address:</label>
        	<br/>
        	<textarea name="address" id="inquire_address" class="textarea-address" placeholder="Address"></textarea>
        	<br/>                	
        	<label class="label-title">Message:</label>
        	<br/>
        	<textarea name="message" id="inquire_message" class="textarea-message" placeholder="Type Message Here..."></textarea>   
        	<input type="hidden" name="action" value="addCustomer"/>
        	<button style="margin-top:1em;margin-left:4em;" type="submit" class="btn btn-success hidden-xs" id="inquire-form-submit">Submit</button>       		
        </form>
    	<br/>  
        <div id="feedback"></div>  <br/><br/>
      </div>
      <!--div class="modal-footer">
        <button type="button" style="width:8.7em;" class="btn btn-default hidden-xs" data-dismiss="modal">Close</button>
      </div-->
    </div>
  </div>	
</div>
<!-- Contact Modal End -->
<!-- Footer -->
<div class="container-fluid footer-background">
	<div class="container footer-container">
		<div class="row">
			<div class="col-md-2 mitsu-footer">
				<ul>
					<li><a href="/motorcycles">Motorcycles</a></li>
					<li><a href="/motorcycles">All Motorcycles</a></li>
					<li><a href="/motorcycles">Mopeds/Underbone</a></li>
					<li><a href="/motorcycles">Scooters</a></li>
					<li><a href="/motorcycles">Sport/Backbone</a></li>
					<li><a href="/motorcycles">Business/Tricycle</a></li>
					<li><a href="/motorcycles">Maxiscooters</a></li>
				</ul>
			</div>
			<div class="col-md-3 mitsu-footer">
				<ul>
					<li><a href="../index.html">Mitsukoshi Motors Inc.</a></li>
					<li><a href="../about">About Us</a></li>
					<li><a href="../careers">Careers</a></li>					
					<li><a data-toggle="modal" data-target="#enquiryModal">Contact Us</a></li>
					<li><a href="../my-vpn">My VPN</a></li>
				</ul>
			</div>
			<div class="col-md-7 mitsu-footer">
				<ul>
					<li><a href="#">Brief Company Profile</a></li>
					<p class="brief-company-profile">Mitsukoshi Motors Philippines Incorporated (MMPI) is the exclusive importer, assembler, and distributor of SYM, Euro Motors, and Euro Keeway Motors in the Philippines.The dedication to provide quality yet affordable motorcycles has been the company&#39;s edge to continuously grow its market for more than 17 years. The company&#39;s humble beginning can be traced back in March 1997 through the perseverance, hard work, loyalty, and shared vision of the men and women of MMPI to provide affordable yet durable means of transportation and business for every Filipinos in the country.</p>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 copy-logo">
				<p>Copyright&copy;&nbsp;2015 - All Rights Reserved</p>
			</div>
			<!--div class="col-md-3 copy-logo">
				  <p>powered by <a href="http://luciddreamfoundry.com"><span class="ldf-footer">LUCID<span style="color:#00b3ff">.</span>DREAM<span style="color:#ff0000">.</span>FOUNDRY</span></a></p>
			</div-->
		</div>
	</div>
</div>
<!-- Footer End -->
</body>
</html>

<?php
	//add_action( 'admin_footer', 'my_action_javascript' );
	//add_action( 'wp_enqueue_scripts', 'ajax_test_enqueue_scripts' );
?>

<script type="text/javascript">
	
	jQuery('#enquiryModal').on('hide.bs.modal', function () {
		jQuery("#inquire_first_name").val('');
		jQuery("#first_name_error").hide();
		jQuery("#inquire_last_name").val('');
		jQuery("#last_name_error").hide();
		jQuery("#inquire_email").val('');
		jQuery("#email_error").hide();
		jQuery("#inquire_contact_number").val('');
		jQuery("#contact_number_error").hide();
		jQuery("#inquire_address").val('');
		jQuery("#inquire_message").val('');
	});


	jQuery('#newCustomerForm').submit(ajaxSubmit);

	function ajaxSubmit(){  

		var hasError = 0;

		if (jQuery("#inquire_first_name").val() == "") {
			jQuery("#first_name_error").show();
			hasError = 1;
		} else {
			jQuery("#first_name_error").hide();
		}

		if (jQuery("#inquire_last_name").val() == "") {
			jQuery("#last_name_error").show();
			hasError = 1;
		} else {
			jQuery("#last_name_error").hide();
		}

		if (jQuery("#inquire_email").val() == "") {
			jQuery("#email_error").text('Email is required.');
			jQuery("#email_error").show();
			hasError = 1;
		} else {

			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

			if(!(jQuery("#inquire_email").val()).match(re)) {
     			jQuery("#email_error").text('Invalid Email Format');
     			jQuery("#email_error").show();
     			hasError = 1;
     		} else {	
				jQuery("#email_error").hide();
			}
		}

		if (jQuery("#inquire_contact_number").val() == "") {
			jQuery("#contact_number_error").show();
			hasError = 1;
		} else {
			jQuery("#contact_number_error").hide();
		}

		if (hasError == 1) {
			return false;
		} else {
			var newCustomerForm = jQuery(this).serialize();   

			jQuery.ajax({  
				type:"POST",  
				url: "/wp-admin/admin-ajax.php",  
				data: newCustomerForm,  
				success:function(data){  
					//jQuery("#feedback").html(data);  
					jQuery('#enquiryModal').modal('hide');
					jQuery('#myModalLabel').text('Thank you for the Inquiry!');
					jQuery('#success-message').text(data);
					jQuery('#successModal').modal('show');
				}  
			});    

			return false;
		}  
	}



</script>