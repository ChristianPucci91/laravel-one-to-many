<?php

use Illuminate\Database\Seeder;

use App\Task;
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
        Factory(Typology::class, 10)
         -> create()
         -> each(function($typology) {

          $tasks = Task::inRandomOrder()
          -> limit(5) -> get();
          $typology -> tasks() -> attach($tasks);

         });
    }
}
