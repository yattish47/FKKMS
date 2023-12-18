@extends('layouts.manageAccountMaster')
@section('content')
    <div class="container-fluid w-100">
        <div class="d-flex justify-content-center">
            <img src="{{ url('assets/fkkmsLogo.png') }}" alt="fkkms_logo" class="Logo">
            <img src="{{ url('assets/petakomLogo.png') }}" alt="petakom_logo" class="Logo petakomLogo">
            <img src="{{ url('assets/logoUmp.png') }}" alt="ump_logo" class="Logo umpLogo">
        </div>

        <div class="d-flex justify-content-center p-4">
            <div class="card text-center ">
                <div class="card-body">
                    <h5 class="card-title text-center signuptitle">Kiosk Participant Sign Up</h5>
                    <form class="row g-3 needs-validation" action="{{ route('signup') }}" id="signUpForm" novalidate method="POST">
                        @csrf
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="validationCustom01" name="ic_number" required />
                                <label for="validationCustom01" class="form-label">IC Number</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your IC Number</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="validationCustom02" name="name" required />
                                <label for="validationCustom02" class="form-label">Name</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your Name</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="username" required  name="username" autocomplete="username" />
                                <label for="username" class="form-label">Username</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your Username</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="input-group form-outline" data-mdb-input-init>
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername" name="email"
                                    aria-describedby="inputGroupPrepend" required placeholder="Eg: john@gmail.com" />
                                <label for="validationCustomUsername" class="form-label">Email</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your email.</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <select class="form-select" aria-label="Default select example"
                                aria-describedby="inputGroupPrepend" name="participant_type" required>
                                <option selected value="">Select Participant Type</option>
                                <option value="Kiosk Participant">Kiosk Participant</option>
                                <option value="Vendor">Vendor</option>
                            </select>
                        </div>

                        <div class="col-2">

                        </div>

                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="input-group form-outline" data-mdb-input-init>
                                <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-telephone-fill"></i></span>
                                <input type="text" class="form-control" id="phoneNumber"  name="phone_number"
                                    aria-describedby="inputGroupPrepend" required placeholder="Eg: 0121234566" />
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your Phone Number.</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="matricID" name="matric_id" />
                                <label for="username" class="form-label">Matric ID(FK Students)</label>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="nationality" name="nationality" required />
                                <label for="nationality" class="form-label">Nationality</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your Nationality.</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="number" class="form-control" id="age" min="0" step="1" name="age"  required style="appearance: none; -moz-appearance: textfield;"/>
                                <label for="age" class="form-label">Age</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your age.</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="password" class="form-control" id="password" name="password" autocomplete="new-password" required/>
                                <label for="password" class="form-label">Password</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your password.</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                           
                            <div class="form-outline" data-mdb-input-init>
                                <input type="password" class="form-control" id="confirmpassword" required/>
                                <label for="confirmpassword" class="form-label">Confirm Password</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your confirm password.</div>
                               
                            </div>
                            <div id="errordisp"></div>
                        </div>
                        <div class="col-2">
                           
                        </div>
                        <div class="col-12 mt-4">
                            <button class="btn signupbtn btn-primary" id="submitbtn" type="submit" data-mdb-ripple-init>Submit
                                form</button>
                        </div>
                    </form>
                    <p class="card-text mt-3">Already have an account? You can <a href="{{ route('login') }}"><u>login
                                here</u></a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
