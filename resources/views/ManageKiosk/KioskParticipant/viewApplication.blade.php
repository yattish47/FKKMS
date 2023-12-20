@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/ManageKiosk/viewApplication.css') }}">

    <div class="container-fluid">
        <div class="card h-100 text-center">
            <div class="card-body">
                <h3 class="text-center main-title mt-4"> Kiosk Application</h3>
                <form class="row g-3 needs-validation" id="signUpForm" novalidate>

                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <select class="form-select" aria-label="Default select example" aria-describedby="inputGroupPrepend"
                            name="kInventoryType" required disabled>
                            <option selected value="">Choose Inventory</option>
                            <option value="Waffle Machine">Waffle Machine</option>
                            <option value="Coffee Machine">Coffee Machine</option>
                            <option value="Oden Stove">Oden Stove</option>
                        </select>
                        <div class="invalid-feedback">Please Select Your Inventory.</div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control" id="validationCustom02" name="kBusinessName" disabled/>
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
                            name="kBusinessType" required disabled>
                            <option selected value="">Business Type</option>
                            <option value="Sole Ownership">Sole Ownership</option>
                            <option value="Shared Ownership">Shared Ownership</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please select your business type.</div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class=" form-outline" data-mdb-input-init>

                            <input type="date" class="form-control" id="validationCustomUsername" name="kStartDate"
                                aria-describedby="inputGroupPrepend" required placeholder="Eg: 25/Jan/2023" disabled />
                            <label for="validationCustomUsername" class="form-label">Date</label>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your start Date.</div>
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control" id="matricID" name="kDurationOfRenting" disabled />
                            <label for="username" class="form-label">Duration of Renting (Optional)</label>
                            <div class="valid-feedback">Looks good!</div>
                        </div>

                    </div>

                    <div class="col-2">

                    </div>

                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control" id="bankAccNumber" name="kBankAccNumber"
                                aria-describedby="inputGroupPrepend" required placeholder="Eg: 12546123151" disabled />
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
                            <input type="text" class="form-control" id="kBankName" name="kBankName" disabled />
                            <label for="kBankName" class="form-label">Bank Name</label>
                            <div class="valid-feedback">Looks good!</div>
                        </div>

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">

                        <div class="form-outline" data-mdb-input-init>
                            <textarea class="form-control" id="kDescOfProduct" rows="4" name="kDescOfProduct" required disabled></textarea>
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
                        <label class="form-label text-start" for="customFile">IC Copy (Front and Back)</label>
                        <input type="file" class="form-control" id="customFile" name="kICCopy" required  disabled/>
                        <div class="invalid-feedback">Please enter upload your IC Copy.</div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4 text-start">
                        <label class="form-label text-start" for="customFile">SSM Certificate (Optional)</label>
                        <input type="file" class="form-control" id="customFile" name="kSSMCert"  disabled/>
                    </div>
                    <div class="col-2">

                    </div>
                   

                    <div class="col-12 mt-4">
                        <button class="btn signupbtn btn-primary" id="submitbtn" type="submit" visible="true"
                            data-mdb-ripple-init>Submit
                            form</button>
                    </div>
                </form>
                <div class="col-4 mt-4  ms-3 text-start">
                    <div class="form-check form-switch form-switch-lg">
                        <label class="form-check-label ms-4" for="flexSwitchCheckDefault">Edit Mode</label>
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      </div>
                      
                </div>
                <div class="col-8 mt-4 ">
                    
                </div>
                <div class="col-2">

                </div>
                
            </div>
        </div>
    </div>
    @endsection
