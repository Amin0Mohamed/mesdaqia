@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>@lang('site.chat')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.chat')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.chat')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.question')</th>
                                    <th>@lang('site.answer')</th>
                                </tr>
                                </thead>
                                @foreach($chat as $change)
                                    <tbody>
                                    <tr>
                                        <td>{{$change->question}}</td>
                                        <td>{{$change->answer}}</td>
                                        <td>
                                            <form action="{{route('dashboard.chats.destroy',[$change->id])}}" method="post" style="display: inline-block">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <input type="submit" value="@lang('site.delete')" class="btn btn-danger delete">
                                            </form>
                                        </td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.chats.edit',['id'=> $change->id])}}'" class="btn btn-info">@lang('site.answer')</button>
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



