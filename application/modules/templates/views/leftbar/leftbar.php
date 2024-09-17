<div class="app-sidebar">
  <div class="logo">
    <a href="index.html" class="logo-icon"><span class="logo-text">TRACER</span></a>
    <div class="sidebar-user-switcher user-activity-online">
      <a href="#">
        <!-- <img src="<?= base_url('assets/images/avatars/avatar.png') ?>"> -->
        <!-- <span class="activity-indicator"></span> -->
        <span class="user-info-text"><?php echo $user['nama'] ?><br><span class="user-state-info"></span></span>
      </a>
    </div>
  </div>
  <div class="app-menu">
    <ul class="accordion-menu">
      <li class="sidebar-title">
        Apps
      </li>
      <li class="active-page">
        <a href="<?= base_url('admin') ?>" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
      </li>
      <li>
        <a href="#"><i class="material-icons-two-tone">view_agenda</i>Data<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
        <ul class="sub-menu">
          <li>
            <a href="<?= base_url('admin/penggunalulusan') ?>">Pengguna Lulusan</a>
          </li>
          <li>
            <a href="<?= base_url('admin/alumni') ?>">Alumni</a>
          </li>
          <li>
            <a href="<?= base_url('admin/hasil') ?>">Hasil</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="<?= base_url('admin/chart') ?>"><i class="material-icons-two-tone">calendar_today</i>Chart</a>
      </li>

    </ul>
  </div>
</div>