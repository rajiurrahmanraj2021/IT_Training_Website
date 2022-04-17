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

                                            <img src="{{ asset('frontend_assets') }}/img/bild.jpg" alt="not found" class="img-fluid" style="border-radius: 5%">
                                            <div class="post-div">
                                               <p id="serial_p"><span style="font-weight: bold">25-November-2019,</span> <span>By-</span><span style="color:orange"> Rajiur Rahman</p>
                                            </div>
                                        </div>

	                                    <div class="card p-2 mt-4" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body" >
                                                <div class="blog-details-content">
                                                    <p>
                                                         ঠিক এই মুহূর্তে প্রায় ১.২ বিলিয়ন  ওয়েবসাইট রয়েছে পৃথিবীতে।Yahoo এর করা এক জরীপ থেকে দেখা যায়, শুধুমাত্র আমেরিকাতেই প্রতি মাসে প্রায় ১৬ মিলিয়নের বেশী অর্থাৎ ১ কোটি ৬০ লাখেরও বেশী ওয়েবসাইট তৈরি করা হয়ে থাকে! যার প্রায় ৭০% এরও বেশী করা হয় প্রোফেশনাল ওয়েব ডিজাইনার হায়ার করে এবং যার মার্কেট ভেল্যু ২০.১ বিলিয়ন মার্কিন ডলার, বাংলাদেশী টাকায় যার পরিমাণ প্রায় ১৬ হাজার ৮০০ কোটি টাকা!আমাদের কাছে শুনতে অবাক লাগলেও এটাই সত্য এবং গোটা পৃথিবীতে এর পরিমাণ দিন দিন ব্যাপক হারে বেড়ে চলেছে।সবচাইতে মজার ব্যাপার হচ্ছে, যেখানে তুমুল হারে প্রতিদিন গ্রাফিক্স ডিজাইনার, ডাটা এন্ট্রি অপারেটরের সংখ্যা বেড়ে চলেছে তার তুলনায় নতুন ওয়েব ডিজাইনারের সংখ্যা একেবারেই নগণ্য। প্রতিদিন ওয়েব ডেভেলপমেন্ট সেক্টরের মার্কেট সাইজ বিদ্যুত গতিতে বেড়ে চললেও সেই হারে বাড়ছে না ওয়েব ডেভেলপারের সংখ্যা। এর ফলে বিশাল চাহিদা তৈরি হয়েছে এই সেক্টরে!এর সবচাইতে বড় প্রমাণ আপনি বিভিন্ন ফ্রীল্যান্স মার্কেটে কাজে বিড করতে গেলেই বুঝতে পারবেন। একটা গ্রাফিক্স ডিজাইন এর কাজে যে পরিমাণ আবেদন পরে, একই মাপের ওয়েব ডিজাইনের কাজ তার থেকে অনেক গুণ কম আবেদন পরে। তার মানে বোঝা যায় এক বিশাল ওয়ার্কার ঘাটতি রয়েছে এই সেক্টরে।আর এই জন্যই এখন নতুন ওয়েব ডিজাইনার এবং ডেভেলপাররা নতুন অবস্থাতেও খুব সহজেই প্রচুর কাজ পেয়ে যান।
                                                    </p>
                                                    <h3>এই সেক্টরে এত সম্ভাবনা থাকার পরেও মানুষ কেন আসতে চায় না?</h3>
                                                    <p>এর কারন হচ্ছে, এটি শিখতে সামান্য একটু কঠিন। স্বভাবতই মানুষ যেটা সহজ সেটাই শিখতে চায়, কিন্তু দুঃখের বিষয়, আমরা এটা একবার ভাবি না যে, যেটা সহজ সেটা তো সবাই ই শিখে, ফলে সেখানে কম্পিটিশন অনেক গুণ বেড়ে যায়, আর যেটা একটু কঠিন সেটা কিন্তু সবাই শিখতে পারে না, ফলে সেখানে কম্পিটিশন অনেক কম এবং কাজের ডিমান্ড অনেক বেশী।কাজেই, শিখতে সামান্য একটু কঠিন হলেও শেখা/পারিশ্রমিক অনুপাতে কিন্তু ওয়েব ডিজাইনকেই প্রাধান্য দিয়ে থাকে বুদ্ধিমানেরা 🙂</p>

                                                    <h3>ওয়েব ডিজাইন এন্ড ডেভেলপমেন্ট কি?</h3>
                                                    <P>এটি হচ্ছে ওয়েবসাইট তৈরি করার কাজ। যদি জানতে চান ওয়েবসাইট কি, তাহলে একটি ওয়েবসাইটের কমন উদাহরণ হলো- ফেসবুক।এই ফেসবুক যেমন তৈরি করা হয়েছে আমাদের সোশ্যাল এনগেজমেন্ট যেমন- ফ্রেন্ড দের সাথে চ্যাট করা, স্ট্যাটাস দেয়া, কমেন্ট করা ইত্যাদির জন্য, ঠিক তেমনি এক এক কোম্পানী তাদের এক এক রকমের কাজের জন্যও ওয়েবসাইট তৈরি করে।কেউ কেউ তাদের ওয়েবসাইটে গেম খেলার সুবিধা দেয়, কেউ আবার বিভিন্ন ইনফরমেশন শেয়ার করে, বিভিন্ন স্কুল, কলেজ গুলো অনলাইনে ভর্তির জন্য ওয়েবসাইট তৈরি করে, আবার কেউ কেউ তার কোম্পানীর বিভিন্ন তথ্য প্রদর্শন করানোর জন্যও ওয়েবসাইট তৈরি করে থাকে।যেমন- আপনি এখন আমাদের প্রতিষ্ঠানের ওয়েবসাইটে আছেন (www.webtraininginstitute.com)!! এখানে আমরা বিভিন্ন তথ্য শেয়ার করি এবং আপনিও এখন আমাদের দেয়া তথ্যগুলোই পড়ছেন (y)এখানে খেয়াল করবেন, আমরা কিন্তু বার বার ওয়েব ডিজাইন এবং ডেভেলপমেন্ট এই দুইটা পার্ট এর কথা বলছি, আসলে এ দুটো কি? চলুন জেনে নেই…</P>

                                                    <h3>ডিজাইন এবং ডেভেলপমেন্ট এর মধ্যে পার্থক্য কোথায়?</h3>
                                                    <p>ওয়েব ডিজাইন এবং ডেভেলপমেন্ট হচ্ছে একটা পূর্ণাঙ্গ ওয়েবসাইট তৈরির দুটো ধাপ। ডিজাইন হচ্ছে প্রথম ধাপ এবং ডেভেলপমেন্ট হচ্ছে শেষ ধাপ।ওয়েব ডিজাইন অংশে একটি ওয়েবসাইটের ফ্রন্ট-এন্ড অর্থাৎ ব্যবহারকারীরা যে অংশ দেখতে পায় সেটা করা হয়ে থাকে আর ডেভেলপমেন্ট অংশে ব্যাক-এন্ড অর্থাৎ একটি ওয়েবসাইটের ভেতরের ফাংশনাল পার্ট গুলো ডেভেলপ করা হয়ে থাকে।বিষয়টা ক্লিয়ার হবে যদি আমরা ফেসবুকের কথাই চিন্তা করি- ফেসবুকে আমরা যে বিভিন্ন কালার, লেখা, ছবি ইত্যাদি দেখি, এই প্রদর্শনের কাজ গুলো হয় ডিজাইন পার্ট এর মাধ্যমে, আর এই যে আমরা সেখানে রেজিস্ট্রেশন করতে পারি, পোস্ট করতে পারি, কমেন্ট করতে পারি এই জাতীয় ফাংশনাল কাজ গুলো আটোমেটিক করা হয় ডেভেলপমেন্ট পার্ট থেকে।</p>

                                                    <h3>একজন ওয়েব ডিজাইনার এর বেতন কত?</h3>
                                                    <p>Indeed.com এর দেয়া এক তথ্য অনুযায়ী একজন ওয়েব ডিজাইনার এর গড় বাৎসরিক বেতন ৬০,১৮২ মার্কিন ডলার। যা বাংলাদেশী টাকায় প্রায় ৪,৮১৪,৫৬০ টাকা, প্রতি মাসে হিসেব করলে দাড়ায়- ৪ লক্ষ টাকা!! এবার আপনি ই একটু ভেবে দেখুন, কেন আপনি এই পেশায় যুক্ত হবেন না??</p>

                                                    <h3>এর জন্য কি সাইন্স বিভাগের ছাত্র হতে হবে?</h3>
                                                    <p>অনেকেই ভেবে থাকি ওয়েব ডিজাইনার বা ডেভেলপার হওয়ার জন্য সাইন্স অথবা CSE এর স্টুডেন্ট হতে হয়। কথাটা সম্পূর্ণ ভূল। ওয়েব ডেভেলপার হওয়ার জন্য সাইন্স বিভাগের বা সিএসই এর স্টুডেন্ট হতে হয় না। যে কেউ কাজ শিখতে পারেন এবং এই সেক্টরে ক্যারিয়ার তৈরি করতে পারেন। প্রকৃতপক্ষে এর সাথে একাডেমিক পড়ালেখার কোন সম্পর্কই নেই, এটাও একটা জ্ঞান, এবং জ্ঞান সবাই অর্জন করতে পারে। আমাদের দেশের চাকরীর জন্য সার্টিফিকেট লাগে, কিন্তু জ্ঞান অর্জনের জন্য সার্টিফিকেট দরকার হয় না। কাজেই, নিশ্চিতভাবে আপনিও শিখতে পারেন ওয়েব ডেভেলপিং।</p>

                                                    <h3>কিভাবে শুরু করবেন ক্যারিয়ার?</h3>
                                                    <p>ওয়েব ডিজাইনে ক্যারিয়ার শুরু করার পূর্বে আপনাকে সিদ্ধান্ত নিতে হবে আপনি কি ডিজাইনার হবেন, নাকি ডেভেলপার, নাকি দুটোই। এক্ষেত্রে বলে রাখা ভাল, আপনি ওয়েব ডিজাইন না জেনে ভাল ডেভেলপার হতে পারবেন না কিন্তু ওয়েব ডেভেলপিং না জেনেও আপনি ভাল ডিজাইনার হতে পারবেন। এক্ষেত্রে আমাদের সাজেশন হচ্ছে- আপনি দুটোই শেখেন। অধিকাংশ ক্লাইন্ট ই চায় একটি ওয়েবসাইট ডিজাইন এবং ডেভেলপমেন্ট একজনের কাছ থেকেই করিয়ে নিতে কারন এতে করে তার সময় এবং টাকা দুটোই বেচে যায়। আর আপনি যদি দুটো কাজই জানেন তাহলে প্রথম দিকের ছোট ছোট ক্লাইন্ট গুলোকে আপনি নিজেই শুরু থেকে শেষ পর্যন্ত সাপোর্ট দিতে পারবেন। এতে করে আপনার প্রাথমিক লেভেল এর ইনকাম বেড়ে যাবে। ধীরে ধীরে আপনি যখন মার্কেটে আপনার অবস্থান তৈরি করে নিতে পারবেন তখন চাইলে আপনি শুধু ডিজাইন অথবা শুধু ডেভেলপমেন্ট করতে পারেন। তবে প্রাথমিক পর্যায়ে দুটো শেখাই জরুরী।</p>

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
