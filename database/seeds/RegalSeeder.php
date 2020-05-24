<?php

use App\Models\Regal;
use Illuminate\Database\Seeder;

class RegalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rels = 1;
        while($rels < 10){
            $regal = new Regal();
            $regal->name = "Regal_".$rels;
            $regal->save();
            $rels += 1;
        }
    }
}
