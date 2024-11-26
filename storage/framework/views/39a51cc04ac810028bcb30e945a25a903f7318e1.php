<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">

            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon -->
                <b class="logo-icon ps-2">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="<?php echo e(asset('template/assets/images/logo-icon.png')); ?>" alt="homepage" class="light-logo" />

                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="<?php echo e(asset('template/assets/images/logo-text1.png')); ?>" alt="homepage" class="light-logo" />

                </span>
                <!-- Logo icon -->
                <!-- <b class="logo-icon"> -->
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                <!-- </b> -->
                <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                        href="javascript:void(0)" data-sidebartype="mini-sidebar"><i
                            class="mdi mdi-menu font-24"></i></a></li>
            </ul>
            <?php if(Auth::check()): ?>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo e(asset('template/assets/images/users/1.jpg')); ?>" alt="user" class="rounded-circle"
                        width="31">
                </a>
                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>
                </ul>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
            <?php else: ?>


            <a class="nav-link btn btn-warning" href="<?php echo e(url('/login')); ?>">
                Login admin
            </a>

            <?php endif; ?>

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header --><?php /**PATH D:\xampp\htdocs\Projek\bayu\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>