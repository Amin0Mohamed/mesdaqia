<?php

namespace App\Http\Controllers\Dashboard;

use App\Add_im_text;
use App\Chatting;
use App\paymentf2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class chatsController extends Controller
{

    public function index()
    {
         $chat =Chatting::all();
        return view('dashboard.chats.index',compact('chat'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $change = Chatting::find($id);
        return view('dashboard.chats.edit',compact('change'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'answer'=>'required',
            ]
        );
        $chat=Chatting::find($id);
        $chat->answer = $request->input('answer');
        $chat->update();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.chats.index');
    }
    public function destroy($id)
    {
        $chats=Chatting::find($id);
        $chats->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.chats.index');
    }
}
