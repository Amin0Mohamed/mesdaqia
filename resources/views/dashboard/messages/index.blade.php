@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.message')</h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.message')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.message')</h3>
                        <div class="box-body">
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr class="tr_header">
                                    <th>@lang('site.id')</th>
                                    <th>@lang('site.ownerID')</th>
                                    <th>@lang('site.content')</th>
                                    <th>@lang('site.email')</th>
                                </tr>
                                </thead>
                                @foreach($messages as $message)
                                    <tbody>
                                    <tr>
                                        <td>{{$message->id}} </td>
                                        <td>{{$message->ownerID}}</td>
                                        <td>{{$message->content}}</td>
                                        <td>{{$message->email}}</td>
                                        <td>
                                                <a href="{{route('dashboard.messages.create',['ownerID'=>$message->ownerID,'email'=>$message->email])}}" class="btn btn-info">@lang('site.reply')</a>
                                                <form action="{{route('dashboard.messages.destroy',[$message->id])}}" method="post" style="display: inline-block">
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
                                    @if (count($messages))
                                        {{$messages->links()}}
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
