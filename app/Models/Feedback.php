<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'feedback';

    protected $fillable = [
        'fullname',
        'gmail',
        'phone_number',
        'comment',
        'file',
    ];

}
