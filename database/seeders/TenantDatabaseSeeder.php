<?php

namespace Database\Seeders;

use AddCouponsSettings;
use AddCurrencies;
use AddDiscountSettings;
use AddEnrollmentsSettings;
use AddExpirationSettings;
use AddGeneralSettings;
use AddGuestAccessSettings;
use AddInstallmentSettings;
use AddInvoiceSettings;
use AddNotificationsSettings;
use AddProductCatalogSettings;
use AddProductSettings;
use AddRefundSettings;
use AddSalesSettings;
use AddSubscriptionsSettings;
use AddTaxesSettings;
use AddVendorSettings;
use AddWaitlistSettings;
use CanPermissions;
use ChnangeDefaultOrderIDTONull;
use Database\Seeders\Tenant\AddCategorySeed;
use Database\Seeders\tenant\AddUsersSeed;
use Database\Seeders\tenant\UsersTableSeeder;
use DeleteSomeSettings;
use DisabledMyCoursesSeeder;
use GenerateNotificationsTemplates;
use Illuminate\Database\Seeder;
use ManagePermissions;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(AddUsersSeed::class);
//        $this->call(AddCategorySeed::class);
    }
}
