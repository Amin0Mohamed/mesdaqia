<?php

namespace App\Http\Controllers\Dashboard;

use App\Fines;
use App\notifications;
use App\payment;
use App\Http\Controllers\Controller;
use App\WaitReciveCars;
use App\WaitReciveHigh;
use App\WaitReciveJew;
use App\WaitRecivePoro;
use App\WaitReciveVich;
use Illuminate\Http\Request;
class user_paymentController extends Controller
{

    public function index()
    {
        $user_card = payment::all();
        return view('dashboard.user_payment.index',compact('user_card'));
    }

    public function destroy($id)
    {
        $user_payment=payment::find($id);
        $user_payment->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.user_payment.index');
    }
    public function Dues($id,$payid,$ownerID,$Accept_seller,$Accept_buyer,$price){
        if($Accept_buyer=='ok' and $Accept_seller == 'ok'){
            return view('dashboard.Discount_fines_dues.create',compact('payid','ownerID','price'));//forms to select price
        }
        return back();
    }
    public function fines_AfterResone($id,$payid,$ownerID,$price){
        $takefines = $price -  (25/100)*$price;
        $data_all =
            [
                'payid'=>$payid,
                'ownerID'=>$ownerID,
                'price'=>$price,
                'amount_requir'=>(25/100)*$price,
                'priceAdiscount'=>$takefines,
            ];
        $requesdata = Fines::create($data_all);
        $notification = notifications::create(
            [
                'ownerID' =>$payid,
                'Message' =>'لم يتم قبول السبب وتم خصم قيمة غرامة للتشكيك فى المنتج :'
            ]
        );
        session()->flash('success',__('site.send_notification_reply'));
        return back();
    }
    public function NotTakefines($id,$payid,$ownerID){
        $notification = notifications::create(
            [
                'ownerID' =>$payid,
                'Message' =>'تم قبول السبب وسيتم حذف المنتج من الموقع :'
            ]
        );
        session()->flash('success',__('site.send_notification_reply'));
        return back();
    }
    public function sure_fines(Request $request){
        $data_all = $request->all();
        $data_all['priceAdiscount'] = $data_all['price'] - $data_all['amount_requir'];//1000-300=700
        $requesdata = Fines::create($data_all);
        return back();
    }
    public function deletedata($id,$category)
    {
        if ($category =='car'){
            $car = WaitReciveCars::find($id);
            $car->delete();
        }
        if ($category=='jewelry'){
            $jew = WaitReciveJew::find($id);
            $jew->delete();
        }
        if ($category=='property'){
            $pro = WaitRecivePoro::find($id);
            $pro->delete();
        }
        if ($category=='highvalue'){
            $high = WaitReciveHigh::find($id);
            $high->delete();
        }
        if ($category=='vechile'){
            $vic = WaitReciveVich::find($id);
            $vic->delete();
        }
        return back();
    }
}
