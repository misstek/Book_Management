<?php
ini_set("display_errors", "On");
error_reporting(E_ALL & ~E_NOTICE);
// 	$con = mysqli_connect("139.199.72.26","root","970124wmz","books");
// if ($con->connect_errno) {
//     echo("2");
//     die();
// }

// 	mysqli_select_db($con,"books");
// 	mysqli_query($con,'set names uft8');






            
//include "conn/conn.php";
$con = mysqli_connect("***.***.***.***","root","*******","books");
if ($con->connect_errno) {
	echo("2");
	die();
}

mysqli_query($con,"set names utf8");
	if(!$con){
		dis("ERROR:".mysqli_error());
	}




?>
