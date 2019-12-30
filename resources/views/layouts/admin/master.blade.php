<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dashboard | GetWheelz</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/all-themes.css') }}" />
</head>

<body class="theme-red">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #Float icon -->
    
    <!-- Search  -->
    <div class="search-bar">
        <div class="search-icon"> <i class="zmdi zmdi-search"></i> </div>
        <input type="text" placeholder="Search...">
        <div class="close-search"> <i class="zmdi zmdi-close"></i> </div>
    </div>
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="col-12">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ route('admin') }}">GetWheelz</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu list-unstyled">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-orange"> <i class="material-icons">person_add</i> </div>
                                        <div class="menu-info">
                                            <h4>12 new members joined</h4>
                                            <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-cyan"> <i class="material-icons">add_shopping_cart</i> </div>
                                        <div class="menu-info">
                                            <h4>4 sales made</h4>
                                            <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue"> <i class="material-icons">delete_forever</i> </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy Doe</b> deleted account</h4>
                                            <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-green"> <i class="material-icons">mode_edit</i> </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy</b> changed name</h4>
                                            <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-pink"> <i class="material-icons">comment</i> </div>
                                        <div class="menu-info">
                                            <h4><b>GetWheelz</b> commented your post</h4>
                                            <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-lime"> <i class="material-icons">cached</i> </div>
                                        <div class="menu-info">
                                            <h4><b>GetWheelz</b> updated status</h4>
                                            <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple"> <i class="material-icons">settings</i> </div>
                                        <div class="menu-info">
                                            <h4>Settings updated</h4>
                                            <p> <i class="material-icons">access_time</i> Yesterday </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                    </ul>
                </li>
                
               </ul>
        </div>
    </nav>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image"> <img src="{{ asset('theme/images/user.jpg') }}" width="48" height="48" alt="User" /> </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown">Admin | GetWheelz</div>
                <div class="email"></div>
                
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Home</span></a>
                    <ul class="ml-menu">
                        <li><a href="{{ route('certified.index') }}">Post New Car</a> </li>
                        <li><a href="{{ route('auction.index') }}">Post Auction cars</a> </li>
                        <li><a href="{{ route('rental.index') }}">Car rental</a> </li>
                        <li><a href="{{ route('admin.blog') }}">Post New Blog</a> </li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Shop</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{ route('shop.index') }}">Products</a></li>
                        <li><a href="{{ route('shop.create') }}">Add New Product</a></li>
                        <li><a href="{{ url('admin/orders') }}">All Orders</a></li>
                        <li><a href="{{ url('admin/orders/pending')}}">Pending Orders</a></li>
                        <li><a href="{{ url('admin/orders/delivered')}}">Delivered Orders</a></li>
                    </ul>
                </li>
                
               </ul>
        </div>
        <!-- #Menu -->
    </aside>

    <!-- Right Sidebar -->
    
    <!-- Main Content -->
    @yield('contant')
    <!-- Jquery Core Js -->
    <script src="{{ asset('dashboard/assets/bundles/libscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('dashboard/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('dashboard/assets/bundles/jvectormap.bundle.js') }}"></script>
    <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('dashboard/assets/bundles/sparkline.bundle.js') }}"></script>
    <!-- Sparkline Plugin Js -->
    <script src="{{ asset('dashboard/assets/bundles/morrisscripts.bundle.js') }}"></script>
    <!-- Morris Plugin Js -->
    <script src="{{ asset('dashboard/assets/bundles/flotscripts.bundle.js') }}"></script>
    <!-- Flot Charts Plugin Js -->

    <script src="{{ asset('dashboard/assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/pages/index.js') }}"></script>
    <script>
            new FroalaEditor('textarea#froala-editor')
          </script>
</body>

</html>