<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Infokos</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/assets/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('template/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('template/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    @livewireStyles
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
        @include('layouts.partials.navbar')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.partials.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @yield('content')
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
    <script src="{{ asset('template/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('template/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('template/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('template/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('template/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('template/dist/js/custom.min.js') }}"></script>


    <!-- Charts js Files -->
    <script src="{{ asset('template/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('template/dist/js/pages/chart/chart-page-init.js') }}"></script>
    <script>
        window.addEventListener('modal-store',()=>{                             
                    $('#modelId').modal('hide');
                    $('#toastId').toast('show');
                });
        window.addEventListener('modal-edit',()=>{            
                    $('#modelId').modal('show');                
                });    
        window.addEventListener('modal-detail',()=>{            
                    $('#modelId').modal('show');                
                });    
        window.addEventListener('tersimpan',()=>{                                                 
                    $('#toastId').toast('show');
                });
        window.addEventListener('modal-deleteConfirm',()=>{   
            $('#deleteId').modal('show');
        });
        
        window.addEventListener('modal-delete',()=>{  
            $('#deleteId').modal('hide');   
            $('#toastDeleteId').toast('show');            
            });              
    </script>
    @stack('scripts')
    @livewireScripts
</body>

</html>