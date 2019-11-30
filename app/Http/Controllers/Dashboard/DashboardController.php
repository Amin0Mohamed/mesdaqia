<?php

namespace App\Http\Controllers\Dashboard;

use App\Auth_car;
use App\Auth_highValue;
use App\Auth_jewelry;
use App\Auth_property;
use App\Auth_vichle;
use App\cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected function orders()
    {
        $jeweler_count = Auth_jewelry::get()->count();
        $higvalue_count = Auth_highValue::get()->count();
        $proparity_count = Auth_property::get()->count();
        $vicales_count = Auth_vichle::get()->count();
        $car_count = Auth_car::get()->count();
        $car_order = Auth_car::paginate(4);
        $jeweler_order = Auth_jewelry::paginate(4);
        $higvalue_order = Auth_highValue::paginate(4);
        $proparity_order = Auth_property::paginate(4);
        $vicales_order = Auth_vichle::paginate(4);
        return view('dashboard.index',compact('car_order','jeweler_order','higvalue_order','proparity_order','vicales_order','car_count','jeweler_count','higvalue_count','proparity_count','vicales_count'));
    }

}
