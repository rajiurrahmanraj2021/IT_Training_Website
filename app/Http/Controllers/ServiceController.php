<?php

namespace App\Http\Controllers;

use App\Training;
use App\Center;
use App\Centerdetail;
use App\Servicecategory;
use App\Allservice;
use Image;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function trainingview()
    {
      $training_infos = Training::all();
      return view('backend/service/training', compact('training_infos'));
    }

    function traininginsert(Request $request){
      $request->validate([
          'training_image' => 'required',
          'title' => 'required',
          'description' => 'required',
          'name' => 'required',
          'designation' => 'required',
          'phone' => 'required',
          'email' => 'required',
          'location' => 'required',
        ],[
          'training_image.required' => 'training image field must be required!',
          'title.required' => 'title  field must be required!',
          'description.required' => 'description field must be required!',
          'name.required' => 'name field must be required!',
          'designation.required' => 'designation field must be required!',
          'phone.required' => 'phone field must be required!',
          'email.required' => 'email field must be required!',
          'location.required' => 'location field must be required!',
        ]);

        $lastinsertedid = Training::insertGetId([
          'title' => $request->title,
          'description' => $request->description,
          'name' => $request->name,
          'designation' => $request->designation,
          'phone' => $request->phone,
          'email' => $request->email,
          'location' => $request->location,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('training_image')){
          $uploaded_image = $request->training_image;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(5312, 3520)->save(base_path('public/uploads/training_image/'.$new_img_name));

          Training::find($lastinsertedid)->update([
            'training_image' => $new_img_name,
          ]);
        }

        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function trainingeditinsert(Request $request){
        Training::find($request->training_id)->update([
        'title' => $request->title,
        'name' => $request->name,
        'designation' => $request->designation,
        'phone' => $request->phone,
        'email' => $request->email,
        'location' => $request->location,
        'created_at' => Carbon::now()
      ]);
      if($request->hasFile('training_image')){
        if(Training::find($request->training_id)->training_image !='training_image.jpg'){
          $nametodelete = Training::find($request->training_id)->training_image;
          unlink(base_path('public/uploads/training_image/'.$nametodelete));
        }
      }
      $uploaded_image = $request->training_image;
      $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
      $new_img_name = $request->training_id.'.'.$our_uploaded_img_extension;
      Image::make($uploaded_image)->resize(5312, 3520)->save(base_path('public/uploads/training_image/'.$new_img_name));

       Training::find($request->training_id)->update([
        'training_image' => $new_img_name,
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function trainingdelete($training_id){
      $training_image =  Training::findOrFail($training_id)->training_image;
      if($training_image != 'training_image.jpg'){
        unlink(base_path('public/uploads/training_image/'.$training_image));
      }
      Training::findOrFail($training_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    //Training Centers Mathod//

    function centerview()
    {
      $center_infos = Center::all();
      return view('backend/service/center', compact('center_infos'));
    }

    function centerinsert(Request $request){
      $request->validate([
          'region' => 'required',
          'person' => 'required',
          'designation' => 'required',
          'address' => 'required',
          'number' => 'required',
          'email' => 'required',
        ],[
          'region.required' => 'region field must be required!',
          'person.required' => 'person  field must be required!',
          'designation.required' => 'designation  field must be required!',
          'address.required' => 'address field must be required!',
          'number.required' => 'number field must be required!',
          'email.required' => 'email field must be required!',
        ]);

          Center::insert([
          'region' => $request->region,
          'person' => $request->person,
          'designation' => $request->designation,
          'address' => $request->address,
          'tel_phone' => $request->tel_phone,
          'number' => $request->number,
          'email' => $request->email,
          'fax' => $request->fax,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function centereditinsert(Request $request){
        Center::find($request->center_id)->update([
        'region' => $request->region,
        'person' => $request->person,
        'designation' => $request->designation,
        'address' => $request->address,
        'tel_phone' => $request->tel_phone,
        'number' => $request->number,
        'email' => $request->email,
        'fax' => $request->fax,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function centerdelete($center_id){
      Center::findOrFail($center_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    function centerviewdetails()
    {
      $center_details = Center::all();
      $training_center_detail_infos = Centerdetail::all();
      return view('backend/service/centerviewdetails', compact('training_center_detail_infos', 'center_details'));
    }

    function training_center_detailinsert(Request $request){
      $request->validate([
          'center_category_id' => 'required',
          'category_name' => 'required',
          'description' => 'required',
          'rates' => 'required'
        ],[
          'center_category_id.required' => 'this field must be required!',
          'category_name.required' => 'category_name field must be required!',
          'description.required' => 'description field must be required!',
          'rates.required' => 'rates field must be required!'
        ]);

        Centerdetail::insert([
        'center_category_id' => $request->center_category_id,
        'category_name' => $request->category_name,
        'description' => $request->description,
        'capacity' => $request->capacity,
        'rates' => $request->rates,
        'created_at' => Carbon::now()
      ]);
      return back()->with('success_message', 'Your Data Added Sudccessfully!');
    }

    function center_detaileditinsert(Request $request){
        Centerdetail::find($request->center_id)->update([
        'center_category_id' => $request->center_category_id,
        'category_name' => $request->category_name,
        'description' => $request->description,
        'capacity' => $request->capacity,
        'rates' => $request->rates,
        'created_at' => Carbon::now()
      ]);
      return back()->with('message', 'updated successfully!');
    }

    function center_detailsdelete($center_id){
      Centerdetail::findOrFail($center_id)->Delete();
      return back()->with('success_message', 'Your Data deleted successfully!');
    }

    //i am here
    function cateringservicecategory(){
      $service_categorys = Servicecategory::all();
      $all_servicer = Allservice::all();
      return view('backend/service/cateringservicecategory', compact('service_categorys', 'all_servicer'));
    }

    function categoryserviceinsert(Request $request){
      $request->validate([
            'category_name'=>'required',
          ],[
            'category_name.required' => 'Category name is must be required',
          ]);

          Servicecategory::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
          ]);
          return back()->with('success_message', 'Your Category add successfully!');
    }

    function categoryservicedelete($category_id){
          Servicecategory::findOrFail($category_id)->delete();
          return back()->with('success_message', 'category deleted successfully!');
    }

    function categoryserviceeditinsert(Request $request){
          Servicecategory::findOrFail($request->category_id)->update([
            'category_name' => $request->category_name,
          ]);
          return back()->with('success_message', 'category name update successfully!..');
    }
    function Allservice(){
      $all_servicer = Servicecategory::all();
      $all_service_details = Allservice::all();
      return view('backend/service/allservice', compact('all_servicer', 'all_service_details'));
    }

    function allserviceinsert(Request $request){
      $request->validate([
          'service_category_id' => 'required',
          'meals' => 'required',
          'rates' => 'required',
          'food' => 'required',
        ],[
          'service_category_id.required' => 'please select your categroy name!',
          'meals.required' => 'meals must be required!',
          'rates.required' => 'rates must be required!',
          'food.required' => ' food field must be required!',
        ]);

        $lastinsertedid = Allservice::insert([
          'service_category_id' => $request->service_category_id,
          'meals' => $request->meals,
          'rates' => $request->rates,
          'food' => $request->food,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', 'Your About Added Sudccessfully!');
    }

    function allserviceeditinsert(Request $request){
      Allservice::find($request->category_id)->update([
      'category_name' => $request->category_name,
      'meals' => $request->meals,
      'rates' => $request->rates,
      'food' => $request->food,


      'created_at' => Carbon::now()
    ]);
    return back()->with('success_message', 'about updated successfully!');
    }

    function allservicedelete($service_id){
      Allservice::findOrFail($service_id)->Delete();
      return back()->with('success_message', 'Your about deleted successfully!');
    }


    function waterview()
    {
      return view('backend/service/water');
    }
    function iceview()
    {
      return view('backend/service/ice');
    }
}
