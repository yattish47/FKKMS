<!-- sales-form.blade.php -->

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
        width: calc(15% - 10px);
        /* Adjust the width as needed */
        margin-bottom: 20px;
        box-sizing: border-box;
    }

    .days-container {
        width: 70%;
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

    #salesForm {
        width: 100%;
        margin-bottom: 20px;
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

    #generateButton {
        width: 6%;
        /* Adjust the width as needed */
        box-sizing: border-box;
    }
    

</style>

<form id="salesForm" method="POST" action="{{ route('reports.store') }}">
    @csrf

    <div class="container">
        <div class="form-group">
            <label for="year">Year:</label>
            <select name="year" required>
                @for ($year = date('Y'); $year >= date('Y') - 10; $year--)
                <option value="{{ $year }}">{{ $year }}</option>
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="month">Month:</label>
            <select name="month" required>
                @for ($month = 1; $month <= 12; $month++) <option value="{{ $month }}">{{ date('F', mktime(0, 0, 0, $month,
                    1)) }}</option>
                    @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="week">Week:</label>
            <select name="week" required>
                @for ($week = 1; $week <= 5; $week++) <option value="{{ $week }}">Week {{ $week }}</option>
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
            <input type="text" name="{{ strtolower($day) }}" class="day-input" required>
        </div>
        @endforeach
    </div>

    <!-- Include hidden fields for year, month, and week -->
    <input type="hidden" name="year" value="">
    <input type="hidden" name="month" value="">
    <input type="hidden" name="week" value="">

    <!-- Rest of the form -->

    <div class="total-container">
        <label for="totalPrice">Total Sales:</label>
        <input type="text" name="totalPrice" id="totalPrice" readonly>
    </div>

    <div class="total-container">
        <button type="submit" id="generateButton">Generate</button>
    </div>

</form>

<script>
    document.getElementById('salesForm').addEventListener('submit', function() {
        // Set the 'year', 'month', and 'week' values in the form submission
        document.getElementsByName('year')[1].value = document.getElementsByName('year')[0].value;
        document.getElementsByName('month')[1].value = document.getElementsByName('month')[0].value;
        document.getElementsByName('week')[1].value = document.getElementsByName('week')[0].value;
    });

    document.getElementById('salesForm').addEventListener('input', updateTotalPrice);

    function updateTotalPrice() {
        var days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
        var total = 0;

        days.forEach(function (day) {
            var inputValue = parseFloat(document.getElementsByName(day)[0].value) || 0;
            total += inputValue;
        });

        document.getElementById('totalPrice').value = total.toFixed(2);
    }
</script>



@endsection