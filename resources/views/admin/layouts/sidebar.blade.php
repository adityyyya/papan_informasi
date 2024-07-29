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
              <svg class="bi"><use xlink:href="#card-slider"/></svg>
          </a>
      </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/kelola/slider">
              <svg class="bi"><use xlink:href="#slider"/></svg>
              Daftar Foto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/kelola/slider/create">
              <svg class="bi"><use xlink:href="#add-slider"/></svg>
              Tambah Foto
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-body-secondary text-uppercase">
            <span>Kelola Berita</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <svg class="bi"><use xlink:href="#news"/></svg>
            </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/kelola/beritas">
              <svg class="bi"><use xlink:href="#card-news"/></svg>
              Daftar Berita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/kelola/beritas/create">
              <svg class="bi"><use xlink:href="#news-plus"/></svg>
              Tambah Berita
            </a>
          </li>
        </ul>

        

        {{-- <hr class="my-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-body-secondary text-uppercase">
          <span>Kelola Visi Dan Misi</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
              <svg class="bi"><use xlink:href="#news"/></svg>
          </a>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="">
            <svg class="bi"><use xlink:href="#card-news"/></svg>
            Visi Dan Misi
          </a>
        </li> --}}
        
        <hr class="my-3">
        <ul class="nav flex-column mb-auto">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <li class="nav-item">
              <button type="submit" class="nav-link d-flex align-items-center gap-2">
                <svg class="bi"><use xlink:href="#door-closed" /></svg>
                Sign out
              </button>
            </li>
          </form>
        </ul>
      </div>
    </div>
  </div>