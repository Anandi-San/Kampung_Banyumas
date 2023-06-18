<?php

namespace Database\Seeders;

use App\Models\Profil;
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

    Profil::where('id', 1)->update([
        'name' => 'Kampung Banyumas',
        'desc' => 'Kampung Banyumas Balikpapan',
        'cover' => 'uploads/banners/1686159578-IMG_4769.png'
    ]);
    }
}
