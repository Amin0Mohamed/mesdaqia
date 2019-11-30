@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.support')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.support')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.support')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr class="tr_header">
                                    <th>@lang('site.id')</th>
                                    <th>@lang('site.ownerID')</th>
                                    <th>@lang('site.content')</th>
                                </tr>
                                </thead>
                                @foreach($supports as $support)
                                    <tbody>
                                    <tr>
                                        <td>{{$support->id}} </td>
                                        <td>{{$support->ownerID}}</td>
                                        <td>{{$support->content}}</td>
                                        <td>
                                            <a href="{{route('dashboard.supports.create',['ownerID'=>$support->ownerID,'email'=>$support->email])}}" class="btn btn-info">@lang('site.reply')</a>
                                            <form action="{{route('dashboard.supports.destroy',[$support->id])}}" method="post" style="display: inline-block">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete">
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center pt-4">
                                    @if (count($supports))
                                        {{$supports->links()}}
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->

        </section>
    </div>
@endsection
