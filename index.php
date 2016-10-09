<?php
require_once ('helper.php');


$sql_artistas = $con->query('SELECT * FROM artista ORDER BY apellidos ASC');
$arrayArtistas = array();

if (!empty($_POST['insertArtista']) && !empty($_POST['nombres']) && !empty($_POST['nombres']) && !empty($_POST['apellidos']) ) {
     $sql = 'INSERT INTO artista (nombres,apellidos,f_nacimiento) values ("'.$_POST['nombres'].'","'.$_POST['apellidos'].'","'.$_POST['f_nacimiento'].'")';
    $con->query($sql);
}

if (!empty($_GET['eliminarArtistas'])) {
    $sql = 'DELETE FROM artista WHERE id = '.$_GET['eliminarArtistas'];
    $con->query($sql);
}

while ($row = $sql_artistas->fetch_array()) {
    $artistas[] =$row;
}

$smarty = new Smarty;
$tpl = $smarty->createTemplate('template/template.tpl');
$tpl->assign('titulo','Web Disqueras');
$tpl->assign('artistas',$artistas);
$smarty->display($tpl); // or $tpl->display();

?> 