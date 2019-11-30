<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = 'payments';
    protected $fillable=['ownerID','productID','name','surname','street1','city','state','country','postcode','email','price'];
}
