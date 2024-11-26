<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Profil</h4>
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
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <h4 class="card-title text-center">Profil</h4>
                        <!-- title -->
                    </div>
                    @if($gantiForm == false)
                    <div class="card-content">
                        <div class="card-body">
                            <h3 class="card-title">Username</h3>
                            <fieldset class="form-group">
                                <p class="form-control-static">{{ Auth::user()->username }}</p>
                            </fieldset>
                            <div class="my-2" style="float: right;">
                                <button class="btn btn-md btn-warning" wire:click.prevent="edit()">Edit</button>
                            </div>
                        </div>
                    </div>
                    @else

                    <div class="card-content">
                        <div class="card-body">
                            <form wire:submit.prevent="store">
                                <h3 class="card-title">Username </h3>
                                <fieldset class="form-group">
                                    @error('username')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <input type="text" wire:model.defer="username" class="form-control">
                                </fieldset>
                                <h3 class="card-title">Password Baru</h3>
                                <fieldset class="form-group">
                                    @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <input type="password" wire:model.defer="password" class="form-control"
                                        placeholder="iniuntukyangmasuk123">
                                </fieldset>

                                <h3 class="card-title">Konfirmasi Password</h3>
                                <fieldset class="form-group">
                                    <input type="password" wire:model.defer="password_confirmation" class="form-control"
                                        placeholder="iniuntukyangmasuk123">
                                </fieldset>

                                <h3 class="card-title">Password Sekarang</h3>
                                <fieldset class="form-group">
                                    @error('current_password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <input type="password" wire:model.defer="current_password" class="form-control"
                                        placeholder="iniuntukyangmasuk123">
                                </fieldset>
                                <div class="my-2" style="float: right;">
                                    <button class="btn btn-md btn-secondary"
                                        wire:click.prevent="gantiFormIni">Batal</button>
                                    <button type="submit" class="btn btn-md btn-info">Simpan
                                        Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        Admin - <a href="https://www.wrappixel.com">Infokos</a>.
    </footer>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->