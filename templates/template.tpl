<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$titulo}</title>
    <script   src="http://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="container">
	    <div class="row">

	        <div class="col-xs-12">
	            <img src="img/logo-de-prueba.png" alt="{$titulo}" id="logo-disquera"> <h1>{$titulo}</h1>
	        </div>



	        <div class="col-xs-12">
		        <div class="panel panel-primary">
				 	<!-- Default panel contents -->
				 	<div class="panel-heading">Listado de Artistas</div>
				  	<div class="panel-body">
				    	<form action="" method="POST" class="alert alert-warning">
				    		<div class="row">
				    			<div class="col-xs-4">
				    				<div class="input-group">
				    					<label>Nombres:</label>
				    					<input type="text" name="nombres" required="" class="form-control">
				    				</div>
				    			</div>
				    			<div class="col-xs-4">
				    				<div class="input-group">
				    					<label>Apellidos:</label>
				    					<input type="text" name="apellidos" required="" class="form-control">
				    				</div>
				    			</div>
				    			<div class="col-xs-4">
				    				<div class="input-group">
				    					<label>Fecha:</label>
				    					<input type="date" name="f_nacimiento" required="" class="form-control">
				    				</div>
				    			</div>
				    			<div class="col-xs-12">
				    				<p style="margin-top: 20px;"> Para Agregar un registro precione la tecla enter</p>
				    				<input type="submit" name="insertArtista" value="Enviar" class="btn btn-success">
				    			</div>
				    		</div>
				    	</form>
				  	</div>

				  <!-- Table -->
					<table class="table">
						<tr>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Fecha</th>
							<th style="width: 90px;">Actualizar</th>
							<th style="width: 90px;">Eliminar</th>
						</tr>
					{foreach $artistas as $art}
					    <tr>
					    	<td>{$art.nombres}</td>
					    	<td>{$art.apellidos}</td>
					    	<td>{$art.f_nacimiento}</td>
					    	<td><a href="?actualizar={$art.id}" class="btn-sm btn-success">Actualizar</a></td>
					    	<td><a href="?eliminarArtistas={$art.id}" class="btn-sm btn-danger">Eliminar</a></td>
					    </tr>
					{/foreach}
					</table>
				</div>

	        </div>
	    </div>		
	</div>

</body>
</html>