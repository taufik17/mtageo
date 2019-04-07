<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php base_url() ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <?php foreach ($data->result() as $nama ) {
        ?> <p><?php echo $nama->Nama_mhs ;?></p>
         <?php }?>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- ini menu side bar -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="active">
        <a href="<?php base_url() ?>BerandaMhs">
          <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
      </li>
    </ul>

    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url() ?>DaftarTA">
          <i class="fa fa-book"></i> <span>Pendaftaran TA1</span>
        </a>
      </li>
    </ul>
    <ul class="sidebar-menu" data-widget="tree">
      <li >
        <a href="<?php echo base_url() ?>Daftar_Seminar_TA1">
          <i class="fa fa-book"></i> <span>Pendaftaran Seminar TA1</span>
        </a>
      </li>
    </ul>
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url() ?>Daftar_Seminar_Hasil">
          <i class="fa fa-bullhorn"></i> <span>Pendaftaran Seminar Hasil</span>
        </a>
      </li>
    </ul>
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url() ?>Daftar_Sidang">
          <i class="fa fa-graduation-cap"></i> <span>Pendaftaran Sidang</span>
        </a>
      </li>
    </ul>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-university"></i> <span>Yudisium</span>
        </a>
      </li>
    </ul>
    <!-- akhir dari menu -->
  </section>
  <!-- /.sidebar -->
</aside>
