<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReleaseRequest extends FormRequest
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
            'title_id' => 'required|integer',
            'publisher_id' => 'required|integer',
            'release' => 'required|integer',
            'ISBN' => 'required',
            'price' => 'required',
            'pages' => 'required|integer',
        ];
    }
}
