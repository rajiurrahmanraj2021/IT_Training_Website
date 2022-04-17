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

                                            <img src="{{ asset('frontend_assets') }}/img/upai.jpg" alt="not found" class="img-fluid" style="border-radius: 5%">
                                            <div class="post-div">
                                               <p id="serial_p"><span style="font-weight: bold">02-October-2019,</span> <span>By-</span><span style="color:orange"> Rajiur Rahman</p>
                                            </div>
                                        </div>

	                                    <div class="card p-2 mt-4" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body" >
                                                <div class="blog-details-content">
                                                    <p>
                                                         দিন দিন ওয়েব ডিজাইনারের চাহিদা বাড়ছে, কিন্তু দক্ষ ওয়েব ডিজাইনারের সংখ্যা আনুপাতিক হারে বাড়ছে না।“কাজেই একটু আধটু শিখেই নয়, বরং ভাল করে কাজ শিখতে পারলে কাজের অভাব হবেনা ইনশা-আল্লাহ্‌” পোস্টটি পুরো ১০ মিনিট সময় নিয়ে শুরু থেকে একদম শেষ পর্যন্ত মনোযোগ দিয়ে পড়ুন
                                                    </p>

                                                    <h3>ওয়েব ডিজাইনে কি পরিমাণ আয়ের সুযোগ আছে?</h3>
                                                    <P style="font-weight: normal">ওয়েব ডিজাইন দিয়ে অনলাইন ক্যারিয়ার শুরু করার অন্যতম প্রধান কারন হচ্ছে, এর ক্রমবর্ধমান কর্মক্ষেত্র। এটি শিখতে অন্যান্য অনেক কাজের তুলনায় সহজ এবং যেহেতু এর প্রচুর চাহিদা হয়েছে তাই শেখার পরে কাজ করার অফুরন্ত সুযোগ রয়েছে।এছাড়াও ওয়েব ডিজাইন শেখার আরেকটি প্রধান কারন হচ্ছে, এটি এখন শিখলে এখনই কাজ করা সম্ভব, তাই অন্যান্য কাজের মত কাজ করতে দীর্ঘদিন অপেক্ষা করতে হয় না।</P>
                                                    <p style="font-weight: normal">ডিজিটালাইজেশনের যুগে ওয়েবসাইট ছাড়া ব্যবসা করা প্রায় অসম্ভব হয়ে পড়ছে দিন দিন। মানুষ কোন তথ্য জানার দরকার হলেই এখন অনলাইনে সার্চ করে ঘরে বসেই তথ্য জানতে চায়।আর তাই প্রতিটা প্রতিষ্ঠানেরই কিন্তু ওয়েবসাইট বানানো লাগবেই লাগবে, অন্যথায় তারা ব্যবসা বেশিদিন চালিয়ে যেতে পারবে না।</p>

                                                    <h3>গোটা বাংলাদেশে ছোটখাট এবং মাঝারি কতগুলো ব্যবসা প্রতিষ্ঠান আছে বলে আপনার ধারনা?</h3>
                                                    <p style="font-weight: normal">যদি মিনিমাম ৫ লক্ষ ও ধরি, আর এই ৫ লক্ষ ব্যবসা প্রতিষ্ঠানের যদি ওয়েবসাইট বানানোর মিনিমাম খরচ ১৫ হাজার টাকা করেও হয় তাহলে- ৫০০০০০*১৫০০০=৭৫০০০০০০০০ বা ৭৫০ কোটি টাকার একদম রেডি মার্কেট আসতে যাচ্ছে ওয়েব ডিজাইন ফিল্ডে।এটা কিন্তু কোন বানোয়াট বা অবাস্তব কিছু না। আপনি চারপাশের অবস্থা দেখলেই বুঝতে পারবেন।আজকাল তো চায়ের দোকানদারের তথ্যও মানুষ গুগলে সার্চ করে। তাই যদি কাস্টমার ধরতে হয় তাহলে ইন্টারনেটে ওয়েবসাইট থাকতেই হবে প্রতিটা প্রতিষ্ঠানের। আর এখানেই হচ্ছে কাজ করার আসল সুযোগ!!</p>
                                                    <p style="font-weight: normal">তাহলে এবার ভাবুন, এই প্রায় ১ হাজার কোটি টাকার মার্কেটে কাজ করার জন্য দেশে আরো কত হাজার নতুন ওয়েব ডিজাইনার প্রয়োজন? এবং আপনি যদি এখনই নিজেকে ওয়েব ডিজাইনার হিসেবে ডেভেলপ করতে পারেন তাহলে আপনিও এই মার্কেট থেকে ভাল অ্যামাউন্ট আয় করতে পারেন।</p>
                                                    <p>অনলাইনে কাজ করতে গেলে খালি বিদেশি বায়ার না খুজে এইভাবে একটু ভাবলেই দেখা যায় আমাদের দেশেই কি পরিমাণ সুযোগ তৈরি হতে যাচ্ছে কয়েক বছরের মধ্যে!!!</p>

                                                    <h3>Yahoo এর একটি রিপোর্ট দেখুন..</h3>
                                                    <ul style="text-align: left;">
                                                        <li style="margin-bottom: 10px">1. শুধুমাত্র আমেরিকাতেই ২০.১+ বিলিয়ন মার্কিন ডলারের মার্কেট রয়েছে ওয়েব ডেভেলপমেন্ট খাতে</li>
                                                       <li style="margin-bottom: 10px">2. প্রতি মাসে পৃথিবীতে ১৬ মিলিয়নের বেশি ওয়েবসাইট তৈরি করা হচ্ছে</li>
                                                       <li style="margin-bottom: 10px">3. প্রায় ৭০ শতাংশ ওয়েবসাইট-ই প্রিমিয়াম হয় অর্থাৎ, কাউকে না কাউকে টাকা দিয়ে করানো হয়ে থাকে </li>
                                                    </ul>
                                                    <p>এবার চিন্তা করুন, এই মার্কেটে আপনি কেন নিজেকে নিয়োগ করবেন না??? এখনই সুযোগ, যত দিন যাবে প্রতিযোগীতা আরো বাড়বে…  তাই এখন থেকেই নিজেকে প্রস্তুত করুন…আর এই ক্রমবর্ধমান কাজের ক্ষেত্রেই যদি আপনি আপনার ক্যারিয়ার গড়তে পারেন তাহলে এটাই হবে আপনার লাইফের সেরা সিদ্ধান্ত। সত্যিই কিন্তু এই মার্কেট এমনটাই বড়…  এখনো কি মনে হয় না, ওয়েব ডিজাইন শেখার এই সুযোগটা কাজে লাগাই??</p>

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
