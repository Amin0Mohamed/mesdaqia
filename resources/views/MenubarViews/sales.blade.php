@include('Headers.sales_header');
<body>
<section id="sales" class="sales">
    <div class="container">
        <div class="sr_items">
            <h3 class="text-center wow fadeInDown" data-wow-duration="2s">عـن مـاذا تـبـحـث !. <hr class="ln"/></h3>
            <div class="input-group">
                <select name="choose1" id="sel1" class="sel" data-wow-duration="2s">
                    <option value="1">مـاذا عن هذه!</option>
                    <option value="2">المركبات</option>
                    <option value="3">العقارات</option>
                    <option value="4">المجوهرات</option>
                    <option value="5">أخري ثمينة</option>
                    <option value="6">المزادات</option>
                    <option value="7">المزادات الفورية</option>
                </select>

                <input type="number" name="less" id="less" class="sel" placeholder="ادخل الحد الأدني ">
                <input type="number" name="less" id="hight" class="sel" placeholder="ادخل الحد الأعلي ">

                <span class="bt_sr wow fadeInLeft" data-wow-duration="2s"><a href="#"><i class="fa fa-search"></i></a> </span>
            </div>
        </div>
    </div>
</section>
<hr>
<!-- ----------------------------------------- -->
<section class="count">
    <div class="container">
        <div class="row">
            <div class="counter col-sm-6 col-md-3">
                <i class="fa fa-eye fa-2x wow rollIn" data-wow-duration="1.5s"></i>
                <h2 class="timer count-title count-number " data-to="{{$users}}" data-speed="1500"></h2>
                <p class="count-text ">زائـر</p>
            </div>

            <div class="counter col-sm-6 col-md-3">
                <i class="fa fa-handshake  fa-2x  wow rollIn" data-wow-duration="1.5s"></i>
                <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                <p class="count-text ">صفقـات تمـت</p>
            </div>

            <div class="counter col-sm-6 col-md-3">
                <i class="fa fa-user-tag fa-2x  wow rollIn" data-wow-duration="1.5s"></i>
                <h2 class="timer count-title count-number" data-to="{{$mazaids}}" data-speed="1500"></h2>
                <p class="count-text ">مزايـد</p>
            </div>

            <div class="counter col-sm-6 col-md-3 end">
                <i class="fa fa-group fa-2x  wow rollIn" data-wow-duration="1.5s"></i>
                <h2 class="timer count-title count-number" data-to="{{$mazaids}}" data-speed="1500"></h2>
                <p class="count-text ">مزاد متـاح</p>
            </div>
        </div>
    </div>
</section>
<hr/>
<!-- ----------------------------------------- -->
<!-- ----------------------------------------- -->

<section id="items" class="items">
    <div class="container">
        <button class="btn btn-primary btn_show">السيارات</button>
        <div class="row use-box">
            @foreach ($Autioncars as $car)
                <div class="col-sm-6 col-md-4  cl">

                    <div class="items" style="width: 85%">
                        <div class="card" style="width: 300px;
    height: 444px;">
                            <div class="item_hd">
                                <b> سينتهي خلال </b>
                                <p class="mazaP" id="demooo{{$car->id}}" onclick="createCountDown('demooo{{$car->id}}','{{date('Y-m-d H:i:s', strtotime(-$car->created_at, strtotime($car->producttime)))}}','/cartime')">
                                    اضغط لمعرفة الوقت المتبقى
                                </p>
                                <i class="fa fa-clock" style="color: #f48639;"></i>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$car->image}}" alt="error">
                                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.viewers')</label>
                                    <h5>{{$car->viewers}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.type')</label>
                                    <h5>{{$car->type}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.price')</label>
                                    <h5>{{$car->price}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.model')</label>
                                    <h5>{{$car->model}}</h5>
                                </div>

                                <div class="m-auto w-50">
                                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                            onclick="window.location='{{route('Productt_car',[$car->id])}}'">
                                        زايـد الآن</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autioncars))
                    {{$Autioncars->links()}}
                @endif
            </div>
        </div>
        <button class="btn btn-primary btn_show">المجوهرات</button>
        <div class="row use-box">
            @foreach ($Autionjewelrys as $jewelry)
                <div class="col-sm-6 col-md-4  cl">
                    <div class="items" style="width: 85%">
                        <div class="card" style="width: 300px">
                            <div class="item_hd">
                                <b> سينتهي خلال </b>
                                <p class="mazaP" id="demooo{{$jewelry->id}}" onclick="createCountDown('demooo{{$jewelry->id}}','{{date('Y-m-d H:i:s', strtotime(-$jewelry->created_at, strtotime($jewelry->producttime)))}}','//jewtime')">
                                    اضغط لمعرفة الوقت المتبقى
                                </p>
                                <i class="fa fa-clock" style="color: #f48639;"></i>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$jewelry->image}}" alt="error">
                                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->

                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.viewers')</label>
                                    <h5>{{$jewelry->viewers}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.material')</label>
                                    <h5>{{$jewelry->material}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.price')</label>
                                    <h5>{{$jewelry->price}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.weight')</label>
                                    <h5>{{$jewelry->weight}}</h5>
                                </div>
                                <div class="m-auto w-50">
                                <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                onclick="window.location='{{route('Productt_jewelry',[$jewelry->id])}}'">
                                            زايـد الآن</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autionjewelrys))
                    {{$Autionjewelrys->links()}}
                @endif
            </div>
        </div>
        <button class="btn btn-primary btn_show">المركبات</button>
        <div class="row use-box">
            @foreach ($Autionvichels as $vichle)
                <div class="col-sm-6 col-md-4  cl">
                    <div class="items" style="width: 85%">
                        <div class="card" style="width: 300px">
                            <div class="item_hd">
                                <b> سينتهي خلال </b>
                                <p class="mazaP" id="demooo{{$vichle->id}}" onclick="createCountDown('demooo{{$vichle->id}}','{{date('Y-m-d H:i:s', strtotime(-$vichle->created_at, strtotime($vichle->producttime)))}}','/victime')">
                                    اضغط لمعرفة الوقت المتبقى
                                </p>
                                <i class="fa fa-clock" style="color: #f48639;"></i>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$vichle->image}}" alt="error">
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.viewers')</label>
                                    <h5>{{$vichle->viewers}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.model')</label>
                                    <h5>{{$vichle->model}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.price')</label>
                                    <h5>{{$vichle->price}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.weight')</label>
                                    <h5>{{$jewelry->weight}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.color')</label>
                                    <h5>{{ $vichle->color }}</h5>
                                </div>
                                <div class="m-auto w-50">
                                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                            onclick="window.location='{{route('Productt_vichle',[$vichle->id])}}'">
                                        زايـد الآن</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autionvichels))
                    {{$Autionvichels->links()}}
                @endif
            </div>
        </div>
        <button class="btn btn-primary btn_show">اخرى ثمينه</button>
        <div class="row use-box">
            @foreach ($Autionhighvalues as $hightvalue)
                <div class="col-sm-6 col-md-4  cl">
                    <div class="items" style="width: 85%">
                        <div class="card" style="width: 300px">
                            <div class="item_hd">
                                <b> سينتهي خلال </b>
                                <p class="mazaP" id="demooo{{$hightvalue->id}}" onclick="createCountDown('demooo{{$hightvalue->id}}','{{date('Y-m-d H:i:s', strtotime(-$hightvalue->created_at, strtotime($hightvalue->producttime)))}}','/hightime')">
                                    اضغط لمعرفة الوقت المتبقى
                                </p>
                                <i class="fa fa-clock" style="color: #f48639;"></i>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$hightvalue->image}}" alt="error">
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.viewers')</label>
                                    <h5>{{$hightvalue->viewers}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.name')</label>
                                    <h5>{{$hightvalue->name}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.price')</label>
                                    <h5>{{$hightvalue->price}}</h5>
                                </div>
                                    <div class="m-auto w-50">
                                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                onclick="window.location='{{route('Productt_highvalue',[$hightvalue->id])}}'">
                                            زايـد الآن</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autionhighvalues))
                    {{$Autionhighvalues->links()}}
                @endif
            </div>
        </div>
        <button class="btn btn-primary btn_show">العقارت</button>
        <div class="row use-box">
            @foreach ($Autionproperties as $property)
                <div class="col-sm-6 col-md-4  cl">
                    <div class="items" style="width: 85%">
                        <div class="card" style="width: 300px">
                            <div class="item_hd">
                                <b> سينتهي خلال </b>
                                <p class="mazaP" id="demooo{{$property->id}}" onclick="createCountDown('demooo{{$property->id}}','{{date('Y-m-d H:i:s', strtotime(-$property->created_at, strtotime($property->producttime)))}}','/protime')">
                                    اضغط لمعرفة الوقت المتبقى
                                </p>
                                <i class="fa fa-clock" style="color: #f48639;"></i>
                            </div>
                            <div class="product">
                                <img  src="/productimages/{{$property->image}}" alt="error">

                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.viewers')</label>
                                    <h5>{{$property->viewers}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.type')</label>
                                    <h5>{{ $property->type }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.price')</label>
                                    <h5>{{$hightvalue->price}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.new')</label>
                                    <h5>{{ $property->new }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <label style="color:#09c;">@lang('site.SizeInMeter')</label>
                                    <h5>{{ $property->SizeInMeter }}</h5>
                                </div>

                                    <div class="m-auto w-50">
                                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                onclick="window.location='{{route('Productt_property',[$property->id])}}'">
                                            زايـد الآن</button>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($Autionproperties))
                    {{$Autionproperties->links()}}
                @endif
            </div>
        </div>
    </div>

</section>

<!-- ----------------------------------------------------------------------------------------- -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/salesmain.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script>
    // Set the date we're counting down to
    function createCountDown(elementId, date,category) {
        // Set the date we're counting down to
        var countDownDate = new Date(date).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById(elementId).innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById(elementId).innerHTML = "ORDER EXPIRED";
                var matches = elementId.match(/(\d+)/);
                window.location.href = "http://127.0.0.1:8000/"+category+"?timee=" + Number(matches[0]);
            }
        }, 1000);
    }
</script>
</body>
</html>
