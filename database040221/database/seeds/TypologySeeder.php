<?php

use Illuminate\Database\Seeder;

use App\Typology;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Typology::class, 10) -> create();
    }
}
