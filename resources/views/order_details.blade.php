@extends('layouts.frontendmaster')

@section('frontend_main')
<style>
		/*Banner CSS start*/
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
        .order_lebel{
            float: left;
            font-size: 18px;
            font-weight: bold;
            color: green;
        }

		.banner_part .banner_text {
			text-align: center;
			padding-top: 190px;
		}

        .latest_banner_text{
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
		.banner_part .banner_text h5 {
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			font-size: 35px;
			color: white;
			margin-bottom: 20px;
			text-shadow: 10px 10px 15px black;
		}

		.banner_part .banner_text p {
			font-family: 'Raleway', sans-serif;
			font-weight: 500;
			font-size: 18px;
			color: white;
		}

		.banner_part .banner_text p span {
			color: white;
		}

		/*Banner CSS End*/


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
        .post-div{
                margin-top: 6px;
                background: #ffeb03;
                color: white;
        }
        .post-div p{
           font-size: 25px;
           letter-spacing: 3px;
           font-style: italic;
           padding: 5px 0px 5px 0px;
           color: red;
           font-weight: bold;
           text-align:center;
        }


		.extra {
			margin-top: 12px;
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

        .bksinfo h4{
            color: #3e3e3e;
            border-bottom: 1px solid #ddd;
            display: inline-block;
            padding-bottom: 6px;
            margin: 7px 0px 20px 0px;
        }
        .bksinfo p{
            font-family: sans-serif;
            font-size: 16px;
            letter-spacing: 1px;
            line-height: 150%;
            margin-bottom: 20px;
        }

        .rocketinfo h4{
            color: #3e3e3e;
            border-bottom: 1px solid #ddd;
            display: inline-block;
            padding-bottom: 6px;
            margin: 7px 0px 20px 0px;
        }
        .rocketinfo p{
            font-family: sans-serif;
            font-size: 16px;
            letter-spacing: 1px;
            line-height: 150%;
            margin-bottom: 20px;
        }



    form .error {
      color: #ff0000;
      margin: 2px 0px 0px 0px;
      background: url(http://127.0.0.1:8000/frontend_assets/img/download.svg);
      background-repeat: no-repeat;
      background-position: right;
      background-size: 20px;
      border: 1px solid red;
  }

    form #name-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
  }
    form #email-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
  }
    form #phone-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
  }
    form #order-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
    position: relative;
    top: -36px;
    left: 190px;
  }
    form #delivary_address-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
  }
    form #bks_number-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
  }
    form #bks_trxid-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
  }
    form #rocket_number-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
  }

    form #rocket_trxid-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
  }
      .gallery_content {
        padding-top: 25px;
        text-align: left !important;
    }
    .other_details{
      padding-top: 17px;
      border-top: 2px solid #868080;
      margin-top: 15px;
    }
    .other_details p{
      color: red;
      font-size: 18px;
      border-bottom: 2px solid #868080;
      padding-bottom: 14px;
    }
    .other_details ul{
      list-style: disc;
      margin-left: 20px;
      margin-top: 29px;
      background: #2b2a2b;
      padding: 10px 30px;
      color: white;
    }
    .other_details ul li{
      margin-bottom:5px;
    }
    .order_video{
      text-align: center;
    }
    .order_video h3{
      font-weight: bold;
      color: #616161 !important;
      font-size: 25px;
      line-height: 144%;
      margin-bottom: 20px;
      border-bottom: 1px solid #c5c5c5;
      padding-bottom: 8px;
    }
    .order_video iframe{
      border: 3px solid #585858;
      box-shadow: 1px 6px 15px 3px #696969;
      margin-bottom: 20px;
    }
	</style>
<!--latest Banner start-->
<!--banner part start-->
<section>
  <div class="latest_banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="latest_banner_text">
            <h2> প্রিমিয়াম কোর্স অর্ডার ডিটেইলস </h2>
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
                                    <div class="details_heading" style="margin-bottom: 20px">

                                            <div class="order_video" style="display:block;">
                                              <h3 style="font-weight: bold; color:#11af33"> কিভাবে ডিভিডি সঠিকভাবে অর্ডার করবেন, তার জন্য এই ভিডিওটি একবার দেখে নিন...</h3>
                                              <video controls loop="" style="width:500px; height:300px; margin-bottom:20px; border:3px solid #868686;; box-shadow: 1px 10px 12px 3px #adadad;" poster="{{ asset('frontend_assets/img/web_order_img.png') }}">
                                                  <source src="{{ asset('frontend_assets/video/dvd_order.mp4') }}">
                                              </video>
                                            </div>
                                            <div class="post-div">
                                               <p> টিউটোরিয়াল অর্ডার ফর্মঃ </p>
                                            </div>
                                            @if(session('success_message'))
                                              <div class="alert alert-dismissible" role="alert" style="color: #000000;background-color: #06e0c8;border-color: #09adbf;font-size: 18px; margin-top:15px">
                                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                 <strong>ধন্যবাদ!! </strong> {{ session('success_message') }} <br>
                                                 <strong style="color:red;display: block;margin-top: 2px;">অর্ডার আইডি : #{{ session('message2') }} <span style="color:blue">[ আপনার অর্ডার আইডি নোট করে রাখুন পরবর্তীতে প্রয়োজন হবে... ]</span></strong>
                                               </div>
                                           @endif
                                        </div>
	                                    <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body">
	                                            <p style="line-height: 170%;font-size: 18px;margin-bottom: 30px; text-align: left; font-weight: bold; text-align: justify">
	                                                 ডিভিডি অর্ডার করতে নিচের ফরমটি পূরণ করুনঃ
	                                            </p>

	                                           <div class="col-lg-12">
	                                               <div class="dhaka_office_text">
	                                                   <form action="{{ url('order/details/insert') }}" method="post" enctype="multipart/form-data" autocomplete="off" name="order_details">
                                                        @csrf
	                                                       <div class="form-group">
                                                               <label for="name" class="order_lebel">নাম: <span style="color: red">*</span></label>
	                                                           <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" placeholder="please enter your name" name="name" value="{{ old('name') }}">
	                                                       </div>
                                                         @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror

	                                                       <div class="form-group">
                                                           <label for="phone" class="order_lebel"> মোবাইল: <span style="color: red">*</span></label>
	                                                           <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="please enter your phone number"  name="phone" value="{{ old('phone') }}">
	                                                       </div>
                                                         @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror

	                                                       <div class="form-group">
                                                           <label for="email" class="order_lebel"> ইমেইল:</label>
	                                                           <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="enter your email address"  name="email" value="{{ old('email') }}">
	                                                       </div>
                                                         @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                         @enderror

	                                                       <div class="form-group">
                                                            <label class="order_lebel" required> অর্ডার সিলেক্ট করুনঃ <span style="color: red">*</span></label> <br>
                                                            <div style="text-align: left;width: 100%;float: left; margin-bottom: 20px; ">
                                                             <input type="radio" class="dvdorder" id="dvdorderconfirm"  name="order" style="cursor: pointer;margin-bottom: 15px;" value="DVD ORDER" checked>

                                                            <label for="dvdorderconfirm" style="cursor: pointer">
                                                                ডিভিডি অর্ডার
                                                             </label>
                                                             <br>
                                                             <div style="display:block; margin-top: 10px; margin-left: 30px;" class="delivaryaddress">
                                                                <div class="form-group">
                                                                  <label for="" class="order_lebel" style="color:#019ec1"> ডেলিভারি অ্যাড্রেস: <span style="color: red">*</span></label> <br>
                                                                   <p> <span class="wpcf7-form-control-wrap your-message"><textarea name="delivary_address" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea __web-inspector-hide-shortcut__ form-control" aria-invalid="false" placeholder="আপনার ডেলিভারী এড্রেসটি এখানে লেখুন" spellcheck="false"></textarea></span> </p>
                                                               </div>
                                                               @error('delivary_address')
                                                                  <span class="invalid-feedback" role="alert">
                                                                      <strong>{{ $message }}</strong>
                                                                  </span>
                                                               @enderror

                                                             </div>
	                                                           <input type="radio" class="downloadlink" name="order" value="Download Link" style="cursor: pointer" id="downloadlinkconfirm">
	                                                           <label for="downloadlinkconfirm" style="cursor: pointer">
                                                                 ডাউনলোড লিংক অর্ডার
                                                             </label>
	                                                           <div style="display: none; background: #1782a2;padding: 9px 20px;color: white;margin-left: 20px;margin-top: 5px; margin-bottom: 15px; text-align: justify;line-height: 170%;letter-spacing: 0.2px;" class="download_op">
	                                                               <p> ডাউনলোড লিংক অর্ডার করলে, অর্ডার কনফার্ম হওয়ার ১২ ঘন্টার মধ্যে আপনার দেওয়া ফোন নাম্বারে ফোন করে যোগাযোগ করা হবে, তারপর আপনাকে ডাউনলোড সিক্রেট লিংকটি দেওয়া হবে.....</p>
	                                                           </div>
                                                            </div>
	                                                       </div>


	                                                       {{-- <div class="form-group"> --}}
                                                            <label class="order_lebel"> পেমেন্ট অপশন সিলেক্ট করুনঃ <span style="color: red">*</span></label> <br>
                                                            <div style="text-align: left;width: 100%;float: left; margin-bottom: 20px; ">
                                                            <input type="radio" class="bkst"  name="payment" style="cursor: pointer; margin-bottom: 15px;" value="Bks Transfer" id="payment_method_webtraining_bkash" checked>
                                                             <label for="payment_method_webtraining_bkash" style="cursor: pointer">
                                                                বিকাশ ট্রান্সফার <img src="{{ asset('frontend_assets') }}/img/bkash.png" alt="বিকাশ ট্রান্সফার">
                                                             </label>
                                                             <br>

                                                             <div style="background: #dedddd;padding: 9px 20px;color: white;margin-left: 20px;margin-top: 5px; margin-bottom: 15px; color: #525252" class="bksinfo">
	                                                               <h4 style="color:#118ebd; font-weight:bold">কিভাবে পেমেন্ট করবেন এবং ডিভিডি / ডাউনলোড লিংক পাবেন?</h4>
	                                                               <p> ১) নিচে একটি পার্সোনাল বিকাশ নাম্বার দেওয়া আছে প্রথমে আপনাকে ঐ নাম্বারে টাকা পাঠাতে (Send Money) হবে।</p>
	                                                               <p>২) টাকা পাঠানোর পর আপনি যে নাম্বার থেকে টাকা পাঠিয়েছেন সেই নাম্বারটি নিচে (bKash Number) এই ফিল্ডে অ্যাড করেন ।</p>
	                                                               <p>৩) বিকাশ থেকে টাকা পাঠানোর পর একটি Transaction ID (TrxID) দেওয়া হয়। আপনি যদি আপনার নিজের পার্সোনাল নাম্বার থেকে টাকা পাঠিয়ে থাকেন তাহলে আপনার মোবাইলের মেসেজ চেক করলেই TrxID পেয়ে যাবেন। আপনি যদি কোন এজেন্ট এর মাধ্যমে অর্থাৎ কোন দোকান থেকে টাকা পাঠিয়ে থাকেন তাহলে এজেন্ট থেকে Transaction ID (TrxID) সংগ্রহ করবেন তারপর নিচে (bKash Transaction ID) এই ফিল্ডে অ্যাড করেন।</p>
	                                                               <p>৪) বিকাশ নাম্বার এবং TrxID অ্যাড করার পর Submit Order বাটনে ক্লিক করুন।</p>
	                                                               <p>৫) অর্ডার প্লেস করার পর খুব শিগ্রই আমরা আপনার অর্ডারটি চেক করবো এবং আপনি যদি সঠিকভাবে পেমেন্ট করে থাকেন, তাহলে ১২ ঘণ্টার মধ্যে আপনার দেওয়া নাম্বারে যোগাযোগ করা হবে, এবং আপনার দেওয়া ডেলিভারি এড্রেসে ডিভিডিটি পৌঁছে দেওয়া হবে,  আর যারা ডাউলোড লিংক অর্ডার করবেন, তাদেরকে সিক্রেট ভিডিও ডাউনলোড লিংকটি দিয়ে দেওয়া হবে..</p>
	                                                               <p style="margin-top: 30px"> <span style="    color: #0b44e6;font-weight: bold;font-size: 17px;">bKash Personal Number :</span> <span style="    font-size: 17px;font-weight: bold;"> 01868 752 464 </span> </p>
	                                                               <div class="form-group">
	                                                                   <label class="order_lebel" for="bks_number"> bKash Number: <span style="color: red">*</span></label>
	                                                                   <input type="text" class="form-control @error('bks_number') is-invalid @enderror"  placeholder="যে বিকাশ নাম্বার থেকে টাকা পাঠিয়েছেন সেই নাম্বারটি এখানে লিখুন" name="bks_number" id="bks_number" value="{{ old('bks_number') }}">
	                                                               </div>
                                                                 @error('bks_number')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                 @enderror

	                                                               <div class="form-group">
	                                                                   <label class="order_lebel" for="bks_trxid"> bKash Transaction ID: <span style="color: red">*</span></label>
	                                                                   <input type="text" class="form-control @error('bks_trxid') is-invalid @enderror"  placeholder="টাকা পাঠানোর পর যে TrxID নাম্বারটি পেয়েছেন সেটি এখানে লিখুন" name="bks_trxid" value="{{ old('bks_trxid') }}" id="bks_trxid">
	                                                               </div>
                                                                 @error('bks_trxid')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                 @enderror
	                                                           </div>

	                                                           <input type="radio" class="rocket" name="payment" value="Rocket Transfer" style="cursor: pointer" id="payment_method_webtraining_rocket">
	                                                           <label for="payment_method_webtraining_rocket" style="cursor: pointer">
                                                                রকেট ট্রান্সফার  <img src="{{ asset('frontend_assets') }}/img/rocket.png" alt="বিকাশ ট্রান্সফার">
                                                             </label>
	                                                           <div style="display: none; background: #dedddd;padding: 9px 20px;color: white;margin-left: 20px;margin-top: 5px; margin-bottom: 15px; color: #525252" class="rocketinfo">
	                                                               <h4>কিভাবে পেমেন্ট করবেন এবং ডিভিডি / ডাউনলোড লিংক পাবেন?</h4>
	                                                               <p> ১) নিচে একটি পার্সোনাল রকেট নাম্বার দেওয়া আছে প্রথমে আপনাকে ঐ নাম্বারে টাকা পাঠাতে (Send Money) হবে।</p>
	                                                               <p>২) টাকা পাঠানোর পর আপনি যে নাম্বার থেকে টাকা পাঠিয়েছেন সেই নাম্বারটি নিচে (Rocket Number) এই ফিল্ডে অ্যাড করেন । আপনার ১১ ডিজিটের নাম্বার দিবেন রকেটের লাস্ট ডিজিট অ্যাড করবেন না।</p>
	                                                               <p>৩) রকেট থেকে টাকা পাঠানোর পর একটি Transaction ID (TrxID) দেওয়া হয়। আপনি যদি আপনার নিজের পার্সোনাল নাম্বার থেকে টাকা পাঠিয়ে থাকেন তাহলে আপনার মোবাইলের মেসেজ চেক করলেই TrxID পেয়ে যাবেন। আপনি যদি কোন এজেন্ট এর মাধ্যমে অর্থাৎ কোন দোকান থেকে টাকা পাঠিয়ে থাকেন তাহলে এজেন্ট থেকে Transaction ID (TrxID) সংগ্রহ করবেন তারপর নিচে (Rocket Transaction ID) এই ফিল্ডে অ্যাড করেন।</p>
	                                                               <p>৪) রকেট নাম্বার এবং TrxID অ্যাড করার পর Submit Order বাটনে ক্লিক করুন।</p>
	                                                               <p>৫) অর্ডার প্লেস করার পর খুব শিগ্রই আমরা আপনার অর্ডারটি চেক করবো এবং আপনি যদি সঠিকভাবে পেমেন্ট করে থাকেন, তাহলে ১২ ঘণ্টার মধ্যে আপনার দেওয়া নাম্বারে যোগাযোগ করা হবে, এবং আপনার দেওয়া ডেলিভারি এড্রেসে ডিভিডিটি পৌঁছে দেওয়া হবে,  আর যারা ডাউলোড লিংক অর্ডার করবেন, তাদেরকে সিক্রেট ভিডিও ডাউনলোড লিংকটি দিয়ে দেওয়া হবে..</p>
	                                                               <p style="margin-top: 30px"> <span style="    color: #0b44e6;font-weight: bold;font-size: 17px;">Rocket Personal Number :</span> <span style="    font-size: 17px;font-weight: bold;"> 01868 752 4643 </span> </p>
	                                                               <div class="form-group">
	                                                                   <label class="order_lebel" for="rocket_number"> Rocket Number: <span style="color: red">*</span></label>
	                                                                   <input type="text" class="form-control @error('rocket_number') is-invalid @enderror" id="" placeholder="যে রকেট নাম্বার থেকে টাকা পাঠিয়েছেন সেই নাম্বারটি এখানে লিখুন" name="rocket_number" value="{{ old('rocket_number') }}" id="rocket_number">
	                                                               </div>
                                                                 @error('rocket_number')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                 @enderror
	                                                               <div class="form-group">
	                                                                   <label for="rocket_trxid" class="order_lebel"> Rocket Transaction ID: <span style="color: red">*</span></label>
	                                                                   <input type="text" class="form-control @error('rocket_trxid') is-invalid @enderror" id="" placeholder="টাকা পাঠানোর পর যে TrxID নাম্বারটি এসএমএস পেয়েছেন সেটি এখানে লিখুন" name="rocket_trxid" value="{{ old('rocket_trxid') }}" id="rocket_trxid">
	                                                               </div>
                                                                 @error('rocket_trxid')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                 @enderror
	                                                           </div>
                                                            </div>
	                                                       {{-- </div> --}}

	                                                       <div class="form-group">
	                                                           <label class="order_lebel"> আপনি কি আমাদের Terms and Conditions এর সাথে একমত? <span style="color: red">*</span></label><br>

	                                                           <div style="text-align: left;width: 100%;float: left; margin-bottom: 20px; ">
	                                                               <input type="checkbox" name="condition" style="cursor: pointer; margin-bottom: 15px;" value="yes" id="checkterm" checked required>
	                                                               <label for="checkterm" style="cursor: pointer; display: inline">
	                                                                   আমি আপনাদের <a href="condition.html" target="_blank">Terms and Conditions</a>   এর সাথে একমত এবং আমি এই কাজগুলো শেখার জন্য সত্যিই সিরিয়াস
	                                                               </label>

	                                                           </div>
                                                             <button type="submit" class="btn btn-primary" style="float: left"> Submit Order </button>
	                                                       </div>
	                                                   </form>

	                                               </div>
	                                           </div>

	                                        </div>
	                                    </div>
	                                </div>
                                  <div class="other_details">
                                    <p>*  আরও কোনো  তথ্য জানার থাকলে সরাসরি ডায়াল করুন- 01868752464 এই নাম্বারে,  অথবা ফেসবুক পেইজে মেসেজ করুন এখানেে <a href="{{url('https://www.messenger.com/t/webtraininginstitute360')}}" target="_blank"> ক্লিক করে </a> </p>

                                    <ul>
                                      <li>ঢাকা সিটিতে সরাসরি হোম ডেলিভারি</li>
                                    <li>অন্যান্য জেলা ও উপজেলায় সুন্দরবন কুরিয়ারের মাধ্যমে ডেলিভারির ব্যবস্থা</li>
                                    <li> ডাউনলোড লিঙ্কের মাধ্যমেও ঘরে বসে ডাউনলোড করে দেখার সুবিধা (৫ মিনিটে ডেলিভারি)!!</li>
                                    <li>কোন অতিরিক্ত ডেলিভারি চার্জ নেই!</li>
                                    </ul>
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

  @section('custom_js')
    <script src="{{ asset('frontend_assets') }}/js/order.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/accordian.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/form-validation.js"></script>
  @endsection
@endsection
