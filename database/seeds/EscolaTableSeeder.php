<?php

use Illuminate\Database\Seeder;
use App\escola;

class EscolaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(escola::class, 10)->create();
    }
}
