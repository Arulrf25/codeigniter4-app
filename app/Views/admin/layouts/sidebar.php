<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="<?= base_url('sneat/img/avatars/1.png') ?>" alt="">
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">AL MUNTADHOR</span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>
  <div class="menu-inner-shadow"></div>
  <ul class="menu-inner py-1">
    <li class="menu-item">
      <a href="/dashboard-admin" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Beranda</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bxs-data"></i>
        <div data-i18n="Layouts">Master Data</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="/data-akun" class="menu-link">
            <div data-i18n="Without menu">Data Akun</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/data-alumni" class="menu-link">
            <div data-i18n="Without navbar">Data Alumni</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/data-kelas" class="menu-link">
            <div data-i18n="Container">Update Kelas</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/data-prestasi" class="menu-link">
            <div data-i18n="Container">Data Capaian</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/data-kegiatan" class="menu-link">
            <div data-i18n="Fluid">Jadwal Kegiatan</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="/setting-aplikasi" class="menu-link">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Account">Setting Aplikasi</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="/data-pengumuman" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-info-square"></i>
        <div data-i18n="Account">Pengumuman</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="/data-galeri" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-photo-album"></i>
        <div data-i18n="Account">Galeri</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{route('logout')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-log-out"></i>
        <div data-i18n="Account">Keluar</div>
      </a>
    </li>
  </ul>
</aside>