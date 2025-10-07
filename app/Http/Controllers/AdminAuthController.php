<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Mail\resetPassword;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminAuthController extends Controller
{
    // public function registerForm()
    // {
    //     return view('auth.admin.register');
    // }

    public function loginForm()
    {
        return view('auth.admin.login');
    }

    // public function register(RegisterUserRequest $request)
    // {
    //     $validated = $request->validated();
    //     $user = User::create($validated);

    //     return redirect()->route('admin.login')->with(
    //         [
    //             'msg' => 'Your Account Has Been Registered Successfully, Kindly Login Here..!',
    //             'type' => 'success'
    //         ]
    //     );

    // }

    public function login(LoginUserRequest $request)
    {
        try {

            $validated = $request->validated();

            $admin = User::where('email', $request->email)->first();

            if ($admin->role != "Admin") {
                return back()->with(
                    [
                        'msg' => 'Invalid Email / Password',
                        'type' => 'danger'
                    ]
                );
            }

            $remember = $request->remember ?? false;

            if (Auth::attempt($validated, $remember)) {
                // $request->session()->regenerate();
                return redirect()->route('dashboard');
            }

        } catch (Exception $e) {
            return back()->with(
                [
                    'msg' => 'Invalid Email / Password',
                    'type' => 'danger',
                    'error' => $e->getMessage()
                ]
            );
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with(
            [
                'msg' => 'You Have Been Successfully Logged-Out.',
                'type' => 'success'
            ]
        );
    }

    public function resetPasswordForm ()
    {
        return view('auth.admin.reset-password');
    }

    public function resetPassword (Request $request )
    {
        $validated = $request->validate(
            [
                'email' => 'required|exists:users,email'
            ],
            [
                'email.required' => 'Kindly Provide Your Email.',
                'email.exists' => 'Email Not Found.'
            ]
        );

        Mail::to($validated)->send(new resetPassword());

         return redirect()->route('admin.login')->with(
            [
                'msg' => 'An Email Has Been Sent To You For Your Password Update Request',
                'type' => 'success'
            ]
        );
    }

    public function updatePasswordForm()
    {
        return view('auth.admin.update-password');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate(
            [
                'password' => 'required',
                'password_confirmation' => 'required',
            ],
            [
                'password.required' => 'Kindly Provide Password.',
                'password.confirmed' => 'Your Password Does Not Match.',
                'password_confirmation.required' => 'Kindly Re-Enter Your Password.',
            ]
        );

    }

}
