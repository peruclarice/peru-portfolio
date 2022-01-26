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
			<section id="page-header" class="ph-sm">

				<!-- Begin page header image 
				============================= 
				* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
				<div class="page-header-image hide-ph-image parallax-4 bg-image" style="background-image: url(assets/img/page-header/page-header-bg-1.jpg);">
					
					<!-- Element cover 
					===================
					* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
					* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
					* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
					-->
					<div class="cover cover-opacity-4"></div>
					
				</div>
				<!-- End page header image -->

				<!-- Begin page header inner -->
				<div class="page-header-inner tt-wrap" style="padding: 100px 20px 80px 20px;">

					<!-- Begin page header caption 
					===============================
					* Use classes "ph-cap-xs", "ph-cap-sm", "ph-cap-lg" or "ph-cap-xlg" to set caption size.
					* Use classes "ph-cap-light" to enable caption light color style (useful if you use dark background images).
					* Use classes "ph-cap-shadow" to enable caption text shadow.
					* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
					* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
					-->
					<div class="row flx-c cta-column-reverse">
						<div class="col-md-6">
							<div class="page-header-caption ph-cap-sm ph-cap-shadow mb-3 parallax-5 fade-out-scroll-4">
								<div>
									<div class="ph-subtitle-wrap">
										<h2 class="page-header-subtitle">Creating a Learning Management System</h2>
									</div>
									<div class="ph-title-wrap">
										<h3 class="page-header-title">Connect, Collaborate & Learn</h3>
									</div>
									<!-- <div class="ph-subtitle-wrap">
										<h2 class="page-header-subtitle">This Is My Awesome Work</h2>
									</div> -->
			
									<!-- Begin zig-zag separator 
									============================= 
									* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
									* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
									-->
									<div class="zig-zag-separator zig-zag-sm">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
									<!-- End zig-zag separator -->
			
									<!-- Begin page header description (recommended max 170 characters!) 
									=================================== -->
									<div class="page-header-description">
										<div class="ph-desc-inner">
											Qxp maximizes productivity through reliable tools -tailor-made for meeting and learning,anytime, anywhere, Across any device.
										</div>
									</div> 
								</div>
								
							</div>
						</div>
						<div class="col-md-6 center">
							<div class="m-auto mb-3 parallax-5 fade-out-scroll-4" style="max-width: 650px; width: 100%;">
								<img src="{{asset('assets/img/portfolio/QXP/Artboard – 2.png')}}" alt="">
							</div>
						</div>
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
				<div class="ph-anim-element-wrap parallax-4" style="z-index: -3;">
					<div class="ph-anim-element-holder">
						<div class="ph-anim-element ph-anim-element-blue"></div>
					</div>
				</div>
				<!-- End page header animated element -->

			</section>
			<!-- End page header -->
            
<section class="container">
    <div class="py-5 mt-5 mb-4">
		<h3>Overview:</h3>
		<div class="zig-zag-separator zig-zag-xs">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
        <div class="row flx-c">
            <div class="col-md-7 col-sm-12">
				<p>Online Learning Management Systems could not have come at a better time than this. The technology scene has evolved, and with that, has allowed room for new businesses be it online shopping to digital banking.</p>
				<p>The educational scene has been impacted greatly with this, allowing you as a person to be able to receive an education as young as primary to the highest level of schooling and all of it or a vast majorty of it being carried on online.</p>

            </div>
            <div class="col-md-5 col-sm-12">
                <ul style="list-style: none; padding: 0;">
                    <li><h6><b>Client:</b><span class="text-primary mx-2" style="font-weight: 200"> QXP LTD</span></h6></li>
                    <li><h6><b>Industry: </b><span class="text-primary mx-2" style="font-weight: 200"> Education Industry</span></h6></li>
                    <li><h6><b>Role:</b><span class="text-primary mx-2" style="font-weight: 200"> UI/UX and Frontend Web Development</span></h6></li>
                    <li><h6><b>Project Timeline: </b><span class="text-primary mx-2" style="font-weight: 200">14 months - Present</span></h6></li>
					<li><h6><b>Website Link: </b><span class="text-primary mx-2" style="font-weight: 200"> <a href="https://qxp.global/"> https://qxp.global/</a></span></h6></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="py-5 mb-4">
        <h3>Project Introduction</h3>
		<p>With the age of technology, schooling has become more and more impersonal, it is no longer necesarry for students to be cramped up inside a building in order to receive an education. Now it is possible to learn in an online space. Even with the rise of the 2019 Covid Pandemic, when physical schools were shutdown, it enabled the rise of the online schooling method.</p>
		<p>This is where this Online Learning Management System comes in. By creating education all served online, users both young and old can receive a valid education. As well as proper training for certain job requirements.</p>
    </div>
    <div class="py-5 mb-4">
        <h3>Our Problem</h3>
		<p>The biggest problem that was to be challenged was during the 2019 Covid pandemic, where the world basically shutdown, ending schooling for a vast majorty of students. Some of which could not afford coming back (this pertains to rural areas in Africa). Once the Kenyan Governement, added technology into their school curriculim and changed its system from the 8-4-4 system into its new CBC system. The rise of online learning couldn;t have been stressed enough.</p>
    </div>
    <div class="project-scope py-5 mb-4">
        <h3>Project Scope</h3>
        <div>
            <div class="row">
				<div class="col-md-4 text-center">
					<div class="mx-auto mb-4 p-4" style="width: 130px; height: 130px;">
						{{-- <div> Icons made by <a href="https://www.flaticon.com/authors/prosymbols" title="Prosymbols"> Prosymbols </a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com'</a></div> --}}
						<img src="{{asset('assets/img/search.png')}}" alt="" style="width: 100%;">
					</div>
					<div class="mb-3">
						<h5>UX Research</h5>
					<ul style="list-style: none; padding: 0;">
						<li><h6>User Questionaires </h6></li>
						<li><h6>Tally User Data</h6></li>
						<li><h6>Conceptual Design</h6></li>
					</ul>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="mx-auto mb-4 p-4" style="width: 130px; height: 130px;">
						<img src="{{asset('assets/img/web-design.png')}}" alt="" style="width: 100%;">
					</div>
					<div class="mb-3">
						<h5>UI/UX Designing</h5>
						<ul style="list-style: none; padding: 0;">
							<li><h6>Create Persona</h6></li>
							<li><h6>Low Fidelity Mockups (Sketches/Wireframes)</h6></li>
							<li><h6>High Fidelity Mockups (Prototyping)</h6></li>
							{{-- <li><h6>User Test on Prototype</h6></li> --}}
						</ul>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="mx-auto mb-4 p-4" style="width: 130px; height: 130px;">
						<img src="{{asset('assets/img/coding.png')}}" alt="" style="width: 100%;">
					</div>
					<div class="mb-3">
						<h5>Development and Testing</h5>
						<ul style="list-style: none; padding: 0;">
							<li><h6>Web Development</h6></li>
							<li><h6>User Testing</h6></li>
							<li><h6>A/B Testing</h6></li>
						</ul>
					</div>
				</div>
			</div>
        </div>
    </div>
    <div class="py-5 mb-4">
        <h3>Persona</h3>
		<h6>Creating a persona was viatle in the design and development stage. By having a specific audience in mind, it helped me as a developer to create a system tht would cater to the vast majority of possible users.</h6>
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
    <div class="py-5 mb-4">
        <h3>MVP (Minimal Viable Product)</h3>
		<h6>Several Versions were created before finally settling on the most preffered option using A/B testing skills. <br>
			The following images represent the MVP used to present to clients.
		</h6>
        <button class="btn btn-primary">Download MVP PDF <i class="fas fa-download ml-2" style="margin-left: .5rem;"></i></button>
        <div>
            <div class="persona" style="background-size: contain; min-height: 100vh;"></div>
            {{-- <img src="{{asset('assets/img/portfolio/single/single-1/portfolio-single-3.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;"> --}}
            
        </div>
    </div>
    <div class="py-5 mb-4">
        <h3>Wireframing & Prototyping</h3>
		<p>The following screens show my process as a UI/UX Designer in creating the system, from hand drawn sketches to Low Fidelity Mockups (wireframing) to High Fidelity Mockups (prototyping)</p>

    </div>
    <div class="py-5 mb-4">
        <h3>Style Guide</h3>
        <h6>The following is the guide I used to develop this particular system.</h6>
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
                    <div class="text-center py-3 mb-2">
                        <h3>All Screens</h3>
                        <p>These are the final screens that were used by the client.</p>
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

							<a href="/case-study-qxp" class="ps-nav ps-nav-left">
								<div class="ps-nav-image p-3" style="background: transparent;">
									<img src="{{asset('assets/img/clients/qxp-favicon.png')}}" alt="">
									{{-- <div class=" bg-image" style="background-image: url(assets/img/clients/qxp-favicon.png);"></div> --}}
								</div>
								
								<div class="ps-nav-info">
									<div class="ps-nav-subtitle">
										<span class="ps-nav-icon"><span class="lnr lnr-arrow-left"></span></span> Previous<span class="hide-from-sm"> Project</span>
									</div>
									<h3 class="ps-nav-title">QXP LMS</h3>
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

							<a href="/case-study-vertexpay" class="ps-nav ps-nav-right">
								<div class="ps-nav-image p-3" style="background: transparent;">
									<img src="{{asset('assets/img/clients/vpay-favicon.png')}}" alt="">
								</div>
								{{-- <div class="ps-nav-image bg-image" style="background-image: url(assets/img/portfolio/list/list-1/portfolio-list-8.jpg);"></div> --}}
								<div class="ps-nav-info">
									<div class="ps-nav-subtitle">
										Next<span class="hide-from-sm"> Project</span> <span class="ps-nav-icon"><span class="lnr lnr-arrow-right"></span></span>
									</div>
									<h3 class="ps-nav-title">Vertex Pay</h3>
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