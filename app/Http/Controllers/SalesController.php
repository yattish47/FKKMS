<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesRecord;

class SalesController extends Controller
{
    public function create()
    {
        return view('ManageReport.KioskParticipant.addSales');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'year' => 'required|integer',
            'month' => 'required|integer',
            'week' => 'required|integer',
            'monday' => 'required|string',
            'tuesday' => 'required|string',
            'wednesday' => 'required|string',
            'thursday' => 'required|string',
            'friday' => 'required|string',
            'saturday' => 'required|string',
            'sunday' => 'required|string',
        ]);

        // Create a new SalesRecord instance and fill it with the validated data
        $salesRecord = new SalesRecord([
            'year' => $request->input('year'),
            'month' => $request->input('month'),
            'week' => $request->input('week'),
            'monday' => $request->input('monday'),
            'tuesday' => $request->input('tuesday'),
            'wednesday' => $request->input('wednesday'),
            'thursday' => $request->input('thursday'),
            'friday' => $request->input('friday'),
            'saturday' => $request->input('saturday'),
            'sunday' => $request->input('sunday'),
        ]);

        // Save the sales record to the database
        $salesRecord->save();

        // Redirect to the sales create page with a success message
        return redirect()->route('ManageReport.KioskParticipant.KPViewSales')->with('success', 'Sales record added successfully');
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'year' => 'required|integer',
            'month' => 'required|integer',
            'week' => 'required|integer',
            'monday' => 'required|string',
            'tuesday' => 'required|string',
            'wednesday' => 'required|string',
            'thursday' => 'required|string',
            'friday' => 'required|string',
            'saturday' => 'required|string',
            'sunday' => 'required|string',
        ]);

        // Find the sales record by ID
        $salesRecord = SalesRecord::findOrFail($id);

        // Update the sales record with the validated data
        $salesRecord->update([
            'year' => $request->input('year'),
            'month' => $request->input('month'),
            'week' => $request->input('week'),
            'monday' => $request->input('monday'),
            'tuesday' => $request->input('tuesday'),
            'wednesday' => $request->input('wednesday'),
            'thursday' => $request->input('thursday'),
            'friday' => $request->input('friday'),
            'saturday' => $request->input('saturday'),
            'sunday' => $request->input('sunday'),
        ]);

        // Redirect back to the sales update page with a success message
        return redirect()->route('ManageReport.KioskParticipant.updateSales', ['id' => $salesRecord->id])->with('success', 'Sales record updated successfully');
    }

    public function destroy($id)
    {
        // Add logic for deleting sales records
        // You can retrieve the record using SalesRecord::find($id) and perform the deletion
        // Example: $record = SalesRecord::find($id); $record->delete();
        // Redirect or return a response
    }
}

