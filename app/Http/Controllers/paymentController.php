<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paymentRecord;
use Ramsey\Uuid\Uuid;
use Auth;


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
     * Show the form for creating a new resource.
     */
    public function showPaymentForm()
    {
        // $paymentID = Uuid::uuid4()->toString();
    
        // // Pass the paymentID to the view
        // return view('ManagePayment.KioskParticipant.addPayment', ['paymentID' => $paymentID]);

        return view('ManagePayment.KioskParticipant.addPayment');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storePayment(Request $request)
    {
        try {
            // Validate the form data
            $request->validate([
                'payDate' => 'required',
                'payDetail' => 'required',
                'payProof' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed image file types and maximum size
                'payInvoice' => 'nullable',
                'payStatus' => 'nullable',
            ]);
    
            //get foreign key from kiosk table
            $kioskID = Auth::user()->kiosk->id;
    
            // Create a new paymentRecord instance
            $paymentrecords = new paymentRecord;
            $paymentrecords->kioskID = $kioskID; 
            $paymentrecords->payDate = $request->payDate;
            $paymentrecords->payDetail = $request->payDetail;
            $paymentrecords->payInvoice = $request->payInvoice;
            $paymentrecords->payStatus = $request->payStatus;
    
            // Handle file upload
            if ($request->hasFile('payProof')) {
                $payProof = $request->file('payProof');
                $proofPath = $payProof->store('payProof', 'public');
                $paymentrecords->payProof = $proofPath;
            }
    
            // Save the payment record to the database
            $paymentrecords->save();
    
            // Redirect to the desired route
            return redirect()->intended('viewPayment')->with('success', 'Payment details successfully submitted!');
        } catch (\Exception $e) {
            // Log the exception
            \Log::error($e->getMessage());
    
            // Handle the exception (e.g., show an error message or redirect to an error page)
            return redirect()->back()->with('error', 'An error occurred while saving the payment details. Please try again.');
        }
    }
    
    

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
    
    public function deletePayment(Request $request)
    {
        $paymentID = $request->input('paymentID');
    
        // Find the payment record by ID
        $paymentRecord = paymentRecord::find($paymentID);
    
        if (!$paymentRecord) {
            // If the record is not found, you may handle the error here
            return response()->json(['success' => false, 'message' => 'Payment record not found']);
        }
    
        // Perform the delete operation
        try {
            $paymentRecord->delete();
            return response()->json(['success' => true, 'message' => 'Payment record deleted successfully']);
        } catch (\Exception $e) {
            // Handle the exception if the delete operation fails
            return response()->json(['success' => false, 'message' => 'Failed to delete payment record', 'error' => $e->getMessage()]);
        }
    }
    
    
}
 // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
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
    // public function storePayment(Request $request)
    // {
    //     $paymentrecords = new paymentRecord;
    //     $paymentrecords->payDate = $request -> payDate;
    //     $paymentrecords->payDetail = $request -> payDetail;
    //     $paymentrecords->payProof = $request -> payProof;
    //     $paymentrecords->payInvoice = $request -> payInvoice;
    //     $paymentrecords->payStatus = $request -> payStatus;

    //     $paymentrecords->save();
    //     return redirect()->intended('viewPayment');

    // }


    ///////////////////
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




   