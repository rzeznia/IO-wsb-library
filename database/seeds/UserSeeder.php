<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Marcin Rzeźnik";
        $user->email = "marcin.gd3@gmail.com";
        $user->password = '$2y$12$dz8lXQt1bDkbkUWzVlG6cuWwQtyzq.sGQhhofKPiLikjqHRRAg4lS';
        $user->save();
    }
}
