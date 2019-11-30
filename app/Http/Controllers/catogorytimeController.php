<?php

namespace App\Http\Controllers;

use App\cars;
use App\HighValue;
use App\jewelry;
use App\property;
use App\vichle;
use Illuminate\Http\Request;

class catogorytimeController extends Controller
{
    public function Carstime(){
        if(!empty($_GET['timee'])){
            $car = cars::find($_GET['timee']);
            if (!empty($car)) {
                $car->delete();
            }
        }
        return redirect('/mazadat');
    }
    public function Jewstime(){
        if(!empty($_GET['timee'])){
            $jew = jewelry::find($_GET['timee']);
            if (!empty($jew)) {
                $jew->delete();
            }
        }
        return redirect('/mazadat');
    }
    public function Protime(){
        if(!empty($_GET['timee'])){
            $pro = property::find($_GET['timee']);
            if (!empty($pro)) {
                $pro->delete();
            }
        }
        return redirect('/mazadat');
    }
    public function Vichstime(){
        if(!empty($_GET['timee'])){
            $vic = vichle::find($_GET['timee']);
            if (!empty($vic)) {
                $vic->delete();
            }
        }
        return redirect('/mazadat');
    }
    public function hightime(){
        if(!empty($_GET['timee'])){
            $high = HighValue::find($_GET['timee']);
            if (!empty($high)) {
                $high->delete();
            }
        }
        return redirect('/mazadat');
    }
}
