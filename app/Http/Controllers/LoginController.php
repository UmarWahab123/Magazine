<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller

{





    public function adminlogin()
    {
    //  dd('ok');
        return view('login');
    }

    public function showChangePasswordForm()
    {
        $data = User::first();
        // dd($data);
        return view('password',['data'=>$data]);
    }

    public function changePassword(Request $request)
    {
        // dd( $request->new_password);

        if ($request->new_password != $request->password_confirmation) {
            return back()->with(['failure' => 'Password does not match!']);
        }

        $userRecord = User::where('id', $request->id)->first();
        $user_pass = $userRecord->password;

        // Use Hash::check to verify the old password
        if (!Hash::check($request->password, $user_pass)) {
            return back()->with(['failure' => 'Old password incorrect!']);
        }

        // Update the password field with the hashed new password
        $data = [
            'password' => $request->new_password,
        ];

        $userRecord->update($data);

        return back()->with(['success' => 'Password updated successfully!']);
    }


      public function authenticate(Request $request)
      {
          $request->validate([
              'email' => 'required|email',
              'password' => 'required',
          ]);

          // Attempt to log in the user using Laravel's built-in authentication
          if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
              // Authentication successful
              return redirect()->route('index')->with('success', 'Login successful!');
          }

          // Authentication failed
          return redirect()->route('login')->with('error', 'Invalid email or password. Please try again.');
      }


    public function logout(Request $request)
{
    Auth::logout(); // Logs the user out

    return redirect('/login'); // Redirect to the login page after logout
}
}
