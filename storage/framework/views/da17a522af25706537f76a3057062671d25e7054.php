<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Penilaian</h4>
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
                <form class="form-horizontal" wire:submit.prevent="store">
                    <div class="card-body">
                        <h4 class="card-title"><?php if($options == 'Edit'): ?>
                            <?php echo e($options); ?>

                            <?php endif; ?> Penilaian Alternatif</h4>
                        <div class="form-group row">
                            <label for="atribut"
                                class="col-sm-3 text-end control-label col-form-label">Alternatif</label>
                            <div class="col-sm-9">
                                <?php if($options == 'Edit'): ?>
                                <div class="form-control">
                                    <?php echo e($nama); ?>

                                </div>
                                <?php else: ?>
                                <select wire:model.defer="idalternatif" class="select2 form-select shadow-none"
                                    style="width: 100%; height:36px;">
                                    <option>- Pilih Alternatif -</option>
                                    <?php $__currentLoopData = $listpilihan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php endif; ?>

                            </div>
                        </div>
                        <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group row">
                            <label for="atribut"
                                class="col-sm-3 text-end control-label col-form-label text-capitalize">Nilai
                                SubKriteria <?php echo e($item->nama); ?></label>
                            <div class="col-sm-9">
                                <select wire:model.defer="subkriteria.<?php echo e($key); ?>" class="select2 form-select shadow-none"
                                    style="width: 100%; height:36px;">
                                    <option>- Pilih -</option>
                                    <?php $__currentLoopData = $item->subkriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text-capitalize" value="<?php echo e($sub->id); ?>"><?php echo e($sub->bobot); ?> - <?php echo e($sub->keterangan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <?php if($options == 'Edit'): ?>
                            <button type="button" wire:click.prevent="resetInput()" class="btn btn-secondary">
                                Batal
                            </button>
                            <?php endif; ?>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Keterangan SubKriteria Harga</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Harga</th>
                                        <th>Keterangan</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sangat Murah</td>
                                        <td>
                                            <= Rp 300.000</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Murah</td>
                                        <td>
                                            < Rp 500.000</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Sedang</td>
                                        <td>
                                            < Rp 750.000</td>
                                        <td>3</td>
                                    <tr>
                                        <td>Mahal</td>
                                        <td>
                                            < 1.000.000</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Sangat Mahal</td>
                                        <td>>= 1.000.000</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Keterangan SubKriteria Fasilitas</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Fasilitas</th>
                                        <th>keterangan</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sangat Lengkap</td>
                                        <td>Kasur, Lemari, A/C, Wifi, Tv, Meja, Kursi</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Lengkap</td>
                                        <td>Kasur, Lemari, A/C, Wifi, Tv</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Cukup Lengkap</td>
                                        <td>Kasur, Lemari, Kipas Angin, Wifi</td>
                                        <td>3</td>
                                    <tr>
                                        <td>Kurang Lengkap</td>
                                        <td>Kasur, Lemari, Kipas Angin</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Tidak Lengkap</td>
                                        <td>Kasur, Lemari</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Keterangan SubKriteria Jarak</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Jarak</th>
                                        <th>Keterangan</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sangat Dekat</td>
                                        <td>
                                            <= 250 meter</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Dekat</td>
                                        <td>
                                            < 500 meter</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Sedang</td>
                                        <td>
                                            < 1 kilometer</td>
                                        <td>3</td>
                                    <tr>
                                        <td>Jauh</td>
                                        <td>
                                            < 3 kilometer</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Sangat Jauh</td>
                                        <td>>= 3 kilometer</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Keterangan SubKriteria Luas Kamar</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Luas Kamar</th>
                                        <th>Keterangan</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sangat Luas</td>
                                        <td>5 x 6</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Luas</td>
                                        <td>5 x 5</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Sedang</td>
                                        <td>4 x 5</td>
                                        <td>3</td>
                                    <tr>
                                        <td>Kecil</td>
                                        <td>3 x 4</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Sangat Kecil</td>
                                        <td>3 x 3</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Keterangan SubKriteria Keamanan</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Keamanan</th>
                                        <th>Keterangan</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sangat Aman</td>
                                        <td>Lahan Parkir, Teralis Jendela, Pagar, Pos Satpam, CCTV</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Aman</td>
                                        <td>Lahan Parkir, Teralis Jendela, Pagar, Pos Satpam</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Cukup Aman</td>
                                        <td>Lahan Parkir, Teralis Jendela, Pagar</td>
                                        <td>3</td>
                                    <tr>
                                        <td>Kurang Aman</td>
                                        <td>Lahan Parkir, Teralis Jendela</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Tidak Aman</td>
                                        <td>Lahan Parkir </td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Penilaian</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                            <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th><?php echo e($item->nama); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($item->nama); ?></td>
                                            <?php $__currentLoopData = $item->subkriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td><?php echo e($sub->bobot); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <td>
                                                <a href="#" class="btn btn-warning"
                                                    wire:click="edit(<?php echo e($item->id); ?>)">Edit nilai</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="7">Data alternatif belum dinilai</td>
                                        </tr>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="" style="float: right"><?php echo e($lists->links()); ?></div>
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
        <?php if(session()->has('message')): ?>
        <div class="position-fixed  p-3" style="top: 0; right: 0;z-index: 100">
            <div id="toastId" class="toast align-items-center text-white bg-success border-0" role="alert"
                aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                <div class="d-flex">
                    <div class="toast-body">
                        <?php echo e(session('message')); ?>

                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php endif; ?>


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
</div><?php /**PATH D:\xampp\htdocs\Projek\bayu\resources\views/livewire/penilaian-komponen.blade.php ENDPATH**/ ?>