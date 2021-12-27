@extends('layout.app')
@section('content')

{{-- <section>
    <div class="portfolio-cta-img">
    </div>
</section> --}}

<!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
			<section id="page-header" class="ph-lg">

				<!-- Begin page header image 
				============================= 
				* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
				<div class="page-header-image parallax-6 bg-image" style="background-image: url(assets/img/page-header/page-header-bg-17.jpg);">
					
					<!-- Element cover 
					===================
					* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
					* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
					* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
					-->
					<div class="cover cover-opacity-5"></div>
					
				</div>
				<!-- End page header image -->

				<!-- Begin page header inner -->
				<div class="page-header-inner tt-wrap">

					<!-- Begin page header caption 
					===============================
					* Use classes "ph-cap-xs", "ph-cap-sm", "ph-cap-lg" or "ph-cap-xlg" to set caption size.
					* Use classes "ph-cap-light" to enable caption light color style (useful if you use dark background images).
					* Use classes "ph-cap-shadow" to enable caption text shadow.
					* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
					* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
					-->
					<div class="page-header-caption ph-cap-lg ph-cap-light parallax-5 fade-out-scroll-4">
						<div class="ph-subtitle-wrap">
							<h2 class="page-header-subtitle">Browsing Category:</h2>
						</div>
						<div class="ph-title-wrap">
							<h1 class="page-header-title">Digital</h1>
						</div>

						<!-- Begin zig-zag separator 
						============================= 
						* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
						* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
						-->
						<div class="zig-zag-separator zig-zag-lg">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<!-- End zig-zag separator -->

						<!-- Begin page header description (recommended max 170 characters!) 
						=================================== -->
						<!-- <div class="page-header-description">
							<div class="ph-desc-inner">
								Fusce imperdiet, arcu non tempor aliquam, justo tortor cursus est, sed facilisis eros purus et felis. Sed eros sapien, iaculis eget gravida euismod, dapibus vitae turpis.
							</div>
						</div> -->
						<!-- End page header description -->
						
					</div>
					<!-- End page header caption -->

				</div> 
				<!-- End page header inner -->

				<!-- Begin page header animated element
				========================================
				* Use class "ph-anim-circle" to enable element circle style.
				* Use class "ph-anim-center" or "ph-anim-right" to align animated element.
				* Use class "parallax-1" up to "parallax-6" to enable parallax effect.
				* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scroll.
				* Use class "hide-ph-anim" to disable animated element without removing the code.
				-->
				<div class="ph-anim-element-wrap ph-anim-circle parallax-4 fade-out-scroll-4">
					<div class="ph-anim-element-holder">
						<div class="ph-anim-element"></div>
					</div>
				</div>
				<!-- End page header animated element -->

			</section>
			<!-- End page header -->
<section class="container">
    <div style="margin: 2rem auto;">
        <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, minus! Molestiae, libero.</h2>
        <div class="row flx-c">
            <div class="col-md-7">
                <h4>Overview:</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum soluta voluptatum, quasi quae officia alias ex dolorem expedita rerum minus obcaecati ratione, esse amet.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe dolore cumque in aut dolor, incidunt velit doloribus inventore perferendis optio esse magni qui quo excepturi id sapiente repellat nihil officiis dolorum ea. Autem asperiores eligendi assumenda optio nihil deserunt tempore iure ea, aut architecto nostrum! Unde laudantium culpa ipsa, quos voluptatibus deserunt alias architecto!</p>

            </div>
            <div class="col-md-5">
                <ul style="list-style: none; padding: 0;">
                    <li><h6>Client: <i class="text-muted" style="font-weight: 200; font-style: normal;"> Lorem ipsum dolor sit amet.</i></h6></li>
                    <li><h6>Industry: <i class="text-muted" style="font-weight: 200; font-style: normal;"> Lorem ipsum dolor sit amet.</i></h6></li>
                    <li><h6>Role: <i class="text-muted" style="font-weight: 200; font-style: normal;"> Lorem ipsum dolor sit amet.</i></h6></li>
                    <li><h6>Project Timeline: <i class="text-muted" style="font-weight: 200; font-style: normal;"> 12 months - Present</i></h6></li>
                </ul>
            </div>
        </div>
    </div>
    <div style="padding: 2.5rem 0;">
        <h3>Project Introduction</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero voluptate, itaque magni enim blanditiis odio recusandae quo sapiente fuga ducimus, dolores porro adipisci explicabo quaerat eveniet. Magni blanditiis sit impedit, aspernatur, vel omnis, ducimus facilis a et accusamus iure enim nulla reprehenderit? Sapiente recusandae dignissimos vel debitis quidem eaque illo perferendis. Culpa, doloribus. Iusto a optio rerum nostrum sapiente adipisci cum numquam ipsa? Ad quia temporibus nobis corporis nesciunt sapiente laborum harum.</p>
    </div>
    <div style="padding: 2.5rem 0;">
        <h3>Our Problem</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aut culpa perferendis maiores illum magnam porro labore officiis voluptates aliquam libero, ipsum provident qui.</p>
    </div>
    <div style="padding: 2.5rem 0;">
        <h3>Project Scope</h3>
        <div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div style="width: 150px; height: 150px; margin: 1rem auto 2rem auto;">
                        <img src="{{asset('assets/img/portfolio/single/single-1/portfolio-single-3.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div>
                        <h5>UX Designing</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li><h6>Lorem ipsum dolor sit amet.</h6></li>
                        <li><h6>Lorem ipsum dolor sit amet.</h6></li>
                        <li><h6>Lorem ipsum dolor sit amet.</h6></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div style="width: 150px; height: 150px; margin: 1rem auto 2rem auto;">
                        <img src="{{asset('assets/img/portfolio/single/single-1/portfolio-single-3.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div>
                        <h5>UI Designing</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li><h6>Lorem ipsum dolor sit amet.</h6></li>
                        <li><h6>Lorem ipsum dolor sit amet.</h6></li>
                        <li><h6>Lorem ipsum dolor sit amet.</h6></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div style="width: 150px; height: 150px; margin: 1rem auto 2rem auto;">
                        <img src="{{asset('assets/img/portfolio/single/single-1/portfolio-single-3.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div>
                        <h5>Testing</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li><h6>Lorem ipsum dolor sit amet.</h6></li>
                        <li><h6>Lorem ipsum dolor sit amet.</h6></li>
                        <li><h6>Lorem ipsum dolor sit amet.</h6></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="padding: 2.5rem 0;">
        <h3>Persona</h3>
        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia molestiae reprehenderit laborum dolorum cum, numquam rerum alias. Vitae!</h6>
        <button class="btn btn-primary">Download Persona PDF <i class="fas fa-download ml-2"></i></button>
        <div class="row">
            <div class="col-md-6">
                <div class="persona"></div>
                
            </div>
            <div class="col-md-6">
                <div class="persona"></div>
                {{-- <button class="btn btn-secondary">Download Persona PDF <i class="fas fa-download ml-2"></i></button> --}}
            </div>
        </div>
    </div>
    <div style="padding: 2.5rem 0;">
        <h3>MVP (Minimal Viable Product)</h3>
        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia molestiae reprehenderit laborum dolorum cum, numquam rerum alias. Vitae!</h6>
        <button class="btn btn-primary">Download MVP PDF <i class="fas fa-download ml-2" style="margin-left: .5rem;"></i></button>
        <div>
            <div class="persona" style="background-size: contain; min-height: 100vh;"></div>
            {{-- <img src="{{asset('assets/img/portfolio/single/single-1/portfolio-single-3.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;"> --}}
            
        </div>
    </div>
    <div style="padding: 2.5rem 0;">
        <h3>Wireframing & Prototyping</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium assumenda fugit, dolore dolorem nostrum hic laboriosam voluptatibus sunt rem. Repellendus a mollitia nisi fugit exercitationem reprehenderit sit illo deserunt suscipit? Aliquam inventore nostrum magni quo ratione praesentium totam alias quae molestiae sequi sed, modi soluta nihil assumenda voluptatum beatae fugiat debitis at provident enim!</p>

    </div>
    <div style="padding: 2.5rem 0;">
        <h3>Style Guide</h3>
        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia molestiae reprehenderit laborum dolorum cum, numquam rerum alias. Vitae!</h6>
        <button class="btn btn-primary">Download Style Guide PDF <i class="fas fa-download ml-2" style="margin-left: .5rem;"></i></button>
        <div>
            <div class="persona" style="min-height: 100vh;"></div>
            {{-- <img src="{{asset('assets/img/portfolio/single/single-1/portfolio-single-3.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;"> --}}
            
        </div>
    </div>
    
</section>

<!-- =====================================
			///// Begin portfolio single section /////
			====================================== -->
			<section id="portfolio-single-section">
				<div class="portfolio-single-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->
                    <div class="text-center" style="padding: 2.5rem 0;">
                        <h3>All Screens</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium assumenda fugit, dolore dolorem nostrum hic laboriosam voluptatibus sunt rem. Repellendus a mollitia nisi fugit exercitationem reprehenderit sit illo deserunt suscipit? Aliquam inventore nostrum magni quo ratione praesentium totam alias quae molestiae sequi sed, modi soluta nihil assumenda voluptatum beatae fugiat debitis at provident enim!</p>
                        <div>
                
                        </div>
                    </div>

					<!-- Begin portfolio single gallery 
					==================================== 
					* Use class "psi-zoom" to enable portfolio single image hover zoom effect.
					* Use class "psi-colored" or "psi-multi-colored" to enable portfolio single image colored hover overlay.
					* Use class "psi-dark" to enable portfolio single image dark hover overlay.
					* Use class "psi-white" to enable portfolio single image white hover overlay.
					-->
					<div class="portfolio-single-gallery lightgallery psi-zoom psi-dark">

						<!-- Begin isotope
						===================
						* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
						* Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
						-->
						<div class="isotope col-4 gutter-3">

							<!-- Begin isotope items wrap -->
							<div class="isotope-items-wrap">

								<!-- Grid sizer (do not remove!!!) -->
								<div class="grid-sizer"></div>


								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-1">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-1.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-1.jpg" data-sub-html="Yes, you can use image captions. :)">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-1.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-2">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-5.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-5.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-5.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-1">

									<!-- Begin portfolio single image (Youtube or Vimeo link) -->
									<figure class="portfolio-single-image-holder">
										<a href="https://www.youtube.com/watch?v=xK5HkSpKLVA" class="ps-image-link lg-trigger">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-4.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-2">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-3.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-3.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-3.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-1">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-2.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-2.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-2.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-1">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-6.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-6.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-6.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-2">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-7.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-7.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-7.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-2">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-8.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-8.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-8.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-1">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-9.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-9.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-9.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-1">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-10.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-10.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-10.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-1">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-11.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-11.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-11.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

								<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
								<div class="isotope-item digital iso-height-1">

									<!-- Begin portfolio single image -->
									<figure class="portfolio-single-image-holder">
										<a href="assets/img/portfolio/single/single-2/big/portfolio-single-12.jpg" class="ps-image-link lg-trigger" data-exthumbnail="assets/img/portfolio/single/single-2/thumb/portfolio-single-12.jpg">
											<div class="portfolio-single-image bg-image lazy" data-src="assets/img/portfolio/single/single-2/portfolio-single-12.jpg">
												<div class="ps-image-icon">
													<span class="lnr lnr-eye"></span>
												</div>
											</div>
										</a>
									</figure>
									<!-- End portfolio single image -->

								</div>
								<!-- End isotope item -->

							</div>
							<!-- End isotope items wrap -->


							<!-- Begin tt-pagination 
							========================= 
							* Use class "tt-pagin-center" or "tt-pagin-right" to align pagination 
							* Use class "tt-pagin-rounded" to enable pagination rounded style -->
							<!-- <div class="tt-pagination-wrap">
								<ul class="tt-pagination">
									<li><a href="" title="Go to the first page">First</a></li>
									<li><a href="" title="Go to the previous page">Prev</a></li>
									<li class="active"><a href="#0">1</a></li>
									<li><a href="">2</a></li>
									<li><a href="">3</a></li>
									<li><span>...</span></li>
									<li><a href="">6</a></li>
									<li><a href="">7</a></li>
									<li><a href="">8</a></li>
									<li><a href="" title="Go to the next page">Next</a></li>
									<li><a href="" title="Go to the last page">Last</a></li>
								</ul>

								<div class="tt-pagination-info">
									<span>Showing page 1 of 8</span>
									<span>Portfolios 1-15 of 114</span>
								</div>
							</div> -->
							<!-- End tt-pagination -->


							<!-- Begin isotope pagination (Note: "Load More" button is for design purposes only!)
							============================== -->
							<!-- <div class="iso-load-more-wrap">
								<div class="iso-load-more">
									<button class="iso-load-more-button">Load More</button>
								</div>
							</div> -->
							<!-- End isotope pagination -->

						</div>
						<!-- End isotope -->

					</div>
					<!-- End portfolio single gallery -->

				</div> <!-- /.portfolio-single-inner -->
			</section>
			<!-- End portfolio single section -->

<!-- =========================================
			///// Begin portfolio single nav section /////
			==============================================
			* Use class "ps-nav-thumb" to enable nav thumbnails.
			* Use class "ps-nav-dark" to enable dark nav style.
			* Use class "border-top" to enable nav top border.
			-->
			<section id="portfolio-single-nav-section" class="ps-nav-thumb border-top">
				<div class="portfolio-single-nav-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->
					<div class="row">
						<div class="col-xs-5 ps-nav-col">

							<a href="portfolio-single-11.html" class="ps-nav ps-nav-left">
								<div class="ps-nav-image bg-image" style="background-image: url(assets/img/portfolio/list/list-1/portfolio-list-7.jpg);"></div>
								<div class="ps-nav-info">
									<div class="ps-nav-subtitle">
										<span class="ps-nav-icon"><span class="lnr lnr-arrow-left"></span></span> Previous<span class="hide-from-sm"> Project</span>
									</div>
									<h3 class="ps-nav-title">Marevik Trastis</h3>
								</div> <!-- /.ps-nav-info -->
							</a> <!-- /.ps-nav -->

						</div> <!-- /.col -->

						<div class="col-xs-2 ps-nav-col text-center">

							<div class="ps-nav ps-nav-list">
								<a href="portfolio-grid-1.html" title="Back to portfolio list">
									<span class="ps-nav-icon"><span class="lnr lnr-layers"></span></span>
								</a>
							</div> <!-- /.ps-nav -->

						</div> <!-- /.col -->

						<div class="col-xs-5 ps-nav-col text-right">

							<a href="portfolio-single-grid-no-crop.html" class="ps-nav ps-nav-right">
								<div class="ps-nav-image bg-image" style="background-image: url(assets/img/portfolio/list/list-1/portfolio-list-8.jpg);"></div>
								<div class="ps-nav-info">
									<div class="ps-nav-subtitle">
										Next<span class="hide-from-sm"> Project</span> <span class="ps-nav-icon"><span class="lnr lnr-arrow-right"></span></span>
									</div>
									<h3 class="ps-nav-title">Kampur &amp; Brena</h3>
								</div> <!-- /.ps-nav-info -->
							</a> <!-- /.ps-nav -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.portfolio-single-nav-inner -->
			</section>
			<!-- End portfolio single nav section -->


			<!-- =========================
			///// Begin sticky share /////
			==============================
			* Use class "ss-right" to enable right align.
			-->
			<div class="sticky-share ss-right">
				<div class="sticky-share-button">
					<span class="ss-icon"><i class="fas fa-share-alt"></i></span>
					<span class="ss-close"><i class="fas fa-times"></i></span>
				</div> <!-- /.sticky-share-button -->
				<div class="sticky-share-inner">
					<ul class="sticky-share-list">
						<li><span class="sticky-share-title">Share</span></li>
						<li><a href="" class="btn btn-default btn-social-min btn-facebook btn-sm"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="" class="btn btn-default btn-social-min btn-twitter btn-sm"><i class="fab fa-twitter"></i></a></li>
						<li><a href="" class="btn btn-default btn-social-min btn-pinterest btn-sm"><i class="fab fa-pinterest-p"></i></a></li>
						<li><a href="" class="btn btn-default btn-social-min btn-google btn-sm"><i class="fab fa-google-plus-g"></i></a></li>
					</ul> <!-- /.sticky-share-list -->
				</div> <!-- /.sticky-share-inner -->
			</div>
			<!-- End sticky share -->

@endsection