<?php

	// define database parameters as an array
	$db = array('db_host'=>'localhost',
							'db_user'=>'root',
							'db_pass'=>'',
							'db_name'=>'cms');
	
	// loop thru the array to make them into constants
	foreach($db as $key=>$value) {
		define(strtoupper($key), $value);
	}

	// connect to database
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	
	// define other constants
	define('SITENAME', 'Blogly', false);
	define('SITESUBTITLE', '&nbsp;&nbsp;&nbsp;Post and Share :)', false);
	define('POSTSPERPAGE', 10);
	define('AUTHOR', 'IT guys', false);
	define('TIMEOUT', 120);
	define('HASHCOST', 12);
	define('TZ', 'Asia/Kolkata');

?>
