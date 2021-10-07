

<table border="1" width="700px;">
	<tr>
		<td>Lembaran Buku Induk Peserta Didik</td>
		<td>28345623846</td>
	</tr>
	<tr>
		<td rowspan="2">
			Nama Peserta Didik : <?php echo $nama1['nama_siswa']; ?><br>
			Kelas : <?php echo $nama1['kelas']; ?>
		</td>
		<td><?php echo $nama1['tahun_ajaran']; ?></td>
	</tr>
	<tr>
		
		<td><?php echo $nama1['semester']; ?></td>
	</tr>
</table>

<table border="1" width="700px">
	<tr>
		<td rowspan="2">Mata Pelajaran</td>
		<td colspan="2">Pengetahuan</td>
		<td colspan="2">keterampilan</td>
		<td colspan="2">Sikap Spritual dan Sosial</td>
	</tr>
	<tr>
	
		<td>Angka</td>
		<td>Predikat</td>
		<td>Angka</td>
		<td>Predikat</td>
		<td>Dalam Mapel</td>
		<td>Antar Mapel</td>
	</tr>
<?php 
		foreach($raport as $dat){
?>	
	<tr>
		<td><?php echo $dat['mapel']; ?></td>
		<td><?php echo $dat['angka_pengetahuan']; ?></td>
		<td><?php echo $dat['predikat_pengetahuan']; ?></td>
		<td><?php echo $dat['angka_keterampilan']; ?></td>
		<td><?php echo $dat['predikat_pengetahuan']; ?></td>
		<td><?php echo $dat['nilai_dalam_mapel']; ?></td>
		<td><p>peserta didik sudah menunjukkan kesungguhannya dalam mengamalkan nya dengan sangat baik, sudah menunjukkan sikap santun, kerjasama, gotong-royong, cinta damai, ramah lingkungan, namun masih perlu ditingkatkan lagi, sikap jujur, percaya diri, dan peduli</p></td>
	</tr>
<?php } ?>
</table><br>


<table width="700px;">
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><?php echo $nama2['nama_siswa']; ?></td>
		<td>Tahun Ajaran</td>
		<td>:</td>
		<td><?php echo $nama2['tahun_ajaran']; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $nama2['kelas']; ?></td>
		<td>Semester</td>
		<td>:</td>
		<td><?php echo $nama2['semester']; ?></td>
	</tr>
</table> 

<h5>Deskripsi Kompetensi</h5>

<table border="1" width="700px;">
	<tr>
		<td>Mata Pelajaran</td>
		<td>Kompetensi</td>
		<td>Catatan</td>
	</tr>
<?php 
	foreach($deskripsi as $data){
?>
	<tr>
		<td rowspan="3"><?php echo $data['mapel']; ?></td>
		<td>Pengetahuan</td>
		<td><?php echo $data['c_pengetahuan']; ?></td>
	</tr>
	<tr>
		<td>Praktek</td>
		<td><?php echo $data['c_praktek']; ?></td>
	</tr>
	<tr>
		<td>Sikap Spiritual dan sosial</td>
		<td><?php echo $data['c_sikap']; ?></td>
	</tr>
<?php } ?>
</table>

<h5>Ekstrakurikuler</h5>
<table border="1" width="700px;">
	<tr>
		<td>Ekstra kurikuler</td>
		<td>Keikutsertaan dalam kegiatan</td>
	</tr>
	<tr>
		<td>1. </td>
		<td>...</td>
	</tr>
	<tr>
		<td>2. </td>
		<td>...</td>
	</tr>
	<tr>
		<td>3. </td>
		<td>...</td>
	</tr>
</table><br>

<table border="1" width="400px;">
	<tr>
		<td><center>Ketidakhadiran</center></td>
	</tr>
	<tr>
		<td>
			Sakit : ... hari  <br>
			Izin : ... hari <br>
			tanpa keterangan : ... hari
		</td>
	</tr>

</table>
<center><h5><b>Naik Ke Kelas... / Tinggal di kelas...</b></h5></center>
<br><br>

<table width="900px;">
	<tr>
		<td>
			Mengetahui, <br>
			Orang Tua/Wali <br><br><br><br><br><br>
		 </td>
		<td>
			sekampung udik, 12 desember 2021<br>
			Wali kelas<br><br><br><br><br><br>



			HASANUDIN, S.Pd
		</td>
	</tr>
</table>