@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>@lang('site.ADDTExtImag')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.ADDTExtImag')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.ADDTExtImag')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="text-center">
                                <a href="{{route('dashboard.addtextimage.create')}}" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> @lang('site.add')</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.image')</th>
                                    <th>@lang('site.content')</th>
                                </tr>
                                </thead>
                                @foreach($add_ImageAndTexts as $change)
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img style="display: inline" width="50px" height="50px"  src="/productimages/{{$change->image}}" alt="error">
                                        </td>
                                        <td>{{$change->content}}</td>
                                        <td>
                                            <button onclick="window.location='{{route('dashboard.addtextimage.edit',['id'=> $change->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            <form action="{{route('dashboard.addtextimage.destroy',[$change->id])}}" method="post" style="display: inline-block">
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
