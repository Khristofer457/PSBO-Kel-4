
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Cek-Sapimu!</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('AdminLTE/plugins/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{asset('AdminLTE/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/home">
                        <!-- Logo text -->
                        <span class="logo-text s">
                            <!-- dark Logo text -->
                            <img src="{{asset('AdminLTE/plugins/images/logo-new.png')}}" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li>
                            <a class="profile-pic">
                                <img src="{{asset('AdminLTE/plugins/images/users/varun.jpg')}}" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">{{auth()->user()->name}}</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('/home') ? 'active' : ''}}" href="/home"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Data Kesehatan Sapi</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Sapi</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <h5 class = "text-muted me-3">Hi {{auth()->user()->name}}!</h5>
                            </ol>
                            <a class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" 
                             method="POST" class="d-none">
                                      @csrf
                           <button type="submit" class="btn btn-default btn-flat" >Log out</button>
                          </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Tabel Data Sapi</h3>
                            <div class="d-md-flex">
                            <a href="/tambahdata" class="btn btn-primary text-white d-grid" role="button" aria-pressed="true">Masukan Data Baru</a>
                        </div>
                        <div class="py-4 table-responsive">
                                <table class="table text-nowrap table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center">Nama Sapi</th>
                                            <th class="border-top-0 text-center">Foto Sapi</th>
                                            <th class="border-top-0 text-center">No Eartag</th>
                                            <th class="border-top-0 text-center">Jenis Sapi</th>
                                            <th class="border-top-0 text-center">Jenis Kelamin</th>
                                            <th class="border-top-0 text-center">Tanggal Lahir</th>
                                            <th class="border-top-0 text-center">Berat Badan</th>
                                            <th class="border-top-0 text-center">Tinggi Pundak</th>
                                            <th class="border-top-0 text-center">Lebar Dada</th>
                                            <th class="border-top-0 text-center">Panjang Badan</th>
                                            <th class="border-top-0 text-center">Status Kesehatan</th>
                                            <th class="border-top-0 text-center">Keterangan Perawatan Khusus</th>
                                            <th class="border-top-0 text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Deshmukh</td>
                                            <td>Prohaska</td>
                                            <td>@Genelia</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                            <td>
                                                <div class="btn-group">
                                                <div class="d-md-flex">
                                                    <a href="#" class="btn btn-primary text-white d-grid" role="button" aria-pressed="true">Edit</a>
                                                </div>
                                                <div class="d-md-flex mr-1">
                                                    <a href="#" class="btn btn-danger text-white d-grid" role="button" aria-pressed="true">Delete</a>
                                                </div>
                                                <div class="d-md-flex mr-1">
                                                    <a href="#" class="btn btn-secondary text-white d-grid" role="button" aria-pressed="true">Call Doctor</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td>Gaylord</td>
                                            <td>@Ritesh</td>
                                            <td>member</td>
                                            <td>member</td>
                                            <td>member</td>
                                            <td>member</td>
                                            <td>member</td>
                                            <td>member</td>
                                            <td>member</td>
                                            <td>member</td>
                                            <td>member</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div> 
               </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- =========`===================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
        </div>
        <footer class="footer text-center"> 2022 © CekSapimu
            </footer>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('AdminLTE/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('AdminLTE/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('AdminLTE/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('AdminLTE/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('AdminLTE/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('AdminLTE/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('AdminLTE/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('AdminLTE/js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>