<?php

$conn = mysqli_connect("localhost","root","","ayush");

if (!$conn)
{
	die("connection failed:".mysqli_connect_error());
}