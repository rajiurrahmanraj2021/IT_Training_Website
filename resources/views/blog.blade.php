@section('blog_active')
  active
@endsection
@section('web_title')
     ব্লগসমূহ
@endsection

@extends('layouts.frontendmaster')

@section('frontend_main')
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
/*            height: 170px;*/
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
		/*publication category end*/
	</style>
<!--latest Banner start-->
<section>
  <div class="latest_banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="latest_banner_text">
            <h2 id="blogsomuho">ব্লগসমূহ</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Latest Banner end-->


<!--News part start-->

  <section>
      <div class="gallery" id="gal">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="section_header">
                          <h2 class="text-center blogporun"><span>|| </span>আমাদের সকল <span>ব্লগগুলো পড়ুনঃ</span></h2>
                      </div>
                  </div>
              </div>

              <div class="gallery_content">
                  <div class="row">
                      <div class="col-lg-12 text-left">
                          <div class="l_news_content">
                              <div class="row">
                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/mouchak.jpg" alt="" class="img-fluid">

                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">1-January-2020</span>
                                                  <span style="text-align:right; float:right; color:red;">12:00:00 AM</span>
                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      ওয়েব ট্রেনিং ইনস্টিটিউট এর টিউটোরিয়াল এখন পওয়া যাচ্ছে ঢাকার মৌচাক অফিসে, এর সাথে সাথে সমগ্র ঢাকা শহরের মধ্যে হোম ডেলিভারি দেওয়া হচ্ছে একদম ফ্রীতে! তাছাড়া সারা দেশের হোম ডেলিভারী তো থাকছেই! এবার ঘরে বসেই সংগ্রহ করুন সকল ডিভিডি
                                                  </p>
                                                  <a href="{{ url('blog_details1') }}" style="float:right;color:white"> বিস্তারিত দেখুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/webporichiti2.jpg" alt="" class="img-fluid">

                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">15-December-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">10:30:33 PM</span>
                                                  <h4 style="text-align: center;margin-top: 20px;color: #1ecb19;border-bottom: 1px solid #ddd;font-weight: bold;padding-bottom: 7px;"> ওয়েব ডিজাইন পরিচিতি </h4>
                                                  <p style="text-align: justify; height: 150px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      ওয়েব ডিজাইন হচ্ছে একটি ওয়েব সাইটের জন্য বাহ্যিক অবকাঠামো তৈরি করা । ওয়েবসাইট দেখতে কেমন হবে অথবা এর সাধারণ রূপ কেমন হবে তা নির্ধারণ করা । ওয়েব ডিজাইনার দের কাজ হচ্ছে আমরা নিয়মিত যে ওয়েবসাইট গুলো ভিজিট করে থাকি ক্লাইন্ট এর চাহিদা অনুযায়ী সেই রকম ওয়েবসাইট তৈরি করা।
                                                  </p>
                                                  <a href="{{ url('blog_details2') }}" style="float:right;color:white"> বিস্তারিত দেখুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/responki.jpg" alt="" class="img-fluid">

                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">1-December-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">11:48:20 AM</span>
                                                  <h4 style="text-align: center;margin-top: 20px;color: #1ecb19;border-bottom: 1px solid #ddd;font-weight: bold;padding-bottom: 7px;"> রেস্পন্সিভ ওয়েব ডিজাইন </h4>
                                                  <p style="text-align: justify; height: 150px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      বর্তমান সময়েসবচাইতে জনপ্রিয় ডিভাইস এর নাম স্মার্টফোন। স্মার্টফোন এর জনপ্রিয়তার সাথে সাথে মোবাইল থেকে ওয়েবসাইটে ভিজিটের সংখ্যা দ্রুত বাড়ছে। গবেষনায় দেখা যায় ২০১৮ সালে মোট ওয়েবসাইট ভিজিট এর মধ্যে ৫২ শতাংশ এর বেশী স্মার্টেফোন ব্যবহারকারী। স্মার্টফোন এর এই দারুন জনপ্রিয়তা সার্চ ইন্জিনগুলোকে অনেকটা বাধ্য করছে ওয়েবসাইট এর মোবাইল ভিউকে গুরুত্ব দেয়ার জন্য। Google এর সর্বশেষ আপডেটে ওয়েবসাইট এর মোবাইল ভার্সনকে গুরুত্ব দেয়া হয়েছে এবং মোবাইল সার্চ ইন্জিন রেজাল্ট পেজে(SERP) যে ওয়েবসাইটগুলোর মোবাইল ভার্সন আছে শুধু সেগুলোকেই স্থান দেয়া হচ্ছে।
                                                  </p>
                                                  <a href="{{ url('blog_details3') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/bild.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">25-November-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">08:30:33 PM</span>

                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      ঠিক এই মুহূর্তে প্রায় ১.২ বিলিয়ন  ওয়েবসাইট রয়েছে পৃথিবীতে।Yahoo এর করা এক জরীপ থেকে দেখা যায়, শুধুমাত্র আমেরিকাতেই প্রতি মাসে প্রায় ১৬ মিলিয়নের বেশী অর্থাৎ ১ কোটি ৬০ লাখেরও বেশী ওয়েবসাইট তৈরি করা হয়ে থাকে! যার প্রায় ৭০% এরও বেশী করা হয় প্রোফেশনাল ওয়েব ডিজাইনার হায়ার করে এবং যার মার্কেট ভেল্যু ২০.১ বিলিয়ন মার্কিন ডলার, বাংলাদেশী টাকায় যার পরিমাণ প্রায় ১৬ হাজার ৮০০ কোটি টাকা!</p>
                                                  <a href="{{ url('blog_details4') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/Upajon.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">12-November-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">03:20:55 PM</span>

                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      আমরা সব সময়ই বলি, অনলাইনে আয়ের দুটি রাস্তা। এক, চাকরি করা এবং দুই, ব্যাবসা করা। আমাদের বাস্তব জীবনের মত অনলাইনেও আমরা চাকরি এবং ব্যবসা দুটোই করতে পারি। আর আজকে আপনাদের সাথে কথা বলব অনলাইনের একটি স্থায়ী ইনভেস্ট সম্পর্কে যেটা আপনি একবার করলে সারাজীবন বসে বসেই খেতে পারবেন। হ্যা, এমন একটি ইনভেস্ট হচ্ছে একটি ওয়েবসাইট। একটি ওয়েবসাইট হতে পারে আপনার সারা জীবনের স্থায়ী উপার্জনের ক্ষেত্রে। তাহলে চলুন দেখি কিভাবে?</p>
                                                  <a href="{{ url('blog_details5') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/upai.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">02-October-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">05:05:20 PM</span>

                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      দিন দিন ওয়েব ডিজাইনারের চাহিদা বাড়ছে, কিন্তু দক্ষ ওয়েব ডিজাইনারের সংখ্যা আনুপাতিক হারে বাড়ছে না।“কাজেই একটু আধটু শিখেই নয়, বরং ভাল করে কাজ শিখতে পারলে কাজের অভাব হবেনা ইনশা-আল্লাহ্‌” পোস্টটি পুরো ১০ মিনিট সময় নিয়ে শুরু থেকে একদম শেষ পর্যন্ত মনোযোগ দিয়ে পড়ুন</p>
                                                  <a href="{{ url('blog_details6') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/free.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">21-September-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">07:48:33 PM</span>

                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      ফ্রিল্যান্সার বা ফ্রিল্যান্সিং শব্দ দুইটির সাথে আমরা সবাই কমবেশি পরিচিত। স্বাধীন ভাবে নিজের পছন্দ মত কাজ করা এবং ভালো আয় এর নিশ্চয়তার কারনে অনেকের কাছেই ফ্রিল্যান্সিং বা মুক্তপেশা এখন প্রথম পছন্দের নাম। কিন্তু কোন কাজটি আপনি শিখবেন অথবা কোথায় থেকে শুরু করবেন? কাজই বা কোথায় করবেন? আজ আমরা ফ্রিল্যান্সিং বিষয়টি নিয়ে বিস্তারিত আলোচনা করার চেস্টা করবো। চেস্টা করবো আপনার সবগুলো প্রশ্নের উত্তর খুজতে। তাহলে শুরু করা যাক,</p>
                                                  <a href="{{ url('blog_details7') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/larning.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">05-September-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">02:35:12 AM</span>

                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      আমরা অনেক কিছুতে এগিয়ে গেলেও অনলাইন লার্নিং ক্ষেত্রে অন্যদের তুলনায় এখনো অনেক পিছিয়ে আছি, আসলে আমাদের এই বিষয়টিতে কম অভ্যস্ততায় মূল কারণ। আসুন আমরা এর উত্তর খুঁজি :</p>
                                                  <a href="{{ url('blog_details8') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/subidha.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">17-August-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">03:09:42 AM</span>

                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      অসহ্য জ্যাম পার হয়ে ৯ টা ৫টা অফিস কিংবা অফিস পলিটিক্স একটি বিরক্তিকর চাকুরীকে অসহ্য তে পরিনত করতে পারে। অফিস এর বাঁধা ধরা নিয়ম এর বাইরে যদি আপনি নিজেই কিছু করতে চান তাহলে ফ্রিল্যান্সিং হতে পারে আপনার জন্য সবচাইতে সেরা পছন্দ।কিন্ত ফ্রিল্যান্সিং কি শুধু মাত্র আপনার নিজের জন্য কিছু করার স্বাধীনতাটুকু দিবে নাকি আরও অনেক কিছু?</p>
                                                  <a href="{{ url('blog_details9') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/beche.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">06-August-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">11:07:33 PM</span>

                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      বর্তমান প্রতিযোগীতার যুগে চাকুরী পাওয়াটাই অনেক কঠিন ব্যাপার আর ব্যাপারটা আরও সৌভাগ্যের হয়ে যায় যদি এমন চাকুরী পাওয়া যায় যা আপনি করতে ভালোবাসেন। এমন কিছু যেখানে আপনি আপনার দক্ষতাকে প্রকাশ করতে পারবেন, দিন এর পর দিন যেই কাজ করতে আপনার কখনও বিরক্ত লাগবে না। কিন্তু সেই সৌভাগ্য অধিকাংশ সময়ে আমাদের হয় না, আর গ্রাজুয়েশন শেষ করে আপনি হয়তো কম বেতনের এমন কোন কাজ করছেন যেখানে না আছে দক্ষতা প্রমান এর সুযোগ না আছে নতুন ‍কিছু শেখার আনন্দ। বিরক্তিকর কিছু করতে করতে আপনি হয়তো হারিয়ে ফেলেছেন কাজ করার আনন্দটুকুই। ফ্রিল্যান্সিং এর মজাটা এখানেই, একজন ফ্রিল্যান্সার এভাবেই অন্য যে কোন পেশাজীবিদের থেকে আলাদা এবং স্বাধীন।</p>
                                                  <a href="{{ url('blog_details10') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/maye.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">19-July-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">05:16:09 AM</span>

                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      ছেলেদের তুলনায় একটা মেয়ের ক্যারিয়ার ডেভেলপমেন্ট এর পথে আসতে পারে বিভিন্ন বাধা। সেক্ষেত্রে ফ্রিল্যান্সিং হতে পারে মেয়েদের জন্য নিরাপদ ও নিশ্চিন্ত পেশা। ফ্রিল্যান্সিং হতে পারে একজনের নিজের জগত , নিজের অফিস। নিজের ইচ্ছা মতো একজন এখানে কাজ করতে ও সময় দিতে পারে। নারীদের ক্যারিয়ার সম্ভাবনা নির্ভর করে সঠিক দক্ষতা অর্জনের মাদ্ধমে। অর কোন বিষয়ে তিনি নিজেকে ডেভেলপ করবে সেই সিদ্ধান্তটি নিতে হয় অনেক কিছু বিবেচনা করে। কারণ, এই স্কিল এ হতে পারে তার ভবিষ্যত ক্যারিয়ার এর পাথেয়। এছাড়াও, একটা মেয়ের কর্মজীবনের সাথে জড়িয়ে আছে তার পরিবারের বিষয়গুলো।</p>
                                                  <a href="{{ url('blog_details11') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/step.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">
                                                  <span style="text-align:left">03-July-2019</span>
                                                  <span style="text-align:right; float:right; color:red;">12:50:32 PM</span>

                                                  <p style="text-align: justify; height: 205px; overflow: hidden; margin-top: 15px; font-size: 18px;">
                                                      ইন্টারনেট থেকে আয়!- অনেকের কাছে আজব কিছু, অনেকের কাছে সুপরিচিত শব্দ। অনেকেই সফল, আবার অনেকে খুজেই চলেছেন কিভাবে কি? আবার অনেকেই বেশি আয়ের লোভে পড়ে ধরা খেয়েছেন হাজার এমনকি লাখ টাকাও!! কিন্তু কখনো জেনেছেন কি আসল বাস্তবতা? কি এটা, কি করা উচিত, কিভাবে করা উচিত? এই সম্পর্কিত সুপার গাইডলাইন নিয়েই আজকের পর্ব।</p>
                                                  <a href="{{ url('blog_details12') }}" style="float: right;color:white">বিস্তারিত দেখুন</a>
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
<!--News Part end-->



@endsection
