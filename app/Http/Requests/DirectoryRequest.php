<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LaravelApiBase\Http\Requests\ApiFormRequest;

class DirectoryRequest extends FormRequest implements ApiFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        //    return backpack_auth()->check();
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
            'name' => 'required|string',
            'phone' => 'required|string|unique',
            'whatsapp' => 'string|unique',
            'description' => 'required|string',
            'address' => 'required|string',
            'category_ids' => 'required',
        ];

    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }

    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => 'name of directory',
                'example' => 'Publish Library',
            ],
            'description' => [
                'description' => 'Description of directory',
                'example' => 'Remember to publish library code',
            ],
            'address' => [
                'description' => 'address of directory',
                'example' => 'Remember to publish library code',
            ],
            'phone' => [
                'description' => 'phone of directory',
                'example' => '01150064538',
            ],
            'category_ids' => [
                'description' => 'list of categories of directory',
                'example' => '[1,2,3]',
            ],
        ];
    }
}
