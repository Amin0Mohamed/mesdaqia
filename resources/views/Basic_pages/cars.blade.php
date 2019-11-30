@include('Headers.cars_header');
<!-- ==================================================================== -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <div class="container">
            <li class="breadcrumb-item"><a href="/homemesdakia"><i class="fa fa-home"></i> الصفحـة الرئيسيـة</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">المـركبات</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">السيـارات</li>
        </div>
    </ol>
</nav>
<!-- ================================================================ -->
<section id="model" class="model">
    <div class="container">

        <span class="meue_side"  onclick="openNav()">&#9776; </span>

        <div  class="model">

            <div class="row use-box">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <button id="sc" class="btn btn-outline-primary btn-block btn_s" data-toggle="collapse" data-target="#search_1" aria-expanded="false" aria-controls="search_1">بحـث مخـصص</button>
                    <div class="collapse" id="search_1">
                        <div class="card card-block">

                            <form method="get" action="/search_car">
                                <h6 class="text-center">حدد السعـر</h6>
                                <div class="input-group " >
                                    <!-- <label for="price">السعـر</label> -->
                                    <input type="text" name="price" placeholder="حدد السعر" required>

                                </div>
                                <!-- =================== -->
                                <h6 class="text-center">موديل</h6>
                                <div class="input-group">
                                    <input type="text" name="model" placeholder="موديل المركبة" required>
                                </div>
                                <!-- ======= -->
                                <!-- <h6 class="text-center">اللـون</h6>
                                <div class="input-group">
                                    <input type="text" name="color_v  " placeholder="لـون المركبة">
                                </div> -->
                                <!-- ======= -->
                                <h6 class="text-center">حالـة المنتج</h6>
                                <div class="input-group">
                                    <select name="status" required>
                                        <option value="new product">new product</option>
                                        <option value="used product">used product</option>
                                    </select>
                                </div>
                                <!-- ======= -->
                                <h6 class="text-center">نـوع المنتج</h6>
                                <div class="input-group">
                                    <input type="text" name="type" placeholder="type" required>
                                </div>
                                <!-- ================= -->
                                <h6 class="text-center">سنة المنتج</h6>
                                <div class="input-group " >
                                    <!-- <label for="price">السعـر</label> -->
                                    <input type="text" name="year" placeholder="حدد السنة" required>
                                </div>
                                <!-- ===================== -->
                                <input type="submit"  value="إبحـث" class="btn btn-outline-primary btn-block btn_s">
                            </form>
                        </div>
                    </div>

                    <div class="" id="search_2">
                        <select onchange="display_search()" name="serch_for" id="serch_for" required>
                            <option value="">إبحث بـ</option>
                            <option value="price_s">السعر</option>
                            <option value="status_s">الحالة</option>
                            <option value="type_s">النوع</option>
                            <option value="model_s">الموديل</option>
                            <option value="year_s">السنة</option>
                        </select>
                        <div class="card card-block" id="dis_card">

                            <div class="input-group " id="dis_input">
                                <form method="get" action="/search_car" style="display:block;" id="search_By_price_car">
                                    <input type="text" name="price" placeholder="price" required>
                                    <input type="submit" value="search">
                                </form>

                            </div>
                            <div class="input-group " id="dis_input2">
                                <form method="get" action="/search_car" style="display:block;" id="search_By_status_car">
                                    <select name="status" required>
                                        <option value="new product">new product</option>
                                        <option value="used product">used product</option>
                                    </select>
                                    <input type="submit" value="search">
                                </form>
                            </div>
                            <div class="input-group " id="dis_input3">
                                <form method="get" action="/search_car" style="display:block;" id="search_By_type_car">
                                    <input type="text" name="type" placeholder="type" value="" required>
                                    <input type="submit" value="search">
                                </form>
                            </div>
                            <div class="input-group " id="dis_input4">
                                <form method="get" action="/search_car" style="display:block;" id="search_By_model_car">
                                    <input type="text" name="model" placeholder="model" value="" required>
                                    <input type="submit" value="search">
                                </form>
                            </div>
                            <div class="input-group " id="dis_input5">
                                <form method="get" action="/search_car" style="display:block;" id="search_By_year_car">
                                    <input type="text" name="year" placeholder="year" value="" required>
                                    <input type="submit" value="search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($cars as $car)
                    <div class="col-sm-6 col-md-4 col-lg-3 cl">
                        <div class="card">
                            <div class="product">
                                <img  src="/productimages/{{$car->image}}" alt="error">
                                <div class="r">
                                    <p class="heart"> {{$car->viewers}}<i class="fa fa-heart" ></i></p>
                                    <label for="">@lang('site.viewers')</label>
                                </div>

                                <div class="r">
                                    <label for="">@lang('site.type')</label>
                                    <p class="heart">{{$car->type}}</p>
                                </div>
                                <div class="r">
                                    <label for="">@lang('site.price')</label>
                                    <h5 class="heart">{{$car->price}}</h5>
                                </div>
                                <div class="r">
                                    <label for="">@lang('site.model')</label>
                                    <p class="lead heart">{{$car->model}}</p>
                                </div>

                                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                            onclick="window.location='{{route('Productt_car',[$car->id])}}'">
                                        زايد الآن</button>


                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($carssearch as $car)
                    <div class="col-sm-6 col-md-4 col-lg-3 cl">
                        <div class="card">
                            <div class="product">
                                <img  src="/productimages/{{$car->image}}" alt="error">
                                <div class="r">
                                    <p class="heart"> {{$car->viewers}}<i class="fa fa-heart" ></i></p>
                                    <label for="">@lang('site.viewers')</label>
                                </div>

                                <div class="r">
                                    <label for="">@lang('site.type')</label>
                                    <p class="heart">{{$car->type}}</p>
                                </div>
                                <div class="r">
                                    <label for="">@lang('site.price')</label>
                                    <h5 class="heart">{{$car->price}}</h5>
                                </div>
                                <div class="r">
                                    <label for="">@lang('site.model')</label>
                                    <p class="lead heart">{{$car->model}}</p>
                                </div>

                                <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                        onclick="window.location='{{route('Productt_car',[$car->id])}}'">
                                    زايد الآن</button>


                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            @if (count($cars))
                {{$cars->links()}}
            @endif

        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            @if (count($carssearch))
                {{$carssearch->links()}}
            @endif
        </div>
    </div>
</section>
<!-- ============================================================================================================== -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/profile_user.js"></script>
<script src="js/Vehicles.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>
