<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Shops;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'name' => 'admin',
           'email' => 'admin123@gmail.com',
           'password' => Hash::make('12345678'),
           'role' => 'admin',
           'address' => 'lahore',
           'cell_no' => '1234',
       ]);
    }
}
