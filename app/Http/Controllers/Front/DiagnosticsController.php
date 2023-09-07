<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Diagnostic;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiagnosticsController extends Controller
{
    public function diagnostics()
    {
        $diseases = Disease::all();
        $diagnostics = Diagnostic::orderBy('created_at', 'DESC')->get();

        return view('front.diagnostics', compact(
            'diseases',
            'diagnostics'
        ));
    }
}
