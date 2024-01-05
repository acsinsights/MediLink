<header id="header" class="header">
    <!-- MOBILE HEADER -->
    <div class="wsmobileheader clearfix">
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        <span class="smllogo mt-0"><img src="{{asset ('admin-assets/img/medilink-logo.png') }}" width="200" height="65" alt="header-logo"> </span>
        <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
     </div>
     <!-- HEADER STRIP -->
     <div class="headtoppart bg-lightgrey clearfix">
        <div class="headerwp clearfix">
            <!-- Address -->
             <div class="headertopleft">

                <div class="address clearfix">  <i class="fas fa-envelope mrr-10"></i><a href="mailto: {{ $data['sales-email'] }}"> {{ $data['sales-email'] }}</a>
                </a>
                <i class="fas fa-phone mrr-10"></i><a href="tel: {{ $data['sales-number'] }}"> {{ $data['sales-number'] }}</a>
            </a>
                </div>
             </div>
             <!-- Social Links -->
            <div class="headertopright">
                <a class="instagramicon" title="Instagram" href="{{ $data['instagram-link'] }}"><i class="fab fa-instagram"></i> <span class="mobiletext02">Instagram</span></a>
                <a class="linkedinicon" title="Linkedin" href="{{ $data['linkedin-link'] }}"><i class="fab fa-linkedin-in"></i> <span class="mobiletext02">Linkedin</span></a>
                <a class="youtubeicon" title="Youtube" href="{{ $data['youtube-link'] }}"><i class="fab fa-youtube"></i> <span class="mobiletext02">Youtube</span></a>
                <a class="facebookicon" title="Facebook" href="{{ $data['facebook-link'] }}"><i class="fab fa-facebook-f"></i> <span class="mobiletext02">Facebook</span></a>
              </div>
        </div>
      </div>	<!-- END HEADER STRIP -->
      <!-- NAVIGATION MENU -->
      <div class="wsmainfull menu clearfix">
        <div class="wsmainwp clearfix">
            <!-- LOGO IMAGE -->
            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
            <div class="desktoplogo pt-0"><a href="#hero-11"><img src="{{asset ('admin-assets/img/medilink-logo.png') }}" width="200" height="65" alt="header-logo"></a></div>

            <!-- MAIN MENU -->
              <nav class="wsmenu clearfix">
                <ul class="wsmenu-list">
                    <li aria-haspopup="true"><a href="{{ route('frontend.home') }}">Home </a>

                      </li>
                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('frontend.treatment') }}">Treatments</a></li>
                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('frontend.blog.index') }}">Blogs</a></li>
                    <li aria-haspopup="true"><a href="{{ route('frontend.about') }}">About us</a>

                    </li>
                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('frontend.contact') }}">Contact us</a></li>
                    <li class="nl-simple header-btn" aria-haspopup="true"><a href="{{ route('frontend.appointment') }}">Book Appointment</a></li>
                </ul>
            </nav>
        </div>
    </div>	<!-- END NAVIGATION MENU -->
</header>	<!-- END HEADER -->
