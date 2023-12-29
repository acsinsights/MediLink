@extends('frontend.layouts.app')
@section('title', 'Home')
@section('page')




	<!-- HERO-11
			============================================= -->

            <section id="hero-11" class="bg-fixed hero-section division">


				<!-- SLIDER -->
				<div class="slider blue-nav">
                    <ul class="slides">



                        <!-- SLIDE #1 -->
                         <li id="slide-1">

                           <!-- Background Image -->
                           <img src="{{asset ('frontend/images/slider/slide-10.jpg') }}" alt="slide-background">

                           <!-- Image Caption -->
                              <div class="caption d-flex align-items-center right-align">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-md-9 col-lg-8 col-xl-7">
                                              <div class="caption-txt text-left white-color">

                                                  <!-- Title -->
                                                  <h2>Treatment</h2>
                                                  <h3>Innovative Approach to Treatment</h3>

                                                  <!-- CONTENT BOX #1 -->
                                               <div class="box-list">
                                                   <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                                   <p class="p-md">Nemo ipsam egestas volute turpis dolores ut aliquam quaerat
                                                      sodales sapien undo pretium purus feugiat dolor impedit magna at purus suscipit
                                                   </p>
                                               </div>

                                               <!-- CONTENT BOX #2 -->
                                               <div class="box-list">
                                                   <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                                   <p class="p-md">Fringilla risus nec, luctus mauris orci auctor purus euismod
                                                      pretium purus pretium ligula rutrum suscipit lectus mauris tempor sapien
                                                   </p>
                                               </div>

                                           </div>
                                       </div>
                                   </div>  <!-- End row -->
                               </div>  <!-- End container -->
                           </div>	<!-- End Image Caption -->

                       </li>	<!-- END SLIDE #1 -->


                         <!-- SLIDE #2 -->
                         <li id="slide-2">

                           <!-- Background Image -->
                           <img src="{{ ('frontend/images/slider/slide-10.jpg') }}" alt="slide-background">

                           <!-- Image Caption -->
                           <div class="caption d-flex align-items-center right-align">
                               <div class="container">
                                      <div class="row">
                                          <div class="col-md-9 col-lg-8 col-xl-7">
                                              <div class="caption-txt text-left white-color">

                                               <!-- Title -->
                                                 <h2>Diagnostic</h2>
                                                 <h3>We Provide All Kind of Diagnostics</h3>

                                                 <!-- Text -->
                                               <p class="p-md">Feugiat primis ligula risus auctor egestas augue mauri viverra tortor
                                                  in iaculis placerat eugiat mauris ipsum in viverra tortor and gravida purus pretium
                                                  lorem primis integer congue magna at pretium purus pretium ligula
                                               </p>

                                           </div>
                                        </div>
                                   </div>  <!-- End row -->
                               </div>  <!-- End container -->
                           </div>	<!-- End Image Caption -->

                        </li>	<!-- END SLIDE #2 -->


                        <!-- SLIDE #3 -->
                         <li id="slide-3">

                             <!-- Background Image -->
                           <img src="{{asset ('frontend/images/slider/slide-10.jpg') }}" alt="slide-background">

                           <!-- Image Caption -->
                               <div class="caption d-flex align-items-center right-align">
                                   <div class="container">
                                      <div class="row">
                                          <div class="col-md-9 col-lg-8 col-xl-7">
                                              <div class="caption-txt text-left white-color">

                                                   <!-- Title -->
                                               <h2>Specialists</h2>
                                               <h3>Our Staff are High-Class Professionals</h3>

                                               <!-- CONTENT BOX #1 -->
                                               <div class="box-list">
                                                   <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                                   <p class="p-md">Nemo ipsam egestas volute turpis dolores ut aliquam quaerat
                                                      sodales sapien undo pretium purus feugiat dolor impedit magna at purus mauris
                                                   </p>
                                               </div>

                                               <!-- CONTENT BOX #2 -->
                                               <div class="box-list">
                                                   <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                                   <p class="p-md">Fringilla risus nec, luctus mauris orci auctor purus euismod
                                                      pretium purus pretium ligula rutrum suscipit lectus mauris tempor sapien
                                                   </p>
                                               </div>

                                           </div>
                                       </div>
                                   </div>  <!-- End row -->
                               </div>  <!-- End container -->
                           </div>	<!-- End Image Caption -->

                        </li>	<!-- END SLIDE #3 -->

                   </ul>
			  	</div>	<!-- END SLIDER -->


			</section>	<!-- END HERO-11 -->




			<!-- ABOUT-2
			============================================= -->
			<section id="about-2" class="about-section division">
				<div class="container">
					<div class="abox-2-holder">
						<div class="row">


							<!-- ABOUT BOX #1 -->
							<div class="col-md-12 col-lg-4">
								<div class="abox-2">

									<!-- Title -->
									<h5 class="h5-md steelblue-color">Opening Hours</h5>

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

								</div>
							</div>


							<!-- ABOUT BOX #2 -->
							<div class="col-md-6 col-lg-4">
								<div class="abox-2">

									<h5 class="h5-md steelblue-color">Doctors Timetable</h5>

									<!-- Text -->
									<p>An magnis nulla dolor at sapien augue iaculis purus tempor magna ipsum vitae and purus
									   primis ipsum magna ipsum at tempus feugiat dolor impedit felis magna ipsum primis cubilia
									   laoreet augue suscipit lectus mauris
									</p>

									<!-- Button -->
									<a href="{{ route('frontend.table') }}" class="btn btn-sm btn-blue blue-hover mt-25">View Timetable</a>

								</div>
							</div>


							<!-- ABOUT BOX #3 -->
							<div class="col-md-6 col-lg-4">
								<div class="abox-2">

									<!-- Title -->
									<h5 class="h5-md steelblue-color">Emergency Cases</h5>

									<!-- Text -->
									<h4 class="h4-sm emergency-call blue-color"><i class="fas fa-phone"></i> 1-800-123-4560</h4>
									<p class="mt-20">An magnis nulla dolor at sapien augue erat iaculis purus tempor magna ipsum vitae
									   a purus primis ipsum magna ipsum tempus feugiat dolor impedit felis magna
									</p>

								</div>
							</div>


						</div>    <!-- End row -->
					</div>
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-2 -->




			<!-- SERVICES-1
			============================================= -->
			<section id="services-1" class="wide-50 services-section division">
				<div class="container">
			 		<div class="row">


			 			<!-- SERVICE BOX #1 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-1 icon-md wow fadeInUp" data-wow-delay="0.4s">

								<!-- Icon -->
								<span class="flaticon-137-doctor blue-color"></span>

								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Qualified Doctors</h5>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
								   tempus feugiat dolor lacinia
								</p>

							</div>
						</div>


						<!-- SERVICE BOX #2 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-1 icon-md wow fadeInUp" data-wow-delay="0.6s">

								<!-- Icon -->
								<span class="flaticon-076-microscope blue-color"></span>

								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Modern Equipment</h5>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
								   tempus feugiat dolor lacinia
								</p>

							</div>
						</div>


						<!-- SERVICE BOX #3 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-1 icon-md wow fadeInUp" data-wow-delay="0.8s">

								<!-- Icon -->
								<span class="flaticon-008-ambulance-6 blue-color"></span>

								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Emergency Help</h5>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
								   tempus feugiat dolor lacinia
								</p>

							</div>
						</div>


						<!-- SERVICE BOX #4 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-1 icon-md wow fadeInUp" data-wow-delay="1s">

								<!-- Icon -->
								<span class="flaticon-083-stethoscope blue-color"></span>

								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Individual Approach</h5>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
								   tempus feugiat dolor lacinia
								</p>

							</div>
						</div>


			 		</div>	   <!-- End row -->
			 	</div>	   <!-- End container -->
			</section>	<!-- END SERVICES-1 -->




			<!-- ABOUT-5
			============================================= -->
			<section id="about-5" class="bg-lightgrey pt-100 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-lg-6">
							<div class="about-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="{{asset ('frontend/images/image-03.png') }}" alt="about-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->
					 			<span class="section-id blue-color">Welcome to MediLink</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Complete Medical Solutions in One Place</h3>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat
								   dolor lacinia cubilia curae integer congue leo metus, eu mollislorem primis in orci integer
								   metus mollis faucibus. An enim nullam tempor sapien gravida donec pretium and ipsum porta
								   justo integer at velna vitae auctor integer congue
								</p>

								<!-- Singnature -->
								<div class="singnature mt-35">

									<!-- Text -->
									<p class="p-small mb-15">Randon Pexon, Head of Clinic</p>

									<!-- Singnature Image -->
									<!-- Recommended sizes for Retina Ready displays is 400x68px; -->
									<img class="img-fluid" src="{{asset('frontend/images/signature.png')}}" width="200" height="34" alt="signature-image">

								</div>

							</div>
						</div>	<!-- END TEXT BLOCK -->


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-5 -->




			<!-- SERVICES-2
			============================================= -->
			<section id="services-2" class="wide-70 services-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">Choose Department</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>


			 		<div class="row">


			 			<!-- SERVICE BOX #1 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-2 wow fadeInUp" data-wow-delay="0.4s">
								<a href="department-single.html">

									<!-- Icon  -->
									<div class="sbox-2-icon icon-xl">
										<span class="flaticon-083-stethoscope"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-sm sbox-2-title steelblue-color">Pediatrics</h5>

								</a>
							</div>
						</div>


						<!-- SERVICE BOX #2 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-2 wow fadeInUp" data-wow-delay="0.6s">
								<a href="department-single.html">

									<!-- Icon  -->
									<div class="sbox-2-icon icon-xl">
										<span class="flaticon-047-head"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-sm sbox-2-title steelblue-color">Neurology</h5>

								</a>
							</div>
						</div>


						<!-- SERVICE BOX #3 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-2 wow fadeInUp" data-wow-delay="0.8s">
								<a href="department-single.html">

									<!-- Icon  -->
									<div class="sbox-2-icon icon-xl">
										<span class="flaticon-015-blood-donation-1"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-sm sbox-2-title steelblue-color">Haematology</h5>

								</a>
							</div>
						</div>


						<!-- SERVICE BOX #4 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-2 wow fadeInUp" data-wow-delay="1s">
								<a href="department-single.html">

									<!-- Icon  -->
									<div class="sbox-2-icon icon-xl">
										<span class="flaticon-048-lungs"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-sm sbox-2-title steelblue-color">X-Ray Diagnostic</h5>

								</a>
							</div>
						</div>


						<!-- SERVICE BOX #5 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-2 wow fadeInUp" data-wow-delay="0.4s">
								<a href="department-single.html">

									<!-- Icon  -->
									<div class="sbox-2-icon icon-xl">
										<span class="flaticon-060-cardiogram-4"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-sm sbox-2-title steelblue-color">Cardiology</h5>

								</a>
							</div>
						</div>


						<!-- SERVICE BOX #6 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-2 wow fadeInUp" data-wow-delay="0.6s">
								<a href="department-single.html">

									<!-- Icon  -->
									<div class="sbox-2-icon icon-xl">
										<span class="flaticon-031-scanner"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-sm sbox-2-title steelblue-color">MRI</h5>

								</a>
							</div>
						</div>


						<!-- SERVICE BOX #7 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-2 wow fadeInUp" data-wow-delay="0.8s">
								<a href="department-single.html">

									<!-- Icon  -->
									<div class="sbox-2-icon icon-xl">
										<span class="flaticon-076-microscope"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-sm sbox-2-title steelblue-color">Laboratory Services</h5>

								</a>
							</div>
						</div>


						<!-- SERVICE BOX #8 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-2 wow fadeInUp" data-wow-delay="1s">
								<a href="department-single.html">

									<!-- Icon  -->
									<div class="sbox-2-icon icon-xl">
										<span class="flaticon-068-ambulance-3"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-sm sbox-2-title steelblue-color">Emergency Help</h5>

								</a>
							</div>
						</div>


			 		</div>	   <!-- End row -->


			 	</div>	   <!-- End container -->
			</section>	<!-- END SERVICES-2 -->




			<!-- BANNER-2
			============================================= -->
			<section id="banner-2" class="pt-80 banner-section division">
				<div class="bg-scroll bg-inner bg-image division">
					<div class="container white-color">
						<div class="row d-flex align-items-center">


							<!-- CALL TO ACTION IMAGE -->
							<div class="col-lg-5">
								<div class="banner-2-img">
									<img class="img-fluid" src="{{asset ('frontend/images/image-05.png') }}" alt="banner-image">
								</div>
							</div>


							<!-- BANNER TEXT -->
							<div class="col-lg-6 offset-lg-1">
								<div class="banner-txt pc-30 wow fadeInUp" data-wow-delay="0.4s">

									<!-- Section ID -->
					 				<span class="section-id id-color">Qualified Doctors</span>

									<!-- Title  -->
									<h3 class="h3-lg">Group of Certified and Experienced Doctors</h3>

									<!-- Text -->
									<p>Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue
									   egestas suscipit lectus mauris lectus laoreet gestas neque undo luctus feugiat.
									   Aliquam a augue suscipit
								    </p>

								    <!-- Button -->
									<a href="all-doctors.html" class="btn btn-tra-white blue-hover">View Our Doctors</a>

								</div>
							</div>	<!-- END BANNER TEXT -->


						</div>	  <!-- End row -->
					</div>	   <!-- End container -->
				</div>		<!-- End Inner Background -->
			</section>	<!-- END BANNER-2 -->




			<!-- STATISTIC-3
			============================================= -->
			<div id="statistic-3" class="wide-60 statistic-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->
						<div class="col-lg-6">
							<div class="txt-block pc-30 mb-40 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->
					 			<span class="section-id blue-color">Best Practices</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Clinic with Innovative Approach to Treatment</h3>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugia
								   dolor lacinia cubilia curae integer congue leo metus, eu mollislorem primis in orci
								   integer metus mollis faucibus. An enim nullam tempor sapien gravida donec pretium
								</p>

								<!-- Statistic Holder -->
								<div class="statistic-holder">
									<div class="row">

										<!-- STATISTIC BLOCK #1 -->
										<div class="col-sm-4">
											<div class="statistic-block icon-sm">

												<!-- Icon  -->
												<span class="flaticon-062-cardiogram-3 blue-color"></span>

												<!-- Text -->
												<h5 class="statistic-number steelblue-color">9,<span class="count-element">632</span></h5>
												<p>Happy Patients</p>

											</div>
										</div>

										<!-- STATISTIC BLOCK #2 -->
										<div class="col-sm-4">
											<div class="statistic-block icon-sm">

												<!-- Icon  -->
												<span class="flaticon-137-doctor blue-color"></span>

												<!-- Text -->
												<h5 class="statistic-number steelblue-color"><span class="count-element">178</span></h5>
												<p>Qualified Doctors</p>

											</div>
										</div>

										<!-- STATISTIC BLOCK #3 -->
										<div class="col-sm-4">
											<div class="statistic-block icon-sm">

												<!-- Icon  -->
												<span class="flaticon-065-hospital-bed blue-color"></span>

												<!-- Text -->
												<h5 class="statistic-number steelblue-color"><span class="count-element">864</span></h5>
												<p>Clinic Rooms</p>

											</div>
										</div>

									</div>
								</div>	<!-- End Statistic Holder -->


							</div>
						</div>	<!-- END TEXT BLOCK -->


						<!-- STATISTIC IMAGE -->
						<div class="col-lg-6">
							<div class="statistic-img text-center mb-40 wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="{{asset ('frontend/images/image-04.png') }}" alt="statistic-image">
							</div>
						</div>


					</div>  <!-- End row -->
				</div>	 <!-- End container -->
			</div>	 <!-- END STATISTIC-3 -->




			<!-- GALLERY-1
			============================================= -->
			<div id="gallery-1" class="gallery-section division">


				<!-- SECTION TITLE -->
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">Total Health Care Solutions</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>
				</div>


				<!-- GALLERY IMAGES -->
				<div class="row gallery-items-list">


					<!-- IMAGE #1 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="{{asset('frontend/images/gallery/image-1.jpg')}}" alt="gallery-image">
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="{{asset('frontend/images/gallery/image-1.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #2 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="{{asset('frontend/images/gallery/image-2.jpg')}}" alt="gallery-image">
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="{{asset('frontend/images/gallery/image-2.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #3 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="{{asset('frontend/images/gallery/image-3.jpg')}}" alt="gallery-image">
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="{{asset('frontend/images/gallery/image-3.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #4 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="{{asset('frontend/images/gallery/image-4.jpg')}}" alt="gallery-image">
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="{{asset('frontend/images/gallery/image-4.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #5 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="{{asset('frontend/images/gallery/image-5.jpg')}}" alt="gallery-image">
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="{{asset('frontend/images/gallery/image-5.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #6 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="{{asset('frontend/images/gallery/image-6.jpg')}}" alt="gallery-image">
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="{{asset('frontend/images/gallery/image-6.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #7 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="{{asset('frontend/images/gallery/image-7.jpg')}}" alt="gallery-image">
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="{{asset('frontend/images/gallery/image-7.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #8 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="{{asset('frontend/images/gallery/image-8.jpg')}}" alt="gallery-image">
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="{{asset('frontend/images/gallery/image-8.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


				</div>  <!-- END GALLERY IMAGES -->


			</div>	 <!-- END GALLERY-1 -->




			<!-- TABS-1
			============================================= -->
			<section id="tabs-1" class="wide-100 tabs-section division">
				<div class="container">
				 	<div class="row">
				 		<div class="col-md-12">


				 			<!-- TABS NAVIGATION -->
							<div id="tabs-nav" class="list-group text-center">
							    <ul class="nav nav-pills" id="pills-tab" role="tablist">

							    	<!-- TAB-1 LINK -->
								  	<li class="nav-item icon-xs">
								    	<a class="nav-link active" id="tab1-list" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
								    		<span class="flaticon-083-stethoscope"></span> Pediatrics
								    	</a>
								  	</li>

								  	<!-- TAB-2 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab2-list" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
									       <span class="flaticon-005-blood-donation-3"></span> Hematology
									    </a>
									</li>

									<!-- TAB-3 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab3-list" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
									       <span class="flaticon-031-scanner"></span> MRI
									    </a>
									</li>

									<!-- TAB-4 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab4-list" data-toggle="pill" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
									       <span class="flaticon-048-lungs"></span> X-Ray Diagnostic
									    </a>
									</li>

								</ul>

							</div>	<!-- END TABS NAVIGATION -->


							<!-- TABS CONTENT -->
							<div class="tab-content" id="pills-tabContent">


								<!-- TAB-1 CONTENT -->
								<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-1 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="{{asset('frontend/images/pediatrics_700x700.jpg')}}" alt="tab-image">
											</div>
										</div>


										<!-- TAB-1 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Pediatrics</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
														</div>

														<!-- Option #2 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>
														</div>

														<!-- Option  #3 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>
														</div>

														<!-- Option #5 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>
														</div>

														<!-- Option #6 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="{{ route('frontend.service') }}" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>
										</div>	<!-- END TAB-1 TEXT -->


									</div>
								</div>	<!-- END TAB-1 CONTENT -->


								<!-- TAB-2 CONTENT -->
								<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-2 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-imgs">
												<img class="img-fluid" src="{{asset('frontend/images/hematology_700x700.jpg')}}" alt="tab-image">
											</div>
										</div>


										<!-- TAB-2 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Hematology</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
														</div>

														<!-- Option #2 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>
														</div>

														<!-- Option #3 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>
														</div>

														<!-- Option #5 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>
														</div>

														<!-- Option #6 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="{{ route('frontend.service') }}" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>
										</div>	<!-- END TAB-2 TEXT -->


									</div>
								</div>	<!-- END TAB-2 CONTENT -->


								<!-- TAB-3 CONTENT -->
								<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-3 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="{{asset('frontend/images/mri_700x700.jpg')}}" alt="tab-image">
											</div>
										</div>


										<!-- TAB-3 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">MRI Diagnostic</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
														</div>

														<!-- Option #2 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>
														</div>

														<!-- Option #3 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>
														</div>

														<!-- Option #5 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>
														</div>

														<!-- Option #6 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="{{ route('frontend.service') }}" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>
										</div>	<!-- END TAB-3 TEXT -->


									</div>
								</div>	<!-- END TAB-3 CONTENT -->


								<!-- TAB-4 CONTENT -->
								<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-4 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="{{asset('frontend/images/x-ray_700x700.jpg')}}" alt="tab-image">
											</div>
										</div>


										<!-- TAB-4 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">X-Ray Diagnostic</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
														</div>

														<!-- Option #2 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>
														</div>

														<!-- Option #3 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>
														</div>

														<!-- Option #5 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>
														</div>

														<!-- Option #6 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="{{ route('frontend.service') }}" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>
										</div>	<!-- END TAB-4 TEXT -->


									</div>
								</div>	<!-- END TAB-4 CONTENT -->


							</div>	<!-- END TABS CONTENT -->


			 			</div>
				 	</div>     <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END TABS-1 -->




			<!-- BANNER-7
			============================================= -->
			<section id="banner-7" class="bg-fixed banner-section division">
				<div class="container white-color">
			 		<div class="row d-flex align-items-center">


						<!-- BANNER TEXT -->
						<div class="col-md-8 col-lg-6 col-xl-5">
							<div class="banner-txt wow fadeInUp" data-wow-delay="0.4s">

								<!-- Title  -->
								<h2 class="h2-xs">Highest Quality Medical Treatment</h2>

							    <!-- Text -->
								<p>Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue
								   egestas suscipit lectus mauris a lectus laoreet gestas neque undo luctus feugiat augue
								   suscipit
							    </p>

								<!-- Button -->
								<a href="#" class="btn btn-blue tra-white-hover mt-20">Free Consultation</a>

							</div>
						</div>	<!-- END BANNER TEXT -->


					</div>      <!-- End row -->
				</div>	    <!-- End container -->
			</section>	<!-- END BANNER-7 -->




			<!-- DOCTORS-2
			============================================= -->
			<section id="doctors-2" class="wide-40 doctors-section division">
				<div class="container">


			 		<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">Our Medical Specialists</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>	 <!-- END SECTION TITLE -->


					<div class="row">


						<!-- DOCTOR #1 -->
						<div class="col-md-6 col-lg-4">
							<div class="doctor-1 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Doctor Photo -->
								<div class="hover-overlay text-center">

									<!-- Photo -->
									<img class="img-fluid" src="{{asset('frontend/images/doctor-1.jpg')}}" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Jonathan Barnes D.M.</h5>
									<span class="blue-color">Chief Medical Officer</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus
									</p>

								</div>

							</div>
						</div>	<!-- END DOCTOR #1 -->


						<!-- DOCTOR #2 -->
						<div class="col-md-6 col-lg-4">
							<div class="doctor-1 wow fadeInUp" data-wow-delay="0.6s">

								<!-- Doctor Photo -->
								<div class="hover-overlay text-center">

									<!-- Photo -->
									<img class="img-fluid" src="{{asset('frontend/images/doctor-2.jpg')}}" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-2.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Hannah Harper D.M.</h5>
									<span class="blue-color">Anesthesiologist</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus
									</p>

								</div>

							</div>
						</div>	<!-- END DOCTOR #2 -->


						<!-- DOCTOR #3 -->
						<div class="col-md-6 col-lg-4">
							<div class="doctor-1 wow fadeInUp" data-wow-delay="0.8s">

								<!-- Doctor Photo -->
								<div class="hover-overlay text-center">

									<!-- Photo -->
									<img class="img-fluid" src="{{asset('frontend/images/doctor-3.jpg')}}" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Matthew Anderson D.M.</h5>
									<span class="blue-color">Cardiology</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus
									</p>

								</div>

							</div>
						</div>	<!-- END DOCTOR #3 -->


					</div>	    <!-- End row -->


					<!-- ALL DOCTORS BUTTON -->
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="all-doctors mb-40  wow fadeInUp" data-wow-delay="1s">
								<a href="all-doctors.html" class="btn btn-blue blue-hover">Meet All Doctors</a>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</section>	<!-- END DOCTORS-2 -->




			<!-- INFO-9
			============================================= -->
			<section id="info-9" class="bg-blue info-section division">


				<!-- TEXT BLOCK -->
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-lg-6">
							<div class="info-9-table white-color wow fadeInUp" data-wow-delay="0.4s">

								<!-- Title -->
								<h4 class="h4-xs">Opening Hours:</h4>

								<!-- Text -->
								<p>Porta semper lacus cursus and feugiat primis ultrice ligula risus auctor tempus feugiat
								   and dolor lacinia cursus turpis dolores ut aliquam a quaerat sodales sapien pretium
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
									      	<td class="text-right">Closed</td>
									   	 </tr>
									  </tbody>
								</table>

								<!-- Title -->
								<h5 class="h5-sm">Need a personal health plan?</h5>

								<!-- Text -->
								<p>Porta semper lacus cursus, and feugiat primis ultrice ligula at risus auctor vehicula magna
								   luctus tempor quisque undo laoreet turpis urna augue, viverra a augue eget
								</p>

							</div>
						</div>
					</div>	  <!-- End row -->
				</div>	   <!-- END TEXT BLOCK -->


				<!-- INFO-9 IMAGE -->
				<div class="info-9-img bg-fixed text-center"></div>


			</section>	<!-- END INFO-9 -->




			<!-- PRICING-2
			============================================= -->
			<section id="pricing-2" class="wide-60 pricing-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">Best Quality Medical Treatment</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>


					<!-- PRICING PLANS -->
					<div class="row pricing-row">


						<!-- PRICING TABLE #1 -->
						<div class="col-lg-6">

							<!-- Plan Title  -->
							<h5 class="h5-md steelblue-color">Treatments</h5>

							<div class="pricing-table mb-40">
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
									     	<td>X-Ray</td>
									      	<td>From <span>$325.00</span></td>
									    </tr>
									    <tr>
									      	<th scope="row">2</th>
									      	<td>Magnetic Resonance Imaging</td>
									      	<td>From <span>$435.00</span></td>
									    </tr>
									    <tr>
									      	<th scope="row">3</th>
									      	<td>Computer Tomography</td>
									      	<td>From <span>$315.00</span></td>
									    </tr>
									    <tr>
									      	<th scope="row">4</th>
									      	<td>Laboratory Tests</td>
									      	<td>From <span>$90.00</span></td>
									    </tr>
									    <tr>
									      	<th scope="row">5</th>
									      	<td>Ultrasound Imaging</td>
									      	<td>From <span>$285.00</span></td>
									    </tr>
									    <tr class="last-tr">
									      	<th scope="row">6</th>
									      	<td>Pregnancy Care Service</td>
									      	<td>From <span>$530.00</span></td>
									    </tr>
									</tbody>
								</table>
							</div>
						</div>	<!-- END PRICING TABLE #1 -->


						<!-- PRICING TABLE #2 -->
						<div class="col-lg-6">

							<!-- Plan Title  -->
							<h5 class="h5-md steelblue-color">Investigations</h5>

							<div class="pricing-table mb-40">
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
									      	<td>From <span>$340.00</span></td>
									    </tr>
									    <tr>
									      	<th scope="row">2</th>
									      	<td>Parathyroid Scan</td>
									      	<td>From <span>$65.00</span></td>
									    </tr>
									    <tr>
									      	<th scope="row">3</th>
									      	<td>Echocardiography</td>
									      	<td>From <span>$175.00</span></td>
									    </tr>
									    <tr>
									      	<th scope="row">4</th>
									      	<td>Full Blood Picture</td>
									      	<td>From <span>$250.00</span></td>
									    </tr>
									    <tr>
									      	<th scope="row">5</th>
									      	<td>CT & Ultrasound Diagnostic</td>
									      	<td>From <span>$285.00</span></td>
									    </tr>
									    <tr class="last-tr">
									      	<th scope="row">6</th>
									      	<td>MRI & X-Ray</td>
									      	<td>From <span>$450.00</span></td>
									    </tr>
									</tbody>
								</table>
							</div>
						</div>	<!-- END PRICING TABLE #2 -->


					</div>	<!-- END PRICING TABLES -->


					<!-- ALL PRICING TABLES BUTTON -->
					<div class="row">
						<div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 text-center">
							<div class="all-pricing-btn mb-40">

								<!-- Price Notice -->
								<p><span>Note!</span> Feugiat eros, ac tincidunt ligula massa in faucibus orci luctus et
								   ultrices posuere cubilia and curae integer congue leo metus mollis primis and mauris
								   lectus laoreet tempor
								</p>

								<!-- Pricing Table Button  -->
								<a href="pricing.html" class="btn btn-blue blue-hover">View More Pricing</a>

							</div>
						</div>
					</div>


				</div>    <!-- End container -->
			</section>	<!-- END PRICING-2 -->




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
                                @foreach ($testimonials as $tt)

								<!-- TESTIMONIAL #1 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="{{asset('frontend/images/quote.png')}}" alt="quote-img"></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
                                            <img src="/testiimages/{{ $tt->custimg }}"
                                            alt="" />

										</div>
                                        <div class="testimonial-content">
                                            <p class="comments"> {{ $tt->custreview }}</p>
                                            <h4 class="client-name review-author">{{ $tt->custname }},{{ $tt->custdesignation }}</h4>

                                            <span class="client-company">{{ $tt->custcompany }}</span>

                                        </div>

									</div>
								</div>	<!-- END TESTIMONIAL #9 -->
                             @endforeach

							</div>
						</div>
					</div>	<!-- END TESTIMONIALS CONTENT -->


				</div>	   <!-- End container -->
			</section>	 <!-- END TESTIMONIALS-2 -->


			<!-- BANNER-3
			============================================= -->
			<section id="banner-3" class="pt-100 banner-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- BANNER TEXT -->
						<div class="col-lg-5">
							<div class="banner-txt wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->
					 			<span class="section-id blue-color">Why Choose MediLink</span>

								<!-- Title  -->
								<h2 class="h2-xl steelblue-color">High Quality Medical Care</h2>
								<h3 class="h3-md blue-color">+1-800-123-4560</h3>

							    <!-- Text -->
								<p>Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue
								   egestas suscipit lectus mauris a lectus laoreet gestas neque undo luctus feugiat augue
								   suscipit
							    </p>

								<!-- Button -->
								<a href="{{ route('frontend.appointment') }}" class="btn btn-blue blue-hover mt-15">Make An Apointment</a>

							</div>
						</div>	<!-- END BANNER TEXT -->


						<!-- BANNER IMAGE -->
						<div class="col-lg-7">
							<div class="banner-3-img">
								<img class="img-fluid" src="{{asset('frontend/images/image-06.png')}}" alt="banner-image">
							</div>
						</div>


					</div>	 <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END BANNER-3 -->





   </div>

@endsection
