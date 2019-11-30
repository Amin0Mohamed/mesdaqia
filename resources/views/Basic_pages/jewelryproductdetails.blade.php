@include('Headers.carproductdetails_header')

<section class="products_details">
    <div class="container">

        <div class="row">

            <div class="col-sm-12">
                <div class="product_head">
                    <img class="d-block img-fluid img_bg" src="/productimages/{{$_GET['image']}}">
                <div class="product_content">
                    <h4> تفـاصيـل أكثر عن المجـوهرات<hr></h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group">
                                <label for="type_car">نـوع المجـوهرات</label>
                            <label class="product_data" name="">{{$_GET['type']}}</label>
                            </div>
                            <div class="input-group">
                                    <label for="color_car">ماتيريال المجـوهرات </label>
                            <label class="product_data" name="">{{$_GET['material']}}</label>
                            </div>
                            <div class="input-group">
                                <label for="model_car">وزن المجـوهرات </label>
                            <label class="product_data" name="">{{$_GET['weight']}}</label>
                            </div>
                            <div class="input-group">
                                <label for="status_car">حـالـة المجـوهرات</label>
                            <label class="product_data" name="">{{$_GET['new']}}</label>
                            </div>
                            <div class="input-group">
                                <label for="status_car">ضمان السيـارة</label>
                            <label class="product_data" name="">{{$_GET['Guarant']}}</label>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <h5 class="text-center">سعـر السيـارة<hr class="ln" /></h5>
                        <p class="text-center product_price"> 300 <br><span>{{$_GET['price']}}</span></p>
                        </div>
                        <div class="col-12 col-md-3">
                            <button class="btn btn-primary btn_add"> <i class="fa fa-heart"
                                                                        onclick="window.location='{{url('addtocard',
                                [
                               'id'=>$_GET['id'],
                                'ownerID'=>Session::get('id'),
                                'image'=>$_GET['image'],
                                'type'=>$_GET['type'],
                                'price'=>$_GET['price'],
                                ])}}'"
                                ></i>إضـافة إلي المفضلـة</button>
                            <button class="btn btn-primary btn_add"> <i class="fa fa-phone"></i> 01025061019 </button>
                            <button class="btn btn-primary btn_add"> <i class="fab fa-google"></i>ayadmahmoud03@gmail.com</button>
                        </div>

                    </div>

                </div>

                <hr/>
                    <a href="{{url('/continue_pay',[
                'id'=>$_GET['id'],
                'ownerID'=>$_GET['ownerID'],
                'price'=>$_GET['price'],
                'category'=>'jewelry',
                ])}}" class="btn btn-primary btn_buy"> <i class="fa fa-shopping-cart"></i>  شـراء المنتج
                    </a>
                </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/carsdetails.js"></script>
<script src="js/Vehicles.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>

</body>
</html>
