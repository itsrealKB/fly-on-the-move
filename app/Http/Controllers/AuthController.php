<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.web.register');
    }

    public function loginForm()
    {
        return view('auth.web.login');
    }

    public function register(RegisterUserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);

        return redirect()->route('login')->with(
            [
                'msg' => 'Your Account Has Been Registered Successfully, Kindly Login Here..!',
                'type' => 'success'
            ]
        );

    }

    public function login(LoginUserRequest $request)
    {
        try {

            $validated = $request->validated();

            $remember = $request->remember ?? false;

            if (Auth::attempt($validated, $remember)) {
                // $request->session()->regenerate();
                return redirect()->route('index');
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

        return redirect()->route('login')->with(
            [
                'msg' => 'You Have Been Successfully Logged-Out.',
                'type' => 'success'
            ]
        );
    }
}
