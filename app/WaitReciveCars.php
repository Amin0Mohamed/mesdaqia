<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaitReciveCars extends Model
{
    protected $fillable = ['Complaint_buyer','type','payid','vendor','color','year','new','model','status','price','ownerID','Auction_type','location','Guarant','image'];
}
