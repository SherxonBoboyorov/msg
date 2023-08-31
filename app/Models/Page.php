<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = [
        'image',
        'icon',
        'sub_content_de',
        'sub_content_en',
        'sub_content_ru',
        'content_de',
        'content_en',
        'content_ru',
        'meta_title_de',
        'meta_title_en',
        'meta_title_ru',
        'meta_description_de',
        'meta_description_en',
        'meta_description_ru',
   ];
}
