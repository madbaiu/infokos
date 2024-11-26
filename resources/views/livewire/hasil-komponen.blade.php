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
                                            @foreach ($kriteria as $item)
                                            <th>{{ $item->nama }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alternatif as $item)
                                        <tr>
                                            <td>{{ $item->nama }}</td>
                                            @foreach ($item->subkriteria as $sub)
                                            <td>{{ $sub->bobot }}</td>
                                            @endforeach

                                        </tr>
                                        @endforeach
                                        <tr class="fw-bold">
                                            <td>Bobot</td>
                                            @foreach ($kriteria as $item)
                                            <td>{{ $item->bobot }}</td>
                                            @endforeach
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
                                            @foreach ($kriteria as $item)
                                            <th>{{ $item->nama }}</th>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            @foreach ($kriteria as $item)
                                            <th>{{ $item->atribut }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($kriteria as $key => $item)
                                            <td>{{ $item['nbobot'] }}</td>
                                            @endforeach
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
                                        @foreach ($alternatif as $key => $item)
                                        <tr>
                                            <td>{{ $item['nama'] }}</td>
                                            <td>{{$vektor_s[$key] }}</td>
                                        </tr>
                                        @endforeach

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
                                        @foreach ($hasil as $key => $item)
                                        <tr>
                                            <td>{{ $item['nama'] }}</td>
                                            <td>{{$item['hasil'] }}</td>
                                        </tr>
                                        @endforeach

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
                                    @foreach ($hasilranking as $key => $item)
                                    <tr>
                                        <td>{{ $item['nama'] }}</td>
                                        <td>{{$item['hasil'] }}</td>
                                        <td>{{ $key+1 }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        @push('scripts')
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
</div>