@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.supervisors')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.supervisors')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.supervisors')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.supervisors')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a href="{{route('dashboard.supervisors.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.name')</th>
                                    <th>@lang('site.email')</th>
                                    <th>@lang('site.image')</th>
                                    <th>@lang('site.password')</th>
                                    <th>@lang('site.cpassword')</th>
                                    <th>@lang('site.auth')</th>
                                </tr>
                                </thead>
                                @foreach($super as $sup)
                                    <tbody>
                                    <tr>
                                        <td>{{$sup->name}} </td>
                                        <td>{{$sup->email}}</td>
                                        <td><img src="/productimages/{{$sup->image}}" alt="error" width="80px" height="80px"></td>
                                        <td>{{$sup->password}}</td>
                                        <td>{{$sup->c_password}}</td>
                                        <td>{{$sup->Authorize}}</td>

                                        <td>
                                            <button onclick="window.location='{{route('dashboard.supervisors.edit',['id'=> $sup->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.supervisors.destroy',[$sup->id])}}" method="post" style="display: inline-block">
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
