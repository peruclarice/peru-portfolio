<!-- =================
		//// Begin header //// 
		======================
		* Use class "header-show-hide-on-scroll" to hide header on scroll down and show on scroll up.
		* Use class "header-fixed-top" to set header to fixed position.
		* Use class "header-transparent" to set header to transparent.
		* Use class "header-transparent-dark" to enable transparent dark header (use it for light background). Note: class "header-transparent" is required!
		-->
		<header id="header" class="header-show-hide-on-scroll header-transparent">

			<!-- Begin header inner -->
			<div class="header-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->
				<!-- Begin logo 
				================ -->
				<div id="logo">
					<!-- logo images for big screens -->
					<a href="/" class="logo-dark">
						<!-- <img src="assets/img/logo.svg" alt="logo"> -->
						<img src="assets/img/logo/logo_dark.svg" alt="">
					</a>
					<a href="/" class="logo-light">
						<img src="assets/img/logo/logo_white.svg" alt="logo">
						<!-- <img src="assets/img/peru_logo.svg" alt="logo"> -->
					</a>

					<!-- logo images for smaller screens -->
					<a href="/" class="logo-dark-m"><img src="assets/img/logo/logo_dark.svg" alt="logo"></a>
					<a href="/" class="logo-light-m"><img src="assets/img/logo/logo_white.svg" alt="logo"></a>
				</div>
				<!-- End logo -->

				<!-- Begin header attributes (add/remove class "hide" to enable/disable header attributes without removing the code).
				============================= -->
				{{-- <a href="#">
					<h6 class="m-0"><i class="fas fa-envelope mr-3"></i>claricekibii@gmail.com</h6>
				</a> --}}
				<div class="header-attributes">
					<ul>

						<!-- Begin overlay menu trigger -->
						<li>
							<div id="tt-ol-menu-trigger">
								<div class="mt-inner">
									<div class="tt-ol-menu-str">
										<span class="str-1"></span>
										<span class="str-2"></span>
										<span class="str-3"></span>
									</div>
								</div>
								<!-- <div class="tt-ol-menu-text">Menu</div> -->
							</div>
						</li>
						<!-- End overlay menu trigger -->

						<!-- Begin header attributes button (disabled on smaller screens!) -->
						<!-- <li class="hide-from-md">
							<a href="https://themeforest.net/item/aivo-multipurpose-portfolio-html-website-template/21587861?ref=Themetorium" class="h-attr-button" target="_blank">Buy<span class="hide-from-lg"> This Theme</span>!</a>
						</li> -->
						<!-- End header attributes button -->
					</ul>
				</div>
				<!-- End header attributes -->

				<!-- =========================
				///// Begin overlay menu /////
				==============================
				* Use class "slide-left", "slide-left-half", "slide-right", "slide-right-half", "slide-top", "slide-bottom" or "zoom-in" to change menu effect.
				* Use class "tt-ol-menu-light" to enable menu light style.
				-->
				<nav id="tt-overlay-menu" class="tt-ol-menu slide-left-half">

					<!-- Begin overlay menu inner -->
					<div id="tt-ol-menu-inner">

						<!-- Begin overlay menu content -->
						<div id="tt-ol-menu-content">

							<!-- Begin menu nav -->
							<div class="tt-ol-menu-nav">
								<ul class="tt-ol-menu-list">
									<li class="menu-item active"><a href="/">Home</a></li>
									<li class="menu-item"><a href="{{Route('about-me')}}">About Me</a></li>
									{{-- <li><a href="services.html">Services</a></li> --}}
									{{-- <li><a href="portfolio-grid-1.html">Case Study</a></li> --}}
									<li class="menu-item has-children">
										<a href="#0">Case Studies...</a> 
										<ul class="tt-ol-sub-menu">
											<li><a href="{{route('case-study.plan-your-meds')}}">Health Tech Mobile App</a></li>
											<li><a href="{{route('case-study.nolla-bank')}}">Digital Banking Mobile App</a></li>
											<li><a href="{{route('case-study.qxp')}}">Learning Managment System Web App</a></li>
											<li><a href="{{route('case-study.vertex-pay')}}">Digital Banking Web App</a></li>
											{{-- <li><a href="#">E-commerce Store</a></li>
											<li><a href="#">Digital Branding Agency</a></li> --}}
										</ul>
									</li>
									{{-- <li><a href="blog-list-classic.html">Blog</a></li> --}}
									<li class="menu-item"><a href="mailto:claricekibii@gmail.com">Contact Me</a></li>
								</ul>
							</div>
							<!-- End menu nav -->

						</div>
						<!-- End overlay menu content -->

						<!-- Begin overlay menu footer -->
						<div class="tt-ol-menu-footer">
							<div class="row">
								<div class="col-left col-sm-6">
									
									<!-- Begin social buttons -->
									<div class="social-buttons">
										<ul>
											<li><a href="https://www.linkedin.com/in/clarice-jeberur-283054169/" class="btn btn-white btn-link" target="_blank" title="Follow me on Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
											{{-- <li><a href="https://www.facebook.com/clarice.peru" class="btn btn-white btn-link" target="_blank" title="Follow me on Facebook"><i class="fab fa-facebook-f"></i></a></li> --}}
											<li><a href="https://www.instagram.com/clariceperu.designs/" class="btn btn-white btn-link" target="_blank" title="Follow me on Instagram @clariceperu.designs"><i class="fab fa-instagram"></i></a></li>
											<li><a href="https://dribbble.com/peru_clarice" class="btn btn-white btn-link" target="_blank" title="Follow us on Dribbble"><i class="fab fa-dribbble"></i></a></li>
											{{-- <li><a href="#" class="btn btn-white btn-link" target="_blank" title="Follow us on Behance"><i class="fab fa-behance"></i></a></li> --}}
											
											<li><a href="https://youtu.be/RefiyCcj9cI" class="btn btn-white btn-link" target="_blank" title="Follow us on Youtube"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
									<!-- End social buttons -->
									
								</div> <!-- /.col -->

								<div class="col-right col-sm-6">
									<div class="tt-ol-menu-copyright">
										© All rights reserved
									</div>
								</div> <!-- /.col -->
							</div> <!-- /.row -->
						</div>

					</div>

					<!-- Begin overlay menu close button -->
					<div class="tt-ol-menu-close">
						<i class="tt-close-btn tt-close-light"></i> <span>Close</span>
					</div>
					<!-- End overlay menu close button -->

				</nav>
				<!-- End overlay menu -->

			</div>
			<!-- End header inner -->

		</header>
		<!-- End header -->