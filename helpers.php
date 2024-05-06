<?php

use App\Models\Tenant;

/**
 * @return Tenant
 * @throws Exception
 */
function tenantsList(): Tenant
{
    return Tenant::get();
}

/**
 * @param int $tenantId
 * @return bool
 */
function setTenant($tenantId): bool
{
    if ($tenant = Tenant::find($tenantId)) {
        tenancy()->initialize($tenant);

        return true;
    }

    return false;
}

/**
 * @return void
 */
function logoutTenant(): void
{
    if (tenant()) {
        tenancy()->end();
    }
}

/**
 * @param string $key
 * @param null|string $category
 * @return mixed
 */
function getSetting(string $key, string $category = null): mixed
{
    //TODO: get Settings from DB.
    return $key;
}
