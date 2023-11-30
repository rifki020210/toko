<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin KLS | {{ $page['title'] }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
  </head>
  <body>
   <div class="row pe-0" style="width: 1378px">
   {{-- siderbar --}}
    <div class="col-2 sidebar bg-dark text-light p-3 ">
        <div class=" my-3">
            <h1>KLS STORE</h1>
        </div>
        <div class="p-3">
          <ul class="navbar-nav link-light ">
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="#">
                 <i class="bi bi-speedometer2 fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Dashboard</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="#">
                 <i class="bi bi-house-add fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Buat Pengumuman</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="#">
                 <i class="bi bi-database-add fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Tambah Produk</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="#">
                 <i class="bi bi-calendar2-plus fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Atur Jadwal Piket</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="#">
                 <i class="bi bi-regex fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Buat Kode Presensi</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="#">
                 <i class="bi bi-cart-check fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Buat Jumlah Orderan</span> 
              </a>
            </li>
            <li class="nav-item  d-flex align-items-center">
              <a class="text-decoration-none ps-2 link-light icon-link icon-link-hover link-opacity-50-hover "  href="#">
                 <i class="bi bi-cursor fs-4 me-2 align-middle" ></i>
                 <span class="align-middle pt-3">Buat Aduan</span> 
              </a>
            </li>
          </ul>
        </div>
    </div>
    {{-- Akhir sidebar --}}

    {{-- Bagian Utama --}}
    <div class="col p-0">
    {{-- Navbar --}}
    <nav class="navbar-kami bg-body-secondary p-3 w-100">
      <div class="d-flex">
        <div class="flex-grow-1">
            <form class="d-flex" role="search">
                <input class="form-control me-2 w-50" type="search" placeholder="Pencarian" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
              </form>
          </div>
          <div class="d-flex align-items-center">
              <a class="text-decoration-none text-body link-dark icon-link icon-link-hover link-opacity-50-hover "  href="#">
                      <i class="bi bi-gear fs-5 me-2 mb-2 align-middle" ></i>
                      <span class="align-middle ">Pengaturan</span> 
              </a>
          </div>
        </div>
      </nav>   
    {{-- Akhir Navbar --}}

    
      <div class="main mt-5">
        <div class="mt-5 container">
          @includeWhen($page['halaman'], 'admin.dashboard')
        </div>
      </div>
  {{-- Akhir Bagian Utama --}}
    </div>
    
</div>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>