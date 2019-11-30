@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>@lang('site.user payment')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.user payment')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.user payment')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.ownerID')</th>
                                    <th>@lang('site.name')</th>
                                    <th>@lang('site.surname')</th>
                                    <th>@lang('site.street')</th>
                                    <th>@lang('site.city')</th>
                                    <th>@lang('site.state')</th>
                                    <th>@lang('site.country')</th>
                                    <th>@lang('site.postcode')</th>
                                    <th>@lang('site.email')</th>
                                    <th>@lang('site.price')</th>
                                </tr>
                                </thead>
                                @foreach($user_card as $change)
                                    <tbody>
                                    <tr>
                                        <td>{{$change->ownerID}}</td>
                                        <td>{{$change->name}}</td>
                                        <td>{{$change->surname}}</td>
                                        <td>{{$change->street1}}</td>
                                        <td>{{$change->city}}</td>
                                        <td>{{$change->state}}</td>
                                        <td>{{$change->country}}</td>
                                        <td>{{$change->postcode}}</td>
                                        <td>{{$change->email}}</td>
                                        <td>{{$change->price}}</td>
                                        <td>
                                            <form action="{{route('dashboard.user_payment.destroy',[$change->id])}}" method="post" style="display: inline-block">
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

