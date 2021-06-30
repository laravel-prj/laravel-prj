  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="<?php echo e(asset('admin/images/logo.png')); ?>" alt="MOteam Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">MO team</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?php echo e(asset('admin/images/user.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">MO team</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                      <a href="#" class="nav-link active">
                          <p> Dashboard</p>
                      </a>

                  <li class="nav-item">
                      <a href="<?php echo e(asset('admin-mo/admin-mng')); ?>" class="nav-link">
                          <i class="nav-icon fa fa-user-circle"></i>
                          <p>
                              Manager Admins
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo e(asset('admin-mo/customer-mng')); ?>" class="nav-link">
                          <i class="nav-icon fa fa-id-card"></i>
                          <p>
                              Manager Customers
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="pages/kanban.html" class="nav-link">
                          <i class="nav-icon fa fa-shopping-bag"></i>
                          <p>
                              Manager Orders
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="pages/kanban.html" class="nav-link">
                          <i class="nav-icon fas fa-columns"></i>
                          <p>
                              Manager Item
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo e(asset('admin-mo/itemType/index')); ?>" class="nav-link">
                          <i class="nav-icon fas fa-columns"></i>
                          <p>
                              Manager ItemTypes
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo e(asset('admin-mo/brand/index')); ?>" class="nav-link">
                          <i class="nav-icon fa fa-star"></i>
                          <p>
                              Manager Brands
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
<?php /**PATH C:\Users\user\Desktop\laravel prj\resources\views/admin/partial/sidebar.blade.php ENDPATH**/ ?>