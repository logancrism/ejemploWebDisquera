<form action="?url=album/crear" method="POST" class="alert alert-warning">
	<div class="row">
		<div class="col-xs-4">
			<div class="input-group">
				<label>Album:</label>
				<input type="text" name="album" class="form-control" required>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="input-group">
				<label>Artista:</label>
				<select id="id_artista" name="id_artista" id="" class="form-control" required>
					<option value="">Selecione un Artista</option>
				</select>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="input-group">
				<label>Fecha:</label>
				<input type="date" name="fecha_publicacion" required="" class="form-control" required>
			</div>
		</div>
		<div class="col-xs-12">
			<p style="margin-top: 20px;"> Para Agregar un registro precione la tecla enter</p>
			<input type="submit" name="insert" value="Enviar" class="btn btn-success">
		</div>
	</div>
</form>
<script>
	$.ajax({
		url: '../?url=artista/listar',
		dataType: 'json',
	}).done(function(data){
		$.each(data, function(i,val){
			$('#id_artista').append('<option value="'+data[i].id+'">'+data[i].nombres+' '+data[i].apellidos+'</option>')
		})
	});

</script>