<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Web Disquera</title>
    <script   src="http://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
	<script src="js/bigvideo.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-default">
 	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">
		  		<img src="img/logo-de-prueba.png" alt="Web Disqueras" id="logo-disquera">
		  		<h1 id="texto-logo">WEB Disqueras <br><small>Ejemplo</small></h1>
		  	</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="#">Inicio</a></li>
				<li><a href="?url=disquera/home">Disqueras</a></li>
				<li><a href="?url=artista/home">Artistas</a></li>
				<li><a href="?url=album/home">Albums</a></li>
				<li><a href="?url=cancion/home">Canciones</a></li>
			</ul>
		    <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Información <span class="caret"></span></a>
		  			<ul class="dropdown-menu">
		    			<li><a href="https://github.com/logancrism">Autor: Cristihan  Andres Monroy</a></li>
		    			<li><a href="https://github.com/logancrism/ejemploWebDisqueras">Repositorio</a></li>
					</ul>
				</li>
		  	</ul>
	    </div>
 	</div>
</nav>


<div class="container">
    <div class="row">
		<div class="col-xs-12">
			{include file="templates/$page.tpl"}
		</div>
    </div>		
</div>

</body>
</html>