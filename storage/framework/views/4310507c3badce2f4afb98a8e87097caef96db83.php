<div class="sidebar-menu">
  <ul class="menu">
      <li class='sidebar-title'>Main Menu</li>
      <li class="sidebar-item active ">
          <a href="<?php echo e(url('home')); ?>" class='sidebar-link'>
              <i data-feather="home" width="20"></i>
              <span>Inicio</span>
          </a>
      </li>
      <li>
       
    </li>
     

        <a href="<?php echo e(route('tareas.index')); ?>" class='sidebar-link'>
            <i data-feather="check-square" width="20"></i>
            <span>Crear tareas</span>
        </a>
        <li class="sidebar-item  has-sub">
          <a href="#" class='sidebar-link'>
              <i data-feather="triangle" width="20"></i>
              <span>Administrador</span>
          </a>
  
          

          <ul class="submenu ">

              <li>
                  <a href="<?php echo e(url('usuarios')); ?>">Usuarios</a>
              </li>

              <li>
                  <a href="<?php echo e(url('roles')); ?>">Roles</a>
              </li>

              
          </ul>

      </li>
  </ul>
</div><?php /**PATH C:\Users\DELL\Documents\Universidad\MVC\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>