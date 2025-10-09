<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Mail\ResetPassword;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
            else{
                return back()->with(
                    [
                        'msg' => 'Invalid Email / Password',
                        'type' => 'danger',
                    ]
                );
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

    public function resetPassword (ResetPasswordRequest $request )
    {
        $validated = $request->validated();

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $validated['email'],
            'token' => $token,
            'created_at' => now()
        ]);

        $resetLink = url("/admin/update-password/$token?email=" . urlencode($request->email));

        Mail::to($validated)->send(new ResetPassword($resetLink));
        return redirect()->route('admin.success.login', $request->email);
    }

    public function successLogin ($email)
    {
        return view('auth.admin.success-login',compact('email'));
    }

    public function updatePasswordForm($token, Request $request)
    {
        $email = $request->query('email');

        $check = DB::table('password_reset_tokens')
            ->where('email', $email)
            ->where('token', $token)
            ->first();

        if (!$check) {
            return redirect()
                ->route('admin.login')
                ->with([
                    'msg' => 'Reset Pasword Link Expired, Kindly Request Again.',
                    'type' => 'danger'
                ]);
        }

        return view('auth.admin.update-password',compact('token', 'email'));
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = User::where('email' , $request->email)->first();

        if($user)
        {
            $user->password = $request->password;
            $user->save();

            DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->delete();
        }


        return redirect()
            ->route('admin.login')
            ->with([
                'msg' => 'Your Password Updated Successfully, Now You Can Login.',
                'type' => 'success'
            ]);
    }

}
