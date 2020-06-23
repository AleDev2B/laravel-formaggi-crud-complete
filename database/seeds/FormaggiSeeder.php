<?php

use App\Formaggio;
use Illuminate\Database\Seeder;

class FormaggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Formaggio::class,100) -> create();
    }
}
