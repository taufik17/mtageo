<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
       <?php foreach ($data->result() as $nama ) {
       ?>
        <img src="<?php echo base_url() ?>assets/foto_profil_dosen/<?php echo $nama->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $nama->Nama ;?></p>
        <?php }?>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- ini menu side bar -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url() ?>BerandaDosen">
          <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
      </li>
    </ul>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="active">
        <a href="<?php echo base_url() ?>validasi_ta">
          <i class="fa fa-book"></i> <span>Validasi TA</span>
        </a>
      </li>
    </ul>

    <!-- akhir dari menu -->
  </section>
  <!-- /.sidebar -->
</aside>
