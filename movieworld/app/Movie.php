<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * Ignore timestamps
     */
    public $timestamps = false;

    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
