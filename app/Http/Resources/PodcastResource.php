<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PodcastResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'title'        => $this->title,
            'description'  => $this->description,
            'image'        => $this->image,
            'category'     => new CategoryResource($this->whenLoaded('category')),
            'episode_count'=> $this->when(isset($this->episodes_count), $this->episodes_count),
            'episodes'     => EpisodeResource::collection($this->whenLoaded('episodes')),
        ];
    }
}
