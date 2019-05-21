<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
       <?php foreach ($data->result() as $gmbr ) {
       ?>
        <img src="<?php echo base_url() ?>assets/foto_profil/<?php echo $gmbr->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
         <p><?php echo $gmbr->Nama ;?></p>
         <?php }?>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- ini menu side bar -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url() ?>BerandaKoor">
          <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
      </li>
    </ul>
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url() ?>K_MahasiswaTA">
          <i class="fa fa-book"></i> <span>Mahasiswa TA</span>
        </a>
      </li>
    </ul>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="active">
        <a href="<?php echo base_url() ?>K_seminar_ta">
          <i class="fa fa-book"></i> <span>Seminar TA1</span>
        </a>
      </li>
    </ul>
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url() ?>K_seminar_hasil">
          <i class="fa fa-bullhorn"></i> <span>Seminar Hasil</span>
        </a>
      </li>
    </ul>
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url() ?>K_sidang">
          <i class="fa fa-graduation-cap"></i> <span>Sidang</span>
        </a>
      </li>
    </ul>

    <!-- <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-university"></i> <span>Yudisium</span>
        </a>
      </li>
    </ul> -->
    <!-- akhir dari menu -->
  </section>
  <!-- /.sidebar -->
</aside>
