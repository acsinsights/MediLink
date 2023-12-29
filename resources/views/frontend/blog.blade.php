@extends('frontend.layouts.app')
@section('title', 'Blogs')
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
								    	<li class="breadcrumb-item active" aria-current="page">Our Blogs</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color" style="text-align:center;">Our Blogs</h4>

							</div>
						</div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END BREADCRUMB -->




			<!-- BLOG PAGE CONTENT
			============================================= -->
			<div id="blog-page" class="wide-100 blog-page-section division">
				<div class="container">
				 	<div class="row">


				 		<!-- BLOG POSTS HOLDER -->
				 		<div class="col-lg-8">
				 			<div class="posts-holder pr-30">


				 				<!-- BLOG POST #1 -->
				 				<div class="blog-post">

						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										<img class="img-fluid" src="{{asset('frontend/images/blog/post-4-img.jpg')}}" alt="blog-post-image">
									</div>

					 				<!-- BLOG POST TITLE -->
									<div class="blog-post-txt">

										<!-- Post Title -->
										<h5 class="h5-xl steelblue-color"><a href="{{ route('frontend.singleblog') }}">5 Benefits Of Integrative Medicine</a></h5>

										<!-- Post Data -->
										<span>May 03, 2019 by <span>Dr.Jeremy Smith</span></span>

										<!-- Post Text -->
										<p>Donec sodales, nibh vel tristique aliquet, nisi libero suscipit diam, sed tempus ante
										   nulla ut purus. Donec dolor magna, suscipit in magna dignissim, porttitor hendrerit.
										   gravida ultrices felis ...
										</p>

									</div>

								</div>	<!-- END BLOG POST #1 -->


					 			<!-- BLOG POST #2 -->
					 			<div class="blog-post">

						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										<div class="video-preview text-center">

							 				<!-- Change the link HERE!!! -->
											<a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">

												<!-- Play Icon -->
												<div class="video-btn play-icon-blue">
													<div class="video-block-wrapper">
														<i class="fas fa-play"></i>
													</div>
												</div>

												<!-- Preview Image -->
												<img class="img-fluid" src="{{asset('frontend/images/blog/post-5-img.jpg')}}" alt="blog-post-image">

											</a>

										</div>
									</div>

									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Title -->
										<h5 class="h5-xl steelblue-color"><a href="{{ route('frontend.singleblog') }}">How Weather Impacts Your Health</a></h5>

										<!-- Post Data -->
										<span>Apr 17, 2019 by <span>Dr.Megan Coleman</span></span>

										<!-- Post Text -->
										<p>Donec dolor magna, suscipit in magna dignissim, porttitor hendrerit diam. Nunc
										   gravida ultrices felis eget faucibus. Praesent aliquet lorem purus, quis mollis
										   nisi laoreet vitae. Mauris consequat tortor. Duis fermentum a massa in convallis.
										   Quisque eu ultrices enim, et interdum augue...
										</p>

									</div>

								</div>	<!-- END BLOG POST #2 -->


								<!-- BLOG POST #3 -->
								<div class="blog-post">

						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										<img class="img-fluid" src="{{asset('frontend/images/blog/post-6-img.jpg')}}" alt="blog-post-image">
									</div>

					 				<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Title -->
										<h5 class="h5-xl steelblue-color"><a href="{{ route('frontend.singleblog') }}">Your Health Is In Your Hands</a></h5>

										<!-- Post Data -->
										<span>Apr 28, 2019 by <span>Dr.Jonathan Barnes</span></span>

										<!-- Post Text -->
										<p>Suscipit in magna dignissim, porttitor hendrerit diam. Nunc gravida ultrices felis
										   eget faucibus. Praesent aliquet lorem purus, quis mollis nisi laoreet vitae. Mauris
										   nec consequat tortor. Duis and massa in convallis quisque eu  interdum augue
										   faucibus orci luctus et ultrices posuere ...
										</p>

									</div>

								</div>	<!-- END BLOG POST #3 -->


								<!-- BLOG POST #4 -->
								<div class="blog-post">

						 			<!-- BLOG YOUTUBE LINK -->
						 			<div class="blog-post-img">
						 				<div class="embed-responsive embed-responsive-16by9">
						 					<iframe width="730" height="450" src="https://www.youtube.com/embed/7e90gBu4pas" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
						 				</div>
									</div>

									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Title -->
										<h5 class="h5-xl steelblue-color"><a href="{{ route('frontend.singleblog') }}">20 Years of Caring. 15 Fact About MediLink,
										   Melbourne's First Choice for Healthcare</a>
										</h5>

										<!-- Post Data -->
										<span>Apr 17, 2019 by <span>Dr.Jonathan Barnes</span></span>

										<!-- Post Text -->
										<p>Donec dolor magna, suscipit in magna dignissim, porttitor hendrerit diam. Nunc
										   gravida ultrices felis eget faucibus. Praesent aliquet lorem purus, quis mollis
										   nisi laoreet vitae. Mauris consequat tortor. Duis fermentum a massa in convallis.
										   Quisque eu ultrices enim, et interdum augue...
										</p>

									</div>

								</div>	<!-- END BLOG POST #4 -->


								<!-- BLOG PAGE PAGINATION -->
								<div class="blog-page-pagination b-top">
									<nav aria-label="Page navigation">
										<ul class="pagination justify-content-center primary-theme">
	    									<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></a></li>
										    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
										    <li class="page-item"><a class="page-link" href="#">2</a> </li>
										    <li class="page-item"><a class="page-link" href="#">3</a></li>
										    <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
	 									</ul>
	 								</nav>
								</div>



				 			</div>
				 		</div>	 <!-- END BLOG POSTS HOLDER -->



				 		<!-- SIDEBAR -->
						<aside id="sidebar" class="col-lg-4">


							<!-- SEARCH FIELD -->
							<div id="search-field" class="sidebar-div mb-50">
								<div class="input-group mb-3">
								  	<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
								 	<div class="input-group-append">
								    	<button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
								 	</div>
								</div>
							</div>


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


							<!-- BLOG CATEGORIES -->
							<div class="blog-categories sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Categories</h5>

								<ul class="blog-category-list clearfix">
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Elderly Care</a> <span>(5)</span></li>
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Lifestyle</a> <span>(13)</span></li>
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Medical</a> <span>(6)</span></li>
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Treatment </a> <span>(8)</span></li>
									<li><a href="#"><i class="fas fa-angle-double-right blue-color"></i> Pharma</a> <span>(12)</span></li>
								</ul>

							</div>


							<!-- POPULAR POSTS -->
							<div class="popular-posts sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Popular Posts</h5>

								<ul class="popular-posts">

									<!-- Popular post #1 -->
									<li class="clearfix d-flex align-items-center">

										<!-- Image -->
										<img class="img-fluid" src="{{asset('frontend/images/blog/latest-post-1.jpg')}}" alt="blog-post-preview">

										<!-- Text -->
										<div class="post-summary">
											<a href="{{ route('frontend.singleblog') }}">Etiam sapien accumsan molestie ante empor ...</a>
											<p>43 Comments</p>
										</div>

									</li>

									<!-- Popular post #2 -->
									<li class="clearfix d-flex align-items-center">

										<!-- Image -->
										<img class="img-fluid" src="{{asset('frontend/images/blog/latest-post-2.jpg')}}" alt="blog-post-preview">

										<!-- Text -->
										<div class="post-summary">
											<a href="{{ route('frontend.singleblog') }}">Blandit tempor sapien ipsum, porta justo ...</a>
											<p>38 Comments</p>
										</div>

									</li>

									<!-- Popular post #3 -->
									<li class="clearfix d-flex align-items-center">

										<!-- Image -->
										<img class="img-fluid" src="{{asset('frontend/images/blog/latest-post-3.jpg')}}" alt="blog-post-preview">

										<!-- Text -->
										<div class="post-summary">
											<a href="{{ route('frontend.singleblog') }}">Cursus risus laoreet turpis auctor varius ...</a>
											<p>29 Comments</p>
										</div>

									</li>
								</ul>

							</div>


							<!-- TAGS CLOUD -->
							<div class="tags-cloud sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Tags Cloud</h5>

								<span class="badge"><a href="#">Effective Treatment</a></span>
								<span class="badge"><a href="#">Molecular Biology</a></span>
								<span class="badge"><a href="#">Diagnostic</a></span>
								<span class="badge"><a href="#">Pediatrics</a></span>
								<span class="badge"><a href="#">Lifestyle</a></span>
								<span class="badge"><a href="#">Pharma</a></span>
								<span class="badge"><a href="#">Medicine</a></span>
								<span class="badge"><a href="#">Research</a></span>
							</div>


							<!-- SIDEBAR TIMETABLE -->
							<div class="sidebar-timetable sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-md mb-20 steelblue-color">Doctors Timetable</h5>

								<!-- Text -->
								<p class="p-sm">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor at
								   tempus feugiat dolor lacinia cursus nulla vitae massa
								</p>

								<!-- Button -->
								<a href="{{ route('frontend.table') }}" class="btn btn-blue blue-hover mt-10">View Timetable</a>

							</div>	<!-- END SIDEBAR TIMETABLE -->


							<!-- IMAGE WIDGET -->
							<div class="image-widget sidebar-div">
								<a href="#">
									<img class="img-fluid" src="{{asset('frontend/images/blog/image-widget.jpg')}}" alt="image-widget">
								</a>
							</div>


						</aside>	<!-- END SIDEBAR -->


				 	</div>	<!-- End row -->
				 </div>	 <!-- End container -->
			</div>	<!-- END BLOG PAGE CONTENT -->



@endsection

