<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kiosk_applications;
use App\Models\kiosk_participant;
use App\Models\kiosks;
use Illuminate\Support\Facades\Log;

class KioskController extends Controller
{
    public function newApplication(Request $request){
        
         // Validate the incoming request data
          $validatedData = $request->all();
       
      
        
      // Handle file uploads
      $kICCopyPath = $request->file('kICCopy')->store('kICCopy', 'public');
      $kSSMCertPath = $request->file('kSSMCert')->store('kSSMCert', 'public');

      // Create a new instance of the model and fill it with the validated data
      $kioskApplication = new kiosk_applications($validatedData);
      $kioskApplication->kICCopy = $kICCopyPath;
      $kioskApplication->kSSMCert = $kSSMCertPath;

        // Set additional attributes as needed
        $kioskApplication->kApplicationStatus = 'Pending'; // Set default status
        $kioskApplication->kApprovalRemark = null; // Set default approval remark
        $kioskApplication->kApplicationID = 'K' . mt_rand(1000000, 9999999); // Generate application ID
        $kioskApplication->kpICNumber = session('kioskparticipant');
        $kioskApplication->kStartDate = date('Y-m-d', strtotime($request->input('kStartDate'))); // Convert date to MySQL format
        $kioskApplication->kDurationOfRenting = $request->input('kDurationOfRenting') ?? null; // Set null if empty
        $kioskApplication->kBusinessName = $request->input('kBusinessName') ?? null; // Set null if empty
        $kioskApplication->kBusinessType = $request->input('kBusinessType'); // Set null if empty'
        $kioskApplication->kDescOfProduct = $request->input('kDescOfProduct'); // Set null if empty
        $kioskApplication->kBankAccNumber = $request->input('kBankAccNumber') ?? null; // Set null if empty
        $kioskApplication->kBankName = $request->input('kBankName') ?? null; // Set null if empty
        $kioskApplication->kInventoryType = $request->input('kInventoryType') ?? null; // Set null if empty
        // Save the model to the database
        try {
            $kioskApplication->save();
        } catch (\Exception $e) {
            Log::error('Error saving kiosk application: ' . $e->getMessage());
        }
       
        // Optionally, you can redirect to a success page or return a response
        return redirect()->route('dashboard');
    }

    public function viewListOfApplications(){
        $icNumber = session('kioskparticipant');
        // $kioskApplications = kiosk_applications::with('participant')
        // ->where('kpICNumber', $icNumber)
        // ->get();
        $kioskApplications = kiosk_applications::join('kiosk_participants', 'kiosk_applications.kpICNumber', '=', 'kiosk_participants.kpICNumber')
        ->where('kiosk_applications.kpICNumber', $icNumber)
        ->get();
        
        return view('ManageKiosk.KioskParticipant.listOfApplications', ['kioskApplications' => $kioskApplications]);
    }

    public function viewApplication($id){
        $kioskApplication = kiosk_applications::where('kApplicationID', $id)->first();
        return view('ManageKiosk.KioskParticipant.viewApplication', ['kioskApplication' => $kioskApplication]);
    }


    public function editApplication(Request $request, $id){
       

        if ($request->hasFile('kICCopy') || $request->hasfile('kSSMCert')) {
            $kICCopyPath = $request->file('kICCopy')->store('kICCopy', 'public');
            $kSSMCertPath = $request->file('kSSMCert')->store('kSSMCert', 'public');
         kiosk_applications::where('kApplicationID', $id)->update([
             
            
            'kInventoryType' => $request->input('kInventoryType'),
            'kBusinessName' => $request->input('kBusinessName'),
            'kBusinessType'=> $request->input('kBusinessType'),
            'kStartDate' => date('Y-m-d', strtotime($request->input('kStartDate'))),
            'kDurationOfRenting' => $request->input('kDurationOfRenting'),
            'kBankAccNumber' => $request->input('kBankAccNumber'),
            'kBankName' => $request->input('kBankName'),
            'kDescOfProduct' => $request->input('kDescOfProduct'),
            'kICCopy' => $kICCopyPath,
            'kSSMCert' => $kSSMCertPath,
        

        ]);
    }else{
        kiosk_applications::where('kApplicationID', $id)->update([
         
           
           'kInventoryType' => $request->input('kInventoryType'),
           'kBusinessName' => $request->input('kBusinessName'),
           'kBusinessType'=> $request->input('kBusinessType'),
           'kStartDate' => date('Y-m-d', strtotime($request->input('kStartDate'))),
           'kDurationOfRenting' => $request->input('kDurationOfRenting'),
           'kBankAccNumber' => $request->input('kBankAccNumber'),
           'kBankName' => $request->input('kBankName'),
           'kDescOfProduct' => $request->input('kDescOfProduct'),
           
        ]);
    }
        return $this->viewApplication($id);
    }

    public function deleteApplication($id){
        kiosk_applications::where('kApplicationID', $id)->delete();
        return $this->viewListOfApplications();
    }


    public function viewListOfApplicationForPupuk(){
        $kioskApplications = kiosk_applications::all();
        $kiosks = kiosks::all();
        
        return view('ManageKiosk.PUPUKAdmin.listOfApplicationsAndKiosk', ['kioskApplications' => $kioskApplications, 'kiosks' => $kiosks]);
    }
}
