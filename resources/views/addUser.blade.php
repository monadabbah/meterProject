<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>إضافة مستخدم</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg" />
  <meta name="description" content="">
  <meta name="author" content="templatemo">
  <!--
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css' ">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <link href="css/metisMenu.min.css" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>


  <link rel="stylesheet" href="assets/css/form-elements.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- chart -->

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
          <li><h4 align="right"><a href="index"><i class="fa fa-home fa-fw"></i> الصفحة الرئيسية </a></h4></li>
          <li><h4 align="right"><a href="readdata"><i class="fa fa-sliders fa-fw"></i> إدخال يدوي لقيم العداد </a></h4></li>
          <li><h4 align="right"><a href="invoiceFirst"><i class="fa fa-barcode fa-fw"></i> عرض فواتير </a></h4></li>
          <li><h4 align="right"><a href="charts"><i class="fa fa-bar-chart fa-fw"></i> مخططات الاستهلاك </a></h4></li>
          <li><h4 align="right"><a href="login"><i class="fa fa-eject fa-fw"></i> تسجيل خروج </a></h4></li>
        </ul>
      </nav>
    </div>
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">

      <div class="templatemo-content-container">
        <div class="templatemo-flex-row flex-content-row">

          <div class="templatemo-content-widget  col-2 text-center">
            <div class="col-sm-1 middle-border "></div>

            <div class="col-sm-1 "></div>

            <div class="col-sm-6 col-md-offset-1 ">
              <div class="row">
                <div class="form-box  ">
                  <div class="panel panel-green">
                    <div class="panel-heading">
                      <h3 class="margin-bottom-10" align="center" style="color: white">يرجى ملء البيانات اللازمة</h3>
                    </div>
                    <div class="panel-body">

                      <div class="form-bottom" style="background-color:white" align="center">
                        <form role="form" action="addUser" method="post" class="registration-form">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                            <label class="sr-only" for="username">UserName</label>
                            <input type="text" name="username" placeholder=" اسم المستخدم" class="form-first-name form-control" id="form-first-name">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="text" name="password" placeholder="كلمة المرور " class="form-last-name form-control" id="form-last-name">
                          </div>
						              <div class="form-group">
                            <label class="control-label templatemo-block" for="usertype" align="right">نوع المستخدم</label>
                            <select class="form-control " name="usertype">
                              <option value="0">مدير</option>
                              <option value="1">مستخدم عادي</option>
                            </select>
                          </div>
                          <div align="center">
                            <label for="message" style="color:red">
                              <?php echo $msg; ?>
                            </label>
                          </div>
                          <button type="submit" class="btn" style="background-color:#2E6C3C">إضافة </button>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

    <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>




    <!-- Flot Charts JavaScript -->

</body>

</html>
