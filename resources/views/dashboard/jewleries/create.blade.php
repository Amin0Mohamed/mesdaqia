@extends('layouts.dashboard.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.jewleries')</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.jewleries.index') }}"> @lang('site.jewleries')</a></li>
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
                    <form action="{{ route('dashboard.jewleries.store') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.name')</label>
                            <input type="text" name="type" value="{{ old('type') }}" class="form-control" placeholder="ادخل اسـم و نـوع المجوهرات">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.material')</label>
                            <input type="text" name="material" value="{{ old('material') }}" class="form-control" placeholder="المواد">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.gender')</label>
                            <input type="text" name="gender" value="{{ old('gender') }}" class="form-control" placeholder="ادخل نوعم المجوهرات : ex : ماس ، دهب ، فضة">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.weight')</label>
                            <input type="number" name="weight" value="{{ old('weight') }}" class="form-control" placeholder="ادخل حجم المجوهرات ">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.price')</label>
                            <input type="number" name="price" value="{{ old('price') }}" class="form-control" placeholder="ادخل سعـر المجوهرات">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.ownerID')</label>
                          <input type="hidden" value="{{ old('ownerID') }}" name="ownerID">
                        </div>

                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.new')</label>
                            <select name="new" value="{{ old('new') }}" id="status_jewlery">
                                <option value="">حـالة المجوهرات</option>
                                <option value="جديدة">جديدة</option>
                                <option value="مستعملـة">مستعملـة</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.Auction_type')</label>
                            <select name="Auction_type" value="{{old('Auction_type')  }}"  id="mazad_fawery_jew" onchange="dispaly_time_jew()">
                                <option value="">إضـافة إلـي</option>
                                <option value="مزاد فورى">مزاد فورى</option>
                                <option value="مزاد مسعر">مزاد مسعر</option>
                                <option value="مزاد مفتوح">مزاد مفتوح</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" id="period_product_jew">
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
                            <label style="display: block">@lang('site.location')</label>
                            <input type="text" name="location" value="{{ old('location') }}" class="form-control" placeholder="الموقع">
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.Guarant')</label>
                            <select name="Guarant" value="{{ old('Guarant') }}">
                                <option value="">الضمـان</option>
                                <option value="1">بضمـان</option>
                                <option value="0">بـدون  ضمـان</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.status')</label>
                            <select name="status" value="{{ old('status') }}" >
                                <option value="">وضـع المركبة الحالي</option>
                                <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                                <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                                <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                                <option value="جديده">جديده</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label style="display: block">@lang('site.image')</label>
                            <input type="file" name="image" value="{{ old('image') }}" id="c_img">
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
