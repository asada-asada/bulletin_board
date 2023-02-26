<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'main_category' => 'required|string|max:100|unique:main_categories',
            'main_category_id' => 'required|string|max:2500',
        ];
    }

    public function attributes()
    {
        return [
            'main_category' => 'メインカテゴリー',
            'main_category_id' => 'メインカテゴリー',
        ];
    }

        public function messages(){
        return [
            'main_category.required' => ':attributeは必須項目です。',
            'main_category.string' => ':attributeは文字列で入力してください。',
            'main_category.max' => ':attributeは100文字以内で入力してください。',
            'main_category.unique' => ':attributeは重複できない',
        ];

    }
}
