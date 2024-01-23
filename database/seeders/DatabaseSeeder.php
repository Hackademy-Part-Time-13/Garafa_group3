<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run(): void {        

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@example.it',
            'password' => Hash::make('abcd1234'),
            'is_revisor' => true,
            'email_verified_at' => now()
        ]);

        \App\Models\User::create([
            'name' => 'Revisore',
            'email' => 'revisor@example.it',
            'password' => Hash::make('abcd1234'),
            'is_revisor' => true,
            'email_verified_at' => now()
        ]);

        \App\Models\User::factory(20)->create();        
        
        $this->categories();
        $this->call(AdsSeeder::class);
        \App\Models\Ad::factory(30)->create();
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
                'name' => 'Elettrodomestici',
            ]);

            \App\Models\Category::create([
                'name' => 'Biciclette',
            ]);

            \App\Models\Category::create([
                'name' => 'Appartamenti',
            ]);

    }
        
}


