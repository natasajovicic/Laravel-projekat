<?php

namespace Database\Seeders;

use App\Models\Roller;
use Illuminate\Database\Seeder;

class RollerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roller::truncate();
        Roller::create([
            "velicina"=>"39",
            "boja"=>"Bela",
            "materijal"=>"Koza",
            "stanje"=>"Polovno",
        ]);

        Roller::create([
            "velicina"=>"37",
            "boja"=>"Crna",
            "materijal"=>"Koza",
            "stanje"=>"Novo",
        ]);
    }
}
