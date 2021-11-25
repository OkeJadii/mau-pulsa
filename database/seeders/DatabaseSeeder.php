<?php

namespace Database\Seeders;

use App\Models\Provider;
use App\Models\User;
use App\Models\Pulsa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Raja Mahendra',
            'username' => 'raja',
            'email' => 'maderajam07@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Pulsa::create([
            'nominal' => '5.000',
            'harga' => '6.000'
        ]);
        Pulsa::create([
            'nominal' => '10.000',
            'harga' => '11.000'
        ]);
        Pulsa::create([
            'nominal' => '20.000',
            'harga' => '21.000'
        ]);
        Pulsa::create([
            'nominal' => '25.000',
            'harga' => '26.000'
        ]);
        Pulsa::create([
            'nominal' => '50.000',
            'harga' => '49.000'
        ]);
        Pulsa::create([
            'nominal' => '100.000',
            'harga' => '99.000'
        ]);

        Provider::create([
            'name' => 'Telkomsel'
        ]);
        Provider::create([
            'name' => 'XL'
        ]);
        Provider::create([
            'name' => 'Tri'
        ]);
        Provider::create([
            'name' => 'Indosat Oredoo'
        ]);
    }
}
