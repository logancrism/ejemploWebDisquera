<h2>Listado de Canciones</h2>
<div class="panel panel-primary">
 	<!-- Default panel contents -->
 	<div class="panel-heading">Listado de Artistas 
 		<a href="?url=cancion/crear" class="btn btn-success btn-xs pull-right">Crear</a>
	</div>
  	<div class="panel-body">
  	</div>

  <!-- Table -->
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Cancion</th>
			<th>Album</th>
			<th>Artista</th>
			<th style="width: 90px;">Actualizar</th>
			<th style="width: 90px;">Eliminar</th>
		</tr>
	{foreach $canciones as $cancion}
	    <tr>
	    	<td>{$cancion.id}</td>
	    	<td>{$cancion.cancion}</td>
	    	<td>{$cancion.album}</td>
	    	<td>
	    		<!--<a href="?url=artista/actualizar&id={$cancion.id_artista}">{$cancion.nombres} {$cancion.apellidos}</a>-->
	    		{$cancion.nombres} {$cancion.apellidos}
	    	</td>
	    	<td><a href="?url=artista/actualizar&id={$cancion.id}" class="btn-sm btn-success">Actualizar</a></td>
	    	<td><a href="?url=artista/eliminar&id={$cancion.id}" class="btn-sm btn-danger">Eliminar</a></td>
	    </tr>
	{/foreach}
	</table>
</div>
