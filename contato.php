<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/styles.css">
		<script src="js/animacao.js"></script>
		<title>Rest</title>
		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/styles.css">
		<script>
	      	function initMap() {
	        var uluru = {lat: -25.363, lng: 131.044};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 4,
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map
	        });
      		}
	    </script>
	    <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
	    </script>


		</head>
		<body>
			<header class="header row">
				<div class="container col-md-12 col-sm-12 col-xs-12">
					<nav class=" header_menu menu_borda2">
						<ul>
							<li><a href="index.php">Menu</a></li>
							<li><a href="sobre.php">Sobre</a></li>
							<li><a href="contato.php">Contato</a></li>
							<li><a href="adm.html">Administração</a></li>
						</ul>
					</nav>
				</div>
					<img src="img/rest.png" class="img-rounded" alt="Logo marca Rest">
					<div class="container">
						<h1>Rua Marechal 29 - Copacabana - Rj</h1>
						<p class="telefone">2422-9201</p>
			</header>
				<section class="row fundo_menu cardapio">
						<div class="container ">
								<h1 class="subtitulo_h1">Contato</h1>
							
							<div class=" mapa container">
								<iframe class="col-xs-12 col-sm-12 col-md-12" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29390.731396745214!2d-43.2141630324465!3d-22.956066472237627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srua+marechal+29+-copacabana+-+rj!5e0!3m2!1spt-BR!2sbr!4v1511375424721" width="600" height="450" frameborder="0" style=border:0" allowfullscreen>
								</iframe>
							</div>	

							<div class="col-xs-12 col-sm-12 col-md-4">
								<h3 class="nome_contato">Dados</h3>	
													
								<ul class="menu">
									<h1 class="nome_contato2 barra2">21 2422-9999</h1>
								</ul>
								<ul>
									<h1 class="nome_contato2 barra2">contato@rest.com</h1>
								</ul>
								<ul>
									<h1 class="nome_contato2 barra2">facebook.com/rest</h1>
								</ul>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-4">
								<h3 class="nome_contato">Horário</h3>	
													
								<ul class="menu">
									<h1 class="nome_contato2 barra2">Segunda a sexta: 10 ás 23</h1>
								</ul>
								<ul>
									<h1 class="nome_contato2 barra2">Sabado: 14 as 23</h1>
								</ul>
								<ul>
									<h1 class="nome_contato2 barra2">Domingo: 14 as 23</h1>
								</ul>
							
							</div>

							<div class="col-xs-12 col-sm-12 col-md-4">
								<h3 class="nome_contato">Endereço</h3>	
													
								<ul class="menu">
									<h1 class="nome_contato2 barra2">Rua marechal,29</h1>
								</ul>
								<ul>
									<h1 class="nome_contato2 barra2">Copacaba - Rio de Janeiro</h1>
								</ul>
								<ul>
									<h1 class="nome_contato2 barra2">Brasil - Terra - Via Láctea</h1>
								</ul>
							
							</div>

						
					</div>
				</section>

				<footer class="rodape row">
							<div class="container">
								<h3 class="rodape2 col-md-4 "><a href="index.php">Menu</a></h3>
								<h3 class="rodape2 col-md-4 "><a href="sobre.php">Sobre</a></h3>
								<h3 class="rodape2 col-md-4 "><a href="contato.php">Contato</a></h3>
							</div>
							<div>
								<p class=" col-md-12 direitos ">Rest @2017.Alguns Direitos Reservados</p>
							</div>
						</footer>
		</body>
	</html>