<ul class="nav sidebar-menu">
    <li>
        <a href="{{ route('admin.dashboard') }}">
            <div class="fas fa-tachometer-alt" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Dashboard </span>
        </a>    
    </li>

    <li>
        <a href="{{ route('admin.banner') }}">
            <div class="fas fa-users" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Banner </span>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.profil') }}">
            <div class="fas fa-users" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Profil </span>
        </a>
    </li>

    <li>
        <a href="#" class="menu-dropdown">
            <div class="fas fa-th-large" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Visi & Misi </span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="{{ route('admin.visi') }}">
                    <div class="fas fa-level-up-alt" style="width: 25px"></div>
                    <span class="menu-text"> Visi </span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.misi') }}">
                    <div class="fas fa-level-up-alt" style="width: 25px"></div>
                    <span class="menu-text"> Misi </span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ route('admin.bisnis') }}">
            <div class="fas fa-users" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Bisnis </span>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.proyek') }}">
            <div class="fas fa-users" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Proyek </span>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.founder') }}">
            <div class="fas fa-users" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Founder </span>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.klien') }}">
            <div class="fas fa-users" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Klien </span>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.kontak') }}">
            <div class="fas fa-users" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Kontak </span>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.galeri') }}">
            <div class="fas fa-users" style="padding-left: 7px; width: 30px"></div>
            <span class="menu-text"> Galero </span>
        </a>
    </li>

</ul>
