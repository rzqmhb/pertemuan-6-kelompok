    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                <a class="dropdown-item" href="{{route('profile', ['slug' => 'devi-andini-febrianti'])}}">Devi Andini Febrianti</a>
                <a class="dropdown-item" href="{{route('profile', ['slug' => 'roziq-mahbubi'])}}">Roziq Mahbubi</a>
                </div>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('pengalaman')}}" class="nav-link">Pengalaman Kuliah</a>
            </li>

            <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="{{route('logout')}}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout')}}
      
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
    </nav>