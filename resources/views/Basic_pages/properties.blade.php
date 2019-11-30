@include('Headers.property_header');
<section class="mazad">
    <!-- ==================================================================== -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <div class="container">
                <li class="breadcrumb-item"><a href="/homemesdakia"><i class="fa fa-home"></i> الصفحـة الرئيسيـة</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">المـركبات</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">العقـارات</li>
            </div>
        </ol>
    </nav>
    <!-- ================================================================ -->
    <section id="model" class="model">
        <div class="container">

            <span class="meue_side"  onclick="openNav_build()">&#9776; </span>

            <div class="model">

                <div class="row use-box">
                    <div id="mySidenav3" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav_build()">&times;</a>
                        <button id="sc" class="btn btn-outline-primary btn-block btn_s" data-toggle="collapse" data-target="#search_1_build" aria-expanded="false" aria-controls="search_1_build">بحـث مخـصص</button>
                        <div class="collapse" id="search_1_build">
                            <div class="card card-block">
                                <form method="get" action="/search_property">
                                    <h6 class="text-center">حدد السعـر</h6>
                                    <div class="input-group " >
                                        <input type="text" name="price" placeholder="price" required>
                                    </div>
                                    <!-- ================================ -->
                                    <h6 class="text-center">حالـة العقار</h6>
                                    <div class="input-group">
                                        <select name="status" id="status_build" required >
                                            <option value="new product">new product</option>
                                            <option value="used product">used product</option>
                                        </select>
                                    </div>
                                    <!-- ======= -->
                                    <h6 class="text-center">نـوع العقار</h6>
                                    <div class="input-group">
                                        <input type="text" name="type" placeholder="type" required>
                                    </div>
                                    <!-- ============================== -->
                                    <h6 class="text-center">مساحة العقار بالمتر</h6>
                                    <div class="input-group">
                                        <input type="text" name="SizeInMeter" placeholder="SizeInMeter" required>
                                    </div>
                                    <!-- ============================== -->
                                    <h6 class="text-center"> عدد  الغرف</h6>
                                    <div class="input-group">
                                        <input type="text" name="rooms" placeholder="rooms" required>
                                    </div>
                                    <!-- =========================== -->
                                    <!-- ============================== -->
                                    <h6 class="text-center">المنطقة</h6>
                                    <div class="input-group">
                                        <input type="text" name="area" placeholder="area" required>
                                    </div>
                                    <!-- =========================== -->
                                    <!-- ============================== -->
                                    <h6 class="text-center"> المدينـة </h6>
                                    <div class="input-group">
                                        <input type="text" name="city" placeholder="city" required>
                                    </div>
                                    <!-- =========================== -->
                                    <input type="submit"value="إبحـث" class="btn btn-outline-primary btn-block btn_s">
                                </form>
                            </div>
                        </div>

                        <div id="search_2_build">
                            <select onchange="display_search_build()" name="serch_for_build" id="serch_for_build" required>
                                <option value="">إبحث بـ</option>
                                <option value="price_s">السعر</option>
                                <option value="status_s">الحالة</option>
                                <option value="type_s">النوع</option>
                                <option value="rooms_s">عدد الغرف</option>
                                <option value="area_s"> المنطقة</option>
                                <option value="city_s"> المدينة</option>
                            </select>
                            <div class="card card-block" id="dis_card_build">
                                <div class="input-group " id="dis_input_build">
                                    <form method="get" action="/search_property" style="display:block;" id="search_By_price_property">
                                        <input type="text" name="price" placeholder="price">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                                <div class="input-group " id="dis_input2_build">
                                    <form method="get" action="/search_property" style="display:block;" id="search_By_status_property">
                                        <select name="status">
                                            <option value="new product">new product</option>
                                            <option value="used product">used product</option>
                                        </select>
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                                <div class="input-group " id="dis_input3_build">
                                    <form method="get" action="/search_property" style="display:block;" id="search_By_type_property">
                                        <input type="text" name="type" placeholder="type" value="" required>
                                        <input type="submit" value="search">
                                    </form>

                                </div>
                                <div class="input-group " id="dis_input4_build">
                                    <div class="input-group">
                                        <form method="get" action="/search_property" style="display:block;" id="search_By_area_property">
                                            <input type="text" name="area" placeholder="area" value="" required>
                                            <input type="submit" value="search">
                                        </form>
                                    </div>
                                </div>
                                <!-- ================================== -->
                                <div class="input-group " id="dis_input5_build">
                                    <div class="input-group">
                                        <form method="get" action="/search_property" style="display:block;" id="search_By_rooms_property">
                                            <input type="text" name="rooms" placeholder="rooms" value="" required>
                                            <input type="submit" value="search">
                                        </form>
                                    </div>
                                </div>
                                <!-- =========================== -->
                                <div class="input-group " id="dis_input6_build">
                                    <div class="input-group">
                                        <form method="get" action="/search_property" style="display:block;" id="search_By_size_property">
                                            <input type="text" name="SizeInMeter" placeholder="sizeofmeteries" value="">
                                            <input type="submit" value="search">
                                        </form>
                                    </div>
                                </div>
                                <!-- =========================== -->
                                <div class="input-group " id="dis_input7_build">
                                    <div class="input-group">
                                        <form method="get" action="/search_property" style="display:block;" id="search_By_city_property">
                                            <input type="text" name="city" placeholder="city" value="" required>
                                            <input type="submit" value="search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @foreach ($properties as $property)
                        <div class="col-sm-6 col-md-4 col-lg-3 cl">
                            <div class="card">
                                <div class="product">
                                    <img  src="/productimages/{{$property->image}}" alt="error">
                                    <div class="r">
                                        <p class="heart"> {{$property->viewers}}<i class="fa fa-heart" ></i></p>
                                        <label for="">@lang('site.viewers')</label>
                                    </div>

                                    <div class="r">
                                        <label for="">@lang('site.type')</label>
                                        <p class="heart">{{$property->type}}</p>
                                    </div>
                                    <div class="r">
                                        <label for="">@lang('site.price')</label>
                                        <h5 class="heart">{{$property->price}}</h5>
                                    </div>

                                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                            onclick="window.location='{{route('Productt_property',[$property->id])}}'">
                                        زايد الآن</button>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($proretysearch as $property)
                        <div class="col-sm-6 col-md-4 col-lg-3 cl">
                            <div class="card">
                                <div class="product">
                                    <img  src="/productimages/{{$property->image}}" alt="error">
                                    <div class="r">
                                        <p class="heart"> {{$property->viewers}}<i class="fa fa-heart" ></i></p>
                                        <label for="">@lang('site.viewers')</label>
                                    </div>

                                    <div class="r">
                                        <label for="">@lang('site.type')</label>
                                        <p class="heart">{{$property->type}}</p>
                                    </div>
                                    <div class="r">
                                        <label for="">@lang('site.price')</label>
                                        <h5 class="heart">{{$property->price}}</h5>
                                    </div>

                                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                            onclick="window.location='{{route('Productt_property',[$property->id])}}'">
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
                @if (count($properties))
                    {{$properties->links()}}
                @endif

            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                @if (count($proretysearch))
                    {{$proretysearch->links()}}
                @endif
            </div>
        </div>
    </section>
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
