<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaitReciveHigh extends Model
{
    protected $fillable = ['Complaint_buyer','type','payid','name','price','new','ownerID','Auction_type','location','Guarant','image','status'];
}
