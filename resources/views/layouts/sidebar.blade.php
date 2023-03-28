    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{route('dashboard')}}" class="brand-link">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Logo_Politeknik_Negeri_Malang.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Web Lanjut</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/public/img/<?php echo($user->profile); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
                <div class="info">
                    <a href="#" class="d-block">{{ $user->name }}</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-address-card"></i>
                    <p>
                        Profile
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('profile', ['slug' => 'devi-andini-febrianti'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Devi Andini Febrianti</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('profile', ['slug' => 'roziq-mahbubi'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Roziq Mahbubi</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('pengalaman')}}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-book"></i>
                    <p>
                        Pengalaman Kuliah
                    </p>
                    </a>
                </li>
                </ul>
            </nav>
        </div>
    </aside>