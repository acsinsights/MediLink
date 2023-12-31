@extends('frontend.layouts.app')
@section('title', 'Treatments')
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
								    	<li class="breadcrumb-item active" aria-current="page">Our Treatments</li>
								  	</ol>
								</nav>
								<!-- Title -->
								<h4 class="h4-sm steelblue-color" style="text-align:center;">Our Treatments</h4>
							</div>
						</div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END BREADCRUMB -->

			<!-- GALLERY-3
			============================================= -->
			<div id="gallery-3" class="gallery-section division">
				<div class="container">
					<!-- GALLERY FILTERING BUTTONS -->
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="gallery-filter mb-60">
			                    <button data-filter="*" class="is-checked">All</button>
			                    <button data-filter=".dental">Dental Care</button>
			                    <button data-filter=".pediatric">Pediatric</button>
			                    <button data-filter=".cardiology">Cardiology</button>
			                </div>
						</div>
					</div>
					<!-- GALLERIMAGES HOLDER -->
					<div class="row">
						<div class="col-md-12 gallery-items-list">
							<div class="masonry-wrap grid-loaded">
								<!-- IMAGE #1 -->
							  	<div class="gallery-item dental">
									<div class="hover-overlay">
										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-9.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>
										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-9.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #1 -->
								<!-- IMAGE #2 -->
							  	<div class="gallery-item pediatric">
									<div class="hover-overlay">
									<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-10.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>
										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-10.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #2 -->
								<!-- IMAGE #3 -->
							  	<div class="gallery-item cardiology">
									<div class="hover-overlay">
										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-11.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>
										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-11.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #3 -->
								<!-- IMAGE #4 -->
							  	<div class="gallery-item pediatric">
							  		<div class="hover-overlay">
									<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-12.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>
										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-12.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #4 -->
								<!-- IMAGE #5 -->
							  	<div class="gallery-item dental">
							  		<div class="hover-overlay">
										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-13.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>
										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-13.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #5 -->
								<!-- IMAGE #6 -->
							  	<div class="gallery-item cardiology">
							  		<div class="hover-overlay">
										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-14.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>
										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-14.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #6 -->
								<!-- IMAGE #7 -->
							  	<div class="gallery-item pediatric">
							  		<div class="hover-overlay">
										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-15.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>

										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-15.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #7 -->
								<!-- IMAGE #8 -->
							  	<div class="gallery-item cardiology">
							  		<div class="hover-overlay">
										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-16.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>
										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-16.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #8 -->
								<!-- IMAGE #9 -->
							  	<div class="gallery-item dental">
							  		<div class="hover-overlay">

										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-17.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>

										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-17.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #9 -->
								<!-- IMAGE #10 -->
							  	<div class="gallery-item pediatric">
							  		<div class="hover-overlay">

										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-18.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>
										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-18.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #10 -->
							<!-- IMAGE #11 -->
							  	<div class="gallery-item cardiology">
							  		<div class="hover-overlay">

										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-19.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>

										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-19.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>

									</div>
								</div>	<!-- END IMAGE #11 -->
								<!-- IMAGE #12 -->
							  	<div class="gallery-item dental">
							  		<div class="hover-overlay">
										<!-- Gallery Image -->
										<img class="img-fluid" src="{{asset('frontend/images/gallery/image-20.jpg')}}" alt="galley-image">
										<div class="item-overlay"></div>
										<!-- Image Zoom -->
										<div class="image-zoom">
											<a class="image-link" href="{{asset('frontend/images/gallery/image-20.jpg')}}" title=""><i class="fas fa-search-plus"></i></a>
										</div>
									</div>
								</div>	<!-- END IMAGE #12 -->
							</div>
						</div>
					</div>	  <!-- END GALLERYHOLDER -->
			 	</div>	   <!-- End container -->
			</div>	<!-- END GALLERY-3 -->
@endsection
