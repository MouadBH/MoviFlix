<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class movieRequest extends FormRequest
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
            'title' => 'required',
            'story' => 'required|min:20',
            'cover' => 'required',
            'poster' => 'required',
            'trailer' => 'required',
            'typem' => 'required',
            'genre' => 'required',
            'release' => 'required',
            'time' => 'required',
            'rank' => 'required|min:1|max:10',
            'director' => 'required',
            'lang' => 'required',
            'sl' => 'required',
            'sub' => 'min:1'
        ];
    }
}
