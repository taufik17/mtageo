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
														<th>File</th>
														<th>Status</th>
														<th>Aksi</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<?php
			        		$no = 1;
			        		foreach ($daftar_ta->result() as $row ) {
			        		?>
														<td><?php echo $no++; ?>.</td>
														<td><?php echo $row->NIM ;?></td>
														<td><?php echo $row->Nama_mhs ;?></td>
														<td><?php echo $row->judul_ta ;?></td>
														<td>
														<a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->cv; ?>" class="btn btn-primary btn-sm" target="_blank">CV</a>
														<a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_transkrip; ?>" class="btn btn-primary btn-sm" target="_blank">Transkip</a>
														<a  href="<?php echo base_url()?>assets/DataTA/<?php echo $row->data_proposal; ?>" class="btn btn-primary btn-sm" target="_blank">Proposal</a>
													</td>
														<td>
															<?php
															if ($row->status_ta >= 3) {
																?>
																<span class="label label-success">Diterima</span>
															<?php }
															elseif ($row->status_ta == 2 ) {
																?>
																<span class="label label-warning">Pending</span>
															<?php }
															elseif ($row->status_ta == -1) {
																?>
																<span class="label label-danger">Ditolak</span>
															<?php } ?>
														</td>
														<td>
																<a href="<?php base_url() ?>Permohonan_bimbingan/lihat/<?php echo $row->Email ?>" class="btn btn-primary btn-xs">
																	<i class="fa fa-eye">&nbsp</i>
																	Lihat</a>
														</td>
												</tr>
												<?php }?>
												</tbody>
										</table>
								</div>
								<!-- /.box-body -->
						</div>
						</section>
