<?php

    # Stop Hacking attempt
	if(!defined('__APP__')) {
		die("Hacking attempt");
	}

	# Connect to MySQL database
    $conn = mysqli_connect("localhost","root","","database") or die('Error connecting to server.');
?>