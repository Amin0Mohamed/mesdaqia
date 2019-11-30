@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">

            <h1>@lang('site.Discount_fines_dues')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.Discount_fines_dues')</li>
            </ol>
        </section>
        <section class="content">
{{--  ****************************************************--}}
            @if($car_wait_count <=0 && $jew_wait_count<=0 && $high_wait_count<=0 && $vichle_wait_count<=0 && $property_wait_count<=0)
                <section>
                    <div class="container" style="width:998px">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="p-3 mb-5 text-center text-capitalize" style="margin-bottom: 40px;">@lang('site.dash_head1')</h1>
                                <p class="lead">@lang('site.dash_body1')</p>
                                <img class="img-fluid img-thumbnail" src="/img/sorry.png" alt="fgg" width="90%" height="50%">
                            </div>
                        </div>
                    </div>
                </section>
            @endif
{{--***********************************************--}}
            {{--    cars       --}}
             @if($car_wait_count > 0)
                 <div class="row">
                    <h1>@lang('site.car_Discount_fines_dues')</h1>
                    <table class="table table-striped table-bordered table-sm" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr class="tr_header">
                            <th>@lang('site.id')</th>
                            <th>@lang('site.payid')</th>
                            <th>@lang('site.ownerID')</th>
                            <th>@lang('site.type')</th>
                            <th>@lang('site.Accept_seller')</th>
                            <th>@lang('site.Accept_buyer')</th>
                            <th>@lang('site.Complaint_buyer')</th>
                            <th>@lang('site.image')</th>
                            <th>@lang('site.price')</th>
                        </tr>
                        </thead>
                        @foreach($car_wait as $car)
                            <tbody>
                            <tr>
                                <td>{{$car->id}}</td>
                                <td>{{$car->payid}}</td>
                                <td>{{$car->ownerID}}</td>
                                <td>{{$car->type}}</td>
                                <td>{{$car->Accept_seller}}</td>
                                <td>{{$car->Accept_buyer}}</td>
                                <td>{{$car->Complaint_buyer}}</td>
                                <td><img  src="/productimages/{{$car->image}}" width="100px" height="100px" alt="error"></td>
                                <td>{{$car->price}}</td>

                                <td class="d-flex justify-content-between">
                                    <button  onclick="window.location='{{url('dashboard/Dues',
                                    [
                                    'id'=>$car->id,
                                    'payid'=>$car->payid,
                                    'ownerID'=>$car->ownerID,
                                    'Accept_seller'=>$car->Accept_seller,
                                    'Accept_buyer'=>$car->Accept_buyer,
                                    'price'=>$car->price
                                    ]
                                    )}}'" class="btn btn-info d-none">@lang('site.Discount_Dues')</button>
                                    <button onclick="window.location='{{url('dashboard/fines_AfterResone',
                                    [
                                    'id'=>$car->id,
                                    'payid'=>$car->payid,
                                    'ownerID'=>$car->ownerID,
                                    'price'=>$car->price
                                    ]
                                    )}}'" class="btn btn-info d-none">@lang('site.Discount_fines_AfterResone')</button>
                                    <button onclick="window.location='{{url('dashboard/NotTakefines',
                                    [
                                    'id'=>$car->id,
                                    'payid'=>$car->payid,
                                    'ownerID'=>$car->ownerID,
                                    ]
                                    )}}'" class="btn btn-info d-none">@lang('site.Discount_NotTakefines')</button>
                                    <form action="{{url('/dashboard/deletecategory',['id'=>$car->id,'category'=>'car'])}}" method="get" style="display: inline-block">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete d-none" style="margin-top: -3px">
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center pt-4">
                            @if (count($car_wait))
                                {{$car_wait->links()}}
                            @endif
                        </div>
                    </div>
                </div><!--end of row-->
             @endif
            {{--    jewelry       --}}
            @if($jew_wait_count > 0)
               <div class="row">
                <h1>@lang('site.jew_Discount_fines_dues')</h1>
                <table class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr class="tr_header">
                        <th>@lang('site.id')</th>
                        <th>@lang('site.payid')</th>
                        <th>@lang('site.ownerID')</th>
                        <th>@lang('site.type')</th>
                        <th>@lang('site.Accept_seller')</th>
                        <th>@lang('site.Accept_buyer')</th>
                        <th>@lang('site.Complaint_buyer')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.price')</th>
                    </tr>
                    </thead>
                    @foreach($jew_wait as $jew)
                        <tbody>
                        <tr>
                            <td>{{$jew->id}}</td>
                            <td>{{$jew->payid}}</td>
                            <td>{{$jew->ownerID}}</td>
                            <td>{{$jew->type}}</td>
                            <td>{{$jew->Accept_seller}}</td>
                            <td>{{$jew->Accept_buyer}}</td>
                            <td>{{$jew->Complaint_buyer}}</td>
                            <td><img  src="/productimages/{{$jew->image}}" width="100px" height="100px" alt="error"></td>
                            <td>{{$jew->price}}</td>

                            <td class="d-flex justify-content-between">
                                <button onclick="window.location='{{url('dashboard/Dues',
                                [
                                'id'=>$jew->id,
                                'payid'=>$jew->payid,
                                'ownerID'=>$jew->ownerID,
                                'Accept_seller'=>$jew->Accept_seller,
                                'Accept_buyer'=>$jew->Accept_buyer,
                                'price'=>$jew->price
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_Dues')</button>
                                <button onclick="window.location='{{url('dashboard/fines_AfterResone',
                                [
                                'id'=>$jew->id,
                                'payid'=>$jew->payid,
                                'ownerID'=>$jew->ownerID,
                                'price'=>$jew->price
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_fines_AfterResone')</button>
                                <button onclick="window.location='{{url('dashboard/NotTakefines',
                                [
                                'id'=>$jew->id,
                                'payid'=>$jew->payid,
                                'ownerID'=>$jew->ownerID,
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_NotTakefines')</button>
                                <form action="{{url('/dashboard/deletecategory',['id'=>$jew->id,
                                 'category'=>'jewelry'])}}" method="get" style="display: inline-block">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete" style="margin-top: -3px">
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-4">
                        @if (count($jew_wait))
                            {{$jew_wait->links()}}
                        @endif
                    </div>
                </div>
            </div>
            @endif
            {{--    hightValue      --}}
            @if($high_wait_count > 0)
               <div class="row">
                <h1>@lang('site.high_Discount_fines_dues')</h1>
                <table class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr class="tr_header">
                        <th>@lang('site.id')</th>
                        <th>@lang('site.payid')</th>
                        <th>@lang('site.ownerID')</th>
                        <th>@lang('site.type')</th>
                        <th>@lang('site.Accept_seller')</th>
                        <th>@lang('site.Accept_buyer')</th>
                        <th>@lang('site.Complaint_buyer')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.price')</th>
                    </tr>
                    </thead>
                    @foreach($high_wait as $high)
                        <tbody>
                        <tr>
                            <td>{{$high->id}}</td>
                            <td>{{$high->payid}}</td>
                            <td>{{$high->ownerID}}</td>
                            <td>{{$high->type}}</td>
                            <td>{{$high->Accept_seller}}</td>
                            <td>{{$high->Accept_buyer}}</td>
                            <td>{{$high->Complaint_buyer}}</td>
                            <td><img  src="/productimages/{{$high->image}}" width="100px" height="100px" alt="error"></td>
                            <td>{{$high->price}}</td>

                            <td class="d-flex justify-content-between">
                                <button onclick="window.location='{{url('dashboard/Dues',
                                [
                                'id'=>$high->id,
                                'payid'=>$high->payid,
                                'ownerID'=>$high->ownerID,
                                'Accept_seller'=>$high->Accept_seller,
                                'Accept_buyer'=>$high->Accept_buyer,
                                'price'=>$high->price
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_Dues')</button>
                                <button onclick="window.location='{{url('dashboard/fines_AfterResone',
                                [
                                'id'=>$high->id,
                                'payid'=>$high->payid,
                                'ownerID'=>$high->ownerID,
                                'price'=>$high->price
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_fines_AfterResone')</button>
                                <button onclick="window.location='{{url('dashboard/NotTakefines',
                                [
                                'id'=>$high->id,
                                'payid'=>$high->payid,
                                'ownerID'=>$high->ownerID,
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_NotTakefines')</button>
                                <form action="{{url('/dashboard/deletecategory',['id'=>$high->id,'category'=>'highvalue'])}}"style="display: inline-block" method="get">
                                    {{method_field('delete')}}
                                    <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete d-none" style="margin-top: -3px">
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-4">
                        @if (count($high_wait))
                            {{$high_wait->links()}}
                        @endif
                    </div>
                </div>
            </div>
            @endif
            {{--    vichle     --}}
            @if($vichle_wait_count > 0)
               <div class="row">
                <h1>@lang('site.vichle_Discount_fines_dues')</h1>
                <table  class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr class="tr_header">
                        <th>@lang('site.id')</th>
                        <th>@lang('site.payid')</th>
                        <th>@lang('site.ownerID')</th>
                        <th>@lang('site.type')</th>
                        <th>@lang('site.Accept_seller')</th>
                        <th>@lang('site.Accept_buyer')</th>
                        <th>@lang('site.Complaint_buyer')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.price')</th>
                    </tr>
                    </thead>
                    @foreach($vichle_wait as $vichle)
                        <tbody>
                        <tr>
                            <td>{{$vichle->id}}</td>
                            <td>{{$vichle->payid}}</td>
                            <td>{{$vichle->ownerID}}</td>
                            <td>{{$vichle->type}}</td>
                            <td>{{$vichle->Accept_seller}}</td>
                            <td>{{$vichle->Accept_buyer}}</td>
                            <td>{{$vichle->Complaint_buyer}}</td>
                            <td><img  src="/productimages/{{$vichle->image}}" width="100px" height="100px" alt="error"></td>
                            <td>{{$vichle->price}}</td>

                            <td class="d-flex justify-content-between">
                                <button onclick="window.location='{{url('dashboard/Dues',
                                [
                                'id'=>$vichle->id,
                                'payid'=>$vichle->payid,
                                'ownerID'=>$vichle->ownerID,
                                'Accept_seller'=>$vichle->Accept_seller,
                                'Accept_buyer'=>$vichle->Accept_buyer,
                                'price'=>$vichle->price
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_Dues')</button>
                                <button onclick="window.location='{{url('dashboard/fines_AfterResone',
                                [
                                'id'=>$vichle->id,
                                'payid'=>$vichle->payid,
                                'ownerID'=>$vichle->ownerID,
                                'price'=>$vichle->price
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_fines_AfterResone')</button>
                                <button onclick="window.location='{{url('dashboard/NotTakefines',
                                [
                                'id'=>$vichle->id,
                                'payid'=>$vichle->payid,
                                'ownerID'=>$vichle->ownerID,
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_NotTakefines')</button>
                                <form action="{{url('/dashboard/deletecategory',['id'=>$vichle->id,'category'=>'vechile'])}}" method="post" style="display: inline-block" method="get">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete d-none" style="margin-top: -30px">
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-4">
                        @if (count($vichle_wait))
                            {{$vichle_wait->links()}}
                        @endif
                    </div>
                </div>
            </div>
            @endif
            {{--    property    --}}
             @if($property_wait_count > 0)
              <div class="row"x>
                <h1>@lang('site.property_Discount_fines_dues')</h1>
                <table  class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr class="tr_header">
                        <th>@lang('site.id')</th>
                        <th>@lang('site.payid')</th>
                        <th>@lang('site.ownerID')</th>
                        <th>@lang('site.type')</th>
                        <th>@lang('site.Accept_seller')</th>
                        <th>@lang('site.Accept_buyer')</th>
                        <th>@lang('site.Complaint_buyer')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.price')</th>
                    </tr>
                    </thead>
                    @foreach($property_wait as $property)
                        <tbody>
                        <tr>
                            <td>{{$property->id}}</td>
                            <td>{{$property->payid}}</td>
                            <td>{{$property->ownerID}}</td>
                            <td>{{$property->type}}</td>
                            <td>{{$property->Accept_seller}}</td>
                            <td>{{$property->Accept_buyer}}</td>
                            <td>{{$property->Complaint_buyer}}</td>
                            <td><img  src="/productimages/{{$property->image}}" width="100px" height="100px" alt="error"></td>
                            <td>{{$property->price}}</td>

                            <td class="d-flex justify-content-between">
                                <button onclick="window.location='{{url('dashboard/Dues',
                                [
                                'id'=>$property->id,
                                'payid'=>$property->payid,
                                'ownerID'=>$property->ownerID,
                                'Accept_seller'=>$property->Accept_seller,
                                'Accept_buyer'=>$property->Accept_buyer,
                                'price'=>$property->price
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_Dues')</button>
                                <button onclick="window.location='{{url('dashboard/fines_AfterResone',
                                [
                                'id'=>$property->id,
                                'payid'=>$property->payid,
                                'ownerID'=>$property->ownerID,
                                'price'=>$property->price
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_fines_AfterResone')</button>
                                <button onclick="window.location='{{url('dashboard/NotTakefines',
                                [
                                'id'=>$property->id,
                                'payid'=>$property->payid,
                                'ownerID'=>$property->ownerID,
                                ]
                                )}}'" class="btn btn-info d-none">@lang('site.Discount_NotTakefines')</button>
                                <form action="{{url('/dashboard/deletecategory',['id'=>$property->id,
                                'category'=>'property'
                                ])}}" method="get" style="display: inline-block">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete d-none" style="margin-top: -30px" >
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center pt-4">
                        @if (count($property_wait))
                            {{$property_wait->links()}}
                        @endif
                    </div>
                </div>
            </div>
            @endif
        </section>
    </div><!-- end of content wrapper -->

@endsection
