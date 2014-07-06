<?php 
    // set the required php files
    require_once '../ADN_php/EZAppDotNet.php'; // get the EZAppDotNet.php library
    require('../ADN_php/newFunctions.php'); // get the functions we added on
    require('../ADN_php/nicerank.php'); // get the nicerank functions
    require('../ADN_php/ErrorHandler.php'); // get the error handling functions

    // error reporting 
    error_reporting(E_ALL);
    // ini_set("display_errors", 1); // this should be disabled in production  
    ini_set('display_errors', 0); // this should be enabled in production   

	$title = "Privacy Policy - Purplapp"; 

	$app = new EZAppDotNet();

	if ($app->getSession()) {
		// get the authorised user's data
		$auth_user_data = $app->getUser();
		$auth_username = $auth_user_data['username'];

		// get headers
		include('../include/header_auth.php'); 
?>


<div class="col-md-12">
	<div class="page-header">
	  <h1>PURPLAPP PRIVACY POLICY <small> Last Updated: May 2014</small></h1>
	</div>

	<p>Our privacy policy applies to information we collect when you use or access our website, application, or just interact with us. We may change this privacy policy from time to time. Whenever we make changes to this privacy policy, the changes are effective <strong>immediately</strong> after we post the revised privacy policy (as indicated by revising the date at the top of our privacy policy). We encourage you to review our privacy policy whenever you access our services to stay informed about our information practices and the ways you can help protect your privacy.</p>

	<h2>Collection of Information</h2>

	<h3>Information You Provide to Us</h3>
	<p>You provide no information what so ever to us.</p>

	<h3>Information We Collect Automatically When You Use the Services</h3>
	<p>When you access or use our services, we do not automatically collect information about you.</p>

	<h2>Contact Us</h2>
	<p>If you have any questions about this privacy policy, please contact us at: <strong>support@jvimedia.org</strong>.</p>
</div>

<?php 
  } else {
    include('../include/header_unauth.php'); 
?>

<div class="col-md-12">
	<div class="page-header">
	  <h1>PURPLAPP PRIVACY POLICY <small> Last Updated: May 2014</small></h1>
	</div>

	<p>Our privacy policy applies to information we collect when you use or access our website, application, or just interact with us. We may change this privacy policy from time to time. Whenever we make changes to this privacy policy, the changes are effective <strong>immediately</strong> after we post the revised privacy policy (as indicated by revising the date at the top of our privacy policy). We encourage you to review our privacy policy whenever you access our services to stay informed about our information practices and the ways you can help protect your privacy.</p>

	<h2>Collection of Information</h2>

	<h3>Information You Provide to Us</h3>
	<p>You provide no information what so ever to us.</p>

	<h3>Information We Collect Automatically When You Use the Services</h3>
	<p>When you access or use our services, we do not automatically collect information about you.</p>

	<h2>Contact Us</h2>
	<p>If you have any questions about this privacy policy, please contact us at: <strong>support@jvimedia.org</strong>.</p>
</div>

<?php
  }
  include('../include/footer.php');
?>