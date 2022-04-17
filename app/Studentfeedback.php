<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentfeedback extends Model
{
    protected $fillable = ['name', 'comment', 'student_img'];
}
