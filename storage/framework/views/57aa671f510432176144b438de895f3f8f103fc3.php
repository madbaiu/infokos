<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <?php if(auth()->guard()->check()): ?>

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Selamat Datang Admin Infokos!</h4>
                <div class="ms-auto text-end">
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

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
            <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <button class="btn" wire:click.prevent="detail(<?php echo e($item->id); ?>)">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo e(url('/storage/' . $item->foto[0]['foto'])); ?>" alt="/" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($item->nama); ?></h5>
                        </div>
                    </div>
                </button>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="" style="float: right"><?php echo e($lists->links()); ?></div>

        </div>

        <!-- Modal -->
        <?php if($data): ?>
        <div wire:ignore.self class="modal fade" id="modelId" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <?php if($data->foto): ?>
                                <div class="form-group row ">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner mb-2">
                                            <?php $__currentLoopData = $data->foto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jalur_berkas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                                                <img src="<?php echo e(asset('storage/'.$jalur_berkas['foto'] )); ?>" loading=”lazy”
                                                    class=" d-block w-100" style="max-height: 20rem; object-fit: cover;"
                                                    alt="...">
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <a class="carousel-control-prev" data-bs-target="#carouselExampleControls"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-bs-target="#carouselExampleControls"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="row">
                                    <p>Ranking : <?php echo e($data->ranking); ?></p>
                                    <p>Nilai : <?php echo e($data->nilai); ?></p>
                                    <p>Nama Kost &nbsp;: <span class="fw-bold text-capitalize"> <?php echo e($data->nama); ?></span>
                                    </p>
                                    <p>Alamat Kost :
                                        <span class="fw-bold text-capitalize"> <?php echo e($data->alamat); ?> </span>
                                    </p>
                                    <p>Kontak Kost : <span class="fw-bold text-capitalize"> <?php echo e($data->kontak); ?></span></p>
                                    <p>Keterangan : </p>
                                    <p class="fw-bold text-capitalize"><?php echo e($data->keterangan); ?> </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            wire:click="resetFields">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- ============================================================== -->
        <!-- End Page Content -->
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
</div><?php /**PATH D:\xampp\htdocs\Projek\bayu\resources\views/livewire/dashboard-komponen.blade.php ENDPATH**/ ?>