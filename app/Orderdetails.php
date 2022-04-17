<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'order', 'delivary_address', 'payment', 'bks_number', 'bks_trxid', 'rocket_number', 'rocket_trxid', 'condition'];
}
