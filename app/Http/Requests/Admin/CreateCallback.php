<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateCallback extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'fio' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|file|mimes:csv,txt,xlx,xls,pdf,docx,zip,eps,ffx,jpg,png,webp',
        ];
    }
}
