<!-- updateSales.blade.php -->

@extends('layouts.master')

@section('content')
<style>
    /* Add custom styles for layout */
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px; /* Adjust the margin-top value as needed */
    }

    .form-group {
        width: 30%; /* Adjust the width as needed */
        margin-bottom: 20px;
        box-sizing: border-box;
    }

    .form-group:not(:last-child) {
        margin-right: 20px; /* Adjust the space between fields */
    }

    .days-container {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        box-sizing: border-box;
        text-align: center;
        /* Center the content horizontally */
    }

    .day-group {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .day-label {
        width: 45%;
        box-sizing: border-box;
    }

    .day-input {
        width: 45%;
        box-sizing: border-box;
    }

    .total-container {
        text-align: center;
        margin-top: 20px;
        /* Adjust the margin as needed */
    }

    #totalPrice {
        width: 10%;
        /* Adjust the width as needed */
        box-sizing: border-box;
        margin-bottom: 10px;
    }
</style>

<div class="container">
    <form method="POST" action="{{ route('reports.update', ['ReportID' => $salesRecord->ReportID]) }}">
        @csrf
        @method('PUT') <!-- Use the PUT method for update -->

        <!-- Display existing data in the form -->
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" name="year" value="{{ $salesRecord->year }}" required>
        </div>

        <div class="form-group">
            <label for="month">Month:</label>
            <input type="text" name="month" value="{{ $salesRecord->month }}" required>
        </div>

        <div class="form-group">
            <label for="week">Week:</label>
            <select name="week" required>
                @for ($week = 1; $week <= 5; $week++)
                    <option value="{{ $week }}">Week {{ $week }}</option>
                @endfor
            </select>
        </div>
    </div>

    <div class="days-container">
        @php
            $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        @endphp

        @foreach($days as $day)
            <div class="day-group">
                <label for="{{ strtolower($day) }}" class="day-label">{{ $day }}:</label>
                <input type="text" name="{{ strtolower($day) }}" class="day-input" value="{{ $salesRecord->{strtolower($day)} }}" oninput="calculateTotal()" required>
            </div>
        @endforeach
    </div>

    <!-- Include hidden fields for year, month, and week -->
    <input type="hidden" name="year" value="{{ $salesRecord->year }}">
    <input type="hidden" name="month" value="{{ $salesRecord->month }}">
    <input type="hidden" name="week" value="{{ $salesRecord->week }}">

    <!-- Add a hidden field for the total -->
    <input type="hidden" id="totalHidden" name="totalPrice" value="{{ $salesRecord->totalPrice }}">

    <div class="total-container">
        <label for="totalPrice">Total Sales:</label>
        <input type="text" id="totalPrice" readonly>
    </div>

    <!-- Include a script to calculate the total dynamically -->
    <script>
        function calculateTotal() {
            var days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
            var total = 0;

            days.forEach(function(day) {
                var value = parseFloat(document.getElementsByName(day)[0].value) || 0;
                total += value;
            });

            // Update the total field
            document.getElementById('totalPrice').value = total;
            // Update the hidden field for the form submission
            document.getElementById('totalHidden').value = total;
        }
    </script>

    <div class="total-container">
        <button type="submit">UPDATE</button>
    </div>
    </form>
</div>

@endsection
