<?php


namespace App\Http\Controllers;


use App\Chatting;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    protected function Live(){
        return view('Livestramview');
    }
    public function chatting(Request $request){
        $Que_message = $request->input('messagechat');
        $owner = $request->input('id');
        $chat = Chatting::create([
           'ownerID' => $owner,
           'question'=>$Que_message
        ]);
        return redirect('/homemesdakia');
    }
}