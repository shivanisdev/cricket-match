<?php


namespace App\Library;

use App\Team;

class Fixer
{

    private $teams;
    public function __construct($teams)
    {
        $this->teams = $teams;
    }

    public function matches()
    {
        $team_matches = array();
        $compete = array();
        foreach($this->teams AS $team)
        {
            foreach($this->teams AS $team2)
            {
                if(($team->id != $team2->id) && !in_array($team2->id."_".$team->id,$team_matches)) {
                    $team_matches[] = $team->id."_".$team2->id;
                    $compete[] = [Team::find($team->id), Team::find($team2->id)];
                }
            }
        }
        shuffle($compete);
        return $compete;
    }



}
