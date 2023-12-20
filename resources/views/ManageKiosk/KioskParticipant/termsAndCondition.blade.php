@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/ManageKiosk/newApplication.css') }}">

    <div class="container-fluid">
        <div class="card h-100 ">
            <div class="card-body">
                <h3 class="text-center main-title mt-4 text-center">Terms and Condition</h3>
                <p class="lead mt-4">
                    By submitting your application through the kiosk platform, you agree to be bound by these terms and
                    conditions. If you do not agree to these terms, please do not submit your application.
                </p>

                <div class="mt-4">
                    <h5>2. Application Submission</h5>
                    <p class="mb-1">2.1 You are solely responsible for the accuracy and completeness of the information
                        provided in your application.</p>
                    <p class="mb-1">2.2 We reserve the right to reject or remove any application for any reason, without
                        notice.</p>
                </div>

                <div class="mt-4">
                    <h5>3. Intellectual Property</h5>
                    <p class="mb-1">3.1 You retain ownership of the intellectual property rights to your application.</p>
                    <p class="mb-1">3.2 By submitting your application, you grant us a non-exclusive, royalty-free,
                        worldwide license to use, reproduce, and distribute your application for the purpose of evaluation
                        and promotion.</p>
                </div>

                <div class="mt-4">
                    <h5>4. Privacy</h5>
                    <p class="mb-1">4.1 We will collect and process personal information in accordance with our Privacy
                        Policy.</p>
                    <p class="mb-1">4.2 You consent to the use of your personal information for the purpose of evaluating
                        and processing your application.</p>
                </div>
                <div class="mt-4">
                    <h5> 5. Confidentiality</h5>
                    <p class="mb-1">5.1 We will treat your application as confidential.</p>
                    <p class="mb-1">5.2 You agree not to disclose any confidential information related to your application
                        without our prior written consent.</p>
                </div>






            </div>
        </div>
    </div>
    @endsection
