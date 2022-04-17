@section('condition_active')
  active
@endsection
@section('web_title')
     শর্তাবলী
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
								line-height: 150%;
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
<!--banner part start-->
<section>
	<div class="latest_banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="latest_banner_text">
						<h2> Terms and Conditions </h2>
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
                                        <div class="details_heading">

                                        </div>

	                                    <div class="card p-2 mt-4" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body" >
                                                <div class="blog-details-content">
                                                    <p style="font-weight: normal">
                                                         আমাদের কোর্সগুলো কেনার মাধ্যমে আপনি হবেন আমাদের স্টুডেন্ট এবং আমরা আপনার শিক্ষক, আমাদের মধ্যে সম্পর্কটা খুব সুন্দর থাকুক এই প্রত্যাশায় কোর্স কেনার পূর্বে দয়া করে আমাদের টার্মস এন্ড কন্ডিশনস গুলো খুব ভালভাবে পড়ে নিন। আমরা চাইনা আপনি ভুল করে কোন কোর্স কিনে ফেলেন এবং পরবর্তীতে আমাদেরকে দোষারোপ করেন। আমরা চাই আপনার সাথে আমাদের সম্পর্ক স্বচ্ছ রাখতে। আর এজন্যই আমাদের সুস্পষ্ট টার্মস এন্ড কন্ডিশনসঃ
                                                    </p>
                                                    <h3 > কোর্সের ডিভিডি বা সিক্রেট লিংক কি, আমরা অন্য কারো সাথে শেয়ার করতে পারবো? </h3>
                                                    <p style="font-weight: normal"> ১) কর্তৃপক্ষের পূর্বানুমতি ব্যতিত যে কোন কোর্স ম্যাটেরিয়ালস ডিস্ট্রিবিউশন/অন্য কারো কাছে শেয়ার করা সম্পূর্নরুপে নিষিদ্ধ এবং আইনত দন্ডনীয় অপরাধ। আমি আশা করি আপনি এরকম কোন কাজ করবেন না যেটা সামগ্রিক ভাবে সবাইকেই ক্ষতিগ্রস্থ করতে পারে। সত্যি কথা বলতে, এই কোর্স ম্যাটেরিয়ালগুলো প্রস্তুত করতে আমাকে অনেক পরিশ্রম করতে হয়েছে, এটাও আপনার স্বাভাবিক বিবেচনাবোধ থেকে বিবেচনা করবেন। যদি সত্যি কিছু শেখার উদ্দেশ্য নিয়ে আমাদের ডিভিডিগুলো ক্রয় করে থাকেন, তাহলে আমাদের বিশ্বাস আপনারা এই কাজটি করবেন না।
                                                    </p>

                                                    <p style="font-weight: normal"> ২) অনুগ্রহ করে ওয়েব ট্রেনিং ইনস্টিটিউট এর সাপোর্ট গ্রুপ এবং ফেইসবুক পেজে যেকোন ধরনের ব্যাক্তিগত আক্রমন এবং হিংসাত্মক কথাবার্তা থেকে বিরত থাকবেন। এরকম যেকোন কাজের ফলশ্রুতিতে আপনাকে সাপোর্ট গ্রুপ এবং পেইজ থেকে আপনার অ্যাকাউন্ট যেকোন সময় রিমুভ করা হতে পারে ।
                                                    </p>

                                                    <p style="font-weight: bold"> কোর্স ডিটেইলস দেখতে <a href="{{ url('premium_course_details') }}" target="_blank">এখানে ক্লিক করুন</a></p>

                                                    <p style="font-weight: bold; color:#11af33"> এই কোর্সটিতে কি কি সেখানো হবে নিচের ভিডিওটিতে খুব ভালো করে বলে দেওয়া আছে দেখে নিনঃ</p>
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/jcSqHUC-vt8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                                                    <h3 style="margin-top: 30px">অনলাইনে আয় সম্পর্কেঃ</h3>
                                                    <p style="font-weight: normal">ফ্রীল্যান্সিং বা অনলাইন থেকে আয় সম্পূর্ণ একটি বৈধ উপার্জন প্রক্রিয়া। এটা কোন ক্লিক করে আয়ের কিছু নয়। আমরা এমন কোন কিছু নিয়ে কোর্স তৈরি করি না যেগুলো এক কথায় ভন্ডামী (যেমন- ক্লিক করলেই লাখ লাখ টাকা এমন)</p>

                                                    <p style="font-weight: normal">আমাদের এই কোর্স গুলো রাতারতি বড়লোক হয়ে যাওয়ার কোন কোর্স নয়। এই কোর্সগুলো কেনার প্রথম শর্তই হচ্ছে আপনার ধৈর্য্য এবং কাজ করার মানসিকতা থাকতে হবে।</p>


                                                    <p style="font-weight: normal">কোর্স গুলো কিনলেই যে আপনি ইন্টারনেট থেকে ৩-৬ মাসের মধ্যে লাখ লাখ টাকা আয় করা শুরু করে দিবেন এমন নয়। যেহেতু এই পুরো ব্যাপারটি নির্ভর করছে আপনি কি করছেন কতটুকু সময় দিচ্ছেন, কতটুকু শ্রম দিচ্ছেন এই বিষয়গুলোর উপর কাজেই আপনার সফলতার গ্যারান্টি আমরা দিতে পারছি না। প্রকৃতপক্ষে এটা কোন প্রতিষ্ঠান বা ব্যক্তিই দিতে পারবে না। আপনার সফলতা আপনার কর্মের উপরে নির্ভরশীল, আমরা শুধু মিথ্যা কথা বলে কোর্স বিক্রি করতে চাই না, যদি কাজ করার মানসিকতা না থাকে তাহলে কোর্স গুলো কিনে খুব একটা লাভ হবে না।</p>


                                                    <p style="font-weight: normal">তবে হ্যা, যদি কোর্স গুলো খুব ভাল করে শিখেন এবং আমাদের দেখানো নিয়ম অনুযায়ী কাজ করেন তাহলে ইনশাআল্লাহ্‌ কাজ করে আয় করতে পারবেন। এবং অনেক স্টুডেন্টই সফলতার সাথে কাজ করে আয় করছে।</p>


                                                    <p style="color: darkviolet">ওয়েব ট্রেনিং ইনস্টিটিউট আমাদের এই ওয়েবসাইট থেকে যেকোন কোর্স কেনার ক্ষেত্রে ধরে নেয়া হবে যে আপনি এই টার্মস এবং কন্ডিশনগুলো পড়েছেন এবং সেগুলোতে রাজী হয়েছেন।</p>

                                                    <p style="font-weight: normal">ওয়েব ট্রেনিং ইনস্টিটিউট এর সাথে আপনার শেখা আনন্দময় হোক!</p>

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
