<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckPostAdd extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'tieuDe' => ['required', 'string', 'max:255','min:6'],
            'tomTat' => ['required', 'string', 'max:255','min:6'],
            'urlHinh' => ['required', 'string', 'max:255','min:6'],
        ];
    }
    public function messages(){
        return [
            'tieuDe.required' => 'Tiêu đề không được để trống',
            'tieuDe.string' => 'Tiêu đề phải là chuỗi',
            'tieuDe.max' => 'Tiêu đề không được quá 255 ký tự',
            'tieuDe.min' => 'Tiêu đề không được dưới 6 ký tự',
            'tomTat.required' => 'Tóm tắt không được để trống',
            'tomTat.string' => 'Tóm tắt phải là chuỗi',
            'tomTat.max' => 'Tóm tắt không được quá 255 ký tự',
            'tomTat.min' => 'Tóm tắt không được dưới 6 ký tự',
            'urlHinh.required' => 'Url hình không được để trống',
            'urlHinh.string' => 'Url hình phải là chuỗi',
            'urlHinh.max' => 'Url hình không được quá 255 ký tự',
            'urlHinh.min' => 'Url hình không được dưới 6 ký tự',
        

        ];
    }

    public function attributes() {
        return [
            'tieuDe' => 'Tiêu đề',
            'tomTat' => 'Tóm tắt',
            'urlHinh' => 'Url hình',
            'ten' => 'Tên danh mục',
        ];
    }
}
