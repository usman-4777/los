<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

//         \App\Models\User(10)->create();

        // \App\Models\User::factory(10)->create();
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            userseeder::class,
           ShopsSeeder::class,
            Shop_staffSeeder::class,
            ProductsSeeder::class,
            Shop_productsSeeder::class,


      ]);
    }
}
