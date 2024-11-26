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
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('/alternatif') ? 'active' : '' }}"
                        href="{{ url('/') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>

                @if (Auth::check())

                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('/alternatif') ? 'active' : '' }}"
                        href="{{ url('/alternatif') }}" aria-expanded="false"><i class="mdi mdi-note-outline"></i><span
                            class="hide-menu">Data Alternatif</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('/kriteria') ? 'active' : '' }}"
                        href="{{ url('/kriteria') }}" aria-expanded="false"><i class="mdi mdi-note-plus"></i><span
                            class="hide-menu">Data Kriteria</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('/penilaian') ? 'active' : '' }}"
                        href="{{ url('/penilaian') }}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                            class="hide-menu">Penilaian</span></a></li>
                @endif
                

                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('/hasil') ? 'active' : '' }}"
                        href="{{ url('/hasil') }}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                            class="hide-menu">Hasil</span></a></li>
                @if (Auth::check())
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('/profil') ? 'active' : '' }}"
                        href="{{ url('/profil') }}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                            class="hide-menu">Profil</span></a>
                </li>

                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->