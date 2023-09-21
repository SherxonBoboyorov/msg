<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $companies = Company::all();

        return view('front.about', compact (
            'companies'
        ));
    }
}
