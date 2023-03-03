<?php

namespace Database\Seeders;

use App\Models\shop_product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Shop_productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        shop_product::create([
           'product_id' => '123',
           'shop_id' => '1'
        ]);
    }
}
