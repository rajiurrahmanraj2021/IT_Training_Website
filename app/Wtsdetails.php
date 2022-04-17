<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wtsdetails extends Model
{
    protected $fillable = ['wts_category_id','wts_img', 'offer_one', 'offer_two','offer_three', 'offer_four', 'offer_five', 'offer_six', 'offer_seven', 'offer_eight'];
}
