<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calback extends Model
{
    use HasFactory;

    protected $table = 'calbacks';

    protected $fillable = [
        'fullname',
        'gmail',
        'phone_number',
        'comment',
        'file'
    ];

}