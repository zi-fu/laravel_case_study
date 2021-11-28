<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'store')
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product' => 'required',
            'detail' => 'required',
            // 'image' => 'required',
            // 'mail_temp' => 'required',
            // 'etc' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'product.required' => '商品名は必ず入力してください',
            'detail.required' => '詳細は必ず入力してください',
            // 'image' => 'required',
            // 'mail_temp' => 'required',
            // 'etc' => 'required',
        ];
    }
}
