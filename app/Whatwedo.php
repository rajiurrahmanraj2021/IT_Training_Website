<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whatwedo extends Model
{
    protected $fillable = ['icon', 'title', 'description', 'link'];
}
