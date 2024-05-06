<?php
namespace Database\Seeders\Tenant;

use App\Models\Categories;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AddCategorySeed extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Будинок',
            'Двір',
            'Вулиця',
            'Громадський транспорт',
            'Заклад освіти',
            'Медустанова',
            'Торгівля',
        ];

        foreach ($categories as $category) {
            Categories::updateOrCreate(['name' => $category], ['name' => $category]);
        }
    }
}
