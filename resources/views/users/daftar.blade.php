<div class="w-75 mx-auto bg-body-secondary p-3">
  <h2 class="mb-5 mt-5">Daftar</h2>
  <form class="mb-5" method="POST" action="/daftar">
    @csrf
   
    <div class="form-floating is-invalid mb-3">
  	  <input type="text" name="namaDepan" class="form-control @error('namaDepan') is-invalid @enderror" id="namaDepan" placeholder="Nama Depan" value="{{ old('namaDepan') }}">
  	  <label for="namaDepan">Nama Depan</label>
      @error('namaDepan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating is-invalid mb-3">
  	  <input type="text" name="namaBelakang" class="form-control @error('namaBelakang') is-invalid @enderror" id="namaBelakang" placeholder="Nama Belakang" value="{{old('namaBelakang')}}">
  	  <label for="namaBelakang">Nama Belakang</label>
       @error('namaBelakang')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating is-invalid mb-3">
      <select class="form-select  @error('status') is-invalid @enderror" id="pilihPosisi" name="status" value="{{old('status')}}" >
        <option selected>Pilih Posisi</option>
        <option value="1">Admin</option>
        <option value="2">Buyer</option>
        <option value="3">Karyawan</option>
      </select>
      <label for="pilihPosisi">Posisi</label>
             @error('status')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating is-invalid mb-3">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{old('email')}}">
      <label for="email">Email</label>
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-floating is-invalid mb-3">
  	   <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{old('password')}}">
  	   <label for="password">Password</label>
      @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="d-flex justify-content-md-end mt-5">
    <div class=" d-grid gap-2 d-md-block">
              <a href="/login" class="btn btn-dark">Ke Halaman Login</a>
              <button type="submit" class="btn btn-success">Daftar</button>
          </div>
        </div>
  </form>
</div>