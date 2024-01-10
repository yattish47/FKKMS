<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paymentRecord;
use Ramsey\Uuid\Uuid;


class paymentController extends Controller
{
       /**
     * Display the specified resource.
     */
    public function viewPayment()
    {
        // fetch data from database
        $paymentRecords = paymentRecord::all();
        return view ('ManagePayment.KioskParticipant.viewPayment',compact('paymentRecords'));

        // if (!$paymentRecord) {
        //     // Handle the case when the payment record is not found
        //     abort(404);
        // }
    
        // return view('ManagePayment.KioskParticipant.viewPayment', ['paymentrecords' => $paymentRecord]);
    } 
    
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function showPaymentForm()
    {
        // Assuming you're creating a new payment, you might not have a paymentID yet
        // If you need to generate a unique paymentID, you can use something like UUID
        $paymentID = Uuid::uuid4()->toString();
    
        // Pass the paymentID to the view
        return view('ManagePayment.KioskParticipant.addPayment', ['paymentID' => $paymentID]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function storePayment(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'paymentID' => 'required',
            'payDate'=> 'required|dateTime',
            'payDetail' => 'required',
            'payProof' => 'required',
            'payInvoice'=> null,
            'payStatus'=> null,
            // Add any additional validation rules as needed
        ]);

        //get foreign key from kiosk table
        $kioskID = auth()->kiosks->id;

        // Handle file uploads
        $payment_proof = $request->file('payment_proof');
        $proofPath = $payment_proof->storeAs('proofs', $request->input('paymentID').'.'.$payment_proof->extension(), 'public');

        // Save the payment data to the database
        $payment = new paymentRecord([
            'kioskID' => $kioskID,
            'paymentID' => $request->input('paymentID'),
            'kioskID'=> $request->input('paymentID'),
            'payDate' => $request->input('dateTime'),
            'payDetail' => $validatedData['payment_detail'],
            'payProof' => $proofPath,
            // Add any additional fields as needed
        ]);

        $payment->save();

        // You can redirect to the payment details page or any other page after successful submission
        return redirect()->route('viewPayment')->with('success', 'Payment details successfully submitted!');
    }
    

    // public function viewPayments(){
    //     $paymentRecord = viewPayments::all();
        
    //     return view('ManagePayment.KioskParticipant.viewPayment', ['paymentrecords' => $paymentRecord]);
    // }


    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
        
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
