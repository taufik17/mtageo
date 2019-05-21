<section class="content">
		<?php
		if ($status_daftar_ta == 0) {
			?>
			<!-- Kondisi Awal  -->
			<div class="box box-primary">
			<div class="box-header">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				<h3 class="box-title text-center">Pendaftaran TA</h3>
			</div>

			<div class="row bs-wizard" style="border-bottom:0;">
				<div class="col-xs-4 bs-wizard-step active">
					<div class="text-center bs-wizard-stepnum">1</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">Pengisian Form Permohonan TA</div>
				</div>

				<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
					<div class="text-center bs-wizard-stepnum">2</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">Validasi Dosen Bimbingan TA</div>
				</div>

				<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
					<div class="text-center bs-wizard-stepnum">3</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">Selesai</div>
				</div>
			</div>
			<p>&nbsp</p>

			<form method="post" action="<?php base_url() ?>DaftarTA/upload_data_ta" enctype="multipart/form-data">
			<div class="box-body">
				<p>&nbsp</p>
				<div class="form-group">
					<label class="col-sm-2 control-label">Judul Proposal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="JudulTA" placeholder="Judul TA" required>
					</div>
				</div>

				<p>&nbsp</p>

				<div class="form-group">
					<label class="col-sm-2 control-label">Judul Laporan KP</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="JudulKP" placeholder="Judul Laporan KP" required>
					</div>
				</div>

				<p>&nbsp</p>

				<div class="form-group">
					<label class="col-sm-2 control-label">Dosen Pembimbing 1</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Dosen1" placeholder="Dosen Pembimbing 1" required>
					</div>
				</div>

				<p>&nbsp</p>

				<div class="form-group">
					<label class="col-sm-2 control-label">Dosen Pembimbing 2</label>
					<div class="col-sm-10">
						<select class="form-control select2 select2-hidden-accessible" name="Dosen2" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
							<option selected="selected">--</option>
							<?php
							foreach ($nama_dosen->result() as $row ) {
							?>
							<option value="<?php echo $row->EmailDosen; ?>" ><?php echo $row->Nama; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<p>&nbsp</p>

				<div class="form-group">
					<label class="col-sm-2 control-label">Dosen Pembimbing 3 ( Opsional )</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Dosen3" placeholder="Dosen Pembimbing 3">
					</div>
				</div>

				<p>&nbsp</p>

				<div class="form-group">
					<label for="exampleInputFile" class="col-sm-2 control-label">File Proposal TA</label>
					<div class="col-sm-10">
						<input type="file" name="proposal" class="dropify" data-height="80" required>
						<p class="help-block">File Max 10 Mb</p>
					</div>
				</div>

				<div class="form-group">
					<label for="exampleInputFile" class="col-sm-2 control-label">Transkrip Nilai</label>
					<div class="col-sm-10">
						<input type="file" name="transkrip" class="dropify" data-height="80" required>
						<p class="help-block">File Max 10 Mb</p>
					</div>
				</div>

				<div class="form-group">
					<label for="exampleInputFile" class="col-sm-2 control-label">CV</label>
					<div class="col-sm-10">
						<input type="file" name="cv" class="dropify" data-height="80" required>
						<p class="help-block">File Max 10 Mb</p>
					</div>
				</div>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary pull-right"><i i class="fa fa-send"></i>&nbsp&nbspKirim Permohonan</button>
				</div>
			</form>
		</div>
		<!--Selesai Kondisi Awal  -->
		<?php }
		else {
			?>
			<?php foreach ($data->result() as $row) {
				?>
				<?php if ($row->status_ta == 1) {
					?>
					<div class="box box-primary">
					<div class="box-header">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<h3 class="box-title text-center">Pendaftaran TA</h3>
					</div>

					<div class="row bs-wizard" style="border-bottom:0;">
						<div class="col-xs-4 bs-wizard-step complete">
							<div class="text-center bs-wizard-stepnum">1</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Pengisian Form Permohonan TA</div>
						</div>

						<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
							<div class="text-center bs-wizard-stepnum">2</div>
							<div class="progress"><div class="progress-bar"></div></div>
							<a href="#" class="bs-wizard-dot"></a>
							<div class="bs-wizard-info text-center">Validasi Dosen Bimbingan TA</div>
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
									<td>Validasi Dosen</td>
									<td>:</td>
									<td><font color="blue">Proses Revisi Data</font></td>
								</tr>
								<tr>
									<td>Catatan Dosen</td>
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
								<td>Judul TA</td>
								<td><?php echo $row->judul_ta; ?></td>
								<?php if ($row->st_judul == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_judul == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Judul KP</td>
								<td><?php echo $row->judul_kp; ?></td>
								<?php if ($row->st_kp == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_kp == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Dosen Pembimbing 1</td>
								<td><?php echo $row->dosen_pembimbing1; ?></td>
								<?php if ($row->st_d1 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_d1 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Dosen Pembimbing 2</td>
								<td><?php echo $row->Nama; ?></td>
								<?php if ($row->st_d2 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_d2 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Dosen Pembimbing 3</td>
								<td><?php echo $row->dosen_pembimbing3; ?></td>
								<?php if ($row->st_d3 == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_d3 == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>CV</td>
								<td><a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->cv; ?>" class="btn btn-primary btn-sm" target="_blank">CV</a></td>
								<?php if ($row->st_cv == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_cv == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Transkrip</td>
								<td><a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_transkrip; ?>" class="btn btn-primary btn-sm" target="_blank">Transkip</a></td>
								<?php if ($row->st_transkrip == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_transkrip == 1) {
									?>
									<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
								<?php }
								else {
									?>
									<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
								<?php }?>

							</tr>
							<tr>
								<td>Proposal</td>
								<td><a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_proposal; ?>" class="btn btn-primary btn-sm" target="_blank">Proposal</a></td>
								<?php if ($row->st_proposal == 0) {
									?>
									<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
								<?php }
								elseif ($row->st_proposal == 1) {
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

					<form method="post" action="<?php base_url() ?>DaftarTA/update_data_ta" enctype="multipart/form-data">
					<div class="box-body">
						<p>&nbsp</p>
						<?php
						if ($row->st_judul == 2) {
							?>
							<div class="form-group">
								<label class="col-sm-2 control-label">Judul Tugas Akhir</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="JudulTA" placeholder="Judul TA" value="<?php echo $row->judul_ta; ?>" required>
									<input type="text" name="st_judul" value="0" hidden>
								</div>
							</div>
							<p>&nbsp</p>
						<?php }
						elseif ($row->st_judul == 1) {
							?>
							<input type="text" name="st_judul" value="1" hidden>
							<input type="text" name="JudulTA" value="<?php echo $row->judul_ta; ?>" hidden>
						<?php }
						else {
							?>
							<input type="text" name="st_judul" value="0" hidden>
							<input type="text" name="JudulTA" value="<?php echo $row->judul_ta; ?>" hidden>
						<?php }?>

						<?php
						if ($row->st_kp == 2) {
							?>
							<div class="form-group">
								<label class="col-sm-2 control-label">Judul Laporan KP</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="JudulKP" placeholder="Judul Laporan KP" required value="<?php echo $row->judul_kp; ?>">
									<input type="text" name="st_kp" value="0" hidden>
								</div>
							</div>
							<p>&nbsp</p>
						<?php }
						elseif ($row->st_kp == 1) {
							?>
							<input type="text" name="st_kp" value="1" hidden>
							<input type="text" name="JudulKP" value="<?php echo $row->judul_kp; ?>" hidden>
						<?php }
						else {
							?>
							<input type="text" name="st_kp" value="0" hidden>
							<input type="text" name="JudulKP" value="<?php echo $row->judul_kp; ?>" hidden>
						<?php } ?>

						<?php
						if ($row->st_d1 == 2) {
							?>
							<div class="form-group">
								<label class="col-sm-2 control-label">Dosen Pembimbing 1</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="Dosen1" placeholder="Dosen Pembimbing 1" required value="<?php echo $row->dosen_pembimbing1; ?>">
									<input type="text" name="st_d1" value="0" hidden>
								</div>
							</div>
							<p>&nbsp</p>
						<?php }
						elseif ($row->st_d1 == 1) {
							?>
							<input type="text" name="st_d1" value="1" hidden>
							<input type="text" name="Dosen1" value="<?php echo $row->dosen_pembimbing1; ?>" hidden>
						<?php }
						else {
							?>
							<input type="text" name="st_d1" value="0" hidden>
							<input type="text" name="Dosen1" value="<?php echo $row->dosen_pembimbing1; ?>" hidden>
						<?php }?>

						<?php
						if ($row->st_d2 == 2) {
							?>
							<div class="form-group">
								<label class="col-sm-2 control-label">Dosen Pembimbing 2</label>
								<div class="col-sm-10">
									<select class="form-control select2 select2-hidden-accessible" name="Dosen2" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
										<option selected="selected" value="<?php echo $row->EmailDosen; ?>"><?php echo $row->Nama; ?></option>
										<?php
										foreach ($nama_dosen->result() as $n ) {
										?>
										<option value="<?php echo $n->EmailDosen; ?>" ><?php echo $n->Nama; ?></option>
										<?php } ?>
									</select>
									<input type="text" name="st_d2" value="0" hidden>
								</div>
							</div>
							<p>&nbsp</p>
						<?php }
						elseif ($row->st_d2 == 1) {
							?>
							<input type="text" name="st_d2" value="1" hidden>
							<input type="text" name="Dosen2" value="<?php echo $row->EmailDosen; ?>" hidden>
						<?php }
						else {
							?>
							<input type="text" name="st_d2" value="0" hidden>
							<input type="text" name="Dosen2" value="<?php echo $row->EmailDosen; ?>" hidden>
						<?php }?>

						<?php
						if ($row->st_d3 == 2) {
							?>
							<div class="form-group">
								<label class="col-sm-2 control-label">Dosen Pembimbing 3 ( Opsional )</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="Dosen3" placeholder="Dosen Pembimbing 3" value="<?php echo $row->dosen_pembimbing3; ?>">
									<input type="text" name="st_d3" value="0" hidden>
								</div>
							</div>
							<p>&nbsp</p>
						<?php }
						elseif ($row->st_d3 == 1) {
							?>
							<input type="text" name="st_d3" value="1" hidden>
							<input type="text" name="Dosen3" value="<?php echo $row->dosen_pembimbing3; ?>" hidden>
						<?php }
						else {
							?>
							<input type="text" name="st_d3" value="0" hidden>
							<input type="text" name="Dosen3" value="<?php echo $row->dosen_pembimbing3; ?>" hidden>
						<?php }?>

						<?php
						if ($row->st_proposal == 2) {
							?>
							<div class="form-group">
								<label for="exampleInputFile" class="col-sm-2 control-label">File Proposal TA</label>
								<div class="col-sm-10">
									<input type="file" name="proposal" class="dropify" data-height="80" required>
									<input type="text" name="st_proposal" value="0" hidden>
									<p class="help-block">File Max 10 Mb</p>
								</div>
							</div>
						<?php }
						elseif ($row->st_proposal == 1) {
							?>
							<input type="text" name="st_proposal" value="1" hidden>
							<input type="text" name="proposal" value="<?php echo $row->data_proposal; ?>" hidden>
						<?php }
						else {
							?>
							<input type="text" name="st_proposal" value="0" hidden>
							<input type="text" name="proposal" value="<?php echo $row->data_proposal; ?>" hidden>
						<?php } ?>

						<?php
						if ($row->st_transkrip == 2) {
							?>
							<div class="form-group">
								<label for="exampleInputFile" class="col-sm-2 control-label">Transkrip Nilai</label>
								<div class="col-sm-10">
									<input type="file" name="transkrip" class="dropify" data-height="80" required>
									<input type="text" name="st_transkrip" value="0" hidden>
									<p class="help-block">File Max 10 Mb</p>
								</div>
							</div>
						<?php }
						elseif ($row->st_transkrip == 1) {
							?>
							<input type="text" name="st_transkrip" value="1" hidden>
							<input type="text" name="transkrip" value="<?php echo $row->data_transkrip; ?>" hidden>
						<?php }
						else {
							?>
							<input type="text" name="st_transkrip" value="0" hidden>
							<input type="text" name="transkrip" value="<?php echo $row->data_transkrip; ?>" hidden>
						<?php } ?>

						<?php
						if ($row->st_cv == 2) {
							?>
							<div class="form-group">
								<label for="exampleInputFile" class="col-sm-2 control-label">CV</label>
								<div class="col-sm-10">
									<input type="file" name="cv" class="dropify" data-height="80" required>
									<input type="text" name="st_cv" value="0" hidden>
									<p class="help-block">File Max 10 Mb</p>
								</div>
							</div>
						<?php }
						elseif ($row->st_cv == 1) {
							?>
							<input type="text" name="st_cv" value="1" hidden>
							<input type="text" name="cv" value="<?php echo $row->cv; ?>" hidden>
						<?php }
						else {
							?>
							<input type="text" name="st_cv" value="0" hidden>
							<input type="text" name="cv" value="<?php echo $row->cv; ?>" hidden>
						<?php } ?>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary pull-right"><i i class="fa fa-send"></i>&nbsp&nbspKirim Permohonan</button>
						</div>
					</form>
				</div>
			<!-- Kondisi kedua
		&& $row->st_judul == 0 && $row->st_kp == 0 && $row->st_d1 == 0 && $row->st_d2 == 0 && $row->st_d3 == 0 && $row->st_cv == 0 && $row->st_transkrip == 0 && $row->st_proposal == 0 -->
				<?php }
				elseif ($row->status_ta == 2 ) {
				?>
				<?php
				if ($row->st_judul == 0 && $row->st_kp == 0 && $row->st_d1 == 0 && $row->st_d2 == 0 && $row->st_d3 == 0 && $row->st_cv == 0 && $row->st_transkrip == 0 && $row->st_proposal == 0) {
					?>
					<div class="alert alert-info alert-dismissible fade in">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info-circle"></i> info</h4>
						Data - data yang telah diajukan menunggu konfirmasi / persetujuan dari dosen yang dimintai bimbingan
					</div>
				<?php }
				else {
					?>
					<div class="alert alert-warning alert-dismissible fade in">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info-circle"></i> info</h4>
						Beberapa data Permohonan TA tidak divalidasi / disetujui oleh dosen yang dimintai bimbingan, silahkan melakukan permohonan ulang.
					</div>
				<?php } ?>

				<div class="box box-primary">
				<div class="box-header">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					<h3 class="box-title text-center">Pendaftaran TA</h3>
				</div>

				<div class="row bs-wizard" style="border-bottom:0;">
					<div class="col-xs-4 bs-wizard-step complete">
						<div class="text-center bs-wizard-stepnum">1</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<a href="#" class="bs-wizard-dot"></a>
						<div class="bs-wizard-info text-center">Pengisian Form Permohonan TA</div>
					</div>

					<div class="col-xs-4 bs-wizard-step active"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">2</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<a href="#" class="bs-wizard-dot"></a>
						<div class="bs-wizard-info text-center">Validasi Dosen Bimbingan TA</div>
					</div>

					<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">3</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<a href="#" class="bs-wizard-dot"></a>
						<div class="bs-wizard-info text-center">Selesai</div>
					</div>
				</div>
				<p>&nbsp</p>
				<?php
				foreach ($data->result() as $row ) {
				?>

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
								<td>Validasi Dosen</td>
								<td>:</td>
								<td><font color="yellow">Proses Verifikasi</font></td>
							</tr>
							<tr>
								<td>Catatan Dosen</td>
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
							<td>Judul TA</td>
							<td><?php echo $row->judul_ta; ?></td>
							<?php if ($row->st_judul == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_judul == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Judul KP</td>
							<td><?php echo $row->judul_kp; ?></td>
							<?php if ($row->st_kp == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_kp == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Dosen Pembimbing 1</td>
							<td><?php echo $row->dosen_pembimbing1; ?></td>
							<?php if ($row->st_d1 == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_d1 == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Dosen Pembimbing 2</td>
							<td><?php echo $row->Nama; ?></td>
							<?php if ($row->st_d2 == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_d2 == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Dosen Pembimbing 3</td>
							<td><?php echo $row->dosen_pembimbing3; ?></td>
							<?php if ($row->st_d3 == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_d3 == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>CV</td>
							<td><a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->cv; ?>" class="btn btn-primary btn-sm" target="_blank">CV</a></td>
							<?php if ($row->st_cv == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_cv == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Transkrip</td>
							<td><a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_transkrip; ?>" class="btn btn-primary btn-sm" target="_blank">Transkip</a></td>
							<?php if ($row->st_transkrip == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_transkrip == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Proposal</td>
							<td><a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_proposal; ?>" class="btn btn-primary btn-sm" target="_blank">Proposal</a></td>
							<?php if ($row->st_proposal == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_proposal == 1) {
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
		if ($row->st_judul == 0 && $row->st_kp == 0 && $row->st_d1 == 0 && $row->st_d2 == 0 && $row->st_d3 == 0 && $row->st_cv == 0 && $row->st_transkrip == 0 && $row->st_proposal == 0) {
			?>
		<?php }
		else {
			?>
			<div class="box-footer">
				<a href="<?php base_url() ?>DaftarTA/PermohonanUlang" class="btn btn-primary pull-right"><i class="fa fa-repeat"></i>&nbsp&nbspPermohonan Ulang</a>
			</div>
		<?php } ?>
	</div>
				<?php } ?>
			</div>
			<!-- Akhir Kondisi kedua -->
			<?php }
			elseif ($row->status_ta >= 3) {
				?>
				<div class="alert alert-success alert-dismissible fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-info-circle"></i> info</h4>
					Selamat Pendaftaran Tugas Akhir telah disetujui, selamat mengerjakan.
				</div>
				<div class="box box-primary">
				<div class="box-header">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					<h3 class="box-title text-center">Pendaftaran TA</h3>
				</div>

				<div class="row bs-wizard" style="border-bottom:0;">
					<div class="col-xs-4 bs-wizard-step complete">
						<div class="text-center bs-wizard-stepnum">1</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<a href="#" class="bs-wizard-dot"></a>
						<div class="bs-wizard-info text-center">Pengisian Form Permohonan TA</div>
					</div>

					<div class="col-xs-4 bs-wizard-step complete"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">2</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<a href="#" class="bs-wizard-dot"></a>
						<div class="bs-wizard-info text-center">Validasi Dosen Bimbingan TA</div>
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
								<td>Validasi Dosen</td>
								<td>:</td>
								<td><font color="green">Sudah  Diverifikasi</font></td>
							</tr>
							<tr>
								<td>Catatan Dosen</td>
								<td>:</td>
								<td>
									<?php echo $row->catatan; ?>
								</td>
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
							<td>Judul TA</td>
							<td><?php echo $row->judul_ta; ?></td>
							<?php if ($row->st_judul == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_judul == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>
						</tr>
						<tr>
							<td>Judul KP</td>
							<td><?php echo $row->judul_kp; ?></td>
							<?php if ($row->st_kp == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_kp == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>
						</tr>
						<tr>
							<td>Dosen Pembimbing 1</td>
							<td><?php echo $row->dosen_pembimbing1; ?></td>
							<?php if ($row->st_d1 == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_d1 == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Dosen Pembimbing 2</td>
							<td><?php echo $row->Nama; ?></td>
							<?php if ($row->st_d2 == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_d2 == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Dosen Pembimbing 3</td>
							<td><?php echo $row->dosen_pembimbing3; ?></td>
							<?php if ($row->st_d3 == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_d3 == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>CV</td>
							<td><a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->cv; ?>" class="btn btn-primary btn-sm" target="_blank">CV</a></td>
							<?php if ($row->st_cv == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_cv == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Transkrip</td>
							<td><a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_transkrip; ?>" class="btn btn-primary btn-sm" target="_blank">Transkip</a></td>
							<?php if ($row->st_transkrip == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_transkrip == 1) {
								?>
								<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
							<?php }
							else {
								?>
								<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
							<?php }?>

						</tr>
						<tr>
							<td>Proposal</td>
							<td><a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_proposal; ?>" class="btn btn-primary btn-sm" target="_blank">Proposal</a></td>
							<?php if ($row->st_proposal == 0) {
								?>
								<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
							<?php }
							elseif ($row->st_proposal == 1) {
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
			<?php } ?>
		<?php } ?>
	</section>
