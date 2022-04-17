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

                                          <img src="{{ asset('frontend_assets') }}/img/responki.jpg" alt="not found" class="img-fluid" style="border-radius: 5%">
                                          <div class="post-div">
                                             <p id="serial_p"><span style="font-weight: bold">1-December-2019,</span> <span>By-</span><span style="color:orange"> Rajiur Rahman</p>
                                          </div>
                                      </div>

                                    <div class="card p-2 mt-4" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

                                        <div class="card-body" >
                                              <div class="blog-details-content">
                                                  <p>
                                                       বর্তমান সময়েসবচাইতে জনপ্রিয় ডিভাইস এর নাম স্মার্টফোন। স্মার্টফোন এর জনপ্রিয়তার সাথে সাথে মোবাইল থেকে ওয়েবসাইটে ভিজিটের সংখ্যা দ্রুত বাড়ছে। গবেষনায় দেখা যায় ২০১৮ সালে মোট ওয়েবসাইট ভিজিট এর মধ্যে ৫২ শতাংশ এর বেশী স্মার্টেফোন ব্যবহারকারী। স্মার্টফোন এর এই দারুন জনপ্রিয়তা সার্চ ইন্জিনগুলোকে অনেকটা বাধ্য করছে ওয়েবসাইট এর মোবাইল ভিউকে গুরুত্ব দেয়ার জন্য। Google এর সর্বশেষ আপডেটে ওয়েবসাইট এর মোবাইল ভার্সনকে গুরুত্ব দেয়া হয়েছে এবং মোবাইল সার্চ ইন্জিন রেজাল্ট পেজে(SERP) যে ওয়েবসাইটগুলোর মোবাইল ভার্সন আছে শুধু সেগুলোকেই স্থান দেয়া হচ্ছে।
                                                  </p>

                                                  <p>কিন্তু কিভাবে ওয়েবসাইট এর মোবাইল বা ট্যাব ভার্সন তৈরী করা সম্ভব? রেস্পন্সিভ ওয়েব ডিজাইন এর মজাটাই এখানে। রেস্পন্সিভ ওয়েব ডিজাইন এর মাধ্যমে একটি ওয়েবসাইট মোবাইল বা অন্যান্য ডিভাইস এর জন্য অপটিমাইজ করা হয় যেন ওয়েবসাইটটি বিভন্ন ডিভাইস এ সুন্দর ভাবে প্রদর্শিত হয়। এখন আপনি প্রশ্ন করতে পারেন, ওয়েবসাইট এর ডিজাইন যদি রেস্পন্সিভ না হয় তাহলে কি ওয়েবসাইট মোবাইল থেকে দেখা যাবে না? অবশ্যই দেখা যাবে, কিন্তু সেক্ষেত্রে ওয়েবসাইট এর বিভিন্ন অংশ বিছিন্ন দেখাবে এবং ভিজিটর ওয়েবসাইট এর ছবি বা লেখা ঠিকমত দেখতে পারবে না। ওয়েবসাইটটি লোড হতেও বেশী সময় লাগবে। ফলে ভিজিটর দ্রুত আপনার ওয়েবসাইট থেকে বের হয়ে যাবে এবং আপনার ওয়েবসাইটটির বাউন্সরেট বাড়বে। বাউন্সরেট বাড়লে সার্চ ইন্জিন ধরেই নেবে ওয়েবসাইটটি রিলেভেন্ট নাহ। এবং আপনার সাধের ওয়েবসাইটটি তার র‌্যাংক হারাবে। তাই ওয়েবসাইট তৈরীর সময় সম্ভাব্য সব ডিভাইস এবং রেজ্যুলেশন এর উপর ভিত্তি করে ওয়েবসাইট ডিজাইন ও ডেভেলপমেন্ট করতে হবে। আর এটাই হল রেস্পন্সিভ ওয়েব ডিজাইন এর মূল বিষয়। দ্রুত পরিবর্তনশীল এই বিশ্বে টিকে থাকতে হলে প্রয়োজন বিশেষ যোগ্যতা। তাই আপনার ওয়েবসাইটটিকে টিকিয়ে রাখতে চাইলে অবশ্যই বিভিন্ন ডিভাইস এর জন্য রেস্পন্সিভ করে তৈরী করতে হবে। ইন্টারনেটে রেস্পন্সিভওয়েব ডিজাইন সম্পর্কিত হরেক রকম টুল ও রিসোর্স পাওয়া যায়। রেস্পন্সিভ ওয়েব ডিজাইন নিয়ে আমরা নিয়মিত অনক্যাম্পাস ও লাইভ ওয়ার্কশপ এর আয়োজন করে থাকি যেখানে বিষয়টি নিয়ে নিয়মিত আলোচনা করা হয়। আপনি যদি আরও বিস্তারিত জানতে চান তাহলে আমাদের প্রিমিয়াম ওয়েব ডিজাইন সাকসেস কোর্স টি কিনতে পারেন, শেখানে সবকিছু হাতে হাতে ধরে ধরে শিখিয়ে দেওয়া হয়েছে।
                                                  </p>
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
