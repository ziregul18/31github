<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;


class StoreVideoRequest extends FormRequest
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
            'title_ky' => 'required',
            'title_tr' => 'required',
            'video_ky' => 'required',
            'video_tr' => 'required',
            'description_ky' => 'nullable',
            'description_tr' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'title_ky' => 'Теманы жазаңыз!',
            'title_tr' => 'Başlık yazınız!',
            'video_ky' => 'Видео киргизиңиз!',
            'video_tr' => 'Videoyu yükleyiniz!'

        ];
    }
}
