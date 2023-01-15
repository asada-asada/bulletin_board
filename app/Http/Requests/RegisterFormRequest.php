<?php

namespace App\Http\Requests\RegisterFormRequest;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;

        // if ($this->path() == 'sample') {
        //     return true;
        //   } else {
        //     return false;
        //   }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|max:30|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u',
            'under_name_kana' => 'required|string|max:30|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u',
            'mail_address' => 'required|email|max:100|unique:users',
            'sex' => 'required',
            'old_year' => 'required|after:2000',
            'old_month' => 'required',
            'old_day' => 'required',
            'birth_day' =>'before:today',
            'role' => 'required',
            'password' => 'required|string|min:8|max:30|confirmed',
        ];
    }

    /**
    * 定義済みバリデーションルールのエラーメッセージ取得
    *
    * @return array
    */
    public function messages(){
    }

    /**
    * バリデーションエラーのカスタム属性の取得
    *
    * @return array
    */
    public function attributes()
    {
        return [
            'over_name' => '姓',
            'under_name' => '名',
            'over_name_kana' => 'セイ',
            'under_name_kana' => 'メイ',
            'mail_address' => 'メールアドレス',
            'sex' => '性別',
            'old_year' => '年',
            'old_month' => '月',
            'old_day' => '日',
            'birth_day' => '生年月日',
            'role' => '役職',
            'password' => 'パスワード',
        ];
    }
}