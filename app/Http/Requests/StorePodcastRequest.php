<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePodcastRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|url',
        ];
    }
}
