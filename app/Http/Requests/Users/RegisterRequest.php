<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\Users;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:10',
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            're_password' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập họ và tên',
            'email.required' => 'Vui lòng nhập email',
            'mobile.required' => 'Vui lòng nhập mobile',
            'mobile.max' => 'Số điện thoại vui lòng nhập đúng 10 số',
            'username.required' => 'Vui lòng nhập username',
            'password.required' => 'Vui lòng nhập mật khẩu',
            're_password' => 'Vui lòng nhập lại mật khẩu',
            're_password.same:password' => 'Mật khẩu không trùng nhau',
        ];
    }
}
