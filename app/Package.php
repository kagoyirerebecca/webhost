<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{   
    protected $fillable = ['name','price','space','bandwidth','ftp','databse','email'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
