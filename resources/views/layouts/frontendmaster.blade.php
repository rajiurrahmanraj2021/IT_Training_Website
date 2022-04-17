<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="google-site-verification" content="1WNyOqCo6wpjI9VbDxMbmph11LlGqAZk80EmzLLY2DE" />
	<link rel="icon" href="{{ asset('frontend_assets') }}/img/webimg/icon_logo.png">
	<title>@yield('web_title')</title>
	 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,800|Raleway:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Exo+2:400,500,600,700,800,900|Lato:400,700,900|Open+Sans:400,600,700,800|Oswald:400,500,600,700|Raleway:400,500,600,700,800,900|Roboto:400,500,700,900|Rubik:400,500,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet"> 

	<!--testing-->
	{{-- <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> --}}
	<!--testing-->
	{{-- <link href="https://fonts.googleapis.com/css?family=Kalam|Lobster&display=swap" rel="stylesheet"> --}}

	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/animate.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/slick.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/venobox.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/custom_responsive.css">
	<link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/responsive.css">

	<style>
        .humanitarian h3 i {
		color: #ca1616;
        margin-right: 2px;
        text-shadow: 10px 10px 15px black;
        font-size: 24px;
	    }
        .news_details{
                border: 1px solid #a59c9c;
                padding: 5px 10px;
                box-shadow: 3px 3px 3px #988c8c;
                height: 575px;
            }
			.modal-backdrop.show{
				opacity:0 !important;
			}
			.modal-backdrop{
				position: unset !important;
			}
			.modal-header{
				 display: unset;
			}
			.feedback_button{
				transition: all .4s ease;
			}
			.feedback_button:hover{
				background:green !important;
			}
			/* label{
				float:left;
			} */
			.active{
				color: #42B8D4 !important;
    		border-bottom: 2px solid #42B8D4 !important;
			}
			form .error {
	      color: #ff0000;
	      margin: 2px 0px 0px 0px;
	      background: url(http://127.0.0.1:8000/frontend_assets/img/download.svg);
	      background-repeat: no-repeat;
	      background-position: right;
	      background-size: 20px;
	      border: 1px solid red;
	  }
			form #name-error {
	    color: #ff0000;
	    margin: 2px 0px 0px 0px;
	    border: 0px !important;
	    box-shadow: none !important;
	    background:none;
	  }
			form #comment-error {
	    color: #ff0000;
	    margin: 2px 0px 0px 0px;
	    border: 0px !important;
	    box-shadow: none !important;
	    background:none;
	  }
    </style>
</head>

<body>

	<!--Header Part Start-->
	<section id="header_part">
		<div class="header wow fadeInUp fixedmenu" data-wow-duration="1.6s">
			<div class="container">
				@if(session('feedback_message'))
					<div class="alert alert-success alert-dismissible" role="alert" style="z-index:100;">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						 <strong>Good! </strong> {{ session('feedback_message') }}
					 </div>
			 @endif
				<nav class="navbar navbar-expand-lg p-0">
					<a class="navbar-brand" href="{{ url('/') }}">
<!--						<p class="web_logo"> Web Training Institute </p>-->
						<img src="{{ asset('frontend_assets') }}/img/webimg/ourlogo.png" alt="" class="img-fluid" style="width: 100px">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto myul">
                            <li class="nav-item dropdown">
                                <a class="nav-link @yield('home_active')" href="{{ url('/') }}" role="button" aria-haspopup="true" aria-expanded="false">
                                    হোম
                                </a>
                            </li>
							<li class="nav-item dropdown">
								<a class="nav-link @yield('about_active')" href="{{ url('about/us') }}"  role="button" aria-haspopup="true" aria-expanded="false">
									আমাদের সম্পর্কে
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link @yield('free_course_active')" href="{{ url('free_course') }}"  role="button" aria-haspopup="true" aria-expanded="false">
								   ফ্রি কোর্স
								</a>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link @yield('premium_course_active')" href="{{ url('premium_course') }}"  role="button" aria-haspopup="true" aria-expanded="false">
								   প্রিমিয়াম কোর্স
								</a>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link @yield('blog_active')" href="{{ url('blog') }}"  role="button" aria-haspopup="true" aria-expanded="false">
				                    ব্লগসমূহ
								</a>
							</li>
							@php
								$service_categories = App\Wts::all();
							@endphp
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle @yield('service_active')" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									সার্ভিস সমূহ
								</a>
								<div class="dropdown-menu wow fadeInLeft" aria-labelledby="navbarDropdown">
									@foreach( $service_categories as $service_category )
										<a class="dropdown-item" href="{{ url('category/wise/service') }}/{{ $service_category->id }}"> {{ $service_category->category_name }}
										</a>
									@endforeach
								</div>
							</li>

                            <li class="nav-item dropdown">
								<a class="nav-link @yield('question_active')" href="{{ url('question') }}"  role="button" aria-haspopup="true" aria-expanded="false">
				                    প্রশ্নউত্তর
								</a>
							</li>
							 <li class="nav-item dropdown">
								<a class="nav-link @yield('condition_active')" href="{{ url('condition') }}"  role="button" aria-haspopup="true" aria-expanded="false">
				                    শর্তাবলী
								</a>
							 </li>

							 <li class="nav-item dropdown">
								<a class="nav-link @yield('contact_active')" href="{{ url('contact') }}"  role="button" aria-haspopup="true" aria-expanded="false">
				                    যোগাযোগ
								</a>
							</li>
							<li>
								<button type="button" class="btn feedback_button" data-toggle="modal" data-target="#exampleModalLong" style="background-color: rgb(136, 1, 1);border-color: #4a0101; color:white">
									Student Feedback
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header" style="background: #04e6d1;">
												<h5 class="modal-title" id="exampleModalLongTitle" style="display:block">Add Your Feedback</h5><br>
												<p style="display:block">আমদের ফ্রী এবং প্রিমিয়াম ভিডিও কোর্সগুলো আপনাদের কাছে কেমন লাগছে সেই সম্পর্কে ফিডব্যাক দিন...</p>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body" style="background: #ffffff;color: black;font-weight: bold;">
												<form  action="{{ url('studentfeedback/insert') }}" method="post" enctype="multipart/form-data" name="student_feedback">
													@csrf
													<div class="form-group">
														<label for="">Your Name<span style="color:red">*</span></label>
														<input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Your Name" required>
															@error('name')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
															@enderror
														</div>

														<div class="form-group">
															<label for="">Your Picture</label>
															<input type="file" id="name-input" class="form-control" name="student_img">
														</div>

														<div class="form-group">
															<label for="">Your Feedback <span style="color:red">*</span></label>
															<textarea name="comment" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="ওয়েব ট্রেনিং ইনস্টিটিউট সম্পর্কে এখানে লেখুন" spellcheck="false" required></textarea>
														</div>

													</div>
													<div class="modal-footer" style="background: #d6d6d6;">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Submit</button>
													</div>
												</form>
											</div>
										</div>
									</div>

							</li>


						</ul>
					</div>
				</nav>
			</div>
		</div>
	</section>
	<!--Header Part End-->

    @yield('frontend_main')


		<!--footer start-->
	<section>
		<div class="footer" style="text-align: center;">
			<div class="container">
				<div class="footer_content">
					<div class="row">
						<div class="col-lg-4">
							<div class="footer_1">
								<img src="{{ asset('frontend_assets') }}/img/webimg/ourlogo.png" alt="" class="img-fluid mb-4" style="width: 120px;" class="logo-ff">
								<h2 style="    font-size: 20px;color: white;margin-top: -13px;margin-bottom: 20px;background: #3668cc;padding: 5px 0px;border-radius: 10px;letter-spacing: 5px;" class="l_title">ওয়েব ট্রেনিং ইনস্টিটিউট</h2>

								<p style="font-size: 16px;text-align: justify;line-height: 174%;" class="logo-p">ওয়েব ট্রেনিং ইনস্টিটিউট বাংলাদেশের অন্যতম একটি অনলাইন কোচিং সেন্টার। আমাদের অনলাইন এবং অফলাইন কোর্সগুলো দেখুন, ব্লগ পোস্ট গুলো পড়ুন এবং নিজেকে একজন সফল ওয়েব ডিজাইনার এবং ওয়েব ডেভেলপার হিসেবে গড়ে তুলুন। আন্তর্জাতিক মানের ওয়েব ডিজাইনার এবং ডেভেলপার তৈরি করা হচ্ছে আমাদের একমাত্র উদ্দেশ্য।</p>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="footer_2">
                                <h5 style="font-size: 22px;border-bottom: 1px solid #524b4b;padding-bottom: 8px;">ওয়েব ট্রেনিং লিংকস</h5>

								<ul style="display: inline-block">
                                    <li ><a href="https://www.facebook.com/webtraininginstitute360" target="_blank" rel="noopener" class="weblink">ফেইসবুক পেইজ</a></li>
                                    <li><a href="https://www.facebook.com/groups/websecrectgroup/" target="_blank" rel="noopener" class="weblink">ফেইসবুক গ্রুপ</a></li>
                                    <li><a href="https://www.youtube.com/webtraininginstitute" target="_blank" rel="noopener" class="weblink"> ইউটিউব চ্যানেল</a></li>
                                    <li><a href="{{ url('free_course') }}" target="_blank" rel="noopener" class="weblink"> ওয়েব ট্রেনিং ইনস্টিটিউট ফ্রী কোর্স </a></li>
                                    <li><a href="{{ url('premium_course') }}" target="_blank" rel="noopener" class="weblink"> ওয়েব ট্রেনিং ইনস্টিটিউট প্রিমিয়াম কোর্স </a></li>
                                    <li><a href="{{ url('blog') }}" target="_blank" rel="noopener" class="weblink"> ওয়েব ট্রেনিং ইনস্টিটিউট ব্লগ   </a></li>
                                    <li><a href="{{ url('category/wise/service/1') }}" target="_blank" rel="noopener" class="weblink"> ওয়েব ট্রেনিং ইনস্টিটিউট সার্ভিস </a></li>
                                    <li><a href="{{ url('contact') }}" target="_blank" rel="noopener" class="weblink"> যোগাযোগ </a></li>
                                </ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="footer_3">
                                <div class="my-widget-style">
                                    <h2 style="color: #42B8D4;border-bottom: 1px solid #484848;padding-bottom: 7px;font-size: 22px;margin-bottom: 16px;">যোগাযোগ করুন</h2>
                                    <div class="textwidget">
                                        <p style="color: white;text-align: justify;font-size: 16px; margin-bottom: 12px;"><i class="fa fa-map-marker" style="margin-right: 3px"> </i> মৌচাক অফিসঃ মাহেরা কটেজ (UCC গলি), ৮০ সিদ্ধেশ্বরী রোড, ঢাকা-১২১৭। (রস মিষ্টান্ন ভান্ডার এর পাশের গলি)</p>
                                        <p style="    color: white;text-align: justify;font-size: 16px; margin-bottom: 7px;"><i class="fa fa-phone-square" style="margin-right: 3px"> </i> 01868752464, 01318948051 </p>
                                        <p style="color: white;text-align: justify;font-size: 16px; margin-bottom: 0px;"><i class="fas fa-envelope" style="margin-right: 3px; margin-bottom: 17px;"> </i> info.webtraininginstitute@gmail.com</p>
                                        <p style="color: white;text-align: justify;font-size: 16px; margin-bottom: 0px"><i class="fa fa-globe" style="margin-right: 3px"></i> www.webtraininginstitute.com</p>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="footer_bottom">
								<p>Copyright <span>&copy;</span> 2019 Web Training Institute </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--footer End-->
	<!--Top Button Start-->
	<div class="top_btn">
		<i class="fas fa-arrow-up"></i>
	</div>
	<!--Top button End-->

	<script src="https://kit.fontawesome.com/c218529370.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/jquery-1.12.4.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/popper.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/slick.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/venobox.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/mixitup.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/waypoints.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/wow.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/jquery.counterup.min.js"></script>
	<script src="{{ asset('frontend_assets') }}/js/form-validation.js"></script>
	@yield('custom_js')
	<script src="{{ asset('frontend_assets') }}/js/custom.js"></script>

</body>

</html>
