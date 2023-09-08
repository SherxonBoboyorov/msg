<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'title_de',
        'title_en',
        'title_ru'
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
