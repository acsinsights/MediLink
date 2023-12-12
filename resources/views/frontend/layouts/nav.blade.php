<header id="header" class="header">


    <!-- MOBILE HEADER -->
    <div class="wsmobileheader clearfix">
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        <span class="smllogo"><img src="{{asset ('frontend/images/logo.png') }}" width="180" height="40" alt="mobile-logo"></span>
        <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
     </div>


     <!-- HEADER STRIP -->
     <div class="headtoppart bg-lightgrey clearfix">
        <div class="headerwp clearfix">

            <!-- Address -->
             <div class="headertopleft">
                <div class="address clearfix"><span><i class="fas fa-map-marker-alt"></i>121 King St,
                    Melbourne, VIC 3000 </span> <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i>(800)-569-7890</a>
                </div>
             </div>

             <!-- Social Links -->
            <div class="headertopright">
                <a class="googleicon" title="Google" href="#"><i class="fab fa-google"></i> <span class="mobiletext02">Google</span></a>
                <a class="linkedinicon" title="Linkedin" href="#"><i class="fab fa-linkedin-in"></i> <span class="mobiletext02">Linkedin</span></a>
                <a class="twittericon" title="Twitter" href="#"><i class="fab fa-twitter"></i> <span class="mobiletext02">Twitter</span></a>
                <a class="facebookicon" title="Facebook" href="#"><i class="fab fa-facebook-f"></i> <span class="mobiletext02">Facebook</span></a>
              </div>

        </div>
      </div>	<!-- END HEADER STRIP -->


      <!-- NAVIGATION MENU -->
      <div class="wsmainfull menu clearfix">
        <div class="wsmainwp clearfix">

            <!-- LOGO IMAGE -->
            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
            <div class="desktoplogo"><a href="#hero-11"><img src="{{asset ('frontend/images/logo.png') }}" width="180" height="40" alt="header-logo"></a></div>

            <!-- MAIN MENU -->
              <nav class="wsmenu clearfix">
                <ul class="wsmenu-list">



                    <li aria-haspopup="true"><a href="{{ route('frontend.home') }}">Home </a>

                      </li>





                      <li aria-haspopup="true"><a href="{{ route('frontend.service') }}">Services</a>

                      </li>



                      <li aria-haspopup="true"><a href="{{ route('frontend.about') }}">About us</a>

                    </li>



                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('frontend.treatment') }}">Treatments</a></li>
                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('frontend.blog') }}">Blogs</a></li>
                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('frontend.contact') }}">Contact us</a></li>


                    <li class="nl-simple header-btn" aria-haspopup="true"><a href="{{ route('frontend.appointment') }}">Make an Appointment</a></li>


                </ul>
            </nav>

        </div>
    </div>	<!-- END NAVIGATION MENU -->


</header>	<!-- END HEADER -->
