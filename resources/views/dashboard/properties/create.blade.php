@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.properties')</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.users.index') }}"> @lang('site.properties')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')
                    <form action="{{ route('dashboard.properties.store') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع العقار" value="{{ old('type') }}" >
                        </div>
                        <div class="form-group">
                            <label>@lang('site.area')</label>
                            <input type="text" name="area" class="form-control" value="{{ old('area') }}" placeholder="ادخل منطقه العقار">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.street')</label>
                            <input type="text" name="street" class="form-control" value="{{ old('street') }}" placeholder="ادخل  الشارع ">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.city')</label>
                            <input type="text" name="city" class="form-control" value="{{ old('city') }}" placeholder="ادخل مدينه العقار">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.rental')</label>
                            <input type="number" name="rental" class="form-control" value="{{ old('rental') }}" placeholder="ادخل تاجير العقار">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.floors')</label>
                            <input type="number" name="floors" class="form-control" value="{{ old('floors') }}" placeholder="ادخل عدد الطوابق">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.furnished')</label>
                            <input type="number" name="furnished" class="form-control" value="{{ old('furnished') }}" placeholder="الاثاث">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.price')</label>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}" placeholder="السعر">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.rooms')</label>
                            <input type="number" name="rooms" class="form-control" value="{{ old('rooms') }}" placeholder="عدد الغرف">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.SizeInMeter')</label>
                            <input type="number" name="SizeInMeter" class="form-control" value="{{ old('SizeInMeter') }}" placeholder="الحجم بالمتر">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.location')</label>
                            <input type="number" name="location" class="form-control" value="{{ old('location') }}" placeholder="المكان">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.new')</label>
                            <select name="new" id="status_property" value="{{ old('new') }}">
                                <option value="">حـالة العقار</option>
                                <option value="جديدة">جديدة</option>
                                <option value="مستعملـة">مستعملـة</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang('site.status')</label>
                            <select name="status" value="{{ old('status') }}" >
                                <option value="">وضـع العقار الحالي</option>
                                <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                <option value="جديده">جديده</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="display: block">@lang('site.Auction_type')</label>
                            <select name="Auction_type"  value="{{ old('Auction_type') }}" id="mazad_fawery_property"  onchange="dispaly_time_pro()">
                                <option value="">إضـافة إلـي</option>
                                <option value="{{ $properties->Auction_type }}">مزاد فورى</option>
                                <option value="{{ $properties->Auction_type }}">مزاد مسعر</option>
                                <option value="{{ $properties->Auction_type }}">مزاد مفتوح</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" id="period_product_pro" >
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
                        <div class="form-group">
                            <label>@lang('site.Guarant')</label>
                            <select name="Guarant" value="{{ old('Guarant') }} >
                                <option value="">الضمـان</option>
                                <option value="1">بضمـان</option>
                                <option value="0">بـدون  ضمـان</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image" id="c_img" value="{{ old('image') }}" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection
