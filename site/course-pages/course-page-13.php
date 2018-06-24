<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> أبجد  </title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../dist/css/style.min.css">
  <link rel="stylesheet" href="../dist/css/course-page.min.css">


  <link rel="stylesheet" href="../dist/css/animate.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/icon.ico">

</head>
<body>
  <!-- start navbar -->
    <nav id="nav" class="navbar navbar-default navbar-fixed-top nav" data-spy="affix">
    <!-- start container -->
        <div class="container">
        <div class="clearfix"></div>

        <a class="navbar-brand navbar-right" href="../index.php">
        <img alt="Brand" style="display: inline-block;  height: 800%; margin-top: -46px" src="../../images/Logo3.png">
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
            <li class="signin"><a href="../registration.html">تسجيل <i class="fa fa-user"></i></a></li>
            <li><a href="../login.html">دخول <i class="fa fa-sign-in"></i></a></li>
            <li><a href="../about.html" style="line-height:25px;">عن أبجد</a></li>

          </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>
<!-- end nav-->

<div class="course">
    <div class="container">

        <h3>التصنيف> <a href="#" style="font-size:18px">المحاضرة </a></h3>

        <div class='intro-course'>

          <div class='embed-responsive embed-responsive-16by9'>
            <iframe id="hyperRedirect" class='embed-responsive-item' src='https://www.youtube.com/embed/fEvyipju8bc?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>

          </div>
        </div>
    </div>

    <div class="ul-nav row">
        <ul class="nav nav-tabs">

          <li class="col-lg-1 col-md-2 col-sm-3 col-xs-6">
               <div class="love">
                 <span class="heart"></span>
               </div>
           </li>
            <li class="col-lg-2 col-md-4 col-sm-3 col-xs-6"><a data-toggle="tab" href="#lecs" > المحاضرات </a></li>
            <li class="col-lg-2 col-md-4 col-sm-3 col-xs-6"><a data-toggle="tab" href="#ques" > الأسئلة </a></li>
            <li  class="col-lg-2 col-md-4 col-sm-2 col-xs-6"><a data-toggle="tab" href="#instructor"> المحاضر </a></li>
            <li class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <span> تقييمك </span>
                <div class="rating">
                    <span class="rating-star" data-value="5"></span>
                    <span class="rating-star" data-value="4"></span>
                    <span class="rating-star" data-value="3"></span>
                    <span class="rating-star" data-value="2"></span>
                    <span class="rating-star" data-value="1"></span>
                </div>
             </li>

         </ul>
    </div>
    <div class="tab-content">
        <div id="lecs" class="tab-pane in active">
        <h4> اسم الكورس </h4>
        <div class="cont">
            <h3> ابدا مع </h3>
            <div class="lecs-list  wow slideInUp col-xs-12 ">
            <a id = "les1" href="#"> <i class="fa fa-video-camera"></i>  المحاضرة الاولي</a>
            <a id = "les2" href="#"> <i class="fa fa-video-camera"></i> المحاضرة الثانية </a>
            <a id = "les3" href="#"> <i class="fa fa-video-camera"></i> المحاضرة الثالثة</a>
            <a id = "les4" href="#"> <i class="fa fa-video-camera"></i> المحاضرة الرابعة </a>
            <a id = "les5" href="#"> <i class="fa fa-video-camera"></i> المحاضرة الخامسة</a>
            <a id = "les6" href="#"> <i class="fa fa-video-camera"></i> المحاضرة السادسة </a>


            </div>
         </div>
    </div>


 </script>
    <div id="ques" class="tab-pane ">
        <div class="ques container">
            <h4> الاسئلة </h4>
            <div class="cont">

               <!-- search -->
             <div class="search-group input-group">
                <input class="search-input " type="text" placeholder="ابحث عن سؤال ..."/>
                <button class="button button-brand-primary button-search">ابحث</button>
              </div>
              <!-- end search -->
              <h4 class="or"> أو </h4>
              <div>
                <h4 style="display:inline-block"> اسأل سؤال </h4>
                <textarea class="que"> </textarea>
                <button type="button" class="send" action="" method="POST"> إرسال </button>
              </div>
            </div>
        </div>
    </div>


    <div id="instructor" class="tab-pane">

        <div class="cont inst">

            <img src="../images/007.png">
                <h4> اسم المحاضر </h4>
                <p> معلومات عن المحاضر </p>

        </div>
     </div>

   </div>
</div>


  <!-- start of footer -->
 <section class="footer text-center">
    <div class="overlay">
      <div class="container">
        <ul class="list-unstyled footer-links">
          <li><a href="../req-course.html">طلب كورس</a></li>
          <li><a href="../privacy.html">سياسة الخصوصية</a></li>
          <li><a href="../contact.html">تواصل معنا</a></li>
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
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/crspage/crspage9.js"></script>
  <script src="../js/wow.min.js"></script>
  <script> new WOW().init(); </script>



</body>
</html>
