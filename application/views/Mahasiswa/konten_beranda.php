<section class="content">
 <div class="row">
  <?php foreach ($untuk_menu->result() as $stat ) {
  ?>
  <?php
  if ($stat->st_profil == 0) {
   ?>
   <div class="col-lg-100 col-xs-12">
    <div class="alert alert-warning alert-dismissible">
     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
     <h4><i class="icon fa fa-warning"></i> Perhatian!</h4>
     Segera lengkapi data pada profil untuk melakukan pendaftaran TA <a href="<?php base_url() ?>ProfilMhs">disini</a>
    </div>
   </div>
  <?php }?>
  <?php }?>

  <?php
  if ($cek_kondisi == 0) {
   ?>
   <div class="col-lg-100 col-xs-6">
     <!-- small box -->
     <div class="small-box bg-aqua">
       <div class="inner">
         <?php foreach ($untuk_menu->result() as $nama ) {
         ?> <h3><?php echo $nama->semester ;?></h3>
          <?php }?>
         <p>Tingkat Semester</p>
       </div>
       <div class="icon">
         <i class="ion ion-bookmark"></i>
       </div>
       <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>
   <div class="col-lg-100 col-xs-6">
     <!-- small box -->
     <div class="small-box bg-red">
       <div class="inner">
         <h3>-</h3>

         <p>Nilai TA</p>
       </div>
       <div class="icon">
         <i class="ion ion-clipboard"></i>
       </div>
       <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box box-warning">
       <div class="box-header">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Data Mahasiswa</h3>
       </div>
       <table class="table">
        <tbody>
         <tr>
          <td width="150px;">Nama</td>
          <td width="2px;">:</td>
          <?php foreach ($untuk_menu->result() as $nama ) {
              ?> <td><?php echo $nama->Nama_mhs ;?></td>
         </tr>
         <tr>
          <td>NIM</td>
          <td>:</td>
          <td><?php echo $nama->NIM ;?></td>
         </tr>
         <tr>
          <td>Program Studi</td>
          <td>:</td>
          <td><?php echo $nama->Jurusan ;?></td>
           <?php }?>
         </tr>
         <tr>
          <td>Dosen Tugas Akhir 1</td>
          <td>:</td>
          <td>-</td>
         </tr>
         <tr>
          <td>Dosen Tugas Akhir 2</td>
          <td>:</td>
          <td>-</td>
         </tr>
         <tr>
          <td>Dosen Tugas Akhir 3</td>
          <td>:</td>
          <td>-</td>
         </tr>
        </tbody></table>
        <div class="box-body">
        </div><!-- /.box-body-->
       </div>
   </div>

  <?php }
  else {
   ?>
   <div class="col-lg-100 col-xs-6">
     <!-- small box -->
     <div class="small-box bg-aqua">
       <div class="inner">
         <?php foreach ($untuk_menu->result() as $nama ) {
         ?> <h3><?php echo $nama->semester ;?></h3>
          <?php }?>
         <p>Tingkat Semester</p>
       </div>
       <div class="icon">
         <i class="ion ion-bookmark"></i>
       </div>
       <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>
   <div class="col-lg-100 col-xs-6">
     <!-- small box -->
     <div class="small-box bg-red">
       <div class="inner">
         <h3>-</h3>

         <p>Nilai TA</p>
       </div>
       <div class="icon">
         <i class="ion ion-clipboard"></i>
       </div>
       <a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>
   <!-- ./col -->

   <div class="col-xs-12">
    <div class="box box-warning">
       <div class="box-header">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Data Mahasiswa</h3>
       </div>
       <table class="table">
        <tbody>
         <tr>
          <td width="150px;">Nama</td>
          <td width="2px;">:</td>
          <?php foreach ($data->result() as $nama ) {
          ?> <td><?php echo $nama->Nama_mhs ;?></td>
         </tr>
         <tr>
          <td>NIM</td>
          <td>:</td>
          <td><?php echo $nama->NIM ;?></td>
         </tr>
         <tr>
          <td>Program Studi</td>
          <td>:</td>
          <td><?php echo $nama->Jurusan ;?></td>
           <?php }?>
         </tr>
         <tr>
          <td>Dosen Tugas Akhir 1</td>
          <td>:</td>
          <td><?php echo $nama->dosen_pembimbing1; ?></td>
         </tr>
         <tr>
          <td>Dosen Tugas Akhir 2</td>
          <td>:</td>
          <td><?php echo $nama->Nama; ?></td>
         </tr>
         <tr>
          <td>Dosen Tugas Akhir 3</td>
          <td>:</td>
          <td><?php echo $nama->dosen_pembimbing3; ?></td>
         </tr>
        </tbody></table>
        <div class="box-body">
        </div><!-- /.box-body-->
       </div>
   </div>
  <?php }?>
 </div>

    <div>
     <!-- Custom Tabs -->
     <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
       <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">SOP Tugas Akhir dan Kelulusan</a></li>
       <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Diagram Alir Tugas Akhir</a></li>
       <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Hak dan Kewajiban Pelaku Tugas Akhir</a></li>
      </ul>
      <div class="tab-content">
       <div class="tab-pane active" id="tab_1">
        <div>
      			<p style="text-align: center;">
          <iframe src="//docs.google.com/viewer?url=http%3A%2F%2Ftg.itera.ac.id%2Fwp-content%2Fuploads%2F2017%2F12%2FDiagram-Alir-Tugas-Akhir.pdf&amp;hl=en_US&amp;embedded=true" class="gde-frame" style="width:900px; height:400px; border: none;" scrolling="no">
          </iframe>
         </p>
         <p class="gde-text">
          <a href="http://tg.itera.ac.id/wp-content/uploads/2017/12/Diagram-Alir-Tugas-Akhir.pdf" class="gde-link">Download (PDF, 14KB)
          </a>
         </p>
        </div>
       </div>
       <!-- /.tab-pane -->
       <div class="tab-pane" id="tab_2">
        <div>
      			<p style="text-align: center;">
          <iframe src="//docs.google.com/viewer?url=http%3A%2F%2Ftg.itera.ac.id%2Fwp-content%2Fuploads%2F2017%2F12%2FDiagram-Alir-Tugas-Akhir.pdf&amp;hl=en_US&amp;embedded=true" class="gde-frame" style="width:900px; height:400px; border: none;" scrolling="no">
          </iframe>
         </p>
         <p class="gde-text">
          <a href="http://tg.itera.ac.id/wp-content/uploads/2017/12/Diagram-Alir-Tugas-Akhir.pdf" class="gde-link">Download (PDF, 14KB)
          </a>
         </p>
        </div>
       </div>
       <!-- /.tab-pane -->
       <div class="tab-pane" id="tab_3">
        <div>
      			<p style="text-align: center;">
          <iframe src="//docs.google.com/viewer?url=http%3A%2F%2Ftg.itera.ac.id%2Fwp-content%2Fuploads%2F2017%2F12%2FHak-dan-Kewajiban-Pelaku-Tugas-Akhir.pdf&amp;hl=en_US&amp;embedded=true" class="gde-frame" style="width:900px; height:400px; border: none;" scrolling="no">
          </iframe>
         </p>
         <p class="gde-text">
          <a href="http://tg.itera.ac.id/wp-content/uploads/2017/12/Hak-dan-Kewajiban-Pelaku-Tugas-Akhir.pdf" class="gde-link">Download (PDF, 218KB)
          </a>
         </p>
        </div>
       </div>
       <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
     </div>
     <!-- nav-tabs-custom -->
    </div>
   </section>
