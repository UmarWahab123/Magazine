<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditionList extends Model
{
    use HasFactory;
    protected $fillable = [
        'edition_image',
        'edition_title',
        'status',
    ];
     public function pages()

    {

        return $this->hasMany('App\Models\EditionTemplate', 'edition_id', 'id');

    }
}
