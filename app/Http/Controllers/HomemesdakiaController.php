<?php

namespace App\Http\Controllers;

use App\Add_im_text;
use App\advertis;
use App\Chatting;
use App\HighValue;
use App\jewelry;
use App\property;
use App\vichle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomemesdakiaController extends Controller
{
    protected function homeMed(){
        $Maxvichle = vichle::max('viewers');
        $vichles = vichle::where('viewers',$Maxvichle)->first();

        ///////////////////////////////
        $Maxproperty = property::max('viewers');
        $propertys = property::where('viewers',$Maxproperty)->first();
        ///////////////////////////////
        $Maxjewelry = jewelry::max('viewers');
        $jewelrys = jewelry::where('viewers',$Maxjewelry)->first();
        //////////////////////////////
        $Maxhighvalue = HighValue::max('viewers');
        $highvalues = HighValue::where('viewers',$Maxhighvalue)->first();
        //////////////////////////////
        $con=Add_im_text::all()->last();
        /// ////////////////
        $adv=advertis::all()->last();
        /////////////////////////////////
        if(!empty(Session::get('id'))){
            $questions = Chatting::where('ownerID',Session::get('id'))->get();
        }
        return view('MenubarViews.homemesdakia',compact('highvalues','jewelrys','propertys','vichles','con','adv','questions'));
    }
}
