<!--Banner Part Start-->
@section('home_active')
  active
@endsection
@section('web_title')
    হোম
@endsection
@extends('layouts.frontendmaster')

@section('frontend_main')

<style>
    #ctp_three{
    
    text-align:center;
    }
.my_ctp_timer_three{
  position: fixed;
  width: 70%;
  height: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -30%);
  z-index:2000;
  display:none;
}
.navbar-nav{
    z-index:3000;
    position:relative;
}
.my_ctp_timer_three ul li {
    display: inline-block;
    font-size: 20px;
    list-style-type: none;
    padding: 10px 63px 10px 63px;
    text-transform: uppercase;
    background: #303030;
    color: #ffffff;
    margin-right: 10px;
    border-radius: 0px;
}
.my_ctp_timer_three ul li:last-child{
  margin-right: 0px !important;
}
.my_ctp_timer_three ul li span {
  display: block;
  font-size: 2.5rem;
  color: #3fa7e1;
}
.my_ctp_timer_three h1{
    background: #952626;
    color: #fff;
    padding: 15px 15px;
    font-size: 23px;
    line-height: 35px;
}
.my_ctp_timer_three ul{
  background: #2a2a2a;
  margin-bottom: 15px;
}
.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 7px 12px;
    color: black;
    opacity: 1;
}
.alert-dismissible{
    padding-right:3rem;
}
@media(max-width:575px) {
    .my_ctp_timer_three h1 {
    	font-size: 14px;
    	line-height: 22px;
    	padding: 10px 5px;
    }
    .my_ctp_timer_three ul li {
    	font-size: 13px;
    	padding: 10px 8px 10px 8px;
    	margin-right: 2px;
    }
    .my_ctp_timer_three ul li span {
	font-size: 1.2rem;
    }
    .alert-dismissible {
        padding: 20px 3px 15px 3px;
    }
    .alert-dismissible .close {
	position: absolute;
	top: -11px;
	right: -9px;
	color: #464646;
}
}

@media (min-width: 576px) and (max-width: 767.98px) {
    .my_ctp_timer_three h1 {
	font-size: 17px;
	line-height:26px;
    }
    .my_ctp_timer_three ul li {
	font-size: 14px;
    padding: 10px 12px 10px 11px;
    }
    .my_ctp_timer_three ul li span {
	font-size: 1.5rem;
}
}
@media (min-width: 768px) and (max-width: 991.98px) {
    .my_ctp_timer_three h1 {
	    font-size: 20px;
    }
    .my_ctp_timer_three ul li {
	padding: 10px 22px 10px 22px;
	font-size: 16px;
}
.my_ctp_timer_two ul li span {
	font-size: 2rem;
}
}
@media (min-width: 992px) and (max-width: 1199.98px) {
    .my_ctp_timer_three h1 {
	    font-size: 21px;
    }
    .my_ctp_timer_three ul li {
	padding: 10px 35px 10px 35px;
    }
}
</style>

<!-- ORDER DISCOUNT START -->
  <section id="ctp_three">
         <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="my_ctp_timer_three">
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                          <h1>  <strong> ওয়েব ডিজাইন সাকসেস </strong> কোর্সটিতে ২০% ছাড় দেওয়া হয়েছে, এই অফারটি সীমিত সময়ের জন্য। এখুনি অর্ডার করুন... </h1>
                          <ul>
                             <li><span id="days"></span>days</li>
                             <li><span id="hours"></span>Hours</li>
                             <li><span id="minutes"></span>Minutes</li>
                             <li><span id="seconds"></span>Seconds</li>
                        </ul>
                         <a href="http://webtraininginstitute.com/order_details" type="button" class="btn btn-success"> অর্ডার করুন </a>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </section>
    
 <!--ORDER DISCOUNT FINSIH -->

<!--Banner Part Start-->
<section>
  <div class="banner_part">
    <div class="banner_1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_text">
              <div class="banner_details text-center">
<!--
                <h1 style="margin-bottom: 10px"><div class="wow bounceInRight" data-wow-duration="2.2s">Follow Your Dreams, <span> & </span></div></h1>
                <h1><div class="wow bounceInRight" data-wow-duration="2.4s"><span>Focus On Your </span>Skill Development</div></h1>
-->
              <div class="banner_details">
                <h1 style="margin-bottom: 10px; line-height: 170%;">Follow Your Dreams, <span> & </span> Focus On Your </h1>
                <h1><span>Skill Development</span> <span style="color: brown"> With </span> Web Training Institute </h1>
              </div>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-2">
            <div class="banner_links">
              <div class="b_links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://mail.ngof.org/mail/" target="_blank" title="Web-Mail"><i class="fas fa-envelope"></i></a>
                <a href="https://bangladesh.gov.bd/index.php" target="_blank"><img src="images/bd_flag_icon.png" alt="flag" class="img-fluid"></a>
              </div>
            </div>
          </div>
-->
        </div>
      </div>

      <div class="humanitarian wow fadeInUp" data-wow-duration="1.6s">
        <a href="https://www.youtube.com/webtraininginstitute" target="_blank">
          <h3 ><i class="fab fa-youtube"></i> Web Training Institute </h3>
        </a>
      </div>

    </div>

    <div class="banner_2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_text">
              <div class="banner_details">
                <h1 style="margin-bottom: 10px; line-height: 170%;">ওয়েব ডিজাইন শিখতে আগ্রহী ? <span> তো চিন্তা কিসের? </span> আপনার সাথেই আছে </h1>
                <h1><span>ওয়েব ট্রেনিং ইনস্টিটিউট</span> এগিয়ে যান... </h1>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-2">
            <div class="banner_links">
              <div class="b_links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://mail.ngof.org/mail/" target="_blank" title="Web-Mail"><i class="fas fa-envelope"></i></a>
                <a href="https://bangladesh.gov.bd/index.php" target="_blank"><img src="images/bd_flag_icon.png" alt="flag" class="img-fluid"></a>
              </div>
            </div>
          </div>
-->
        </div>
      </div>
      <div class="humanitarian wow fadeInUp" data-wow-duration="1.6s">
        <a href="https://www.youtube.com/webtraininginstitute" target="_blank">
          <h3 ><i class="fab fa-youtube"></i> Web Training Institute </h3>
        </a>
      </div>
    </div>


    <div class="banner_3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_text">
              <div class="banner_details">
                <h1 style="margin-bottom: 10px; line-height: 170%;"> ওয়েব ডিজাইন শেখা হয়ে গেছে? <span> এখন কি ডেভেলপমেন্ট করতে চান? </span> তো ভয় কিসের? </h1>
                <h1><span> আমরা এখনো আছি আপনার সাথেই,  </span> এগিয়ে যান... </h1>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-2">
            <div class="banner_links">
              <div class="b_links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://mail.ngof.org/mail/" target="_blank" title="Web-Mail"><i class="fas fa-envelope"></i></a>
                <a href="https://bangladesh.gov.bd/index.php" target="_blank"><img src="images/bd_flag_icon.png" alt="flag" class="img-fluid"></a>
              </div>
            </div>
          </div>
-->
        </div>
      </div>
      <div class="humanitarian wow fadeInUp" data-wow-duration="1.6s">
        <a href="https://www.youtube.com/webtraininginstitute" target="_blank">
          <h3 ><i class="fab fa-youtube"></i> Web Training Institute </h3>
        </a>
      </div>
    </div>




    <div class="banner_4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_text">
              <div class="banner_details">

                <h1 style="margin-bottom: 10px; line-height: 170%;"> আপনি কি ওয়ার্ডপ্রেস শিখতে আগ্রহী? <span> ঠিক আছে, </span> তাহলে একটু আপনাকে ধৈর্য ধরতে হবে, </h1>
                <h1><span> এর পরের ধাপেই আমরা  </span > সম্পূর্ণ প্রফেশনাল ওয়ার্ডপ্রেস কোর্স নিয়ে আসতে চলেছি...... </h1>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-2">
            <div class="banner_links">
              <div class="b_links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://mail.ngof.org/mail/" target="_blank" title="Web-Mail"><i class="fas fa-envelope"></i></a>
                <a href="https://bangladesh.gov.bd/index.php" target="_blank"><img src="images/bd_flag_icon.png" alt="flag" class="img-fluid"></a>
              </div>
            </div>
          </div>
-->
        </div>
      </div>
      <div class="humanitarian wow fadeInUp" data-wow-duration="1.6s">
        <a href="https://www.youtube.com/webtraininginstitute" target="_blank">
          <h3 ><i class="fab fa-youtube"></i> Web Training Institute </h3>
        </a>
      </div>
    </div>

    <div class="banner_5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_text">
              <div class="banner_details">

                <h1 style="margin-bottom: 10px; line-height: 170%;"> কি ভাবছেন? <span> এর পরে কোন কোর্স আসতে চলেছে, </span> অবশ্যই গ্রাফিক্স ডিজাইন, </h1>
                <h1><span> যারা প্রফেশনাল গ্রাফিক্স ডিজাইন কোর্স আমাদের কাছ থেকে  করতে চান,  </span > তারা ওয়েব ট্রেনিং ইনস্টিটিউট এর সাথেই থাকুন...... ধন্যবাদ </h1>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-2">
            <div class="banner_links">
              <div class="b_links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://mail.ngof.org/mail/" target="_blank" title="Web-Mail"><i class="fas fa-envelope"></i></a>
                <a href="https://bangladesh.gov.bd/index.php" target="_blank"><img src="images/bd_flag_icon.png" alt="flag" class="img-fluid"></a>
              </div>
            </div>
          </div>
-->
        </div>
      </div>
      <div class="humanitarian wow fadeInUp" data-wow-duration="1.6s">
        <a href="https://www.youtube.com/webtraininginstitute" target="_blank">
          <h3 ><i class="fab fa-youtube"></i> Web Training Institute </h3>
        </a>
      </div>
    </div>
  </div>
</section>
<!--Banner Part End-->

<!--About Part Start-->
<section>
  <div class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
        @foreach ($home_about_infos as $home_about_info)
          <div class="about_img wow bounceInLeft" data-wow-duration="1.6s">
            <img src="{{ asset('uploads/home_about_img') }}/{{ $home_about_info->about_img }}" alt="Organization" class="img-fluid" width="100%">

            <!--
            <div class="about_img_bg">

            </div>
-->

          </div>
        </div>
        <div class="col-lg-6 wow bounceInRight" data-wow-duration="1.6s">

            <div class="about_details">
              <div class="section_header">
                <h2>|| <span>About</span> Us</h2>
              </div>
              <p style="font-size: 17px;line-height: 160%;" class="abal">
                <span>The</span> {{ $home_about_info->description }}
              </p>
              <a href="{{ url('about/us') }}" target="_blank">Read More</a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!--About Part End-->

<!--What we Do Start-->
<section>
  <div class="what_we_do">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2><span>|| </span>What We <span>Do</span></h2>
          </div>
        </div>
      </div>
      <div class="what_content">
        <div class="row">
        @foreach( $whatwedo_infos as $whatwedo_info )
          <div class="col-lg-4">
            <div class="what_details wow fadeInUp what_details_new" data-wow-duration="1.6s">
              <div class="what_icon">
                <i class="{{ $whatwedo_info->icon }}" style="font-size: 29px;margin-top: 10px;"></i>
              </div>
              <h3> {{ $whatwedo_info->title }} </h3>
              <p>
                {{ $whatwedo_info->description }}
              </p>
              <p  style="margin-top: 7px; font-weight: bold">ফ্রী ভিডিওগুলো দেখতে <a href="{{ $whatwedo_info->link }}" target="_blank"> এখানে ক্লিক করুন</a></p>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!--What we Do End-->


<!--Youtube Video start-->


<section>
  <h2 style="text-align: center;padding: 15px 0px 0px 0px;color: red;text-shadow: 3px 3px 5px #949a94;font-weight: bold; padding: 10px 0px;" class="pst" >প্রিমিয়াম কোর্সের ডিভিডি যেভাবে অর্ডার করবেন?</h2>
  <h4 style="text-align: center;padding: 10px 0px;color: #4d4d52;text-shadow: 2px 2px 3px #d6d6d6;" class="akm"> প্লে বাটনটিতে ক্লিক করে ভিডিওটি দেখে নিন...</h4>
  <div class="video_part">

    <div class="row">

      <div class="col-lg-12">
      @foreach( $prevideo_infos as $prevideo_info)
        <div class="video_button wow fadeInDown" data-wow-duration="1.6s">
          <i class="far fa-play-circle videobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/jcSqHUC-vt8"></i>
        </div>
      @endforeach
      </div>
    </div>
  </div>
</section>
<!--Youtube video end-->


<!--counter part start-->
<!--
<section>
  <div class="counter_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2 style="text-shadow: 10px 10px 15px #8e8e8e"><span>|| </span> Achievements <span>So</span> Far</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="counter_details">
            <img src="images/icon1.png" style="height: 60px;width: 60px" alt="" class="img-fluid">
            <span class="counter">432,425</span>
            <p>Water Technologies Installed</p>
          </div>
        </div>
        <div class="col">
          <div class="counter_details">
            <img src="images/counter_image_1.png" style="height: 60px;width: 60px" alt="" class="img-fluid">
            <span class="counter">8,474,802</span>
            <p>Installed Sanitation options</p>
          </div>
        </div>
        <div class="col">
          <div class="counter_details">
            <img src="images/counter_image_3.png" style="height: 60px;width: 60px" alt="" class="img-fluid">
            <span class="counter">14,127</span>
            <p>Events Organized</p>
          </div>
        </div>
        <div class="col">
          <div class="counter_details">
            <img src="images/counter_image_5.png" style="height: 60px;width: 60px" alt="" class="img-fluid">
            <span class="counter">150</span><span>Types</span>
            <p>IEC/BCC Material Development</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<!--counter part end-->


<!--News Part Start-->
<section>
  <div class="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2 style="text-shadow: 10px 10px 15px #8e8e8e" class="pagol"><span>|| </span> আমাদের <span>ফ্রী </span><span>কোর্সসমূহ</span></h2>
          </div>
        </div>
      </div>
      <div class="news_content">
        <div class="row news_slider">
          @foreach($freecourse_infos as $freecourse_info)
            <div class="col-lg-12">
            <div class="news_details wow fadeInRightBig" data-wow-duration="1.6s">
              <div class="news_img">
                <img src="{{ asset('uploads/freecourse_img') }}/{{ $freecourse_info->freecourse_img }}" alt="News" class="img-fluid" style="height: 250px" width="100%">
                <div class="news_image_overlay">
                  <span>ফ্রি কোর্স</span>
                </div>
              </div>
              <div class="news_text">
                <span style="text-align:left">{{ $freecourse_info->created_at->format('d-F-Y') }}</span>
                <span style="text-align:right; float:right; color:red;">{{ $freecourse_info->created_at->format('h:i:s A') }}</span>
                  <h4 style="text-align: center;margin-top: 20px;color: #1ecb19;border-bottom: 1px solid #ddd;font-weight: bold;padding-bottom: 7px;">{{ $freecourse_info->title }}</h4>
                  <p style="text-align: justify; height: 150px; overflow: hidden; margin-top: 15px; font-size: 18px; font-weight: bold">
                      {{ $freecourse_info->description_one }}
                  </p>
                  <a href="{{ url('free_course_details') }}/{{ $freecourse_info->id }}" style="float: right;color:white; margin-top: -27px;" target="_blank"> বিস্তারিত দেখুন</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!--News Part End-->

<!--publication start-->
<section>
  <div class="publication">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2 style="text-shadow: 10px 10px 15px #8e8e8e" class="pagol"><span>|| </span> আমাদের <span> প্রিমিয়াম  </span><span>কোর্সসমূহ</span></h2>
          </div>
        </div>
      </div>
      <div class="publication_content">
        <div class="row publication_slider">
          <div class="col-lg-12">
            <div class="news_details wow fadeInRightBig new_news_details" data-wow-duration="1.6s" style="height: 685px">
              <div class="news_img">
                <img src="{{ asset('frontend_assets') }}/img/premium_webdesign.png" alt="News" class="img-fluid" style="height: 250px" width="100%">

              </div>
              <div class="news_text">
                                  <span style="text-align:left">01-February-2020</span>
                                      <span style="text-align:right; float:right; color:red;">12:00:00 AM</span>
                                      <h4 style="text-align: center;margin-top: 20px;color: #1ecb19;border-bottom: 1px solid #ddd;font-weight: bold;padding-bottom: 7px;">ওয়েব ডিজাইন সাকসেস <br> <span>(বেস্ট ওয়েব ডিজাইন বাংলা ভিডিও টিউটোরিয়াল)</span></h4>

                                      <p style="text-align: justify; margin-top: 15px; font-size: 16px; font-weight: normal">
                                          হাতে ধরে শূন্য থেকে পূর্ণাঙ্গ ওয়েবসাইট তৈরি বিস্তারিত প্র্যাক্টিক্যাল ভিডিও টিউটোরিয়াল। সাথে থাকছে ৩ টি অনলাইন মার্কেটপ্লেস- ফাইভার, ফ্রিলেন্সার, এবং থিম্ফরেস্ট সম্পর্কে বিস্তারিত ভিডিও টিউটোরিয়াল। অনলাইনে কিভাবে কাজ করবেন, কিভাবে আপনার একটি ডিজাইন থিম অনলাইন মার্কেটপ্লেসে অ্যাপ্রুভ করাতে পারেন, তার উপর বিস্তারিত আলোচনা ও নির্দেশিকা।
                                      </p>
                                      <p style="font-size: 17px; font-weight: bold">রেগুলার প্রাইসঃ 2500 টাকা <span > [ 20% offer is expired ]  </span></p>
                                      <p style="font-size: 17px; font-weight: bold">অর্ডার প্রাইসঃ <span style="color: green; font-style: normal; font-size: 17px"> 2500 টাকা</span></p>
                                      <a href="{{ url('premium_course_details') }}" target="_blank" style="float: left;color:white;">বিস্তারিত জানুন</a>
                                      <a href="{{ url('order_details') }}" target="_blank" style="float:right ;color:white;">অর্ডার করুন</a>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="news_details wow fadeInRightBig new_news_details" data-wow-duration="1.6s" style="height: 687px">
              <div class="news_img">
                <img src="{{ asset('frontend_assets') }}/img/premium_webdev.png" alt="News" class="img-fluid" style="height: 250px" width="100%">

              </div>
              <div class="news_text">
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
                                      <li>10. online marketplace (codecanyon.net) Tutorial  </li>
                                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--publication end-->


<!--Ongoing Poject start-->
<section>
  <div class="ongoing">
    <div class="row ongoing_slider">
      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center" class="pagol">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/mouchak.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                              ওয়েব ট্রেনিং ইনস্টিটিউট এর টিউটোরিয়াল এখন পওয়া যাচ্ছে ঢাকার মৌচাক অফিসে, এর সাথে সাথে সমগ্র ঢাকা শহরের মধ্যে হোম ডেলিভারি দেওয়া হচ্ছে একদম ফ্রীতে! তাছাড়া সারা দেশের হোম ডেলিভারী তো থাকছেই! এবার ঘরে বসেই সংগ্রহ করুন সকল ডিভিডি
                          </p>
                          <a href="{{ url('blog_details1') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-12 text-center">
          <div class="section_header">
                      <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>
              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft"  style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/webporichiti2.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                              ওয়েব ডিজাইন হচ্ছে একটি ওয়েব সাইটের জন্য বাহ্যিক অবকাঠামো তৈরি করা । ওয়েবসাইট দেখতে কেমন হবে অথবা এর সাধারণ রূপ কেমন হবে তা নির্ধারণ করা । ওয়েব ডিজাইনার দের কাজ হচ্ছে আমরা নিয়মিত যে ওয়েবসাইট গুলো ভিজিট করে থাকি ক্লাইন্ট এর চাহিদা অনুযায়ী সেই রকম ওয়েবসাইট তৈরি করা।
                          </p>
                          <a href="{{ url('blog_details2') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/responki.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                              বর্তমান সময়েসবচাইতে জনপ্রিয় ডিভাইস এর নাম স্মার্টফোন। স্মার্টফোন এর জনপ্রিয়তার সাথে সাথে মোবাইল থেকে ওয়েবসাইটে ভিজিটের সংখ্যা দ্রুত বাড়ছে। গবেষনায় দেখা যায় ২০১৮ সালে মোট ওয়েবসাইট ভিজিট এর মধ্যে ৫২ শতাংশ এর বেশী স্মার্টেফোন ব্যবহারকারী। স্মার্টফোন এর এই দারুন জনপ্রিয়তা সার্চ ইন্জিনগুলোকে অনেকটা বাধ্য করছে ওয়েবসাইট এর মোবাইল ভিউকে গুরুত্ব দেয়ার জন্য। Google এর সর্বশেষ আপডেটে ওয়েবসাইট এর মোবাইল ভার্সনকে গুরুত্ব দেয়া হয়েছে এবং মোবাইল সার্চ ইন্জিন রেজাল্ট পেজে(SERP) যে ওয়েবসাইটগুলোর মোবাইল ভার্সন আছে শুধু সেগুলোকেই স্থান দেয়া হচ্ছে।
                          </p>
                          <a href="{{ url('blog_details3') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/bild.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                              ঠিক এই মুহূর্তে প্রায় ১.২ বিলিয়ন  ওয়েবসাইট রয়েছে পৃথিবীতে।Yahoo এর করা এক জরীপ থেকে দেখা যায়, শুধুমাত্র আমেরিকাতেই প্রতি মাসে প্রায় ১৬ মিলিয়নের বেশী অর্থাৎ ১ কোটি ৬০ লাখেরও বেশী ওয়েবসাইট তৈরি করা হয়ে থাকে! যার প্রায় ৭০% এরও বেশী করা হয় প্রোফেশনাল ওয়েব ডিজাইনার হায়ার করে এবং যার মার্কেট ভেল্যু ২০.১ বিলিয়ন মার্কিন ডলার, বাংলাদেশী টাকায় যার পরিমাণ প্রায় ১৬ হাজার ৮০০ কোটি টাকা!
                          </p>
                          <a href="{{ url('blog_details4') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/Upajon.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                              আমরা সব সময়ই বলি, অনলাইনে আয়ের দুটি রাস্তা। এক, চাকরি করা এবং দুই, ব্যাবসা করা। আমাদের বাস্তব জীবনের মত অনলাইনেও আমরা চাকরি এবং ব্যবসা দুটোই করতে পারি। আর আজকে আপনাদের সাথে কথা বলব অনলাইনের একটি স্থায়ী ইনভেস্ট সম্পর্কে যেটা আপনি একবার করলে সারাজীবন বসে বসেই খেতে পারবেন। হ্যা, এমন একটি ইনভেস্ট হচ্ছে একটি ওয়েবসাইট। একটি ওয়েবসাইট হতে পারে আপনার সারা জীবনের স্থায়ী উপার্জনের ক্ষেত্রে। তাহলে চলুন দেখি কিভাবে?
                          </p>
                          <a href="{{ url('blog_details5') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/upai.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                              দিন দিন ওয়েব ডিজাইনারের চাহিদা বাড়ছে, কিন্তু দক্ষ ওয়েব ডিজাইনারের সংখ্যা আনুপাতিক হারে বাড়ছে না।“কাজেই একটু আধটু শিখেই নয়, বরং ভাল করে কাজ শিখতে পারলে কাজের অভাব হবেনা ইনশা-আল্লাহ্‌” পোস্টটি পুরো ১০ মিনিট সময় নিয়ে শুরু থেকে একদম শেষ পর্যন্ত মনোযোগ দিয়ে পড়ুন
                          </p>
                          <a href="{{ url('blog_details6') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/free.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                              ফ্রিল্যান্সার বা ফ্রিল্যান্সিং শব্দ দুইটির সাথে আমরা সবাই কমবেশি পরিচিত। স্বাধীন ভাবে নিজের পছন্দ মত কাজ করা এবং ভালো আয় এর নিশ্চয়তার কারনে অনেকের কাছেই ফ্রিল্যান্সিং বা মুক্তপেশা এখন প্রথম পছন্দের নাম। কিন্তু কোন কাজটি আপনি শিখবেন অথবা কোথায় থেকে শুরু করবেন? কাজই বা কোথায় করবেন? আজ আমরা ফ্রিল্যান্সিং বিষয়টি নিয়ে বিস্তারিত আলোচনা করার চেস্টা করবো। চেস্টা করবো আপনার সবগুলো প্রশ্নের উত্তর খুজতে। তাহলে শুরু করা যাক,
                          </p>
                          <a href="{{ url('blog_details7') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

              <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/larning.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                               আমরা অনেক কিছুতে এগিয়ে গেলেও অনলাইন লার্নিং ক্ষেত্রে অন্যদের তুলনায় এখনো অনেক পিছিয়ে আছি, আসলে আমাদের এই বিষয়টিতে কম অভ্যস্ততায় মূল কারণ। আসুন আমরা এর উত্তর খুঁজি :
                          </p>
                          <a href="{{ url('blog_details8') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/subidha.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                               অসহ্য জ্যাম পার হয়ে ৯ টা ৫টা অফিস কিংবা অফিস পলিটিক্স একটি বিরক্তিকর চাকুরীকে অসহ্য তে পরিনত করতে পারে। অফিস এর বাঁধা ধরা নিয়ম এর বাইরে যদি আপনি নিজেই কিছু করতে চান তাহলে ফ্রিল্যান্সিং হতে পারে আপনার জন্য সবচাইতে সেরা পছন্দ।কিন্ত ফ্রিল্যান্সিং কি শুধু মাত্র আপনার নিজের জন্য কিছু করার স্বাধীনতাটুকু দিবে নাকি আরও অনেক কিছু?
                          </p>
                          <a href="{{ url('blog_details9') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/beche.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                               বর্তমান প্রতিযোগীতার যুগে চাকুরী পাওয়াটাই অনেক কঠিন ব্যাপার আর ব্যাপারটা আরও সৌভাগ্যের হয়ে যায় যদি এমন চাকুরী পাওয়া যায় যা আপনি করতে ভালোবাসেন। এমন কিছু যেখানে আপনি আপনার দক্ষতাকে প্রকাশ করতে পারবেন, দিন এর পর দিন যেই কাজ করতে আপনার কখনও বিরক্ত লাগবে না। কিন্তু সেই সৌভাগ্য অধিকাংশ সময়ে আমাদের হয় না, আর গ্রাজুয়েশন শেষ করে আপনি হয়তো কম বেতনের এমন কোন কাজ করছেন যেখানে না আছে দক্ষতা প্রমান এর সুযোগ না আছে নতুন ‍কিছু শেখার আনন্দ। বিরক্তিকর কিছু করতে করতে আপনি হয়তো হারিয়ে ফেলেছেন কাজ করার আনন্দটুকুই। ফ্রিল্যান্সিং এর মজাটা এখানেই, একজন ফ্রিল্যান্সার এভাবেই অন্য যে কোন পেশাজীবিদের থেকে আলাদা এবং স্বাধীন।
                          </p>
                          <a href="{{ url('blog_details10') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/maye.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                               ছেলেদের তুলনায় একটা মেয়ের ক্যারিয়ার ডেভেলপমেন্ট এর পথে আসতে পারে বিভিন্ন বাধা। সেক্ষেত্রে ফ্রিল্যান্সিং হতে পারে মেয়েদের জন্য নিরাপদ ও নিশ্চিন্ত পেশা। ফ্রিল্যান্সিং হতে পারে একজনের নিজের জগত , নিজের অফিস। নিজের ইচ্ছা মতো একজন এখানে কাজ করতে ও সময় দিতে পারে। নারীদের ক্যারিয়ার সম্ভাবনা নির্ভর করে সঠিক দক্ষতা অর্জনের মাদ্ধমে। অর কোন বিষয়ে তিনি নিজেকে ডেভেলপ করবে সেই সিদ্ধান্তটি নিতে হয় অনেক কিছু বিবেচনা করে। কারণ, এই স্কিল এ হতে পারে তার ভবিষ্যত ক্যারিয়ার এর পাথেয়। এছাড়াও, একটা মেয়ের কর্মজীবনের সাথে জড়িয়ে আছে তার পরিবারের বিষয়গুলো।
                          </p>
                          <a href="{{ url('blog_details11') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-12 text-center">
          <div class="section_header" style="text-align: left">
              <h2 style="margin-bottom: 50px; text-align: center">|| আমাদের <span>ব্লগসমূহস</span></h2>

              <div class="row">
                  <div class="col-lg-6 col-md-12 wow bounceInLeft" style="text-align: center">
                      <img src="{{ asset('frontend_assets') }}/img/step.jpg" alt="Rohengaa" class="img-fluid" style="display: inline-block">
                  </div>
                  <div class="col-lg-6">
                      <div class="ongoing_details wow fadeInUpBig">
                          <p style="text-align: justify; height: 135px; overflow: hidden; margin-top: 15px; font-size: 18px;" class="pap">
                               ইন্টারনেট থেকে আয়!- অনেকের কাছে আজব কিছু, অনেকের কাছে সুপরিচিত শব্দ। অনেকেই সফল, আবার অনেকে খুজেই চলেছেন কিভাবে কি? আবার অনেকেই বেশি আয়ের লোভে পড়ে ধরা খেয়েছেন হাজার এমনকি লাখ টাকাও!! কিন্তু কখনো জেনেছেন কি আসল বাস্তবতা? কি এটা, কি করা উচিত, কিভাবে করা উচিত? এই সম্পর্কিত সুপার গাইডলাইন নিয়েই আজকের পর্ব।
                          </p>
                          <a href="{{ url('blog_details12') }}" target="_blank" style="float:right;color:white; margin-top: 0px;"> বিস্তারিত দেখুন </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!--Ongoing Porject end-->


<!--Gallery Part start-->
<section style="display: none">
  <div class="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2>|| Photos <span>Clicked</span></h2>
          </div>
        </div>
      </div>
      <div class="gallery_content">
        <div class="row">
          <div class="col-lg-12">
            <div class="gallery_buttons">
              <button type="button" data-filter="all" class="wow bounceInLeft" data-wow-duration="1.6s">ALL</button>
              <button type="button" data-filter=".nature" class="wow bounceInLeft" data-wow-duration="1.5s">Women</button>
              <button type="button" data-filter=".graphic" class="wow bounceInLeft" data-wow-duration="1.4s">Humanitarian</button>
              <button type="button" data-filter=".brand" class="wow bounceInLeft" data-wow-duration="1.3s">NGOF</button>
              <button type="button" data-filter=".brand" class="wow bounceInLeft" data-wow-duration="1.2s">Water</button>
            </div>
            <div class="gallary_photos">
              <div class="row filter_cls">
                <div class="col-lg-3 mix graphic">
                  <div class="work_img gap">
                    <img src="images/p-12.jpg" alt="" class="img-fluid">
                    <a class="venobox" data-gall="gallery01" href="images/p-12.jpg"><i class="fas fa-eye"></i></a>
                    <div class="work_img_overlay">

                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mix nature brand">
                  <div class="work_img gap">
                    <img src="images/p-31.jpg" alt="" class="img-fluid">
                    <a class="venobox" data-gall="gallery01" href="images/p-31.jpg"><i class="fas fa-eye"></i></a>
                    <div class="work_img_overlay">

                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mix graphic">
                  <div class="work_img gap">
                    <img src="images/p-5.jpg" alt="" class="img-fluid">
                    <a class="venobox" data-gall="gallery01" href="images/p-5.jpg"><i class="fas fa-eye"></i></a>
                    <div class="work_img_overlay">

                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mix nature">
                  <div class="work_img gap">
                    <img src="images/p-36.jpg" alt="" class="img-fluid">
                    <a class="venobox" data-gall="gallery01" href="images/p-36.jpg"><i class="fas fa-eye"></i></a>
                    <div class="work_img_overlay">

                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mix graphic brand">
                  <div class="work_img">
                    <img src="images/p-14.jpg" alt="" class="img-fluid">
                    <a class="venobox" data-gall="gallery01" href="images/p-14.jpg"><i class="fas fa-eye"></i></a>
                    <div class="work_img_overlay">

                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mix nature">
                  <div class="work_img">
                    <img src="images/p-37.jpg" alt="" class="img-fluid">
                    <a class="venobox" data-gall="gallery01" href="images/p-37.jpg"><i class="fas fa-eye"></i></a>
                    <div class="work_img_overlay">

                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mix graphic">
                  <div class="work_img">
                    <img src="images/p-50.jpg" alt="" class="img-fluid">
                    <a class="venobox" data-gall="gallery01" href="images/p-50.jpg"><i class="fas fa-eye"></i></a>
                    <div class="work_img_overlay">

                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mix nature brand">
                  <div class="work_img">
                    <img src="images/p-39.jpg" alt="" class="img-fluid">
                    <a class="venobox" data-gall="gallery01" href="images/p-39.jpg"><i class="fas fa-eye"></i></a>
                    <div class="work_img_overlay">

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
<!--Gallery part end-->


<!--upcoming events start-->
<section style="margin-bottom: 50px;" class="ulala">
  <div class="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section_header">
            <h2 class="b mb-2"><span>|| </span>Students <span>Feedback</span></h2>
          </div>
        </div>
      </div>
      <div class="events_content">
        <div class="row events_slider wow fadeInRightBig" data-wow-duration="1.6s">
          @foreach( $Studentfeedback_infos as $Studentfeedback_info)
            <div class="col-lg-12">
            <div class="event_details">
              <div class="row">
                <div class="col-lg-2 col-sm-12">
                    <div class="feedback_img" style="width: 80px;">
                        <img src="{{ asset('uploads/student_img') }}/{{ $Studentfeedback_info->student_img }}" alt="not found" class="img-fluid" style="width: 120px; border-radius: 7%; margin-top: 5px">
                    </div>
                </div>
                <div class="col-lg-10 col-sm-12 new_one">
                  <h4 class="stu_name">{{ $Studentfeedback_info->name }}</h4>
                  <p style="text-align: justify"> {{ $Studentfeedback_info->comment }} </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>
<!--upcoming events end-->


<!--Partners CSS Start
<section>
  <div class="partners">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="partners_header">
            <h2>Current <span>Funding Agencies</span></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="partners_content">
      <div class="row partners_slider">
        <div class="col text-center">
          <div class="partners_details text-center" style="width: 100px">
            <img src="images/rotary.jpg" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col text-center" style="padding-top: 26px">
          <div class="partners_details text-center">
            <img src="images/formas.png" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col text-center" style="padding-top: 25px;">
          <div class="partners_details text-center">
            <img src="images/columbia_logo.gif" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col text-center">
          <div class="partners_details text-center">
            <img src="images/win.png" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col text-center" style="padding-top: 25px;">
          <div class="partners_details text-center">
            <img src="images/UNICEF_Logo.png" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col text-center" style="padding-top: 25px;">
          <div class="partners_details text-center">
            <img src="images/unhcr-logo.jpg" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col text-center" style="padding-top: 10px;">
          <div class="partners_details text-center" style="width: 150px">
            <img src="images/AAR.png" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col text-center" style="padding-top: 25px;">
          <div class="partners_details text-center">
            <img src="images/helvetas.png" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col">
          <div class="partners_details text-center" style="width: 80px; padding-top: 10px">
            <img src="images/manuser%20jonno.png" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col">
          <div class="partners_details text-center" style="padding-top: 25px;">
            <img src="images/autralian_aid.png" alt="partners" class="img-fluid">
          </div>
        </div>
        <div class="col">
          <div class="partners_details text-center" style="padding-top: 25px;">
            <img src="images/18.jpg" alt="partners" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->


@section('custom_js')
  <script src="{{ asset('frontend_assets') }}/js/custom.js"></script>
  <script src="{{ asset('frontend_assets') }}/js/video.js"></script>
 
  <script src="{{ asset('frontend_assets') }}/js/dis-offer-three.js"></script>
@endsection

@endsection
<!--footer End-->
