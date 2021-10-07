<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div class="preloader">
   <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
   </div>
</div>
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative">
   <div class="col-md-4 bg-white shadow">
      <div class="p-3">
         <div class="text-center">
            <img src="<?= base_url() ?>/assets/img/logo.jpeg" alt="wrapkit" width="80px" height="80px">
         </div>
         <h2 class="mt-3 text-center">Login E-Raport</h2>
         <form class="mt-4" action="<?= base_url('auth/login') ?>" method="POST">
            <div class="row">
               <div class="col-lg-12">
                  <div class="form-group">
                     <label class="text-dark" for="username">Username/NIP</label>
                     <input class="form-control" id="username" name="username" type="text" placeholder="Masukan Username" autocomplete="off" required>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="form-group">
                     <label class="text-dark" for="password">Password</label>
                     <input class="form-control" id="password" name="password" type="password" placeholder="Masukan password" autocomplete="off" required>
                  </div>
               </div>
               <div class="col-lg-12 text-center mb-4">
                  <button type="submit" class="btn btn-block btn-dark">Sign In</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>