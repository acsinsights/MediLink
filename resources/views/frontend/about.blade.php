@extends('frontend.layouts.app')
@section('title', 'About-us')
@section('page')
			<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb"style="justify-content:center;">
								    	<li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">About Us</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color" style="text-align:center;">About Us</h4>

							</div>
						</div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END BREADCRUMB -->
			<!-- INFO-4
			============================================= -->
			<section id="info-4" class="wide-100 info-section division">
				<div class="container">
					<!-- TOP ROW -->
					<div class="top-row mb-80">
						<div class="row d-flex align-items-center">
						<!-- INFO IMAGE -->
						<div class="col-lg-6">
							<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="{{asset('frontend/images/chief_doctor_700x800.jpg')}}" alt="info-image">
							</div>
						</div>
						<!-- INFO TEXT -->
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->
					 			<span class="section-id blue-color">Welcome to MediLink</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Empowering Global Health Journeys Together</h3>

								<!-- Text -->
								<p>MediLink 360 is a premier medical tourism facilitator, committed to breaking down
                                    geographical barriers for individuals worldwide seeking top-notch healthcare in
                                    South India. Our foundation is built on the belief that everyone deserves access to
                                     exceptional healthcare, and we specialize in curating personalized journeys towards optimal health and well-being. With a dedication to integrity, compassion, and personalized care, we stand as a leading bridge to the pinnacle of healthcare solutions in the region.

								</p>



							</div>
						</div>	<!-- END TEXT BLOCK -->
						</div>    <!-- End row -->
					</div>	<!-- END TOP ROW -->
					<!-- BOTTOM ROW -->
					<div class="bottom-row">
						<div class="row d-flex align-items-center">
							<!-- INFO TEXT -->
							<div class="col-lg-6">
								<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

									<!-- Section ID -->
					 				<span class="section-id blue-color">Vision of MediLink 360</span>

									<!-- Title -->
									<h3 class="h3-md steelblue-color">Bridging Excellence Globally</h3>

									<!-- Text -->
									<p class="mb-30">Our vision at MediLink 360 is to be the transformative link connecting individuals in search of world-class healthcare solutions with the finest medical expertise available in South India. Motivated by our commitment to excellence in care, we aim to guide our clients through a journey of healing and recovery. Founded on the principle that exceptional healthcare should know no borders, we strive to offer unparalleled medical services, creating pathways to premier healthcare options and making a positive impact on global well-being.

									</p>

								</div>
							</div>	<!-- END INFO TEXT -->
							<!-- INFO IMAGE -->
							<div class="col-lg-6">
								<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
									<img class="img-fluid" src="{{asset('frontend/images/emergency_help_700x800.jpg')}}" alt="info-image">
								</div>
							</div>
						</div>    <!-- End row -->
					</div>	<!-- END BOTTOM ROW -->
				</div>	   <!-- End container -->
			</section>	<!-- END INFO-4 -->
			<!-- STATISTIC-1
			============================================= -->
			<div id="statistic-1" class="bg-scroll statistic-section division">
				<div class="container white-color">
					<div class="row">
					<!-- STATISTIC BLOCK #1 -->
						<div class="col-md-6 col-lg-3">
							<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.4s">
								<!-- Icon  -->
								<span class="flaticon-062-cardiogram-3"></span>
								<!-- Text -->
								<h5 class="statistic-number">9,<span class="count-element">632</span></h5>
								<p class="txt-400">Happy Patients</p>
							</div>
						</div>
						<!-- STATISTIC BLOCK #2 -->
						<div class="col-md-6 col-lg-3">
							<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.6s">
								<!-- Icon  -->
								<span class="flaticon-137-doctor"></span>
								<!-- Text -->
								<h5 class="statistic-number"><span class="count-element">178</span></h5>
								<p class="txt-400">Qualified Doctors</p>
							</div>
						</div>
						<!-- STATISTIC BLOCK #3 -->
						<div class="col-md-6 col-lg-3">
							<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.8s">
								<!-- Icon  -->
								<span class="flaticon-065-hospital-bed"></span>

								<!-- Text -->
								<h5 class="statistic-number"><span class="count-element">864</span></h5>
								<p class="txt-400">Clinic Rooms</p>
							</div>
						</div>
						<!-- STATISTIC BLOCK #4 -->
						<div class="col-md-6 col-lg-3">
							<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="1s">
								<!-- Icon  -->
								<span class="flaticon-040-placeholder"></span>

								<!-- Text -->
								<h5 class="statistic-number"><span class="count-element">473</span></h5>
								<p class="txt-400">Local Partners</p>
							</div>
						</div>
					</div>  <!-- End row -->
				</div>	 <!-- End container -->
			</div>	 <!-- END STATISTIC-1 -->
			<!-- VIDEO-2
		
@endsection
