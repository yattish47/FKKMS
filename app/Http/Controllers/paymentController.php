<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paymentRecord;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showPaymentForm()
    {
        return view('ManagePayment.KioskParticipant.addPayment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePayment(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'datetime' => 'required|date',
            'payment_detail' => 'required|string',
            'receipt' => 'required|image',
            'payment_proof' => 'required|mimes:pdf,png,jpg',
            // Add any additional validation rules as needed
        ]);

        // Save the payment data to the database
        $payment = new Payment($validatedData);
        // Perform any additional operations before saving if needed

        $payment->save();

        // You can redirect to the payment details page or any other page after successful submission
        return redirect()->route('viewPayment')->with('success', 'Payment details successfully submitted!');
    }

    /**
     * Display the specified resource.
     */
    public function viewPayment($paymentID)
    {
        $paymentRecord = paymentRecord::where('paymentID', $paymentID)->first();
        return view('ManagePayment.KioskParticipant.viewPayment', ['paymentRecord' => $paymentRecord]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
