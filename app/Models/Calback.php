<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\CallbackMe;
use Illuminate\Support\Facades\File;

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


    
    //  /**

    //  * Write code on Method
    //  *
    //  * @return response()
    //  */

    // public static function boot() {

    //     parent::boot();

    //     static::created(function ($item) {

    //         $adminEmail = "sherxonbabayar@gmail.com";

    //         Mail::to($adminEmail)->send(new CallbackMe($item));

    //     });

    // }
}