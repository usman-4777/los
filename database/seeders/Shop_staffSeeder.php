<?php

namespace Database\Seeders;

use App\Models\shop_staff;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Shop_staffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       shop_staff::create([
           'shop_id' => '1',
           'shop_name' => 'juice',
           'user_id' => '1',
           ]);
    }
}
