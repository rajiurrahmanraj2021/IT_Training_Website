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

                                            <img src="{{ asset('frontend_assets') }}/img/Upajon.jpg" alt="not found" class="img-fluid" style="border-radius: 5%">
                                            <div class="post-div">
                                               <p id="serial_p"><span style="font-weight: bold">12-November-2019,</span> <span>By-</span><span style="color:orange"> Rajiur Rahman</p>
                                            </div>
                                        </div>

	                                    <div class="card p-2 mt-4" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body" >
                                                <div class="blog-details-content">
                                                    <p>
                                                         আমরা সব সময়ই বলি, অনলাইনে আয়ের দুটি রাস্তা। এক, চাকরি করা এবং দুই, ব্যাবসা করা। আমাদের বাস্তব জীবনের মত অনলাইনেও আমরা চাকরি এবং ব্যবসা দুটোই করতে পারি। আর আজকে আপনাদের সাথে কথা বলব অনলাইনের একটি স্থায়ী ইনভেস্ট সম্পর্কে যেটা আপনি একবার করলে সারাজীবন বসে বসেই খেতে পারবেন। হ্যা, এমন একটি ইনভেস্ট হচ্ছে একটি ওয়েবসাইট। একটি ওয়েবসাইট হতে পারে আপনার সারা জীবনের স্থায়ী উপার্জনের ক্ষেত্রে। তাহলে চলুন দেখি কিভাবে?
                                                    </p>

                                                    <h3>শুরুতেই একটু জানি, মানুষ কেন ওয়েবসাইট তৈরি করে?</h3>
                                                    <P>একটি ওয়েবসাইট হচ্ছে আপনার যে কোন প্রতিষ্ঠানের অনলাইন পরিচয়। যে কোন কোম্পানি, স্কুল, কলেজ ইত্যাদি সকল প্রতিষ্ঠান তাদের নামে ওয়েবসাইট করে থাকে যাতে করে ইন্টারনেটে তাদের সম্পর্কে জানা যায় এবং তাদের বিভিন্ন সেবা বা সার্ভিস সম্পর্কে মানুষ যেন সহজেই জানতে পারে। এই জাতীয় ওয়েবসাইট গুলো হচ্ছে মূলত প্রাতিষ্ঠানিক ওয়েবসাইট।</P>
                                                    <p>কিন্তু প্রাতিষ্ঠানিক ওয়েবসাইটের বাইরেও কিন্তু রয়েছে আরও প্রচুর ওয়েবসাইট যেগুলো হচ্ছে ব্যক্তিগত বা ব্যবসায়িক। এই ধরণের ওয়েবসাইট গুলোতে সাধারণত বিভিন্ন টিপস, ট্রিক, আইডিয়া, বিনোদন, খবর ইত্যাদি বিষয় দেয়া হয়ে থাকে। এই গুলোকে আপনি অ-প্রাতিষ্ঠানিক ওয়েবসাইট ও বলতে পারেন। এই ধরনের ওয়েবসাইট গুলো করা হয় সাধারণত সখের বসে অথবা, লং টাইম ব্যাবসা করার জন্য।</p>
                                                    <p>যেমন ধরুন, বাংলা ভাষায় বর্তমানে সবচেয়ে বড় টেকনোলোজি সাইট কোনটি? অবশ্যই, টেকটিউনস। এটা কিন্তু কোন প্রাতিষ্ঠানিক ওয়েবসাইট নয়, এটা হচ্ছে টেকনোলজি সংক্রান্ত ওয়েবসাইট বা ব্লগ যেখানে বিভিন্ন মানুষ বা লেখকেরা টেকনোলজি বিষয়ে তাদের বিভিন্ন জ্ঞান শেয়ার করে। এতে করে প্রতিদিন হাজার হাজার লোক টেকটিউনে প্রবেশ করে বিভিন্ন বিষয় শেখার জন্য। তাহলে টেকটিউন হচ্ছে একটি নন-প্রাতিষ্ঠানিক ওয়েবসাইট। ঠিক একই ভাবে আপনিও যদি এই ধরনের একটি ওয়েবসাইট প্রতিষ্ঠা করে সঠিক জায়গায় নিয়ে আসতে পারেন তাহলে আপানার বাকী জীবন এই ওয়েবসাইট দিয়েই চালিয়ে দিতে পারবেন যদি আপনি বুদ্ধিমান হন।</p>

                                                    <h3>তাহলে কিভাবে একটি ওয়েবসাইট বা ব্লগ থেকে আয় করা যায়?</h3>
                                                    <p>শুরুতেই বলে নেই, নতুনদের মাঝে ওয়েবসাইট বা ব্লগ নিয়ে বেশ ভাল কনফিউশন দেখা যায়। আসলে ব্লগ হচ্ছে এক ধরনের ওয়েবসাইট যেখানে নিয়মিত বিভিন্ন বিষয়ে লিখালিখি করা হয়। সেটা হতে পারে যে কোন বিষয়। আর ওয়েবসাইট হচ্ছে এক ধরনের সাইট যেখানে সাধারণত তেমন কোন চেঞ্জ হয় না, বা যেখানে লিখালিখির ব্যাপার থাকে না। আপনি ওয়েবসাইট বা ব্লগ যেটাই করুন না কেন সেখান থেকে অবশ্যই আয় সম্ভব। চলুন সামনের দিকে এগুনো যাক।</p>

                                                    <h3>ওয়েবসাইট / ব্লগ থেকে আয় করার অনেক পদ্ধতি রয়েছে। নিচে সংক্ষেপে কয়েকটি পদ্ধতি নিয়ে আলোচনা করা হলঃ</h3>
                                                    <p style="font-weight: normal">১. বিজ্ঞাপন থেকে আয়ঃ আপনার ওয়েবসাইটে যদি বেশ ভাল ট্রাফিক (ট্রাফিক হচ্ছে ভিজিটর বা মানুষ যারা আপনার ওয়েবসাইট ভিজিট করবে) থাকে তাহলে আপনি আপনার ওয়েবসাইটে অন্যান্য কোম্পানীর বিজ্ঞাপন প্রদর্শন করিয়ে সেখান থেকে আয় করতে পারেন।</p>
                                                    <p style="font-weight: normal">যেমন- আমরা প্রায় সময়ই বিভিন্ন ওয়েবসাইটে ঢুকলে ওয়েবসাইটের বিভিন্ন জায়গায় বিভিন্ন পন্যের বিজ্ঞাপন দেখে থাকি। এই জাতীয় বিজ্ঞাপন গুলো ওয়েবসাইটে প্রদর্শন করানোর মাধ্যমে আপনি আয় করতে পারেন। আপনার ওয়েবসাইটে যে কোম্পানির বিজ্ঞাপন প্রদর্শন করাবেন সেই কোম্পানী আপনাকে একটি নির্দিষ্ট মূল্য পে করবে তাদের বিজ্ঞাপন আপনার ওয়েবসাইটে প্রদর্শন করানোর জন্য।</p>
                                                    <p style="font-weight: normal">তাহলে এবার বলতে পারেন, এই সকল কোম্পানির বিজ্ঞাপন পাব কোথায়? এই ধরনের বিজ্ঞাপন পাওয়ার জন্য অনলাইনে অনেক জনপ্রিয় সাইট আছে (যেমন- গুগল অ্যাডসেন্স)। এই সকল সাইট থেকে কিভাবে অ্যাড নিবেন এবং কিভাবে আয় হবে সেটা নিয়ে ইনশাআল্লাহ পরবর্তীতে বিস্তারিত আলচনা করা হবে।</p>

                                                    <h3> এখন শুধু ওয়েবসাইট থেকে আয় করার কিছু প্রসেস সম্পর্কে জানি</h3>
                                                    <p style="font-weight: normal">২. নিজের কোন পন্য বিক্রি করে আয়ঃ আপনার ওয়েবসাইট যদি জনপ্রিয় হয়ে ওঠে এবং প্রতিদিন বেশ ভাল ট্রাফিক থাকে তাহলে আপনি আপনার নিজের তৈরি করা কোন পন্যের বিজ্ঞাপন সেখানে দিতে পারেন এবং সেখান থেকে আপনি আপনার পন্যের জন্য বেশ ভাল সেল পেতে পারেন। তবে এটা শুধুমাত্র, যদি আপনার তৈরি করা কোন প্রোডাক্ট থাকে তাহলেই সম্ভব। আপনার যদি বিক্রি করার মত কোন পণ্য না থাকে তাহলে এই ক্ষেত্রে সম্ভব নয়।</p>

                                                    <p style="font-weight: normal">৩. অ্যাফিলিয়েট মার্কেটিং করে আয়ঃ অ্যাফিলিয়েট মার্কেটিং হচ্ছে অনেকটা সেলসম্যান এর মত। এখানে, আপনাকে বিভিন্ন কোম্পানির পণ্য বিক্রি করে দিতে হবে এবং প্রতিবার যখন আপনি অন্য কোম্পানির কোন পণ্য আপনার নিজের মাধ্যমে বিক্রি করতে পারবেন তখন আপনাকে সেই বিক্রয়কৃত অর্থ থেকে কমিশন দেয়া হবে। আপনি চাইলে আপনার ওয়েবসাইটে এই জাতীয় মার্কেটিং করতে পারেন। নিজের সাইট বা ব্লগ করে আমাদের দেশে অনেকেই অ্যাফিলিয়েট মার্কেটিং করছেন। কাজেই আপনিও এই জাতীয় কাজ করে আয় করতে পারেন।</p>

                                                    <p style="font-weight: normal">৪. ইমেইল কালেকশনঃ আমরা সবাই মোটামুটি কম বেশি নেট থেকে বই, গান, ভিডিও ইত্যাদি ডাউনলোড করে থাকি। তবে, মাঝে মাঝে বিভিন্ন ওয়েবসাইট থেকে বই বা মুভি ডাউনলোড করতে গেলে আমরা দেখে থাকি আমাদের ইমেইল অ্যাড্রেস দিতে বলে। আমরা ইমেইল অ্যাড্রেস দিলে তারপর আমাদেরকে সেটা ডাউনলোড করতে দেয়।  কিন্তু কেন এমনটা হয়, কেন ইমেইল এর ঠিকানা চায় ওই ডাউনলোড সাইট গুলো? এটা হচ্ছে এই জন্য যে, আপনি গান ডাউনলোড করার সময় আপনার যে ইমেইল এড্রেসটি দিবেন সেটি ওই ওয়েবসাইট কর্তৃপক্ষ সংরক্ষন করে রাখবে। এই ভাবে যতজন ওই গানটি ডাউনলোড করতে তত জনের ইমেইল অ্যাড্রেস তার কাছে থাকবে।</p>

                                                    <p style="font-weight: normal">কিন্তু সব কথার বড় কথা হল, ওয়েবসাইটে যদি ট্রাফিক বা ভিজিটর না থাকে তাহলে কোন লাভই নেই। কারন, যে সাইটের ভিজিটর নেই সেই সাইটে কেউই টাকা খরচ করে বিজ্ঞাপন দিবে না। আর তাই যে কোন ওয়েবসাইট আপনার আয়ের উৎস তখনই হবে যখন আপনার সাইটটি জনপ্রিয় হয়ে উঠবে এবং প্রতিদিন প্রচুর পরিমাণ লোক আপনার সাইট ভিজিট করবে। কিন্তু এই পর্যায়ে একটি ওয়েবসাইটকে নিয়ে আসার জন্য প্রয়োজন প্রচুর পরিশ্রম আর ধৈর্য্য।</p>

                                                    <h3>তাহলে কি সিদ্ধান্ত নিলেন? কোনটা করবেন? ওয়েবসাইট নাকি ব্লগ?</h3>
                                                    <p style="font-weight: normal">অনেকেই কনফিউশনে থাকেন যে ওয়েবসাইট করবেন নাকি ব্লগ করবেন। কিন্তু এমনটার কারন হচ্ছে এই দুইটার মধ্যে পার্থক্য না বোঝা। আসলে ব্লগ আর ওয়েবসাইটের মধ্যে খুব বেশি পার্থক্য নেই। ব্লগ হচ্ছে এক ধরনের ওয়েবসাইট যেখানে বিভিন্ন লেখক তার লিখা পাবলিশ করতে পারে। আর সকল ব্লগকেই এক একটি ওয়েবসাইট বলা চলে। তাই যেহেতু পার্সোনাল বিজনেস বা বিজ্ঞাপন থেকে আয় করা হচ্ছে আমাদের ওয়েবসাইটের উদ্দেশ্য তাই আমার মতে ব্লগ সাইট বানানোই উত্তম কারন, এখানে আপনি নিয়মিত লিখতে পারবেন এবং নতুন নতুন লিখা পড়ার জন্য নিয়মিত বিভিন্ন ভিজিটর পেতে থাকবেন। আর তাছাড়া, ব্লগিং হচ্ছে বর্তমান সময়ের প্রচুর জনপ্রিয় প্রেক্ষাপট। এর মাধ্যমে বিভিন্ন লেখক তার লিখা গোটা বিশ্বের কাছে ছড়িয়ে দিতে পারে। তবে, এর অপব্যবহার কারই কাম্য নয়।</p>

                                                    <h3>কি বিষয়ে ওয়েবসাইট/ব্লগ তৈরি করবেন?</h3>
                                                    <p>আসলে প্রথম অবস্থায় সবচাইতে বড় যে সমস্যাটি হয় সেটি হচ্ছে, কোন বিষয়ে ব্লগ করবেন সেটাই খুজে না পাওয়া? এটার মূল কারন হচ্ছে তাড়াহুড়া করা। আমরা যখন কোন উৎসাহমূলক লিখা পড়ি বা কারন সফলতার গল্প শুনি তখনই মনে মনে সিদ্ধান্ত নিয়ে ফেলি আমিও তেমন হব, এর জন্য যত পরিশ্রম করতে হয় করব। হ্যা, এমন ভাবাই শ্রেয়। কিন্তু আমাদের প্রধান সমস্যা হচ্ছে আমরা ধৈর্য্য ধরার চেস্টা করতে পারি না, আমাদের সব কিছু ইন্সট্যান্ট বা তৎক্ষণাৎ দরকার। আর এই জন্য শেষ পর্যন্ত আমাদের তেমন কিছুই হয় না। আর তাই যেহেতু আপনার ব্লগ বা ওয়েবসাইট একদিন বা দুইদিনের জন্য নয়, যেহেতু এটা সারা জীবনের জন্য তাই হুট করেই সিদ্ধান্ত নিয়ে ফেলবেন না যে আপনি কোন বিষয়ে ওয়েবসাইট তৈরি করবেন। ভাবুন, দেখুন, শুনুন, বুঝুন তারপর সিদ্ধান্ত নিন আপনি কি করবেন এবং কেন করবেন এবং কিভাবে করবেন?</p>

                                                    <h3>ব্লগ বা ওয়েবসাইটের বিষয় নির্বাচন করার ক্ষেত্রে কিছু টিপসঃ</h3>
                                                    <p style="font-weight: normal">1. আপনি ভাল জানেন এবং আপনার ইন্টারেস্ট আছে এমন যে কোন বিষয়েই আপনি ওয়েবসাইট তৈরি করতে পারেন। আপনি যেটাই জানুন না কেন সেটা নিয়েই শুরু করে দিতে পারেন লিখালিখি। শেয়ার করুন আপনার নিজের জ্ঞান। সেটা কোন বিষয় সেটা কোন ব্যাপার না, কোয়ালিটি থাকলে সব বিষয়েই সাইট করা যায়। এমন অনেকেই আছেন যারা তাদের সখের অনেক কিছু নিয়ে ওয়েবসাইট তৈরি করেও সেখান থেকে প্রতি মাসে কয়েক হাজার ডলার আয় করছেন।</p>

                                                    <p style="font-weight: normal">2. আপনি আপনার পড়াশুনার বিষয়টিকে ওয়েবসাইট বানানোর কাজে লাগাতে পারেন। যেমন ধরুন, আপনি একজন বিজনেস ম্যানেজম্যান্ট এর ছাত্র। তাহলে আপনি চাইলে বিজনেস সংক্রান্ত বিষয় নিয়ে নিয়মিত লেখালেখির অভ্যাস করতে পারেন। আপনার সাইটে প্রতিদিন, সম্ভব না হলে প্রতি সপ্তাহে অন্তত একটি করে পোস্ট লিখুন। চেস্টা করুন যেটা সেটা ইন্টারেস্টিং হয় এবং মানুষ বা ভিজিটর যাতে সেটা পড়ে নতুন কিছু জানতে পারে। এই ভাবে লিখতে থাকলে দেখবেন একসময় আপনি পার্মানেন্ট ভিজিটর পেয়ে যাবে যারা আপনার সাইট নিয়মিত ভিজিট করবে।</p>

                                                    <p style="font-weight: normal">3. তবে এই ক্ষেত্রে, কখনো হেজিটেশনে ভুগবেন না যে কি লিখব, কেমন হবে, কেউ পছন্দ করবে কিনা? আপনি সেটাই লিখবেন যেটা আপনি জানেন। লিখতে লিখতেই এক সময় আপনি আপনার ব্লগকে জনপ্রিয় করে তুলতে পারবেন। আপনি যত লিখবেন আপনার লিখা তত আকর্ষণীয় হয়ে উঠতে থাকবে। একবার ব্লগ জনপ্রিয় হয়ে উঠলে সেখানে আপনি অন্যান্য লেখকদের ও আমন্ত্রণ করতে পারেন আপনার ব্লগ লিখার জন্য। এবং অন্যান্য ব্লগাররাও যদি আপনার ব্লগে লিখা শুরু করে দেয় তাহলেই তো কেল্লাফতে ! এরপর আপানাকে আর আশা করি পেছনে ফিরতে হবে না।</p>

                                                    <p>এই ভাবে যদি একটি সাইট কে দাড় করিয়ে ফেলতে পারেন তাহলে এখানে বিজ্ঞাপন সহ উপরোল্লেখিত উপায় সমূহ অবলম্বন করে আপনি আপনার ওয়েবসাইটকে পার্মানেন্ট আয়ের উৎস হিসেবে গড়ে তুলতে পারবেন।</p>
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
