@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.vichles')</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.users.index') }}"> @lang('site.vichles')</a></li>
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
                    <form action="{{ route('dashboard.vichles.store') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع المركبه" value="{{ old('type') }}" >
                        </div>
                        <div class="form-group">
                            <label>@lang('site.vendor')</label>
                            <input type="text" name="vendor" class="form-control" value="{{ old('vendor') }}" placeholder="ادخل اسـم البائع">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.location')</label>
                            <input type="text" name="location" class="form-control" value="{{ old('location') }}" placeholder="ادخل  المكـان ">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.price')</label>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}" placeholder="ادخل سعـر المركبه">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.color')</label>
                            <input type="text" name="color" class="form-control" value="{{ old('color') }}" placeholder="ادخل لون المركبه">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.year')</label>
                            <input type="number" name="year" class="form-control" value="{{ old('year') }}" placeholder="ادخل موديل سنة المركبه">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.new')</label>
                            <select name="new" id="status_vichle" value="{{ old('new') }}">
                                <option value="">حـالة المركبه</option>
                                <option value="جديدة">جديدة</option>
                                <option value="مستعملـة">مستعملـة</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang('site.status')</label>
                            <select name="status" value="{{ old('status') }}" >
                                <option value="">وضـع المركبه الحالي</option>
                                <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                <option value="جديده">جديده</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="display: block">@lang('site.Auction_type')</label>
                            <select name="Auction_type" value="{{ old('Auction_type')  }}" id="mazad_fawery_vichle" onchange="dispaly_time_vic()" >
                                <option value="">إضـافة إلـي</option>
                                <option value="مزاد فورى">مزاد فورى</option>
                                <option value="مزاد مسعر">مزاد مسعر</option>
                                <option value="مزاد مفتوح">مزاد مفتوح</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" id="period_product_vic">
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
                          <input type="hidden" name="ownerID" value="{{ old('ownerID') }}">
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
