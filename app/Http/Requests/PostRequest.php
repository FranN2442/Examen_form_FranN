<?php

namespace App\Http\Requests;

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
            'title' => 'requiered|min:2|max:100',
            'extract' => 'required|min:2|max:100',
            'post_content' => 'required|min:1|max:255',
            'expirable' => 'required|boolean',
            'commentable' => 'required|boolean',
            'acction' => 'required'
        ];
    }
}
