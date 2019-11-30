<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paymentf2 extends Model
{
    protected $table = 'paymentf2s';
    protected $fillable=['ownerID','productID','paymentBrand','number','expiry','holder','cvv','price'];

}
