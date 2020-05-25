<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(PublishersSeeder::class);
        $this->call(TitlesSeeder::class);
        $this->call(RegalSeeder::class);
        $this->call(LocalizationSeeder::class);
    }
}
