<form action="?url=artista/actualizar" method="POST" class="alert alert-warning">
<input type="hidden" value="{$id}" name="id">
	<div class="row">
		<div class="col-xs-4">
			<div class="input-group">
				<label>Nombres:</label>
				<input type="text" name="nombres" required="" class="form-control" value="{$nombres}">
			</div>
		</div>
		<div class="col-xs-4">
			<div class="input-group">
				<label>Apellidos:</label>
				<input type="text" name="apellidos" required="" class="form-control" value="{$apellidos}">
			</div>
		</div>
		<div class="col-xs-4">
			<div class="input-group">
				<label>Fecha:</label>
				<input type="date" name="f_nacimiento" required="" class="form-control" value="{$f_nacimiento}">
			</div>
		</div>
		<div class="col-xs-12">
			<p style="margin-top: 20px;"> Para Agregar un registro precione la tecla enter</p>
			<input type="submit" name="updateArtista" value="Enviar" class="btn btn-success">
		</div>
	</div>
</form>