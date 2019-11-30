

@if (empty(Session::get('id')))
    <!-- start small-head -->
    <section class="small-head wow fadeInDown" id="small-head">
        <div class="container">
            <div class="left">
                <ul class="infolink">
                    <li class="flo-right"><a class="colorwhite domain" href="#">بحث</a></li>
                    <li class="flo-right"><a class="colorwhite qwk-link" href="#">معلومات عنا</a></li>
                    <li class="flo-right"><a class="colorwhite qwk-link" href="#">حزم</a></li>

                </ul>
            </div>

            <div class="right">
                <a class="colorwhite qwk-link" href="" data-toggle="modal" data-target="#login"><i class="fas fa-sign-in-alt"></i> تسجيل الدخول</a>
                <a class="colorwhite qwk-link" href="" data-toggle="modal" data-target="#register"><i class="fas fa-lock-open"></i> تسجيل</a>
            </div>
        </div>
    </section>
    <div id="login" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> تسجيل الدخول</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                </button>
            </div>
            <div class="cl"></div>
            <div class="modal-body">
                <form action="{{url('/logindata')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <!-- <label for="">الإسم </label> -->
                        <input type="text" name="email" placeholder="إسم المستخدم / البريد الإلكتروني "/>
                    </div>
                    <div class="form-group" >
                        <!-- <label for="">الرقم السري</label> -->
                        <input type="password" name="pass" placeholder="الرقم السري" />
                    </div>
                    <div class="form-group" >
                        <input  class="btn btn-primary" type="submit" value="دخول">
                    </div>
                    <p class="text-center"><a href="#">هل نسيت كلمة المرور ؟</a></p>
                </form>
                <p class="text-center hz-ln" style="display:
                            block">ليس لديك حساب ؟</p>

                <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#register"> أنشئ حساب جديد </button>
            </div>
        </div>
    </div>
</div>
    <!-- ---------------------------------------------------------------------------------------- -->
    <!-- -----------------------------Modal Register----------------------------------------------------------- -->
    <div id="register" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> تسجيل البيانات</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                </button>
            </div>
            <div class="cl"></div>
            <div class="modal-body">
                <form action="{{url('/registerdata')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="fname" placeholder="الإسـم الأول " style="border-left: 1px solid #0275d8;" required/>
                            <input type="text" name="lname" placeholder="الإسـم الأخير" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="username" type="text" name="user" placeholder="إسم المستخـدم" required/>
                        <div id="status"></div>
                    </div>
                    <!-- <img src="sp3.png"  alt=""> -->
                    <div class="form-group">
                        <input type="email" name="email" placeholder="البريـد الإلكترونـي" required/>
                    </div>
                    <div class="form-group" >
                        <input id="psw" type="password" name="pass" placeholder="الرقم السري" onblur="checkpassword()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
                        <div id="message">
                            <p style="font-size: 12px;">يجب أن تحتوي كلمة المرور على ما يلي:</p>
                            <span id="letter" class="invalid"><b>lowercase</b></span>
                            <span id="capital" class="invalid"><b>capital (uppercase)</b></span>
                            <span id="number" class="invalid">A <b>number</b></span>
                            <span id="length" class="invalid">Minimum <b>8 characters</b></span>
                        </div>
                    </div>
                    <div class="form-group" >
                        <input id="r_psw" type="password" name="repass" placeholder=" تأكيد الرقم السري" onblur="checkpassword()" required/>
                    </div>


                    <div class="form-check" style="margin-top: 10px;">
                        <input type="checkbox" class="form-check-input" value="">
                        <label style="text-indent: 20px;"> الموافقة علي <a href="">الشروط و الأحكام</a></label>
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                        <input id="reg" onblur="checkpassword()" class="btn btn-primary" type="submit" value="تسجيـل">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- start navbar -->

    <nav class="navbar navbar-inverse navbar-top wow fadeInUp" id="navbar">
         <div class="container">
            <!-- Brand and toggle get grouped for better qwk-link display -->
               <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/mesdakia') }}">مصداقية</a>
            </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse1">
                    <ul class="nav navbar-nav navbar-right select text-center">
                        <li class="active" ><a href=" {{ url('/homemesdakia') }}">الصفحة الرئيسية</a></li>
                        <li class="dropdown dropbtn" style="display: none"><a href="{{ url('/vichle') }}">المركبات</a>
                            <div class="dropdown-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4> <b><a href="{{ url('/vichle') }}">المركبات</a></b><hr class="ln"></h4>

                                        <a href="#"> مركبات بحرية</a>
                                        <a href="#"> عربات</a>
                                        <a href="#"> شاحنـات</a>
                                        <a href="#"> سيـارات</a>
                                        <a href="#"> دراجـات ناريـة</a>
                                        <a href="#"> المعلن الجديد</a>
                                    </div>
                                    <div class="col-md-3">
                                        <h4><b>المركبات بحرية </b><hr class="ln"></h4>
                                        <a href="{{ url('/ships') }}"> سفـن</a>
                                        <a href="{{ url('/marine_boots') }}"> بوتات بحرية</a>
                                        <a href="{{ url('/hovercraft') }}"> حوامـات</a>
                                        <a href="{{ url('/jet_ski') }}"> جيـت سكـي</a>
                                        <a href="{{ url('/vehicles_new_advertiser') }}"> المعلن الجديد</a>
                                        <h4><b> الشـاحنات </b><hr class="ln"></h4>
                                        <a href="{{ url('/small_trucks') }}"> شاحنـات صغيرة </a>
                                        <a href="{{ url('/large_trucks') }}"> شاحنـات كبيرة </a>
                                        <a href="{{ url('/trailers') }}"> تريـلات</a>
                                        <a href="{{ url('/trucks_new_advertiser') }}"> المعلن الجديد </a>
                                    </div>
                                    <div class="col-md-3">
                                        <h4><b><a href="{{ url('/cars') }}"> السيـارات</a> </b><hr class="ln"></h4>
                                        <a href="{{ url('/family_cars') }}"> سيـارات عائيليـة</a>
                                        <a href="{{ url('/small_cars') }}"> سيـارات صغيـرة </a>
                                        <a href="{{ url('/buses') }}"> حافـلات</a>
                                        <a href="{{ url('/cars_new_advertiser') }}"> المعلن الجديد</a>
                                        <br><br>
                                        <h4><b> الدرجات الناريـة </b><hr class="ln"></h4>
                                        <a href="{{ url('/two_wheeled') }}"> ثنائية العجـلات </a>
                                        <a href="{{ url('/tricycle') }}">  ثلاثيـة العجـلات </a>
                                        <a href="{{ url('/four_wheel') }}"> رباعيـة العجـلات</a>
                                        <a href="{{ url('/motorcycles_new_advertiser') }}"> المعلن الجديد </a>
                                    </div>
                                    <div class="col-md-3">
                                        <h4><b>العربات</b> <hr class="ln"></h4>
                                        <a href="{{ url('/trailers') }}"> مقطـورات</a>
                                        <a href="{{ url('/carnivals') }}"> كرنفـالات</a>
                                        <a href="{{ url('/hovercraft') }}"> فـود تـرك</a>
                                        <a href="{{ url('/food_turk') }}"> البيـوت المتنقلـة</a>
                                        <a href="{{ url('/wagons_new_advertiser') }}"> المعلن الجديد</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropbtn">
                            <a href="/property">عقارات</a>
                            <div class="dropdown-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4><b>العقارات </b> <hr class="ln"></h4>
                                        <a href="#"> المبـاني</a>
                                        <a href="#"> الأراضـي </a>
                                        <a href="#"> المعلن الجديد</a>
                                    </div>
                                    <div class="col-md-3">
                                        <h4><b> المباني </b> <hr class="ln"></h4>
                                        <a href="{{ url('/villas') }}"> فـلل</a>
                                        <a href="{{ url('/buildings') }}"> مباني</a>
                                        <a href="{{ url('/apartments') }}"> شـقق</a>
                                        <a href="{{ url('/builds_new_advertiser') }}"> المعلن الجديد</a>
                                    </div>
                                    <div class="col-md-3">
                                        <h4><b> الأراضي</b> <hr class="ln"></h4>
                                        <a href="{{ url('/schemes') }}">مخططـات</a>
                                        <a href="{{ url('/land_plots') }}"> قطـع أرضية</a>
                                        <a href="{{ url('/lands_new_advertiser') }}">المعلن الجديد</a>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropbtn">
                            <a href="/jewelry">المجـوهرات</a>
                            <div class="dropdown-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4>المجوهرات <hr class="ln"></h4>
                                        <a href="#"> المـاس</a>
                                        <a href="#"> الـذهب</a>
                                        <a href="#"> الفضـة</a>
                                        <a href="#">المعلن الجديد</a>
                                    </div>
                                    <div class="col-md-3">
                                        <h4><b> الماس</b>  <hr class="ln"></h4>
                                        <a href="{{ url('/stones') }}">أحجـار</a>
                                        <a href="{{ url('/sweets') }}"> حُلـي </a>
                                        <a href="{{ url('/diamond_new_advertiser') }}">المعلن الجديد</a>
                                        <h4> <b>الفضـة</b><hr class="ln"></h4>
                                        <a href="{{ url('/mills_and_alloys') }}">عُمـلات و سبـائك</a>
                                        <a href="{{ url('/trinkets') }}">  حُلـي رجالي </a>
                                        <a href="{{ url('/Women_jewelery') }}">  حُلـي نسـائية </a>
                                        <a href="{{ url('/silver_new_advertiser') }}">المعلن الجديد</a>
                                    </div>
                                    <div class="col-md-3">
                                        <h4><b>الذهب</b> <hr class="ln"></h4>
                                        <a href="{{ url('/bullion') }}">السبـائك</a>
                                        <a href="{{ url('/currencies') }}">العمـلات</a>
                                        <a href="{{ url('/ornaments') }}"> الحُلـي</a>
                                        <a href="{{ url('/gold_new_advertiser') }}">المعلن الجديد</a>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropbtn">
                            <a href="/highvalue">أخري ثمينة</a>
                            <div class="dropdown-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4>أخري ثمينة <hr class="ln"></h4>
                                        <a href="{{ url('/bullion') }}"> لوحـات</a>
                                        <a href="{{ url('/hours') }}">سـاعـات</a>
                                        <a href="{{ url('/animals') }}"> حيـوانـات</a>
                                        <a href="{{ url('/antiques') }}">تحـف</a>
                                        <a href="{{ url('/other') }}">أخري</a>
                                        <a href="{{ url('/others_precious') }}">المعلن الجديد</a>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ url('/mazadat') }}">المزادات</a></li>
                        <li><a href="{{ url('/sales') }}">المزادات الفورية</a></li>
                        <a class="share" href="{{ url('/mesdakia') }}"><i style="margin-right: 0; font-size: 12px;" class="fas fa-plus"></i> انشر اعلان</a>
                    </ul>

                </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- end navbar -->
@else
    <!-- start small-head -->
    <section class="small-head wow fadeInDown" id="small-head">
        <div class="container">
            <div class="left">
                <ul class="infolink">
                    <li class="flo-right"><a class="colorwhite domain" href="#">بحث</a></li>
                    <li class="flo-right"><a class="colorwhite qwk-link" href="#">معلومات عنا</a></li>
                    <li class="flo-right"><a class="colorwhite qwk-link" href="#">حزم</a></li>

                </ul>
            </div>

            <div class="right">
                <a class="colorwhite qwk-link" href="{{url('/add_product')}}"><i class="fas fa-sign-in-alt"></i>{{Session::get('name')}}</a>
            </div>
        </div>
    </section>
       <!-- start navbar -->
    <nav class="navbar navbar-inverse navbar-top wow fadeInUp" id="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better qwk-link display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--              <a class="navbar-brand" href="#"><span class="logo">Waslla</span>Courses</a>-->
                <a class="navbar-brand" href="{{ url('/mesdakia') }}">مصداقية</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right select text-center">
                    <li class="active" ><a href=" {{ url('/homemesdakia') }}">الصفحة الرئيسية</a></li>
                    <li class="dropdown dropbtn"><a href="{{ url('/vichle') }}">المركبات</a>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4> <b><a href="{{ url('/vichle') }}">المركبات</a></b><hr class="ln"></h4>

                                    <a href="#"> مركبات بحرية</a>
                                    <a href="#"> عربات</a>
                                    <a href="#"> شاحنـات</a>
                                    <a href="#"> سيـارات</a>
                                    <a href="#"> دراجـات ناريـة</a>
                                    <a href="#"> المعلن الجديد</a>
                                </div>
                                <div class="col-md-3">
                                    <h4><b>المركبات بحرية </b><hr class="ln"></h4>
                                    <a href="{{ url('/ships') }}"> سفـن</a>
                                    <a href="{{ url('/marine_boots') }}"> بوتات بحرية</a>
                                    <a href="{{ url('/hovercraft') }}"> حوامـات</a>
                                    <a href="{{ url('/jet_ski') }}"> جيـت سكـي</a>
                                    <a href="{{ url('/vehicles_new_advertiser') }}"> المعلن الجديد</a>
                                    <h4><b> الشـاحنات </b><hr class="ln"></h4>
                                    <a href="{{ url('/small_trucks') }}"> شاحنـات صغيرة </a>
                                    <a href="{{ url('/large_trucks') }}"> شاحنـات كبيرة </a>
                                    <a href="{{ url('/trailers') }}"> تريـلات</a>
                                    <a href="{{ url('/trucks_new_advertiser') }}"> المعلن الجديد </a>
                                </div>
                                <div class="col-md-3">
                                    <h4><b><a href="{{ url('/cars') }}"> السيـارات</a> </b><hr class="ln"></h4>
                                    <a href="{{ url('/family_cars') }}"> سيـارات عائيليـة</a>
                                    <a href="{{ url('/small_cars') }}"> سيـارات صغيـرة </a>
                                    <a href="{{ url('/buses') }}"> حافـلات</a>
                                    <a href="{{ url('/cars_new_advertiser') }}"> المعلن الجديد</a>
                                    <br><br>
                                    <h4><b> الدرجات الناريـة </b><hr class="ln"></h4>
                                    <a href="{{ url('/two_wheeled') }}"> ثنائية العجـلات </a>
                                    <a href="{{ url('/tricycle') }}">  ثلاثيـة العجـلات </a>
                                    <a href="{{ url('/four_wheel') }}"> رباعيـة العجـلات</a>
                                    <a href="{{ url('/motorcycles_new_advertiser') }}"> المعلن الجديد </a>
                                </div>
                                <div class="col-md-3">
                                    <h4><b>العربات</b> <hr class="ln"></h4>
                                    <a href="{{ url('/trailers') }}"> مقطـورات</a>
                                    <a href="{{ url('/carnivals') }}"> كرنفـالات</a>
                                    <a href="{{ url('/hovercraft') }}"> فـود تـرك</a>
                                    <a href="{{ url('/food_turk') }}"> البيـوت المتنقلـة</a>
                                    <a href="{{ url('/wagons_new_advertiser') }}"> المعلن الجديد</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropbtn">
                        <a href="/property">عقارات</a>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4><b>العقارات </b> <hr class="ln"></h4>
                                    <a href="#"> المبـاني</a>
                                    <a href="#"> الأراضـي </a>
                                    <a href="#"> المعلن الجديد</a>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> المباني </b> <hr class="ln"></h4>
                                    <a href="{{ url('/villas') }}"> فـلل</a>
                                    <a href="{{ url('/buildings') }}"> مباني</a>
                                    <a href="{{ url('/apartments') }}"> شـقق</a>
                                    <a href="{{ url('/builds_new_advertiser') }}"> المعلن الجديد</a>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> الأراضي</b> <hr class="ln"></h4>
                                    <a href="{{ url('/schemes') }}">مخططـات</a>
                                    <a href="{{ url('/land_plots') }}"> قطـع أرضية</a>
                                    <a href="{{ url('/lands_new_advertiser') }}">المعلن الجديد</a>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropbtn">
                        <a href="/jewelry">المجـوهرات</a>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>المجوهرات <hr class="ln"></h4>
                                    <a href="#"> المـاس</a>
                                    <a href="#"> الـذهب</a>
                                    <a href="#"> الفضـة</a>
                                    <a href="#">المعلن الجديد</a>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> الماس</b>  <hr class="ln"></h4>
                                    <a href="{{ url('/stones') }}">أحجـار</a>
                                    <a href="{{ url('/sweets') }}"> حُلـي </a>
                                    <a href="{{ url('/diamond_new_advertiser') }}">المعلن الجديد</a>
                                    <h4> <b>الفضـة</b><hr class="ln"></h4>
                                    <a href="{{ url('/mills_and_alloys') }}">عُمـلات و سبـائك</a>
                                    <a href="{{ url('/trinkets') }}">  حُلـي رجالي </a>
                                    <a href="{{ url('/Women_jewelery') }}">  حُلـي نسـائية </a>
                                    <a href="{{ url('/silver_new_advertiser') }}">المعلن الجديد</a>
                                </div>
                                <div class="col-md-3">
                                    <h4><b>الذهب</b> <hr class="ln"></h4>
                                    <a href="{{ url('/bullion') }}">السبـائك</a>
                                    <a href="{{ url('/currencies') }}">العمـلات</a>
                                    <a href="{{ url('/ornaments') }}"> الحُلـي</a>
                                    <a href="{{ url('/gold_new_advertiser') }}">المعلن الجديد</a>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropbtn">
                        <a href="/highvalue">أخري ثمينة</a>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>أخري ثمينة <hr class="ln"></h4>
                                    <a href="{{ url('/bullion') }}"> لوحـات</a>
                                    <a href="{{ url('/hours') }}">سـاعـات</a>
                                    <a href="{{ url('/animals') }}"> حيـوانـات</a>
                                    <a href="{{ url('/antiques') }}">تحـف</a>
                                    <a href="{{ url('/other') }}">أخري</a>
                                    <a href="{{ url('/others_precious') }}">المعلن الجديد</a>
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                </div>
                                <div class="col-md-3">
                                    <img class="img-responsive img_pos"  src="img/misdaqia-logo.png" alt="Chania" width="120" height="120">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ url('/mazadat') }}">المزادات</a></li>
                    <li><a href="{{ url('/sales') }}">المزادات الفورية</a></li>
                    <a class="share" href="{{ url('/mesdakia') }}"><i style="margin-right: 0; font-size: 12px;" class="fas fa-plus"></i> انشر اعلان</a>
                </ul>


            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>
    <!-- end navbar -->
@endif

