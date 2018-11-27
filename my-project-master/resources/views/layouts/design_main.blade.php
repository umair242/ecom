<!DOCTYPE html>
<html lang="en">
            @foreach($headSections as $headSection)
            @include("components.".$headSection) 
            @endforeach
		
            <body> 
            <div class="super_container">
   
	<!-- Header -->

        @foreach($LeftSections as $LeftSection)
        @include("components.".$LeftSection) 
        @endforeach




                <div class="home">
                    @foreach($RightSections as $RightSection)
                    @include("components.".$RightSection) 
                    @endforeach		
                        <!-- Home Slider -->

                </div>





                <!-- Products -->

                 @foreach($BodySections as $BodySection)
                    @include("components.".$BodySection) 
                    @endforeach	

                <!-- Newsletter -->



                <!-- Footer -->

                <footer class="footer">


                    @foreach($FooterSections as $FooterSection)
                    @include("components.".$FooterSection) 
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