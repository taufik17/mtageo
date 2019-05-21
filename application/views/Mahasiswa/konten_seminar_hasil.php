<section class="content">
	<?php
	if ($status_daftar_seminar_hasil == 0) {
		?>
		<div class="box box-primary">
			<div class="box-header">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				<h3 class="box-title text-center">Pengisian Form Pendaftaran Seminar Hasil</h3>
			</div>

			<div class="row bs-wizard" style="border-bottom:0;">
				<div class="col-xs-4 bs-wizard-step active">
					<div class="text-center bs-wizard-stepnum">1</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">Pengisian Form Pendaftaran Seminar Hasil</div>
				</div>

				<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
					<div class="text-center bs-wizard-stepnum">2</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">Validasi Koordinator TA</div>
				</div>

				<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
					<div class="text-center bs-wizard-stepnum">3</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">Selesai</div>
				</div>
			</div>

			<p>&nbsp</p>

			<form action="<?php base_url() ?>Daftar_Seminar_Hasil/upload_data_seminar_ta" method="POST" enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label class="col-sm-2 control-label">Penguji 1</label>
						<div class="col-sm-10">
							<input type="text" name="penguji1" class="form-control" placeholder="Penguji 1">
						</div>
					</div>

					<p>&nbsp</p>

					<div class="form-group">
						<label class="col-sm-2 control-label">Penguji 2</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="penguji2" placeholder="Penguji 2">
						</div>
					</div>

					<p>&nbsp</p>

					<div class="form-group">
						<label class="col-sm-2 control-label">Tanggal Seminar</label>
						<div class="col-sm-10">
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" name="tgl_seminar" id="datepicker">
							</div>
						</div>
					</div>

					<p>&nbsp</p>

					<div class="form-group">
						<label class="col-sm-2 control-label">Waktu Seminar</label>
						<div class="col-sm-10">
							<div class="input-group">
								<input type="text" name="wkt_seminar" class="form-control timepicker">
								<div class="input-group-addon">
									<i class="fa fa-clock-o"></i>
								</div>
							</div>
						</div>
					</div>

					<p>&nbsp</p>

					<div class="form-group">
						<label class="col-sm-2 control-label">Ruangan Seminar</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="exampleInputEmail1" name="ruangan" placeholder="Ruangan Seminar">
						</div>
					</div>

					<p>&nbsp</p>

					<div class="form-group">
						<label class="col-sm-2 control-label">File Draft TA2</label>
						<div class="col-sm-10">
							<input type="file" class="dropify" name="draftta2" data-height="80" required>
							<p class="help-block">File Max 10 Mb</p>
						</div>
					</div>

					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-send"></i>&nbsp&nbspKirim</button>
					</div>
				</form>
			</div>
	<?php }
	else {
		?>
		<?php foreach ($data->result() as $row) {
			?>
			<?php if ($row->status_ta == 7) {
				?>
				<div class="box box-primary">
					<div class="box-header">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<h3 class="box-title text-center">Pengisian Form Pendaftaran Seminar Hasil</h3>
					</div>

					<div class="row bs-wizard" style="border-bottom:0;">
						<div class="col-xs-4 bs-wizard-step complete">
							<div class="text-center bs-wizard-stepnum">1</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Pengisian Form Pendaftaran Seminar Hasil</div>
						</div>

						<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
							<div class="text-center bs-wizard-stepnum">2</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Validasi Koordinator TA</div>
						</div>

						<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
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
						<table class="table">
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
						</tbody></table>
					</div>
					<div class="col-md-6">
						<table class="table col-md-6">
							<tbody>
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
									<td>Validasi Koordinator</td>
									<td>:</td>
									<td><font color="blue">Proses Revisi Data</font></td>
								</tr>
								<tr>
									<td>Catatan Koordinator</td>
									<td>:</td>
									<td><?php echo $row->catatan; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
					</div>

					<div class="box-body">
						<div class="row">
								<div class="col-md-12">
					<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
						<tbody>
							<tr>
								<th>Data</th>
								<th>File</th>
								<th>Status</th>
							</tr>
							<tr>
								<td>Waktu</td>
								<td><?php echo $row->waktu_seminar_hasil; ?></td>
								<?php if ($row->st_waktu == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_waktu == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Tanggal</td>
								<td><?php echo $row->tgl_seminar_hasil; ?></td>
								<?php if ($row->st_tanggal == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_tanggal == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Penguji 1</td>
								<td><?php echo $row->penguji1_seminar_hasil; ?></td>
								<?php if ($row->st_penguji1 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_penguji1 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Penguji 2</td>
								<td><?php echo $row->penguji2_seminar_hasil; ?></td>
								<?php if ($row->st_penguji2 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_penguji2 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Ruangan</td>
								<td><?php echo $row->ruangan; ?></td>
								<?php if ($row->st_ruangan == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_ruangan == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Draft TA</td>
								<td><a  href="<?php echo base_url()?>assets/DataSeminarHasil/<?php echo $row->Draft_TA2; ?>" class="btn btn-primary btn-sm" target="_blank">Draft TA</a></td>
								<?php if ($row->st_draft_ta2 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_draft_ta2 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
						</tbody>
					</table>

			<div class="col-md-3">
			<table class="table">
				<tbody>
				<tr>
					<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
					<td>:</td>
					<td>Valid</td>
				</tr>
				<tr>
					<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
					<td>:</td>
					<td>Diproses</td>
				</tr>
				<tr>
					<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
					<td>:</td>
					<td>Data tidak Valid</td>
				</tr>
			</tbody>
		</table>
		</div>
				</div>
			</div>

			<form method="post" action="<?php base_url() ?>Daftar_Seminar_Hasil/update_data_seminar_hasil" enctype="multipart/form-data">
			<div class="box-body">
				<p>&nbsp</p>
				<?php
				if ($row->st_penguji1 == 2) {
					?>
					<div class="form-group">
						<label class="col-sm-2 control-label">Penguji 1</label>
						<div class="col-sm-10">
							<input type="text" name="penguji1" class="form-control" placeholder="Penguji 1" required value="<?php echo $row->penguji1_seminar_hasil; ?>">
							<input type="text" name="st_penguji1" value="0" hidden>
						</div>
					</div>
					<p>&nbsp</p>
				<?php }
				elseif ($row->st_penguji1 == 1) {
					?>
					<input type="text" name="st_penguji1" value="1" hidden>
					<input type="text" name="penguji1" value="<?php echo $row->penguji1_seminar_hasil; ?>" hidden>
				<?php }
				else {
					?>
					<input type="text" name="st_penguji1" value="0" hidden>
					<input type="text" name="penguji1" value="<?php echo $row->penguji1_seminar_hasil; ?>" hidden>
				<?php }?>

				<?php
				if ($row->st_penguji2 == 2) {
					?>
					<div class="form-group">
						<label class="col-sm-2 control-label">Penguji 2</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="penguji2" placeholder="Penguji 2" required value="<?php echo $row->penguji2_seminar_hasil; ?>">
							<input type="text" name="st_penguji2" value="0" hidden>
						</div>
					</div>
					<p>&nbsp</p>
				<?php }
				elseif ($row->st_penguji2 == 1) {
					?>
					<input type="text" name="st_penguji2" value="1" hidden>
					<input type="text" name="penguji2" value="<?php echo $row->penguji2_seminar_hasil; ?>" hidden>
				<?php }
				else {
					?>
					<input type="text" name="st_penguji2" value="0" hidden>
					<input type="text" name="penguji2" value="<?php echo $row->penguji2_seminar_hasil; ?>" hidden>
				<?php } ?>

				<?php
				if ($row->st_tanggal == 2) {
					?>
					<div class="form-group">
						<label class="col-sm-2 control-label">Tanggal Seminar</label>
						<div class="col-sm-10">
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" name="tgl_seminar" id="datepicker">
								<input type="text" name="st_tanggal" value="0" hidden>
							</div>
						</div>
					</div>
					<p>&nbsp</p>
				<?php }
				elseif ($row->st_tanggal == 1) {
					?>
					<input type="text" name="st_tanggal" value="1" hidden>
					<input type="text" name="tgl_seminar" value="<?php echo $row->tgl_seminar_hasil; ?>" hidden>
				<?php }
				else {
					?>
					<input type="text" name="st_tanggal" value="0" hidden>
					<input type="text" name="tgl_seminar" value="<?php echo $row->tgl_seminar_hasil; ?>" hidden>
				<?php }?>

				<?php
				if ($row->st_waktu == 2) {
					?>
					<div class="form-group">
						<label class="col-sm-2 control-label">Waktu Seminar</label>
						<div class="col-sm-10">
							<div class="input-group">
								<input type="text" name="wkt_seminar" class="form-control timepicker">
								<input type="text" name="st_waktu" value="0" hidden>
								<div class="input-group-addon">
									<i class="fa fa-clock-o"></i>
								</div>
							</div>
						</div>
					</div>
					<p>&nbsp</p>
				<?php }
				elseif ($row->st_waktu == 1) {
					?>
					<input type="text" name="st_waktu" value="1" hidden>
					<input type="text" name="wkt_seminar" value="<?php echo $row->waktu_seminar_hasil; ?>" hidden>
				<?php }
				else {
					?>
					<input type="text" name="st_waktu" value="0" hidden>
					<input type="text" name="wkt_seminar" value="<?php echo $row->waktu_seminar_hasil; ?>" hidden>
				<?php }?>

				<?php
				if ($row->st_ruangan == 2) {
					?>
					<div class="form-group">
						<label class="col-sm-2 control-label">Ruangan Seminar</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="ruangan" id="exampleInputEmail1" placeholder="Ruangan Seminar" value="<?php echo $row->ruangan; ?>">
							<input type="text" name="st_ruangan" value="0" hidden>
						</div>
					</div>
					<p>&nbsp</p>
				<?php }
				elseif ($row->st_ruangan == 1) {
					?>
					<input type="text" name="st_ruangan" value="1" hidden>
					<input type="text" name="ruangan" value="<?php echo $row->ruangan; ?>" hidden>
				<?php }
				else {
					?>
					<input type="text" name="st_ruangan" value="0" hidden>
					<input type="text" name="ruangan" value="<?php echo $row->ruangan; ?>" hidden>
				<?php }?>

				<?php
				if ($row->st_draft_ta2 == 2) {
					?>
					<div class="form-group">
						<label for="exampleInputFile" class="col-sm-2 control-label">File Draft TA1</label>
						<div class="col-sm-10">
							<input type="file" name="draftta2" class="dropify" data-height="80" required>
							<input type="text" name="st_draft_ta2" value="0" hidden>
							<p class="help-block">File Max 10 Mb</p>
						</div>
					</div>
				<?php }
				elseif ($row->st_draft_ta2 == 1) {
					?>
					<input type="text" name="st_draft_ta2" value="1" hidden>
					<input type="text" name="draftta2" value="<?php echo $row->Draft_TA2; ?>" hidden>
				<?php }
				else {
					?>
					<input type="text" name="st_draft_ta2" value="0" hidden>
					<input type="text" name="draftta2" value="<?php echo $row->Draft_TA2; ?>" hidden>
				<?php } ?>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary pull-right"><i i class="fa fa-send"></i>&nbsp&nbspKirim</button>
				</div>
			</form>
		</div>

					</div>
			<?php }
			elseif ($row->status_ta == 8) {
				?>
				<?php
				if ($row->st_waktu == 0 && $row->st_tanggal == 0 && $row->st_penguji1 == 0 && $row->st_penguji2 == 0 && $row->st_ruangan == 0 && $row->st_draft_ta2 == 0) {
					?>
					<div class="alert alert-info alert-dismissible fade in">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info-circle"></i> info</h4>
						Data - data yang telah diajukan menunggu konfirmasi / persetujuan dari koordinator TA
					</div>
				<?php }
				else {
					?>
					<div class="alert alert-warning alert-dismissible fade in">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info-circle"></i> info</h4>
						Beberapa data Permohonan Seminar TA tidak divalidasi / disetujui oleh Koordinator, silahkan melakukan permohonan ulang.
					</div>
				<?php } ?>

				<div class="box box-primary">
					<div class="box-header">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<h3 class="box-title text-center">Pengisian Form Pendaftaran Seminar Hasil</h3>
					</div>

					<div class="row bs-wizard" style="border-bottom:0;">
						<div class="col-xs-4 bs-wizard-step complete">
							<div class="text-center bs-wizard-stepnum">1</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Pengisian Form Pendaftaran Seminar Hasil</div>
						</div>

						<div class="col-xs-4 bs-wizard-step active"><!-- complete -->
							<div class="text-center bs-wizard-stepnum">2</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Validasi Koordinator TA</div>
						</div>

						<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
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
						<table class="table">
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
						</tbody></table>
					</div>
					<div class="col-md-6">
						<table class="table col-md-6">
							<tbody>
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
									<td>Validasi Koordinator</td>
									<td>:</td>
									<td><font color="yellow">Belum divalidasi</font></td>
								</tr>
								<tr>
									<td>Catatan Koordinator</td>
									<td>:</td>
									<td><?php echo $row->catatan; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
					</div>
					<div class="box-body">
						<div class="row">
								<div class="col-md-12">
					<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
						<tbody>
							<tr>
								<th>Data</th>
								<th>File</th>
								<th>Status</th>
							</tr>
							<tr>
								<td>Waktu</td>
								<td><?php echo $row->waktu_seminar_hasil; ?></td>
								<?php if ($row->st_waktu == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_waktu == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Tanggal</td>
								<td><?php echo $row->tgl_seminar_hasil; ?></td>
								<?php if ($row->st_tanggal == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_tanggal == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Penguji 1</td>
								<td><?php echo $row->penguji1_seminar_hasil; ?></td>
								<?php if ($row->st_penguji1 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_penguji1 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Penguji 2</td>
								<td><?php echo $row->penguji2_seminar_hasil; ?></td>
								<?php if ($row->st_penguji2 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_penguji2 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Ruangan</td>
								<td><?php echo $row->ruangan; ?></td>
								<?php if ($row->st_ruangan == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_ruangan == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Draft TA</td>
								<td><a  href="<?php echo base_url()?>assets/DataSeminarHasil/<?php echo $row->Draft_TA2; ?>" class="btn btn-primary btn-sm" target="_blank">Draft TA</a></td>
								<?php if ($row->st_draft_ta2 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_draft_ta2 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
						</tbody>
					</table>

			<div class="col-md-3">
			<table class="table">
				<tbody>
				<tr>
					<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
					<td>:</td>
					<td>Valid</td>
				</tr>
				<tr>
					<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
					<td>:</td>
					<td>Diproses</td>
				</tr>
				<tr>
					<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
					<td>:</td>
					<td>Data tidak Valid</td>
				</tr>
			</tbody>
		</table>
		</div>
				</div>
			</div>
			<?php
			if ($row->st_waktu == 0 && $row->st_tanggal == 0 && $row->st_penguji1 == 0 && $row->st_penguji2 == 0 && $row->st_ruangan == 0 && $row->st_draft_ta2 == 0) {
				?>
			<?php }
			else {
				?>
				<div class="box-footer">
					<a href="<?php base_url() ?>Daftar_Seminar_Hasil/PermohonanUlang" class="btn btn-primary pull-right"><i class="fa fa-repeat"></i>&nbsp&nbspPermohonan Ulang</a>
				</div>
			<?php } ?>
		</div>
					</div>

			<?php }
			elseif ($row->status_ta >= 9) {
				?>
				<div class="alert alert-success alert-dismissible fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-info-circle"></i> info</h4>
					Selamat Pendaftaran Seminar Hasil telah disetujui.
				</div>
				<div class="box box-primary">
					<div class="box-header">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<h3 class="box-title text-center">Pengisian Form Pendaftaran Seminar Hasil</h3>
					</div>

					<div class="row bs-wizard" style="border-bottom:0;">
						<div class="col-xs-4 bs-wizard-step complete">
							<div class="text-center bs-wizard-stepnum">1</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Pengisian Form Pendaftaran Seminar Hasil</div>
						</div>

						<div class="col-xs-4 bs-wizard-step complete"><!-- complete -->
							<div class="text-center bs-wizard-stepnum">2</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Validasi Koordinator TA</div>
						</div>

						<div class="col-xs-4 bs-wizard-step active"><!-- complete -->
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
						<table class="table">
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
						</tbody></table>
					</div>
					<div class="col-md-6">
						<table class="table col-md-6">
							<tbody>
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
									<td>Validasi Koordinator</td>
									<td>:</td>
									<td><font color="green">Sudah Divalidasi</font></td>
								</tr>
								<tr>
									<td>Catatan Koordinator</td>
									<td>:</td>
									<td><?php echo $row->catatan; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
					</div>
					<div class="box-body">
						<div class="row">
								<div class="col-md-12">
					<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
						<tbody>
							<tr>
								<th>Data</th>
								<th>File</th>
								<th>Status</th>
							</tr>
							<tr>
								<td>Waktu</td>
								<td><?php echo $row->waktu_seminar_hasil; ?></td>
								<?php if ($row->st_waktu == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_waktu == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Tanggal</td>
								<td><?php echo $row->tgl_seminar_hasil; ?></td>
								<?php if ($row->st_tanggal == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_tanggal == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Penguji 1</td>
								<td><?php echo $row->penguji1_seminar_hasil; ?></td>
								<?php if ($row->st_penguji1 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_penguji1 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Penguji 2</td>
								<td><?php echo $row->penguji2_seminar_hasil; ?></td>
								<?php if ($row->st_penguji2 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_penguji2 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Ruangan</td>
								<td><?php echo $row->ruangan; ?></td>
								<?php if ($row->st_ruangan == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_ruangan == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Draft TA</td>
								<td><a  href="<?php echo base_url()?>assets/DataSeminarHasil/<?php echo $row->Draft_TA2; ?>" class="btn btn-primary btn-sm" target="_blank">Draft TA</a></td>
								<?php if ($row->st_draft_ta2 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_draft_ta2 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
						</tbody>
					</table>

			<div class="col-md-3">
			<table class="table">
				<tbody>
				<tr>
					<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
					<td>:</td>
					<td>Valid</td>
				</tr>
				<tr>
					<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
					<td>:</td>
					<td>Diproses</td>
				</tr>
				<tr>
					<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
					<td>:</td>
					<td>Data tidak Valid</td>
				</tr>
			</tbody>
		</table>
		</div>
				</div>
			</div>
		</div>
					</div>
			<?php } ?>
		<?php } ?> <!-- Penutup foreach -->
	<?php } ?> <!-- Penutup else -->
	</section>
