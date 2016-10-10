<?php 

class artista {

	function __construct(){

	}


	function home(){
		$sql_artistas = new mysql;
		$artistas = $sql_artistas->consulta('SELECT * FROM artista ORDER BY f_nacimiento ASC');

		$smarty = new Smarty;
		$tpl = $smarty->createTemplate('templates/main.tpl');
		$tpl->assign('titulo','Web Disqueras');
		$tpl->assign('artistas',$artistas);


		$tpl->assign('page', 'home');
		$smarty->display($tpl); // or $tpl->display();

	}

	function crear(){

		if ($_POST) {
			if (!empty($_POST['insertArtista']) && !empty($_POST['nombres']) && !empty($_POST['nombres']) && !empty($_POST['apellidos']) ) {
		     	$sql = 'INSERT INTO artista (nombres,apellidos,f_nacimiento) values ("'.$_POST['nombres'].'","'.$_POST['apellidos'].'","'.$_POST['f_nacimiento'].'")';

		    	$query = new mysql;
	    		$sql=$query->ejecutar($sql);
		    	if($sql == true) {
		    		header('location: ?url=artista/home');
		    	} else {
		    		header('location: ?url=artista/crear');
		    	}
			}
		} else {
			$smarty = new Smarty;
			$tpl = $smarty->createTemplate('templates/main.tpl');
			$tpl->assign('titulo','Web Disqueras');

			$tpl->assign('page', 'crearArtista');
			$smarty->display($tpl); // or $tpl->display();			
		}
	}

	function eliminar(){

		if ($_GET['id']) {
			$sql = 'DELETE FROM artista WHERE id = '.$_GET['id'];
	    	$ejecutar = new mysql;
	    	$ejecutar->consulta($sql);
		} else {
			die('Error: no fue posible ejecutar la consulta');
		}

	}

}