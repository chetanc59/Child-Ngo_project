<?php 
error_reporting(0);
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'ngo_project';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn) {
	die('your connection are  error');
}
$sitetitle = "Welcome to NGO";
$siteurl = "http://".$_SERVER['HTTP_HOST']."/NGOProject/";