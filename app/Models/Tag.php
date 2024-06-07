<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['tag_name'];

    // public function posts(): BelongsToMany 
    // {
    //     return $this->belongsToMany(Post::class);
    // }

    public function related(): MorphOne
    {
        return $this->morphOne(Taggable::class, 'taggable');
    }
}
