@section('contact_active')
  active
@endsection
@section('web_title')
     যোগাযোগ
@endsection

@extends('layouts.frontendmaster')

@section('frontend_main')
<style>
		.contact_banner{
			background-image: url({{ asset('frontend_assets/img/webimg/20.jpg') }});
			background-position: top left;
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 300px;
			position: relative;
			z-index: 1;
		}
		.same_contact_icon{
			padding-top:10px;
		}
		.contact_banner:before{
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.8);
			z-index: -1;
		}
		.contact_banner .contact_banner_text{
			text-align: center;
			padding-top: 160px;
		}
		.contact_banner_text h2{
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			color: white;
			font-size: 40px;
			text-shadow: 10px 10px 15px black;
		}
		.contact_banner_text h5{
			font-family: 'Open Sans', sans-serif;
			font-weight: 500;
			color: #42B8D4;
			font-size: 16px;
			margin-top: 10px;
		}
		.dhaka_office{
			padding-top: 60px;
			padding-bottom: 60px;
		}
		.dhaka_office h2{
            font-family: sans-serif;
            font-weight: 700;
            color: #5D5B5B;
            font-size: 25px;
            margin-bottom: 20px;
		}

        .same_contact_icon{
            background: #3498db;
            font-size: 28px;
            vertical-align: middle;
            text-align: center;
            color: #FFFFFF;
            height: 50px;
            width: 50px;
            line-height: 50px;
            margin-bottom: 10px;
            float: left;
            margin-right: 10px;

        }

		.dhaka_office h5{
			font-family: 'Oswald', sans-serif;
			font-weight: 500;
			color: #2181d3;
			font-size: 35px;
			margin-bottom: 25px;

		}
		.dhaka_office span{
			font-family: 'Raleway', sans-serif;
			font-weight: 500;
			font-size: 14px;
			color: #1e1e1e;
			margin-bottom: 5px;
			display: block;
		}
		.dhaka_office p{
			font-family: 'Oswald', sans-serif;
			font-weight: 700;
			font-size: 16px;
			color: #2884d3;
			margin: 20px 0px;
		}
		.dhaka_office a{
			display: inline-block;
			background-color: #42B8D4;
			padding: 8px 20px;
			font-family: 'Lato', sans-serif;
			font-weight: 600;
			font-size: 16px;
			color: #1e1e1e;
			margin-top: 25px;
			border-radius: 5px;
			margin-right: 15px;
			transition: all .3s linear;
		}
		.dhaka_office a:hover{
			box-shadow: 5px 5px 15px black;
		}
		.map{
			margin-bottom: -6px;
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
		form #phone-error {
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
		form #your_message-error {
    color: #ff0000;
    margin: 2px 0px 0px 0px;
    border: 0px !important;
    box-shadow: none !important;
    background:none;
  }
	</style>
<section>
  <div class="contact_banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact_banner_text">
            <h2>Contact Us</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="dhaka_office">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="dhaka_office_img">
            <div class="office_building">
              <h2>ওয়েব ট্রেনিং ইনস্টিটিউট</h2>
              <p>
                  <i class="fas fa-map-marker-alt same_contact_icon"></i>
                    <span style="color: #636367; font-size: 17px;"> মৌচাক অফিসঃ মাহেরা কটেজ (UCC গলি), ৮০ সিদ্ধেশ্বরী রোড, ঢাকা-১২১৭। (রস মিষ্টান্ন ভান্ডার এর পাশের গলি)</span>
              </p>

              <p>
                    <i class="far fa-clock same_contact_icon"></i>
                    <span style="color: #454548; font-size: 17px; display: inline; font-weight: bold"> অফিস সময়ঃ </span>  <span style="font-size: 16px"> সকাল ১০ টা থেকে রাত ৮ টা</span>
              </p>

              <p>
                   <i class="fas fa-phone-volume same_contact_icon"></i>
                    <span style="color: #454548; font-size: 17px; display: inline; font-weight: bold"> ফোন নম্বরঃ </span>  <span style="font-size: 16px; font-family: monospace"> 01868752464, 01318948051</span>
              </p>

              <p>
                   <i class="far fa-envelope same_contact_icon"></i>
                    <span style="color: #454548; font-size: 17px; display: inline; font-weight: bold"> ইমেল করুন </span>  <span style="font-size: 16px; font-family: monospace"> info.webtraininginstitute@gmail.com</span>
              </p>

              <p>
                   <i class="far fa-envelope same_contact_icon"></i>
                    <span style="color: #454548; font-size: 17px; display: inline; font-weight: bold"> আমাদের ওয়েবসাইট </span>  <span style="font-size: 16px; font-family: monospace"> www.webtraininginstitute.com </span>
              </p>


            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="dhaka_office_text">
            <h2 style="margin-bottom: 7px;"> যোগাযোগ করুন </h2>
            <p style="color: red; font-weight: normal; margin: 0; margin-bottom: 20px;" class="bampase">বিঃদ্রঃ বাম পাশে ঠিকানা এবং ফোন নাম্বার দেয়া আছে</p>
						@if(session('success_message'))
							<div class="alert alert-dismissible" role="alert" style="color: #000000;background-color: #06e0c8;border-color: #09adbf;font-size: 18px; margin-top:15px">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								 <strong>ধন্যবাদ!! </strong> {{ session('success_message') }} <br>
							 </div>
					 @endif
                <form action="{{ url('contact/us/insert') }}" method="post" enctype="multipart/form-data" autocomplete="off" name="contact_details">
									@csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="আপনার নাম (আবশ্যিক)" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" placeholder="ফোন নাম্বার" name="phone">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="ইমেইল অ্যাড্রেস" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="message_name" placeholder="ম্যাসেজের বিষয়" name="message_name">
                    </div>
                    <div class="form-group">
                        <p> <span class="wpcf7-form-control-wrap your-message"><textarea name="your_message" id="your_message" cols="10" rows="6" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="আপনার ম্যাসেজ এখানে বিস্তারিত লিখুন"></textarea></span> </p>
                    </div>

                    <button type="submit" class="btn btn-primary">পাঠান</button>
                </form>
          </div>
        </div>

      </div>
      <p style="color: red; text-align: center;">চাইলে ফেসবুকে মেসেজ পাঠাতে পারেন <a href="https://m.me/webtraininginstitute360" target="_
      " style="padding: 3px 15px !important;color: white;background: #12ad49;"> এখানে ক্লিক করে </a></p>
      <p style="text-align: center"> ওয়েব ট্রেনিং ইনস্টিটিউট এর সাথে যোগাযোগ করার জন্য আপনাকে ধন্যবাদ। </p>
    </div>
  </div>
</section>
@section('custom_js')
	<script src="{{ asset('frontend_assets') }}/js/form-validation.js"></script>
@endsection
	<!-- <section>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3109.71988099933!2d90.36510721452427!3d23.755178784587095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf50e65ec27b%3A0x8a19083f21fc2dc5!2sNGO+Forum!5e1!3m2!1sen!2sbd!4v1557152486278!5m2!1sen!2sbd" width="100%" height="420px" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section> -->
@endsection
