@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">

            <h1>@lang('site.card payment')</h1>

            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.card payment')</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('site.card payment')</h3>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('site.ownerID')</th>
                                    <th>@lang('site.paymentBrand')</th>
                                    <th>@lang('site.number')</th>
                                    <th>@lang('site.expiry')</th>
                                    <th>@lang('site.holder')</th>
                                    <th>@lang('site.cvv')</th>
                                    <th>@lang('site.price')</th>
                                </tr>
                                </thead>
                                @foreach($card as $change)
                                    <tbody>
                                    <tr>
                                        <td>{{$change->ownerID}}</td>
                                        <td>{{$change->paymentBrand}}</td>
                                        <td>{{$change->number}}</td>
                                        <td>{{$change->expiry}}</td>
                                        <td>{{$change->holder}}</td>
                                        <td>{{$change->cvv}}</td>
                                        <td>{{$change->price}}</td>
                                        <td>
                                            <form action="{{route('dashboard.card_payment.destroy',[$change->id])}}" method="post" style="display: inline-block">
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


