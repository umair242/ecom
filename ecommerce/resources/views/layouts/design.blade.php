<!DOCTYPE html>
<html lang="en">
    @foreach($headSections as $headSection)
    @include("components.".$headSection) 
    @endforeach
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
                        @foreach($headersections as $headersection)
                        @include("components.".$headSection) 
                         @endforeach
			

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

			

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
                        @foreach($bottomSections as $bottomSection)
                        @include("components.".$bottomSection) 
                         @endforeach
		<nav class="menu_nav">
			
	</div>
	
	<!-- Sidebar -->

	<div class="sidebar">
		
		
	</div>

	<!-- Home -->

	<div class="home">
		
		
	</div>

	<!-- Boxes -->
           
	

	<!-- Newsletter -->

	

	<!-- Footer -->

	<footer class="footer">
	 @foreach($footerSections as $footerSection)
                        @include("components.".$footerSection) 
                         @endforeach
	</footer>

</div>

<script src="{{url('/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('/styles/bootstrap-4.1.3/popper.js')}}"></script>
<script src="{{url('/styles/bootstrap-4.1.3/bootstrap.min.js')}}"></script>
<script src="{{url('/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{url('/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{url('/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{url('/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{url('/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{url('/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{url('/plugins/easing/easing.js')}}"></script>
<script src="{{url('/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{url('/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{url('/plugins/Isotope/fitcolumns.js')}}"></script>
<script src="{{url('/js/custom.js')}}"></script>
</body>
</html>