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
		/*publication category end*/
	</style>
<!--latest Banner start-->
<section>
  <div class="latest_banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="latest_banner_text">
            <h2> ফ্রি কোর্স ডিটেইলস </h2>
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
                                {{-- @foreach($free_coures_details_infos as $free_coures_details_info) --}}
	                                <div class="col-lg-11 mb-4 m-auto">
                                    <div class="details_heading" style="margin-bottom: 20px">

                                            <img src="{{ asset('uploads/freecourse_img') }}/{{ $free_coures_details_infos->freecourse_img }}" alt="not found" class="img-fluid" style="border-radius: 5%">
                                            <div class="post-div">
                                               <p id="serial_p"><span style="font-weight: bold">{{ $free_coures_details_infos->created_at->format('d-F-Y') }}</span> <span>By-</span><span style="color:orange"> Rajiur Rahman, </span> <span >  </span></p>
                                               {{-- <a href="" style="color: #05ffff; text-decoration: underline">89 Comments</a> --}}
                                            </div>
                                        </div>
	                                    <div class="card p-2" style="overflow: hidden; border: 2px solid #ddd; box-shadow: 0px 0px 7px 2px #cfcdcd;">

	                                        <div class="card-body">
	                                            <p style="line-height: 170%;font-size: 16px;margin-bottom: 30px; text-align: left; font-weight: bold">
	                                                 {{ $free_coures_details_infos->description_one }}
	                                            </p>
	                                            <p style="line-height: 170%;font-size: 17px;margin-bottom: 15px; text-align: justify" style="serial_p"> {{ $free_coures_details_infos->description_two }}</p>
	                                            <h4 style="color:red; text-align: justify; border-bottom: 1px solid #ddd;padding-bottom: 10px;padding-top: 20px;" class="serial">{{ $free_coures_details_infos->description_three }}</h4>

	                                            <!-- Grid row -->
	                                            <div class="row accordion-gradient-bcg d-flex justify-content-center">
	                                                <!--Accordion wrapper-->
																									@foreach( $free_coures_video_details_infos as $free_coures_video_details_info)

	                                                	<div class="accordion{{ $free_coures_video_details_info->id }} md-accordion{{ $free_coures_video_details_info->id }} accordion-{{ $free_coures_video_details_info->id }}" id="accordionEx{{ $free_coures_video_details_info->id }}" role="tablist" aria-multiselectable="true" style="width: 100%">

	                                                    <!-- Accordion card -->
	                                                    <div class="card" style="margin-top: 30px;">
	                                                        <!-- Card header -->
	                                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading{{ $free_coures_video_details_info->id }}" style="background: #4a4b4c; cursor: pointer" data-toggle="collapse" data-parent="#accordionEx{{ $free_coures_video_details_info->id }}" href="#collapse{{ $free_coures_video_details_info->id }}" aria-expanded="true" aria-controls="collapse">
	                                                            <a>
	                                                                <span style="float: left;font-size: 20px;font-weight: bold;color: #fff;">{{ $free_coures_video_details_info->video_title }}</span>
	                                                                <span style="float: right; color: #fff !important"><i class="fas fa-angle-down rotate-icon"></i></span>
	                                                            </a>
	                                                        </div>

	                                                        <!-- Card body -->
	                                                        <div id="collapse{{ $free_coures_video_details_info->id }}" class="collapse" role="tabpane{{ $free_coures_video_details_info->id }}" aria-labelledby="heading{{ $free_coures_video_details_info->id }}" data-parent="#accordionEx{{ $free_coures_video_details_info->id }}">
	                                                            <div class="card-body mb-1 rgba-grey-light white-text">
	                                                                <div>
	                                                                    <iframe width="560" height="315" src="{{ $free_coures_video_details_info->video_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                                                                </div>
	                                                            </div>
	                                                        </div>

	                                                    </div>
	                                                </div>
	                                                <!--/.Accordion wrapper-->
																									@endforeach

	                                            </div>
	                                        </div>
	                                    </div>
                                    </div>
                                {{-- @endforeach --}}
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
