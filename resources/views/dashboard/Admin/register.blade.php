 <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>مصداقيـة</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Changa|Katibeh|Lalezar|Reem+Kufi|Tajawal&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <script src="{{asset('js/bootstrap-4.js')}}"></script>
    <script src="{{asset('js/bootstrap.min-4.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min-4.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min-4.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/loginstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

</head>
<body>

<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 ph">
                <img src="{{asset('img/img1.png')}}"class="img-responsive img-fluid mx-auto d-block" width="100%;" alt="not found">
            </div>
            <div class="col-sm-6 col-md-8 log">
                <img src="{{asset('img/logo2.png')}}" class="img-responsive img-fluid mx-auto d-block" alt="error">
                <h4 class="text-center">تسجيـل جديد</h4> <hr class="ln">
                <form action="{{route('dashboard.registeradmin')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-element">
                       <input type="text" placeholder="name" name="name" placeholder="أدخل الاسم" required>
                    </div>
                    <div class="form-element">
                        <input type="email" placeholder="email" name="email" placeholder="أدخل الايميل" required>
                    </div>
                    <div class="form-element">
                        <input type="file" placeholder="image" name="image" style="display: block;margin: auto;width: 100%;" required>
                    </div>
                    <div class="form-element">
                        <input type="password" placeholder="password" name="password" placeholder="أدخل الرقم السري" required>
                    </div>
                    <div class="form-element">
                        <input type="password" placeholder="c_password" name="c_password" placeholder="أدخل تاكيد الرقم السري" required>
                    </div>
                    <div class="form-element"  >
                        <select name="Authorize" style="display: block;margin: auto;width: 100%;"  required>
                            <option value="">أدخل الصلاحيه</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <button type="submit" value="register" class="btn btn-success submit">تسجيـل الدخـول</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ------------------------------------------start footer----------------------------- -->
<footer class="footer">
    <div class="container">
        <div class="social">
            <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
        </div>
        <p>Copyright © 2019. Debug Space Software Ltd T/A Logit.io - Company Reg: 07EM Shebien<span class="design"> Designed by <a href="#">Debug Space Team</a></span>
        </p>
        <!-- <ul class="footer_list">
            <li>Contact US</li>
            <li>Privacy</li>
            <li>Security</li>
            <li>Term</li>
        </ul> -->
    </div>
</footer>
<!-- --------------------------------------------end footer--------------------------- -->

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/scripte.js')}}"></script>
<script src="{{asset('js/code.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}js/Waslla.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>
