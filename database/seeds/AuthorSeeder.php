<?php

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Author();
        $a->name = "Joanne Kathleen";
        $a->surname = "Rowling";
        $a->country = "UK";
        $a->save();
    }
}
