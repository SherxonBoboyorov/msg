<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Diagnostic extends Model
{
    use HasFactory;

    protected $table = 'diagnostics';

    protected $fillable = [
        'image',
        'title_de',
        'title_en',
        'title_ru',
        'content_de',
        'content_en',
        'content_ru',
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/diagnostic/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/diagnostic/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $diagnostic): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $diagnostic->image)) {
                File::delete(public_path() . $diagnostic->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/diagnostic/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/diagnostic/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $diagnostic->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/diagnostic/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/diagnostic/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
