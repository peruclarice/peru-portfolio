<!DOCTYPE html>

<!--
   Template:   Aivo - Multipurpose Portfolio HTML Website Template
   Author:     Themetorium
   URL:        https://themetorium.net  
-->

<html lang="en">
	<head>
        @include('partials.head')
        @livewireStyles
	</head>

	<!-- ===========
	///// Body /////
	================
	* Use class "animsition" to enable page transition while page loads.
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	-->
	<body id="body" class="animsition tt-boxed">

        @include('partials.sidebar')
		
		<!-- *************************************
		*********** Begin body content *********** 
		************************************** -->
		<div id="body-content">
            @yield('content')
			

         <!-- ===========================
			///// Begin footer section /////
			================================
			* Use class "footer-dark" to enable dark footer.
			* Use class "no-margin-top" if needed. 
			-->
			<section id="footer" class="footer-dark no-margin-top">
                @include('partials.footer')

				<!-- Scroll to top button -->
				<a href="#body" class="scrolltotop sm-scroll" title="Scroll to top"></a>

			</section>
			<!-- End footer section -->

		</div>
		<!-- End body content -->

		<!-- ====================
		///// Scripts below /////
		===================== -->
        @include('partials.scripts')
        @livewireScripts


		<!--==============================
		///// Begin Google Analytics /////
		============================== -->

		<!-- Paste your Google Analytics code here. 
		Go to http://www.google.com/analytics/ for more information. -->

		<!--==============================
		///// End Google Analytics /////
		============================== -->



	</body>

</html>