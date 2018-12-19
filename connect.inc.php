

<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db ='flyhigh_database';

$connection = mysqli_connect($host,$user,$password,$db);
if(!$connection){
	 die(mysqli_error());
}
?>