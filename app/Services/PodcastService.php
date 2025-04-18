<?php

namespace App\Services;

use App\Models\Podcast;

class PodcastService
{
    public function getAll($request)
    {
        return Podcast::with('category')
            ->withCount('episodes')
            ->paginate($request->get('per_page', 10));
    }

    public function getById($id)
    {
        return Podcast::with(['category', 'episodes'])->findOrFail($id);
    }
}
