<?php

namespace App\Http\Controllers\Dashboard;

use App\Add_im_text;
use App\cars;
use App\jewelry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{

    public function index()
    {
        $cars = cars::paginate(4);
        return view('dashboard.cars.index',compact('cars'));
    }

    public function create()
    {
        return view('dashboard.cars.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'type'=>'required',
                'vendor'=>'required',
                'location'=>'required',
                'price'=>'required',
                'color'=>'required',
                'year'=>'required',
                'new'=>'required',
                'status'=>'required',
                'Auction_type'=>'required',
                'Guarant'=>'required',
//                'ownerID'=>'required',
                'image'=>'required'

            ]
        );
//        ******************************
        $change = new cars($request->all());
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('productimages'), $imageName);
        $change->image = $imageName;
        $change->type = $request->input('type');
        $change->vendor = $request->input('vendor');
        $change->location = $request->input('location');
        $change->price = $request->input('price');
        $change->color = $request->input('color');
        $change->year = $request->input('year');
        $change->new = $request->input('new');
        $change->status = $request->input('status');
        $change->Auction_type = $request->input('Auction_type');
        $change->producttime = $request->input('product_time');
        $change->Guarant = $request->input('Guarant');
//        $change->ownerID = $request->input('ownerID');
        $change->save();
        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.cars.index');
    }


    public function show(cars $cars)
    {
        //
    }


    public function edit($id)
    {
        $car = cars::find($id);
        return view('dashboard.cars.edit',compact('car'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'type'=>'required',
                'vendor'=>'required',
                'location'=>'required',
                'price'=>'required',
                'color'=>'required',
                'year'=>'required',
                'new'=>'required',
                'status'=>'required',
                'Auction_type'=>'required',
                'Guarant'=>'required',
//                'ownerID'=>'required',
                'image'=>'required'
            ]
        );
        $cars=cars::find($id);
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('productimages'), $imageName);
        $cars->image = $imageName;
        $cars->type = $request->input('type');
        $cars->vendor = $request->input('vendor');
        $cars->location = $request->input('location');
        $cars->price = $request->input('price');
        $cars->color = $request->input('color');
        $cars->year = $request->input('year');
        $cars->new = $request->input('new');
        $cars->status = $request->input('status');
        $cars->Auction_type = $request->input('Auction_type');
        $cars->producttime = $request->input('product_time');
        $cars->Guarant = $request->input('Guarant');
        $cars->update();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.cars.index');
    }


    public function destroy($id)
    {
        $car = cars::find($id);
        $car->delete();
        return redirect()->route('dashboard.cars.index')->with('message','data is deleted');
    }
}
