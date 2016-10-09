<?php 

$con = mysqli_connect('localhost','root','root','disquera');
if (empty($con)) {
	die('Error al conectar la bas de datos');
}
