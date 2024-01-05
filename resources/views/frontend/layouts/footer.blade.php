
			<!-- FOOTER-1
			============================================= -->
			<footer id="footer-1" class="wide-40 footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER INFO -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-info mb-40">

								<!-- Footer Logo -->
								<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80  pixels) -->
                                <img class="me-2"
                                src="{{ asset('admin-assets/img/medilink-logo.png') }}" alt="" height="65">

								<!-- Text -->
								<p class="p-sm mt-20">We craft personalized healthcare with integrity, compassion, and optimal care for each individual's journey.

								</p>

								<!-- Social Icons -->
								<div class="footer-socials-links mt-20">
									<ul class="foo-socials text-center clearfix">

										<li><a href="{{ $data['facebook-link'] }}" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="{{ $data['linkedin-link'] }}" class="ico-inkedin"><i class="fab fa-linkedin"></i></a></li>
										<li><a href="{{ $data['youtube-link'] }}" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
										<li><a href="{{ $data['instagram-link'] }}" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>


										<!--
										<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>
										<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>
										<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
										<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
										<li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
										<li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
									    -->

									</ul>
								</div>

							</div>
						</div>


						<!-- FOOTER CONTACTS -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-box mb-40">

								<!-- Title -->
								<h5 class="h5-xs">Quick links</h5>

								<ul class="footer-widget-list">
                                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                                    <li><a href="{{ route('frontend.treatment') }}">Treatments</a></li>
                                    <li><a href="{{ route('frontend.blog.index') }}">Blogs</a></li>
                                    <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                                </ul>

							</div>
						</div>


						<!-- FOOTER WORKING HOURS -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-box mb-40">

								<!-- Title -->
								<h5 class="h5-xs">Helpful Links</h5>


								<!-- Address -->
								<p>Policy Page 1</p>
								<p>Policy Page 2</p>

								<!-- Email -->
								<p >Policy Page 3</p>

								<!-- Phone -->
								<p>Policy Page 4</p>
							</div>
						</div>


						<!-- FOOTER PHONE NUMBER -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-box mb-40">

								<!-- Title -->
								<h5 class="h5-xs">Get in Touch</h5>

								<!-- Footer List -->
                                <div class="mrb-10">

                                <p>
                                    <a style="color: #555" href="tel:">
                                        <i class="fas fa-phone mrr-10"></i>
                                        <a href="tel: {{ $data['sales-number'] }}"> {{ $data['sales-number'] }}</a>
                                    </a>
                                </p>
                            </div>
                            <div class="mrb-10">
                                <p>
                                    <a style="color: #555" href="mailto:">
                                        <i class="fas fa-envelope mrr-10"></i>
                                        <a href="mailto: {{ $data['sales-email'] }}"> {{ $data['sales-email'] }}</a>
                                    </a>
                                </p>
                            </div>

							</div>
						</div>


					</div>	  <!-- END FOOTER CONTENT -->


					<!-- FOOTER COPYRIGHT -->
					<div class="bottom-footer">
						<div class="row">
							<div class="col-md-12">
								<p class="footer-copyright">&copy; 2019 <span>Medilink</span>. All Rights Reserved</p>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</footer>	<!-- END FOOTER-1 -->

			<!-- EXTERNAL SCRIPTS
		============================================= -->
		<script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.easing.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.appear.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
		<script src="{{asset('frontend/js/menu.js')}}"></script>
		<script src="{{asset('frontend/js/sticky.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.scrollto.js')}}"></script>
		<script src="{{asset('frontend/js/materialize.js')}}"></script>
		<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('frontend/js/hero-form.js')}}"></script>
		<script src="{{asset('frontend/js/contact-form.js')}}"></script>
		<script src="{{asset('frontend/js/comment-form.js')}}"></script>
		<script src="{{asset('frontend/js/appointment-form.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.datetimepicker.full.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.validate.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('frontend/js/wow.js')}}"></script>
        <script src="{{asset('frontend/js/timetable.js')}}"></script>
		<!-- Custom Script -->
		<script src="{{asset('frontend/js/custom.js')}}"></script>

		<script>
			new WOW().init();
		</script>
		<script src="{{asset('frontend/js/changer.js')}}"></script>
		<script defer="" src="{{asset('frontend/js/styleswitch.js')}}"></script>
