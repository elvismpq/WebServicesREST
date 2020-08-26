<?php
$url="https://bccf7481c751.ngrok.io/prueba/marvel/Peliculas";
$miVar=file_get_contents($url);
$decodjson=json_decode($miVar);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="util.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Películas </h1>
							<small class="site-description">Estrenos</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Inicio/Películas</a></li>
						</ul> <!-- .menu -->

					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">
							<div class="col-md-12">
								<div class="slider">
									<ul class="slides">
										<li><a height="100px" width="200px" href="#"><img src="https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/f/fc/Spider_Man_Far_From_Home_-_P%C3%B3ster_EEUU.png/revision/latest/top-crop/width/360/height/450?cb=20190522204227&path-prefix=es" alt="Slide 1"></a></li>
										<li><a href="#"><img src="https://images-na.ssl-images-amazon.com/images/I/81%2BNup8-8NL._SL1500_.jpg" alt=""></a></li>
										<li><a href="#"><img src="https://setondailyroar.com/wp-content/uploads/2018/03/A381E704-9D0E-491F-88E0-1E6AB4B1A153.jpeg" alt="Slide 3"></a></li>
									</ul>
								</div>
							</div>
                        </div> <!-- .row -->
                        <h1>Estrenos</h1>
                        <center>
                        <div class="row">
                        <?php
                            foreach($decodjson as $p){
                                ?>
                                
                                <div class="col-md-3 m-r-1" >
                                    <div class="latest-movie">
                                        <a href="detalles.php?id=<?php echo $p->id;?>"><img src="<?php echo $p->enlace;?>" alt="<?php echo $p->titulo;?>"></a>
                                    </div>
							    </div>
                                <?php
                                }
                        
                        ?>
                        </div>
                        </center>
				</div> <!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						
					</div> <!-- .row -->

					<div class="colophon">Copyright 2020 Fitgy, Designed by Stark Industries. Todos los derechos reservados</div>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>