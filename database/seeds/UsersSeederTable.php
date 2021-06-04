<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new User();
        $newUser->genre_id = 1;
        $newUser->name = "Franco";
        $newUser->email = "franco@gmail.com";
        $newUser->password = Hash::make('543210');
        $newUser->save();
    }
}
