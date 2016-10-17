<h2>Album</h2>
<div class="panel panel-primary">
 	<!-- Default panel contents -->
 	<div class="panel-heading">Listado de Albunes 
 		<a href="?url=album/crear" class="btn btn-success btn-xs pull-right">Crear</a>
	</div>
  	<div class="panel-body">
  	</div>

  <!-- Table -->
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Album</th>
			<th>Artista</th>
			<th>Fecha de Publicacion</th>
			<th style="width: 90px;">Actualizar</th>
			<th style="width: 90px;">Eliminar</th>
		</tr>
	{foreach $albums as $album}
	    <tr>
	    	<td>{$album.id}</td>
	    	<td>{$album.album}</td>
	    	<td>{$album.nombres} {$album.apellidos}</td>
	    	<td>{$album.fecha_publicacion}</td>
	    	<td><a href="?url=album/actualizar&id={$album.id}" class="btn-sm btn-success">Actualizar</a></td>
	    	<td><a href="?url=album/eliminar&id={$album.id}" class="btn-sm btn-danger">Eliminar</a></td>
	    </tr>
	{/foreach}
	</table>
</div>
