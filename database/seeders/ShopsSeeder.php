<?php

namespace Database\Seeders;
use App\Models\Shop;
use App\Models\Shops;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
           'shop_name' => 'iceland',
            'owner_name' => 'Abdul Waheed',
            'shop_image' => '',
            'opening_timing' => '9am',
            'closing_timing' => '5pm',
        ]);
    }
}
