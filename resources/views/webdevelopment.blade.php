@extends('layouts.frontendmaster')

@section('frontend_main')
<style>

		.latest_banner{
			background-image:url({{ asset('frontend_assets/img/webimg/20.jpg') }});
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
        .sarvice_li{
            color: #1031d0;
            text-align: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 4px;
            margin-bottom: 10px;
        }
		.l_heading a{
			text-align: center;
            display: block;
            width: 100%;
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
		/*publication category end*/
	</style>
<!--latest Banner start-->
<section>
  <div class="latest_banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="latest_banner_text">
            <h2> ওয়েবসাইট ডেভেলপমেন্ট সার্ভিস ডিটেইলস </h2>
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
                          <h2 class="text-center"><span>|| </span>আমাদের সকল <span> সার্ভিসসমূহ :</span></h2>
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
                                                  <img src="{{ asset('frontend_assets') }}/img/econdev2.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/ecomdeve.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/newspaperdev.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/hotel.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/school.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/pharmecy.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/food.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/education.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/tour.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/blog.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/medical.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6 mb-4">
                                      <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">
                                          <div class="l_news">
                                              <div class="l_img" style="border-bottom:1px solid #c3c7c9;margin-bottom: 5px; width: 100%">
                                                  <img src="{{ asset('frontend_assets') }}/img/agency.jpg" alt="" class="img-fluid">
                                              </div>
                                              <div class="l_heading">

                                                  <ul>
                                                      <li class="sarvice_li">ফ্রি .ডট কম / .ডট নেট ডোমেইন</li>
                                                      <li class="sarvice_li">1 জিবি হোস্টিং</li>
                                                      <li class="sarvice_li">1০ টি ইমেইল এড্রেস</li>
                                                      <li class="sarvice_li">পেইজ এর সংখ্যা : 25-30 টি</li>
                                                      <li class="sarvice_li">ডোমেইন বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li">হোস্টিং বাৎসরিক ফি :১০০০ টাকা (১ম বছর ফ্রি)</li>
                                                      <li class="sarvice_li"> ২ ‍দিনের ফ্রি ট্রেনিং (ওয়েব সাইট মেইনটেনেন্স)</li>
                                                      <li class="sarvice_li">৬ মাসের ফ্রি সাপোর্ট</li>
                                                  </ul>

                                                  <a href="contact.html" target="_blank" style="float: right;color:white; font-weight: bold"> অর্ডার করুন </a>
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
