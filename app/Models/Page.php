<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = [
        'image',
        'icon',
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

   public static function uploadIcon($request): ?string
   {
       if ($request->hasFile('icon')) {

           self::checkDirectory();

           $request->file('icon')
               ->move(
                   public_path() . '/upload/icon/' . date('d-m-Y'),
                   $request->file('icon')->getClientOriginalName()
               );
           return '/upload/icon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
       }

       return null;
   }

   public static function updateIcon($request, $page): string
   {
       if ($request->hasFile('icon')) {
           if (File::exists(public_path() . $page->icon)) {
               File::delete(public_path() . $page->icon);
           }

           self::checkDirectory();

           $request->file('icon')
               ->move(
                   public_path() . '/upload/icon/' . date('d-m-Y'),
                   $request->file('icon')->getClientOriginalName()
               );
           return '/upload/icon/' . date('d-m-Y') . '/' . $request->file('icon')->getClientOriginalName();
       }

       return $page->icon;
   }


   public static function uploadImage($request): ?string
   {
       if ($request->hasFile('image')) {

           self::checkDirectory();

           $request->file('image')
               ->move(
                   public_path() . '/upload/page/' . date('d-m-Y'),
                   $request->file('image')->getClientOriginalName()
               );
           return '/upload/page/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
       }

       return null;
   }

   public static function updateImage($request, $page): string
   {
       if ($request->hasFile('image')) {
           if (File::exists(public_path() . $page->image)) {
               File::delete(public_path() . $page->image);
           }

           self::checkDirectory();

           $request->file('image')
               ->move(
                   public_path() . '/upload/page/' . date('d-m-Y'),
                   $request->file('image')->getClientOriginalName()
               );
           return '/upload/page/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
       }

       return $page->image;
   }

   private static function checkDirectory(): bool
   {
       if (!File::exists(public_path() . '/upload/page/' . date('d-m-Y'))) {
           File::makeDirectory(public_path() . '/upload/page/' . date('d-m-Y'), $mode = 0777, true, true);
       }

       return true;
   }
}
