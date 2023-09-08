<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function doctor()
    {
        $doctors = Doctor::all();
        return view('front.trainings', compact(
            'doctors'
        ));
    }
}
