<aside class="main-sidebar sidebar-light-orange  elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center">
      <span class="brand-text font-weight-light">เบิกจ่ายวัสดุ - อุปกรณ์</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="mx-auto">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <a href="" target="_bank" class="d-block">Admin</a>
        </div>
      </div>
      </div>
       
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-compact -->
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENU</li>


        
          <li class="nav-item" >
            <a href="<?php echo base_url() ?>Home" class="nav-link <?php if($menu=="home"){echo "active";} ?> ">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Dashboard </p>
            </a>
          </li>

          <li class="nav-item" >
            <a href="<?php echo base_url() ?>Watsadu" class="nav-link <?php if($menu=="watsadu"){echo "active";} ?> ">
            <i class="nav-icon fas fa-paperclip"></i>
              <p>จัดการวัสดุ</p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="<?php echo base_url() ?>pofficial" class="nav-link <?php if($menu=="pofficial"){echo "active";} ?> ">
            <i class="nav-icon fas fa-suitcase"></i>
              <p>จัดการหน่วยงาน </p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="<?php echo base_url() ?>regular" class="nav-link <?php if($menu=="regular"){echo "active";} ?> ">
            <i class=" nav-icon fas fa-align-center"></i>
              <p>จัดการหน่วยนับ </p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="<?php echo base_url() ?>temporary" class="nav-link <?php if($menu=="temporary"){echo "active";} ?> ">
            <i class="nav-icon fas fa-boxes"></i>
              <p>อัพเดทสต๊อก</p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="<?php echo base_url() ?>setting" class="nav-link <?php if($menu=="setting"){echo "active";} ?> ">
            <i class="nav-icon fas fa-times"></i>
              <p>สรุปการไม่อนุมัติให้เบิก</p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="<?php echo base_url() ?>setting" class="nav-link <?php if($menu=="setting"){echo "active";} ?> ">
            <i class="nav-icon fas fa-chart-pie"></i>
              <p>สรุปการเบิกจ่าย</p>
            </a>
          </li>
          
         
      <div class="user-panel mt-2 pb-3 mb-2 d-flex">
  
      </div>
          <li class="nav-item">
            <a href=""   data-toggle="modal" data-target=".modal-logout" class="nav-link text-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
  


          
        </ul>
      </nav>
      
    
    </div>
 
  </aside>
