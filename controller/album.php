<?php

class album {

	public function home()
	{
		$sql = new mysql;
		$albums = $sql->consulta('SELECT album.id, album.album, artista.nombres, artista.apellidos, album.fecha_publicacion  FROM album album INNER JOIN artista artista ON album.id_artista = artista.id');
		$smarty = new Smarty;
		$tpl = $smarty->createTemplate('templates/main.tpl');
		$tpl->assign('albums',$albums);

		$tpl->assign('page', 'album/home');
		$smarty->display($tpl);

	}

	public function crear()
	{
		$sql = new mysql;
		if (!empty($_POST['album']) && !empty($_POST['id_artista']) && !empty($_POST['fecha_publicacion']) ) {
			$query = $sql->ejecutar('INSERT INTO album (album,id_artista,fecha_publicacion) VALUES ("'.$_POST['album'].'",'.$_POST['id_artista'].',"'.$_POST['fecha_publicacion'].'")');


			if ($query == TRUE)
			{
				header('location: ?url=album/home');
			}
			else
			{
				header('location: ?url=album/crear');
			}
		}
		else
		{
			$smarty = new Smarty;
			$tpl = $smarty->createTemplate('templates/main.tpl');
			$tpl->assign('titulo','Web Disqueras');
			$tpl->assign('page', 'album/crear');
			$smarty->display($tpl);		
		}
	}

	public function actualizar(){
		if($_POST) {
			if (isset($_POST['update']) && !empty($_POST['id_artista']) && !empty($_POST['album']) && !empty($_POST['fecha_publicacion']) && !empty($_POST['id']) )
			{
				$query = 'UPDATE album SET album="'.$_POST['album'].'",fecha_publicacion="'.$_POST['fecha_publicacion'].'",id_artista="'.$_POST['id_artista'].'" WHERE id ='.$_POST['id'];
				$sql = new mysql;
				$sql->ejecutar($query);
		    	header('location: ?url=album/home');
			}
		}
		else 
		{

			$sql = new mysql;
			$album = $sql->consulta('SELECT * FROM album WHERE id ='.$_GET['id']);
			$id=$album['0']['id'];
			$nombre_album=$album['0']['album'];
			$fecha_publicacion=$album['0']['fecha_publicacion'];
			$id_artista=$album['0']['id_artista'];

			$smarty = new Smarty;
			$tpl = $smarty->createTemplate('templates/main.tpl');
			$tpl->assign('titulo','Web Disqueras');
			$tpl->assign('page', 'album/actualizar');
			$tpl->assign('id', $id);
			$tpl->assign('album', $nombre_album);
			$tpl->assign('fecha_publicacion', $fecha_publicacion);
			$tpl->assign('id_artista', $id_artista);

			$smarty->display($tpl);	
		}
	}

	public function eliminar()
	{
		if ($_GET['id'])
		{
			$sql = 'DELETE FROM album WHERE id = '.$_GET['id'];
	    	$ejecutar = new mysql;
	    	$ejecutar->consulta($sql);
    		header('location: ?url=album/home');
		}
		else 
		{
			die('Error: no fue posible ejecutar la consulta');
		}
	}

}