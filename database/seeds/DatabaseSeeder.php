<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

            Eloquent::unguard();
            $this->call('UserLoginSeeder');
            
         $this->call(StudentTableSeeder::class);
         $this->call(DoctorTableSeeder::class);
         $this->call(CourseTableSeeder::class);
         $this->call(PostTableSeeder::class);
         $this->call(QuizTabelSeeder::class);

    }
}
