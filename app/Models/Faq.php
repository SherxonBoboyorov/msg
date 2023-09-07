<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';

    protected $fillable = [
        'title_de',
        'title_en',
        'title_ru',
        'content_de',
        'content_en',
        'content_ru',
    ];
}
