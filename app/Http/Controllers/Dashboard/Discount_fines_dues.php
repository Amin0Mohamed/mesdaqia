<?php

namespace App\Http\Controllers\Dashboard;

use App\Auth_car;
use App\Auth_highValue;
use App\Auth_jewelry;
use App\Auth_property;
use App\Auth_vichle;
use App\cars;
use App\controlsweb;
use App\WaitReciveCars;
use App\WaitReciveHigh;
use App\WaitReciveJew;
use App\WaitRecivePoro;
use App\WaitReciveVich;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Discount_fines_dues extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car_wait_count = WaitReciveCars::get()->count();
        $jew_wait_count = WaitReciveJew::get()->count();
        $high_wait_count = WaitReciveHigh::get()->count();
        $property_wait_count = WaitRecivePoro::get()->count();
        $vichle_wait_count = WaitReciveVich::get()->count();

        $car_wait = WaitReciveCars::paginate(4);
        $jew_wait = WaitReciveJew::paginate(4);
        $high_wait = WaitReciveHigh::paginate(4);
        $property_wait = WaitRecivePoro::paginate(4);
        $vichle_wait = WaitReciveVich::paginate(4);
        return view('dashboard.Discount_fines_dues.index',compact('car_wait','vichle_wait','high_wait','jew_wait','property_wait','car_wait_count','jew_wait_count','high_wait_count','property_wait_count','vichle_wait_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\controlsweb  $controlsweb
     * @return \Illuminate\Http\Response
     */
    public function show(controlsweb $controlsweb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\controlsweb  $controlsweb
     * @return \Illuminate\Http\Response
     */
    public function edit(controlsweb $controlsweb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\controlsweb  $controlsweb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, controlsweb $controlsweb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\controlsweb  $controlsweb
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$category)
    {
        if ($category=='car'){
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
