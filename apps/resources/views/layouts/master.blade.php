<!DOCTYPE html>
<!--MASTER -->
<html>
    <head>

        <!--Main-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap admin template">
        <meta name="author" content="">
        <title>Lab4 - @yield('title')</title>

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
        <link rel="stylesheet" href="{{asset('include/assets/global/vendor/jquery-selective/jquery-selective.css')}}">


        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('include/assets/global/fonts/web-icons/web-icons.css')}}">
        <link rel="stylesheet" href="{{asset('include/assets/global/fonts/material-design/material-design.min.css')}}">
        <link rel="stylesheet" href="{{asset('include/assets/global/fonts/brand-icons/brand-icons.min.css')}}">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

        <script src="{{asset('include/assets/global/vendor/modernizr/modernizr.js')}}"></script>
        <script src="{{asset('include/assets/global/vendor/breakpoints/breakpoints.js')}}"></script>
            <link rel="stylesheet" href="{{asset('include/assets/global/fonts/font-awesome/font-awesome.css')}}">

        @if(Request::is('dashboard')) 
        <!-- my style css -->
        <link rel="stylesheet" href="{{asset('include/assets/css/mystyle.css')}}">
        <!-- end location picker -->
        @endif
        <!--/Main-->

        @if(Request::is('users')) 
        <!--Users-->
        <link rel="stylesheet" href="include/assets/global/vendor/filament-tablesaw/tablesaw.css">
        <link rel="stylesheet" href="include/assets/global/vendor/slidepanel/slidePanel.css">
        <link rel="stylesheet" href="include/assets/examples/css/apps/contacts.css">
        <!--/Users-->
        @endif
        
        
        <!--Angular Core-->
           <script src="{{asset('include/angular/lib/angular.min.js')}}"></script>
        <!--/Angular Core-->
        <!--Angular JS-->
            <script src="{{asset('include/angular/js/module.js')}}"></script>
        <!--Angular JS-->
        
       

        
        <script>
Breakpoints();
        </script>
    </head>
    <body class="@if(Request::is('users')) app-contacts @endif site-navbar-small" ng-app="hrv">

        @section('navbar')
        <nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                        data-toggle="menubar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="hamburger-bar"></span>
                </button>
                <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                        data-toggle="collapse">
                    <i class="icon md-more" aria-hidden="true"></i>
                </button>
                <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                    <img class="navbar-brand-logo" src="{{asset('include/assets/images/logo.png')}}" title="Remark">
                    <span class="navbar-brand-text hidden-xs"> Remark</span>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                        data-toggle="collapse">
                    <span class="sr-only">Toggle Search</span>
                    <i class="icon md-search" aria-hidden="true"></i>
                </button>
            </div>
            <div class="navbar-container container-fluid">
                <!-- Navbar Collapse -->
                <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                    <!-- Navbar Toolbar -->
                    <ul class="nav navbar-toolbar">
                        <li class="hidden-float" id="toggleMenubar">
                            <a data-toggle="menubar" href="#" role="button">
                                <i class="icon hamburger hamburger-arrow-left">
                                    <span class="sr-only">Toggle menubar</span>
                                    <span class="hamburger-bar"></span>
                                </i>
                            </a>
                        </li>
                        <li class="hidden-xs" id="toggleFullscreen">
                            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                            </a>
                        </li>
                        <li class="hidden-float">
                            <a class="icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                               role="button">
                                <span class="sr-only">Toggle Search</span>
                            </a>
                        </li>

                    </ul>
                    <!-- End Navbar Toolbar -->
                    <!-- Navbar Toolbar Right -->
                    <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                               aria-expanded="false" role="button">
                                <span class="flag-icon flag-icon-us"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-gb"></span> English</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-fr"></span> French</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-de"></span> German</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                               data-animation="scale-up" role="button">
                                <span class="avatar avatar-online">
                                    <img src="{{asset('include/assets/global/portraits/5.jpg')}}" alt="...">
                                    <i></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation">
                                    <a href="user_profile.php" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem"><i class="icon md-card" aria-hidden="true"></i> Billing</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Settings</a>
                                </li>
                                <li class="divider" role="presentation"></li>
                                <li role="presentation">
                                    <a href="{{asset('logout')}}" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                               data-animation="scale-up" role="button">
                                <i class="icon md-notifications" aria-hidden="true"></i>
                                <span class="badge badge-danger up">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                                <li class="dropdown-menu-header" role="presentation">
                                    <h5>NOTIFICATIONS</h5>
                                    <span class="label label-round label-danger">New 5</span>
                                </li>
                                <li class="list-group" role="presentation">
                                    <div data-role="container">
                                        <div data-role="content">
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-receipt bg-red-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">A new order has been placed</h6>
                                                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-account bg-green-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Completed the task</h6>
                                                        <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Settings updated</h6>
                                                        <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Event started</h6>
                                                        <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-comment bg-orange-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Message received</h6>
                                                        <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer" role="presentation">
                                    <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                        <i class="icon md-settings" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" role="menuitem">
                                        All notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
                               data-animation="scale-up" role="button">
                                <i class="icon md-email" aria-hidden="true"></i>
                                <span class="badge badge-info up">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                                <li class="dropdown-menu-header" role="presentation">
                                    <h5>MESSAGES</h5>
                                    <span class="label label-round label-info">New 3</span>
                                </li>
                                <li class="list-group" role="presentation">
                                    <div data-role="container">
                                        <div data-role="content">
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-online">
                                                            <img src="{{asset('include/assets/global/portraits/2.jpg')}}" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Mary Adams</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                                                        </div>
                                                        <div class="media-detail">Anyways, i would like just do it</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-off">
                                                            <img src="{{asset('include/assets/global/portraits/3.jpg')}}" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Caleb Richards</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                                                        </div>
                                                        <div class="media-detail">I checheck the document. But there seems</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-busy">
                                                            <img src="{{asset('include/assets/global/portraits/4.jpg')}}" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">June Lane</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                                                        </div>
                                                        <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-away">
                                                            <img src="{{asset('include/assets/global/portraits/5.jpg')}}" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Edward Fletcher</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                                                        </div>
                                                        <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer" role="presentation">
                                    <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                        <i class="icon md-settings" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" role="menuitem">
                                        See all messages
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="toggleChat">
                            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="assets/site-sidebar.tpl">
                                <i class="icon md-comment" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Navbar Toolbar Right -->
                </div>
                <!-- End Navbar Collapse -->
                <!-- Site Navbar Seach -->
                <div class="collapse navbar-search-overlap" id="site-navbar-search">
                    <form role="search">
                        <div class="form-group">
                            <div class="input-search">
                                <i class="input-search-icon md-search" aria-hidden="true"></i>
                                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                                <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                                        data-toggle="collapse" aria-label="Close"></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Site Navbar Seach -->
            </div>
        </nav>
        <!-- left side menu -->
        <div class="site-menubar">
            <ul class="site-menu">
                <li class="site-menu-item @if(Request::is('dashboard')) active  @endif">
                    <a class="animsition-link" href="{{asset('dashboard')}}">
                        <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">แผงควบคุม</span>
                    </a>
                </li>
                <li class="site-menu-item has-sub @if(Request::is('users')) active  @endif">
                    <a href="javascript:void(0)">
                        <i class="site-menu-icon icon md-folder-person" aria-hidden="true"></i>
                        <span class="site-menu-title">ข้อมูล</span>
                        <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <?php echo '<a class="animsition-link" href="data_personnel.php?param=1">' ?>
                            <span class="site-menu-title">ลูกค้า</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <?php echo '<a class="animsition-link" href="data_personnel.php?param=2">' ?>
                            <span class="site-menu-title">พนักงาน</span>
                            </a>
                        </li>
                        <li class="site-menu-item  @if(Request::is('users')) active  @endif">
                            <a class="animsition-link" href="{{asset('users')}}">
                                <span class="site-menu-title">ผู้ใช้งาน</span>
                            </a>
                        </li>

                        <li class="site-menu-item">
                            <a class="animsition-link" href="project.php">
                                <span class="site-menu-title">โครงการ</span>
                            </a>
                        </li>    
                    </ul>
                </li>





            </ul>
        </div>
        <!-- end left side menu -->
        <div class="site-gridmenu">
            <div>
                <div>
                    <ul>
                        <li>
                            <a href="assets/apps/mailbox/mailbox.html">
                                <i class="icon md-email"></i>
                                <span>Mailbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="assets/apps/calendar/calendar.html">
                                <i class="icon md-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="assets/apps/contacts/contacts.html">
                                <i class="icon md-account"></i>
                                <span>Contacts</span>
                            </a>
                        </li>
                        <li>
                            <a href="assets/apps/media/overview.html">
                                <i class="icon md-videocam"></i>
                                <span>Media</span>
                            </a>
                        </li>
                        <li>
                            <a href="assets/apps/documents/categories.html">
                                <i class="icon md-receipt"></i>
                                <span>Documents</span>
                            </a>
                        </li>
                        <li>
                            <a href="assets/apps/projects/projects.html">
                                <i class="icon md-image"></i>
                                <span>Project</span>
                            </a>
                        </li>
                        <li>
                            <a href="assets/apps/forum/forum.html">
                                <i class="icon md-comments"></i>
                                <span>Forum</span>
                            </a>
                        </li>
                        <li>
                            <a href="assets/index.html">
                                <i class="icon md-view-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @show








        @if(Request::is('users')) 
        <!--ถ้าเป็นหน้า Users-->
        
        @yield('content')
       
        <!--ถ้าเป็นหน้า Users-->
        @else

        <!--ถ้าเป็นหน้า อื่นๆ-->

        <div class="page animsition"> 
            <div class="page-content"> 
                @yield('content')
            </div> 
        </div> 
        <!--ถ้าเป็นหน้า อื่นๆ-->
        @endif









        @section('footer')
        <!-- Footer -->
        <footer class="site-footer">
            <div class="site-footer-legal">copyright Kanfin © 2016 </div>
            <!-- <div class="site-footer-right">
              Crafted with <i class="red-600 icon md-favorite"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
            </div> -->
        </footer>
        @show

        <!--Main-->
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
        <script src="{{asset('include/assets/global/vendor/bootbox/bootbox.js')}}"></script>
        @if(Request::is('dashboard')) 
        <script src="{{asset('include/assets/global/vendor/jquery-selective/jquery-selective.min.js')}}"></script>
        @endif

        @if(Request::is('users')) 
        <!-- Plugins users-->
        <script src="{{asset('include/assets/global/vendor/filament-tablesaw/tablesaw.js')}}"></script>
        <script src="{{asset('include/assets/global/vendor/aspaginator/jquery.asPaginator.min.js')}}"></script>
        <script src="{{asset('include/assets/global/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
        <!-- /Plugins users-->
        @endif

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

        <!-- scripts plugin -->
        <script src="{{asset('include/assets/global/js/plugins/sticky-header.js')}}"></script>
        <script src="{{asset('include/assets/global/js/plugins/action-btn.js')}}"></script>
        <script src="{{asset('include/assets/global/js/plugins/selectable.js')}}"></script>
        <script src="{{asset('include/assets/global/js/components/aspaginator.js')}}"></script>
        <script src="{{asset('include/assets/global/js/components/animate-list.js')}}"></script>
        <script src="{{asset('include/assets/global/js/components/jquery-placeholder.js')}}"></script>
        <script src="{{asset('include/assets/global/js/components/material.js')}}"></script>
        <script src="{{asset('include/assets/global/js/components/selectable.js')}}"></script>
        <script src="{{asset('include/assets/global/js/components/bootbox.js')}}"></script>
        <script src="{{asset('include/assets/js/app.js')}}"></script>
        <script src="{{asset('include/assets/examples/js/apps/contacts.js')}}"></script>
        @if(Request::is('users')) 

        <!-- scripts plugin Users -->
        <!-- script form validation-->
        <script src="{{asset('include/assets/examples/js/forms/validation.js')}}"></script>
        <script src="{{asset('include/assets/global/vendor/formvalidation/formValidation.min.js')}}"></script>
        <script src="{{asset('include/assets/global/vendor/formvalidation/framework/bootstrap.min.js')}}"></script>
        <!-- scripts plugin Users -->

        @endif




        <script>
(function (document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function () {
        Site.run();
    });
})(document, window, jQuery);
        </script>
        <!--/Main-->
    </body>
</html>
