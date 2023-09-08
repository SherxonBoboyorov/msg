<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function information()
    {
        $patients = Patient::all();
        return view('front.information', compact(
            'patients'
        ));
    }
}
