<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
   <!-- ============================================================== -->
   <!-- Topbar header - style you can find in pages.scss -->
   <!-- ============================================================== -->
   <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md">
         <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand justify-content-center mt-3">
               <!-- Logo icon -->
               <a href="<?= base_url('dashboard'); ?>">
                  <img width="150px" src="<?= base_url('assets/img/sipaud.png') ?>" class="logo" />
               </a>
            </div>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
         </div>
         <!-- ============================================================== -->
         <!-- End Logo -->
         <!-- ============================================================== -->
         <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
               <!-- Notification -->
              
               
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
               <!-- ============================================================== -->
               <!-- Search -->
               <!-- ============================================================== -->
               <li class="nav-item d-none d-md-block">
                 
               </li>
               <!-- ============================================================== -->
               <!-- User profile and search -->
               <!-- ============================================================== -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img src="<?= base_url('assets/img/') ?>logo.jpeg" alt="user" class="rounded-circle" width="40">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                     <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                        Logout</a>
                  
                  </div>
               </li>
               <!-- ============================================================== -->
               <!-- User profile and search -->
               <!-- ============================================================== -->
            </ul>
         </div>
      </nav>
   </header>

   
   <!-- ============================================================== -->
   <!-- End Topbar header -->
   <!-- ============================================================== -->