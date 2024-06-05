<?php

namespace App\Models;
use App\Models\Scopes\UserBalanceScope;
use Illuminate\Database\Eloquent\Builder;

trait PostScopes{
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
}

?>