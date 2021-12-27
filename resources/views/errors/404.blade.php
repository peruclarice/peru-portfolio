@extends('layout.app')
@section('content')

    <!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
			<section id="page-header" class="ph-xlg">

				<!-- Begin page header image 
				============================= 
				* Use class "parallax-1" up to "parallax-8" to enable image parallax effect (number 1-8 represents the speed).
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
				<div class="page-header-image parallax-6 bg-image">
					
					<!-- Element cover 
					===================
					* Use class "cover-opacity-*" to set cover opasity (1, 1.5, 2, 2.5, ... 9.5). Example: "cover-opacity-2" or "cover-opacity-2-5".
					* Aditional color classes you can use: "cover-color", "cover-light", "cover-red", "cover-pink", "cover-purple", "cover-green", "cover-blue", "cover-yellow" or "cover-brown" to set cover background color (note: class "cover-color" = template main color).
					* Use class "cover-gradient-dark", "cover-gradient-light" or "cover-gradient-color" to enable cover gradient background.
					-->
					<div class="cover cover-opacity-3 cover-light cover-gradient-light"></div>
					
				</div>
				<!-- End page header image -->

				<!-- Begin page header inner -->
				<div class="tt-wrap" style="    min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;">

					<div class="page-header-caption ph-cap-xlg parallax-5" style="text-align: center;">
                        <div style="width: 400px; margin:auto;">
                            @include('svg.error-404')
                        </div>
						{{-- <div class="ph-title-wrap">
							<h1 class="page-header-title">404</h1>
						</div> --}}
						<div class="ph-subtitle-wrap">
							<h2 class="page-header-subtitle">Sorry, page not found!</h2>
						</div>

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
						</div>
						<!-- End zig-zag separator -->

						<!-- Begin page header description (recommended max 170 characters!) 
						=================================== -->
						<div class="page-header-description">
							{{-- <div class="ph-desc-inner">
								Fusce imperdiet, arcu non tempor aliquam, justo tortor cursus est, sed facilisis eros purus et felis. Sed eros sapien, iaculis eget gravida euismod, dapibus vitae turpis.
							</div> --}}
                            <h5 style="font-weight: normal;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod suscipit perferendis numquam aliquid minus, totam in! Tempora iusto modi dolorum vel, magni hic debitis! Vitae nobis iusto praesentium eius. Exercitationem repellat dolore excepturi esse!</h5>
						</div>
						<!-- End page header description -->

						<a href="/" class="btn btn-primary">Go Back Home <i class="fas fa-arrow-left" style="margin-left: .5rem;"></i></a>
						{{-- <a href="contact.html" class="btn btn-secondary margin-top-30">Contact Me <i class="fas fa-envelope-open-text" style="margin-left: .5rem;"></i></a> --}}

					</div>
					<!-- End page header caption -->

				</div> 

			</section>
			<!-- End page header -->

@endsection