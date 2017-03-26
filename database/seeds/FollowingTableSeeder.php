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

    	$users = App\User::all();
  		$user_ids = $users->pluck('id')->toArray();
 
    	foreach($users as $follower) {
    		// Generate Users to Follow
    		$following = $faker->randomElements($user_ids, $count=rand(2,9));

    		// Exclude Self
    		$following = array_except($following, [$follower->id]);

    		// Follow
    		$follower->following()->attach($following);

    	}
    }
}
