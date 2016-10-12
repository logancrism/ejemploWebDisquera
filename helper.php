<?php 

// Manejador del Render del Template
require_once('libs/Smarty.class.php');
require_once('mysql.php');
require_once('controller/artista.php');
require_once('controller/disquera.php');


if(isset($_GET['url']) or !empty($_GET['url'])) {
	$url = $_GET['url'];
	initClass($url);

} else {
	$url = 'artista/home';
	initClass($url);
}

function initClass($url) {
	$class=explode('/', $url);

	if(!empty($class['1']) or isset($class['1'])) {
		$objet = new $class['0'];
		//$objet->$class['1'].'()';
		$objet->$class['1']();
	}
}