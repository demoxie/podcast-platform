<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PodcastController;
use App\Http\Controllers\Api\EpisodeController;

Route::prefix('v1')->group(function () {
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/podcasts', [PodcastController::class, 'index']);
    Route::get('/podcasts/{id}', [PodcastController::class, 'show']);
    Route::get('/episodes/{id}', [EpisodeController::class, 'show']);
});
