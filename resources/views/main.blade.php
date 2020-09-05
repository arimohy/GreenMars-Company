@extends('index')

@section('content')
<div class="header-spacer"></div>


<div class="content-wrapper">

	<!-- Main Slider -->

	<div class="crumina-module crumina-module-slider container-full-width">
		<div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">

			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide bg-1 main-slider-bg-light">

					<div class="container">
						<div class="row table-cell">

							<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">

								<div class="slider-content align-center">

									<h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
										GreenMars Company

										<svg class="first-decoration utouch-icon utouch-icon-arrow-left">
											<use xlink:href="#utouch-icon-arrow-left"></use>
										</svg>

										<svg class="second-decoration utouch-icon utouch-icon-arrow-left">
											<use xlink:href="#utouch-icon-arrow-left"></use>
										</svg>

									</h1>
									<h6 class="slider-content-text" data-swiper-parallax="-200">Una empresa dedicada a desarrollo de aplicaiones para el servicios de la sociedad. muestras aplicaiones son muy eficientes y seguros.
									</h6>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="03_products.html" class="btn btn--yellow btn--with-shadow">
											Nuestras Apps
										</a>

										<a href="02_company.html" class="btn btn-border btn--with-shadow c-primary">
											Conoce más acerca de nosotros
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img src="img/slides1.png" alt="slider">
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="swiper-slide bg-2 main-slider-bg-light">

					<div class="container table">
						<div class="row table-cell">

							<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
								<div class="slider-content align-both">
									<h2 class="slider-content-title" data-swiper-parallax="-100">
										<span class="c-primary">Mayorista</span>
										Vive la experiencia de pedir desde tu casa.
									</h2>
									<h6 class="slider-content-text" data-swiper-parallax="-200">No mas perdidas de tiempo en salir de compras. Descarga nuestra app y pide todo lo que necesitas.
									</h6>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="#" class="btn btn-market btn--with-shadow">
											<svg class="utouch-icon utouch-icon-apple-logotype-1">
												<use xlink:href="#utouch-icon-apple-logotype-1"></use>
											</svg>
											<div class="text">
												<span class="sup-title">Descarga desde</span>
												<span class="title">App Store</span>
											</div>
										</a>

										<a href="#" class="btn btn-market btn--with-shadow">
											<img class="utouch-icon" src="svg-icons/google-play.svg" alt="google">
											<div class="text">
												<span class="sup-title">Descarga desde</span>
												<span class="title">Google Play</span>
											</div>
										</a>

									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide thumb-left bg-3 main-slider-bg-light">

					<div class="container table full-height">
						<div class="row table-cell">
							<div class="col-lg-6 col-sm-12 table-cell">

								<div class="slider-content align-both">

									<h2 class="slider-content-title" data-swiper-parallax="-100">Mayorita Distribuidor</h2>

									<h6 class="slider-content-text" data-swiper-parallax="-200">Una aplicacion pensado para que vendas mas. publica tus products a traves de nustra aplicacion y aumenta tus ventas.
									</h6>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="#" class="btn btn-market btn--with-shadow">
											<svg class="utouch-icon utouch-icon-apple-logotype-1">
												<use xlink:href="#utouch-icon-apple-logotype-1"></use>
											</svg>
											<div class="text">
												<span class="sup-title">Descarga desde</span>
												<span class="title">App Store</span>
											</div>
										</a>

										<a href="#" class="btn btn-market btn--with-shadow">
											<img class="utouch-icon" src="svg-icons/google-play.svg" alt="google">
											<div class="text">
												<span class="sup-title">Descarga desde</span>
												<span class="title">Google Play</span>
											</div>
										</a>

									</div>

								</div>

							</div>

							<div class="col-lg-6 col-sm-12 table-cell">
								<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/slides2.png" alt="slider">
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!--Prev next buttons-->

			<div class="btn-prev with-bg">
				<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
					<use xlink:href="#utouch-icon-arrow-left-1"></use>
				</svg>
				<svg class="utouch-icon utouch-icon-arrow-left1">
					<use xlink:href="#utouch-icon-arrow-left1"></use>
				</svg>
			</div>

			<div class="btn-next with-bg">
				<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
					<use xlink:href="#utouch-icon-arrow-right-1"></use>
				</svg>
				<svg class="utouch-icon utouch-icon-arrow-right1">
					<use xlink:href="#utouch-icon-arrow-right1"></use>
				</svg>
			</div>

		</div>
	</div>

	<!-- ... end Main Slider -->

	<!-- Info Boxes -->

	<section class="medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--standard-hover">

						<div class="info-box-image">
							<img class="utouch-icon" src="svg-icons/smartphone.svg" alt="smartphone">
							<img class="cloud" src="img/clouds8.png" alt="cloud">
						</div>

						<div class="info-box-content">
							<a href="#" class="h5 info-box-title">Online Shopping</a>
							<p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
								nibh euismod tincidunt ut laoreet dolore magna aliquam.
							</p>
						</div>

						<a href="#" class="btn-next">
							<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
								<use xlink:href="#utouch-icon-arrow-right-1"></use>
							</svg>
							<svg class="utouch-icon utouch-icon-arrow-right1">
								<use xlink:href="#utouch-icon-arrow-right1"></use>
							</svg>
						</a>

					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--standard-hover">

						<div class="info-box-image">
							<img class="utouch-icon" src="svg-icons/music%20(1).svg" alt="smartphone">
							<img class="cloud" src="img/clouds9.png" alt="cloud">
						</div>

						<div class="info-box-content">
							<a href="#" class="h5 info-box-title">Multimedia Archives</a>
							<p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
								nibh euismod tincidunt ut laoreet dolore magna aliquam.
							</p>
						</div>

						<a href="#" class="btn-next">
							<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
								<use xlink:href="#utouch-icon-arrow-right-1"></use>
							</svg>
							<svg class="utouch-icon utouch-icon-arrow-right1">
								<use xlink:href="#utouch-icon-arrow-right1"></use>
							</svg>
						</a>

					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--standard-hover">

						<div class="info-box-image">
							<img class="utouch-icon" src="svg-icons/settings%20(4).svg" alt="smartphone">
							<img class="cloud" src="img/clouds10.png" alt="cloud">
						</div>

						<div class="info-box-content">
							<a href="#" class="h5 info-box-title">Quick Settings</a>
							<p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
								nibh euismod tincidunt ut laoreet dolore magna aliquam.
							</p>
						</div>

						<a href="#" class="btn-next">
							<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
								<use xlink:href="#utouch-icon-arrow-right-1"></use>
							</svg>
							<svg class="utouch-icon utouch-icon-arrow-right1">
								<use xlink:href="#utouch-icon-arrow-right1"></use>
							</svg>
						</a>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Info Boxes -->


	<!-- Slider with vertical tabs -->

	<section class="crumina-module crumina-module-slider slider-tabs-vertical-line">

		<div class="swiper-container" data-show-items="1">
			<div class="swiper-wrapper">
				<div class="swiper-slide bg-primary-color bg-5" data-mh="slide">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="slider-tabs-vertical-thumb">
									<img src="img/iphone.png" alt="iphone">
								</div>
							</div>
							<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-heading custom-color c-white">
									<h6 class="heading-sup-title">Apps</h6>
									<h2 class="heading-title">Mayorista</h2>
									<div class="heading-text">Mayorista es una aplicacion pensada para realizar las compras desde la comodidad de tu hogar. No necesitas salir de compras para tener en tu hogas lo que más necesitas. Mayorista tiene gran cantidad de distribuidores cerca a tu hogar lo que hace que tus pedidos lleguen mas rápido. <br>
									Descarga nuestra app Mayorista
									</div>
								</div>

								<a href="#" class="btn btn-market btn--with-shadow">
									<svg class="utouch-icon utouch-icon-apple-logotype-1">
										<use xlink:href="#utouch-icon-apple-logotype-1"></use>
									</svg>
									<div class="text">
										<span class="sup-title">Download on the</span>
										<span class="title">App Store</span>
									</div>
								</a>

								<a href="#" class="btn btn-market btn--with-shadow">
									<img class="utouch-icon" src="svg-icons/google-play.svg" alt="google">
									<div class="text">
										<span class="sup-title">Download on the</span>
										<span class="title">Google Play</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide bg-primary-color bg-5" data-mh="slide">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="slider-tabs-vertical-thumb">
									<img src="img/iphone2.png" alt="iphone">
								</div>
							</div>
							<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-heading custom-color c-white">
									<h6 class="heading-sup-title">Apps</h6>
									<h2 class="heading-title">Mayorista Distribuidor</h2>
									<div class="heading-text">Mayorista Disitribuidor es una aplicacion pensado para las personas que tienen un negocio y quieren incrementar sus ventas. Con esta Aplicacion puede recibir pedidos de muchos usuarios. venda mas y afiliate a nuestra plataforma de negocio. <br>
										descarga nuestra aplicacion
									</div>
								</div>

								<a href="#" class="btn btn-market btn--with-shadow">
									<svg class="utouch-icon utouch-icon-apple-logotype-1">
										<use xlink:href="#utouch-icon-apple-logotype-1"></use>
									</svg>
									<div class="text">
										<span class="sup-title">Download on the</span>
										<span class="title">App Store</span>
									</div>
								</a>

								<a href="#" class="btn btn-market btn--with-shadow">
									<img class="utouch-icon" src="svg-icons/google-play.svg" alt="google">
									<div class="text">
										<span class="sup-title">Download on the</span>
										<span class="title">Google Play</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide bg-red bg-7" data-mh="slide">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="slider-tabs-vertical-thumb">
									<img src="img/iphone3.png" alt="iphone">
								</div>
							</div>
							<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-heading custom-color c-white">
									<h6 class="heading-sup-title">Apps</h6>
									<h2 class="heading-title">Ormiga</h2>
									<div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
										diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
										Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
										litterarum formas humanitatis per.
									</div>
								</div>

								<a href="#" class="btn btn-market btn--with-shadow">
									<svg class="utouch-icon utouch-icon-apple-logotype-1">
										<use xlink:href="#utouch-icon-apple-logotype-1"></use>
									</svg>
									<div class="text">
										<span class="sup-title">Download on the</span>
										<span class="title">App Store</span>
									</div>
								</a>

								<a href="#" class="btn btn-market btn--with-shadow">
									<img class="utouch-icon" src="svg-icons/google-play.svg" alt="google">
									<div class="text">
										<span class="sup-title">Download on the</span>
										<span class="title">Google Play</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-slides slider-slides--vertical-line">
				<a href="#" class="slides-item">
					<span class="round primary"></span>01.
				</a>

				<a href="#" class="slides-item">
					<span class="round primary"></span>02.
				</a>

				<a href="#" class="slides-item">
					<span class="round red"></span>03.
				</a>

			</div>

		</div>

	</section>

	<!-- ... Slider with vertical tabs -->


	<!-- Video -->

	<section class="bg-8 background-contain pt100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title">Mira nuestro video acerca de GreenMars Comapny</h6>
						<h2 class="heading-title">Conoce como <span class="c-primary">GreenMars</span> Trabaja para ti</h2>
						<p class="heading-text">GreenMars es una empresa dedicada a desarrollar aplicaciones para el servicios de la sociedad.
						</p>
					</div>
					<a href="02_company.html" class="btn btn-small btn--icon-right btn-border btn--with-shadow c-primary">
						<svg class="utouch-icon utouch-icon-arrow-right1">
							<use xlink:href="#utouch-icon-arrow-right1"></use>
						</svg>
						<div class="text">
							<span class="title">Conoce más acerca de nosotros</span>
						</div>
					</a>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-our-video">
						<div class="video-thumb">
							<img src="img/video-thumb.png" alt="video">
							<a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
								<img src="img/play.png" alt="play">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Video -->


	<!-- Clients Block -->

	<section class="crumina-module crumina-clients background-contain bg-yellow">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
					<a class="clients-item" href="#">
							<span class="clients-images">
								<img src="img/client1.png" class="" alt="logo">
								<img src="img/client1-1.png" class="hover" alt="logo">
							</span>
					</a>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
					<a class="clients-item" href="#">
							<span class="clients-images">
								<img src="img/client2.png" class="" alt="logo">
								<img src="img/client2-1.png" class="hover" alt="logo">
							</span>
					</a>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
					<a class="clients-item" href="#">
							<span class="clients-images">
								<img src="img/client3.png" class="" alt="logo">
								<img src="img/client3-1.png" class="hover" alt="logo">
							</span>
					</a>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
					<a class="clients-item" href="#">
							<span class="clients-images">
								<img src="img/client4.png" class="" alt="logo">
								<img src="img/client4-1.png" class="hover" alt="logo">
							</span>
					</a>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
					<a class="clients-item" href="#">
							<span class="clients-images">
								<img src="img/client5.png" class="" alt="logo">
								<img src="img/client5-1.png" class="hover" alt="logo">
							</span>
					</a>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
					<a class="clients-item" href="#">
							<span class="clients-images">
								<img src="img/client6.png" class="" alt="logo">
								<img src="img/client6-1.png" class="hover" alt="logo">
							</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Clients Block -->


	<!-- Info Boxes -->

	<section class="bg-9 background-contain medium-padding120">
		<div class="container">
			<div class="row">
				<div class="display-flex info-boxes">
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-round icon-right negative-margin-right150">
							<div class="info-box-image">
								<img src="svg-icons/chat.svg" alt="chat" class="utouch-icon">
							</div>
							<div class="info-box-content">
								<h5 class="info-box-title">Seguridad</h5>
								<p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
									tincidunt.
								</p>
							</div>
						</div>

						<div class="crumina-module crumina-info-box info-box--standard-round icon-right negative-margin-right150">
							<div class="info-box-image">
								<img src="svg-icons/pictures.svg" alt="chat" class="utouch-icon">
							</div>
							<div class="info-box-content">
								<h5 class="info-box-title">Eficiencia</h5>
								<p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
									nonummy nibh euismod.
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 align-center">
						<img class="particular-image" src="img/image.png" alt="image">
						<a href="03_products.html" class="btn btn--red btn--with-shadow">
							Nuestras Apps
						</a>
					</div>

					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">
							<div class="info-box-image">
								<img src="svg-icons/clock.svg" alt="chat" class="utouch-icon">
							</div>
							<div class="info-box-content">
								<h5 class="info-box-title">Rápido</h5>
								<p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
									tincidunt.
								</p>
							</div>
						</div>

						<div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">
							<div class="info-box-image">
								<img src="svg-icons/calendar.svg" alt="chat" class="utouch-icon">
							</div>
							<div class="info-box-content">
								<h5 class="info-box-title">Distribuidores cerce de ti</h5>
								<p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
									nonummy euismod.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... Info Boxes -->


	<!-- Counters -->

	<section class="bg-secondary-color background-contain bg-10">

		<div class="container">
			<div class="row">
				<div class="counters">
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<div class="crumina-module crumina-counter-item">
							<div class="counter-numbers counter c-yellow">
								<span data-speed="2000" data-refresh-interval="3" data-to="6237" data-from="2">6237</span>
							</div>
							<h5 class="counter-title">Line of codes</h5>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<div class="crumina-module crumina-counter-item">
							<div class="counter-numbers counter c-yellow">
								<span data-speed="2000" data-refresh-interval="3" data-to="4000" data-from="2">4000</span>
							</div>
							<h5 class="counter-title">Solutions</h5>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<div class="crumina-module crumina-counter-item">
							<div class="counter-numbers counter c-yellow">
								<span data-speed="2000" data-refresh-interval="3" data-to="3" data-from="2">3</span>
								<div class="units">M+</div>
							</div>
							<h5 class="counter-title">Active users</h5>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<div class="crumina-module crumina-counter-item">
							<div class="counter-numbers counter c-yellow">
								<span data-speed="2000" data-refresh-interval="3" data-to="8" data-from="2">8</span>
								<div class="units">M+</div>
							</div>
							<h5 class="counter-title">Download</h5>
						</div>
					</div>

					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<h5 class="c-white">Utouch is an awesome app</h5>
						<p class="c-semitransparent-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy euismod.</p>
					</div>

				</div>
			</div>
		</div>

	</section>

	<!-- ... end  Counters -->


	<!-- FAQS Slider -->

	<section class="crumina-module crumina-module-slider pt100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 mb30">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title">FAQ</h6>
						<h2 class="heading-title">Six important questions on application</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="swiper-container navigation-bottom" data-effect="fade">
						<div class="slider-slides">
							<a href="#" class="slides-item">
								1
							</a>

							<a href="#" class="slides-item">
								2
							</a>

							<a href="#" class="slides-item">
								3
							</a>

							<a href="#" class="slides-item">
								4
							</a>

							<a href="#" class="slides-item">
								5
							</a>

							<a href="#" class="slides-item">
								6
							</a>
						</div>
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/dial.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">soluta eleifend congue?</h5>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
												notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
												humanitatis.
											</p>
											<p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
											<ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Gectores legere me lius quod</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Mirum est notare quam</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Zril delenit augue duis</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/fingerprint.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">Mirum quam gothica?</h5>
									<p>Ilaritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
										est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
										formas humanitatis. Gest etiam processus dynamicus, qui sequitur mutationem consuetudium
										lectorum.
									</p>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Gectores legere me lius quod</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Mirum est notare quam</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Zril delenit augue duis</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Mirum est notare quam</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Zril delenit augue duis</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Gectores legere me lius quod</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/devices.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-8 col-sm-12" data-swiper-parallax="-100">
									<h5 class="slider-faqs-title">Investigationes quod lectores?</h5>
									<p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Claritas est
										etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare
										quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
										humanitatis.
									</p>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="crumina-module crumina-info-box info-box--standard">
												<div class="info-box-image display-flex">
													<svg class="utouch-icon utouch-icon-checked">
														<use xlink:href="#utouch-icon-checked"></use>
													</svg>
													<h6 class="info-box-title">Quick Settings</h6>
												</div>
												<p class="info-box-text">Wisi enim ad minim veniam, quis nostrud exerci tation qui
													nunc nobis videntur parum clari.
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="crumina-module crumina-info-box info-box--standard">
												<div class="info-box-image display-flex">
													<svg class="utouch-icon utouch-icon-checked">
														<use xlink:href="#utouch-icon-checked"></use>
													</svg>
													<h6 class="info-box-title">Looks Perfect</h6>
												</div>
												<p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/payment-method.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">Duis autem vel eum iriure?</h5>
									<p class="weight-bold">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
										formas humanitatis. Gest etiam processus dynamicus, qui sequitur.
									</p>
									<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
										est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
										formas humanitatis. Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
									</p>
									<a href="03_products.html" class="btn btn-border btn--with-shadow c-secondary">
										Learn More
									</a>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/chat1.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">wisi minim veniam, quis nostrud?</h5>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
												lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
												anteposuerit litterarum formas humanitatis.
											</p>
											<p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
											<div class="play-with-title">
												<a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
													<img src="img/play.png" alt="play">
												</a>
												<h6 class="play-title">Watch the video of instruction</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/tap.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">Eodem typi nunc videntur?</h5>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
												lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
												anteposuerit litterarum formas humanitatis.
											</p>
											<p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
											<ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Mirum est notare quam</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Zril delenit augue duis</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Gectores legere me lius quod</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>

						</div>

						<!--Prev next buttons-->

						<div class="btn-slider-wrap navigation-left-bottom">

							<div class="btn-prev">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
									<use xlink:href="#utouch-icon-arrow-left-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-left1">
									<use xlink:href="#utouch-icon-arrow-left1"></use>
								</svg>
							</div>

							<div class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
									<use xlink:href="#utouch-icon-arrow-right-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-right1">
									<use xlink:href="#utouch-icon-arrow-right1"></use>
								</svg>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end FAQS Slider -->


	<!-- Info Boxes -->

	<section class="crumina-module crumina-module-slider bg-blue-lighteen background-contain bg-11 medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title">Screenshots</h6>
						<h2 class="heading-title">Beautiful interface</h2>
						<p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem
							consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
							anteposuerit litterarum formas humanitatis per est usus legentis in iis qui facit eorum
							claritatem.
						</p>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="crumina-module crumina-info-box info-box--standard">
								<div class="info-box-image display-flex">
									<svg class="utouch-icon utouch-icon-checked">
										<use xlink:href="#utouch-icon-checked"></use>
									</svg>
									<h6 class="info-box-title">Quick Settings</h6>
								</div>
								<p class="info-box-text">Wisi enim ad minim veniam, quis nostrud exerci tation qui
									nunc nobis videntur parum clari.
								</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="crumina-module crumina-info-box info-box--standard">
								<div class="info-box-image display-flex">
									<svg class="utouch-icon utouch-icon-checked">
										<use xlink:href="#utouch-icon-checked"></use>
									</svg>
									<h6 class="info-box-title">Looks Perfect</h6>
								</div>
								<p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
					<div class="swiper-container pagination-bottom slider-tripple-right-image" data-show-items="1" data-effect="coverflow" data-centered-slider="false" data-stretch="170" data-depth="195">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="img/img-slide1.png" alt="slide">
							</div>
							<div class="swiper-slide">
								<img src="img/img-slide1.png" alt="slide">
							</div>
							<div class="swiper-slide">
								<img src="img/img-slide1.png" alt="slide">
							</div>
						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Info Boxes -->


	<!-- Pricing Tables -->


	<!-- ... end Pricing Tables -->


	<!-- Testimonials -->

	<section class="crumina-module crumina-module-slider bg-4 cloud-center navigation-center-both-sides medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
					<div class="swiper-container" data-effect="fade">
						<div class="swiper-wrapper">
							<div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

								<div class="testimonial-img-author" data-swiper-parallax="-100">
									<img src="img/author2.png" alt="avatar">
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
									<img src="img/author2.png" alt="avatar">
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
									<img src="img/author2.png" alt="avatar">
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
			<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
				<use xlink:href="#utouch-icon-arrow-left-1"></use>
			</svg>
			<svg class="utouch-icon utouch-icon-arrow-left1">
				<use xlink:href="#utouch-icon-arrow-left1"></use>
			</svg>
		</div>

		<div class="btn-next">
			<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
				<use xlink:href="#utouch-icon-arrow-right-1"></use>
			</svg>
			<svg class="utouch-icon utouch-icon-arrow-right1">
				<use xlink:href="#utouch-icon-arrow-right1"></use>
			</svg>
		</div>
	</section>

	<!-- ... end Testimonials -->


	<!-- Subscribe Form -->

	<section class="bg-primary-color background-contain bg-14 crumina-module crumina-module-subscribe-form">
		<div class="container">
			<div class="row">
				<div class="subscribe-form">
					<div class="subscribe-main-content">
						<img class="subscribe-img" src="img/subscribe-img.png" alt="image">

						<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-heading">
								<h2 class="heading-title">Love offers and discounts? Subscribe and save.</h2>
								<p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem
									consuetudium lectorum putamus claram.
								</p>
							</div>

							<form class="form-validate form-inline crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="modules/forms/submit.php">
								<input name="email" placeholder="Enter your email address" type="email" required>
								<button class="btn btn--green-light">
									Subscribe
								</button>
							</form>
						</div>

					</div>
					<div class="subscribe-layer"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- End Subscribe Form -->


	<!-- Promo Block -->

	<section class="background-cover bg-blue-lighteen bg-12 align-center medium-padding120">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h2 class="heading-title">Descarga <span class="c-primary">Mayorista</span> ahora!</h2>
						<p class="heading-text">Con Mayorista tienes la libertad de pedir lo que más necesitas desde la comodidad de tu hogar.
						</p>
					</div>

					<a href="#" class="btn btn-market btn--with-shadow">
						<svg class="utouch-icon utouch-icon-apple-logotype-1">
							<use xlink:href="#utouch-icon-apple-logotype-1"></use>
						</svg>
						<div class="text">
							<span class="sup-title">Descarga desde</span>
							<span class="title">App Store</span>
						</div>
					</a>

					<a href="#" class="btn btn-market btn--with-shadow">
						<img class="utouch-icon" src="svg-icons/google-play.svg" alt="google">
						<div class="text">
							<span class="sup-title">Descargar desde</span>
							<span class="title">Google Play</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Promo Block -->

</div>

@endsection