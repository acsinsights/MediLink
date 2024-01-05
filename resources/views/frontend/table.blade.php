@extends('frontend.layouts.app')
@section('title', 'table')
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
								    	<li class="breadcrumb-item active" aria-current="page">Timetable</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color" style="text-align:center;">Timetable</h4>

							</div>
						</div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END BREADCRUMB -->

			<!-- SCHEDULE TIMETABLE
			============================================= -->
			<div id="timetable-page" class="timetable-section division">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- TIMETABLE	-->
							<div class="cd-schedule loading">

								<!-- Timeline -->
								<div class="timeline">
									<ul>
										<li><span>09:00</span></li>
										<li><span>09:30</span></li>
										<li><span>10:00</span></li>
										<li><span>10:30</span></li>
										<li><span>11:00</span></li>
										<li><span>11:30</span></li>
										<li><span>12:00</span></li>
										<li><span>12:30</span></li>
										<li><span>13:00</span></li>
										<li><span>13:30</span></li>
										<li><span>14:00</span></li>
										<li><span>14:30</span></li>
										<li><span>15:00</span></li>
										<li><span>15:30</span></li>
										<li><span>16:00</span></li>
										<li><span>16:30</span></li>
										<li><span>17:00</span></li>
										<li><span>17:30</span></li>
										<li><span>18:00</span></li>
										<li><span>18:30</span></li>
										<li><span>19:00</span></li>
									</ul>
								</div> <!-- End Timeline -->
								<!-- Events -->
								<div class="events">
									<ul>
										<!-- MONDAY -->
										<li class="events-group">
											<div class="top-info"><span>Monday</span></div>

											<ul>
												<li class="single-event" data-start="09:00" data-end="11:00" data-event="event-1">
													<div class="event-info">
														<em class="event-name">Primacy Help Care</em>
														<em class="event-name event-doctor">Dr. Hannah Harper</em>
														<em class="event-name event-room">Rm.13 Hall A</em>
													</div>
												</li>

												<li class="single-event" data-start="11:00" data-end="13:00" data-event="event-2">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.27 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="13:00" data-end="15:00" data-event="event-3">
													<div class="event-info">
														<em class="event-name">Haematology</em>
														<em class="event-name event-doctor">Dr. M.Anderson</em>
														<em class="event-name event-room">Rm.46 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="15:00" data-end="17:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. M.Coleman</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="17:00" data-end="19:00" data-event="event-6">
													<div class="event-info">
														<em class="event-name">Traumatology</em>
														<em class="event-name event-doctor">Dr. R.Peterson</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>
											</ul>

										</li>	<!-- END MONDAY -->
										<!-- TUESDAY -->
										<li class="events-group">
											<div class="top-info"><span>Tuesday</span></div>

											<ul>
												<li class="single-event" data-start="10:00" data-end="12:00" data-event="event-7">
													<div class="event-info">
														<em class="event-name">Pulmonary</em>
														<em class="event-name event-doctor">Dr. R.Peterson</em>
														<em class="event-name event-room">Rm.13 Hall A</em>
													</div>
												</li>

												<li class="single-event" data-start="13:00" data-end="15:00" data-event="event-5">
													<div class="event-info">
														<em class="event-name">Laryngology</em>
														<em class="event-name event-doctor">Dr. J.Elledge</em>
														<em class="event-name event-room">Rm.27 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="15:00" data-end="17:00" data-event="event-1">
													<div class="event-info">
														<em class="event-name">Primacy Help Care</em>
														<em class="event-name event-doctor">Dr. Hannah Harper</em>
														<em class="event-name event-room">Rm.46 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="17:00" data-end="19:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. .Anderson</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="17:00" data-end="19:00" data-event="event-8">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>
											</ul>

										</li>	<!-- END TUESDAY -->
										<!-- WEDNESDAY -->
										<li class="events-group">
											<div class="top-info"><span>Wednesday</span></div>

											<ul>
												<li class="single-event" data-start="9:00" data-end="11:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. .Anderson</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="11:00" data-end="13:00" data-event="event-8">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="14:00" data-end="16:00" data-event="event-3">
													<div class="event-info">
														<em class="event-name">Primacy Help Care</em>
														<em class="event-name event-doctor">Dr. Hannah Harper</em>
														<em class="event-name event-room">Rm.46 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="16:00" data-end="18:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. .Anderson</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

											</ul>

										</li>	<!-- END WEDNESDAY -->
										<!-- THURSDAY -->
										<li class="events-group">
											<div class="top-info"><span>Thursday</span></div>

											<ul>
												<li class="single-event" data-start="9:00" data-end="12:00" data-event="event-1">
													<div class="event-info">
														<em class="event-name">Pulmonary</em>
														<em class="event-name event-doctor">Dr. R.Peterson</em>
														<em class="event-name event-room">Rm.13 Hall A</em>
													</div>
												</li>

												<li class="single-event" data-start="12:00" data-end="14:00" data-event="event-2">
													<div class="event-info">
														<em class="event-name">Laryngology</em>
														<em class="event-name event-doctor">Dr. J.Elledge</em>
														<em class="event-name event-room">Rm.27 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="14:00" data-end="16:00" data-event="event-8">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="16:00" data-end="19:00" data-event="event-6">
													<div class="event-info">
														<em class="event-name">Traumatology</em>
														<em class="event-name event-doctor">Dr. R.Peterson</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>

											</ul>
										</li>	<!-- END THURSDAY -->
										<!-- FRIDAY -->
										<li class="events-group">
											<div class="top-info"><span>Friday</span></div>

											<ul>
												<li class="single-event" data-start="9:00" data-end="11:00" data-event="event-8">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="11:00" data-end="13:00" data-event="event-2">
													<div class="event-info">
														<em class="event-name">Laryngology</em>
														<em class="event-name event-doctor">Dr. J.Elledge</em>
														<em class="event-name event-room">Rm.27 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="13:00" data-end="15:00" data-event="event-3">
													<div class="event-info">
														<em class="event-name">Primacy Help Care</em>
														<em class="event-name event-doctor">Dr. Hannah Harper</em>
														<em class="event-name event-room">Rm.46 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="15:00" data-end="17:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. .Anderson</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="17:00" data-end="19:00" data-event="event-5">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>
											</ul>
										</li>	<!-- END FRIDAY -->
									</ul>
								</div>	<!-- End Events -->
							</div>	<!-- END TIMETABLE	-->
						</div>
					</div>     <!-- End row -->
				</div>	    <!-- End container -->
			</div>	 <!-- END SCHEDULE TIMETABLE -->
@endsection
