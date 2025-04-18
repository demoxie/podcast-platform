<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;
    protected $table = 'podcasts';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['title', 'category_id', 'description', 'image'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
