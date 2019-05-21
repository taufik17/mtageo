<section class="content">
	<div class="box box-primary">
	<div class="box-header">
		<a href="<?php echo base_url(); ?>Permohonan_bimbingan"><i class="fa fa-fw fa-arrow-circle-left fa-lg">&nbspKembali</i></a>
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
	<form action="<?php echo base_url(); ?>Permohonan_bimbingan/updatestatuspermohonan" method="post">
		<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
			<tbody>
				<tr>
					<th>Data</th>
					<th>File</th>
					<th>Status</th>
					<th>Catatan / Note</th>
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
					<td>
						<?php
						if ($row->st_judul == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_judul" value="1" checked>
								<font color="green">Valid </font>
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_judul" value="0">Tidak Valid
							</label>
						<?php }
						elseif ($row->st_judul == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_judul" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_judul" value="2" checked>
								<font color="red">Tidak Valid</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_judul" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_judul" value="2">Tidak Valid
							</label>
						<?php } ?>
					</td>
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
					<td>
						<?php
						if ($row->st_kp == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_kp" value="1" checked>
								<font color="green">Valid</font>
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_kp" value="2">Tidak Valid
							</label>
						<?php }
						elseif ($row->st_kp == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_kp" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_kp" value="2" checked>
								<font color="red">Tidak Valid</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_kp" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_kp" value="2">Tidak Valid
							</label>
						<?php } ?>
					</td>
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
					<td>
						<?php
						if ($row->st_d1 == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_d1" value="1" checked>
								<font color="green">Valid</font>
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_d1" value="2">Tidak Valid
							</label>
						<?php }
						elseif ($row->st_d1 == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_d1" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_d1" value="2" checked>
								<font color="red">Tidak Valid</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_d1" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_d1" value="2">Tidak Valid
							</label>
						<?php } ?>
					</td>
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
					<td>
						<?php
						if ($row->st_d2 == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_d2" value="1" checked>
								<font color="green">Valid</font>
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_d2" value="2">Tidak Valid
							</label>
						<?php }
						elseif ($row->st_d2 == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_d2" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_d2" value="2" checked>
								<font color="red">Tidak Valid</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_d2" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_d2" value="2">Tidak Valid
							</label>
						<?php } ?>
					</td>
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
					<td>
						<?php
						if ($row->st_d3 == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_d3" value="1" checked>
								<font color="green">Valid</font>
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_d3" value="2">Tidak Valid
							</label>
						<?php }
						elseif ($row->st_d3 == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_d3" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_d3" value="2" checked>
								<font color="red">Tidak Valid</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_d3" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_d3" value="2">Tidak Valid
							</label>
						<?php } ?>
					</td>
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
					<td>
						<?php
						if ($row->st_cv == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_cv" value="1" checked>
								<font color="green">Valid</font>
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_cv" value="2">Tidak Valid
							</label>
						<?php }
						elseif ($row->st_cv == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_cv" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_cv" value="2" checked>
								<font color="red">Tidak Valid</font>
							</label>
					<?php	}
					else {
						?>
						<label class="radio-inline">
							<input type="radio" name="st_cv" value="1">Valid
						</label>
						<label class="radio-inline">
							<input type="radio" name="st_cv" value="2">Tidak Valid
						</label>
					<?php } ?>
					</td>
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
					<td>
						<?php
						if ($row->st_transkrip == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_transkrip" value="1" checked>
								<font color="green">Valid</font>
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_transkrip" value="2">Tidak Valid
							</label>
						<?php }
						elseif ($row->st_transkrip == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_transkrip" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_transkrip" value="2" checked>
								<font color="red">Tidak Valid</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_transkrip" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_transkrip" value="2">Tidak Valid
							</label>
						<?php } ?>
					</td>
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
					<td>
						<?php
						if ($row->st_proposal == 1) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_proposal" value="1" checked>
								<font color="green">Valid</font>
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_proposal" value="2">Tidak Valid
							</label>
						<?php }
						elseif ($row->st_proposal == 2) {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_proposal" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_proposal" value="2" checked>
								<font color="red">Tidak Valid</font>
							</label>
						<?php }
						else {
							?>
							<label class="radio-inline">
								<input type="radio" name="st_proposal" value="1">Valid
							</label>
							<label class="radio-inline">
								<input type="radio" name="st_proposal" value="2">Tidak Valid
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
