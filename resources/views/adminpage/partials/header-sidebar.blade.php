    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/homepage" class="logo d-flex align-items-center">
                <img src="{{ asset('adminpage/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">
                    <div class="nav-link nav-profile d-flex align-items-center pe-0">
                        <span class="d-none d-md-block ps-2">Selamat Datang Administrator !</span>
                    </div><!-- End Profile Iamge Icon -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link {{ \Route::is('admin_home') ? 'active' : '' }}" href="{{ route('admin_home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Utama</span>
                </a>
            </li>
            <li class="nav-heading">Pages</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/category">
                    <i class="bi bi-bookmark-plus"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/products">
                    <i class="bx bxs-food-menu"></i>
                    <span>Menu Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/table">
                    <i class="bx bx-chair"></i>
                    <span>Meja Makan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/order">
                    <i class="bx bx-cart-alt"></i>
                    <span>Daftar Pesanan</span>
                </a>
            </li>
            <li class="nav-heading">Administrator</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin">
                    <i class="bx bxs-user-plus"></i>
                    <span>Tambah Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/">
                    <i class="bx bxs-user-circle"></i>
                    <span>Halaman Pengguna</span>
                </a>
            </li>
        </ul>
    </aside><!-- End Sidebar-->
