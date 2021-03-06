
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> أبجد | تسجيل دخول  </title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/style.min.css">
  <link rel="stylesheet" href="dist/css/sign-up.min.css">


  <link rel="stylesheet" href="dist/css/animate.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">


</head>
<body>
  <!-- start navbar -->
    <nav id="nav" class="navbar navbar-default navbar-fixed-top nav" data-spy="affix">
    <!-- start container -->
        <div class="container">
        <div class="clearfix"></div>

        <a class="navbar-brand navbar-right" href="index.php">
        <img alt="Brand" style="display: inline-block;  height: 800%; margin-top: -46px" src="images/Logo3.png">
        </a>
         <div class="navbar-header">
        <!-- navbar collapsing -->
         <button type="button" class="navbar-toggle collapsed navbar-left" data-toggle="collapse" data-target="#abjaaad" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>

         </div>

      <!-- toggling -->
      <div class="collapse navbar-collapse" id="abjaaad">

          <ul class="nav navbar-nav navbar-left">
            <li class="signin"><a href="registration.html">تسجيل <i class="fa fa-user"></i></a></li>
            <li><a href="log-in.php">دخول <i class="fa fa-sign-in"></i></a></li>
            <li><a href="about.html" style="line-height:25px;">عن أبجد</a></li>

          </ul>
      </div><!-- /.navbar-collapse -->
     </div><!-- /.container -->
  </nav>

  <!-- end of navbar -->

  <!-- start form -->
    <div class="form">
        <h2> <i class="fa fa-sign-in"></i> تسجيل دخول  </h2>

        <form action="" method="POST">
            <div class="form-container">


                    <label > البريد الإلكتروني </label>
                    <input type="text" placeholder="ادخل البريد الإلكتروني " name="email" required>


                    <label>كلمة المرو ر </label>
                    <input type="password" placeholder="ادخل كلمة المرور" name="psw" required>


                    <input type="checkbox" checked="checked" > تذكرني

                    <button type="submit" class="logbtn  wow tada " data-wow-duration="1.2s"> دخول </button>

                    <a href="#" id="forgetpass" style="font-size: 15px;" >  هل نسيت كلمة المرور؟ </a>

            </div>
        </form>
        <h4>   ليس لديك حساب ؟ <a href="sign-up.php"> سجل الان </a></h4>

    </div>
<!-- end form -->

 <!-- start of footer -->
 <section class="footer text-center">
    <div class="overlay">
      <div class="container">
        <ul class="list-unstyled footer-links">
          <li><a href="req-course.html">طلب كورس</a></li>
          <li><a href="privacy.html">سياسة الخصوصية</a></li>
          <li><a href="contact.html">تواصل معنا</a></li>
        </ul>
        <br>
        <ul class="list-unstyled social-icons">

            <li><a href="https://twitter.com/AbjadSha"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCcGcQ7BdUNBTWt9f67CbgDA?disable_polymer=true"><i class="fa fa-youtube fa-lg"></i></a></li>
            <li><a href="https://www.facebook.com/%D8%A3%D8%A8%D8%AC%D8%AF-Abjad-144979682860981/?modal=admin_todo_tour"><i class="fa fa-facebook fa-lg"></i></a></li>
        </ul>

        <div class="copyrights">
          <p>أبجد <span>8</span> <span>1</span> <span>0</span> <span>2</span></p>
          <p>جميع الحقوق محفوظة &copy;</p>
        </div>
      </div>
    </div>

  </section>
  <!-- end of footer -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="dist/js/main.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script> new WOW().init(); </script>



</body>
</html>
