<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return User::class;
    }

    /**
     * @param int $userId
     * @param array $data
     * @return mixed
     */
    public function createProfile(int $userId, array $data):mixed
    {
        $model = $this->updateOrCreate(['id' => $userId],[
            'surname' => $data['surname'],
            'name' => $data['name'],
            'tenant_id' => $data['tenant'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

         app(UserInfoRepository::class)->updateOrCreate(
             ['user_id' => $model->id],
             [
                 'first_name' => $data['name'],
                 'last_name' => $data['surname'],
             ],
         );

         if ($role = Role::where('name', 'user')->first()) {
             $model->assignRole($role);
         }

         return $model;
    }
}
