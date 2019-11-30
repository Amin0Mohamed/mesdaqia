@include('Headers.homeMesdakia_header')
@include('NavbarMenuBlade.Menublades')

<section id="home" class="home" style="background-image: url('../productimages/{{ $con->image  }}');">

            <div class="overlay">
                <div class="container">
                    <div class="h_item">
                        <h3 class="text-center wow fadeInDown" data-wow-duration="2s">
                                    {{ $con->content }}
                            <hr class="ln"/> </h3>
                        <div class="h_content">
                            <button class="btn btn-default btn_cl1 wow fadeInRight" data-wow-duration="2s">ابحث و اشتري الأن </button>
                            <button class="btn btn-default btn_cl2 wow fadeInLeft" data-wow-duration="2s">نشر إعلان مجاني </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ----------------------------------------------- -->
        <section id="search" class="search">
            <div class="container">
                <div class="input-group">
                    <select name="choose" id="sel" class="wow fadeInRight btn" data-wow-duration="2s">
                        <option value="1">حدد إختيارا</option>
                        <option value="2">المركبات</option>
                        <option value="3">العقارات</option>
                        <option value="4">المجوهرات</option>
                        <option value="5">أخري ثمينة</option>
                        <option value="6">المزادات</option>
                        <option value="7">المزادات الفورية</option>
                    </select>
                    <input type="text" name="search" class="wow fadeInDown btn" data-wow-duration="2s" placeholder="عن ماذا تبحث ..">
                    <input class="btn btn-default btn_cl1 wow fadeInLeft"  data-wow-duration="2s" type="button" value="إبحث عن ">
                </div>
            </div>
        </section>

<!--- ********************* start Auction ***********************-->
<section class="Auction">
    <div class="container">
        <div>
            <h3>المزادات الأكثر مشاهدة</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item-up wow bounceInRight" data-wow-duration="2s" data-wow-offset="300">
                    <a href="#"><button class="btn btn-up">مركبات</button></a>
                    <div class="product">
                        <img  src="/productimages/{{$vichles->image}}">
                        <div class="details-pro">
                            <p>
                                {{$vichles->type}}
                            </p>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <button tabindex="0" type="button" style="">
                                        <div class="unlike">
                                            <svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(119, 119, 119); height: 24px; width: 24px; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;">
                                                <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="like hidden" style="display: none;">
                                            <svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(246, 186, 1); height: 24px; width: 24px; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;">
                                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                                                </path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-xs-4">اعلى سعر:{{$vichles->price}}
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item-up wow bounceInUp" data-wow-duration="2s" data-wow-offset="300">
                    <a href="#"><button class="btn btn-up">عقارات</button></a>

                    <div class="product">
                        <img src="/productimages/{{$propertys->image}}">
                        <div class="details-pro">
                            <p>
                                {{$propertys->type}}
                            </p>
                            <p>
                                {{$propertys->area}}
                            </p>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <button tabindex="0" type="button" style="">
                                        <div class="unlike">
                                            <svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(119, 119, 119); height: 24px; width: 24px; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;">
                                                <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="like hidden" style="display: none;">
                                            <svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(246, 186, 1); height: 24px; width: 24px; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;">
                                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                                                </path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-xs-4">اعلى سعر:{{$propertys->price}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item-up wow bounceInUp" data-wow-duration="2s" data-wow-offset="300">
                    <a href="#"><button class="btn btn-up">مجوهرات</button></a>

                        <div class="product">
                            <img src="/productimages/{{$jewelrys->image}}">
                            <div class="details-pro">
                                <p>
                                    {{$jewelrys->type}}
                                </p>
                                <p>
                                    {{$jewelry->model}}
                                </p>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <button tabindex="0" type="button" style="">
                                            <div class="unlike">
                                                <svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(119, 119, 119); height: 24px; width: 24px; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;">
                                                    <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="like hidden" style="display: none;">
                                                <svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(246, 186, 1); height: 24px; width: 24px; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;">
                                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-xs-4">اعلى سعر:{{$jewelrys->price}}
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item-up wow bounceInLeft" data-wow-duration="2s" data-wow-offset="300">
                    <a href="#"><button class="btn btn-up">أخري</button></a>

                        <div class="product">
                            <img src="/productimages/{{$highvalues->image}}">
                            <div class="details-pro">
                                <p>
                                    {{$highvalues->type}}
                                </p>
                                <p>
                                    {{$highvalues->model}}
                                </p>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <button tabindex="0" type="button" style="">
                                            <div class="unlike">
                                                <svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(119, 119, 119); height: 24px; width: 24px; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;">
                                                    <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="like hidden" style="display: none;">
                                                <svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(246, 186, 1); height: 24px; width: 24px; user-select: none; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;">
                                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-xs-4">اعلى سعر:{{$highvalues->price}}
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
            <a href="#" class="text-center"><button class="btn btn-read">عرض المزيد</button></a>
        </div>
    </div>
</section>
<!--- ********************* end Auction ***********************-->
<section id="advertise" class="advertise">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <img src="/productimages/{{$adv->image}}" alt="error" class="img-responsive wow fadeInUp" data-wow-duration="2s"
                         data-wow-delay=".5s" width="400px" height="120px">
                </div>
                <div class="col-xs-6">
                    <h4 class="text-center wow fadeInDown" data-wow-duration="2s">{{$adv->title}}<hr class="ln"/></h4>
                    <p class="text-center">{{$adv->content}}</p>
                    <a class="btn btn-info w-25 d-block m-auto" href="{{$adv->url}}">مشاهده المزيد</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================================subscribe==================================================== -->
<section id="subscribe" class="subscribe">
    <div class="container">
        <h4 class="text-center"><b> عروض و باقـات مصداقية </b><hr class="ln"/></h4>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <h6 class="text-center">الباقـة الأولـي ( جولـد )</h6>
                    <p class="text-center"> مميـزات باقـة الجولد </p>

                    <p class="price_sub text-center">ر.س 80 / شهرياَ</p>
                    <ul class="list_sub">
                        <li>فترة انتظار نشر مزادك تتراوح من 2 -4 ساعات</li>
                        <li> ظهور مزادك في الصفحات الأولـي</li>
                        <li>الدعـم المباشـر من الموقـع</li>
                        <li></li>
                    </ul>
                    @if(Session::get('id') > 0)
                     <a href="{{ url('/sunshine_continue_pay',['ownerID'=>Session::get('id'),'price'=>80,'category'=>'golden' ]) }}" class="btn btn-primary  btn-block">@lang('site.subscr')</a>
                    @else
                        <a href="{{ url('/logindata') }}" class="btn btn-primary  btn-block">@lang('site.subscr')</a>
                    @endif
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <h6 class="plat text-center" >الباقـة الثانيـة ( بلاتينيوم )</h6>
                    <p class="text-center"> مميـزات باقـة البلاتينيوم </p>

                    <p class="price_sub text-center">ر.س 110 / شهرياَ</p>
                    <ul class="list_sub">
                        <li>نشـر مزادك فوراَ</li>
                        <li> أولوية ظهور مزادك في الصفحات الأولـي</li>
                        <li></li>متابعـة خاصـة من الموقع</li>
                        <li>وسائل البيع و الشراء أكثر مصداقية</li>
                    </ul>
                    @if(Session::get('id') > 0)
                      <a href="{{ url('/sunshine_continue_pay',['ownerID'=>Session::get('id'),'price'=>110,'category'=>'Platinum' ]) }}" class="btn btn-primary  btn-block">@lang('site.subscr')</a>
                    @else
                        <a href="{{ url('/logindata') }}" class="btn btn-primary  btn-block">@lang('site.subscr')</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
<hr>
<!-- ================================================================================================ -->
<section id="live_s" class="live_s">
    <div class="container">
        <h4 class="text-center"><b> بـث مبـاشـر للمـزادات </b><hr class="ln"/></h4>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-12">
                <h6 class="text-center"><button class="v_live" onclick="window.location='/livestream'">الذهاب الى البث المباشر</button>
                </h6>
            </div>

        </div>
    </div>
</section>


<!--- ********************* start testimonial ***********************-->
<section class="testimonial">
    <div class="overlay">
        <div class="container">
            <div>
                <h3>أراء العملاء <hr class="ln"/></h3>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="2s" data-wow-offset="200">
                    <div class="message">
                        <p>ترتكز فلسفتنا علي ثلاثةمبادئ أساسية التنوع و الشراكة و المبادئ الأخلاقية ..ترتكز فلسفتنا علي ثلاثةمبادئ أساسية التنوع و الشراكة و المبادئ الأخلاقية ..</p>
                    </div>
                    <div class="infoperson">
                        <div class="name-per">
                            <h5>معاذ محسن</h5>
                            <div class="rating rating2"><!--
                                    --><a href="#5" title="Give 5 stars">★</a><!--
                                    --><a href="#4" title="Give 4 stars">★</a><!--
                                    --><a href="#3" title="Give 3 stars">★</a><!--
                                    --><a href="#2" title="Give 2 stars">★</a><!--
                                    --><a href="#1" title="Give 1 star">★</a>
                            </div>
                        </div>
                        <img src="img/moaaz.jpg">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="2s" data-wow-offset="200">
                    <div class="message">
                        <p>ترتكز فلسفتنا علي ثلاثةمبادئ أساسية التنوع و الشراكة و المبادئ الأخلاقية ..ترتكز فلسفتنا علي ثلاثةمبادئ أساسية التنوع و الشراكة و المبادئ الأخلاقية ..</p>
                    </div>
                    <div class="infoperson">
                        <div class="name-per">
                            <h5>يوسف محسن</h5>
                            <div class="rating rating2"><!--
                                    --><a href="#5" title="Give 5 stars">★</a><!--
                                    --><a href="#4" title="Give 4 stars">★</a><!--
                                    --><a href="#3" title="Give 3 stars">★</a><!--
                                    --><a href="#2" title="Give 2 stars">★</a><!--
                                    --><a href="#1" title="Give 1 star">★</a>
                            </div>
                        </div>
                        <img src="img/moaaz.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="n_help  wow fadeInRight" data-wow-duration="2s" data-wow-delay=".5s">
            <span data-toggle="modal" data-target="#quest" data-toggle="tooltip" data-placement="left" title="هل تحتاج مساعدة"><i class="fa fa-question"></i></span>
            <!-- Modal -->
            <div id="quest" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"  style="display : inline">المساعدة</h5>
                            <button style="float:left" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                            </button>

                        </div>
                        <div class="cl"></div>
                        <img src="img/scroll-up2.png" alt="" class="logo_m" srcset="">
                        <div class="modal-body">
                            <h4 class="text-center"> أهـلا بـك <hr class="ln"/></h4>
                            <p class="text-center">تحتاج مساعدة ؟ إتصل بفريق الدعم علي مدار 24 ساعة لمعرفة أي شئ قد تحتاجة . <br/>
                                سنجيب لك غلي الفور .
                            </p>
                            <form action="/putsupport" method="post">
                                {{csrf_field()}}
                                <textarea name="content" id="msg1" placeholder="أضف تعليقك" cols="50" rows="5"></textarea>
                                <input type="text" class="email_user" name="email" placeholder="اخل الايميل">
                                <input type="hidden" name="ownerID" value="{{Session::get('id')}}">
                                <input type="submit" class="msg_user" value="إرسـال">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
        </div>


        <div class="n_help wow fadeInRight"data-wow-duration="2s" data-wow-delay=".75s">
            <span data-toggle="modal" data-target="#comment" data-toggle="tooltip" data-placement="left" title="أضف تعليقك"><i class="fa fa-comment-alt"></i></span>
            <!-- Modal -->
            <div id="comment" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"  style="display : inline">آراء العملاء</h5>
                            <button style="float:left" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                            </button>

                        </div>
                        <div class="cl"></div>
                        <div class="modal-body">
                            <form action="/putmessage" method="post">
                                {{csrf_field()}}
                                <h4 class="text-center">رأيـك يهمنـا <hr class="ln"/></h4>
                                <p>اتـرك لنا تعليقك : </p>
                                <textarea name="content" placeholder="أضف تعليقك" cols="50" rows="5"></textarea>
                                <input type="text" class="email_user" name="email" placeholder="اخل الايميل">
                                <input type="hidden" name="ownerID" value="{{Session::get('id')}}">
                                <input type="submit" class="msg_user" value="إرسـال">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
        </div>
        <!-- Modal -->
        @if(!empty(Session::get('id')))
            <div class="chat_msg">
            <div id="chat" class="form-popup">
                <form action="/chatting" method="post" class="">
                    {{csrf_field()}}
                    <div class="chat">
                        <div class="chat-header">
                            <p class="chat-header__name">المحـادثات
                                <button onclick="closeForm()" style="float:left" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                                </button>
                        </div>
                        <div class="chat-history">
                            @foreach($questions as $question)

                                <div class="chat-item chat-item-me">

                                <div class="messg">
                                    <span class="message__user-name message__other">{{Session::get('name')}}</span>
                                    <p class="message__text message__text-other" style="color: #09c;">{{$question->question}}</p>
                                </div>
                                <img class="chat-item__img" src="img/ayad.jpg" alt="avatar">
                            </div>
                                <div class="chat-item chat-item-me">

                                    <div class="messg">
                                        <span class="message__user-name message__other">admin</span>
                                        <p class="message__text message__text-other" style="color: #f50;">{{$question->answer}}</p>
                                    </div>
                                    <img class="chat-item__img" src="img/ayad.jpg" alt="avatar">
                                </div>
                            @endforeach
                        </div>
                        <div class="chat-controls">
                            <div class="chat-controls-buttons">
                                <input type="text" name="messagechat" placeholder="اكتب رسالة">
                                <input type="hidden" name="id" value="{{Session::get('id')}}">
                                <input type="submit" value="Send" class="chat-controls-buttons__send">
                                <div class="chat-controls-buttons-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            <div>
            <span onclick="openForm()" data-toggle="tooltip" data-placement="left" title="محـادثة"><i class="fa fa-comment-alt" id="chat_icon" style="display: inline; color: #fff; font-size: 30px; background: #f48639; line-height: 55px;"></i>
            </span>
            </div>
        @endif
    </div>
</section>
<!--- ********************* end testimonial ***********************-->


@include('footer.footer_website');
