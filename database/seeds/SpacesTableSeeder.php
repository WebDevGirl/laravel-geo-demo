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
            'title' => 'LA Stage Alliance',
            'type' => 'polygon',
            'geodata' => [
                ['long' => '-118.2662934', 'lat' => '34.1333872'],
                ['long' => '-118.2661968', 'lat' => '34.1328899'],
                ['long' => '-118.2660574', 'lat' => '34.1329165'],
                ['long' => '-118.2660037', 'lat' => '34.1326324'],
                ['long' => '-118.2657623', 'lat' => '34.1326634'],
                ['long' => ' -118.265928', 'lat' => '34.133405'],
                ['long' => '-118.2662934', 'lat' => '34.1333872'],
            ]
        ];

        $geofences[] = [
            'title' => 'Everest',
            'type' => 'polygon',
            'geodata' => [
                ['long' => '-118.2580778', 'lat' => '34.1496949'],
                ['long' => '-118.2584399', 'lat' => '34.1496794'],
                ['long' => '-118.2584372', 'lat' => '34.1495528'],
                ['long' => '-118.2580858', 'lat' => '34.1495573'],
                ['long' => '-118.2580778', 'lat' => '34.1496949'],
            ]
        ];

        $geofences[] = [
            'title' => 'Glendale Galleria',
            'type' => 'polygon',
            'geodata' => [
                ['long' => '-118.2551622', 'lat' => '34.1452686'],
                ['long' => '-118.2551837', 'lat' => '34.1462631'],
                ['long' => '-118.2557416', 'lat' => '34.1461921'],
                ['long' => '-118.2563424', 'lat' => '34.1462809'],
                ['long' => '-118.2572865', 'lat' => '34.1466893'],
                ['long' => ' -118.257823', 'lat' => '34.1467604'],
                ['long' => '-118.2607412', 'lat' => '34.1467959'],
                ['long' => '-118.2608485', 'lat' => '34.1426403'],
                ['long' => ' -118.257801', 'lat' => '34.142587'],
                ['long' => '-118.2577801', 'lat' => '34.1451976'],
                ['long' => '-118.2551622', 'lat' => '34.1452686'],
            ]
        ];

        $geofences[] = [
            'title' => 'Americana at Brand',
            'type' => 'polygon',
            'geodata' => [
                ['long' => '-118.2551837', 'lat' => '34.1426758'],
                ['long' => '-118.2551622', 'lat' => '34.1452686'],
                ['long' => '-118.2577801', 'lat' => '34.1451976'],
                ['long' => ' -118.257801', 'lat' => '34.142587'],
                ['long' => '-118.2551837', 'lat' => '34.1426758'], 
            ]
        ];

        $geofences[] = [
            'title' => 'CSUN META+Lab',
            'type' => 'polygon',
            'geodata' => [
                ['long' => '-118.5364281', 'lat' => '34.2416579'],
                ['long' => '-118.5364267', 'lat' => '34.2415415'],
                ['long' => '-118.5363007', 'lat' => '34.2415382'],
                ['long' => '-118.536303', 'lat' => '34.241659'],
                ['long' => '-118.5364281', 'lat' => '34.2416579'],
            ]
        ];

        $geofences[] = [
            'title' => 'CSUN',
            'type' => 'polygon',
            'geodata' => [
                ['long' => '-118.5339189', 'lat' => '34.2445526'],
                ['long' => '-118.5339618', 'lat' => '34.2355235'],
                ['long' => '-118.5273528', 'lat' => '34.2355235'],
                ['long' => '-118.5231686', 'lat' => '34.2357719'],
                ['long' => '-118.5233188', 'lat' => '34.2425127'],
                ['long' => '-118.5273099', 'lat' => '34.2426723'],
                ['long' => '-118.5273528', 'lat' => '34.2446058'],
                ['long' => '-118.5339189', 'lat' => '34.2445526'], 
            ]
        ];

        $geofences[] = [
            'title' => 'Jacaranda Hall',
            'type' => 'polygon',
            'geodata' => [
                ['long' => '-118.52784', 'lat' => '34.242087'],
                ['long' => '-118.5287261', 'lat' => '34.2420781'],
                ['long' => '-118.5287261', 'lat' => '34.2419406'],
                ['long' => '-118.5289997', 'lat' => '34.2419451'],
                ['long' => '-118.5291713', 'lat' => '34.2418874'],
                ['long' => '-118.529343', 'lat' => '34.2417544'],
                ['long' => '-118.5294288', 'lat' => '34.2416169'],
                ['long' => '-118.5294718', 'lat' => '34.2414617'],
                ['long' => '-118.5294825', 'lat' => '34.2410227'],
                ['long' => '-118.527841', 'lat' => '34.2410182'],
                ['long' => '-118.52784', 'lat' => '34.242087'],
            ]
        ];

        $geofences[] = [
            'title' => 'Oviatt Library',
            'type' => 'polygon',
            'geodata' => [
                ['long' => '-118.5300136', 'lat' => '34.2403841'],
                ['long' => '-118.5300189', 'lat' => '34.2399229'],
                ['long' => ' -118.529756', 'lat' => '34.239914'],
                ['long' => '-118.5297453', 'lat' => '34.2397721'],
                ['long' => '-118.528924', 'lat' => '34.239781'],
                ['long' => '-118.5289031', 'lat' => '34.2399096'],
                ['long' => '-118.5286134', 'lat' => '34.2399007'],
                ['long' => '-118.5286295', 'lat' => '34.2403974'],
                ['long' => '-118.5300136', 'lat' => '34.2403841'],
            ]
        ];

        $geofences[] = [
            'title' => 'Disney Land',
            'type' => 'polygon',
            'geodata' => [
                ['long' => '-117.9282331', 'lat' => '33.8035069'],
                ['long' => '-117.915415', 'lat' => '33.8034'],
                ['long' => '-117.9154873', 'lat' => '33.8151315'],
                ['long' => '-117.9186201', 'lat' => '33.8179126'],
                ['long' => '-117.928319', 'lat' => '33.8178413'],
                ['long' => '-117.9282331', 'lat' => '33.8035069'],
            ]
        ];

        // Grab jane user to bind all geofences to
        $user_ids = App\User::whereIn('email',['jane@test.com', 'john@test.com'])->pluck('id')->toArray();

        // Create Geofences w/ Markers
        foreach($geofences as $index=>$geofence) {
            $space = factory(App\Space::class)->create([
                'user_id' => $user_ids[array_rand($user_ids)],
                'title' => $geofence['title'],
                'type' => $geofence['type'],
            ]);

            //  Generate geodata and pointdata
            $space->generateGeodataAndMarkers($geofence['geodata']);
        }

    }
}
