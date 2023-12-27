@extends('layouts.pupukAdminMaster')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/ManageKiosk/PUPUK/applicationApproval.css') }}">


    <div class="container-fluid p-0">
        <div class="main-section">

            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center">View Application</h5>


                    <p class="card-title fw-bold text-start">Participant details</p>

                    <div class="row g-3">
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="text" class="form-control" id="validationCustom01" name="ic_number" required
                                    value="{{ $kioskParticipant->kpICNumber }}" disabled />
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
                                <input type="text" class="form-control" id="validationCustom02" name="name" required
                                    value="{{ $kioskParticipant->kpName }}" disabled />
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
                            <div class="input-group form-outline" data-mdb-input-init>
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername" name="email"
                                    aria-describedby="inputGroupPrepend" required value="{{ $kioskParticipant->kpEmail }}"
                                    disabled />
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
                                aria-describedby="inputGroupPrepend" name="participant_type" required disabled>
                                <option selected value="">{{ $kioskParticipant->kpType }}</option>

                            </select>
                        </div>

                        <div class="col-2">

                        </div>

                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <div class="input-group form-outline" data-mdb-input-init>
                                <span class="input-group-text" id="inputGroupPrepend"><i
                                        class="bi bi-telephone-fill"></i></span>
                                <input type="text" class="form-control" id="phoneNumber" name="phone_number"
                                    aria-describedby="inputGroupPrepend" required
                                    value="{{ $kioskParticipant->kpPhoneNumber }}" disabled />
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
                                <input type="text" class="form-control" id="nationality" name="nationality" required
                                    value="{{ $kioskParticipant->kpNationality }}" disabled />
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
                                <input type="number" class="form-control" id="age" min="0" step="1"
                                    name="age" required style="appearance: none; -moz-appearance: textfield;"
                                    value="{{ $kioskParticipant->kpAge }}" disabled />
                                <label for="age" class="form-label">Age</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter your age.</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>

                        <p class="card-title fw-bold text-start">Application Details</p>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <select class="form-select" aria-label="Default select example"
                                aria-describedby="inputGroupPrepend" name="kInventoryType" required disabled>
                                @if ($kioskApplication->kInventoryType == 'WaffleMachine')
                                    <option selected value="WaffleMachine">Waffle Machine</option>
                                    <option value="CoffeeMachine">Coffee Machine</option>
                                    <option value="OdenStove">Oden Stove</option>
                                @elseif($kioskApplication->kInventoryType == 'CoffeeMachine')
                                    <option value="WaffleMachine">Waffle Machine</option>
                                    <option selected value="CoffeeMachine">Coffee Machine</option>
                                    <option value="OdenStove">Oden Stove</option>
                                @elseif($kioskApplication->kInventoryType == 'OdenStove')
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
                                <input type="text" class="form-control" id="validationCustom02" name="kBusinessName"
                                    value="{{ $kioskApplication->kBusinessName }}" disabled />
                                <label for="validationCustom02" class="form-label">Business Name (Optional)</label>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">
                            <select class="form-select" aria-label="Default select example"
                                aria-describedby="inputGroupPrepend" name="kBusinessType" disabled>
                                @if ($kioskApplication->kBusinessType == 'SoleOwnership')
                                    <option selected value="SoleOwnership">Sole Ownership</option>
                                    <option value="SharedOwnership">Shared Ownership</option>
                                @elseif($kioskApplication->kBusinessType == 'SharedOwnership')
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

                                <input type="date" class="form-control" id="validationCustomUsername"
                                    name="kStartDate" aria-describedby="inputGroupPrepend" required
                                    value="{{ $kioskApplication->kStartDate }}" disabled />
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
                                <input type="text" class="form-control" id="matricID" name="kDurationOfRenting"
                                    value="{{ $kioskApplication->kDurationOfRenting }}" disabled />
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
                                    aria-describedby="inputGroupPrepend" required
                                    value="{{ $kioskApplication->kBankAccNumber }}" disabled />
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
                                <input type="text" class="form-control" id="kBankName" name="kBankName"
                                    value="{{ $kioskApplication->kBankName }}" disabled />
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
                                <textarea class="form-control" id="kDescOfProduct" rows="4" name="kDescOfProduct" required disabled>{{ $kioskApplication->kDescOfProduct }}</textarea>
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
                            @if ($kioskApplication->kICCopy)
                                <a href="{{ asset('storage/' . $kioskApplication->kICCopy) }}" target="_blank">View IC
                                    Copy</a>
                            @else
                                <p>No IC Copy uploaded.</p>
                            @endif


                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4 text-start">
                            <label class="form-label text-start" for="customFile">SSM Certificate (Optional)</label>
                            @if ($kioskApplication->kSSMCert)
                                <a href="{{ asset('storage/' . $kioskApplication->kSSMCert) }}" target="_blank">View SSM
                                    Cert</a>
                            @else
                                <p>No SSM Cert uploaded.</p>
                            @endif
                        </div>
                        <div class="col-2">

                        </div>
                    </div>
                    <p class="card-title fw-bold text-start">Decision</p>

                    <div class="row g-3 needs-validation">
                        <div class="col-2">

                        </div>

                        <div class="col-8 mt-4">
                            <select class="form-select" aria-label="Default select example"
                                aria-describedby="inputGroupPrepend" name="kApplicationStatus" disabled required>
                                @if ($kioskApplication->kApplicationStatus == 'Pending')
                                    <option selected value="Pending">Pending</option>
                                    <option value="Approve">Approve</option>
                                    <option value="Reject">Reject</option>
                                @elseif($kioskApplication->kApplicationStatus == 'Approved')
                                    <option value="Pending">Pending</option>
                                    <option selected value="Approve">Approve</option>
                                    <option value="Reject">Reject</option>
                                @elseif($kioskApplication->kApplicationStatus == 'Rejected')
                                    <option value="Pending">Pending</option>
                                    <option value="Approve">Approve</option>
                                    <option selected value="Reject">Reject</option>
                                @endif
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please select approval action.</div>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-8 mt-4">

                            <div class="form-outline" data-mdb-input-init>
                                <textarea class="form-control" id="kApprovalRemark" rows="4" name="kApprovalRemark" required disabled>{{$kioskApplication->kApprovalRemark}}</textarea>
                                <label class="form-label" for="kApprovalRemark">Remark/Comment</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please enter remark or comment.</div>
                            </div>
                        </div>
                        <div class="col-2">

                        </div>

                        

                    </div>


                </div>
            </div>
        </div>



    </div>



    <script>
        document.getElementById('age').addEventListener('wheel', function(e) {
            e.preventDefault();
        });
        document.getElementById('age').addEventListener('input', function(e) {
            var input = e.target,
                value = input.value;

            if (value < 0 || Math.floor(value) != value) {
                input.value = 0;
            }
        });
        document.getElementById('age').addEventListener('keydown', function(e) {
            if (e.key === '-' || e.key === '.') {
                e.preventDefault();
            }
        });
    </script>
@endsection
