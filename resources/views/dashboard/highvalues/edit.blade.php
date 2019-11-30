


@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.highvalues')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.highvalues.index') }}"> @lang('site.highvalues')</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.edit')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.highvalues.update', [$highValue->id]) }}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="input-group mb-3">
                            <input type="text" name="type" value="{{ $highValue->type}}" class="form-control" placeholder="ادخل اسـم و نـوع ">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="name" value="{{ $highValue->name}}" class="form-control" placeholder="الاسم">
                        </div>

                        <div class="input-group mb-3">
                            <input type="number" name="price" value="{{ $highValue->price}}" class="form-control" placeholder="ادخل السعـر ">
                        </div>
                        <div class="input-group mb-3">
                            <select name="new" value="{{ $highValue->new}}" id="status_jewlery">
                                <option value="">حـالة المجوهرات</option>
                                <option value="جديدة">جديدة</option>
                                <option value="مستعملـة">مستعملـة</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="hidden" value="{{ $highValue->ownerID}}" name="ownerID">
                        </div>

                        <div class="input-group mb-3">
                            <select name="Auction_type" value="{{ $highValue->Auction_type}}" id="mazad_fawery_high" onchange="dispaly_time_high()">
                                <option value="">إضـافة إلـي</option>
                                <option value="مزاد فورى">مزاد فورى</option>
                                <option value="مزاد مسعر">مزاد مسعر</option>
                                <option value="مزاد مفتوح">مزاد مفتوح</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" id="period_product_high">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                            </div>
                            <select name="product_time">
                                <option value="0" >إضـافة إلـي</option>
                                <option value="2">2</option>
                                <option value="6">6</option>
                                <option value="12">12</option>
                                <option value="24">24</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="location" value="{{ $highValue->location}}" class="form-control" placeholder="الموقع">
                        </div>
                        <div class="input-group mb-3">
                            <select name="Guarant" value="{{ $highValue->Guarant}}">
                                <option value="">الضمـان</option>
                                <option value="1">بضمـان</option>
                                <option value="0">بـدون  ضمـان</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block" >@lang('site.image')</label>
                            <input style="display: inline" type="file" name="image" id="c_img" value="{{ $highValue->image }}" />
                            <img style="display: inline" width="100px" height="100px"  src="/productimages/{{$highValue->image}}" alt="error">
                        </div>
                        <div class="input-group mb-3">
                            <select name="status" value="{{ $highValue->status}}" >
                                <option value="">وضـع المركبة الحالي</option>
                                <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                <option value="جديده">جديده</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

