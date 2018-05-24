<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'nameProject', 'contentProject', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
