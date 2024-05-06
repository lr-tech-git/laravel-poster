<?php
namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AddTenantsSeed extends Seeder
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

        $appUrl = parse_url(config('app.url'));

        foreach ($cities as $cityKey => $cityName) {
            if (!Tenant::where('id', $cityKey)->exists()) {
                $tenant1 = \App\Models\Tenant::create(['id' => $cityKey]);

                $tenant1->update([
                    'id' => $cityName
                ]);

                $tenant1->domains()->create(['domain' => $cityKey . '.' . $appUrl['host']]);
            }
        }
    }
}
