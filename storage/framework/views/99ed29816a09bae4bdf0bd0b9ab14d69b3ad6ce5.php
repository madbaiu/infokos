<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link <?php echo e(request()->routeIs('/alternatif') ? 'active' : ''); ?>"
                        href="<?php echo e(url('/')); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>

                <?php if(Auth::check()): ?>

                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link <?php echo e(request()->routeIs('/alternatif') ? 'active' : ''); ?>"
                        href="<?php echo e(url('/alternatif')); ?>" aria-expanded="false"><i class="mdi mdi-note-outline"></i><span
                            class="hide-menu">Data Alternatif</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link <?php echo e(request()->routeIs('/kriteria') ? 'active' : ''); ?>"
                        href="<?php echo e(url('/kriteria')); ?>" aria-expanded="false"><i class="mdi mdi-note-plus"></i><span
                            class="hide-menu">Data Kriteria</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link <?php echo e(request()->routeIs('/penilaian') ? 'active' : ''); ?>"
                        href="<?php echo e(url('/penilaian')); ?>" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                            class="hide-menu">Penilaian</span></a></li>
                <?php endif; ?>
                

                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link <?php echo e(request()->routeIs('/hasil') ? 'active' : ''); ?>"
                        href="<?php echo e(url('/hasil')); ?>" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                            class="hide-menu">Hasil</span></a></li>
                <?php if(Auth::check()): ?>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link <?php echo e(request()->routeIs('/profil') ? 'active' : ''); ?>"
                        href="<?php echo e(url('/profil')); ?>" aria-expanded="false"><i class="mdi mdi-account"></i><span
                            class="hide-menu">Profil</span></a>
                </li>

                <?php endif; ?>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  --><?php /**PATH C:\xampp\htdocs\bayu\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>