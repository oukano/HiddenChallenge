<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image_link', 'distance'
    ];

    public function likes()
    {
        return $this->belongsToMany(User::class,'store_user');
    }
}
