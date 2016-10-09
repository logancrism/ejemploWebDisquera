<?php 

if ($_SERVER['HTTP_HOST'] == 'slocalhost') {
	$host='localhost';
	$user='root';
	$pass='root';
	$db='disquera';

} else {
	
	$host='us-cdbr-iron-east-04.cleardb.net';
	$user='ba82f99c76d53f';
	$pass='c58fcae4';
	$db='heroku_8c75e509b63df4e';
}

$con = mysqli_connect($host,$user,$pass,$db);

if (empty($con)) {
	die('Error al conectar la bas de datos');
}
