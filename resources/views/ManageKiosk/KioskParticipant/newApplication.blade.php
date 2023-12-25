@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/ManageKiosk/newApplication.css') }}">

    <div class="container-fluid">
        <div class="card h-100 text-center">
            <div class="card-body">
                <h3 class="text-center main-title mt-4">New Kiosk Application</h3>
                <form action="{{ route('newApplicationSubmission') }}" class="row g-3 needs-validation" id="signUpForm" novalidate method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-2">
                        @error('kInventoryType')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-8 mt-4">
                        <select class="form-select" aria-label="Default select example" aria-describedby="inputGroupPrepend"
                            name="kInventoryType" required>
                            <option selected value="">Choose Inventory</option>
                            <option value="WaffleMachine">Waffle Machine</option>
                            <option value="CoffeeMachine">Coffee Machine</option>
                            <option value="OdenStove">Oden Stove</option>
                        </select>
                        <div class="invalid-feedback">Please Select Your Inventory.</div>
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
                            <option value="SoleOwnership">Sole Ownership</option>
                            <option value="SharedOwnership">Shared Ownership</option>
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
                                aria-describedby="inputGroupPrepend" required placeholder="Eg: 25/Jan/2023" />
                            <label for="validationCustomUsername" class="form-label">Choose Start Date</label>
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
                            <input type="text" class="form-control" id="matricID" name="kDurationOfRenting" />
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
                            <div class="valid-feedback">Looks good!</div>
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
                        <label class="form-label text-start" for="customFile">IC Copy (Front and Back)</label>
                        <input type="file" class="form-control" id="customFile" name="kICCopy" required />
                        <div class="invalid-feedback">Please enter upload your IC Copy.</div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4 text-start">
                        <label class="form-label text-start" for="customFile">SSM Certificate (Optional)</label>
                        <input type="file" class="form-control" id="customFile" name="kSSMCert" />
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4 text-start">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required />
                            <label class="form-check-label" for="flexCheckDefault">I have read the <a href="{{route('terms-and-condition')}}">terms and condition</a> of FKKMS</label>
                        </div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4 text-start">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required />
                            <label class="form-check-label" for="flexCheckDefault">I agree to sharing my details to FKKMS for my 
                                kiosk application</label>
                        </div>
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


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach((form) => {
                form.addEventListener('submit', (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
      
       
    </script>
@endsection
