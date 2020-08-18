 <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                               
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
             <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url('Admin');?>">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-file"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/view_pendapatan');?>">Data Pendapatan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/view_pengeluaran');?>">Data Pengeluaran</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/view_pembangunan');?>">Data Pembangunan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/view_berita');?>">Berita</a>
                                        </li>
                             
                                    </ul>
                                </div>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-euro-sign"></i>Keuangan</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/pendapatan');?>">Pendapatan Desa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/Pengeluaran');?>">Pengeluaran</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/Pembangunan');?>">Pembangunan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-5"><i class="fas fa-edit"></i>widgets</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/berita/');?>">Berita</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('admin/inp_profil');?>">Profil</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-5"><i class="fas fa-clipboard-list"></i>Laporan</a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/u_masuk');?>">Uang Masuk</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/u_pembangunan');?>">Pembangunan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=base_url('Admin/u_keluar');?>">Pengeluaran</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                <a href="<?=base_url('Admin/logout');?>">Logout</a>
                            </li>
                            
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
          <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">