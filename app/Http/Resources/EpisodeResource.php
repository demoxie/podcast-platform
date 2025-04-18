<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EpisodeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->id,
            'title'      => $this->title,
            'audio_url'  => $this->audio_url,
            'duration'   => $this->duration,
            'podcast'    => new PodcastResource($this->whenLoaded('podcast')),
        ];
    }
}
