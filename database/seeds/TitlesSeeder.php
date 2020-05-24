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
            "Harry Potter i Czara Ognia",
            "Harry Potter i Zakon Penixa",
            "Harry Potter i Ksiąze Półkrwi",
            "Harry Potter i Opel Insignia Śmierci",
        ];
        foreach($titles as $title){
            $t = new Title();
            $t->title = $title;
            $t->author_id = 1;
            $t->save();
        }
    }
}
