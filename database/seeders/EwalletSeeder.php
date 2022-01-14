<?php

namespace Database\Seeders;

use App\Models\Ewallet;
use Illuminate\Database\Seeder;

class EwalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ewallet::create([
            'name' => 'OVO',
            'slug' => 'ovo'
        ]);
        Ewallet::create([
            'name' => 'GoPay',
            'slug' => 'gopay'
        ]);
        Ewallet::create([
            'name' => 'ShopeePay',
            'slug' => 'shopee-pay'
        ]);
    }
}
