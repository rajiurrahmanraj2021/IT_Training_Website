@section('question_active')
  active
@endsection
@section('web_title')
     প্রশ্নউত্তর
@endsection

@extends('layouts.frontendmaster')

@section('frontend_main')

<!--banner part start-->
<style>

		.latest_banner{
			background-image: url({{ asset('frontend_assets/img/webimg/20.jpg') }});
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
                background: #ffeb03;
                color: white;
        }
        .post-div p{
           font-size: 25px;
           letter-spacing: 3px;
           font-style: italic;
           padding: 5px 0px 5px 0px;
           color: red;
            font-weight: bold;
        }
		/*publication category end*/
	</style>
<!--latest Banner start-->
<section>
  <div class="latest_banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="latest_banner_text">
            <h2> প্রশ্ন ও উত্তর </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--banner part end-->

<!--about part start-->
<section>
    <div class="gallery" style="padding-top: 10px;">
        <div class="container">
            <div class="gallery_content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="l_news_content">
                            <div class="row">
                                <div class="col-lg-11 mb-4 m-auto">
                                  <div class="details_heading" style="margin-bottom: 20px">


                                          <div class="post-div">
                                             <p>আমাদের সম্পর্কে সচরাচর জিজ্ঞাসিত প্রশ্নাবলি</p>
                                          </div>
                                      </div>
                                    <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

                                        <div class="card-body">
                                            <p style="line-height: 170%;font-size: 16px;margin-bottom: 30px; text-align: left; font-weight: bold; text-align: justify" class="tuto" >
                                                 ২০১৮ সালের ৩১ শে ডিসেম্বর ইউটিউব চ্যানেল  এর মাধ্যমে ওয়েব ট্রেনিং ইনস্টিটিউট এর যাত্রা শুরু হয় । প্রতিষ্ঠানটির প্রতিষ্ঠাতা মো: রাজিউর রাহমান ও মো: সোহেল পারভেজ  এর  ঐকান্তিক প্রচেষ্ঠায় ওয়েব ট্রেনিং ইনস্টিটিউটের ইউটিউব চ্যানেলে যুক্ত হচ্ছে নতুন নতুন টিউটোরিয়াল।
                                            </p>


                                            <!-- Grid row -->
                                            <div class="row accordion-gradient-bcg d-flex justify-content-center">
                                                <!--Accordion wrapper-->
                                                <div class="accordion1 md-accordion1 accordion-1" id="accordionEx1" role="tablist" aria-multiselectable="true" style="width: 100%">

                                                    <!-- Accordion card -->
                                                    <div class="card" style="margin-top: 30px;">
                                                        <!-- Card header -->
                                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1" style="background: #248c82; cursor: pointer" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse1" aria-expanded="true" aria-controls="collapse">
                                                            <a>
                                                                <span style="float: left;font-size: 20px;font-weight: bold;color: #fff;" id="prosnoa"> প্রশ্নঃ আপনাদের কি কি বিষয়ে টিউটোরিয়াল কোর্স আছে?</span>
                                                                <span style="float: right; color: #fff !important"><i class="fas fa-angle-down rotate-icon"></i></span>
                                                            </a>
                                                        </div>

                                                        <!-- Card body -->
                                                        <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx1">
                                                            <div class="card-body mb-1 rgba-grey-light white-text">
                                                                <div>
                                                                    <p style="text-align: justify;     line-height: 170%;">আমাদের শুধুমাত্র নির্দিষ্ট কয়েকটা বিষয়ের উপর কোর্স রয়েছে। এর প্রধান কারন হচ্ছে- আমরা নিজেরা যে কাজগুলো করি এবং যে কাজে আমাদের নিজেদের অভিজ্ঞতা রয়েছে শুধুমাত্র সেই কাজ গুলোর উপরেই আমরা টিউটোরিয়াল কোর্স তৈরি করে থাকি। এর জন্য আমরা গণহারে সকল বিষয়ের উপর টিউটোরিয়াল তৈরি করি না। কারন, টিউটোরিয়াল বিক্রি করে শুধু ব্যবসা নয়, বরং আপনি যে টাকা খরচ করে আমাদের কোর্সগুলো কিনবেন তার বিনিময়ে আমরা যেন আপনাকে খুব ভাল কিছু রিটার্ন করতে পারি যেটা আপনার সত্যিকার অর্থেই কাজে আসবে এটাই আমাদের কোর্স তৈরির মূল লক্ষ্য ও উদ্দেশ্য। আপাতত আমাদের ওয়েব ডিজাইন, ডেভেলপমেন্ট এবং জাভাস্ক্রিপ্টের উপরে ফ্রি এবং প্রিমিয়াম টিউটোরিয়াল কোর্স রয়েছে। এর পরেই আমাদের ওয়েব ডেভেলপমেন্ট,  গ্রাফিক্স ডিজাইন এবং ওয়ার্ডপ্রেস এর উপরে ধীরে ধীরে ভিডিও আসতে থাকবে।</p>
                                                                    <p style="    text-align: left;margin-top: 20px;font-weight: bold;margin-bottom: 20px;"> প্রিমিয়াম কোর্স সম্পর্কে জানতে <a href="{{ url('premium_course') }}" target="_blank">এখানে ক্লিক করুন</a></p>
                                                                    <p style="text-align: left;font-weight: bold;;">ফ্রী কোর্সগুলো সম্পর্কে জানতে <a href="{{ url('free_course') }}" target="_blank">এখানে ক্লিক করুন </a></p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/.Accordion wrapper-->

                                                <!--Accordion wrapper2-->
                                                <div class="accordion2 md-accordion2 accordion-2" id="accordionEx2" role="tablist" aria-multiselectable="true" style="width: 100%">

                                                    <!-- Accordion card -->
                                                    <div class="card" style="margin-top: 10px;">
                                                        <!-- Card header -->
                                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2" style="background: #248c82; cursor: pointer" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse2" aria-expanded="true" aria-controls="collapse">
                                                            <a>
                                                                <span style="float: left;font-size: 20px;font-weight: bold;color: #fff;" id="prosnoa">প্রশ্নঃ আপনাদের কোর্স গুলো কতটা মানসম্মত?</span>
                                                                <span style="float: right; color: #fff !important"><i class="fas fa-angle-down rotate-icon"></i></span>
                                                            </a>
                                                        </div>

                                                        <!-- Card body -->
                                                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx2">
                                                            <div class="card-body mb-1 rgba-grey-light white-text">
                                                                <div>
                                                                   <p style="text-align: justify;line-height: 170%;margin-bottom: 17px;">আসলে এই প্রশ্নের উত্তর আমরা সরাসরি না দিয়ে আপনার উপরেই ছেড়ে দিতে চাই। প্রতিটা কোর্স থেকেই প্রথম কিছু ভিডিও আমরা ফ্রীতে দিয়ে থাকি যাতে করে ডিভিডি কেনার আগেই আপনি সেটা দেখে নিশ্চিত হয়ে নিতে পারেন যে কোর্স দেখে সত্যিই শিখতে পারবেন কিনা। এতে করে আপনার এবং আমাদের উভয়ের মাঝেই কোর্স এর কোয়ালিটি নিয়ে কোন সংকোচ থাকে না।</p>
                                                                   <p style="text-align: justify;line-height: 170%;margin-bottom: 17px;">এরপরেও যদি বলেন আমাদের টিউটোরিয়াল সম্পর্কে, আমরা বলতে পারি- আপনি যদি একজন সত্যি প্রফেশনাল ওয়েব ডিজাইনার হতে চান, তাহলে অন্য কোন ট্রেনিং সেন্টারে ভর্তি হয়ে নয়, ইউটিউব থেকে এলো মেলো ভাবে সাজানো ভিডিও থেকে নয়, শুধুমাত্র আমাদের ইউটিউবে থাকা ফী ভিডিও এবং আমাদের প্রিমিয়াম ওয়েব ডিজাইন সাকসেস কোর্সটি করেই আপনি হতে পারবেন, একজন সফল ওয়েব ডিজাইনার ও ফ্রিলেন্সার। আমারা এই গ্যারান্টিটা দিতে পারছি, তার কারনটা হচ্ছে, ওয়েব ডিজাইন সাকসেস কোর্সটি এইভাবেই সাজানো হয়েছে আপনাদের জন্য। 0 থেকে শুরু করে অল্প অল্প করে, প্র্যাকটিস করিয়ে সম্পূর্ণ এডভান্স লেভেল এ নিয়ে যাওয়া হয়েছে, আমরা বিশ্বাস করি যদি কোন একজন ব্যক্তি নিজের মন থেকে টিউটোরিয়াল গুলো ফলো করে শিকতে থাকে, প্রতিনিয়ত প্র্যাকটিস করতে থাকে, তাহলে এই সেক্টরটিতে তার সাকসেস কেউ আটকাতে পারবে না। আমারা প্রতিটা জিনিষ এমন ভাবে উপস্থাপন করার চেষ্টা করেছি, যাতে করে যিনি শিকছেন, তার কোন জায়গাতে গ্যাপ না থেকে। হয়তো আমাদের কথাগুলো আপনাদের এখন বিশ্বাস নাও হতে পারে,  তাই আপনারা আমাদের ফ্রী ভিডিওগুলো একবার হলেও দেখে আসুন। তারপর নিজের সিদ্ধান্ত নিজেই নিয়ে নিন। </p>
                                                                   <p style="text-align: left;font-weight: bold; margin-bottom: 20px"> ফ্রী ভিডিগুলো দেখতে <a href="https://www.youtube.com/watch?v=cjE_JZ0CcPs&index=1&list=PLlbCzwXIyJcGEdSCzUL1AaiMHAQI_9N1k" target="_blank"> এখানে ক্লিক করুন</a></p>
                                                                   <p style="text-align: left;font-weight: bold;;"> প্রিমিয়াম কোর্স সম্পর্কে বিস্তারিত জানতে <a href="{{ url('premium_course') }}" target="_blank"> এখানে ক্লিক করুন</a></p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/.Accordion wrapper3-->

                                                <!--Accordion wrapper2-->
                                                <div class="accordion3 md-accordion3 accordion-3" id="accordionEx3" role="tablist" aria-multiselectable="true" style="width: 100%">

                                                    <!-- Accordion card -->
                                                    <div class="card" style="margin-top: 10px;">
                                                        <!-- Card header -->
                                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3" style="background: #248c82; cursor: pointer" data-toggle="collapse" data-parent="#accordionEx3" href="#collapse3" aria-expanded="true" aria-controls="collapse">
                                                            <a>
                                                                <span style="float: left;font-size: 20px;font-weight: bold;color: #fff;" id="prosnoa"> প্রশ্নঃ কোর্স গুলো কিভাবে সংগ্রহ করতে পারি?</span>
                                                                <span style="float: right; color: #fff !important"><i class="fas fa-angle-down rotate-icon"></i></span>
                                                            </a>
                                                        </div>

                                                        <!-- Card body -->
                                                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx3">
                                                            <div class="card-body mb-1 rgba-grey-light white-text">
                                                                <div>
                                                                      <p style="text-align: justify;"> প্রিমিয়াম কোর্স অর্ডার করতে এই লিঙ্কে ক্লিক করুনঃ  <a href="{{ url('premium_course') }}" target="_blank"> www.webtraininginstitute.com/premium_course </a> </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/.Accordion wrapper3-->

                                              <!--Accordion wrapper4-->
                                                <div class="accordion4 md-accordion4 accordion-4" id="accordionEx4" role="tablist" aria-multiselectable="true" style="width: 100%">

                                                    <!-- Accordion card -->
                                                    <div class="card" style="margin-top: 10px;">
                                                        <!-- Card header -->
                                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading4" style="background: #248c82; cursor: pointer" data-toggle="collapse" data-parent="#accordionEx4" href="#collapse4" aria-expanded="true" aria-controls="collapse">
                                                            <a>
                                                                <span style="float: left;font-size: 20px;font-weight: bold;color: #fff;" id="prosnoa">  প্রশ্নঃ যদি শিখতে কোথাও সমস্যা হয়, বুঝতে না পারি?</span>
                                                                <span style="float: right; color: #fff !important"><i class="fas fa-angle-down rotate-icon"></i></span>
                                                            </a>
                                                        </div>

                                                        <!-- Card body -->
                                                        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx4">
                                                            <div class="card-body mb-1 rgba-grey-light white-text">
                                                                <div>
                                                                      <p style="text-align: justify; line-height: 170%"> ওয়েব ট্রেনিং ইনস্টিটিউট সব সময়ই শিক্ষার্থীদের হেল্প করতে পছন্দ করে। কোর্সের ডিভিডির সাথে প্রিমিয়াম শিক্ষার্থীদের জন্য আলাদা একটা ফেসবুক গ্রুপ থাকবে, ডিভিডি হাতে পাওয়ার পর সেই গ্রুপে এড হয়ে যাবেন, আপনার যে কোন সমস্যা হলে সেই গ্রুপে শেয়ার করবেন এবং চেস্টা করবেন গ্রুপ মেম্বারদের সাথে আলোচনার মাধ্যমে সলভ করে নিতে। যদি এতেও না হয়, তখন সরাসরি অ্যাডমিনকে ইমেইল পাঠানোর মাধ্যমে হেল্প নেয়ারও ব্যবস্থা থাকবে। </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/.Accordion wrapper4-->

                                                <!--Accordion wrapper5-->
                                                <div class="accordion5 md-accordion5 accordion-5" id="accordionEx5" role="tablist" aria-multiselectable="true" style="width: 100%">

                                                    <!-- Accordion card -->
                                                    <div class="card" style="margin-top: 10px;">
                                                        <!-- Card header -->
                                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading5" style="background: #248c82; cursor: pointer" data-toggle="collapse" data-parent="#accordionEx5" href="#collapse5" aria-expanded="true" aria-controls="collapse">
                                                            <a>
                                                                <span style="float: left;font-size: 20px;font-weight: bold;color: #fff;" id="prosnoa">   প্রশ্নঃ ডিভিডি তে যান্ত্রিক সমস্যা থাকলে কি করবো?</span>
                                                                <span style="float: right; color: #fff !important"><i class="fas fa-angle-down rotate-icon"></i></span>
                                                            </a>
                                                        </div>

                                                        <!-- Card body -->
                                                        <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx5">
                                                            <div class="card-body mb-1 rgba-grey-light white-text">
                                                                <div>
                                                                      <p style="text-align: justify;line-height: 170%;margin-bottom: 17px;"> ডিভিডি তে সাধারণত খুব একটা সমস্যা বের হয় না, কিন্তু তবুও ইলেকট্রিক প্রোডাক্ট হিসেবে সব সময় ১০০% গ্যারান্টি দেয়া সম্ভব হয় না। তবে যদি আপনার কেনা ডিভিডি তে কোন যান্ত্রিক সমস্যা বের হয় তখন অতি দ্রুত আমাদেরকে ইনফর্ম করতে হবে। আমরা আপনাকে আপনার নষ্ট ডিভিডি অতিসত্তর কোন প্রকার অতিরিক্ত চার্জ ব্যতীত চেঞ্জ করে দেয়ার ব্যবস্থা করবো। অথবা আপনি যদি ভিডিওগুলো ডাউনলোড করে নিতে চান, সেক্ষেত্রে ভিডিও ডাউনলোড এর গোপনীয় লিংক আপনাকে দেওয়া হবে, আপনি চাইলে সেখান থেকে ভিডিও ডাউনলোড করে নিতে পারবেন। </p>

                                                                      <p style="text-align: justify;line-height: 170%;margin-bottom: 17px;"> <span style="color:red"> বিঃদ্রঃ </span> যদি আপনি ভুল করেও ভিডিও ডাউনলোড এর গোপনীয় লিংক অন্য কাউকে শেয়ার করে থাকেন, তাহলে আপনাকে আমাদের সব কিছু থেকে বাদ দেওয়া হবে। এমন ভাবেই আমাদের সিস্টেমটা ডেভেল্পমেন্ট করা, অন্য কেউ লিঙ্কে প্রবেশ করলে আমাদের কাছে নোটিফিকেশন চলে আসবে।</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/.Accordion wrapper5-->

                                                 <!--Accordion wrapper6-->
                                                <div class="accordion6 md-accordion6 accordion-6" id="accordionEx6" role="tablist" aria-multiselectable="true" style="width: 100%">

                                                    <!-- Accordion card -->
                                                    <div class="card" style="margin-top: 10px;">
                                                        <!-- Card header -->
                                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading6" style="background: #248c82; cursor: pointer" data-toggle="collapse" data-parent="#accordionEx6" href="#collapse6" aria-expanded="true" aria-controls="collapse">
                                                            <a>
                                                                <span style="float: left;font-size: 20px;font-weight: bold;color: #fff; text-align: left" id="prosnoa">  প্রশ্নঃ আপনাদের ভিডিওগুলোর কোয়ালিটি এতো ভালো, তো আপনারা ফ্রীতে কোর্স দিচ্ছেন না কেন? টাকা নিয়ে ব্যাবসা করছেন কেন?</span>
                                                                <span style="float: right; color: #fff !important"><i class="fas fa-angle-down rotate-icon"></i></span>
                                                            </a>
                                                        </div>

                                                        <!-- Card body -->
                                                        <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx6">
                                                            <div class="card-body mb-1 rgba-grey-light white-text">
                                                                <div>
                                                                      <p style="text-align: justify;line-height: 170%;margin-bottom: 17px;"> আপনার কথায় যুক্তি আছে এবং আমরাও আপনার সাথে একমত পোষণ করছি। কিন্তু ব্যবসা করা খারাপ কিছু নয়। প্রতিটি হাসপাতাল, স্কুল, কলেজ এরা সবাই-ই ব্যবসা করে। কিন্তু এইগুলো হচ্ছে সেবামূলক ব্যবসা। এতে মানুষেরও কল্যাণ এবং প্রতিষ্ঠানেরও লাভ। ঠিক ওয়েব ট্রেনিং ইনস্টিটিউটও এমন একটি প্রতিষ্ঠান। ব্যবসা আমাদের অবশ্য লক্ষ্য, কিন্তু সেটা অবশ্যই বৈধ পন্থায় এবং মানুষের যাতে উপকার হয় সেটা নিশ্চিত করেই। </p>

                                                                      <p style="text-align: justify;line-height: 170%;margin-bottom: 17px;"> একটা ফুল ভিডিও সিরিজ বানাতে কতটা সময় লাগে, কতটা পরিশ্রম করতে হয়, তা হইতো আপনাদের কাছে অজানা। আর তার বিনিময়ে হইতো আপনাদের কাছে কিছু অর্থ নেওয়া হয়, আর আপনারা সেটাকে ব্যাবসা বলে গণ্য করেন। একটা ট্রেনিং সেন্টারে যখন ৩০,০০০ টাকা দিয়ে একটা কোর্স করেন, তখন আপনাদের কাছে সেটাকে ব্যাবসা মনে হয় না, নিজে কিছু শেখার জন্য একটা ডিভিডি ক্রয় করবেন ১০০০ থেকে ২০০০ টাকা দিয়ে সেটাকে আপনাদের ব্যাবসা মনে হয়। যদি আমাদের ব্যাবসাই মূল উদ্দেশ্য হতো, তাহলে একটা কোর্সের ঠিক যত মূল্য ততই নেওয়া হতো। কারন আমি ১০০% সিওর দিয়ে বলতে পারি, একটা ট্রেনিং সেন্টারে যা শেখানো হয়, তার থেকে ১% হলেও বেশি এবং ভালো করে শেখানো ও বোঝনো হয়েছে আমাদের কোর্সগুলোতে। আমরা সব সময় গভীর থেকে জিনিষগুলো বোঝানোর চেষ্টা করি।</p>

                                                                      <p style="text-align: justify;line-height: 170%;margin-bottom: 17px;"> সত্য কথা বলতে, আপনাদের জন্য একটা ফুল প্রফেশনাল কোর্স রেডি করতে গিয়ে আমাদের অনেক সময় এবং পরিশ্রম দিতে হয়। এবং নিজেকে এই ফিল্ডে টিকিয়ে রাখার জন্য, আপনাদের জন্য পরবর্তীতে আরও ভাল ভাল কোর্স নিয়ে আসার জন্য, আমাদের কিছু ইন্সপায়ারেশন এর প্রয়োজন হয়। আর আমরা তখনি ইন্সপায়ারেশন হই, যখন আপনারা আমাদের টিউটোরিয়াল পছন্দ করেন, এবং আমাদের বানানো কোর্স দেখে কিছু শিখে, নিজের পরিচয় দেওয়ার মতো একটা যায়গা তৈরি করতে পারেন।আশা করছি এটা নিয়ে আপনাদের যেটা ধারনা ছিল, সেটা বুঝাতে পেরেছি।</p>
                                                                      <p style="font-weight: bold; text-align: justify"> ধন্যবাদ, সময় নিয়ে কথাগুলো পড়ার জন্য। </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--/.Accordion wrapper6-->
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
    </div>
</section>
<!--about part end-->


@endsection
