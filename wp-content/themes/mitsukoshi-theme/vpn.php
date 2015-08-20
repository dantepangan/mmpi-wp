<?php

/*

     Template Name: Careers Page

*/

get_header(); ?>

<style>
	.short-desc {
		font-size: 1.4em;	
		text-align: center;
		color: #3c82e7;
		font-family: "Titillium Web", sans-serif;	
		font-weight: normal;
	}

	.style-1 input[type="text"] {
  		padding: 10px;
  		border: solid 1px #dcdcdc;
  		transition: box-shadow 0.3s, border 0.3s;
	}

	.style-1 input[type="text"]:focus,
	.style-1 input[type="text"].focus {
  		border: solid 1px #707070;
  		box-shadow: 0 0 5px 1px #969696;
	}

</style>

<div class="container-fluid careers-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="search-header careers-header">
						<h3>My VPN</h3>
					</div>	
			</div>
		</div>
	</div>
</div>

<div class="container-fluid mitsu-vpn hidden-xs">
</div>

<form type="post" action="" id="generateKeyForm">
<div align="center" class="search-header careers-header">
	<table class="table-condensed">
		<thead>
		</thead>
		<thead>
		<tbody>
			<tr>
				<td style="float:right"><h3>Id Number:</h3></td>
				<td class="input-list style-1 clearfix"><input name="id_number" id="input-id-number" type="text" placeholder="1501001"></td>
			</tr>
			<tr>
				<td></td><td><span id="id_number_error" style="color:#EC1B30;display:none;">ID Number is required.</td></tr>
			<tr>
				<td style="float:right"><h3>Company Email:</h3></td>
				<td class="input-list style-1 clearfix"><input name="company_email" id="input-company-email" style="width:30em;" type="text" placeholder="Email Address"></td>	
			</tr>
			<tr>
				<td></td><td><span id="company_email_error" style="color:#EC1B30;display:none;">Compnay Email is required.</td></tr>
			<tr>	
		</tbody>
	</table>
	<input type="hidden" name="action" value="generateVPN">
	<button id="generate-key-submit" class="btn btn-warning hidden-xs" type="submit" style="margin-top:1em;margin-left:4em;">Generate Private Key</button>
	
</div>
</form>

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

<br/>
<?php get_footer(); ?>

<script type="text/javascript">

	jQuery('#generateKeyForm').submit(ajaxSubmit);

	function ajaxSubmit(){  

		var hasError = 0;

		if (jQuery("#input-id-number").val() == "") {
			jQuery("#id_number_error").show();
			hasError = 1;
		} else {
			jQuery("#id_number_error").hide();
		}

		if (jQuery("#input-company-email").val() == "") {
			jQuery("#company_email_error").text('Email is required.');
			jQuery("#company_email_error").show();
			hasError = 1;
		} else {

			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

			if(!(jQuery("#input-company-email").val()).match(re)) {
     			jQuery("#company_email_error").text('Invalid Email Format');
     			jQuery("#company_email_error").show();
     			hasError = 1;
     		} else {	
				jQuery("#company_email_error").hide();
			}
		}

		if (hasError == 1) {
			return false;
		} else {
			var newVPNForm = jQuery(this).serialize();   

			jQuery.ajax({  
				type:"POST",  
				url: "/wp-admin/admin-ajax.php",  
				data: newVPNForm,  
				success:function(data){

					// replace last extra 0 in message					
					data = data.substring(0, data.length - 1);
					
					jQuery('#enquiryModal').modal('hide');
					jQuery('#myModalLabel').text('Generate VPN Key');
					jQuery('#success-message').html(data);
					jQuery('#successModal').modal('show');

					jQuery('#input-id-number').val('');
					jQuery('#input-company-email').val('');
				}  
			});    

			return false;
		}  
	}


</script>