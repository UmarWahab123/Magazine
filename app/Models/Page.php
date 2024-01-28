<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_title',
        'form_file',
        'img_heading',
        'form_file1',
        'heading',
        'title',
        'editor_data',
        'status',
        'edition_id',
        'edition_temp_title'
    ];
}
