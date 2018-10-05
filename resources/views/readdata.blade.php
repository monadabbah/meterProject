<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>إدخال يدوي لقيم العداد</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">
    <link href="css/metisMenu.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
    
  <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/templatemo-script.js"></script>
  <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/moment.js" ></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.ar.js" charset="UTF-8"></script>
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
    <div class="templatemo-sidebar">
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
          <li>
            <h4><a href="index"><i class="fa fa-home fa-fw"></i> الصفحة الرئيسية </a></h4></li>
          <li>
            <h4><a href="readdata"><i class="fa fa-sliders fa-fw"></i> إدخال يدوي لقيم العداد </a></h4></li>
          <li>
            <h4><a href="invoiceFirst"><i class="fa fa-barcode fa-fw"></i> عرض فواتير </a></h4></li>

          <li>
            <h4><a href="charts"><i class="fa fa-bar-chart fa-fw"></i> مخططات الاستهلاك </a></h4></li>
          <li>
            <h4><a href="login"><i class="fa fa-eject fa-fw"></i> تسجيل خروج </a></h4></li>
        </ul>
      </nav>
    </div>
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">

      <div class="templatemo-content-container ">
        <div class="templatemo-content-widget white-bg">


          <form action="{{URL::route('meterRead')}}" class="templatemo-login-form " method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="panel panel-default">
              <div>
                <label for="message" style="color:red;">
                  <?php echo $msg; ?>
                </label>
              </div>
              <div class="panel-heading">
                <h1 class="margin-bottom-10" align="center">الرجاء إدخال قيم العداد </h1>
              </div>
              <div class="panel-body">
                <div class="row form-group">

                  <div class=" col-lg-3 col-md-3 col-md-offset-4 form-group">
                    <label for="MeterKey ">رقم العداد </label>

                    <input type="text" class="form-control" id="MeterKey" name="meterKey" placeholder="رقم العداد" maxlength="9" required oninvalid="this.setCustomValidity('لا يمكن ترك الحقل فارغ')" oninput="setCustomValidity('') ">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-lg-3 col-md-3 ">
                  </div>

                  <div class="col-lg-3 col-md-3 ">
                    <label for="dtp_input3" class=" control-label">وقت القراءة</label>
                    <div class="input-group date form_time " data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                      <input class="form-control" name="timeRead" size="16" type="text" value="" readonly>
                      <span class="input-group-addon" style="border: thin"><span class="fa fa-clock-o fa-2x"></span></span>

                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 ">
                    <label for="dtp_input2" class="  control-label">تاريخ القراءة</label>
                    <div class="input-group date form_date  " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                      <input class="form-control" name="dateRead" size="16" type="text" value="" readonly>
                      <span class="input-group-addon" style="border: thin"><span class="fa fa-calendar fa-fw fa-2x"></span></span>

                    </div>
                    <input type="hidden" id="dtp_input2" value="" />
                    <br/>
                  </div>


                </div>



                <div class="row form-group">
                  <div class="col-lg-3 col-md-3 ">
                  </div>

                  <div class="col-lg-3 col-md-3 form-group">
                    <label for="NightQty">فعلي ليل</label>
                    <input type="text" class="form-control" id="NightQty" name="NightQty" placeholder="فعلي ليل" maxlength="9" required oninvalid="this.setCustomValidity('لا يمكن ترك الحقل فارغ')" oninput="setCustomValidity('') ">
                  </div>
                  <div class="col-lg-3 col-md-3 form-group">
                    <label for="DayQty">فعلي نهار</label>
                    <input type="text" class="form-control" id="DayQty" name="DayQty" placeholder="فعلي نهار" maxlength="9" required oninvalid="this.setCustomValidity('لا يمكن ترك الحقل فارغ')" oninput="setCustomValidity('') ">
                  </div>

                </div>

                <div class="row form-group">
                  <div class="col-lg-3 col-md-3 ">
                  </div>


                  <div class="col-lg-3 col-md-3 form-group">
                    <label for="ImpNightQty">ردي ليل</label>
                    <input type="text" class="form-control" id="ImpNightQty" name="ImpNightQty" placeholder="ردي ليل" maxlength="9" required oninvalid="this.setCustomValidity('لا يمكن ترك الحقل فارغ')" oninput="setCustomValidity('') ">
                  </div>
                  <div class="col-lg-3 col-md-3 form-group">
                    <label for="ImpDayQty">ردي نهار</label>
                    <input type="text" class="form-control" id="ImpDayQty" name="ImpDayQty" placeholder="ردي نهار" maxlength="9" required oninvalid="this.setCustomValidity('لا يمكن ترك الحقل فارغ')" oninput="setCustomValidity('') ">
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-lg-3 col-md-3 ">
                  </div>



                </div>
                <div class="row form-group">
                  <div class="col-md-5 col-md-offset-2 form-group col-lg-offset-3 col-lg-4">
                    <button type="submit" class="btn-primary btn-lg" style="width: 120px"> إدخال </button>
                  </div>
                </div>
                <br>

              </div>
            </div>

          </form>




        </div>
      </div>
    </div>
  </div>
  <!-- JS -->


  <script type="text/javascript">
    $('.form_datetime').datetimepicker({
      //language:  'fr',
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
      showMeridian: 1
    });
    $('.form_date').datetimepicker({
      language: 'fr',
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
    $('.form_time').datetimepicker({
      language: 'fr',
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 1,
      minView: 0,
      maxView: 1,
      forceParse: 0
    });
  </script>
  <!-- Templatemo Script -->
</body>

</html>
