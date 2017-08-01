<?php

// Connection variables
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "ayush"; // MySQL Database name

// Connect to MySQL Database
$db = mysqli_connect($host, $user, $password,$database) or die("Could not connect to database");

// Select MySQL Database
//mysql_select_db($database, $db);

?>
/**
 * Created by PhpStorm.
 * User: ram
 * Date: 4/1/2017
 * Time: 3:02 PM
 */