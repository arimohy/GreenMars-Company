<header class="header header--small-lines header--blue-lighteen" id="site-header">

	<div class="header-lines-decoration">
		<span class="bg-green-color"></span>
		<span class="mayorista-bg"></span>
		<span class="bg-hormiga-color"></span>
		<span class="bg-white-color"></span>
		<span class="bg-hormiga-color"></span>
		<span class="mayorista-bg"></span>
		<span class="bg-green-color"></span>
	</div>

	<div class="container">

		<a href="#" id="top-bar-js" class="top-bar-link">
			<svg class="utouch-icon utouch-icon-arrow-top">
				<use xlink:href="#utouch-icon-arrow-top"></use>
			</svg>
		</a>
		<div class="header-content-wrapper">

			<div class="site-logo">
				<a href="{{url('/')}}" class="full-block"></a>
				<img src="img/company/logoGreenMarsC.png" width="50" height="61" alt="GreenMars Company">
				<div class="logo-text">
					<div class="logo-title">GreenMars </div>
					<div class="logo-sub-title">Company</div>
				</div>
			</div>

			<nav id="primary-menu" class="primary-menu">

				<!-- menu-icon-wrapper -->

				<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
					<span class="mob-menu--title">Menu</span>
					<span id="menu-icon-wrapper" class="menu-icon-wrapper">
						<svg width="1000px" height="1000px">
							<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
							<path id="pathE" d="M 300 500 L 700 500"></path>
							<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
						</svg>
					</span>
				</a>

				<ul class="primary-menu-menu">
					<li class="menu-item-has-children">
						<a href="/">Inicio</a>
					</li>

					<li class="">
						<a href="#">Compañia</a>
						<ul class="sub-menu">
							<li>
								<a href="{{url('/aboutUs')}}">
									Acerca de nosotros
								</a>
							</li>
							<li class="menu-item-has-children">
								<a href="#">
									Productos
								</a>
								<ul class="sub-menu">
									<li>
										<a href="{{url('/mayorista')}}">Mayorista</a>
									</li>
									<li>
										<a href="{{url('/distribuidor')}}">Mayorista Distribuidor</a>
									</li>

									<li>
										<a href="{{url('/hormiga')}}">Hormiga</a>
									</li>
									<li>
										<a href="{{url('/hormiga')}}">Bienes & Raices RADO</a>
									</li>				
								</ul>
							</li>
							
							<li>
								<a href="">Trabaja con Nosotros</a>
							</li>
							<li>
								<a href="{{url('/testimonials')}}">
									testimonios
								</a>
							</li>
						</ul>
					</li>

					<li class="menu-item-has-mega-menu menu-item-has-children">
						<a href="#">Productos</a>
						<div class="megamenu with-products">
							<div class="megamenu-row">

								<div class="col4" data-mh="product-item">
									<div class="product-item">
										<div class="product-item-thumb">
											<div class=" bg-product-blue"></div>
											<img src="img/company/mayorista.png"   style="border-radius: 10px;" alt="product">
										</div>
										<div class="product-item-content">
											<h6 class="title">Mayorits cliente. la APP mas segura, rapida y eficiente</h6>
											<a href="{{ url('/mayorista')}}" class="more-arrow">
												<span>Ver mas</span>
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

								<div class="col4" data-mh="product-item">
									<div class="product-item">
										<div class="product-item-thumb">
											<div class=" bg-product-white-own"></div>
											<img src="img/company/mayoristaDistribuidor.png" style="border-radius: 10px;"  alt="product">
										</div>
										<div class="product-item-content">
											<h6 class="title">Mayorita Distribuidor. incrementa tus ventas</h6>
											<a href="{{url('/distribuidor')}}" class="more-arrow">
												<span>Ver mas</span>
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

								<div class="col4" data-mh="product-item">
									<div class="product-item">
										<div class="product-item-thumb">
											<div class=" bg-product-red-own"></div>
											<img src="img/company/Ormiga.png" style="border-radius: 10px;" alt="product">
										</div>
										<div class="product-item-content">
											<h6 class="title">Hormiga. todos los productos </h6>
											<a href="{{url('/hormiga')}}" class="more-arrow">
												<span>Ver mas</span>
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

							

								<div class="col4" data-mh="product-item">
									<div class="product-item">
										<div class="product-item-thumb">
											<div class=" bg-product-white-own"></div>
											<img src="img/company/logoRado.png"  style="border-radius: 10px;" alt="product">
										</div>
										<div class="product-item-content">
											<h6 class="title">Bienes y raices Rado</h6>
											<a href="{{url('/ormiga')}}" class="more-arrow">
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
						</div>
					</li>


					<li class="">
						<a href="{{url('/contact')}}">Contacto</a>
					</li>
				</ul>
				<ul class="nav-add">
					<li class="search search_main">
						<a href="#" class="js-open-search-popup">
							<svg class="utouch-icon utouch-icon-search cd-nav-trigger">
								<use xlink:href="#utouch-icon-search"></use>
							</svg>
						</a>
					</li>
				</ul>
				<div class="search-standard">
					<form id="search-header" name="form-search-header" method="post">
						<div class="typeahead__container">
							<div class="typeahead__field">

							<span class="typeahead__query">
								<input class="js-typeahead" name="utouch_posts[query]" placeholder="What are you looking for?" autocomplete="off" type="search" autofocus>
							</span>
								<button type="submit" class="form-icon">
									<svg class="utouch-icon utouch-icon-search">
										<use xlink:href="#utouch-icon-search"></use>
									</svg>
								</button>
								<span class="close js-popup-clear-input form-icon">
								<svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
							</span>

							</div>
						</div>
					</form>
				</div>
			</nav>

		</div>

	</div>

</header>