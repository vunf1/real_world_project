
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function shootServerInfo(){
	
	$indicesServer = array('PHP_SELF',
		'argv', 
		'argc', 
		'GATEWAY_INTERFACE', 
		'SERVER_ADDR', 
		'SERVER_NAME', 
		'SERVER_SOFTWARE', 
		'SERVER_PROTOCOL', 
		'REQUEST_METHOD', 
		'REQUEST_TIME', 
		'REQUEST_TIME_FLOAT', 
		'QUERY_STRING', 
		'DOCUMENT_ROOT', 
		'HTTP_ACCEPT', 
		'HTTP_ACCEPT_CHARSET', 
		'HTTP_ACCEPT_ENCODING', 
		'HTTP_ACCEPT_LANGUAGE', 
		'HTTP_CONNECTION', 
		'HTTP_HOST', 
		'HTTP_REFERER', 
		'HTTP_USER_AGENT', 
		'HTTPS', 
		'REMOTE_ADDR', 
		'REMOTE_HOST', 
		'REMOTE_PORT', 
		'REMOTE_USER', 
		'REDIRECT_REMOTE_USER', 
		'SCRIPT_FILENAME', 
		'SERVER_ADMIN', 
		'SERVER_PORT', 
		'SERVER_SIGNATURE', 
		'PATH_TRANSLATED', 
		'SCRIPT_NAME', 
		'REQUEST_URI', 
		'PHP_AUTH_DIGEST', 
		'PHP_AUTH_USER', 
		'PHP_AUTH_PW', 
		'AUTH_TYPE', 
		'PATH_INFO', 
		'ORIG_PATH_INFO'
	);

	//TAble w/ info about server 
	//Delicate info - be aware

	echo '<table cellpadding="2">' ; 
	foreach ($indicesServer as $arguments) { 
	    if (isset($_SERVER[$arguments])) { 
	        echo '<tr><td>'.$arguments.'</td><td>' . $_SERVER[$arguments] . '</td></tr>' ; 
	    } 
	    else { 
	        echo '<tr><td>'.$arguments.'</td><td>-</td></tr>' ; 
	    } 
	} 
	echo '</table>' ; 
	/*   
#####
#####   function to show system status
#####
	*/

}
?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">



		<link rel="stylesheet" href="<?php base_url()?>assets/custom.css">
<script src="<?php base_url()?>assets/jQuery_331.js">
	/* jQuery min 3.2.1 slim*/
</script>

<script src="<?php base_url()?>assets/popper.min.js" >
	/* Popper min - */
</script>



<script src="<?php base_url()?>assets/bootstrap4.js" >
	/* Bootstrap 4 min*/
</script>

<!--<script src="<?php //base_url()?>assets/jQueryMobile_min_1.4.5.js"></script>
-->

<script type="text/javascript" src="<?php base_url()?>assets/allertify/alertify.js"></script>
<link rel="stylesheet" href="<?php base_url()?>assets/allertify/css/alertify.css" />

			        <!- Css   ->

 <link rel="stylesheet" href="<?php base_url()?>assets/jQueryMobile_min_1.4.5.css" />

<link rel="stylesheet" href="<?php base_url()?>assets/bootstrap4.css" >





<script type="text/javascript" src="<?php base_url()?>assets/custom.js"></script>



	<title>Index </title>

</head>