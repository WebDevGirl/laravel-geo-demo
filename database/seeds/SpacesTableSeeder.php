<?php

use Illuminate\Database\Seeder;

class SpacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $geofences[] = [
            'title' => 'The Title',
            'type' => 'polygon',
            'geodata' => [
                ['lat' => 34.2424235, 'long' => -118.5290969],
                ['lat' => 34.2422782, 'long' =>  -118.5290969],
                ['lat' => 34.2422771, 'long' => -118.5288421],
                ['lat' => 34.24242459999999, 'long' => -118.52884680000001],
                ['lat' => 34.2424235, 'long' => -118.5290969],
            ]
        ];

        $geofences[] = [
            'title' => 'The Title 2',
            'type' => 'polygon',
            'geodata' => [
                ['lat' => 34.2404085, 'long' => -118.530035],
                ['lat' => 34.2399007, 'long' => -118.5300323],
                ['lat' => 34.2399029, 'long' => -118.5297588],
                ['lat' => 34.2398652, 'long' => -118.5297588],
                ['lat' => 34.239863, 'long' => -118.5298902],
                ['lat' => 34.2396368, 'long' => -118.5298929],
                ['lat' => 34.2396435, 'long' => -118.5294449],
                ['lat' => 34.239557, 'long' => -118.5295013],
                ['lat' => 34.2394994, 'long' => -118.5294047],
                ['lat' => 34.2394971, 'long' => -118.52925990000001],
                ['lat' => 34.2395504, 'long' => -118.5291392],
                ['lat' => 34.2396501, 'long' => -118.5291928],
                ['lat' => 34.23964790000001, 'long' => -118.52875560000001],
                ['lat' => 34.23987410000001, 'long' => -118.52876099999999],
                ['lat' => 34.2398719, 'long' => -118.528879],
                ['lat' => 34.2399074, 'long' => -118.5288817],
                ['lat' => 34.2399074, 'long' => -118.52862420000001],
                ['lat' => 34.240399599999996, 'long' => -118.52861610000001],
                ['lat' => 34.2404085, 'long' =>  -118.530035], 
            ]
        ];

        $geofences[] = [
            'title' => 'The Title 3',
            'type' => 'polygon',
            'geodata' => [
                ['lat' => 34.240774300000005, 'long' => -118.5310596],
                ['lat' => 34.2390226, 'long' => -118.5309792],
                ['lat' => 34.2390359, 'long' => -118.527444],
                ['lat' => 34.2407788, 'long' => -118.52793750000001],
                ['lat' => 34.240774300000005, 'long' => -118.5310596], 
            ]
        ];

        $geofences[] = [
            'title' => 'The Title 4',
            'type' => 'polygon',
            'geodata' => [
                ['lat' => 34.250774300000005, 'long' => -118.5410596],
                ['lat' => 34.2590226, 'long' => -118.5409792],
                ['lat' => 34.2590359, 'long' => -118.537444],
                ['lat' => 34.2507788, 'long' => -118.54793750000001],
                ['lat' => 34.250774300000005, 'long' => -118.5410596],  
            ]
        ];

        // Grab jane user to bind all geofences to
        $user = App\User::whereEmail('jane@test.com')->first();

        // Create Geofences w/ Markers
        foreach($geofences as $index=>$geofence) {
            $space = factory(App\Space::class)->create([
                'user_id' => $user->id,
                'title' => $geofence['title'],
                'type' => $geofence['type'],
            ]);

            $space->generateGeodataAndMarkers($geofence['geodata']);
        }

    }
}
