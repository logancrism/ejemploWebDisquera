<form action="?url=artista/crear" method="POST" class="alert alert-warning">
	<div class="row">
		<div class="col-xs-6">
			<label for="">Artista</label>
			<select name="id_artista" id="id_artista" class="form-control">
				<option value="">Seleciona un Artista</option>
			</select>
		</div>
		<div class="col-xs-6">
			<label for="">Album</label>
			<select name="id_album" id="id_album" class="form-control">
				<option value="">Selecione Primero un artista</option>
			</select>
		</div>
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


<script>
	$.ajax({
		url: '../?url=artista/listar',
		dataType: 'json',
	}).done(function(data){
		$.each(data, function(i,val){
			$('#id_artista').append('<option value="'+data[i].id+'">'+data[i].nombres+' '+data[i].apellidos+'</option>')
		})
	});

	$('select[name=id_artista]').on('change', function(){
		id =$(this).val();
		$.ajax({
			url: '../?url=album/listar',
			dataType: 'json',
			data: { id: id }
		}).done(function(data){
			$.each(data, function(i,val){
				$('#id_artista').append('<option value="'+data[i].id+'">'+data[i].nombres+' '+data[i].apellidos+'</option>')
			})
		});
	})
</script>