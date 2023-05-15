<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Utama</div>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Kelola Data
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        {{-- <a class="nav-link" href="layout-static.html">Data Manajer</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Data Pegawai</a> --}}
                        <a class="nav-link" href="/dashboard/barang">Data Barang</a>
                        <a class="nav-link" href="/dashboard/kategori">Data Kategori Barang</a>
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Data Gaji</a> --}}
                        {{-- <a class="nav-link" href="/dashboard/gudang">Data Gudang</a> --}}
                        <a class="nav-link" href="/dashboard/gambar">Data Gambar</a>
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Data Transakasi</a> --}}
                    </nav>
                </div>
                {{-- <div class="sb-sidenav-menu-heading">Laporan</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Kelola Laporan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        {{-- <a class="nav-link" href="layout-static.html">Laporan Pegawai</a> --}}
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Laporan Barang</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Laporan Gudang</a> --}}
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Laporan Transaksi</a> --}}
                    {{-- </nav>
                </div> --}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->level }}
        </div>
    </nav>
</div>
