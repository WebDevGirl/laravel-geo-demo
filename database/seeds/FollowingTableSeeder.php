<?php

use Illuminate\Database\Seeder;

class FollowingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

        /* Get Users with Spaces */
    	$users = App\User::has('spaces')->get();
  		$user_ids = $users->pluck('id')->toArray();
 
    	foreach($users as $follower) {
            $following = $user_ids;

    		// Exclude Self
            if(($key = array_search($follower->id, $following)) !== false) {
                unset($following[$key]);
            }

       		// Follow
    		$follower->following()->attach($following);

    	}
    }
}
