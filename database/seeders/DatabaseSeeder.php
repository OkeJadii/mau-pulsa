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
            'password' => bcrypt('12345'),
            'is_admin' => true
        ]);

        User::factory(3)->create();

        $this->call(ProviderSeeder::class);
        $this->call(PulsaSeeder::class);
    }
}
