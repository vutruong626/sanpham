<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorRequest extends FormRequest
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
            'name'    => 'required|unique:contacts,name',
            'email'  => 'required|unique:contacts,email',
            // 'website'  => 'required',
            // 'fanpage'  => 'required',
            // 'phone'  => 'required',
            // 'address'  => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required'     => 'Bạn Chưa Nhập Đây Đủ Thông Tin',
            'name.unique'       => 'dasdasdsada',

            
        ];
       
    }
}


// 'website.required'     => 'Bạn Chưa Nhập Đây Đủ Thông Tin',
// 'website.unique'       => 'dasdasdsada',

// 'fanpage.required'     => 'Bạn Chưa Nhập Đây Đủ Thông Tin',
// 'fanpage.unique'       => 'dasdasdsada',

// 'phone.required'     => 'Bạn Chưa Nhập Đây Đủ Thông Tin',
// 'phone.unique'       => 'dasdasdsada',

// 'address.required'     => 'Bạn Chưa Nhập Đây Đủ Thông Tin',
// 'address.unique'       => 'dasdasdsada',