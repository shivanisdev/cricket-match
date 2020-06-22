<?php

use Illuminate\Database\Seeder;

class SetUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = factory('App\Team',5)->create();
        $teams->each(function($team){
            factory('App\Player', 8)->create(['jersey_number' => $team->id]);
        });
    }
}
