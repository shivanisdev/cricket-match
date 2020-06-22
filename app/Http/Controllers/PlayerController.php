<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(Team $team)
    {
        $players = Player::where('jersey_number', $team->id)->get();
        return view('player.index')->with([
            'players' => $players,
            'team' => $team
        ]);
    }
}
