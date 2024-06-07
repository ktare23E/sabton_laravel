<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'country_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function tests(){
        return $this->hasMany(Test::class);
    }

    public function contact():HasOne
    {
        return $this->hasOne(Contact::class);
    }

    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function companyPhoneNumber(): HasOneThrough
    {
        return $this->hasOneThrough(PhoneNumber::class,Company::class);
    }

    public function latestJob(): HasOne
    {
        return $this->hasOne(Job::class)->latestOfMany();
    }

    public function oldestJob():HasOne
    {
        return $this->hasOne(Job::class)->oldestOfMany();
    }

    public function image():MorphOne
    {
        return $this->mqorphOne(Image::class,'imageable');
    }

    public function latestImage() 
    {
        return $this->morphOne(Image::class,'imageable')->latestOfMany();
    }

    public function oldestImage()
    {
        return $this->morphOne(Image::class,'imageable')->oldestOfMany();
    }
}
