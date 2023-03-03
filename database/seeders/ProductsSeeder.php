<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::create([
           'title' => 'koi b',
           'price' => '2000',
           'short_description' => 'different',
           'image' => 'etc' ,
        ]);
    }
}
