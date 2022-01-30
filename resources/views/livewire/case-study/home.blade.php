<div>
    {{-- <!-- ==========================
			///// Begin intro section /////
			===============================
			* Use classes "intro-xs", "intro-sm", "intro-lg" "intro-xlg" or "intro-full" to set intro size.
			* Use class "intro-full-m" to set intro size for small screens only.
			--> --}}
			<section id="tt-intro" class="intro-full intro-full-m" style="background-image: url(assets/img/pattern/transparent/pt-transparent-6.png);">
				<div class="tt-intro-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->

					<div class="owl-carousel bg-dark" data-items="1" data-dots="false">

						<!-- Begin carousel item 
						========================= -->
						<div class="cc-item">

							<!-- Begin intro image 
							=======================
							* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
							-->
							<div class="intro-image-wrap parallax-6">
								<div class="intro-image bg-dark bg-image" style="background: #060646;">
									
									<!-- Element cover 
									===================
									* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
									* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
									* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
									-->
									<div class="cover cover-opacity-5"></div>

								</div> <!-- /.intro-image -->
							</div>
							<!-- End intro image wrap -->

							<!-- Begin intro caption 
							=========================
							* Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right". 
							* Size classes: "intro-caption-xs", "intro-caption-sm", "intro-caption-lg", "intro-caption-xlg", "intro-caption-xxlg".
							* Use class "parallax-1" up to "parallax-6" to enable parallax effect (no effect on mobile devices!).
							* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scrolls (no effect on mobile devices!).
							-->
							<div class="intro-caption-wrap caption-animate intro-caption-sm center parallax-4">
								<div class="intro-caption-holder">
									<div class="intro-caption row center flx-c landing-rw">
                                        <div class="col-md-6">
                                            <h1 class="intro-title">Hi,<br> I'm Clarice <span class="peru-cta">@include('svg.logo-white')</span></h1>
                                            <h2 class="intro-subtitle">A UI/UX Web and Frontend Developer</h2>

										<!-- Begin intro description (recommended max 170 characters!) 
										============================= -->
										<div class="intro-description" style="text-shadow: none;">
											Check out my case studies to have an in depth look at my design and development concepts.
										</div>
										{{-- <div class="intro-description" style="text-shadow: none;">
											I am UX developer with a heart for social justice and women empowerment. My 2 years of experience in developing websites for multiple NGOs and Social justice start-ups has offered me a platform I did not know I needed. To progress my UX design skills while attending to my need to speak out for social injustices all over the county. From the need to empower girls in the field of Technology to the re-branding of online businesses in order to increase their users tenfold, my projects have been used to emulate some of these passions. Passions that are near and dear to my heart.
										</div> --}}
										<!-- End intro-description -->
                                        <div class="intro-buttons">
                                            <a href="mailto:claricekibii@gmail.com" class="btn btn-primary margin-top-5 margin-right-10" target="_blank"><i class="fas fa-envelope-open mr-2"></i>Lets Get in Touch</a> 
                                            {{-- <a href="#" ></a> --}}
                                            <button wire:click="index" class="btn btn-white-bordered margin-top-5"><i class="fas fa-file-download mr-2"></i> Download My Resume</button>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="landing-peru-container">
                                                {{-- <img src="{{asset('assets/img/landing.jpeg')}}" alt=""> --}}
                                                <div class="landing-peru-img"></div>
                                            </div>
                                        </div>

									</div> <!-- /.intro-caption -->
									{{-- <div class="text-center scroll-more-container">
										<a href="#">
											<div class="scroll-more">
												<div><p style="margin: 0; font-weight: 600;">Scroll More <br> <i class="fas fa-arrow-down"></i></p></div>
											</div>
										</a>
									</div> --}}
								</div> <!-- /.intro-caption-holder -->
								
							</div>
							<!-- End intro caption wrap -->

						</div>
						<!-- End carousel item -->

					</div>
					<!-- End content carousel -->

				</div> <!-- /.tt-intro-inner -->
				
			</section>
			<!-- End intro section -->

            <!-- ===================================
			///// Begin portfolio list section /////
			==================================== -->
			<section id="portfolio-list-section">

				<!-- Begin tt-heading 
				====================== 
				* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
				* Use class "text-center" or "text-right" to align tt-heading.
				* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
				-->
				<div class="tt-heading tt-heading-lg padding-on">
					<div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->
						
						<div class="row">
							{{-- <div class="col-md-12">
								<h1 class="tt-heading-title" style="max-width: initial;">Latest Projects</h1>
								<div class="tt-heading-subtitle" style="max-width: initial;">Please see my recent work</div>
								<div class="zig-zag-separator">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>
								<h6>The following are my recent highlights of what projects I've been involved, either as in-house developer and out sourced and finally at what capacity</h6>
							</div> --}}
							<div class="col-md-4">
								
								<h1 class="tt-heading-title">Latest Projects</h1>
								<div class="tt-heading-subtitle">Please see our recent work</div>
								
								<!-- Begin zig-zag separator 
								============================= 
								* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
								* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
								-->
								<div class="zig-zag-separator">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>

							</div> 
							<div class="col-md-8">
								<h6>The following are my recent highlights of what projects I've been involved, either as in-house developer and out sourced and finally at what capacity</h6>
								{{-- <p>Nunc euismod ipsum vel metus rhoncus, a accumsan sapien mollis. Donec malesuada lacus rhoncus ipsum dignissim, sed fringilla orci faucibus. Proin non odio dui. Donec ut tristique dolor, at interdum sem. Quisque finibus viverra lectus vitae pulvinar.</p> --}}

                                <form wire:submit.prevent="save">
                                    <input wire:model="photo" type="file" name="" id="">
                                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                                    <button type="submit" class="btn btn-primary">Upload Test File</button>
                                </form>
							</div> 
						</div> 

					</div> <!-- /.tt-heading-inner -->
				</div>
				<!-- End tt-heading -->
                <div class="case-study-container case-study-grid">
                    <div style="padding: 2rem 1rem;">
                        <div class="row flx flx-c">
                            <div class="col-md-6">
                                <div class="case-study-img-1">
                                    <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-1.png')}}" alt=""> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h3>Building a Digital Banking System</h3>
                                    <h6>Creating a digital banking system</h6>
                                    <p>A Fully Integrated Banking System, All At The Palm Of Your Hands. With Just One Click And You Are In.</p>
                                    <a href="/case-study-vertexpay"><button class="btn btn-primary"><i class="fas fa-eye mr-3"></i>Vertex Pay Case Study</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div style="padding: 2rem 1rem;">
                        <div class="row flx flx-c">
                            <div class="col-md-6">
                                <div class="case-study-img-1">
                                    <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-2.png')}}" alt=""> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h3>Creating a Learning Management System</h3>
                                    <h6>Connect, Collaborate & Learn</h6>
                                    <p>Qxp maximizes productivity through reliable tools -tailor-made for meeting and learning,anytime, anywhere, Across any device.</p>
                                    <a href="/case-study-qxp"><button class="btn btn-primary"><i class="fas fa-eye mr-3"></i>QXP Case Study</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div style="padding: 2rem 1rem;">
                        <div class="row flx flx-c">
                            <div class="col-md-6">
                                <div class="case-study-img-1">
                                    <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-3.png')}}" alt=""> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h3>Rebranding a Digital Branding Agency</h3>
                                    <h6>Working on this Case Study</h6>
                                    <p>Rebranding a digital branding agency </p>
                                    <a href="/case-study-birch"><button class="btn btn-primary"><i class="fas fa-eye mr-3"></i>Birch Agency Case Study</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div style="padding: 2rem 1rem;">
                        <div class="row flx flx-c">
                            <div class="col-md-6">
                                <div class="case-study-img-1">
                                    <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-4.png')}}" alt=""> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h3>Designing my own portfolio</h3>
                                    <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea suscipit harum assumenda ex sint consectetur nam nobis quia.</p>
                                    <a href="#"><button class="btn btn-primary">View Case Study</button></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

				<div class="portfolio-list-inner isotope-wrap" style="display: none;"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->
					
					<!-- Begin isotope
					===================
					* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4", "gutter-5" or "gutter-6" to add more space between items.
					* Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
					-->
					<div class="isotope col-4">

						<!-- Begin isotope items wrap 
						==============================
						* Use class "pli-alter-1", "pli-alter-2", "pli-alter-3", "pli-alter-4" or "pli-alter-5" to change portfolio list item style. Note: style "pli-alter-4" is no effect on small screens (for better user experience)!
						* Use class "pli-dark" to enable dark hover overlay (effect only with default hover overlay and "pli-alter-4", "pli-alter-5" classes!).
						* Use class "pli-colored" or "pli-multi-colored" to enable colored hover overlay (effect only with default hover overlay and "pli-alter-4", "pli-alter-5" classes!).
						* Use class "pli-frame" to enable image frames.
						-->
						<div class="isotope-items-wrap pli-colored pli-alter-4">

							<!-- Grid sizer (do not remove!!!) -->
							<div class="grid-sizer"></div>


							<!-- ===================== 
							/// Begin isotope item ///
							========================== 
							* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
							-->
							<div class="isotope-item digital iso-height-1">

								<!-- Begin portfolio list item -->
								<div class="portfolio-list-item">

									<!-- Begin portfolio list item image -->
									<div class="pl-item-image-wrap">

										<!-- Begin portfolio list item image inner -->
										<a href="portfolio-single-1.html" class="pl-item-image-inner">
											<div class="pl-item-image bg-image lazy" style="padding: 2rem 3rem;">
                                            <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-1.png')}}" alt="">
                                        </div>
											
											<!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
											<div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
										</a>
										<!-- End portfolio list item image inner -->

									</div>
									<!-- End portfolio list item image -->
									
									<!-- Begin portfolio list item info -->
									<div class="pl-item-info">
										<div class="pl-item-caption">
											<h2 class="pl-item-title"><a href="portfolio-single-1.html">Digital Banking Dashboard</a></h2>
											<div class="pl-item-category"><a href="portfolio-archive.html">Vertex Pay</a></div>
										</div>
									</div>
									<!-- End portfolio list item info -->

								</div>
								<!-- End portfolio list item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
							/// Begin isotope item ///
							========================== 
							* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
							-->
							<div class="isotope-item print iso-height-1">

								<!-- Begin portfolio list item -->
								<div class="portfolio-list-item">

									<!-- Begin portfolio list item image -->
									<div class="pl-item-image-wrap">

										<!-- Begin portfolio list item image inner -->
										<a href="portfolio-single-2.html" class="pl-item-image-inner">
											<div class="pl-item-image bg-image lazy" style="padding: 1rem;">
                                                <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-2.png')}}" alt="">
                                            </div>
											
											<!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
											<div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
										</a>
										<!-- End portfolio list item image inner -->

									</div>
									<!-- End portfolio list item image -->
									
									<!-- Begin portfolio list item info -->
									<div class="pl-item-info">
										<div class="pl-item-caption">
											<h2 class="pl-item-title"><a href="portfolio-single-2.html">Learning Management Platform</a></h2>
											<div class="pl-item-category"><a href="portfolio-archive.html">QXP</a></div>
										</div>
									</div>
									<!-- End portfolio list item info -->

								</div>
								<!-- End portfolio list item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
							/// Begin isotope item ///
							========================== 
							* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
							-->
							<div class="isotope-item branding iso-height-1">

								<!-- Begin portfolio list item -->
								<div class="portfolio-list-item">

									<!-- Begin portfolio list item image -->
									<div class="pl-item-image-wrap">

										<!-- Begin portfolio list item image inner -->
										<a href="portfolio-single-3.html" class="pl-item-image-inner">
											<div class="pl-item-image bg-image lazy" data-src="" style="padding: 2rem;">
                                                <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-3.png')}}" alt="">
                                            </div>
											
											<!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
											<div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
										</a>
										<!-- End portfolio list item image inner -->

									</div>
									<!-- End portfolio list item image -->
									
									<!-- Begin portfolio list item info -->
									<div class="pl-item-info">
										<div class="pl-item-caption">
											<h2 class="pl-item-title"><a href="portfolio-single-3.html">Tartumi Sandera Naomis</a></h2>
											<div class="pl-item-category"><a href="portfolio-archive.html">Branding</a></div>
										</div>
									</div>
									<!-- End portfolio list item info -->

								</div>
								<!-- End portfolio list item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
							/// Begin isotope item ///
							========================== 
							* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
							-->
							<div class="isotope-item digital iso-height-2">

								<!-- Begin portfolio list item -->
								<div class="portfolio-list-item">

									<!-- Begin portfolio list item image -->
									<div class="pl-item-image-wrap">

										<!-- Begin portfolio list item image inner -->
										<a href="portfolio-single-4.html" class="pl-item-image-inner">
											<div class="pl-item-image bg-image lazy" data-src="assets/img/portfolio/list/list-1/portfolio-list-12.png" style="padding: 2rem; background-size: contain;">
                                                {{-- <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-4.png')}}" alt=""> --}}
                                            </div>
											
											<!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
											<div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
										</a>
										<!-- End portfolio list item image inner -->
										
									</div>
									<!-- End portfolio list item image -->
									
									<!-- Begin portfolio list item info -->
									<div class="pl-item-info">
										<div class="pl-item-caption">
											<h2 class="pl-item-title"><a href="portfolio-single-4.html">Tetera Laktus</a></h2>
											<div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
										</div>
									</div>
									<!-- End portfolio list item info -->

								</div>
								<!-- End portfolio list item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
							/// Begin isotope item ///
							========================== 
							* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
							-->
							<div class="isotope-item motion iso-height-1">

								<!-- Begin portfolio list item -->
								<div class="portfolio-list-item">

									<!-- Begin portfolio list item image -->
									<div class="pl-item-image-wrap">

										<!-- Begin portfolio list item image inner -->
										<a href="portfolio-single-5.html" class="pl-item-image-inner">
											<div class="pl-item-image bg-image lazy" data-src="" style="padding: 2rem">
                                                <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-4.png')}}" alt="">
                                            </div>
											
											<!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
											<div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
										</a>
										<!-- End portfolio list item image inner -->

									</div>
									<!-- End portfolio list item image -->
									
									<!-- Begin portfolio list item info -->
									<div class="pl-item-info">
										<div class="pl-item-caption">
											<h2 class="pl-item-title"><a href="portfolio-single-5.html">Tant Saktra Memis</a></h2>
											<div class="pl-item-category"><a href="portfolio-archive.html">Motion</a></div>
										</div>
									</div>
									<!-- End portfolio list item info -->

								</div>
								<!-- End portfolio list item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
							/// Begin isotope item ///
							========================== 
							* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
							-->
							<div class="isotope-item branding digital iso-height-1">

								<!-- Begin portfolio list item -->
								<div class="portfolio-list-item">

									<!-- Begin portfolio list item image -->
									<div class="pl-item-image-wrap">

										<!-- Begin portfolio list item image inner -->
										<a href="portfolio-single-6.html" class="pl-item-image-inner">
											<div class="pl-item-image bg-image lazy" data-src="" style="padding: 2rem;">
                                                <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-6.png')}}" alt="">
                                            </div>
											
											<!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
											<div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
										</a>
										<!-- End portfolio list item image inner -->

									</div>
									<!-- End portfolio list item image -->
									
									<!-- Begin portfolio list item info -->
									<div class="pl-item-info">
										<div class="pl-item-caption">
											<h2 class="pl-item-title"><a href="portfolio-single-6.html">Intuisa Jacobis Untra</a></h2>
											<div class="pl-item-category"><a href="portfolio-archive.html">Branding</a>, <a href="">Digital</a></div>
										</div>
									</div>
									<!-- End portfolio list item info -->

								</div>
								<!-- End portfolio list item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
							/// Begin isotope item ///
							========================== 
							* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
							-->
							<div class="isotope-item digital iso-height-1">

								<!-- Begin portfolio list item -->
								<div class="portfolio-list-item">

									<!-- Begin portfolio list item image -->
									<div class="pl-item-image-wrap">

										<!-- Begin portfolio list item image inner -->
										<a href="portfolio-single-7.html" class="pl-item-image-inner">
											<div class="pl-item-image bg-image lazy" data-src="assets/img/portfolio/list/list-1/portfolio-list-16.gif" style="padding: 2rem;">
                                                <img src="{{asset('assets/img/portfolio/list/list-1/portfolio-list-11.png')}}" alt="">
                                            </div>
											
											<!-- Portfolio list item icon (displayed only with default hover overlay and "pli-alter-4" class in isotope-items-wrap) -->
											<div class="pl-item-icon"><span class="lnr lnr-link"></span></div>
										</a>
										<!-- End portfolio list item image inner -->

									</div>
									<!-- End portfolio list item image -->
									
									<!-- Begin portfolio list item info -->
									<div class="pl-item-info">
										<div class="pl-item-caption">
											<h2 class="pl-item-title"><a href="portfolio-single-7.html">Marevik Trastis</a></h2>
											<div class="pl-item-category"><a href="portfolio-archive.html">Digital</a></div>
										</div>
									</div>
									<!-- End portfolio list item info -->

								</div>
								<!-- End portfolio list item -->

							</div>
							<!-- End isotope item -->


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

				</div> <!-- /.portfolio-list-inner (/.isotope-wrap) -->
			</section>
			<!-- End portfolio list section -->

            <section class="section-custom">

                <!-- Begin tt-heading 
				====================== 
				* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
				-->
				<div class="tt-heading tt-heading-lg padding-on">
					<div class="tt-heading-inner tt-wrap text-center"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->
						
						<div class="row">
							<div class="col-md-12">
								
								<h1 class="tt-heading-title" style="max-width: initial;">More About Me?</h1>
								<div class="tt-heading-subtitle" style="max-width: initial;">Please see more about me</div>
								
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

							</div> <!-- /.col -->

							<div class="col-md-12">
								<p>I am UX developer with a heart for social justice and women empowerment. My 2 years of experience in developing websites for multiple NGOs and Social justice start-ups has offered me a platform I did not know I needed. To progress my UX design skills while attending to my need to speak out for social injustices all over the county. From the need to empower girls in the field of Technology to the re-branding of online businesses in order to increase their users tenfold, my projects have been used to emulate some of these passions. Passions that are near and dear to my heart.</p>
							</div> <!-- /.col -->
						</div> <!-- /.row -->

					</div> <!-- /.tt-heading-inner -->
				</div>
				<!-- End tt-heading -->
            </section>

            <!-- =============================================
			///// Begin call to action section (style-2) /////
			============================================== -->
			<section class="call-to-action-section cta-style-2 bg-dark text-white bg-image" style="background-image: url(assets/img/pattern/pt-2.jpg);">

				<!-- Element cover 
				===================
				* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
				* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
				* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
				-->
				<div class="cover cover-gradient-dark cover-opacity-9"></div>

				<div class="cta-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes in file "helper.css" -->
					<div class="row">
						<div class="col-md-6">

							<!-- Begin tt-heading 
							====================== 
							* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
							* Use class "text-center" or "text-right" to align tt-heading.
							* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
							-->
							<div class="tt-heading tt-heading-xxlg">
								<div class="tt-heading-inner">
									<h1 class="tt-heading-title">Do You Feel Excited?</h1>
									<div class="tt-heading-subtitle">Interested in working with us?</div>
									
									<!-- Begin zig-zag separator 
									============================= 
									* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
									* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
									-->
									<div class="zig-zag-separator zig-zag-light">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
									<!-- End zig-zag separator -->

								</div> <!-- /.tt-heading-inner -->
							</div>
							<!-- End tt-heading -->

						</div> <!-- /.col -->

						<div class="col-md-6">
							<p>Get in touch with me if you would like to know more from me and for any further enquiry. <br> Besides, if you reach out, means I'm getting closer to convince you to hire me <i class="fas fa-smile-beam ml-1"></i></p>

							<div class="margin-top-30">
								<a href="mailto:claricekibii@gmail.com" class="btn btn-primary btn-lg margin-top-5"><i class="fas fa-envelope mx-3"></i>Let's Work Together!</a>
							</div>

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.cta-inner -->
			</section>
			<!-- End call to action section -->

            <!-- ======================================
			///// Begin clients section (style-1) /////
			======================================= -->
			<section id="clients-section" class="clients-style-1">
				<div class="clients-inner tt-wrap">
					<div class="row flx-c">

						<div class="col-lg-push-7 col-lg-5">

							<!-- Begin tt-heading 
							====================== 
							* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
							* Use class "text-center" or "text-right" to align tt-heading.
							* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
							-->
							<div class="tt-heading tt-heading-xlg">
								<div class="tt-heading-inner">
									<h1 class="tt-heading-title">Clients</h1>
									<div class="tt-heading-subtitle">Our Loyal Clients</div>
									
									<!-- Begin zig-zag separator 
									============================= 
									* Use classes "zig-zag-xs", "zig-zag-sm", "zig-zag-lg" or "zig-zag-xlg" to set separator size. 
									* Use classes "zig-zag-light" or "zig-zag-dark" to change zig-zag separator style.
									-->
									<div class="zig-zag-separator">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
									<!-- End zig-zag separator -->

									<div class="tt-heading-text">
										The following are a number of clients I've worked with, be it in a small capacity or large.
									</div>

								</div> <!-- /.tt-heading-inner -->
							</div>
							<!-- End tt-heading -->

						</div> <!-- /.col -->

						<div class="col-lg-pull-5 col-lg-7">

							<!-- Begin client list (Note: for better results, use images with same dimensions!)
							======================= 
							* Use class "client-list-boxed" to enable client list boxed style.
							-->
							<ul class="client-list">
								<li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/logo.png" alt="Client"></a></li>
								<li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/Sheth-Naturals-logo-New.png" alt="Client"></a></li>
								<li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/vplogo.png" alt="Client"></a></li>
								<li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/awit-2.png" alt="Client"></a></li>
								
								{{-- <li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/bgAsset-1-1.svg" alt="Client"></a></li>
								<li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/bgAsset-2-2.svg" alt="Client"></a></li>
								<li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/bgAsset-3-2.svg" alt="Client"></a></li>
								<li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/bgAsset-4-2.svg" alt="Client"></a></li> --}}
								{{-- <li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/client-10.png" alt="Client"></a></li>
								<li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/client-11.png" alt="Client"></a></li>
								<li><a target="_blank" href="#" title="Client Logo"><img src="assets/img/clients/client-12.png" alt="Client"></a></li> --}}
							</ul>
							<!-- End client list -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->

				</div> <!-- /.clients-inner -->
			</section>
	<!-- End clients section -->
</div>
