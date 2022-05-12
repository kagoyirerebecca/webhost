<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientsdomain extends Model
{
    //
    protected $fillable = ['user_id','domain_id','name','NS1','NS2','NS3','NS4'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function domain(){
        return $this->hasMany(Domain::class);
    }
}
