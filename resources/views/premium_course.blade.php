@section('premium_course_active')
  active
@endsection
@section('web_title')
    প্রিমিয়াম কোর্স
@endsection

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
			background-color: #1ECB19;
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
            border: 2px solid #1ECB19;
            color: black !important;
        }


		/*publication category start*/
		.pub_category{
			padding-bottom: 40px;
			padding-top: 60px
		}
		.category_details{
			text-align: center;
			transition: all .2s linear;
			border-radius: 5px;
			background: #42B8D4;
			box-shadow: 15px 15px 15px gray;

		}
		.category_details a{
			display: block;
			padding-top: 20px;
			padding-bottom: 20px;
		}
		.category_details i{
			font-size: 30px;
			margin-bottom: 10px;
			transition: all .3s linear;
		}
		.category_details h5{
			font-family: 'Oswald', sans-serif;
			font-size: 20px;
			font-weight: 600;
			color: #2d3436;
		}
		.category_details:hover{
			box-shadow: none;
		}
		.category_details:hover i{
			color: whitesmoke
		}

	</style>
	<!--latest Banner start-->
	<section>
		<div class="latest_banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="latest_banner_text">
							<h2>প্রিমিয়াম কোর্স</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Latest Banner end-->


	<!--News part start-->

  	<section>
  	    <div class="gallery">
  	        <div class="container">
  	            <div class="row">
  	                <div class="col-lg-12">
  	                    <div class="section_header">
  	                        <h2 class="text-center"><span>|| </span>আমাদের সকল <span>প্রিমিয়াম কোর্স  :</span></h2>
  	                    </div>
  	                </div>
  	            </div>

  	            <div class="gallery_content">
  	                <div class="row">
  	                    <div class="col-lg-12 text-left">
  	                        <div class="l_news_content">
  	                            <div class="row">
  	                                <div class="col-lg-6 mb-4">
  	                                    <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
  	                                        <div class="l_news">
  	                                            <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
  	                                                <img src="{{ asset('frontend_assets') }}/img/premium_webdesign.png" alt="" class="img-fluid">

  	                                            </div>
  	                                            <div class="l_heading">
  	                                                <span style="text-align:left">01-February-2020</span>
  	                                                <span style="text-align:right; float:right; color:red;">12:00:00 AM</span>
  	                                                <h4 style="text-align: center;margin-top: 20px;color: #1ecb19;border-bottom: 1px solid #ddd;font-weight: bold;padding-bottom: 7px;">ওয়েব ডিজাইন সাকসেস <br> <span>(বেস্ট ওয়েব ডিজাইন বাংলা ভিডিও টিউটোরিয়াল)</span></h4>

  	                                                <p style="text-align: justify; margin-top: 15px; font-size: 16px; font-weight: normal" class="wowsa">
  	                                                    হাতে ধরে শূন্য থেকে পূর্ণাঙ্গ ওয়েবসাইট তৈরি বিস্তারিত প্র্যাক্টিক্যাল ভিডিও টিউটোরিয়াল। সাথে থাকছে ৩ টি অনলাইন মার্কেটপ্লেস- ফাইভার, ফ্রিলেন্সার, এবং থিম্ফরেস্ট সম্পর্কে বিস্তারিত ভিডিও টিউটোরিয়াল। অনলাইনে কিভাবে কাজ করবেন, কিভাবে আপনার একটি ডিজাইন থিম অনলাইন মার্কেটপ্লেসে অ্যাপ্রুভ করাতে পারেন, তার উপর বিস্তারিত আলোচনা ও নির্দেশিকা।
  	                                                </p>
  	                                                <p style="font-size: 17px; font-weight: bold" id="fosa"> রেগুলার প্রাইসঃ 2500 টাকা <span style="color:red"> [ 20% offer is expired! ]</span> </p>
  	                                                <p style="font-size: 17px; font-weight: bold" id="kosa">অর্ডার প্রাইসঃ <span style="color: green; font-style: normal; font-size: 17px"> 2500 টাকা </span <span></span> </p>
  	                                                <a href="{{ url('premium_course_details') }}" style="float: left;color:white;">বিস্তারিত জানুন</a>
  	                                                <a href="{{ url('order_details') }}" style="float:right ;color:white;">অর্ডার করুন</a>
  	                                            </div>
  	                                        </div>
  	                                    </div>
  	                                </div>
  	                                <div class="col-lg-6 mb-4">
  	                                    <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
  	                                        <div class="l_news">
  	                                            <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
  	                                                <img src="{{ asset('frontend_assets') }}/img/premium_webdev.png" alt="" class="img-fluid">
  	                                            </div>
  	                                            <div class="l_heading">
  	                                                <h2 style=" text-align: center !important;color: orange;margin: 15px 0px;border-bottom: 2px solid #ddd;padding-bottom: 8px;">COMING SOON....</h2>
  	                                                <p style="margin-bottom: 0px;">এই কোর্সটিতে যা যা শেখানো হবে:</p>
  	                                                <ul style="">
  	                                                    <li>1. Php Basic Tutorials [ Practice simple program ]</li>
  	                                                    <li>2. Php Array Function [ For practice simple program ]</li>
  	                                                    <li>3. Sql Queries [ advance tutorial ]</li>
  	                                                    <li>4. CRUD Operation Using PHP with Mysql Database [ More advance tutorial ]</li>
  	                                                    <li>5. Login/Registration System Using Php [ advance tutorial ]</li>
  	                                                    <li>6. Full Website Development using Raw Php [ Full Advance Tutorial ]</li>
  	                                                    <li>7. Object Oriented Php [ Advance Tutorial ]</li>
  	                                                    <li>8. Knowledge Of Laravel framework [Introduce And Basic Knowledge]</li>
  	                                                    <li>9. Full Ecommerce Website Development Using Laravel Framework [ Full Advance Tutorial ]</li>
  	                                                    <li>10. online marketplace (codecanyon.net) Tutorial <span>[ One of the best online marketplace for web Developers. Here, if you approved a development theme, that you have designed, then your life will be set]</span> </li>
  	                                                </ul>
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
<!--News Part end-->

@endsection
