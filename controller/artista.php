<?php 

class artista {

	public function __construct(){

	}

	public function home()
	{
		$sql_artistas = new mysql;
		$artistas = $sql_artistas->consulta('SELECT * FROM artista ORDER BY f_nacimiento ASC');

		$smarty = new Smarty;
		$tpl = $smarty->createTemplate('templates/main.tpl');
		$tpl->assign('artistas',$artistas);

		$tpl->assign('page', 'artista/home');
		$smarty->display($tpl);
	}

	public function crear()
	{
		if ($_POST) {
			if (!empty($_POST['insertArtista']) && !empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['f_nacimiento']) ) 
			{
		     	$sql = 'INSERT INTO artista (nombres,apellidos,f_nacimiento) values ("'.$_POST['nombres'].'","'.$_POST['apellidos'].'","'.$_POST['f_nacimiento'].'")';

		    	$query = new mysql;
	    		$sql=$query->ejecutar($sql);
		    	if($sql == true) 
		    	{
		    		header('location: ?url=artista/home');
		    	} else 
		    	{
		    		header('location: ?url=artista/crear');
		    	}
			}
		} else
		{
			$smarty = new Smarty;
			$tpl = $smarty->createTemplate('templates/main.tpl');
			$tpl->assign('titulo','Web Disqueras');
			$tpl->assign('page', 'artista/crear');
			$smarty->display($tpl);			
		}
	}

	public function actualizar(){
		if($_POST) {
			if (isset($_POST['updateArtista']) && !empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['f_nacimiento']) && !empty($_POST['id']) )
			{
				$query = 'UPDATE artista SET nombres="'.$_POST['nombres'].'",apellidos="'.$_POST['apellidos'].'",f_nacimiento="'.$_POST['f_nacimiento'].'" WHERE id ='.$_POST['id'];
				$sql = new mysql;
				$sql->ejecutar($query);
		    	header('location: ?url=artista/home');
			}
		}
		else 
		{

			$sql = new mysql;
			$artista = $sql->consulta('SELECT * FROM artista WHERE id ='.$_GET['id']);
			$id=$artista['0']['id'];
			$nombres=$artista['0']['nombres'];
			$apellidos=$artista['0']['apellidos'];
			$f_nacimiento=$artista['0']['f_nacimiento'];

			$smarty = new Smarty;
			$tpl = $smarty->createTemplate('templates/main.tpl');
			$tpl->assign('titulo','Web Disqueras');
			$tpl->assign('page', 'artista/actualizar');
			$tpl->assign('id', $id);
			$tpl->assign('nombres', $nombres);
			$tpl->assign('apellidos', $apellidos);
			$tpl->assign('f_nacimiento', $f_nacimiento);
			$smarty->display($tpl);	
		}
	}

	public function eliminar()
	{
		if ($_GET['id'])
		{
			$sql = 'DELETE FROM artista WHERE id = '.$_GET['id'];
	    	$ejecutar = new mysql;
	    	$ejecutar->consulta($sql);
    		header('location: ?url=disquera/home');
		}
		else 
		{
			die('Error: no fue posible ejecutar la consulta');
		}
	}
}