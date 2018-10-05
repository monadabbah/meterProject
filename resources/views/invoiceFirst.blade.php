<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>عرض فواتير</title>
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
  <link href="css/morris.css" rel="stylesheet">
  <link href="css/metisMenu.min.css" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .bs-example {
      margin: 20px;
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


          <form action="{{URL::route('invoiceFirst')}}" class="templatemo-login-form " method="post" enctype="multipart/form-data" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h1 class="margin-bottom-10" align="center">عرض فواتير</h1>
              </div>
              <div class="panel-body">
                <div class="bs-example">
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-info">
                      <div class="panel-heading ">
                        <h4 class="panel-title">
                   <div class="fa fa-user"></div>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >اختيار رقم المشترك:</a>
                </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse {{$collapse== '' ? 'in' : ''}} {{$collapse== 'collapseOne' ? 'in' : ''}}">
                        <div class="panel-body">

                          <div class="row form-group">
                            <div class="col-lg-3 col-md-3 ">
                            </div>
                            <div class="col-lg-3 col-md-3 form-group">
                              <br>
                              <button type="submit" class="btn-primary btn-lg">عرض الفواتير </button>
                            </div>

                            <div class="col-lg-3 col-md-3 form-group">
                              <label for="customerID">رقم المشترك</label>
                              <input type="text" class="form-control" id="customerID" name="customerID" placeholder="رقم المشترك" maxlength="9" required oninvalid="this.setCustomValidity('لا يمكن ترك الحقل فارغ')" oninput="setCustomValidity('') ">
                            </div>

                          </div>

                          <table class="table table-striped table-bordered templatemo-user-table">
                            <thead>
                              <tr>
                                <td><a href="#" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
                                <td><a href="#" class="white-text templatemo-sort-by">اسم المشترك  <span class="caret"></span></a></td>
                                <td><a href="#" class="white-text templatemo-sort-by">رقم العداد  <span class="caret"></span></a></td>
                                <td><a href="#" class="white-text templatemo-sort-by">الدورة <span class="caret"></span></a></td>


                                <td>عرض الفاتورة </td>

                              </tr>
                            </thead>
                            <tbody>
                              @if ($collapse=='collapseOne')
                              <?php $num = 1; ?>
                                @if ($customerMeterBill!='') @foreach ($customerMeterBill as $cmbill)

                                <tr>
                                  <td>{{$num}}</td>
                                  <td>{{ $cmbill->customer_name }}</td>
                                  <td>{{ $cmbill->meter_key }}</td>
                                  <td>{{ $cmbill->version_number }}</td>
                                  <td><a href="invoice/{{$cmbill->customer_id}}/{{$cmbill->meter_key}}/{{$cmbill->bill_id}}" class="templatemo-link">عرض الفاتورة </a></td>
                                </tr>
                                <?php $num++; ?>
                                  @endforeach @endif @else
                                  <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                      <a href="#" class="templatemo-link"></a>
                                    </td>
                                  </tr>
                                  @endif
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                   <div class= "fa  fa-gear "></div>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">اختيار رقم العداد: </a>
                </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse {{$collapse== 'collapseTwo' ? 'in' : ''}}">
                        <div class="panel-body">
                          <div class="row form-group">
                            <div class="col-lg-3 col-md-3 ">
                            </div>
                            <div class="col-lg-3 col-md-3 form-group">
                              <br>
                              <button type="submit" class="btn-primary btn-lg">عرض الفواتير </button>
                            </div>

                            <div class="col-lg-3 col-md-3 form-group">
                              <label for="meterKey">رقم العداد </label>
                              <input type="text" class="form-control" id="meterKey" name="meterKey" placeholder="رقم العداد" maxlength="9" required oninvalid="this.setCustomValidity('لا يمكن ترك الحقل فارغ')" oninput="setCustomValidity('')">
                            </div>

                          </div>

                          <table class="table table-striped table-bordered templatemo-user-table">
                            <thead>
                              <tr>
                                <td><a href="#" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
                                <td><a href="#" class="white-text templatemo-sort-by">اسم المشترك  <span class="caret"></span></a></td>
                                <td><a href="#" class="white-text templatemo-sort-by">رقم العداد   <span class="caret"></span></a></td>
                                <td><a href="#" class="white-text templatemo-sort-by">الدورة <span class="caret"></span></a></td>


                                <td>عرض الفاتورة </td>

                              </tr>
                            </thead>
                            <tbody>
                              @if ($collapse=='collapseTwo')
                              <?php $num = 1; ?>
                                @if ($customerMeterBill!='') @foreach ($customerMeterBill as $cmbill)

                                <tr>
                                  <td>{{$num}}</td>
                                  <td>{{ $cmbill->customer_name }}</td>
                                  <td>{{ $cmbill->meter_key }}</td>
                                  <td>{{ $cmbill->version_number }}</td>
                                  <td><a href="invoice/{{$cmbill->customer_id}}/{{$cmbill->meter_key}}/{{$cmbill->bill_id}}" class="templatemo-link">عرض الفاتورة </a></td>
                                </tr>
                                <?php $num++; ?>
                                  @endforeach @endif @else
                                  <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                      <a href="#" class="templatemo-link"></a>
                                    </td>
                                  </tr>
                                  @endif
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>



              </div>
            </div>
          </form>






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
      <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
      <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.ar.js" charset="UTF-8"></script>


      <!-- Templatemo Script -->
</body>

</html>
