<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Wts;
use App\Wtsdetails;
use Image;

class Webtrainingservicecontroller extends Controller
{
  function webtrainingservice(){
     $wts_infos = Wts::all();
    $wts_details_infos  = Wtsdetails::all();
    return view('backend/ourservice/webtrainingservice', compact('wts_infos', 'wts_details_infos'));
  }

  function wtsinsert(Request $request){

      $lastinsertedid = Wts::insertGetId([
        'category_name' => $request->category_name,
        'created_at' => Carbon::now()
      ]);

      return back()->with('success_message', 'Your Data Added Sudccessfully!');
  }

  function wtseditinsert(Request $request){
      Wts::find($request->wts_id)->update([
      'category_name' => $request->category_name,
      'created_at' => Carbon::now()
    ]);
    return back()->with('message', 'updated successfully!');
  }

  function wtsdelete($wts_id){
    Wts::findOrFail($wts_id)->Delete();
    return back()->with('success_message', 'Your Data deleted successfully!');
  }

  // service detaisl

  function wtsdetailsinsert(Request $request){

      $lastinsertedid = Wtsdetails::insertGetId([
         'wts_category_id' => $request->wts_category_id,
         'offer_one' => $request->offer_one,
         'offer_two' => $request->offer_two,
         'offer_three' => $request->offer_three,
         'offer_four' => $request->offer_four,
         'offer_five' => $request->offer_five,
         'offer_six' => $request->offer_six,
         'offer_seven' => $request->offer_seven,
         'offer_eight' => $request->offer_eight,
         'created_at' => Carbon::now()
      ]);

      if($request->hasFile('wts_img')){
        $uploaded_image = $request->wts_img;
        $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
        $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
        Image::make($uploaded_image)->resize(700, 300)->save(base_path('public/uploads/wts_service/'.$new_img_name));

        Wtsdetails::find($lastinsertedid)->update([
          'wts_img' => $new_img_name,
        ]);
      }
      return back()->with('success_message', 'Your service Added Sudccessfully!');
  }

  function wtsdetailseditinsert(Request $request){
    Wtsdetails::find($request->wts_id)->update([
      'wts_category_id' => $request->wts_category_id,
      'offer_one' => $request->offer_one,
      'offer_two' => $request->offer_two,
      'offer_three' => $request->offer_three,
      'offer_four' => $request->offer_four,
      'offer_five' => $request->offer_five,
      'offer_six' => $request->offer_six,
      'offer_seven' => $request->offer_seven,
      'offer_eight' => $request->offer_eight,
      'created_at' => Carbon::now()
  ]);

  if($request->hasFile('wts_img')){
    if(Wtsdetails::find($request->wts_id)->wts_img !='wts_img.jpg'){
      $nametodelete = Wtsdetails::find($request->wts_id)->wts_img;
      unlink(base_path('public/uploads/wts_service/'.$nametodelete));
    }
  }

  $uploaded_image = $request->wts_img;
  $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
  $new_img_name = $request->wts_id.'.'.$our_uploaded_img_extension;
  Image::make($uploaded_image)->resize(700, 300)->save(base_path('public/uploads/wts_service/'.$new_img_name));

   Wtsdetails::find($request->wts_id)->update([
    'wts_img' => $new_img_name,
  ]);

  return back()->with('success_message', 'Your service update Sudccessfully!');
  }

  function wtsdetailsdelete($wts_id){
    $news_image_name =  Wtsdetails::findOrFail($wts_id)->wts_img;
    if($news_image_name != 'wts_img.jpg'){
      unlink(base_path('public/uploads/wts_service/'.$news_image_name));
    }
    Wtsdetails::findOrFail($wts_id)->Delete();
    return back()->with('success_message', 'Your News deleted successfully!');
  }

}
