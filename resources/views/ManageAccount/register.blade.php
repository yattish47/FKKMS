@extends('ManageAccount.layouts.master')
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
                    <h5 class="card-title">Card title</h5>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="validationCustom01" value="Mark"
                                    required />
                                <label for="validationCustom01" class="form-label">First name</label>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="validationCustom02" value="Otto"
                                    required />
                                <label for="validationCustom02" class="form-label">Last name</label>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group form-outline" data-mdb-input-init>
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername"
                                    aria-describedby="inputGroupPrepend" required />
                                <label for="validationCustomUsername" class="form-label">Username</label>
                                <div class="invalid-feedback">Please choose a username.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="validationCustom03" required />
                                <label for="validationCustom03" class="form-label">City</label>
                                <div class="invalid-feedback">Please provide a valid city.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="validationCustom05" required />
                                <label for="validationCustom05" class="form-label">Zip</label>
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                                <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" data-mdb-ripple-init>Submit form</button>
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>
            </div>
        </div>
    </div>
@endsection
