@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="selectYear">Year:</label>
                <select class="form-control" id="selectYear">
                    @for ($year = date('Y'); $year >= date('Y') - 10; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="selectMonth">Month:</label>
                <select class="form-control" id="selectMonth">
                    @for ($month = 1; $month <= 12; $month++)
                        <option value="{{ $month }}">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="selectWeek">Week:</label>
                <select class="form-control" id="selectWeek">
                    @for ($week = 1; $week <= 5; $week++)
                        <option value="{{ $week }}">Week {{ $week }}</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="col-md-12" id="salesFormContainer" style="display:none;">
            <form action="{{ route('ManageReport.KioskParticipant.addSales') }}" method="post">
                @csrf
                <label for="monday">Monday:</label>
                <input type="text" name="monday" class="form-control" required>
                <label for="monday">Tuesday:</label>
                <input type="text" name="tuesday" class="form-control" required>
                <label for="monday">Wednesday:</label>
                <input type="text" name="wednesday" class="form-control" required>
                <label for="monday">Thursday:</label>
                <input type="text" name="thursday" class="form-control" required>
                <label for="monday">Friday:</label>
                <input type="text" name="friday" class="form-control" required>
                <label for="monday">Saturday:</label>
                <input type="text" name="saturday" class="form-control" required>
                <label for="monday">Sunday:</label>
                <input type="text" name="sunday" class="form-control" required>

                <button type="submit" class="btn btn-primary">GENERATE</button>
            </form>
            <div id="totalSalesContainer" style="display:none;">
                <hr>
                <h4>Total Sales:</h4>
                <p id="totalSalesValue">RM 0.00</p>
                <button class="btn btn-success" id="updateButton">Update</button>
                <button class="btn btn-danger" id="deleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('selectWeek').addEventListener('change', function () {
        var selectedWeek = this.value;
        if (selectedWeek) {
            document.getElementById('salesFormContainer').style.display = 'block';
            document.getElementById('totalSalesContainer').style.display = 'none';

            // Auto-generate 'RM' values for each day of the week
            var days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
            days.forEach(function (day) {
                var inputField = document.getElementsByName(day)[0];
                inputField.value = 'RM'; // You can concatenate with additional values if needed
            });
        } else {
            document.getElementById('salesFormContainer').style.display = 'none';
            document.getElementById('totalSalesContainer').style.display = 'none';

        }
    });
    document.getElementById('salesForm').addEventListener('submit', function (event) {
        event.preventDefault();

        // Calculate total sales
        var totalSales = 0;
        var days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
        days.forEach(function (day) {
            var inputField = document.getElementsByName(day)[0];
            var salesValue = parseFloat(inputField.value) || 0;
            totalSales += salesValue;
        });

        // Display total sales
        var totalSalesValueElement = document.getElementById('totalSalesValue');
        totalSalesValueElement.textContent = 'RM ' + totalSales.toFixed(2);

        // Show the total sales container
        document.getElementById('totalSalesContainer').style.display = 'block';
    });

    document.getElementById('updateButton').addEventListener('click', function () {
        // Add logic for updating sales records
        alert('Update button clicked');
    });

    document.getElementById('deleteButton').addEventListener('click', function () {
        // Add logic for deleting sales records
        alert('Delete button clicked');
    });
</script>



@endsection


