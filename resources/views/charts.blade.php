<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>مخططات الاستهلاك</title>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>

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

      <div class="templatemo-content-container ">
        <div class="templatemo-content-widget white-bg">


          <form action="{{URL::route('charts')}}" class="templatemo-login-form " method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h1 class="margin-bottom-10" align="center"> عرض الاحصائيات  </h1>
              </div>
              <div class="panel-body">
                <div class="bs-example">
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-info">
                      <div class="panel-heading ">
                        <h4 class="panel-title">
                   <div class="fa  fa-th-list "></div>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >عرض الإحصائيات لعداد محدد</a>
                </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse {{$collapse== '' ? 'in' : ''}} {{$collapse== 'collapseOne' ? 'in' : ''}}">
                        <div class="panel-body">
                          <div class="row form-group">
                            <div class="col-lg-3 col-md-3 form-group">

                            </div>
                            <div class="col-lg-3 col-md-3 ">
                              <label for="dtp_input3" class="  control-label"></label>
                              <div class="input-group date form_date  " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                <input class="form-control" name="toDate" size="16" type="text" value="" readonly>
                                <span class="input-group-addon" style="border: thin "><span class="fa fa-calendar fa-fw fa-2x"></span></span>

                              </div>
                              <input type="hidden" id="dtp_input3" value="" />
                            </div>
                            <div class="col-lg-3 col-md-3 ">
                              <label for="dtp_input2" class="  control-label">مجال القراءة</label>
                              <div class="input-group date form_date  " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                <input class="form-control" name="fromDate" size="16" type="text" value="" readonly>
                                <span class="input-group-addon" style="border: thin"><span class="fa fa-calendar fa-fw fa-2x"></span></span>

                              </div>
                              <input type="hidden" id="dtp_input2" value="" />
                            </div>



                            <div class="col-lg-3 col-md-3 form-group">
                              <label for="meterKey">رقم العداد</label>
                              <input type="text" class="form-control" id="meterKey" name="meterKey" placeholder="رقم العداد" maxlength="9">
                            </div>

                          </div>
                          <div class="row ">
                            <div class=" form-group">

                              <button type="submit" class="btn-primary btn-lg" style="width: 100%">عرض المخطط </button>
                            </div>


                          </div>
                          <div class="row form-group">

                            <canvas id="myChart"  width="400" height="120"></canvas>


                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                   <div class= "fa   fa-th-list  "></div>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">عرض الإحصائيات لكل العدادات</a>
                </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">

                        <div class="panel-body">
                          <div class="row form-group">
                            <div class="col-lg-3 col-md-3 form-group">

                            </div>
                            <div class="col-lg-3 col-md-3 ">
                              <label for="dtp_input3" class="  control-label"></label>
                              <div class="input-group date form_date  " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                <input class="form-control" size="16" type="text" value="" readonly>
                                <span class="input-group-addon" style="border: thin "><span class="fa fa-calendar fa-fw fa-2x"></span></span>

                              </div>
                              <input type="hidden" id="dtp_input3" value="" />
                            </div>
                            <div class="col-lg-3 col-md-3 ">
                              <label for="dtp_input2" class="  control-label">مجال القراءة</label>
                              <div class="input-group date form_date  " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                <input class="form-control" size="16" type="text" value="" readonly>
                                <span class="input-group-addon" style="border: thin"><span class="fa fa-calendar fa-fw fa-2x"></span></span>

                              </div>
                              <input type="hidden" id="dtp_input2" value="" />
                            </div>

<div class="col-lg-3 col-md-3 form-group">
  <label for="postId">رقم البوست</label>
<input type="text" class="form-control" id="postId" name="postId" maxlength="9" placeholder="رقم البوست">
</div>


                          </div>
                          <div class="row ">
                            <div class=" form-group">

                              <button type="submit" class="btn-primary btn-lg" style="width: 100%">عرض المخطط </button>
                            </div>


                          </div>

                        </div>

                        <canvas id="myChart2" width="400" height="120">
                          </ </div>
                      </div>






                    </div>

                  </div>



                </div>
              </div>
          </form>


          </div>



        </div>
      </div>
      <!-- JS -->

      <script>
      var labelsArray = new Array();
      var dataArray = new Array();

        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels:  [
            <?php if($chartLabels!=null){
              $length = count($chartLabels);
              for ($i = 0; $i < $length-1; $i++) {
            ?>
              {{$chartLabels[$i]}},
            <?php } ?>
              {{$chartLabels[$length-1]}} ],
          <?php } else { ?>
             "Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Red", "Blue", "Yellow"],
            <?php } ?>
            datasets: [{
              label: '# of Votes',
              data: [
              <?php if($chartData!=null){
                $length = count($chartData);
                for ($i = 0; $i < $length-1; $i++) {
              ?>
              {{$chartData[$i]}},
              <?php } ?>
              {{$chartData[$length-1]}} ],
              <?php } else { ?>
               12, 19, 3, 5, 2, 3, 9, 12, 6],
              <?php } ?>
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });
      </script>

      <!-- Templatemo Script -->

      <!-- chart 2 -->
      <script>
        var ctx = document.getElementById("myChart2").getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange", "Red", "Blue", "Yellow"],
            datasets: [
              {
              label: '# of Votes',
              data: [11, 10, 7, 7, 6, 1, 8, 10, 7],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
              },
              {
              label: '# of Votes',
              data: [10, 8, 3, 6, 7, 2, 5, 11, 12],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            },

          ]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });

      </script>

      <!-- Date time picker-->
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

</body>

</html>
