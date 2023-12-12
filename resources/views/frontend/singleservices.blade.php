@extends('frontend.layouts.app')
@section('title', 'Single-services')
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
								    	<li class="breadcrumb-item"><a href="{{ route('frontend.service') }}">Our Services</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Single Service</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color" style="text-align:center;"> Single Service</h4>

							</div>
						</div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END BREADCRUMB -->




			<!-- SERVICE DETAILS
			============================================= -->
			<div id="service-page" class="wide-60 service-page-section division">
				<div class="container">
					<div class="row">


						<!-- SERVICE CONTENT -->
				 		<div class="col-lg-8">
				 			<div class="s2-page pr-30 mb-40">

				 				<!-- Title -->
								<h3 class="h3-md blue-color">Magnetic Resonance Imaging</h3>
								<h4 class="h4-sm blue-color">Maecenas gravida porttitor nunc, magna luctus tempor viverra
     							   cubilia laoreet augue
								</h4>

								<!-- Text -->
								<p>Primis cubilia laoreet augue vitae laoreet augue in cubilia risus auctor tempus dolor
								   feugiat, felis lacinia risus auctor id viverra dolor congue ipsum mauris iaculis luctus
								   placerat massa magna cursus amet quisque an aliquet. Feugiat primis in ultrice ligula
								   risus auctor
								</p>

				 				<!-- Text -->
								<p>Ligula risus auctor tempus dolor feugiat, felis lacinia risus interdum auctor id viverra
								   dolor iaculis luctus bibendum luctus neque rhoncus ipsum tempor varius iaculis at luctus
								   neque rhoncus ipsum tempor varius cubilia laoreet augue vitae laoreet augue undo cubilia
								   feugiat suscipit emper lacus
								</p>

				 				<!-- Image -->
								<div class="content-block-img text-center">
									<img class="img-fluid" src="{{asset('frontend/images/mri_1000x500.jpg')}}" alt="content-image">
								</div>

								<!-- Text -->
								<p>Ligula risus auctor tempus dolor feugiat, felis lacinia risus interdum auctor id viverra
								   dolor iaculis luctus bibendum luctus neque rhoncus ipsum tempor varius iaculis at luctus
								   neque rhoncus ipsum tempor varius cubilia laoreet augue vitae laoreet augue undo cubilia
								   feugiat suscipit emper lacus
								</p>

								<!-- Options List -->
								<div class="row">

									<div class="col-xl-6">

										<!-- Option #1 -->
										<div class="box-list m-top-15">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p>Nemo ipsam egestas volute turpis dolores quaerat massa suscipit, luctus neque</p>
										</div>

										<!-- Option #2 -->
										<div class="box-list">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis</p>
										</div>

										<!-- Option #3 -->
										<div class="box-list">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p>An enim nullam tempor at pretium blandit</p>
										</div>

									</div>

									<div class="col-xl-6">

										<!-- Option #4 -->
										<div class="box-list">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor primis luctus</p>
										</div>

										<!-- Option #5 -->
										<div class="box-list m-top-15">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p>An enim nullam tempor at pretium blandit</p>
										</div>

										<!-- Option #6 -->
										<div class="box-list">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p>Magna massa suscipit, luctus neque purus and ipsum neque dolor at tempor</p>
										</div>

									</div>

								</div>	<!-- End Options List -->

								<!-- Small Title -->
								<h5 class="h5-md blue-color">Rhoncus ipsum tempor varius iaculis</h5>

								<!-- CONTENT BOX #1 -->
								<div class="box-list">
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Fringilla risus nec, luctus mauris orci auctor purus euismod pretium purus pretium
									   ligula rutrum tempor sapien at pretium luctus ligula rutrum luctus risus ultrice
									   lacinia risus auctor id viverra dolor congue ipsum mauris iaculis luctus placerat
									   massa magna cursus amet
									</p>
								</div>

								<!-- CONTENT BOX #2 -->
								<div class="box-list">
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Quaerat sodales sapien undo euismod purus a blandit pretium</p>
								</div>

								<!-- CONTENT BOX #3 -->
								<div class="box-list">
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien undo pretium
									   purus feugiat dolor impedit magna purus pretium gravida donec quisque an aliquet
									</p>
								</div>

								<!-- Picing Table -->
								<div class="pricing-table">
									<table class="table table-hover">
										<thead>
										    <tr>
										      	<th scope="col">#</th>
										      	<th scope="col">Service</th>
										      	<th scope="col">Price</th>
										    </tr>
										</thead>
										<tbody>
										    <tr>
										      	<th scope="row">1</th>
										     	<td>Bronchoscopy</td>
										      	<td>From <span>$1340.00</span></td>
										    </tr>
										    <tr>
										      	<th scope="row">2</th>
										      	<td>Parathyroid Scan</td>
										      	<td>From <span>$765.00</span></td>
										    </tr>
										    <tr>
										      	<th scope="row">3</th>
										      	<td>Echocardiography</td>
										      	<td>From <span>$1075.00</span></td>
										    </tr>
										    <tr>
										      	<th scope="row">4</th>
										      	<td>Full Blood Picture</td>
										      	<td>From <span>$950.00</span></td>
										    </tr>
										    <tr>
										      	<th scope="row">5</th>
										      	<td>CT & Ultrasound Diagnostic</td>
										      	<td>From <span>$885.00</span></td>
										    </tr>
										    <tr class="last-tr">
										      	<th scope="row">6</th>
										      	<td>MRI & X-Ray</td>
										      	<td>From <span>$1050.00</span></td>
										    </tr>
										</tbody>
									</table>
								</div>

								<!-- Text -->
								<p>Primis cubilia laoreet augue vitae laoreet augue in cubilia risus auctor tempus dolor
								   feugiat, felis lacinia risus auctor id viverra dolor congue ipsum mauris iaculis luctus
								   placerat massa magna cursus amet quisque an aliquet. Feugiat primis in ultrice ligula
								   risus auctor
								</p>

								<!-- Text -->
								<p>Ligula risus auctor tempus dolor feugiat, felis lacinia risus interdum auctor id viverra
								   dolor iaculis luctus bibendum luctus neque rhoncus ipsum tempor varius iaculis at luctus
								   neque rhoncus ipsum tempor varius cubilia laoreet augue vitae laoreet augue undo cubilia
								   feugiat suscipit
								</p>

								<!-- Button -->
								<a href="{{ route('frontend.appointment') }}" class="btn btn-blue blue-hover">Book an Appointment</a>

				 			</div>
				 		</div>	<!-- END SERVICE CONTENT -->


				 		<!-- SIDEBAR -->
						<aside id="sidebar" class="col-lg-4">


							<!-- TEXT WIDGET -->
							<div id="txt-widget" class="sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-sm steelblue-color">The Heart Of Clinic</h5>

								<!-- Head of Clinic -->
								<div class="txt-widget-unit mb-15 clearfix d-flex align-items-center">

									<!-- Avatar -->
									<div class="txt-widget-avatar">
										<img src="{{asset('frontend/images/head-of-clinic.jpg')}}" alt="testimonial-avatar">
									</div>

									<!-- Data -->
									<div class="txt-widget-data">
										<h5 class="h5-md steelblue-color">Dr. Jonathan Barnes</h5>
										<span>Chief Medical Officer, Founder</span>
										<p class="blue-color">1-800-1234-567</p>
									</div>

								</div>	<!-- End Head of Clinic -->

								<!-- Text -->
								<p class="p-sm">An enim nullam tempor sapien at gravida donec pretium ipsum porta justo
								   integer at odiovelna vitae auctor integer congue magna purus
								</p>

								<!-- Button -->
								<a href="{{ route('frontend.about') }}" class="btn btn-blue blue-hover">Learn More</a>

							</div>	<!-- END TEXT WIDGET -->


							<!-- SIDEBAR TABLE -->
							<div class="sidebar-table blue-table sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-md">Working Time</h5>

								<!-- Text -->
								<p class="p-sm">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor at
								   tempus feugiat dolor lacinia cursus nulla vitae massa
								</p>

								<!-- Table -->
								<table class="table">
									<tbody>
									    <tr>
									      	<td>Mon – Wed</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 7:00 PM</td>
									    </tr>
									    <tr>
									      	<td>Thursday</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 6:30 PM</td>
									    </tr>
									     <tr>
									      	<td>Friday</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 6:00 PM</td>
									    </tr>
									    <tr class="last-tr">
									      	<td>Sun - Sun</td>
									      	<td>-</td>
									      	<td class="text-right">CLOSED</td>
									   	 </tr>
									  </tbody>
								</table>

								<!-- Title -->
								<h5 class="h5-xs">Need a personal health plan?</h5>

								<!-- Text -->
								<p class="p-sm">Porta semper lacus cursus, and feugiat primis ultrice ligula at risus auctor</p>

							</div>	<!-- END SIDEBAR TABLE -->


							<!-- SIDEBAR TIMETABLE -->
							<div class="sidebar-timetable sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-md mb-20">Doctors Timetable</h5>

								<!-- Text -->
								<p class="p-sm">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor at
								   tempus feugiat dolor lacinia cursus nulla vitae massa
								</p>

								<!-- Button -->
								<a href="{{ route('frontend.table') }}" class="btn btn-blue blue-hover mt-10">View Timetable</a>

							</div>	<!-- END SIDEBAR TABLE -->


						</aside>   <!-- END SIDEBAR -->


				 	</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END SERVICE DETAILS -->




			<!-- TESTIMONIALS-2
			============================================= -->
			<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">What Our Patients Say</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>	 <!-- END SECTION TITLE -->


					<!-- TESTIMONIALS CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel owl-theme reviews-holder">


								<!-- TESTIMONIAL #1 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="{{asset('frontend/images/review-author-1.jpg')}}" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Etiam sapien sem at sagittis congue an augue massa varius egestas a suscipit
										   magna undo tempus aliquet porta vitae
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Scott Boxer</h5>
											<span>Programmer</span>
										</div>

									</div>
								</div>	<!--END  TESTIMONIAL #1 -->


								<!-- TESTIMONIAL #2 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="{{asset('frontend/images/review-author-2.jpg')}}" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Mauris donec ociis magnisa a sapien etiam sapien congue augue egestas et ultrice
										   vitae purus diam integer congue magna ligula egestas
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Penelopa Peterson</h5>
											<span>Project Manager</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #2 -->


								<!-- TESTIMONIAL #3 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="{{asset('frontend/images/review-author-3.jpg')}}" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>At sagittis congue augue an egestas magna ipsum vitae purus ipsum primis undo cubilia
										   laoreet augue
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">M.Scanlon</h5>
											<span>Photographer</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #3 -->


								<!-- TESTIMONIAL #4 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="{{asset('frontend/images/review-author-4.jpg')}}" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Mauris donec ociis magnis sapien etiam sapien congue augue pretium ligula
										   a lectus aenean magna mauris
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Jeremy Kruse</h5>
											<span>Graphic Designer</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #4 -->


								<!-- TESTIMONIAL #5 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="{{asset('frontend/images/review-author-5.jpg')}}" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>An augue in cubilia laoreet magna suscipit egestas magna ipsum at purus ipsum
										   primis in augue ulta ligula egestas
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Evelyn Martinez</h5>
											<span>Senior UX/UI Designer</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #5 -->


								<!-- TESTIMONIAL #6 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="{{asset('frontend/images/review-author-6.jpg')}}" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>An augue cubilia laoreet undo magna at risus suscipit egestas magna an ipsum ligula
										   vitae and purus ipsum primis
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Dan Hodges</h5>
											<span>Internet Surfer</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #6 -->


								<!-- TESTIMONIAL #7 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="{{asset('frontend/images/review-author-7.jpg')}}" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Augue egestas volutpat egestas augue in cubilia laoreet magna suscipit luctus
										   and dolor blandit vitae
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Isabel M.</h5>
											<span>SEO Manager</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #7 -->


								<!-- TESTIMONIAL #8 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="{{asset('frontend/images/review-author-8.jpg')}}" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Augue egestas volutpat egestas augue in cubilia laoreet magna suscipit luctus
										   and dolor blandit vitae
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Alex Ross</h5>
											<span>Patient</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #8 -->


								<!-- TESTIMONIAL #9-->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="{{asset('frontend/images/review-author-9.jpg')}}" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Augue egestas volutpat egestas augue in cubilia laoreet magna suscipit luctus
										   magna dolor neque vitae
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Alisa Milano</h5>
											<span>Housewife</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #9 -->


							</div>
						</div>
					</div>	<!-- END TESTIMONIALS CONTENT -->


				</div>	   <!-- End container -->
			</section>	 <!-- END TESTIMONIALS-2 -->




			<!-- BANNER-5
			============================================= -->
			<section id="banner-5" class="pt-100 banner-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">Certified and Experienced Doctors</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>


					<!-- BANNER IMAGE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<div class="banner-5-img wow fadeInUp" data-wow-delay="0.4s">
								<img class="img-fluid" src="{{asset('frontend/images/image-07.png')}}" alt="banner-image">
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</section>	<!-- END BANNER-5 -->



@endsection

