<section class="content">
	<?php
	if ($status_daftar_yudisium == 0) {
		?>
		<div class="box box-primary">
			<div class="box-header">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				<h3 class="box-title text-center">Pengisian Form Yudisium</h3>

				<div class="row bs-wizard" style="border-bottom:0;">
					<div class="col-xs-6 bs-wizard-step active">
						<div class="text-center bs-wizard-stepnum">1</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<a href="#" class="bs-wizard-dot"></a>
						<div class="bs-wizard-info text-center">Pengisian Form Yudisium</div>
					</div>

					<div class="col-xs-6 bs-wizard-step disabled"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">3</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<a href="#" class="bs-wizard-dot"></a>
						<div class="bs-wizard-info text-center">Selesai</div>
					</div>
				</div>
				<p>&nbsp</p>
				<p>&nbsp</p>

				<form action="<?php base_url() ?>Yudisium/upload_data_yudisium" method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Transkrip Nilai</label>
							<div class="col-sm-10">
								<input type="file" name="transkrip" class="dropify" data-height="80" required>
								<p class="help-block">File Max 10 Mb</p>
							</div>
						</div>

						<p>&nbsp</p>

						<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Ijazah</label>
							<div class="col-sm-10">
								<input type="file" name="ijazah" class="dropify" data-height="80" required>
								<p class="help-block">Ijazah SMA / SMK sederajat legalisir</p>
							</div>
						</div>

						<p>&nbsp</p>

						<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Akta Kelahiran</label>
							<div class="col-sm-10">
								<input type="file" name="akta" class="dropify" data-height="80" required>
								<p class="help-block">File Max 10 Mb</p>
							</div>
						</div>

						<p>&nbsp</p>

						<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Pas foto 3x4</label>
							<div class="col-sm-10">
								<input type="file" name="pasfoto" class="dropify" data-height="80" required>
								<p class="help-block">Merah untuk kelahiran ganjil, biru untuk kelahiran genap</p>
							</div>
						</div>

						<p>&nbsp</p>

						<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Surat keterangan bebas UKT</label>
							<div class="col-sm-10">
								<input type="file" name="bebas_ukt" class="dropify" data-height="80" required>
								<p class="help-block">Diperoleh dari Sub Bagian Keuangan</p>
							</div>
						</div>

						<p>&nbsp</p>

						<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Surat keterangan bebas Laboratorium</label>
							<div class="col-sm-10">
								<input type="file" name="bebas_lab" class="dropify" data-height="80" required>
								<p class="help-block">File Max 10 Mb</p>
							</div>
						</div>

						<p>&nbsp</p>

						<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Scan Sertifikat TOEFL</label>
							<div class="col-sm-10">
								<input type="file" name="toefl" class="dropify" data-height="80" required>
								<p class="help-block">File Max 10 Mb</p>
							</div>
						</div>

						<p>&nbsp</p>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-send"></i>&nbsp&nbspKirim</button>
						</div>
					</form>
			</div>
		</div>
	<?php }
	else {
		?>
		<?php foreach ($data->result() as $row) {
			?>
			<?php
			if ($row->status_ta == 14) {
				?>
				<div class="alert alert-success alert-dismissible fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-info-circle"></i> info</h4>
					Data Telah Berhasil diupload
				</div>

				<div class="box box-primary">
					<div class="box-header">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<h3 class="box-title text-center">Data Berhasil diupload</h3>
					</div>

					<div class="row bs-wizard" style="border-bottom:0;">
						<div class="col-xs-6 bs-wizard-step complete">
							<div class="text-center bs-wizard-stepnum">1</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Pengisian Form Yudisium</div>
						</div>

						<div class="col-xs-6 bs-wizard-step active"><!-- complete -->
							<div class="text-center bs-wizard-stepnum">3</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Selesai</div>
						</div>
					</div>
					<p>&nbsp</p>

					<div class="box-body">
						<div class="row">
								<div class="col-md-6">
						<table class="table table-striped table-bordered table-hover dataTable">
							<tbody><tr>
								<td width="150px;">Nama</td>
								<td width="2px;">:</td>
								<td><?php echo $row->Nama_mhs; ?></td>
							</tr>
							<tr>
								<td>Jurusan</td>
								<td>:</td>
								<td>Jurusan Teknologi Produksi dan Industri</td>
							</tr>
							<tr>
								<td>Program Studi</td>
								<td>:</td>
								<td>S1 <?php echo $row->Jurusan; ?></td>
							</tr>
							<tr>
								<td>Judul Tugas Akhir</td>
								<td>:</td>
								<td><?php echo $row->judul_ta; ?></td>
							</tr>
							<tr>
								<td>Judul Kerja Praktik</td>
								<td>:</td>
								<td><?php echo $row->judul_kp; ?></td>
							</tr>
							<tr>
								<td>Semester</td>
								<td>:</td>
								<td><?php echo $row->semester; ?></td>
							</tr>
							<tr>
								<td>Dosen Pembimbing 1</td>
								<td>:</td>
								<td><?php echo $row->dosen_pembimbing1; ?></td>
							</tr>
							<tr>
								<tr>
									<td>Dosen Pembimbing 2</td>
									<td>:</td>
									<td><?php echo $row->Nama; ?></td>
								</tr>
								<tr>
									<td>Dosen Pembimbing 3</td>
									<td>:</td>
									<td><?php echo $row->dosen_pembimbing3; ?></td>
								</tr>
							</tr>
							<tr>
								<td>Catatan Koordinator</td>
								<td>:</td>
								<td></td>
							</tr>
						</tbody>
					</table>
					</div>
					<div class="col-md-6">
						<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
							<tbody>
								<tr>
									<th>Data</th>
									<th>File</th>
								</tr>

								<tr>
									<td>Transkrip</td>
									<td><a  href="<?php echo base_url()?>assets/DataYudisium/<?php echo $row->trankrip; ?>" class="btn btn-primary btn-sm" target="_blank">Transkrip</a></td>
								</tr>
								<tr>
									<td>Ijazah</td>
									<td><a  href="<?php echo base_url()?>assets/DataYudisium/<?php echo $row->ijazah; ?>" class="btn btn-primary btn-sm" target="_blank">Ijazah</a></td>
								</tr>
								<tr>
								<td>Akta</td>
								<td><a  href="<?php echo base_url()?>assets/DataYudisium/<?php echo $row->akta; ?>" class="btn btn-primary btn-sm" target="_blank">Akta</a></td>
							</tr>
							<tr>
							<td>Pasfoto</td>
							<td><a  href="<?php echo base_url()?>assets/DataYudisium/<?php echo $row->pasfoto; ?>" class="btn btn-primary btn-sm" target="_blank">Pasfoto</a></td>
						</tr>
						<tr>
						<td>Surat keterangan bebas UKT</td>
						<td><a  href="<?php echo base_url()?>assets/DataYudisium/<?php echo $row->skukt; ?>" class="btn btn-primary btn-sm" target="_blank">SK UKT</a></td>
					</tr>
					<tr>
					<td>Surat keterangan bebas Laboratorium</td>
					<td><a  href="<?php echo base_url()?>assets/DataYudisium/<?php echo $row->sklab; ?>" class="btn btn-primary btn-sm" target="_blank">SK Laboratorium</a></td>
				</tr>
				<tr>
				<td>Sertifikat TOEFL</td>
				<td><a  href="<?php echo base_url()?>assets/DataYudisium/<?php echo $row->toefl; ?>" class="btn btn-primary btn-sm" target="_blank">TOEFL</a></td>
			</tr>
							</tbody>
						</table>
					</div>
				</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</section>
