<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fines extends Model
{
    protected $fillable = ['payid','ownerID','price','amount_requir','priceAdiscount'];
}
