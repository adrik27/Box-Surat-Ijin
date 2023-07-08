<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="{{ Request::is(' Dashboard*')?'active' : '' }}">
                <a href="/Dashboard" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-house fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('Anggota*')?'active' : '' }}">
                <a href="/Anggota" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-users fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Anggota</span>
                </a>
            </li>
            <li class="{{ Request::is('Divisi*')?'active' : '' }}">
                <a href="/Divisi" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-diamond fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Divisi</span>
                </a>
            </li>
            <li class="{{ Request::is('KategoriBox*')?'active' : '' }}">
                <a href="/KategoriBox" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-network-wired fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Kategori Box</span>
                </a>
            </li>
            <li class="{{ Request::is('AllBox*')?'active' : '' }}">
                <a href="/AllBox" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-box-archive fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> All Box</span>
                </a>
            </li>
            <li class="{{ Request::is('BoxPegawai*')?'active' : '' }}">
                <a href="/BoxPegawai" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-parachute-box fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Box Pegawai</span>
                </a>
            </li>
            <li class="{{ Request::is('BoxKabag*')?'active' : '' }}">
                <a href="/BoxKabag" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-parachute-box fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Box KABAG</span>
                </a>
            </li>
            <li class="{{ Request::is('BoxHrd*')?'active' : '' }}">
                <a href="/BoxHrd" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <i class="fas fa-solid fa-parachute-box fa-beat-fade"> </i>
                    </div>
                    <span class="nav-text"> Box HRD</span>
                </a>
            </li>
        </ul>
    </div>
</div>