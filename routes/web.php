<?php

//All frontend Routeing//

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Who are u Routeing//
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','FrontendController@welcome');
Route::get('about/us','FrontendController@about_us');
Route::get('free_course','FrontendController@free_course');
Route::get('free_course_details/{free_id}','FrontendController@free_course_details');



Route::get('premium_course','FrontendController@premium_course');
Route::get('blog','FrontendController@blog');
Route::get('category/wise/service/{category_id}', 'FrontendController@categorywiseservice');
Route::get('question','FrontendController@question');
Route::get('condition','FrontendController@condition');
Route::get('contact','FrontendController@contact');
Route::get('premium_course_details','FrontendController@premium_course_details');
Route::get('order_details','FrontendController@order_details');
Route::get('blog_details1','FrontendController@blog_details1');
Route::get('blog_details2','FrontendController@blog_details2');
Route::get('blog_details3','FrontendController@blog_details3');
Route::get('blog_details4','FrontendController@blog_details4');
Route::get('blog_details5','FrontendController@blog_details5');
Route::get('blog_details6','FrontendController@blog_details6');
Route::get('blog_details7','FrontendController@blog_details7');
Route::get('blog_details8','FrontendController@blog_details8');
Route::get('blog_details9','FrontendController@blog_details9');
Route::get('blog_details10','FrontendController@blog_details10');
Route::get('blog_details11','FrontendController@blog_details11');
Route::get('blog_details12','FrontendController@blog_details12');

// order details insert route
Route::post('order/details/insert','FrontendController@orderdetailsinsert');
//contact us insert
Route::post('contact/us/insert','FrontendController@contactusinsert');
//premium course bonus offer insert
Route::post('bonus/offer/insert','FrontendController@bonusofferinsert');
//dvd question insert
Route::post('dvd/question/insert','FrontendController@dvdquestioninsert');

// student feedback insert route
Route::post('studentfeedback/insert', 'FrontendController@studentfeedbackinsert');


// clear cache routing

// Route::get('/clearcache', function(){
//     $exitCode = Artisan::call('cache:clear'); 
// });




//All Backend Routing//

Route::get('/home', 'HomeController@index')->name('home');

// All Backend routing
Route::group(['middleware' => 'auth'], function () {

// web traning backend route start

  //Home Page Routing//
  //about us
  Route::get('about_us','Homepagecontroller@about_usview');
  Route::post('home/about/insert', 'Homepagecontroller@homeaboutinsert');
  Route::post('homeabout/edit/insert', 'Homepagecontroller@homeabouteditinsert');
  Route::get('homeabout/delete/{about_id}', 'Homepagecontroller@homeaboutdelete');
  //what we do
  Route::get('what/we/do', 'Homepagecontroller@whatwedo');
  Route::post('whatwedo/insert', 'Homepagecontroller@whatwedoinsert');
  Route::post('whatwedo/edit/insert', 'Homepagecontroller@whatwedoeditinsert');
  Route::get('whatwedo/delete/{whatwedo_id}', 'Homepagecontroller@whatwedodelete');

  //premium video route
  Route::get('premium/video/link', 'Homepagecontroller@premiumvideolink');
  Route::post('premiumvideolink/insert', 'Homepagecontroller@premiumvideolinkinsert');
  Route::post('premiumvideolink/edit/insert', 'Homepagecontroller@premiumvideolinkeditinsert');
  Route::get('premiumvideolink/delete/{premium_id}', 'Homepagecontroller@premiumvideolinkdelete');

  //student feedback route
  Route::get('student/feedback','Homepagecontroller@studentfeedback');
  Route::post('studentfeedback/edit/insert', 'Homepagecontroller@studentfeedbackeditinsert');
  Route::get('studentfeedback/delete/{student_id}', 'Homepagecontroller@studentfeedbackdelete');


  //Amader Somporke
  Route::get('amader/somporke','Homepagecontroller@amadersomporke');
  Route::post('amadersomporke/insert', 'Homepagecontroller@amadersomporkeinsert');
  Route::post('amadersomporke/edit/insert', 'Homepagecontroller@amadersomporkeeditinsert');
  Route::get('amadersomporke/delete/{about_id}', 'Homepagecontroller@amadersomporkedelete');

  // free course

  Route::get('free/course', 'Freecoursecontroller@freecourse');
  Route::post('freecourse/insert', 'Freecoursecontroller@freecourseinsert');
  Route::post('freecourse/edit/insert', 'Freecoursecontroller@freecourseeditinsert');
  Route::get('freecourse/delete/{free_id}', 'Freecoursecontroller@freecoursedelete');

  //free course video
  Route::post('freecourse/video/insert', 'Freecoursecontroller@freecoursevideoinsert');
  Route::post('freecourse/video/edit/insert', 'Freecoursecontroller@freecoursevideoeditinsert');
  Route::get('freecourse/video/delete/{free_id}', 'Freecoursecontroller@freecoursevideodelete');

  // service pages
  Route::get('web/training/service', 'Webtrainingservicecontroller@webtrainingservice');
  Route::post('wts/insert', 'Webtrainingservicecontroller@wtsinsert');
  Route::post('wts/edit/insert', 'Webtrainingservicecontroller@wtseditinsert');
  Route::get('wts/delete/{wts_id}', 'Webtrainingservicecontroller@wtsdelete');

  Route::post('wts/details/insert', 'Webtrainingservicecontroller@wtsdetailsinsert');
  Route::post('wts/details/edit/insert', 'Webtrainingservicecontroller@wtsdetailseditinsert');
  Route::get('wts/details/delete/{wts_id}', 'Webtrainingservicecontroller@wtsdetailsdelete');
// premium course order list
  Route::get('web/design/success/order', 'PremiumcourseController@webdesignsuccessorder');
  Route::get('orderdetails/delete/{order_id}', 'PremiumcourseController@orderdetailsdelete');

//contact us route
Route::get('view/contact/us', 'ContactusController@viewcontactus');
Route::get('contactus/delete/{contact_id}', 'ContactusController@contactusdelete');
//bonus offer route
Route::get('view/bonus/offer', 'ContactusController@viewbonusoffer');
Route::get('bonusoffer/delete/{bonus_id}', 'ContactusController@bonusofferdelete');
//Dvd Question route
Route::get('view/dvd/question', 'ContactusController@viewdvdquestion');
Route::get('dvdquestion/delete/{question_id}', 'ContactusController@dvdquestiondelete');

// password update route
Route::get('update/password', 'UpdatepasswordController@updatepassword');
Route::post('updatepassword/insert', 'UpdatepasswordController@updatepasswordinsert');


  });

  // admin registration routes
  // Route::get('admin/register', 'AdminregisterController@adminregister');
