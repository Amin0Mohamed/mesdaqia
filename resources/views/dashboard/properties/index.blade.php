@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.properties')</h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li><i class="fa fa-dashboard"></i> @lang('site.properties')</li>
                <li  class="active"><i class="fa fa-dashboard"></i> @lang('site.properties')</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.properties')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a href="{{route('dashboard.properties.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                                   width="100%">
                            <thead>
                                <tr class="tr_header">
                                     <th>@lang('site.id')</th>
                                    <th>@lang('site.type')</th>
                                    <th>@lang('site.area')</th>
                                    <th>@lang('site.street')</th>
                                    <th>@lang('site.city')</th>
                                    <th>@lang('site.rental')</th>
                                     <th>@lang('site.new')</th>
                                    <th>@lang('site.status')</th>
                                    <th>@lang('site.Auction_type')</th>
                                    <th>@lang('site.floors')</th>
                                    <th>@lang('site.furnished')</th>
                                    <th>@lang('site.price')</th>
                                    <th>@lang('site.rooms')</th>
                                    <th>@lang('site.SizeInMeter')</th>
                                    <th>@lang('site.location')</th>
                                     <th>@lang('site.image')</th>
                                </tr>
                                </thead>
                                @foreach($properties as $property)
                                    <tbody>
                                    <tr>

                                        <td>{{$property->id}} </td>
                                        <td>{{$property->type}}</td>
                                        <td>{{$property->area}}</td>
                                        <td>{{$property->street}}</td>
                                        <td>{{$property->city}}</td>
                                        <td>{{$property->rental}} </td>
                                        <td>{{$property->new}}</td>
                                        <td>{{$property->status}}</td>
                                        <td>{{$property->Auction_type}} </td>
                                        <td>{{$property->floors}}</td>
                                        <td>{{$property->furnished}}</td>
                                        <td>{{$property->price}} </td>
                                        <td>{{$property->rooms}}</td>
                                        <td>{{$property->SizeInMeter}}</td>
                                        <td>{{$property->location}} </td>
                                        <td><img src="/productimages/{{$property->image}}" alt="error"></td>
                                        <td>
                                                <button onclick="window.location='{{route('dashboard.properties.edit',['id'=> $property->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                                <form action="{{route('dashboard.properties.destroy',[$property->id])}}" method="post" style="display: inline-block">
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
