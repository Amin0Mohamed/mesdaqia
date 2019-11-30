<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaitReciveVich extends Model
{
    protected $fillable = ['Complaint_buyer','type','payid','vendor','color','year','new','model','price','status','ownerID','Auction_type','location','Guarant','image'];

}
