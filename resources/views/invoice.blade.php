<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>عرض تفاصيل فاتورة</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg" />
  <meta name="description" content="">
  <meta name="author" content="templatemo">
  <meta name="template-hash" content="baadb45704803c2d1a1ac3e569b757d5">
  <!--
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css' ">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/morris.css') }}" rel="stylesheet">
  <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
  <link href="{{ asset('css/media.css') }}" media="print" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="{{ asset('js/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

  <!-- DataTables Responsive CSS -->
  <link href="{{ asset('js/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- Left column -->
  <div class="templatemo-flex-row">

    <div class="templatemo-sidebar" id="navdiv">
      <header class="templatemo-site-header ">
        <div class="square"></div>
        <h1>لوحة المعلومات</h1>
      </header>
      <div class="profile-photo-container">
        <img src="{{ asset('images/elecrticity.jfif') }}" alt="Profile Photo" class="img-responsive">
        <div class="profile-photo-overlay"></div>
      </div>
      <!-- Search box -->

      <div class="mobile-menu-icon">
        <i class="fa fa-bars"></i>
      </div>
      <nav class="templatemo-left-nav">
        <ul>

          <li>
            <h4><a href="{{URL::route('index')}}"><i class="fa fa-home fa-fw"></i> الصفحة الرئيسية </a></h4></li>
          <li>
            <h4><a href="{{URL::route('readdata')}}"><i class="fa fa-sliders fa-fw"></i> إدخال يدوي لقيم العداد </a></h4></li>
          <li>
            <h4><a href="{{URL::route('invoiceFirst')}}"><i class="fa fa-barcode fa-fw"></i> عرض فواتير </a></h4></li>

          <li>
            <h4><a href="{{URL::route('charts')}}"><i class="fa fa-bar-chart fa-fw"></i> مخططات الاستهلاك </a></h4></li>
          <li>
            <h4><a href="{{URL::route('login')}}"><i class="fa fa-eject fa-fw"></i> تسجيل خروج </a></h4></li>

        </ul>
      </nav>
    </div>

    <!-- Main content -->

    <div class="templatemo-content col-1 light-gray-bg">

      <div class="templatemo-content-container">


        <div class="col-lg-12">
          <div id="page-wrapper">
            <div class="panel panel-primary ">

              <div class="panel-body" style="padding-bottom: 0px">

                <div class="templatemo-top-nav-container ">
                  <div class="row">


                    <nav class="templatemo-top-nav ">



                      <div class="col-lg-12 col-md-12">
                        <div class="row form-group">

                          <div class="  form-group  " style="padding-bottom:0px">

                            <img src="{{ asset('img/logo3.jpg') }}" width="100%">
                          </div>
                        </div>

                      </div>

                    </nav>
                  </div>
                </div>



                <h3 style="padding-top: 10px">معلومات تفصيلية</h3>
                <hr>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="row form-group">

                    <div class="  form-group">
                      <label>الشهر : </label>
                      <span>{{$customerMeterBillDetail->month}} </span>
                    </div>
                    <div class="  form-group">
                      <label>الدورة : </label>
                      <span>{{$customerMeterBillDetail->version_number}}</span>
                    </div>
                    <div class="  form-group">
                      <label>الكوة : </label>
                      <span>{{$customerMeterBillDetail->pay_place}}</span>
                    </div>
                    <div class="  form-group">
                      <label>الجابي: </label>
                      <span>{{$customerMeterBillDetail->employer}}</span>
                    </div>
                    <div class="  form-group">
                      <label>تسلسل الفاتورة : </label>
                      <span>{{$customerMeterBillDetail->bill_id}}</span>
                    </div>
                    <div class="  form-group">
                      <label>تاريخ الطباعة : </label>
                      <?php $billprintdate = $customerMeterBillDetail->print_date;
                               $billprintdate = date('Y/m/d', strtotime($billprintdate)); ?>
                        <span>{{$billprintdate}}</span>
                    </div>
                    <!-- <div class="  form-group"  >
                             <label >الاصدار القادم :   </label>
                             <span>الاصدار القادم </span>
                                </div> -->
                  </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="row form-group">

                    <div class="  form-group">
                      <label> نوع الاصدار: </label>
                      <span></span>
                    </div>



                    <div class="  form-group">
                      <label>صفة الاستثمار : </label>
                      <span>{{$customerMeterBillDetail->investment_status}}</span>
                    </div>


                    <div class="  form-group">
                      <label>نوع العقد : </label>
                      <span></span>
                    </div>

                    <div class="  form-group">
                      <label>نوع التوتر : </label>
                      <span>{{$customerMeterBillDetail->voltage}}</span>
                    </div>



                    <div class="  form-group">
                      <label>مكان العداد : </label>
                      <span></span>
                    </div>

                    <div class="  form-group">
                      <label>نوع العداد : </label>
                      <span>{{$customerMeterBillDetail->meter_type}}</span>
                    </div>



                    <div class="  form-group">
                      <label>ثابت العداد : </label>
                      <span></span>
                    </div>


                    <div class="  form-group">
                      <label>ر. المركز التحويلي : </label>
                      <span></span>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="row form-group">

                    <div class="  form-group">
                      <label>الاسم : </label>
                      <span>{{$customerMeterBillDetail->customer_name}}</span>
                    </div>
                    <div class="  form-group">
                      <label>الرقم الوطني :</label>
                      <span>{{$customerMeterBillDetail->id_number}}</span>
                    </div>
                    <div class="  form-group">
                      <label>الرقم الخاص: </label>
                      <span>{{$customerMeterBillDetail->customer_id}}</span>
                    </div>
                    <div class="  form-group">
                      <label>رقم الاشتراك :</label>
                      <span>{{$customerMeterBillDetail->participate_number}}</span>
                    </div>
                    <div class="  form-group">
                      <label>رقم الصف :</label>
                      <span>{{$customerMeterBillDetail->class_number}}</span>
                    </div>
                    <div class="  form-group">
                      <label>رقم العداد الفعلي: </label>
                      <span></span>
                    </div>
                    <div class="  form-group">
                      <label>رقم العداد الردي: </label>
                      <span></span>
                    </div>
                    <div class="  form-group">
                      <label>العنوان :</label>
                      <span>{{$customerMeterBillDetail->address}}</span>
                    </div>
                  </div>

                </div>
                <div id="wrapper">
                  <div class="row">
                    <div class="col-lg-12">

                      <!-- /.panel-heading -->
                      <div class="panel-body">
                        <table width="100%" class="table table-striped table-hover" id="dataTables-example">
                          <thead>
                            <tr>
                              <th> </th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">فعلي نهار</th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">فعلي ذروة</th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">فعلي ليل</th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered"> المجموع الفعلي</th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">ردي نهار</th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">ردي ذروة</th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">ردي ليل</th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered"> المجموع الردي</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="odd gradeX">
                              <th class="ce">التأشيرة السابقة</th>
                              <td class="table-bordered">x</td>
                              <td class="table-bordered"> x</td>
                              <td class="table-bordered">x</td>
                              <td class="table-bordered">4</td>
                              <td class="table-bordered" class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                            </tr>
                            <tr class="odd gradeX">
                              <th class="ce">التأشيرة الحالية</th>
                              <td class="table-bordered">{{$factmeterDetail->day_qty}}</td>
                              <td class="table-bordered">{{$factmeterDetail->peak_qty}}</td>
                              <td class="table-bordered">{{$factmeterDetail->night_qty}}</td>
                              <td class="table-bordered">{{$factmeterDetail->sum_qty}}</td>
                              <td class="table-bordered">{{$factmeterDetail->imp_day_qty}}</td>
                              <td class="table-bordered">{{$factmeterDetail->imp_peak_qty}}</td>
                              <td class="table-bordered">{{$factmeterDetail->imp_night_qty}}</td>
                              <td class="table-bordered">{{$factmeterDetail->imp_sum_qty}}</td>
                            </tr>

                            <tr class="odd gradeX">
                              <th class="ce">كمية الاستهلاك</th>
                              <td class="table-bordered">x</td>
                              <td class="table-bordered"> x</td>
                              <td class="table-bordered">x</td>
                              <td class="table-bordered">4</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                            </tr>
                            <tr class="odd gradeX">
                              <th class="ce">كمية التصفية</th>
                              <td class="table-bordered">x</td>
                              <td class="table-bordered"> x</td>
                              <td class="table-bordered">x</td>
                              <td class="table-bordered">4</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                            </tr>
                            <tr class="odd gradeX">
                              <th class="ce">قيمة الاستهلاك </th>
                              <td class="table-bordered">x</td>
                              <td class="table-bordered"> x</td>
                              <td class="table-bordered" x</td>
                                <td class="table-bordered">4</td>
                                <td class="table-bordered">X</td>
                                <td class="table-bordered">X</td>
                                <td class="table-bordered">X</td>
                                <td class="table-bordered">X</td>
                            </tr>

                          </tbody>
                        </table>
                        <table width="100%" class="table table-striped  table-hover">
                          <thead>
                            <tr>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">ع. الاستطاعة </th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">قيمة الحسم </th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered ">قيمة التعويض </th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered ">أجرة العداد </th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">قيمة الرسوم</th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">رسم النظافة </th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">غرامة التأخير </th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">رسم الإعادة </th>
                              <th class="p-3 mb-2 bg-info text-white table-bordered">الفائدة </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="odd gradeX">
                              <td class="table-bordered">x</td>
                              <td class="table-bordered"> x</td>
                              <td class="table-bordered">x</td>
                              <td class="table-bordered">4</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                              <td class="table-bordered">X</td>
                            </tr>






                          </tbody>
                        </table>

                        <table width="100%" class="table table-striped table-bordered table-hover">
                          <thead>
                            <tr class="odd gradeX">
                              <td class="p-3 mb-2 bg-info text-white col-lg-3 col-md-3" align="right">المبلغ المضاف </td>
                              <td class="col-lg-3 col-md-3">x</td>
                              <td class="p-3 mb-2 bg-info text-white col-lg-3 col-md-3" align="right">سبب الإضافة</td>
                              <td class="col-lg-3 col-md-3">x</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="odd gradeX">
                              <td class="p-3 mb-2 bg-info text-white col-lg-3 col-md-3" align="right">قيمة الفاتورة</td>
                              <td class="col-lg-3 col-md-3">x</td>
                              <td class="p-3 mb-2 bg-info text-white col-lg-3 col-md-3" align="right">المبلغ تفقيطاً</td>
                              <td class="col-lg-3 col-md-3">x</td>
                            </tr>





                          </tbody>
                        </table>

                        <!-- /.table-responsive -->
                        <div class="well">
                          <h4>ملاحظات</h4>
                          <p> </p>
                          <h5> <p class="text-danger" align="center"> عزيزي المشترك يمكنك الاستعلام عن فاتورتك عبر الاتصال على الرقم </p></h5>
                        </div>
                      </div>
                      <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                  </div>
                  <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.div -->
            </div>



          </div>


        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- JS -->
  <script src="{{ asset('js/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/datatables-responsive/dataTables.responsive.js') }}"></script>
  <script src="{{ asset('js/sb-admin-2.js') }}"></script>

  <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script>
  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
  <script type="text/javascript" src="{{ asset('js/templatemo-script.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>

  <script type="text/javascript" src="{{ asset('jquery/jquery-1.8.3.min.js') }}" charset="UTF-8"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
  <script type="text/javascript" src="{{ asset('js/locales/bootstrap-datetimepicker.ar.js') }}" charset="UTF-8"></script>

  <script type="text/javascript">
  </script>
  <!-- Templatemo Script -->
  <!-- Page-Level Demo Scripts - Tables  Tables - Use for reference -->
  <script>
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
        responsive: true
      });
    });
  </script>

</body>

</html>
