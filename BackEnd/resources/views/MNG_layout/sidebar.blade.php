    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    {{-- <a href="{{route('user.dashboard')}}"><img src="assets/images/icon/logo3.png" alt="logo"></a> --}}
                    <a href="{{route('user.dashboard')}}"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('user.dashboard')}}">Content Manage dashboard</a></li>
                                    <li class="active"><a href="{{route('user.MNGorderdetails')}}">Order approval dashboard</a></li>
                                    
                                </ul>
                            </li>

                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Manage Credentials</span></a>
                                <ul class="collapse">
                                    {{-- <li><a href="/creatorprofile">Creators Profile</a></li> --}}
                                    {{-- <li class="active"><a href="/userprofile">User Profile</a></li> --}}
                                </ul>
                            </li>




                            
                            <li><a href="/payment"><i class="ti-map-alt"></i> <span>Payement view</span></a></li>
                            <li><a href="/allcontent"><i class="ti-receipt"></i> <span>All Content</span></a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->