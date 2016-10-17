<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Web Disquera - {$titulo}</title>
    <script   src="http://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
	<script src="js/bigvideo.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xs-3">
			<a href="/">
				<img src="img/logo-de-prueba.png" alt="Web Disqueras" id="logo-disquera"><h1>web<br>Disqueras</h1>
			</a>
		</div>
		<div class="col-xs-8">
			<ul class="nav nav-pills">
				<li><a href="?url=disquera/home">Disqueras</a></li>
				<li><a href="?url=artista/home">Artistas</a></li>
				<li><a href="?url=album/home">Albums</a></li>
				<li><a href="?url=cancion/home">Canciones</a></li>
			</ul>
		</div>
	</div>
</div>

	<div class="container">
	    <div class="row">
			<div class="col-xs-12">
				{include file="templates/$page.tpl"}
			</div>
	    </div>		
	</div>

</body>
</html>