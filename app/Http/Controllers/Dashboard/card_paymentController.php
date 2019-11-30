<?php

namespace App\Http\Controllers\Dashboard;
use App\paymentf2;
use App\Http\Controllers\Controller;

class card_paymentController extends Controller
{

    public function index()
    {
        $card = paymentf2::all();
        return view('dashboard.card_payment.index',compact('card'));
    }

    public function destroy($id)
    {
        $user_payment=paymentf2::find($id);
        $user_payment->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.card_payment.index');
    }
}
