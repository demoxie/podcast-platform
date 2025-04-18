<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name', 'slug'];
    public static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = \Str::slug($category->name);
        });
    }
}
