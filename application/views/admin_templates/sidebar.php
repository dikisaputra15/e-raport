<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
   <!-- Sidebar scroll-->
   <div class="scroll-sidebar" data-sidebarbg="skin6">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav m-t-0">
         <ul id="sidebarnav">
          <?php if ($this->session->userdata('level')=='admin') { ?>
            <li class="sidebar-item <?php if ($this->uri->segment(1) == 'dashboard') echo 'selected' ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('dashboard') ?>" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
            <li class="list-divider"></li>

            <li class="nav-small-cap"><span class="hide-menu">DATA MASTER</span></li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">DATA</span></a>
               <ul aria-expanded="false" class="collapse  first-level base-level-line">
                  <li class="sidebar-item"><a href="<?= base_url('admin/profil') ?>" class="sidebar-link"><span class="hide-menu">Profil Sekolah</span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/kepsek') ?>" class="sidebar-link"><span class="hide-menu">Kepala Sekolah</span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/user') ?>" class="sidebar-link"><span class="hide-menu">  User </span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/guru') ?>" class="sidebar-link"><span class="hide-menu">  Guru </span></a></li>
                   <li class="sidebar-item"><a href="<?= base_url('admin/kelas') ?>" class="sidebar-link"><span class="hide-menu">Kelas</span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/siswa') ?>" class="sidebar-link"><span class="hide-menu"> Siswa </span></a></li>
                   <li class="sidebar-item"><a href="<?= base_url('admin/wali_kelas') ?>" class="sidebar-link"><span class="hide-menu">Wali Kelas</span></a></li>
                 <!--  <li class="sidebar-item"><a href="<?= base_url('admin/jurusan') ?>" class="sidebar-link"><span class="hide-menu">Jurusan</span></a></li> -->
                  <li class="sidebar-item"><a href="<?= base_url('admin/mapel') ?>" class="sidebar-link"><span class="hide-menu">Mapel</span></a></li>
                  
            </li>
         </ul>
         </li>

         <li class="list-divider"></li>

         <li class="nav-small-cap"><span class="hide-menu">DATA NILAI</span></li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Nilai</span></a>
               <ul aria-expanded="false" class="collapse  first-level base-level-line">
                  <li class="sidebar-item"><a href="<?= base_url('admin/kelas1') ?>" class="sidebar-link"><span class="hide-menu">Kelas VII</span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/kelas2') ?>" class="sidebar-link"><span class="hide-menu">Kelas VIII</span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/kelas3') ?>" class="sidebar-link"><span class="hide-menu"> Kelas IX </span></a></li>
            </li>
         </ul>
         </li> 
         <?php } ?>

         <?php if ($this->session->userdata('level')=='guru') { ?>
          <li class="sidebar-item <?php if ($this->uri->segment(1) == 'dashboard') echo 'selected' ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('dashboard') ?>" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
            <li class="list-divider"></li>

            <li class="nav-small-cap"><span class="hide-menu">DATA MASTER</span></li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">DATA</span></a>
               <ul aria-expanded="false" class="collapse  first-level base-level-line">
                  <li class="sidebar-item"><a href="<?= base_url('admin/guru') ?>" class="sidebar-link"><span class="hide-menu">  Guru </span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/siswa') ?>" class="sidebar-link"><span class="hide-menu"> Siswa </span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/mapel') ?>" class="sidebar-link"><span class="hide-menu">Mapel</span></a></li>
            </li>
         </ul>
         </li>

         <li class="list-divider"></li>
         <li class="nav-small-cap"><span class="hide-menu">DATA NILAI</span></li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Nilai</span></a>
               <ul aria-expanded="false" class="collapse  first-level base-level-line">
                  <li class="sidebar-item"><a href="<?= base_url('admin/kelas1') ?>" class="sidebar-link"><span class="hide-menu">Kelas VII</span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/kelas2') ?>" class="sidebar-link"><span class="hide-menu">  Kelas VIII </span></a></li>
                  <li class="sidebar-item"><a href="<?= base_url('admin/kelas3') ?>" class="sidebar-link"><span class="hide-menu"> Kelas IX </span></a></li>
            </li>
         </ul>
         </li>

         <li class="sidebar-item"> <a class="sidebar-link" href="<?= base_url('admin/lap_nilai') ?>" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Laporan Nilai</span></a></li>
        <?php } ?>

         <?php if ($this->session->userdata('level')=='walimurid' || $this->session->userdata('level')=='admin' || $this->session->userdata('level')=='kepala sekolah') { ?>
         <li class="sidebar-item"> <a class="sidebar-link" href="<?= base_url('admin/lap_nilai') ?>" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Laporan Nilai</span></a></li>
         <?php } ?>

         <?php if ($this->session->userdata('level')=='siswa') { ?>
            <li class="sidebar-item"> <a class="sidebar-link" href="<?= base_url('admin/lap_nilai') ?>" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Laporan Nilai</span></a></li>
         <?php } ?>

         <?php if ($this->session->userdata('level')=='walikelas') { ?>
            <li class="list-divider"></li>
             <li class="sidebar-item"> <a class="sidebar-link" href="<?= base_url('admin/lap_nilai') ?>" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Laporan Nilai</span></a></li>
         <?php } ?>

         </ul>
      </nav>
      <!-- End Sidebar navigation -->
   </div>
   <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
   <!-- ============================================================== -->
   <!-- Bread crumb and right sidebar toggle -->
   <!-- ============================================================== -->
   <div class="page-breadcrumb">
      <div class="row">
        <!-- <center><h1>Selamat Datang Pada Sistem Informasi Akademik Paud AL-ISTIQOMAH</h1></center>-->