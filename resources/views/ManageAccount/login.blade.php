@extends('layouts.manageAccountMaster')
@section('content')
    <div class="container-fluid w-100">
        <div class="d-flex justify-content-center">
            <img src="{{ url('assets/fkkmsLogo.png') }}" alt="fkkms_logo" class="Logo">
            <img src="{{ url('assets/petakomLogo.png') }}" alt="petakom_logo" class="Logo petakomLogo">
            <img src="{{ url('assets/logoUmp.png') }}" alt="ump_logo" class="Logo umpLogo">
        </div>

        <div class="d-flex justify-content-center p-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title text-center login-title">Login</h5>
                    <form class="needs-validation" novalidate method="POST" action="{{ route('authenticate') }}">
                        @csrf
                        <div class="d-flex justify-content-center mt-3">
                            <select  name="user_type" class="form-select w-75 login-input" aria-label="Default select example"
                                aria-describedby="inputGroupPrepend" required>
                                <option selected value="">Select User Type</option>
                                <option value="Admin">Admin</option>
                                <option value="PUPUK Admin">PUPUK Admin</option>
                                <option value="FK Bursary">FK Bursary</option>
                                <option value="FK Technical Team">FK Technical Team</option>
                                <option value="Kiosk Participant">Kiosk Participant</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <div class="form-outline w-75" data-mdb-input-init>
                                <input name="icnumber" type="text" id="validationCustomUsername" class="form-control login-input"
                                    autocomplete="username" aria-describedby="inputGroupPrepend" required />
                                <label class="form-label" for="validationCustomUsername">IC Number</label>
                                <div class="invalid-feedback" style="margin-top:5px; ">Please enter your IC Number.</div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-5">
                            <div class="form-outline w-75" data-mdb-input-init>
                                <input name="password" type="password" id="form12" class="form-control login-input"
                                    autocomplete="new-password" aria-describedby="inputGroupPrepend" required />
                                <label class="form-label" for="form12">Password</label>
                                <div class="invalid-feedback" style="margin-top:5px;">Please enter your password.</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-4">
                            <p class="forget-pass-text"><a href="/"><u>Forgot Password?</u></a></p>
                        </div>
                        <button class="btn btn-primary w-50 loginbtn mt-4" type="submit"
                            data-mdb-ripple-init>LOGIN</button>

                    </form>
                    <p class="sign-up-link">Don’t have an account? You can <a href="{{route('register')}}"><u> register here</u></a></p>
                </div>
            </div>
        </div>

        

    </div>
@endsection
