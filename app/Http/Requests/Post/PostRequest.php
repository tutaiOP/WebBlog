<?php

namespace App\Http\Requests\Post;

use App\Http\Requests\Post;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:255',

            'description' => 'required|max:255',
            'content' => 'required',
            
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề',

            'description.required' => 'Vui lòng nhập mô tả',
            'content.required' => 'Vui lòng nhập content',
            

        ];
    }
}
