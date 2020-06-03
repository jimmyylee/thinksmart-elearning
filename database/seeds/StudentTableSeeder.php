<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class , 2)->create();

        Student::create([
            'firstname'=>'abdulwahab',
            'lastname'=>'moahemd',
            'username'=>'abdulwasayedhab',
            'card_id'=>'110',
            'email'=>'tests@gmail.com',
            'password'=>Hash::make('hello'),
            'year_id'=>'1',
            'course_id'=>'2',
            'remember_token'=> str_random(10)

        ]);
    }
}
