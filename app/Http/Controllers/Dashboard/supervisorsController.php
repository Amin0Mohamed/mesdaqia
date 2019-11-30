<?php

namespace App\Http\Controllers\Dashboard;

use App\Admin;
use App\cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class supervisorsController extends Controller
{

    public function index()
    {
        $super = Admin::paginate(4);
        return view('dashboard.supervisors.index',compact('super'));
    }


    public function create()
    {
        return view('dashboard.supervisors.create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'c_password'=>'required',
                'Authorize'=>'required',
                'image'=>'required'
            ]
        );
//        ******************************
        $change = new Admin($request->all());
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('productimages'), $imageName);
        $change->image = $imageName;
        $change->name = $request->input('name');
        $change->email = $request->input('email');
        $change->password = $request->input('password');
        $change->c_password = $request->input('c_password');
        $change->Authorize = $request->input('Authorize');
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.supervisors.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $supervisor = Admin::find($id);
        return view('dashboard.supervisors.edit',compact('supervisor'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'c_password'=>'required',
                'Authorize'=>'required',
                'image'=>'required'
            ]
        );
//        ******************************
        $change =Admin::find($id);
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('productimages'), $imageName);
        $change->image = $imageName;
        $change->name = $request->input('name');
        $change->email = $request->input('email');
        $change->password = $request->input('password');
        $change->c_password = $request->input('c_password');
        $change->Authorize = $request->input('Authorize');
        $change->update();
        session()->flash('success',__('site.update_successfully'));
        return redirect()->route('dashboard.supervisors.index');
    }


    public function destroy($id)
    {
        $super = Admin::find($id);
        $super->delete();
        return redirect()->route('dashboard.supervisors.index')->with('message','data is deleted');
    }
}
