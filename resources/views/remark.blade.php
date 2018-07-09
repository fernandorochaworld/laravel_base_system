
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <base href="http://localhost/interagi/procape/sistema/public/"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Page Aside Left Fixed | Remark Admin Template</title>
  <link rel="apple-touch-icon" href="./assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="./assets/images/favicon.ico">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="./global/css/bootstrap.min.css">
  <link rel="stylesheet" href="./global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="./assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="./global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="./global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="./global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="./global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="./global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="./global/vendor/flag-icon-css/flag-icon.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="./global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="./global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="./global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="./global/vendor/media-match/media.match.min.js"></script>
    <script src="./global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="./global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="animsition site-navbar-small page-aside-fixed page-aside-left">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  @include('layout.topo')
  
  <div class="page">

    @include('layout.menu')

    <div class="page-main">
      @include('pagina.'.$sPagina)
    </div>
  </div>

  @include('layout.rodape')

</body>
</html>