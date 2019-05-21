<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
       <?php foreach ($untuk_menu->result() as $nama ) {
       ?>
        <img src="<?php echo base_url() ?>assets/foto_profil/<?php echo $nama->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
         <p><?php echo $nama->Nama_mhs ;?></p>
         <?php }?>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- ini menu side bar -->
    <ul class="sidebar-menu" data-widget="tree">
      <li >
        <a href="<?php echo base_url() ?>BerandaMhs">
          <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
      </li>
    </ul>

    <ul class="sidebar-menu" data-widget="tree">
      <li>
       <?php foreach ($untuk_menu->result() as $stat ) {
       ?>
       <?php
       if ($stat->st_profil == 0) {
        ?>
        <a href="#modal-default" data-toggle="modal" data-target="#modal-default">
          <i class="fa fa-book"></i> <span>Pendaftaran TA1</span>
        </a>
       <?php }
       else {
        ?>
       <a href="<?php echo base_url() ?>DaftarTA">
         <i class="fa fa-book"></i> <span>Pendaftaran TA1</span>
       </a>
      <?php } ?>
      </li>
    </ul>

    <ul class="sidebar-menu" data-widget="tree">
      <li>
       <?php if ($stat->status_ta >= 3) {
        ?>
        <a href="<?php echo base_url() ?>Daftar_Seminar_TA1">
          <i class="fa fa-book"></i> <span>Pendaftaran Seminar TA1</span>
        </a>
        <?php }
        else {
         ?>
         <a href="#modal-sm-ta1" data-toggle="modal" data-target="#modal-sm-ta1">
           <i class="fa fa-book"></i> <span>Pendaftaran Seminar TA1</span>
         </a>
        <?php } ?>
      </li>
    </ul>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="active">
       <?php if ($stat->status_ta >= 6) {
        ?>
        <a href="<?php echo base_url() ?>Daftar_Seminar_Hasil">
          <i class="fa fa-bullhorn"></i> <span>Pendaftaran Seminar Hasil</span>
        </a>
        <?php }
        else {
          ?>
          <a href="#modal-sm-hasil" data-toggle="modal" data-target="#modal-sm-hasil">
            <i class="fa fa-book"></i> <span>Pendaftaran Seminar Hasil</span>
          </a>
         <?php } ?>
       </li>
     </ul>

    <ul class="sidebar-menu" data-widget="tree">
      <li>
       <?php if ($stat->status_ta >= 9) {
        ?>
        <a href="<?php echo base_url() ?>Daftar_Sidang">
          <i class="fa fa-graduation-cap"></i> <span>Pendaftaran Sidang</span>
        </a>
       <?php }
       else {
         ?>
         <a href="#modal-sidang" data-toggle="modal" data-target="#modal-sidang">
           <i class="fa fa-book"></i> <span>Pendaftaran Sidang</span>
         </a>
        <?php } ?>
      </li>
    </ul>

    <ul class="sidebar-menu" data-widget="tree">
     <li>
      <?php if ($stat->status_ta >= 12) {
       ?>
       <a href="<?php echo base_url() ?>Yudisium">
          <i class="fa fa-university"></i> <span>Yudisium</span>
        </a>
       <?php }
       else {
         ?>
         <a href="#modal-yudisium" data-toggle="modal" data-target="#modal-yudisium">
           <i class="fa fa-book"></i> <span>Yudisium</span>
         </a>
        <?php } ?>
      </li>
    </ul>
    <?php }?>

    <!-- akhir dari menu -->
  </section>
  <!-- /.sidebar -->
</aside>
