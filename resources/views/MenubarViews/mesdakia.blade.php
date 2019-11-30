@include('Headers.Mesdakia_header');
<section id="sec1" class="sec1">

    <div class="s1_head">
        <h3 class="text-center">مصداقية</h3>
        <video class="wow fadeInLeft" width="100%" height="400" controls>
            <source src="movie.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="s1_content">
        <div class="overlay">
            <div class="row">
                <div class="col-md-6">
                    <p class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".6s">إذا كنت تمتلك حساباً <a href="#">إضغط هنا</a></p>
                    <button class="btn btn-primary btn-block btn-colr wow fadeInDown" data-wow-duration="2s" data-wow-delay=".6s" data-toggle="modal" data-target="#login">دخول</button>
                    <p class="text-center hz-ln wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s"><span> أو</span></p>
                    <button class="btn btn-primary btn-block btn-colr wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s" data-toggle="modal" data-target="#register">سجل الأن</button>
                    <hr>
                    <p class="text-center"> <a href="/homemesdakia"> أرغب في التصفح فقط </a></p>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay=".5s">بماذا يتميز مصداقية عن غيره! <hr class="ln"/></h4>
                    <ul class="s1_list">
                        <li class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".6s">ضمان إتمام الصفقة دون إحتيال </li>
                        <li class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".8s">حفظ حق البائع والمشتري بالتعويض و الجزاء</li>
                        <li class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s"><a href="#" data-toggle="modal" data-target="#mesdaqia">فكـرة عمـل مصداقية</a></li>

                        <!-- ============================================================== -->
                        <div id="mesdaqia" class="modal container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">عن مصداقية</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="font-size: xx-large; ">&times;</span>
                                        </button>

                                    </div>
                                    <div class="cl"></div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>
                                                موقع مصداقية يتألف من ثلاث اقسام رئيسية وهي: )المزاد الفوري, المزاد المفتوح, والمزاد المسعر(.
                                            </li>
                                            <li>المزاد الفوري هو مزاد يتيح للبائع الذي يرغب في بيع منتجه خلال وقت محدد يقوم بتحديده, بأعلى سعر يساوم عليه المشترون.
                                            </li>
                                            <li>المزاد المفتوح هو مزاد يتيح لبائع المنتج ان يعرض منتجه لمدة مفتوحة , بحيث يجب ان يقوم بالتحديث بشكل دوري بعد
                                                عرض المنتج ل 30 يوم, وفي حال عدم التحديث تتم إزالته إلى حين تحديث المنتج.

                                            </li>
                                            <li>المزاد المسعر, في هذا النوع من المزادات سيضع البائع سعراً لمنتجه وسيتاح للمشتري وضع السعر الذي يرغب في دفعه
                                                للمنتج وفي حال موافقة المشتري على سعر البائع ستتم معاملة البيع تلقائيا من موقع مصداقية.
                                            </li>
                                            <li>موقع مصداقية سيقوم بسحب تكلفة المنتجات من المشتري ولن يتم تسليمها للبائع الا بعد ضماننا تسليم المنتج, واشارة كلا
                                                الطرفية الى إتمام البيعة.
                                            </li>
                                            <li>موقع مصداقية يعمل على اخذ نسبة من صفقات البيع مقدارها 2.5 %, ونسبة 5 % من صفقات التأجير. بالإضافة إلى سحب
                                                قيمة غرامية في حال نقض احد الطرفين ميثاق الصفقة, وذلك حسب لائحة الشروط والاحكام.
                                            </li>
                                            <li>يتيح موقع مصداقية للزوار بالاستطلاع على كافة المزادات واستعراضها دون التسجيل في الموقع, إلا في حال رغبة الزائر في
                                                العرض او الشراء سيلزم بالتسجيل ببياناته الصحيحة وذلك حسب لائحة الشروط والاحكام, وسياسة الخصوصية. وفي كلتا
                                                الحالتين سيجبر بتسجيل بيانات الفيزا او الماستر كارد لنتمكن من اجراء لعمليات.
                                            </li>
                                            <li>عدد المزادات التي ستكون قائمة في الموقع ستكون غير محصورة وستتوفر في صفحات مرتبة بشكل تسلسلي, يتمكن فيها
                                                الزائر من استعراضها حال الضغط عليها.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- -----------------------------Modal login----------------------------------------------------- -->

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

</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/slibs/popper.js/1.12.9/umd/popper.min.js"></script>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/scripte.js"></script>
<script src="js/mesdaqiascripte.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>