<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectoryRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|unique:directories,phone',
            'whatsapp' => 'nullable|string|unique:directories,whatsapp',
            'description' => 'required|string',
            'address' => 'required|string',
            'category_ids' => 'required|array',
            'category_ids.*' => 'integer|exists:categories,id',
        ];
    }

    /**
     * Get the validation attributes.
     */
    public function attributes(): array
    {
        return [];
    }

    /**
     * Get the validation messages.
     */
    public function messages(): array
    {
        return [];
    }

    /**
     * If using a package like mpociot/laravel-apidoc-generator.
     */
    public function bodyParameters(): array
    {
        return [
            'name' => [
                'description' => 'Name of the directory.',
                'example' => 'Publish Library',
            ],
            'description' => [
                'description' => 'Description of the directory.',
                'example' => 'Remember to publish library code.',
            ],
            'address' => [
                'description' => 'Address of the directory.',
                'example' => 'Cairo, Egypt',
            ],
            'phone' => [
                'description' => 'Phone number of the directory.',
                'example' => '01150064538',
            ],
            'whatsapp' => [
                'description' => 'WhatsApp number (optional).',
                'example' => '01150064538',
            ],
            'category_ids' => [
                'description' => 'Array of category IDs.',
                'example' => [1, 2, 3],
            ],
        ];
    }
}
