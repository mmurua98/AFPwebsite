
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anderson Forest Products - México</title>
	<link href="AFPlogo.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&family=Spartan:wght@400;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta name="description" content="Lo mejor en productos de madera!" />
	<meta name="robots" content="index, follow">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

	<!--Start Home Section-->
	<div id="home">
		<!--Navigation-->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

			<a href="#home" class="navbar-brand">
				<img src="img/AFPlogo.png" alt="logo">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="#home" class="nav-link">Inicio</a>
					</li>
					<li class="nav-item">
						<a href="#about" class="nav-link">Nosotros</a>
					</li>
					<li class="nav-item">
						<a href="#products" class="nav-link">Productos</a>
					</li>
					<li class="nav-item">
						<a href="#contact" class="nav-link">Contacto</a>
					</li>

				</ul>
			</div>

		</nav>

		<!--Start Image Slider-->
		<div class="carousel" id="carouselExampleIndicators" data-ride="carousel" data-interval="7000">
			<div class="carousel-inner" role="listbox">
				<!--Slide 1-->
				<div class="carousel-item active" style="background-image: url(img/afpAfuera.jpg);">
					<div class="carousel-caption text-center">
						<h1>Anderson Forest Products</h1>
						<h3>Ofreciendo productos de madera de calidad desde 1967 </h3>
						<a href="#contact" class="btn btn-outline-light btn-lg">Contacto</a>
					</div>
				</div>
			</div>
		</div>
		<!--End Image Slider-->
	</div>
	<!--End Home Section-->

	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="offset-sm-2 col-sm-8">
					<div class="headerText text-center">
						<h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Nosotros</h2>
						<br>
					</div>
				</div>
				<div class="col-md-5">
					<div class="about-img" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
						<img class="logo" src="img/about_opt.jpg" alt="">
					</div>
				</div>
				<br>
				<div class="col-md-7 about-right" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">

					<p class="p-first text-black">
						Anderson Forest products, es un fabricante de productos de Madera de alta calidad,
						basado en especificaciones.
					</p>
					<p class="text-black">
						Nuestros productos más solicitados son los carretes y tarimas,
						los cuales están disponibles tanto en madera sólida, madera contrachapada y plástico.
					</p>
					<p class="text-black">
						También podemos fabricar una gran variedad de productos personalizados.
						Solo preguntenos si podemos hacerlo!
					</p>

				</div>
			</div>
		</div>
	</section>



	<!--Start Products Section-->
	<div class="row" id="products">
		<div class="offset-sm-2 col-sm-8">
			<div class="headerText text-center">
				<h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Productos</h1>
				<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Ofrecemos productos personalizados a
					nuestros clientes para sus necesidades específicas.</p>
			</div>
		</div>
	</div>
	<div class="products">

		<div class="containerProducts" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">


			<div class="card">
				<div class="imgBox">
					<img src="img/portfolio/wood-reels.jpg" alt="">
				</div>
				<div class="content">
					<h2>Carretes de madera</h2>
					<p>Carretes de madera personalizados de calidad de manera oportuna y rentable.</p>
				</div>
			</div>
			<div class="card">
				<div class="imgBox">
					<img src="img/portfolio/plywood_reels.jpg" alt="">
				</div>
				<div class="content">
					<h2>Carretes de triplay</h2>
					<p>Para productores de alambres, cables, cuerdas, aplicación hidráulica, industrial y más.</p>
				</div>
			</div>
			<div class="card">
				<div class="imgBox">
					<img src="img/portfolio/plastic_reels.jpg" alt="">
				</div>
				<div class="content">
					<h2>Carretes de plástico</h2>
					<p>Solución de embalaje para productores de monofilamento y alambre aislado.</p>
				</div>
			</div>
			<div class="card">
				<div class="imgBox">
					<img src="img/portfolio/wood-crates.jpg" alt="">
				</div>
				<div class="content">
					<h2>Cajas de madera</h2>
					<p>Empaque su productos de forma segura con nuestras cajas de madera.</p>
				</div>
			</div>
			<div class="card">
				<div class="imgBox">
					<img src="img/portfolio/paper_crates.jpg" alt="">
				</div>
				<div class="content">
					<h2>Núcleos de papel</h2>
					<p>Fabricámos nuestros propios tubos de papel para ofrecer el precio más bajo posible.</p>
				</div>
			</div>
			<div class="card">
				<div class="imgBox">
					<img src="img/portfolio/recycled_reels.jpg" alt="">
				</div>
				<div class="content">
					<h2>Carretes reciclados</h2>
					<p>Reciclamos carretes y partes de carretas que tienen poco uso y se pueden restaurar.</p>
				</div>
			</div>
		</div>
	</div>

	<!--Start Contact Section-->
	<div id="contact" class="contact">

		<div class="content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
			<h2>Contáctanos</h2>
			<p>Estamos interesados en crear una relación de negocios y de oportunidades de empleo.</p>
		</div>

		<div class="container">

			<div class="contactInfo">
				<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"> </i></div>
					<div class="text">
						<h3>Dirección</h3>
						<p>Blvd. Colosio #1, y Carrt. Internacional,<br>Parque Industrial Apolo,<br> Nogales, Sonora,
							<br> 84094</p>
					</div>
				</div>
				<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="250">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"> </i></div>
					<div class="text">
						<h3>Teléfono</h3>
						<p>(631) 319 0743, 314 4343</p>
					</div>
				</div>
				<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
					<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>anahie@afpmexico.com</p>
					</div>
				</div>
			</div>

			<div class="contactForm" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1000">
				<form action="php/form.php" method="POST" name="form" id="form">
					<h2>Envíanos un mensaje</h2>
					<div class="inputBox">
						<input type="text" pattern="[a-zA-Z]+[ ][a-zA-Z]+" name="name" id="name" maxlength="25"
							required="required">
						<span>Nombre</span>
					</div>
					<div class="inputBox">
						<input type="email" name="email" id="email" required>
						<span>Email</span>
					</div>
					<div class="inputBox">
						<textarea name="message" id="message" cols="30" rows="10" required="required"></textarea>
						<span>Escribe tu mensaje...</span>
					</div>
					<div class="inputBox">
						<input type="submit" name="submit" id="submit" value="Enviar">
					</div>
					<span id="successMessage"> </span>			
				</form>
			</div>
		</div>
	</div>

	<!--Map Section-->
	<div id="mapa" class="googlemap">
		<div class="overlay" onClick="style.pointerEvents='none' "></div>
		<iframe
			src="https://www.google.com/maps/embed?pb=!4v1601230787520!6m8!1m7!1s_KJUXFWfQQTBWhS_qJtVQA!2m2!1d31.28066845973927!2d-110.9412708973745!3f201.43891280810436!4f-1.8468008792086152!5f0.7820865974627469"
			width="100%" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
			tabindex="0">
		</iframe>
	</div>
	<!--End Map Section-->

	<!--Start footer Section-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul class="sci">
						<li><a href="https://www.facebook.com/afpusa/" target="_blank"><i
									class="fab fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/afpusa_inc" target="_blank"><i class="fab fa-twitter"></i></a>
						</li>
						<li><a href="anahie@afpmexico.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
						<li><a href="https://www.linkedin.com/company/anderson-forest-products" target="_blank"><i
									class="fab fa-linkedin"></i></a></li>
						<li><a href="https://www.instagram.com/andersonwoodworks.tx/" target="_blank"><i
									class="fab fa-instagram"></i></a></li>
					</ul>
					<p class="cpryt">
						© 2020 Anderson Forest Products, Inc. | Diseñado Por Miguel M & Oscar A
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!--End footer Section-->


	<!--- Script Source Files -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<!--- End of Script Source Files -->

</body>

</html>