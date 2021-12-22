<?php

namespace Database\Seeders;

use App\Models\EwalletPrice;
use Illuminate\Database\Seeder;

class EwalletPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EwalletPrice::create([
            'ewallet_id' => 1,
            'nominal' => '20.000',
            'harga' => '19.980'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 1,
            'nominal' => '25.000',
            'harga' => '24.980'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 1,
            'nominal' => '30.000',
            'harga' => '29.980'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 1,
            'nominal' => '50.000',
            'harga' => '49.980'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 1,
            'nominal' => '100.000',
            'harga' => '99.980'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 1,
            'nominal' => '150.000',
            'harga' => '149.980'
        ]);



        EwalletPrice::create([
            'ewallet_id' => 2,
            'nominal' => '20.000',
            'harga' => '21.000'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 2,
            'nominal' => '25.000',
            'harga' => '26.000'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 2,
            'nominal' => '30.000',
            'harga' => '31.000'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 2,
            'nominal' => '50.000',
            'harga' => '51.000'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 2,
            'nominal' => '100.000',
            'harga' => '101.000'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 2,
            'nominal' => '150.000',
            'harga' => '151.000'
        ]);



        EwalletPrice::create([
            'ewallet_id' => 3,
            'nominal' => '20.000',
            'harga' => '20.500'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 3,
            'nominal' => '25.000',
            'harga' => '25.500'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 3,
            'nominal' => '30.000',
            'harga' => '30.500'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 3,
            'nominal' => '50.000',
            'harga' => '50.500'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 3,
            'nominal' => '100.000',
            'harga' => '100.500'
        ]);
        EwalletPrice::create([
            'ewallet_id' => 3,
            'nominal' => '150.000',
            'harga' => '150.500'
        ]);
    }
}
