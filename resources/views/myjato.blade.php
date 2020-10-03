@extends('layout')

@section('content')

<div class="header-spacer"></div>

<div class="content-wrapper">


	<!-- Tripple Image -->

	<section class="bg-myjato-green bg-11-myjato background-contain">
		<div class="container">
			<div class="row medium-padding100">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading align-center">
						<h6 class=" color-myjato-black">MyJato</h6>
						<h2 class="heading-title">MyJato el mejor sitio inmobiliario donde pudes encontrar lo que estas buscando. !El inmueble que soñaste está en MyJato!</h2>
						<a href="15_pricing_tables.html" class="btn btn--green btn--with-shadow ">
						Visita nuestra página oficial de MyJato
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-tripple-image">
						<img src="img/image1-myjato.jpg" alt="image">
						<img src="img/image2-myjato.jpg" alt="image">
						<img src="img/image3-myjato.jpg" alt="image">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Tripple Image -->


	<!-- Text Block -->

	<section class="medium-padding100 bg-myjato-white" >
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<h3>En MyJato puedes alquilar, comprar y vender inmuebles en el Perú.</h3>
					<p>MyJato es un sitio web donde puedes encontrar en inmueble de tus sueños. Alquiler, Ventas y compras de inmuebles en toda las regiones del Perú.</p>
					<p>Si estas buscando casas, apartamentos, terrenos, lotes, oficinas, etc. visita nuestra a MyJato y encontraras los mejores inmuebles al precio más bajo del mercado.</p>
				</div>
				<div class="col-lg-2 col-lg-offset-1 col-md-3 col-sm-6 col-xs-6">
					<div class="text-box">
						<h6 class="title">Categorias</h6>
						<ul>
							<li><a href="">Casas</a></li>
							<li><a href="">Departamentos</a></li>
							<li><a href="">Oficinas</a></li>
							<li><a href="">Local comercial</a></li>
							<li><a href="">Lotes de terreno</a></li>
							
						</ul>
					</div>
					<div class="text-box">
						<h6 class="title">Compra o Vende</h6>
						<ul>
							<li><a href="">Compra de inmuebles</a></li>
							<li><a href="">Vende tus inmuebles</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
					<div class="text-box">
						<h6 class="title">Agentes</h6>
						<ul>
							<li>AAAAAAAAAaaa</li>
							<li>BBBBBBBBBBB</li>
						</ul>
					</div>
					<div class="text-box">
						<h6 class="title">Zonas más populares</h6>
						<ul>
							<li><a href="">Lima</a></li>
							<li><a href="">Arequipa</a></li>
							<li><a href="">Cusco</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Text Block -->


	<!-- Slider with round slides -->

	<section class="crumina-module crumina-module-slider medium-padding100 bg-myjato-green">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<div class="swiper-container" data-effect="fade">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="img/slides3-myjato1.png" alt="image" data-swiper-parallax="-200">
							</div>
							<div class="swiper-slide">
								<img src="img/slides3-myjato2.png" alt="image" data-swiper-parallax="-200">
							</div>
							<div class="swiper-slide">
								<img src="img/slides3-myjato3.png" alt="image" data-swiper-parallax="-200">
							</div>
							<div class="swiper-slide">
								<img src="img/slides3-myjato4.png" alt="image" data-swiper-parallax="-200">
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-lg-offset-1 col-md-7 col-sm-12 col-xs-12">
					<div class="slider-slides slider-slides--round-text-own">
						<div class="slides-item slide-active">
							<div class="number color-myjato-black">1</div>
							<div class="crumina-module crumina-heading custom-color color-myjato-black">
								<h5 class="heading-title ">Publica tus inmuebles</h5>
								<div class="heading-text">
									Vende o alquila tus inmuebles en MyJato. Publica tu casa, departamento, oficina, local comercial, etc. 
								</div>
							</div>
						</div>

						<div class="slides-item slide-active">
							<div class="number">2</div>
							<div class="crumina-module crumina-heading custom-color color-myjato-black">
								<h5 class="heading-title">Busca tu inmueble en alquiler</h5>
								<div class="heading-text">En MyJato encontrarás en inmueble que estabas buscando. </div>
							</div>
						</div>
						<div class="slides-item ">
							<div class="number">3</div>
							<div class="crumina-module crumina-heading custom-color color-myjato-black">
								<h5 class="heading-title">Compra tu inmueble</h5>
								<div class="heading-text">Contamos con los mejores agentes y los mejores inmuebles al precio más bajo del mercado.</div>
							</div>
						</div>
						<div class="slides-item ">
							<div class="number">4</div>
							<div class="crumina-module crumina-heading custom-color color-myjato-black">
								<h5 class="heading-title">Mira las visitas y comentarios de tu inmueble</h5>
								<div class="heading-text">Estas mas conectado con los interesados de tu inmueble. puedes ver todas las visitas a tu publicación.</div>
							</div>
						</div>

						

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Slider with round slides -->


	<!-- Smartphone Video -->

	<section class="medium-padding100 align-center bg-myjato-green">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading align-center">
						<h6 class="heading-sup-title color-myjato-black">Visita Nuestro canal en YouTube</h6>
						<h3 class="heading-title color-myjato-black">Mira Nuestro Video presentación</h3>
						<div class="h5 heading-text color-myjato-black">MyJato un sitio web donde puedes encontrar los mejores inmuebles.</div>
					</div>
					<div class="crumina-module crumina-smartphone-video">
						<div class="video-thumb">
							<img src="img/video-thumb2-myjato.jpg" alt="video">
							<a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
								<img src="img/play-myjato.png" alt="play">
							</a>
						</div>
					</div>

					<a href="#" class="btn btn-border btn--with-shadow c-myjato">
						Visita nuestro canal
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Smartphone Video -->


	<!-- Smartphone -->

	<section class=" medium-padding100 bg-myjato-green">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12  color-myjato-black">
					<h3>¿Por qué publicar en MyJato?</h3>
					<p class="color-myjato-black">Somos el sitio web inmobiliario más grande en todo el país. y contamos con mas de 1.5 millones de visitas por mes. Te ayudamos a mejorar tus anuncios.</p>
					<div class="row">
						<div class="info-boxes">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-info-box info-box--standard">
									<div class="info-box-image display-flex">
										<img class="icon-small" src="svg-icons/visitas.svg" alt="library">
										<h6 class="info-box-title">Visitas</h6>
									</div>
									<p class="info-box-text">Tenemmos más de 5000 visitas diarias.</p>
								</div>
								<div class="crumina-module crumina-info-box info-box--standard">
									<div class="info-box-image display-flex">
										<img class="icon-small" src="svg-icons/mensaje.svg" alt="library">
										<h6 class="info-box-title">Mensajes</h6>
									</div>
									<p class="info-box-text">Puedes ver los mensajes y comentarios de todos los interesados.</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-info-box info-box--standard">
									<div class="info-box-image display-flex">
										<img class="icon-small" src="svg-icons/anuncios.svg" alt="library">
										<h6 class="info-box-title">Tus anuncios</h6>
									</div>
									<p class="info-box-text">Nosotros te ayudamos a mejorar tus anuncios y llegar a todos los interesados.</p>
								</div>
								<div class="crumina-module crumina-info-box info-box--standard">
									<div class="info-box-image display-flex">
										<img class="icon-small" src="svg-icons/find.svg" alt="library">
										<h6 class="info-box-title">Encuentra tu inmueble ideal</h6>
									</div>
									<p class="info-box-text">Contamos con un perfil de busqueda completa y especifica para encontrar tu inmueble ideal.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
					<img src="img/3image.png" alt="image">
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Smartphone -->




	<!-- Screenshots Masonry -->

	<section class="align-center medium-padding100 bg-blue-lighteen">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title">MyJato</h6>
						<h3 class="heading-title">El inmueble que buscabas lo encuentras en MyJato</h3>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

					<ul class="cat-list-bg-style-own sorting-menu">
						<li class="cat-list__item active" data-filter=".all"><a href="#" class="">Todos</a></li>
						<li class="cat-list__item" data-filter=".aparments"><a href="#" class="">Departamentos</a></li>
						<li class="cat-list__item" data-filter=".house"><a href="#" class="">Casas</a></li>
						<li class="cat-list__item" data-filter=".office"><a href="#" class="">Oficinas</a></li>
						<li class="cat-list__item" data-filter=".shop"><a href="#" class="">Local comercial</a></li>
					</ul>

					<div class="row sorting-container" id="clients-grid" data-layout="masonry">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item aparments all smm">
							<div class="screenshots-item">
								<img src="img/screenshot1-myjato1.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot1-myjato1.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item aparments  all smm">
							<div class="screenshots-item">
								<img src="img/screenshot1-myjato2.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot1-myjato2.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item aparments smm">
							<div class="screenshots-item">
								<img src="img/screenshot1-myjato3.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot1-myjato3.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item house all">
							<div class="screenshots-item">
								<img src="img/screenshot7-myjato1.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot7-myjato1.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item house all">
							<div class="screenshots-item">
								<img src="img/screenshot7-myjato2.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot7-myjato2.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item house">
							<div class="screenshots-item">
								<img src="img/screenshot7-myjato3.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot7-myjato3.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item house all">
							<div class="screenshots-item">
								<img src="img/screenshot7-myjato4.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot7-myjato4.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item office all">
							<div class="screenshots-item">
								<img src="img/screenshot3.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot3-myjato1.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item office all">
							<div class="screenshots-item">
								<img src="img/screenshot3-myjato2.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot3.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item office">
							<div class="screenshots-item">
								<img src="img/screenshot3-myjato3.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot3.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item office">
							<div class="screenshots-item">
								<img src="img/screenshot3-myjato4.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot3.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item shop">
							<div class="screenshots-item">
								<img src="img/screenshot7-myjato5.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot7-myjato5.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item shop all">
							<div class="screenshots-item">
								<img src="img/screenshot7-myjato6.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot7-myjato6.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sorting-item shop">
							<div class="screenshots-item">
								<img src="img/screenshot7-myjato7.jpg" alt="logo">
								<div class="overlay-standard overlay--blue-dark-own"></div>
								<a href="img/screenshot7-myjato7.jpg" class="expand js-zoom-image">
									<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
									Ver
								</a>
							</div>
						</div>
				</div>
				<a href="#" class="btn btn--large btn-border btn--with-shadow btn-more btn--grey-light-own" id="load-more-button" data-load-link="clients-to-load.html" data-container="clients-grid">Visita nuestra página </a>
			</div>
		</div>
	</section>

	<!-- ... end Screenshots Masonry -->


	<!-- Testimonials -->

	<section class="crumina-module crumina-module-slider  bg-4-myjato cloud-center navigation-center-both-sides medium-padding100" style="padding: 100px 0; background-color: #f2f8fe;">
		<div class="container pt100-client" >
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 col-sm-offset-0">
					<div class="crumina-module crumina-heading align-center">
						<h6 class="heading-sup-title">Experiencias</h6>
						<h2 class="h3 heading-title">¿Que dicen nuestros usuarios acerca MyJato?</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
					<div class="swiper-container" data-effect="fade">
						<div class="swiper-wrapper">
							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div class="testimonial-img-author" data-swiper-parallax="-100">
									<img src="img/author2-myjato.png" alt="avatar">
								</div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
									etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum parum claram.
								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">Doe Simpson</a>
										<div class="author-company">Student, 23 years old</div>
									</div>

								</div>
							</div>

							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div class="testimonial-img-author" data-swiper-parallax="-100">
									<img src="img/author3-myjato.png" alt="avatar">
								</div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
									etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum parum claram.
								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">Doe Simpson</a>
										<div class="author-company">Student, 23 years old</div>
									</div>

								</div>
							</div>

							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div class="testimonial-img-author" data-swiper-parallax="-100">
									<img src="img/author4-myjato.png" alt="avatar">
								</div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
									etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum parum claram.
								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">Doe Simpson</a>
										<div class="author-company">Student, 23 years old</div>
									</div>

								</div>
							</div>

							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div class="testimonial-img-author" data-swiper-parallax="-100">
									<img src="img/author5-myjato.png" alt="avatar">
								</div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
									etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum parum claram.
								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">Doe Simpson</a>
										<div class="author-company">Student, 23 years old</div>
									</div>

								</div>
							</div>

							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div class="testimonial-img-author" data-swiper-parallax="-100">
									<img src="img/author6-myjato.png" alt="avatar">
								</div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
									etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum parum claram.
								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">Doe Simpson</a>
										<div class="author-company">Student, 23 years old</div>
									</div>

								</div>
							</div>

							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div class="testimonial-img-author" data-swiper-parallax="-100">
									<img src="img/author7-myjato.png" alt="avatar">
								</div>

								<h6 class="testimonial-text" data-swiper-parallax="-300">
									Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
									etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum parum claram.
								</h6>

								<div class="author-info-wrap" data-swiper-parallax="-100">

									<div class="author-info">
										<a href="#" class="h6 author-name">Doe Simpson</a>
										<div class="author-company">Student, 23 years old</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Prev next buttons-->

		<div class="btn-prev">
			<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
			<svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
		</div>

		<div class="btn-next">
			<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
			<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
		</div>
	</section>

	<!-- ... end Testimonials -->

</div>

@endsection