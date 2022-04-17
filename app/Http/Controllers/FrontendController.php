<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExistingProjects;
use App\LatestNews;
use App\Implemented;
use App\PressMedia;
use App\CellsDepartments;
use App\all_programme;
use App\Regionaloffice;
use App\Career;
use App\Projectoffice;
use App\AllNews;
use App\Allresources;
use App\Programestatus;
use App\Ataglance;
use App\Ataglancecategory;
use App\Abouutnogform;
use App\Allabout;
use App\Aboutcategory;
use App\Allpolicy;
use App\Allgeneral;
use App\Aboutnetwork;
use App\Training;
use App\Center;
use App\Centerdetail;
use App\Allservice;
use App\Servicecategory;
use App\Homeabout;
use App\Whatwedo;
use App\Premiumvideo;
use App\Studentfeedback;
use App\Amadersomporke;
use App\Freecourse;
use App\Freecoursevideo;
use App\Wtsdetails;
use App\Orderdetails;
use App\Wts;
use App\Contactus;
use App\Bonusoffer;
use App\Dvdquestion;
use Carbon\Carbon;
use Image;


class FrontendController extends Controller
{

    function welcome(){
      $home_about_infos = Homeabout::all();
      $whatwedo_infos = Whatwedo::all();
      $prevideo_infos = Premiumvideo::all();
      $Studentfeedback_infos = Studentfeedback::all();
      $freecourse_infos = Freecourse::all();
      return view('welcome', compact('home_about_infos', 'whatwedo_infos', 'prevideo_infos', 'Studentfeedback_infos', 'freecourse_infos'));
    }

    function about_us()
    {
      $Amadersomporke_infos = Amadersomporke::all();
      return view('about_us', compact('Amadersomporke_infos'));
    }

    function free_course()
    {
      $freecourse_infos = Freecourse::all();
      return view('free_course', compact('freecourse_infos'));
    }

    function free_course_details($free_id){
       $free_coures_details_infos = Freecourse::findOrFail($free_id);
       $free_coures_video_details_infos = Freecoursevideo::where('freevideo_category_id', $free_id)->get();
       return view('free_course_details', compact('free_coures_details_infos', 'free_coures_video_details_infos'));
    }

    function premium_course()
    {
      return view('premium_course');
    }

    function blog()
    {
      return view('blog');
    }

    function categorywiseservice($category_id)
    {
      $service_wise_infos =  Wtsdetails::where('wts_category_id', $category_id)->get();
      return view('categorywiseservice', compact('service_wise_infos', 'category_id'));
    }

    function webdevelopment()
    {
      return view('webdevelopment');
    }

    function question()
    {
      return view('question');
    }

    function condition()
    {
      return view('condition');
    }

    function contact()
    {
      return view('contact');
    }

    function free_course_details1()
    {
      return view('free_course_details1');
    }

    function free_course_details2()
    {
      return view('free_course_details2');
    }

    function free_course_details3()
    {
      return view('free_course_details3');
    }

    function premium_course_details()
    {
      return view('premium_course_details');
    }
//FHGFG
    function order_details()
    {
      return view('order_details');
    }

    function orderdetailsinsert(Request $request){

        Orderdetails::insertGetId([
          'order_id' => $order_id = rand(1000,5000),
           'name' => $request->name,
          'phone' => $request->phone,
          'email' => $request->email,
          'order' => $request->order,
          'delivary_address' => $request->delivary_address,
          'payment' => $request->payment,
          'bks_number' => $request->bks_number,
          'bks_trxid' => $request->bks_trxid,
          'rocket_number' => $request->rocket_number,
          'rocket_trxid' => $request->rocket_trxid,
          'condition' => $request->condition,
          'created_at' => Carbon::now()
        ]);

        return back()->with('success_message', ' আপনার অর্ডারটি  সম্পূর্ণ হয়েছে, আগামী ১২ ঘন্টার মধ্যে আপনাকে ফোন করে ডেলিভারি দেওয়া হবে।')->with('message2', $order_id);
    }
    
    function contactusinsert(Request $request){

        Contactus::insertGetId([
          'name' => $request->name,
          'phone' => $request->phone,
          'email' => $request->email,
          'message_name' => $request->message_name,
          'your_message' => $request->your_message,
          'created_at' => Carbon::now()
        ]);

        return back()->with('success_message', ' আপনার মেসেজটি আমরা পেয়েছি, খুব শিগ্রই আমরা আপনার দেওয়া ফোন নাম্বারে যোগাযোগ করবো...');
    }
    function bonusofferinsert(Request $request){

        Bonusoffer::insertGetId([
          'name' => $request->name,
          'phone' => $request->phone,
          'message' => $request->message,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', ' your message has been sent successfully!');
    }
    function dvdquestioninsert(Request $request){

        Dvdquestion::insertGetId([
          'name' => $request->name,
          'phone' => $request->phone,
          'question' => $request->question,
          'created_at' => Carbon::now()
        ]);
        return back()->with('success_message', ' your question has been sent successfully!');
    }

    // student feedback insert
    function studentfeedbackinsert(Request $request){
        
        $lastinsertedid = Studentfeedback::insertGetId([
          'name' => $request->name,
          'comment' => $request->comment,
          'created_at' => Carbon::now()
        ]);

        if($request->hasFile('student_img')){
          $uploaded_image = $request->student_img;
          $our_uploaded_img_extension = $uploaded_image->getClientOriginalExtension();
          $new_img_name = $lastinsertedid.'.'.$our_uploaded_img_extension;
          Image::make($uploaded_image)->resize(960, 960)->save(base_path('public/uploads/student_img/'.$new_img_name));

          Studentfeedback::find($lastinsertedid)->update([
            'student_img' => $new_img_name,
          ]);
        }

        return back()->with('feedback_message', 'Your Feedback Added Sudccessfully!');
    }
    function blog_details1()
    {
      return view('blog_details1');
    }

    function blog_details2()
    {
      return view('blog_details2');
    }

    function blog_details3()
    {
      return view('blog_details3');
    }

    function blog_details4()
    {
      return view('blog_details4');
    }

    function blog_details5()
    {
      return view('blog_details5');
    }

    function blog_details6()
    {
      return view('blog_details6');
    }

    function blog_details7()
    {
      return view('blog_details7');
    }

    function blog_details8()
    {
      return view('blog_details8');
    }

    function blog_details9()
    {
      return view('blog_details9');
    }

    function blog_details10()
    {
      return view('blog_details10');
    }

    function blog_details11()
    {
      return view('blog_details11');
    }

    function blog_details12()
    {
      return view('blog_details12');
    }




































    function policy()
    {
      $all_policy_infos = Allpolicy::all();
      $general_info = Allgeneral::all();
      return view('policy', compact('all_policy_infos','general_info'));
    }
    function network_affiliation()
    {
      $network_infos = Aboutnetwork::all();
      return view('network_affiliation', compact('network_infos'));
    }
    function allprogramme(){

      $all_programme_infos = all_programme::all();
      return view('all_newses', compact('all_programme_infos'));
    }

    function categorywiseprogramme($category_id){

      $category_wise_programme =  all_programme::where('programme_category_id', $category_id)->get();
      return view('category_wise_programme', compact('category_wise_programme', 'category_id'));
    }

    function categorywiseprogrammedetails($programme_id){
      $single_category_programme_details = all_programme::findOrFail($programme_id);
      $need_category_name = all_programme::find($programme_id)->programme_category_id;
      return view('category_wise_programe_details', compact('single_category_programme_details', 'need_category_name'));
    }

    function training()
    {
      $training_infos = Training::all();
      $center_infos = Center::all();
      return view('training', compact('training_infos', 'center_infos'));
    }

    function trainingrate(){
      $center_infos = Center::all();
      $service_infos = Allservice::all();
      $all_service_infos = Servicecategory::all();
      // $training_rate_infos = Centerdetail::all();
      return view('training_rate', compact('center_infos', 'service_infos', 'all_service_infos'));
    }

    function wqtl()
    {
      return view('wqtl');
    }
    function iec()
    {
      return view('iec');
    }

    function existing_projects()
    {

      $all_existing_project_infoes =  ExistingProjects::all();
      return view('existing_projects', compact('all_existing_project_infoes'));
    }

    function existingprojectdetails($existing_id){

      $single_existing_project_details = ExistingProjects::findOrFail($existing_id);
      return view('existing_projects_details', compact('single_existing_project_details'));
    }

    function prev_project()
    {
      $implemented_infos = Implemented::all();
      return view('prev_project', compact('implemented_infos'));
    }
    function implementedprojectdetails($implemented_id)
    {
      $single_implemented_details_info = Implemented::find($implemented_id);
      return view('project_details', compact('single_implemented_details_info'));
    }
    function resources(){
      $all_resource_infos = Allresources::all();
      return view('resources', compact('all_resource_infos'));
    }

    function categorywiseresources($category_id ){
       // $all_resources_infos = Allresources::all();
      $category_wise_resources =  Allresources::where('resources_category_id', $category_id)->get();
      return view('category_wise_resources', compact('category_wise_resources', 'category_id'));
    }
    function photo()
    {
      return view('photo');
    }

    function allnewses(){

      $all_news_infos = AllNews::all();
      return view('all_newses', compact('all_news_infos'));
    }

    function categorywisenews($category_id){

      $category_wise_newses =  AllNews::where('news_category_id', $category_id)->get();
      return view('category_wise_news', compact('category_wise_newses', 'category_id'));
    }

    function category_wisenewsdetails($news_id){
      $single_category_news_details = AllNews::findOrFail($news_id);
      $need_category_name = AllNews::find($news_id)->news_category_id;
      return view('category_wise_news_details', compact('single_category_news_details', 'need_category_name'));
    }

    // function contact()
    // {
    //   return view('contact');
    // }
    function departments()
    {
      $CellsDepartments_infos = CellsDepartments::all();
      return view('departments', compact('CellsDepartments_infos'));
    }
    function regional_office()
    {
      $regionaloffice_infos = Regionaloffice::all();
      return view('regional_office', compact('regionaloffice_infos'));
    }
    function project_office()
    {
      $all_project_office =  Projectoffice::all();
      return view('project_office', compact('all_project_office'));
    }
    function career()
    {
      $career_info = Career::all();
      return view('career', compact('career_info'));
    }
    function program_status()
    {
      $addprogramme_status_details = Programestatus::all();
      return view('program_status', compact('addprogramme_status_details'));
    }
    function at_a_glances()
    {
      $ataglancecategories = Ataglancecategory::all();
      return view('at_a_glances', compact('ataglancecategories'));
    }
}
