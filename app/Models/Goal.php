<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Goal extends Model
{
    use HasFactory;

    protected $table = 'goals';

    protected $fillable = [
        'image',
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


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/goal/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/goal/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $goal): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $goal->image)) {
                File::delete(public_path() . $goal->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/goal/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/goal/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $goal->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/goal/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/goal/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
