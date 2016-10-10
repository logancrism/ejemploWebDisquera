<?php
require_once ('helper.php');




if (!empty($_GET['eliminarArtistas'])) {
    $sql = 'DELETE FROM artista WHERE id = '.$_GET['eliminarArtistas'];
    $con->query($sql);
}





?> 