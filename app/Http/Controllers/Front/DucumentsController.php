<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Document;
use Illuminate\Http\Request;

class DucumentsController extends Controller
{
    public function documents($id)
    {
        $contents = Content::all();

        $categories = Category::all();

        $documents = Document::where('category_id', $id)->orderBy('created_at', 'DESC')->get();

        return view('front.documents', compact(
            'contents',
            'categories',
            'documents'
        ));
    }
}
