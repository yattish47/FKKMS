<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kiosk_participant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function userAuth(Request $request)
    {
        // Validate the form data
        $request->validate([
            'user_type' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        // Get form input
        $userType = $request->input('user_type');
        $username = $request->input('username');
        $password = $request->input('password');

        // Determine which table to use based on user type
        switch ($userType) {
            case 'Admin':
                // Implement logic for Admin authentication
                break;

            case 'PUPUK Admin':
                // Implement logic for PUPUK Admin authentication
                break;

            case 'FK Bursary':
                // Implement logic for FK Bursary authentication
                break;

            case 'FK Technical Team':
                // Implement logic for FK Technical Team authentication
                break;

            case 'Kiosk Participant':
                // Implement logic for Kiosk Participant authentication
                if ($this->kioskParticipantAuth($username, $password)) {
                    return redirect()->route('dashboard'); // Adjust the route for the kiosk participant home page
                } else {
                    return redirect()->back()->withErrors(['Invalid credentials']);
                }
                break;

            default:
                return redirect()->back()->withErrors(['Invalid user type']);
        }
    }

    // Additional functions for specific user types
    private function kioskParticipantAuth($username, $password)
    {
        // Implement your authentication logic for Kiosk Participant
        // Check the 'kiosk_participants' table with the provided username and password
      //  return Auth::attempt(['kpUsername' => $username, 'kpPassword' => $password]);
        $user = kiosk_participant::where('kpUsername', $username)->first();

            if (!$user || !Hash::check($password, $user->kpPassword)) {
                return false;
            }else{
                return true;}
    }
}
