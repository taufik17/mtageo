<section class="content">
						<div class="box">
								<div class="box-header">
										<h3 class="box-title">Data Lengkap Mahasiswa TA</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
										<table id="example1" class="table table-bordered table-striped">
												<thead>
												<tr>
														<th>Nomor</th>
														<th>NIM</th>
														<th>Nama</th>
														<th>Judul TA</th>
														<th>Pembimbing1</th>
														<th>Pembimbing2</th>
														<th>Pembimbing3</th>
														<th>File Proposal</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<?php
			        		$no = 1;
			        		foreach ($daftar_bimbingan_ta->result() as $row ) {
			        		?>
														<td><?php echo $no++; ?>.</td>
														<td><?php echo $row->NIM ;?></td>
														<td><?php echo $row->Nama_mhs ;?></td>
														<td><?php echo $row->judul_ta ;?></td>
														<td><?php echo $row->dosen_pembimbing1 ;?></td>
														<td><?php echo $row->Nama ;?></td>
														<td><?php echo $row->dosen_pembimbing3 ;?></td>
														<td>
														<a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->cv; ?>" class="btn btn-primary btn-sm" target="_blank">CV</a>
														<a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_transkrip; ?>" class="btn btn-primary btn-sm" target="_blank">Transkip</a>
														<a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_proposal; ?>" class="btn btn-primary btn-sm" target="_blank">Proposal</a>
													</td>
												</tr>
												<?php }?>
												</tbody>
										</table>
								</div>
								<!-- /.box-body -->
						</div>
						</section>
<!-- menu pop up berkas -->
<div class="modal fade" id="contohmodal" tabindex="-100" role="dialog">
	<div class="modal-dialog modal-md" role="dialog">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h3 align="center"> Berkas unggahan dari Mahasiswa</h3>
	</div>
	<form method="post" enctype="multipart/form-data">
	<div class="modal-body">
		<div align="center" class="form-group">
		<td><a type="button" href="<?php echo base_url();?>dosen/riwayathidup/<?php echo $row->id_ta; ?>" class="btn btn-primary" target="_blank">Riwayat Hidup (CV)</a></td>
		<a type="button" href="<?php echo base_url();?>dosen/transkipnilai/<?php echo $row->id_ta; ?>" " class="btn btn-primary" target="_blank">Transkip Nilai</a>
		<a type="button" href="<?php echo base_url();?>dosen/Proposal/<?php echo $row->id_ta; ?>" " class="btn btn-primary" target="_blank">Proposal</a>
	</div>
	</div>
	</form>

</div>
</div>
</div>

						<!-- menu pop up terima -->
<div class="modal fade" id="modalterima" tabindex="-100" role="dialog">
	<div class="modal-dialog modal-md" role="dialog">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h3 align="center"> Apakah anda yakin ingin menerima?</h3>
	</div>
	<form method="post" enctype="multipart/form-data">

	<div class="modal-body">
		<div align="justify" class="form-group">
		<label>Catatan(optional)</label>
		<textarea class="form-control" id="catat" placeholder="Masukkan Catatan Anda"></textarea>

	</div>
	</div>
	</form>
	<div class="modal-footer">
		<td><a href="<?php echo base_url();?>Permohonan_bimbingan/terima/<?php echo $row->id_ta ;?>">
		<input type="submit" class="btn btn-success" name="terima_ta" value="Terima">
	</a></td>
	</div>
</div>
</div>
</div>

						<!-- menu pop up tolak -->
<div class="modal fade" id="modaltolak" tabindex="-100" role="dialog">
	<div class="modal-dialog modal-md" role="dialog">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h3 align="center"> Apakah anda yakin ingin menolak?</h3>
	</div>
	<form method="post" enctype="multipart/form-data">
	<div class="modal-body">
		<div align="justify" class="form-group">
		<label>Catatan(optional)</label>
		<textarea class="form-control" id="catat" placeholder="Masukkan Catatan Anda"></textarea>

	</div>
	</div>
	</form>
	<div class="modal-footer">
		<a  href="<?php echo base_url();?>permohonan_bimbingan/tolak/<?php echo $row->id_ta; ?>">
		<input type="submit" class="btn btn-danger" name="tolak_ta" value="Tolak">
	</div>
</div>
</div>
</div>
