@extends('layout')

@section('content')
<div class="header-spacer"></div>


<div class="content-wrapper">

	<!-- Main Slider -->

	<div class="crumina-module crumina-module-slider container-full-width" >
		<div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">

			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide bg-1 main-slider-bg-light" >

					<div class="container">
						<div class="row table-cell">

							<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">

								<div class="slider-content align-center">

									<h1 class="slider-content-title with-decoration green-mars" data-swiper-parallax="-100">
										GreenMars Company

										<svg class="first-decoration utouch-icon utouch-icon-arrow-left">
											<use xlink:href="#utouch-icon-arrow-left"></use>
										</svg>

										<svg class="second-decoration utouch-icon utouch-icon-arrow-left">
											<use xlink:href="#utouch-icon-arrow-left"></use>
										</svg>

									</h1>
									<h6 class="slider-content-text color-text-green" data-swiper-parallax="-200">Una empresa dedicada a desarrollo de aplicaiones para el servicios de la sociedad. muestras aplicaiones son muy eficientes y seguros.
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

				<div class="swiper-slide bg-2 main-slider-bg-light" >

					<div class="container table">
						<div class="row table-cell">

							<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
								<div class="slider-content align-both">
									<h2 class="slider-content-title color-text-green" data-swiper-parallax="-100">
										<span class="c-primary">Mayorista</span>
										Vive la experiencia de pedir desde tu casa
									</h2>
									<h6 class="slider-content-text color-text-green" data-swiper-parallax="-200">No mas perdidas de tiempo en salir de compras. Descarga nuestra app y pide todo lo que necesitas.
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
				<div class="swiper-slide thumb-left bg-3 main-slider-bg-light" >

					<div class="container table full-height">
						<div class="row table-cell">
							<div class="col-lg-6 col-sm-12 table-cell">

								<div class="slider-content align-both">

									<h2 class="slider-content-title color-text-green" data-swiper-parallax="-100">Mayorita Distribuidor</h2>

									<h6 class="slider-content-text color-text-green" data-swiper-parallax="-200">Una aplicacion pensado para que vendas más. Publica tus productos a través de nustra aplicación y aumenta tus ventas.</h6>

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
							<a href="#" class="h5-own info-box-title-green">Online Shopping</a>
							<p class="info-box-text color-text-green">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
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
							<a href="#" class="h5-own info-box-title-green">Multimedia Archives</a>
							<p class="info-box-text color-text-green">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
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
							<a href="#" class="h5-own info-box-title-green">Quick Settings</a>
							<p class="info-box-text color-text-green">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
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
								<div class="crumina-module crumina-heading custom-color c-mayorista">
									<h6 class="heading-sup-title " >Apps</h6>
									<h2 class="heading-title mayorista">Mayorista Distribuidor</h2>
									<div class="heading-text mayorista">Mayorista Disitribuidor es una aplicacion pensado para las personas que tienen un negocio y quieren incrementar sus ventas. Con esta Aplicacion puede recibir pedidos de muchos usuarios. venda mas y afiliate a nuestra plataforma de negocio. <br>
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
						<h6 class="heading-sup-title heading-sup-title-own color-text-green">Mira nuestro video acerca de GreenMars Comapny</h6>
						<h2 class="heading-title color-text-green">Conoce como <span class="c-primary">GreenMars</span> Trabaja para ti</h2>
						<p class="heading-text color-text-green">GreenMars es una empresa dedicada al desarrollo proyectos informáticos y tecnológicos para el servicios de la sociedad.</p>
					</div>
					<a href="{{url('/aboutUs')}}" class="btn btn-small btn--icon-right btn-border btn--with-shadow c-primary">
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

	

	<!-- ... end Clients Block -->


	<!-- Info Boxes -->
	<br><br>

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
								<h5 class="info-box-title green-mars"><a href="{{url('/')}}">GreenMars</a> </h5>
								<p class="info-box-text color-text-green">Empresa dedicada diseñar plataformas web, móviles especialmente para impulsar el crecimiento de negocios.</p>
							</div>
						</div>

						<div class="crumina-module crumina-info-box info-box--standard-round icon-right negative-margin-right150">
							<div class="info-box-image mayorista-bg" style="background: #2979ff;">
								<img src="svg-icons/pictures.svg" alt="chat" class="utouch-icon">
							</div>
							<div class="info-box-content ">
								<h5 class="info-box-title mayorista"><a href="{{url('/mayorista')}}"> Mayorista</a></h5>
								<p class="info-box-text color-text-green">Mayorista es una aplicación móvil que ayuda a las personas a encontrar productos de primera necesidad al por mayor de manera rápida lo que permite ahorrar tiempo y dinero.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 align-center">
						<img class="particular-image" src="img/image.png" alt="image">
						<a href="{{url('/ourApps')}}" class="btn btn--greenmars-bg btn--with-shadow">
							Nuestras Apps
						</a>
					</div>

					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">
							<div class="info-box-image">
								<img src="svg-icons/clock.svg" alt="chat" class="utouch-icon">
							</div>
							<div class="info-box-content">
								<h5 class="info-box-title mayorista-cliente"><a href="{{ url('/mayorista')}}"> Mayorista Cliente</a></h5>
								<p class="info-box-text color-text-green">Mayorista distribuidor es una aplicación móvil que funciona como intermediario para conectar a los distribuidores con sus clientes.</p>
							</div>
						</div>

						<div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">
							<div class="info-box-image" style="background: #ff1600;">
								<img src="svg-icons/calendar.svg" alt="chat" class="utouch-icon">
							</div>
							<div class="info-box-content">
								<h5 class="info-box-title hormiga"><a href="{{url('/hormiga')}}">Hormiga</a></h5>
								<p class="info-box-text color-text-green">Plataforma dedicada a impulsar la producción nacional. Es una ventana en la que el productor podrá venderle al Perú y al mundo.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... Info Boxes -->


	<!-- Counters -->

	<section class="color-black-bg background-contain bg-10">

		<div class="container">
			<div class="row">
				<div class="counters">
					
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<div class="crumina-module crumina-counter-item">
							<div class="counter-numbers counter c-yellow">
								<span data-speed="2000" data-refresh-interval="3" data-to="7564" data-from="2">7564</span>
							</div>
							<h5 class="counter-title-own  color-text-green">Likes</h5>
						</div> 
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<div class="crumina-module crumina-counter-item">
							<div class="counter-numbers counter c-yellow">
								<span data-speed="2000" data-refresh-interval="3" data-to="1231" data-from="2">1231</span>
							</div>
							<h5 class="counter-title-own color-text-green">Distribuidores afiliados</h5>
						</div> 
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<div class="crumina-module crumina-counter-item">
							<div class="counter-numbers counter c-yellow">
								<span data-speed="2000" data-refresh-interval="3" data-to="9614" data-from="2">9614</span>
							</div>
							<h5 class="counter-title-own color-text-green">Usuarios Activos</h5>
						</div> 
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<div class="crumina-module crumina-counter-item">
							<div class="counter-numbers counter c-yellow">
								<span data-speed="2000" data-refresh-interval="3" data-to="19237" data-from="2">19237</span>
								
							</div>
							<h5 class="counter-title-own color-text-green">Descargas</h5>
						</div>
					</div>

					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<h5 class="green-mars">GreenMars. Una oportunidad para crecer!</h5>
						<p class=" color-text-green">Con nuestros aplicaciones tu negocio crece sin parar!</p>
					</div>

				</div>
			</div>
		</div>

	</section>

	<!-- ... end  Counters -->


	<!-- FAQS Slider -->

	

	<!-- ... end FAQS Slider -->


	<!-- Info Boxes -->

	<section class="crumina-module crumina-module-slider bg-blue-lighteen background-contain bg-11 medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title"><span class="c-primary">GreenMars</span></h6>
						<h2 class="heading-title">Nuestras Experiencias con nuestros clientes</h2>
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

	

	<!-- ... end Testimonials -->


	<!-- Subscribe Form -->

	

	<!-- End Subscribe Form -->


	<!-- Promo Block -->

	

	<!-- ... end Promo Block -->

</div>

@endsection