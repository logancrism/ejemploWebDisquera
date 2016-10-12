<form action="?url=disquera/actualizar" method="POST" class="alert alert-warning">
<input type="hidden" value="{$id}" name="id">
	<div class="row">
		<div class="col-xs-4">
			<div class="input-group">
				<label>Nombre:</label>
				<input type="text" name="nombre" required="" class="form-control" value="{$nombre}">
			</div>
		</div>
		<div class="col-xs-12">
			<p style="margin-top: 20px;"> Para Agregar un registro precione la tecla enter</p>
			<input type="submit" name="update" value="Enviar" class="btn btn-success">
		</div>
	</div>
</form>