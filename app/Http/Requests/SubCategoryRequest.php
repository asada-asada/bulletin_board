<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'sub_category' => 'unique:sub_categories|required|string|max:2500',
        ];
    }

    public function attributes()
    {
        return [
            'sub_category' => 'サブカテゴリー',
        ];
    }

        public function messages(){
        return [
            'sub_category.required' => ':attributeは必須項目です。',
            'sub_category.string' => ':attributeは文字列で入力してください。',
            'sub_category.max' => ':attributeは100文字以内で入力してください。',
            'sub_category.unique' => '同じ:attributeは登録出来ません。',
        ];
    }
}
