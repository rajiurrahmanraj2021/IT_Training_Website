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

                                            <img src="{{ asset('frontend_assets') }}/img/free.jpg" alt="not found" class="img-fluid" style="border-radius: 5%">
                                            <div class="post-div">
                                               <p id="serial_p"><span style="font-weight: bold">21-September-2019,</span> <span>By-</span><span style="color:orange"> Rajiur Rahman</p>
                                            </div>
                                        </div>

	                                    <div class="card p-2 mt-4" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body" >
                                                <div class="blog-details-content">
                                                    <p>
                                                         ফ্রিল্যান্সার বা ফ্রিল্যান্সিং শব্দ দুইটির সাথে আমরা সবাই কমবেশি পরিচিত। স্বাধীন ভাবে নিজের পছন্দ মত কাজ করা এবং ভালো আয় এর নিশ্চয়তার কারনে অনেকের কাছেই ফ্রিল্যান্সিং বা মুক্তপেশা এখন প্রথম পছন্দের নাম। কিন্তু কোন কাজটি আপনি শিখবেন অথবা কোথায় থেকে শুরু করবেন? কাজই বা কোথায় করবেন? আজ আমরা ফ্রিল্যান্সিং বিষয়টি নিয়ে বিস্তারিত আলোচনা করার চেস্টা করবো। চেস্টা করবো আপনার সবগুলো প্রশ্নের উত্তর খুজতে। তাহলে শুরু করা যাক,
                                                    </p>

                                                    <h3>ফ্রিল্যান্সিং কি?</h3>
                                                    <P style="font-weight: normal">ফ্রিল্যান্সিং হল মুক্ত পেশা। তার মানে আপনি এমন এক জায়গায় কাজ করছেন যেখানে আপনার জন্য ধরাবাধা কোন সময় নির্ধারন করা নেই। ফ্রিল্যান্সিং পেশায় আপনি আয় করবেন আপনার নিজের দক্ষতাকে পুজি করে এবং স্বাধীনভাবে। এজন্যই একজন ফ্রিল্যান্সার একই সাথে স্বাধীন এবং তার কাজের ক্ষেত্রে দক্ষ। আপনার অর্জিত সার্টিফিকেটের চাইতে আপনার দক্ষতার মূল্য এই পেশায় সবচাইতে বেশী। এছাড়া উদ্যোক্তা হওয়ার সুযোগতো রয়েছেই।<br></P>

                                                    <h3>কেন ফ্রিল্যান্সার হবেন?</h3>
                                                    <p style="font-weight: normal">চলুন দেখে আসি ফ্রিল্যান্সিং পেশার অন্যতম সুবিধাগুলো কি কি,</p>
                                                    <div style="text-align: left">
                                                        <ul>
                                                        <li style="margin-bottom: 10px;">1) স্বাধীন ভাবে নিজের পছন্দ মতো কাজ করা যায়</li>
                                                        <li style="margin-bottom: 10px;">2) দেশে এবং বিদেশে দক্ষ জনবলের ব্যাপক চাহিদা রয়েছে</li>
                                                        <li style="margin-bottom: 10px;">3) ভালো আয় এর নিশ্চয়তা</li>
                                                        <li style="margin-bottom: 10px;">4) নিজের পারিশ্রমিক নিজেই নির্ধারন করতে পারবেন</li>
                                                        <li style="margin-bottom: 10px;">5) কোনও নির্দিষ্ট ডিগ্রি বা অ্যাকাডেমিক সার্টিফিকেট এর প্রয়োজন হয় না</li>
                                                        <li style="margin-bottom: 10px;">6) পার্ট টাইম অথবা ফুল টাইম দুই ভাবেই কাজ করতে পারবেন  </li>
                                                        <li style="margin-bottom: 10px;">7) নিজেই একজন উদ্যোক্তা হিসেবে কোম্পানি বা এজেন্সি প্রতিষ্ঠা করা যায়</li>
                                                    </ul>
                                                    </div>
                                                    <p>ফ্রিল্যান্সার হিসেবে কাজ করার ক্ষেত্র অনেক ব্যাপক। বিশ্বব্যাপী ফ্রিল্যান্সিং সেবা গ্রহনের ক্ষেত্রে বাংলাদেশ হল পছন্দের তালিকার দেশগুলোর মধ্যে ২য়। ২০১৬ সালে ফ্রিল্যান্সিং মার্কেটের পরিমান ছিল প্রায় ১.৫ ট্রিলিয়ন ডলার। বিভিন্ন ধরনের কাজ আছে তার মধ্যে থেকে নিজের স্কিল বা দক্ষতার উপর ভিত্তি করে কাজ বেছে নিতে পারবেন। স্বল্প সময়ে প্রশিক্ষনের মাধ্যমে আপনি দক্ষতা অর্জন করতে পারবেন। কোন বিষয়ে এবং কোথায় থেকে প্রশিক্ষন নিবেন সেই বিষয়ে আলোচনা করছি একটু পরেই।</p>
                                                    <h3>কোথায় কাজ করবেন?</h3>
                                                    <p style="font-weight: normal">ফ্রিল্যান্সিং এর সবচাইতে মজার বিষয় হল আপনি অনলাইন বা লোকাল মার্কেট দুই জায়গাতেই কাজ করতে পারবেন। এখানে আমরা অালোচনা করবো অনলাইন মার্কেট নিয়ে। অনলাইনে কাজ করার এই জায়গাগুলোকে বলা হয় মার্কেটপ্লেস। একটি মার্কেটপ্লেস হলো ক্রেতা বা বায়ার এবং বিক্রেতা বা সেলারের মিলন মেলা। বিভিন্ন দেশ থেকে বায়াররা তাদের কাজগুলোর চাহিদা প্রকাশ করেন বা সেলারদের কে বেছে নেন। কাজ পাওয়ার প্রথম ধাপ হল এই মার্কেটপ্লেসগুলোতে অ্যাকাউন্ট বা নিজের প্রফাইল তৈরী করা। চলুন জেনে নেই কিছু প্রচলিত এবং জনপ্রিয় মার্কেটপ্লেস এর নাম,</p>

                                                    <h3>৫টি জনপ্রিয় ফ্রিল্যান্সিং মার্কেটপ্লেস এর নাম:</h3>
                                                    <div style="text-align: left">
                                                        <ul>
                                                            <li>1) Freelancer</li>
                                                            <li>2) Upwork</li>
                                                            <li>3) Fiverr</li>
                                                            <li>4) Guru</li>
                                                            <li>5) PeoplePerHour</li>
                                                        </ul>
                                                    </div>

                                                    <p>ফ্রিল্যান্সিং মার্কেটপ্লেস গুলো এইখানে মধ্যস্থতার কাজ করে। বায়ার তার কাজের চাহিদা পোস্ট করেন। সেলাররা সেই চাহিদাগুলোতে বিড করেন বা কাজ করার আগ্রহ প্রকাশ করেন। বায়ার তার পছন্দমত সেলারকে বেছে নেন এবং কাজ শেষে পেমেন্ট করেন। ফ্রিল্যান্সিং মার্কেটপ্লেসগুলো এই পেমেন্ট থেকে কিছু অংশ কেটে নেয়। কিছু মার্কেটপ্লেসে কাজ পাওয়ার পদ্ধতি আলাদা যেমন Fiverr, যেখানে আপনাকে আপনার দক্ষতার উপর ভিত্তি করে গিগ (একে প্রপোজাল বলা যেতে পারে) তৈরী করতে হয়। সেলার হাজারো গিগ এর মধ্য থেকে তার পছন্দ অনুযায়ী গিগ এ অর্ডার করেন।</p>

                                                    <h3>ফ্রিল্যান্সার হওয়ার জন্য আপনার করনীয়:</h3>
                                                    <p style="font-weight: normal">আমি আগেই বলেছি ফ্রিল্যান্সিং মার্কেট প্লেসে কাজের ক্ষেত্র অনেক ব্যাপক। ডাটা এন্ট্রি থেকে শুরু করে ফেসবুকের অ্যাকাউন্ট খোলা, এসইও, ওয়েব ডিজাইন, ওয়েব ডেভেলপমেন্ট, গ্রাফিক্স ডিজাইন, গেমস ডেভেলপমেন্ট, মোবাইল অ্যাপ্লিকেশন, পার্সোনাল অ্যাসিস্ট্যান্ট ইত্যাদি। এগুলো তো শুধু প্রচলিত কাজ এর একাংশ। এছাড়া হাজারো অপ্রচলিত কাজ আছে যা শিখে নিজেকে দক্ষ হিসেবে তৈরী করে ফ্রিল্যান্সিং এর মাধ্যমে আয় করতে পারবেন।</p>
                                                    <p style="font-weight: normal">আমি আগেই বলেছি ফ্রিল্যান্সিং মার্কেট প্লেসে কাজের ক্ষেত্র অনেক ব্যাপক। ডাটা এন্ট্রি থেকে শুরু করে ফেসবুকের অ্যাকাউন্ট খোলা, এসইও, ওয়েব ডিজাইন, ওয়েব ডেভেলপমেন্ট, গ্রাফিক্স ডিজাইন, গেমস ডেভেলপমেন্ট, মোবাইল অ্যাপ্লিকেশন, পার্সোনাল অ্যাসিস্ট্যান্ট ইত্যাদি। এগুলো তো শুধু প্রচলিত কাজ এর একাংশ। এছাড়া হাজারো অপ্রচলিত কাজ আছে যা শিখে নিজেকে দক্ষ হিসেবে তৈরী করে ফ্রিল্যান্সিং এর মাধ্যমে আয় করতে পারবেন।</p>


                                                   <p style="font-weight: normal">ওয়েব ট্রেনিং ইনস্টিটিউট বাংলাদেশে সফলতার সাথে আন্তর্জাতিক মানের ফ্রিলান্সিং প্রশিক্ষন প্রদান করে আসছে বিভিন্ন ধরনের ফ্রি এবং প্রিমিয়াম অনলাইন কোর্স দিয়ে। এখানে প্রশিক্ষনের পাশাপাশি থাকবে বিভিন্ন ফ্রিল্যান্সিং মার্কেটপ্লেসে কাজ করার দিকনির্দেশনা। </p>

                                                   <p><a href="http://webtraininginstitute.com/free_course" target="_blank">আমাদের অনলাইন ফ্রি কোর্সগুলো দেখতে এখানে ক্লিক করুন</a></p>
                                                    <p><a href="http://webtraininginstitute.com/premium_course" target="_blank">আমাদের প্রিমিয়াম কোর্সগুলো সম্পর্কে জানতে এখানে ক্লিক করুন</a></p>


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
