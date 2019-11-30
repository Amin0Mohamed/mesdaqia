<div class="card card-body">
    <!--cars-->
    <div class="col-sm-3 col-md-4 col-lg-2 cl">

        <div class="card">
            <div class="product">
                <img  src="/productimages/{{$_GET['c_image']}}" alt="error">
                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                <p class="heart">{{$_GET['c_color']}}</p><br/>
                <div class="sz">
                    <p class="ht">{{$_GET['c_type']}}</p>
                </div>
                <h5>{{$_GET['price']}}</h5>
                <div class="row mg-up">
                    <div class="col-xs-6">
                        <p class="lead">{{$_GET['c_model']}}</p>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                onclick="window.location='{{route('Productt_car',[$_GET['c_id']])}}'">
                            زايد الآن</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--jew-->
    <div class="col-sm-3 col-md-4 col-lg-2 cl">

        <div class="card">
            <div class="product">
                <img  src="/productimages/{{$_GET['j_image']}}" alt="error">
                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                <p class="heart">{{$_GET['j_material']}}</p><br/>
                <div class="sz">
                    <p class="ht">{{$_GET['j_type']}}</p>

                </div>
                <h5>{{$_GET['j_price']}}</h5>
                <div class="row mg-up">
                    <div class="col-xs-6">
                        <p class="lead">{{$_GET['j_weight']}}</p>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                onclick="window.location='{{route('Productt_jewelry',[$_GET['j_id']])}}'">
                            زايد الآن</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--high-->
    <div class="col-sm-3 col-md-4 col-lg-2 cl">

        <div class="card">
            <div class="product">
                <img  src="/productimages/{{$_GET['h_image']}}" alt="error">
                <div class="sz">
                    <p class="ht">{{$_GET['j_type']}}</p>

                </div>
                <h5>{{$_GET['j_price']}}</h5>
                <div class="col-xs-6">
                    <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                            onclick="window.location='{{route('Productt_highvalue',[$_GET['j_id']])}}'">
                        زايد الآن</button>
                </div>
            </div>
        </div>
    </div>
    <!--vich-->
    <div class="col-sm-3 col-md-4 col-lg-2 cl">

        <div class="card">
            <div class="product">
                <img  src="/productimages/{{$_GET['v_image']}}" alt="error">
                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                <p class="heart">{{$_GET['v_color']}}</p><br/>
                <div class="sz">
                    <p class="ht">{{$_GET['v_type']}}</p>

                </div>
                <h5>{{$_GET['v_price']}}</h5>
                <div class="row mg-up">
                    <div class="col-xs-6">
                        <p class="lead">{{$_GET['v_model']}}</p>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                onclick="window.location='{{route('Productt_vichle',[$_GET['v_id']])}}'">
                            زايد الآن</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--propr-->
    <div class="col-sm-3 col-md-4 col-lg-2 cl">

        <div class="card">
            <div class="product">
                <img  src="/productimages/{{$_GET['p_image']}}" alt="error">
                <!-- <span class="sell wow bounce" data-wow-duration="1.5s"> تخفيض 45%</span> -->
                <p class="heart">{{$_GET['p_SizeInMeter']}}</p><br/>
                <div class="sz">
                    <p class="ht">{{$_GET['p_type']}}</p>

                </div>
                <h5>{{$_GET['p_price']}}</h5>
                <div class="row mg-up">
                    <div class="col-xs-6">
                        <p class="lead">{{$_GET['p_floors']}}</p>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-outline-primary btn_s wow fadeInDown" data-wow-duration="1.5s"
                                onclick="window.location='{{route('Productt_property',[$_GET['p_id']])}}'">
                            زايد الآن</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>