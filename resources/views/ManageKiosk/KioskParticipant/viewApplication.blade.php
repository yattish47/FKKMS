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
                            @if($kioskApplication->kInventoryType == "Waffle Machine")
                            <option selected value="Waffle Machine">Waffle Machine</option>
                            @elseif($kioskApplication->kInventoryType == "Coffee Machine")
                            <option selected value="Coffee Machine">Coffee Machine</option>
                            @elseif($kioskApplication->kInventoryType == "Oden Stove")
                            <option selected value="Oden Stove">Oden Stove</option>
                            @endif
                          
                        </select>
                        <div class="invalid-feedback">Please Select Your Inventory.</div>
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" class="form-control" id="validationCustom02" name="kBusinessName" disabled value="{{$kioskApplication->kBusinessName}}"/>
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
                            @if($kioskApplication->kBusinessType == "Sole Ownership")
                            <option selected value="Sole Ownership">Sole Ownership</option>
                            @elseif($kioskApplication->kBusinessType == "Shared Ownership")
                            <option selected value="Shared Ownership">Shared Ownership</option>
                            @endif
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
                                aria-describedby="inputGroupPrepend" required placeholder="Eg: 25/Jan/2023" disabled value="{{$kioskApplication->kStartDate}}" />
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
                            <input type="text" class="form-control" id="matricID" name="kDurationOfRenting" disabled value="{{$kioskApplication->kDurationOfRenting}}" />
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
                                aria-describedby="inputGroupPrepend" required placeholder="Eg: 12546123151" disabled  value="{{$kioskApplication->kBankAccNumber}}"/>
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
                            <input type="text" class="form-control" id="kBankName" name="kBankName" disabled value="{{$kioskApplication->kBankName}}" />
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
                            <textarea class="form-control" id="kDescOfProduct" rows="4" name="kDescOfProduct" required disabled >{{$kioskApplication->kDescOfProduct}}</textarea>
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
                    
                        <input type="file" class="form-control" id="customFile" name="kICCopy" required disabled readonly value="{{ basename($kioskApplication->kICCopy) }}"/>
                    
                        @if($kioskApplication->kICCopy)
                        <a href="{{ asset('storage/' . $kioskApplication->kICCopy) }}" target="_blank">View IC Copy</a>

                        @else
                            <p>No IC Copy uploaded.</p>
                        @endif
                    
                        <div class="invalid-feedback">Please upload your IC Copy.</div>
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
                        <button class="btn signupbtn btn-primary" id="submitbtn" type="submit" disabled
                            data-mdb-ripple-init>Submit
                            form</button>
                    </div>
                </form>
                <div class="d-flex mt-4 justify-content-between">
                    <div class="col-4 mt-4  ms-3 text-start">
                        <div class="form-check form-switch form-switch-lg">
                            <label class="form-check-label paragraphText ms-4" for="flexSwitchCheckDefault">Edit Mode</label>
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick="EditFunction()" />
                          </div>
                          
                    </div>
                    <div class="col-4 mt-4 ">
                        <p class="paragraphText info">Status: Pending</p>
                    </div>
                    <div class="col-4 mt-4">
                        <p class="paragraphText info">Remark: None</p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>

    <script>
        function EditFunction() {
            var checkbox = document.getElementById('flexSwitchCheckDefault');
            var formFields = document.querySelectorAll('#signUpForm input, #signUpForm select, #signUpForm textarea, #signUpForm button');
            var info = document.querySelectorAll('.info');
            formFields.forEach(function (field) {
                field.disabled = !checkbox.checked;
                
            });
            info.forEach(function (field) {
                field.hidden = checkbox.checked;
                
            });
        }
    </script>
    @endsection
