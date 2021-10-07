        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?= base_url('vendor/adminmart/') ?>assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <!-- apps -->
        <script src="<?= base_url('vendor/adminmart/') ?>dist/js/app-style-switcher.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>dist/js/feather.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="<?= base_url('vendor/adminmart/') ?>dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <script src="<?= base_url('vendor/adminmart/') ?>assets/extra-libs/c3/d3.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>assets/extra-libs/c3/c3.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>assets/libs/chartist/dist/chartist.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>dist/js/pages/dashboards/dashboard1.min.js"></script>

        <script src="<?= base_url('vendor/adminmart/') ?>assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('vendor/adminmart/') ?>dist/js/pages/datatable/datatable-basic.init.js"></script>

        <script src="<?= base_url('assets/js/') ?>sweetalert2.all.min.js"></script>

        <script>
                const flashdata = $('.flash-data').data('flashdata');
                if(flashdata){
                   Swal.fire({
                      title: 'Data',
                      text: 'Berhasil ' + flashdata,
                      icon: 'success'
                   });
                }
                $('.tombol-hapus').on('click', function(e){
                   e.preventDefault();
                   const href = $(this).attr('href');

                   Swal.fire({
                     title: 'Anda Yakin?',
                     text: "Data Akan di Hapus!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#3085d6',
                     cancelButtonColor: '#d33',
                     confirmButtonText: 'Hapus Data!'
                   }).then((result) => {
                     if (result.value) {
                       document.location.href = href;
                     }
                   })
                })
             
        </script>

        </body>

        </html>