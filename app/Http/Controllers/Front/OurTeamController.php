<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Goal;
use App\Models\Team;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function ourTeam()
    {
        $goals = Goal::all();
        $teams = Team::orderBy('created_at', 'DESC')->get();
        return view('front.team', compact(
            'goals',
            'teams'
        ));
    }
}
