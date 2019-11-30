<div class="card card-body">
    <h4 class="text-center">  قائمـة إضـافاتي<hr class="ln"/></h4>

    <h2 style="text-align: center">cars</h2>
    @foreach($car_to_edit as $car)
        @if($car->ownerID == Session::get('id'))
            <div id="model" class="model">
                <div class="row use-box">
                    <div class="col-sm-6 col-md-4 cl">
                        <div class="card">
                            <div class="product">
                                <img  src="/productimages/{{$car->image}}" alt="error">
                                <h5>{{ $car->price }}</h5>
                                <hr>
                                <div class="text-center">
                                    <a href="" class="btn btn-outline-primary btn-block btn_s wow fadeInDown" data-toggle="modal" data-target="#edit_price" data-wow-duration="1.5s"> <i class="fa fa-shopping-cart"></i>  تعديل سعـر المنتج
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        {{--************************************************************************************--}}
            <div id="edit_price" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"  style="display : inline"> تعديل سعر المنتج </h5>
                            <button style="float:left" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/editPriceCar')}}" method="get">
                                <div class="form-group">
                                    <label for="">سعر المنتج </label>
                                    <input type="text" name="new_price" placeholder="أدخل سعر المنتج الجديد"/>
                                    <input type="hidden" name="id" value="{{$car->id}}">
                                </div>
                                <button type="submit" class="btn btn-outline-primary btn-block btn_s" >تعـديـل السعـر</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
    @endif
@endforeach

{{--****************************end car*************************************--}}
<h2 style="text-align: center">jewelry</h2>
@foreach($jewelry_to_edit as $jewelry)
    @if($jewelry->ownerID == Session::get('id'))
  {{--  @dd($jewelry->ownerID,$jewelry->id,Session::get('id'),$jewelry->price) --}}
        <div id="model" class="model">
            <div class="row use-box">
                <div class="col-sm-6 col-md-4 cl">
                    <div class="card">
                        <div class="product">
                            <img  src="/productimages/{{$jewelry->image}}" alt="error">
                            <h5>{{ $jewelry->price }}</h5>
                            <hr>
                            <div class="text-center">
                                <a href="" class="btn btn-outline-primary btn-block btn_s wow fadeInDown" data-toggle="modal" data-target="#edit_price" data-wow-duration="1.5s"> <i class="fa fa-shopping-cart"></i>  تعديل سعـر المنتج
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--************************************************************************************--}}
        <div id="edit_price" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"  style="display : inline"> تعديل سعر المنتج </h5>
                        <button style="float:left" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/editPricejew')}}" method="get">
                            <div class="form-group">
                                <label for="">سعر المنتج </label>
                                <input type="text" name="new_price" placeholder="أدخل سعر المنتج الجديد"/>
                                <input type="hidden" name="id" value="{{$jewelry->id}}">
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block btn_s" >تعـديـل السعـر</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

        {{--****************************end jewelry*************************************--}}
        <h2 style="text-align: center">highvalue</h2>
        @foreach($highvalue_to_edit as $highval)
            @if($highval->ownerID == Session::get('id'))
                <div id="model" class="model">
                    <div class="row use-box">
                        <div class="col-sm-6 col-md-4 cl">
                            <div class="card">
                                <div class="product">
                                    <img  src="/productimages/{{$highval->image}}" alt="error">
                                    <h5>{{ $highval->price }}</h5>
                                    <hr>
                                    <div class="text-center">
                                        <a href="" class="btn btn-outline-primary btn-block btn_s wow fadeInDown" data-toggle="modal" data-target="#edit_price" data-wow-duration="1.5s"> <i class="fa fa-shopping-cart"></i>  تعديل سعـر المنتج
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{--************************************************************************************--}}
                <div id="edit_price" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"  style="display : inline"> تعديل سعر المنتج </h5>
                                <button style="float:left" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('/editPricehigh')}}" method="get">
                                    <div class="form-group">
                                        <label for="">سعر المنتج </label>
                                        <input type="text" name="new_price" placeholder="أدخل سعر المنتج الجديد"/>
                                        <input type="hidden" name="id" value="{{$highval->id}}">
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary btn-block btn_s" >تعـديـل السعـر</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                {{--****************************end highvalue*************************************--}}
    <h2 style="text-align: center">property</h2>
    @foreach($property_to_edit as $property)
        @if($property->ownerID == Session::get('id'))
            <div id="model" class="model">
                <div class="row use-box">
                    <div class="col-sm-6 col-md-4 cl">
                        <div class="card">
                            <div class="product">
                                <img  src="/productimages/{{$property->image}}" alt="error">
                                <h5>{{ $property->price }}</h5>
                                <hr>
                                <div class="text-center">
                                    <a href="" class="btn btn-outline-primary btn-block btn_s wow fadeInDown" data-toggle="modal" data-target="#edit_price" data-wow-duration="1.5s"> <i class="fa fa-shopping-cart"></i>  تعديل سعـر المنتج
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{--************************************************************************************--}}
            <div id="edit_price" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"  style="display : inline"> تعديل سعر المنتج </h5>
                            <button style="float:left" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/editPricepro')}}" method="get">
                                <div class="form-group">
                                    <label for="">سعر المنتج </label>
                                    <input type="text" name="new_price" placeholder="أدخل سعر المنتج الجديد"/>
                                    <input type="hidden" name="id" value="{{$property->id}}">
                                </div>
                                <button type="submit" class="btn btn-outline-primary btn-block btn_s" >تعـديـل السعـر</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    {{--****************************end property*************************************--}}

    <h2 style="text-align: center">vichle</h2>
    @foreach($vichle_to_edit as $vichle)
        @if($vichle->ownerID == Session::get('id'))
            <div id="model" class="model">
                <div class="row use-box">
                    <div class="col-sm-6 col-md-4 cl">
                        <div class="card">
                            <div class="product">
                                <img  src="/productimages/{{$vichle->image}}" alt="error">
                                <h5>{{ $vichle->price }}</h5>
                                <hr>
                                <div class="text-center">
                                    <a href="" class="btn btn-outline-primary btn-block btn_s wow fadeInDown" data-toggle="modal" data-target="#edit_price" data-wow-duration="1.5s"> <i class="fa fa-shopping-cart"></i>  تعديل سعـر المنتج
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{--************************************************************************************--}}
            <div id="edit_price" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"  style="display : inline"> تعديل سعر المنتج </h5>
                            <button style="float:left" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/editPricevich')}}" method="get">
                                <div class="form-group">
                                    <label for="">سعر المنتج </label>
                                    <input type="text" name="new_price" placeholder="أدخل سعر المنتج الجديد"/>
                                    <input type="hidden" name="id" value="{{$vichle->id}}">
                                </div>
                                <button type="submit" class="btn btn-outline-primary btn-block btn_s" >تعـديـل السعـر</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    {{--****************************end vichle*************************************--}}

</div>