@extends('landingPage.layout')

@section('landingPage')

<div class="sign-in-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 col-md-8">
        <div class="sign-in-2-box  justify-content-lg-end">
          <form action="{{  route('login') }}" method="post">
            @csrf
            <div class="heading text-center">
              <h2>MASUK</h2>
            </div>
            <div class="form-group">
              <input type="username" value="{{ old('username') }}" name="username" id="username" class="form-control"
                placeholder="username">
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control" placeholder="password">
              @error('password')
              <div class="text-danger mt-2" style="color:red">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="keep-sign-area">
              <div class="check-form d-inline-block">
                <label for="terms-check" class="check-input-control d-flex align-items-center mb-0">
                  <input class="d-none" type="checkbox" id="terms-check">
                  <span class="checkbox checkbox-2 rounded-check-box "></span>
                  <span class="remember-text">Tetap masuk</span>
                </label>
              </div>
            </div>
            <div class="sign-in-log-btn">
              <button type="submit" class="btn focus-reset">Submit</button>
            </div>
            <div class="create-new-acc-text text-center">
              <p>Belum memiliki akun? <a href="#">Hubungi Team</a></p>
            </div>
          </form>
          <div class="create-new-acc-text text-center">
            <p>Lupa password? <a href="#">Reset !</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection