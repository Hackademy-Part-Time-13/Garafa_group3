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
        // \App\Models\Ad::factory(50)->create();
    }
    

    public function categories() {

            \App\Models\Category::create([
                'name_it' => 'Auto',
                'name_en' => 'car',
                'name_jp' => '車',
            ]);

            \App\Models\Category::create([
                'name_it' => 'Moto e Scooter',
                'name_en' => 'Motorcycles and Scooters',
                'name_jp' => 'オートバイとスクーター',

            ]);

            \App\Models\Category::create([
                'name_it' => 'Informatica',
                'name_en' => 'Informatics',
                'name_jp' => '情報学',


            ]);

            \App\Models\Category::create([
                'name_it' => 'Telefonia',
                'name_en' => 'Telephony',
                'name_jp' => '電話',

            ]);

            \App\Models\Category::create([
                'name_it' => 'Console e Videogiochi',
                'name_en' => 'Consoles and Video Games',
                'name_jp' => 'コンソールとビデオゲーム',
            ]);

            \App\Models\Category::create([
                'name_it' => 'Arredamento',
                'name_en' => 'Furniture',
                'name_jp' => '家具',
            ]);

            \App\Models\Category::create([
                'name_it' => 'Giardino ed Esterni',
                'name_en' => 'Garden and Outdoors',
                'name_jp' => '庭と屋外',
            ]);

            \App\Models\Category::create([
                'name_it' => 'Elettrodomestici',
                'name_en' => 'Home appliances',
                'name_jp' => '家電',
            ]);

            \App\Models\Category::create([
                'name_it' => 'Biciclette',
                'name_en' => 'Bicycles',
                'name_jp' => '自転車',
            ]);

            \App\Models\Category::create([
                'name_it' => 'Appartamenti',
                'name_en' => 'Apartments',
                'name_jp' => 'アパート',
            ]);

    }
        
}


