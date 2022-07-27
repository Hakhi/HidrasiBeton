<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Measurement;

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
            'username' => 'hakhi',
            'email' => 'hakhiyektianto@gmail.com',
            'password' => bcrypt('pkmhakhi'),
            'name' => 'Hakhi Gya yektianto',
            'role' => 'admin'
        ]);

        User::create([
            'username' => 'pkm2022',
            'email' => 'pkm2022@gmail.com',
            'password' => bcrypt('pkm2022'),
            'name' => 'PKM 2022',
            'role' => 'user',
        ]);

        Measurement::create([
            'suhu' => '15',
            'panjang' => '6.5',
        ]);

        Measurement::create([
            'suhu' => '16',
            'panjang' => '6.8',
        ]);

        Measurement::create([
            'suhu' => '17',
            'panjang' => '7',
        ]);
        Measurement::create([
            'suhu' => '18',
            'panjang' => '7',
        ]);
    }
}
