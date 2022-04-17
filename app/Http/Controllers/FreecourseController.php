<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Freecourse;
use App\Freecoursevideo;
use Image;

class FreecourseController extends Controller
{

  //Free Course
    function freecourse(){
      $freecourse_infos = Freecourse::all();
      $freecourse_video_infos = Freecoursevideo::all();
      return view('backend/Freecourse/freecourse', compact('freecourse_infos', 'freecourse_video_infos'));
    }

    function freecourseinsert(Request $request){

        $lastinsertedid = Freecourse::insertGetId([
          'title' => $request->title,
          'description_one' => $request->description_one,
          'description_two' => $request->description_two,
          'description_three' => $request->description_three,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('freecourse_img')){
          $uploaded_image = $request->freecourse_img;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(700, 300)->save(base_path('public/uploads/freecourse_img/'.$new_img_name));

          Freecourse::find($lastinsertedid)->update([
            'freecourse_img' => $new_img_name,
          ]);
        }

        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function freecourseeditinsert(Request $request){
        Freecourse::find($request->free_id)->update([
        'title' => $request->title,
        'description_one' => $request->description_one,
        'description_two' => $request->description_two,
        'description_three' => $request->description_three,
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('freecourse_img')){
        if(Freecourse::find($request->free_id)->freecourse_img !='freecourse_img.jpg'){
          $nametodelete = Freecourse::find($request->free_id)->freecourse_img;
          unlink(base_path('public/uploads/freecourse_img/'.$nametodelete));
        }
      }
      $uploaded_image = $request->freecourse_img;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->free_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(700, 300)->save(base_path('public/uploads/freecourse_img/'.$new_img_name));

       Freecourse::find($request->free_id)->update([
        'freecourse_img' => $new_img_name,
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function freecoursedelete($free_id){
      $freecourse_img =  Freecourse::findOrFail($free_id)->freecourse_img;
      if($freecourse_img != 'freecourse_img.jpg'){
        unlink(base_path('public/uploads/freecourse_img/'.$freecourse_img));
      }
      Freecourse::findOrFail($free_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }


    // free course video


    function freecoursevideoinsert(Request $request){

        $lastinsertedid = Freecoursevideo::insertGetId([
          'freevideo_category_id' => $request->freevideo_category_id,
          'video_title' => $request->video_title,
          'video_link' => $request->video_link,
          'created_at' => Carbon::now()
        ]);

        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function freecoursevideoeditinsert(Request $request){
        Freecoursevideo::find($request->free_id)->update([
        'freevideo_category_id' => $request->freevideo_category_id,
        'video_title' => $request->video_title,
        'video_link' => $request->video_link,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function freecoursevideodelete($free_id){
      Freecoursevideo::findOrFail($free_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }


}
