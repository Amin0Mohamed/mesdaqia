<?php

namespace App\Http\Controllers;
use App\AddtoCard;
use App\Auth_car;
use App\Auth_highValue;
use App\Auth_jewelry;
use App\Auth_property;
use App\Auth_vichle;
use App\cars;
use App\HighValue;
use App\jewelry;
use App\notifications;
use App\property;
use App\User;
use App\vichle;
use App\WaitReciveCars;
use App\WaitReciveHigh;
use App\WaitReciveJew;
use App\WaitRecivePoro;
use App\WaitReciveVich;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\HttpFoundation\Session\Session;
class productController extends Controller
{
    //select and display forms
    public function SelectProduct(){
        $notification = notifications::all();
        $getowneridadd_card = AddtoCard::all();
        $car_to_edit = cars::paginate(4);
        $property_to_edit = property::paginate(4);
        $highvalue_to_edit = HighValue::paginate(4);
        $vichle_to_edit = vichle::paginate(4);
        $jewelry_to_edit = jewelry::paginate(4);

        $car_to_wait = WaitReciveCars::paginate(4);
        $property_to_wait = WaitRecivePoro::paginate(4);
        $highvalue_to_wait = WaitReciveHigh::paginate(4);
        $vichle_to_wait = WaitReciveVich::paginate(4);
        $jewelry_to_wait = WaitReciveJew::paginate(4);

        return view('pages_profile_list.enter',compact('notification','getowneridadd_card','car_to_edit'
            ,'property_to_edit','jewelry_to_edit','highvalue_to_edit','vichle_to_edit'
            ,'property_to_wait','highvalue_to_wait','vichle_to_wait','jewelry_to_wait','car_to_wait'
        ));
    }

    public function AddProduct(){

        return view('Basic_pages.add_product');
    }

    //***********forms************
    public function FormCar($id,$ownerID){
        $au_car = Auth_car::where(
            [
                ['id','=',$id],
                ['ownerID','=',$ownerID]
            ]
        )->first();
        return view('Basic_pages.formcars',compact('au_car'));
    }
    public function FormJewelry($id,$ownerID){
        $au_jewelry = Auth_jewelry::where(
            [
                ['id','=',$id],
                ['ownerID','=',$ownerID]
            ]
        )->first();
        return view('Basic_pages.formjewelries',compact('au_jewelry'));
    }
    public function FormProperty($id,$ownerID){
        $au_property = Auth_property::where(
            [
                ['id','=',$id],
                ['ownerID','=',$ownerID]
            ]
        )->first();
        return view('Basic_pages.formproperties',compact('au_property'));
    }
    public function FormVichle($id,$ownerID){
        $au_vichle = Auth_vichle::where(
            [
                ['id','=',$id],
                ['ownerID','=',$ownerID]
            ]
        )->first();
        return view('Basic_pages.formvichles',compact('au_vichle'));
    }
    public function Formhighvalue($id,$ownerID){
        $au_highValue = Auth_highValue::where(
            [
                ['id','=',$id],
                ['ownerID','=',$ownerID]
            ]
        )->first();
        return view('Basic_pages.formhighvalues',compact('au_highValue'));
    }
    //////////////////////add////////////////////////////////
    public function addcar(Request $request){

        if ($request->isMethod('post')){
            if ($request->hasFile('image')) {
                    $cars = new Auth_car($request->all());
                    $imageName = $request->file('image')->getClientOriginalName();
                    $request->file('image')->move(public_path('productimages'), $imageName);
                    $image = $cars->image = $imageName;
                    // get from text field from enter blade must put it first

                    $created_at = $cars->created_at;
                    $carbon_date = Carbon::parse($created_at);
                    $user_hour = (int)$request->input('product_time');
                    $cars->producttime = $carbon_date->addHours($user_hour);
                    //////////////////////////////////
                    $cars->save();
                    return redirect('/cars')->with('message', 'data inserted correcr');
                }
        }
        return view('Basic_pages.formcars');
    }
    public function addjewelry(Request $request){
        if ($request->isMethod('post')){
            if ($request->hasFile('image')) {
                $jewelries = new Auth_jewelry($request->all());
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('productimages'), $imageName);
                $image = $jewelries->image = $imageName;
                // get from text field from enter blade must put it first
                $created_at = $jewelries->created_at;
                $carbon_date = Carbon::parse($created_at);
                $user_hour = (int)$request->input('product_time');
                $jewelries->producttime = $carbon_date->addHours($user_hour);
                //////////////////////////////////
                $jewelries->save();
                return redirect('/jewelry')->with('message', 'data inserted correcr');
            }
        }
        return view('Basic_pages.formjewelries');
    }
    public function addproperty(Request $request){
        if ($request->isMethod('post')){
            if ($request->hasFile('image')) {
                $property = new Auth_property($request->all());
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('productimages'), $imageName);
                $image = $property->image = $imageName;
                // get from text field from enter blade must put it first
                $created_at = $property->created_at;
                $carbon_date = Carbon::parse($created_at);
                $user_hour = (int)$request->input('product_time');
                $property->producttime = $carbon_date->addHours($user_hour);
                //////////////////////////////////
                $property->save();
                return redirect('/property')->with('message', 'data inserted correcrt');
            }
        }
        return view('Basic_pages.formproperties');
    }
    public function addhighvalue(Request $request){
        if ($request->isMethod('post')){
            if ($request->hasFile('image')) {
                $highvalue = new Auth_highValue($request->all());
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('productimages'), $imageName);
                $image = $highvalue->image = $imageName;
                 // get from text field from enter blade must put it first
                 $created_at = $highvalue->created_at;
                 $carbon_date = Carbon::parse($created_at);
                 $user_hour = (int)$request->input('product_time');
                 $highvalue->producttime = $carbon_date->addHours($user_hour);
                 //////////////////////////////////
                $highvalue->save();
                return redirect('/highvalue')->with('message', 'data inserted correcrt');
            }
        }
        return view('Basic_pages.formhighvalues');
    }
    public function addvichles(Request $request){
        if ($request->isMethod('post')) {
            if ($request->hasFile('image')) {
                $vichle = new Auth_vichle($request->all());
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('productimages'), $imageName);
                $image = $vichle->image = $imageName;
                // get from text field from enter blade must put it first
                $created_at = $vichle->created_at;
                $carbon_date = Carbon::parse($created_at);
                $user_hour = (int)$request->input('product_time');
                $vichle->producttime = $carbon_date->addHours($user_hour);
                //////////////////////////////////
                $vichle->save();
                return redirect('/vichle')->with('message', 'data inserted correcrt');
            }
        }
        return view('Basic_pages.formvichles');
    }

    //////////////////////////// edite///////////////

    public function editcar(Request $request){
        $id = $request->input('id');
        $newprice = $request->input('new_price');
        $editprice = cars::find($id);
        $editprice->price = $newprice;
        $editprice->save();
        return back()->with('message',"تم تعديل سعر المنتج");
    }
    public function editjew(Request $request){
        $id = $request->input('id');
        $newprice = $request->input('new_price');
        $editpricecar = jewelry::find($id);
        $editpricecar->price = $newprice;
        $editpricecar->save();
        return back()->with('message',"تم تعديل سعر المنتج");
    }

    public function editproper(Request $request){
        $id = $request->input('id');
        $newprice = $request->input('new_price');
        $editprice = property::find($id);
        $editprice->price = $newprice;
        $editprice->save();
        return back()->with('message',"تم تعديل سعر المنتج");
    }
    public function editvich(Request $request){
        $id = $request->input('id');
        $newprice = $request->input('new_price');
        $editpricecar = vichle::find($id);
        $editpricecar->price = $newprice;
        $editpricecar->save();
        return back()->with('message',"تم تعديل سعر المنتج");
    }
    public function edithigh(Request $request){
        $id = $request->input('id');
        $newprice = $request->input('new_price');
        dd($id,$newprice);
        $editprice = HighValue::find($id);
        $editprice->price = $newprice;
        $editprice->save();
        return back()->with('message',"تم تعديل سعر المنتج");
    }

// ************************editafterreject things*************************************************
    public function editafterreject_car(Request $request){
        $id = $request->input('id');
        $ownerid = $request->input('ownerID');
        if ($request->isMethod('post')){
            if ($request->hasFile('image')) {
                $cars = Auth_car::where(
                    [
                        ['id','=',$id],
                        ['ownerID','=',$ownerid]
                    ]
                )->first();
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('productimages'), $imageName);
                $image = $cars->image = $imageName;
                // get from text field from enter blade must put it first

                $created_at = $cars->created_at;
                $carbon_date = Carbon::parse($created_at);
                $user_hour = (int)$request->input('product_time');
                $cars->producttime = $carbon_date->addHours($user_hour);
                //////////////////////////////////
                $cars->save();
                return redirect('/cars')->with('message', 'data inserted correcr');
            }
        }
        return view('Basic_pages.formcars');
    }

    public function editafterreject_jewelry(Request $request){
        $id = $request->input('id');
        $ownerid = $request->input('ownerID');
        if ($request->isMethod('post')){
            if ($request->hasFile('image')) {
                $jewelry = Auth_jewelry::where(     //***********
                    [
                        ['id','=',$id],
                        ['ownerID','=',$ownerid]
                    ]
                )->first();
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('productimages'), $imageName);
                $image = $jewelry->image = $imageName;        //******
                // get from text field from enter blade must put it first

                $created_at = $jewelry->created_at;    //******
                $carbon_date = Carbon::parse($created_at);
                $user_hour = (int)$request->input('product_time');
                $jewelry->producttime = $carbon_date->addHours($user_hour);   //*****
                //////////////////////////////////
                $jewelry->save();          //*****
                return redirect('/jewelry')->with('message', 'data inserted correcr'); //***
            }
        }
        return view('Basic_pages.formjewelries');
    }

    public function editafterreject_highvalue(Request $request){
        $id = $request->input('id');
        $ownerid = $request->input('ownerID');
        if ($request->isMethod('post')){
            if ($request->hasFile('image')) {
                $highvalue = Auth_highValue::where(     //***********
                    [
                        ['id','=',$id],
                        ['ownerID','=',$ownerid]
                    ]
                )->first();
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('productimages'), $imageName);
                $image = $highvalue->image = $imageName;        //******
                // get from text field from enter blade must put it first

                $created_at = $highvalue->created_at;    //******
                $carbon_date = Carbon::parse($created_at);
                $user_hour = (int)$request->input('product_time');
                $highvalue->producttime = $carbon_date->addHours($user_hour);   //*****
                //////////////////////////////////
                $highvalue->save();          //*****
                return redirect('/highvalue')->with('message', 'data inserted correcr'); //***
            }
        }
        return view('Basic_pages.formhighvalues');
    }

    public function editafterreject_property(Request $request){
        $id = $request->input('id');
        $ownerid = $request->input('ownerID');
        if ($request->isMethod('post')){
            if ($request->hasFile('image')) {
                $property = Auth_property::where(     //***********
                    [
                        ['id','=',$id],
                        ['ownerID','=',$ownerid]
                    ]
                )->first();
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('productimages'), $imageName);
                $image = $property->image = $imageName;        //******
                // get from text field from enter blade must put it first

                $created_at = $property->created_at;    //******
                $carbon_date = Carbon::parse($created_at);
                $user_hour = (int)$request->input('product_time');
                $property->producttime = $carbon_date->addHours($user_hour);   //*****
                //////////////////////////////////
                $property->save();          //*****
                return redirect('/property')->with('message', 'data inserted correcr'); //***
            }
        }
        return view('Basic_pages.formproperties');
    }

    public function editafterreject_vichles(Request $request){
        $id = $request->input('id');
        $ownerid = $request->input('ownerID');
        if ($request->isMethod('post')){
            if ($request->hasFile('image')) {
                $vichle = Auth_vichle::where(     //***********
                    [
                        ['id','=',$id],
                        ['ownerID','=',$ownerid]
                    ]
                )->first();
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('productimages'), $imageName);
                $image = $vichle->image = $imageName;        //******
                // get from text field from enter blade must put it first

                $created_at = $vichle->created_at;    //******
                $carbon_date = Carbon::parse($created_at);
                $user_hour = (int)$request->input('product_time');
                $vichle->producttime = $carbon_date->addHours($user_hour);   //*****
                //////////////////////////////////
                $vichle->save();          //*****
                return redirect('/vichle')->with('message', 'data inserted correcr'); //***
            }
        }
        return view('Basic_pages.formvichles');
    }
    public function Cansel($id , Request $request){
        $amin = User::find($id);
        $amin->pactage_type =" ";
        $amin->update();
        $request->session()->forget('pactage_type');
        return back();
    }

}

