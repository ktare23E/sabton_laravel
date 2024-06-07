<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','post_title','content'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // public function tags(): BelongsToMany
    // {
    //     return $this->belongsToMany(Tag::class);
    // }

    
    public function image():MorphOne
    {
        return $this->morphOne(Image::class,'imageable');
    }

    public function comments():MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function latestImage() 
    {
        return $this->morphOne(Image::class,'imageable')->latestOfMany();
    }

    public function oldestImage()
    {
        return $this->morphOne(Image::class,'imageable')->oldestOfMany();
    }

    public function tags():MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
