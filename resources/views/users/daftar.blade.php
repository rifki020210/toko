<div class="w-75 mx-auto bg-body-secondary p-3">
  <h2 class="mb-5 mt-5">Daftar</h2>
  <form class="mb-5" method="POST" action="/daftar">
    @csrf
   
    <div class="form-floating is-invalid mb-3">
  	  <input type="text" name="namaDepan" class="form-control @error('namaDepan') is-invalid @enderror" id="namaDepan" placeholder="Nama Depan" value="">
  	  <label for="namaDepan">Nama Depan</label>
      @error('namaDepan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
 
    
    <div class="form-floating">
  	  <input type="text" name="namaBelakang" class="form-control mb-3" id="namaBelakang" placeholder="Nama Belakang" value="">
  	  <label for="namaBelakang">Nama Belakang</label>

    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control mb-3" id="email" placeholder="Email" value="">
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
  	   <input type="password" name="password" class="form-control mb-3" id="password" placeholder="password" value="">
  	   <label for="password">Password</label>
    </div>
    <div class="d-flex justify-content-md-end mt-5">
    <div class=" d-grid gap-2 d-md-block">
              <a href="/login" class="btn btn-dark">Ke Halaman Login</a>
              <button type="submit" class="btn btn-success">Daftar</button>
          </div>
        </div>
  </form>
</div>