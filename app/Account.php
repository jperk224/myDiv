<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    // 
    // ];
    
    /**
     * Account-User relationship
     */
    public function user() 
    {   
        return $this->belongsTo(User::class);
    }
}
