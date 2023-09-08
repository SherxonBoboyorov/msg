<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Document extends Model
{
    use HasFactory;
    
    protected $table = 'documents';

    protected $fillable = [
        'category_id',
        'title_de',
        'title_en',
        'title_ru',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/document/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/document/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $document): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $document->image)) {
                File::delete(public_path() . $document->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/document/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/document/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $document->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/document/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/document/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
