<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تسجيل الدخول</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg" />
  <meta name="description" content="">
  <meta name="author" content="templatemo">
  <!--
        Visual Admin Template
        http://www.templatemo.com/preview/templatemo_455_visual_admin
        -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="light-gray-bg">
  <div class="templatemo-content-widget templatemo-login-widget white-bg">
    <header class="text-center">
      <div class="fa fa-user fa-2x"></div>
      <h1>أهلاً وسهلاً بكم</h1>
      <h1>في الموقع الرسمي للشركة العامة لكهرباء محافظة دمشق</h1>
      <h1>الجمهورية العربية السورية</h1>
    </header>
    <form class="templatemo-login-form" action="{{URL::route('auth')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="panel panel-default margin-10">
        <div class="panel-heading">
          <h2 class="text-uppercase" align="center">تسجيل الدخول</h2></div>
        <div class="panel-body">
          <form action="index.html" class="templatemo-login-form">
            <div class="form-group">
              <label for="inputUserName">اسم المستخدم</label>
              <input type="text" class="form-control" name="username" id="inputUserName" placeholder="اسم المستخدم" required oninvalid="this.setCustomValidity('الرجاء إدخال اسم المستخدم الصحيح')" oninput="setCustomValidity('')">

            </div>
            <div class="form-group">
              <label for="inputPassword">كلمة المرور</label>
              <input type="password" class="form-control" name="password" placeholder="******" required oninvalid="this.setCustomValidity('الرجاء إدخال كلمة المرور الصحيحة')" oninput="setCustomValidity('')">

            </div>
            <div>
              <label for="errorMessage" style="color:red">
                <?php echo $errorMessage; ?>
              </label>
            </div>
            <div class="form-group">
              <button type="submit" class="templatemo-blue-button center-block">دخول</button>
            </div>
          </form>
        </div>
      </div>
    </form>
  </div>

</body>

</html>
