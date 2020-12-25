<?php

namespace Modules\User\Database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Modules\User\Models\User;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') !== 'local') return;

        Model::unguard();

        User::factory()->create(['login' => 'admin', 'password' => Hash::make('123')]);
        User::factory()->count(10)->create();
    }
}
