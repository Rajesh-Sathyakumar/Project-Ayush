<?php

$conn = mysqli_connect("localhost","root","","details");

if (!$conn)
{
	die("connection failed:".mysqli_connect_error());
}