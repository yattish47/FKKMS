<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kiosk_participant;
use App\Models\pupuk_admin;
use App\Models\admin;
use App\Models\fk_bursary;
use App\Models\fk_technicalteam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function userAuth(Request $request)
    {
        // Validate the form data
        $request->validate([
            'user_type' => 'required',
            'icnumber' => 'required',
            'password' => 'required',
        ]);

        // Get form input
        $userType = $request->input('user_type');
        $username = $request->input('icnumber');
        $password = $request->input('password');


        // Determine which table to use based on user type
        switch ($userType) {
            case 'Admin':
                // Implement logic for Admin authentication
                
                if($this->manualAdminAuth($username, $password)){
                    $user = admin::where('admin_ID', $username)->first();
                    $this->manualLogin('admin', $user);

                    // Check if the user is authenticated
                    if ($this->manualCheck('admin')) {
                        //  $user = $this->manualUser();

                       // return redirect()->route('pupukViewListOfApplication');
                    } else {

                        return redirect()->back()->withErrors(['Invalid credentials']);
                    }
                }else {

                    return redirect()->back()->withErrors(['Invalid credentials']);
                }
                break;

            case 'PUPUK Admin':
                // Implement logic for PUPUK Admin authentication
                if($this->manualPupukAdminAuth($username, $password)){
                    $user = pupuk_admin::where('pICNumber', $username)->first();
                    $this->manualLogin('pupukadmin', $user);

                    // Check if the user is authenticated
                    if ($this->manualCheck('pupukadmin')) {
                        //  $user = $this->manualUser();

                        return redirect()->route('pupukViewListOfApplication');
                    } else {

                        return redirect()->back()->withErrors(['Invalid credentials']);
                    }
                }else {

                    return redirect()->back()->withErrors(['Invalid credentials']);
                }
                break;

            case 'FK Bursary':
                // Implement logic for FK Bursary authentication
                if($this->manualBursaryAuth($username, $password)){
                    $user = fk_bursary::where('bursaryICNumber', $username)->first();
                    $this->manualLogin('bursary', $user);

                    // Check if the user is authenticated
                    if ($this->manualCheck('bursary')) {
                        //  $user = $this->manualUser();

                      //  return redirect()->route('pupukViewListOfApplication');
                    } else {

                        return redirect()->back()->withErrors(['Invalid credentials']);
                    }
                }else {

                    return redirect()->back()->withErrors(['Invalid credentials']);
                }
                break;

            case 'FK Technical Team':
                // Implement logic for FK Technical Team authentication
                if($this->manualTechTeamAuth($username, $password)){
                    $user = fk_technicalteam::where('ttICNumber', $username)->first();
                    $this->manualLogin('techteam', $user);

                    // Check if the user is authenticated
                    if ($this->manualCheck('techteam')) {
                        //  $user = $this->manualUser();

                      //  return redirect()->route('pupukViewListOfApplication');
                    } else {

                        return redirect()->back()->withErrors(['Invalid credentials']);
                    }
                }else {

                    return redirect()->back()->withErrors(['Invalid credentials']);
                }
                break;

            case 'Kiosk Participant':
                // Implement logic for Kiosk Participant authentication
                if ($this->manualKioskParticipantAuth($username, $password)) {
                    // Authentication successful, create a session
                    $user = kiosk_participant::where('kpICNumber', $username)->first();
                    $this->manualLogin('kioskparticipant', $user);

                    // Check if the user is authenticated
                    if ($this->manualCheck('kioskparticipant')) {
                        //  $user = $this->manualUser();

                        return redirect()->route('dashboard');
                    } else {

                        return redirect()->back()->withErrors(['Invalid credentials']);
                    }
                } else {

                    return redirect()->back()->withErrors(['Invalid credentials']);
                }
                break;

            default:
                dd('Reached here 3');
                return redirect()->back()->withErrors(['Invalid user type']);
        }
    }

    public function register(Request $request)
    {
        $kpICNumber = $request->input('ic_number');
        if (kiosk_participant::where('kpICNumber', $kpICNumber)->exists()) {
          
            return redirect()->back()->withErrors(['IC Number is already registered.']);
        } else {
            // Create a new KioskParticipant instance
            $user = new kiosk_participant();
            $user->kpICNumber = $request->input('ic_number');
            $user->kpName = $request->input('name');
            $user->kpUsername = $request->input('username');
            $user->kpEmail = $request->input('email');
            $user->kpType = $request->input('participant_type');
            $user->kpPhoneNumber = $request->input('phone_number');
            $user->kpMatricID = $request->input('matric_id');
            $user->kpNationality = $request->input('nationality');
            $user->kpAge = $request->input('age');
            $user->kpPassword = Hash::make($request->input('password'));

            // Save the user to the database
            $user->save();


            // Redirect to a success page or any other desired page
            return redirect()->route('login');
        }
    }


    private function manualKioskParticipantAuth($username, $password)
    {
        // Check the 'kiosk_participants' table with the provided username and password
        $user = kiosk_participant::where('kpICNumber', $username)->first();

        if ($user && Hash::check($password, $user->kpPassword)) {
            // Authentication successful
            return true;
        } else {
            // Authentication failed
            return false;
        }
    }
    private function manualPupukAdminAuth($username, $password)
    {
        // Check the 'kiosk_participants' table with the provided username and password
        $user = pupuk_admin::where('pICNumber', $username)->first();

        if ($user && Hash::check($password, $user->pAdminPassword)) {
            // Authentication successful
            return true;
        } else {
            // Authentication failed
            return false;
        }
    }
    private function manualAdminAuth($username, $password)
    {
        // Check the 'kiosk_participants' table with the provided username and password
        $user = admin::where('admin_ID', $username)->first();

        if ($user && Hash::check($password, $user->adminPassword)) {
            // Authentication successful
            return true;
        } else {
            // Authentication failed
            return false;
        }
    }
    private function manualBursaryAuth($username, $password)
    {
        // Check the 'kiosk_participants' table with the provided username and password
        $user = fk_bursary::where('bursaryICNumber', $username)->first();

        if ($user && Hash::check($password, $user->bursaryPassword)) {
            // Authentication successful
            return true;
        } else {
            // Authentication failed
            return false;
        }
    }
    private function manualTechTeamAuth($username, $password)
    {
        // Check the 'kiosk_participants' table with the provided username and password
        $user = fk_technicalteam::where('ttICNumber', $username)->first();

        if ($user && Hash::check($password, $user->ttPassword)) {
            // Authentication successful
            return true;
        } else {
            // Authentication failed
            return false;
        }
    }

    
    private function manualLogin($userType,$user)
    {
        // Manually log in the user
        if($userType == 'kioskparticipant'){
            session(['kioskparticipant' => $user->kpICNumber]);
        }elseif($userType == 'pupukadmin'){
            session(['pupukadmin' => $user->pICNumber]);
        }elseif($userType == 'admin'){
            session(['admin' => $user->admin_ID]);
        }elseif($userType == 'bursary'){
            session(['bursary' => $user->bursaryICNumber]);
        }elseif($userType == 'techteam'){
            session(['techteam' => $user->ttICNumber]);
        }
        
    }

    private function manualCheck($userType)
    {
        // Check if the user is logged in
        if($userType == 'kioskparticipant'){
            return session()->has('kioskparticipant');
        }elseif($userType == 'pupukadmin'){
        return session()->has('pupukadmin');
        }elseif($userType == 'admin'){
            return session()->has('admin');
        }elseif($userType == 'bursary'){
            return session()->has('bursary');
        }elseif($userType == 'techteam'){
            return session()->has('techteam');
        }
    }


    public function logout($userType)
    {
        if($userType == 'kioskparticipant'){
            session()->forget('kioskparticipant');
        }elseif($userType == 'pupukAdmin'){
            session()->forget('pupukadmin');
        }elseif($userType == 'admin'){
            session()->forget('admin');
        }elseif($userType == 'bursary'){
            session()->forget('bursary');
        }elseif($userType == 'techteam'){
            session()->forget('techteam');
        }
        // Redirect to the login page or another page
        return redirect()->route('login');
    }
}
