<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\EditionList;
class EditionTemplate extends Model
{
    use HasFactory;
    protected $guarded = array();
    protected $table = 'edition_templates';
   
}
