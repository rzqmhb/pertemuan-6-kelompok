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
        </ul>

        <ul class="navbar-nav ml-auto">
            
        </ul>
    </nav>