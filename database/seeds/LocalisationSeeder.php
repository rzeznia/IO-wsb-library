<?php

use App\Models\Localisation;
use App\Models\Regal;
use Illuminate\Database\Seeder;

class LocalisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regals = Regal::get();
        foreach($regals as $regal){
            $shelf = 1;
            while($shelf < 10){
                $position = 1;
                while($position < 10){
                    $loc = new Localisation();
                    $loc->regal_id = $regal->id;
                    $loc->shelf = $shelf;
                    $loc->position = $position;
                    $loc->save();
                    $position += 1;
                }
                $shelf += 1;
            }
            
        }
    }
}
