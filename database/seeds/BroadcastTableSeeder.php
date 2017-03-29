<?php

use Illuminate\Database\Seeder;

class BroadcastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* Grab Users that have spaces */
        $users = App\User::has('spaces')->with('spaces')->get();

        /* Broadcast each space they own 5 times */
       	foreach($users as $user) {
       		foreach($user->spaces as $space) {		
       			for($i=0;$i<5;$i++) {
       				factory(App\Broadcast::class)->create([
			    		'user_id' => $user->id,
			        	'space_id' => $space->id,
			        ]);
       			}
       		}

       	}
    }
}
