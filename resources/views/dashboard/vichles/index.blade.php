@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.vichles')</h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li><i class="fa fa-dashboard"></i> @lang('site.users')</li>
                <li  class="active"><i class="fa fa-dashboard"></i> @lang('site.vichles')</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.vichles')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a href="{{route('dashboard.vichles.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                                   width="100%">
                            <thead>
                                <tr class="tr_header">
                                    <th>@lang('site.id')</th>
                                    <th>@lang('site.type')</th>
                                    <th>@lang('site.vendor')</th>
                                    <th>@lang('site.color')</th>
                                    <th>@lang('site.year')</th>
                                    <th>@lang('site.new')</th>
                                     <th>@lang('site.ownerID')</th>
                                    <th>@lang('site.price')</th>
                                    <th>@lang('site.Auction_type')</th>
                                    <th>@lang('site.location')</th>
                                    <th>@lang('site.Guarant')</th>
                                    <th>@lang('site.viewers')</th>
                                    <th>@lang('site.image')</th>
                                    <th>@lang('site.status')</th>
                                    <th>@lang('site.producttime')</th>
                                </tr>
                                </thead>
                                @foreach($vichles as $vichle)
                                    <tbody>
                                    <tr>
                                        <td>{{$vichle->id}} </td>
                                        <td>{{$vichle->type}}</td>
                                        <td>{{$vichle->vendor}}</td>
                                        <td>{{$vichle->color}} </td>
                                        <td>{{$vichle->year}}</td>
                                        <td>{{$vichle->new}}</td>
                                        <td>{{$vichle->ownerID}}</td>

                                        <td>{{$vichle->price}}</td>
                                        <td>{{$vichle->Auction_type}} </td>
                                        <td>{{$vichle->location}}</td>
                                        <td>{{$vichle->Guarant}}</td>
                                        <td>{{$vichle->viewers}}</td>
                                        <td><img  src="/productimages/{{$vichle->image}}" alt="error"></td>
                                        <td>{{$vichle->status}}</td>
                                        <td>{{$vichle->producttime}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.vichles.edit',['id'=> $vichle->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.vichles.destroy',[$vichle->id])}}" method="post" style="display: inline-block">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger">
                                             </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center pt-4">
                                @if (count($vichles))
                                    {{$vichles->links()}}
                                @endif

                            </div>
                    </div>
                </div>
            </div><!-- end of row -->
            </div>
    </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection
