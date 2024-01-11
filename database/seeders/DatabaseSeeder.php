<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void {

        $this->categories();

        \App\Models\User::create([
            'name' => 'Garafa',
            'email' => 'admin@example.it',
            'password' => Hash::make('abcd1234'),
        ]);

        \App\Models\User::factory(10)->create();
        // \App\Models\Category::factory(10)->create();
        \App\Models\Ad::factory(10)->create();
    }

    public function categories() {

            \App\Models\Category::create([
                'name' => 'Auto',
            ]);

            \App\Models\Category::create([
                'name' => 'Moto e Scooter',
            ]);

            \App\Models\Category::create([
                'name' => 'Informatica',
            ]);

            \App\Models\Category::create([
                'name' => 'Telefonia',
            ]);

            \App\Models\Category::create([
                'name' => 'Console e Videogiochi',
            ]);

            \App\Models\Category::create([
                'name' => 'Arredamento',
            ]);

            \App\Models\Category::create([
                'name' => 'Giardino ed Esterni',
            ]);

            \App\Models\Category::create([
                'name' => 'Animali',
            ]);

            \App\Models\Category::create([
                'name' => 'Biciclette',
            ]);

            \App\Models\Category::create([
                'name' => 'Appartamenti',
            ]);

    }
        
    }


