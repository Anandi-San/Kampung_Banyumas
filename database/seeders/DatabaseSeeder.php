<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
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
       User::create([
            'name'=> 'Anandi',
            'email' => 'anandi@gmail.com',
            'password'=> bcrypt('12345678'),
            're_password' => '12345678',
       ]);
    }
}
