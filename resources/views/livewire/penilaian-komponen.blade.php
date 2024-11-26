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
                        <h4 class="card-title">@if ($options == 'Edit')
                            {{ $options }}
                            @endif Penilaian Alternatif</h4>
                        <div class="form-group row">
                            <label for="atribut"
                                class="col-sm-3 text-end control-label col-form-label">Alternatif</label>
                            <div class="col-sm-9">
                                @if ($options == 'Edit')
                                <div class="form-control">
                                    {{ $nama }}
                                </div>
                                @else
                                <select wire:model.defer="idalternatif" class="select2 form-select shadow-none"
                                    style="width: 100%; height:36px;">
                                    <option>- Pilih Alternatif -</option>
                                    @foreach ($listpilihan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                @endif

                            </div>
                        </div>
                        @foreach ($kriteria as $key => $item)
                        <div class="form-group row">
                            <label for="atribut"
                                class="col-sm-3 text-end control-label col-form-label text-capitalize">Nilai
                                SubKriteria {{ $item->nama }}</label>
                            <div class="col-sm-9">
                                <select wire:model.defer="subkriteria.{{$key}}" class="select2 form-select shadow-none"
                                    style="width: 100%; height:36px;">
                                    <option>- Pilih -</option>
                                    @foreach ($item->subkriteria as $sub)
                                    <option class="text-capitalize" value="{{ $sub->id }}">{{
                                        $sub->bobot }} - {{
                                        $sub->keterangan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            @if($options == 'Edit')
                            <button type="button" wire:click.prevent="resetInput()" class="btn btn-secondary">
                                Batal
                            </button>
                            @endif
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
                                            @foreach ($kriteria as $item)
                                            <th>{{ $item->nama }}</th>
                                            @endforeach
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($lists as $item)
                                        <tr>
                                            <td>{{ $item->nama }}</td>
                                            @foreach ($item->subkriteria as $sub)
                                            <td>{{ $sub->bobot }}</td>
                                            @endforeach
                                            <td>
                                                <a href="#" class="btn btn-warning"
                                                    wire:click="edit({{ $item->id }})">Edit nilai</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7">Data alternatif belum dinilai</td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                            <div class="" style="float: right">{{ $lists->links() }}</div>
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
</div>