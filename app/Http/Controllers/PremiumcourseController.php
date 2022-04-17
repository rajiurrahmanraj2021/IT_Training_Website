<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Orderdetails;
use Image;

class PremiumcourseController extends Controller
{
  function webdesignsuccessorder(){
    $orderdetails_infos = Orderdetails::all();
    return view('backend/Premiumcourse/webdesignsuccesscourseorder', compact('orderdetails_infos'));
  }

  function orderdetailsdelete($order_id){
    Orderdetails::findOrFail($order_id)->Delete();
    return back()->with('success_message', 'Your Data deleted successfully!');
  }
}
