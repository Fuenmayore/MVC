<div class="sidebar-menu">
  <ul class="menu">
      <li class='sidebar-title'>Main Menu</li>
      <li class="sidebar-item active ">
          <a href="{{url('home')}}" class='sidebar-link'>
              <i data-feather="home" width="20"></i>
              <span>Inicio</span>
          </a>
      </li>
      <li>
       
    </li>
     

        <a href="{{ route('tareas.index') }}" class='sidebar-link'>
            <i data-feather="check-square" width="20"></i>
            <span>Crear tareas</span>
        </a>
        <li class="sidebar-item  has-sub">x 
          <a href="#" class='sidebar-link'>
              <i data-feather="triangle" width="20"></i>
              <span>Administrador</span>
          </a>
  
          

          <ul class="submenu ">

              <li>
                  <a href="{{url('usuarios')}}">Usuarios</a>
              </li>

              <li>
                  <a href="{{url('roles')}}">Roles</a>
              </li>

              
          </ul>

      </li>
  </ul>
</div>