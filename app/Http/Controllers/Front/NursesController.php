<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Nurse;
use Illuminate\Http\Request;

class NursesController extends Controller
{
    public function nurse()
    {
        $nurses = Nurse::all();
        return view('front.training', compact(
            'nurses'
        ));
    }
}
