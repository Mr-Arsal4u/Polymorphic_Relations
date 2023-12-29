<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

   protected $fillable=['name', 'taggable_type', 'taggable_id'];

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function images()
    {
        return $this->morphedByMany(Image::class, 'taggable');
    }

}