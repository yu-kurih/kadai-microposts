<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    //多対多関係記述
    public function favorite_user(){
        return $this->belongsToMany(User::class, 'favorite', 'micropost_id', 'user_id')->withTimestamps();        
    }
    
}
