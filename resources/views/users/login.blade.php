  <div class="card mx-auto my-5 w-50 shadow p-3">
    <div class="card-body">
      <h3 class="card-title text-center mb-4">Login</h3>
       <form class="" method="post" action="/login">
        @csrf
      <div class="form-floating">
        <input type="email" class="form-control mb-3" id="email" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off" required>
        <label for="email">Email</label>
              @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
      <div class="form-floating">
    	   <input type="password" class="form-control mb-3" id="password" name="password" placeholder="password" required>
    	   <label for="password">Password</label>
      @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
   	<div class="d-grid gap-2">
  	  <button class="btn btn-success" type="submit">Login</button>
  	  <a class="btn btn-dark" href="/daftar">Daftar</a>
  	</div>
      
    </form>
    </div>
  </div>