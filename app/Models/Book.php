<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'image', 'creation_year', 'description', 'author_id',
    ];

    public function Author() {
        return $this->belongsTo('App\Models\Author');
    }

    public function Genre(){
        return $this->belongsToMany('App\Models\Genre');
    }
}

