@extends('layouts.frontendmaster')

@section('frontend_main')
<style>

		.latest_banner{
			background-image: url({{ asset('frontend_assets/img/webimg/21.jpg') }});
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


        /*Header link CSS start*/
    		.header_link {
    			padding-top: 20px;
    			padding-bottom: 20px;
    		}

    		.header_link p {
    			font-family: 'Open Sans', sans-serif;
    			font-weight: 600;
    			font-size: 15px;
    			color: #1e1e1e;
    		}

    		.header_link p a {

    			color: #149aba;
    			font-weight: 700;
    			text-shadow: 10px 10px 15px black;
    			transition: all .2s linear;
    		}

    		.header_link p a:hover {
    			color: #1e1e1e;
    			text-shadow: none;
    		}

    		.header_link p span {
    			color: #149aba;
    		}

    		.header_link .header_icon span {
    			margin-right: 20px;
    			font-family: 'Open Sans', sans-serif;
    			font-weight: 600;
    			font-size: 15px;
    			color: #1e1e1e;
    		}

    		.header_link .header_icon a {
    			display: inline-block;
    			margin-right: 10px;
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

    		.header_link .header_icon a i {
    			height: 30px;
    			width: 30px;
    			line-height: 30px;
    			text-align: center;
    			background-color: #427ad4;
    			border-radius: 50%;
    			color: white;
    			transition: all .2s linear;

    		}

    		.header_link .header_icon a i.youtube {
    			background-color: #e01e1e;
    		}

    		.header_link .header_icon a i:hover {
    			color: #427ad4;
    			background: white;
    			transform: scale(1.1);
    		}

    		.header_link .header_icon a i.youtube:hover {
    			background-color: white;
    			color: #e01e1e;
    			transform: scale(1.1);
    		}

    		/*Header link CSS End*/

    		/*About CSS Start*/
    		.about .about_text img {
    			margin-bottom: 20px;
    		}

    		.about {
    			padding-bottom: 20px;
    		}

    		.about h3 {
    			font-family: 'Oswald', sans-serif;
    			font-weight: 500;
    			font-size: 28px;
    			color: #2259b1;
    			margin-bottom: 20px;
    		}

    		.about p {
    			font-family: 'Open Sans', sans-serif;
    			font-weight: 600;
    			font-size: 14px;
    			color: #1e1e1e;
    			text-align: justify;
    		}

    		/*about css end*/

    		/*Accordian CSS Start*/
    		.about_contact {
    			padding-top: 60px;
    			padding-left: 30px;
    		}

    		.about_contact h4 {
    			font-family: 'Oswald', sans-serif;
    			font-weight: 500;
    			font-size: 18px;
    			color: #1e1e1e;
    			margin-bottom: 20px;
    			border-left: 3px solid #00B4DB;
    			border-right: 3px solid #00B4DB;
    		}

    		.about_contact button {
    			font-family: 'Oswald', sans-serif;
    			font-size: 16px;
    		}

    /*
    		.accordion {
    			background: #00B4DB;
    			background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
    			background: linear-gradient(to right, #0083B0, #00B4DB);
    			color: white;
    			cursor: pointer;
    			padding: 14px 20px;
    			width: 100%;
    			text-align: left;
    			border: none;
    			outline: none;
    			margin-bottom: 10px;
    			transition: 0.4s;
    			font-size: 20px;
    			font-family: 'Lato', sans-serif;
    			font-weight: 500;
    			border-radius: 5px;
    			box-shadow: 10px 10px 15px black;
    			transition: all .2s linear;
    		}

    		.accordion:hover {
    			box-shadow: none;
    		}
    */

    		.extra {
    			margin-top: 12px;
    		}
            .blog-details-content p{
                line-height: 180%;
                font-size: 18px;
                margin-bottom: 30px;
                font-weight: bold;
                text-align: justify;
                font-family: cursive;
            }
            .blog-details-content h3{
                    color: red;
                    font-weight: bold;
                    border-bottom: 2px solid #ddd;
                    margin-bottom: 15px;
                    padding-bottom: 4px;
            }

    		.new_color {
    			background: #304352;
    			/* fallback for old browsers */
    			background: -webkit-linear-gradient(to left, #d7d2cc, #304352);
    			/* Chrome 10-25, Safari 5.1-6 */
    			background: linear-gradient(to left, #d7d2cc, #304352);
    			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    		}

    		.accordion i {
    			font-size: 20px;
    			margin-right: 10px;
    			margin-left: 5px;
                color: #fff;
                font-size: 25px;
    		}

    /*
    		.active,
    		.accordion:hover {
    			background-color: #ccc;
    		}
    */

    		.panel {
    			padding-left: 18px;
    			background-color: white;
    			max-height: 0;
    			overflow: hidden;
    			transition: max-height 0.2s ease-out;
    		}

    		.panel h6 {
    			font-family: 'Lato', sans-serif;
    			font-weight: 600;
    			font-size: 16px;
    			color: #00051d;
    			margin-top: 10px;
    		}

    		.panel span i {
    			font-size: 16px;
    			color: #3477e2;
    			margin-right: 10px;
    		}

    		.panel span {
    			font-family: 'Open Sans', sans-serif;
    			font-weight: 600;
    			font-size: 12px;
    			color: #1e1e1e;
    			margin-top: 10px;
    		}



    		/*Accordian CSS End*/

    		/*Price part start*/
    		.price_list {
    			padding-top: 25px;
    			padding-bottom: 50px;
    		}

    		.price_list h3 {
    			font-family: 'Oswald', sans-serif;
    			font-weight: 500;
    			font-size: 25px;
    			color: #1e1e1e;
    			margin-bottom: 20px;
    		}

    		.price_list button {
    			font-family: 'Oswald', sans-serif;
    			font-weight: 400;
    			font-size: 20px;
    		}

    		/*price part end*/

    		/*Package Start*/
    		.package {
    			padding-top: 10px;
    			padding-bottom: 50px;
    		}

    		.package h3 {
    			font-family: 'Oswald', sans-serif;
    			font-weight: 500;
    			font-size: 25px;
    			margin-bottom: 10px;
    		}

    		.package_details {
    			height: 160px;
    			margin-top: 10px;
    			padding-top: 20px;
    			padding-right: 30px;
    			background: #304352;
    			background: -webkit-linear-gradient(to right, #d7d2cc, #304352);
    			background: linear-gradient(to right, #d7d2cc, #304352);
    			border-radius: 10px;
    			position: relative;
    			cursor: pointer;
    		}

    		.package_details h5 {
    			font-family: 'Ranga', cursive;
    			font-weight: 500;
    			font-size: 30px;
    			color: white;
    			margin-bottom: 10px;
    		}

    		.package_details p {
    			font-family: 'Open Sans', sans-serif;
    			font-size: 16px;
    			color: white;
    		}

    		.package_details .package_name {
    			position: absolute;
    			top: 50%;
    			left: 0;
    			padding: 12px 30px;
    			transform: translateY(-50%);
    			background: #4CA1AF;
    			background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);
    			background: linear-gradient(to right, #C4E0E5, #4CA1AF);
    			border: 2px solid white;
    			border-radius: 0px 20px 20px 0px;
    			transition: all .3s linear;

    		}
        .package_details:hover .package_name {
			left: 40px;
		}

		.package_name h6 {
			font-family: 'Ranga', cursive;
			font-size: 25px;
		}

		.package_name span {
			font-family: 'Open Sans', sans-serif;
			font-size: 16px;
			font-weight: 700
		}

		/*package end*/


		.bottom_banner {
			background-image: url(images/psi-vail-water.jpg);
			background-position: bottom left;
			background-size: cover;
			background-repeat: no-repeat;
			height: 400px;
		}
        #bonus_replay{
/*            color: red !important;*/
        }
        #bonus_replay:hover{
            color: blue !important;
        }
        #bonus_cencel:hover{
            background: #fff !important;
        }

	</style>
<!--latest Banner start-->
<section>
  <div class="latest_banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="latest_banner_text">
            <h2> ব্লগ ডিটেইলস </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




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
                                      <div class="details_heading">

                                          <img src="{{ asset('frontend_assets') }}/img/webporichiti2.jpg" alt="not found" class="img-fluid" style="border-radius: 5%">
                                          <div class="post-div">
                                             <p id="serial_p"><span style="font-weight: bold">15-December-2019,</span> <span>By-</span><span style="color:orange"> Rajiur Rahman</p>
                                          </div>
                                      </div>

                                    <div class="card p-2 mt-4" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

                                        <div class="card-body" >
                                              <div class="blog-details-content">
                                                  <p>
                                                       ওয়েব ডিজাইন হচ্ছে একটি ওয়েব সাইটের জন্য বাহ্যিক অবকাঠামো তৈরি করা । ওয়েবসাইট দেখতে কেমন হবে অথবা এর সাধারণ রূপ কেমন হবে তা নির্ধারণ করা । ওয়েব ডিজাইনার দের কাজ হচ্ছে আমরা নিয়মিত যে ওয়েবসাইট গুলো ভিজিট করে থাকি ক্লাইন্ট এর চাহিদা অনুযায়ী সেই রকম ওয়েবসাইট তৈরি করা ।
                                                  </p>
                                                  <h3>ওয়েব ডিজাইন কেন শিখবেন ?</h3>
                                                  <p>ইন্টারনেটে যে কোন ব্যবসা করতে গেলে সর্বপ্রথম যেটির প্রয়োজন হয় সেটি হচ্ছে ওয়েবসাইট। আর দিন দিন প্রতিটি ব্যবসাই ইন্টারনেটমুখী হয়ে উঠছে। আবার এই ওয়েবসাইট গুলোর মধ্যে প্রায় ৭০% ওয়েবসাইট ই প্রোফেশনাল ওয়েব ডিজাইনার দিয়ে তৈরি করানো হয়ে থাকে।তার মানে একটু ভাবুন তো ইন্টারনেটে যে ব্যবসাই আসুক না কেন যেহেতু ওয়েবসাইট তৈরি করা লাগবে, এজন্য একজন প্রোফেশনাল ওয়েব ডিজাইনারের প্রয়োজন হবেই হবে।এতে করে খুব সহজে বোঝা যাচ্ছে ওয়েব ডিজাইন কাজের ব্যপক চাহিদা রয়েছে। আরো আশার কথা হচ্ছে, যে হারে নতুন নতুন ব্যবসা অনলাইনে যুক্ত হচ্ছে ওই হারে ওয়েব ডিজাইনার তৈরি হচ্ছে না, এতে করে মার্কেটে প্রতিনিয়ত নতুন নতুন ওয়েব ডিজাইনার এবং ডেভেলপারের ঘাটতি বেড়েই চলেছে।আর যেহেতু এই কাজটির চাহিদাও আছে আবার কম্পিটিশন কিছুটা তুলনামূলক কম এজন্য আমার সাজেশন হচ্ছে- এটাই শিখুন। এটি-ই হবে নতুনদের জন্য একটা চমৎকার স্টার্টিং পয়েন্ট। ইন্টারন্যাশনাল অনলাইন মার্কেটপ্লেসে ওয়েব ডিজাইনার দের চাহিদা অনেক । আপনি যদি ওয়েব ডিজাইন ভালো করে শিখেন এবং ক্লাইন্ট এর জন্য যখন ওয়েবসাইট তৈরি করবেন প্রতিটি ওয়েবসাইট ডিজাইন করার জন্য ১৫০ ডলার থেকে শুরু করে ১০০০ ডলার পর্যন্ত আপনি পেতে পারেন । প্রোজেক্ট এর প্রাইস কম বা বেশী হতে পারে এটা সম্পূর্ণ নির্ভর করবে ক্লাইন্ট এর চাহিদা এবং কাজটি করতে কত দিন সময় লাগবে তার উপর ভিত্তি করে ।
                                                  </p>

                                                  <h3>ওয়েবসাইট ডিজাইন করার জন্য কি শিখবো ?</h3>
                                                  <p>আপনি যদি ওয়েবসাইট ডিজাইন শিখতে চান তাহলে প্রথমে যেটা লাগবে সেটা হচ্ছে ধৈর্য । আপনাকে নিয়মিত বাসায় চর্চা করতে হবে এবং সঠিকভাবে ধৈর্য ধরে নিয়মিত শিখে যেতে হবে । একটি ওয়েবসাইট ডিজাইন করার জন্য নিচের বিষয়গুলোর উপর অবশ্যই আপনার জ্ঞান থাকতে হবে ।</p>

                                                  <p style="font-weight: normal">১) এইচটিএমএল (HTML) – একটি ওয়েবসাইট এর জন্য প্রথমে মার্কআপ তৈরি করতে হয় । প্রথমেই আপনাকে এইচটিএমএল শিখতে হবে ওয়েবসাইট এর মার্কআপ তৈরি করার জন্য । আমাদের ইউটিউব চ্যানেলে এইচটিএমএল এর উপরে একটি সিরিজ টিউটোরিয়াল রয়েছে । আপনি যদি টিউটোরিয়াল গুলো দেখেন এবং নিয়মিত প্র্যাকটিস করেন তাহলে আপনি এইচটিএমএল এর মাধ্যমে যে কোন ওয়েবসাইট এর মার্কআপ ডিজাইন করতে পারবেন ।</p>
                                                  <p><a href="http://webtraininginstitute.com/free_course_details/1" target="_blank">এইচটিএমএল বাংলা ভিডিও টিউটোরিয়াল প্লেলিস্ট (ফ্রি কোর্স)</a></p>

                                                  <p style="font-weight: normal">২) সিএসএস (CSS) – সিএসএস এর মাধ্যমে একটি ওয়েবসাইটকে স্টাইল করা হয় । একটি ওয়েবসাইট এর কালার , ফন্ট ইত্যাদি সেট করতে হবে সিএসএস এর মাধ্যমে । এইচটিএমএল এবং সিএসএস যদি আপনি শিখে ফেলেন তাহলে আপনি খুব সহজেই স্ট্যাটিক ওয়েবসাইট তৈরি করতে পারবেন ।</p>
                                                  <p><a href="http://webtraininginstitute.com/free_course_details/2" target="_blank">সিএসএস বাংলা ভিডিও টিউটোরিয়াল প্লেলিস্ট (ফ্রি কোর্স)</a></p>

                                                  <p style="font-weight: normal">৩) জাভাস্ক্রিপ্ট (JavaScript) অথবা জেকুয়েরি (jQuery) – আপনারা যখন ওয়েবসাইটে ভিসিট করেন হয়তো দেখেছেন বিভিন্ন স্লাইডার যুক্ত করা থাকে এবং অনেক ধরনের অ্যানিমেশন থাকে যেমন লেখা বাম দিক থেকে , উপর থেকে , নিচ থেকে বিভিন্ন ভাবে আমাদের সামনে চলে আসে । এই কাজগুলো করা হয় জাভাস্ক্রিপ্ট এর মাধ্যমে । জাভাস্ক্রিপ্ট একটি প্রোগ্রামিং ল্যাঙ্গুয়েজ এবং এটি শিখতে যথেষ্ট সময় লাগবে । আপনি যদি দ্রুত শিখতে চান তাহলে জাভাস্ক্রিপ্ট এর পরিবর্তে আপনি জেকুয়েরি শিখতে পারেন । জেকুয়েরি হচ্ছে জাভাস্ক্রিপ্ট এর একটি লাইব্রেরি । অসংখ্য জেকুয়েরি প্লাগিন রয়েছে যেগুলো ব্যবহার করে আপনি খুব সহজে আপনার ওয়েবসাইটে স্লাইডার, অ্যানিমেশন ইত্যাদি ফিচার যুক্ত করতে পারবেন । </p>
                                                  <p><a href="http://webtraininginstitute.com/free_course_details/3" target="_blank"> জাভাস্ক্রিপ্ট বাংলা ভিডিও টিউটোরিয়াল প্লেলিস্ট (ফ্রি কোর্স)</a></p>

                                                  <p style="font-weight: normal">৪)রেস্পন্সিভ ওয়েব ডিজাইন - বর্তমান সময়েসবচাইতে জনপ্রিয় ডিভাইস এর নাম স্মার্টফোন। স্মার্টফোন এর জনপ্রিয়তার সাথে সাথে মোবাইল থেকে ওয়েবসাইটে ভিজিটের সংখ্যা দ্রুত বাড়ছে। গবেষনায় দেখা যায় ২০১৮ সালে মোট ওয়েবসাইট ভিজিট এর মধ্যে ৫২ শতাংশ এর বেশী স্মার্টেফোন ব্যবহারকারী। স্মার্টফোন এর এই দারুন জনপ্রিয়তা সার্চ ইন্জিনগুলোকে অনেকটা বাধ্য করছে ওয়েবসাইট এর মোবাইল ভিউকে গুরুত্ব দেয়ার জন্য। Google এর সর্বশেষ আপডেটে ওয়েবসাইট এর মোবাইল ভার্সনকে গুরুত্ব দেয়া হয়েছে এবং মোবাইল সার্চ ইন্জিন রেজাল্ট পেজে(SERP) যে ওয়েবসাইটগুলোর মোবাইল ভার্সন আছে শুধু সেগুলোকেই স্থান দেয়া হচ্ছে। কিন্তু কিভাবে ওয়েবসাইট এর মোবাইল বা ট্যাব ভার্সন তৈরী করা সম্ভব? রেস্পন্সিভ ওয়েব ডিজাইন এর মজাটাই এখানে। রেস্পন্সিভ ওয়েব ডিজাইন এর মাধ্যমে একটি ওয়েবসাইট মোবাইল বা অন্যান্য ডিভাইস এর জন্য অপটিমাইজ করা হয় যেন ওয়েবসাইটটি বিভন্ন ডিভাইস এ সুন্দর ভাবে প্রদর্শিত হয়। এখন আপনি প্রশ্ন করতে পারেন, ওয়েবসাইট এর ডিজাইন যদি রেস্পন্সিভ না হয় তাহলে কি ওয়েবসাইট মোবাইল থেকে দেখা যাবে না? অবশ্যই দেখা যাবে, কিন্তু সেক্ষেত্রে ওয়েবসাইট এর বিভিন্ন অংশ বিছিন্ন দেখাবে এবং ভিজিটর ওয়েবসাইট এর ছবি বা লেখা ঠিকমত দেখতে পারবে না। ওয়েবসাইটটি লোড হতেও বেশী সময় লাগবে। ফলে ভিজিটর দ্রুত আপনার ওয়েবসাইট থেকে বের হয়ে যাবে এবং আপনার ওয়েবসাইটটির বাউন্সরেট বাড়বে। বাউন্সরেট বাড়লে সার্চ ইন্জিন ধরেই নেবে ওয়েবসাইটটি রিলেভেন্ট নাহ। এবং আপনার সাধের ওয়েবসাইটটি তার র‌্যাংক হারাবে। তাই ওয়েবসাইট তৈরীর সময় সম্ভাব্য সব ডিভাইস এবং রেজ্যুলেশন এর উপর ভিত্তি করে ওয়েবসাইট ডিজাইন ও ডেভেলপমেন্ট করতে হবে। আর এটাই হল রেস্পন্সিভ ওয়েব ডিজাইন এর মূল বিষয়।দ্রুত পরিবর্তনশীল এই বিশ্বে টিকে থাকতে হলে প্রয়োজন বিশেষ যোগ্যতা। তাই আপনার ওয়েবসাইটটিকে টিকিয়ে রাখতে চাইলে অবশ্যই বিভিন্ন ডিভাইস এর জন্য রেস্পন্সিভ করে তৈরী করতে হবে। ইন্টারনেটে রেস্পন্সিভওয়েব ডিজাইন সম্পর্কিত হরেক রকম টুল ও রিসোর্স পাওয়া যায়। রেস্পন্সিভ ওয়েব ডিজাইন নিয়ে আমরা নিয়মিত অনক্যাম্পাস ও লাইভ ওয়ার্কশপ এর আয়োজন করে থাকি যেখানে বিষয়টি নিয়ে নিয়মিত আলোচনা করা হয়। আপনি যদি আরও বিস্তারিত জানতে চান তাহলে আমাদের প্রিমিয়াম ওয়েব ডিজাইন সাকসেস কোর্স টি কিনতে পারেন, শেখানে সবকিছু হাতে হাতে ধরে ধরে শিখিয়ে দেওয়া হয়েছে। </p>

                                                  <p style="font-weight: normal"> ৫) বুটস্ট্রাপ (Bootstrap) – রেস্পন্সিভ ওয়েবসাইট ডিজাইন করার জন্য বুটস্ট্রাপ হচ্ছে সবচেয়ে জনপ্রিয় সিএসএস ফ্রেমওয়ার্ক । আপনি যদি বুটস্ট্রাপ শিখেন তাহলে খুব অল্প সময়ের মাঝে আপনি একটি রেস্পন্সিভ ওয়েবসাইট ডিজাইন করতে পারবেন ।</p>

                                                  <p style="font-weight: normal"> ৬) পিএসডি টু এইচটিএমএল কনভার্সন (PSD TO HTML) – অনলাইন মার্কেটপ্লেসে পিএসডি টু এইচটিএমএল কনভার্সন এর কাজের প্রচুর চাহিদা রয়েছে । পিএসডি ডিজাইন করা ওয়েব ডিজাইনার এর কাজ না এই কাজটি করে থাকে গ্রাফিক্স ডিজাইনার । ক্লাইন্ট আপনাকে একটি পিএসডি ফাইল দিবে এবং সেই ফাইল এর ডিজাইন দেখে আপনাকে কোডিং করে ঠিক পিএসডি এর মতো একটি ওয়েবসাইট তৈরি করতে হবে ।</p>

                                                  <p style="color: darkorange"> এর বাইরে আরও অনেক কিছু শেখার আছে যেগুলো আমাদের প্রিমিয়াম কোর্সটিতে সম্পূর্ণভাবে দেওয়া আছে, আপনি চাইলে সেই কোর্সটি নিয়ে একজন প্রফেশনাল ওয়েব ডিজাইনের যা যা শেখা দরকার তার সবকিছু শিখে নিতে পারবেন।</p>

                                                  <p><a href="http://webtraininginstitute.com/premium_course" target="_blank">( প্রিমিয়াম কোর্সটি সম্পর্কে জানতে এখানে ক্লিক করুন )</a></p>

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



<!--Latest Banner end-->

@endsection