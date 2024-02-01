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

        \App\Models\Ad::create([
            'title' => 'XVZ LED Albero Bonsai Lampada da Tavolo',
            'description' => '36 LED Luce Notturna a Batteria e USB per decorazioni Natalizie, Pasquali, Arredo Casa, Soggiorno - Albero di Perle',
            'price' => '18',
            'category_id' => '6',
            'user_id' => '7',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Divano',
            'description' => 'Divano in pelle beige 4 posti con penisola',
            'price' => '650',
            'category_id' => '6',
            'user_id' => '17',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Tappeti persiani pregiati',
            'description' => '
            Vendo 4 tappeti persiani di pregio come da foto. Le misure sono:
            190x128
            180x100
            130x93
            200x100
            Il prezzo per vendita singola è di € 300 cad. .
            Il prezzo può essere trattabile per acquisto in blocco.
            A richiesta invio ulteriori foto.',
            'price' => '300',
            'category_id' => '6',
            'user_id' => '8',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'LAVATRICE',
            'description' => 'Vendo lavatrice AEG NUOVA ancora imballata.',
            'price' => '1000',
            'category_id' => '8',
            'user_id' => '1',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'asciugacapelli professionale 5 in 1',
            'description' => 'Descrizione prodotto L\'asciugacapelli professionale offre un flusso d\'aria forte per asciugare rapidamente anche i capelli mossi e spessi in meno tempo
            . E\' un potente phon dotato di 5 accessori che si collegano attraverso un attacco magnetico. La particolare testa aperta cilindrica consente di concentrare il flusso d\'aria in modo preciso e di asciugare i capelli in modo rapido e preciso, riducendo al minimo i danni',
            'price' => '38',
            'category_id' => '8',
            'user_id' => '5',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Climatizzatore portatile',
            'description' => 'Vendo climatizzatore nuovo di pacca, mai usato. Era in esposizione presso il rivemditore e l’ho portato a casa. Non l’ho mai nemmeno acceso. Pagato 479,00€ appena 6 (sei) mesi fa. Affarissimo!!!',
            'price' => '290',
            'category_id' => '8',
            'user_id' => '19',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Appartamento con garage e deposito a Fiumefreddo',
            'description' => 'Codice immobile 638

            APPARTAMENTO 3 VANI CON GARAGE 35MQ E DEPOSITO DI 220 MQ A FIUMEFREDDO
            
            La Diamond Immobiliare propone in vendita un appartamento di 80 mq, posto al primo piano senza ascensore , composto da : ingresso su corridoio centrale , piccolo soggiorno , camera da letto , cameretta , bagno , cucina , oltre a due balconi , di cui uno in parte verandato ; oltre all\'appartamento troviamo sia un garage di 35 mq che un deposito/magazzino/autorimessa di ca 220 mq .
            
            La richiesta è di 159.000
            ',
            'price' => '159000',
            'category_id' => '10',
            'user_id' => '3',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Appartanvilla con giardino Fondachello di Mascali',
            'description' => 'APPARTANVILLA CON GIARDINO A FONDACHELLO DI MASCALI

            la Diamond Immobiliare propone in vendita a Mascali , nella frazione di Fondachello un\'appartanvilla di ca 80 mq posto al piano terra , facente parte di un complesso abitativo di solo 4 unità; l\'immobile è composto da due camere da letto , un soggiorno -cucina interamente verandato ed un bagno con box doccia. Ad esclusiva pertinenza troviamo un meraviglioso giardino di 200 mq ca , curato , con impianto a pioggia ; inoltre ancora , é presente anche un posto auto coperto. Distante solo pochi passi dal lungomare di Fonachello e di conseguenza alla spiaggia più vicina .
            
            La richiesta é di 150.000 €',
            'price' => '150000',
            'category_id' => '10',
            'user_id' => '11',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Palazzetto con locale a Fiumefreddo di Sicilia',
            'description' => 'PALAZZETTO CON LOCALE COMMERCIALE ED ABITAZIONE A FIUMEFREDDO DI SICILIA

            La Diamond immobiliare propone in vendita a Fiumefreddo di Sicilia un palazzetto distribuito su 3 livelli e composto da un piano terra di ca 60 mq destinato a locale commerciale ( c1) , un piano primo di civile abitazione , sempre di ca 60 mq , con accesso sia interno che esterno indipendente dalla parte retrostante dell\'immobile , infine troviamo una terrazza di ca 35 mq che si affaccia direttamente sulla piazza principale di Fiumefreddo di Sicilia.Collocato in zona centralissima , prospiciente la strada nazionale che taglia l\'intero paese favorendo un grande passaggio veicolare e pedonale .Ottimo per coloro che vogliono creare un\'attività commerciale ed una piccola abitazione o un ufficio nello stesso luogo .
            
            La richiesta è di 75.000',
            'price' => '75000',
            'category_id' => '10',
            'user_id' => '14',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'FIAT PANDA 1.2 - NEOPATENTATI - POCHI KM',
            'description' =>'Auto tenuta benissimo,. in ottime condizioni meccaniche , interni e carrozzeria.',
            
            'price' => '7500',
            'category_id' => '1',
            'user_id' => '16',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Fiat 500 1.3 Multijet 16V 95 CV Lounge',
            'description' => 'Fiat 500 1.3 multijet 95cv  anno 2015 140000km

            Auto in ottime condizioni generali,
            Interni in tessuto misto pelle, chiusura centralizzata e doppie chiavi, comandi al volante,bluetooth, navigatore, fendinebbia, aria condizionata,computer di bordo,specchietti elettrici,Cerchi in lega da 16 con gomme pari al 80%
            Appena eseguito tagliando completo e controllo generale 
            
            ',
            'price' => '7900',
            'category_id' => '1',
            'user_id' => '7',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Ktm 890 adventure 2022',
            'description' => 'vendo ktm 890 l 2022
            condizioni moto pari a nuovo
            tutti i tagliandi eseguiti presso ktm
            in garanzia fino a marzo',
            'price' => '11500',
            'category_id' => '2',
            'user_id' => '4',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'KTM 125 Duke - 2018',
            'description' => 'Vendo la KTM DUKE 125 del 2018 in buone condizioni causa inutilizzo (mi sono comprando una macchina). Come da foto, ha 13000 km. La marmita è una Akrapovic con db killer smontato (sono in possesso sia del db killer che della marmita originale mai usata). La revisione è stata fatta di recente ed è valida fino a marzo 2025. Prezzo trattabile',
            'price' => '3500',
            'category_id' => '2',
            'user_id' => '20',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Monitor gaming MSI optix g24 series',
            'description' => 'Vendo monitor gaming come nuovo',
            'price' => '100',
            'category_id' => '3',
            'user_id' => '12',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'HP 640 G2 NOTEBOOK 14" 16GB RAM 512GB SSD',
            'description' => 'Come da titolo vendo Portatile Usato Poco Hp 640 Notebook 16Gb di ram SSD NVM
            (alta velocità di trasferimento dati) perfettamente funzionante.
            - Risoluzione schermo 1366 x 768 pixel ?720p HD Ready Pixel
            - Processore Core Intel I5 2,5 GHZ numero processori 2
            - Ram 16Gb DDR4 SDRAM
            - Scheda Grafica ?Intel HD Graphics 520
            - Porte USB 3.0 N°3
            - Sistema operativo Win 10',
            'price' => '350',
            'category_id' => '3',
            'user_id' => '13',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Iphone 14 pro max 256 gb',
            'description' => 'Vendo iphone 14 pro max 256 gb, in perfette condizioni, nessun graffio, stato batteria 93%.
            Cambio per passaggio ad altro modello.',
            'price' => '850',
            'category_id' => '4',
            'user_id' => '6',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Samsung Galaxy s23 ultra 512gb',
            'description' => 'Vengo Samsung Galaxy s23 Ultra 512gb con regolare fattura di acquisto del 30 Aprile 2023
            incluso nella vendita 6 cover di cui una originale samsung e una tetra Force della cellularline
            compreso di scontrino mediaworld per cambiare la pellicola ogni volta che si vuole!
            nessun segno di usura o graffio
            Praticamente perfetto.',
            'price' => '800',
            'category_id' => '4',
            'user_id' => '14',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'playstation 5 con FC24',
            'description' => 'Vendo console ps5 825 gb come nuova con 2 joistyk e gioco FC24',
            'price' => '450',
            'category_id' => '5',
            'user_id' => '9',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Super Smash Bros Ultimate - Nintendo Switch',
            'description' => 'Gioco in ottime condizioni per Nintendo Switch
            Custodia in buone condizioni',
            'price' => '35',
            'category_id' => '5',
            'user_id' => '8',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'Forno legna gas',
            'description' => 'Forni sciumy produce forni professionali per pizze dal 1960
            Ogni forno per pizza è realizzato in mattoni refrattari di alta qualità interamente a mano da abili artigiani qualificati. Forno per pizza con piano rotante in pietra lavica o piano fisso. Forni elettrici per pizza o forni a legna. Che sia un ristornate, una pizzeria o casa tua, Forni sciumy offre un’ampia gamma di possibilità per arrivare a trovare il giusto forno per pizza professionale su misura per te. FORNO ELETTRICO Rotante
            Il forno elettrico sciumy è la soluzione ideale per chi desidera ottenere risultati di cottura eccellenti con una tecnologia innovativa.Realizzato con materiali di qualità, il forno è dotato di un’esclusiva tecnologia che permette di gestire in maniera ottimale il calore, garantendo una cottura perfetta delle pizze. Se vuoi acquistare un forno professionale per pizza ad alimentazione elettrica, scopri la gamma di forni per pizzerie e scrivici per un preventivo. Perché scegliere forni sciumy',
            'price' => '1000',
            'category_id' => '7',
            'user_id' => '5',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'serra da giardino',
            'description' => 'Serra da giardino 16,9m² verde in policarbonato',
            'price' => '800',
            'category_id' => '7',
            'user_id' => '13',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'mtb trek procaliber t.M',
            'description' => 'mtb trek procaliber t. m',
            'price' => '1600',
            'category_id' => '9',
            'user_id' => '16',
            'is_accepted' => '1',
        ]);

        \App\Models\Ad::create([
            'title' => 'bici rockrider st530S',
            'description' => 'cambio 9 rapporti
            doppio freno a disco idraulico
            sospensioni regolabili',
            'price' => '650',
            'category_id' => '9',
            'user_id' => '14',
            'is_accepted' => '1',
        ]);
    }
}
