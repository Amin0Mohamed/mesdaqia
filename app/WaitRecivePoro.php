<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaitRecivePoro extends Model
{
    protected $fillable = ['Complaint_buyer','type','payid','material','gender','weight','price','ownerID','new','Auction_type','location','Guarant','image','status'];

}
