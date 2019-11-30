

@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.properties')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ url('/homepage') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.properties.index') }}"> @lang('site.properties')</a></li>
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

                    <form action="{{ route('dashboard.properties.update', [$properties->id]) }}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                            <div class="form-group">
                                <label>@lang('site.name')</label>
                                <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع العقار" value="{{ $properties->type }}" >
                            </div>
                            <div class="form-group">
                                <label>@lang('site.area')</label>
                                <input type="text" name="area" class="form-control" value="{{ $properties->area }}" placeholder="ادخل منطقه العقار">
                            </div>
                            <div class="form-group">
                                <label>@lang('site.street')</label>
                                <input type="text" name="street" class="form-control" value="{{ $properties->street }}" placeholder="ادخل  الشارع ">
                            </div>
                            <div class="form-group">
                                <label>@lang('site.city')</label>
                                <input type="number" name="city" class="form-control" value="{{ $properties->city }}" placeholder="ادخل مدينه العقار">
                            </div>
                            <div class="form-group">
                                <label>@lang('site.rental')</label>
                                <input type="text" name="rental" class="form-control" value="{{ $properties->rental }}" placeholder="ادخل تاجير العقار">
                            </div>
                            <div class="form-group">
                                <label>@lang('site.floors')</label>
                                <input type="number" name="floors" class="form-control" value="{{ $properties->floors }}" placeholder="ادخل عدد الطوابق">
                            </div>
                            <div class="form-group">
                                <label>@lang('site.furnished')</label>
                                <input type="number" name="furnished" class="form-control" value="{{ $properties->furnished }}" placeholder="الاثاث">
                            </div>
                            <div class="form-group">
                                <label>@lang('site.price')</label>
                                <input type="number" name="price" class="form-control" value="{{ $properties->price }}" placeholder="السعر">
                            </div>
                            <div class="form-group">
                                <label>@lang('site.rooms')</label>
                                <input type="number" name="rooms" class="form-control" value="{{ $properties->rooms }}" placeholder="عدد الغرف">
                            </div>
                            <div class="form-group">
                                <label>@lang('site.SizeInMeter')</label>
                                <input type="number" name="SizeInMeter" class="form-control" value="{{ $properties->SizeInMeter }}" placeholder="الحجم بالمتر">
                            </div>
                            <div class="form-group">
                                <label>@lang('site.location')</label>
                                <input type="number" name="location" class="form-control" value="{{ $properties->location }}" placeholder="المكان">





                        <div class="form-group">
                            <label style="display: block">@lang('site.new')</label>
                            <select name="new" id="status_property">
                                <option value="">حـالة العقار</option>
                                <option value="{{ $properties->new }}">جديدة</option>
                                <option value="{{ $properties->new }}">مستعملـة</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="display: block">@lang('site.status')</label>
                            <select name="status">
                                <option value="">وضـع العقار الحالي</option>
                                <option value="{{ $properties->status}}" >مستعملة أقرب للجديدة</option>
                                <option value="{{ $properties->status}}" >مستعملة متضررة قابلة لإلصالح</option>
                                <option value="{{ $properties->status}}" >متضرر غيرقابلة للاصلاح</option>
                                <option value="{{ $properties->status}}" >جديده</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="display: block">@lang('site.Auction_type')</label>
                            <select name="Auction_type"  id="mazad_fawery_property"  onchange="dispaly_time_pro()">
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
                            <label style="display: block">@lang('site.Guarant')</label>
                            <select name="Guarant">
                                <option value="">الضمان</option>
                                <option  value="{{ $properties->Guarant }} ">بضمـان</option>
                                <option  value="{{ $properties->Guarant }} ">بـدون  ضمـان</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="display: block" >@lang('site.image')</label>
                            <input style="display: inline" type="file" name="image" id="c_img" value="{{ $properties->image }}" />
                            <img style="display: inline" width="100px" height="100px"  src="/productimages/{{$properties->image}}" alt="error">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="ownerID" value="{{ $properties->ownerID }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>
                            </div>
                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection










