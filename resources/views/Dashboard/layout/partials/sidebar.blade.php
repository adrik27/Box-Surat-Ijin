<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            @can('admin')
            <li class="{{ Request::is('Dashboard/Admin*')?'active' : '' }}">
                <a href="/Dashboard/Admin" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-house fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('Dashboard/User*')?'active' : '' }}">
                <a href="/Dashboard/User" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-users fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Anggota</span>
                </a>
            </li>
            <li class="{{ Request::is('Dashboard/Divisi*')?'active' : '' }}">
                <a href="/Dashboard/Divisi" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-diamond fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Divisi</span>
                </a>
            </li>
            <li class="{{ Request::is('Dashboard/KategoriSurat*')?'active' : '' }}">
                <a href="/Dashboard/KategoriSurat" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-network-wired fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Kategori Box</span>
                </a>
            </li>
            <li class="{{ Request::is('Dashboard/AllBox*')?'active' : '' }}">
                <a href="/Dashboard/AllBox" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-box-archive fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> All Box</span>
                </a>
            </li>
            @endcan
            @can('pegawai')
            <li class="{{ Request::is('Dashboard/Surat*')?'active' : '' }}">
                <a href="/Dashboard/Surat" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-parachute-box fa-beat-fade"></i>
                    </div>
                    <span class="nav-text">Box</span>
                </a>
            </li>
            @endcan
            @can('kabag')
            <li class="{{ Request::is('Dashboard/Kabag*')?'active' : '' }}">
                <a href="/Dashboard/Kabag" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-parachute-box fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> KABAG</span>
                </a>
            </li>
            @endcan
            @can('hrd')
            <li class="{{ Request::is('Dashboard/HRD*')?'active' : '' }}">
                <a href="/Dashboard/HRD" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-parachute-box fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> HRD</span>
                </a>
            </li>
            @endcan
        </ul>
    </div>
</div>