<?php

namespace App\Http\Requests\Fan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class FanLoginRequest extends FormRequest
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
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(3)]
        ];
    }
}
