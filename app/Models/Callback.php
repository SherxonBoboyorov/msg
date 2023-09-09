<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Callback extends Model
{
    use HasFactory;

    protected $table = 'callbacks';

    protected $fillable = [
        'fio',
        'email',
        'phone',
        'content',
        'image'
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/image/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/image/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/image/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/image/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
