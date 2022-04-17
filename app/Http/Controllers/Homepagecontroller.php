<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeabout;
use App\Whatwedo;
use App\Premiumvideo;
use App\Studentfeedback;
use App\Amadersomporke;
use Carbon\Carbon;
use Image;

class Homepagecontroller extends Controller
{
  //about us
    function about_usview(){
      $about_infos = Homeabout::all();
      return view('backend/homepage/homeaboutus', compact('about_infos'));
    }

    function homeaboutinsert(Request $request){
      $request->validate([
          'about_img' => 'required',
          'description' => 'required',
        ],[
          'about_img.required' => 'about image field must be required!',
          'description.required' => 'description  field must be required!',
        ]);

        $lastinsertedid = Homeabout::insertGetId([
          'description' => $request->description,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('about_img')){
          $uploaded_image = $request->about_img;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(1898, 1600)->save(base_path('public/uploads/home_about_img/'.$new_img_name));

          Homeabout::find($lastinsertedid)->update([
            'about_img' => $new_img_name,
          ]);
        }

        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function homeabouteditinsert(Request $request){
        Homeabout::find($request->about_id)->update([
        'description' => $request->description,
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('about_img')){
        if(Homeabout::find($request->about_id)->about_img !='about_img.jpg'){
          $nametodelete = Homeabout::find($request->about_id)->about_img;
          unlink(base_path('public/uploads/home_about_img/'.$nametodelete));
        }
      }
      $uploaded_image = $request->about_img;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->about_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(1898, 1600)->save(base_path('public/uploads/home_about_img/'.$new_img_name));

       Homeabout::find($request->about_id)->update([
        'about_img' => $new_img_name,
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function homeaboutdelete($about_id){
      $about_img =  Homeabout::findOrFail($about_id)->about_img;
      if($about_img != 'about_img.jpg'){
        unlink(base_path('public/uploads/home_about_img/'.$about_img));
      }
      Homeabout::findOrFail($about_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    //what we do

    function whatwedo()
    {
      $whatwedo_infos = Whatwedo::all();
      return view('backend/whatwedo/whatwedo', compact('whatwedo_infos'));
    }

    function whatwedoinsert(Request $request){
      $request->validate([
          'icon' => 'required',
          'title' => 'required',
          'description' => 'required',
        ],[
          'icon.required' => 'icon field must be required!',
          'title.required' => 'title  field must be required!',
          'description.required' => 'description  field must be required!',
        ]);

          Whatwedo::insert([
          'icon' => $request->icon,
          'title' => $request->title,
          'description' => $request->description,
          'link' => $request->link,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function whatwedoeditinsert(Request $request){
        Whatwedo::find($request->whatwedo_id)->update([
        'icon' => $request->icon,
        'title' => $request->title,
        'description' => $request->description,
        'link' => $request->link,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function whatwedodelete($whatwedo_id){
      Whatwedo::findOrFail($whatwedo_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    // premium video link

    function premiumvideolink()
    {
      $prevideo_infos = Premiumvideo::all();
      return view('backend/Premiumvideo/premiumvideo', compact('prevideo_infos'));
    }

    function premiumvideolinkinsert(Request $request){
      $request->validate([
          'link' => 'required',
        ],[
          'link.required' => 'link field must be required!',
        ]);

          Premiumvideo::insert([
          'link' => $request->link,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function premiumvideolinkeditinsert(Request $request){
        Premiumvideo::find($request->premium_id)->update([
        'link' => $request->link,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function premiumvideolinkdelete($premium_id){
      Premiumvideo::findOrFail($premium_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    //student feedback

    function studentfeedback(){
      $studentfeed_infos = Studentfeedback::all();
      return view('backend/Studentfeedback/studentfeedback', compact('studentfeed_infos'));
    }

    function studentfeedbackeditinsert(Request $request){
        Studentfeedback::find($request->student_id)->update([
        'name' => $request->name,
        'comment' => $request->comment,
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('student_img')){
        if(Studentfeedback::find($request->student_id)->student_img !='student_img.jpg'){
          $nametodelete = Studentfeedback::find($request->student_id)->student_img;
          unlink(base_path('public/uploads/student_img/'.$nametodelete));
        }
      }
      $uploaded_image = $request->student_img;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->student_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(960, 960)->save(base_path('public/uploads/student_img/'.$new_img_name));

       Studentfeedback::find($request->student_id)->update([
        'student_img' => $new_img_name,
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function studentfeedbackdelete($student_id){
      $student_img =  Studentfeedback::findOrFail($student_id)->student_img;
      if($student_img != 'student_img.jpg'){
        unlink(base_path('public/uploads/student_img/'.$student_img));
      }
      Studentfeedback::findOrFail($student_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }



    // amader somporke page

    function amadersomporke(){
      $amader_infos = Amadersomporke::all();
      return view('backend/amadersomporke/amadersomporke', compact('amader_infos'));
    }

    function amadersomporkeinsert(Request $request){
      $request->validate([
          'about_img' => 'required',
          'description1' => 'required',
          'description2' => 'required',
        ],[
          'about_img.required' => 'about image field must be required!',
          'description1.required' => 'description  field must be required!',
          'description2.required' => 'description  field must be required!',
        ]);

        $lastinsertedid = Amadersomporke::insertGetId([
          'description1' => $request->description1,
          'description2' => $request->description2,
          'description3' => $request->description3,
          'description4' => $request->description4,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('about_img')){
          $uploaded_image = $request->about_img;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(1898, 1600)->save(base_path('public/uploads/amader_img/'.$new_img_name));

          Amadersomporke::find($lastinsertedid)->update([
            'about_img' => $new_img_name,
          ]);
        }

        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function amadersomporkeeditinsert(Request $request){
        Amadersomporke::find($request->about_id)->update([
        'description1' => $request->description1,
        'description2' => $request->description2,
        'description3' => $request->description3,
        'description4' => $request->description4,
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('about_img')){
        if(Amadersomporke::find($request->about_id)->about_img !='about_img.jpg'){
          $nametodelete = Amadersomporke::find($request->about_id)->about_img;
          unlink(base_path('public/uploads/amader_img/'.$nametodelete));
        }
      }
      $uploaded_image = $request->about_img;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->about_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(1898, 1600)->save(base_path('public/uploads/amader_img/'.$new_img_name));

       Amadersomporke::find($request->about_id)->update([
        'about_img' => $new_img_name,
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function amadersomporkedelete($about_id){
      $about_img =  Amadersomporke::findOrFail($about_id)->about_img;
      if($about_img != 'about_img.jpg'){
        unlink(base_path('public/uploads/amader_img/'.$about_img));
      }
      Amadersomporke::findOrFail($about_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }


}
