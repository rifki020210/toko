<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin KLS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
  </head>
  <body>
   
   {{-- siderbar --}}
    <div class=" sidebar bg-dark text-light p-3">
        <div class=" my-3">
            <h1>KLS STORE</h1>
        </div>
        <div class="p-3">
          <ul class="navbar-nav link-light ">
            <li class="nav-item icon-link icon-link-hover link-opacity-50-hover ">
              <i class="bi bi-speedometer2 fs-4" ></i>
              <a class="text-decoration-none ps-2  link-light"  href="#">
                 Dashboard
              </a>
            </li>
            <li class="nav-item icon-link icon-link-hover link-opacity-50-hover ">
              <i class="bi bi-speedometer2 fs-4" ></i>
              <a class="text-decoration-none ps-1 pt-3 link-light"  href="#">
                 Buat Pengumuman
              </a>
            </li>
            <li class="nav-item icon-link icon-link-hover link-opacity-50-hover ">
              <i class="bi bi-speedometer2 fs-4" ></i>
              <a class="text-decoration-none ps-1 pt-3 link-light"  href="#">
                 Tambah Produk
              </a>
            </li>
           
          </ul>
 
        </div>
    </div>
    {{-- Akhir sidebar --}}

    {{-- Navbar --}}
    
    <nav class="navbar-kami p-3 position-absolute top-0 border">
        

            <form class="d-flex" role="search">
                <input class="form-control me-2 w-50" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
         
        
            
         
       
      </nav>
       
    {{-- Akhir Navbar --}}

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>