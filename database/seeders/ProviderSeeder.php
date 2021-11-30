<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create([
            'name' => 'Telkomsel',
            'slug' => 'telkomsel'
        ]);
        Provider::create([
            'name' => 'XL',
            'slug' => 'xl'
        ]);
        Provider::create([
            'name' => 'Tri',
            'slug' => 'tri'
        ]);
        Provider::create([
            'name' => 'Indosat Ooredoo',
            'slug' => 'indosat-ooredoo'
        ]);
        Provider::create([
            'name' => 'Axis',
            'slug' => 'axis'
        ]);
        Provider::create([
            'name' => 'Smartfren',
            'slug' => 'smartfren'
        ]);
    }
}
