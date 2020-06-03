<?php

use Illuminate\Database\Seeder;
 use App\Doctor;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Doctor::class , 2)->create();

        Doctor::create([
            'firstname'=>'lamia',
            'lastname'=>'sayed',
            'username'=>'lamiasayed',
            'card_id'=>'12',
            'email'=>'lamia@gmail.com',
            'password'=>Hash::make('doctor'),
            'year_id'=>'1',
            'course_id'=>'2',
            'remember_token'=> str_random(10)

        ]);
    }
}
