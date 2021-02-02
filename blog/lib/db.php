<?php

// Database Connection
$con = mysqli_connect("localhost", "root", "", "php-blog");

if(!$con){
	die('Database connection failed');
}

