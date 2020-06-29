<?php

use App\Models\Title;
use Illuminate\Database\Seeder;

class TitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            "Harry Potter i Kamień Filozoficzny",
            "Harry Potter i Komnata Tajemnic",
            "Harry Potter i Więzień Sztumu",
        ];
        foreach($titles as $title){
            $t = new Title();
            $t->title = $title;
            $t->author_id = 1;
            $t->save();
        }
    }
}
