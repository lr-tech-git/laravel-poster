<?php
namespace Database\Seeders\tenant;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AddUsersSeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'City1' => 'city1',
            'City2' => 'city2',
            'City3' => 'city3',
            'City4' => 'city4',
            'City5' => 'city5'
        ];

        $tenantKey = Arr::get($cities, tenant('id'));

        $users = [
            [
                'email' => "admin_$tenantKey@gmail.com",
                'password' => Hash::make('password'),
                'tenant_id' => $tenantKey,
            ]
        ];

        Role::create(['name' => 'user', 'guard_name' => 'web']);
        $role = Role::create(['name' => 'admin', 'guard_name' => 'web']);

        foreach ($users as $dataUser) {
            $user = User::create($dataUser);
            $user->assignRole($role);
        }
    }
}
