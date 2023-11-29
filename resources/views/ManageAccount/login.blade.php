@extends('ManageAccount.layouts.master')
@section('content')

<div class="container-fluid w-100">
    <div class="d-flex justify-content-center">
        <img src="{{url('assets/fkkmsLogo.png')}}" alt="fkkms_logo" class="Logo">
        <img src="{{url('assets/petakomLogo.png')}}" alt="petakom_logo" class="Logo petakomLogo">
        <img src="{{url('assets/logoUmp.png')}}" alt="ump_logo" class="Logo umpLogo">
    </div>

    <div class="d-flex justify-content-center p-4">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-center login-title">Login</h5>
            <div class="d-flex justify-content-center mt-3">
                <select class="form-select w-75 login-input" aria-label="Default select example">
                    <option selected disabled>Select User Type</option>
                    <option value="Admin">Admin</option>
                    <option value="PUPUK Admin">PUPUK Admin</option>
                    <option value="FK Bursary">FK Bursary</option>
                    <option value="FK Technical Team">FK Technical Team</option>
                    <option value="Kiosk Participant">Kiosk Participant</option>
                </select>
            </div>
            <div class="d-flex justify-content-center mt-3">
              <div class="form-outline w-75"  data-mdb-input-init="">
                <input type="text" id="form11" class="form-control login-input" autocomplete="username">
                <label class="form-label" for="form11">Username</label>
              </div>
          </div>
          <div class="d-flex justify-content-center mt-3">
            <div class="form-outline w-75"  data-mdb-input-init="">
              <input type="password" id="form12" class="form-control login-input" autocomplete="new-password">
              <label class="form-label" for="form12">Password</label>
            </div>
        </div>
        <div class="d-flex justify-content-start mt-3">
          <p class="forget-pass-text"><a href="/"><u>Forgot Password?</u></a></p>
      </div>
            <button type="button" class="btn btn-primary w-50 loginbtn mt-4" data-mdb-ripple-init="">LOGIN</button>
            <p class="sign-up-link">Don’t have an account? You can <a href="/"><u> register here</u></a></p>
        </div>
          </div>
    </div>
  
</div>
@endsection