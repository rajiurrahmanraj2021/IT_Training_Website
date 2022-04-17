<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Contactus;
use App\Bonusoffer;
use App\Dvdquestion;
use Image;
class ContactusController extends Controller
{
  function viewcontactus(){
    $contactus_infos = Contactus::all();
    return view('backend/Contact_us/contactus', compact('contactus_infos'));
  }

  function contactusdelete($contact_id){
    Contactus::findOrFail($contact_id)->Delete();
    return back()->with('success_message', 'Your Data deleted successfully!');
  }

  function viewbonusoffer(){
    $bonousoffer_infos = Bonusoffer::all();
    return view('backend/Contact_us/bonusoffer', compact('bonousoffer_infos'));
  }

  function bonusofferdelete($bonus_id){
    Bonusoffer::findOrFail($bonus_id)->Delete();
    return back()->with('success_message', 'Your Data deleted successfully!');
  }

  function viewdvdquestion(){
    $dvdquestion_infos = Dvdquestion::all();
    return view('backend/Contact_us/dvdquestion', compact('dvdquestion_infos'));
  }

  function dvdquestiondelete($question_id){
    Dvdquestion::findOrFail($question_id)->Delete();
    return back()->with('success_message', 'Your Data deleted successfully!');
  }
}
