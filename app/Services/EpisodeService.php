<?php

namespace App\Services;

use App\Models\Episode;

class EpisodeService
{
    public function getById($id)
    {
        return Episode::with('podcast.category')->findOrFail($id);
    }
}
