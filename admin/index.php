<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienvenido</title>
	<link rel="stylesheet" href="./../css/font-awesome.min.css">
	<link rel="stylesheet" href="./../css/dashboard.css">
	<link rel="stylesheet" href="../css/mediaquery.css">

</head>
<body>
	<header>
		<!-- brud = bebe en sueco xD -->
		<div id="logo"><i class="fa fa-heart"></i> Brud Store</div>
		<form>
			<input type="search" placeholder="Búsqueda">
		
		</form>
		<ul>
			<li>
				<span>Hermione </span>
			</li>
			<li>

				<img src="../img/default.jpg" class="user">
			</li>
		</ul>
	</header>
	<?php include '../includes/header.php'; ?>
	<?php include '../includes/menu.php'; ?>
	<section id="contenedor">
		<h1 id="titulo">Titulo</h1>
		<div class="fila">
			<div class="container flexbox">
				<div class="product-item">
					<img src="http://grijalvaromero.me/imagenes/beibi.jpg">
					<div class="product-list"><h3>Suetter</h3>
						<span class="price"><i class="fa fa-tag"></i> $300.00</span>
						<a href="" class="button">Comprar</a>
						<a href="" class="button">Editar</a>
						<a href="" class="button">Eliminar</a>
					</div>
				</div>

				<div class="product-item">
					<img src="http://grijalvaromero.me/imagenes/beibi.jpg">
					<div class="product-list"><h3>Suetter</h3>
						<span class="price"><i class="fa fa-tag"></i> $300.00</span>
						<a href="" class="button">Comprar</a>
						<a href="" class="button">Editar</a>
						<a href="" class="button">Eliminar</a>
					</div>
				</div>

				<div class="product-item">
					<img src="http://grijalvaromero.me/imagenes/beibi.jpg">
					<div class="product-list"><h3>Suetter</h3>
						<span class="price"><i class="fa fa-tag"></i> $300.00</span>
						<a href="" class="button">Comprar</a>
						<a href="" class="button">Editar</a>
						<a href="" class="button">Eliminar</a>
					</div>
				</div>
				</div>


		</div>
	</section>
	<div id="btnagregar">
		<i class="fa fa-plus"></i>
	</div>
	<div id="alerta">
		<button id="cerrar">
			<i class="fa fa-times"></i>
		</button>

		<h4>ACCIÓN</h4>
		

	</div>
	<script type="text/javascript">
		var si=false;
		window.addEventListener('load',function (argument) {
			document.getElementById("btnagregar").addEventListener('click',function(){
				var div=document.getElementById('alerta');
				if(si){
					div.className ="";
					si=false;
					div.style.display="none";
				}else{
					div.style.display="block";
					div.className +="iniciar";
					si=true;
				}
			});
			document.getElementById("cerrar").addEventListener('click',function(){
				var div=document.getElementById('alerta');
				div.className ="";
				si=false;
				div.style.display="none";
			});
		});
	</script>
</body>
</html>
