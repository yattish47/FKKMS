@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/ManageKiosk/viewApplication.css') }}">

    <div class="container-fluid">
        <div class="card h-100 text-center">
            <div class="card-body">
                <h3 class="text-center main-title mt-4"> Kiosk Application</h3>
                <form action="{{ route('editApplication', ['id' => $kioskApplication->kApplicationID]) }}" class="row g-3 needs-validation" id="signUpForm" method="POST" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-4">
                        <select class="form-select" aria-label="Default select example" aria-describedby="inputGroupPrepend"
                            name="kInventoryType" required disabled>
                            @if($kioskApplication->kInventoryType == "WaffleMachine")
                            <option selected value="WaffleMachine">Waffle Machine</option>
                            <option value="CoffeeMachine">Coffee Machine</option>
                            <option value="OdenStove">Oden Stove</option>
                            @elseif($kioskApplication->kInventoryType == "CoffeeMachine")
                            <option value="WaffleMachine">Waffle Machine</option>
                            <option selected value="CoffeeMachine">Coffee Machine</option>
                            <option value="OdenStove">Oden Stove</option>
                            @elseif($kioskApplication->kInventoryType == "OdenStove")
                            <option value="WaffleMachine">Waffle Machine</option>
                            <option value="CoffeeMachine">Coffee Machine</option>
                            <option selected value="OdenStove">Oden Stove</option>
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
                            @if($kioskApplication->kBusinessType == "SoleOwnership")
                            <option selected value="SoleOwnership">Sole Ownership</option>
                            <option value="SharedOwnership">Shared Ownership</option>
                            @elseif($kioskApplication->kBusinessType == "SharedOwnership")
                            <option value="SoleOwnership">Sole Ownership</option>
                            <option selected value="SharedOwnership">Shared Ownership</option>
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
                    
                        <input type="file" class="form-control" id="customFile" name="kICCopy" required disabled/>
                    
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
                        @if($kioskApplication->kSSMCert)
                        <a href="{{ asset('storage/' . $kioskApplication->kSSMCert) }}" target="_blank">View SSM Cert</a>

                        @else
                            <p>No SSM Cert uploaded.</p>
                        @endif
                    
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
                            <label class="form-check-label paragraphText ms-4" for="flexSwitchCheckDefault" data-mdb-tooltip-init title="Sorry, You Can't Edit This Because Status is Either Approved or Rejected">Edit Mode</label>
                            @if($kioskApplication->kApplicationStatus == "Pending")
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick="EditFunction()" />
                            @else
                            <input class="form-check-input" data-mdb-tooltip-init title="Sorry, You Can't Edit This Because Status is Either Approved or Rejected"  type="checkbox" role="switch" id="flexSwitchCheckDefault" disabled />
                            @endif
                          </div>
                          
                    </div>
                    <div class="col-4 mt-4 ">
                        <p class="paragraphText info">Status: {{$kioskApplication->kApplicationStatus}}</p>
                    </div>
                    <div class="col-4 mt-4">
                        
                        @if($kioskApplication->kApprovalRemark == NULL) 
                        <p class="paragraphText info">Remark: None</p>
                        @else
                        <p class="paragraphText info">Remark: {{$kioskApplication->kApprovalRemark}}</p>
                        @endif
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
