<?php

use Illuminate\Database\Seeder;
use App\User;

class UserLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'abdulwahab',
            'email'=>'test@gmail.com',
            'password'=>Hash::make('hello'),
            'remember_token'=> str_random(10)

        ]);
    }
}
