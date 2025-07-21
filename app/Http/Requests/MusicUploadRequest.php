<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MusicUploadRequest extends FormRequest
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
            'title' => ['required', 'max:30'],
            'audio' => ['required', 'file', 'mimetypes:audio/mpeg', 'max:20000']
        ];
    }

     public function messages(): array{
            return [
                'title.required' => 'Please enter the title of the song',
                'title.max' => 'The title should not be more the 30 charcters',
                'audio.mimetypes' => 'The audio file should be an mp3 file',
                'audio.max' => 'The audion file should not be more than 20mbs'
            ];
    }
}