<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PodcastResource;
use App\Services\PodcastService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use OpenApi\Annotations as OA;

class PodcastController extends Controller
{
    protected PodcastService $podcastService;

    public function __construct(PodcastService $podcastService)
    {
        $this->podcastService = $podcastService;
    }

    /**
     * @OA\Get(
     *     path="/api/v1/podcasts",
     *     summary="Get all podcasts",
     *     tags={"Podcasts"},
     *     @OA\Parameter(
     *         name="per_page",
     *         in="query",
     *         description="Number of results per page",
     *         required=false,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="List of podcasts",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Podcast"))
     *     )
     * )
     */

    public function index(Request $request): AnonymousResourceCollection
    {
        $podcasts = $this->podcastService->getAll($request);
        return PodcastResource::collection($podcasts);
    }

    public function show($id): PodcastResource
    {
        $podcast = $this->podcastService->getById($id);
        return new PodcastResource($podcast);
    }
}
