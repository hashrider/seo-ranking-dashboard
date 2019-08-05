<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@black.com',
            'role_id' => 1,
        ]);

        factory(App\User::class)->create([
            'id' => 2,
            'name' => 'Creator',
            'email' => 'creator@black.com',
            'role_id' => 2,
        ]);

        factory(App\User::class)->create([
            'id' => 3,
            'name' => 'Member',
            'email' => 'member@black.com',
            'role_id' => 3,
        ]);
    }
}
