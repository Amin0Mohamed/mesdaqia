<?php

namespace App\Console\Commands;

use App\notifications;
use App\User;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class subscribe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:subscribe';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'subscribe golden or platinum';

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
        $now  = Carbon::now()->toDateString();

        $users=DB::select(DB::raw('select * from users'));
        foreach ($users as $user ){
            $time_of_subs = strtotime($user->updated_at);
            $date = date('d-m-Y', $time_of_subs);
            $dateAfterMonth = Carbon::parse($date)->addMonth()->format('d-m-Y');
            echo $dateAfterMonth;
            try {
                $a = new DateTime($date);
            } catch (\Exception $e) {
            }
            $b = new DateTime;
            $reamin = 30-($a->diff($b)->days);
            if ($a->diff($b)->days >= 30)
            {
                $userreco = User::find($user->id);
                $userreco->pactage_type =" ";
                $userreco->update();
            }
            elseif($a->diff($b)->days < 30)
            {
                $ownerId = $user->id;
                $message = "برجاء العلم ان عدد الايام المتبقيه لانتهاء الاشتراك رقم ".$user->pactage_type." هي : ".$reamin."يوم";
                /// take user id = ownerId and product id and save them with the desired notification to table notifications
                $notification = new notifications();
                $notification->ownerID = $ownerId;
                $notification->Message =  $message;
                $notification->save();
            }

        }
    }
}
