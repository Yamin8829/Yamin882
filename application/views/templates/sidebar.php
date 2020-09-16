<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" >
  <div class="sidebar-brand-icon ">
  <i class="fas fa-chalkboard-teacher"></i>
  </div>
  <div class="sidebar-brand-text mx-3">My School <sup></sup></div>
</a>
<hr class="sidebar-divider d-none d-md-block">
      <!-- query menu--> 
      <?php

      $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu` 
                 FROM `user_menu` Join `user_access_menu`
                  ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                 WHERE `user_access_menu`.`role_id` = $role_id
                 ORDER BY `user_access_menu`.`menu_id` ASC 
                 ";   

                $menu = $this->db->query($queryMenu)->result_array();        
      ?>


<!-- looping menu-->
<?php foreach($menu as $m) : ?>
<div class="sidebar-heading">
<?= $m['menu']; ?>
</div>

<?php 
$menuId = $m['id'];
$querySubMenu = "SELECT *
                FROM `user_sub_menu` JOIN `user_menu` 
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                WHERE `user_sub_menu`.`menu_id` = $menuId 
                AND `user_sub_menu`.`is_active`= 1 
              ";

        $subMenu = $this->db->query($querySubMenu)->result_array();
          ?>
          
    <?php foreach ($subMenu as $sm) : ?>
  <?php if($judul == $sm['judul']) : ?>
  <li class="nav-item active">
  <?php else : ?>
    <li class="nav-item">
  <?php endif;?>
  <a class="nav-link" href="<?= base_url($sm['url']); ?>">
    <i class="<?= $sm['icon'];?>"></i>
    <span><?= $sm['judul'];?></span></a>
</li>
<hr class="sidebar-divider d-none d-md-block">
<?php endforeach; ?>

<?php endforeach; ?>

<!-- Nav Item - Dashboard -->



<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('auth/logout');?>">
    <i class="fas fa-fw fa-sign-out-alt"></i>
    <span>Log Out</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->