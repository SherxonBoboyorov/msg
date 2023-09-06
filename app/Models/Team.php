<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'image',
        'name_de',
        'name_en',
        'name_ru',
        'content_de',
        'content_en',
        'content_ru',
        'phone',
        'email'
    ];
}
