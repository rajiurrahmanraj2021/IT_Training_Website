@extends('layouts.frontendmaster')

@section('frontend_main')
<style>

		.latest_banner{
			background-image: url({{ asset('frontend_assets/img/webimg/19.jpg') }});
			background-position: top left;
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 300px;
			position: relative;
			z-index: 1;
		}
		.latest_banner:before{
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.8);
			z-index: -1;
		}
		.latest_banner .latest_banner_text{
			text-align: center;
			padding-top: 160px;
		}
		.latest_banner_text h2{
			font-family: 'Raleway', sans-serif;
			font-weight: 800;
			color: white;
			font-size: 45px;
			text-shadow: 10px 10px 15px black;
		}
		.latest_banner_text h5{
			font-family: 'Lato', sans-serif;
			font-weight: 500;
			color: #42B8D4;
			font-size: 20px;
		}
		.l_news_content{
			padding-top: 20px;
		}
		.l_news{
			margin-bottom: 15px;
		}
		.l_img img {
            margin-bottom: 10px;
            height: 230px;
            width: 100%;
        }
		.l_heading span{
			font-family: 'Lato', sans-serif;
			font-weight: 500;
			font-size: 16px;
			color: #42B8D4;
			font-style: italic;
		}
		.l_heading p{
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			color: #1e1e1e;
			font-size: 19px;
			margin-bottom: 15px;
		}
		.l_heading a{
			display: inline-block;
			padding: 5px 10px;
			background-color: #42B8D4;
			font-family: 'Raleway', sans-serif;
			font-weight: 500;
			font-size: 16px;
			color: #1e1e1e;
			border-radius: 10px;
			transition: all .2s linear;
			border: 2px solid transparent;
		}
		.l_heading a:hover {
            background: transparent;
            border: 2px solid #42B8D4;
            color: black !important;
        }


		/*publication category start*/
		.pub_category{
			padding-bottom: 40px;
			padding-top: 60px
		}
		.category_details{
			text-align: center;
			transition: all .2s linear;
			border-radius: 5px;
			background: #42B8D4;
			box-shadow: 15px 15px 15px gray;

		}
		.category_details a{
			display: block;
			padding-top: 20px;
			padding-bottom: 20px;
		}
		.category_details i{
			font-size: 30px;
			margin-bottom: 10px;
			transition: all .3s linear;
		}
		.category_details h5{
			font-family: 'Oswald', sans-serif;
			font-size: 20px;
			font-weight: 600;
			color: #2d3436;
		}
		.category_details:hover{
			box-shadow: none;
		}
		.category_details:hover i{
			color: whitesmoke
		}
    .post-div{
                margin-top: 6px;
                background: #353535;
                color: white;
        }
        .post-div p{
               font-size: 16px;
               letter-spacing: 3px;
               font-style: italic;
               padding: 1px 0px 3px 0px;
        }
		/*publication category end*/

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
	form #phone-error {
			color: #ff0000;
			margin: 2px 0px 0px 0px;
			border: 0px !important;
			box-shadow: none !important;
			background:none;
		}
	form #message-error {
			color: #ff0000;
			margin: 2px 0px 0px 0px;
			border: 0px !important;
			box-shadow: none !important;
			background:none;
		}
	form #question-error {
			color: #ff0000;
			margin: 2px 0px 0px 0px;
			border: 0px !important;
			box-shadow: none !important;
			background:none;
		}

	</style>
<!--latest Banner start-->
<section>
  <div class="latest_banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="latest_banner_text">
            <h2> প্রিমিয়াম কোর্স ডিটেইলস </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


	<!--about part start-->
	<section>
	    <div class="gallery">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="section_header">
												@if(session('success_message'))
													<div class="alert alert-dismissible" role="alert" style="color: #000000;background-color: #06e0c8;border-color: #09adbf;font-size: 18px; margin-top:15px">
														 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														 <strong>Thanks! </strong> {{ session('success_message') }} <br>
													 </div>
											 @endif
	                        <h2 class="text-center" style="border-bottom: 1px solid #ddd; padding: 0px 0px 13px 0px;"><span>ওয়েব ডিজাইন সাকসেস </span>কোর্সটি শিখে আনলাইন এবং অফলাইনে নিজের জায়গাটা গড়ে তুলুন <span></span></h2>
	                    </div>
	                </div>
	            </div>

	            <div class="gallery_content">
	                <div class="row">
	                    <div class="col-lg-12">
	                        <div class="l_news_content">
	                            <div class="row">
	                                <div class="col-lg-11 mb-4 m-auto">
                                    <div class="details_heading" style="margin-bottom: 20px">

                                            <img src="{{ asset('frontend_assets') }}/img/premium_webdesign.png" alt="not found" class="img-fluid" style="border-radius: 5%">
                                            <div class="post-div">
                                               <p id="serial_p"><span style="font-weight: bold">january 1  2020,</span> <span>By-</span><span style="color:orange"> Rajiur Rahman</span><span > <a href="" style="color: #05ffff; text-decoration: underline"></a> </span></p>
                                            </div>
                                        </div>
	                                    <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body">
	                                            <p style="line-height: 170%;font-size: 17px;margin-bottom: 30px; font-weight: bold" id="serial_p">
	                                                ইন্টারনেটে আয় করার জন্য প্রথমেই আপনাকে কাজ শিখতে হবে এবং এর পরে সেই কাজের উপরে স্ট্র্যাটেজি অবলম্বন করে কাজ নিয়ে আসতে হবে। এক কথায় এটাই ফ্রীল্যান্সিং এর সিস্টেম। তবে নতুনদের অনেকেই সিদ্ধান্তহীনতায় থাকি যে কোনটা দিয়ে শুরু করা যায়, কোনটা শিখব, কিভাবে শিখব এইসব অনেক প্রশ্ন।
	                                            </p>

	                                            <h3 style="color: #ff00bf; margin-bottom: 15px;" class="serial">চলুন আরও একটু ভালো করে জেনে নেওয়া যাক,</h3>
	                                            <p style="line-height: 170%;font-size: 17px;margin-bottom: 15px; text-align: justify" id="serial_p">ইন্টারনেটে যে কোন ব্যবসা করতে গেলে সর্বপ্রথম যেটির প্রয়োজন হয় সেটি হচ্ছে ওয়েবসাইট। আর দিন দিন প্রতিটি ব্যবসাই ইন্টারনেটমুখী হয়ে উঠছে। আবার এই ওয়েবসাইট গুলোর মধ্যে প্রায় ৭০% ওয়েবসাইট ই প্রোফেশনাল ওয়েব ডিজাইনার দিয়ে তৈরি করানো হয়ে থাকে। তার মানে একটু ভাবুন তো ইন্টারনেটে যে ব্যবসাই আসুক না কেন যেহেতু ওয়েবসাইট তৈরি করা লাগবে, এজন্য একজন প্রোফেশনাল ওয়েব ডিজাইনারের প্রয়োজন হবেই হবে। এতে করে খুব সহজে বোঝা যাচ্ছে ওয়েব ডিজাইন কাজের ব্যপক চাহিদা রয়েছে। আরো আশার কথা হচ্ছে, যে হারে নতুন নতুন ব্যবসা অনলাইনে যুক্ত হচ্ছে ওই হারে ওয়েব ডিজাইনার তৈরি হচ্ছে না, এতে করে মার্কেটে প্রতিনিয়ত নতুন নতুন ওয়েব ডিজাইনার এবং ডেভেলপারের ঘাটতি বেড়েই চলেছে। আর যেহেতু এই কাজটির চাহিদাও আছে আবার কম্পিটিশন কিছুটা তুলনামূলক কম এজন্য আমার সাজেশন হচ্ছে- এটাই শিখুন। এটি-ই হবে নতুনদের জন্য একটা চমৎকার স্টার্টিং পয়েন্ট।</p>
	                                            <p style="line-height: 170%;font-size: 17px;margin-bottom: 15px; text-align: justify" id="serial_p">এই ওয়েবসাইট তৈরির দুটি ধাপ হচ্ছে ওয়েবসাইট ডিজাইন করা এবং ওয়েবসাইট ডেভেলপমেন্ট করা। আর যারা এই কাজগুলো করে থাকে তাদেরকে ওয়েব ডিজাইনার এবং ডেভেলপার বলা হয়। একই সাথে একজন ব্যক্তি চাইলে শুধু ডিজাইনার বা ডেভেলপার অথবা দুটোই একসাথে হতে পারে।</p>

	                                            <p style="line-height: 170%;font-size: 17px;margin-bottom: 15px; text-align: justify" id="serial_p">তবে ভালো মানের একজন ওয়েব ডেভেলপের হতে চাইলে, আগে আপনাকে অবশ্যই প্রোফেসনাল একজন ওয়েব ডিজাইনার হতে হবে। এই বিষয়ে কোন সন্দেহ নেই। তাই আমরা আগে আপনাদের জন্য প্রোফেসনাল মানের ওয়েব ডিজাইন সাকসেস কোর্সটি নিয়ে এসেছি, এরপরে যদি আপনাদের সবার আমাদের এই কোর্সটি ভালো লেগে থাকে, যদি মনে হয়ে থাকে আমাদের কাছ থেকে আপনারা ভালো কিছু শিকতে পারছেন, এবং ভবিষ্যতে আরও ভালো কিছু শিকতে এবং জানতে পারবেন,</p>

	                                            <p style="text-align: justify"> <span style="font-weight: bold">শুধুমাত্র তাহলেই আমরা</span> ওয়েব ডেভেলপমেন্ট কোর্সটি আপনাদের জন্য নিয়ে আসবো। যেখানে আমরা প্রোফেসনালভাবে পিএইচপি এবং লারাভেল ফ্রেমওয়ার্ক শিকবো।</p>
	                                            <!-- Grid row -->
	                                            <div class="row accordion-gradient-bcg d-flex justify-content-center">

	                                                <!-- Grid column -->

	                                                <!--Accordion wrapper-->
	                                                <div class="accordion1 md-accordion1 accordion-1" id="accordionEx1" role="tablist" aria-multiselectable="true" style="width: 100%">

	                                                    <!-- Accordion card -->
	                                                    <div class="card" style="margin-top: 30px;">

	                                                        <!-- Card header -->
	                                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1" style="background: #1362c2; cursor: pointer" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse1" aria-expanded="true" aria-controls="collapse">
	                                                            <a>

	                                                                <span style="float: left;font-size: 20px;font-weight: bold;color: #fff;" id="prosnoa">দেখে নিন কোর্সের বিস্তারিত কোর্স কারিকুলাম</span>
	                                                                <span style="float: right; color: #fff !important"><i class="fas fa-angle-down rotate-icon"></i></span>
	                                                            </a>
	                                                        </div>

	                                                        <!-- Card body -->
	                                                        <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx1">
	                                                            <div class="card-body mb-1 rgba-grey-light white-text">
	                                                                <h3 class="text-left text-success mt-3">ওয়েব ডিজাইন পার্টে যা যা থাকছেঃ</h3>
	                                                                <ul style="text-align: left;list-style: decimal;margin-left: 43px;margin-top: 15px;font-size: 20px;font-weight: bold;}">
	                                                                    <li style="margin-bottom: 10px"> HTML5 <span style="color:brown; font-size: 16px">[Basic To Advance]</span> </li>
	                                                                    <li style="margin-bottom: 10px"> CSS3 <span style="color:brown; font-size: 16px">[Basic To Advance]</span></li>
	                                                                    <li style="margin-bottom: 10px">Full Website Design <span style="color: red;font-size: 20px;font-weight: bold;">Live</span> <span style="color:brown; font-size: 16px">[using only HTML5 & CSS3]</span></li>
	                                                                    <li style="margin-bottom: 10px"> JPG TO HTML5 & CSS3 CONVERT <span style="color:brown; font-size: 16px">[Full Advance Tutorial]</span></li>
	                                                                    <li style="margin-bottom: 10px"> PSD TO HTML5 & CSS3 CONVERT <span style="color:brown; font-size: 16px">[Full Advance Tutorial]</span></li>
	                                                                    <li style="margin-bottom: 10px"> Full Responsive Web Design<span style="color:brown; font-size: 16px"> [how to responsive your full website ]</span></li>
	                                                                    <li style="margin-bottom: 10px"> Knowledge of Javascript<span style="color:brown; font-size: 16px"> [As much as needed for this job is shown] </span></li>
	                                                                    <li style="margin-bottom: 10px"> Knowledge of Jquery <span style="color:brown; font-size: 16px"> [As much as needed for this job is shown]</span></li>
	                                                                    <li style="margin-bottom: 10px">All Advance Jquery Plugin  <span style="color:brown; font-size: 16px"> [How to use jquery plugin on your website Advance Tutorial ]</span></li>
	                                                                    <li style="margin-bottom: 10px"> Bootstrap 4<span style="color:brown; font-size: 16px"> [Full Advance Tutorial]</span></li>
	                                                                    <li style="margin-bottom: 10px"> PSD TO BOOTSTRAP 4<span style="color:brown; font-size: 16px"> [How to convert psd file to bootstrap4]</span></li>
	                                                                    
	                                    <li style="margin-bottom: 10px"> Full Landing Website Design Using BOOTSTRAP 4<span style="color:brown; font-size: 16px"> [Full Advance Tutorial]</span></li>                                    
	                                                                    <li style="margin-bottom: 10px"> Responsive Psd to Bootstrap & Full Landing website<span style="color:brown; font-size: 16px"> [ Technique Of how to 100% responsive bootsrap template ]</span></li>
	                                                                    <li style="margin-bottom: 10px"> Online Marketplace fiverr.com<span style="color:brown; font-size: 16px"> [Full Basic to Advance tutorial for fiver online marketplace to build your online career]</span></li>
	                                                                    <li style="margin-bottom: 10px"> Online Marketplace freelancer.com<span style="color:brown; font-size: 16px"> [How to work freelancer.com online marketplace]</span></li>
	                                                                    <li style="margin-bottom: 10px"> Online Marketplace themeforest.com <span style="color:brown; font-size: 16px"> [One of the best online marketplace for web designers. Here, if you approve a theme, that you have designed, then your life will be set]</span></li>
	                                                                    <li style="    margin-bottom: 10px;font-size: 17px;color: #0f9482;font-weight: bold;line-height: 182%; margin-top: 20px"> এখান থেকে যে সকল স্টুডেন্টরা সাকসেস পাবে, তাদের সবাইকে নিয়ে, আমি নিজে এবং আমার পার্টনারা সহ প্রতি বছর একটা বড় ধরনের টুর দেওয়া হবে। চিন্তার কোন কারন নেই, অন্য বাকি যে স্টুডেন্টরা আমাদের থাকবে, যারা হইতো অল্প কিছুর জন্য সাকসেস পাচ্ছে না, তারাও আমাদের টুরে অংশগ্রহণ করতে পারবে, এবং সেখানে সবাই একে অন্যের সাথে পরিচিত হবে, যারা সাকসেস লাভ করেছে, তারা বিভিন্ন ভাবে সহযোগিতা করবে, যারা তখনও পর্যন্ত সাকসেস লাভ করতে পারছে না তাদেরকে। এতে করে আমাদের সবার মধ্যে একটা ভালো সুসম্পর্ক তৈরি হবে, এবং সবাই ভালো কিছু করার জন্যে উৎসাহিত হবে। আমাদের সকল স্টুডেন্টরা যাতে ভালো কিছু করতে পারে তার জন্যই এই উদ্যোগটি নেওয়া। <span style="color:brown; font-size: 16px"> [Bonus Offer]</span></li>
	                                                                    <p style="color:orange; font-size: 20px; text-align: center; margin-top:20px">এই উদ্যোগটি যাদের যাদের ভালো লেগেছে তারা ম্যাসেজ করে আমাদেরকে জানতে পারেন।</p>

	                                                                    <div class="row">
	                                                                        <div class="col-lg-8">
	                                                                            <form action="{{ url('bonus/offer/insert') }}" method="post" enctype="multipart/form-data" autocomplete="off" name="bonus_offer">
																																								@csrf
	                                                                                <div class="form-group">
	                                                                                    <label for="name" style="color: #999595;font-size: 16px;font-weight: bold;"> Your Name <span style="color:red">*</span> </label>
	                                                                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
	                                                                                </div>
	                                                                                <div class="form-group">
	                                                                                    <label for="phone" style="color: #999595;font-size: 16px;font-weight: bold;"> Phone Number <span style="color:red">*</span> </label>
	                                                                                    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" name="phone">
	                                                                                </div>
	                                                                                <div class="form-group">
	                                                                                    <label for="message" style="color: #999595;font-size: 16px;font-weight: bold;"> Your Message <span style="color:red">*</span></label>
	                                                                                    <textarea name="message" id="message" class="form-control" rows="5"></textarea>
	                                                                                </div>

	                                                                                <button type="submit" class="btn btn-primary">Send</button>
	                                                                            </form>
	                                                                        </div>
	                                                                    </div>
	                                                                </ul>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <!--/.Accordion wrapper-->


	                                                <!--Accordion wrapper-->
	                                                <div class="accordion2 md-accordion2 accordion-2" id="accordionEx2" role="tablist" aria-multiselectable="true" style="width: 100%">

	                                                    <!-- Accordion card -->
	                                                    <div class="card" style="margin-top: 30px;">

	                                                        <!-- Card header -->
	                                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2" style="background: #1362c2; cursor: pointer" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse2" aria-expanded="true" aria-controls="collapse">
	                                                            <a>

	                                                                <span style="float: left;font-size: 20px;font-weight: bold;color: #fff;" id="prosnoa">ভিডিও দেখে শেখা যাবে তো?</span>
	                                                                <span style="float: right; color: #fff !important"><i class="fas fa-angle-down rotate-icon"></i></span>
	                                                            </a>
	                                                        </div>

	                                                        <!-- Card body -->
	                                                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx2">
	                                                            <div class="card-body mb-1 rgba-grey-light white-text">
	                                                                <h6 class="text-left text-success mt-3 text-normal" style="line-height: 190%">এই কোর্সের প্রথম ৫৬ টা ভিডিও টিউটোরিয়াল ইউটিউবে  ফ্রিতে দেওয়া আছে, আপনি চাইলে ভিডিওগুলোর কোয়ালিটি যাচাই করে নিজের সিদ্ধান্তটা নিজেই নিয়ে নিতে পারবেন।</h6>
	                                                                <p style="color: red; margin-bottom: 20px; margin-top: 15px"> সম্পূর্ণ ভিডীওগুলি দেখতে এখানে ক্লিক করুন <span><a href="https://www.youtube.com/watch?v=cjE_JZ0CcPs&index=1&list=PLlbCzwXIyJcGEdSCzUL1AaiMHAQI_9N1k">Click Here</a></span></p>
	                                                                <div>
	                                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cjE_JZ0CcPs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                                                                    <p>উপরের ভিডিও দেখে কি মনে হল? শিখতে পারবেন তো? </p>
	                                                                </div>
	                                                                <p style="color:orange; font-size: 17px; text-align: center; margin-top:20px">ভিডিও দেখার পরও যদি এই কোর্স সম্পর্কে আপনাদের কোনকিছু জানার থাকে,  তাহলে সরাসরি এই নাম্বারে ফোন করুন- <span style="color: red; font-weight: bold">01868752464</span>  অথবা নিচের ফর্মে আপনার নাম, ফোন নাম্বার, এবং প্রশ্নটি লিখে আমাদের কাছে সেন্ড করুন।</p>
	                                                                    <div class="row">
	                                                                        <div class="col-lg-8">
	                                                                            <form style="margin-top: 15px" action="{{ url('dvd/question/insert') }}" method="post" enctype="multipart/form-data" autocomplete="off" name="dvd_question">
																																								@csrf
	                                                                                <div class="form-group">
	                                                                                    <label for="name" style="color: #999595;font-size: 16px;font-weight: bold; float: left"> Your Name <span style="color:red">*</span> </label>
	                                                                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" placeholder="enter your name">
	                                                                                </div>
	                                                                                <div class="form-group">
	                                                                                    <label for="phone" style="color: #999595;font-size: 16px;font-weight: bold; float: left"> Phone Number <span style="color:red">*</span> </label>
	                                                                                    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" name="phone" placeholder="enter your phone number">
	                                                                                </div>
	                                                                                <div class="form-group">
	                                                                                    <label for="question" style="color: #999595;font-size: 16px;font-weight: bold; float: left">Your Question <span style="color:red">*</span></label>
	                                                                                    <textarea name="question" id="question" class="form-control" rows="5">

	                                                                                    </textarea>
	                                                                                </div>

	                                                                                <button type="submit" class="btn btn-primary" style="float: left">Send</button>
	                                                                            </form>
	                                                                        </div>
	                                                                    </div>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <!--/.Accordion wrapper-->

	                                                <!-- Grid column -->

	                                            </div>
	                                            <!-- Grid row -->

	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!--about part end-->


<!--Latest Banner end-->
@section('custom_js')
	<script src="{{ asset('frontend_assets') }}/js/form-validation.js"></script>
@endsection
@endsection
