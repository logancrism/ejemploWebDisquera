<h2>Disqueras</h2>
<div class="panel panel-primary">
 	<!-- Default panel contents -->
 	<div class="panel-heading">Listado de Artistas 
 		<a href="?url=disquera/crear" class="btn btn-success btn-xs pull-right">Crear</a>
	</div>
  	<div class="panel-body">
  	</div>

  <!-- Table -->
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Nombre de la Disquera</th>
			<th style="width: 90px;">Actualizar</th>
			<th style="width: 90px;">Eliminar</th>
		</tr>
	{foreach $disqueras as $disquera}
	    <tr>
	    	<td>{$disquera.id}</td>
	    	<td>{$disquera.nombre}</td>
	    	<td><a href="?url=disquera/actualizar&id={$disquera.id}" class="btn-sm btn-success">Actualizar</a></td>
	    	<td><a href="?url=disquera/eliminar&id={$disquera.id}" class="btn-sm btn-danger">Eliminar</a></td>
	    </tr>
	{/foreach}
	</table>
</div>
