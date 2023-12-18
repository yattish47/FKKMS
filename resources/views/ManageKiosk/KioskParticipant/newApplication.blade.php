@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/ManageKiosk/newApplication.css') }}">

    <div class="container-fluid">
        <div class="card h-100 text-center">
            <div class="card-body">
                <h3 class="text-center main-title mt-4">New Kiosk Application</h3>
                <form class="row g-3 needs-validation" id="signUpForm" novalidate>

                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <select class="form-select" aria-label="Default select example" aria-describedby="inputGroupPrepend"
                            name="kInventoryType" required>
                            <option selected value="">Choose Inventory</option>
                            <option value="Waffle Machine">Waffle Machine</option>
                            <option value="Coffee Machine">Coffee Machine</option>
                            <option value="Oden Stove">Oden Stove</option>
                        </select>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control" id="validationCustom02" name="kBusinessName" />
                            <label for="validationCustom02" class="form-label">Business Name (Optional)</label>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <select class="form-select" aria-label="Default select example" aria-describedby="inputGroupPrepend"
                            name="kBusinessType" required>
                            <option selected value="">Business Type</option>
                            <option value="Sole Ownership">Sole Ownership</option>
                            <option value="Shared Ownership">Shared Ownership</option>
                        </select>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class=" form-outline" data-mdb-input-init>

                            <input type="date" class="form-control" id="validationCustomUsername" name="kStartDate"
                                aria-describedby="inputGroupPrepend" required placeholder="Eg: 25/Jan/2023" />
                            <label for="validationCustomUsername" class="form-label">Date</label>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your email.</div>
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control" id="matricID" name="kDurationOfRenting" />
                            <label for="username" class="form-label">Duration of Renting (Optional)</label>
                        </div>
                    </div>

                    <div class="col-2">

                    </div>

                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control" id="bankAccNumber" name="kBankAccNumber"
                                aria-describedby="inputGroupPrepend" required placeholder="Eg: 12546123151" />
                            <label for="bankAccNumber" class="form-label">Bank Account Number</label>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your Bank Account Number.</div>
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control" id="kBankName" name="kBankName" />
                            <label for="kBankName" class="form-label">Bank Name</label>
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">

                        <div class="form-outline" data-mdb-input-init>
                            <textarea class="form-control" id="kDescOfProduct" rows="4" name="kDescOfProduct" required></textarea>
                            <label class="form-label" for="kDescOfProduct">Description of Product</label>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter Description of Product.</div>
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4 text-start">
                        <label class="form-label text-start" for="customFile">Default file input example</label>
                        <input type="file" class="form-control" id="customFile" />
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4 text-start">
                        <label class="form-label text-start" for="customFile">Default file input example</label>
                        <input type="file" class="form-control" id="customFile" />
                    </div>
                    <div class="col-2">

                    </div>
                  
                    <div class="col-12 mt-4">
                        <button class="btn signupbtn btn-primary" id="submitbtn" type="submit"
                            data-mdb-ripple-init>Submit
                            form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
