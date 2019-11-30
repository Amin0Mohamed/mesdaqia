<?php
namespace App\Console\Commands;
use App\notifications;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class everyMonth extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Month:delete';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'deletes an open auction after 30days if user didnt update';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now  = Carbon::now()->toDateString();
        $cars=DB::select(DB::raw('select * from cars'));
        $jewelrys=DB::select(DB::raw('select * from jewelries'));
        $highvalues=DB::select(DB::raw('select * from highvalues'));
        $vichles=DB::select(DB::raw('select * from vichles'));
        $properties=DB::select(DB::raw('select * from properties'));
// *******************cars********************
        for ($i = 0 ; $i<= count($cars) ; $i++)
        {
            $timestamp = strtotime($cars[$i]->updated_at);
            $date = date('d-m-Y', $timestamp);
            $dateAfterMonth = Carbon::parse($date)->addMonth()->format('d-m-Y');
            try {
                $a = new DateTime($date);
            } catch (\Exception $e) {
            }
            $b = new DateTime;
            $reamin = 30-($a->diff($b)->days);

            if (($cars[$i]->Auction_type =='مزاد مفتوح') && ($a->diff($b)->days >= 30))
            {
                $id=$cars[$i]->id;
                DB::table('cars')->delete($id);
            }
            elseif(($cars[$i]->Auction_type =='مزاد مفتوح')&&($a->diff($b)->days<30))
            {
                $ownerId = $cars[$i]->ownerID;
                $ProductID = $cars[$i]->id;
                $message = "برجاء العلم ان عدد الايام المتبقيه لانتهاء صلاحية المزاد رقم ".$ProductID." هي : ".$reamin."يوم";
                /// take user id = ownerId and product id and save them with the desired notification to table notifications
                $notification = new notifications();
                $notification->ownerID = $ownerId;
                $notification->ProductID = $ProductID;
                $notification->Message =  $message;
                $notification->save();
            }
        }
//  ***************  $jewelrys  ***************************
        for ($i = 0 ; $i<= count($jewelrys) ; $i++)
        {
            $timestamp = strtotime($jewelrys[$i]->updated_at);
            $date = date('d-m-Y', $timestamp);
            $dateAfterMonth = Carbon::parse($date)->addMonth()->format('d-m-Y');
            try {
                $a = new DateTime($date);
            } catch (\Exception $e) {
            }
            $b = new DateTime;
            $reamin = 30-($a->diff($b)->days);

            if (($jewelrys[$i]->Auction_type =='مزاد مفتوح') && ($a->diff($b)->days >= 30))
            {
                $id=$jewelrys[$i]->id;
                DB::table('jewelry')->delete($id);
            }
            elseif(($jewelrys[$i]->Auction_type =='مزاد مفتوح')&&($a->diff($b)->days<30))
            {
                $ownerId = $jewelrys[$i]->ownerID;
                $ProductID = $jewelrys[$i]->id;
                $message = "برجاء العلم ان عدد الايام المتبقيه لانتهاء صلاحية المزاد رقم ".$ProductID." هي : ".$reamin."يوم";
                /// take user id = ownerId and product id and save them with the desired notification to table notifications
                $notification = new notifications();
                $notification->ownerID = $ownerId;
                $notification->ProductID = $ProductID;
                $notification->Message =  $message;
                $notification->save();
            }
        }
//  *************** $highvalues  ***************************
        for ($i = 0 ; $i<= count($highvalues) ; $i++)
        {
            $timestamp = strtotime($highvalues[$i]->updated_at);
            $date = date('d-m-Y', $timestamp);
            $dateAfterMonth = Carbon::parse($date)->addMonth()->format('d-m-Y');
            try {
                $a = new DateTime($date);
            } catch (\Exception $e) {
            }
            $b = new DateTime;
            $reamin = 30-($a->diff($b)->days);

            if (($highvalues[$i]->Auction_type =='مزاد مفتوح') && ($a->diff($b)->days >= 30))
            {
                $id=$highvalues[$i]->id;
                DB::table('HighValue')->delete($id);
            }
            elseif(($highvalues[$i]->Auction_type =='مزاد مفتوح')&&($a->diff($b)->days<30))
            {
                $ownerId = $highvalues[$i]->ownerID;
                $ProductID = $highvalues[$i]->id;
                $message = "برجاء العلم ان عدد الايام المتبقيه لانتهاء صلاحية المزاد رقم ".$ProductID." هي : ".$reamin."يوم";
                /// take user id = ownerId and product id and save them with the desired notification to table notifications
                $notification = new notifications();
                $notification->ownerID = $ownerId;
                $notification->ProductID = $ProductID;
                $notification->Message =  $message;
                $notification->save();
            }
        }
// *******************vichles********************
        for ($i = 0 ; $i<= count($vichles) ; $i++)
        {
            $timestamp = strtotime($vichles[$i]->updated_at);
            $date = date('d-m-Y', $timestamp);
            $dateAfterMonth = Carbon::parse($date)->addMonth()->format('d-m-Y');
            try {
                $a = new DateTime($date);
            } catch (\Exception $e) {
            }
            $b = new DateTime;
            $reamin = 30-($a->diff($b)->days);

            if (($vichles[$i]->Auction_type =='مزاد مفتوح') && ($a->diff($b)->days >= 30))
            {
                $id=$vichles[$i]->id;
                DB::table('vichle')->delete($id);
            }
            elseif(($vichles[$i]->Auction_type =='مزاد مفتوح')&&($a->diff($b)->days<30))
            {
                $ownerId = $vichles[$i]->ownerID;
                $ProductID = $vichles[$i]->id;
                $message = "برجاء العلم ان عدد الايام المتبقيه لانتهاء صلاحية المزاد رقم ".$ProductID." هي : ".$reamin."يوم";
                /// take user id = ownerId and product id and save them with the desired notification to table notifications
                $notification = new notifications();
                $notification->ownerID = $ownerId;
                $notification->ProductID = $ProductID;
                $notification->Message =  $message;
                $notification->save();
            }
        }
// *******************properties********************
        for ($i = 0 ; $i<= count($properties) ; $i++)
        {
            $timestamp = strtotime($properties[$i]->updated_at);
            $date = date('d-m-Y', $timestamp);
            $dateAfterMonth = Carbon::parse($date)->addMonth()->format('d-m-Y');
            try {
                $a = new DateTime($date);
            } catch (\Exception $e) {
            }
            $b = new DateTime;
            $reamin = 30-($a->diff($b)->days);

            if (($properties[$i]->Auction_type =='مزاد مفتوح') && ($a->diff($b)->days >= 30))
            {
                $id=$properties[$i]->id;
                DB::table('property')->delete($id);
            }
            elseif(($properties[$i]->Auction_type =='مزاد مفتوح')&&($a->diff($b)->days<30))
            {
                $ownerId = $properties[$i]->ownerID;
                $ProductID = $properties[$i]->id;
                $message = "برجاء العلم ان عدد الايام المتبقيه لانتهاء صلاحية المزاد رقم ".$ProductID." هي : ".$reamin."يوم";
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
