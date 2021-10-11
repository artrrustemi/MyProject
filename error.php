<?php

	$error = $_SERVER["REDIRECT_STATUS"];

	$error_title = '';
	$error_message = '';

	if ($error == 404) {
		$error_title = '404 Page Not Found';
		$error_message = 'The document/file requested was not found on this server';
	}
?>

<h1><?php echo $error_title; ?></h1>
<h3><?php echo $error_message; ?></h3>