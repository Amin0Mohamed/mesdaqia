<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vichle extends Model
{
    protected $fillable = ['type','vendor','color','year','new','model','price','status','ownerID','Auction_type','location','Guarant','image','producttime'];

}
