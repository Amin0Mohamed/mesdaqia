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
<div class="card" id="vichles_d">
    <div class="card-body">
        <div class="container">
            <div class="row" >
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h4 class="text-center">المركبات<hr class="ln"/></h4>

                    <div class="forms">
            <form method="post" action="/editvichlesform" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-truck-pickup"></i></span>
                    </div>
                    <input type="text" name="type" class="form-control" value="{{ $au_vichle->type }}" placeholder="ادخل اسـم و نـوع المركبة" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" name="vendor" class="form-control" value="{{ $au_vichle->vendor }}" placeholder="ادخل اسـم البائع" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                    </div>
                    <input type="text" name="location" class="form-control" value="{{ $au_vichle->location }}" placeholder="ادخل  المكـان " required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-coins"></i></span>
                    </div>
                    <input type="number" name="price" class="form-control" value="{{ $au_vichle->price }}" placeholder="ادخل سعـر المركبة" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-tint"></i></span>
                    </div>
                    <input type="text" name="color" class="form-control" value="{{ $au_vichle->color }}" placeholder="ادخل لون المركبة" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-medium-m"></i></span>
                    </div>
                    <input type="text" name="model" class="form-control" value="{{ $au_vichle->model }}" placeholder="ادخل موديل المركبة" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-history"></i></span>
                    </div>
                    <input type="number" name="year" class="form-control" value="{{ $au_vichle->year }}" placeholder="ادخل موديل سنة المركبة" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                    </div>
                    <select name="new" id="status_vichles" value="{{ $au_vichle->new }}">
                        <option value="">حـالة المركبه</option>
                        <option value="جديدة">جديدة</option>
                        <option value="مستعملـة">مستعملـة</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-clipboard-check"></i></span>
                    </div>
                    <select name="status" value="{{ $au_vichle->status }}" required>
                        <option value="" >وضـع المركبة الحالي</option>
                        <option value="مستعملة أقرب للجديدة">مستعملة أقرب للجديدة</option>
                        <option value="مستعملة متضررة قابلة للإصلاح">مستعملة متضررة قابلة لإلصالح</option>
                        <option value="متضرر غيرقابلة للاصلاح">متضرر غيرقابلة للاصلاح</option>
                        <option value="جديده">جديده</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                    </div>
                    <select name="Auction_type" id="mazad_fawery_vic" value="{{ $au_vichle->Auction_type }}" onchange="dispaly_time_vic()" required>
                        <option value="" >إضـافة إلـي</option>
                        <option value="مزاد فورى">مزاد فورى</option>
                        <option value="مزاد مسعر">مزاد مسعر</option>
                        <option value="مزاد مفتوح">مزاد مفتوح</option>
                    </select>
                </div>
                <div class="input-group mb-3" id="period_product_vic">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-folder-plus"></i></span>
                    </div>
                    <select name="product_time" value="{{ $au_vichle->product_time }}" required>
                        <option value="0" >إتحديد الومن</option>
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
                        <option value="1">بضمـان</option>
                        <option value="0">بـدون  ضمـان</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-images"></i></span>
                    </div>
                    <input type="file" name="image" id="c_img" required>
                </div>
                <input type="hidden" name="id" value="{{$au_vichle->id}}">
                <input type="hidden" name="ownerID" value="{{Session::get('id')}}">

                <input type="submit" name="add_vichles" value="إضـافـة" class="btn btn-outline-primary btn-block btn_sub">

            </form>
            <!-- ======================================== -->
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
