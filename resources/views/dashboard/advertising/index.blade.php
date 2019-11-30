@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>@lang('site.add_advertising')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.add_advertising')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.add_advertising')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a href="{{route('dashboard.advertising.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.image')</th>
                                    <th>@lang('site.title')</th>
                                    <th>@lang('site.content')</th>
                                    <th>@lang('site.url')</th>
                                </tr>
                                </thead>
                                @foreach($adver as $adv)
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img style="display: inline" width="50px" height="50px"  src="/productimages/{{$adv->image}}" alt="error">
                                        </td>
                                        <td>{{$adv->title}}</td>
                                        <td>{{$adv->content}}</td>
                                        <td>{{$adv->url}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.advertising.edit',['id'=> $adv->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.advertising.destroy',[$adv->id])}}" method="post" style="display: inline-block">
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
                    </div>
                </div>
            </div><!-- end of row -->

        </section>

    </div>
@endsection

