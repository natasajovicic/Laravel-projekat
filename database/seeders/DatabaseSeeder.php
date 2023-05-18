<?php

namespace Database\Seeders;
use App\Models\Roller;
use App\Models\User;
use App\Models\Rezervacija;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        //$this->call(RollerSeeder::class);
        //$this->call(RezervacijaSeeder::class);
        User::truncate();
        Roller::truncate();
        Rezervacija::truncate();
        User::factory(3)->create();
        $user = User::factory()->create();
        $roller = Roller::create([
            "velicina"=>"37",
            "boja"=>"Siva",
            "materijal"=>"Vestacki materijal",
            "stanje"=>"Novo",
            
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum_preuzimanja"=>"2021-03-02",
            "brDana"=>"3",
            "kontakt"=> "0631111111",
            "roller_id"=> "1",
            "user_id"=> $user->id,
        ]);
    }
}
