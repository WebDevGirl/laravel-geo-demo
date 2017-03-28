<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\User::class)->create([
    		'name' => 'Jane Smith',
        	'email' => 'jane@test.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'John Smith',
            'email' => 'john@test.com',
        ]);

        factory(App\User::class, 15)->create();
    }
}
