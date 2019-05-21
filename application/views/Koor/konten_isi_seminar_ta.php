<section class="content">
	<div class="box box-primary">
	<div class="box-header">
		<a href="<?php echo base_url(); ?>K_seminar_ta"><i class="fa fa-fw fa-arrow-circle-left fa-lg">&nbspKembali</i></a>
	</div>

	<?php foreach ($data_pilih->result() as $row) {
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

		</tbody></table>
	</div>
	<div class="col-md-6">
		<table class="table col-md-6">
			<tbody>
				<tr>
					<td>Semester</td>
					<td>:</td>
					<td><?php echo $row->semester; ?></td>
				</tr>
				<tr>
					<td>Program Studi</td>
					<td>:</td>
					<td>S1 <?php echo $row->Jurusan; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
	</div>

	<div class="box-body">
		<div class="row">
				<div class="col-md-12">
	<form action="<?php echo base_url(); ?>K_P_seminar_ta/updatestatuspermohonan" method="post">
		<input type="text" name="Email" value="<?php echo $this->uri->segment(3); ?>" hidden>
		<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
			<tbody>
				<tr>
					<th>Data</th>
					<th>File</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<td>Tanggal Seminar TA</td>
					<td><?php echo $row->tgl_seminar_ta; ?></td>
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
					<td>
						<?php
						if ($row->st_tanggal == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_tanggal" value="1" checked>
								<font color="green">Disetujui</font>
							</label>
						<?php }
						elseif ($row->st_tanggal == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_tanggal" value="2" checked>
								<font color="red">Tidak Disetujui</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_tanggal" value="1">Setujui
							</label>
							<label class="radio-inline">
								<input type="text" class="form-control" name="tgl_seminar" id="datepicker" placeholder="Isi jika tanggal tidak sesuai" value="<?php echo $row->tgl_seminar_ta; ?>">
								<input type="radio" name="st_tanggal" value="1" checked hidden>
								<font color="red">&nbsp * Ganti jika tanggal tidak sesuai</font>
							</label>
						<?php } ?>
					</td>
				</tr>

				<tr>
					<td>Waktu Seminar TA</td>
					<td><?php echo $row->waktu_seminar_ta; ?></td>
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
					<td>
						<?php
						if ($row->st_waktu == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_waktu" value="1" checked>
								<font color="green">Disetujui</font>
							</label>
						<?php }
						elseif ($row->st_waktu == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_waktu" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_waktu" value="2" checked>
								<font color="red">Tidak Valid</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_waktu" value="1" required>Setujui
							</label>
							<label class="radio-inline">
								<input type="text" name="wkt_seminar" class="form-control timepicker" placeholder="Isi jika waktu tidak sesuai" value="<?php echo $row->waktu_seminar_ta; ?>">
								<input type="radio" name="st_waktu" value="1" checked hidden>
								<font color="red">&nbsp * Ganti jika Jam tidak sesuai</font>
							</label>
						<?php } ?>
					</td>
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
					<td>
						<?php
						if ($row->st_ruangan == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_ruangan" value="1" checked>
								<font color="green">Disetujui</font>
							</label>
						<?php }
						elseif ($row->st_ruangan == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_ruangan" value="2" checked>
								<font color="red">Tidak Disetujui</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_ruangan" value="1" required>Setujui
							</label>
							<label class="radio-inline">
								<input type="text" name="ruangan" class="form-control" placeholder="Isi jika ruangan tidak sesuai" value="<?php echo $row->ruangan; ?>">
								<input type="radio" name="st_ruangan" value="1" checked hidden>
								<font color="red">&nbsp * Ganti jika ruangan tidak sesuai</font>
							</label>
						<?php } ?>
					</td>
				</tr>

				<tr>
					<td>Penguji 1</td>
					<td><?php echo $row->penguji1_seminar_ta; ?></td>
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
					<td>
						<?php
						if ($row->st_penguji1 == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_penguji1" value="1" checked>
								<font color="green">Disetujui</font>
							</label>
						<?php }
						elseif ($row->st_penguji1 == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_penguji1" value="2" checked>
								<font color="red">Tidak Disetujui</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_penguji1" value="1" required>Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_penguji1" value="2">Tidak Valid
							</label>
						<?php } ?>
					</td>
				</tr>

				<tr>
					<td>Penguji 2</td>
					<td><?php echo $row->penguji2_seminar_ta; ?></td>
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
					<td>
						<?php
						if ($row->st_penguji2 == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_penguji2" value="1" checked>
								<font color="green">Disetujui</font>
							</label>
						<?php }
						elseif ($row->st_penguji2 == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_penguji2" value="2" checked>
								<font color="red">Tidak Disetujui</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_penguji2" value="1" required>Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_penguji2" value="2">Tidak Valid
							</label>
						<?php } ?>
					</td>
				</tr>

				<tr>
					<td>Draft TA</td>
					<td><a  href="<?php echo base_url()?>assets/DataSeminarTA/<?php echo $row->Draft_TA; ?>" class="btn btn-primary btn-sm" target="_blank">Draft TA</a></td>
					<?php if ($row->st_draft_ta == 0) {
						?>
						<td><i class="fa fa-spinner fa-lg" style="color:orange;"></i></td>
					<?php }
					elseif ($row->st_draft_ta == 1) {
						?>
						<td><i class="fa fa-check fa-lg" style="color:#00A65A;"></i></td>
					<?php }
					else {
						?>
						<td><i class="fa fa-times-circle-o fa-2x" style="color:#DD4B3F;"></td>
					<?php }?>
					<td>
						<?php
						if ($row->st_draft_ta == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_draft_ta" value="1" checked>
								<font color="green">Disetujui</font>
							</label>
						<?php }
						elseif ($row->st_draft_ta == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_draft_ta" value="2" checked>
								<font color="red">Tidak Disetujui</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_draft_ta" value="1" required>Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_draft_ta" value="2">Tidak Valid
							</label>
						<?php } ?>
					</td>
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

<div class="form-group">
	<label class="col-sm-2 control-label">Catatan </label>
	<div class="col-sm-10">
		<input type="text" class="form-control" name="catatan" placeholder="Catatan untuk mahasiswa">
		<input type="text" name="dataupdate" value="<?php echo $row->Email ?>" hidden>
	</div>
</div>
<p>&nbsp</p>

<div class="box-footer">
	<button type="submit" class="btn btn-primary pull-right"><i i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
</div>
	</form>

	<?php } ?>
</div>
</section>
