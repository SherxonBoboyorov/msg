<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $table = 'diseases';

    protected $fillable = [
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
