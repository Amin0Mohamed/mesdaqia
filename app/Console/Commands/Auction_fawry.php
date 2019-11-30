<?php

namespace App\Console\Commands;

use App\cars;
use App\HighValue;
use App\jewelry;
use App\notifications;
use App\property;
use App\vichle;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Auction_fawry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fawry:addtime';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add time on product and delte it after time selected';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $now  = Carbon::now()->toDateTimeString();
        $cars = cars::all();
        $jewelrys = jewelry::all();
        $highValues =HighValue::all();
        $vichles =vichle::all();
        $properties =property::all();
        //***************  cars   *******************
        foreach ($cars as $car){
            $producttime = $car->producttime;
            if (($car->Auction_type =='مزاد فورى')&&($now >= $producttime))
            {
                $id=$car->id;
                DB::table('cars')->delete($id);
            }
            elseif (($car->Auction_type =='مزاد فورى')&&($now <= $producttime))
            {
                $ownerId = $car->ownerID;
                $ProductID = $car->id;
                $message = "The Mazade Fawry:: the time is is now : ".$now.' and '.'the Product time is '.$producttime;
                /// take user id = ownerId and product id and save them with the desired notification to table notifications
                $notification = new notifications();
                $notification->ownerID = $ownerId;
                $notification->ProductID = $ProductID;
                $notification->Message =  $message;
                $notification->save();
            }

        }
//***************  jewelry   *******************
        foreach ($jewelrys as $jewelry){
            $producttime = $jewelry->producttime;
            if (($jewelry->Auction_type =='مزاد فورى')&&($now >= $producttime))
            {
                $id=$jewelry->id;
                DB::table('jewelries')->delete($id);
            }
            elseif (($jewelry->Auction_type =='مزاد فورى')&&($now <= $producttime))
            {
                $ownerId = $jewelry->ownerID;
                $ProductID = $jewelry->id;
                $message = "The Mazade Fawry:: the time is is now : ".$now.' and '.'the Product time is '.$producttime;
                /// take user id = ownerId and product id and save them with the desired notification to table notifications
                $notification = new notifications();
                $notification->ownerID = $ownerId;
                $notification->ProductID = $ProductID;
                $notification->Message =  $message;
                $notification->save();
            }

        }
//*****************highvalues  *************************
        foreach ($highValues as $highValue){
            $producttime = $highValue->producttime;
            if (($highValue->Auction_type =='مزاد فورى')&&($now >= $producttime))
            {
                $id=$highValue->id;
                DB::table('highvalues')->delete($id);
            }
            elseif (($highValue->Auction_type =='مزاد فورى')&&($now <= $producttime))
            {
                $ownerId = $highValue->ownerID;
                $ProductID = $highValue->id;
                $message = "The Mazade Fawry:: the time is is now : ".$now.' and '.'the Product time is '.$producttime;
                /// take user id = ownerId and product id and save them with the desired notification to table notifications
                $notification = new notifications();
                $notification->ownerID = $ownerId;
                $notification->ProductID = $ProductID;
                $notification->Message =  $message;
                $notification->save();
            }

        }

//***************  vichles   *******************
foreach ($vichles as $vichle){
    $producttime = $car->producttime;
    if (($vichle->Auction_type =='مزاد فورى')&&($now >= $producttime))
    {
        $id=$vichle->id;
        DB::table('vichles')->delete($id);
    }
    elseif (($vichle->Auction_type =='مزاد فورى')&&($now <= $producttime))
    {
        $ownerId = $vichle->ownerID;
        $ProductID = $vichle->id;
        $message = "The Mazade Fawry:: the time is is now : ".$now.' and '.'the Product time is '.$producttime;
        /// take user id = ownerId and product id and save them with the desired notification to table notifications
        $notification = new notifications();
        $notification->ownerID = $ownerId;
        $notification->ProductID = $ProductID;
        $notification->Message =  $message;
        $notification->save();
    }

}




//***************  properties   *******************
foreach ($properties as $property){
    $producttime = $property->producttime;
    if (($property->Auction_type =='مزاد فورى')&&($now >= $producttime))
    {
        $id=$car->id;
        DB::table('properties')->delete($id);
    }
    elseif (($property->Auction_type =='مزاد فورى')&&($now <= $producttime))
    {
        $ownerId = $property->ownerID;
        $ProductID = $property->id;
        $message = "The Mazade Fawry:: the time is is now : ".$now.' and '.'the Product time is '.$producttime;
        /// take user id = ownerId and product id and save them with the desired notification to table notifications
        $notification = new notifications();
        $notification->ownerID = $ownerId;
        $notification->ProductID = $ProductID;
        $notification->Message =  $message;
        $notification->save();
    }

}





    }
}
