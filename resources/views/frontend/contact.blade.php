@extends('frontend.layouts.app')
@section('title', 'Contact-us')
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
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color" style="text-align:center;">Contact Us</h4>

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BREADCRUMB -->






			<!-- CONTACTS-1
			============================================= -->
			<section id="contacts-1" class="wide-60 contacts-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">Ready to Transform Your Health?</h3>

							<!-- Text -->
							<p>Our dedicated team is prepared to guide you as you embark on a
                                journey toward exceptional healthcare solutions.


							</p>

						</div>
					</div>


					<div class="row">


		 				<!-- CONTACTS INFO -->
		 				<div class="col-md-5 col-lg-4">

		 					<!-- General Information -->
		 					<div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color">Get In Touch</h5>

								<p>Phone: +91 83300 69122</p>
								<p>Email: <a href="mailto:yourdomain@mail.com" class="blue-color">care@medilink360.com </a></p>
		 					</div>

		 					<!-- Patient Experience -->

		 					<!-- Working Hours -->
		 					<div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color">Discover Health Excellence
                                    in South India.
                                    </h5>

								<p>Our team is ready to assist you in
                                    embarking on your journey towards
                                    exceptional healthcare solutions.
                                    Contact us today and take the first
                                    step towards personalized, world-class
                                    medical care.
                                    </p>
		 					</div>

						</div>	<!-- END CONTACTS INFO -->


						<!-- CONTACT FORM -->
				 		<div class="col-md-7 col-lg-8">
				 			<div class="form-holder mb-40">
                                @include('admin.message')
				 				<form  action="{{ route('frontend.contact.store') }}" name="contactForm" class="row contact-form" method="post">
                                    @csrf
                                    <!-- Contact Form Input -->
                                    <div class="col-md-12">
                                        <input type="text" name="name" class="form-control name"
                                            placeholder="Enter Your Name*" required="" value="{{ old('name') }}"
                                            {{ $errors->any() ? 'autofocus' : '' }}>
                                        @error('name')
                                            <span class="text-danger text-sm">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" name="email" class="form-control email"
                                            placeholder="Enter Your Email*" required="" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger text-sm">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <input type="tel" name="phone" class="form-control phone"
                                            placeholder="Enter Your Phone Number*" required="" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger text-sm">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 input-message">
                                        <textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required="">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger text-sm">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
					                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15 form-btn">
					                	<button type="submit" class="btn btn-blue blue-hover submit">Send Your Message</button>
					                </div>

					                <!-- Contact Form Message -->
					                <div class="col-lg-12 contact-form-msg text-center">
					                	<div class="sending-msg"><span class="loading"></span></div>
					                </div>

				                </form>

				 			</div>
				 		</div> 	<!-- END CONTACT FORM -->

				 	</div>	<!-- End row -->


				</div>	   <!-- End container -->
			</section>	<!-- END CONTACTS-1 -->









@endsection
