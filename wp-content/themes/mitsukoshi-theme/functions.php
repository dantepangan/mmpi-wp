<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function mk_theme_styles() {
	wp_enqueue_style('bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css');
	wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('animate_css', 'http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css');
	wp_enqueue_style('custom_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('font_awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
	wp_enqueue_style('lato', 'http://fonts.googleapis.com/css?family=Lato:100,300,400');
	wp_enqueue_style('titillium', 'http://fonts.googleapis.com/css?family=Titillium+Web:400,700,600');
}
add_action('wp_enqueue_scripts','mk_theme_styles');

function mk_theme_js() {
	
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.custom.js', '', '', false );
	wp_enqueue_script( 'tabs_js', get_template_directory_uri() . '/js/cbpFWTabs.js', array('modernizr_js'), '', false );
	wp_enqueue_script( 'bootstrap_js', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), '', false );
	wp_enqueue_script( 'viewport_js', get_template_directory_uri() . '/js/viewportchecker.js', array('jquery'), '', false );
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery', 'viewport_js'), '', false );
	wp_enqueue_script('jquery');	
}
add_action( 'wp_enqueue_scripts', 'mk_theme_js' );

function addCustomer(){    
	global $wpdb;    
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];  
	$email = $_POST['email'];    
	$address = $_POST['address'];  
	$contact_number = $_POST['contact_number'];  
	$address = $_POST['address'];    
	$message = $_POST['message'];
	$category = $_POST['category'];

	if($wpdb->insert('inquiry',array(  
		'first_name'=>$first_name,  
		'last_name'=>$last_name,  
		'email'=>$email,
		'address'=>str_replace("'", "''", $address),
		'contact_number'=>$contact_number,
		'address'=>str_replace("'", "''", $address),  
		'message'=>str_replace("'", "''", $message),
		'category'=>$category,
	))===FALSE){    
		echo "Sorry, we cannot process your request at this moment. Please try again later. Thank you.";    
	}  else {     
		echo "Thank you ". ucfirst(strtolower($first_name)) ."! Your inquiry has been successfully saved and forwarded to us.\n\nWe will send you a feedback soon.";    

		$message_html = "<label><strong>Inquiry Type: </strong></label>        	
        					<span>{$category}</span><br/>
        				<label><strong>First Name: </strong></label>
        					<span>{$first_name}</span><br/>
        				<label><strong>Last Name: </strong></label>
        					<span>{$last_name}</span><br/>
        				<label><strong>Email Address: </strong></label>
        					<span>{$email}</span><br/>
        				<label><strong>Contact Number: </strong></label>
        					<span>{$contact_number}</span><br/>
        				<label><strong>Address: </strong></label>
        					<span>{$address}</span><br/>
        				<label><strong>Message: </strong></label>
        					<span>{$message}</span>";

		// send email
		$to      = 'dantepangan@gmail.com';
		$subject = 'Inquiry - ' . ucfirst($category);
		$message = $message_html;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: MMPI Website <inquiry.mmpi@mitsukoshimotors.com>' . "\r\n";
		$headers .= 'Cc: dante.pangan@mitsukoshimotors.com' . "\r\n";
		$headers .= 'Bcc: dante.pangan@mitsukoshimotors.com' . "\r\n";

		mail($to, $subject, $message, $headers);

	}  die();  
}

function generateVPN()
{
	global $wpdb;	
	$id_number = trim($_POST['id_number']);
	$company_email = trim($_POST['company_email']);  

	// check validity of id_number
	$sql = "SELECT id_number, company_email_address FROM pm_employment_information 
										WHERE id_number = '{$id_number}' AND company_email_address = '{$company_email}' AND is_employed = 1";
	$verified_credentials = $wpdb->get_results($sql);

	if (empty($verified_credentials) || ($verified_credentials == NULL)) {
		
		echo "ID Number and Email Address do not match!";

	} else {
		
		// check if already generated a key
		$sql = "SELECT id_number, company_email_address FROM sa_vpn_account
										WHERE id_number = '{$id_number}' AND company_email_address = '{$company_email}' AND length(generated_key_hash) > 0";
		$current_genkey = $wpdb->get_results($sql);		

		if (empty($current_genkey) || ($current_genkey == NULL)) {		
			// generate key
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';	
		    $charactersLength = strlen($characters);

		    $random_string = '';
		    for ($i = 0; $i < 10; $i++) {
		        $random_string .= $characters[rand(0, $charactersLength - 1)];
		    }

		    $key_hash = password_hash($random_string, PASSWORD_BCRYPT);

		    // insert to sa_vpn_account
		    $wpdb->insert('sa_vpn_account',
		    	array(  
					'id_number' => $id_number,
					'company_email_address' => $company_email,
					'generated_key_hash' => $key_hash,
					'generated_key_original' => $random_string
				)
			);


		    $message_html = "<p>Good day!<br/><br/>You have generated a personal VPN key with the following details:</p>
		    				<br/><br/>
		    				<label><strong>ID Number: </strong></label>        	
        					<span>{$id_number}</span><br/>
        					<label><strong>Company Email Address: </strong></label>
        					<span>{$company_email}</span><br/>
        					<label><strong>Personal VPN Key: </strong></label>
        					<span>{$random_string}</span><br/>
        					<br/><br/>
        					<p>For additional inquiries, please contact us. 
        					<br/><br/>
        					Thank you.
        					<br/><br/>Mitsukoshi IT Department</p>
        				";

			// send email
			$to      = $company_email;
			$subject = 'Generated VPN Key';
			$message = $message_html;
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: all it department staff <all_it_department_staff@mitsukoshimotors.com>' . "\r\n";
			$headers .= 'Cc: dantepangan@gmail.com' . "\r\n";
			$headers .= 'Bcc: dante.pangan@mitsukoshimotors.com' . "\r\n";

			mail($to, $subject, $message, $headers);
			
			echo "Success! Your personal VPN Key has been sent via email. Kindly check your Mitsukoshi Email Account. <br/><br/>Thank you.";

		} else {
			echo "User with ID Number <strong>{$id_number}</strong> and Email Address <strong>{$company_email}</strong> already has a VPN account.<br/><br/>Please contact IT Department for inquiries. Thank you.";
		}	
	} die();

}

add_action('wp_ajax_addCustomer', 'addCustomer');  add_action('wp_ajax_nopriv_addCustomer', 'addCustomer');
add_action('wp_ajax_generateVPN', 'generateVPN');  add_action('wp_ajax_nopriv_generateVPN', 'generateVPN');
?>