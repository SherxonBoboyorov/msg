<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function treatment()
    {
        $pages = Page::all();
        return view('front.treatment', compact(
            'pages'
        ));
    }
}
