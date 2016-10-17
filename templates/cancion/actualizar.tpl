<form action="?url=cancion/actualizar" method="POST" class="alert alert-warning">
	<input type="hidden" name="id" value="{$id}">
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
		<div class="col-xs-12">
			<div class="input-group">
				<label>Cancion:</label>
				<input type="text" name="cancion" required="" class="form-control" value="{$cancion}">
			</div>
		</div>

		<div class="col-xs-12">
			<p style="margin-top: 20px;"> Para Agregar un registro precione la tecla enter</p>
			<input type="submit" name="update" value="Enviar" class="btn btn-success">
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

		$('#id_artista').val({$id_artista});
		ajaxAlbum({$id_artista});
	});

	$('select[name=id_artista]').on('change', function(){
		id =$(this).val();
		ajaxAlbum(id);
		
	})

	function ajaxAlbum(id)
	{
		$.ajax({
			url: '../?url=album/listar',
			dataType: 'json',
			data: { id: id }
		}).done(function(data){
			$.each(data, function(i,val){
				$('#id_album').append('<option value="'+data[i].id+'">'+data[i].album+'</option>')
			})

			$('#id_album').val({$id_album});
		});
	}
</script>