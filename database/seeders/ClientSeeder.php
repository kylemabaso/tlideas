<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name' => 'TL Ideas',
            'email' => 'info@tlideas.app'
        ]);
        Client::create([
            'name' => 'Greenside',
            'email' => 'dolly.mthethwa@thungela.com'
        ]);
        Client::create([
            'name' => 'Mafube',
            'email' => 'ingrid.sithole@thungela.com'
        ]);
        Client::create([
            'name' => 'Goedehoop',
            'email' => 'willencha.snyders@thungela.com'
        ]);
        Client::create([
            'name' => 'Goedehoop Central Workshop',
            'email' => 'willencha.snyders@thungela.com'
        ]);
        Client::create([
            'name' => 'Waterplant',
            'email' => 'catharina.human@thungela.com'
        ]);
        Client::create([
            'name' => 'Zibulo',
            'email' => 'melchior.joseph@thungela.com'
        ]);
        Client::create([
            'name' => 'Tau Mining',
            'email' => 'melchior.joseph@thungela.com'
        ]);
        Client::create([
            'name' => 'WBHO Construction',
            'email' => 'melchior.joseph@thungela.com'
        ]);
        Client::create([
            'name' => 'Exxaro Matla Coal',
            'email' => 'edward.mbedzi@exxaro.com'
        ]);
        Client::create([
            'name' => 'Concor Lubocon',
            'email' => 'zimasa.nodangala@concor.co.za'
        ]);
    }
}
