<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-body-secondary text-uppercase">
              <span>Kelola Slider</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                  <i class="bi bi-card-image"></i> <!-- Ganti ikon di sini -->
              </a>
          </h6>
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/kelola/slider">
                      <i class="bi bi-images"></i> <!-- Ganti ikon di sini -->
                      Daftar Foto
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="/kelola/slider/create">
                      <i class="bi bi-plus-circle"></i> <!-- Ganti ikon di sini -->
                      Tambah Foto
                  </a>
              </li>
          </ul>

          <hr class="my-3">

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-body-secondary text-uppercase">
              <span>Kelola Berita</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                  <i class="bi bi-newspaper"></i> <!-- Ganti ikon di sini -->
              </a>
          </h6>
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/kelola/beritas">
                      <i class="bi bi-card-text"></i> <!-- Ganti ikon di sini -->
                      Daftar Berita
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="/kelola/beritas/create">
                      <i class="bi bi-plus-circle"></i> <!-- Ganti ikon di sini -->
                      Tambah Berita
                  </a>
              </li>
          </ul>

          <hr class="my-3">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-body-secondary text-uppercase">
              <span>Kelola Visi Dan Misi</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                  <i class="bi bi-archive"></i> <!-- Ganti ikon di sini -->
              </a>
          </h6>
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('visimisi.index') ? 'active' : '' }}" aria-current="page" href="{{ route('visimisi.index') }}">
                      <i class="bi bi-card-text"></i> <!-- Ganti ikon di sini -->
                      Visi Dan Misi
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="{{ route('visimisi.create') }}">
                      <i class="bi bi-plus-circle"></i> <!-- Ganti ikon di sini -->
                      Tambah Visi Dan Misi
                  </a>
              </li>
          </ul>

          <hr class="my-3">

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-body-secondary text-uppercase">
              <span>Kelola Struktur Organisasi</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                  <i class="bi bi-people"></i> <!-- Ganti ikon di sini -->
              </a>
          </h6>
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('strukturorganisasi.index') ? 'active' : '' }}" aria-current="page" href="{{ route('strukturorganisasi.index') }}">
                      <i class="bi bi-card-text"></i> <!-- Ganti ikon di sini -->
                      Struktur Organisasi
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="{{ route('strukturorganisasi.create') }}">
                      <i class="bi bi-plus-circle"></i> <!-- Ganti ikon di sini -->
                      Tambah Foto Struktur Organisasi
                  </a>
              </li>
          </ul>

          <hr class="my-3">

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-body-secondary text-uppercase">
              <span>Kelola Pelaporan</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                  <i class="bi bi-file-earmark-text"></i> <!-- Ganti ikon di sini -->
              </a>
          </h6>
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('pelaporan.index') ? 'active' : '' }}" aria-current="page" href="{{ route('pelaporan.index') }}">
                      <i class="bi bi-card-text"></i> <!-- Ganti ikon di sini -->
                      Pelaporan
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="{{ route('pelaporan.create') }}">
                      <i class="bi bi-plus-circle"></i> <!-- Ganti ikon di sini -->
                      Tambah Foto Pelaporan
                  </a>
              </li>
          </ul>

          <hr class="my-3">
          <ul class="nav flex-column mb-auto">
              <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <li class="nav-item">
                      <button type="submit" class="nav-link d-flex align-items-center gap-2">
                          <i class="bi bi-door-closed"></i> <!-- Ganti ikon di sini -->
                          Sign out
                      </button>
                  </li>
              </form>
          </ul>
      </div>
  </div>
</div>
