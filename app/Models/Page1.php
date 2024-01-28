<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_title',
        'form_file',
        'heading',
        'title',
        'editor_data',
        'button_text',
        'edition_id',
        'status',
        'edition_temp_title'
    ];
}
