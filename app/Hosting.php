<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{   
    protected $fillable = ['user_id','package_id','name','reg_date','exp_date'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function package(){
         return $this->hasMany(Package::class);
    }
    // public $timestamps = false;
}
