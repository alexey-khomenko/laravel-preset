<?php

namespace Modules\User\Database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // todo seeder
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
