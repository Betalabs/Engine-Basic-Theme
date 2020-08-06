<?php

use EngineLayoutBase\Database\Seeds\DatabaseSeeder as EngineLayoutBaseDatabaseSeeder;
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
        $this->call(EngineLayoutBaseDatabaseSeeder::class);
    }
}
