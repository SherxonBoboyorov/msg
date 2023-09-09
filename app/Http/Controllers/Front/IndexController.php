<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateFile;
use App\Models\Callback;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homepage()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        $pages = Page::all();

        return view('front.index', compact(
            'sliders',
            'pages'
        ));
    }

    
    public function saveCallback(CreateFile $request)
    {
        $data = $request->all();

        $data['image'] = Callback::uploadImage($request);

        if (Callback::create($data)) {
           return back()->with('message', 'Your application has been successfully sent');
        }
         return back()->with('message', 'unable to sending');
    }
}
