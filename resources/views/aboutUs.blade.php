@extends('layout')

@section('content')

<div class="header-spacer"></div>

<div class="content-wrapper">


	<!-- Block IMG-bottom -->

	<section class="background-contain bg-15 bg-blue-lighteen pt120">
		<div class="container">
			<div class="row">
				<div class="crumina-module crumina-module-img-bottom">
					<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
						<div class="crumina-module-img-content medium-padding100">
							<div class="crumina-module crumina-heading">
								<h6 class="heading-sup-title green-mars">GreenMars Company</h6>
								<h3 class="heading-title">Bienvenido a
									<span class="c-primary">GreenMars!</span> 
									Nosotros creamos aplicaciones de alta confiabilidad para hacer tu vida mejor.
								</h3>
								<div class="h6 heading-text">Descubre nuestras aplicaciones!</div>
							</div>

							<a href="{{url('/ourApps')}}" class="btn btn-border btn--with-shadow c-primary">
								Proyectos
							</a>
							<!-- 
							<a href="15_pricing_tables.html" class="btn btn--green btn--with-shadow">
								Get trial version
							</a>
							-->

						</div>
					</div>

					<div class="col-lg-4 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
						<img class="img-bottom" src="img/man.png" alt="man">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Block IMG-bottom -->


	<!-- Info Boxes -->

	<section class="medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--numbers">
						<h5 class="order-number">01.</h5>
						<h3 class="h5 info-box-title green-mars">Misión</h3>
						<p class="info-box-text color-text-green">Somos una empresa enfocada en brindar servicios y desarrollar soluciones en diversos rubros , para mejorar el estilo de vida de las personas ,empresarios y emprendedores en nuestro territorio nacional, usando nuevas tecnologías de la información para potenciar sus objetivos , facilitar la comodidad de sus tareas y ayudar a su crecimiento.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--numbers">
						<h5 class="order-number">02.</h5>
						<h3 class="h5 info-box-title green-mars">Visión</h3>
						<p class="info-box-text color-text-green">Consolidar y expandir nuestra empresa en sus distintos servicios, proyectos y potenciar el emprendimiento peruano.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--numbers">
						<h5 class="order-number">03.</h5>
						<h3 class="h5 info-box-title green-mars">¿Qué hacemos?</h3>
						<p class="info-box-text color-text-green">Empresa dedicada diseñar plataformas web, móviles especialmente para impulsar el crecimiento de negocios.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Info Boxes -->


	<!-- Info Boxes -->

	<section class="crumina-module crumina-module-slider .bg-blue-lighteen-about-us medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-12 col-sm-offset-0">
					<div class="crumina-module crumina-heading align-center">
						<h2 class="heading-title h2-aboutUs color-text-green">Nuestra Historia <span class="c-primary">GreenMars Company</span></h2>
					</div>
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12">
					<div class="swiper-container pagination-bottom" data-show-items="4">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="crumina-module crumina-info-box info-box--time-line">

									<div class="info-box-image bg-primary-color">
										<img class="utouch-icon" src="svg/flag.svg" alt="flag">
										<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
											<use xlink:href="#utouch-icon-dot-arrow"></use>
										</svg>
									</div>

									<div class="info-box-content">
										<h6 class="timeline-year c-primary">2013</h6>
										<a href="#" class="h6 info-box-title green-mars">Claritas est processus</a>
										<p class="info-box-text color-text-green">Wisi enim ad minim veniam, quis nostrud exerci tation
											qui nunc nobis videntur parum clari.
										</p>
									</div>

								</div>
							</div>

							<div class="swiper-slide">
								<div class="crumina-module crumina-info-box info-box--time-line">

									<div class="info-box-image bg-orange">
										<img class="utouch-icon" src="svg/settings.svg" alt="settings">
										<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
											<use xlink:href="#utouch-icon-dot-arrow"></use>
										</svg>
									</div>

									<div class="info-box-content">
										<h6 class="timeline-year c-primary">2015</h6>
										<a href="#" class="h6 info-box-title green-mars">Typi non claritatem</a>
										<p class="info-box-text color-text-green">Mirum est notare quam littera gothica, quam nunc putamus
											parum claram, anteposuerit lectores legere me lius quod ii legunt.
										</p>
									</div>

								</div>
							</div>

							<div class="swiper-slide">
								<div class="crumina-module crumina-info-box info-box--time-line">

									<div class="info-box-image bg-red">
										<img class="utouch-icon" src="svg/team.svg" alt="team">
										<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
											<use xlink:href="#utouch-icon-dot-arrow"></use>
										</svg>
									</div>

									<div class="info-box-content">
										<h6 class="timeline-year c-primary">2016</h6>
										<a href="#" class="h6 info-box-title green-mars">Eodem modo typi</a>
										<p class="info-box-text color-text-green">Investigationes demonstraverunt lectores legere me lius quod.
										</p>
									</div>

								</div>
							</div>

							<div class="swiper-slide">
								<div class="crumina-module crumina-info-box info-box--time-line">

									<div class="info-box-image bg-green">
										<img class="utouch-icon" src="svg/rocket-launch.svg" alt="rocket">
										<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
											<use xlink:href="#utouch-icon-dot-arrow"></use>
										</svg>
									</div>

									<div class="info-box-content">
										<h6 class="timeline-year c-primary">2017</h6>
										<a href="#" class="h6 info-box-title green-mars">Duis autem vel eum</a>
										<p class="info-box-text color-text-green">Ut wisi enim ad minim veniam, quis nostrud exerci tation
											ullamcorper suscipit lobortis nisl ut aliquip.
										</p>
									</div>

								</div>
							</div>
						</div>

						<!--Prev next buttons-->

						<div class="btn-slider-wrap navigation-center-bottom">

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

	<!-- ... end Info Boxes -->

	<!-- Case Item -->

	<section class="crumina-module crumina-module-slider medium-padding100">
		<div class="container">
			<div class="row">
				<div class="crumina-module crumina-module-img-bottom">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-heading">
							<h6 class="heading-sup-title green-mars">Nuestros proyectos</h6>
							<h2 class="heading-title color-text-green">Conoce más acerca de nuestro proyectos</h2>
							<div class="heading-text color-text-green">
								Explora nuestras aplicaciones y y aprovecha sus grandes beneficios
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-lg-offset-3 col-md-12 col-sm-12 col-sm-offset-0">
						<a href="{{url('/ourApps')}}l" class="btn btn-border btn--with-shadow c-primary mb30">
							Proyectos
						</a>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="swiper-container pagination-bottom" data-show-items="2">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="crumina-module crumina-case-item" data-mh="case-item">
									<a href="img/case1.jpg" class="case-item__thumb js-zoom-image">
										<img src="img/case1.jpg" alt="case">
									</a>

									<div class="square-colored bg-product-blue"></div>
									<div class="case-item-content">
										<h5 class="title">Investigationes demonstraverunt lectores legere me legunt saepius</h5>
										<a href="#" class="more-arrow white">
											<span>View Case</span>
											<div class="btn-next">
												<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
													<use xlink:href="#utouch-icon-arrow-right-1"></use>
												</svg>
												<svg class="utouch-icon utouch-icon-arrow-right1">
													<use xlink:href="#utouch-icon-arrow-right1"></use>
												</svg>
											</div>
										</a>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="crumina-module crumina-case-item" data-mh="case-item">
									<a href="img/case2.jpg" class="case-item__thumb js-zoom-image">
										<img src="img/case2.jpg" alt="case">
									</a>

									<div class="square-colored bg-product-violet"></div>
									<div class="case-item-content">
										<h5 class="title">Mirum est notare quam littera gothica, quam nunc putamus parum</h5>
										<a href="#" class="more-arrow white">
											<span>View Case</span>
											<div class="btn-next">
												<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
													<use xlink:href="#utouch-icon-arrow-right-1"></use>
												</svg>
												<svg class="utouch-icon utouch-icon-arrow-right1">
													<use xlink:href="#utouch-icon-arrow-right1"></use>
												</svg>
											</div>
										</a>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="crumina-module crumina-case-item" data-mh="case-item">
									<a href="img/case1.jpg" class="case-item__thumb js-zoom-image">
										<img src="img/case1.jpg" alt="case">
									</a>

									<div class="square-colored bg-product-blue"></div>
									<div class="case-item-content">
										<h5 class="title">Investigationes demonstraverunt lectores legere me legunt saepius</h5>
										<a href="#" class="more-arrow white">
											<span>View Case</span>
											<div class="btn-next">
												<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
													<use xlink:href="#utouch-icon-arrow-right-1"></use>
												</svg>
												<svg class="utouch-icon utouch-icon-arrow-right1">
													<use xlink:href="#utouch-icon-arrow-right1"></use>
												</svg>
											</div>
										</a>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="crumina-module crumina-case-item" data-mh="case-item">
									<a href="img/case2.jpg" class="case-item__thumb js-zoom-image">
										<img src="img/case2.jpg" alt="case">
									</a>

									<div class="square-colored bg-product-violet"></div>
									<div class="case-item-content">
										<h5 class="title">Mirum est notare quam littera gothica, quam nunc putamus parum</h5>
										<a href="#" class="more-arrow white">
											<span>View Case</span>
											<div class="btn-next">
												<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
													<use xlink:href="#utouch-icon-arrow-right-1"></use>
												</svg>
												<svg class="utouch-icon utouch-icon-arrow-right1">
													<use xlink:href="#utouch-icon-arrow-right1"></use>
												</svg>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- If we need pagination -->
						<div class="swiper-pagination bottom-left"></div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ... end Case Items -->


	<!-- Testimonial Slider -->

	

	<!-- ... end Testimonial Slider -->


	<!-- Teammembers -->

	<section class="medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading align-center">
						<h2 class="heading-title green-mars">Conoce a nuestro equipo de profesionales</h2>
						<div class="heading-text color-text-green">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per.</div>
					</div>
				</div>

				<div class="teammembers-wrap">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-teammembers-item">

							<div class="teammembers-thumb">
								<img src="img/teammember1.png" alt="team member">
							</div>

							<div class="teammember-content">

								<div class="teammembers-item-prof-own">Manager</div>

								<a href="#" class="h5 teammembers-item-name green-mars">Yhomira Alexandra</a>

								<p class="color-text-green">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt est etiam.</p>

								<ul class="socials socials--round">
									<li>
										<a href="" class="social__item facebook">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path>
											</svg>
										</a>
									</li>

									<li>
										<a href="" class="social__item twitter">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path>
											</svg>
										</a>
									</li>

									<li>
										<a href="" class="social__item googlePlus">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path>
											</svg>
										</a>
									</li>
								</ul>


							</div>
						</div>

						<div class="crumina-module crumina-teammembers-item">

							<div class="teammembers-thumb">
								<img src="img/teammember2.png" alt="team member">
							</div>

							<div class="teammember-content">

								<div class="teammembers-item-prof-own">Web Developer</div>

								<a href="#" class="h5 teammembers-item-name green-mars">Britney Simpson</a>

								<p class="color-text-green">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>

								<ul class="socials socials--round">
									<li>
										<a href="" class="social__item facebook">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path>
											</svg>
										</a>
									</li>

									<li>
										<a href="" class="social__item twitter">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path>
											</svg>
										</a>
									</li>

									<li>
										<a href="" class="social__item googlePlus">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path>
											</svg>
										</a>
									</li>
								</ul>


							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-teammembers-item">

							<div class="teammembers-thumb">
								<img src="img/teammember3.png" alt="team member">
							</div>

							<div class="teammember-content">

								<div class="teammembers-item-prof-own">JS Developer</div>

								<a href="#" class="h5 teammembers-item-name green-mars">Christian Bush</a>

								<p class="color-text-green">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>

								<ul class="socials socials--round">
									<li>
										<a href="" class="social__item facebook">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path>
											</svg>
										</a>
									</li>

									<li>
										<a href="" class="social__item twitter">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path>
											</svg>
										</a>
									</li>

									<li>
										<a href="" class="social__item googlePlus">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path>
											</svg>
										</a>
									</li>
								</ul>

							</div>
						</div>

						<div class="crumina-module crumina-teammembers-item">

							<div class="teammembers-thumb">
								<img src="img/teammember4.png" alt="team member">
							</div>

							<div class="teammember-content">

								<div class="teammembers-item-prof-own">Copyrighter</div>

								<a href="#" class="h5 teammembers-item-name green-mars">Jane Nguyen</a>

								<p class="color-text-green">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt est etiam.</p>

								<ul class="socials socials--round">
									<li>
										<a href="" class="social__item facebook">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path>
											</svg>
										</a>
									</li>

									<li>
										<a href="" class="social__item twitter">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path>
											</svg>
										</a>
									</li>

									<li>
										<a href="" class="social__item googlePlus">
											<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
												<path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path>
											</svg>
										</a>
									</li>
								</ul>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ... end Teammembers -->
</div>

@endsection