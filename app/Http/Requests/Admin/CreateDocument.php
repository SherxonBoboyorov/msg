<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateDocument extends FormRequest
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
            'category_id' => 'required',
            'image' => 'required|file|mimes:csv,txt,xlx,xls,pdf,docx,zip,eps,ffx,jpg,png,webp',
            'title_de' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_ru' => 'required|max:255',
        ];
    }
}
