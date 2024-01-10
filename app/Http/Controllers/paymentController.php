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
        $paymentrecords = paymentRecord::all();
        return view ('ManagePayment.KioskParticipant.viewPayment',compact('paymentrecords'));

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
        // $paymentID = Uuid::uuid4()->toString();
    
        // // Pass the paymentID to the view
        // return view('ManagePayment.KioskParticipant.addPayment', ['paymentID' => $paymentID]);

        return view('ManagePayment.KioskParticipant.addPayment');
    }
    
    public function storePayment(Request $request)
    {
        $paymentrecords = new paymentRecord;
        $paymentrecords->payDate = $request -> payDate;
        $paymentrecords->payDetail = $request -> payDetail;
        $paymentrecords->payProof = $request -> payProof;
        $paymentrecords->payInvoice = $request -> payInvoice;
        $paymentrecords->payStatus = $request -> payStatus;

        $paymentrecords->save();
        return redirect()->intended('viewPayment');

    }

    /**
     * Store a newly created resource in storage.
     */
    // public function storePayment(Request $request)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         'payDate'=> 'required',
    //         'payDetail' => 'required',
    //         'payProof' => 'required',
    //         'payInvoice'=> 'nullable',
    //         'payStatus'=> 'nullable',
    //     ]);

    //     //get foreign key from kiosk table
    //     $kioskID = auth()->kiosks->id;

    //    // Check if a file is uploaded
    //     if ($request->hasFile('payProof') && $payProof->isValid()) {
    //     // Handle the file upload
    //         $proofPath = $payProof->storeAs('payProof', $request->input('paymentID').'.'.$payProof->extension(), 'public');
    //     } else {
    //     // Handle the case where no valid file is uploaded
    //             }

    //     // Save the payment data to the database
    //     $paymentrecord = new paymentRecord([
    //         'kioskID' => $kioskID,
    //         'payDate' => $request->input('payDate'),
    //         'payDetail' => $validatedData['payDetail'],
    //         'payProof' => $proofPath,
    //         'payInvoice' => $request->input('payInvoice'),
    //         'payStatus' => $request->input('payStatus'),
    //     ]);

    //     $paymentrecord->save();

    //     // You can redirect to the payment details page or any other page after successful submission
    //     return redirect()->route('viewPayment')->with('success', 'Payment details successfully submitted!');
    // }
    

        // /**
    //  * Update the specified resource in storage.
    //  */
    public function updatePayment(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'paymentID' => 'required',
            'payDate'=> 'required',
            'payDetail' => 'required',
            'payProof' => 'required',
            'payInvoice'=> 'nullable',
            'payStatus'=> 'nullable',
        ]);

        //get foreign key from kiosk table
        $kioskID = auth()->kiosks->id;

        // Handle file uploads
        $payProof = $request->file('payProof');
        $proofPath = $payProof->storeAs('payProof', $request->input('paymentID').'.'.$payProof->extension(), 'public');

        // Save the payment data to the database
        $paymentrecords = new paymentrecords([
            // 'paymentID' => $request->input('paymentID'),
            'kioskID' => $kioskID,
            'payDate' => $request->input('payDate'),
            'payDetail' => $validatedData['payDetail'],
            'payProof' => $proofPath,
            'payInvoice' => $request->input('payInvoice'),
            'payStatus' => $request->input('payStatus'),
        ]);

        $paymentrecords->save();
        // Redirect to the payment details page or any other page after successful update
        return redirect()->route('viewPayment')->with('success', 'Payment details successfully updated!');
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
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
