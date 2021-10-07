<script src="<?= base_url('assets/jquery.min.js'); ?>"></script>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                	<h4 class="card-title">List siswa Kelas VII</h4>
                                	<small>silahkan ceklis semua siswa yang akan dinilai</small>
                                </center>
                                <div class="table-responsive">
                              	<form action="<?= base_url('admin/kelas1/prosessimpanlist'); ?>" method="POST">

                              	<label>Nama Guru</label>
                              	<select name="nip" id="nip" class="form-control form-control-sm mb-3">
			                        <option value="">Guru</option>
			                        <?php foreach ($guru as $kt) : ?>
			                           <option value="<?= $kt['nip_guru'] ?>"><?= $kt['nama_guru'] ?></option>
			                        <?php endforeach; ?>
			                  	</select>

			                  	<label>Mata Pelajaran</label>
                              	<select name="id_mapel" id="id_mapel" class="form-control form-control-sm mb-3">
			                        <option value="">Mata Pelajaran</option>
			                        <?php foreach ($mapel as $dat) : ?>
			                           <option value="<?= $dat['id_mapel'] ?>"><?= $dat['mapel'] ?></option>
			                        <?php endforeach; ?>
			                  	</select>

                                    <table class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Siswa</th>
                                                <th>Action
                                                 <input type="checkbox" id="checkall"><small>Check All</small>
                                                 </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                             			<?php
						                     $i = 1;
						                     foreach ($kelas1 as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['nama_siswa']; ?></td>
						                           <td> <input type="checkbox" name="proses[]" value="<?php echo $dat['nisn']; ?>" class="checkitem"></td>
						                       </tr>

						                  <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
  <script>
    $(document).ready(function () {
    $('#example1').DataTable({
    "scrollX": true
    });
    $('.dataTables_length').addClass('bs-select');
  });

   $("#checkall").change(function(){
      $(".checkitem").prop("checked", $(this).prop("checked"))
    })
    // berfungsi untuk mengubah beberapa item checkbox terpilih(checklist) semua atau tidak terpilih (unchecklist)
    $(".checkitem").change(function(){
      if($(this).prop("checked")==false){
        $("#checkall").prop("checked",false)
      }
      // saat beberapa item terpilih dan hampir semua maka akan pada checkbox yang memiliki id CHECKALL terchecklist
      if($(".checkitem:checked").length == $(".checkitem").length){
        $("#checkall").prop("checked",true)
      }
    })  

  </script>      
 