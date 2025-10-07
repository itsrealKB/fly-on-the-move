<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kindly Provide Your Name.',
            'email.required' => 'Kindly Provide Your Name.',
            'email.email' => 'Kindly Provide A Valid Email.',
            'password.required' => 'Kindly Provide Password.',
            'password.confirmed' => 'Your Password Does Not Match.',
            'password_confirmation.required' => 'Kindly Re-Enter Your Password.',
        ];
    }
}
