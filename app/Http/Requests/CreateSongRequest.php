<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSongRequest extends FormRequest
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
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'file_name' => 'required|mimetypes:audio/mpeg|max:7168',
            'composer_id' => 'required|integer',
            'cover_image' => 'required|mimes:jpg,jpeg,png|max:7168',
            'year' => 'required|integer',
            'genre' => 'required|min:3',
        ];
    }
}
