
<div class="col-12"> 
    <div class="card">
        <div class="card-body">       
            <h4 class="card-title">Input Nilai</h4>
               <form action="<?= base_url('admin/kelas1/forminputnilai') ?>" method="POST">
               <div class="form-body">
                <div class="row">
                 <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" name="id_mapel" value="<?= $mapel['id_mapel']; ?>" readonly>
                  </div>
                  </div>
                <div class="col-md-12">
                   <input class="form-control form-control-sm mb-3" type="text" placeholder="NIP Guru" name="nip_guru" id="nip_guru" value="<?= $this->session->userdata('username'); ?>" readonly>
                  </div> 
                   <div class="col-md-12">
                   <input class="form-control form-control-sm mb-3" type="text" placeholder="NISN" name="nisn" id="nisn" value="<?= $this->uri->segment(4); ?>" readonly>
                  </div> 
                  <div class="col-md-12">
                  <select name="semester" id="semester" class="form-control form-control-sm mb-3">
                        <?php foreach ($semester as $sem) : ?>
                           <option value="<?= $sem['id_semester'] ?>"><?= $sem['semester'] ?></option>
                        <?php endforeach; ?>
                  </select>
                  </div>
                  <div class="col-md-12">
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nilai Tugas" name="nilai_tugas" id="nilai_tugas" required>
                  </div>
                  </div> 
                   <div class="col-md-12">
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nilai Ulangan Harian" name="nilai_ulangan_harian" id="nilai_ulangan_harian" required>
                  </div> 
                  </div>
                  <div class="col-md-12">
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nilai UTS" name="nilai_uts" id="nilai_uts" required>
                  </div> 
                  </div>
                  <div class="col-md-12">
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nilai UAS" name="nilai_uas" id="nilai_uas" required>
                  </div> 
                  </div>
                  <div class="col-md-12">
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Angka Pengetahuan" name="angka_pengetahuan" id="angka_pengetahuan" required>
                  </div> 
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Predikat Pengetahuan" name="predikat_pengetahuan" id="predikat_pengetahuan" required>
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Angka Keterampilan" name="angka_keterampilan" id="angka_keterampilan" required>
                  </div>  
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Predikat Keterampilan" name="predikat_keterampilan" id="predikat_keterampilan" required>
                  </div>
                  </div>
    			<div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nilai Dalam Mapel" name="nilai_dalam_mapel" id="nilai_dalam_mapel" required>
                  </div>
                  </div>
    
            <div class="modal-footer">
              <input type="submit" name="input" value="INPUT" class="btn btn-primary">
            </div>
            </div>
            </div>
            </form>
      </div>  
  </div>
</div>    