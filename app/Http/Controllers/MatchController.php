<?php

namespace App\Http\Controllers;

use App\Library\Fixer;
use App\Team;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $fixer = new Fixer($teams);
        $matches = $fixer->matches();
        return view('match.index')->with([
            'matches' => $matches
        ]);
    }
}
