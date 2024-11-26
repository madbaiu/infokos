<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Data Alternatif</h4>
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
            @if($options != 'Info')
            <div class="card">
                <form class="form-horizontal" wire:submit.prevent="store" enctype="multipart/form-data">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Alternatif</h4>
                        <div class="form-group row">
                            <label for="namakos" class="col-sm-3 text-end control-label col-form-label">Nama Kos</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    wire:model.defer="nama" id="namakos" placeholder="Masukkan Nama Kos">
                                @error('nama')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamatkos" class="col-sm-3 text-end control-label col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    wire:model.defer="alamat" id="alamatkos" placeholder="Masukkan Alamat">
                                @error('alamat')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kontakkos" class="col-sm-3 text-end control-label col-form-label">Kontak</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model.defer="kontak"
                                    class="form-control @error('kontak') is-invalid @enderror" id="kontakkos"
                                    placeholder="Masukkan Kontak">
                                @error('kontak')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto" class="col-sm-3 text-end control-label col-form-label">Foto</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile"
                                        wire:model.defer="foto" multiple>
                                    <label class="custom-file-label" for="validatedCustomFile">Pilih
                                        file...</label>

                                </div>
                                @error('foto')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea wire:model.defer="keterangan"
                                    class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                                @error('keterangan')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        @if($old_foto)
                        <div class="form-group row ">
                            @foreach($old_foto as $fot)
                            <div class="col-md-3 mb-3">
                                <img src="{{ asset('storage/'.$fot) }}" class="img-fluid"
                                    style="max-height: 18rem; object-fit: contain;" alt="">
                            </div>
                            @endforeach

                        </div>
                        @endif
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                @if($options == 'Tambah')
                                Tambah
                                @else
                                Edit
                                @endif
                            </button>

                            @if($options == 'Edit')

                            <button type="button" wire:click.prevent="resetInput()" class="btn btn-secondary">
                                Batal
                            </button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            @else
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Lihat Data Alternatif</h4>
                    <div class="row">
                        <div class="col-md-6 fs-4">
                            @if($foto)
                            <div class="form-group row ">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner mb-2">
                                        @foreach($foto as $key => $jalur_berkas)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/'.$jalur_berkas ) }}" loading=”lazy”
                                                class=" d-block w-100" style="max-height: 20rem; object-fit: cover;"
                                                alt="...">
                                        </div>

                                        @endforeach
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
                            @endif

                            <p>Keterangan : </p>
                            <p class="fw-bold text-capitalize">{{ $keterangan }} </p>
                        </div>
                        <div class="col-md-6 fs-4">
                            <p>Nama Kost &nbsp;: <span class="fw-bold text-capitalize"> {{ $nama }}</span></p>
                            <p>Alamat Kost :
                                <span class="fw-bold text-capitalize"> {{ $alamat }} </span>
                            </p>
                            <p>Kontak Kost : <span class="fw-bold text-capitalize"> {{ $kontak }}</span></p>
                        </div>
                    </div>
                    <button type="button" wire:click.prevent="resetInput()" class="btn btn-secondary">
                        Kembali
                    </button>
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Alternatif</h5>
                    <div class="mb-3 col-md-3">
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                            placeholder="Mencari nama/alamat/kontak" wire:model.debounce.500ms="search">
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kontak</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($lists as $item)
                                <tr class="text-capitalize">
                                    <td class="text-center">{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td class="text-center">{{ $item->kontak }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-info" data-bs-toggle="modal"
                                                    wire:click="show({{ $item->id }})">Lihat</a>
                                                <button type="button" class="btn btn-warning"
                                                    wire:click="edit({{ $item->id }})">Edit</button>
                                                <button type="button" class="btn btn-danger text-white"
                                                    data-bs-toggle="modal" data-bs-target="#deleteId"
                                                    wire:click="deleteConfirm({{ $item->id }})">Hapus</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="" style="float: right">{{ $lists->links() }}</div>
                </div>
            </div>
        </div>

        <!-- Modal Hapus-->
        <div wire:ignore.self class="modal fade" id="deleteId" data-bs-backdrop="static" data-bs-keyboard="false"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center fs-4">
                            Apakah anda yakin mau menghapus data?
                        </p>
                        <div style="float: right;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary"
                                wire:click="delete({{ $idHapus }})">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(session()->has('message'))
        <div class="position-fixed  p-3" style="top: 0; right: 0;z-index: 100">
            <div id="toastId" class="toast align-items-center text-white bg-success border-0" role="alert"
                aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('message') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif


        <div class="position-fixed  p-3" style="top: 0; right: 0;z-index: 100">
            <div id="toastDeleteId" class="toast align-items-center text-white bg-danger border-0" role="alert"
                aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                <div class="d-flex">
                    <div class="toast-body">
                        Data berhasil dihapus
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
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