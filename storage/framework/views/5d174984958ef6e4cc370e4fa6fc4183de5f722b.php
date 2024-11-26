<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Hasil Perhitungan</h4>
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
    <div class="container-flui\d">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="ml-2 mb-3">
                            <button class="btn btn-md btn-primary" onclick="toggle()" id="tombol">
                                <div class="d-flex align-items-center">
                                    Tampil Perhitungan
                                    <i class=" mdi mdi-eye"></i>
                                </div>
                            </button>
                        </div>
                        <div id="lihat" style="display: none;">
                            <h5 class="card-title">Alternatif</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-capitalize">
                                        <tr>
                                            <th>Alternatif</th>
                                            <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th><?php echo e($item->nama); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $alternatif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->nama); ?></td>
                                            <?php $__currentLoopData = $item->subkriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td><?php echo e($sub->bobot); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="fw-bold">
                                            <td>Bobot</td>
                                            <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td><?php echo e($item->bobot); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <h5 class="card-title">Normalisasi Bobot Weighted Product</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-capitalize">
                                        <tr>
                                            <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th><?php echo e($item->nama); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                        <tr>
                                            <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th><?php echo e($item->atribut); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td><?php echo e($item['nbobot']); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <h5 class="card-title">Menentukan Nilai Vektor S Weighted Product</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <th>Vektor S</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $alternatif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item['nama']); ?></td>
                                            <td><?php echo e($vektor_s[$key]); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <h5 class="card-title">Menentukan Nilai Vektor V Weighted Product</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <th>Vektor V</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item['nama']); ?></td>
                                            <td><?php echo e($item['hasil']); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                            <br>
                        </div>
                        <h5 class="card-title">Ranking Weighted Product</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Alternatif</th>
                                        <th>Vektor V</th>
                                        <th>Rangking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $hasilranking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item['nama']); ?></td>
                                        <td><?php echo e($item['hasil']); ?></td>
                                        <td><?php echo e($key+1); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <?php $__env->startPush('scripts'); ?>
        <script>
            function toggle() {
            var x = document.getElementById("lihat");
            if (x.style.display === "none") {
                x.style.display = "block";
                document.getElementById("tombol").innerHTML = "<div class='d-flex align-items-center'>Tutup Perhitungan<i class='mdi mdi-eye-off'></i></div>";
            } else {
                x.style.display = "none";
                document.getElementById("tombol").innerHTML = "<div class='d-flex align-items-center'>Tampil Perhitungan<i class='mdi mdi-eye'></i></div>";

            }
            }
        </script>
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
</div><?php /**PATH C:\xampp\htdocs\bayu\resources\views/livewire/hasil-komponen.blade.php ENDPATH**/ ?>