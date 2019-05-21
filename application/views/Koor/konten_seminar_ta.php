<section class="content">
						<div class="box">
								<div class="box-header">
										<h3 class="box-title">Data Lengkap Mahasiswa Seminar TA</h3>
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
														<th>Status</th>
														<th>Aksi</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<?php
			        		$no = 1;
			        		foreach ($daftar_mhs_seminar_ta->result() as $row ) {
			        		?>
														<td><?php echo $no++; ?>.</td>
														<td><?php echo $row->NIM ;?></td>
														<td><?php echo $row->Nama_mhs ;?></td>
														<td><?php echo $row->judul_ta ;?></td>
														<td>
															<?php
															if ($row->status_ta >= 6) {
																?>
																<span class="label label-success">Diterima</span>
															<?php }
															elseif ($row->status_ta <= 5 ) {
																?>
																<span class="label label-warning">Pending</span>
															<?php } ?>
														</td>
														<td>
																<a href="<?php base_url() ?>K_P_seminar_ta/lihat/<?php echo $row->Email ?>" class="btn btn-primary btn-xs">
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
