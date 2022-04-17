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

                                            <img src="{{ asset('frontend_assets') }}/img/step.jpg" alt="not found" class="img-fluid" style="border-radius: 5%">
                                            <div class="post-div">
                                               <p id="serial_p"><span style="font-weight: bold">03-July-2019,</span> <span>By-</span><span style="color:orange"> Rajiur Rahman</p>
                                            </div>
                                        </div>

	                                    <div class="card p-2 mt-4" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body" >
                                                <div class="blog-details-content">

                                                    <p>
                                                         ইন্টারনেট থেকে আয়!- অনেকের কাছে আজব কিছু, অনেকের কাছে সুপরিচিত শব্দ। অনেকেই সফল, আবার অনেকে খুজেই চলেছেন কিভাবে কি? আবার অনেকেই বেশি আয়ের লোভে পড়ে ধরা খেয়েছেন হাজার এমনকি লাখ টাকাও!! কিন্তু কখনো জেনেছেন কি আসল বাস্তবতা? কি এটা, কি করা উচিত, কিভাবে করা উচিত? এই সম্পর্কিত সুপার গাইডলাইন নিয়েই আজকের পর্ব।
                                                    </p>

                                                    <p>যদি শুরু থেকে শেষ পর্যন্ত মনোযোগ দিয়ে পড়তে পারেন তাহলে আশা করি আপনাকে আর কাউকে জিজ্ঞেস করতে হবে না- “কিভাবে অনলাইন/ইন্টারনেট থেকে আয় করব?”</p>

                                                    <p style="font-weight: normal">সবার জন্য প্রথমে ছোট্ট করে বলে দিই- “ফ্রীল্যান্সিং বা অনলাইনে আয় সম্পূর্ণ বাস্তব এবং লিগেল পদ্ধতিতে ইনকাম। এটা করে কোটিপতি হওয়া সম্ভব কিন্তু তাই বলে এটা ‘এক মাসে কোটিপতি’- হওয়ার মত কোন গোপন মন্ত্র নয়। আমাদের বাস্তব জীবনের মত এখানেও ইনভেস্ট করে ব্যবসা করা যায় আবার কোন প্রকার ইনভেস্ট ছাড়াও চাকরীর মাধ্যমে আয় করার ব্যবস্থা আছে। যারা পরিশ্রম ছাড়াই আয় করতে চান বা স্বল্প সময়ে ধনী হতে চান তাদের জন্য এটা নয়। পরিশ্রম এবং শেখার মনমানসিকতা না থাকলে আপনি এই পোস্টটি এখানেই পড়া বন্ধ করে দিতে পারেন। আর যদি মনে করেন পরিশ্রম করেই আয় করবেন তাহলে সামনে পড়ুন।</p>

                                                    <p style="font-weight: normal">যেহেতু পৃথিবী দিন দিন ইন্টারনেটমূখী হচ্ছে তাই এর ভবিষ্যৎ অত্যন্ত সুদূরপ্রসারী। এটা করার জন্য আপনাকে কোন সুপার হিউম্যান বা অসাধারন প্রতিভার অধিকারী হতে হবে না, সঠিক গাইডলাইন নিয়ে অনেক সাধারন ছেলেমেয়েরাও ইন্টারনেট থেকে ভাল পরিমাণ অর্থ উপার্জন করছে। আমাদের সরকার এ নিয়ে ইতিমধ্যেই নানা উদ্যোগও গ্রহণ করেছে এবং পেপার পত্রিকা, এফ.এম. রেডিও বা বিভিন্ন টিভি প্রোগ্রামেও আপনারা ফ্রীল্যান্সিং নিয়ে হয়ত শুনে থাকবেন। ”</p>
                                                    <img src="{{ asset('frontend_assets') }}/img/make-me-clear-about-online-earning-s.png" alt="not found" class="img-fluid" style="margin-bottom: 40px">

                                                    <h3>ইন্টারনেট থেকে আয় সম্পর্কিত কিছু ঝাপসা বিষয়, যা সম্পর্কে আপনাকে অবশ্যই ক্লিয়ার হতে হবেঃ</h3>

                                                    <div style="text-align: left">
                                                        <ul>
                                                            <li style="margin-bottom: 10px">1) ইন্টারনেটে চাকরী এবং ব্যাবসা দুটোই করা যায়</li>
                                                            <li style="margin-bottom: 10px">2) চাকরীর ক্ষেত্রে আপনি কাজ শিখে ঘরে বসেই বিভিন্ন দেশের ক্লাইন্টের কাজ করতে পারবেন, এটাকেই আমাদের দেশে ফ্রীল্যান্সিং বলা হয়ে থাকে</li>
                                                            <li style="margin-bottom: 10px">3) ইন্টারনেটে চাকরী করতে কোন সার্টিফিকেট লাগে না, ভাল করে কাজ জানা থাকলে এবং দক্ষতার পরিচয় রাখতে পারলে এখানে কাজ করা যায়</li>
                                                            <li style="margin-bottom: 10px">4) ব্যাবসার ক্ষেত্রে আপনি যে ব্যাবসা করবেন সেটা সম্পর্কে জেনে, ইনভেস্ট করে শুরু করতে হয়</li>
                                                        </ul>
                                                    </div>
                                                    <p>তার মানে বোঝা যাচ্ছে, আপনাকে ইন্টারনেটে কাজ করার পূর্বে সিদ্ধান্ত নিতে হবে আপনি কি চাকরী করবেন, নাকি ব্যাবসা করবেন।</p>
                                                    <p>চাকরী করার জন্য প্রয়োজন কাজ শেখা এবং দক্ষতা, আর ব্যাবসার জন্য প্রয়োজন ইনভেস্ট মানি, রিস্ক নেয়ার সাহস।</p>
                                                    <img src="{{ asset('frontend_assets') }}/img/Earn-From-Internet---IT-Bari.png" alt="not found" class="img-fluid" style="margin-bottom: 40px">
                                                    <p style="color: orange">তাহলে এবার ভাবুন, আপনি কোনটা করবেন? চাকরী – নাকি – ব্যাবসা?</p>
                                                    <h3>ইন্টারনেটে ব্যাবসাঃ</h3>

                                                    <p style="font-weight: normal"> এই পর্বে আমরা ব্যাবসা নিয়ে কিছু বলব না। এর কারন হচ্ছে, যেহেতু আপনি এখানে একেবারেই নতুন তাই শুরুতেই বিভিন্ন টেকনিক্যাল টার্ম গুলো বুঝবেন না অথবা আপনি ইনভেস্ট করে আয় করতে চাইবেন না। এর জন্য প্রথমে চাকরির বিষয় গুলো ভাল করে বুঝুন। সেগুলো বুঝতে পারলে সেখান থেকেই আপনি ব্যাবসার আইডিয়া তৈরি করতে পারবেন এবং পরবর্তীতে ইন্টারনেটে ব্যাবসা করতে পারবেন।</p>
                                                    <h3>এবার চাকরী নিয়ে কিছু কথা বলিঃ</h3>
                                                    <p style="font-weight: normal"> ইন্টারনেটে চাকরি করার জন্য আপনাকে কোন ধরনের প্রাতিষ্ঠানিক সার্টিফিকেটধারী হতে হবে না, বা আপনাকে সুপার হিউম্যান ও হতে হবে না। এখানে বিভিন্ন বিষয়ের উপর (যেমন- ওয়েব ডিজাইন, SEO, গ্রাফিক্স ডিজাইন, সফটওয়্যার তৈরি ইত্যাদি ) প্রচুর কাজ পাওয়া যায়। যদি আপনি নির্দিষ্ট কোন বিষয়ে কাজ শিখে দক্ষ হতে পারেন তাহলে আপনিও কোন ইনভেস্টমেন্ট ছাড়াই কাজ করতে পারেন।</p>
                                                    <img src="{{ asset('frontend_assets') }}/img/You-should-follow-these-to-get-proper-online-earning-guideline.png" alt="not found" class="img-fluid" style="margin-bottom: 40px">

                                                    <h3>তবে এর জন্য আপনাকে ফলো করতে হবে নিচের স্টেপগুলোঃ</h3>
                                                    <div style="text-align: left">
                                                        <ul>
                                                            <li style="margin-bottom: 10px">1) প্রথমে কাজ শিখতে হবে</li>
                                                            <li style="margin-bottom: 10px">2) অনলাইনে থাকা বিভিন্ন চাকরিদাতা ওয়েবসাইট বা ফ্রীল্যান্সিং সাইট থেকে কাজ খুজতে হবে</li>
                                                            <li style="margin-bottom: 10px">3) সেখানে পাওয়া কাজ সফলভাবে সম্পন্ন করে সেই অর্থ আপনার ব্যাংকে ট্রান্সফার করতে হবে</li>

                                                        </ul>
                                                    </div>

                                                    <P> ** বিষয়টা আমাদের বাস্তব জীবনের মতই। কাজ শিখলে যেমন চাকরী করা যায়, তেমনিভাবে ইন্টারনেটেও চাকরী করতে পারেন। পার্থক্য এতটুকুই, এখানে আপনি স্বাধীন। আপনার মন চাইলে কাজ করবেন, আর মন না চাইলে করবেন না। কাজ করলে টাকা আসবে, আর না করলে আসবে না।</P>
                                                    <p style="color: brown">তাহলে বোঝা যাচ্ছে, ইন্টারনেট থেকে আয় করতে গেলে প্রথমে অবশ্যই কোন একটা বিষয়ে কাজ শিখতে হবে। </p>

                                                    <h3>কাজ শেখার জন্য নিচের স্টেপ গুলো ফলো করুনঃ</h3>

                                                    <div style="text-align: left">
                                                        <ul>
                                                            <li style="margin-bottom: 10px">1) প্রথমেই জানতে হবে ইন্টারনেটে কি কি বিষয়ের উপরে চাকরী বা কাজ করা যায়</li>
                                                            <li style="margin-bottom: 10px">2) সেই বিষয় গুলো সম্পর্কে কয়েকদিন ভাল করে ঘাটাঘাটি করুন</li>
                                                            <li style="margin-bottom: 10px">3) দেখুন এবং ভাবুন, কোন বিষয়টি আপনার জন্য ভাল হবে বা আপনার পরিস্থিতির সাথে যায়</li>

                                                            <li style="margin-bottom: 10px">3) ভেবে চিন্তে একটা নির্দিষ্ট টপিক সিলেক্ট করুন যেটা শিখে আপনি দক্ষ হবেন</li>
                                                            <li style="margin-bottom: 10px">3) সেটা সম্পর্কে রিসার্চ শুরু করুন এবং প্রাথমিক ধারনা নিন, এবং নিতে থাকুন</li>
                                                            <li style="margin-bottom: 10px">3) প্রয়োজন হলে বিভিন্ন টিউটোরিয়াল সংগ্রহ করে সেটার কাজ শিখুন, প্রয়োজনে ভাল কোন প্রতিষ্ঠানে ভর্তি হয়ে কোর্স করে নিন</li>
                                                            <li style="margin-bottom: 10px">3) ২-৩ মাস নিজেকে শেখার চরম পর্যায়ে নিয়ে যান এবং ভাল করে কাজ শেখার পর প্রচুর হারে প্র্যাক্টিস করুন</li>
                                                            <li style="margin-bottom: 10px">3) নিজে নিজে ৪-৫ টা প্রোজেক্ট করুন বা কোন প্রতিষ্ঠানের ফ্রী কাজ করে দিন</li>
                                                            <li style="margin-bottom: 10px">3) এবার আপনি নিজেকে ইন্টারন্যাশনাল মার্কেটে কাজ করার উপযোগী মনে করতে পারেন</li>

                                                        </ul>
                                                    </div>

                                                    <p style="color: orangered">হ্যা, হয়ত  অনেকেই অধীর আগ্রহে খুজছেন কোন কোন টপিক আপনাকে নির্দিষ্টভাবে শিখতে হবে।</p>
                                                    <h3>ইন্টারনেটে সাধারণত যে সকল বিষয়ে কাজ পাওয়া যায়ঃ</h3>

                                                     <div style="text-align: left">
                                                        <ul>
                                                            <li style="margin-bottom: 10px">1) Web Design</li>
                                                            <li style="margin-bottom: 10px">2) Web Development</li>
                                                            <li style="margin-bottom: 10px">3) Graphics Design (Logo Design, Animation- 2D, 3D)</li>

                                                            <li style="margin-bottom: 10px">3) SEO- Search Engine Optimizaiton</li>
                                                            <li style="margin-bottom: 10px">3) Customer Support / Call Center</li>
                                                            <li style="margin-bottom: 10px">3) Digital Marketing- SEM, SMM</li>
                                                            <li style="margin-bottom: 10px">3) More, More and More Thousands of Categories…</li>
                                                        </ul>
                                                    </div>

                                                    <p>ওপরে অনলাইনে করতে পারা যায় এমন কিছু কমন কাজের তালিকা তুলে ধরা হল। এগুলোর বাইরে অনেক রকমের কাজ পাওয়া যায়, তবে এগুলোই সবচাইতে কমন।</p>

                                                    <h3>আপনার জন্য প্রথমে কোনটা শেখা উচিত?</h3>

                                                    <p style="font-weight: normal">অধিকাংশ ক্ষেত্রেই এই প্রশ্ন যখন আপনি কোন বড় ভাইকে করবেন, তখন তিনি আপনাকে ধরিয়ে দিবে ওয়েব ডিজাইন, বা গ্রাফিক্স ডিজাইন বা এই জাতীয় উনার পছন্দমত কিছু একটা।</p>
                                                    <p style="font-weight: normal">কিন্তু বলুন তো, আপনি কাজ করবেন এবং আপনিই টাকা আয় করবেন, তাহলে এখানে আপনি কেন না জেনে বুঝেই আরেকজনের কথা শুনবেন?</p>

                                                    <p style="color: green">আমার মতামত হচ্ছে,</p>
                                                    <p style="font-weight: normal">প্রথমে আপনি বিভিন্ন কাজ গুলো সম্পর্কে জানুন, বুঝুন এবং ভেতরে ঢুকে বের করুন কোন কাজ গুলাতে ইনকাম বেশি এবং কোন কাজ গুলো আপনার সাথে যায়।</p>

                                                    <p style="font-weight: normal">সাধারণত, যে কাজ গুলো শিখতে কঠিন সেগুলোর দাম অনেক বেশী এবং প্রতিযোগীতা কম, অপরদিকে যে কাজ গুলো শিখতে সোজা সেগুলো দাম তুলনামূলক কম এবং প্রতিযোগীতাও বেশী।</p>

                                                    <p style="font-weight: normal">সাধারণত, যে কাজ গুলো শিখতে কঠিন সেগুলোর দাম অনেক বেশী এবং প্রতিযোগীতা কম, অপরদিকে যে কাজ গুলো শিখতে সোজা সেগুলো দাম তুলনামূলক কম এবং প্রতিযোগীতাও বেশী।</p>
                                                    <P style="font-weight: normal">* যেমন ধরুন- অ্যাপ্লিকেশন ডেভেলপমেন্ট বা সফটওয়্যার ডেভেলপমেন্ট হচ্ছে ইন্টারনেটের সবচাইতে দামী কাজগুলোর একটি। এখন, এখানে টাকা বেশি আছে দেখেই আপনি হুট করে সিদ্ধান্ত নিয়ে বসে থাকবেন আপনি অ্যাপ্লিকেশন ডেভেলপমেন্ট শিখবেন, এমন কিন্তু মোটেও উচিত হবে না। কারন, টাকার পাশাপাশি আপনাকে দেখতে হবে এটি শিখতে আপনার কত সময় লাগবে এবং আপনার হাতে কত সময় আছে, এছাড়া এটি আপনার পরিস্থিতির সাথে যায় কিনা।</P>

                                                    <P style="font-weight: normal">আপনাকে বুঝতে হবে, আপনার কোন কাজে ইন্তারেস্ট বা আগ্রহ আছে, আপনি কোনটা সহজ মনে করেন, আপনার কোনটা করতে ভাল লাগে। আপনার ভাল লাগার উপরে অন্য কারো চাপানো মতকে কোন সময় প্রাধান্য দিবেন না। সব সময় মনে রাখবেন, আপনি যদি আপনার কাজে আনন্দ না পান তাহলে আপনি কখনোই ওই কাজে বেশীদূর এগুতে পারবেন না। এই জন্য প্রত্যেকের উচিত, কাজ শেখার পূর্বে কমপক্ষে, ১৫-৩০দিন সময় নিয়ে বিভিন্ন বিষয়ের কাজ সম্পর্কে ঘাটাঘাটি করা, সেগুলো সম্পর্কে জানা, বোঝা এবং সবশেষে নিজেকে যেটার যোগ্য এবং যেটাতে আপনি নিজেকে আগ্রহী বোধ করেন সেটার দিকেই এগুনো। মনে রাখবেন, আপনি বড় ভাইদের কাছ থেকে শুধু সাজেশন নিবেন, সিদ্ধান্ত সম্পূর্ণ আপনার নিজ বুদ্ধিতেই নিতে হবে। তাহলেই সফলতা সম্ভব।</P>

                                                    <h3>আচ্ছা তাহলে বিভিন্ন বিষয়ের কাজ সম্পর্কে কোথায় জানব?</h3>
                                                    <p style="font-weight: normal">ইচ্ছা থাকলে উপায় হবেই। প্রয়োজন শুধু সময় নিয়ে খোজা। গুগল কে কাজে লাগিয়ে আমরা অনলাইনের বিভিন্ন কাজ সম্পর্কে বিস্তারিত তথ্য পেতে পারি। এছাড়াও, বাংলায় বিভিন্ন ব্লগ রয়েছে যেগুলোর বিভিন্ন পোস্ট পড়ে সহজেই আমরা কাজ সম্পর্কে আইডিয়া পেতে পারি।</p>
                                                    <p style="font-weight: normal">যেমন- আপনি যদি ওয়েব ডিজাইন (Web Design) এর কাজ সম্পর্কে জানতে চান তাহলে কি করবেন? প্রথমেই গুগলে সার্চ করবেন- “What is Web Design” লিখে। সেখান থেকে এই সম্পর্কে কিছু তথ্য পড়ে নিবেন। এর পরে সার্চ দিতে পারেন- “How much time does it takes to learn web design for beginners” এই নিয়ে কিছু তথ্য পড়ুন। এর পরে আবার সার্চ করতে পারেন- “what I need to know to learn web design” বা “work opportunity for a web designer” এই ভাবে প্রতিটি বিষয় নিয়ে গুগলে সার্চ করুন এবং সেখানে প্রাপ্ত বিভিন্ন সাইট বা ব্লগ থেকে পড়ে জেনে নিন কোন কাজ কেমন হবে। এখানে শুধুমাত্র প্রাথমিক বিষয় গুলো জানলেই চলবে।</p>
                                                    <p style="font-style: italic">বিঃ দ্রঃ প্রচুর পরিমাণ ধৈর্য আর পড়াশুনার ইচ্ছা না থাকলে, আপনি এই লাইনে কিছুই করতে পারবেন না।</p>

                                                    <p style="font-weight: normal">ইন্টারনেট থেকে উপার্জনের সিদ্ধান্ত সারাজীবনের জন্য। তাই প্রয়োজন সঠিক সিদ্ধান্ত। কারন, শুরুতেই যদি ভূল সিদ্ধান্ত নিয়ে ফেলেন তাহলে বেশিদূর যেতে পারবেন না এবং হতাশায় ভুগতে হবে। আপনি যদি এর জন্য শুরুতে ১ মাস সময় নিয়ে ভাল মত রিসার্চ করে কি কাজ শিখবেন সেটার সঠিক সিদ্ধান্ত না নিতে পারেন তাহলে কিছুই সম্ভব নয়।</p>

                                                    <p style="font-weight: normal">আশা করছি, মোটামুটি সবাই এখন বিভিন্ন বিষয়ে কাজ গুলো সম্পর্কে খুব ভাল আইডিয়া নিতে পারবেন, এবং নিজের পছন্দ মত কোন বিষয় সিলেক্ট করতে পারবেন যেটাতে আপনি দক্ষ হবেন।</p>

                                                    <p style="font-weight: normal"> <span style="color: orange"> টিপসঃ </span>  একই সাথে অনেক গুলো বিষয় সিলেক্ট করবেন না, প্রথমে একটা নির্দিষ্ট টপিক সিলেক্ট করুন এবং সেটার উপর কাজ শিখে খুব ভাল করে দক্ষতা অর্জন করুন। পরে যদি মনে করেন আরও শিখবেন তখন ভিন্ন কোন টপিক শিখতে পারেন। এখানে অনেক সময় দেখবেন এক টপিক শিখতে গেলে আরেকটা শিখতে হতে পারে, এই ক্ষেত্রে আপনাকে ভেবে চিন্তে সিদ্ধান্ত নিতে হবে, এবং দেখতে হবে আপনার হাতে সময় কেমন থাকে এবং আপনি এর জন্য কেমন সময় ব্যায় করলে কতদিন লাগতে পারে বিষয়টি কমপ্লিট করতে। এইভাবেই সম্পন্ন হবে আপনার প্রথম স্টেপ।</p>

                                                   <p><a href="http://webtraininginstitute.com/free_course" target="_blank">আমাদের অনলাইন ফ্রি কোর্সগুলো দেখতে এখানে ক্লিক করুন</a></p>
                                                    <p><a href="http://webtraininginstitute.com/premium_course" target="_blank">আমাদের অনলাইন প্রিমিয়াম কোর্সগুলো সম্পর্কে জানতে এখানে ক্লিক করুন</a></p>


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
