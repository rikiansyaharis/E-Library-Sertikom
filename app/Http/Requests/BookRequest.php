<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'genre_id' => 'required',
            'name' => 'required',
            'author' => 'required',
            'number_of_pages' => 'required',
            'publication_years' => 'required',
            'description' => 'required',
            'file_image' => [
                $this->routeName == 'admin.books.store' ? 'required' : 'nullable',
                'mimes:jpg,jpeg,png,gif'
            ],
            'file_book' => [
                $this->routeName == 'admin.books.store' ? 'required' : 'nullable',
                'mimes:pdf,doc'
            ]
        ];
    }
}
