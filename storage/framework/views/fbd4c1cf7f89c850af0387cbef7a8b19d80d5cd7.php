<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Data Kriteria</h4>
                <div class="ms-auto text-end">
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Kriteria</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Atribut</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td class="text-capitalize"><?php echo e($item->nama); ?></td>
                                    <td class="text-capitalize"><?php echo e($item->atribut); ?></td>
                                    <td>
                                        <?php if($item->bobot == 5): ?>
                                        <?php echo e($item->bobot); ?> - Sangat Penting
                                        <?php elseif($item->bobot == 4): ?>
                                        <?php echo e($item->bobot); ?> - Penting
                                        <?php elseif($item->bobot == 3): ?>
                                        <?php echo e($item->bobot); ?> - Cukup Penting
                                        <?php elseif($item->bobot == 2): ?>
                                        <?php echo e($item->bobot); ?> - Tidak Penting
                                        <?php elseif($item->bobot == 1): ?>
                                        <?php echo e($item->bobot); ?> - Sangat Tidak Penting
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        Admin - <a href="https://www.wrappixel.com">Infokos</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div><?php /**PATH C:\xampp\htdocs\bayu\resources\views/livewire/kriteria-komponen.blade.php ENDPATH**/ ?>