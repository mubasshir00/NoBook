<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("localhost", "root", "", "social"); //Connection variable
// $con = mysqli_connect("sql112.epizy.com", "epiz_28656253", "zGSYu6UEpDJR", "epiz_28656253_social");

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>