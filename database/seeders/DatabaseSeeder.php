<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Database\seeders\UserDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seeders = [];

        if (\Module::find('User')->isEnabled()) $seeders[] = UserDatabaseSeeder::class;

        $this->call($seeders);
    }
}
