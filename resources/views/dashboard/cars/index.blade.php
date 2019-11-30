@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.cars')</h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li><i class="fa fa-dashboard"></i> @lang('site.cars')</li>
                <li  class="active"><i class="fa fa-dashboard"></i> @lang('site.cars')</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.cars')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a href="{{route('dashboard.cars.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                                   width="100%">
                            <thead>
                                <tr class="tr_header">
                                    <th>@lang('site.id')</th>
                                    <th>@lang('site.type')</th>
                                    <th>@lang('site.vendor')</th>
                                    <th>@lang('site.location')</th>
                                    <th>@lang('site.price')</th>
                                    <th>@lang('site.color')</th>
                                    <th>@lang('site.year')</th>
                                    <th>@lang('site.new')</th>
                                    <th>@lang('site.status')</th>
                                    <th>@lang('site.Auction_type')</th>
                                    <th>@lang('site.Guarant')</th>
                                    <th>@lang('site.image')</th>
                                    <th>@lang('site.ownerID')</th>
                                    <th>@lang('site.viewers')</th>
                                    <th>@lang('site.producttime')</th>
                                </tr>
                                </thead>
                                @foreach($cars as $car)
                                    <tbody>
                                    <tr>
                                        <td>{{$car->id}} </td>
                                        <td>{{$car->type}}</td>
                                        <td>{{$car->vendor}}</td>
                                        <td>{{$car->location}}</td>
                                        <td>{{$car->price}}</td>
                                        <td>{{$car->color}} </td>
                                        <td>{{$car->year}}</td>
                                        <td>{{$car->new}}</td>
                                        <td>{{$car->status}}</td>
                                        <td>{{$car->Auction_type}} </td>
                                        <td>{{$car->Guarant}}</td>
                                        <td><img src="/productimages/{{$car->image}}" alt="error"></td>
                                        <td>{{$car->ownerID}}</td>
                                        <td>{{$car->viewers}}</td>
                                        <td>{{$car->producttime}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.cars.edit',['id'=> $car->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.cars.destroy',[$car->id])}}" method="post" style="display: inline-block">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete">
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center pt-4">
                                @if (count($cars))
                                    {{$cars->links()}}
                                @endif

                            </div>
                    </div>
                </div>
            </div><!-- end of row -->
            </div>
    </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection
