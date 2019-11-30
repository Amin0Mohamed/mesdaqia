<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title> مصداقية</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Changa|Katibeh|Lalezar|Reem+Kufi|Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <script src="{{asset('js/bootstrap-4.js')}}"></script>
    <script src="{{asset('js/bootstrap.min-4.js')}}"></script>


    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min-4.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min-4.css')}}">


    <link rel="stylesheet" href="{{asset('css/animate.css')}}css/normalize.css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}css/hover.css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_mesd.css')}}">
    <link rel="stylesheet" href="{{asset('css/salesmain.css')}}">
    <link rel="stylesheet" href="{{asset('css/Vehicles.css')}}">
    <link rel="stylesheet" href="{{asset('css/profile_user.css')}}">
    <link rel="stylesheet" href="{{asset('css/editforms.css')}}">

</head>
<body>
<div class="card" id="cars_d">
    <div class="card-body">
        <div class="container">
            <div class="row" >
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h4 class="text-center"> السيارات<hr class="ln"/></h4>
                    <div class="forms">
                        <!-- ====================================== -->
                        <form method="post" action="/editcarsform" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-car"></i></span>
                                </div>
                                <input type="text" name="type" class="form-control" placeholder="ادخل اسـم و نـوع السيارة" value="{{$au_car->type}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" name="vendor"class="form-control" placeholder="ادخل اسـم البائع" value="{{$au_car->vendor}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" name="location" class="form-control" placeholder="ادخل  المكـان " value="{{$au_car->location}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-coins"></i></span>
                                </div>
                                <input type="number" name="price"class="form-control" placeholder="ادخل سعـر السيارة" value="{{$au_car->price}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-tint"></i></span>
                                </div>
                                <input type="text" name="color" class="form-control" placeholder="ادخل لون السيارة" value="{{$au_car->color}}" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-medium-m"></i></span>
                                </div>
                                <input type="text" name="model" class="form-control" placeholder="ادخل موديل السيارة" value="{{$au_car->model}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-history"></i></span>
                                </div>
                                <input type="number" name="year" class="form-control" placeholder="ادخل موديل سنة السيارة" value="{{$au_car->year}}"required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                </div>
                                <select name="new" id="status_car">
                                    <option value="">حـالة السيارة</option>
                                    <option value="{{$au_car->new}}">جديدة</option>
                                    <option value="{{$au_car->new}}">مستعملـة</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                                </div>
                                <select name="status" required>
                                    <option  value="" >وضـع السيارة الحالي</option>
                                    <option  value="{{$au_car->status}}">مستعملة أقرب للجديدة</option>
                                    <option  value="{{$au_car->status}}">مستعملة متضررة قابلة لإلصالح</option>
                                    <option  value="{{$au_car->status}}">متضرر غيرقابلة للاصلاح</option>
                                    <option  value="{{$au_car->status}}">جديده</option>
                                </select>
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                </div>
                                <select name="Auction_type" id="mazad_fawery_car" onchange="dispaly_time_car()" required>
                                    <option value="" >إضـافة إلـي</option>
                                    <option value="مزاد فورى">مزاد فورى</option>
                                    <option value="مزاد مسعر">مزاد مسعر</option>
                                    <option value="مزاد مفتوح">مزاد مفتوح</option>
                                </select>
                            </div>
                            <div class="input-group mb-3" id="period_product_car">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                                </div>
                                <select name="product_time" required>
                                    <option value="0" >إضـافة إلـي</option>
                                    <option value="2">2</option>
                                    <option value="6">6</option>
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-hands-helping"></i></span>
                                </div>
                                <select name="Guarant" required>
                                    <option value="">الضمـان</option>
                                    <option  value="{{$au_car->Guarant}}">بضمـان</option>
                                    <option  value="{{$au_car->Guarant}}">بـدون  ضمـان</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-images"></i></span>
                                </div>
                                <input type="file" name="image" id="c_img">
                            </div>
                            <input type="hidden" name="id" value="{{$au_car->id}}">
                            <input type="hidden" name="ownerID" value="{{Session::get('id')}}">

                            <input type="submit" name="add_car" value="إضـافـة" class="btn btn-outline-primary btn-block btn_sub">

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/profile_user.js')}}"></script>

<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/editforms.js')}}"></script>
<script>
    new WOW().init();
</script>

</body>
</html>
