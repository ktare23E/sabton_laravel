<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\UserBalanceScope;
use Illuminate\Database\Eloquent\Builder;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'balance',
        'user_age',
        'description'
    ];

    // protected static function booted() : void
    // {
    //     static::addGlobalScope(new UserBalanceScope());
    // }

    public function scopeWithUserData(Builder $builder){
        return $builder->join('users','tests.user_id','=','users.id')
                        ->select('tests.*','users.name as user_name','users.email');
    }

    public function scopeWithTestAge(Builder $builder){
        return $builder->whereBetween('user_age',[10,30]);
    }

    public function scopeWithRetrieveDynamicTest(Builder $builder,$user_id){
        return $builder->where('user_id',$user_id);
    }

    // protected $guarded = [];
    
    // public $incrementing = false;

    // public $timestamps = false;
    // protected $dateFormat = 'U';

    //done query builder

    public function user(){
        return $this->belongsTo(User::class);
    }
}
