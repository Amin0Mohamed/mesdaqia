<?php

namespace App\Http\Controllers;
use App\cars;
use App\HighValue;
use App\jewelry;
use App\notifications;
use App\payment;
use App\paymentf2;
use App\property;
use App\User;
use App\vichle;
use App\WaitRecive;
use App\WaitReciveCars;
use App\WaitReciveHigh;
use App\WaitReciveJew;
use App\WaitRecivePoro;
use App\WaitReciveVich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Paymentcontroller extends Controller
{
    public function data_customer($id,$ownerID,$price,$category){
        return view('payment.payment',compact('id','ownerID','price','category'));
    }
    public function savecustomer(Request $request){
        //requesa all
        $productID = $request->input('productID');
        $category = $request->input('category');
        $pay = $request->all();
        $getformdataPay = payment::create($pay);
        $noti = notifications::create(
            [
                'ownerID' =>$request->input('ownerthatregister'),
                'ProductID' =>$productID,
                'category' =>$category,
                'Message' =>Session::get('name').':: try to aution the product '
            ]
        );
        return view('payment.continue_pay',compact('getformdataPay','category'));
    }
    public function savedataAndgetRes(Request $request) {
        $re1 = $request->all();
        $category = $request->input('category');
        $productID = $request->input('productID');
        $getadata = paymentf2::create($re1);
        $amount =  $request->input('price');
        $url = "https://test.oppwa.com/v1/checkouts";
        $data = "entityId=8ac7a4c76d067d4f016d14f7c51b077b" .
            "&amount={$amount}".
            "&currency=SAR".
            "&paymentType=DB".
            "&testMode=EXTERNAL"
        ;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGFjN2E0Yzc2ZDA2N2Q0ZjAxNmQxNGY1NDA4ZDA3NzB8S01aTnFKSzNweA=='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        $data = json_decode($responseData);
        $active_pay = $data->result->description;
        if ($active_pay == 'successfully created checkout'){
            $noti = notifications::create(
                [
                    'ownerID' =>Session::get('id'),
                    'ProductID' =>$productID,
                    'category' =>$category,
                    'Message' =>$active_pay
                ]
            );
            $prodid = $productID;
            switch ($category){
                case 'cars' :
                    $carid = cars::find($prodid);
                    $car = cars::find($prodid)->toArray();
                    $payid = ['payid'=>Session::get('id')];
                    $res = array_merge($car, $payid);
                    $wcars = WaitReciveCars::create($res);
                    $carid->delete();
                    break;
                case 'jewelry':
                    $jewid = jewelry::find($prodid);
                    $jew = jewelry::find($prodid)->toArray();
                    $payid = ['payid'=>Session::get('id')];
                    $res = array_merge($jew, $payid);
                    $wjews = WaitReciveJew::create($res);
                    $jewid->delete();
                    break;
                case 'property':
                    $propertyid = property::find($prodid);
                    $property = property::find($prodid)->toArray();
                    $payid = ['payid'=>Session::get('id')];
                    $res = array_merge($property, $payid);
                    $wpros = WaitRecivePoro::create($res);
                    $propertyid->delete();
                    break;
                case 'HighValue':
                    $highid = HighValue::find($prodid);
                    $high = HighValue::find($prodid)->toArray();
                    $payid = ['payid'=>Session::get('id')];
                    $res = array_merge($high, $payid);
                    $whighs = WaitReciveHigh::create($res);
                    $highid->delete();
                    break;
                case 'vichle':
                    $vichleid = vichle::find($prodid);
                    $vichle = vichle::find($prodid)->toArray();
                    $payid = ['payid'=>Session::get('id')];
                    $res = array_merge($vichle, $payid);
                    $wvichas = WaitReciveVich::create($res);
                    $vichleid->delete();
                    break;
            }
        }
        else{
            $noti = notifications::create(
                [
                    'ownerID' =>$request->input('ownerID'),
                    'ProductID' =>$productID,
                    'category' =>$category,
                    'Message' =>$active_pay
                ]
            );
        }
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return view('payment.output',['show'=>$active_pay]);
    }

// **************sunshine******************
    public function sunshine_data_customer($ownerID,$price,$category){
        return view('payment.sunshine_payment',compact('ownerID','price','category'));
    }
    public function sunshine_savecustomer(Request $request){
        $category = $request->input('category');
        $pay = $request->all();
        $getformdataPay = payment::create($pay);
        return view('payment.sunshine_continue_pay',compact('getformdataPay','category'));
    }
    public function sunshine_savedataAndgetRes(Request $request){
        $re1 = $request->all();
        $category = $request->input('category');
        $ownerID =$request->input('ownerID');
        $getadata = paymentf2::create($re1);
        $amount =  $request->input('price');
        $url = "https://test.oppwa.com/v1/checkouts";
        $data = "entityId=8ac7a4c76d067d4f016d14f7c51b077b" .
            "&amount={$amount}".
            "&currency=SAR".
            "&paymentType=DB".
            "&testMode=EXTERNAL";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGFjN2E0Yzc2ZDA2N2Q0ZjAxNmQxNGY1NDA4ZDA3NzB8S01aTnFKSzNweA=='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        $data = json_decode($responseData);
        $active_pay = $data->result->description;
        if ($active_pay == 'successfully created checkout'){
            $noti = notifications::create(
                [
                    'ownerID' =>$request->input('ownerID'),
                    'category' =>$category,
                    'Message' =>$active_pay
                ]
            );
// *********inset into user table***********
            $users=User::find($ownerID);
            $users->pactage_type = $request->input('category');
            $users->update();
        }
        else{
            $noti = notifications::create(
                [
                    'ownerID' =>$request->input('ownerID'),
                    'category' =>$category,
                    'Message' =>$active_pay
                ]
            );
        }
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return view('payment.sunshine_output',['show'=>$active_pay]);
    }

    // *******************accept recive from buyer and seller and take my site money
    public function AceeptaceBuyerReciveCars($id){
        $product = WaitReciveCars::find($id);
        $product->Accept_buyer = 'ok';
        $product->save();
        return back();
    }
    public function AceeptaceBuyerReciveJews($id){
        $product = WaitReciveJew::find($id);
        $product->Accept_buyer = 'ok';
        $product->save();
        return back();
    }
    public function AceeptaceBuyerReciveVichs($id){
        $product = WaitReciveVich::find($id);
        $product->Accept_buyer = 'ok';
        $product->save();
        return back();
    }
    public function AceeptaceBuyerReciveProps($id){
        $product = WaitRecivePoro::find($id);
        $product->Accept_buyer = 'ok';
        $product->save();
        return back();
    }
    public function AceeptaceBuyerReciveHigh($id){
        $product = WaitReciveHigh::find($id);
        $product->Accept_buyer = 'ok';
        $product->save();
        return back();
    }
    // seller
    public function AceeptaceSellerReciveCars($id){
        $product = WaitReciveCars::find($id);
        $product->Accept_seller = 'ok';
        $product->save();
        return back();
    }
    public function AceeptaceSellerReciveJews($id){
        $product = WaitReciveJew::find($id);
        $product->Accept_seller = 'ok';
        $product->save();
        return back();
    }
    public function AceeptaceSellerReciveVichs($id){
        $product = WaitReciveVich::find($id);
        $product->Accept_seller = 'ok';
        $product->save();
        return back();
    }
    public function AceeptaceSellerReciveProps($id){
        $product = WaitRecivePoro::find($id);
        $product->Accept_seller = 'ok';
        $product->save();
        return back();
    }
    public function AceeptaceSellerReciveHigh($id){
        $product = WaitReciveHigh::find($id);
        $product->Accept_seller = 'ok';
        $product->save();
        return back();
    }
//    ******************************************************************
    public function RtriveCars($id){
        return view('RetiveProductView.carsretive',compact('id','ownerID'));
    }
    public function RtriveJews($id){
        return view('RetiveProductView.jewsretive',compact('id','ownerID'));
    }
    public function RtriveVichs($id){
        return view('RetiveProductView.vichleretive',compact('id','ownerID'));
    }
    public function RtriveProps($id){
        return view('RetiveProductView.prporetive',compact('id','ownerID'));
    }
    public function RtriveHigh($id){
        return view('RetiveProductView.highvalueretive',compact('id','ownerID'));
    }
    //// complaint to admin
    public function save_comlaint_inWaitcar(Request $request){

        $complaint = $request->input('complaint');
        $id = $request->input('id');
        $product = WaitReciveCars::find($id);
        $product->Complaint_buyer = $complaint;
        $product->save();
        return back();
    }
    public function save_comlaint_inWaitjew(Request $request){

        $complaint = $request->input('complaint');
        $id = $request->input('id');
        $product = WaitReciveJew::find($id);
        $product->Complaint_buyer = $complaint;
        $product->save();
        return back();
    }
    public function save_comlaint_inWaitprop(Request $request){
        $complaint = $request->input('complaint');
        $id = $request->input('id');
        $product = WaitRecivePoro::find($id);
        $product->Complaint_buyer = $complaint;
        $product->save();
        return back();
    }
    public function save_comlaint_inWaitvichle(Request $request){
        $complaint = $request->input('complaint');
        $id = $request->input('id');
        $product = WaitReciveVich::find($id);
        $product->Complaint_buyer = $complaint;
        $product->save();
        return back();
    }
    public function save_comlaint_inWaitHighvlaue(Request $request){
        $complaint = $request->input('complaint');
        $id = $request->input('id');
        $product = WaitReciveHigh::find($id);
        $product->Complaint_buyer = $complaint;
        $product->save();
        return back();
    }
}
