<?php

namespace Database\Seeders\tenant;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory()->count(15)->create();

        foreach ($users as $user) {
            $user->assignRole('user');
        }
    }
}
