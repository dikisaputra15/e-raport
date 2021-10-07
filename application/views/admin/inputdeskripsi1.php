
<div class="col-12"> 
    <div class="card">
        <div class="card-body">       
            <h4 class="card-title">Input Deskripsi kompetensi</h4>
               <form action="<?= base_url('admin/kelas1/forminputdeskripsi') ?>" method="POST">
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
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Catatan Pengetahuan" name="c_pengetahuan" id="c_pengetahuan" required>
                  </div> 
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Catatan Praktek" name="c_praktek" id="c_praktek" required>
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Catatan Spiritual dan sosial" name="c_spiritual" id="c_spiritual" required>
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