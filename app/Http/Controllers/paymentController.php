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
            'payDate'=> 'required',
            'payDetail' => 'required',
            'payProof' => 'required',
            'payInvoice'=> 'required',
            'payStatus'=> 'required',
        ]);

        //get foreign key from kiosk table
        $kioskID = auth()->kiosks->id;

        // Handle file uploads
        $payProof = $request->file('payProof');
        $proofPath = $payProof->storeAs('proofs', $request->input('paymentID').'.'.$payProof->extension(), 'public');

        // Save the payment data to the database
        $payment = new paymentRecord([
            'paymentID' => $request->input('paymentID'),
            'kioskID' => $kioskID,
            'payDate' => $request->input('payDate'),
            'payDetail' => $validatedData['payDetail'],
            'payProof' => $proofPath
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
