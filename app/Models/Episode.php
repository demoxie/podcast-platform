<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'podcast_id',
        'title',
        'audio_url',
        'duration',
    ];

    /**
     * Define relationship: Episode belongs to a Podcast
     */
    public function podcast()
    {
        return $this->belongsTo(Podcast::class);
    }
}
