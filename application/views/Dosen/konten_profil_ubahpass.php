<!-- Main content -->
<section class="content">

<div class="row">
		<div class="col-md-3">

				<!-- Profile Image -->
				<div class="box box-primary">
						<div class="box-body box-profile">
							<?php foreach ($data->result() as $nama ) {
							?>
								<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url() ?>assets/foto_profil_dosen/<?php echo $nama->foto; ?>" alt="User profile picture">
								<h3 class="profile-username text-center"><?php echo $nama->Nama; ?></h3>
								<p class="text-muted text-center"><?php echo $nama->NIP_NRK; ?></p>
						</div>
						<!-- /.box-body -->
				</div>
				<?php
				$info = $this->session->flashdata('info');
				if(!empty($info))
				{
					echo $info;
				}
				?>
		</div>
		<!-- /.col -->
		<div class="col-md-9">
				<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
								<li><a href="#DataDosen" data-toggle="tab">Data Dosen</a></li>
								<li><a href="#settings" data-toggle="tab">Ubah Data</a></li>
								<li class="active"><a href="#UbahPassword" data-toggle="tab">Ubah Kata Sandi</a></li>
						</ul>
						<div class="tab-content">
								<div class="tab-pane" id="DataDosen">
									<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
										<tbody>
											<tr>
												<td align="left" width="26%"><b>NIP_NRK</b></td>
												<td><?php echo $nama->NIP_NRK; ?></td>
											</tr>
											<tr>
												<td align="left"><b>Nama Lengkap</b></td>
												<td><?php echo $nama->Nama; ?></td>
											</tr>

											<tr>
												<td align="left"><b>Bidang Ilmu</b></td>
												<td><?php echo $nama->bidang_ilmu; ?></td>
											</tr>
											<tr>
												<td align="left"><b>Email</b></td>
												<td><?php echo $nama->EmailDosen; ?></td>
											</tr>


										</tbody>
									</table>
								</div>

								<div class="active tab-pane" id="UbahPassword">
									<form class="form-horizontal" action="<?php echo base_url(); ?>ProfilDosen/ubahsandidosen" method="post" enctype="multipart/form-data">
										<div class="form-group">
												<label for="inputPassword" class="col-sm-2 control-label">Sandi Sekarang</label>
												<div class="col-sm-10">
														<input type="password" class="form-control" id="inputOldPassword" name="OldPassword" placeholder="Kata Sandi Saat Ini" required>
												</div>
										</div>
										<div class="form-group">
												<label for="inputPassword" class="col-sm-2 control-label">Sandi baru</label>
												<div class="col-sm-10">
														<input type="password" class="form-control" id="inputNewPassword" name="NewPassword" placeholder="Kata Sandi Baru" minlength="8" required>
												</div>
										</div>
										<div class="form-group">
												<label for="inputPassword" class="col-sm-2 control-label">Ketik ulang sandi baru</label>
												<div class="col-sm-10">
														<input type="password" class="form-control" id="inputAgainNewPassword" name="AgainNewPassword" placeholder="Ulangi kata sandi baru" required>
												</div>
										</div>
											<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
															<div class="checkbox">
																	<label>
																			<input type="checkbox"> Data yang saya input Sudah Benar
																	</label>
															</div>
													</div>
											</div>
											<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
															<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
													</div>
											</div>
									</form>
								</div>

								<div class="tab-pane" id="settings">
										<form class="form-horizontal" action="<?php echo base_url(); ?>ProfilDosen/updatedata" method="post" enctype="multipart/form-data">
											<div class="form-group">
													<label for="inputEmail" class="col-sm-2 control-label">NIP_NRK</label>
													<div class="col-sm-10">
															<input type="text" class="form-control" id="inputNIM" name="NIP_NRK" placeholder="NIP_NRK" value="<?php echo $nama->NIP_NRK; ?>" required>
													</div>
											</div>

												<div class="form-group">
														<label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>
														<div class="col-sm-10">
																<input type="text" class="form-control" id="inputName" name="Nama" placeholder="Nama Lengkap" value="<?php echo $nama->Nama; ?>" required>
														</div>
												</div>

												<div class="form-group">
														<label for="inputEmail" class="col-sm-2 control-label">Email Dosen</label>

														<div class="col-sm-10">
																<input type="email" class="form-control" id="inputEmail" placeholder="<?php echo $nama->EmailDosen; ?>" disabled>
														</div>
												</div>
												<div class="form-group">
														<label for="inputName" class="col-sm-2 control-label">bidang_ilmu</label>
														<div class="col-sm-10">
																<input type="text" class="form-control" id="inputName" name="bidang_ilmu" placeholder="bidang ilmu" value="<?php echo $nama->bidang_ilmu; ?>">
														</div>
												</div>

												<div class="form-group">
														<label for="exampleInputFile" class="col-sm-2 control-label">Foto Profil</label>
														<div class="col-sm-10">
															<input type="file" name="filefoto" class="dropify" data-height="250" >
															<input type="text" name="oldfile" value="<?php echo $nama->foto; ?>" hidden>
															<p class="help-block">File Max 2 Mb</p>
														</div>
												</div>

												<div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">
																<div class="checkbox">
																		<label>
																				<input type="checkbox"> Data yang saya input Sudah Benar
																		</label>
																</div>
														</div>
												</div>
												<div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">
																<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
														</div>
												</div>
										</form>
								</div>
								<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
		</div>
		<!-- /.col -->
</div>
<!-- /.row -->
<?php }?>
</section>
