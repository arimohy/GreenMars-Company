@extends('layout')

@section('content')

<div class="content-wrapper">
	<div class="header-spacer header-spacer--small"></div>


	<!-- Skew-row -->

	<section class="section-bg-skew bg-19 bg-blue-mayorista pt180 not-top-element">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading custom-color mayorista">
						<h6 class="heading-sup-title mayorista">Mayorista</h6>
						<h2 class="h1 heading-title">Mayorista Cliente</h2>
						<div class="heading-text">Mayorista es una aplicación móvil que ayuda a las personas a encontrar productos de primera necesidad al por mayor de manera rápida lo que permite ahorrar tiempo y dinero.
							<br>
						Descarga nuestra apps desde
						</div>
					</div>
					<a href="#"   class="btn btn-market btn--with-shadow">
						<svg class="utouch-icon utouch-icon-apple-logotype-1"><use xlink:href="#utouch-icon-apple-logotype-1"></use></svg>
						<div class="text">
							<span class="sup-title">Descarga desde</span>
							<span class="title">App Store</span>
						</div>
					</a>

					<a href="#"   class="btn btn-market btn--with-shadow">
						<img class="utouch-icon" src="svg-icons/google-play.svg" alt="google">
						<div class="text">
							<span class="sup-title">Descarga desde</span>
							<span class="title">Google Play</span>
						</div>
					</a>
				</div>
				<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12 negative-margin-bottom80">
					<img src="img/screen1.png" alt="image">
				</div>
			</div>
		</div>
		<br><br>
	</section>

	<!-- ... end Skew-row -->


	<!-- Skew-row -->

	<section class="medium-padding120" style="background: #2979ff;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h5 class="heading-title c-white">Productos de acceso rápido</h5>
						<div class="heading-text c-white">Puedes tener acceso a todos los productos desde tu móvil.</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h5 class="heading-title c-white">Precios económicos</h5>
						<div class="heading-text c-white">Los productos son vendidos al por mayor por lo que ahorras dinero.</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h5 class="heading-title c-white">Ahorra tiempo!</h5>
						<div class="heading-text c-white">La aplicación busca los proveedores más cercanos a tí.</div>
					</div>
				</div>
				<div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h5 class="heading-title c-white">Diversas Formas de pago</h5>
						<div class="heading-text c-white">Puedes pagar tu pedido ya sea al contado o de manera digital.</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Skew-row -->


	<!-- Skew-row with sliders -->

	<section class="section-bg-skew bg-11c bg-blue-mayorista pt180 align-center">
		<div class="container">
			<div class="row">

				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 mb60">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title">Nuestros Video Tutoriales de mayorista</h6>
						<h2 class="heading-title">Mira nuestros videos y descubre las potencialidades de nuestra Apps</h2>
						<div class="h6 heading-text">Investigationes demonstraverunt lectores legere me lius quod ii legunt
							saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
							Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
							formas humanitatis per seacula quarta decima.
						</div>
					</div>
				</div>
				<div class="crumina-module crumina-module-slider slider-3-items">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="swiper-container pagination-bottom" data-show-items="2" data-effect="coverflow" data-centered-slider="true" data-nospace="true" data-stretch="40" data-depth="210">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="crumina-module crumina-our-video">
										<div class="video-thumb with-border-r">
											<img src="img/video-thumb3-1.jpg" alt="video">
											<a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
												<img src="img/play-m.png" alt="play">
											</a>
											<div class="overlay"></div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="crumina-module crumina-our-video">
										<div class="video-thumb with-border-r">
											<img src="img/video-thumb3-2.jpg" alt="video">
											<a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
												<img src="img/play-m.png" alt="play">
											</a>
											<div class="overlay"></div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="crumina-module crumina-our-video">
										<div class="video-thumb with-border-r">
											<img src="img/video-thumb3-2.jpg" alt="video">
											<a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
												<img src="img/play-m.png" alt="play">
											</a>
											<div class="overlay"></div>
										</div>
									</div>
								</div>
							</div>

							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<br><br>
				<br>
	</section>

	<!-- ... end Skew-row with sliders -->

	<!-- Skew-row -->

	<section class="pt120" style="background:#ffffff;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 negative-margin-bottom80">
					<div class="crumina-module crumina-double-image">
						<img src="img/image6.png" alt="image">
						<img src="img/image7.png" alt="image">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb80">
					<div class="crumina-module crumina-heading">
						<h3 class="heading-title mayorista">Como funciona mayorista?</h3>
						<div class="heading-text mayorista">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
							lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
							litterarum formas humanitatis per.
						</div>
					</div>
					<ul class="list list--standard mayorista">
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Crea tu cuenta de usuario.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Ingresa a la aplicación.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Escoge tu lugar de entrega en el mapa.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Sigue la fecha para ver los productos.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Escoge tus productos que desees.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Presiona el carrito de compras.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Verifica los productos y escoge el método de pago.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Confirma pedido.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Espera la confirmación del proveedor.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Cuando aceptes veras el precio de tu pedido y el tiempo.</a>
						</li>
						<li>
							<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
							<a href="#">Espera tu pedido llegar.</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<br><br>
	</section>

	<!-- ... end Skew-row -->


	<!-- Skew-row Info Boxes-->

	
	<!-- ... end Skew-row Info Boxes-->


	<!-- Skew-row Screenshots-->

	<section class="medium-padding120 align-center" style="background: #2979ff;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12 mb30">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title white-text-color">Mayorista</h6>
						<h2 class="heading-title white-text-color">Diseños elegantes y muy deductivos</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="crumina-module crumina-module-slider slider--full-width screenshots-slider-style1 navigation-center-both-sides">
			<div class="swiper-container pagination-bottom" data-show-items="5" data-centered-slider="true">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/screen2.png" class="js-zoom-image">
								<img src="img/screen2.png" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/screen2-1.png" class="js-zoom-image">
								<img src="img/screen2-1.png" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/screen2-2.png" class="js-zoom-image">
								<img src="img/screen2-2.png" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/screen2-3.png" class="js-zoom-image">
								<img src="img/screen2-3.png" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/screen2-4.png" class="js-zoom-image">
								<img src="img/screen2-4.png" alt="image">
							</a>
						</div>
					</div>
				</div>

				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>
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

		</div>
	</section>

	<!-- ... end Skew-row Screenshots-->


	<!-- Skew-row Promo Block-->

	<section class="section-bg-skew bg-white bg-12 align-center pt180 pb120 not-bottom-element">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h2 class="heading-title">Descarga <span class="c-primary">Mayorista</span> ahora!</h2>
						<p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
							lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum.
						</p>
					</div>

					<a href="#"   class="btn btn-market btn--with-shadow">
						<svg class="utouch-icon utouch-icon-apple-logotype-1"><use xlink:href="#utouch-icon-apple-logotype-1"></use></svg>
						<div class="text">
							<span class="sup-title">Descarga desde</span>
							<span class="title">App Store</span>
						</div>
					</a>

					<a href="#"   class="btn btn-market btn--with-shadow">
						<img class="utouch-icon" src="svg-icons/google-play.svg" alt="google">
						<div class="text">
							<span class="sup-title">Descarga desde</span>
							<span class="title">Google Play</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Skew-row Promo Block-->
</div>

@endsection