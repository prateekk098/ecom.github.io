<?php 

$server = "localhost";
$username= "root";
$password ="";
$db= "portfolio";


$con= mysqli_connect("$server","$username","$password","$db");

if($con){
	echo "Connection is Successful";
}else{
	echo "opps!";
}





?>