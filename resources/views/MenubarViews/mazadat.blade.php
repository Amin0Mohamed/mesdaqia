@include('Headers.mazadat_header');
<!-- ==================================================================== -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <div class="container">
            <li class="breadcrumb-item"><a href="/homemesdakia"><i class="fa fa-home"></i> الصفحـة الرئيسيـة</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">المـركبات</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">المـزادات</li>
        </div>
    </ol>
</nav>
<!-- ================================================================ -->

<section class="mazad">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="block_type">

                    <!-- ================================================================ -->
                    <h6 class="text-center">أقسـام</h6>
                    <div class="tab">
                        <button class="tablinks btn btn-outline-primary btn-block" id="defaultOpen">كل الاقسام</button>
                        <button class="tablinks btn btn-outline-primary btn-block" onclick="window.location='/cars'">السيـارات</button>
                        <button class="tablinks btn btn-outline-primary btn-block" onclick="window.location='/vichle'" >المركبـات</button>
                        <button class="tablinks btn btn-outline-primary btn-block" onclick="window.location='/property'">العقـارات</button>
                        <button class="tablinks btn btn-outline-primary btn-block" onclick="window.location='/jewelry'">المجـوهرات</button>
                        <button class="tablinks btn btn-outline-primary btn-block" onclick="window.location='/highvalue'">أُخـري</button>
                    </div>


                </div>
            </div>


            <div class="col-sm-9">
                <!-- =============================================================== -->
                <div id="model" class="model tabcontent">

                    <h4 class="text-center">المـزادات الفـوريـة <hr class="ln"/></h4>
                    <h4 class="text-right">سيارات فورى: </h4>
                    <div class="row use-box">
                        @foreach ($Autioncars as $car)
                        <div class="col-sm-6 col-md-4  cl">
                            <div class="items">
                                <div class="card">
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
                                        <p class="heart">{{$car->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                        <div class="sz">
                                            <p class="ht">{{$car->type}}</p>

                                        </div>
                                        <h5>{{$car->price}}</h5>
                                        <div class="row mg-up">
                                            <div class="col-xs-6">
                                                <p class="lead">{{$car->model}}</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                        onclick="window.location='{{route('Productt_car',[$car->id])}}'">
                                                    زايـد الآن</button>
                                            </div>
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
                    <h4 class="text-right">مجوهرات فورى: </h4>
                    <div class="row use-box">
                        @foreach ($Autionjewelrys as $jewelry)
                            <div class="col-sm-6 col-md-4  cl">
                                <div class="items">
                                    <div class="card">
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
                                            <p class="heart">{{$jewelry->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                            <div class="sz">
                                                <p class="ht">{{ $jewelry->material }}</p>

                                            </div>
                                            <h5>{{ $jewelry->price }}</h5>
                                            <div class="row mg-up">
                                                <div class="col-xs-6">
                                                    <p class="lead"><p>{{ $jewelry->weight }}</p>
                                                </div>
                                                <div class="col-xs-6">
                                                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                            onclick="window.location='{{route('Productt_jewelry',[$jewelry->id])}}'">
                                                        زايـد الآن</button>
                                                </div>
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
                    <h4 class="text-right">مركبات فورى: </h4>
                    <div class="row use-box">
                        @foreach ($Autionvichels as $vichle)
                            <div class="col-sm-6 col-md-4  cl">
                                <div class="items">
                                    <div class="card">
                                        <div class="item_hd">
                                            <b> سينتهي خلال </b>
                                            <p class="mazaP" id="demooo{{$vichle->id}}" onclick="createCountDown('demooo{{$vichle->id}}','{{date('Y-m-d H:i:s', strtotime(-$vichle->created_at, strtotime($vichle->producttime)))}}','/victime')">
                                                اضغط لمعرفة الوقت المتبقى
                                            </p>
                                            <i class="fa fa-clock" style="color: #f48639;"></i>
                                        </div>
                                        <div class="product">
                                            <img  src="/productimages/{{$vichle->image}}" alt="error">
                                            <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                            <p class="heart">{{$vichle->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                            <div class="sz">
                                                <p class="ht">{{ $vichle->model }}</p>

                                            </div>
                                            <h5>{{ $vichle->price }}</h5>
                                            <h5>{{ $vichle->year }}</h5>
                                            <h5>{{ $vichle->color }}</h5>
                                            <div class="row mg-up">
                                                <div class="col-xs-6">
                                                    <p class="lead">{{ $vichle->type }}</p>
                                                </div>
                                                <div class="col-xs-6">
                                                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                            onclick="window.location='{{route('Productt_vichle',[$vichle->id])}}'">
                                                        زايـد الآن</button>
                                                </div>
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
                    <h4 class="text-right">اخرى ثمينه فورى: </h4>
                    <div class="row use-box">
                        @foreach ($Autionhighvalues as $hightvalue)
                            <div class="col-sm-6 col-md-4  cl">
                                <div class="items">
                                    <div class="card">
                                        <div class="item_hd">
                                            <b> سينتهي خلال </b>
                                            <p class="mazaP" id="demooo{{$hightvalue->id}}" onclick="createCountDown('demooo{{$hightvalue->id}}','{{date('Y-m-d H:i:s', strtotime(-$hightvalue->created_at, strtotime($hightvalue->producttime)))}}','/hightime')">
                                                اضغط لمعرفة الوقت المتبقى
                                            </p>
                                            <i class="fa fa-clock" style="color: #f48639;"></i>
                                        </div>
                                        <div class="product">
                                            <img  src="/productimages/{{$hightvalue->image}}" alt="error">
                                            <p class="heart">{{$hightvalue->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                            <div class="sz">
                                                <p class="ht">{{ $hightvalue->name }}</p>

                                            </div>
                                            <h5>{{ $hightvalue->price }}</h5>
                                            <div class="row mg-up">
                                                <div class="col-xs-6">
                                                    <p class="lead">{{ $hightvalue->new }}</p>
                                                </div>
                                                <div class="col-xs-6">
                                                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                            onclick="window.location='{{route('Productt_highvalue',[$hightvalue->id])}}'">
                                                        زايـد الآن</button>
                                                </div>
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
                    <h4 class="text-right">عقارات فورى: </h4>
                    <div class="row use-box">
                        @foreach ($Autionproperties as $property)
                            <div class="col-sm-6 col-md-4  cl">
                                <div class="items">
                                    <div class="card">
                                        <div class="item_hd">
                                            <b> سينتهي خلال </b>
                                            <p class="mazaP" id="demooo{{$property->id}}" onclick="createCountDown('demooo{{$property->id}}','{{date('Y-m-d H:i:s', strtotime(-$property->created_at, strtotime($property->producttime)))}}','/protime')">
                                                اضغط لمعرفة الوقت المتبقى
                                            </p>
                                            <i class="fa fa-clock" style="color: #f48639;"></i>
                                        </div>
                                        <div class="product">
                                            <img  src="/productimages/{{$property->image}}" alt="error">
                                            <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                            <p class="heart">{{$property->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                            <div class="sz">
                                                <p class="ht">{{ $property->type }}</p>
                                                <p class="ht">{{ $property->new }}</p>
                                            </div>
                                            <h5>{{ $property->price }}</h5>
                                            <div class="row mg-up">
                                                <div class="col-xs-6">
                                                    <p class="lead">{{ $property->SizeInMeter }}</p>
                                                </div>
                                                <div class="col-xs-6">
                                                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                                            onclick="window.location='{{route('Productt_property',[$property->id])}}'">
                                                        زايـد الآن</button>
                                                </div>
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
                    <!-- ====================================================== -->
                    <hr>
                    <h4 class="text-center" id="vichle">المـركبات <hr class="ln"/></h4>
                    <div class="row use-box">
                        @foreach ($vichels as $vichle)
                        <div class="col-sm-6 col-md-4  cl">
                            <div class="card">
                                <div class="product">
                                    <img  src="/productimages/{{$vichle->image}}" alt="error">
                                    <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                    <p class="heart">{{$vichle->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                    <div class="sz">
                                        <p class="ht">{{ $vichle->model }}</p>

                                    </div>
                                    <h5>{{ $vichle->price }}</h5>
                                    <h5>{{ $vichle->year }}</h5>
                                    <h5>{{ $vichle->color }}</h5>
                                    <div class="row mg-up">
                                        <div class="col-xs-6">
                                            <p class="lead">{{ $vichle->type }}</p>
                                        </div>
                                        <div class="col-xs-6">
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
                            @if (count($vichels))
                                {{$vichels->links()}}
                            @endif

                        </div>
                    </div>
                    <!-- ====================================================== -->
                    <hr>
                    <h4 class="text-center">السيارات <hr class="ln"/></h4>

                    <div class="row use-box">

                        @foreach($cars as $car)
                            <div class="col-sm-6 col-md-4  cl">
                                <div class="card">
                                    <div class="product">
                                        <img  src="/productimages/{{$car->image}}" alt="error">
                                        <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                        <p class="heart">{{$car->viewers}} <i class="fa fa-heart" ></i></p><br/>
                                        <div class="sz">
                                            <p class="ht">{{$car->type}}</p>

                                        </div>
                                        <h5>{{$car->price}}</h5>
                                        <div class="row mg-up">
                                            <div class="col-xs-6">
                                                <p class="lead">{{$car->model}}</p>
                                            </div>
                                            <div class="col-xs-6">
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
                            @if (count($cars))
                                {{$cars->links()}}
                            @endif

                        </div>
                    </div>
                    <!-- ====================================================== -->


                    <hr>
                    <h4 class="text-center">العقـارات <hr class="ln"/></h4>

                    <div class="row use-box">

                        @foreach ($properties as $property)
                            <div class="col-sm-6 col-md-4  cl">
                                <div class="card">
                                    <div class="product">
                                        <img  src="/productimages/{{$property->image}}" alt="error">
                                        <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                                        <p class="heart">{{$property->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                        <div class="sz">
                                            <p class="ht">{{ $property->type }}</p>
                                            <p class="ht">{{ $property->new }}</p>
                                        </div>
                                        <h5>{{ $property->price }}</h5>
                                        <div class="row mg-up">
                                            <div class="col-xs-6">
                                                <p class="lead">{{ $property->SizeInMeter }}</p>
                                            </div>
                                            <div class="col-xs-6">
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
                            @if (count($properties))
                                {{$properties->links()}}
                            @endif

                        </div>
                    </div>
                    <!-- ================================================= -->
                    <!-- ====================================================== -->
                    <hr>
                    <h4 class="text-center">المجـوهرات <hr class="ln"/></h4>

                    <div class="row use-box">
                        @foreach ($jewelrys as $jewelry)
                        <div class="col-sm-6 col-md-4  cl">
                            <div class="card">
                                <div class="product">
                                    <img  src="/productimages/{{$jewelry->image}}" alt="error">
                                    <p class="heart">{{$jewelry->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                    <div class="sz">
                                        <p class="ht">{{ $jewelry->material }}</p>

                                    </div>
                                    <h5>{{ $jewelry->price }}</h5>
                                    <div class="row mg-up">
                                        <div class="col-xs-6">
                                            <p class="lead"><p>{{ $jewelry->weight }}</p></p>
                                        </div>
                                        <div class="col-xs-6">
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
                            @if (count($jewelrys))
                                {{$jewelrys->links()}}
                            @endif

                        </div>
                    </div>
                    <!-- ================================================= -->
                    <!-- ====================================================== -->
                    <hr>
                    <h4 class="text-center">أُخـري ثمينـة <hr class="ln"/></h4>

                    <div class="row use-box">
                        @foreach ($highvalues as $hightvalue)
                        <div class="col-sm-6 col-md-4  cl">
                            <div class="card">
                                <div class="product">
                                    <img  src="/productimages/{{$hightvalue->image}}" alt="error">
                                    <p class="heart">{{$hightvalue->viewers}}<i class="fa fa-heart" ></i></p><br/>
                                    <div class="sz">
                                        <p class="ht">{{ $hightvalue->name }}</p>

                                    </div>
                                    <h5>{{ $hightvalue->price }}</h5>
                                    <div class="row mg-up">
                                        <div class="col-xs-6">
                                            <p class="lead">{{ $hightvalue->new }}</p>
                                        </div>
                                        <div class="col-xs-6">
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
                            @if (count($highvalues))
                                {{$highvalues->links()}}
                            @endif

                        </div>
                    </div>
                    <!-- ================================================= -->
                </div>
            </div>
        </div>
    </div>
</section>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/profile_user.js"></script>
<script src="js/salesmain.js"></script>
<script src="js/Vehicles.js"></script>
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
