<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ArtistSignupRequest extends FormRequest
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
            'artistname' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(3)]
        ];
    }

    public function messages() : array
    {
        return [
            'artistname.required' => 'Please enter your artist name',
            'email.required' => 'Please enter your email address'
        ];
    }
}
