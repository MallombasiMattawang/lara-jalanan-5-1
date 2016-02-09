<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional)
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!--<li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Menu Perizinan</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Data Pemohon</a></li>
                    <li><a href="#">Jenis Perizinan</a></li>
                    <li><a href="#">Pengajuan Izin</a></li>
                    <li><a href="#">Data Perizinan</a></li>
                    <li><a href="#">Provinsi</a></li>
                    <li><a href="#">Kabupaten/Kota</a></li>
                    <li><a href="#">Kecamatan</a></li>
                    <li><a href="#">Desa/Kelurahan</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Menu Informasi Web</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Artiket</a></li>
                    <li><a href="#">Kategori Artikel</a></li>
                    <li><a href="#">Komentar</a></li>
                    <li><a href="#">File Download</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Jadwal Perizinan</a></li>
                    <li><a href="#">Petunjuk Perizinan</a></li>
                    <li><a href="#">Link Terkait</a></li>
                    <li><a href="#">Kotak Saran</a></li>
                    <li><a href="#">Poling</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Menu Aplikasi</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Level Users</a></li>
                    <li><a href="#">Hak Akses</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->

</aside>
