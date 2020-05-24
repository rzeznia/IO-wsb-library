<?php

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = ["Media Rodzina", "Jajco Publishing"];
        foreach($a as $d){
            $p = new Publisher();
            $p->name = $d;
            $p->save();
        }
    }
}
