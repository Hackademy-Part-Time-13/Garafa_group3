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
        
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Garafa',
            'email' => 'admin@example.it',
            'password' => Hash::make('abcd1234'),
            'is_revisor' => true,
        ]);

        $this->categories();
        $this->ads();
        
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

    public function ads() {

        \App\Models\Ad::create([
            'title' => 'Iphone 12',
            'description' => 'Vendo Iphone 12 ottime condizioni, corredato di AirPods',
            'price' => '299.00',
            'category_id' => '4',
            'user_id' => '2',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Mac',
            'description' => 'Vendo Mac funzionante ma con schermo rotto',
            'price' => '699.00',
            'category_id' => '3',
            'user_id' => '2',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'ps4 usata',
            'description' => 'Vendo ps4 perfettamente funzionante, ventola interna pulita, cavo + 2 controller inclusi. Compresi nel prezzo 19 giochi originali',
            'price' => '150.00',
            'category_id' => '5',
            'user_id' => '6',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Lavatrice Indesit',
            'description' => 'Vendo lavatrice nuova mai usata perchè troppo grande per il mio bagno',
            'price' => '150.00',
            'category_id' => '5',
            'user_id' => '6',
            'is_accepted' => '0',
        ]);

    }
        
    }


