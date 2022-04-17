@extends('layouts.frontendmaster')

@section('frontend_main')
<style>
  /*banner css start*/
  .banner_part {
    background-image: url({{ asset('frontend_assets/images/Who%20we%20are%20banner.jpg') }});
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
    position: relative;
  }

  .banner_part:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }
      .latest_banner{
    background-image: url({{ asset('frontend_assets/img/webimg/19.jpg') }});
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

  .banner_text {
    text-align: center;
    padding-top: 200px;
  }

  .banner_text h3 {
    font-family: 'Roboto', sans-serif;
    font-size: 38px;
    font-weight: 600;
    color: #e7e7e7;
    margin-bottom: 10px;
  }

  .banner_text p {
    font-family: 'Lato', sans-serif;
    font-size: 16px;
    font-weight: 600;
    color: ghostwhite;
  }

  .banner_text p span {
    color: #00AEEF;
  }

  /*banner css end*/

  /*about css start*/
  .about_us {
    padding-top: 50px;
/*			padding-bottom: 100px;*/
  }

  .about_img {
    overflow: hidden;
    margin-top: 26px;
    text-align: center;
    border-radius: 10px;
    transition: all .2s linear;

  }

  .about_img:hover{
    box-shadow: none;
  }

/*
  .about_img img {
    height: 500px;
  }
*/

  .about_text h3 {
    font-family: 'Rubik', sans-serif;
    font-size: 30px;
    margin-bottom: 30px;
    margin-top: 20px;
    color: #212121;
  }

  .about_text h3 span {
    color: #008bbf
  }

  .about_text p {
        margin-bottom: 20px;
              font-family: 'Rubik', sans-serif;
              text-align: justify;
              /* font-style: italic; */
              font-size: 17px;
              line-height: 170%;
  }

  .about_text p span {
    color: #0083b4;
    font-style: normal;
    font-weight: 600;
    font-size: 15px;
  }

  /*about css end*/

  /*Vision css start*/
  .vision {
    background-image: url(images/Vision_%20banner.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 250px;
    position: relative;
  }

  .vision:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5)
  }

  .vision_title h3 {
    font-family: 'DM Serif Display', serif;
    font-size: 45px;
    color: antiquewhite;
    letter-spacing: 2px;
    line-height: 250px;
    font-style: italic;
  }

  .vision_text p {
    font-family: 'Oswald', sans-serif;
    color: #00baff;
    font-size: 34px;
    line-height: 250px;
    text-shadow: 10px 10px 15px black;
  }

  /*vision css end*/

  /*mission css start*/
  .mission {
    margin-top: 70px;
    margin-bottom: 70px;
  }

  .mission_title {

    background-image: url(images/devcombg_1.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;

    /*
    background: #355C7D;
    background: -webkit-linear-gradient(to right, #C06C84, #6C5B7B, #355C7D);
    background: linear-gradient(to right, #C06C84, #6C5B7B, #355C7D);
*/

    height: 360px;
    position: relative;
    clip-path: polygon(0 0, 73% 0, 100% 100%, 0% 100%);
  }

  .mission_title .mission_overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.45);
    clip-path: polygon(0 0, 73% 0, 100% 100%, 0% 100%);
    text-align: center;
  }

  .mission_overlay h3 {
    line-height: 360px;
    font-family: 'DM Serif Display', serif;
    font-size: 48px;
    color: antiquewhite;
    letter-spacing: 2px;
    font-style: italic;
    text-shadow: 10px 10px 15px black;
  }

  .mission_text {
    padding-right: 60px;
    padding-top: 20px;
  }

  .mission_text p {
    font-family: 'Rubik', sans-serif;
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #1e1e1e;
    text-align: justify;
    transition: all .2s linear;
  }
  .mission_text p:hover{
    text-shadow: 10px 10px 15px black;
  }

  /*mission css end*/

  /*goal css start*/
  .goal {
    margin-bottom: 70px;
  }

  .goal_title {

    background-image: url(images/Goals.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;

    /*
    background: #c94b4b;
    background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);
    background: linear-gradient(to right, #4b134f, #c94b4b);
*/


    height: 360px;
    position: relative;
    clip-path: polygon(0 0, 73% 0, 100% 100%, 0% 100%);
  }

  .goal_title .goal_overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.45);
    clip-path: polygon(0 0, 73% 0, 100% 100%, 0% 100%);
    text-align: center;
  }

  .goal_overlay h3 {
    line-height: 360px;
    font-family: 'DM Serif Display', serif;
    font-size: 48px;
    color: antiquewhite;
    letter-spacing: 2px;
    font-style: italic;
    text-shadow: 10px 10px 15px black;
  }

  .goal_text {
    padding-right: 60px;
    padding-top: 80px;
  }

  .goal_text i{
    font-weight: 600;
    font-size: 18px;
    color: #008BBF
  }

  .goal_text p {
    font-family: 'Rubik', sans-serif;
    font-size: 18px;
    margin-bottom: 20px;
    color: #1e1e1e;
    text-align: justify;
    text-shadow: 10px 10px 15px black;
    font-weight: 500;
    transition: all .2s linear;
  }
  .goal_text p:hover{
    color: #008BBF
  }

  /*goal css end*/

  /*core value css start*/
  .core {
    margin-bottom: 70px;
  }

  .core_title {

    background-image: url(images/core%20value.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    /*
    background: #c94b4b;
    background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);
    background: linear-gradient(to right, #4b134f, #c94b4b);
*/
    height: 400px;
    position: relative;
    clip-path: polygon(0 0, 73% 0, 100% 100%, 0% 100%);
  }

  .core_title .core_overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.45);
    clip-path: polygon(0 0, 73% 0, 100% 100%, 0% 100%);
    text-align: center;
  }

  .core_overlay h3 {
    line-height: 400px;
    font-family: 'DM Serif Display', serif;
    font-size: 48px;
    color: antiquewhite;
    letter-spacing: 2px;
    font-style: italic;
    text-shadow: 10px 10px 15px black;
  }

  .core_text {
    padding-right: 60px;
    padding-top: 40px;
  }

  .core_text i{
    font-weight: 600;
    font-size: 18px;
    color: #008BBF
  }

  .core_text p {
    font-family: 'Rubik', sans-serif;
    font-size: 16px;
    margin-bottom: 15px;
    color: #1e1e1e;
    text-align: justify;
    text-shadow: 10px 10px 15px black;
    font-weight: 500;
    transition: all .2s linear;
  }
  .core_text p:hover{
    color: #008BBF
  }

  /*core value css end*/

  /*network css start*/
  .network_title {

    background-image: url(images/networks.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    /*
    background: #c94b4b;
    background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);
    background: linear-gradient(to right, #4b134f, #c94b4b);
*/
    height: 300px;
    position: relative;
  }

  .network_title .network_overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    text-align: center;
  }

  .network_overlay h3 {
    line-height: 300px;
    font-family: 'DM Serif Display', serif;
    font-size: 48px;
    color: antiquewhite;
    letter-spacing: 2px;
    font-style: italic;
    text-shadow: 10px 10px 15px black;
  }

  .network_text {
    padding-right: 70px;
    padding-top: 50px;
    padding-left: 20px;
  }

  .network_text p {
    font-family: 'Rubik', sans-serif;
    font-size: 16px;
    color: #1e1e1e;
    text-align: justify;
    color: white;
  }
  .network_text_bg{
    background-color: #0082b2
  }
  /*network css end*/
  @section('about_active')
    active
  @endsection
  @section('web_title')
    আমাদের সম্পর্কে
  @endsection
</style>
<!--latest Banner start-->
<section>
  <div class="latest_banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="latest_banner_text">
            <h2> আমাদের সম্পর্কে </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Latest Banner end-->

<!--link Part start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">হোম</a></li>
    <li class="breadcrumb-item active" aria-current="page">আমাদের সম্পর্কে</li>
  </ol>
</nav>
<!--link part end-->

<!--about us part start-->
<section>
  <div class="about_us">
    <div class="container">
      @foreach($Amadersomporke_infos as $Amadersomporke_info)
        <div class="row">
        <div class="col-lg-6">
          <div class="about_img">
            <img src="{{ asset('frontend_assets') }}/img/about_ceo.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about_text">
                          <h3><span>|| ওয়েব ট্রেনিং ইনস্টিটিউট </span> <span>  সম্পর্কে  </span> </h3>
            <p>
              {{ $Amadersomporke_info->description1 }}
            </p>
            <p>
              {{ $Amadersomporke_info->description2 }}
            </p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="about_text">
              <p> {{ $Amadersomporke_info->description3 }} </p>
              <p> {{ $Amadersomporke_info->description4 }} </p>
          </div>
        </div>

      </div>
      @endforeach
    </div>
  </div>
</section>
<!--about us part end-->

@endsection
