<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\SalesRecord;

class SalesController extends Controller
{
    public function index()
    {
        $reports = SalesRecord::select('ReportID', 'year', 'month', 'totalPrice', 'created_at', 'updated_at')->get();
        return view('ManageReport.KioskParticipant.KPViewSales', compact('reports'));
    }

    public function create()
    {
        return view('ManageReport.KioskParticipant.addSales');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'year' => 'required',
            'month' => 'required',
            'week' => 'required',
            'monday' => 'required',
            'tuesday' => 'required',
            'wednesday' => 'required',
            'thursday' => 'required',
            'friday' => 'required',
            'saturday' => 'required',
            'sunday' => 'required',
            'totalPrice' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        SalesRecord::create($request->all());

        return redirect()->route('reports')->with('success', 'Sales record added successfully');
    }

        public function edit($ReportID)
    {
        try {
            // Find the sales record by ID
            $salesRecord = SalesRecord::findOrFail($ReportID);

            // Pass the record to the view
            return view('ManageReport.KioskParticipant.updateSales', compact('salesRecord'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            // Handle the case where the record is not found
            return redirect()->route('reports')->with('error', 'Sales record not found');
        }
    }

    public function update(Request $request, $ReportID)
    {
        $validator = Validator::make($request->all(), [
            'year' => 'required',
            'month' => 'required',
            'week' => 'required',
            'monday' => 'required',
            'tuesday' => 'required',
            'wednesday' => 'required',
            'thursday' => 'required',
            'friday' => 'required',
            'saturday' => 'required',
            'sunday' => 'required',
            // Add validation rules for other fields
            'totalPrice' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $salesRecord = SalesRecord::findOrFail($ReportID);
        $salesRecord->update($request->all());

        return redirect()->route('reports')->with('success', 'Sales record updated successfully');
    }

    public function destroy(Request $request, $ReportID)
    {
        // Add debugging statement
        \Log::info("Deleting SalesRecord with ID: $ReportID");
    
        SalesRecord::destroy($ReportID);
    
        // Add debugging statement
        \Log::info("SalesRecord deleted successfully");
    
        return redirect()->route('reports')->with('success', 'Sales record deleted successfully');
    }
    

    public function filter(Request $request)
    {
        $query = SalesRecord::query();

        if ($request->filled('year')) {
            $query->where('year', $request->input('year'));
        }

        if ($request->filled('month')) {
            $query->where('month', $request->input('month'));
        }

        $reports = $query->get();

        return view('ManageReport.KioskParticipant.KPViewSales', compact('reports'));
    }

    public function PadminView()
{
    $reports = SalesRecord::all(); // Fetch all reports (modify as needed)

    return view('ManageReport/PUPUKAdmin/PAdminViewSales', compact('reports'));
}

public function AdminView()
{
    $reports = SalesRecord::all(); // Fetch all reports (modify as needed)

    return view('ManageReport/Admin/AdminViewSales', compact('reports'));
}

public function filterPAdmin(Request $request)
    {
        $query = SalesRecord::query();

        if ($request->filled('year')) {
            $query->where('year', $request->input('year'));
        }

        if ($request->filled('month')) {
            $query->where('month', $request->input('month'));
        }

        $reports = $query->get();

        return view('ManageReport.PUPUKAdmin.PAdminViewSales', compact('reports'));
    }

    public function filterAdmin(Request $request)
    {
        $query = SalesRecord::query();

        if ($request->filled('year')) {
            $query->where('year', $request->input('year'));
        }

        if ($request->filled('month')) {
            $query->where('month', $request->input('month'));
        }

        $reports = $query->get();

        return view('ManageReport.Admin.AdminViewSales', compact('reports'));
    }

}
