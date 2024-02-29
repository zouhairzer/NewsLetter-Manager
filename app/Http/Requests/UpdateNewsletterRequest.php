<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsletterRequest extends FormRequest
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
            'title' =>'required|max:255|string|unique:newsletters,title',
            'author' => 'required|max:255|string',
            'category' => 'required|numeric|exists:categories,id',
            'content' => 'required|string',
            'image' => 'image|mimes:png,jpg,jpeg',
            'link' => 'required|string|max:500'
        ];
    }
}