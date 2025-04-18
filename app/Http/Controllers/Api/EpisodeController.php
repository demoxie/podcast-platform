<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\EpisodeService;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    protected EpisodeService $episodeService;

    public function __construct(EpisodeService $episodeService)
    {
        $this->episodeService = $episodeService;
    }

    public function show($id)
    {
        $episode = $this->episodeService->getById($id);
        return new EpisodeResource($episode);
    }
}
