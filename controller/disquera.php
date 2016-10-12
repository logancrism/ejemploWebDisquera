<?php 

class disquera
{
	
	function __construct(){
	}

	public function home()
	{
		$sql_disqueras = new mysql;
		$disqueras = $sql_disqueras->consulta('SELECT * FROM disquera ORDER BY nombre ASC');

		$smarty = new Smarty;
		$tpl = $smarty->createTemplate('templates/main.tpl');

		$tpl->assign('disqueras',$disqueras);
		$tpl->assign('page', 'disquera/home');
		$smarty->display($tpl);
	}

	public function crear()
	{
		if (!empty($_POST['insert']) && !empty($_POST['nombre'])) 
		{
	     	$sql = 'INSERT INTO disquera (nombre) values ("'.$_POST['nombre'].'")';

	    	$query = new mysql;
    		$sql=$query->ejecutar($sql);
	    	if($sql == true) 
	    	{
	    		header('location: ?url=disquera/home');
	    	} else 
	    	{
	    		header('location: ?url=disquera/crear');
	    	}
		}
		else
		{
			$smarty = new Smarty;
			$tpl = $smarty->createTemplate('templates/main.tpl');
			$tpl->assign('titulo','Web Disqueras');
			$tpl->assign('page', 'disquera/crear');
			$smarty->display($tpl);			
		}
	}

	public function actualizar()
	{
		if($_POST) {
			if (isset($_POST['update']) && !empty($_POST['nombre']) && !empty($_POST['id']))
			{
				$query = 'UPDATE disquera SET nombre="'.$_POST['nombre'].'" WHERE id ='.$_POST['id'];
				$sql = new mysql;
				$sql->ejecutar($query);
		    	header('location: ?url=disquera/home');
			} else {
				die('Error: todos los parametros son requeridos');
			}
		}
		else 
		{

			$sql = new mysql;
			$disquera = $sql->consulta('SELECT * FROM disquera WHERE id ='.$_GET['id']);
			$id=$disquera['0']['id'];
			$nombre=$disquera['0']['nombre'];

			$smarty = new Smarty;
			$tpl = $smarty->createTemplate('templates/main.tpl');
			$tpl->assign('titulo','Web Disqueras');
			$tpl->assign('page', 'disquera/actualizar');
			$tpl->assign('id', $id);
			$tpl->assign('nombre', $nombre);
			$smarty->display($tpl);	
		}
	}

	public function eliminar()
	{
		if ($_GET['id'])
		{
			$sql = 'DELETE FROM disquera WHERE id = '.$_GET['id'];
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