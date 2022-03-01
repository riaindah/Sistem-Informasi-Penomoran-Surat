<!-- Preloader -->
<div class="preloader">
    <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
    </div>
</div>

<!-- Sidebar -->
<aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
    <header class="sidebar-header">
        <span class="logo">
          <a href="{{route('home')}}">Dinas Perpustakaan Kota </a>
        </span>
    </header>

    <nav class="sidebar-navigation">
        <ul class="menu">
            <li class="menu-category">Home</li>

            <li class="menu-item {{Request::segment(1) == "" ? "active" : ""}} {{Request::segment(1) == "home" ? "active" : ""}}">
                <a class="menu-link" href="{{route('home')}}">
                    <span class="icon fa fa-home"></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="menu-category">INPUT DATA</li>

            <li class="menu-item {{Request::segment(1) == "berkas" ? "active open" : ""}}">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-file"></span>
                    <span class="title">Pencatatan Berkas</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item ">
                       
                        <a class="menu-link" href="{{route('kategori.create')}}">
                            <span class="dot"></span>
                            <span class="title">Input Kategori</span>
                        </a>
                         <a class="menu-link" href="{{route('disposisi.create')}}">
                            <span class="dot"></span>
                            <span class="title">Input Disposisi</span>
                        </a>
                         <a class="menu-link" href="{{route('kepada.create')}}">
                            <span class="dot"></span>
                            <span class="title">Input Kepada</span>
                        </a>
                        <a class="menu-link" href="{{route('suratmasuk.create')}}">
                            <span class="dot"></span>
                            <span class="title">Input Surat</span>
                        </a>

                    </li>

                    <li class="menu-item">
                       
                    </li>
                </ul>
            </li>
             <li class="menu-category">TAMPIL DATA</li>

            <li class="menu-item {{Request::segment(1) == "cashflow" ? "active open" : ""}}">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-list"></span>
                    <span class="title">Tampil DATA</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    
                    <li class="menu-item">
                         <li class="menu-item">
                      
                        <a class="menu-link" href="{{route('kategori.index')}}">
                            <span class="dot"></span>
                            <span class="title">Tampilkan Data Kategori</span>
                        </a>
                         <a class="menu-link" href="{{route('disposisi.index')}}">
                            <span class="dot"></span>
                            <span class="title">Tampilkan Data Disposisi</span>
                        </a>

                         <a class="menu-link" href="{{route('kepada.index')}}">
                            <span class="dot"></span>
                            <span class="title">Tampilkan Data Kepada</span>
                        </a>
                         <a class="menu-link" href="{{route('suratmasuk.index')}}">
                            <span class="dot"></span>
                            <span class="title">Tampilkan Data Surat Masuk</span>
                        </a>
                    </li>

                    </li>
                </ul>
          
            <li class="menu-category">Administrasi</li>


           
        </ul>
    </nav>
</aside>
<!-- END Sidebar -->
