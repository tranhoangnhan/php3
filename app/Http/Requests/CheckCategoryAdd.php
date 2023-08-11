<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckCategoryAdd extends FormRequest
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
            'ten' => ['required', 'string', 'max:255','min:6',
            'unique:loaitin',
            'not_regex:/[$%&*^]+/',

        
        ],
        ];
    }
    public function messages(){
        return [
            'ten.required' => 'Tên không được để trống',
            'ten.string' => 'Tên phải là chuỗi',
            'ten.max' => 'Tên không được quá 255 ký tự',
            'ten.min' => 'Tên không được dưới 6 ký tự',
            'ten.unique' => 'Tên đã tồn tại',
            'ten.not_regex' => 'Tên không được chứa ký tự đặc biệt',


        ];
    }
    public function attributes() {
        return [
           
            'ten' => 'Tên danh mục',
        ];
    }
}
