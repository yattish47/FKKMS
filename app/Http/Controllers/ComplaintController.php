<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index(){
        $q=Complaint::get();
        return view('ManageComplaint\KioskParticipant\listOfComplaints',['data'=>$q]);
    }
    public function viewComplaint($id){
        $q=Complaint::where('id',$id)
        ->first();
        return view('ManageComplaint\KioskParticipant\viewComplaint',['data'=>$q]);
    }
    public function updateComplaints($id){
        $q=Complaint::where('id',$id)
        ->first();
        return view('ManageComplaint\KioskParticipant\updateComplaints',['data'=>$q]);
    }

    public function newApplication(){
        return view('ManageComplaint\KioskParticipant\newApplication');
    }
    public function addComplaint(Request $request){
        Complaint::create([
            'name'=>$request->nama,
            'noKp'=>$request->noKp,
            'explain'=>$request->complaint,
            'status'=>'Pending'
        ]);
        return $this->index();
    }
    public function updateComplaint(Request $request) {

        Complaint::where('id',$request->id)
        ->update([
            'explain'=>$request->complaint,
            'answer'=>$request->answer ?? null,
        ]);
        return redirect()->back()->with('success', 'Complaint Update successfully!');
    }
    public function deleteComplaint(Request $request,$id){
        Complaint::where('id',$id)->delete();
        return $this->index();
    }

    public function techComplaint(){
        $q=Complaint::get();
        return view('Complaint/IndexTech',['data'=>$q]);
    }
    public function techViewComplaint($id){
        $q=Complaint::where('id',$id)
        ->first();
        return view('Complaint/TechViewComplaint',['data'=>$q]);
    }
    public function techEditComplaint($id){
        $q=Complaint::where('id',$id)
        ->first();
        return view('Complaint/TechEditComplaint',['data'=>$q]);
    }
    public function statusComplaint($id, $status){
        Complaint::where('id',$id)
        ->update([
            'status'=>$status
        ]);

            $r=Complaint::where('id',$id)
            ->first();
            return view('Complaint/TechEditComplaint',['data'=>$r]);

    }
}
