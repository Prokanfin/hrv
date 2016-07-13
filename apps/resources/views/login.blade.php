<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Login V2 | Remark Admin Template</title>
  <link rel="apple-touch-icon" href="{{asset('include/assets/images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{asset('include/assets/images/favicon.ico')}}">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('include/assets/global/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/global/css/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/css/site.min.css')}}">
  <!-- Plugins -->
  <link rel="stylesheet" href="{{asset('include/assets/global/vendor/animsition/animsition.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/global/vendor/asscrollable/asScrollable.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/global/vendor/switchery/switchery.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/global/vendor/intro-js/introjs.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/global/vendor/slidepanel/slidePanel.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/global/vendor/jquery-mmenu/jquery-mmenu.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/global/vendor/flag-icon-css/flag-icon.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/global/vendor/waves/waves.css')}}">
  <!-- plugin login form -->
  <link rel="stylesheet" href="{{asset('include/assets/examples/css/pages/login-v2.css')}}">
  <!-- Fonts -->
  <link rel="stylesheet" href="{{asset('include/assets/global/fonts/material-design/material-design.min.css')}}">
  <link rel="stylesheet" href="{{asset('include/assets/global/fonts/brand-icons/brand-icons.min.css')}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
   <link rel="stylesheet" href="{{asset('include/assets/css/mystyle.css')}}">
  <!--[if lt IE 9]>
    <script src="{{asset('')}}include/assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="{{asset('')}}include/assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="{{asset('')}}include/assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="{{asset('include/assets/global/vendor/modernizr/modernizr.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/breakpoints/breakpoints.js')}}"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="page-login-v2 layout-full page-dark">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <!-- Page -->
  <div class="page animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
      <div class="page-brand-info">
        <div class="brand">
          <img class="brand-img" src="{{asset('include/assets/images/original_logo.png')}}" alt="...">
          <!-- <h4 class="brand-text font-size-40" style="font-family: supermarketregular;padding: 5px 0px 0px 0px;margin: 0px;">บริษัท กาญจน์ บัญชีและภาษีอากร จำกัด</h4>
        </div> -->
        <p class="font-size-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="page-login-main">
        <div class="brand visible-xs">
          <img class="brand-img" src="{{asset('include/assets/images/original_logo_blue.png')}}" alt="...">
         <!--  <h3 class="brand-text font-size-40">Remark</h3> -->
        </div>
        <div class="logo_brand">
          <img class="brand_img" src="{{asset('include/assets/images/logokanfin.png')}}" alt="...">
        </div>
        <h3 class="font-size-24">เข้าสู่ระบบ</h3>
       <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
        <form method="post" action="{{asset('checkAuth')}}" autocomplete="off">
          <div class="form-group form-material floating">
            <input type="text" class="form-control empty" id="inputEmail" name="txtUsername">
            <label class="floating-label" for="inputEmail">Username</label>
          </div>
          <div class="form-group form-material floating">
            <input type="password" class="form-control empty" id="inputPassword" name="txtPassword">
            <label class="floating-label" for="inputPassword">Password</label>
          </div>
          <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
              <input type="checkbox" id="remember" name="checkbox">
              <label for="inputCheckbox">Remember me</label>
            </div>
            <a class="pull-right" href="forgot-password.html">Forgot password?</a>
          </div>
          <!-- <button type="submit" class="btn btn-primary btn-block">Login</button> -->
          <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
        <!-- <p>No account? <a href="register-v2.html">Sign Up</a></p> -->
        <footer class="page-copyright">
          <!-- <p>WEBSITE BY amazingSurge</p> -->
          <p>© 2016. Kanfin.</p>
          <!-- <div class="social">
            <a class="btn btn-icon btn-round social-twitter" href="javascript:void(0)">
              <i class="icon bd-twitter" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-facebook" href="javascript:void(0)">
              <i class="icon bd-facebook" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-google-plus" href="javascript:void(0)">
              <i class="icon bd-google-plus" aria-hidden="true"></i>
            </a>
          </div> -->
        </footer>
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Core  -->
  <script src="{{asset('include/assets/global/vendor/jquery/jquery.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/bootstrap/bootstrap.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/animsition/animsition.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/asscroll/jquery-asScroll.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/asscrollable/jquery.asScrollable.all.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/waves/waves.js')}}"></script>
  <!-- Plugins -->
  <script src="{{asset('include/assets/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/intro-js/intro.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/screenfull/screenfull.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
  <script src="{{asset('include/assets/global/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
  <!-- Scripts -->
  <script src="{{asset('include/assets/global/js/core.js')}}"></script>
  <script src="{{asset('include/assets/js/site.js')}}"></script>
  <script src="{{asset('include/assets/js/sections/menu.js')}}"></script>
  <script src="{{asset('include/assets/js/sections/menubar.js')}}"></script>
  <script src="{{asset('include/assets/js/sections/gridmenu.js')}}"></script>
  <script src="{{asset('include/assets/js/sections/sidebar.js')}}"></script>
  <script src="{{asset('include/assets/global/js/configs/config-colors.js')}}"></script>
  <script src="{{asset('include/assets/js/configs/config-tour.js')}}"></script>
  <script src="{{asset('include/assets/global/js/components/asscrollable.js')}}"></script>
  <script src="{{asset('include/assets/global/js/components/animsition.js')}}"></script>
  <script src="{{asset('include/assets/global/js/components/slidepanel.js')}}"></script>
  <script src="{{asset('include/assets/global/js/components/switchery.js')}}"></script>
  <script src="{{asset('include/assets/global/js/components/tabs.js')}}"></script>
  <script src="{{asset('include/assets/global/js/components/jquery-placeholder.js')}}"></script>
  <script src="{{asset('include/assets/global/js/components/material.js')}}"></script>
  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>