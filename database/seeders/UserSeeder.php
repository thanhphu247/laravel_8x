<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
                DB::table('users')->insert([
                'name' => "user{$i}",
                'username' => "username{$i}",
                'email' => "user{$i}@gmail.com",
                'password' => Hash::make('12345678'),
            ]);
        }
        
    }
}
