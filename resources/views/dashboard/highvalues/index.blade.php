@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.highvalues')</h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li><i class="fa fa-dashboard"></i> @lang('site.highvalues')</li>
                <li  class="active"><i class="fa fa-dashboard"></i> @lang('site.highvalues')</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.highvalues')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a href="{{route('dashboard.highvalues.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr class="tr_header">
                                    <th>@lang('site.id')</th>
                                    <th>@lang('site.type')</th>
                                    <th>@lang('site.name')</th>
                                    <th>@lang('site.price')</th>
                                    <th>@lang('site.new')</th>
                                    <th>@lang('site.ownerID')</th>
                                    <th>@lang('site.Auction_type')</th>
                                    <th>@lang('site.location')</th>
                                    <th>@lang('site.Guarant')</th>
                                    <th>@lang('site.image')</th>
                                    <th>@lang('site.status')</th>
                                </tr>
                                </thead>
                                @foreach($highvalue as $high)
                                    <tbody>
                                    <tr>
                                        <td>{{$high->id}} </td>
                                        <td>{{$high->type}}</td>
                                        <td>{{$high->name}}</td>
                                        <td>{{$high->price}} </td>
                                        <td>{{$high->new}}</td>
                                        <td>{{$high->ownerID}}</td>
                                        <td>{{$high->Auction_type}}</td>
                                        <td>{{$high->location}} </td>
                                        <td>{{$high->Guarant}}</td>
                                        <td><img src="/productimages/{{$high->image}}" alt="error"></td>
                                        <td>{{$high->status}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.highvalues.edit',['id'=> $high->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.highvalues.destroy',[$high->id])}}" method="post" style="display: inline-block">
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
                                @if (count($highvalue))
                                    {{$highvalue->links()}}
                                @endif

                            </div>
                        </div>
                    </div>
                </div><!-- end of row -->
            </div>
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection

