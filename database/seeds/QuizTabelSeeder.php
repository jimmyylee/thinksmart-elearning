<?php

use Illuminate\Database\Seeder;

class QuizTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Quiz::class , 10)->create();
    }
}
