<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>الصفحة الرئيسية </title>
  <meta name="description" content="">
  <meta name="author" content="templatemo">
  <!--
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css' ">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">

  <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .bs-example {
      margin: 20px;
    }
  </style>

  <!-- slider -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
    }
  </style>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- Left column -->
  <div class="templatemo-flex-row">
    <div class="templatemo-sidebar" id="navdiv" style="background: #18191b">
      <header class="templatemo-site-header ">
        <div class="square"></div>
        <h1>لوحة المعلومات</h1>
      </header>
      <div class="profile-photo-container">
        <img src="images/elecrticity.jfif" alt="Profile Photo" class="img-responsive">
        <div class="profile-photo-overlay"></div>
      </div>
      <!-- Search box -->

      <div class="mobile-menu-icon">
        <i class="fa fa-bars"></i>
      </div>
      <nav class="templatemo-left-nav">
        <ul>
          <li><h4><a href="index"><i class="fa fa-home fa-fw"></i> الصفحة الرئيسية </a></h4></li>
          <li><h4><a href="readdata"><i class="fa fa-sliders fa-fw"></i> إدخال يدوي لقيم العداد </a></h4></li>
          <li><h4><a href="invoiceFirst"><i class="fa fa-barcode fa-fw"></i> عرض فواتير </a></h4></li>
          <li><h4><a href="charts"><i class="fa fa-bar-chart fa-fw"></i> مخططات الاستهلاك </a></h4></li>
          <li><h4><a href="login"><i class="fa fa-eject fa-fw"></i> تسجيل خروج </a></h4></li>
        </ul>
      </nav>
    </div>
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">
      <div class="templatemo-content-container">
        <div class="col-lg-12 col-md-6">

        </div>
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="text-center">الشركة العامة لكهرباء محافظة دمشق</h3>
          </div>
          <div class="panel-body light-gray-bg">
            <br>
            <div class="row">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                  <div class="item active">
                    <img src="images/pic3.jpg" alt="Flower" width="862" height="180">
                    <div class="carousel-caption">
                      <h3></h3>
                      <p></p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="images/pic.jpg" alt="Chania" width="862" height="180">
                    <div class="carousel-caption">
                      <p></p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="images/pic3.jpg" alt="Flower" width="862" height="180">
                    <div class="carousel-caption">
                      <h3></h3>
                      <p></p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="images/slider4.jpg" alt="Flower" width="862" height="180">
                    <div class="carousel-caption">
                      <h3></h3>
                      <p></p>
                    </div>
                  </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <br>
          </div>


          <div class="templatemo-flex-row flex-content-row">

            <div class="col-lg-4 col-md-4"></div>


          </div>
        </div>
        <div class="row">
          <br>
          <?php $user = Session::get('userData');?>
            @if ($user->admin==0)
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-dashboard  fa-4x"></i>
                    </div>
                    <div class="col-xs-9 text-right ">
                      <div class="huge">
                        <h4>{{$metersCount}}</h4></div>
                      <div>
                        <h4>عدد العدادات</h4> </div>
                    </div>
                  </div>
                </div>
                <a href="addMeter">
                  <div class="panel-footer">
                    <span class="pull-right"><h5>إضافة عداد</h5></span>
                    <span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-red" style="border-color:#E74447">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">
                        <h4>{{$customersCount}}</h4></div>
                      <div>
                        <h4>عدد المشتركين</h4></div>
                    </div>
                  </div>
                </div>
                <a href="addCustomer">
                  <div class="panel-footer ">
                    <span class="pull-right"><h5>إضافة مشترك</h5></span>
                    <span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="panel panel-green" style="border-color:#37A63B">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3" style="padding-top:10px;">
                      <i class="fa fa-users fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">
                        <h4>{{$usersCount}}</h4></div>
                      <div>
                        <h4>عدد المستخدمين</h4></div>
                    </div>
                  </div>
                </div>
                <a href="addUser">
                  <div class="panel-footer">
                    <span class="pull-right"><h5>إضافة مستخدم</h5></span>
                    <span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            @endif
        </div>

      </div>

      <footer class="text-right">
        <p>Copyright &copy; 2018 |
      </footer>
    </div>


    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

    <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.ar.js" charset="UTF-8"></script>


    <!-- Templatemo Script -->
</body>

</html>
