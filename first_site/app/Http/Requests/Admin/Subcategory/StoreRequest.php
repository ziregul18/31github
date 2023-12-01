<?php

namespace App\Http\Requests\Admin\Subcategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'category_id'=>'required',
            'title_ky'=>'required|max:255',
            'title_tr'=>'required|max:255',
            'description_ky'=>'nullable',
            'description_tr'=>'nullable',
            'logo'=>'required'
        ];
    }
}
