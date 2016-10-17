<?php 

class cancion
{
	
	function __construct()
	{
	}

	public function home()
	{
		$sql_cancion = new mysql;
		$canciones = $sql_cancion->consulta('SELECT cancion.id, cancion.cancion, album.album, artista.nombres, artista.apellidos FROM cancion cancion 
			INNER JOIN album album ON cancion.id_album = album.id 
			INNER JOIN artista artista ON album.id_artista = artista.id 
			ORDER BY cancion.id ASC');

		$smarty = new Smarty;
		$tpl = $smarty->createTemplate('templates/main.tpl');

		$tpl->assign('canciones',$canciones);
		$tpl->assign('page', 'cancion/home');
		$smarty->display($tpl);
	}

	public function crear()
	{
		$sql = new mysql;
		if (!empty($_POST['cancion']) && !empty($_POST['id_album']))
		{
			$insertar=$sql->ejecutar('INSERT INTO cancion (cancion,id_album) VALUES("'.$_POST['cancion'].'",'.$_POST['id_album'].')');
			if ($insertar == TRUE)
			{
				header('location: ?url=cancion/home');
			}
			else
			{
				header('location: ?url=cancion/crear');
			}
		} 
		else
		{
			$smarty = new Smarty;
			$tpl = $smarty->createTemplate('templates/main.tpl');
			$tpl->assign('titulo','Web Disqueras');
			$tpl->assign('page', 'cancion/crear');
			$smarty->display($tpl);			

		}
	}

	public function actualizar(){
		$sql = new mysql;
		if(isset($_POST['update']) && !empty($_POST['cancion']) && !empty($_POST['id_album']) && !empty($_POST['id'])) {
			$query = 'UPDATE cancion SET cancion="'.$_POST['cancion'].'",id_album="'.$_POST['id_album'].'" WHERE id ='.$_POST['id'];
			$update=$sql->ejecutar($query);
			if ($update==TRUE) {
	    		header('location: ?url=cancion/home');
			}
			else
			{
	    		header('location:'.$_SERVER['HTTP_REFERER']);
			}
		}
		else 
		{
			$cancion = $sql->consulta('SELECT cancion.id, cancion.cancion, album.id as id_album, artista.id as id_artista FROM cancion cancion 
				INNER JOIN album album ON cancion.id_album = album.id
				INNER JOIN artista artista ON album.id_artista = artista.id
				WHERE cancion.id ='.$_GET['id']);

			$id=$cancion['0']['id'];
			$cancionn=$cancion['0']['cancion'];
			$id_album=$cancion['0']['id_album'];
			$id_artista=$cancion['0']['id_artista'];

			$smarty = new Smarty;
			$tpl = $smarty->createTemplate('templates/main.tpl');
			$tpl->assign('titulo','Web Disqueras');
			$tpl->assign('page', 'cancion/actualizar');
			$tpl->assign('id', $id);
			$tpl->assign('cancion', $cancionn);
			$tpl->assign('id_album', $id_album);
			$tpl->assign('id_artista', $id_artista);

			$smarty->display($tpl);	
		}
	}

	public function eliminar()
	{
		if ($_GET['id'])
		{
			$sql = 'DELETE FROM cancion WHERE id = '.$_GET['id'];
	    	$ejecutar = new mysql;
	    	$ejecutar->consulta($sql);
    		header('location: ?url=cancion/home');
		}
		else 
		{
			die('Error: no fue posible ejecutar la consulta');
		}
	}


}