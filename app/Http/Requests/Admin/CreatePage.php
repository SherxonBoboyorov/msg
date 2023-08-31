<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreatePage extends FormRequest
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
            'icon' => 'required|image|mimes:svg,ico,cml,png,jpg,jpeg,webp',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp,svg',
            'sub_content_de' => 'required|',
            'sub_content_en' => 'required|',
            'sub_content_ru' => 'required|',
            'content_de' => 'required|',
            'content_en' => 'required|',
            'content_ru' => 'required|',
        ];
    }
}
