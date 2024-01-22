<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Ad::create([
            'title' => 'Iphone 12',
            'description' => 'Vendo Iphone 12 ottime condizioni, corredato di AirPods',
            'price' => '299.00',
            'category_id' => '4',
            'user_id' => '2',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'MACBOOK PRO 15”',
            'description' => 'Modello 2015 MacBook Pro 15" Retina a 2,5GHz 2,5 GHz – Core i7 16 GB di RAM SSD da 512GB Doppia scheda grafica Grafica Intel Iris Pro AMD Radeon R9 M370X con 2GB di memoria GDDR5 e commutazione grafica. Scatola ed accessori inclusi. Contatti per maggiori info.

            No perditempo o truffe!',
            'price' => '550',
            'category_id' => '3',
            'user_id' => '20',
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

        \App\Models\Ad::create([
            'title' => 'Jeep grand cherokee',
            'description' => 'Unico proprietario tagliandi certificati',
            'price' => '27900',
            'category_id' => '1',
            'user_id' => '9',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'FIAT Punto 2ª serie - 2001',
            'description' => 'Vendesi Fiat punto grigio metallizzato benzina Gpl, rifatta recentemente guarnizione della testata cinghia distribuzione e frizione, carrozzeria ed interni impeccabili, non ha un graffio, adatta neopatentati, 5 porte, auto che va veramente bene',
            'price' => '4500',
            'category_id' => '1',
            'user_id' => '3',
            'is_accepted' => '0',
        ]);

        \App\Models\Ad::create([
            'title' => 'barbecue a gas con pietra lavica',
            'description' => 'come nuovo inutilizzato pochissime volte , pietre ancora quasi intatte. in aggiunta al barbecue vi sono anche un sacco di pietra lavica nuovo ancora imballato. compreso di telo di copertura e regolatore di pressione del gas. vendesi causa trasloco

            Dimensioni articolo: LxPxA46 x 125 x 103 cm',
            'price' => '190',
            'category_id' => '7',
            'user_id' => '6',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'motosega jonsered 625ii',
            'description' => 'vendo motosega jonsered 625ii buone condizioni causa inutilizzo
            contattare tramite contatto telefonico',
            'price' => '300',
            'category_id' => '7',
            'user_id' => '10',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Ciclette pieghevole',
            'description' => 'Vendo ciclette nuova, usata solo per prova. Pieghevole, con schienale, in condizioni eccellenti, comodissima, come appena uscita dalla scatola. Prezzo trattabile. Ritiro a Flumini di Quartu',
            'price' => '200',
            'category_id' => '9',
            'user_id' => '10',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Bici da corsa Vitus',
            'description' => 'Vendo x conto dello zio, bici anni \'90 al tempo di alta gamma, telaio tubi alluminio sezione variabile, perfettamente conservata, funzionante, revisionata, coppertoni e camere d’aria nuove. misura 55cm da sella a manubrio, per altezza 175-185cm. Insieme guarnitura 52-48, pedivelle shimano e pedali look originali. Volendo a parte disponibile rullo per allenamento in casa',
            'price' => '650',
            'category_id' => '9',
            'user_id' => '15',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'BICI DA CORSA WILIER FILANTE SLR 2023',
            'description' => 'Bicicletta da corsa WILIER FILANTE SLR, NUOVA

            Telaio in carbonio
            Taglia S (adatta a persone alte da 1,65m a 1,72m circa)
            Gruppo Shimano Ultegra elettronico Di2
            Pacco pignoni Shimano Ultegra 11-30t 12v
            Freni a disco con dischi da 160mm all\' anteriore e 140mm al posteriore
            Guarnitura shimano Ultegra con pedivelle da 170mm e con corone da 52-36t
            Cambio shimano ultegra 12v Di2
            Manubrio integrato WILIER largo 40c/c in carbonio con lunghezza attacco manubrio da 100mm
            Reggisella in carbonio Wilier
            Sella selle Italia FLITE
            Ruote Wilier per copertoncini in carbonio con profilo da 42mm
            Copertoni Vittoria CORSA Graphene 2.0 da 700x28c
            Peso 7.3kg circa senza pedali
            
            Prezzo di listino ¤9400

            Il prezzo non è trattabile e non si effettuano permute!
            Possibilità di finanziamento a tassi super agevolati!!!
            Possibilità di spedizione con prezzo da concordare!
            Non si vendono componenti separati!',

            'price' => '7990',
            'category_id' => '9',
            'user_id' => '12',
            'is_accepted' => '1',
        ]);
        
        \App\Models\Ad::create([
            'title' => 'Casco bicicletta con visiera magnetica',
            'description' => 'Casco bicicletta unisex colore cangiante viola/blu con visiera magnetica marca Rockbros

            Ultraleggero, aerodinamico, antisudore, ventilazione, visiera magnetica rimovibile intescabiabile, per il sole e per la scarsa visibilità, protegge gli occhi dal vento.
            Cinturino regolabile dietro la testa e al mento, cuscinetti morbidi per il mento e la testa.
            
            Dimensioni circa 27x17x21cm
            Circonferenza della testa dai 57 ai 62cm
            Peso 253g senza visiera, 283g con visiera',
            'price' => '35',
            'category_id' => '9',
            'user_id' => '15',
            'is_accepted' => '1',
        ]);
      
        \App\Models\Ad::create([
            'title' => 'Macbook Air 2018',
            'description' => 'tenuto benissimo, non ha segni evidenti di usura. funziona perfettamente. vendo perchè faccio tutto con tablet e telefono.
            provvisto di caricatore originale + custodia + adattatore per attaccare al pc usb, hdmi visto che il pc ha solo porte usb-c.
            non provvisto di scatola originale.',
            'price' => '550',
            'category_id' => '3',
            'user_id' => '17',
            'is_accepted' => '1',
        ]);
        
        \App\Models\Ad::create([
            'title' => 'KAWASAKI NINJA 636 ZX-6R',
            'description' => 'Kawasaki Ninja 636 ZX-6R anno 2004 km 66.000
            Accessori:
            Terminale Arrow
            Contamarce
            Cupolino
            Faro led
            Frecce
            
            Si consegna con distribuzione fatta
            
            GARANZIA 12 MESI (estendibile max 36 mesi)
            FINANZIAMENTI PERSONALIZZATI
            SPEDIZIONI IN TUTTA ITALIA
            PERMUTE (ANCHE SUPERIORI).',
            'price' => '3990',
            'category_id' => '2',
            'user_id' => '19',
            'is_accepted' => '1',
        ]);
        
        \App\Models\Ad::create([
            'title' => 'HONDA INTEGRA 750 DCT',
            'description' => 'HONDA INTEGRA 750 DCT
            ANNO : 2014
            KM : 60.000
            TAGLIANDATA
            GOMMATA
            REVISIONATA
            Classe Ambientale : EURO 3
            GARANZIA INCLUSA
            RICHIESTE DI FINANZIAMENTO IN SEDE .
            
            POSSIBILTà DI CONSEGNA IN TUTTA ITALIA !',
            'price' => '4890',
            'category_id' => '2',
            'user_id' => '10',
            'is_accepted' => '1',
        ]);
        
        \App\Models\Ad::create([
            'title' => 'Vespa cosa 200 nuova',
            'description' => 'Totalmente restaurata,rarissima,usati pezzi originali piaggio,foto restauro completo.avviamento elettrico,starter automatico,miscelatore.veloce,comoda,stupenda,monta il raro gruppo cilindro,pistone,GILARDONI DI SERIE (1994 ANNO),FRA POCO DIVENTA DI INTERESSE STORICO.IN RODAGGIO!!!!',
            'price' => '4000',
            'category_id' => '2',
            'user_id' => '8',
            'is_accepted' => '1',
        ]);
    }
}
