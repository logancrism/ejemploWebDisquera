<?php 

class cancion
{
	
	function __construct()
	{
	}

	public function home()
	{
		$sql_cancion = new mysql;
		$canciones = $sql_cancion->consulta('SELECT * FROM cancion cancion 
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
		if ($_POST)
		{
			$sql->ejecutar('INSERT INTO canciones (cancion,id_album) VALUES("'.$_POST['cancion'].'",'.$_POST['id_album'].')');
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

	public function actualizar()
	{
		
	}


}