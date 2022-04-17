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

                                            <img src="{{ asset('frontend_assets') }}/img/larning.jpg" alt="not found" class="img-fluid" style="border-radius: 5%">
                                            <div class="post-div">
                                               <p id="serial_p"><span style="font-weight: bold">05-September-2019,</span> <span>By-</span><span style="color:orange"> Rajiur Rahman</p>
                                            </div>
                                        </div>

	                                    <div class="card p-2 mt-4" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body" >
                                                <div class="blog-details-content">
                                                    <p>
                                                         আমরা অনেক কিছুতে এগিয়ে গেলেও অনলাইন লার্নিং ক্ষেত্রে অন্যদের তুলনায় এখনো অনেক পিছিয়ে আছি, আসলে আমাদের এই বিষয়টিতে কম অভ্যস্ততায় মূল কারণ। আসুন আমরা এর উত্তর খুঁজি :
                                                    </p>


                                                    <P style="font-weight: normal"> ১. খরচ অনেক কম – আমাদের বর্তমান বাস্তবতায় লেখাপড়ার খরচ অনেক বেড়ে গেছে , তাই আমরা চাইলেও অনেক বিষয়ে আগ্রহ থাকা সত্ত্বেও সেই বিষয়ে দক্ষতা অর্জন করতে পারছিনা। স্বাভাবিক জীবনযাত্রার ব্যায় বহন করে নতুন কিছু শেখার জন্য খরচ করা অনেক কষ্টসাধ্য হয়ে যাই, অথচ আমরা যদি একই বিষয়টি অনলাইনে ঘরে বা বাইরে যেখানেই সুবিধা হয় বসে শিখতে চাই সেক্ষেত্রে অর্ধেকেরও কম কোনো কোনো ক্ষেত্রে তিন ভাগের এক ভাগ খরচ করেই শিখতে পারি।</P>
                                                    <p style="font-weight: normal"> ২. অনেক সময় বেঁচে যায় – আমরা যে যেখানেই থাকিনা কেন বস্তুত সব সময় কিছু না কিছু নিয়ে ব্যাস্ত থাকি। যেমন কেউ একাডেমিক পড়ালেখা, কেউ চাকুরী বা ব্যবসা, খেলাধুলা, ঘুরাঘুরি অথবা আড্ডাবাজি তাই যখনি নতুন কিছু শিখতে যাই সময়টা বের করা অনেক কঠিন হয়ে যায়, আর এক্ষেত্রে শুধু কোনো কোর্সের নির্দিষ্ট সময়ইনা সাথে যাতায়াতেও অনেক সময় ব্যয় হয় কিন্তু আমরা যদি একই বিষয় অনলাইন এ শিখি তাহলে নিজের সুবিধামতো সময় নিতে পারি এবং সময়ও অনেক কম লাগে, যেমন কোনো প্রতিঠানে ২ ঘন্টার ক্লাস করতে এলে যাওয়া আসা এবং ক্লাস এর সময় সহ ৪-৫ ঘন্টা লেগে যায় আর জ্যাম থাকলে তো দ্বিগুণও লাগতে পারে। কিন্তু অনলাইন এ শুধু ক্লাসের ২ ঘন্টা সময় দিলেই হয়ে যাচ্ছে।</p>
                                                    <p style="font-weight: normal"> ৩. মনোযোগ এবং নিজের পছন্দমতো পরিবেশ তৈরি করা যায়- যেকোনো কিছু শেখার ক্ষেত্রে মনোযোগ তথা একাগ্রতা খুবই গুরুত্বপূর্ণ, এর ব্যাতিক্রম হলে নির্দিষ্ট সময় ব্যায় করেও কাঙ্খিত ফলাফল আসেনা। সাধারণত ক্লাস রুমে যখন আমরা কোনো পাঠ নেই সেক্ষেত্রে তার আশেপাশের পরিবেশ যদি শান্ত এবং আরামদায়ক না হয় তখন আমরা মনোযোগ হারিয়ে ফেলি। তবে অনলাইন এ আপনি আপনার সুবিধামতো স্থানে বসে নিজের পছন্দমতো পরিবেশ তৈরি করে নিতে পারবেন। আরেকটি বিষয় উল্লেখ্য অনেকে আছেন যারা ক্লাসের মাঝে কোনো কিছু জিজ্ঞেস করতে বা প্রশ্ন করতে ভয় পান বা ঘাবড়ে যান সেক্ষেত্রে অনলাইন এ আপনি খুব সহজেই এই জড়তা থেকে বেরিয়ে আসতে পারবেন কারন যেহেতু আপনি অনেকের মধ্যে নেই তাই যেকেনো বিষয় নিয়েই বার বার কথা বলতে পারবেন।</p>
                                                    <p style="font-weight: normal">৪. নিয়মিত কাজের পাশাপাশি শিখতে পারবেন – যারা বিভিন্ন পেশা নিয়ে ব্যাস্ত সময় পার করছেন তাদের জন্য অনলাইন লার্নিং খুবই সহজ এবং কার্যকরী মাধ্যম। সারাদিন অফিস করে জ্যাম ঠেলে কোথাও যেয়ে ক্লাস করাটা অনেক কঠিন এবং অনেক ক্ষেত্রেই দেখা যাই অতিরিক্ত ক্লান্ত হয়ে যাওয়ায় ক্লাস এ কোনো মনোযোগ থাকেনা। কিন্তু যদি আপনি অফিস শেষ করে বাসায় গিয়ে একটু বিশ্রাম নিয়ে আপনার নিজের টেবিলে অথবা আরামদায়ক কোনো স্থানে বসে ক্লাস করেন তাহলে পূর্ণ মনোযোগ নিয়ে শিখতে পারবেন।</p>
                                                    <p style="font-weight: normal">৫. নিজেকে টেকনিক্যালি আরো দক্ষ করা যায় – এই বিষয়টি হয়তো আমরা অনেকেই ভাবিনা যে আমরা কোনো বিষয়ে কোনো প্রতিষ্ঠানে গিয়ে শিখতে যাই ঠিক অনুরূপ বিষয়টি যদি অনলাইন এ শিখি তখন একটি নির্দিষ্ট বিষয় পাশাপাশি আমরা অনেক টুলস এবং টেকনিক এর সাথে পরিচিত হয়, সেই সাথে অনলাইন এ যোগাযোগের দক্ষতাও বৃদ্ধি পাচ্ছে। আর এভাবেই নিজেকে আরো বেশি ডিজিটাল প্রযুক্তির সাথে মানিয়ে নিতে সক্ষম হবো।</p>

                                                    <p>ভেবে দেখুন আপনি প্রতিদিন যেই সময়টা ফেইসবুক, ইউটিউব অথবা সোশ্যাল মিডিয়াতে ব্যয় করছেন ঠিক সেই সময়টা যদি অনলাইন এ কোনো কোর্স দক্ষতা অর্জনের জন্য ব্যয় করি তাহলে নিজেকে আরো বেশি সমৃদ্ধ করতে পারবেন যা আপনার প্রফেশনাল ক্যারিয়ারকে অনেক বেশি বিকশিত করবে।যদিও অনলাইন লার্নিং এর ক্ষেত্রে চ্যালেঞ্জ রয়েছে যেমন নিরবিচ্ছিন্ন ভালো গতির ইন্টারনেট, সেই সাথে সাশ্রয়ী মূল্য এবং সহজ লভ্যতা। তবে বর্তমানে বাংলাদেশে মোবাইল ইন্টারনেটের পাশাপাশি ব্রডব্যান্ড কানেক্শনও অনেক জায়গায় পৌঁছে গেছে। আর খরচ সেটাতো তো আগেই বলেছি যে টাকায় আপনি অনলাইন এ কোর্স করতে পারবেন তার সাথে ইন্টারনেটের খরচটা জুড়ে দিলেও বরং কোনো কোর্সের মূল ফী এর অর্ধেকই হবে। এর সাথে যাতায়াতের খরচ এবং সময়ের মূল্য পুরোটাই কাজে লাগাতে পারছেন। তাই দেরি না করে এবং বসে না থেকে এখনই সিদ্ধান্ত নিয়ে আপনার ভালো লাগের যে কোনো বিষয় নিয়ে অনলাইন কোর্স করুন এবং এই প্রতিযোগিতার বাজারে নিজেকে তৈরি রাখুন।</p>

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
