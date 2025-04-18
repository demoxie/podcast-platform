<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEpisodeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'      => 'required|string|max:255',
            'podcast_id' => 'required|exists:podcasts,id',
            'audio_url'  => 'required|url',
            'duration'   => 'required|integer|min:1',
        ];
    }
}
