<div class="panel panel-primary">
 	<!-- Default panel contents -->
 	<div class="panel-heading">Listado de Artistas 
 		<a href="?url=artista/crear" class="btn btn-success btn-xs pull-right">Crear</a>
	</div>
  	<div class="panel-body">
  	</div>

  <!-- Table -->
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Fecha</th>
			<th style="width: 90px;">Actualizar</th>
			<th style="width: 90px;">Eliminar</th>
		</tr>
	{foreach $artistas as $art}
	    <tr>
	    	<td>{$art.id}</td>
	    	<td>{$art.nombres}</td>
	    	<td>{$art.apellidos}</td>
	    	<td>{$art.f_nacimiento}</td>
	    	<td><a href="?url=artista/actualizar&id={$art.id}" class="btn-sm btn-success">Actualizar</a></td>
	    	<td><a href="?url=artista/eliminar&id={$art.id}" class="btn-sm btn-danger">Eliminar</a></td>
	    </tr>
	{/foreach}
	</table>
</div>
