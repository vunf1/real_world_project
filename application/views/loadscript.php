
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

}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
     <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">



			<!- Js - put locally futher on ->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

			<!- Css - put locally futher on ->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="assets/custom.css">


<script type="text/javascript" src="assets/custom.js"></script>


	<title>Index </title>

</head>