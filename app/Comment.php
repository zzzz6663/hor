<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'comment', 'show', 'parent_id'
    ];
    public function users(){
        $this->belongsTo(User::class);
    }


}
