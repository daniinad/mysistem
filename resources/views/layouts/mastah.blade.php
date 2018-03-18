<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Bahan Bangunan</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/datepicker3.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- navbar -->
    @include('layouts.navbar')
    <!-- end navbar -->
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="{{ asset('img/admin.png')}}" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">Admin</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        
        </form>
        <ul class="nav menu">
            <li><a href="{{ url('/')}}"><em class="fa fa-dashboard"></em> Dashboard</a></li>
            <li><a href="{{ url('/user')}}"><em class="glyphicon glyphicon-log-in"></em> Web</a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Table <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a href="{{ route('bahan.index')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Barang
                    </a></li>
                    <li><a href="{{ route('pelanggan.index')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Pembeli
                    </a></li>
                    <li><a href="{{ route('transaksi.index')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Transaksi
                    </a></li>
                </ul>
            </li>
            <li>
                @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            
                        @else
            <a href="{{ route('logout') }}" class="fa fa-power-off"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> @endif</li>


        </ul>

    </div>
    @yield('content')<!--/.sidebar-->
       
        
       
    
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/chart.min.js"></script>
    <script src="/js/chart-data.js"></script>
    <script src="/js/easypiechart.js"></script>
    <script src="/js/easypiechart-data.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/custom.js"></script>
    
         @yield('scripts')
</body>
</html>