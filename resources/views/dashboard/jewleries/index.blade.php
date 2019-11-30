@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.jewleries')</h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li><i class="fa fa-dashboard"></i> @lang('site.jewleries')</li>
                <li  class="active"><i class="fa fa-dashboard"></i> @lang('site.jewleries')</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.jewleries')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a href="{{route('dashboard.jewleries.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr class="tr_header">
                                    <th>@lang('site.id')</th>
                                    <th>@lang('site.type')</th>
                                    <th>@lang('site.material')</th>
                                    <th>@lang('site.gender')</th>
                                    <th>@lang('site.weight')</th>
                                    <th>@lang('site.price')</th>
                                    <th>@lang('site.ownerID')</th>
                                    <th>@lang('site.new')</th>
                                    <th>@lang('site.Auction_type')</th>
                                    <th>@lang('site.location')</th>
                                    <th>@lang('site.Guarant')</th>
                                    <th>@lang('site.status')</th>
                                    <th>@lang('site.image')</th>
                                </tr>
                                </thead>
                                @foreach($jewl as $jewlery)
                                    <tbody>
                                    <tr>
                                        <td>{{$jewlery->id}} </td>
                                        <td>{{$jewlery->type}}</td>
                                        <td>{{$jewlery->material}}</td>
                                        <td>{{$jewlery->gender}}</td>
                                        <td>{{$jewlery->weight}}</td>
                                        <td>{{$jewlery->price}} </td>
                                        <td>{{$jewlery->ownerID}}</td>
                                        <td>{{$jewlery->new}}</td>
                                        <td>{{$jewlery->Auction_type}}</td>
                                        <td>{{$jewlery->location}} </td>
                                        <td>{{$jewlery->Guarant}}</td>
                                        <td><img src="/productimages/{{$jewlery->image}}" alt="error"></td>
                                        <td>{{$jewlery->status}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.jewleries.edit',['id'=> $jewlery->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.jewleries.destroy',[$jewlery->id])}}" method="post" style="display: inline-block">
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
                                @if (count($jewleries))
                                    {{$jewleries->links()}}
                                @endif

                            </div>
                        </div>
                    </div>
                </div><!-- end of row -->
            </div>
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection
